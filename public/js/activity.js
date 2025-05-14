const openModel = (
  activityModelId,
  quill,
  operation = "add",
  activity = [],
  id = ""
) => {
  const addActiviteModal = document.getElementById(activityModelId);
  if (operation == "add") {

    addActiviteModal.querySelector(".modal-title").innerText = "Add Activity";
    addActiviteModal.querySelector("#nameLarge").value = "";
    addActiviteModal.querySelector("#type").value = "time";
    addActiviteModal
      .querySelector("#timeOptionContainer")
      .classList.remove("d-none");
    addActiviteModal.querySelector("#status").value = "active";
    addActiviteModal.querySelector("#minTime").value = "";
    addActiviteModal.querySelector("#maxTime").value = "";
    quill.setText('');
    // addActiviteModal.querySelector("#editor").innerHTML = " ";
    addActiviteModal.querySelector("#subminBtn .text").innerText = "Add";
    addActiviteModal
      .querySelector("#subminBtn")
      .setAttribute("onclick", "activities.add(this, quill)");

  } else if (operation == "edit") {

    addActiviteModal.querySelector(".modal-title").innerText = "Edit Activity";
    addActiviteModal.querySelector("#nameLarge").value = activity.name;
    addActiviteModal.querySelector("#type").value = activity.type;
    activity.type == "time"
      ? addActiviteModal
          .querySelector("#timeOptionContainer")
          .classList.remove("d-none")
      : addActiviteModal
          .querySelector("#timeOptionContainer")
          .classList.add("d-none");
    addActiviteModal.querySelector("#status").value = activity.state;
    addActiviteModal.querySelector("#minTime").value = activity.min_duration;
    addActiviteModal.querySelector("#maxTime").value = activity.max_duration;
    quill.clipboard.dangerouslyPasteHTML(activity.description);
    // quill.setContents([activity.description]);
    addActiviteModal.querySelector("#subminBtn .text").innerText = "Update";
    addActiviteModal.querySelector("#subminBtn").setAttribute("data-id", id);
    addActiviteModal
      .querySelector("#subminBtn")
      .setAttribute("onclick", "activities.update(this, quill)");

  }

  var myModal = new bootstrap.Modal(addActiviteModal);
  myModal.show();
};
