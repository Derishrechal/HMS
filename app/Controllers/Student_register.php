<?php

namespace App\Controllers;
//use App\Models\DashboardModel;
use App\Models\model_dues;
use App\Models\student_register_Model;
use App\Models\student_member_model;

class Student_register extends BaseController
{
   
    public function regNew(){
        $output='';

        $obj_stu=new student_member_model();
        $user_id=$this->request->getVar('id');
        $level=$this->request->getVar('level');
        $data=array(
            
            'level'=>$level
        );
        $reUp=$obj_stu->where('student_id',$user_id)->set($data)->update();
        if($reUp){
            return("Registered");
        }else{
            return("Cannot Register");
        }
    } 
    public function getDues(){
        $output='';
        $obj_dues=new model_dues();
        $obj_stu=new student_member_model();
        $user_id=$this->request->getVar('id');
        $level=0;
        $user="";
        foreach(($result1s=$obj_stu->where('student_id',$user_id)->findAll()) as $t){
            $level=$t['level'];
        } 
       //if student id is not in thius table there is no any defect so, they can register
       $result=$obj_dues->where('student_id',$user_id)->findAll();
       foreach($result as $p){
           $user .=$p['student_Id'];
           
       }
      
       if($user==""){
       
          if($level==4){
            $output .='
                <p style="color:red;">Sorry you cannot register for the hostel anymore</p>
            ';
       }else{
            $newLevel=$level+1;
            $output .='
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <form>
                            <select class="form-control" id="selectVal">
                                
                                <option value='.$newLevel.'>Level '.$newLevel.'</option>
                            </select>

                            <button class="btn btn-success" id="'.$user_id.'" style="margin-top:2%;" onclick="myRegisterFunc(this.id)">REGISTER</button>
                        </form>
                        </div>
                    </div>
                </div>
            ';
       }
          return $output;
       }else{
         
          foreach(($result=$obj_dues->where('student_id',$user_id)->findAll()) as $d){
            foreach($result as $d){
                $output .='
                <div class="row">
                <div class="col-md-12">
                <p style="color:red" class="text-center">You have a payemnt due</p>
                <table class="table">
                    <tr>
                        <td>
                            Reason
                        </td>
                        <td>
                            '.$d['defect'].'
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Amount
                        </td>
                        <td>
                            Rs. '.$d['fine_amount'].'
                        </td>
                    </tr>
                </table>
                <p style="color:black" class="text-center">Once you pay the amount <span style="color:green">REGISTER</span> will be enabled</p>
                </div>
                </div>
              ';
               }
               return $output;
          } 
        
       }
      
    }
 

   
}
