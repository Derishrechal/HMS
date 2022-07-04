<?php namespace App\Controllers;



//use App\Models\DashboardModel;
use App\Models\admin_model;
use App\Models\user ;
use App\Models\notice_model;
use App\Models\products;
use App\Models\complaints_model;
use App\Models\chatbot_model; 
use App\Models\image_model; 
use App\Models\dean_model;
use App\Models\Security_model;
use App\Models\model_warden;
use App\Models\model_subwarden;
use App\Models\student_model;
$session = \Config\Services::session();

class admin_Dashboard extends BaseController
{
    /*
    public function __construct(){
        if(session('user')==false){
            header("Location:".base_url());
            exit;
        }
        $this->db = \Config\Database::connect();
        $this->users = $this->db->table('users');
    }
    public function index()
    {
        $data['edit']=$this->users->getWhere(['user_id'=>session('user')])->getRow();
        echo view('dashboard/index.php',$data);
    }
    */
   
   
    public function index()
    {
        // $session=session();
        // $id='';
        // if(session()->get("u_id")){
        //     $id=session()->get("u_id");
        // }
        // //$id='wB001';
        // //$uid=$session->get('userid');
        // //$uid=$_SESSION['userid'];
        // //echo "ji";
        // $obj_admin= new admin_model();
        // //$data['user_datas']=$obj_warden->findAll();
        // $data['user_datas']= $obj_admin->where('admin_id',$id)->findAll();
        // echo view('admin/dashboard/index.php');

        echo view('admin/dashboard/index.php');
    }

    public function get_details(){
        $obj_admin= new notice_model();
        //$data['user_datas']=$obj_warden->findAll();
        $data['notice_datas']= $obj_admin->where('notice_id',$id)->findAll();
        echo view('admin/Notices/notices.php',$notice_datas);
        //$userDetails=$obj_warden->where('user_id',$_POST['user'])->findAll();
        //session()->set($userDetails);
        //$data['user_data']=$userDetails;
        //return view('Views/dashboard/index.php',$userDetails);
        /*
        $obj_warden= new model_warden();
        $data['user_datas']=$obj_warden->findAll();
       // $data['datas']= $obj_warden->where('user_id',$_POST['user'])->findAll();
        return view('dashboard/index.php',$data);
        */
        
    }
    public function update_propic(){
        
        /*helper(['form', 'url']);

        //$database = \Config\Database::connect();
        //$db = $database->table('warden');
        $db= new model_warden();
        $file = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file, image/png, image/jpg, image/jpeg]',
                'max_size[file,4096]',
            ]
        ]);
    
        if (!$file) {
            print_r('Wrong file type selected');
        } else {
            $imageFile = $this->request->getFile('file');
            $imageFile->move('/assets/images/Profiles/Warden/');
    
            $data = [
               'ile_name' =>  $imageFile->getName(),
               'file_type'  => $imageFile->getClientMimeType()
            ];
            $queryT="update warden set pro_pic='.$imageFile.' where user_id='wB001'";
            //$save = $db->insert($data);
            $this->db->query($queryT);
            print_r('Image uploaded correctly!');        
        }
        */
        if(isset($_POST['submit'])){
            /*
            $f=$this->request->getFile('file');
            $img= $f->getName();
            //echo $f;
            $queryT="update warden set pro_pic='.$img.' where user_id='wB001'";
            $this->db->query($queryT);
            */
            $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
            $tname = $_FILES["file"]["tmp_name"];
            echo $pname;
            $uploads_dir=base_url()."/assets/images/Profile/admin";
            $mv=move_uploaded_file($tname,$uploads_dir.'/'.$pname);
            if(!$mv){
                echo "coono";
                }
        }
    }
    public function update_user(){
        $obj_admin= new admin_model();
        if($this->request->getMethod()=="post"){
            $arrU=array(
                'name'=>$_POST['name'],
                'gender'=>$_POST['gender'],
                'password	'=>$_POST['password'],
                'email'=>$_POST['email'],
               // 'admin_id '=>$_POST['admin_id '],
                'pro_pic'=>$_POST['pro_pic']
            );
        
          //$data=('user_id'->'wB001');
            $reUp=$obj_admin->update('admin',$arrU);
            if(!$reUp){
                echo "Cannot update";

            }else{
                echo "Updated";
            }
            //echo $_POST["fnamnamee"];
        }

    }
    
    
    public function d_board(){
        echo view("admin/Dbord/dash_board.php");
    }
  
   public function user(){
    
   //$user = new user();
   //$data['user'] = $user->findAll();
echo view("admin/users/user.php");


  } 
  public function student(){
    
    //$user = new user();
    //$data['user'] = $user->findAll();
 echo view("admin/student/student.php");
 
 
   } 
  
