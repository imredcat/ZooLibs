<?php
/**
* Document info
* @project
* @modifydate 2016-01-15
* @filename
* @author Lee Jongmin
* @version 1
* @package string
* @comment 본문내 메일 주소 추출
*/

function mailaddrfromstr($s) {
	$e = "[_0-9a-zA-Z-]+(\.[_0-9a-zA-Z-]+)*@[0-9a-zA-Z-]+(\.[0-9a-zA-Z-]+)+";
	$l = true;
	$a = Array();
	while($l) {
		$d = eregi($e,$s,$_a);
		if($d == false) {
			$l = false;
		}
		$a[] = $_a[0];
		$s = str_replace($_a,"",$s);
	}
	return array_unique($a);
}

?>