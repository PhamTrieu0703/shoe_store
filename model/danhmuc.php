<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class danhmuc
     {
     	public $conn;
     	
     	function __construct()
     	{
     		$connect_obj = new ketnoi();
     		$this->conn = $connect_obj->connect;
     	}

          function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham limit 0,4";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }

     }
?>