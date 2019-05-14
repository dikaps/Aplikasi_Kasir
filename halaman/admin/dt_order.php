<?php

$ambil=Query::ambil($kon,"orderan","id_order='$v1'");
$var1=$ambil['id_order'];
$var2=$ambil['no_meja'];
$var3=$ambil['tanggal'];
$var4=$ambil['id_user'];
$var5=$ambil['keterangan'];
$var6=$ambil['status_order'];

$wIsi="
		<form class='forms-sample' method='post'>
			<div class='form-group row'>
			    <label class='col-sm-3'>Id Order</label>
			    <div class='col-sm-5'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label  class='col-sm-3'>No Meja</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var2' value='$var2' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label  class='col-sm-3'>Tanggal</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var3' value='$var3' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label  class='col-sm-3'>Id User</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var4' value='$var4' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label  class='col-sm-3'>Keterangan</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var5' value='$var5' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label  class='col-sm-3'>Status</label>
		    	
		    	<div class='col-sm-5'>
		    		<input type='text' class='form-control' name='var6' value='$var6' readonly>
		  		</div>
		  	</div>
		  	
		</form>
";

$tbl=$tem->tblink("order/admin","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Detail Orderan",$tbl,$wIsi);

?>