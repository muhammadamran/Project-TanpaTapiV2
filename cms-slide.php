<!-- CSS -->
<?php include "include-cms/connection.php"; ?>
<?php include "include-cms/restrict.php"; ?>
<?php include "include-cms/head.php"; ?>
<?php include "include-cms/datatablescss.php"; ?>
<?php include "include-cms/header.php"; ?>
<?php include "include-cms/sidebar.php"; ?>
<?php
// Icon
if (isset($_POST["upload_"])) {
    $status         = 'active';
    $created_by     = $_SESSION['username'];
    $created_date   = date('Y-m-d H:m:a');
    $UploadFile     = 'Slide_' . time() . "_" . $_FILES['file']['name'];

    $dir            = "assets/img/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["file"]["name"];
    $size           = $_FILES["file"]["size"];
    $tmp_file_name  = $_FILES["file"]["tmp_name"];
    $filename       = $_FILES['file']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);

    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg') {
        move_uploaded_file($tmp_file_name, $dir . $UploadFile);

        $check_data = $db->query("SELECT COUNT(*) AS t_check FROM tb_slide WHERE status='active'");
        $check      = mysqli_fetch_array($check_data);

        if ($check['t_check'] == 0 || $check['t_check'] == '0' || $check['t_check'] == NULL) {

            $query    = $db->query("INSERT INTO tb_slide 
                                    (id,images_slide,status,created_by,cretated_date)
                                    VALUES
                                    ('','" . $UploadFile . "','" . $status . "','" . $created_by . "','" . $created_date . "')");

            if ($query) {
                echo "<script>window.location.href='cms-slide.php?InsertSuccess=true&page=$page';</script>";
            } else {
                echo "<script>window.location.href='cms-slide.php?InsertFailed=true&page=$page';</script>";
            }
        } else {
            echo "<script>window.location.href='cms-slide.php?InsertCant=true&page=$page';</script>";
        }
    } else {
        echo "<script>window.location.href='cms-slide.php?ExtentionFialed=true&page=$page';</script>";
    }
}
?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Slide Background</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Creared -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Created</h4>
                        <p class="mb-30">User: <?= $_SESSION['username']; ?></p>
                    </div>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Upload Images</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file" name="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <hr>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-10">
                            <button class="btn btn-dark" name="upload_"><i class="icon-copy dw dw-add"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Form Created -->
            <!-- Data Tables -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table hover multiple-select-row nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">No</th>
                                <th class="table-plus datatable-nosort">#</th>
                                <th>Status</th>
                                <th>Created</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $dataTable = $db->query("SELECT * FROM tb_slide ORDER BY id ASC", 0);
                            if (mysqli_num_rows($dataTable) > 0) {
                                $no = 0;
                                while ($row = mysqli_fetch_array($dataTable)) {
                                    $no++;
                            ?>
                                    <tr>
                                        <td><?= $no ?>.</td>
                                        <td>
                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                <img src="assets/img/<?= $row['images_slide'] ?>" class="img-row-oke" alt="">
                                            </div>
                                        </td>
                                        <td><?= $row['status'] ?></td>
                                        <td>
                                            <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                <div class="table-icon">
                                                    <i class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                                <div style="margin-left: 5px;">
                                                    <div style="font-size: 15px;font-weight: 500;">
                                                        <?= $row['created_by']; ?>
                                                    </div>
                                                    <div style="font-size: 12px;font-weight: 300;">
                                                        <?= $row['cretated_date']; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Data Tables -->
        </div>
    </div>
</div>
<?php include "include-cms/footer.php"; ?>
<?php include "include-cms/datatablesjs.php"; ?>