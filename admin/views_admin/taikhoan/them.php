


<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Thêm người dùng</div>
    <div class="panel-body">
      <form method="POST" action="?action=them" enctype="multipart/form-data">
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Họ</div>
          <div class="col-md-10">
          <input type="text" value="" name="ho" required>
          </div>
        </div>
          <!-- rows -->
          <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Tên</div>
          <div class="col-md-10">
          <input type="text" value="" name="ten" required>
          </div>
        </div>

          <!-- rows -->
          <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Email</div>
          <div class="col-md-10">
          <input  type="text" value="" name="email" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Địa chỉ</div>
          <div class="col-md-10">
          <input type="text" value="" name="diachi" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Giới tính</div>
          <div class="col-md-10">
          <input type="radio" class="active" name="gioitinh" value="nam" checked>Nam <input type="radio" name="gioitinh" value="nu">Nữ
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Số điện thoại</div>
          <div class="col-md-10">
          <input type="text" value="" name="sodienthoai" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Tên đăng nhập</div>
          <div class="col-md-10">
          <input type="text" value="" name="tendangnhap" required>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Mật khẩu</div>
          <div class="col-md-10">
          <input type="password" value="" name="matkhau" required>
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

