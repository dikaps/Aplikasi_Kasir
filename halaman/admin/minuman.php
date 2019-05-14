<?php


$query=Query::tampil($kon,"minuman ORDER BY id_minuman DESC");
while ($row=Query::fetch($query)) {
  $Edit=$tem->tbl("edit_minuman-{$row['id_minuman']}/$folder","warning","Edit","edit");
  $Hapus=$tem->tbl("hapus_minuman-{$row['id_minuman']}/aksi","danger","Hapus","trash");
  if ($row['status_minuman']=="Tersedia") {
    $sts="<label class='badge badge-info'>{$row['status_minuman']}</label>";
  }
  else{
    $sts="<label class='badge badge-warning'>{$row['status_minuman']}</label>";
  }
  $tr.="
      <tr>
        <td>{$row['id_minuman']}</td>
        <td>{$row['nama_minuman']}</td>
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
              <th><b>Id Minuman</th>
              <th><b>Nama Minuman</th>
              <th><b>Harga</th>
              <th><b>Status Minuman</th>
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

$tbl=$tem->tblink("tbh_minuman/admin","dark","Tambah","plus");

$konten=$tem->wadahisi("Daftar Minuman","$tbl","$isi");

?>