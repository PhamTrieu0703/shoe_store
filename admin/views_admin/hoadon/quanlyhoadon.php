<div class="col-md-12">

  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách hóa đơn</div>
    <div class="panel-body">
      <table class="table table-bordered table-hover " style="text-align:center;">
        <tr>
          <th style="text-align:center;">STT</th>
          <th style="text-align:center;">ID hóa đơn</th>
          <th style="text-align:center;">Tên Khách Hàng</th>
          <th style="text-align:center;">Tên sản phẩm</th>
          <th style="text-align:center;">Tổng tiền</th>
          <th style="text-align:center;">Ngày mua</th>
          <th style="text-align:center;">Số lượng mua</th>
          <th style="text-align:center;">Trạng thái</th>
          <th style="text-align:center;">Hành động</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($data as $value) : ?>
          <tr>
            <td><?= $stt++ ?></td>
            <td><?= $value['idhoadon'] ?></td>
            <?php
            foreach ($user as $row) :
              if ($value['idUser'] == $row['idUser']) {
            ?>
                <td><?= $row['ho'] . " " . $row['ten']; ?></td>
            <?php }
            endforeach ?>
            <?php
            foreach ($sanpham as $row) :
              if ($value['idSP'] == $row['idSP']) {
            ?>
                <td><?=$row['tenSP'] ?></td>
            <?php }
            endforeach ?>
            <td><?= number_format($value['tongtien']) ?> VND</td>
            <td><?= $value['ngaymua'] ?></td>
            <td><?= $value['soluongmua'] ?></td>
            <td>
              <?php if ($value['trangthai'] == 0) {
                echo "Chưa Xét duyệt";
              } else {
                echo "Đã duyệt";
              } ?>
            </td>
            <td>
              <!-- để ý dấu bằng trong href -->


              <?php if ($_SESSION['admin'] == true) { ?>
                <?php if ($value['trangthai'] == 0) { ?>
                  <a href="?action=duyethoadon&id=<?= $value['idhoadon'] ?>&idSP=<?= $value['idSP'] ?>&soluongmua=<?php echo $value['soluongmua'] ?>" type="button" class="btn btn-primary">Duyệt hóa đơn</a>
                <?php } else {
                } ?>
                <a href="?action=xoahoadon&id=<?= $value['idhoadon'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa">
                  <i class="fa fa-times"></i></a>
              <?php } else {
              } ?>

            </td>
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
</div>