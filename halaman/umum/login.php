<?php
if ($tombol) {
  if (Query::cekdata($kon,"user","username='$var1' AND password=md5('$var2')")) {
    $_SESSION['id']=$var1;
    header("location:index.php");
  }
  else{
    //$ket="<label class='badge badge-danger'>Username Atau Password Salah</label>";
    $ket=$tem->notif("warning","Username Atau Password Salah");
  }
  
}

$wadah="
  <div class='container-scroller'>
    <div class='container-fluid page-body-wrapper full-page-wrapper'>
      <div class='content-wrapper d-flex align-items-center auth px-0'>
        <div class='row w-100 mx-0'>
          <div class='col-lg-4 mx-auto'>
            <div class='auth-form-light text-left py-5 px-4 px-sm-5' style='background:rgba(0,0,0,0.4);'>
              <h4>LOGIN $ket</h4>
              <p class='font-weight-light' style='font-size: 12px'>Silahkan Login dengan Username dan Password yang benar.</p>
              <form class='pt-3' method='POST' autocomplete='off'>
                <div class='form-group'>
                  <input type='text' class='form-control form-control-lg' value='$var1' name='var1' placeholder='Username'>
                </div>
                <div class='form-group'>
                  <input type='password' class='form-control form-control-lg' value='$var2'  name='var2' placeholder='Password'>
                </div>
                <div class='mt-3'>
                  <input type='submit' class='btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn' value='LOGIN' name='tombol'>
                </div>
                
                <div class='text-center mt-4 font-weight-light'>
                  Tidak Mempunyai Akun? <a href='?register/umum' style='color:white'>Buat!</a><br>
                  Lupa Password? <a href='?lupa_password/umum' style='color:white'>Klik disini!</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

";

?>


