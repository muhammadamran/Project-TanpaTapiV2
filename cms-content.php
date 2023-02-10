<?php
include "include/connection.php";
include "include-cms/restrict.php";
include "include-cms/head.php";
include "include-cms/alert.php";
include "include-cms/dataTablesCSS.php";
?>
<?php
// Icon
if (isset($_POST["upload_"])) {
    // Info Page
    $page      = 'cms-content.php';
    // End Info Page

    $Title          = $_POST['Title'];
    $Description    = $_POST['editor'];
    $status         = 'active';
    $created_by     = $_SESSION['username'];
    $created_date   = date('Y-m-d H:m:a');
    $UploadFile     = 'Menu_' . time() . "_" . $_FILES['file']['name'];

    $dir            = "assets/apps/ourmenu/";
    $timeUpload     = date('Y-m-d-h-m-i');
    $file_name      = $timeUpload . "_" . $_FILES["file"]["name"];
    $size           = $_FILES["file"]["size"];
    $tmp_file_name  = $_FILES["file"]["tmp_name"];
    $filename       = $_FILES['file']['name'];
    $exp            = explode('.', $filename);
    $ext            = end($exp);

    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif' || $ext == 'svg' || $ext == 'JPG' || $ext == 'JPEG' || $ext == 'PNG' || $ext == 'GIF' || $ext == 'SVG') {
        move_uploaded_file($tmp_file_name, $dir . $UploadFile);

        $query    = $db->query("INSERT INTO tb_content 
                                    (id,images_menu,title_menu,desc_menu,status,created_by,created_date)
                                    VALUES
                                    ('','" . $UploadFile . "','" . $Title . "','" . $Description . "','" . $status . "','" . $created_by . "','" . $created_date . "')");

        if ($query) {
            echo "<script>window.location.href='cms-content.php?InsertSuccess=true&page=$page';</script>";
        } else {
            echo "<script>window.location.href='cms-content.php?InsertFailed=true&page=$page';</script>";
        }
    } else {
        echo "<script>window.location.href='cms-content.php?ExtentionFialed=true&page=$page';</script>";
    }
}

// Active
if (isset($_POST["enabled_"])) {
    // Info Page
    $page   = 'cms-content.php';
    // End Info Page

    $ID     = $_POST['ID'];
    $status = 'active';

    $query = $db->query("UPDATE tb_content SET status='$status' WHERE id='$ID'");

    if ($query) {
        echo "<script>window.location.href='cms-content.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='cms-content.php?UpdateFailed=true&page=$page';</script>";
    }
}

// Disabled
if (isset($_POST["disabled_"])) {
    // Info Page
    $page   = 'cms-content.php';
    // End Info Page

    $ID     = $_POST['ID'];
    $status = NULL;

    $query = $db->query("UPDATE tb_content SET status='$status' WHERE id='$ID'");

    if ($query) {
        echo "<script>window.location.href='cms-content.php?UpdateSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='cms-content.php?UpdateFailed=true&page=$page';</script>";
    }
}

