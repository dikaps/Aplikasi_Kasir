<?php

$ambil=Query::ambil($kon,"transaksi INNER JOIN user ON transaksi.id_user=user.id_user","id_transaksi='$v1'");
$var1=$ambil['id_transaksi'];
$var2=$ambil['nama_user'];
$var3=$ambil['id_order'];
$var4=$ambil['tanggal'];
$var5=$ambil['total_bayar'];
	

$wIsi="
		<form class='forms-sample' method='post'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Transaksi</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Id User</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' name='var2' value='$var2' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Id Order</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' name='var3' value='$var3' readonly>
		  		</div>
		  	</div>
		  

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Tanggal</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control'  name='var4' value='$var4' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Total Bayar</label>
		    	
		    	<div class='col-sm-4'>
		    		<input type='text' class='form-control'  name='var5' value='Rp. $var5 ,-' readonly>
		  		</div>
		  	</div>
		  	
		</form>
";

$tbl=$tem->tblink("transaksi/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Detail Transaksi",$tbl,$wIsi);

?>