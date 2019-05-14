<?php

if ($tombol) {
	$h=Query::update($kon,"minuman","nama_minuman='$var2',harga='$var3',status_minuman='$var4'","id_minuman='$v1'");
	if ($h) {
		$ket=$tem->notif("success","Data Berhasil Diedit");
	}
	else{
		$ket=$tem->notif("danger","Data Gagal Diedit");
	}
}


$ambil=Query::ambil($kon,"minuman","id_minuman='$v1'");
$var1=$ambil['id_minuman'];
$var2=$ambil['nama_minuman'];
$var3=$ambil['harga'];
$var4=$ambil['status_minuman'];




$wIsi="
		$ket
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Minuman</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Nama Minuman</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control'  name='var2' value='$var2'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Harga</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control'  name='var3' value='$var3'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Status Minuman</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control'  name='var4' value='$var4'>
		  		</div>
		  	</div>

		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='Simpan'>
		  	</div>
		</form>
";

$tbl=$tem->tblink("minuman/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Edit minuman",$tbl,$wIsi);

?>