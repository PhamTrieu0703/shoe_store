<?php    
                                       // MODEL CHO CÁC THÔNG TIN SẢN PHẨM
    require_once('ketnoi.php');

    /**
     * 
     */
    class loaisanpham
    {
    	private $conn;
    	
    	function __construct()
    	{
    		$connect_obj = new ketnoi();
    		$this->conn = $connect_obj->connect;
    	}
    	
        function allCate() 
    	{
    		$query = "SELECT * FROM loaisanpham";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}


    	function all() 
    	{
    		$query = "SELECT * FROM loaisanpham ORDER BY idLoaiSP";

    		$result = $this->conn->query($query);

    		$data = array();

    		while ($row = $result->fetch_assoc()) {
       		   $data[] = $row;
    		}

    		return $data;
    	}

         function timkiem_lsp($timkiem_lsp)
        {
            $query = "SELECT * FROM loaisanpham WHERE tenLSP LIKE '%$timkiem_lsp%' ORDER BY idLoaiSP";

            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
               $data[] = $row;
            }

            return $data;
        }




    	function find($id)
        {
            $query = "SELECT * FROM loaisanpham WHERE idLoaiSP=$id";
            return $this->conn->query($query)->fetch_assoc();
        }


         function update($idLoaiSP, $tenLSP) 
        {
            

     
             $query="UPDATE loaisanpham SET tenLSP='$tenLSP'WHERE idLoaiSP='$idLoaiSP' ";        

            $result = $this->conn->query($query);

            if($result == true){

                header('Location: ?action=loaisanpham');
            }
        

         }

         function insert($tenLSP) 
         {

             $query= "INSERT INTO loaisanpham (tenLSP) 
            VALUES ('$tenLSP') ";

            $result = $this->conn->query($query);

            if($result == true){
                header('location: ?action=loaisanpham');
            }
            else{
                header('location: ?action=themloaisanpham_giaodien');
            }
         }

         function delete($id)     //đang
         {
            $query = "DELETE FROM loaisanpham WHERE idLoaiSP='$id' ";
            $result = $this->conn->query($query);

            if($result == true){

                echo "<script> ";
                echo "location.href='?action=loaisanpham';</script>";

            }else{
                echo "<script>  ";
                echo "location.href='?action=loaisanpham';</script>";
            }
         }





    }
     
?>