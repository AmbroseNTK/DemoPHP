<?php
$a="234";
$arr=array(0=>'A',2=>'B');
$arr[1]='C';
$arr[]='D';
$arr['kiet']='tuan';
$n=3;
if ($n%2==0) {
    echo("So $n la so chan");
} else {
    echo("So $n la so le");
}
echo('<br/>');
switch ($n) {
    case 0:
        echo("So khong");
        break;
    case 1:
        echo("So mot");
        break;
    case 2:
        echo("So hai");
        break;
    case 3:
        echo("So ba");
        break;
    default:
        echo("Khong biet !");
        break;
}
echo("<br/>");
for ($i=0; $i<4; $i++) {
    echo($arr[$i]);
    echo("<br/>");
}
print_r($arr);

?>