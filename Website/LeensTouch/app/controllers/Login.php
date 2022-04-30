<?php
class Login extends Controller
{
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    public function index()
    {
        if(!isset($_POST['login'])){
            $this->view('Login/index');
        }
        else{
            $user = $this->loginModel->getUser($_POST['email']);
            
            if($user != null){
                $hashed_pass = $user->password;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->fname!",
                    ];
                    $this->view('Home/home',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $user->email",
                    ];
                    $this->view('Login/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Email: ". $_POST['email'] ." does not exists",
                ];
                $this->view('Login/index',$data);
            }
            if($_SESSION['user_id'] == 1){
                $_SESSION['adminSession'] = true;
            }
        }
    }

    public function create()
    {
        if(!isset($_POST['signup'])){
            $this->view('Login/create');
        }
        else{
            $user = $this->loginModel->getUser($_POST['email']);
            if($user == null){
                $promotions = isset($_POST['promotions']) ? 1 : 0;

                $data = [
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname']),
                    'email' => $_POST['email'],
                    'promotions' => $promotions,
                    'pass' => $_POST['password'],
                    'pass_verify' => $_POST['verify_password'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    'username_error' => '',
                    'fname_error' => '',
                    'lname_error' => '',
                    'password_error' => '',
                    'password_match_error' => '',
                    'password_len_error' => '',
                    'msg' => '',
                    'email_error' => ''
                ];
                if($this->validateData($data)){
                    if($this->loginModel->createUser($data)){
                        echo 'Please wait creating the account for '.trim($_POST['fname']);
                        echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Login/">';
                    }
                }
            }
            else{
                $data = [
                    'msg' => "Email: ". $_POST['email'] ." already exists",
                ];
                $this->view('Login/create',$data);
            }
        }
    }

    public function validateData($data){
        if(empty($data['fname'])){
            $data['fname_error'] = 'First Name can not be empty';
        } 
        if (empty($data['lname'])) {
            $data['lname_error'] = 'Last Name can not be empty';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if(strlen($data['pass']) < 6){
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if($data['pass'] != $data['pass_verify']){
            $data['password_match_error'] = 'Password does not match';
        }
        if(empty($data['username_error']) && empty($data['password_error']) && empty($data['password_len_error']) && empty($data['password_match_error'])){
            return true;
        }
        else{
            $this->view('Login/create',$data);
        }
    }

    public function createSession($user){
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['user_fname'] = $user->fname;
        $_SESSION['user_lname'] = $user->lname;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/LeensTouch/Login/">';
    }
}
