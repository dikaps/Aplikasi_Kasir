<?php


$query=Query::tampil($kon,"masakan ORDER BY id_masakan DESC");
while ($row=Query::fetch($query)) {
  $Edit=$tem->tbl("edit_masakan-{$row['id_masakan']}/$folder","warning","Edit","edit");
  $Hapus=$tem->tbl("hapus_masakan-{$row['id_masakan']}/aksi","danger","Hapus","trash");
  if ($row['status_masakan']=="Tersedia") {
    $sts="<label class='badge badge-info'>{$row['status_masakan']}</label>";
  }
  else{
    $sts="<label class='badge badge-warning'>{$row['status_masakan']}</label>";
  }
  $tr.="
      <tr>
        <td>{$row['id_masakan']}</td>
        <td>{$row['nama_masakan']}</td>
        <td>{$row['harga']}</td>
        <td>$sts</td>
        <td>$Edit  $Hapus</td>
      </tr>
  ";
}

$isi="
	<div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Masakan</th>
              <th><b>Nama Masakan</th>
              <th><b>Harga</th>
              <th><b>Status Masakan</th>
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

$tbl=$tem->tblink("tbh_masakan/admin","dark","Tambah","plus");

$konten=$tem->wadahisi("Daftar Masakan","$tbl","$isi");

?>