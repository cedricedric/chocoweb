<?php 

class Choco
{
		public $menus;

		function __construct()
		{
			$this->menus = $this->getMenus();

		}

		public function getMenus()
		{
			require_once('models/Menus.php');
			$choc1 = new Menu(1, 'fr');
			$choc2 = new Menu(2, 'fr');
			$choc3 = new Menu(3, 'fr');
			$choc4 = new Menu(4, 'fr');
			$choc5 = new Menu(5, 'fr');
			$choc6 = new Menu(6, 'fr');
			return [$choc1,$choc2,$choc3,$choc4,$choc5,$choc6];
		}
}