<?php

if ($tombol) {
  if ($var1!="") {
    header("location:index.php?ubah_password-$var1/umum");
  }
}

$wadah= "
  <div class='container-scroller'>
    <div class='container-fluid page-body-wrapper full-page-wrapper'>
      <div class='content-wrapper d-flex align-items-center auth px-0'>
        <div class='row w-100 mx-0'>
          <div class='col-lg-4 mx-auto'>
            <div class='auth-form-light text-left py-5 px-4 px-sm-5 text-center' style='background:rgba(0,0,0,0.2);'>
              
              <h4 style='letter-spacing:3px;'>Masukan Email Anda</h4>
              <hr>
              <form class='forms-sample' method='post' autocomplete='off'>
                <div class='form-group'>
                    <input type='text' class='form-control col-form-label' name='var1' value='$var1' $read>
                    <hr>
                    <input type='submit' class='btn btn-outline-dark' value='Kirim' name='tombol'>
                    <a href='index.php' class='btn btn-outline-primary'>Kembali</a>
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


