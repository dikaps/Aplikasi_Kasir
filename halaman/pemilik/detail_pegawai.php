<?php

$wIsi="
		<form class='forms-sample'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id User</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1'>
			    </div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Nama Lengkap</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var5' value='$var5'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Level</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' name='var5' value='$var5'>
		  		</div>
		  	</div>
		  	
		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='Simpan'>
		  	</div>
		</form>
";

$tbl=$tem->tblink("user/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah User",$tbl,$wIsi);

?>