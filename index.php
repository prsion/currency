<?php

define('LINK', 'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');
$data=file_get_contents(LINK);
$courses=json_decode($data, true);

/**
 * autoloader
 */
require __DIR__ . '/vendor/autoload.php';
$func=new liw\app\Func();

$func->run();
//$func->print_arr($courses);

		foreach ($courses as $curr) {

				foreach ($curr as $item=>$key) {
					$array[]=$key;
				}
			}
//var_dump($array);
for ($i = 0; $i < 16 ; $i=$i+4) {
	$arr_curr[]=$array[$i];
}
var_dump($arr_curr);
 ?>

<form method="GET">
<select name="s">
<?php
		foreach ($arr_curr as $item) {
			echo "<option value=\"$item\">$item</option>";

}
?>

</select>
<input type="submit" name="submit" value='Choose currency' />
</form>

<form  method="post">
	<br>
  <input type="text"  name="text" placeholder="input numeric value"><br>
	<!-- <input type="text"  name="valuta" placeholder="curs"><br> -->
	<input type='submit' value='Convert to UAH'>
</form>



<?php
if (isset($_GET['submit'])) {
        //var_dump($_GET['s']);
        $val_curr=$_GET['s'];
        var_dump($val_curr);
    }



//out out currency
$curr = $val_curr;
foreach($courses as $course){
    if($course['ccy']==$curr){
        $course_curr = $course['buy'];
    }
}
   var_dump($course_curr);


// calculate
if (count($_POST)>0){
$text=$_POST['text'];
//$val=$_POST['valuta'];
$total=$text*$course_curr;
"<br>";
echo "UAH_total = ".$total;
}
?>
