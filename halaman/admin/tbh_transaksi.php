<?php

switch ($tombol) {
	case 'Baru':
		$cek=Query::buatkode($kon,"id_transaksi","id","transaksi");
		//NP0001
		$kode=substr($cek['id'], 1,4);
		$tbh=$kode+1;
		if ($tbh<10) {
			$id="T000".$tbh;
		}
		elseif ($tbh<99) {
			$id="T00".$tbh;
		}
		elseif ($tbh<999) {
			$id="T0".$tbh;
		}
		else{
			$id="T".$tbh;
		}

		if ($tombol) {
			Query::tambah($kon,"transaksi","id_transaksi","'$id'");
			header("location:index.php?$file-true-$id/$folder");
		}
	break;

	case 'Simpan':
		$h=Query::update($kon,"transaksi","id_order='$var2',id_user='$var3',tanggal='$var4',total_bayar='$var5'","id_transaksi='$v2'");
		if ($h) {
			$ket=$tem->notif("success","Data Berhasil Disimpan");
		}
		
		$query=Query::nampil($kon,"orderan INNER JOIN user ON orderan.id_user=user.id_user","id_order='$var2'");
		while ($row=mysqli_fetch_array($query)) {
			if ($var3==$row['id_user']) {
				$op.="
					<option value='{$row['id_user']}' selected>{$row['nama_user']}</option>
				";	
			}
			else{
				$op.="
					<option value='{$row['id_user']}'>{$row['nama_user']}</option>
				";
			}
		
		}

		$user="<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Id User</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var3' $dis>
		    			<option>Pilih</option>
						$op		    			
		    		</select>
		  		</div>
		  	</div>";
	break;
	
	
}

if ($v1=="true") {
	$tbl="<a href='?batal_transaksi-$v2/aksi' class='btn btn-danger'>Batal</a> <input type='submit' class='btn btn-primary' name='tombol' value='Baru'>";
	$ntbl="Simpan";
	$read="readonly";
	$ambil=Query::ambil($kon,"transaksi","id_transaksi='$v2'");
	$var1=$ambil['id_transaksi'];

	$q=Query::nampil($kon,"orderan","keterangan='Sudah Dipesan'");
	while ($row=mysqli_fetch_array($q)) {
		if ($var2==$row['id_order']) {
			$opsi.="
				<option value='{$row['id_order']}' selected>{$row['id_order']}</option>
			";	
		}
		else{
			$opsi.="
				<option value='{$row['id_order']}'>{$row['id_order']}</option>
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
			    <label for='var1' class='col-sm-3'>Id Transaksi</label>
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

		  	$user
		  

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Tanggal</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control' $dis name='var4' value='$var4' id='datepicker'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Total Bayar</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control' $dis name='var5' value='$var5'>
		  		</div>
		  	</div>
		  	
		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='$ntbl'> $tbl
		  	</div>
		</form>
";

$tbl=$tem->tblink("transaksi/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Tambah Transaksi $ket",$tbl,$wIsi);

?>