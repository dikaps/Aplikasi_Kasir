<?php



if ($tombol) {
	$ar=Query::ambil($kon,"orderan","id_order='$v1'");
	$order=$ar['id_order'];
	$nomeja=$ar['no_meja'];
	$h=Query::update($kon,"orderan","tanggal='$var3',id_user='$var4',keterangan='Sudah Dipesan'","id_order='$v1'");
	if ($h) {
		$ket="<div class='badge badge-success' style='float:right;color:#000'><b>Anda Berhasil Memesan Meja <i>$nomeja</i> dengan Id Order <i>$order</i></div>";
	}
	else{
		$ket="<div class='badge badge-warning' style='float:right;color:#000'>Anda Gagal Memesan</div>";
	}
}

$ambil=Query::ambil($kon,"orderan","id_order='$v1'");
$var1=$ambil['id_order'];
$var2=$ambil['no_meja'];
$var3=$ambil['tanggal'];
$var4=$ambil['id_user'];
$var5=$ambil['keterangan'];
$var6=$ambil['status_order'];



$query=Query::nampil($kon,"user","id_level='5'");
while ($row=mysqli_fetch_array($query)) {
	if ($var4==$row['id_user']) {
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

$wIsi="
		
		<form class='forms-sample' method='post' autocomplete='off'>
			<div class='form-group row'>
			    <label for='var1' class='col-sm-3'>Id Order</label>
			    <div class='col-sm-2'>
			    	<input type='text' class='form-control col-form-label' name='var1' value='$var1' readonly>
			    </div>
		  	</div>
		  
			<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>No Meja</label>
		    	
		    	<div class='col-sm-2'>
		    		<input type='text' class='form-control' name='var2' value='$var2' readonly>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var' class='col-sm-3'>Tanggal Pemesanan</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' name='var3' value='$var3' id='datepicker'>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var2' class='col-sm-3'>Id User</label>
		    	
		    	<div class='col-sm-3'>
		    		<select class='form-control' name='var4' $dis>
		    			<option>Pilih</option>
						$op		    			
		    		</select>
		  		</div>
		  	</div>

		  	<div class='form-group row'>
		    	<label for='var' class='col-sm-3'>Keterangan</label>
		    	
		    	<div class='col-sm-3'>
		    		<input type='text' class='form-control' name='var5' value='$var5' readonly>
		  		</div>
		  	</div>

		  	<div class='col-sm-5 offset-3'>
		  		<input type='submit' class='btn btn-primary' name='tombol' value='Pesan'> 
		  	</div>
		  	$ket
		</form>
";

$tbl=$tem->tblink("order_blm/pelanggan","dark","Kembali","mail-reply-all");

$konten=$tem->wadahisi("Pesan Orderan",$tbl,$wIsi);

?>