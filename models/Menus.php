<?php 

class Menu
{
	public $id;
	public $src;
	public $alt;
	public $price;
	public $name;



	function __construct($id = null, $locale = null)
	{
		// 	 Récupérer le  $id avec se traduction $locale en base de données
		$result = $this->queryMenu($id, $locale);
		$this->id = $result['id'];
		$this->src = $result['i_src'];
		$this->alt = $result['img_alt'];
		$this->price = $result['price'];
		$this->name = $result['name'];
		;

	}

	public function queryMenu($id, $locale)
	{
		// Configurer PDO
		$host = '127.0.0.1';
		$db   = 'sgcchoco';
		$user = 'root';
		$pass = '';
		$charset = 'utf8mb4';

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$options = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		try {
		     $pdo = new PDO($dsn, $user, $pass, $options);
		} catch (\PDOException $e) {
		     throw new \PDOException($e->getMessage(), (int)$e->getCode());
		}

		// Faire la requete
		$query =$pdo->prepare('SELECT nct.locale, nct.img_alt, nct.name, nc.id, nc.i_src, nc.price   FROM nos_chocolats nc  JOIN nos_chocolats_translations nct ON nc.id = nct.chocolat_id AND nct.locale = ? WHERE nc.id= ?');
		$query->execute([$locale, $id]);

		// Retrouver le resultat
		return $query->fetch();
	}
}