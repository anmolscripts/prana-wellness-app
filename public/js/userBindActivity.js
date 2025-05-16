const extractDateAndTime = (datetimeStr) => {
    const dateObj = new Date(datetimeStr);

    if (isNaN(dateObj)) {
        return { error: "Invalid date format" };
    }

    // const date = dateObj.toISOString().split("T")[0]; // yyyy-mm-dd
    const date = dateObj.toISOString().split("T")[0].split("-").reverse().join("-");
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

        //   let {date , time }  =  extractDateAndTime(element.activity_date)
            let tr = document.createElement("tr");
            const { date, time } = extractDateAndTime(element.activity_date);
            const stateBadge = element.state === "active" ? "bg-label-primary" : "bg-label-danger";
            const typeBadge = element.type === "time" ? "bg-label-warning" : "bg-label-info";

            console.log(element.userActivityDate)

            let type = ""
            let logged_duration = ""
            let logged_value = ""

            if(element.type != "time")
            {
                type = "Yes/No"

                if(element.logged_value == 1)
                {
                    logged_value = "Yes"
                }

                else
                {
                    logged_value = "No"
                }
            }
            else
            {
                type = "Time"
                logged_duration = element.logged_duration
                logged_value = ""
            }


            tr.innerHTML = `
                  <td>${index + 1}</td>
                  <td>${element.name}</td>
                  <td class="text-center"><span class="badge ${typeBadge} me-1">${type.toUpperCase()}</span></td>
                  <td class="text-center"><span class="badge ${stateBadge} me-1">${logged_duration}</span></td>
                  <td>${logged_value}</td>
                  <td>${element.score}</td>
                  <td>${date}</td>
                  <td>${time}</td>
                  <td>
                  
                  <div class="dropdown">
                      <button activity-id = "${element.activity_id}"   data-bs-toggle="modal"
                              data-bs-target="#modalToggle" type="button" class="btn btn-danger" data-bs-toggle="dropdown">
                          <i class="icon-base bx bx-trash text-white"></i> 
                              Delete
                      </button>
                  </div>
                 </td>
              `;
            tbody.appendChild(tr);
           
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
//<td>${element.userActivityDate}</td>