<?php
  class LoginController {
    public function login() {
//start session

//load and initialize user class
include 'models/user.php';
$user = new User();
if(isset($_POST['loginSubmit'])){
	//check whether login details are empty
    if(!empty($_POST['email']) && !empty($_POST['password'])){
		//get user data from user class
        $conditions['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $conditions['return_type'] = 'single';
        $userData = $user->getRows($conditions);
		//set user data and status based on login credentials
        if($userData){
            $sessData['userLoggedIn'] = TRUE;
            $sessData['userID'] = $userData['id'];
            $sessData['status']['type'] = 'success';
			$sessData['status']['username'] = $userData['first_name'];
            $sessData['status']['msg'] = 'Welcome '.$userData['first_name'].'!';
        }else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Wrong email or password, please try again.'; 
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Enter email and password.'; 
    }
	//store login status into the session
    $_SESSION['sessData'] = $sessData;
	//redirect to the home page
    header("Location:index.php");
}
	      require_once('views/login/login.php');
	}
    public function logout() {

    if(!empty($_REQUEST['logoutSubmit'])){
	//remove session data
    unset($_SESSION['sessData']);
    session_destroy();
	//store logout status into the ession
    $sessData['status']['type'] = 'success';
    $sessData['status']['msg'] = 'You have logout successfully from your account.';
    $_SESSION['sessData'] = $sessData;
	//redirect to the home page
    header("Location:index.php");
    }
  }
  }
 
  
?>