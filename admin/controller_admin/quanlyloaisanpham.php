<?php      
     // CONTROLLER DÙNG ĐỂ GỌI CÁC HÀM TRONG MODEL


    require_once('./model_admin/loaisanpham.php'); // đã gọi được rồi

    /**
     * 
     */
    class loaisanphamcontroller
    {
    	private $loaisanpham_model;

    	public function __construct()
    	{
    		$this->loaisanpham_model = new loaisanpham();
    	}

    	public function list() 
    	{
    		if(isset($_POST['timkiem_lsp'])){
                $timkiem_lsp = $_POST['timkiem_lsp'];
                $data = $this->loaisanpham_model->timkiem_lsp($timkiem_lsp);
            }else{
                $data = $this->loaisanpham_model->all();
            }
            require_once('views_admin/index.php');
    	}

    	 public function details() 
        {
            $id = isset($_GET['id']) ? $_GET['id'] : 1;
            $data = $this->loaisanpham_model->find($id);
            require_once('views_admin/index.php');
        } 

      
        

        public function update()                    
       {
             $idLoaiSP = filter_input(INPUT_POST, 'idLoaiSP');
             $tenLSP = filter_input(INPUT_POST, 'tenLSP');

            $this->loaisanpham_model->update($idLoaiSP, $tenLSP);

         }


         public function them()  
         {
             $tenLSP = filter_input(INPUT_POST, 'tenLSP');

            $this->loaisanpham_model->insert($tenLSP);
         }


         public function xoaloaisanpham()     // đang  
         {
            $id = isset($_GET['id']) ? $_GET['id'] : '1';

            $this->loaisanpham_model->delete($id);
         }










       }

       
    


?>