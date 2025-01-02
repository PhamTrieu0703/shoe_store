<div class="loading">
        <div class="boxLoading"></div>
</div>
<div class="shopping-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="location">
          <ul>
            <li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
            <li><strong>Login page</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="login-area">
  <div class="container">
    <!-- <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <div class="section-title text-center login ">
          <ul>
            <li class="active dangnhap"><a data-toggle="tab" href="#arrival">ĐĂNG NHẬP</a></li>
            <li class="dangky"><a data-toggle="tab" href="#popular">ĐĂNG KÝ</a></li>
          </ul>
        </div>
      </div>
    </div> -->
    <div class="text-center tab-content ">
      <div class="tab-pane  fade in active" id="arrival">
        <div class="wrapper ">
          <ul class="load-list load-list-two">
            <li>
              <div class="row text-center">
                <div class="container-fluid">
                  <div class="row-fluid">
                    <div class="col-md-offset-4 col-md-4" id="box">
                      <h2><br>Đăng nhập</h2>
                      <hr>
                      <form class="form-horizontal" action="?action=dangnhap_xl" method="POST" id="login_form">
                        <fieldset>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="input-group">
                                <span class="input-group-addon">
                                  <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <!--  <input name="first_name" placeholder="Username" class="form-control" type="text"> -->
                                <td><input type="text" name="tendangnhap_dn" class="form-control" required></td>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <!-- <input name="email" placeholder="Password" class="form-control" type="text"> -->
                                <td><input type="password" name="matkhau_dn" class="form-control" required></td>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-md-12">
                              <center>
                                <input type="submit" name="submit" class="btn btn-md btn-danger" value="Đăng nhập">
                              </center>
                            </div>
                          </div>
                        </fieldset>
                      </form>
                      <div class="text-center">
                        <a href="?action=dangky" style="margin-right: 15px;" class="tk">Đăng ký tài khoản?</a>
                        <!-- <a data-toggle="tab" href="#popular" style="margin-right:15px;" class="tk">Đăng ký tài khoản? </a> -->
                        <a href="?action=quenmatkhau" class="tk">Quên mật khẩu?</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>




    </div>
    </li>


    </ul>
  </div>
</div>
<!-- popular product end -->

<script>
  function validate() {
    var n1 = document.getElementById("mk1");
    var n2 = document.getElementById("mk2");
    if (n1.value != "" && n2.value != "") {
      if (n1.value == n2.value) {
        return true;
      }
    }
    alert("Mật khẩu không khớp với nhau. Hãy nhập lại Mật khẩu!");
    return false;
  }
</script>

<script>
    window.addEventListener('load', function() {
        let loadingElement = document.querySelector('.loading');
        loadingElement.style.transition = 'opacity 2s ease-out';
        loadingElement.style.opacity = '0';

        setTimeout(function() {
            loadingElement.style.display = 'none';
        }, 500);
    });
    </script>