<?php
$a="234";
$arr=array(0=>'A',2=>'B');
$arr[1]='C';
$arr[]='D';
$arr['kiet']='tuan';
$n=3;
function oddOrEven($num){
    return $num%2==0;
}
if (oddOrEven($n)) {
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
echo("<br/>");
foreach ($arr as $key => $value) {
    echo("$key = $value");
    echo('<br/>');
}
function kiem_tra()
{
    // bien tinh
    static $a = 0;
    $a++;
    echo $a;
}
  
kiem_tra();
kiem_tra();

function lonNhat($a,$b){
    if($a>$b)
    {
        return $a;
    }
    else
    {
        return $b;
    }
}
echo('<br/>'.lonNhat(2,lonNhat(4,7)).'<br/>');

?>