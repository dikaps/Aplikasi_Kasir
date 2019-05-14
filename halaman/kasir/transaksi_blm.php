<?php

$query=Query::nampil($kon,"transaksi","status_pembayaran='Belum Dibayar'");
while ($row=Query::fetch($query)) {
  $Edit=$tem->tbl("edit_transaksi-{$row['id_transaksi']}/$folder","warning","Edit","edit");
  $tr.="
      <tr>
        <td>{$row['id_transaksi']}</td>
        <td>{$row['id_user']}</td>
        <td>{$row['id_order']}</td>
        <td>{$row['tanggal']}</td>
        <td>Rp. {$row['total_bayar']} ,-</td>
        <td><label class='badge badge-warning'>{$row['status_pembayaran']}</label></td>
        <td>$Edit</td>
      </tr>
  ";
}

$isi="
	<div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Transaksi</th>
              <th><b>Id User</th>
              <th><b>Id Order</th>
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


$konten=$tem->wadahisi("Daftar Transaksi","","$isi");

?>