<?php

class ModelSportsman extends Libs
{
    public function getDB()
    {
        $sportsmans = ORM::for_table('sportsman')->order_by_asc('id')->find_many(); 
        return $sportsmans;
    }

    public function delFromDB($delete)
    {
        $data = ORM::for_table("sportsman")
            ->where("id", $delete['delete_id'])
            ->delete_many();
        return true;
    }
    
    public function addToDB($newSportsman)
    {
        $sportsman = ORM::for_table('sportsman')->create();
        $sportsman->name = $newSportsman['sportsman'];
        $sportsman->save();
        return true;
    }
}
