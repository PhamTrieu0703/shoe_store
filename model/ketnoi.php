<?php
    /**
     * 
     */
    class ketnoi
    {
        public $connect;
        
        function __construct()
        {
            //các thông số cần thiết kết nối database
            $host = "127.0.0.1:3306";
            $username ="root";
            $password = "";
            $dbname = "shoe_store";

            // $host = '127.0.0.1:3306';
			// $username = 'hvfuydkq';
			// $password = '5Is0B07NyV.tv;';
			// $dbname = 'hvfuydkq_shoe_store';

            //tạo kết nối với cơ sở dữ liệu
            $this->connect = new mysqli($host, $username, $password, $dbname);
    
            $this->connect->set_charset('utf8');

            //kiểm tra kết nối
            if ($this->connect->connect_error) {
                die(" Lỗi khi kết nối đến server: ".$this->connect->connect_error);
            }

        }
    }
?>

