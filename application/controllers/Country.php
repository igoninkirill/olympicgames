<?php 

class Country extends Libs
{
    public function __construct()
    {
        $this->class = new ModelCountry;
    }

    public function index() 
    {
        $class = $this->class;
        $countries = $class->getData();    
        $smarty = $this->getSmarty();
        $smarty->assign('countries', $countries);
        $smarty->display('country.tpl');
        return $smarty;
    }

    public function delete()
    {
        if (!empty($_GET["delete_id"])) {
            $class = $this->class;     
            $delete = array_map('htmlspecialchars', $_GET);
            $del = $class->delFromDB($delete); 
            if ($del == true) {
                header("Location: http://test/countries");
            }
        }
    }

    public function store()
    {
        if (!empty($_POST["country"])) {
            $class = $this->class;
            $newCountry = array_map('htmlspecialchars', $_POST);
            $add = $class->addToDB($newCountry); 
            if ($add == true) {
                header("Location: http://test/countries");
            }
        }
    }

}
