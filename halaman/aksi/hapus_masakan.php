<?php

	Query::hapus($kon,"masakan","id_masakan='$v1'");
	header("location:index.php?masakan/admin");

?>