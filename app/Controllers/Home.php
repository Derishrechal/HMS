<?php

namespace App\Controllers;
use App\Models\model_users;
use App\Models\model_warden;
use App\Models\Security_model;
use App\Models\admin_model;
use App\Models\model_subwarden;
use App\Models\model_dean;
use App\Models\student_member_model;
use App\Models\GalleryModel;
$session = \Config\Services::session();  
class Home extends BaseController
{
    
    
    public function index()
    {
        echo view('index.php');
    }
    public function gallery(){
        $gallery=new GalleryModel();
        $data['images']=$gallery->findAll();
        echo view('HomePage/gallery/gallery.php',$data);
        //echo view('HomePage/gallery2.php');
    }
    public function getImages(){

    }
    public function login()
    {
        echo view('index.php');
    }
    public function check_user()
    {
        
        $session=session();
        $obj_user= new model_users();
        if($this->request->getMethod()=="post"){
            
            $pw=md5($_POST['password']);
            
            $res=$obj_user->where(['user_id'=>$_POST['user'], 'password'=>$pw])->first();
            if(!$res==NULL){
                
                $userResult=$obj_user->where('user_id',$_POST['user'])->findAll();
                foreach($userResult as $userd){
                    
                    switch($userd['post']){
                        case 'warden':
                            $users_id=$_POST['user'];
                            $obj_warden= new model_warden();
                            $_SESSION["user_id"]= $obj_warden->where('user_id',$users_id)->findAll();
                            return redirect('Warden_dashboard');
                        break;
                        case 'subwarden':
                            $users_id=$_POST['user'];
                            $obj_SW= new model_subwarden();
                            $_SESSION["user_id"]= $obj_SW->where('user_id',$users_id)->findAll();
                            return redirect('SubWarden_dashboard');
                        break;
                        case 'security':
                            $user_se=null;
                            $users_id=$_POST['user'];
                            $obj_Security= new Security_model();
                            $user_ar= $obj_Security->where('user_id',$users_id)->findAll();
                            $_SESSION["user_ar"]= $user_ar;
                            $_SESSION["user_id"]= $obj_Security->where('user_id',$users_id)->findAll();
                            return redirect('Security_login');
                        break;
                        case 'dean':
                            $users_id=$_POST['user'];
                            $obj_Dean= new model_dean();
                            $_SESSION["user_id"]= $obj_Dean->where('user_id',$users_id)->findAll();
                            return redirect('dean_dashboard');
                        break;
                        case 'admin':
                            $users_id=$_POST['user'];
                            $obj_admin= new admin_model();
                            $_SESSION["user_id"]= $obj_admin->where('admin_id',$users_id)->findAll();
                            return redirect('admin_login');
                        
                        break;
                        case 'student':
                            $users_id=$_POST['user'];
                            $obj_student= new student_member_model();
                            $_SESSION["user_id"]= $obj_student->where('student_id',$users_id)->findAll();
                            return redirect('stu_dashboard');
                        
                        }
                        
                    }
                }else{
                    echo "<script>alert('check user name and passowrd');</script>";
                    return redirect('login');
                }
            }
        }
    public function logout()
	{
        session()->destroy(); 
		return redirect('login'); 
	}

}
?>
