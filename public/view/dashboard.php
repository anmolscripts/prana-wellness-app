<?php #session_start(); 
?>
<?php

require_once('../../functions/auth.php');

requireLogin();
?>
<?php include_once '../layout/header.php'; ?>
<?php

require_once '../../functions/db.php';
require_once '../../functions/userFunctions/activity_user_chart.php';
require_once '../../functions/userFunctions/userUtility.php';
require_once '../../functions/fetchLayoutSetting.php';

$userId = $_SESSION['user']['id'];
$pdo = getConnection();
// $result = getMonthlyActivityAdditions($pdo);

$getActivityUsageData = getUserActivityUsageData($pdo, $userId);


$getActivityUsageStats = getActivityUsageStats($pdo, $dbname, 'user_activities', 'activity', $userId);
// $userCount = getUsersCount($pdo, $dbname, 'users');

// $getActivityUsageStatsWeekly = getActivityUsageStatsWeekly($pdo, $dbname, 'user_activities', 'activity');
$getAllActivityes = getAllActivityes($pdo, $dbname, $userId, 'activity');

$userGoals = [];
foreach ($getAllActivityes as $activity) {
  if ($activity['is_goal_set']) {
    array_push($userGoals, $activity);
  }
}
$getSilderData = fetchLayoutData('homepage_carousel', get_base_url() . "/api/layout/get.php");
?>

<script>
  console.log('getSilderData', <?php echo json_encode($getSilderData); ?>)
