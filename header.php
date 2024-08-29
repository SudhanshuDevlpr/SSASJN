 <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 99999;
        }
     .active {
  color: red;
  background-color: black;
}


ul#bs-example-navbar-collapse-1 li a {
    font-size: 15px;
}
.btn.btn-danger.btnstyle{
    font-weight:700;
}

.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 16px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}



.login-trigger {
  font-weight: bold;
  color: #fff;
  background: linear-gradient(to bottom right, #46bbff, #1a61cd);
    padding: 8px 20px;
  border-radius: 7px;
  position: relative; 
  top: 50%;
}

/*Modal*/
h4 {
  font-weight: bold;
  color: #fff;
}
.close {
  color: #fff;
  transform: scale(1.2)
}
.modal-content {
  font-weight: bold;
}
.form-control {
  margin: 1em 0;
}
.form-control:hover, .form-control:focus {
  box-shadow: none;  
  border-color: #fff;
}



.login {
  padding: 6px 20px;
  border-radius: 20px;
  background: none;
  border: 1px solid #FAB87F;
  color: #FAB87F;
  font-weight: bold;
  transition: all .5s;
  margin-top: 1em;
}
.login:hover {
  background: #FAB87F;
  color: #fff;
}

textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border: 1px solid #545151;
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
    outline: none;
    vertical-align: middle;
}
</style>

<header>
        <div class="gt_top3_wrap default_width">
            <div class="container-fluid">
                <div class="col-md-3 gt_top3_scl_icon">
                    <ul class="gt_hdr3_scl_icon">
                        <!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
                         <li><a href="#"> Affiliation no.  : 2133827</a></li>
                           <li><a href="#">School UDISE CODE: 09450303802</a></li>
                    </ul>
                </div>
                <div class="col-md-3 gt_hdr_3_ui_element hidden-xs">
                    <ul>
                        <li><i class="fa fa-phone"></i>(+91) 941 504 7800 </li>
                        <li><i class="fa fa-envelope-o"></i><a href="#">sanskritisrijanacademy16@gmail.com</a></li>
                    </ul>
                </div>
                
                  <div class="gt_hdr_3_ui_element col-md-6">
                    <ul>
                       
                      
                    </ul>
                </div>
               
            </div>
        </div>
          <div class="gt_top3_wrap default_width">
            <div class="container-fluid">
            <div class="col-md-2">
            </div>
                  <div class="col-md-3 gt_hdr_3_ui_element hidden-xs">
                    <ul>
                        <li><a target="_blank" href="#" class="btn btn-danger btnstyle button" > Admission Open (Session 2023-2024)</a> </li>
                        
                         <li><a class="login-trigger" href="#" data-target="#login" data-toggle="modal"> Registration</a> </li>
                      
                    </ul>
                </div>
                 <div class="col-md-2">
            </div>
               
            </div>
        </div>
        <div class="gt_top3_menu default_width" id="myHeader">
            <div class="container">
                <div class="gt-logo">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>  
                </div>
                <nav class="gt_hdr3_navigation">
                    <!-- Responsive Buttun -->
                    <a class="navbar-btn collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>   
                    <!-- Responsive Buttun -->
                    <ul class="collapse navbar-collapse nav-list" id="bs-example-navbar-collapse-1">
                        <li ><a href="index.php">Home</a></li>

                        <li><a href="about.php">About Us</a>
                            <!--<ul>
                                <li ><a href="#">About Us</a></li>
                                <li><a href="mission.php">Our Mission</a></li>
                                <li><a href="philosophy.php">Philosophy</a></li>
                            </ul>-->
                        </li>
                        <!--<li><a href="history.php">History</a></li>-->
                         <li><a href="information.php">Information</a></li>
                        
                        <li><a href="facility.php">Facility</a></li>
                        <li><a href="javascript:avoid(0);">Management</a>
                            <ul>
                                <li><a href="#">Management Message</a></li>
                                <li><a href="recommendation-to-parents.php">Recommendation to parents</a></li>
                                <li><a href="attendance-rules.php">Attendance Rules</a></li>
                                <li><a href="fees-schedules.php">Fees Schedules </a></li>
                                <li><a href="rules.php">Rules &amp; Regulations</a></li>
                               
                            </ul>
                        </li>
                    <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    
   
   <div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <button data-dismiss="modal" class="close">&times;</button>
        <h4 style="color:#333;"> Registration</h4>
        <form>
          <input type="text" name="username" class="username form-control" placeholder="Name"/>
          <input type="text" name="contact" class="username form-control" placeholder="Contact No."/>
          
          <input type="text" name="email" class="username form-control" placeholder="Email"/>
          
           <textarea row="4" col="10" class="form-control" placeholder="Message"> 
           
           </textarea> 
          <br>
          <input class="btn btn-primary" type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </div>  
</div>
   
   
   
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>
    function closeForm() {
  $('.form-popup-bg').removeClass('is-visible');
}

$(document).ready(function($) {
  
  /* Contact Form Interactions */
  $('#btnOpenForm').on('click', function(event) {
    event.preventDefault();

    $('.form-popup-bg').addClass('is-visible');
  });
  
    //close popup when clicking x or off popup
  $('.form-popup-bg').on('click', function(event) {
    if ($(event.target).is('.form-popup-bg') || $(event.target).is('#btnCloseForm')) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  
  
  
  });
</script>
<!--
<script>
$('.nav-list').on('click', 'li', function() {
    $('.nav-list li a.active').removeClass('active');
    $(this).addClass('active');
});
</script> 
-->

