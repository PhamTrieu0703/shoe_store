<div class="col-md-12">
  <div class="panel panel-primary">
    <div class="panel-heading">Cập nhập sản phẩm</div>
    <form action="?action=suasanpham_xl" method="POST" enctype="multipart/form-data">
      <div class="panel-body">
        <!-- rows -->
        <div class="row" style="margin-top:5px;">
          <div class="col-md-2">Danh mục</div>
          <input type="hidden" value="<?php echo $data['idSP']; ?>" name="idSP">
          <div class="col-md-10">
            <select name="idLoaiSP" class="form-control" style="width: 300px;">
              <?php foreach ($data_lsp as $value) { ?>
                <?php echo "<option value='" . $value['idLoaiSP'] . "'>" . $value['tenLSP'] . "</option>"; ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <!-- end rows -->
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Khuyến mãi</div>
          <div class="col-md-10">
            <select name="idKM" class="form-control" style="width: 300px;">
              <?php foreach ($data_km as $value) { ?>
                <?php echo "<option value='" . $value['idKM'] . "'>" . $value['loaiKM'] . "</option>"; ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <!-- end rows -->
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Màu</div>
          <div class="col-md-10">
            <select name="idmau" class="form-control" style="width: 300px;">
              <?php foreach ($data_mau as $value) { ?>
                <?php echo "<option value='" . $value['idcolor'] . "'>" . $value['color'] . "</option>"; ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <!-- end rows -->
        <!-- rows -->
        <div class="row" style="margin-top:25px;">
          <div class="col-md-2">Size</div>
          <div class="col-md-10">
            <select name="idsize" class="form-control" style="width: 300px;">
              <?php foreach ($data_size as $value) { ?>
                <?php echo "<option value='" . $value['idsize'] . "'>" . $value['size'] . "</option>"; ?>
              <?php } ?>
            </select>
          </div>
        </div>
        <!-- end rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Tên sản phẩm</div>
          <div class="col-md-3 ">
            <input type="text" name="tenSP" value="<?php echo $data['tenSP']; ?>" required>
          </div>
        </div>
        <!-- rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Đơn giá</div>
          <div class="col-md-3">
            <input type="text" value="<?php echo $data['Dongia']; ?>" name="Dongia" required>
          </div>
        </div>
        <!-- rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 1</div>
          <div class="col-md-3">
            <input type="file" value="./public_admin/image/sanpham/<?php echo $data['anh1'] ?>" name="anh1">
          </div>
        </div>
        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 1 ban đầu</div>
          <div class="col-md-3">
           <img style="width:350px; height:300px" src="./public_admin/image/sanpham/<?php echo $data['anh1'] ?>" alt="">
          </div>
        </div>

        <!-- rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 2</div>
          <div class="col-md-3">
            <td><input type="file" value="./public_admin/image/sanpham/<?php echo $data['anh2'] ?>" name="anh2"></td>
          </div>
        </div>
        <!-- rows -->
        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 2 ban đầu</div>
          <div class="col-md-3">
           <img style="width:350px; height:300px" src="./public_admin/image/sanpham/<?php echo $data['anh2'] ?>" alt="">
          </div>
        </div>

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 3</div>
          <div class="col-md-3">
            <input type="file" value="./public_admin/image/sanpham/<?php echo $data['anh3'] ?>" name="anh3" required>
          </div>
        </div>
        <!-- rows -->
        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ảnh 3 ban đầu</div>
          <div class="col-md-3">
           <img style="width:350px; height:300px" src="./public_admin/image/sanpham/<?php echo $data['anh3'] ?>" alt="">
          </div>
        </div>

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Ngày nhập</div>
          <div class="col-md-2">
            <input type="date" value="<?php echo $data['ngaynhap']; ?>" name="ngaynhap" required>
          </div>
        </div>
        <!-- rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Số lượng</div>
          <div class="col-md-3">
            <input type="text" value="<?php echo $data['soluong']; ?>" name="soluong" required>
          </div>
        </div>
        <!-- rows -->

        <div class="row" style="margin-top:15px;">
          <div class="col-md-2">Mô tả</div>
          <div class="col-md-10">
            <form action="_posteddata.php" method="post">
              <textarea name="mota" value="<?php echo $data['mota']; ?>" cols="" rows="" required></textarea>

              <!--          <input name="ok" type="submit" value="Ok" /> -->
            </form>
          </div>
        </div>
        <!-- rows -->

        <div class="row" style="margin-top:25px;">
          <div class="col-md-2"></div>
          <div class="col-md-10">
            <button type="submit" name="" class="btn btn-primary">Cập nhập</button>
          </div>
        </div>
        <!-- end rows -->
      </div>
    </form>

  </div>
</div>
<script type="text/javascript">
  CKEDITOR.replace('mota');
</script>