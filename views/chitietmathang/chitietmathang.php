<div id="main-content-wp" class="detail-product-page">
    <!-- single product area start -->
    <div class="Single-product-location home2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location">
                        <ul>
                            <li><a href="?page=home" title="go to homepage">Home<span>/</span></a> </li>
                            <li><strong><?php echo $data_chitiet['tenSP']; ?></strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product area end -->
    <!-- single product details start -->
    <div class="single-product-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-product-img tab-content">
                        <div class="single-pro-main-image tab-pane active" id="pro-large-img-1">
                            <a href="#">
                                <img class="optima_zoom" src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh1']; ?>" data-zoom-image="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh1']; ?>">
                            </a>
                        </div>

                    </div>
                    <div class="product-page-slider">
                        <div class="single-product-slider">
                            <a href="#pro-large-img-1" data-toggle="tab">
                                <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh2']; ?>" alt="" class="simpleLens-big-image">
                            </a>
                        </div>
                        <div class="single-product-slider">
                            <a href="#pro-large-img-1" data-toggle="tab">
                                <img src="admin/public_admin/image/sanpham/<?php echo $data_chitiet['anh3']; ?>" alt="" class="simpleLens-big-image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-product-details">
                        <a href="#" class="product-name"><?php echo $data_chitiet['tenSP']; ?></a>
                        <!-- <div class="list-product-info">
                            <div class="price-rating">
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <a href="#" class="review">1 Review(s)</a>
                                    <a href="#" class="add-review">Add Your Review</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="avalable" style="margin-top:10px">
                            <p>Tình trạng:<span>
                                    <?php if ($size['soluong'] < 1) {
                                        echo "hết hàng";
                                    } else {
                                        echo "còn hàng";
                                    } ?>
                                </span></p>
                        </div>
                        <div class="item-price">
                            <span>Giá: <?php echo number_format($data_chitiet['Dongia']); ?> VND</span>
                            <!-- <span class="price-new" style="text-decoration: line-through;">Giá gốc: <?php echo number_format($product->price); ?> VND</span> -->


                            <form action="../../cart/index" method="POST">
                                <!-- <input type="hidden" name="namess" value="<?php echo $product->name; ?>">
                                <input type="hidden" name="idproductss" value="<?php echo number_format($product->id); ?>"> -->
                                <div class="select-catagory">
                                    <div class="size-select">
                                        <label class="required">
                                            <em>*</em> Màu sắc : <?php echo $ten_color['color']; ?>
                                        </label>
                                        <!-- <div class="input-box" style="width:30%">
                                            <select name="color" id="select-1">
                                                <option style="text-align:center" value=""></option>
                                            </select>
                                        </div> -->
                                    </div>

                                    <div class="size-select">
                                        <label class="required">
                                            <em>*</em> Size: <?php echo $size['size']; ?>
                                        </label>
                                        <!-- <div class="input-box" style="width:30%; ">
                                            <select name="size" id="select-2">
                                                <option style="text-align:center" value="">-- Please Select --</option>
                                               
                                            </select>
                                        </div> -->
                                    </div>

                                </div>
                                <div class="cart-item">
                                    <div class="single-cart">
                                        <!-- 
                                        <label>Số lượng: </label>
                                        <select style="width: 100px; height: 40px; margin-top:10px;" name="select_amount">
                                            <?php for ($i = 1; $i <= $product->amount; $i++) { ?>

                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php }  ?>
                                        </select> -->
                                        <br>
                                        <a class="cart-btn" href="?action=giohang&act=add_giohang&id=<?= $data_chitiet['idSP'] ?>">Thêm vào giỏ hàng</a>
                                        <!-- <input id="add-to-cart" class="cart-btn" type="submit" name="submitcart" value="ADD TO CART"> -->
                                        <!-- <input id="buy-now" class="cart-btn" type="submit" name="buynow" value="BUY NOW"> -->

                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="single-product-info">
                            <p><?php echo $data_chitiet['mota']; ?></p>
                            <!-- <div class="share">
                                <img src="public/img/product/share.png" alt="">
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- single product details end -->
    <!-- single product tab start -->
    <div class="single-product-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="single-product-tab">
                        <ul class="single-product-tab-navigation" role="tablist">
                            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chi tiết sản phẩm</a></li>
                            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Bình luận</a></li>
                            <!-- <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">product tag</a></li> -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content single-product-page">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="single-p-tab-content">
                                    <div class="tb">
                                        <h5>ĐẶC ĐIỂM</h5>
                                        <ul>
                                            <li>
                                                <span>kiểu giày: <span><?php echo $ten_loaisanpham['tenLSP']; ?></span></span>
                                            </li>
                                            <li>
                                                <span>Màu sắc: <span><?php echo $ten_color['color']; ?></span></span>

                                            </li>
                                            <li>
                                                <span>Kích cỡ: <span><?php echo $size['size']; ?></span></span>
                                            </li>
                                            <li>
                                                <span>Số lượng còn trong kho: <span><?php echo $size['soluong']; ?></span></span>
                    
                                            </li>
                                            <li>
                                                <span>Ngày nhập: <span><?php echo $data_chitiet['ngaynhap']; ?></span></span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="single-p-tab-content">
                                    <div class="row">
                                        <?php foreach ($xem_gopy as $value) { ?>
                                            <?php if ($data_chitiet['idSP'] == $value['idSP']) { ?>
                                                <div style="padding: 20px; border: 1px dotted gray; width: 100%; margin: 5px; border-radius: 10px;">

                                                    <span> <STRONG>
                                                            <?php echo $value['email']; ?>
                                                        </STRONG>
                                                        <span style="padding-left: 30px">
                                                            <?php echo $value['noidung']; ?>
                                                        </span><span>
                                                </div>
                                            <?php }  ?>
                                        <?php } ?>
                                        <form action="?action=gopy&id=<?php echo $data_chitiet['idSP']; ?>" method="POST" style="margin-top: 20px; border: 1px dotted gray; padding-left: 10px; padding-top: 5px; border-radius: 10px">
                                            <input type="hidden" name="idSP" value="<?php echo $data_chitiet['idSP']; ?>">
                                            <input style="margin-top: 10px;font-family: inherit; font-size: inherit; line-height: inherit; height: 40px;display: block;padding: 10px 10px;border: 1px solid #ddd;width: 35%;margin-bottom: 15px;" type="text" name="email_gopy" placeholder="Email của bạn"><br>
                                            <textarea placeholder="Nội dung..." style="font-family: inherit; font-size: inherit; line-height: inherit; height: 50px;display: block;padding: 5px 10px;border: 1px solid #ddd;width: 95%;margin-bottom: 15px; resize: none;" name="noidung_gopy"></textarea><br>
                                            <input style="display: block;border: none;outline: none;background: #4fa327;color: #fff;padding: 8px 20px;margin-bottom: 50px;" type="submit" name="submitcomment" value="ADD COMMENT">
                                        </form>
                                        <?php

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div role="tabpanel" class="tab-pane fade" id="tab3">
                                    <div class="single-p-tab-content">
                                        <div class="add-tab-title">
                                            <p> add your tag </p>
                                        </div>
                                        <div class="add-tag">
                                            <form action="#">
                                                <input type="text">
                                                <button type="submit">add tags</button>
                                            </form>
                                        </div>
                                        <p class="tag-rules">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single product tab end -->


</div>