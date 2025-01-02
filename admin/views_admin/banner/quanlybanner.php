<div class="col-md-12">
    <?php if ($_SESSION['admin'] == true) { ?>
        <div style="margin-bottom:5px;">

            <a href="?action=thembanner_giaodien" class="btn btn-primary">Thêm Banner</a>

        </div>
    <?php } else {
    } ?>

    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách Banner</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover " style="text-align:center;">
                <tr>
                    <th style="text-align:center;">STT</th>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Hình Ảnh</th>
                    <th style="text-align:center;">Hành động</th>
                </tr>
                <?php
                $stt = 1;
                foreach ($data as $row) : ?>
                    ?>
                    <tr>
                        <td><?= $stt++; ?></td>
                        <td><?= $row['idbanner'] ?></td>

                        <td>
                            <img style="width:500px; height:200px" src="public_admin/image/banner/<?php echo $row['anh'] ?>" alt="">
                        </td>
                        <td>
                            <?php if ($_SESSION['admin'] == true) { ?>
                                <a href="?action=suabanner&id=<?= $row['idbanner'] ?>" type="button" class="btn  btn-light">Sửa</a>
                                <a href="?action=xoabanner&id=<?= $row['idbanner'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger" title="Xóa">
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