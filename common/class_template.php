<?php

	class template{
		function wadahisi($wjudul,$wTombol,$wIsi){
			return "
				<div class='row'>
			        <div class='col-md-12 stretch-card'>
				        <div class='card'>
				            <div class='card-header'>
				              <h3>
				              	$wjudul 
				              	$wTombol
				              </h3>
				            </div>
				            
				            <div class='card-body'>
				              $wIsi
				            </div>
				        </div>
			        </div>
			    </div>
			";
		}

		function pulang($link){
			return "header('location:index.php?$link')";
		}

		function tblink($link,$warna,$ket,$icon){
			return "
				<a href='?$link' class='btn btn-outline-$warna btn-xs' style='float:right;' title='$ket'><span class='icon-$icon'></span></a>
			";	
		}

		function tbl($link,$warna,$judul,$icon){
			return"
				<a href='?$link' class='btn btn-$warna btn-xs' title='$judul'><span class='icon-$icon'></span></a>
			";
		}

		function notif($jenis,$ket){
			return"<label class='badge badge-$jenis'>$ket</label>";
		}
	}

?>