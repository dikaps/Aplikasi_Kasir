<?php

	Query::hapus($kon,"transaksi","id_transaksi='$v1'");
	header("location:index.php?transaksi/admin");

?>