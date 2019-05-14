<?php

$query=Query::tampil($kon,"masakan");
while ($row=Query::fetch($query)) {
  
  $tr.="
      <tr>
        <td>{$row['id_masakan']}</td>
        <td>{$row['nama_masakan']}</td>
        <td>{$row['harga']}</td>
        <td><label class='badge badge-danger'>{$row['status_masakan']}</label></td>
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


$konten=$tem->wadahisi("Daftar Masakan","$tbl","$isi");

?>