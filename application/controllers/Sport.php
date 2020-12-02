<?php 

class Sport extends Libs
{
    public function __construct()
    {
        $this->class = new ModelSport;
    }

    public function index() 
    {
        $class = $this->class;
        $sports = $class->getSports();
        $smarty = $this->getSmarty();
        $smarty->assign('sports', $sports);
        $smarty->display('sport.tpl');
        return $smarty;
    }

    public function delete()
    {
        if (!empty($_GET["delete_id"])) {
            $class = $this->class;
            $delete = array_map('htmlspecialchars', $_GET);
            $del = $class->delFromDB($delete);
            if ($del == true) {
                header("Location: http://test/sports");
            }
        }
    }

    public function store()
    {
        if (isset($_POST["sport"])) {
            $class = $this->class;
            $newSport = array_map('htmlspecialchars', $_POST);
            $add = $class->addToDB($newSport);
            if ($add == true) {
                header("Location: http://test/sports");
            }
        }
    }
}
