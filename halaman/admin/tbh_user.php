<?php

switch ($tombol) {
	case 'Baru':
		
		$cek=Query::buatkode($kon,"id_user","id","user");
		//Id0001
		$kode=substr($cek['id'], 2,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$id="Id000".$tbh;
		}
		elseif ($tbh<99) {
			$id="Id00".$tbh;
		}
		elseif ($tbh<999) {
			$id="Id0".$tbh;
		}
		else{
			$id="Id".$tbh;
		}

		if ($tombol) {
			Query::tambah($kon,"user","id_user","'$id'");
			//$tem->pulang('$file-true-$id/$folder');
			header("location:index.php?$file-true-$id/$folder");
		}
	break;

	case 'Simpan':
		
		if ($var4==$var3) {
			$h=Query::update($kon,"user","username='$var2',password=md5('$var3'),nama_user='$var5',id_level='$var6'","id_user='$v2'");
			if ($h) {
				$ket="<label class='badge badge-success'>Data Berhasil Disimpan</label>";
			}
			else{
				$ket="<label class='badge badge-danger'>Data Gagal Disimpan</label>";
			}
		}
	break;
}



if ($v1=="true") {
	$ntbl="Simpan";
	$tbl="<a href='?batal_user-$v2/aksi' class='btn btn-danger'>Batal</a> <input type='submit' class='btn btn-primary' name='tombol' value='Baru'>";
	$read="readonly";
	$ambil=Query::ambil($kon,"user","id_user='$v2'");
	$var1=$ambil['id_user'];

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
}
else{
	$ntbl="Baru";
	$dis="disabled";
	$read="disabled";
}



$wIsi="
	
		$ket
		<form class='forms-sample' method='POST' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id User</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' $read>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Username</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control' $dis name='var2' value='$var2'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Password</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='password' class='form-control' $dis name='var3' value='$var3'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Ulangi Password</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='password' class='form-control' $dis name='var4' value='$var4'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Nama Lengkap</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' $dis name='var5' value='$var5'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Level</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var6' $dis>
		    			<option>Pilih</option>
						$op		    			
		    		</select>
		  		</div>
		  	</div>
		  	
		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='$ntbl'> $tbl
		  	</div>
		</form>
";

$tbl=$tem->tblink("user/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah User",$tbl,$wIsi);

?>