</script>
<style>
  .alert-container {
    top: -5rem;
    animation: slideIn 3s ease 1 forwards;
  }

  @keyframes slideIn {
    0% {
      top: -5rem;
    }

    15% {
      top: 0px;
    }

    85% {
      top: 0px;
    }

    100% {
      top: -5rem;
    }
  }

  .accordion .accordion-button:not(.collapsed)::after {
    background: #fff !important;
  }

  .slider-height {
    height: 12rem;
  }

  @media (min-width:767px) {
    .slider-height {
      height: 35rem;
    }
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">


      <?php if ($getSilderData['success'] && isset($getSilderData['data']) && $getSilderData['data']['is_active']): ?>
        <div class="col-xxl-12 mb-6">
          <div id="carouselExample" class="carousel slide rounded-3 shadow-lg overflow-hidden slider-height" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <?php foreach ($getSilderData['data']['settings']['images'] as $i => $img): ?>
                <button
                  type="button"
                  data-bs-target="#carouselExample"
                  data-bs-slide-to="<?= $i ?>"
                  class="<?= $i === 0 ? 'active' : ''; ?>"
                  aria-current="true"
                  aria-label="Slide <?= $i ?>"></button>
              <?php endforeach; ?>
            </div>
            <div class="carousel-inner">
              <?php foreach ($getSilderData['data']['settings']['images'] as $i => $img): ?>
                <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
                  <img class="d-block w-100" src="http://localhost:9090/<?= BASE_URL ?>public/uploads/layout/<?= $img ?>" loading="lazy" decoding="async" alt="First slide" />
                </div>
              <?php endforeach; ?>


            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div>
        </div>
      <?php endif; ?>



      <div class="col-xxl-12 mb-6 order-0">
        <div class="card">
          <div class="d-flex align-items-start row">
            <div class="col-sm-7">
              <div class="card-body p-0 p-md-4">
                <div class="card overflow-hidden" style="max-height: 500px">
                  <div class="d-flex justify-content-between align-items-center gap-3 px-5 shadow-lg">
                    <h5 class="card-title fs-3 text-primary mb-3">Congratulations John! 🎉</h5>

                    <a href="javascript:;" data-bs-toggle="modal"
                      data-bs-target="#addGoalsModal" class="btn btn-warning my-3">Add Goles</a>
                  </div>
                  <div class="card-body p-1 m-md-4" id="vertical-example">




                    <?php if (!empty($userGoals)): ?>
                      <div class="accordion" id="accordionExample">
                        <?php foreach ($userGoals as $index => $gols): ?>
                          <div class="accordion-item shadow-lg <?= $index == 0 ? 'active' : ''; ?>">
                            <h2 class="accordion-header" id="heading<?= $gols['activity_id']; ?>">
                              <button
                                type="button"
                                class="accordion-button bg-primary text-white"
                                data-bs-toggle="collapse"
                                data-bs-target="#accordian<?= $gols['activity_id']; ?>"
                                aria-expanded="true"
                                aria-controls="accordian<?= $gols['activity_id']; ?>">
                                <?= $gols['activity_name']; ?>
                              </button>
                            </h2>

                            <div
                              id="accordian<?= $gols['activity_id']; ?>"
                              class="accordion-collapse collapse <?= $index == 0 ? 'show' : ''; ?>"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <?php if ($gols['activity_description']): ?>
                                  <?= $gols['activity_description']; ?>
                                <?php else: ?>
                                  <div class="alert alert-dark mt-5" role="alert">Description will add soon.</div>
                                <?php endif; ?>
                              </div>
                            </div>

                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php else: ?>
                      <div class="alert alert-danger mt-5" role="alert">No Goals is Set, Please add goals</div>
                    <?php endif; ?>
                  </div>
                </div>



              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left align-self-center">
              <div class="card-body pb-0 px-0 px-md-6">
                <img src="public/assets/img/illustrations/yoga.png" class="w-100 h-auto"
                  alt="View Badge User" />
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- my activity -->

      <div class="col-xxl-12 mb-6 order-0">
        <div class="card">
          <div class="d-flex justify-content-between align-items-center pe-5">
            <h5 class="card-header">Activities Table</h5>

            <button type="button" class="btn rounded-pill btn-primary" data-bs-toggle="modal"
              data-bs-target="#addActiviteModal">
              <span class="icon-base bx bx-plus icon-sm me-2"></span>Add Activite

            </button>

          </div>
          <div id="activitesTable" class="table-responsive text-nowrap max-h-30 ">
            <table class="table table-borderless">
              <thead class="position-sticky top-0 table-dark ">
                <tr>
                  <th>S No.</th>
                  <th>Activite Name</th>
                  <th>Type</th>
                  <th>Time Duration</th>
                  <th>Yes/No</th>
                  <th>Score</th>
                  <!-- <th>Activity Performance Date</th> -->
                  <th>Date</th>
                  <th>Time</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="actiityTbody" class="table-border-bottom-0">
                <tr>
                  <td colspan="9" class="text-center">
                    <div class="spinner-border text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>



      <div class="col-lg-4 col-md-6">
        <!-- <small class="fw-medium">Toggle Between Modals</small> -->
        <div class="mt-4">
          <!-- <button
                              type="button"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#modalToggle">
                              Launch modal
                            </button> -->

          <!-- Modal 1-->
          <div
            class="modal fade"
            id="modalToggle"
            aria-labelledby="modalToggleLabel"
            tabindex="-1"
            style="display: none"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div style="padding: 2rem;" class="modal-content">
                <div class="modal-header">

                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div style="text-align: center; font-size: 20px;" class="modal-body">
                  Are You Sure , You Want to delete Activity
                </div>
                <div style="display: flex; align-items: center; justify-content: center; column-gap: 2rem;" class="">
                  <button
                    onclick="deleteUserActivity()"
                    class="btn btn-danger"
                    data-bs-toggle="modal"
                    data-bs-dismiss="modal">
                    Delete

                  </button>

                  <button
                    class="btn btn-primary "

                    data-bs-toggle="modal"
                    data-bs-dismiss="modal">
                    Cancel
                  </button>


                </div>
              </div>
            </div>
          </div>
          <!-- Modal 2-->
          <div
            class="modal fade"
            id="modalToggle2"
            aria-hidden="true"
            aria-labelledby="modalToggleLabel2"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalToggleLabel2">Modal 2</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Hide this modal and show the first with the button below.
                </div>
                <div class="modal-footer">
                  <button
                    class="btn btn-primary"
                    data-bs-target="#modalToggle"
                    data-bs-toggle="modal"
                    data-bs-dismiss="modal">
                    Back to first
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="modal fade" id="addActiviteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel3">Add Activity</h5>
              <button type="button" class="btn-close  text-white bg-dark" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="d-flex gap-2 mb-3">

                <!-- <div class="row"> -->
                <div class="w-100">
                  <label for="activitySelect" class="form-label">Activity Name</label>
                  <select id="activitySelect" class="form-control w-100">
                    <option value="none">Select Activity</option>
                  </select>
                </div>
                <!-- </div> -->


                <div style="display: none;" id="yesNoBox" class="w-25">
                  <label for="status" class="form-label">Select Yes Or No</label>
                  <select class="form-select" id="status" aria-label="Default select example">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </div>


                <div class="w-25" id="timeOptionContainer" style="display:none;">
                  <div class="">
                    <label for="minTime" class="form-label">Time Duration</label>
                    <input type="number" id="minTime" class="form-control" placeholder="Enter Time Duration" />
                  </div>
                </div>

              </div>

              <div style="display: none;" id="addActivity">

                <button type="button" onclick="addActivity(this)" class="btn btn-primary d-grid w-25">
                  <span class="text">Add</span>
                </button>

              </div>


              <div style="margin-top: 2rem;" id="userAddedActivity">

              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-label-secondary text-danger" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" onclick="activitySubmit(this)" class="btn btn-primary d-grid w-25">
                <div class="spinner-border text-light d-none" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <span class="text">Submit</span>
              </button>
            </div>
          </div>
        </div>
      </div>



      <!-- Goals Modal -->
      <div class="modal fade" id="addGoalsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header shadow-xl pb-3">
              <h5 class="modal-title" id="exampleModalLabel3">Add Daily Goals</h5>
              <button type="button" class="btn-close  text-white bg-dark" data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row ">
                <?php if (!empty($getAllActivityes)): ?>
                  <div class="accordion" id="accordionUpdateGoals">
                    <?php foreach ($getAllActivityes as $index => $activity): ?>
                      <div class="accordion-item shadow-lg <?= $index == 0 ? 'active' : ''; ?>">
                        <h2 class="accordion-header" id="headi  ng<?= $activity['activity_id']; ?>">

                          <button
                            type="button"
                            class="accordion-button"
                            data-bs-toggle="collapse"
                            data-bs-target="#accordian<?= $activity['activity_id']; ?>"
                            aria-expanded="true"
                            aria-controls="accordian<?= $activity['activity_id']; ?>">
                            <div class="form-check col-12">
                              <input class="form-check-input goalsCheckbox" type="checkbox" value="<?= $activity['activity_id'] ?>" id="checkBox<?= $activity['activity_id'] ?>" <?= $activity['is_goal_set'] ? 'checked' : '' ?>>
                              <?= $activity['activity_name'] ?>
                            </div>
                          </button>
                        </h2>

                        <div
                          id="accordian<?= $activity['activity_id']; ?>"
                          class="accordion-collapse collapse <?= $index == 0 ? 'show' : ''; ?>"
                          data-bs-parent="#accordionUpdateGoals">
                          <div class="accordion-body">
                            <?php if ($activity['activity_description']): ?>
                              <?= $activity['activity_description'] ?>
                            <?php else: ?>
                              <div class="alert alert-dark mt-5" role="alert">Description will add soon.</div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>


              </div>


            </div>
            <div class="modal-footer shadow-xl pt-3">
              <button type="button" class="btn btn-label-secondary text-danger" data-bs-dismiss="modal">
                Close
              </button>
              <button type="button" onclick="updateGoals(this)" class="btn btn-primary d-grid w-25">
                <div class="spinner-border text-light d-none" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
                <span class="text">Submit</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Model -->


      <!-- delete pop up show -->

      <!-- aactvitity histrory -->

      <div cclass="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-5 ">
        <div class="card">
          <h3 class="fs-4 text-center">Activity Uses History</h3>
          <div class="row g-0">


            <div class="col-lg-8">
              <div class="card-body">
                <div class=" mt-0">

                  <div class="card">
                    <div id="activitesTable" class="table-responsive max-h-30 rounded-5">
                      <table class="table table-dark table-borderless table-striped ">
                        <thead class="position-sticky top-0 ">
                          <tr>
                            <th width="75px">S No.</th>
                            <th>Activite</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">%</th>
                          </tr>
                        </thead>
                        <tbody id="actiityTbody" class="table-border-bottom-0">

                          <?php
                          $activites = $getActivityUsageStats['activities'];
                          if (!empty($activites)):
                            foreach ($activites as $index => $activity):
                          ?>
                              <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $activity['activity_name']; ?></td>
                                <td class="text-center"> <span class="badge <?php echo $activity['activity_type'] == 'time' ? 'bg-label-warning' : 'bg-label-info'; ?> me-1"><?php echo strtoupper($activity['activity_type']); ?></span></td>
                                <td>
                                  <span class="badge rounded-pill bg-danger ms-auto fs-6"><?php echo $activity['percentage']; ?>%</span>
                                </td>
                              </tr>

                          <?php endforeach;
                          endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 align-self-center">
              <div class="card-body">
                <div id="activityDonutChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Total Revenue -->

      <!--/ Total Revenue -->

    </div>

    <div id="aleartContainer" class="position-fixed d-flex justify-content-center w-100 pt-5 alert-container d-none"
      style="z-index: 9999;">
      <div class="alert alert-primary shadow-lg" role="alert">This is a primary alert — check it out!</div>
    </div>

  </div>
  <!-- / Content -->


  <?php include_once '../layout/footer.php'; ?>



  <script src="public/assets/js/extended-ui-perfect-scrollbar.js"></script>

  <script>
    const logout = () => {
      fetch('api/auth/logout.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded', // or 'application/json' if you prefer
          },
        })
        .then(response => response.json()) // or response.text() if PHP returns plain text
        .then(data => {
          // console.log('Success:', data);
          window.location.href = '/prana-wellness-app'; // Redirect to index.php after logout
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    // fetch Activities
    const select = document.getElementById('activitySelect');
    const timeOptionContainer = document.getElementById("timeOptionContainer")
    const yesNoBox = document.getElementById("yesNoBox")
    const addActivityBtn = document.getElementById("addActivity")

    const activityTime = document.getElementById("minTime")

    let allactivityNames = "";

    const fetchAllActvity = async () => {

      try {
        let allActvity = await fetch("api/activities/get.php")
        allActvity = await allActvity.json()

        allActvity = allActvity.activity
        allactivityNames = allActvity


        let options = '';
        allActvity.map(activity => {
          options += `<option type = "${activity.type}"  value="${activity.id}">${activity.name}</option>`;
        });

        select.innerHTML += options;
      } catch (error) {

        console.log("error", error)

      }
    }

    fetchAllActvity()



    select.addEventListener("change", () => {



      actvityAditionOnModal()

    });

    const actvityAditionOnModal = () => {
      let selectedOption = select.options[select.selectedIndex];
      let type = selectedOption.getAttribute('type');
      let selectedOptionValue = selectedOption.value
      debugger;
      if (selectedOptionValue != "none") {
        if (type == "time") {
          timeOptionContainer.style.display = "block"
          yesNoBox.style.display = "none"
          addActivityBtn.style.display = "block"

        } else {
          yesNoBox.style.display = "block"
          timeOptionContainer.style.display = "none"
          addActivityBtn.style.display = "block"

        }
      } else {
        timeOptionContainer.style.display = "none"
        yesNoBox.style.display = "none"
        addActivityBtn.style.display = "none"

      }

    }

    const userAddedActivity = document.getElementById("userAddedActivity")
    const addActivity = () => {

      let selectedOption = select.options[select.selectedIndex];
      let selectedOptionValue = selectedOption.value
      if (selectedOptionValue == "none") {
        return

      }




      const activityYesNo = document.getElementById("status").value
      let type = selectedOption.getAttribute('type');
      let activityName = selectedOption.innerHTML;
      let activityId = selectedOption.value;

      let activityTypeValue = ""
      let activitydata
      let actvityType = ""

      if (type == "time") {
        if (activityTime.value < 0 || activityTime.value == null || activityTime.value == "") {
          alert("Please enter activity duration")
          return
        }


        let value = activityTime.value
        activityTypeValue = `<input type="text"   activity-id="${activityId}" class="form-control me-2"  value="${value}" readonly />`
        activitydata = value
        actvityType = "time"
      } else {

        activityTypeValue = `<input type="text"  activity-id="${activityId}" value="${activityYesNo}" class="form-control me-2" readonly />`;
        activitydata = activityYesNo
        actvityType = "boolean"
      }

      userAddedActivity.innerHTML += `
  <div data-activityId = "${activityId}" class="row w-100 mb-2">
  <div class="col-9">
    <input  type="text" activity-type = "${actvityType}" data-activity = "${activitydata}" id="${activityId}" value="${activityName}" class="form-control  me-2 userAddedActivities" readonly /> 
  </div>
  <div class="col-2"> 
  ${activityTypeValue}
  </div>

  <div class="col-1" > 
  <button activityId="${activityId}" class="btn btn-danger minusBtn"><i class='bx bxs-trash-alt text-white fs-5 pe-none'></i></button>

  </div>
    
    
  </div>`;


      const valueToRemove = activityId; // replace with the value you want to remove

      const optionToRemove = Array.from(select.options).find(option => option.value === valueToRemove);

      if (optionToRemove) {
        select.removeChild(optionToRemove);
      }

      timeOptionContainer.style.display = "none"
      yesNoBox.style.display = "none"

    }

    const activitySubmit = async () => {
      const inputs = document.querySelectorAll('input.userAddedActivities');
      const session = <?php echo json_encode($_SESSION['user']); ?>;
      const userAddedActivity = Array.from(inputs).map(input => ({
        activity: input.getAttribute('data-activity'),
        id: input.id,
        value: input.value,
        userId: session.id,
      }));

      try {
        let result = await fetch("api/activities/addUser.php", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({
            userAddedActivity: JSON.stringify(userAddedActivity)

          })
        })

        result = await result.json()

        alert("actvity successfully added")
        window.location.reload()
        console.log("activity", result);

      } catch (error) {

        console.log("error", error)

      }


    }


    document.addEventListener('click', function(e) {
      if (e.target.matches('.minusBtn')) {
        const icon = e.target;
        const activityId = icon.getAttribute('activityId');
        const parentDiv = document.querySelector(`[data-activityId="${activityId}"]`);
        if (parentDiv) {

          // console.log(parentDiv)

          const activityId = parentDiv.getAttribute('data-activityId');
          const input = document.getElementById(activityId);
          const activityType = input.getAttribute('activity-type');
          const id = input.id;
          const value = input.value;
          // console.log(input)

          let options = `<option type = "${activityType}"  value="${id}">${value}</option>`
          select.innerHTML += options;

          parentDiv.remove();
          console.log(`Removed div with activityId: ${activityId}`);
        } else {
          console.log(`No matching div found for activityId: ${activityId}`);
        }
      }
    });


    const userId = <?php echo json_encode($_SESSION['user']); ?>;

    const activities = {

      getAll: () => {
        fetch('api/activities/userAddedActivity.php', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/x-www-form-urlencoded',
            },

            body: new URLSearchParams({
              userId: userId.id
            })
          })
          .then(response => response.json())
          .then(data => {



            userSavedActivity = data.activity

            const merged = userSavedActivity.map(itemB => {
              const match = allactivityNames.find(itemA => itemA.id == itemB.activity_id);
              return {
                ...itemB,
                name: match ? match.name : null,
                type: match ? match.type : null


              };
            });


            // console.log(merged , "merged")

            if (data.success) {
              bindActivitys(merged, document.getElementById('actiityTbody'));
              const aleart = aleartContainer.querySelector('[role="alert"]');
              aleart.innerText = 'Activity added successfully!';
              aleartContainer.classList.remove('d-none');
              // location.reload();
            } else {

            }
          })
          .catch(error => {
            console.error('Error:', error);

          });
      }
    }



    let activity_id_delete = ""
    document.addEventListener("click", function(e) {
      const deleteBtn = e.target.closest("button[activity-id]");

      if (deleteBtn) {
        activity_id_delete = deleteBtn.getAttribute("activity-id");

        // deleteUserActivity(activityId);
      }
    });

    const deleteUserActivity = async () => {

      if (activity_id_delete == "") {
        alert("something went wrong")
        return;
      }

      try {
        let result = await fetch("api/activities/deleteUserActivity.php", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({
            userId: userId.id,
            activityId: activity_id_delete

          })
        })

        result = await result.json()
        console.log(result);
        window.location.reload()


      } catch (error) {

      }

    }

    document.addEventListener('DOMContentLoaded', function() {
      // Initialize DataTable
      activities.getAll();
    });
  </script>



  <!-- activity uses -->
  <script>
    console.log('testing', <?= json_encode($getActivityUsageData) ?>);
    const getActivityUsageData = <?php echo json_encode($getActivityUsageData); ?>;
    var options = {
      chart: {
        type: 'donut',
        height: 350
      },
      series: getActivityUsageData.data,
      labels: getActivityUsageData.labels,
      responsive: [{
        breakpoint: 480,
        options: {
          chart: {
            width: 300
          },
          legend: {
            position: 'bottom'
          }
        }
      }],
      legend: {
        show: false
      }
    };

    var chart = new ApexCharts(document.querySelector("#activityDonutChart"), options);
    chart.render();
  </script>


  <script>
    const displayNone = (element, time) => {
      setTimeout(() => {
        element.classList.add("d-none");
      }, time);
    };
    const updateGoals = async () => {

      const checkboxes = document.querySelectorAll('input[type="checkbox"].goalsCheckbox');
      const aleartContainer = document.getElementById("aleartContainer");

      const selectedGoals = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);
      console.log(JSON.stringify(selectedGoals));

      const session = <?= json_encode($_SESSION['user']); ?>;

      try {
        let result = await fetch("api/activities/updateGoals.php", {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: new URLSearchParams({
            user_id: session.id,
            goals: JSON.stringify(selectedGoals)
          })
        })

        result = await result.json();
        if (result.success) {
          const aleart = aleartContainer.querySelector('[role="alert"]');
          aleart.classList.remove("alert-danger");
          aleart.classList.add("alert-primary");
          aleart.innerText = "Goals Updated successfully!";
          aleartContainer.classList.remove("d-none");
          displayNone(aleartContainer, 2000);
          location.reload();
        }


        // alert(result.message);
        // window.location.reload()

      } catch (error) {

      }
    }
  </script>