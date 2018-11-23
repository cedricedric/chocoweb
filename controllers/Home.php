<?php

class Home
{
	public $slides;

	function __construct()
	{
		$this->slides = $this->getSlides();
	}

	public function getSlides()
	{
		$slide1 =[
			'title' => 'Our mission is to provide an unforgettable experience',
			'href' => '#team',
			'button' => 'Meet ou chef',
			'img' => 'content/choco1.jpg',
			'alt' => ' tablette de chocolat'
		];
		$slide2 =[
			'title' => 'Our mission is to provide an unforgettable experience',
			'sub' => 'the best dinning quality can be here too!',
			'href' => '#menu',
			'button' => 'Meet ou chef',
			'img' => 'content/choco2.jpg',
			'alt' => ' tablette de chocolat'
		];
		$slide3 =[
			'title' => 'Our mission is to provide an unforgettable experience',
			'sub' => 'the best dinning quality can be here too!',
			'href' => '#contact',
			'button' => 'Meet ou chef',
			'img' => 'content/choco3.jpg',
			'alt' => ' tablette de chocolat'
		];
		return [$slide1, $slide2, $slide3];
	}
}