<?php
$pesan=$tem->tbl("pesan_order/pelanggan","primary","Pesan","envelope");

$query=Query::nampil($kon,"orderan","keterangan='Belum Dipesan'");
while ($row=Query::fetch($query)) {
  $pesan=$tem->tbl("pesan_order-{$row['id_order']}/pelanggan","primary","Pesan","envelope");
  $tr.="
    <tr>
      <td>{$row['id_order']}</td>
      <td>{$row['no_meja']}</td>
      <td><label class='badge badge-warning'>{$row['keterangan']}</label></td>
      <td>$pesan</td>
      
    </tr>
  ";
}

$isi="
	<div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Order</th>
              <th><b>No Meja</th>
              <th><b>Keterangan</th>
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



$konten=$tem->wadahisi("Daftar Order yang Belum Dipesan","$tbl","$isi");

?>