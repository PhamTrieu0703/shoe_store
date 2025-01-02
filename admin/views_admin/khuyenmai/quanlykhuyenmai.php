<div class="col-md-12">
  <?php if ($_SESSION['admin'] == true) { ?>
    <div style="margin-bottom:5px;">

      <a href="?action=themkhuyenmai_giaodien" class="btn btn-primary">Thêm khuyến mãi</a>

    </div>
  <?php } else {
  } ?>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách khuyến mãi</div>
    <div class="panel-body">
      <table class="table table-bordered table-hover " style="text-align:center;">
        <tr>
          <th style="text-align:center;">STT</th>
          <th style="text-align:center;">Loại khuyến mãi</th>
          <th style="text-align:center;">Giá trị KM(%)</th>
          <th style="text-align:center;">Ngày bắt đầu</th>
          <th style="text-align:center;">Ngày kết thúc</th>
          <th style="text-align:center;">Hành động</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($data as $value) : ?>
          <tr>
            <td><?= $stt++; ?></td>
            <td><?= $value['loaiKM'] ?></td>
            <td><?= $value['giatriKM'] ?></td>
            <td><?= $value['ngaybatdau'] ?></td>
            <td><?= $value['ngayketthuc'] ?></td>
            <td>
              <!-- để ý dấu bằng trong href -->
              <?php if ($_SESSION['admin'] == true) { ?>
                <a href="?action=suakhuyenmai_giaodien&id=<?= $value['idKM'] ?>" type="button" class="btn  btn-light">Sửa</a>
                <a href="?action=xoakhuyenmai&id=<?= $value['idKM'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa  ">
                  <i class="fa fa-times"></i></a>
              <?php } else {
              } ?>

            </td>
          </tr>

        <?php endforeach ?>
        </td>
        </tr>
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