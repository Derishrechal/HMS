<html>
    <head>
    <title>Add-Gallery</title>
 <!--Title logo-->
 <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Footer/style.css">
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js">
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!--CSS Connection-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/modes.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/common.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <!--New-->
        
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">
        
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
        
        
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
        <script src="<?=base_url()?>/assets/js/jquery-confirm.min.js"></script>
		<style>
        .darkbtn{
          position: absolute;
          margin-left: 10px;
        }
        .eyebtn{
          margin-right: 10px;
        }
        .tbl{
          background-color: #e6e6e6;
        }
        .topic{
				padding-top:15%;
			}
      .proimg2{
    width: 8%;
    border-radius: 50%;
    position: relative;
    
}
.nt{
  position: absolute;
  margin-left:15%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

td {
    text-align:center;
    border: 4px solid #ddd;
  padding: 8px;
}
th {
  border: 3px;
    padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: solid #ddd;
  color: white;
}
.table {
	border-width: 5px;
  	/* Or use shorthand border property */
  	/* width style colour */
  	border: 5px solid #f00;
    border-radius:15px;
    background-color: rgba(0,0,0,0.15);
    margin-left: auto;  
margin-right: auto;
  
}
			</style>
    </head>
    <body>
       <?php
	   use App\Controllers\Dashboard; 
            //session_start();
            //$condition="";
            //$user_name= $_SESSION['user_n'];
            //$condition= $_SESSION['logged'];
            //$u_id=$_SESSION['user_id'];
        ?>
         <?php
            $session = \Config\Services::session();  
            $session=session();
             $user=$_SESSION["user_id"];
             foreach ($user as $d){
              
        ?>
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
                    <div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                   <img src="<?=base_url()?>/assets/images/Header/logo.png" class="imglogo"> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/images/Profiles/Admin/<?php echo $d['pro_pic']; ?>" class="proimg2"></a>
                        
                        <ul class="navbar-nav p">
                            <li class="nav-item">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM</h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                         
                          <li class="nav-item">
                          <a class="nav-link nl " href='<?php echo base_url(); ?>/admin_login'>MY PROFILE</a>
                          </li>
                        
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/d_board'>DASHBOARD</a>
                          </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/user'>USERS</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/notice'>NOTICES</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href="">GALLERY</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href="">COMPLAINTS</a>
                          </li> -->
                            <li class="nav-item">
                            <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                          </li>
                          <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MODES
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                          <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                            
                          </div>
                        </li>
                        </ul>  
                  </div>
                </div>
                
                
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">
                
        </nav>
        
        <script>
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            }); 
        </script>
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
        
        <script>
          function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
          }
          function myFunctionEye() {
            var element = document.body;
            element.classList.toggle("read_mode");
          }
          </script>

                  <br>
                  <br>
                  <br><br><br><br>                     
                <div class ="container mt-5">
                  <div class ="row justify-content-center">
                    <div class ="col-md-9">
                    <div class ="card">
                      <div class = "card-header">
                        <h5>Add Image Data
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        <a href="<?= base_url("gallery")?>" class ="btn btn-danger btn-12m float-end"><i class="fa fa-hand-o-left" aria-hidden="true">&nbsp;&nbsp;Back</i></a>                       
                         
                      
        </h5>
        </div>
        <div class ="card-body">
            <form action="" >
       

            <div class ="row">
                <div class ="col-md-12">
                    <div class ="form-group mb-2">
                        <label>Image_id</label>
                        <input type="text" name ="Image_id" id="imgid" class="form-control" required placeholder="enter image id">
              </div>
              </div>
       
                <div class ="col-md-6">
              <div class ="form-group mb-2">
                        <label>Image_name</label>
                        <input type="text" name ="Image_name" id="imageName" class="form-control" required placeholder="enter image name">
              </div>
              </div>
           

        
                <div class ="col-md-6">
        
        
                <!-- <div class ="col-md-6">
            <div class ="form-group mb-3">
                        <label>image</label>
                        <input type="file" name ="image" class="form-control" required >
            </div>
        </div> -->
        <div class ="col-md-12">
            <hr>
            <button type="submit" class="btn btn-primary px-4 float-end" id="Img">Save</button>
        </hr>
        </div>
        </div>
        </hr>
        </div>
        </div>
        
        </div>
        </div>
        </form>
        <script>
            $('#Img').click(function(){
              
                var id=document.getElementById("imgid").value;
                    var name=document.getElementById("imageName").value;
                    $.ajax({
                      url : "admin_Dashboard/addImage",
                      data:{
                        id:id,
                        name:name
                      },
                      success:function(data){
                        alert(data);
                      },
                      error:function(data){
                        alert("Error");
                      }
                    });
                });

          </script>
                      
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
               
                <?php 
                            } ?>
            </div>
            
            <script>
                
                  $('#save').click(function(){
                    alert("in");
                    
                   
                  });
                  </script>
           <div class="footer topFooter" style="margin-top:10%;">
            <div class="row">
              <div class="container">
                <div class="row">
                <div class="col-md-3">
                  <h3>About</h3>
                  <p>This is the system for the hostel management for the faculty of technology, University of Ruhuna</p>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <h3>Useful Links</h3>
                <div><a href="" class="link">TECMIS</a></div>
                <div><a href="" class="link">TECLMS</a></div>
                <div><a href="" class="link">TECWEB</a></div>
                <div><a href="" class="link">Faculty of Technology</a></div>
                <div><a href="" class="link">University of Ruhuna</a></div>
                </div>
                <div class="col-md-3">
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">

                </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="fixedFooter">
              FACULTY OF TECHNNOLOGY - UNIVERSITY OF RUHUNA
          </footer>       
    </body>
</html>