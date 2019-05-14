<?php

if ($tombol) {
	$h=Query::update($kon,"transaksi","id_user='$var2',id_order='$var3',tanggal='$var4',total_bayar='$var5'","id_transaksi='$v1'");
	if ($h) {
		$ket=$tem->notif("success","Data Berhasil Diedit");
	}
	else{
		$ket=$tem->notif("danger","Data Gagal Diedit");
	}
}
		

$ambil=Query::ambil($kon,"transaksi","id_transaksi='$v1'");
$var1=$ambil['id_transaksi'];
$var2=$ambil['id_user'];
$var3=$ambil['id_order'];
$var4=$ambil['tanggal'];
$var5=$ambil['total_bayar'];

$query=Query::nampil($kon,"user","id_level='5'");
while ($row=mysqli_fetch_array($query)) {
	if ($var2==$row['id_user']) {
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

$q=Query::tampil($kon,"orderan");
while ($row=mysqli_fetch_array($q)) {
	if ($var3==$row['id_order']) {
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


$wIsi="$ket
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Transaksi</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Id User</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var2' $dis>
		    			<option>Pilih</option>
						$op		    			
		    		</select>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Id Order</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var3' $dis>
		    			<option>Pilih</option>
						$opsi		    			
		    		</select>
		  		</div>
		  	</div>
		  

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
		  		<input type='submit' class='btn btn-primary' name='tombol' value='Simpan'> 
		  	</div>
		</form>
";

$tbl=$tem->tblink("transaksi/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Edit Transaksi",$tbl,$wIsi);

?>