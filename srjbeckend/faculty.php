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
      <h6 class="m-0 font-weight-bold text-primary">ADD DDOCUMENT</h6>
    </div>
    <div class="card-body">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="user" enctype="multipart/form-data">
          </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Upload Document</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col form-group">
          <label for="">Photo Tittle</label>
          <input type="text" class="form-control" placeholder="Title" name="title">
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col form-group">
          <label for="">Upload Photo</label>
        
          <input type="file" class="form-control" name="photos[]" accept=".jpeg,.png,.jpg,.gif,.svg,.pdf" required multiple>
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
 
  $host = 'localhost';
  $db = 'srjbackend';
  $user = 'root';
  $pass = '';
  
  try {
      $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
      die("Database connection failed: " . $e->getMessage());
  }
  
  // Handle file upload
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $target_dir = "images/";
  
      // Ensure the images directory exists
      if (!is_dir($target_dir)) {
          mkdir($target_dir, 0777, true);
      }
  
      $title = $_POST['title'];
      $files = $_FILES['photos'];
  
      // Check if files are uploaded
      if (!empty($files['name'])) {
          $errors = [];
          $uploaded_files = [];
  
          foreach ($files['name'] as $key => $name) {
              $file_tmp = $files['tmp_name'][$key];
              $file_size = $files['size'][$key];
              $file_error = $files['error'][$key];
              $file_type = $files['type'][$key];
  
              if ($file_error === UPLOAD_ERR_OK) {
                  $allowed_types = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/svg+xml', 'application/pdf'];
                  if (in_array($file_type, $allowed_types)) {
                      $file_ext = pathinfo($name, PATHINFO_EXTENSION);
                      $new_name = uniqid() . '.' . $file_ext;
                      $target_file = $target_dir . $new_name;
  
                      if (move_uploaded_file($file_tmp, $target_file)) {
                          // Save the file information to the database
                          $stmt = $pdo->prepare("INSERT INTO massage(title, name, path) VALUES (?, ?, ?)");
                          $stmt->execute([$title, $new_name, $target_file]);
  
                          $uploaded_files[] = $new_name;
                      } else {
                          $errors[] = "Failed to move file: $name";
                      }
                  } else {
                      $errors[] = "Invalid file type: $name";
                  }
              } else {
                  $errors[] = "Error uploading file: $name";
              }
          }
  
          // Display errors or success messages
          if (!empty($errors)) {
              foreach ($errors as $error) {
                  echo "<p>$error</p>";
              }
          }
  
          // if (!empty($uploaded_files)) {
          //     echo "<p>Uploaded files:</p>";
          //     foreach ($uploaded_files as $file) {
          //         echo "<p>$file</p>";
          //     }
          // }
      } else {
          echo "<p>No files were uploaded.</p>";
      }
  }

  
  
} ?>
<!-- /.container-fluid -->
<?php include('include/foot.php') ?>