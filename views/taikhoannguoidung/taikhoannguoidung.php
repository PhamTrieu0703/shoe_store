<!-- pages-title-start -->
<div class="shopping-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="location">
          <ul>
            <li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
            <li><strong>Login page</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="pages-title section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="pages-title-text text-center">
          <h2>Thông tin tài khoản</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Tài khoản người dùng</li>
      </ol>
    </div>
  </div>
</section>

<!-- pages-title-end -->
<!-- My account content section start -->
<section class="pages my-account-page section-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <div class="padding60">
          <div class="log-title">
            <h3><strong>Tài khoản của tôi</strong></h3>
          </div>
          <div class="prament-area main-input" id="doitk">
            <ul class="panel-group" id="accordion">
              <li class="panel">
                <div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
                  <label>
                    <input type="radio" checked value="forever" name="rememberme">
                    Thông tin cá nhân
                  </label>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="single-log-info">
                    <div class="bulling-title">
                      <div class="custom-input">
                        <form action="?action=suataikhoan" method="POST">
                          <input type="hidden" name="idUser" value="<?php echo $data_taikhoan['idUser'] ?>" required>
                          <div class="row">
                            <div class="col-md-6">
                              <label for="ho">Họ:</label>
                              <input type="text" id="ho" name="ho" placeholder="Họ.." value="<?php echo $data_taikhoan['ho'] ?>" required>
                            </div>
                            <div class="col-md-6">
                              <label for="ten">Tên:</label>
                              <input type="text" id="ten" name="ten" placeholder="Tên.." value="<?php echo $data_taikhoan['ten'] ?>" required>
                            </div>
                          </div>

                          <label for="email">Email:</label>
                          <input type="text" id="email" name="email" placeholder="Email.." value="<?php echo $data_taikhoan['email'] ?>" required>

                          <label for="diachi">Địa chỉ:</label>
                          <input type="text" id="diachi" name="diachi" placeholder="Địa chỉ.." value="<?php echo $data_taikhoan['diachi'] ?>" required>

                          <label for="gioitinh">Giới tính:</label>
                          <div class="custom-select">
                            <select id="gioitinh" class="form-control" name="gioitinh" title="Giới tính" style="width:20%">
                              <option value="Nam" <?php if ($data_taikhoan['gioitinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
                              <option value="Nữ" <?php if ($data_taikhoan['gioitinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
                              <option value="Khác" <?php if ($data_taikhoan['gioitinh'] == 'Khác') echo 'selected'; ?>>Khác</option>
                            </select>
                          </div>

                          <label for="sodienthoai">Số điện thoại:</label>
                          <input type="text" id="sodienthoai" name="sodienthoai" placeholder="Số điện thoại.." pattern="[0-9]+" minlength="9" value="<?php echo $data_taikhoan['sodienthoai'] ?>" required />

                          <label for="tendangnhap">Tên đăng nhập:</label>
                          <input type="text" id="tendangnhap" name="tendangnhap" placeholder="Tên đăng nhập.." value="<?php echo $data_taikhoan['tendangnhap'] ?>" required />

                          <div class="submit-text">
                            <button type="submit">Lưu</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </li>

              <!-- Đổi mật khẩu -->
              <li class="panel">
                <div class="account-title" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
                  <label>
                    <input type="radio" value="forever" name="rememberme" />
                    Đổi mật khẩu
                  </label>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="single-log-info">
                    <div class="custom-input">

					<?php
// Include your database connection file

						include_once 'connect.php'; 


						if ($_SERVER['REQUEST_METHOD'] === 'POST') {
							// Get form data
							$idUser = $_POST['idUser'];
							$currentPassword = $_POST['matkhau'];
							$newPassword = $_POST['matkhaumoi'];
							$confirmPassword = $_POST['xacnhanmatkhau'];

							// Fetch the current password for the user from the database
							$query = "SELECT matkhau FROM user WHERE idUser = ?";
							$stmt = $conn->prepare($query);
							$stmt->bind_param('s', $idUser);
							$stmt->execute();
							$result = $stmt->get_result();
							
							if ($result->num_rows > 0) {
								$row = $result->fetch_assoc();
								$hashedCurrentPassword = $row['matkhau'];

								// Check if the current password matches the stored password
								if ($currentPassword === $hashedCurrentPassword) {
									// Validate the new password and confirm password match
									if ($newPassword === $confirmPassword) {
										// Update the password in the database
										$updateQuery = "UPDATE user SET matkhau = ? WHERE idUser = ?";
										$updateStmt = $conn->prepare($updateQuery);
										$updateStmt->bind_param('ss', $newPassword, $idUser);
										
										if ($updateStmt->execute()) {
											echo "<script>alert('Cập nhật mật khẩu thành công.');</script>";
										} else {
											echo "<script>alert('Đã xảy ra lỗi. Vui lòng thử lại.');</script>";
										}
									} else {
										echo "<script>alert('Mật khẩu mới và xác nhận mật khẩu không khớp.');</script>";
									}
								} else {
									echo "<script>alert('Mật khẩu hiện tại không đúng.');</script>";
								}
							} else {
								echo "<script>alert('Người dùng không tồn tại.');</script>";
							}

							$stmt->close();
						}
						?>

						<!-- Include your existing form code here -->
						<form action="" method="post" onsubmit="return validatePasswordChange()">
							<input type="hidden" name="idUser" value="<?php echo $data_taikhoan['idUser'] ?>">
							<input id="mk_ht" type="password" placeholder="Mật khẩu hiện tại .. " name="matkhau" minlength="5" required>
							<input id="mk" type="password" placeholder="Mật khẩu mới .. " name="matkhaumoi" required />
							<input id="nhaplai_mk" type="password" placeholder="Xác nhận lại mật khẩu .." name="xacnhanmatkhau" required>
							<div class="submit-text text-left">
								<button type="submit">Lưu</button>
							</div>
						</form>

            
                    </div>
                  </div>
                </div>
              </li>
              <!-- end đổi mật khẩu -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="popupNotification" class="popup">
    <span id="popupMessage"></span>
    <button onclick="closePopup()">Close</button>
  </div>
</section>
<!-- my account content section end -->

<script>
function validatePasswordChange() {
    const mkHt = document.getElementById("mk_ht").value.trim();
    const mk = document.getElementById("mk").value;
    const xacnhanMk = document.getElementById("nhaplai_mk").value;
    
    // Validate current password
    if (mkHt === "") {
        showPopup("Vui lòng nhập mật khẩu hiện tại.");
        return false;
    }
    
    // Validate new password
    const matkhauPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    if (!matkhauPattern.test(mk)) {
        showPopup("Mật khẩu mới phải có ít nhất 8 ký tự, bao gồm ít nhất 1 số, 1 chữ cái và 1 ký tự đặc biệt.");
        return false;
    }

    // Validate password confirmation
    if (mk !== xacnhanMk) {
        showPopup("Mật khẩu xác nhận không khớp.");
        return false;
    }

    return true; // All validation passed
}

function showPopup(message) {
    document.getElementById("popupMessage").textContent = message;
    document.getElementById("popupNotification").style.display = "block";
}

function closePopup() {
    document.getElementById("popupNotification").style.display = "none";
}
</script>

<style>
.popup {
    display: none;
    position: fixed;
    left: 50%;
    top: 30%;
    transform: translate(-50%, -50%);
    background-color: white;
    border: 1px solid #ddd;
    padding: 20px;
    z-index: 1000;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
.popup button {
    margin-top: 10px;
    padding: 5px 10px;
}
</style>
