<?php

$h=Query::update($kon,"transaksi","status_pembayaran='Sudah Dibayar'","id_transaksi='$v1'");
header("location:index.php?transaksi_blm/kasir");

?>