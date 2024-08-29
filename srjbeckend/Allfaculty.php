<?php include('include/head.php') ?>
<?php include('include/sidebar.php') ?>
<?php include('include/topnav.php') ?>
<div class="container-fluid">
  <?php
  if(isset($_GET['id'])){
   echo "<div
      class='alert alert-primary'
    >Record Deleted</div>";
  }
  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo id</th>
        <th scope="col">Tittle</th>
        <th scope="col">Photo</th>
        <th scope="col">Added</th>
        <th scope="col">update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <tr>
        <?php
        $i = 1;
        include 'config.php';
        $sql = "SELECT *FROM massage";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $checkext = pathinfo($row['name'], PATHINFO_EXTENSION);
        ?>
      <tr>
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['title']; ?></td>
        <td>
          <div class="row">
            <?php
            if ($checkext === 'pdf') {
            ?>
              <div class="col form-group">
                <a href="images/<?php echo $row['name'] ?>" target="_blank" class="btn btn-primary">view pdf file</a>
              </div>
            <?php
            } else { ?>
              <div class="col form-group">
                <img src="images/<?php echo $row['name'] ?>" height="150" width="150">
              </div>
            <?php }
            ?>

        </td>
        <td><?php echo $row['Create_at']; ?></td>
        <td><a href="updatefaculty.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
        <td><a href="deletefaculty.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Delete</a></td>
      </tr>
  <?php
          }
        }
  ?>
    </tbody>
  </table>
</div>
<?php include('include/foot.php') ?>