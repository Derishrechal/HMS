<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\model_warden;
use App\Models\student_model;
use App\Models\security_model;

//home pages
class Security_Dashboard extends BaseController
{
    public function index()
    {
        echo view('security/dashboard/index.php');
    }

    public function Send_sms_student()
    {
        echo view('Security/dashboard/Send_sms_student.php'); 
    }

    public function get_details(){
        $obj_security= new security_model();

        $output="";
        $user=$this->request->getVar('the_user');
        foreach(($result=$obj_security->where('user_id',$user)->findAll()) as $d){
            $output .='
          
                            
                            
                                <tr>
                                    <th>
                                        FIRST NAME: 
                                    </th>
                                    <td>
                                        '. $d['first_name'] .'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        LAST NAME: 
                                    </th>
                                    <td>
                                        '. $d['last_name'].'
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>
                                        MOBILE: 
                                    </th>
                                    <td>
                                    '.  $d['contact_no'].'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        EMAIL: 
                                    </th>
                                    <td>
                                    '.  $d['email'].'
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        ADDRESS: 
                                    </th>
                                    <td>
                                    '. $d['address'].'
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                <div class="col-md-12 text-right">
                                    <i class="fas fa-chevron-circle-down" onclick="showMoreData()" style="font-size:20px;padding-bottom:10;" type="button" ></i>
                                </div>
                                </td>
                                    <td >
                                    <div class="col-md-12 text-right">
                                    <i class="fas fa-edit" style="font-size:20px;padding-bottom:10;" type="button" class="btn btn-primary" data-toggle="modal" onclick="updateBTN()" data-target="#exampleModalCenter"></i>
                                    </div>
                                    </td>
                                </tr>
                          
                            
            ';  
        }
        return $output;
        
    }
    public function Se_search()
    {  
       
        $session=session();
        $obj_student= new student_model();
       
       if($this->request->getMethod()=="post"){
        
        
       // check all the text box are fill
                    if(($_POST['tg']==null) && ($_POST['name']==null) && ($_POST['mobile']==null)){
                        echo '<script>alert("you have to enter Name / TG number / phone number to find data of a student  ");</script>';
                        echo view('Security/dashboard/Send_sms_student.php');
                    }  
        // check the name number
        if($_POST['name']!=null){
            $res=$obj_student->where('first_name',$_POST['name'])->findAll();
            if(!$res==NULL){
                $_SESSION["se_student"]=$res;
                
                return redirect('Send_sms_student');
                            }
            else{
                echo '<script>alert("you have to enter correct Name to find data of a student  ");</script>';
                echo view('Security/dashboard/Send_sms_student.php'); 
                            }           
        }            


                    else if($_POST['tg']!=null){
                        $_SESSION["se_student"]=$res=$obj_student->where('student_id',$_POST['tg'])->findAll();
                       
                        if(!$res==NULL){
                            $_SESSION["se_student"]=$res;
                              

                            return redirect('Send_sms_student');
                                }
                        else{
                            echo '<script>alert("you have to enter correct TG number to find data of a student  ");</script>';
                            echo view('Security/dashboard/Send_sms_student.php'); 
                        }                
                        
                    } 

        // check the name
                    
        // check moblie number
                    else if($_POST['mobile']!=null){
                        echo $_POST['mobile'];
                        $res=$obj_student->where('contact_no',$_POST['mobile'])->findAll();
                        if(!$res==NULL){
                            $_SESSION["se_student"]=$res;
                            return redirect('Send_sms_student');
                                        } 
                        else{
                            echo '<script>alert("you have to enter correct moblie number to find data of a student  ");</script>';
                            echo view('Security/dashboard/Send_sms_student.php');   
                            }                  
                     }
             }
}

public function se_send_Message()
{
    if($this->request->getMethod()=="post"){
      
        $user = "94761806213";
        $password = "8224";
        $text = urlencode ($_POST['messageA']);
        // uncomment this when we get sms
         $to= $_POST['moblieA'];
        // $to = "94761806213";
        
        $baseurl ="http://www.textit.biz/sendmsg";
        $url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
        $ret = file($url);
        
        $res= explode(":",$ret[0]);
        
        if (trim($res[0])=="OK")
        {
            echo '<script>alert("MESSAGE SEND ");</script>';
            echo view('Security/dashboard/Send_sms_student.php'); 
        }
        else
        {
            echo '<script>alert("MESSAGE did not SEND ");</script>';
            echo view('Security/dashboard/Send_sms_student.php'); 
        }
    }
}



public function se_update_user(){
    $session=session();
    $obj_security= new Security_model();
     if($this->request->getMethod()=="post"){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $sec_id=$_SESSION["user_id"];
        
    
    $data=array(
        'sec_id'=>$sec_id,
        'first_name'=>$fname,
        'last_name'=>$lname,
        'address'=>$address,
        'contact_no'=>$mobile,
        'email'=>$email
    );
    
    $reUp=$obj_security->where('sec_id',$sec_id)->set($data)->update();
   
    if($reUp){
        return redirect('Security_login');
        
    }
    else{
        echo '<script>alert("Your profile updated");</script>';
    }
    echo view('security/dashboard/index.php');
 }
 
}



public function se_changePassword(){
    echo '<script>alert("current passworld is incorrect");</script>';
        
    $output='';
    $obj_user= new model_users();
    $user=$this->request->getVar('userID');
    $oldPw=md5($this->request->getVar('oldPw'));
    $newPw=md5($this->request->getVar('newPw'));
    $userPw=array(
        'user_id'=>$user,
        'password'=>$oldPw
    );
    $re=$obj_user->where($userPw)->findAll();
    if(!$re){
        $output .='
        <div class="status" id="insideStatus" style="text-align:center;color:red;">
        Your current password is wrong
      </div>
        ';
        
    }else{
        //return("There");
        $reChange=$obj_user->where('user_id',$user)->set('password',$newPw)->update();
        if($reChange){
            $output .='
        <div class="status" id="insideStatus" style="text-align:center;color:green;">
        Password reset success
      </div>
        ';
        }
    }
    return $output;
    //return $oldEnc;
}


    
}


?>