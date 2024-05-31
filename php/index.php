<pre>
<code>
$x = true and false;
var_dump($x);
</code>
</pre>
<?php 

$x = true and false;
var_dump($x);


?>

<br/>#############################################################
<pre>
<code>
$a = false;
switch($a){
	case '':
		echo "Blank";
		break;
	case 0:
		echo "Zero";
		break;
	case "0":
		echo "zero string";
		break;
	default:
		echo "false";
		break;
}
</code>
</pre>
<?php
$a = false;
switch($a){
	case '':
		echo "Blank";
		break;
	case 0:
		echo "Zero";
		break;
	case "0":
		echo "zero string";
		break;
	default:
		echo "false";
		break;
}
?>
<br/>#############################################################
<pre>
<code>
$a= (object)["a"=>"hello"];
$b = $a;
$b->a = "world";
print_r($a);
print_r($b);
</code>
</pre>
<?php
$a= (object)["a"=>"hello"];
$b = $a;

$b->a = "world";
print_r($a);
print_r($b);