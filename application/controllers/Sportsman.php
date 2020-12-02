<?php 	

class Sportsman extends Libs
{
    public function __construct()
    {
        $this->class = new ModelSportsman;
    }

    public function index() 
    {
        $class = $this->class;
        $sportsmans = $class->getDB();
        $smarty = $this->getSmarty();
        $smarty->assign('sportsmans', $sportsmans);
        $smarty->display('sportsman.tpl');
        return $smarty;
    }

    public function delete()
    {
        if (!empty($_GET["delete_id"])) {
            $class = $this->class;
            $delete = array_map('htmlspecialchars', $_GET);
            $del = $class->delFromDB($delete);
            if ($del == true) {
                header("Location: http://test/sportsmans");
            }
        }
    }

    public function store()
    {
        if (isset($_POST["sportsman"])) {
            $class = $this->class;
            $newSportsman = array_map('htmlspecialchars', $_POST);
            $add = $class->addToDB($newSportsman);
            if ($add == true) {
                header("Location: http://test/sportsmans");
            }
        }
    }
}