 public function notice(){
        
        $notice = new notice_model();
        $data['notice'] = $notice -> findAll();
        echo view("admin/Notices/notices.php",$data);
        // $products = new products();
        // $data['products'] = $products->findAll();
        // echo view("admin/gallery/gallery.php",$data);
    } 
    

    public function gallery(){
        
        $products = new products();
        $data['products'] = $products->findAll();
        echo view("admin/gallery/gallery.php",$data);
     
    }
      public function create(){
      
        echo view("admin/gallery/create.php");
    
    }
      
    public function store(){
         
        $product = new products();
         
     $data =[
        'Image_id'=>$this->request->getPost('Image_id'),
         'Image_name'=>$this->request->getPost('Image_name'),
         'Date'=>$this->request->getPost('Date'),
         'time'=>$this->request->getPost('time')
         //'image'=>$imageName,


     ];
    if( $product->Save($data)){

   
     echo "successfully added";
    }
}
    public function addImage(){
        $obj_notice=new image_model();
        $sender=$this->request->getVar('sender');
        $notice=$this->request->getVar('notice');
        $subject=$this->request->getVar('subject');
        $file=$this->request->getVar('file');
        $toUpload=$this->request->getFile('myFile');
        $date=date('Y-m-d');
    
        $time=date('H:i:s');
        $dataT=array(
            'owner'=>$sender,
            'date'=>$date,
            'time'=>$time,
            'title'=>$subject,
            'notice'=>$notice,
            'file'=>$file
        );
        $re=$obj_notice->save($dataT);
        
        if($re){
            return("Notice posted");
            //return ($toUpload);
        }else{
            return("Cannot post Notice");
        }


        $output='';
        $product = new products();
        $id=$this->request->getVar("id");
        $name=$this->request->getVar("name");
        $date=date('Y-m-d');
        $time=date('H:i:s');
        $dataSave=array(
            'Image_id'=>$id,
            'Image_name'=>$name,
            'Date'=>$date,
            'time'=>$time,
            'image'=>'img.jpg'
        );
        $result=$product->save($dataSave);
        if($result){
            return "OK";
        }else{
            return("NOT OK");
        }

        
    }
    
     public function complaints(){
        $complaints = new complaints_model();
        $data['complaints'] = $complaints -> findAll();
        //echo view("admin/Notices/notices.php",$data);
        echo view("admin/complaints/complaints.php",$data);
    }

    public function edit($Image_id)
    {
        $products= new products();
        $data['product'] = $products->find($Image_id);
        return view('admin/gallery/edit',$data);
    }
    public function delete($Image_id){
        $products= new products();
        $data = $products->find($Image_id);
        $imagefile= $data['Image_name'];
        if (file_exists($imagefile))
        {
            unlink($imagefile);
            
           
        }
        $products->delete($Image_id);
        return redirect()->back()->with('status','image data deleted');
        //alert("data deleted");
    }
    
