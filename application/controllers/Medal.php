<?php 

class Medal extends Libs
{
	public function __construct()
    {
        $this->class = new ModelMedal;
	}

	public function index() 
	{
		$class = $this->class;
		$medalsInfo = $class->getMedalInfo();
		$medalsName = $class->getMedalsName();
		$countriesName = $class->getCountriesName();
		$sportsName = $class->getSportsName();
		$sportmansName = $class->getSportmansName();
		$smarty = $this->getSmarty();
		$smarty->assign('medals_info', $medalsInfo);
		$smarty->assign('medals_name', $medalsName);
		$smarty->assign('countries_name', $countriesName);
		$smarty->assign('sports_name', $sportsName);
		$smarty->assign('sportmans_name', $sportmansName);
		$smarty->display('medal.tpl');
		return $smarty;

	}

	public function delete()
	{
		if (!empty($_GET["delete_id"])) {
			$class = $this->class;
			$delete = array_map('htmlspecialchars', $_GET);
			$del = $class->delFromDB($delete);
			if ($del == true) {
				header("Location: http://test/medal");
			}
		}
	}
	
	public function store()
	{
		if (isset($_POST['button'])) {
			$class = $this->class;
			$newMedal = array_map('htmlspecialchars', $_POST);
			$add = $class->addToDB($newMedal);
			if ($add == true) {
				header("Location: http://test/medal");
			}
		}
	}

}
