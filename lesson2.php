<?php
//1
echo "1:";
$a = -4;
$b = 2;
 
if($a >= 0 && $b >= 0){
	$c=$a - $b;
    echo $c;
}
else if ($a < 0 && $b < 0){
	$c=$a * $b;
    echo $c;
}
else if (($a >= 0 && $b < 0)  || ($a < 0 && $b >= 0)){
	$c=$a + $b;
    echo $c;
}
 echo "</br>";
//2
 echo "2:";
 $a = "aaqa" ;
switch ($a) {
    case 1:
        echo $a++;
    case 2:
        echo $a++;
    case 3:
        echo $a++;
    case 4:
        echo $a++;
    case 5:
        echo $a++;
    case 6:
        echo $a++;
    case 7:
        echo $a++;
    case 8:
        echo $a++;
    case 9:
        echo $a++;
    case 10:
        echo $a++;
    case 11:
        echo $a++;
    case 12:
        echo $a++;
    case 13:
        echo $a++;
    case 14:
        echo $a++;
    case 15:
        echo $a++;
        echo "</br>";
     case $a >= 15:
        echo "stop";
        echo "</br>";
        break;
     default:
        echo "Нужно было ввести цифру!!!!!!!!!!1";
        echo "</br>";
}
     //3
echo "3:";
		function sum($x,$y) {
    		return $x + $y;
		}

		function razn($x, $y) {
    		return $x - $y;
		}

		function del($x, $y) {
    		return $x / $y;
		}

		function proizv($x, $y) {
    		return $x * $y;
		}
        echo sum(3,14);
        echo ",";
        echo razn(32,15);
        echo ",";
        echo proizv(1,17);
        echo ",";
		echo del(289,17);
		echo "</br>";
	//4
		echo "4:";
		function mathOperation($arg1, $arg2, $operation){
    			switch($operation){
       				 case "+":
           				 return sum($arg1,$arg2);
           				 break;
       				 case '-':
           				 return razn($arg1,$arg2);
            			 break;
        			case '*':
           				 return proizv($arg1,$arg2);
            			 break;
            		case '/':
                      	 return del($arg1,$arg2);
                      	 break;					  
            			 

   				}
		}
		echo mathOperation(3,2,"+");
		echo ",";
		echo mathOperation(3,2,"-");
		echo ",";
		echo mathOperation(3,2,"*");
		echo ",";
		echo mathOperation(3,2,"/");
		echo "</br>";
		//5
		echo "6:";
		function power($val, $pow){
			if( $pow!=0){
		return $val * power ($val, $pow - 1);
		}
		return 1;
	}
		echo power(3,3);



 
?>