<?php 

class books{
	var $price;
	var $title;

	function setprice($par){
		$this->price=$par;
	}
	function getprice(){
      echo $this->price;
	}
	function settitle($par){
		$this->title=$par;
	}
	function gettitle(){
		echo $this->title;
	}

}

$physics=new books;
$maths=new books;
$chemistry=new books;


$physics->settitle("physics for highschool");
$chemistry->settitle("advanced chemistry");
$maths->settitle("algebra");

$physics->setprice("100");
$chemistry->setprice("70");
$maths->setprice("50");

$physics->gettitle();
$chemistry->gettitle();
$maths->gettitle();

$physics->getprice();
$chemistry->getprice();
$maths->getprice();

?>