    function getData(){
        $output='';
        $user=$this->request->getVar("user");
        switch($user){
            case 'dean':
                $output .='
                <thead>  
                    <tr>  
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Qualification</th>  
                        <th>Action</th>  

                    </tr>  
                </thead>
                ';
                $obj_dean= new dean_model();
                $result=$obj_dean->findAll();
                foreach($result as $row){
                    $output .='
                    <tbody>
                        <tr>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['contact_no'].'</td> 
                            <td>'.$row['email'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['Qualification'].'</td>
                            

                            
                       
                            </tr>
                    </tbody>
                    ';
                }
            break;
            case 'warden':
                $output .='
                <thead>  
                    <tr>  
                    <th>user_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date_Joined</th> 
                        <th>Qualification</th>
                        <th>pro_pic</th>  
                        <th>Action</th>  

                    </tr>  
                </thead>
                ';
                $obj_war= new model_warden();
                $result=$obj_war->findAll();
                foreach($result as $row){
                    $output .='
                    <tbody>
                        <tr>
                        <td>'.$row['user_id'].'</td>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['contact_no'].'</td> 
                            <td>'.$row['email'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['Date_Joined'].'</td>
                            <td>'.$row['Qualification'].'</td>
                            <td>'.$row['pro_pic'].'</td>
                            <td><button class="btn btn-danger btn-sm font-size:15px" id='.$row['user_id'].' onclick="resetPasseord(this.id)">RESET_PASSWORD</button>
                            </td>
                        </tr>
                    </tbody>
                    ';
                }
            break;
                //return("warden");
            
            case 'subwarden':
                $output .='
                <thead>  
                    <tr>  
                    <th>user_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date_Joined</th> 
                        <th>Action</th>  

                        
                    </tr>  
                </thead>
                ';
                $obj_subwar= new model_subwarden();
                $result=$obj_subwar->findAll();
                foreach($result as $row){
                    $output .='
                    <tbody>
                        <tr>
                        <td>'.$row['user_id'].'</td>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['contact_no'].'</td> 
                            <td>'.$row['email'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['Date_Joined'].'</td>
                           
                        </tr>
                    </tbody>
                    ';
                }
            
                //return("subwarden");
            break;
            case 'security':
                $output .='
                <thead>  
                    <tr>  
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>DOB</th> 
                        <th>Date Joined</th> 
                        <th>Action</th>  
 
                    </tr>  
                </thead>
                ';
                $obj_sec= new Security_model();
                $result=$obj_sec->findAll();
                foreach($result as $row){
                    $output .='
                    <tbody>
                        <tr>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['contact_no'].'</td> 
                            <td>'.$row['email'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['Date_Joined'].'</td>
                        </tr>
                    </tbody>
                    ';
                }
            break;
            case 'student':
               
                $output .='
               
                <thead> 
                    <tr>  
                    <th>student_id</th> 
                        <th>first_name</th>  
                        <th>last_name</th>  
                        <th>gender</th>  
                        <th>address</th>  
                        <th>DOB</th> 
                        <th>contact_no</th>  
                        <th>email</th>  
                        <th>department</th> 
                        <th>nic_number</th>
                        <th>Action</th>  

                
                    </tr>  
                </thead>
                ';
                $obj_stu= new student_model();
                $result=$obj_stu->findAll();
                foreach($result as $row){
                    $output .='
                    <tbody>
                        <tr>
                        <td>'.$row['student_id'].'</td>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['gender'].'</td>
                            <td>'.$row['address'].'</td>
                            <td>'.$row['DOB'].'</td>
                            <td>'.$row['contact_no'].'</td> 
                            <td>'.$row['email'].'</td>
                            <td>'.$row['department'].'</td>
                            <td>'.$row['nic_number'].'</td>
                           
                        </tr>
                    </tbody>
                    ';
                }
            break;
               // return("student");
            
        }
        return $output;
    }
    // public function delete_notice($notice_id){
    //     $notice= new notice_model();
    //     $data = $notice->find($notice_id);
    //     echo $data['owner'];
    //     // $noticefile= $data['date'];
    //     // if (file_exists($noticefile))
    //     // {
    //     //     unlink($noticefile);
            
           
    //     // }
    //     // $products->notice_delete($notice_id);
    //     // return redirect()->back()->with('status','notice data deleted');
        
    // }
        public function EditImage(){
            $obj_gallery=new image_model();
            $output='';
            $id=$this->request->getVar('id');
            $re=$obj_gallery->where('Image_id',$id)->findAll();
            if($re){
                foreach($re as $row){
                    $output .='
                    <div class="form-group">
                    <label for="exampleInputImage_name">Image_name</label>
                    <input type="text" class="form-control" id="Image_namee" aria-describedby="Image_name" value='.$row['Image_name'].'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDate">Date</label>
                    <input type="date" class="form-control" id="Date" aria-describedby="Date" value='.$row['Date'].'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtime">time</label>
                    <input type="time" class="form-control" id="time" aria-describedby="time" value='.$row['time'].'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputimage">image</label>
                    <input type="text" class="form-control" id="image" aria-describedby="image" value='.$row['image'].'>
                  </div>
                    
                  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="'.$row['Image_id'].'" onclick="updateImages(this.id)" name="">Update changes</button>
      </div>
                    ';
                }
            }
            return $output;
        }
        public function updateImage(){
            
            $obj_gallery=new image_model();
            $name=$this->request->getVar('imageName');
            $date=$this->request->getVar('date');
            $time=$this->request->getVar('time');
            $file=$this->request->getVar('image');
            $id=$this->request->getVar('id');
            $data=array(
                'Image_id'=>$id,
                'Image_name'=>$name,
                'Date'=>$date,
                'time'=>$time,
                'image'=>$file
            );
            $re=$obj_gallery->where('Image_id',$id)->set($data)->update();
            if($re){
                return "Updated";
            }else{
                "Not updated";
            }
        }
        
    public function chatbot(){
    
        //$user = new user();
        //$data['user'] = $user->findAll();
     echo view("admin/chatbot/chatbot.php");
     
       } 

       public function dean(){
    
        //$user = new user();
        //$data['user'] = $user->findAll();
     echo view("admin/users/dean.php");
     
       } 


    
    }
   

    
    

?>