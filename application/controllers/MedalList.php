<?php

class MedalList extends Libs
{

	public function __construct()
    {
        $this->class = new ModelMedalList;
	}

	public function index() 
	{
		$class = $this->class;
		$country = $class->getMedalList();
		$medalsName = [
			"gold" 		=> "Золотые",
			"silver" 	=> "Серебрянные",
			"bronze" 	=> "Бронзовые"
		];
		$smarty = $this->getSmarty();
		$smarty->assign('medals_name', $medalsName);
		$smarty->assign('country', $country);
		$smarty->display('medal_list.tpl');
		return $smarty;
	}
}
