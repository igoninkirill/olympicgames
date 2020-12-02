<?php

class Libs 
{
	protected function getSmarty() 
	{
		
		define('SMARTY_DIR', 'C:/OSPanel/domains/test/smarty/smarty-3.1.35/libs/'); 
		require_once(SMARTY_DIR . 'Smarty.class.php');
		$smarty = new Smarty();
		$smarty->template_dir = 'C:/OSPanel/domains/test/application/views';
		$smarty->compile_dir = 'C:/OSPanel/domains/test/smarty/templates_c';
		$smarty->config_dir = 'C:/OSPanel/domains/test/smarty/configs';
		$smarty->cache_dir = 'C:/OSPanel/domains/test/smarty/cache';
		$smarty->debugging = true;
		return $smarty;
	}

	protected function connection_idiorm()
	{
		require_once('idiorm-master/idiorm.php');

		ORM::configure('mysql:host=localhost;dbname=olympic_games');
		ORM::configure('username', 'mysql');
		ORM::configure('password', 'mysql'); 
	}
}
