<?php
$cek=Query::buatkode($kon,"id_user","id","user");
//NP0001
$kode=substr($cek['id'], 2,4);
$tbh=$kode+1;
if ($tbh<10) {
  $id="Id000".$tbh;
}
elseif ($tbh<99) {
  $id="Id00".$tbh;
}
elseif ($tbh<999) {
  $id="Id0".$tbh;
}
else{
  $id="Id".$tbh;
}

if ($tombol) {
  if ($var1!="" AND $var2!="" AND $var3!="" AND $var4!="") {
    if($var4==$var3){
      if (Query::ambil($kon,"user","username='$var2'")){
        $ket=$tem->notif("warning","Email Anda Sudah Digunakan");
      }
      else{
        $h=Query::tambah($kon,"user","id_user,username,password,nama_user","'$id','$var2',md5('$var3'),'$var1'");
        if ($h) {
          header("location:?berhasil/umum");
        }
        else{
          $ket=$tem->notif("warning","REGISTRASI Anda Gagal");
        }
      }
    }
    else{
      $ket=$tem->notif("danger","Password Anda tidak sama, Silahkan ulangi kembali.");
    }
  }
  else{
    $ket=$tem->notif("warning","Jangan Sampai ada yang kosong!");
  }
}

$wadah= "
  <div class='container-scroller'>
    <div class='container-fluid page-body-wrapper full-page-wrapper'>
      <div class='content-wrapper d-flex align-items-center auth px-0'>
        <div class='row w-100 mx-0'>
          <div class='col-lg-4 mx-auto'>
            <div class='auth-form-light text-left py-5 px-4 px-sm-5' style='background:rgba(0,0,0,0.5);'>
              <h4 style='letter-spacing:3px;'>REGISTRASI</h4>
              <p class='font-weight-light' style='font-size: 12px'>Silahkan Isi data diri Anda.</p>
               $ket
              <form class='pt-3' method='POST' autocomplete='off'>
                <div class='form-group'>
                  <input type='text' class='form-control form-control-lg' value='$var1' name='var1' placeholder='Nama Lengkap'>
                </div>

                <div class='form-group'>
                  <input type='email' class='form-control form-control-lg' value='$var2' name='var2' placeholder='Email'>
                </div>

                <div class='form-group'>
                  <input type='password' class='form-control form-control-lg' value='$var3'  name='var3' placeholder='Password'>
                </div>

                <div class='form-group'>
                  <input type='password' class='form-control form-control-lg' value='$var4'  name='var4' placeholder='Ulangi Password'>
                </div>

                <div class='mt-3'>
                  <input type='submit' class='btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn' value='Buat Akun' name='tombol'>
                </div>
                
                <div class='text-center mt-4 font-weight-light'>
                  Sudah Mempunyai Akun? <a href='?login/umum' class='text-primary'>Login!</a>
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


