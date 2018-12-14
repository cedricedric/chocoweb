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
			$choco1 = new Menu(1, 'fr');
			$choco2 = new Menu(2, 'fr');
			$choco3 = new Menu(3, 'fr');
			$choco4 = new Menu(4, 'fr');
			$choco5 = new Menu(5, 'fr');
			$choco6 = new Menu(6, 'fr');
			return [$choco1,$choco2,$choco3,$choco4,$choco5,$choco6];
		}
}