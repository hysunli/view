<?php
namespace hysunli\view;
class View{
	public static function __callStatic( $name, $arguments ) {
		return call_user_func_array([new Base,$name],$arguments);
	}

	public function __call( $name, $arguments ) {
		return call_user_func_array([new Base,$name],$arguments);
	}
}