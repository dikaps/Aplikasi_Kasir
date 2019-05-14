<?php

if ($tombol) {
	$h=Query::update($kon,"user","username='$var2',nama_user='$var5',id_level='$var6'","id_user='$v1'");
	if ($h) {
		$ket="<label class='badge badge-success'>Data Berhasil Diedit</label>";
	}
	else{
		$ket="<label class='badge badge-danger'>Data Gagal Disimpan</label>";
	}
}

$ambil=Query::ambil($kon,"user","id_user='$v1'");
$var1=$ambil['id_user'];
$var2=$ambil['username'];
$var3=$ambil['password'];
$var4=$ambil['password'];
$var5=$ambil['nama_user'];
$var6=$ambil['id_level'];





$query=mysqli_query($kon, "SELECT * FROM level");
while ($row=mysqli_fetch_array($query)) {
	if ($var6==$row['id_level']) {
		$op.="
			<option value='{$row['id_level']}' selected>{$row['nama_level']}</option>
		";	
	}
	else{
		$op.="
			<option value='{$row['id_level']}'>{$row['nama_level']}</option>
		";
	}
}





$wIsi="
		$ket
		<form class='forms-sample' method='POST' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id User</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Username</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control'  name='var2' value='$var2'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Password</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='password' class='form-control'  name='var3' value='$var3'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Ulangi Password</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='password' class='form-control'  name='var4' value='$var4'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Nama Lengkap</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control'  name='var5' value='$var5'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Level</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var6' >
		    			<option>Pilih</option>
						$op		    			
		    		</select>
		  		</div>
		  	</div>
		  	
		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='Simpan'> $tbl
		  	</div>
		</form>
";

$tbl=$tem->tblink("user/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Edit User",$tbl,$wIsi);

?>