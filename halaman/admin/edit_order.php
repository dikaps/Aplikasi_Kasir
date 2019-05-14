<?php

Query::update($kon,"orderan","tanggal='',keterangan='Belum Dipesan',status_order='Belum diproses'","id_order='$v1'");
header("location:index.php?order/admin");

?>