<?php 

require_once "user_details.php";

$Obj= 

$arr=["black","white","green","red"];

foreach($arr AS $color){
    print $color . "<br>";
}


print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];
print "<br>";
print "<br>";
print basename($_SERVER("PHP_SELF"));

if(file_exists("index")){
    print "yes";
}else{
    print "now";
}
?>