<?php

$query=Query::tampil($kon,"detail_order, masakan, minuman
    WHERE
    detail_order.id_masakan=masakan.id_masakan AND
    detail_order.id_minuman=minuman.id_minuman order by id_detail_order DESC");

while ($row=Query::fetch($query)) {
  
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
      <td>{$row['id_order']}</td>
      <td>{$row['nama_masakan']}</td>
      <td>{$row['nama_minuman']}</td>
      <td>$ket</td>
      <td>$sts</td>
    </tr>
  ";
}

$isi="
  <div class='table-responsive'>
        <table class='table'>
          <thead>
            <tr>
              <th><b>Id Detail Order</th>
              <th><b>Order</th>
              <th><b>Masakan</th>
              <th><b>Minuman</th>
              <th><b>Keterangan</th>
              <th><b>Status</th>
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

$konten=$tem->wadahisi("Detail Order","$tbl","$isi");

?>