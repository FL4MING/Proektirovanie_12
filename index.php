<?php  
	interface Product {
		function Display();
	}

	class Cake implements Product {
		public $name, $price, $rating;
		function __construct($name, $price, $rating)
		{
			$this->name = $name;
			$this->price = $price;
			$this->rating = $rating;
		}
		function Display() {
			echo("Торт: ".$this->name." стоимостью ".$this->price." руб."." Рейтинг: ".$this->rating." звёзд<br><br>");
		}
	}

	class Bread implements Product {
		public $name, $price, $rating;
		function __construct($name, $price, $rating)
		{
			$this->name = $name;
			$this->price = $price;
			$this->rating = $rating;
		}
		function Display() {
			echo("Хлеб: ".$this->name." стоимостью ".$this->price." руб."." Рейтинг: ".$this->rating." звёзд<br><br>");
		}
	}

	class Pizza implements Product {
		public $name, $price, $rating;
		function __construct($name, $price, $rating)
		{
			$this->name = $name;
			$this->price = $price;
			$this->rating = $rating;
		}
		function Display() {
			echo("Пицца: ".$this->name." стоимостью ".$this->price." руб."." Рейтинг: ".$this->rating." звёзд<br><br>");
		}
	}
	$product1= new Cake("Наполеон","1500", "5");
	$product2= new Bread("Домашний","100", "4.9");
	$product3= new Pizza("Гавайская","1380", "3.8");
	$product1->Display();
	$product2->Display();
	$product3->Display();

	interface User {
		function Info();
	}

	class User1 implements User {
		public $login, $password;
		function __construct($login,$password)
		{
			$this->login = $login;
			$this->password = $password;
		}
		function Info()
		{
			echo("Пользователь: ".$this->login." Пароль: ".$this->password."<br><br>");
		}
	}

	class User2 implements User {
		public $login, $password;
		function __construct($login,$password)
		{
			$this->login = $login;
			$this->password = $password;
		}
		function Info()
		{
			echo("Пользователь: ".$this->login." Пароль: ".$this->password."<br><br>");
		}
	}

	class User3 implements User {
		public $login, $password;
		function __construct($login,$password)
		{
			$this->login = $login;
			$this->password = $password;
		}
		function Info()
		{
			echo("Пользователь: ".$this->login." Пароль: ".$this->password."<br><br>");
		}
	}

	// $user2= new User2("FL4MING", "1234");
	// $user2->Info();

	class Sell implements Product, User {
		public $name, $login;
		function __construct($name,$login)
		{
			$this->name = $name;
			$this->login = $login;
		}
		function Display()
		{
			
		}
		function Info() {
			
		}
		function SellInfo()
		{
			echo "Пользователь ".$this->login." купил: ".$this->name;
		}
	}

	$sell1= new Sell("Наполеон", "FL4MING");
	$sell1->SellInfo();
?>