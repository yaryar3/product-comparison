<?php

include 'php/databases.php';

$result = mysqli_query($link, "SELECT * FROM `mas1`");

$mas1 = array();
if($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $mas1[] = $row;
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/style4.css">

	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Сравнение страховых компаний</title>
</head>
<body>
	<section class="cd-intro">
		<h1>Сравнение страховых компаний</h1>
	</section> 

	<section class="cd-products-comparison-table">
		
		

		<div class="cd-products-table">
			<div class="features">
				<div class="top-info"></div>
				<ul class="cd-features-list">
				<li class="backroundcolor"> <a href="#" onclick="return false" id="show0">Общая информация</a></li>
							<li id="name0"></li>

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show">Показатели на 31.12.2019</a></li>
							<li id="name">активы 2019</li>
							<li id="name">капитал 2019</li>		
							<li id="name">чистая прибыль 2019</li>
							<li id="name">уставный капитал</li>		
							<li id="name">рейтинг эксперт PA</li>	
							<li id="name">рейтинг S&P</li>	

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show1">Общие показатели 2020</a></li>
							<li id="name1">место 2020</li>
							<li id="name1">доля рынка</li>		
							<li id="name1">сборы всего</li>
							<li id="name1">выплаты всего</li>		
							<li id="name1">коэффициент выплат</li>	
							<li id="name1">кол-во договоров</li>	
							<li id="name1">% отказов</li>	

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show2">Страховой портфель</a></li>
							<li id="name2">ОСАГО</li>
							<li id="name2">КАСКО</li>		
							<li id="name2">имущество</li>
							<li id="name2">ответственность</li>		
							<li id="name2">личное, вкл. жизнь</li>	

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show3">Страхование Юр. лиц</a></li>
							<li id="name3">доля ЮЛ</li>
							<li id="name3">место в РФ</li>		
							<li id="name3">доля рынка</li>
							<li id="name3">премии ЮЛ</li>		
							<li id="name3">выплаты ЮЛ</li>

							<li id="name3"> <strong>места по видам:</strong> </li>

							<li id="name3">ОСАГО ЮЛ</li>
							<li id="name3">КАСКО ЮЛ</li>		
							<li id="name3">ДМС ЮЛ</li>
							<li id="name3">НС ЮЛ</li>		
							<li id="name3">имущество ЮЛ</li>
							<li id="name3">ответственность ЮЛ</li>
							<li id="name3">ОСОПО</li>
							<li id="name3">ОСГОП</li>
							<li id="name3">Грузы</li>

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show4">Страхование физ. лиц</a></li>
							<li id="name4">доля ФЛ 2020</li>
							<li id="name4">место в РФ</li>		
							<li id="name4">доля рынка</li>
							<li id="name4">премии ФЛ</li>		
							<li id="name4">выплаты ФЛ</li>

							<li id="name4"> <strong>место:</strong></li>

							<li id="name4">ОСАГО ФЛ</li>
							<li id="name4">КАСКО ФЛ</li>
							<li id="name4">ИФЛ</li>

				<li class="backroundcolor"> <a href="#" onclick="return false" id="show5">Сеть продаж</a></li>
							<li id="name5">Москва, МО</li>
							<li id="name5">СПб, ЛО</li>		
							<li id="name5">регионы</li>
							<li id="name5">регионы присутствия</li>		
							<li id="name5">агенты</li>

							
							
						
				
					
				</ul>
				
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">					  <!--first column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID"></label>
                
                    <select id="customID">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs1"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b1">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->      <!--first column СК-->



					<li class="product">		<!--second column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID2"></label>
                
                    <select id="customID2">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs2"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b2">

										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
											
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--second column СК-->


					<li class="product">		<!--third column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID3"></label>
                
                    <select id="customID3">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs3"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b3">

										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
											
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--third column СК-->

					<li class="product">		<!--four column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID4"></label>
                
                    <select id="customID4">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs4"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b4">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--four column СК-->

					<li class="product">		<!--five column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID5"></label>
                
                    <select id="customID5">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs5"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b5">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
										
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--five column СК-->

					<li class="product">		<!--six column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID6"></label>
                
                    <select id="customID6">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
						
								<div class="blocs6"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b6">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
										
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--six column СК-->

					<li class="product">		<!--seven column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID7"></label>
                
                    <select id="customID7">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
									
								<div class="blocs7"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b7">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
										
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--seven column СК-->

					<li class="product">		<!--eight column СК-->
						<div class="top-info">
							
                <form>
                    <label for="customID8"></label>
                
                    <select id="customID8">
                                    <option>Выбор страховой компании</option>
                                <?php foreach ($mas1 as $choose):?>
                                    <option><?php echo $choose['COL 3']; ?></option>
                                <?php 
                                    endforeach;
                                ?>
                    </select>
                </form>
				
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
									
								<div class="blocs8"> 
								<?php foreach ($mas1 as $overall):?>
										<div class="b8">
											
										<li class="backroundcolor"></li>
										<li id="name0"><?php echo $overall['COL 3']; ?><br>
										<?php echo $overall['COL 4']; ?><br>
										<strong>год основания: </strong> <?php echo $overall['COL 5']; ?><br>
										<strong>ИНН: </strong> <?php echo $overall['COL 6']; ?><br>
										<?php echo $overall['COL 7']; ?>
										<?php echo $overall['COL 8']; ?><br>
										<?php echo $overall['COL 9']; ?> c (<?php echo $overall['COL 10']; ?>)<br>
										<strong>история переименований: </strong> <?php echo $overall['COL 11']; ?></li>
										
										<li class="backroundcolor"></li>
										<li id="name"><?php echo $overall['COL 12']; ?></li>
										<li id="name"><?php echo $overall['COL 13']; ?></li>
										<li id="name"><?php echo $overall['COL 14']; ?></li>
										<li id="name"><?php echo $overall['COL 15']; ?></li>
										<li id="name"><?php echo $overall['COL 16']; ?></li>
										<li id="name"><?php echo $overall['COL 17']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name1"><?php echo $overall['COL 18']; ?></li>
										<li id="name1"><?php echo $overall['COL 19']; ?></li>
										<li id="name1"><?php echo $overall['COL 20']; ?></li>
										<li id="name1"><?php echo $overall['COL 21']; ?></li>
										<li id="name1"><?php echo $overall['COL 22']; ?></li>
										<li id="name1"><?php echo $overall['COL 23']; ?></li>
										<li id="name1"><?php echo $overall['COL 24']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name2"><?php echo $overall['COL 25']; ?></li>
										<li id="name2"><?php echo $overall['COL 26']; ?></li>
										<li id="name2"><?php echo $overall['COL 27']; ?></li>
										<li id="name2"><?php echo $overall['COL 28']; ?></li>
										<li id="name2"><?php echo $overall['COL 29']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 30']; ?></li>
										<li id="name3"><?php echo $overall['COL 31']; ?></li>
										<li id="name3"><?php echo $overall['COL 32']; ?></li>
										<li id="name3"><?php echo $overall['COL 33']; ?></li>
										<li id="name3"><?php echo $overall['COL 34']; ?></li>
										<li id="name3" class="backroundcolor"></li>
										<li id="name3"><?php echo $overall['COL 35']; ?></li>
										<li id="name3"><?php echo $overall['COL 36']; ?></li>
										<li id="name3"><?php echo $overall['COL 37']; ?></li>
										<li id="name3"><?php echo $overall['COL 38']; ?></li>
										<li id="name3"><?php echo $overall['COL 39']; ?></li>
										<li id="name3"><?php echo $overall['COL 40']; ?></li>
										<li id="name3"><?php echo $overall['COL 41']; ?></li>
										<li id="name3"><?php echo $overall['COL 42']; ?></li>
										<li id="name3"><?php echo $overall['COL 43']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 44']; ?></li>
										<li id="name4"><?php echo $overall['COL 45']; ?></li>
										<li id="name4"><?php echo $overall['COL 46']; ?></li>
										<li id="name4"><?php echo $overall['COL 47']; ?></li>
										<li id="name4"><?php echo $overall['COL 48']; ?></li>
										<li id="name4" class="backroundcolor"></li>
										<li id="name4"><?php echo $overall['COL 49']; ?></li>
										<li id="name4"><?php echo $overall['COL 50']; ?></li>
										<li id="name4"><?php echo $overall['COL 51']; ?></li>

										<li class="backroundcolor"></li>
										<li id="name5"><?php echo $overall['COL 52']; ?></li>
										<li id="name5"><?php echo $overall['COL 53']; ?></li>
										<li id="name5"><?php echo $overall['COL 54']; ?></li>
										<li id="name5"><?php echo $overall['COL 55']; ?></li>
										<li id="name5"><?php echo $overall['COL 56']; ?></li>
										
									


										
										
										
										</div>
									<?php 
										endforeach;
									?>
								</div>

							
						</ul>
						
					</li> <!-- .product -->			<!--eight column СК-->


					
					

					

					

					
					
					

					
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
	<script src="js/2.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/1.js"></script>

<script src="js/jquery-2.1.4.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>
</html>