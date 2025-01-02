
	
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ hàng của bạn</h2>
				</div>
			</div>
		</div>
	</div>
</div>



	<section id="cart_items"  style="margin-top: -50px; margin-bottom: -50px;">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

<!-- &a=?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?> -->
		<form action="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?>" method="POST">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td >Sản Phẩm</td>
							<td>Thông Tin sản Phẩm</td>
							<td >Giá</td>
							<td >SL mua</td>
							<td >SL trong Kho</td>
							<td>Thành Tiền</td>
						
						</tr>
					</thead>
					<tbody class="tbody">

					<?php	if(isset($_SESSION['sanpham'])){
						        $_SESSION['tongtien'] = 0;
								$soluong = 0; 
					   foreach ($_SESSION['sanpham'] as $key=>$value) { 
						 	$soluong++;  
						   ?>   <!-- $key là id sp -->
						<tr>
							<td class="cart_product">
								<img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $key.$value['tenSP'] ?></a></h4>
								<p> </p> 
							</td>
							<td class="cart_price">
								<p><?= $value['Dongia'] ?>.000 VND</p>
							</td>
							<td class="cart_quantity">

                                
                                <div class="cart_quantity_button">
                                	<?php
                                	if($value['soluong_kho'] >0 ){ ?>
									<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
								<?php }else{ ?>
                                     <a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
									<?php } ?>
                                      <input class="cart_quantity_input" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
                                     <a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>

								</div>



		 					</td>
		 					<td style="width: 150px; text-align: center;font-weight: bold;font-size: 20px;color: orange;">
		 							<?php 
		 							if($value['soluong_kho'] < 0){
		 								echo "Lỗi";
		 							}else{
		 							echo $value['soluong_kho']; 
		 						}
		 							?>
		 					</td>


							<td class="cart_total" style="text-align: center;">
								<p class="cart_total_price"><?php $_SESSION['tongtien'] += $value['thanhtien']; echo $value['thanhtien'].'.000 VND'; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>"><i class="fa fa-times"></i></a>
							</td>
							
						</tr>
             <?php
			$_SESSION['soluong'] = $soluong;
			 } }?>

                         <tr>
                         	<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td style="font-size: 20px; color:orange; font-weight: bold; padding: 10px;">
								Tổng Tiền: <?php 
								if(isset($_SESSION['tongtien'])){
								echo $_SESSION['tongtien'].'.000 VND';
								echo $_SESSION['soluong'];
							}else{
								echo "";
							}
								?>
							</td>
							<td>
							</td>
                         </tr>

						
					</tbody>
				</table>


                
				<a href="?action=giohang&act=xoagiohang_all" class="pull-right" style="padding: 30px; padding-bottom: 100px;">
				   Hủy giỏ hàng <i class="fa fa-times"></i>
				</a>
			    <div style="padding: 30px; padding-bottom: 100px;">
			    <input class="pull-right" type="submit" value="Xác Nhận Giỏ Hàng">
			    </div> 
</form>

			</div>
		</div>
	</section> <!--/#cart_items-->




<script>
   function TB_hethang() {
       alert("Sản phẩm trong kho đã hết!");
}
 </script>


    
	
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Giỏ hàng của bạn</h2>
				</div>
			</div>
		</div>
	</div>
</div>



	<section id="cart_items"  style="margin-top: -50px; margin-bottom: -50px;">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

<!-- &a=?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?> -->
		<form action="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) { echo $value['Dongia'].'&b=';}?>" method="POST">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" style="width: 150px;">Sản Phẩm</td>
							<td class="description">Thông Tin sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">SL mua</td>
							<td class="quantity">SL trong Kho</td>
							<td class="total">Thành Tiền</td>
						
						</tr>
					</thead>
					<tbody class="tbody">

					<?php	if(isset($_SESSION['sanpham'])){
						        $_SESSION['tongtien'] = 0;
								$soluong = 0; 
					   foreach ($_SESSION['sanpham'] as $key=>$value) { 
						 	$soluong++;  
						   ?>   <!-- $key là id sp -->
						<tr>
							<td class="cart_product">
								<img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $key.$value['tenSP'] ?></a></h4>
								<p> </p> 
							</td>
							<td class="cart_price">
								<p><?= $value['Dongia'] ?>.000 VND</p>
							</td>
							<td class="cart_quantity">

                                
                                <div class="cart_quantity_button">
                                	<?php
                                	if($value['soluong_kho'] >0 ){ ?>
									<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
								<?php }else{ ?>
                                     <a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
									<?php } ?>
                                      <input class="cart_quantity_input" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
                                     <a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>

								</div>



		 					</td>
		 					<td style="width: 150px; text-align: center;font-weight: bold;font-size: 20px;color: orange;">
		 							<?php 
		 							if($value['soluong_kho'] < 0){
		 								echo "Lỗi";
		 							}else{
		 							echo $value['soluong_kho']; 
		 						}
		 							?>
		 					</td>


							<td class="cart_total" style="text-align: center;">
								<p class="cart_total_price"><?php $_SESSION['tongtien'] += $value['thanhtien']; echo $value['thanhtien'].'.000 VND'; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>"><i class="fa fa-times"></i></a>
							</td>
							
						</tr>
             <?php
			$_SESSION['soluong'] = $soluong;
			 } }?>

                         <tr>
                         	<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td style="font-size: 20px; color:orange; font-weight: bold; padding: 10px;">
								Tổng Tiền: <?php 
								if(isset($_SESSION['tongtien'])){
								echo $_SESSION['tongtien'].'.000 VND';
								echo $_SESSION['soluong'];
							}else{
								echo "";
							}
								?>
							</td>
							<td>
							</td>
                         </tr>

						
					</tbody>
				</table>


                
				<a href="?action=giohang&act=xoagiohang_all" class="pull-right" style="padding: 30px; padding-bottom: 100px;">
				   Hủy giỏ hàng <i class="fa fa-times"></i>
				</a>
			    <div style="padding: 30px; padding-bottom: 100px;">
			    <input class="pull-right" type="submit" value="Xác Nhận Giỏ Hàng">
			    </div> 
