 <!-- related product area start-->
 <div class="related-product home2">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="product-title">
                     <h2>related products</h2>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="related-slider">
                 <?php foreach ($data_sanphamlienquan as $value) : ?>

                     <div class="col-md-12">                     
                         <div class="single-product">
                             <div class="product-img">
                                 <a href="?action=chitietmathang&id=<?= $value['idSP'] ?>&idLoaiSP=<?= $value['idLoaiSP'] ?>">
                                     <img class="primary-img-1" src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="">
                                     <img class="primary-img-2" src="admin/public_admin/image/sanpham/<?php echo $value['anh1'] ?>" alt="">
                                 </a>
                             </div>
                             
                             <div class="list-product-info">
                                 <!-- <div class="price-rating">
                                     <div class="ratings">
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star-half-o"></i>
                                         <a href="#" class="review">1 Review(s)</a>
                                         <a href="#" class="add-review">Add Your Review</a>
                                     </div>
                                 </div> -->
                             </div>
                             <div class="product-price">
                                 <div class="product-name">
                                     <a href=""><?php echo $value['tenSP'] ?></a>
                                 </div>
                                 <div class="price-rating">
                                     <span><?= number_format($value['Dongia']) ?> VND</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php
                    endforeach
                    ?>
             </div>
         </div>
     </div>
 </div>
 <!-- related product area end-->