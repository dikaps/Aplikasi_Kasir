<?php


$ambil=Query::ambil($kon,"detail_order","id_detail_order='$v1'");
$var1=$ambil['id_detail_order'];
$var2=$ambil['id_order'];
$var3=$ambil['id_masakan'];
$var4=$ambil['id_minuman'];
$var5=$ambil['keterangan'];
$var6=$ambil['status_detail_order'];


$wIsi="
		<form class='forms-sample' method='post'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Detail Order</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Orderan</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control col-form-label' name='var2' value='$var2' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var3' class='col-sm-3'>Masakan</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control col-form-label' name='var3' value='$var3' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var4' class='col-sm-3'>Minuman</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control col-form-label' name='var4' value='$var4' readonly>
		    		
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var5' class='col-sm-3'>Keterangan</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control col-form-label' name='var5' value='$var5' readonly>
		    		
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var6' class='col-sm-3'>Status</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control col-form-label' name='var6' value='$var6' readonly>
		    		
		  		</div>
		  	</div>


		</form>
";

$tbl=$tem->tblink("Dorder/pelayan","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Edit Detail Orderan $ket",$tbl,$wIsi);

?>