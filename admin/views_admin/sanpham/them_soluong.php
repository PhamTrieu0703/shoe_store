


<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Thêm số lượng </div>
    <div class="panel-body">
      <form method="POST" action="?action=them_soluong" enctype="multipart/form-data">
        <!-- rows -->

        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Số lượng nhập thêm</div>
          <div class="col-md-10">
          <input type="hidden" value="<?php echo $idSP; ?>" name="idSP" required>
         <input type="hidden" value="<?php echo $soluong_sanpham; ?>" name="soluong_sanpham" required>
            <input type="text" value="" name="soluong_them" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <button type="submit" name="create" class="btn btn-primary">Thêm</button>
          </div>
        </div>
        <!-- end rows -->
      </form>
    </div>
  </div>
</div>