<div class="col-md-12">
  <div style="margin-bottom:5px;">
    <?php if ($_SESSION['admin'] == true) { ?>
      <a href="?action=them_giaodien" class="btn btn-primary">Thêm tài khoản</a>
    <?php } else {
    } ?>

  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách tài khoản</div>
    <div class="panel-body">
      <table class="table table-bordered table-hover " style="text-align:center;">
        <tr>
          <th style="text-align:center;">STT</th>
          <th style="text-align:center;">Mã NV</th>
          <th style="text-align:center;">Họ</th>
          <th style="text-align:center;">Tên</th>
          <th style="text-align:center;">Số ĐT</th>
          <th style="text-align:center;">Email</th>
          <th style="text-align:center;">Quyền</th>
          <th style="text-align:center;">Giới tính</th>
          <th style="text-align:center;">Địa chỉ</th>
          <th style="text-align:center;">Phân quyền</th>
          <th style="text-align:center;">Hành động</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($data as $row) : ?>
          ?>
          <tr>
            <td><?= $stt++; ?></td>
            <td><?= $row['idUser'] ?></td>
            <td><?= $row['ho'] ?></td>
            <td><?= $row['ten'] ?></td>
            <td><?= $row['sodienthoai'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
              <?php if ($row['idQuyen'] == 1) {
                echo "admin";
              }
              if ($row['idQuyen'] == 2) {
                echo "Người Bán Hàng";
              }
              if ($row['idQuyen'] == 0) {
                echo "Khách hàng";
              }
              ?>
            </td>
            <td><?= $row['gioitinh'] ?></td>
            <td><?= $row['diachi'] ?></td>


            <?php if ($_SESSION['admin'] == true) { ?>

              <td>
                <div style="font-size: 13px;"><a href="?action=phanquyen&id=<?= $row['idUser'] ?>&quyen=0">Khách hàng</a>&emsp;<a href="?action=phanquyen&id=<?= $row['idUser'] ?>&quyen=2">Người bán hàng</a></div>
              </td>
              <td> <a href="?action=edit&id=<?= $row['idUser'] ?>" type="button" class="btn  btn-light">Sửa</a>
                <a href="?action=xoanguoidung&id=<?= $row['idUser'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa người dùng">
                  <i class="fa fa-times"></i></a>
              </td>

              <!-- phân quyền -->

            <?php } else {
            } ?>


          </tr>
        <?php
        endforeach;
        ?>

      </table>
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