<?php

$query=Query::tampil($kon,"transaksi ORDER BY id_transaksi DESC");
while ($row=Query::fetch($query)) {
  $Detail=$tem->tbl("detail_transaksi-{$row['id_transaksi']}/$folder","primary","Detail","info");
  $Edit=$tem->tbl("edit_transaksi-{$row['id_transaksi']}/$folder","warning","Edit","edit");
  $Hapus=$tem->tbl("hapus_transaksi-{$row['id_transaksi']}/aksi","danger","Hapus","trash");
  if ($row['status_pembayaran']=="Sudah Dibayar") {
    $sts="<label class='badge badge-info'>{$row['status_pembayaran']}</label>";
  }
  else{
    $sts="<label class='badge badge-warning'>{$row['status_pembayaran']}</label>";
  }
  $tr.="
      <tr>
        <td>{$row['id_transaksi']}</td>
        <td>{$row['tanggal']}</td>
        <td>Rp. {$row['total_bayar']} ,-</td>
        <td>$sts</td>
        <td>$Detail  $Edit  $Hapus</td>
      </tr>
  ";
}

$isi="
	<div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Transaksi</th>
              <th><b>Tanggal</th>
              <th><b>Total Bayar</th>
              <th><b>Status Pembayaran</th>
              <th><b>Aksi</th>
            </tr>
          </thead>
          <tbody>
            $tr
          </tbody>
        </table>
      </div>
    </div>
  </div>
";

$tbl=$tem->tblink("tbh_transaksi/admin","dark","Tambah","plus");

$konten=$tem->wadahisi("Daftar Transaksi","$tbl","$isi");

?>