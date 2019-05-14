<?php

Query::update($kon,"detail_order","Keterangan='OK',status_detail_order='Sudah Diantar'","id_detail_order='$v1'");
header("location:index.php?Dorder/pelayan");


?>