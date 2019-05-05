<?php
namespace liw\app;

final class Func {
	public function __construct()
		{
			echo "создался новый экземпляр класса из папки app/ ";

		}
		public function run()
		{
			echo '<br>';
			echo "запуск метода run родительского класса Func";
		}

	public function print_arr($arr)
		{
		echo '<pre>'. print_r($arr, true). '</pre>';
		}
}

?>


