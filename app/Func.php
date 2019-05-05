<?php
namespace liw\app;

final class Func {
	public function __construct()
		{
			echo "создался новый экземпляр класса из папки app/";

		}
		public function run()
		{
			return 'возвращаем строку.....';
		}

	public function print_arr($arr)
		{
		return '<pre>'. print_r($arr, true). '</pre>';
		}
}

?>


