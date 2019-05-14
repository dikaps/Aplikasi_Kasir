<?php
$ambil=mysqli_fetch_array(Query::nampil($kon,"user","username='{$_SESSION['id']}'"));
switch ($ambil['id_level']) {
  case '1':
    $level="Admin";
    $img="<img src='images/faces/face24.jpg' alt='profile'/>";
  break;

  case '2':
    $level="Pemilik";
    $img="<img src='images/faces/face23.jpg' alt='profile'/>";
  break;

  case '3':
    $level="Kasir";
    $img="<img src='images/faces/face16.jpg' alt='profile'/>";
  break;

  case '4':
    $level="Pelayan";
    $img="<img src='images/faces/face21.jpg' alt='profile'/>";
  break;

  case '5':
    $level="Pelanggan";
    $img="<img src='images/faces/face15.jpg' alt='profile'/>";
  break;
}


$header="
        <nav class='navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row'>
                <div class='navbar-brand-wrapper d-flex justify-content-center'>
            <div class='navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100'>  
              <a class='navbar-brand brand-logo' href='index.php'>Apps Kasir</a>
              <a class='navbar-brand brand-logo-mini' href='index.php'><i class='mdi mdi-xing'></i></a>
              <button class='navbar-toggler navbar-toggler align-self-center' type='button' data-toggle='minimize'>
                <span class='icon-xing' style='color:blue;'></span>
              </button>
            </div>  
          </div>
          <div class='navbar-menu-wrapper d-flex align-items-center justify-content-end'>
            
            <ul class='navbar-nav navbar-nav-right'>
              <li class='nav-item nav-profile dropdown'>
                <a class='nav-link dropdown-toggle' href='#' data-toggle='dropdown' id='profileDropdown'>
                  $img
                  <span class='nav-profile-name'>$level</span>
                </a>
                <div class='dropdown-menu dropdown-menu-right navbar-dropdown' aria-labelledby='profileDropdown'>
                  <a class='dropdown-item'>
                    <i class='mdi mdi-account text-primary'></i>
                    {$ambil['nama_user']}
                  </a>
                  <a class='dropdown-item' href='?keluar/aksi'>
                    <i class='mdi mdi-logout text-primary'></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
            <button class='navbar-toggler navbar-toggler-right d-lg-none align-self-center' type='button' data-toggle='offcanvas'>
              <span class='mdi mdi-menu'></span>
            </button>
          </div>
        </nav>
";

?>