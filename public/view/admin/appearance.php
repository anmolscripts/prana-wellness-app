<?php

require_once('../../../functions/auth.php');

requireLogin();
if (!is_admin()) {
    http_response_code(403);
    header('Location: /prana-wellness-app/403');
    exit;
}



?>
<?php include_once '../../layout/header.php'; ?>
<?php

require_once '../../../functions/db.php';
// require_once '../../../functions/activity_added_chart.php';
require_once '../../../functions/utility.php';
$pdo = getConnection();
$slider_setting = getSliderSetting($pdo, $dbname);
?>
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />

<style>
    .w-5rem {
        width: 5rem !important;
    }
</style>
<script>
    console.log(<?= json_encode($slider_setting); ?>);
</script>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">


        <div class="col-xxl-12 mb-6">
            <div class="card">
                <div class="row">
                    <div class="col-12 d-flex px-md-5 justify-content-between align-items-center">
                        <div class="col-md-9 ps-md-5">
                            <h2 class="mb-0">Slider Settings</h2>
                        </div>
                        <div class="col-md-3">
                            <div class="form-check form-switch text-md-end text-center pe-md-5">
                                <input class="form-check-input fs-3 w-5rem mx-auto float-end" type="checkbox" id="activeSwitch" <?= isset($slider_setting['is_active']) && $slider_setting['is_active'] ? 'checked' : ''; ?>>
                            </div>
                        </div>
                    </div>

                    <div class="col-10 mx-auto">
                        <hr>
                    </div>


                    <div class="col-12">
                        <div class="card-body p-0 p-md-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card overflow-hidden" style="height: 500px;">
                                        <div class="card-body" id="vertical-example">
                                            <input type="file" class="filepond" name="images[]" multiple data-max-files="5" />
                                            <!-- Existing image info -->
                                            <?php foreach ($slider_setting['settings']['images'] as $img): ?>
                                                <input type="hidden" name="existing_images[]" value="<?= htmlspecialchars($img) ?>">
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-8 h-100">
                                    <div class="d-flex flex-column gap-4 justify-content-between h-100">
                                        <div>
                                            <div class="row align-items-center px-5">
                                                <label for="html5-range" class="col-12 col-md-2 col-form-label fw-bold fs-5">Interval</label>
                                                <div class="col-9 col-md-8">
                                                    <input type="range" oninput="handelRangeChange(this, 'intervelTime');" class="form-range" value="<?= isset($slider_setting['settings']['intervel_time']) ? $slider_setting['settings']['intervel_time'] : '0';  ?>" id="" min="0" step="1" max="10000">
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <input class="form-control bg-white shadow" type="number" value="<?= isset($slider_setting['settings']['intervel_time']) ? $slider_setting['settings']['intervel_time'] : '0';  ?>" id="intervelTime">
                                                </div>
                                            </div>
                                            <div class="row align-items-center mt-4 px-5">
                                                <label for="html5-range" class="col-12 col-md-2 col-form-label fw-bold fs-5">Delay</label>
                                                <div class="col-9 col-md-8">
                                                    <input type="range" oninput="handelRangeChange(this, 'delayTime');" class="form-range" value="<?= isset($slider_setting['settings']['delay_time']) ? $slider_setting['settings']['delay_time'] : '0';  ?>" id="html5-range" min="0" step="1" max="10000">
                                                </div>
                                                <div class="col-3 col-md-2">
                                                    <input class="form-control bg-white shadow" type="number" value="<?= isset($slider_setting['settings']['delay_time']) ? $slider_setting['settings']['delay_time'] : '0';  ?>" id="delayTime">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center text-md-end">
                                            <button onclick="saveSliderSetting()" class="btn btn-dark my-3 mx-auto px-5 fs-5 col-md-3">Submit</button>
                                        </div>
                                    </div>



                                </div>
                            </div>




                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<?php include_once '../../layout/footer.php'; ?>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="../public/assets/js/extended-ui-perfect-scrollbar.js"></script>

<!-- <script>
        FilePond.create(document.querySelector('.filepond'), {
            allowMultiple: true,
            maxFiles: 5,
            acceptedFileTypes: ['image/*'],
        });
    </script> -->
<script>
    // Get a reference to the file input element
    const inputElement = document.querySelector('input[type="file"]');
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // Create a FilePond instance
    const pond = FilePond.create(inputElement, {
        allowMultiple: true,
        instantUpload: false,
        allowProcess: false,
        server: {
            load: (source, load) => {
                fetch("../public/uploads/layout/" + source)
                    .then(res => res.blob())
                    .then(load);
            }
        },
        files: [
            <?php foreach ($slider_setting['settings']['images'] as $img): ?> {
                    source: "<?= $img ?>",
                    options: {
                        type: "local",
                        metadata: {
                            poster: "/prana-wellness-app/public/uploads/layout/<?= $img ?>"
                        }
                    }
                },
            <?php endforeach; ?>
        ]
    });



    const saveSliderSetting = () => {
        const intervelTime = document.getElementById('intervelTime');
        const delayTime = document.getElementById('delayTime');
        const activeSwitch = document.getElementById('activeSwitch');
        const imagesFile = pond.getFiles();

        const formData = new FormData();

        // Append existing images (those already stored)
        document.querySelectorAll('input[name="existing_images[]"]').forEach(input => {
            formData.append('existing_images[]', input.value);
        });

        // Append new uploaded files
        imagesFile.forEach(fileItem => {
            // Only append if it's a new file (origin: 'input')
            if (fileItem.origin === FilePond.FileOrigin.INPUT) {
                formData.append('images[]', fileItem.file);
            }
        });
        
        const active = activeSwitch.checked;
        console.log('Active Swicth', active);
        formData.append('intervel_time', intervelTime.value);
        formData.append('delay_time', delayTime.value);
        formData.append('active', active);

        fetch('/prana-wellness-app/api/layout/upload.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if(data.success) {
                    location.reload();
                    return;
                }
                alert(data.message || 'Saved successfully');
            })
            .catch(err => {
                console.error('Upload error:', err);
                alert('Upload failed');
            });
    }
</script>

<script>
    const handelRangeChange = (e, targetId) => {
        const target = document.getElementById(targetId);
        console.log(e.value);
        // console.log(target);
        target.value = e.value;
    }
</script>