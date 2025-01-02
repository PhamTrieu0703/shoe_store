<!-- <div class="cuahang">
<h1>Cửa Hàng</h1>
</div>

<section id="cart_items" style="margin-top: -50px; margin-bottom: -50px;">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Cửa hàng</li>
                </ol>
            </div>
        </div>
    </section> -->

<div class="container cn2">
  <div class="row">

    <div class="col-sm-3">
      <div class="left-sidebar">

        <h2>Danh muc</h2>
        <div class="panel-group category-products" id="accordian">
          <!--category-productsr-->

          <?php foreach ($data_loaisanpham as $value) {  ?>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a href="?action=cuahang&id=<?= $value['idLoaiSP'] ?>">
                    <?= $value['tenLSP'] ?>
                  </a>
                </h4>
              </div>
            </div>

          <?php } ?>


        </div>

      </div>




      <div class="chongia">
        <div class="chongia2">

          <div class="dropdown" style="float:left; margin-left: 20px; margin-right: 30px;">
            <button class="dropbtn">Màu</button>
            <div class="dropdown-content" style="left:0;">

              <div class="container" style="background-color: white; width: 500px;">
                <?php foreach ($color as $value) {   ?>
                  <div class="col-sm-2">
                    <a href="?action=cuahang&idmau=<?= $value['idcolor'] ?>" class="acolor">
                      <?php echo $value['color']; ?></a>
                  </div>
                <?php } ?>
              </div>

            </div>
          </div>
          <div class="dropdown" style="margin-left: 9px;">
            <button class="dropbtn">Size</button>
            <div class="dropdown-content" style="left:-50px;">

              <div class="container" style="background-color: white; width: 250px;">
                <?php foreach ($size as $value) {   ?>
                  <div class="col-sm-2">
                    <a href="?action=cuahang&idsize=<?= $value['idsize'] ?>" class="acolor">
                      <?php echo $value['size']; ?></a>
                  </div>
                <?php } ?>
              </div>

            </div>
          </div>
          <!-- giá -->
          <br>
          <br>


        </div>
        <center>
          <h4>Chọn giá</h4>
        </center>
        <div style="">

          <form method="POST" action="?action=cuahang1">
            <div class="" style="padding: 5px;">

              <label>Chọn giá bắt đầu: </label>
              <select name="a">
                <option value="100">100,000 vnd</option>
                <option value="200">200,000 vnd</option>
                <option value="300">300,000 vnd</option>
                <option value="400">400,000 vnd</option>
                <option value="500">500,000 vnd</option>
                <option value="600">600,000 vnd</option>
                <option value="700">700,000 vnd</option>
                <option value="800">800,000 vnd</option>
                <option value="900">900,000 vnd</option>
                <option value="1000">1000,000 vnd</option>
              </select>

              <br>
              <br>

              <label>Chọn giá Kết thúc: </label>
              <select name="b">
                <option value="100">100,000 vnd</option>
                <option value="200">200,000 vnd</option>
                <option value="300">300,000 vnd</option>
                <option value="400">400,000 vnd</option>
                <option value="500">500,000 vnd</option>
                <option value="600">600,000 vnd</option>
                <option value="700">700,000 vnd</option>
                <option value="800">800,000 vnd</option>
                <option value="900">900,000 vnd</option>
                <option value="1000">1000,000 vnd</option>
              </select>

              <br>
              <br>
              <center>
                <input type="submit" value="Tìm Kiếm">
              </center>

            </div>
          </form>
        </div>
        <!-- giá -->
      </div>

      <br>
      <br>



    </div> <!-- div thứ 3 -->

    <div class="col-sm-9 padding-right c_cn2">
      <!-- hiển thị sản phẩm -->

      <div class="features_items">
        <!--features_items-->

        <?php foreach ($data_sanphamcuahang as $value) { ?>

<div class="col-sm-3">
    <div class="single-product">
        <div class="product-f">
            <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>">
                <img src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="Product Title" class="img-products" />
            </a>

            <!-- Display "Out of Stock" icon if quantity is 0 -->
            <?php if ($value['soluong'] == 0) { ?>
                <div class="out-of-stock">
                    <img src="/images/sold_out.png" alt="Out of Stock" />
                </div>
            <?php } ?>

            <!-- Display Sale Percentage if there's a promotion -->
            <?php if ($value['giatriKM'] != 0) { ?>
                <div class="sale-badge">
                    <img src="images/sales.png" alt="Sale Badge">
                    <span class="sale-text"><?= $value['giatriKM'] ?>%</span>
                </div>
            <?php } ?>

            <div class="product-price">
                <div class="product-name">
                    <a href="" title="" class="name-product"> <?php echo $value['tenSP'] ?> </a>
                </div>
                <div class="price-rating">
                    <span>Size: <?php echo $value['size'] ?> </span>
                </div>
                <div class="price-rating">
                    <span>Màu: <?php echo $value['color'] ?> </span>
                </div>
                <div class="price-rating">
                    <span>Số lượng còn: <?php echo $value['soluong'] ?> </span>
                </div>
                <div class="price-rating">
                    <span>Khuyến mãi: <?php echo "<b class='km_km'>" . $value['giatriKM'] ?> </span>
                </div>
                <div class="price-rating">
                    <span> 
                    <?php if ($value['giatriKM'] != 0) {
                            echo " <strike><i>" . number_format($value['Dongia']) . " VND</i></strike><br> ";
                            echo " <i class='fa fa-arrow-right'></i> ";
                            echo number_format($value['Dongia'] - ($value['Dongia'] * $value['giatriKM'] / 100)) . " VND";
                        } else {
                            echo "<br>";
                            echo number_format($value['Dongia']) . " VND";
                        }
                    ?>
                    </span>
                </div>
            </div>

            <div class="actions">
                <?php if ($value['soluong'] > 0) { ?>
                    <a href="?action=giohang&act=add_giohang&id=<?= $value['idSP'] ?>">
                        <button type="submit" class="cart-btn" title="Add to cart">Thêm vào giỏ</button>
                    </a>
                <?php } else { ?>
                    <p class="out-of-stock-warning" style="color: red; font-weight: bold;">Hết hàng</p>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<?php } ?>






      </div>
      <!--features_items-->

      <!-- 
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    -->
    </div>


  </div> <!-- div row -->

</div>


<br>
<br>
<br>
<br>
<br>
<style>
  b.km_km {
    color: red;
  }

  strike i {
    color: black;
    font-weight: normal;
  }
  .actions {
    background-color: #43CCA0;
    padding: 10px;
    border-radius: 10px;
    border: 2px solid black;
  }
  .product-f {
    background-color: #F0F4FC;
    border-radius: 10px;
    position: relative; 
  }

  .out-of-stock {
      position: absolute;
      top: 10px;
      right: 10px;
      /* background-color: rgba(255, 0, 0, 0.8); */
      color: white;
      padding: 5px;
      font-weight: bold;
      border-radius: 5px;
  }
  .sale-badge {
    position: absolute;
    top: 1px;
    left: 110px;
    width: 80px;
    height: 80px;
    z-index: 10;
  }

  .sale-badge img {
    width: 100%; 
    height: 100%;
  }

  .sale-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: bold;
    color: red;
  }

  .product-price {
      background-color: #DDEDFA;
      padding: 10px;
      border-radius: 5px;
  }

  .actions {
      background-color: #43CCA0;
      padding: 10px;
      border-radius: 10px;
      border: 2px solid black;
  }


  
</style>