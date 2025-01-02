
<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Thêm khuyến mãi</div>
    <div class="panel-body">
      <form method="POST" action="?action=themkhuyenmai_xl" enctype="multipart/form-data">
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Loại Khuyến mãi</div>
          <div class="col-md-10">
            <input type="text" value="" name="loaiKM" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Giá trị Khuyến mãi (%)</div>
          <div class="col-md-10">
            <input type="text" value="" name="giatriKM" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Ngày bắt đầu</div>
          <div class="col-md-10">
          <input type="date" value="" name="ngaybatdau">
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Ngày kết thúc</div>
          <div class="col-md-10">
          <input type="date" value="" name="ngayketthuc">
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

