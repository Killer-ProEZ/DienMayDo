<?php
	// $Connect = mysqli_connect("localhost","root","","qlbh") or die("Lỗi".mysqli_error($Connect));
	// mysqli_query($Connect,'SET NAMES "utf8"');
	$Connect = pg_connect("postgres://vfudnfwblbrwvd:ead8e22cdfd5f3e3ff54a9ca2e5b008f2b6a098e645c6e64caa2557197a3a8f1@ec2-52-201-72-91.compute-1.amazonaws.com:5432/d25bth0sm14ie") or die("Lỗi".pg_result_error($conn));
	pg_query($Connect,'SET NAMES "utf8"');
	//mysqli_close($Connect);
?>