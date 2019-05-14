<?php

switch ($tombol) {
	case 'Baru':
		$cek=Query::buatkode($kon,"id_order","id","orderan");
		$kode=substr($cek['id'], 3,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$id="Odr000".$tbh;
		}
		elseif ($tbh<99) {
			$id="Odr00".$tbh;
		}
		elseif ($tbh<999) {
			$id="Odr0".$tbh;
		}
		else{
			$id="Odr".$tbh;
		}

		$cek=Query::buatkode($kon,"no_meja","kd","orderan");
		$kode=substr($cek['kd'], 2,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$kd="MJ000".$tbh;
		}
		elseif ($tbh<99) {
			$kd="MJ00".$tbh;
		}
		elseif ($tbh<999) {
			$kd="MJ0".$tbh;
		}
		else{
			$kd="MJ".$tbh;
		}

		if ($tombol) {
			$h=Query::tambah($kon,"orderan","id_order,no_meja","'$id','$kd'");
			$h=header("location:index.php?$file-true-$id/$folder");
			if ($h) {
				$ket=$tem->notif("success","Berhasil Menambahkan data");
			}
			else{
				$ket=$tem->notif("danger","Gagal Menambahkan data");
			}
		}
	break;
}

if ($v1=="true") {
	$ntbl="Baru";
	$read="readonly";
	$tbl="<a href='?batal_order-$v2/aksi' class='btn btn-danger'>Batal</a>";
	$ambil=Query::ambil($kon,"orderan","id_order='$v2'");
	$var1=$ambil['id_order'];
	$var2=$ambil['no_meja'];
	
}
else{
	$ntbl="Baru";
	$read="disabled";
}

$wIsi="
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Order</label>
			    <div class='col-sm-5'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' $read>
			    </div>
		  	</div>
		  	 $ket
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>No Meja</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var2' value='$var2' $read>
		  		</div>
		  	</div>
		  	
		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='$ntbl'> $tbl
		  	</div>
		</form>
";

$tbl=$tem->tblink("order/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah Orderan",$tbl,$wIsi);

?>