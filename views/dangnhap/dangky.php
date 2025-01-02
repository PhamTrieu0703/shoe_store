<div class="shopping-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="location">
          <ul>
            <li><a href="index.html" title="go to homepage">Home<span>/</span></a></li>
            <li><strong>Login page</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper">
  <ul class="load-list load-list-three">
    <li>
      <div class="row text-center">
        <div class="container">
          <div class="row">
            <div class="registration-box">
              <legend class="register-title">
                <a href="#"><i class="glyphicon glyphicon-globe"></i></a>
                Đăng ký thành viên!
              </legend>
              <form action="?action=dangky_xl" method="POST" class="form" role="form" onsubmit="return validate()">
                <div class="col-sm-4">
                  <input class="form-control regis" type="text" name="ho_dk" placeholder="Họ" required>
                  <input class="form-control regis" type="text" name="ten_dk" placeholder="Tên" required>
                  <div class="gender">
                    <span>Giới tính:</span>
                    <input type="radio" name="gioitinh_dk" value="nam" checked> Nam
                    <input type="radio" name="gioitinh_dk" value="nu"> Nữ
                  </div>
                </div>
                <div class="col-sm-4">
                  <input class="form-control regis" type="text" name="diachi_dk" placeholder="Địa chỉ" required>
                  <input class="form-control regis" type="text" name="email_dk" placeholder="Email" required>
                  <input class="form-control regis" type="text" name="sdt_dk" placeholder="Số điện thoại" required>
                </div>
                <div class="col-sm-4">
                  <input class="form-control regis" type="text" name="tendangnhap_dk" placeholder="Tên đăng nhập" required>
                  <input id="mk1" class="form-control regis" type="password" name="matkhau_dk" placeholder="Mật khẩu" required>
                  <input id="mk2" class="form-control regis" type="password" name="matkhau_xn" placeholder="Nhập lại mật khẩu" required>
                </div>
                <button class="btn btn-md btn-danger" type="submit" name="submit">Đăng ký</button>
              </form>
              <div class="text-center">
                <span>Bạn đã có tài khoản?</span>
                <a class="dn" href="?action=dangnhap">Đăng nhập</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
<script>
  function validate() {
    // Lấy các giá trị từ form
    var ho = document.getElementsByName("ho_dk")[0].value;
    var ten = document.getElementsByName("ten_dk")[0].value;
    var diachi = document.getElementsByName("diachi_dk")[0].value;
    var email = document.getElementsByName("email_dk")[0].value;
    var sdt = document.getElementsByName("sdt_dk")[0].value;
    var tendangnhap = document.getElementsByName("tendangnhap_dk")[0].value;
    var matkhau = document.getElementById("mk1").value;
    var matkhau_xn = document.getElementById("mk2").value;
    var gioitinh_nam = document.getElementsByName("gioitinh_dk")[0].checked;
    var gioitinh_nu = document.getElementsByName("gioitinh_dk")[1].checked;

    // Kiểm tra họ và tên không rỗng
    if (ho.trim() === "") {
      alert("Họ không được để trống.");
      return false;
    }
    if (ten.trim() === "") {
      alert("Tên không được để trống.");
      return false;
    }

    // Kiểm tra địa chỉ không rỗng
    if (diachi.trim() === "") {
      alert("Địa chỉ không được để trống.");
      return false;
    }

    // Kiểm tra email có chứa @
    if (email.indexOf("@") === -1) {
      alert("Email phải chứa ký tự '@'.");
      return false;
    }

    // Kiểm tra mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất 1 số, 1 chữ cái và 1 ký tự đặc biệt
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    if (!passwordPattern.test(matkhau)) {
      alert("Mật khẩu phải có ít nhất 8 ký tự, bao gồm ít nhất 1 số, 1 chữ cái và 1 ký tự đặc biệt.");
      return false;
    }

    // Kiểm tra nhập lại mật khẩu phải khớp với mật khẩu
    if (matkhau !== matkhau_xn) {
      alert("Mật khẩu nhập lại không khớp.");
      return false;
    }

    // Kiểm tra số điện thoại phải đủ 10 hoặc 11 số và bắt đầu bằng số 0
    var phonePattern = /^0\d{9,10}$/;
    if (!phonePattern.test(sdt)) {
      alert("Số điện thoại phải bắt đầu bằng số 0 và có độ dài từ 10 đến 11 số.");
      return false;
    }

    // Kiểm tra giới tính phải được chọn
    if (!gioitinh_nam && !gioitinh_nu) {
      alert("Vui lòng chọn giới tính.");
      return false;
    }

    // Nếu tất cả các kiểm tra đều đúng, form sẽ được submit
    return true;
  }
</script>


<style>
  .registration-box {
  background-color: lightgray;
  padding: 20px;
}

.register-title {
  font-size: 24px;
  color: gray;
  margin-bottom: 20px;
}

.form-control.regis {
  margin-bottom: 15px;
}

.gender {
  color: gray;
  font-size: 15px;
  margin-top: 10px;
}

.text-center {
  margin-top: 20px;
}

a.dn {
  color: gray;
}

.btn-danger {
  margin-top: 15px;
}

</style>
