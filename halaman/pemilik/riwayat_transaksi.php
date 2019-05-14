<?php

$query=Query::tampil($kon,"transaksi WHERE status_pembayaran='Sudah Dibayar' ORDER BY id_transaksi DESC");
while ($row=Query::fetch($query)) {
  $tr.="
      <tr>
        <td>{$row['id_transaksi']}</td>
        <td>{$row['id_user']}</td>
        <td>{$row['id_order']}</td>
        <td>{$row['tanggal']}</td>
        <td><label class='badge badge-danger'>Rp. {$row['total_bayar']} ,-</label></td>
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


$konten=$tem->wadahisi("Daftar Transaksi Yang Sudah Berhasil","","$isi");

?>