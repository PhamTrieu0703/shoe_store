<div class="col-md-12">

  <div style="margin-bottom:5px;">
    <?php if ($_SESSION['admin'] == true) { ?>
      <a href="?action=themloaisanpham_giaodien" class="btn btn-primary">Thêm</a>
    <?php } else {
    } ?>

  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">Danh sách Danh Mục</div>
    <div class="panel-body">
      <table class="table table-bordered table-hover " style="text-align:center;">
        <tr>
          <th style="text-align:center;">STT</th>
          <th style="text-align:center;">ID</th>
          <th style="text-align:center;">Tên danh mục</th>
          <th style="text-align:center;">Hành động</th>
        </tr>
        <?php
        $stt = 1;
        foreach ($data as $value) :
        ?>
          <tr>
            <td><?= $stt++; ?></td>
            <td><?= $value['idLoaiSP'] ?></td>
            <td><?= $value['tenLSP'] ?></td>
            <td>
              <?php if ($_SESSION['admin'] == true) { ?>
                <a href="?action=sualoaisanpham&id=<?= $value['idLoaiSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                <a href="?action=xoaloaisanpham&id=<?= $value['idLoaiSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa ">
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
