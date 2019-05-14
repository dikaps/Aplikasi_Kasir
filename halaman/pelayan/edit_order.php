<?php

$h=Query::update($kon,"orderan","status_order='Sudah diproses'","id_order='$v1'");
header("location:index.php?order/pelayan");

?>