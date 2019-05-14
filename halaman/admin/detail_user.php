<?php
$ambil=Query::ambil($kon,"user INNER JOIN level ON user.id_level=level.id_level","id_user='$v1'");
$var1=$ambil['id_user'];
$var2=$ambil['username'];
$var3=$ambil['nama_user'];
$var4=$ambil['nama_level'];


$wIsi="
	
		$ket
		<form class='forms-sample' method='POST'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id User</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Username</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control'  name='var2' value='$var2' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Nama Lengkap</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control'  name='var3' value='$var3' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Level</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control'  name='var4' value='$var4' readonly>
		  		</div>
		  	</div>
		  	
		  	
		</form>
";

$tbl=$tem->tblink("user/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Detail User",$tbl,$wIsi);

?>