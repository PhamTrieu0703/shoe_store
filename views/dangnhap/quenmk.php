<?php
// session_start(); // Ensure session is started

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$emailSent = false;
$codeVerified = false;
$emailExists = false; // Variable to check if email exists

// Database connection
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "shoe_store";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include_once 'connect.php'; 


// Process email sending
if (isset($_POST['submit_code'])) {
    $recipientEmail = filter_var($_POST['email_laymk'], FILTER_SANITIZE_EMAIL);
    
    // Check if the email exists in the database
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $recipientEmail);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $emailExists = true;
        $_SESSION['recipient_email'] = $recipientEmail; // Store the email in the session
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'trieuwjbu2k3@gmail.com';
            $mail->Password = 'mggp xeie gcdg adjx'; // Use your app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('trieuwjbu2k3@gmail.com', 'Support Team');
            $mail->addAddress($recipientEmail);

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'RUNNING 2023 - GO VAP Confirm: Password recovery';
            $recoveryCode = rand(10000, 99999);
            $_SESSION['recovery_code'] = $recoveryCode; // Store the recovery code in session

            $mail->Body = "
                <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
                    <h3>Xin chào,</h3>
                    <p>Đây là mã khôi phục mật khẩu của bạn.</p>
                    <p><strong>Mã:</strong> <span style='font-size: 1.5em; color: #007bff;'>{$recoveryCode}</span></p>
                    <p>Mã này chỉ có giá trị trong <strong>60 phút</strong>. Nếu nó đã hết hạn, hãy đăng nhập vào client của chúng tôi để yêu cầu một liên kết mới.</p>
                    <hr style='border: 1px solid #ddd;'>
                    <h4>=================================================</h4>
                    <h3>SHOP RUNNING - 2023 GÒ VẤP NHA</h3>
                    <p><strong>Uy tín - Chất lượng - Sang trọng</strong></p>
                    <p>Running Gò Vấp một khi đã mua thì không sợ Vấp</p>
                    
                    <h4>Thông tin chi nhánh:</h4>
                    <p>Chi nhánh TPHCM: Gò Vấp, Hồ Chí Minh<br>
                    Điện thoại:0907795988<br>
                   
                    Email: <a href='mailto:trieuwjbu2k3@gmail.com'>trieuwjbu2k3@gmail.com</a></p>
                    
                    <img src='https://picsum.photos/seed/picsum/200/300' alt='Shop Running' style='width: 100%; max-width: 600px; height: auto; margin: 20px 0;'>
                    
                    <p>visit our website | log in to your account | get support</p>
                    <footer style='font-size: 0.9em; color: #666;'>
                        Copyright © SHOP RUNNING - 2023 GÒ VẤP, All rights reserved.
                    </footer>
                </div>
            ";





            // Send the email
            $mail->send();
            $emailSent = true;
            echo "<script>alert('Email đã được gửi thành công! Vui lòng kiểm tra hộp thư đến của bạn.');</script>"; 
        } catch (Exception $e) {
            echo "<script>alert('Không thể gửi email. Lỗi: {$mail->ErrorInfo}');</script>";
        }
    } else {
        echo "<script>alert('Email không tồn tại trong hệ thống.');</script>";
    }
}

// Process recovery code verification
if (isset($_POST['submit_check'])) {
    $inputCode = trim($_POST['code'] ?? '');
    
    if ($inputCode === trim($_SESSION['recovery_code'])) {
        $codeVerified = true; // Recovery code is correct
    } else {
        echo "<script>alert('Mã khôi phục không chính xác.');</script>";
    }
}

// Process password change



if (isset($_POST['submit_password'])) {
    $newPassword = $_POST['new_password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    
    // Retrieve the email from the session
    $recipientEmail = $_SESSION['recipient_email'] ?? '';

    if ($recipientEmail) {
        // Validate the new password
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/"; // At least 8 characters, 1 letter, 1 number, 1 special character
        if (!preg_match($passwordPattern, $newPassword)) {
            echo "<script>alert('Mật khẩu mới phải có ít nhất 8 ký tự, bao gồm ít nhất 1 chữ cái, 1 số và 1 ký tự đặc biệt.');</script>";
            // nhập lại
            
            echo "<script>window.location.href='?action=dangnhap';</script>";

        } else {
            if ($newPassword === $confirmPassword) {
                // No password hashing, store the plain password directly
                $query = "UPDATE user SET matkhau = ? WHERE email = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('ss', $newPassword, $recipientEmail);
                
                if ($stmt->execute()) {
                    // Password update successful
                    echo "<script>alert('Mật khẩu đã được thay đổi thành công.');</script>";
                    
                    // Clear the recovery code from the session
                    unset($_SESSION['recovery_code']);
                    // chuyển sang trang đăng nhập
                    echo "<script>window.location.href='?action=dangnhap';</script>";
                } else {
                    // Password update failed
                    echo "<script>alert('Đã xảy ra lỗi khi thay đổi mật khẩu.');</script>";
                }
            } else {
                // Password confirmation failed
                echo "<script>alert('Mật khẩu xác nhận không khớp.');</script>";
            }
        }
    } else {
        // No email in session
        echo "<script>alert('Không có email trong session.');</script>";
    }
}
?>



<!-- HTML forms for password recovery -->
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
<div class="login-area">
    <div class="container">
        <div class="text-center tab-content login">
            <div class="tab-pane fade in active login-form-container" id="arrival">
                <div class="wrapper">
                    <ul class="load-list load-list-three">
                        <li>
                            <div class="row text-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4 onee">
                                            <legend>Hãy nhập thông tin của bạn</legend>

                                            <!-- Form to get recovery code -->
                                            <form action="" method="POST" class="form" role="form" <?php echo $codeVerified ? 'style="display:none;"' : ''; ?>>
                                                <input class="form-control" type="email" name="email_laymk" placeholder="Nhập Email của bạn" required 
                                                       <?php echo $emailSent ? 'readonly' : ''; ?> value="<?php echo $emailSent ? $recipientEmail : ''; ?>">
                                                <button class="btn btn-lg btn-primary btn-block button2" type="submit" name="submit_code" <?php echo $emailSent ? 'style="display:none;"' : ''; ?>>Lấy mã</button>
                                            </form>

                                            <?php if ($emailSent && !$codeVerified): ?>
                                                <!-- Form to check recovery code -->
                                                <form action="" method="POST" class="form" role="form">
                                                    <input class="form-control" type="text" name="code" placeholder="Nhập mã trong mail" required>
                                                    <button class="btn btn-lg btn-primary btn-block button2" type="submit" name="submit_check">Kiểm tra mã</button>
                                                </form>
                                            <?php endif; ?>

                                            <?php if ($codeVerified): ?>
                                                <!-- Form to change password -->
                                                <form action="" method="POST" class="form" role="form">
                                                    <input class="form-control" type="password" name="new_password" placeholder="Nhập mật khẩu mới" required>
                                                    <input class="form-control" type="password" name="confirm_password" placeholder="Nhập lại mật khẩu mới" required>
                                                    <button class="btn btn-lg btn-primary btn-block button2" type="submit" name="submit_password">Đổi mật khẩu</button>
                                                </form>
                                            <?php endif; ?>

                                            <div class="text-center">
                                                <br>
                                                <span> Bạn đã có tài khoản? </span>
                                                <a class="dn" href="?action=dangnhap" title="">Đăng nhập</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
