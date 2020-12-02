<?php 

class MainPage extends Libs
{

	public function __construct()
    {
        $this->class = new ModelMainPage;
	}

	private $sortArr = [
		"asc" 		=> "asc",
		"desc" 		=> "desc",
		"position" 	=> "position",
		"name"		=> "name",
		"sum" 		=> "sum",
		"gold" 		=> "gold",
		"silver"	=> "silver",
		"bronze" 	=> "bronze"
	];
					
	private function sorting()
	{
		return ((isset($_GET['sort']) and $_GET['sort'] == 'asc') ? 'desc' : 'asc');
	}
	
	public function index() 
	{
		$class = $this->class;
		$ratingArray = $class->getIds();
		$data = $class->getSortingTable();
		$sort = $this->sorting();
		$smarty = $this->getSmarty();
		$smarty->assign('sorting', $sort);
		$smarty->assign('rating_array', $ratingArray);
		$smarty->assign('data', $data);
		$smarty->display('index.tpl');
		return $smarty;
	}
}