// Delete
if (isset($_POST["delete_"])) {
    // Info Page
    $page  = 'cms-content.php';
    // End Info Page

    $ID    = $_POST['ID'];

    $query = $db->query("DELETE FROM tb_content WHERE id='$ID'");

    if ($query) {
        echo "<script>window.location.href='cms-content.php?DeleteSuccess=true&page=$page';</script>";
    } else {
        echo "<script>window.location.href='cms-content.php?DeleteFailed=true&page=$page';</script>";
    }
}
?>
<title>3 Content - <?= $app ?> | Management System</title>
<div class="dashboard-main-wrapper">
    <?php include "include-cms/header.php"; ?>
    <?php include "include-cms/sidebar.php"; ?>
    <div class="dashboard-wrapper">
        <!-- Content -->
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- Page Title -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <div class="c-page">
                                <div class="bg-page">
                                    <i class="fas fa-globe icon-page"></i>
                                </div>
                                <div style="margin-left: 10px;">
                                    <div>
                                        <h2 class="pageheader-title" style="color: #f7b600;">3 Content </h2>
                                    </div>
                                    <div style="margin-top: -10px;">
                                        <font>WEBSITE</font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Title -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fa-solid fa-circle-plus"></i> Created</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="" method="POST" enctype="multipart/form-data" id="myForm">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group" id="ContentOneText">
                                                        <label for="contentOne">Content 1</label>
                                                        <input name="contentOne" type="file" id="contentOne" class="form-control" /><br />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="TitleOne">Title 1</label>
                                                        <input type="text" class="form-control" name="TitleOne" id="TitleOne" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="DescriptionOne">Description 1</label>
                                                        <textarea type="text" class="form-control" name="DescriptionOne" id="DescriptionOne"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group" id="ContentTwoText">
                                                        <label for="contentTwo">Content 2</label>
                                                        <input name="contentTwo" type="file" id="contentTwo" class="form-control" /><br />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="TitleTwo">Title 2</label>
                                                        <input type="text" class="form-control" name="TitleTwo" id="TitleTwo" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="DescriptionTwo">Description 2</label>
                                                        <textarea type="text" class="form-control" name="DescriptionTwo" id="DescriptionTwo"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group" id="ContentThreeText">
                                                        <label for="contentThree">Content 3</label>
                                                        <input name="contentThree" type="file" id="contentThree" class="form-control" /><br />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="TitleThree">Title 3</label>
                                                        <input type="text" class="form-control" name="TitleThree" id="TitleThree" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="DescriptionThree">Description 3</label>
                                                        <textarea type="text" class="form-control" name="DescriptionThree" id="DescriptionThree"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="card-header"></div>
                                                    <div class="form-group row" style="margin-bottom: -15px;">
                                                        <div class="col-sm-12 col-md-10">
                                                            <button class="btn btn-primary" name="upload_"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                                                            <button class="btn btn-info" onclick="myFunction()"><i class="fa-solid fa-circle-xmark"></i> Reset</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- First Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <h5 class="card-header"><i class="fas fa-list"></i> Data</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <!-- <table id="dataTables" class="table table-striped table-bordered first"> -->
                                    <table id="dataTablesN" class="table table-striped table-bordered first">
                                        <!-- <table id="dataTables" class="data-table table hover multiple-select-row nowrap"> -->
                                        <thead>
                                            <tr style="text-align: center;">
                                                <th class="table-plus no-sort">No</th>
                                                <th class="table-plus no-sort">#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $dataTable = $db->query("SELECT * FROM tb_content ORDER BY id ASC", 0);
                                            if (mysqli_num_rows($dataTable) > 0) {
                                                $no = 0;
                                                while ($row = mysqli_fetch_array($dataTable)) {
                                                    $no++;
                                            ?>
                                                    <tr>
                                                        <td><?= $no ?>.</td>
                                                        <td>
                                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                                <img src="assets/apps/ourmenu/<?= $row['images_menu'] ?>" class="img-row-oke" alt="">
                                                            </div>
                                                        </td>
                                                        <td><?= $row['title_menu'] ?></td>
                                                        <td><?= $row['desc_menu'] ?></td>
                                                        <td style="text-align: center;">
                                                            <?php if ($row['status'] == 'active') { ?>
                                                                <span class="badge-dot badge-success mr-1"></span> Active
                                                            <?php } else { ?>
                                                                <span class="badge-dot badge-danger mr-1"></span> Disabled
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <div style="display: flex;justify-content:flex-start;align-items: center;">
                                                                <div class="table-icon">
                                                                    <i class="fa-solid fa-user-clock"></i>
                                                                </div>
                                                                <div style="margin-left: 5px;">
                                                                    <div style="font-size: 15px;font-weight: 500;">
                                                                        <?= $row['created_by']; ?>
                                                                    </div>
                                                                    <div style="font-size: 12px;font-weight: 300;">
                                                                        <?= $row['created_date']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div style="display: flex;justify-content: center;align-items: center;">
                                                                <?php if ($row['status'] == 'active') { ?>
                                                                    <a href="#Disabled<?= $row['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Edit Users" style="margin-left: 5px;">
                                                                        <i class="fa-solid fa-toggle-off"></i> Disabled
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="#Enabled<?= $row['id']; ?>" class="btn btn-sm btn-behind-green" data-toggle="modal" title="Edit Users" style="margin-left: 5px;">
                                                                        <i class="fa-solid fa-toggle-on"></i> Active
                                                                    </a>
                                                                <?php } ?>
                                                                <a href="#Delete<?= $row['id']; ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Delete Users" style="margin-left: 5px;">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Enabled -->
                                                    <div class="modal fade" id="Enabled<?= $row['id']; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">[Active Data] 3 Content</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="list-group">
                                                                                <a href="#" class="behind-list-group-item list-group-item-action flex-column align-items-start active">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1 text-white"><b>Actived! Data</b></h5>
                                                                                        <small><?= date('d F Y') ?></small>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1">Data details to be actived below:</h5>
                                                                                    </div>
                                                                                    <p class="mb-1" style="display: grid;">
                                                                                        <font><b>ID</b>: <?= $row['id']; ?></font>
                                                                                        <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                                                        <button type="submit" name="enabled_" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Enabled -->

                                                    <!-- Disabled -->
                                                    <div class="modal fade" id="Disabled<?= $row['id']; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">[Disaled Data] 3 Content</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="list-group">
                                                                                <a href="#" class="behind-list-group-item list-group-item-action flex-column align-items-start active">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1 text-white"><b>Disabled! Data</b></h5>
                                                                                        <small><?= date('d F Y') ?></small>
                                                                                    </div>
                                                                                </a>
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1">Data details to be disabled below:</h5>
                                                                                    </div>
                                                                                    <p class="mb-1" style="display: grid;">
                                                                                        <font><b>ID</b>: <?= $row['id']; ?></font>
                                                                                        <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                                                        <button type="submit" name="disabled_" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Disabled -->

                                                    <!-- Delete -->
                                                    <div class="modal fade" id="Delete<?= $row['id']; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">[Delete Data] 3 Content</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <form action="" method="POST">
                                                                    <div class="modal-body">
                                                                        <fieldset>
                                                                            <div class="list-group">
                                                                                <a href="#" class="behind-list-group-item list-group-item-action flex-column align-items-start active">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1 text-white">Warning!</h5>
                                                                                        <small><?= date('d F Y') ?></small>
                                                                                    </div>
                                                                                    <p class="mb-1">Are you sure you want to delete this data?, please click <b>Yes</b> if you want to delete this data from the system?</p>
                                                                                </a>
                                                                                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                                                                    <div class="d-flex w-100 justify-content-between">
                                                                                        <h5 class="mb-1">Data details to be deleted below:</h5>
                                                                                    </div>
                                                                                    <p class="mb-1" style="display: grid;">
                                                                                        <font><b>ID</b>: <?= $row['id']; ?></font>
                                                                                        <input type="hidden" name="ID" value="<?= $row['id']; ?>" />
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> No</a>
                                                                        <button type="submit" name="delete_" class="btn btn-danger"><i class="fas fa-check-circle"></i> Yes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Delete -->
                                                <?php } ?>
                                            <?php } else { ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Row -->
            </div>
        </div>
        <!-- End Content -->
        <?php include "include-cms/copyright.php"; ?>
    </div>
</div>
<?php include "include-cms/footer.php"; ?>
<?php include "include-cms/dataTablesJS.php"; ?>
<script type="text/javascript">
    function myFunction() {
        document.getElementById("myForm").reset();
    }

    var abc = 0;
    $(document).ready(function() {
        $('#add_more').click(function() {
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                class: 'form-control'
            }), $("<br/>")));
        });
        $('#add_more1').click(function() {
            $(this).before($("<div/>", {
                id: 'filediv'
            }).fadeIn('slow').append($("<input/>", {
                name: 'file[]',
                type: 'file',
                id: 'file',
                class: 'form-control'
            }), $("<br/>")));
        });
        $('body').on('change', '#file', function() {
            if (this.files && this.files[0]) {
                abc += 1;
                var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src='' style='width:140px'/></div>");
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
                $(this).hide();
                $("#abcd" + abc).append($("<img/>", {
                    id: 'img',
                    src: 'assets-cms/icon/remove.png',
                    alt: 'delete',
                    style: 'margin-left: 10px;margin-right: 10px;'
                }).click(function() {
                    $(this).parent().parent().remove();
                }));
            }
        });

        function imageIsLoaded(e) {
            $('#previewimg' + abc).attr('src', e.target.result);
        };
        $('#upload').click(function(e) {
            var name = $(":file").val();
            if (!name) {
                alert("First Image Must Be Selected");
                e.preventDefault();
            }
        });
    });
</script>