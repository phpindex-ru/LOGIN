<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
	  case 'mypage':
        $controller = new MypageController();
      break;
	 case 'userpage':
        $controller = new UserpageController();
      break;
	  case 'editpage':
        $controller = new EditpageController();
      break;
	  case 'create':
        $controller = new CreateController();
      break;
	  case 'fogotpassword':
        $controller = new FogotpasswordController();
      break;
	  case 'resetpassword':
        $controller = new ResetpasswordController();
      break;
	  case 'login':
        $controller = new loginController();
      break;
	  case 'register':
        $controller = new RegisterController();
      break;
	  case 'users':
        $controller = new UsersController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'posts' => ['index', 'show'],
					   'users' => ['index'],
					   'login' => ['login', 'logout'],
					   'register' => ['register'],
					   'fogotpassword' => ['index'],
					   'resetpassword' => ['index'],
					   'mypage' => ['index'],
					   'editpage' => ['index'],
					   'create' => ['index'],
					   'userpage' => ['index']
					   );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>