<?php

class Display {

    private $tablename;
    private $recData = array();

    public function __construct($tablename) {
        $this->tablename = $tablename;
    }

    function getAllData() {
		$db = Db::getInstance();
        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC ";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        
        return @$data;
    }

    function getLastRecordDESC() {
$db = Db::getInstance();
        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetch();

        return $data;
    }

    function getRecordByID($id) {
		$db = Db::getInstance();
        $id = intval($id);

        $sql = "SELECT * FROM `$this->tablename` WHERE `id`= $id";
        $query = $db->prepare($sql);
        $query->execute();
        $this->recData = $query->fetch();
        return $this->recData;
    }

    function getAllDataByID($id, $column = "id") {  // (5 , "sectionID")
	$db = Db::getInstance();
        $id = intval($id);

        $sql = "SELECT * FROM `$this->tablename` WHERE `$column`= $id ORDER By `id` ASC";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
       
        return $data;
    }

    function getAllDataByStatusType($type) {
		$db = Db::getInstance();
        $sql = "SELECT * FROM `$this->tablename` WHERE `status`= 1 AND `type` = '$type' ORDER By `id` DESC";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
       
        return $data;
    }
	
	    function getRecordByUserID($id) {
		$db = Db::getInstance();	
        $id = intval($id);

        $sql = "SELECT * FROM `$this->tablename` WHERE `user_id`= $id ORDER By `id`  DESC ";
        $query = $db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();

        return $data;
    }
	    function getRecord($id) {
		$db = Db::getInstance();	
        $id = intval($id);
        $sql = "
		SELECT pages.id, pages.page_name, pages.token, pages.page_image, pages.page_content,
        images.token, images.image
        FROM pages
        JOIN images
        ON pages.token = images.token
		WHERE pages.id = $id";
        $query = $db->prepare($sql);
        $query->execute();
        $this->recData = $query->fetch();
        return $this->recData;
    }
	

}

?>
