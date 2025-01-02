<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class trangchu
    {
    	private $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
    	function all_user()  
    	{
    		$query = "SELECT * FROM user ORDER BY idUser";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

        function all_sanpham()  
        {
            $query = "SELECT * FROM sanpham ORDER BY idSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_loaisanpham()  
        {
            $query = "SELECT * FROM loaisanpham ORDER BY idLoaiSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_hoadon()  
        {
            $query = "SELECT * FROM hoadon ORDER BY idhoadon";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_hoadon_day($ngaymua)  
        {
            $query = "SELECT * FROM hoadon WHERE ngaymua LIKE ? AND trangthai='1' ORDER BY idhoadon";
            $stmt = $this->conn->prepare($query);
            $ngaymua = "%$ngaymua%";
            $stmt->bind_param("s", $ngaymua);
            $stmt->execute();
            $result = $stmt->get_result();
        
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        
            return $data;
        }
        

        function all_banner()  
        {
            $query = "SELECT * FROM banner ORDER BY idbanner";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_khuyenmai()  
        {
            $query = "SELECT * FROM khuyenmai ORDER BY idKM";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function all_layout()  
        {
            $query = "SELECT * FROM layout";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }

        function update_layout($mail, $diachi, $phone)  
        {
            $query = "UPDATE layout SET  mail='$mail', diachi='$diachi', phone='$phone' WHERE id = '1'";

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=trangchu');
            }
        
        }


    }
     
?>