<div class="col-md-12">
  <div style="margin-bottom:5px;">
    <?php if ($_SESSION['admin'] == true) { ?>
      <a href="?action=them_sanpham_giaodien" class="btn btn-primary">Thêm sản phẩm</a>
    <?php } else {
    } ?>

  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách Sản Phẩm</div>
    <div class="panel-body">
      <table class="table table-bordered table-hover " style="text-align:center;">
        <tr>
          <th style="text-align:center;">STT</th>
          <th style="text-align:center;">Mã sản phẩm</th>
          <th style="text-align:center;">Tên sản phẩm</th>
          <th style="text-align:center;">Giá thành</th>
          <th style="text-align:center;">Loại sản phẩm</th>
          <th style="text-align:center;">Số lượng</th>
          <th style="text-align:center;">Hình ảnh</th>
          <th style="text-align:center;">Hành động</th>
        </tr>
        <?php
        //var_dump($cate);
        $stt = 1;
        foreach ($data as $value) : ?>
          <tr>
            <td><?= $stt++; ?></td>
            <td><?= $value['idSP'] ?></td>
            <td><?= $value['tenSP'] ?></td>

            <td><?= number_format($value['Dongia']); ?></td>
            <td>
              <?php foreach ($dataCate as $row) {
                if ($value['idLoaiSP'] == $row['idLoaiSP']) {
                  echo $value['idLoaiSP'];
                }
              } ?>
            </td>
            <td><?= $value['soluong'] ?>
              <br>
              <?php if ($value['soluong'] < 10) {  ?>

                <a class="soluong" href="?action=them_soluong_giaodien&soluong=<?php echo $value['soluong'] ?>&idSP=<?php echo $value['idSP'] ?>"><br>Số lượng nhỏ hơn 10<br></a>

              <?php } ?>
            </td>
            <td>
              <img style="width:350px; height:300px" src="./public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="">
            </td>
            <td>
              <?php if ($_SESSION['admin'] == true) { ?>
                <a href="?action=suasanpham&id=<?= $value['idSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                <a href="?action=xoasanpham&id=<?= $value['idSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa  ">
                  <i class="fa fa-times"></i></a>
              <?php } else {
              } ?>
            </td>
          </tr>
        <?php
        endforeach;
        ?>

      </table>
      <span style="font-size: 20px;">
        <?php
        if (!isset($timkiem_sp)) {

          $tong = ceil($tongsotrang);

          for ($i = 1; $i <= $tong; $i++) {
            echo '<a href="?action=sanpham&trang=' . $i . '">' . $i . '</a> | ';
          }
        }

        ?>
      </span>
      <style type="text/css">
        .pagination {
          padding: 0px;
          margin: 0px;
        }
      </style>
    </div>
  </div>
</div>
<!-- end content -->
<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>