<?php

switch ($tombol) {
	case 'Baru':
		$cek=Query::buatkode($kon,"id_minuman","id","minuman");
		//NP0001
		$kode=substr($cek['id'], 3,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$id="Mnm000".$tbh;
		}
		elseif ($tbh<99) {
			$id="Mnm00".$tbh;
		}
		elseif ($tbh<999) {
			$id="Mnm0".$tbh;
		}
		else{
			$id="Mnm".$tbh;
		}

		if ($tombol) {
			Query::tambah($kon,"minuman","id_minuman","'$id'");
			header("location:index.php?$file-true-$id/$folder");
		}
	break;

	case 'Simpan':
		$h=Query::update($kon,"minuman","nama_minuman='$var2',harga='$var3'","id_minuman='$v2'");
		if ($h) {
			$ket=$tem->notif("success","Data Berhasil Disimpan");
		}
		else{
			$ket=$tem->notif("danger","Data Gagal Disimpan");
		}
	break;
	
	
}


if ($v1=="true") {
	$tbl="<a href='?batal_minuman-$v2/aksi' class='btn btn-danger'>Batal</a> <input type='submit' class='btn btn-primary' name='tombol' value='Baru'>";
	$ntbl="Simpan";
	$read="readonly";
	$ambil=Query::ambil($kon,"minuman","id_minuman='$v2'");
	$var1=$ambil['id_minuman'];
}
else{
	$ntbl="Baru";
	$read="disabled";
	$dis="disabled";
}

$wIsi="
		
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Minuman</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' $read>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Nama Minuman</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control' $dis name='var2' value='$var2'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Harga</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' $dis name='var3' value='$var3'>
		  		</div>
		  	</div>

		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='$ntbl'> $tbl
		  	</div>
		</form>
";

$tbl=$tem->tblink("minuman/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah minuman $ket",$tbl,$wIsi);

?>