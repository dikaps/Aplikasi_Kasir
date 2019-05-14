<?php

if ($tombol) {
  if ($var2==$var1) {
    $h=Query::update($kon,"user","password=md5('$var1')","username='$v1'");
    
    if ($h) {
      $ket=$tem->notif("success","Perubahan Password Berhasil Silahkan kembali ke halaman login");
      $tbl="<a href='index.php' class='btn btn-outline-info'>Login</a>";
    }
    else{
      $ket=$tem->notif("danger","Perubahan Password Gagal!!");
    }

  }
}

$wadah= "
  <div class='container-scroller'>
    <div class='container-fluid page-body-wrapper full-page-wrapper'>
      <div class='content-wrapper d-flex align-items-center auth px-0'>
        <div class='row w-100 mx-0'>
          <div class='col-lg-4 mx-auto'>
            <div class='auth-form-light text-left py-5 px-4 px-sm-5 text-center' style='background:rgba(0,0,0,0.2);'>
              
              <h4 style='letter-spacing:3px;'>Masukan Password Baru</h4>
              $ket
              <hr>
              <form class='forms-sample' method='post' autocomplete='off'>
                <div class='form-group'>
                    <label>Password</label>
                    <input type='password' class='form-control col-form-label' name='var1' value='$var1' placeholder='Password'>
                </div>

                <div class='form-group'>
                <label>Ulangi Password</label>
                  <input type='password' class='form-control col-form-label' name='var2' value='$var2' placeholder='Ulangi Password'>
                </div>
                <hr>
                <input type='submit' class='btn btn-outline-dark' value='Ubah' name='tombol'> $tbl
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


