<?php 

function pre($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	exit();
}

function pr($data){
	echo '<pre>';
	print_r($data);
	echo '</pre>';
}

function assets_url(){
	return base_url().'assets/';
}

function encrypt($string){
	return openssl_encrypt($string,"AES-128-ECB",ENCRYPT_DECRYPT_KEY);
}

function decrypt($string){
	return openssl_decrypt($string,"AES-128-ECB",ENCRYPT_DECRYPT_KEY);
}

?>