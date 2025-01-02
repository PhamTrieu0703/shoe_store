





<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Cập nhập người dùng</div>
    <div class="panel-body">
      <form method="POST" action="?action=sua_xl" enctype="multipart/form-data">
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Họ</div>
          <div class="col-md-10">
            <input type="hidden" name="id" value=<?php echo $data['idUser']; ?>>
            <input required type="text" name="ho" value=<?php echo $data['ho']; ?>>
          </div>
        </div>
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Tên</div>
          <div class="col-md-10">
            <input required type="text" name="ten" value=<?php echo $data['ten']; ?>>
          </div>
        </div>
        <!-- rows -->

        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Email</div>
          <div class="col-md-10">
            <input id="email" required type="text" name="email" value=<?php echo $data['email']; ?>>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Địa chỉ</div>
          <div class="col-md-10">
            <input required type="text" name="diachi" value=<?php echo $data['diachi']; ?>>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Giới tính</div>
          <div class="col-md-10">
            <input type="radio" name="gioitinh" value="nam" checked>Nam
            <input type="radio" name="gioitinh" value="nu">Nữ
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Số điện thoại</div>
          <div class="col-md-10">
          <input required type="text" name="sodienthoai" value=<?php echo $data['sodienthoai']; ?>>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Tên đăng nhập</div>
          <div class="col-md-10">
          <input required type="text" name="tendangnhap" value=<?php echo $data['tendangnhap']; ?>>
          </div>
        </div>
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Mật khẩu</div>
          <div class="col-md-10">
          <input required disabled type="password" name="matkhau" value=<?php echo $data['matkhau']; ?>>
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