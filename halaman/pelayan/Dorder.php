<?php

$query=Query::tampil($kon,"detail_order ORDER BY id_detail_order DESC");
while ($row=Query::fetch($query)) {
  $Detail=$tem->tbl("detail_dorder-{$row['id_detail_order']}/$folder","primary","Detail","info");
  $Edit=$tem->tbl("edit_Dorder-{$row['id_detail_order']}/$folder","warning","Sudah Diantar","check");
  $Hapus=$tem->tbl("hapus_dorder-{$row['id_detail_order']}/aksi","danger","Detail","trash");
  
  if ($row['status_detail_order']=="Belum Diantar") {
    $sts=$tem->notif("danger","{$row['status_detail_order']}");
  }
  else{
    $sts=$tem->notif("primary","{$row['status_detail_order']}");
  }

  if ($row['keterangan']=="Pending") {
    $ket=$tem->notif("danger","{$row['keterangan']}");
  }
  else{
    $ket=$tem->notif("primary","{$row['keterangan']}");
  }

  $tr.="
    <tr>
      <td>{$row['id_detail_order']}</td>
      <td>$ket</td>
      <td>$sts</td>
      <td>$Detail  $Edit  $Hapus</td>
    </tr>
  ";
}

$isi="
  <div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Detail Order</th>
              <th><b>Keterangan</th>
              <th><b>Status</th>
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

$tbl=$tem->tblink("tbh_Dorder/pelayan","dark","Kembali","plus");
$konten=$tem->wadahisi("Detail Order","$tbl","$isi");

?>