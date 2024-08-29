<?php include('include/head.php') ?>
<style>
    #SubjectName {
        margin-left: 40px;
    }

    #submit {
        margin-left: 40px
    }
</style>
<?php include('include/sidebar.php');
$sid=$_GET['id'];
include 'config.php';
 ?>
<?php include('include/topnav.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">UPDATE GALLERY FORM</h6>
        </div>
        <div class="card-body">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="user" enctype="multipart/form-data">
                <!--Intermediate information finish-->
                <!--Graduation  information-->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">File Upload</h6>
                </div>
                <div class="card-body">
                <div class="row">
                        <div class="col form-group">
                            <label for="">Tittle</label>
                            <?php
                            $sql1="SELECT *FROM massage WHERE id=$sid";
                            $row1=mysqli_query($conn,$sql1);
                            $result1=mysqli_fetch_assoc($row1);
                            ?>
                            <input type="text" class="form-control" value="<?php echo $result1['tittle'] ?>" name="Ttile">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <label for="">Update Photo</label>
                            <input type="text" class="form-control" value="<?php echo $result1['Massage'] ?>" name="notice">
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <!--here we button submit-->
                    <div class="col-2">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-sm btn-block" name='login'>Update</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <script src="js/glightbox.min.js"></script>
    <script>
        const portfolioLightbox = GLightbox({
            selector: '.lightbox'
        });
    </script>
    <?php
    if (isset($_POST['login'])) {
        //echo $sid;
        $tittle=$_POST['Ttile'];
        $Massage=$_POST['notice'];
        $st_update = "UPDATE massage
        SET 
            `tittle`='$tittle',
            `Massage`='$Massage'
        WHERE 
            `id` = $sid";
        mysqli_query($conn,$st_update);
    } ?>
    <!-- /.container-fluid -->
    <?php include('include/foot.php') ?>