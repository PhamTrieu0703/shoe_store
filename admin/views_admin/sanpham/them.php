<div class="col-md-12">
   <div class="panel panel-primary">
      <div class="panel-heading">Thêm sản phẩm</div>
    
        
      <form action="?action=them_sanpham" method="POST" enctype="multipart/form-data">
      <div class="panel-body">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
               <div class="col-md-2">Danh mục</div>
               <div class="col-md-10">
                  <select name="idLoaiSP" class="form-control" style="width: 300px;">
                     <?php foreach ($data_lsp as $value) { ?>
                        <?php echo "<option value='" . $value['idLoaiSP'] . "'>" . $value['tenLSP'] . "</option>"; ?>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:25px;">
               <div class="col-md-2">Khuyến mãi</div>
               <div class="col-md-10">
                  <select name="idKM" class="form-control" style="width: 300px;">
                     <?php foreach ($data_km as $value) { ?>
                        <?php echo "<option value='" . $value['idKM'] . "'>" . $value['loaiKM'] . "</option>"; ?>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:25px;">
               <div class="col-md-2">Màu</div>
               <div class="col-md-10">
                  <select name="idmau" class="form-control" style="width: 300px;">
                     <?php foreach ($data_mau as $value) { ?>
                        <?php echo "<option value='" . $value['idcolor'] . "'>" . $value['color'] . "</option>"; ?>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:25px;">
               <div class="col-md-2">Size</div>
               <div class="col-md-10">
                  <select name="idsize" class="form-control" style="width: 300px;">
                     <?php foreach ($data_size as $value) { ?>
                        <?php echo "<option value='" . $value['idsize'] . "'>" . $value['size'] . "</option>"; ?>
                     <?php } ?>
                  </select>
               </div>
            </div>
            <!-- end rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Tên sản phẩm</div>
               <div class="col-md-3 " >
                  <input type="text" value="" name="tenSP" required class="form-control"> 
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Đơn giá</div>
               <div class="col-md-3">
                  <input type="text" value="" name="Dongia" required class="form-control">
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Ảnh 1</div>
               <div class="col-md-3">
                  <input type="file" value="" name="anh1" required >
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Ảnh 2</div>
               <div class="col-md-3">
                  <input type="file" value="" name="anh2" required >
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Ảnh 3</div>
               <div class="col-md-3">
                  <input type="file" value="" name="anh3" required>
               </div>
            </div>
            <!-- rows -->


            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Ngày nhập</div>
               <div class="col-md-2">
                  <input type="date" value="" name="ngaynhap" required >
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Số lượng</div>
               <div class="col-md-3">
                  <input type="text" value="" name="soluong" required class="form-control">
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:15px;">
               <div class="col-md-2">Mô tả</div>
               <div class="col-md-10">
                  <form action="_posteddata.php" method="post">
                     <textarea name="mota" cols="" rows=""></textarea>
                     <!--          <input name="ok" type="submit" value="Ok" /> -->
                  </form>
               </div>
            </div>
            <!-- rows -->

            <div class="row" style="margin-top:25px;">
               <div class="col-md-2"></div>
               <div class="col-md-10">
                  <button type="submit" name="" class="btn btn-primary">Thêm</button>
               </div>
            </div>
            <!-- end rows -->
            </div>
         </form>
      
   </div>
</div>
<script type="text/javascript">
   CKEDITOR.replace('mota');
</script>