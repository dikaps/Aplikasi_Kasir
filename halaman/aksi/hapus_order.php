<?php

	Query::hapus($kon,"orderan","id_order='$v1'");
	header("location:index.php?order/admin");

?>