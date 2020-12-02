<?php

class ModelMedal extends Libs
{
    public function getMedalInfo()
    {
		$medalsInfo = ORM::for_table("medals_info")
            ->inner_join("country", array("medals_info.country_id", "=", "country.id"))
            ->inner_join("sportsman", array("medals_info.sportsman_id", "=", "sportsman.id"))
            ->inner_join("sports", array("medals_info.sport_id", "=", "sports.id"))
            ->inner_join("medals", array("medals_info.medal_id", "=", "medals.id"))
            ->select_many(
                array("medal_id" => "medals_info.id"),
                array("country_name" => "country.name"),
                array("medal_name" => "medals.name"),
                array("sportsman_name" => "sportsman.name"),
                array("sport_name" => "sports.name")
            )
            ->select_expr("GROUP_CONCAT(sportsman.name SEPARATOR ', ')", "sportsman_name")
            ->group_by("medals_info.country_id")
            ->group_by("medals_info.sport_id")
            ->group_by("medals_info.medal_id")
            ->order_by_desc("medals_info.id")
            ->find_many();
        return $medalsInfo;
    }

    public function getMedalsName()
    {
        $medalsName = ORM::for_table('medals')->order_by_asc('id')->find_many();  
        return $medalsName;
    }

    public function getCountriesName()
    {
        $countriesName = ORM::for_table('country')->order_by_asc('id')->find_many(); 
        return $countriesName; 
    }

    public function getSportsName()
    {
        $sportsName = ORM::for_table('sports')->order_by_asc('id')->find_many();  
        return $sportsName;
    }

    public function getSportmansName()
    {
        $sportmansName = ORM::for_table('sportsman')->order_by_asc('id')->find_many(); 
        return $sportmansName;      
    }

    public function delFromDB($delete)
    {
        $data = ORM::for_table("medals_info")
            ->where("id", $delete['delete_id'])
            ->delete_many();
        return true;
    }
    
    public function addToDB($newMedal)
    {
        $medal = ORM::for_table('medals_info')->create();
        $medal->countryId = $newMedal['country'];
        $medal->sportsmanId = $newMedal['sportsman'];
        $medal->sportId = $newMedal['sport'];
        $medal->medalId = $newMedal['type_medal'];
        $medal->save();
        return true;       
    }
}
