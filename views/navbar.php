<?php
session_start();

?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">

  <a class="navbar-brand" href="/login">Index php</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


      <!--<li class="nav-item active">
        <a class="nav-link" href=""></a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
	  
	  
<?php if(isset($_SESSION['sessData']['userID']) == true) {
	    echo '<li class="nav-item">';
        echo '<a class="nav-link" href="?controller=mypage&action=index">Моя страница<span class="sr-only">(current)</span></a>';
        echo '</li>';
	    echo '<li class="nav-item dropdown">';
        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
        echo 'Меню';
        echo '</a>';
        echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
		echo '<a class="dropdown-item" href="?controller=create&action=index">Оформить заказ</a>';
          //echo '<a class="dropdown-item" href="?controller=users&action=index&page_no=1">Список заказов</a>';
          echo '<a class="dropdown-item" href="?controller=editpage&action=index">Редактировать страницу</a>';
          echo '<div class="dropdown-divider"></div>';
          echo '<a class="dropdown-item" href="?controller=login&action=logout&logoutSubmit=1">Выход</a>';
        echo '</div>';
      echo '</li>';
	} else {
	echo '<li class="nav-item">';
	echo '<a class="nav-link" href="?controller=login&action=login&page_no=1">Login</a>';
	echo '</li>';

}
?>

 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	
  </div>
</nav>