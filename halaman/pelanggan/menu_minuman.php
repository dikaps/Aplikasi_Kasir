<?php

$query=Query::tampil($kon,"minuman ORDER BY id_minuman DESC");
while ($row=Query::fetch($query)) {
  
  $tr.="
      <tr>
        <td>{$row['id_minuman']}</td>
        <td>{$row['nama_minuman']}</td>
        <td>{$row['harga']}</td>
        <td><label class='badge badge-danger'>{$row['status_minuman']}</label></td>
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


$konten=$tem->wadahisi("Daftar minuman","$tbl","$isi");

?>