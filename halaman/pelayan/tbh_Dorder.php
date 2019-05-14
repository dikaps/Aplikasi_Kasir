<?php

switch ($tombol) {
	case 'Baru':
		$cek=Query::buatkode($kon,"id_detail_order","id","detail_order");
		//dto0001
		$kode=substr($cek['id'],3,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$kd="Dto000".$tbh;
		}
		elseif ($tbh<99) {
			$kd="Dto00".$tbh;
		}
		elseif ($tbh<999) {
			$kd="Dto0".$tbh;
		}
		else{
			$kd="Dto".$tbh;
		}
		if ($tombol) {
			Query::tambah($kon,"detail_order","id_detail_order","'$kd'");
			header("location:index.php?$file-true-$kd/$folder");
		}
	break;

	case 'Simpan':
		
		$h=//Query::update($kon,"detail_order","id_order='$var2',id_masakan='$var3',id_minuman='$var4'","id_detail_order='$v2'");
		Query::update($kon,"detail_order","id_order='$var2',id_masakan='$var3',id_minuman='$var4'","id_detail_order='$v2'");
		if ($h) {
			$ket=$tem->notif("success","Data Berhasil Disimpan");
		}
		else{
			$ket=$tem->notif("danger","Data Gagal Disimpan");
		}
	break;
	
	
}

if ($v1=="true") {
	$ntbl="Simpan";
	$tblbaru="<a href='?batal_Dorder-$v2/aksi' class='btn btn-danger'>Batal</a> <input type='submit' class='btn btn-primary' name='tombol' value='Baru'>";
	$read="readonly";
	$ambil=Query::ambil($kon,"detail_order","id_detail_order='$v2'");
	$var1=$ambil['id_detail_order'];

	$query=Query::nampil($kon,"orderan","status_order='Belum diproses'");
	while ($rown=Query::fetch($query)) {
		if ($var2==$rown['id_order']) {
			$opsi.="
				<option value='{$rown['id_order']}' selected>{$rown['id_order']}</option>
			";
		}
		else{
			$opsi.="
				<option value='{$rown['id_order']}'>{$rown['id_order']}</option>
			";
		}
	}

	$q=Query::tampil($kon,"masakan");
	while ($rowm=Query::fetch($q)) {
		if ($var3==$rowm['id_masakan']) {
			$pilihan.="
				<option value='{$rowm['id_masakan']}' selected>{$rowm['nama_masakan']}</option>
			";
		}
		else{
			$pilihan.="
				<option value='{$rowm['id_masakan']}'>{$rowm['nama_masakan']}</option>
			";
		}
	}

	$qm=Query::tampil($kon,"minuman");
	while ($row=Query::fetch($qm)) {
		if ($var4==$row['id_minuman']) {
			$op.="
				<option value='{$row['id_minuman']}' selected>{$row['nama_minuman']}</option>
			";
		}
		else{
			$op.="
				<option value='{$row['id_minuman']}'>{$row['nama_minuman']}</option>
			";
		}
	}
}
else{
	$ntbl="Baru";
	$read="disabled";
	$dis="disabled";
}

$wIsi="
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Detail Order</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' $read>
			    </div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Id Order</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var2' $dis>
		    			<option>Pilih</option>
		    			$opsi
		    		</select>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Id Masakan</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var3' $dis>
		    			<option>Pilih</option>
		    			$pilihan
		    		</select>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Id Minuman</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var4' $dis>
		    			<option>Pilih</option>
		    			$op
		    		</select>
		    		
		  		</div>
		  	</div>

		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='$ntbl'> $tblbaru
		  	</div>
		</form>
";

$tbl=$tem->tblink("Dorder/pelayan","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah Detail Orderan $ket",$tbl,$wIsi);

?>