<?php 

$ambil=mysqli_fetch_array(Query::nampil($kon,"user","username='{$_SESSION['id']}'"));
switch ($ambil['id_level']) {
  case '1':
    $lmenu="
      <li class='nav-item'>
        <a class='nav-link' href='?order/admin'>
          <i class='mdi mdi-book-open-page-variant menu-icon'></i>
          <span class='menu-title'>Orderan</span>
        </a>
      </li>
      
      <li class='nav-item'>
        <a class='nav-link' href='?Dorder/admin'>
          <i class='icon-info icon-3x menu-icon'></i>
          <span class='menu-title'>Detail Order</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?masakan/admin'>
          <i class='mdi mdi-food icon-3x menu-icon'></i>
          <span class='menu-title'>Masakan</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?minuman/admin'>
          <i class='mdi mdi-food icon-3x menu-icon'></i>
          <span class='menu-title'>Minuman</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?transaksi/admin'>
          <i class='icon-money icon-3x menu-icon'></i>
          <span class='menu-title'>Transaksi</span>
        </a>
      </li>
      
      <li class='nav-item'>
        <a class='nav-link' href='?user/admin'>
          <i class='icon-user icon-3x menu-icon'></i>
          <span class='menu-title'>User</span>
        </a>
      </li>
    ";
  break;

  case '2':
    $lmenu="
      <li class='nav-item'>
        <a class='nav-link' href='?riwayat_transaksi/pemilik'>
          <i class='icon-money icon-3x menu-icon'></i>
          <span class='menu-title'>Transaksi</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?pegawai/pemilik'>
          <i class='icon-user icon-3x menu-icon'></i>
          <span class='menu-title'>Pegawai</span>
        </a>
      </li>
    ";
  break;
  
  case '3':
    $lmenu="
      <li class='nav-item'>
        <a class='nav-link' href='?transaksi_blm/kasir'>
          <i class='icon-money icon-3x menu-icon'></i>
          <span class='menu-title'>Transaksi Baru</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?transaksi_sdh/kasir'>
          <i class='icon-book icon-3x menu-icon'></i>
          <span class='menu-title'>Riwayat Transaksi</span>
        </a>
      </li>
    ";
  break;

  case '4':
    $lmenu="
      <li class='nav-item'>
        <a class='nav-link' href='?order/pelayan'>
          <i class='mdi mdi-book-open-page-variant icon-3x menu-icon'></i>
          <span class='menu-title'>Orderan</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?Dorder/pelayan'>
          <i class='mdi mdi-food icon-3x menu-icon'></i>
          <span class='menu-title'>Detail Order</span>
        </a>
      </li>
    ";
  break;


  case '5':
    $lmenu="
      <li class='nav-item'>
        <a class='nav-link' href='?order/pelanggan'>
          <i class='mdi mdi-food icon-3x menu-icon'></i>
          <span class='menu-title'>Orderan</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?menu_masakan/pelanggan'>
          <i class='mdi mdi-book-open-page-variant icon-3x menu-icon'></i>
          <span class='menu-title'>Menu Masakan</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?menu_minuman/pelanggan'>
          <i class='mdi mdi-book-open-page-variant icon-3x menu-icon'></i>
          <span class='menu-title'>Menu Minuman</span>
        </a>
      </li>

      <li class='nav-item'>
        <a class='nav-link' href='?transaksi/pelanggan'>
          <i class='mdi mdi-book-open-page-variant icon-3x menu-icon'></i>
          <span class='menu-title'>Transaksi</span>
        </a>
      </li>
    ";
  break;
}

$menu="
          <nav class='sidebar sidebar-offcanvas' id='sidebar'>
              <ul class='nav'>
                <li class='nav-item'>
                  <a class='nav-link' href='index.php'>
                    <i class='icon-home menu-icon'></i>
                    <span class='menu-title'>Beranda</span>
                  </a>
                </li>
                
                $lmenu        
                
              </ul>
          </nav>
";
?>