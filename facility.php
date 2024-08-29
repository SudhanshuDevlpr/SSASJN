<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanskriti Srijan Academy | Facility </title>
    <!-- Progress Bar CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>

    <style>
        tr.table-success {
            background: #80cd33;
            color: #fff;
        }
    </style>

  <body>

<!--gt Wrapper Start-->  
<div class="gt_wrapper">

    <!--Header Wrap Start -->
    <?php include'header.php'; ?>
    <!--Header Wrap End-->

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        <div class="container">
            <div class="gt_sub_banner_hdg  default_width">
                <h3>Facility</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a>Facility</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->
    
   <section >
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 col-md-offset-2">
                <div class="info table-responsive">
                    <table class="table">
                      <thead>
                        <tr class="table-success">
                          <th scope="col">#</th>
                              <th scope="col" style="text-align:center;"> Name</th>
                              <th scope="col" style="text-align:center;"> PDF</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td><a target="_blank" href="allpdf/feestructure-converted.pdf" style="font-weight: 600;">POSCO ACT 2012</a></td>
                          <td style="text-align:center;"> <a target="_blank" href="allpdf/POSCOACT2012-converted.pdf"class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">2</th>
                          <td><a target="_blank" href="newdoc/redressalcommittee2122.pdf" style="font-weight: 600;">Redressal Committe</a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/redressalcommittee2122.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        
                         <tr>
                          <th scope="row">3</th>
                          <td><a target="_blank" href="newdoc/redressalcommitteereport21-22.pdf" style="font-weight: 600;">Redressal Committe Report</a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/redressalcommitteereport21-22.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">4 </th>
                          <td><a target="_blank" href="newdoc/schoolmanagementcommittee21-22.pdf"   style="font-weight: 600;">School Management Committee</a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/schoolmanagementcommittee21-22.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">5 </th>
                          <td><a target="_blank" href="newdoc/schooldisciplinecommittee21-22.pdf"   style="font-weight: 600;">School Discipline Committee</a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/schooldisciplinecommittee21-22.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        
                        <tr>
                          <th scope="row">6 </th>
                          <td><a target="_blank" href="newdoc/sexualharassmentcommittee21-22.pdf"   style="font-weight: 600;">Sexual Harassment Committee</a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/sexualharassmentcommittee21-22.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                        <?php
                        include 'srjbeckend/config.php';
                        $i=7;
                        $sql="SELECT *FROM massage";
                        $result=mysqli_query($conn,$sql);
                         if(mysqli_num_rows($result)>0){
                              while($row=mysqli_fetch_assoc($result)){
                                ?>
                                 
                        <tr>
                          <th scope="row"><?php echo $i++; ?></th>
                          <td><a target="_blank" href="srjbeckend/images/<?php echo $row['name'] ?>"style="font-weight: 600;"><?php echo $row['title']; ?></a></td>
                          <td style="text-align:center;"><a target="_blank" href="newdoc/sexualharassmentcommittee21-22.pdf"  class="btn btn-info" style="font-weight: 600;"><i class="fa fa-eye" aria-hidden="true"></i> View</a></td>
                        </tr>
                                <?php
                              }
                         }else{

                         }
                        ?>
                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 </section>   
    
    
    <?php include'footer.php';?>
    <!--Footer Wrap End-->
    <!--Back to Top Wrap Start-->
    <div class="back-to-top">
        <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--Back to Top Wrap Start-->

</div>
<!--gt Wrapper End-->
    <!--Jquery Library-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!--Accordian JavaScript-->
    <script src="js/jquery.accordion.js"></script>
    <!--Count Down JavaScript-->
    <script src="js/jquery.downCount.js"></script>
    <!--Pretty Photo JavaScript-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel JavaScript-->
    <script src="js/owl.carousel.js"></script>
    <!--Number Count (Waypoint) JavaScript-->
    <script src="js/waypoints-min.js"></script>
    <!--Filter able JavaScript-->
    <script src="js/jquery-filterable.js"></script>
    <!--WOW JavaScript-->
    <script src="js/wow.min.js"></script>
    <!--Custom JavaScript-->
    <script src="js/custom.js"></script>

  </body>

</html>
