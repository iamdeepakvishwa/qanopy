<?Php

include 'phpmailer/index.php' ;

$msg = $_POST['message'] ;
$nm = $_POST['name'] ;
$em = $_POST['email'] ;

$newmsg = filter_var($msg, FILTER_SANITIZE_STRING);
$newnm = filter_var($nm, FILTER_SANITIZE_STRING);
$em = filter_var($em, FILTER_SANITIZE_STRING);

$res = email($newmsg, $newnm, $em) ;

?>
