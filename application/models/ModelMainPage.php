<?php

class ModelMainPage extends Libs
{
    private function collectTable()
    {
		$data = ORM::for_table("medals_info")
			->inner_join("country", array("country.id", "=", "medals_info.country_id"))
			->select("country.name", "country_name")
			->select("country.id", "id_country")
			->select_expr("SUM(medals_info.medal_id = 1)", 'gold')
			->select_expr("SUM(medals_info.medal_id = 2)", 'silver')
			->select_expr("SUM(medals_info.medal_id = 3)", 'bronze')
			->select_expr("SUM(medals_info.medal_id in (1, 2, 3))", 'SUM');
		return $data;
    }

    public function getIds()
    {
		$ids = $this->collectTable();
		$ids = $ids->order_by_desc("gold")
			->order_by_desc("silver")
			->order_by_desc("bronze")
			->group_by("country.id")
			->find_many();
		$ratingArray = array();
		foreach ($ids as $key => $rating) {	
			$ratingArray[$rating['id_country']] = $key + 1;
        }
        return $ratingArray;
    }
    
    public function getSortingTable()
    {
        $data = $this->collectTable();

		if (!isset($_GET["type"])) {
			$data = $data->order_by_desc("gold");
		} 
		if (isset($_GET["type"]) && $_GET["type"] == "position") {
		if ($_GET['sort'] == "desc") {
			$data = $data->order_by_desc("gold")
				->order_by_desc("silver")
				->order_by_desc("bronze");
			} elseif ($_GET['sort'] == "asc") {
					$data = $data->order_by_asc("gold")
						->order_by_asc("silver")
						->order_by_asc("bronze");
				}
		} else {
			if (!empty($_GET['sort']) && $_GET["sort"] == "desc") {
				$data = $data->order_by_desc($_GET['type']);
			} elseif (!empty($_GET['sort']) && $_GET["sort"] == "asc") {
				$data = $data->order_by_asc($_GET['type']);
			}
		}
		$data = $data->group_by("country.id")
        	->find_many();
        return $data;
    }
}
