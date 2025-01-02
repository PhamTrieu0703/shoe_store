<?php
// session_start();

// Kiểm tra xem biến 'sanpham' đã được khởi tạo chưa
if (!isset($_SESSION['sanpham'])) {
    $_SESSION['sanpham'] = []; // Khởi tạo biến 'sanpham' nếu chưa tồn tại
}

// Tính tổng tiền nếu có sản phẩm trong giỏ hàng
if (isset($_SESSION['sanpham']) && is_array($_SESSION['sanpham'])) {
    $_SESSION['tongtien'] = 0;
    foreach ($_SESSION['sanpham'] as $value) {
        $_SESSION['tongtien'] += $value['thanhtien'];
    }
}
?>

<style>
    .x:hover {
        background-color: #E03550;
        color: white;
    }

    .buttonx {
        background-color: transparent;
        border: 1px solid #eee;
        color: #959595;
        font-size: 12px;
        font-weight: 500;
        line-height: 34px;
        padding: 10px 15px;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        transition: all 0.3s ease 0s;
    }
</style>

<!-- cart item area start -->
<div class="shopping-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="location">
                    <ul>
                        <li><a href="index.html" title="go to homepage">Home<span>/</span></a></li>
                        <li><strong>Shopping cart</strong></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <form action="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) {
                                                            echo $value['Dongia'] . '&b=';
                                                        } ?>" method="POST">
                        <table class="table-bordered">
                            <thead>
                                <tr>
                                    <th class="cart-item-img">Sản Phẩm</th>
                                    <th class="cart-product-name">Thông tin sản phẩm</th>
                                    <th class="edit">Đơn giá</th>
                                    <th class="edit">Số lượng mua</th>
                                    <th class="move-wishlist">Số lượng kho</th>
                                    <th class="unit-price">Thành tiền</th>
                                    <th class="remove-icon">Xóa</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php if (isset($_SESSION['sanpham']) && is_array($_SESSION['sanpham']) && count($_SESSION['sanpham']) > 0) {
                                    foreach ($_SESSION['sanpham'] as $value) { ?>
                                        <tr>
                                            <td class="cart-item-img">
                                                <a href="single-product.html">
                                                    <img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
                                                </a>
                                            </td>
                                            <td class="cart-product-name">
                                                <a href="#"><?= $value['tenSP'] ?></a>
                                            </td>
                                            <td class="move-wishlist">
                                                <a href="#"><?= number_format($value['Dongia']) ?> VND</a>
                                            </td>
                                            <td class="unit-price">
                                                <span>
                                                    <div class="cart_quantity_button">
                                                        <?php if ($value['soluong_kho'] > 0) { ?>
                                                            <a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
                                                        <?php } else { ?>
                                                            <a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
                                                        <?php } ?>
														<input class="cart_quantity_input" style="text-align:center" size="5" type="text" name="soluong" value="<?php echo $value['soluong']; ?>" readonly>
                                                        <a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>
                                                    </div>
                                                </span>
                                            </td>
                                            <td class="quantity">
                                                <span><?php echo $value['soluong_kho']; ?></span>
                                            </td>
                                            <td class="subtotal">
                                                <span><?php echo number_format($value['thanhtien']); ?> VND</span>
                                            </td>
                                            <td class="remove-icon">
                                                <a href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>">
                                                    <img src="public/img/cart/btn_remove.png" alt="xoa">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } 
                                } else {
                                    echo "<tr><td colspan='7'>Giỏ hàng trống</td></tr>"; // Thông báo giỏ hàng trống
                                } ?>
                            </tbody>
                        </table>

                        <div class="shopping-button">
                            <div class="continue-shopping x">
                                <a class="buttonx" href="?action=trangchu">Tiếp tục mua</a>
                            </div>
                            <div class="shopping-cart-left x">
                                <a class="buttonx" href="?action=giohang&act=xoagiohang_all">Hủy giỏ hàng</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="totals">
                    <div style="display:flex; justify-content:flex-end">
                        <h3>Tổng Tiền <span><?= isset($_SESSION['tongtien']) ? number_format($_SESSION['tongtien']) . ' VND' : "0"; ?></span></h3>
                    </div>
                    <div class="shopping-button" style="margin-bottom: 5px;">
                        <button type="submit" onclick="checkCart()">Xác nhận thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- cart item area end -->
<script>
    function TB_hethang() {
        alert("Sản phẩm trong kho đã hết!");
    }
	function checkCart() {
        // Kiểm tra xem giỏ hàng có sản phẩm hay không
        var cartItems = <?php echo json_encode($_SESSION['sanpham']); ?>;
        if (cartItems.length === 0) {
            alert("Giỏ hàng trống! Vui lòng thêm sản phẩm trước khi thanh toán.");
			event.preventDefault(); // Ngăn chặn  không cho gởi form submit
        } else {
            // document.getElementById('cart-form').submit(); // Gửi form nếu giỏ hàng không trống
			// chuyển nút thành submit
			
			
        }
    }
</script>
