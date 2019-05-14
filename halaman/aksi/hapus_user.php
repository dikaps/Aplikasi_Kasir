<?php

	Query::hapus($kon,"user","id_user='$v1'");
	header("location:index.php?user/admin");

?>