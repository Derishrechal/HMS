<?php
namespace App\Controllers;
use App\Models\Complaints_Model;

$session = \Config\Services::session();
class Student_Complaint extends BaseController 
{
// public function stu_complaint(){
//         echo view("Student/Complaints/complaints.php");
//     }
// public function Sendcomplaint(){
//     $obj_complaint = new Complaints_Model();
//     $rec=$this->request->getVar('rec');
//     $sub=$this->request->getVar('sub');
//     $comp=$this->request->getVar('comp');
//     $date=date('Y-m-d');
//     $time=date('H:i:s');
   
//     $data=array(
//         'rec'=>$rec,
//         'date'=>$date,
//         'time'=>$time,
//         'subject'=>$sub,
//         'complaint'=>$comp
//     );
//     $re=$obj_complaint->save($data);
//     if($re){
//         return("Sucessfully");
//         echo view("Student/dashboard/index.php");

//     }
    

//         //return $re;
// }

public function com(){
$special = new Complaints_Model();
$date=date('Y-m-d');
$time=date('H:i:s');
$data = [
    // 'receiver','sender','date','time','subject','complaint
    // // 'request_type' => $this->request->getPost('request_type'),
    'date'=>$date,
    'time'=>$time,
    'receiver' => $this->request->getPost('receiver'),
    'subject' => $this->request->getPost('subject'),
    'complaint' => $this->request->getPost('complaint'),
    

];
if($special->save($data)){
// return redirect()->to(base_url('Student/Request/Leave_request.php'))->with('status','Request Added sucessfully');
echo '<script>alert("Complaint sended sucesssfuly ");</script>';
echo '<script>history.go (-1);</script>';
echo '<script>location.reload ();</script>';
}
else{
    echo "You request is not saved";
}
}
}