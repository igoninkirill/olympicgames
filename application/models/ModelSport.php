<?php

class ModelSport extends Libs
{
    public function getSports()
    {
        $sports = ORM::for_table('sports')->order_by_asc('id')->find_many();  
        return $sports;
    }

    public function delFromDB($delete)
    {       
        $data = ORM::for_table("sports")
            ->where("id", $delete['delete_id'])
            ->delete_many();
        return true;
    }

    public function addToDB($newSport)
    {
        $sports = ORM::for_table('sports')->create();
        $sports->name = $newSport['sport'];
        $sports->save();
        return true;
    }
}
