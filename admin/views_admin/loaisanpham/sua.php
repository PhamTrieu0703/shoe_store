<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">SửaDanh mục</div>
    <div class="panel-body">
      <form method="POST" action="?action=sualoaisanpham_xl" enctype="multipart/form-data">
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Tên danh muc</div>
          <div class="col-md-10">
            <input type="hidden" name="idLoaiSP" value=<?php echo $data['idLoaiSP']; ?>>
            <input required type="text" name="tenLSP" value=<?php echo $data['tenLSP']; ?>>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <button type="submit" name="create" class="btn btn-primary">Cập nhập</button>
          </div>
        </div>
        <!-- end rows -->
      </form>
    </div>
  </div>
</div>