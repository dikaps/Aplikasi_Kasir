<?php


$query=Query::tampil($kon,"orderan ORDER BY id_order DESC");
while ($row=Query::fetch($query)) {
  $Detail=$tem->tbl("dt_order-{$row['id_order']}/$folder","primary","Detail","info");
  $Edit=$tem->tbl("edit_order-{$row['id_order']}/$folder","warning","Proses Pemesanan Selesai","check"); 
  $Hapus=$tem->tbl("hapus_order-{$row['id_order']}/aksi","danger","Hapus","trash");
  if ($row['keterangan']=="Sudah Dipesan") {
    $ket="<label class='badge badge-info'>{$row['keterangan']}</label>";
  }
  else{
    $ket="<label class='badge badge-danger'>{$row['keterangan']}</label>";
  }
  $tr.="
    <tr>
      <td>{$row['id_order']}</td>
      <td>{$row['no_meja']}</td>
      <td>$ket</td>
      <td>$Detail $Edit $Hapus</td>
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

$tbl=$tem->tblink("tbh_order/admin","dark","Tambah","plus");

$konten=$tem->wadahisi("Daftar Order","$tbl","$isi");

?>