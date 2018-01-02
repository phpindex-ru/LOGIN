<?php
include 'models/display.php';
  class MypageController {
    public function index() {
		$id = $_SESSION['sessData']['userID'];
        $tablename = "users";

        $displaypagedata = new Display($tablename);
        $pagedata = $displaypagedata->getRecordByID($id);
      require_once('views/mypage/index.php');
    }

  }
?>