<?php
$page = (isset($_GET['page']));
?>
<script type="text/javascript">
    // AVAILABLE
    if (window?.location?.href?.indexOf('Available') > -1) {
        Swal.fire({
            title: 'Info!',
            icon: 'info',
            text: 'Data already added on system!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // INSERT SUCCESS
    if (window?.location?.href?.indexOf('InsertSuccess') > -1) {
        Swal.fire({
            title: 'Success!',
            icon: 'success',
            text: 'Data saved successfully!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // INSERT FAILED
    if (window?.location?.href?.indexOf('InsertFailed') > -1) {
        Swal.fire({
            title: 'Failed!',
            icon: 'error',
            text: 'Data saved unsuccessfully!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UpdateSuccess') > -1) {
        Swal.fire({
            title: 'Success!',
            icon: 'success',
            text: 'Data successfully updated!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // UPDATE FAILED
    if (window?.location?.href?.indexOf('UpdateFailed') > -1) {
        Swal.fire({
            title: 'Failed!',
            icon: 'error',
            text: 'Data unsuccessfully updated!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // DELETE SUCCESS
    if (window?.location?.href?.indexOf('DeleteSuccess') > -1) {
        Swal.fire({
            title: 'Success!',
            icon: 'success',
            text: 'Data successfully deleted!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // DELETE FAILED
    if (window?.location?.href?.indexOf('DeleteFailed') > -1) {
        Swal.fire({
            title: 'Failed!',
            icon: 'error',
            text: 'Data unsuccessfully deleted!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // EXTENTION FAILED
    if (window?.location?.href?.indexOf('ExtentionFialed') > -1) {
        Swal.fire({
            title: 'Failed!',
            icon: 'error',
            text: 'Extention not recognized!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // UPLOAD SUCCESS
    if (window?.location?.href?.indexOf('UploadSuccess') > -1) {
        Swal.fire({
            title: 'Success!',
            icon: 'success',
            text: 'Import data successfully!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
    // UPLOAD FAILED
    if (window?.location?.href?.indexOf('UploadFailed') > -1) {
        Swal.fire({
            title: 'Failed!',
            icon: 'error',
            text: 'Import data unsuccessfully!, Check Extention not recognized!'
        })
        history.replaceState({}, '', './<?= $_GET['page'] ?>');
    }
</script>