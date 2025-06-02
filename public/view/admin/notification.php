<?php session_start() ?>


<?php include_once '../../layout/header.php'; ?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-align-top">
                    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
                        <li class="nav-item">
                            <a class="nav-link" href="account   "><i class="icon-base bx bx-user icon-sm me-1_5"></i> Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="javascript:void(0);"><i class="icon-base bx bx-bell icon-sm me-1_5"></i> Notifications</a>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <!-- Notifications -->
                    <div class="card-body">
                        <h5 class="mb-1">Recent Devices</h5>
                        <span class="card-subtitle">We need permission from your browser to show notifications.
                            <span class="notificationRequest"><span class="text-primary">Request Permission</span></span></span>
                        <div class="error"></div>
                    </div>

                    <!-- <form id="notificationTable" action="">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-nowrap">Type</th>
                                                        <th class="text-nowrap text-center">Email</th>
                                                        <th class="text-nowrap text-center">In Prana Website Account</th>
                                                        <th class="text-nowrap text-center">Push Notification</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-nowrap text-heading">Miss Daily Goals</td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck2" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck3" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap text-heading">Remainder for daily Goals</td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck4" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck5" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck6" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap text-heading">New Activity Added</td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck7" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck8" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-nowrap text-heading">Newslatter</td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck10" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                                                <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                        <div class="card-body">
                                            <h6 class="text-body mb-6">When should we send you notifications?</h6>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <select id="sendNotification" class="form-select" name="sendNotification">
                                                        <option value="online" selected>Only when I'm online</option>
                                                        <option value="anytime">Anytime</option>
                                                    </select>
                                                </div>
                                                <div class="mt-6">
                                                    <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                                    <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                                </div>
                                            </div>

                                        </div>

                                    </form> -->

                    <form id="notificationTable" action="">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-nowrap">Type</th>
                                        <th class="text-nowrap text-center">Email</th>
                                        <th class="text-nowrap text-center">In Prana Website Account</th>
                                        <th class="text-nowrap text-center">Push Notification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-nowrap text-heading">Miss Daily Goals</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0001" class="form-check-input" type="checkbox" data-type="miss_daily_goals" data-position="email" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0001" class="form-check-input" type="checkbox" data-type="miss_daily_goals" data-position="account" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0001" class="form-check-input" type="checkbox" data-type="miss_daily_goals" data-position="push" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Reminder for Daily Goals</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0002" class="form-check-input" type="checkbox" data-type="reminder_daily_goals" data-position="email" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0002" class="form-check-input" type="checkbox" data-type="reminder_daily_goals" data-position="account" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0002" class="form-check-input" type="checkbox" data-type="reminder_daily_goals" data-position="push" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">New Activity Added</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0003" class="form-check-input" type="checkbox" data-type="new_activity" data-position="email" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0003" class="form-check-input" type="checkbox" data-type="new_activity" data-position="account" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0003" class="form-check-input" type="checkbox" data-type="new_activity" data-position="push" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-heading">Newsletter</td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0004" class="form-check-input" type="checkbox" data-type="newsletter" data-position="email" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0004" class="form-check-input" type="checkbox" data-type="newsletter" data-position="account" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check d-flex justify-content-center align-items-center">
                                                <input notification-id="0004" class="form-check-input" type="checkbox" data-type="newsletter" data-position="push" />
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card-body">
                            <h6 class="text-body mb-6">When should we send you notifications?</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <select id="sendNotification" class="form-select" name="sendNotification">
                                        <option value="online">Only when I'm online</option>
                                        <option value="anytime">Anytime</option>
                                    </select>
                                </div>
                            </div>

                            <!-- ✅ Select All Checkbox -->
                            <div class="mt-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="selectAllCheckbox" />
                                    <label class="form-check-label" for="selectAllCheckbox">Select All / Unselect All</label>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-3">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary">Discard</button>
                            </div>
                        </div>
                    </form>




                    <!-- /Notifications -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->


    <div class="content-backdrop fade"></div>
