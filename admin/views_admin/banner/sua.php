
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Sửa Banner</div>
        <div class="panel-body">
            <form method="POST" action="?action=suabanner_xl" enctype="multipart/form-data">
          
                <!-- rows -->
                <div class="row" style="margin-top:25px;">
                    <div class="col-md-2">Ảnh thay thế</div>
                    <div class="col-md-10">
                    <input type="hidden" name="idbanner" value=<?php echo $data['idbanner']; ?> >
                    <input type="file" name="anh" value=<?php echo $data['anh']; ?> >
                    </div>
                </div>
                <div class="row" style="margin-top:25px;">
                    <div class="col-md-2">Ảnh </div>
                    <div class="col-md-10">
                    <img style="width:500px; height:200px" src="public_admin/image/banner/<?php echo $data['anh'] ?>" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top:25px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <button type="submit" name="create" class="btn btn-primary">Cập nhập</button>
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>