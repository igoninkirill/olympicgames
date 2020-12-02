<?php

class ModelCountry extends Libs
{
    public function getData() 
    {
        $countries = ORM::for_table('country')->order_by_asc('id')->find_many(); 
        return $countries; 
    }

    public function delFromDB($delete)
    {       
        $data = ORM::for_table("country")
            ->where("id", $delete['delete_id'])
            ->delete_many();
        return true;
    }

    public function addToDB($newCountry)
    {
        $country = ORM::for_table('country')->create();
        $country->name = $newCountry['country'];
        $country->save();
        return true;
    }
}
