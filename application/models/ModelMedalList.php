<?php

class ModelMedalList extends Libs
{
    public function getMedalList()
    {
		$country = ORM::for_table("medals_info")
			->inner_join("medals", array("medals_info.medal_id", "=", "medals.id"))
			->inner_join("country", array("medals_info.country_id", "=", "country.id"))
			->select("country.name", "country_name")
			->select("sportsman.name", "sportsman_name")
			->select("sports.name", "sport_name")
			->select("medals.name", "medal_name")
			->inner_join("sportsman", array("medals_info.sportsman_id", "=", "sportsman.id"))
			->inner_join("sports", array("medals_info.sport_id", "=", "sports.id"))
			->where_raw('medals_info.country_id = ?', array($_GET['country_id']));
		if ($_GET["medal_type"] == "0") {
			$country = $country->where_raw('country.id = ?', array($_GET['country_id']));
		} else {
			
			$country = $country->where_raw('country.id = ?', array($_GET['country_id']))
				->where_raw('medals_info.medal_id = ?', array($_GET['medal_type']));
		}
        $country = $country->find_many();
        return $country;
    }
}
