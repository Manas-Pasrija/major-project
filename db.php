<?php

 define("HOSTNAME","Localhost");
 define("USERNAME","root");
 define("PASSWORD","");
 DEFINE("DB_NAME","major-project");

  $con=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DB_NAME) OR DIE("DB IS NOT CONNECTED");

  // IF($con){
  // 	ECHO"DB IS CONNECTED SUCCESSFULLY";
  // }


 function formatdate($date){
 	 return date("D,g:i A",strtotime($date));
 }

  $input = "SmackFactory";

$encrypted = encryptIt( $input );
$decrypted = decryptIt( $encrypted );

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}


?>

