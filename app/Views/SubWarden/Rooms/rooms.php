<html>
    <head>
      <!--Font-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <!--Title logo-->
      <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
      <title>Rooms-Subwarden</title>
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js">
          
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!--CSS Connection-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Footer/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/style.css">

        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/modes.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/common.css">
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
        <script type="text/javascript" src="<?=base_url()?>/assets/js/vanilla-tilt.min.js"></script>


        <style>
          .headBG{
            background-image: url("<?=base_url()?>/assets/images/Header/hostel.svg");
          }
            body{
            background-color: white;
                 color:black;
                 font-family: Roboto;
        }
          
          .darkbtn{
          position: absolute;
          margin-left: 10px;
        }
        .eyebtn{
          margin-right: 10px;
        }



        .dashA{
        background-image: url('<?=base_url()?>/assets/images/Footer/dash.svg');
        background-repeat:no-repeat;
      
      }
      .dashC{
        background-image: url('<?=base_url()?>/assets/images/Footer/chat.svg');
        background-repeat:no-repeat;
      }
      .roomM{
        background-image: url('<?=base_url()?>/assets/images/Footer/room.svg');
        background-repeat:no-repeat;
      }
        .roomACt{
          background-image: url('<?=base_url()?>/assets/images/Footer/roomAct.svg');
            background-repeat:no-repeat;
        }
          </style>

      </head>

    <body>
    
    
      <!--Bring me into top-->
      <button onclick="topFunction()" id="myBtn" title="Go to top">
        <div class="goUpBtn" onmouseover="myFunctionShowWord()" onmouseout="myFunctionHideWord()"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span class="gotoTopCls" style="display:none">Go Top</span></div>                
        </button>

        <script type="text/javascript">
            window.onscroll = function()
            {
                scrollFunction()
            };

            function scrollFunction(){
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
                
                } else {
                document.getElementById("myBtn").style.display = "none";
                
                
                }
            }

            function topFunction() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
            
            
        </script>
    <?php
            $session = \Config\Services::session();  
            $session=session();
             $user=$_SESSION["user_id"];
             foreach ($user as $d){
              
        ?>
        <div class="row headerPart d-none d-sm-none d-md-block">
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top" style="position:fixed;">
                  <div > 
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                      </button>
                      
                      <div class="row ">
                        <div class="col-md-12 test">
                          <div class="navbar-header headingPage" >
                            <h1 class="navbar-brand d-none d-sm-none d-md-block texthead1" id="texthead1" >HOSTEL MANAGEMENT SYSTEM</h1> 
                            
                            <h1 class="navbar-brand d-block d-sm-block d-md-none textheadTwo" id="texthead2" >HOSTEL MANAGEMENT SYSTEM</h1> 
                          </div>
                        </div>
                      </div> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <a class="navbar-brand abrand" href="#"><img src="<?=base_url()?>/assets/images/Header/logo.png" class="proimg"></a>
                        <div class="row" style="padding-top: 50px;">
                        <ul class="navbar-nav nt">
                         
                          
                         <li class="nav-item">
                         <a class="nav-link nl active" href='<?php echo base_url(); ?>/SubRooms'>ROOMS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubAttendance'>ATTENDENCE</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl " href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl " href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/'>HOSTEL FEES</a>
                       </li>
                         
                       <li class="nav-item">
                       
                     </li>
                     </ul>  
                        </div>
                        
                          <img src="<?=base_url()?>/assets/images/Profiles/SubWarden/<?php echo $d['pro_pic'];  ?>"" class="logoT"  href="#" id="dropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="dropdown-menu proMenu" aria-labelledby="dropDownUser">
                                <a class="dropdown-item" href='<?php echo base_url(); ?>/SubProf'>MY PROFILE</a>
                                <a class="dropdown-item " href='<?php echo base_url(); ?>/SubExp'>EXPENCES</a>
                                <a class="dropdown-item" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                                
                               
                        </div>
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                              <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                        </div>
        </nav>
          <div class="container " style="padding-top:5%;padding-left:5%">
            <div class="row" >
              <div class="col-md-3 intro">
              <h3 class="myRoomHead">ROOMS</h3>
            <p class="textUnder">
              Welcome to hostel management system to manage your personal data
            </p>
            
              </div>
              <div class="col-md-7 headBG" >
                <!--<img src="assets/images/Header/room.webp" class="imgHeader">-->
                
              </div>
              
            </div>
            <div class="row" style="position:absolute;top:86%;left:29%;">
           
              <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>
              
            
            </div>
          </div><br>
          <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
            <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          
          </svg>
          
        </div>
        <!--Mobile view interface-->
        <div class="mobInterface  d-block d-sm-block d-md-none " style="padding-bottom:20%;">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                  <div > 
                  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Hostel Management System</a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="row">
      <div class="col-md-2">
        <a class="navbar-brand abrand" href="#"><img src="<?=base_url()?>/assets/images/Header/logo.png" class="proimgMob"></a>
      </div>
      <div class="col-md-3" style="position:absolute;font-size:12px;left:17%;top:25%;color:white">
        <div class="row">Faculty of Technology</div>
        <div class="row">University of Ruhuna</div>
      </div>
      <div class="col-md-4">

      </div>
    </div>
                        <div class="row" >
                        <ul class="nav nav-tabs">
                        <li class="nav-item" >
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubProf'>MY PROFILE</a>
                       </li>
                          
                         <li class="nav-item">
                         <a class="nav-link nl active" href='<?php echo base_url(); ?>/SubRooms'>ROOMS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubAttendance'>ATTENDENCE</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl " href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl " href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/'>HOSTEL FEES</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubExp'>EXPENSES</a>
                       </li>  
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                       </li>  
                       <li class="nav-item">
                       
                     </li>
                     </ul>  
                        </div>
                        
                          
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                              <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                        </div>
        </nav>
        </div>
        <script>
          function functionScrollMe(){
            var map = document.getElementById('cate');
            //alert("s");
            map.scrollIntoView({behavior: "smooth"});
          }
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            }); 
        </script>
        
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
        
        <div class="container cate" id="cate" style="padding-top:5%">
            <form class="">
            <div class="container cnt">
                <div class="row">
                    <div class="col-md-3" style="padding-bottom:5%;"><button class="btn level" type="button" onclick="floorNo('1')"><span class="align-self-center">FLOOR 1</span></button></div>
                    <div class="col-md-3" style="padding-bottom:5%;"><button class="btn level" type="button" onclick="floorNo('2')"><span class="align-self-center">FLOOR 2</span></button></div>
                    <div class="col-md-3" style="padding-bottom:5%;"><button class="btn level" type="button" onclick="floorNo('3')"><span class="align-middle">FLOOR 3</span></button></div>
                    <div class="col-md-3" style="padding-bottom:5%;"><button class="btn level" type="button" onclick="floorNo('4')"><span class="align-middle">FLOOR 4</span></button></div>
                </div>
            </div>

                <span id="myF"></span>
        </form>
        <div class="row">
            <div class="map" id="hosMap">
        <div class="container floor">
        
            <div class="row eee">
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="01" onClick="reply_click(this.id)"><span id="fNo"></span>01
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="02" onClick="reply_click(this.id)"><span id="fNo"></span>02
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="03" onClick="reply_click(this.id)"><span id="fNo"></span>03
                    
                </div></a>
                <a href="" class="roomA"><div class="col-md border border-dark washroom">
                    <span id="wr"></span>WASH ROOM
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="04" onClick="reply_click(this.id)"><span id="fNo"></span>04
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="05" onClick="reply_click(this.id)"><span id="fNo"></span>05
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="06" onClick="reply_click(this.id)"><span id="fNo"></span>06
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="07" onClick="reply_click(this.id)"><span id="fNo"></span>07
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="08" onClick="reply_click(this.id)"><span id="fNo"></span>08
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="09" onClick="reply_click(this.id)"><span id="fNo"></span>09
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="10" onClick="reply_click(this.id)"><span id="fNo"></span>10
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room">
                    <span id="fNo"></span>11
                </div></a>
                
                <a href="" class="roomA"><div class="col-md border border-dark washroom">
                    <span id="wr">WASH ROOM</span>
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="11" onClick="reply_click(this.id)"><span id="fNo"></span>12
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="12" onClick="reply_click(this.id)"><span id="fNo"></span>13
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room"  id="13" onClick="reply_click(this.id)"><span id="fNo"></span>14
                    
                </div></a>
                
                
               
                    
            </div>
            
            <div class="row">
                <div class="col-md-12 cor">
                    <br>
                    <br>
                    <marquee class="floorNo">Couridore</marquee>
                    <br>
                    <br>
                    <br>
                </div>
                
            </div>
            
            <div class="row eee">
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="16" onClick="reply_click(this.id)"><span id="fNo"></span>15
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="16" onClick="reply_click(this.id)"><span id="fNo"></span>16
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="17" onClick="reply_click(this.id)"><span id="fNo"></span>17
                    
                </div></a>
                <a href="" class="roomA"><div class="col-md border border-dark washroom">
                    WASH ROOM
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="18" onClick="reply_click(this.id)"><span id="fNo"></span>18
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="18" onClick="reply_click(this.id)"><span id="fNo"></span>19
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="19" onClick="reply_click(this.id)"><span id="fNo"></span>20
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="21" onClick="reply_click(this.id)"><span id="fNo"></span>21
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="22" onClick="reply_click(this.id)"><span id="fNo"></span>22
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="23" onClick="reply_click(this.id)"><span id="fNo"></span>23
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="24" onClick="reply_click(this.id)"><span id="fNo"></span>24
                    
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="25" onClick="reply_click(this.id)"><span id="fNo"></span>25
                    
                </div></a>
                <a href="" class="roomA"><div class="col-md border border-dark washroom">
                    WASH ROOM
                </div></a>
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="26" onClick="reply_click(this.id)"><span id="fNo"></span>26
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="27" onClick="reply_click(this.id)"><span id="fNo"></span>27
                    
                </div></a>
                
                <a href="" class="roomA" data-toggle="modal" data-target="#Modal"><div type="button" class="col-md border border-warning room" id="28" onClick="reply_click(this.id)"><span id="fNo"></span>
                    
                </div></a>
                
                    
            </div>
           </div>
            </div>
           <?php $gen= $d['gender']; }?>
            <!--Model-->
            <div class="modal fade" id="Modal" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                      <script type="text/javascript">
                          var floornumber=0;
                          
                          function floorNo(n){
                              var elements = document.querySelectorAll('[id="fNo"]');
                                var elementEE = document.body;
                                elementEE.classList.toggle("clic");
                                for(var i = 0; i < elements.length; i++) {
                                    elements[i].innerHTML = n;
                                }
                              //document.getElementById("fNo").innerHTML = n;
                              floornumber=n;
                          }
                         
                      function reply_click(clicked_id)
                      {
                          var number = clicked_id;
                          var v= floornumber+number;
                          document.getElementById("myText").innerHTML = v;
                          var genof = <?php echo json_encode($gen); ?>;
                          if(genof=="male"){
                            $.ajax({
                                    url:"Warden_Rooms/boys_list",
                                    
                                    type:"POST",
                                    data:{
                                      room_id:v
                                    },
                                      success:function(data){
                                        //alert("success male");
                                        $('#student').html(data);
                                      },
                                  error: function (data) {
                                    alert("Something went wrong");
                                  }
                                    
                                  });
                          }else{
                            $.ajax({
                                    url:"Warden_Rooms/girls_list",
                                    
                                    type:"POST",
                                    data:{
                                      room_id:v
                                    },
                                      success:function(data){
                                        //alert(student_id);
                                        $('#name').html(data);
                                      },
                                  error: function (data) {
                                    alert("Something went wrong");
                                  }
                                    
                                  });
                          }
                          
                          
                                 
                      }
                    </script>

                    <h5 class="modal-title" id="exampleModalLongTitle">ROOM No: <span id="myText"></span>
                      </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                      <form method="post" action="Warden_Rooms/viewMember" role="form" class="frm">
                          <select class="form-control" id="student" name="student" id="student" >
                           <option selected>SELECT STUDENT ID</option> 
                            
                   
                              </select>
                          <script>
                            

                            //show the details of clicked room
                            $(document).ready(function(){
                              $('#student').change(function(){  
                                var st_id=$('#student').val();
                                  $.ajax({
                                    url:"Warden_Rooms/fetch_data",
                                    
                                    type:"POST",
                                    data:{
                                      student_id:st_id
                                    },
                                      success:function(data){
                                        //alert(student_id);
                                        $('#name').html(data);
                                      },
                                  error: function (data) {
                                    alert("Something went wrong");
                                  }
                                    
                                  })
                                
                              });
                            });

                            
                          </script>
                          </form>
                      
                  </div>
                    <div id="name"></div>
                    <script>
                      $(document).ready(function(){
                        $("#show").click(function(){
                          $("#moreDet").toggle(1000);
                          if($(this).text() == "HIDE"){
                            $(this).text("VIEW MORE");
                          }else{
                            $(this).text("HIDE");
                          }
                        });
                      });
                    </script>
                    
                    <button id="show" class="btn btn-default">View More</button>
                  <div class="modal-footer text-center">
                    Hostel Management System- Faculty of Technology

                  </div>
                </div>
              </div>
            </div>
        
            </div>
        </div>
        <script>
            VanillaTilt.init(document.querySelectorAll(".room"), {
            max: 30,
            speed: 10,
                glare: true,
                  maxGlare: .05,
                scale: 1.0
            });    

            function changeRoomBox(){
              $('.cRbOx').toggle(1000);
            }
        </script>
        <div class="row">
            <div class="container" style="margin-top:5%;">
            <button class="btn btn-default" class="cR" onclick="changeRoomBox()">CHANGE ROOM</button>
            </div>
        </div>
        
        <form id="roomChangeSt"  style="display:none" class="cRbOx">
        <div class="row">
        <div class="container mybox">
          
            <div class="row">
              <div class="col-md-12">
            <h2 class="topH" style="padding-top: 30px;padding-bottom:20px;">CHANGE ROOMS</h2>
              </div>
            </div>
            <div class="row">
            <div class="col-md-5">SELECT A ROOM
            <div class="row">
              <form method="post" style="width:100%">
                <div class="col-md-12">
                  <select class="form-control" id="setFloor">
                    <option selected>SELECT THE FLOOR</option>
                    <option value="1">FLOOR 1</option>
                    <option value="2">FLOOR 2</option>
                    <option value="3">FLOOR 3</option>
                    <option value="4">FLOOR 4</option>
                  </select>
                </div>
                <div class="col-md-12">
                <select class="form-control" id="roomss" required>
                      <option selected>----------------</option>
                      
                    </select>
                </div>
              </form>
              </div>
              <div class="myDiv" id="myDiv" >
              
              </div>
            </div>
            <div class="col-md-1" style="padding-top:200px;"><button class="btn btn-success changeRoom" type="submit"><b>>></b></button></div>
            
            <div class="col-md-5">SELECT A NEW ROOM
              <div class="row">
              <form method="post" style="width:100%">
                <div class="col-md-12">
                  <select class="form-control" id="setNewFloor">
                    <option selected>SELECT THE FLOOR</option>
                    <option value="1">FLOOR 1</option>
                    <option value="2">FLOOR 2</option>
                    <option value="3">FLOOR 3</option>
                    <option value="4">FLOOR 4</option>
                  </select>
                </div>
                <div class="col-md-12">
                <select class="form-control" id="Newroomss" required>
                      <option selected>----------------</option>
                      
                    </select>
                </div>
              </form>
              
              </div>
              <div class="myDiv" id="myNewDiv" style="padding-top:1%">
              
              </div>
            </div>
            </div>
          </div>
          
          
        </div>
        </form>

            <script>
              
            //change the room of selected student
            $('#roomChangeSt').submit(function(e){
            //e.preventDefault();
            var list=[];
            var newF=$('#setNewFloor').val();
            var newR=$('#Newroomss').val();
            var genof = <?php echo json_encode($gen); ?>;
            var st1,st2,st3,st4="";
            
            $(this).find("input:checkbox:checked").each(function(e){
            list.push($(this).val())
            
           
            });
            
              if(list[0]!=null){
                st1=list[0];
              }
              if(list[1]!=null){
                st2=list[1];
              }
              if(list[2]!=null){
                st3=list[2];
              }
              if(list[3]!=null){
                st4=list[3];
              }

            if(genof=="male"){
              $.ajax({
                url:"Warden_Rooms/changeRoomsBoys",
                
                type:"POST",
                data:{
                  newF:newF,
                  newR:newR,
                  st1:st1,
                  st2:st2,
                  st3:st3,
                  st4:st4  
                },
                  success:function(data){
                    alert(data);
                  },
              error: function (data) {
                alert("Something went wrong");
              }
                
              });
            }else{
              $.ajax({
                url:"Warden_Rooms/changeRoomsGirls",
                
                type:"POST",
                data:{
                  newF:newF,
                  newR:newR,
                  st1:list[0]
                  
                },
                  success:function(data){
                    //alert(list);
                    //$('#roomss').html(data);
                  },
              error: function (data) {
                alert("Something went wrong");
              }
                
              });
            }
            
            //alert(list);

            })
            //alert(checkboxes_value);
              
              
            //for listing present rooms
            $(document).ready(function(){
              $('#setFloor').change(function(){ 
                var floorNo=$('#setFloor').val();
                //alert(floorNo);
                    $.ajax({
                      url:"Warden_Rooms/getRooms",
                      
                      type:"POST",
                      data:{
                        floorNum:floorNo
                      },
                        success:function(data){
                          //alert(floorNo);
                          $('#roomss').html(data);
                        },
                    error: function (data) {
                      alert("Something went wrong");
                    }
                      
                    });
                  });
            });
            //for listing new rooms
            $(document).ready(function(){
              $('#setNewFloor').change(function(){
                
                var floorNo=$('#setNewFloor').val();
                //alert(floorNo);
                    $.ajax({
                      url:"Warden_Rooms/getRooms",
                      
                      type:"POST",
                      data:{
                        floorNum:floorNo
                      },
                        success:function(data){
                          //alert(floorNo);
                          $('#Newroomss').html(data);
                        },
                    error: function (data) {
                      alert("Something went wrong");
                    }
                      
                    });
                  });
            });
            
            //allocated room
            //list the students for the selected room
            $(document).ready(function(){
              $('#roomss').change(function(){  
                //alert("in");
                //php to js 
                var genof = <?php echo json_encode($gen); ?>;
                
                var room_id=$('#roomss').val();
                          if(genof=="male"){
                            $.ajax({
                              url:"Warden_Rooms/fetch_bys_data",
                              
                              type:"POST",
                              data:{
                                the_room:room_id
                              },
                                success:function(data){
                                  //alert(room_id);
                                  $('#myDiv').html(data);
                                },
                            error: function (data) {
                              alert("Something went wrong");
                            }
                              
                            });
                          }else{
                              $.ajax({
                                url:"Warden_Rooms/fetch_gil_data",
                                
                                type:"POST",
                                data:{
                                  the_room:room_id
                                },
                                  success:function(data){
                                    //alert("success male");
                                    //$('#student').html(data);
                                  },
                              error: function (data) {
                                alert("Something went wrong");
                              }
                                
                              });
                          }
                
              });
            });

            //new room
            //list the student details for the selected room and floor 
            
            $(document).ready(function(){
              $('#Newroomss').change(function(){  
                //alert("in");
                var genof = <?php echo json_encode($gen); ?>;
                
                var room_id=$('#Newroomss').val();
                          if(genof=="male"){
                            $.ajax({
                              url:"Warden_Rooms/fetch_bys_data",
                              
                              type:"POST",
                              data:{
                                the_room:room_id
                              },
                                success:function(data){
                                  //alert(room_id);
                                  $('#myNewDiv').html(data);
                                },
                            error: function (data) {
                              alert("Something went wrong");
                            }
                              
                            });
                          }else{
                              $.ajax({
                                url:"Warden_Rooms/fetch_gil_data",
                                
                                type:"POST",
                                data:{
                                  the_room:room_id
                                },
                                  success:function(data){
                                    //alert("success male");
                                    //$('#student').html(data);
                                  },
                              error: function (data) {
                                alert("Something went wrong");
                              }
                                
                              });
                          }
                
              });
            });    
            
            </script>
         <div class="footer topFooter  d-none d-sm-none d-md-block" style="margin-top:10%;">
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
          <footer class="fixedFooter d-none d-sm-none d-md-block">
              FACULTY OF TECHNNOLOGY - UNIVERSITY OF RUHUNA
          </footer>

          <!--Mobile view interface footer-->
          <!--Mobile view interface footer-->
          <footer class=" fixed-bottom d-block d-sm-block d-md-none">
            <div class="row footerMob" >
              <div class="col-2 myFot d-flex justify-content-center text-center">
              <a  href='<?php echo base_url(); ?>/SubProf'><div class="tArea  dashA"></div></a>
              </div>
              <div class="col-2 myFot d-flex justify-content-center text-center" >
                <div class="tArea activeTA roomACt"></div>
              </div>
              <div class="col-2 myFot d-flex justify-content-center text-center">
                <div class="tArea dashA" id="" ></div>
              </div>
              <div class="col-2 myFot d-flex justify-content-center text-center">
                <div class="tArea dashA" id="" ></div>
              </div>
              <div class="col-2 myFot d-flex justify-content-center text-center">
                <div class="tArea dashA" id="" ></div>
              </div>
              <div class="col-2 myFot d-flex justify-content-center text-center">
                <div class="tArea dashA" id="" ></div>
              </div>
              
            </div>
          </footer> 
    </body>
    
</html>