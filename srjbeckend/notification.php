<?php include('include/head.php') ?>
<style>
  #SubjectName {
    margin-left: 40px;
  }

  #submit {
    margin-left: 40px
  }
</style>
<?php include('include/sidebar.php') ?>
<?php include('include/topnav.php') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">ADD NOTIFICATION FORM</h6>
    </div>
    <div class="card-body">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="user">
          </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">NITIFICATION ADDED</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col form-group">
          <label for="">Notification Tittle</label>
          <input type="text" class="form-control" placeholder="Tittle" name="tittle">
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col form-group">
          <label for="">Notification</label>
          <input type="text" class="form-control" placeholder="Notification" name="notice">
        </div>
      </div>
    </div>
    <div class="form-group">
      <!--here we button submit-->
      <div class="col-2">
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-sm btn-block" name='login'>Submit</button>
        </div>
      </div>
    </div>
  </div>
  </form>

</div>
<?php
if (isset($_POST['login'])) {
  include 'config.php';
  //upload file on database
  $Titlle=$_POST['tittle'];
  $notifiaction=$_POST['notice'];
  $st_inert = "INSERT INTO  notification(`notifiaction`,`Titlle`)VALUES ( '$notifiaction','$Titlle')";
  mysqli_query($conn, $st_inert);
  
} ?>
<!-- /.container-fluid -->
<?php include('include/foot.php') ?>