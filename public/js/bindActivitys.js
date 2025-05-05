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
  console.log("activity", activitys);
  
  tbody.innerHTML = "";
  if (activitys.length !== 0) {
    
    activitys.forEach((element, index) => {
        let tr = document.createElement("tr");
      const { date, time } = extractDateAndTime(element.created_at);
      const stateBadge = element.state === "active" ? "bg-label-primary" : "bg-label-danger";
      const typeBadge = element.type === "time" ? "bg-label-warning" : "bg-label-info";
      tr.innerHTML = `
                <td>${index + 1}</td>
                <td>${element.name}</td>
                <td class="text-center"><span class="badge ${typeBadge} me-1">${element.type.toUpperCase()}</span></td>
                <td class="text-center"><span class="badge ${stateBadge} me-1">${element.state.toUpperCase()}</span></td>
                <td>${element.min_duration}</td>
                <td>${element.max_duration}</td>
                <td>${date}</td>
                <td>${time}</td>
                <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="icon-base bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a data-id="${element.id}" data-operation="delete" class="dropdown-item" href="javascript:void(0);">
                            <i class="icon-base bx bx-edit-alt me-1"></i> 
                            Edit
                        </a>
                        <a data-id="${element.id}" data-operation="delete" class="dropdown-item" href="javascript:void(0);">
                            <i class="icon-base bx bx-trash me-1"></i> 
                            Delete
                        </a>
                    </div>
                </div>
               </td>
            `;
      tbody.appendChild(tr);
      console.log(element);
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
