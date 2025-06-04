<?php

require_once('../../functions/auth.php');

requireLogin();


require_once '../../functions/db.php';
require_once '../../functions/userFunctions/activity_user_chart.php';
require_once '../../functions/userFunctions/userUtility.php';
// require_once '../../functions/fetchLayoutSetting.php';

$userId = $_SESSION['user']['id'];
$pdo = getConnection();
$getActivityUsageStats = getActivityUsageStats($pdo, $dbname, 'user_activities', 'activity', $userId);
$getActivityUsageData = getUserActivityUsageData($pdo, $userId);
?>
<?php include_once '../layout/header.php'; ?>

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- aactvitity histrory -->
            <?php $activites = $getActivityUsageStats['activities']; ?>
            <?php if (count($activites) > 0): ?>

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

                                                        if (!empty($activites)):
                                                            foreach ($activites as $index => $activity):
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $index + 1; ?></td>
                                                                    <td><?php echo $activity['activity_name']; ?></td>
                                                                    <td class="text-center"> <span
                                                                            class="badge <?php echo $activity['activity_type'] == 'time' ? 'bg-label-warning' : 'bg-label-info'; ?> me-1"><?php echo strtoupper($activity['activity_type']); ?></span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge rounded-pill bg-danger ms-auto fs-6"><?php echo $activity['percentage']; ?>%</span>
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

            <?php endif; ?>
        </div>
    </div>
</div>


<?php include_once '../layout/footer.php'; ?>

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