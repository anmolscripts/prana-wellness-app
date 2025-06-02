<!-- Footer -->

<!-- / Footer -->

<div class="modal fade" id="newslatterModel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header pt-0 z-5">
                <!-- <h5 class="modal-title" id="modalCenterTitle">Subscribe</h5> -->
                <button
                    type="button"
                    class="btn-close bg-dark text-white"
                    data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="card h-100 position-relative rounded-3 overflow-hidden">
                    <img class="card-img-top" src="http://localhost:9090//prana-wellness-app/public/uploads/layout/1747725753_682c2db92d461_person-practicing-yoga-meditation-nature-sunset-sunrise (1).jpg" alt="Card image cap">
                    <div class="card-body position-absolute w-100 bottom-0 left-0 bg-blur-white rounded-bottom-3">
                        <h5 class="card-title">Subscription</h5>
                        <p class="card-text">
                            Subscribe Sent Notification to your Device
                        </p>
                        <div class="text-center">
                            <a href="javascript:void(0)" class="btn btn-warning">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
<!-- / Layout wrapper -->







<!-- Core JS -->

<script src="<?= BASE_URL ?>public/assets/vendor/libs/jquery/jquery.js"></script>

<script src="<?= BASE_URL ?>public/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= BASE_URL ?>public/assets/vendor/js/bootstrap.js"></script>

<script src="<?= BASE_URL ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= BASE_URL ?>public/assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= BASE_URL ?>public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->

<script src="<?= BASE_URL ?>public/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= BASE_URL ?>public/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag before closing body tag for github widget button. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="/prana-wellness-app/public/js/userBindActivity.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const myModal = new bootstrap.Modal(document.getElementById('newslatterModel'));
            myModal.show();
        }, 100)
    })
</script>
</body>

</html>