</form>

			</div>
		</div>
	</section> <!--/#cart_items-->




<script>
   function TB_hethang() {
       alert("Sản phẩm trong kho đã hết!");
}
 </script>


      <!-- cart item area start -->
  <div class="shopping-cart">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="location">
  					<ul>
  						<li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
  						<li><strong> Shopping cart</strong></li>
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
  						<table class="table-bordered ">
  							<thead>
  								<tr>
  									<th class="cart-item-img">Sản Phẩm</th>
  									<th class="cart-product-name">Thông tin sản phẩm</th>
  									<th class="edit">Số lượng mua</th>
  									<th class="move-wishlist">Số lượng kho</th>
  									<th class="unit-price">Thành tiền</th>
  									<th class="remove-icon">Delete</th>
  								</tr>
  							</thead>
  							<tbody class="text-center">

  								<?php if (isset($_SESSION['sanpham'])) {
										$_SESSION['tongtien'] = 0;
										$soluong = 0;
										foreach ($_SESSION['sanpham'] as $key => $value) {
											$soluong++;
									?>
  										<!-- $key là id sp -->
  										<tr>
  											<td class="cart-item-img">
  												<a href="single-product.html">
  													<img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
  												</a>
  											</td>
  											<td class="cart-product-name">
  												<a href="single-product.html">Cras neque metus</a>
  											</td>
  											<td class="edit">
  												<a href="#"><?= $key . $value['tenSP'] ?></a>
  											</td>
  											<td class="move-wishlist">
  												<a href="#"><?= number_format($value['Dongia']) ?></a>
  											</td>
  											<td class="unit-price">
  												<span>
  													<div class="cart_quantity_button">
  														<?php
															if ($value['soluong_kho'] > 0) { ?>
  															<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
  														<?php } else { ?>
  															<a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
  														<?php } ?>
  														<input class="cart_quantity_input" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
  														<a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>

  													</div>
  												</span>
  											</td>
  											<td class="quantity">
  												<span>
  													<?php
														if ($value['soluong_kho'] < 0) {
															echo "Lỗi";
														} else {
															echo $value['soluong_kho'];
														}
														?></span>
  											</td>
  											<td class="subtotal">
  												<span><?= number_format($_SESSION['tongtien'] += $value['thanhtien']) ?></span>
  											</td>
  											<td class="remove-icon">
  												<a href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>">
  													<img src="img/cart/btn_remove.png" alt="">
  												</a>
  											</td>
  										</tr>

  								<?php
											$_SESSION['soluong'] = $soluong;
										}
									} ?>

  							</tbody>
  						</table>
  					</form>
  					<div class="shopping-button">
  						<div class="continue-shopping">
  							<button type="submit">continue shopping</button>
  						</div>
  						<div class="shopping-cart-left">
  							<button type="submit">Clear Shopping Cart</button>
  							<button type="submit">Update Shopping Cart</button>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-sm-4">
  				<div class="discount-code">
  					<h3>Discount Codes</h3>
  					<p>Enter your coupon code if you have one.</p>
  					<input type="text">
  					<div class="shopping-button">
  						<button type="submit">apply coupon</button>
  					</div>
  				</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="estimate-shipping">
  					<h3>Estimate Shipping and Tax</h3>
  					<p>Enter your destination to get a shipping estimate.</p>
  					<form action="#">
  						<div class="form-box">
  							<div class="form-name">
  								<label> country <em>*</em> </label>
  								<select>
  									<option value="1">Afghanistan</option>
  									<option value="1">Algeria</option>
  									<option value="1">American Samoa</option>
  									<option value="1">Australia</option>
  									<option value="1">Bangladesh</option>
  									<option value="1">Belgium</option>
  									<option value="1">Bosnia and Herzegovina</option>
  									<option value="1">Chile</option>
  									<option value="1">China</option>
  									<option value="1">Egypt</option>
  									<option value="1">Finland</option>
  									<option value="1">France</option>
  									<option value="1">United State</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-box">
  							<div class="form-name">
  								<label> State/Province </label>
  								<select>
  									<option value="1">Please select region, state or province</option>
  									<option value="1">Arizona</option>
  									<option value="1">Armed Forces Africa</option>
  									<option value="1">California</option>
  									<option value="1">Florida</option>
  									<option value="1">Indiana</option>
  									<option value="1">Marshall Islands</option>
  									<option value="1">Minnesota</option>
  									<option value="1">New Mexico</option>
  									<option value="1">Utah</option>
  									<option value="1">Virgin Islands</option>
  									<option value="1">West Virginia</option>
  									<option value="1">Wyoming</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-box">
  							<div class="form-name">
  								<label> Zip/Postal Code </label>
  								<input type="text">
  							</div>
  						</div>
  						<div class="shopping-button">
  							<button type="submit">get a quote</button>
  						</div>
  					</form>
  				</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="totals">
  					<p>subtotal <span>$1,540.00</span> </p>
  					<h3>Grand Total <span>$1,540.00</span></h3>
  					<div class="shopping-button">
  						<button type="submit">proceed to checkout</button>
  					</div>
  					<a href="#">Checkout with Multiple Addresses</a>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
  <!-- cart item area end -->