<?php


$query=Query::nampil($kon,"orderan INNER JOIN user ON orderan.id_user=user.id_user","keterangan='Sudah Dipesan'");
while ($row=Query::fetch($query)) {
  $Edit=$tem->tbl("edit_order-{$row['id_order']}/$folder","primary","Detail","edit");
  
  if($row['status_order']=="Sudah diproses") {
    //$sts="<label class='badge badge-success'>{$row['status_order']}</label>";
    $sts=$tem->notif("success","{$row['status_order']}");
  }
  else{
    $sts=$tem->notif("warning","{$row['status_order']}");
  }

  $tr.="
    <tr>
      <td>{$row['id_order']}</td>
      <td>{$row['no_meja']}</td>
      <td><label class='badge badge-danger'>{$row['keterangan']}</label></td>
      <td>{$row['nama_user']}</td>
      <td>$sts</td>
      <td>$Edit</td>
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
              <th><b>Pemesan</th>
              <th><b>Status Order</th>
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


$konten=$tem->wadahisi("Daftar Order","","$isi");

?>