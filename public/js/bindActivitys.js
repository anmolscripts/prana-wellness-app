const displayNone = (element, time) => {
  setTimeout(() => {
    element.classList.add("d-none");
  }, time);
};

const activitysData = [];
const activities = {
  add: (btn, quill) => {
    const contentHtml = quill.root.innerHTML; // Get HTML content
    const name = document.getElementById("nameLarge");
    const status = document.getElementById("status");
    const minTime = document.getElementById("minTime");
    const maxTime = document.getElementById("maxTime");
    const type = document.getElementById("type");
    const aleartContainer = document.getElementById("aleartContainer");
    if (name.value === "") {
      name.classList.add("is-invalid");
      return;
    } else {
      name.classList.remove("is-invalid");
    }

    const typeValue = type.value;
    if (typeValue === "time") {
      if (minTime.value === "") {
        minTime.classList.add("is-invalid");
        return;
      } else {
        minTime.classList.remove("is-invalid");
      }

      if (maxTime.value === "") {
        maxTime.classList.add("is-invalid");
        return;
      } else {
        maxTime.classList.remove("is-invalid");
      }
    }
    const spinner = btn.querySelector(".spinner-border");
    const text = btn.querySelector(".text");

    spinner.classList.remove("d-none");
    text.classList.add("d-none");
    fetch("../api/activities/add.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: new URLSearchParams({
        name: name.value,
        type: typeValue,
        status: status.value,
        minTime: minTime.value,
        maxTime: maxTime.value,
        description: contentHtml,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Success:", data);
        spinner.classList.add("d-none");
        text.classList.remove("d-none");
        if (data.success) {
          const aleart = aleartContainer.querySelector('[role="alert"]');
          aleart.classList.remove("alert-danger");
          aleart.classList.add("alert-primary");
          aleart.innerText = "Activity added successfully!";
          aleartContainer.classList.remove("d-none");
          displayNone(aleartContainer, 2000);
          location.reload();
        } else {
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      })
      .finally(() => {
        spinner.classList.add("d-none");
        text.classList.remove("d-none");
      });
  },
  getAll: () => {
    fetch("../api/activities/get.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        activitysData.push(...data.activity);
        console.log("Success:", data);
        if (data.success) {
          bindActivitys(data.activity, document.getElementById("actiityTbody"));
          const aleart = aleartContainer.querySelector('[role="alert"]');
          aleart.classList.remove("alert-danger");
          aleart.classList.add("alert-primary");
          aleart.innerText = "Activity Loaded successfully!";
          aleartContainer.classList.remove("d-none");
          displayNone(aleartContainer, 2000);
          // location.reload();
        } else {
        }
        // console.log('activity Data', activitysData);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  },
  delete: (element) => {
    const aleartContainer = document.getElementById("aleartContainer");
    const id = element.getAttribute("data-id");
    console.log("delete", activitysData, id);
    const activity = activitysData.filter((activity) => activity.id === id);
    if (activity.length > 0) {
      fetch("../api/activities/delete.php", {
        method: "DELETE",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body: new URLSearchParams({
          id: activity[0].id,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          console.log("Success:", data);
          if (data.success) {
            const aleart = aleartContainer.querySelector('[role="alert"]');
            aleart.classList.add("alert-danger");
            aleart.classList.remove("alert-primary");
            aleart.innerText = "Activity deleted successfully!";
            aleartContainer.classList.remove("d-none");
            displayNone(aleartContainer, 2000);
            location.reload();
          } else {
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  },
};

const extractDateAndTime = (datetimeStr) => {
  const dateObj = new Date(datetimeStr);

  if (isNaN(dateObj)) {
    return { error: "Invalid date format" };
  }

  const date = dateObj.toISOString().split("T")[0]; // yyyy-mm-dd
  let hours = dateObj.getHours();
  const minutes = String(dateObj.getMinutes()).padStart(2, "0");
  const ampm = hours >= 12 ? "PM" : "AM";

  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'

  const time = `${hours}:${minutes} ${ampm}`;

  return { date, time };
};

const bindActivitys = (activitys, tbody) => {
  // activitys = [];
  // console.log("activity", activitys);

  tbody.innerHTML = "";
  if (activitys.length !== 0) {
    activitys.forEach((element, index) => {
      let tr = document.createElement("tr");
      tr.setAttribute("id", element.id);
      const { date, time } = extractDateAndTime(element.created_at);
      const stateBadge =
        element.state === "active" ? "bg-label-primary" : "bg-label-danger";
      const typeBadge =
        element.type === "time" ? "bg-label-warning" : "bg-label-info";
      tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${element.name}</td>
                <td class="text-center"><span class="badge ${typeBadge} me-1">${element.type.toUpperCase()}</span></td>
                <td class="text-center"><span class="badge ${stateBadge} me-1">${element.state.toUpperCase()}</span></td>
                <td>${element.min_duration}</td>
                <td>${element.max_duration}</td>
                <td>${date}</td>
                <td>${time}</td>
                <td class="text-center">
                <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="icon-base bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a data-id="${element.id}" onclick="openEditModel(this)" data-name="${element.name}" class="dropdown-item" href="javascript:void(0);"
                                ><i class="icon-base bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a data-name="${element.name}" data-id="${
        element.id
      }" onclick="openDeleteModal(this)" class="dropdown-item" href="javascript:void(0);"
                                ><i class="icon-base bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                
               </td>
            `;
      tbody.appendChild(tr);
      // console.log(element);
    });
  } else {
    let tr = document.createElement("tr");
    tr.innerHTML = `<td colspan="9" class="text-center">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">No activity found</h4>
                        <p class="mb-0">You can create a new activity by clicking the button above.</p>
                    </div>
                </td> `;
    tbody.appendChild(tr);
  }
};

const openDeleteModal = (element) => {
  //
  const model = document.getElementById("deleteModel");
  model.querySelector("#deleteActiviteName").innerText =
    element.getAttribute("data-name");
  model
    .querySelector("#deleteBtn")
    .setAttribute("data-id", element.getAttribute("data-id"));
  const myModal = new bootstrap.Modal(model);
  myModal.show();
};
