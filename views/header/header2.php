 <header>
     <div class="top-link">
         <div class="container">
             <div class="row">
                 <div class="col-md-7 col-md-offset-3 col-sm-9 hidden-xs">
                     <div class="site-option">
                     </div>
                     <div class="call-support" style="display:flex; justify-content: space-around;">
                         <p style="font-size: 24px;">
                             <img src="https://cdn1.iconfinder.com/data/icons/emoji-of-smiley-color/100/smiley_wave-512.png" alt="Wave Emoji" style="width:44px; height:44px; vertical-align:middle;">
                                <?php if (isset($_SESSION['tendangnhap']) && !empty($_SESSION['tendangnhap'])) { ?>
                                    Xin Chào: <span><?= htmlspecialchars($_SESSION['tendangnhap']); ?></span>
                                <?php } else { ?>
                                    Xin chào: Khách vãng lai!
                                <?php } ?>
                        </p>
                     </div>
                 </div>
                 <div class="col-md-2 col-sm-3">
                     <div class="dashboard">
                         <div class="account-menu">
                             <ul>
                                 <li class="search">
                                     <a href="#">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <ul class="search">
                                         <li>
                                             <form  method="POST" action="?action=cuahang1">
                                                 <input type="text">
                                                 <button type="submit"> <i class="fa fa-search"></i> </button>
                                             </form>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-bars"></i>
                                     </a>
                                     <ul>
                                         <?php if (isset($_SESSION['tendangnhap'])) { ?>
                                             <li>
                                                 <a href="?action=taikhoan&ten=<?php echo $_SESSION['tendangnhap']; ?>">Hồ sơ</a>
                                             </li>
                                             <li>
                                                 <a href="?action=dangxuat" onclick="TBdangxuat()">Thoát</a>
                                             </li>
                                             <!-- <li>
                                                    <a href="?action=vechungtoi">Về chúng tôi</a>
                                             </li> -->

                                             <?php if ($_SESSION['admin'] == true || $_SESSION['banhang'] == true) { ?>
                                                 <li>
                                                     <a href="admin/index.php?action=trangchu">Trang quản lý</a>
                                                 </li>
                                             <?php }
                                            } else { ?>
                                             <li>
                                                 <a href="?action=dangnhap"> Đăng nhập</a>
                                             </li>
                                             <li>
                                                 <a href="?action=dangky">Đăng ký </a>
                                             </li>


                                         <?php } ?>

                                     </ul>
                                 </li>
                             </ul>
                         </div>
                         <div class="cart-menu">
                             <ul>
                                 <li><a href="?action=giohang&?act=list_giohang"> <img src="public/img/shopping_cart.png" alt="" style="width:34px; height:34px; vertical-align:middle;">  </a>
                                    
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="mainmenu-area home2 bg-color-tr product-items">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <div class="logo">
                         <a href="?page=home">
                             <img src="public/img/logo1.png" />
                         </a>
                     </div>
                 </div>
                 <div class="col-md-9">
                     <div class="mainmenu">
                         <nav>
                             <ul>
                                 <li><a href="?action=cuahang1">Home</a>
                                 </li>
                                 <?php foreach ($data_loaisanpham as $value) {  ?>
                                     <li><a href="?action=cuahang&id=<?php echo $value['idLoaiSP'] ?>">
                                             <?= $value['tenLSP']; ?>
                                         </a>
                                     </li>
                                 <?php } ?>

                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     
 </header>
 
 <!-- header area end -->