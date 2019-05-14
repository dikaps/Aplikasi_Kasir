<?php

$query=Query::tampil($kon,"user INNER JOIN level ON user.id_level=level.id_level ORDER BY id_user DESC");
while ($row=Query::fetch($query)) {
  $Detail=$tem->tbl("detail_user-{$row['id_user']}/$folder","primary","Detail","info");
  $Edit=$tem->tbl("edit_user-{$row['id_user']}/$folder","warning","Edit","edit");
  $Hapus=$tem->tbl("hapus_user-{$row['id_user']}/aksi","danger","Hapus","trash");
  if ($row['id_level']=="5") {
    $sts="<label class='badge badge-danger'>{$row['nama_level']}</label>";
  }
  elseif($row['id_level']=="4"){
    $sts="<label class='badge badge-warning'>{$row['nama_level']}</label>";
  }
  elseif($row['id_level']=="3"){
    $sts="<label class='badge badge-success'>{$row['nama_level']}</label>";
  }
  elseif($row['id_level']=="2"){
    $sts="<label class='badge badge-info'>{$row['nama_level']}</label>";
  }
  else{
    $sts="<label class='badge badge-dark'>{$row['nama_level']}</label>";
  }
  $tr.="
      <tr>
        <td>{$row['id_user']}</td>
        <td>{$row['nama_user']}</td>
        <td>$sts</td>
        <td>$Detail $Edit $Hapus</td>
      </tr>
  ";
}

$isi="
	<div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id User</th>
              <th><b>Nama</th>
              <th><b>Level</th>
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

$tbl=$tem->tblink("tbh_user/admin","dark","Tambah","plus");

$konten=$tem->wadahisi("Daftar User","$tbl","$isi");

?>