</div>


<?php include_once '../../layout/footer.php'; ?>

<!-- Core JS -->

<script src="../public/assets/vendor/libs/jquery/jquery.js"></script>

<script src="../public/assets/vendor/libs/popper/popper.js"></script>
<script src="../public/assets/vendor/js/bootstrap.js"></script>

<script src="../public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="../public/assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->

<script src="../public/assets/js/main.js"></script>

<!-- Page JS -->

<!-- Place this tag before closing body tag for github widget button. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>



<script>
    const session = <?php echo json_encode($_SESSION['user']); ?>;

    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById("notificationTable");
        const selectAll = document.getElementById('selectAllCheckbox');
        const checkboxes = document.querySelectorAll('input.form-check-input[type="checkbox"]:not(#selectAllCheckbox)');

        // ✅ Select All / Unselect All
        selectAll.addEventListener('change', function() {
            checkboxes.forEach(cb => {
                cb.checked = selectAll.checked;
            });
        });

        // ✅ Keep Select All in sync if user manually unchecks/changes
        checkboxes.forEach(cb => {
            cb.addEventListener('change', () => {
                if (!cb.checked) {
                    selectAll.checked = false;
                } else {
                    const allChecked = Array.from(checkboxes).every(c => c.checked);
                    selectAll.checked = allChecked;
                }
            });
        });


        form.addEventListener("submit", function(e) {
            e.preventDefault();

            // Collect selected checkboxes
            const groupedData = {};

            checkboxes.forEach(cb => {
                const notificationId = cb.getAttribute("notification-id");
                const type = cb.getAttribute("data-type");
                const position = cb.getAttribute("data-position");
                const value = cb.checked;

                if (!groupedData[notificationId]) {
                    groupedData[notificationId] = {
                        notificationId,
                        type,
                    };
                }

                groupedData[notificationId][position] = value;
            });

            const selectedData = Object.values(groupedData);
            const notificationPreference = document.getElementById("sendNotification").value;


            const finalPayload = {
                notifications: selectedData,
                preference: notificationPreference,
                email: session.email,
                userId: session.id,
            };

            console.log("Sending to API:", finalPayload);

            // ✅ Send API Call using Fetch
            fetch("../api/auth/notificationSettings.php", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },

                    body: new URLSearchParams({

                        finalPayload: JSON.stringify(finalPayload)

                    })
                })
                .then(response => {
                    if (!response.ok) throw new Error("Network response was not ok");
                    return response.json();
                })
                .then(data => {
                    console.log("Success:", data);
                    alert("Settings saved successfully!");
                    window.location.reload()
                })
                .catch(error => {
                    console.error("Error:", error);
                    alert("Failed to save settings.");
                });
        });
    });




    const notificationData = async () => {

        try {
            let result = await fetch("../api/auth/getNotificationData.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },

                body: new URLSearchParams({
                    email: session.email,
                    userId: session.id
                })
            })
            result = await result.json()
            let notificateionData = result.message
            const notificationTimings = notificateionData[0]?.notificationTimings;
            const selectElement = document.getElementById("sendNotification");

            if (notificationTimings && selectElement) {
                selectElement.value = notificationTimings;
            }

            notificateionData.forEach(item => {
                const {
                    notificationId,
                    email,
                    account,
                    push
                } = item;

                const positionMap = {
                    email,
                    account,
                    push
                };

                // For each position (email/account/push)
                Object.entries(positionMap).forEach(([position, value]) => {
                    const checkbox = document.querySelector(
                        `input[type="checkbox"][notification-id="${notificationId}"][data-position="${position}"]`
                    );
                    if (checkbox) {
                        checkbox.checked = value === 1;
                    }
                });
            });
            // window.location.reload()

        } catch (error) {
            console.log("error", error)
        }

    }

    notificationData()
</script>



</body>

</html>