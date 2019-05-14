<?php

class Query{
	
	public static function tambah($kon,$table,$data,$isi){
		return mysqli_query($kon, "INSERT INTO $table($data) VALUES ($isi)");
	}

	public static function update($kon,$table,$data,$ket){
		return mysqli_query($kon, "UPDATE $table SET $data WHERE $ket");
	}

	public static function hapus($kon,$table,$data){
		return mysqli_query($kon, "DELETE FROM $table WHERE $data");
	}

	public static function cekdata($kon,$table,$syarat){
		return mysqli_num_rows(mysqli_query($kon,"SELECT * FROM $table WHERE $syarat"));
	}

	public static function nampil($kon,$table,$data){
		return mysqli_query($kon,"SELECT * FROM $table WHERE $data");
	}

	public static function tampil($kon,$table){
		return mysqli_query($kon,"SELECT * FROM $table");
	}

	public static function fetch($syarat){
		return mysqli_fetch_array($syarat);
	}

	public static function buatkode($kon,$db,$as,$table){
		return mysqli_fetch_array(mysqli_query($kon,"SELECT max($db)as $as FROM $table"));
	}

	public static function ambil($kon,$table,$syarat){
		return mysqli_fetch_array(mysqli_query($kon,"SELECT * FROM $table WHERE $syarat"));
	}
}

?>