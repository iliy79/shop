<?@session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <link  rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<title>магазин</title>
</head>
<body>
	<head class="head">
		<ul class="information">
			<li class="nav-item"><a href="endex6.php" class="item">О компании<a/></li>
			<li class="nav-item"><a href="endex6.php" class="item">Менеджмент компании</a></li>
			<li class="nav-item"><a href="endex6.php" class="item">Справочник контактых данных</a></li>
			<li class="name">"Сноуборд  - Онлайн"</li>
		</ul>
		<img class="mountains" src="ponarama.jpg">
		<div class="basket">
			<form action="" method="POST" class="check">
				<input type="text" name="login" value="Логин">
				<input type="password" name="password" value="Пароль">
				<input type="submit" value="Войти">
			</form>
			<h4><strong class="prise">Общая стоимость  покупок:</strong></h4>
			<?
			
			/*$date = date('Y:m:d H:i:s');
			if (!isset($last)) {
				@setcookie('last', $date, time()+3600*24*31, '/');
		    }else{
		    	$last = $last;
		    }
		    $last = $_COOKIE['last'];
			$oldtime = $last - date('Y:m:d H:i:s');*/
	
			//Задается стоимость товара
			
			if (isset($_REQUEST['snowbord'])) {
			 $_SESSION['snowbord'] = $_REQUEST['snowbord'];
			 $_SESSION['snowbord'] = 7000;
			    
				
			}
			if (isset($_REQUEST['boots'])) {
			$_SESSION['boots'] = $_REQUEST['boots'];
			$_SESSION['boots'] = 5000;
			
			}
			if (isset($_REQUEST['helmet'])) {
			$_SESSION['helmet'] = $_REQUEST['helmet'];
			$_SESSION['helmet'] = 8000;
				
				
			}
			if (isset($_REQUEST['glass'])) {
			$_SESSION['glass'] = $_REQUEST['glass'];
			$_SESSION['glass'] = 3000;
			
			}

			//общая стоимость всех выбранных товаров
			$sum =  $_SESSION['glass']+$_SESSION['helmet']+$_SESSION['boots']+ $_SESSION['snowbord'];

			
		


			// Кнопка для очитски корзины с товарами
			if(isset($_REQUEST['delete'])) {
			unset($_SESSION['snowbord']);
			unset($_SESSION['boots']);
			unset($_SESSION['helmet']);
			unset($_SESSION['glass']);
		}
       
			?>
			<p class="prise">   <?echo $sum ?> рублей</p>
			<form method="GET">
				<input type="submit" name="purchase" value="Купить">
				<input type="submit" name="delete" value="Очистить корзину">
			</form>
		</div>
	</head>
	<div>
		<img class="float"  src="float.jpg">
	</div>
<div class="table">
	<div class="product">
	  <form method="GET">
		<center>
			<h3>Доска для сноуборда</h3>
			<p><a href="#" class = "snowbord"></a></p>
	  	
	  	 <p class="prise">Цена 7 000 рублей </p>
	  	 <input type="submit"  name="snowbord" value="Положить в корзину">
	  	 </center>
	  </form>
	</div>
	<div  class="product">
		<form method="GET">
			<center>
				<h3>Ботинки для сноуборда</h3>
				<p><a href="#" class="boots"></a></p>
			
			<p class="prise">Цена 5 000 рублей</p>
			<input type="submit" name="boots" value="Положить в корзину">
			</center> 
		</form>
	</div>
	<div class="product">
		<form method="GET" >
			<center>
				<h3>Шлем для сноуборда</h3>
				<p><a href="#" class="helmet"></a></p>
				<p class="prise"> 8 000 рублей</p>
				<input type="submit"  name="helmet" value="Положить в корзину">
			</center>
		</form>
	</div>
	<div class="product">
		<form method="GET">
		<center>
			<h3>Очки</h3>
			<p><a href="#" class="glass"></a></p>
			
			<p class="prise"> 3 000 рублей</p>
			<input type="submit" name="glass" value="Положить в корзину">
		</center>
		</form>
		
	</div>
</div>
<footer>
	<div>
		
		<p class="prise">По всем вопросам просим Вас перезвонить по телефону:  +7(800)000 00 00</p>
		<p></p>
	</div>
</footer>	
</body>
</html>