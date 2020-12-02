<?php 

class Router extends Libs
{
	private $routes = [ 
		"" 				=> "C:/OSPanel/domains/test/application/controllers/MainPage.php",
		"countries" 	=> "C:/OSPanel/domains/test/application/controllers/Country.php",
		"medal" 		=> "C:/OSPanel/domains/test/application/controllers/Medal.php",
		"sportsmans" 	=> "C:/OSPanel/domains/test/application/controllers/Sportsman.php",
		"sports" 		=> "C:/OSPanel/domains/test/application/controllers/Sport.php",
		"medals_list"	=> "C:/OSPanel/domains/test/application/controllers/MedalList.php"
	];

	private function getRequestPath() 
	{
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$path = ltrim($path, "/");
		$path = explode("/", $path);
		return $path;	
	}

	public function getMethod()
	{	
		$routes = $this->routes;
		$pathArr = $this->getRequestPath();
		if (isset($pathArr[1])) {
			require_once($routes[$pathArr[0]]);
			
			$classExplode = explode("/", $routes[$pathArr[0]]);
			$count = (count($classExplode) - 1);
			$className = explode(".", $classExplode[$count]);
			$class = new $className[0];
			$action = $pathArr[1];
			if (isset($_GET["method"])) {
				$action = $_GET["method"];
			} 
			if (method_exists($class, $action)) {
				$class->$action();
				return $class;
			}
		}
	}

	public function getRout()
	{	
		$routes = $this->routes;
		$pathArr = $this->getRequestPath();
		$path = $pathArr[0];
		//$method = $routes[$path];
		foreach ($routes as $route => $method) {
			if ($path == $route) {	
				require_once($method);
				$classExplode = explode("/", $method);
				$count = (count($classExplode) - 1);
				$className = explode(".", $classExplode[$count]);
				$class = new $className[0];
				$class->index();
			}
		}
		return "MainPage.php"; //** Тут должна быть страница 404 */
	}

	public function getModel() 
	{
		$routes = $this->routes;
		$pathArr = $this->getRequestPath();
		$method = $routes[$pathArr[0]];
		$classExplode = explode("/", $method);
		$count = (count($classExplode) - 1);
		$methodName =  realpath($_SERVER['DOCUMENT_ROOT']) . "/application/models/Model" . $classExplode[$count];
		$this->connection_idiorm();
		
		require_once ($methodName);
	}
}
