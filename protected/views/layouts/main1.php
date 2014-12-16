<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <!-- Bootstrap -->


    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mystyle.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <!-- <script src="<?php //echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>-->
    <!--[if lt IE 8]>
    <!--<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
    <![endif]-->

    <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <!--  <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="css/mystyle.css" rel="stylesheet">-->
</head>
<body>

    <div class="navbar navbar-static-top">	
		<nav class="navbar-inner">
		    <a class="brand">Название проекта</a>
            <ul class="nav">
			    <li class="divider-vertical"></li>
			    <li class="dropdown"></li>
				<li class="nav"><a href="#" class="dropdawn-toggle" data-toggle="dropdown"><i class="icon-home"></i>Страница<b class="caret"></b></a>
				    <ul class="dropdown-menu">
					    <li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
						<li class="dropdown-submenu">
						    <a href="#">Страница2</a>
						    <ul class="dropdown-menu">
					            <li><a href="#">Страница3</a></li>
						        <li><a href="#">Страница3</a></li>
						        <li><a href="#">Страница3</a></li>
						        <li><a href="#">Страница3</a></li>
						        <li><a href="#">Страница3</a></li>
					        </ul>
						</li>
						<li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
					</ul>
				</li>
				<li class="nav"><a href="#" class="dropdawn-toggle" data-toggle="dropdown">Страница<b class="caret"></b></a>
				    <ul class="dropdown-menu">
					    <li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
						<li><a href="#">Страница2</a></li>
					</ul>
				</li>
				<li class="nav"><a href="#"><i class="icon-home"></i>Страница</a></li>
				<li class="nav"><a href="#">Страница</a></li>
				<li class="nav"><a href="#">Страница</a></li>
			</ul>
            <form class="navbar-form pull-right" >
			    <input type="text" class="span2 search-query" placeholder="Введите запрос" />
				<! <button type="submit" class="btn"><!Поиск</button> 
            </form>

		</nav>

	</div>
    <div class="container" >
	    <header>
		    <h1>Название сайта</h1>
		</header>
	
		<article class="row">
		    <p class="span4">
                <?php //echo $content; ?>

            </p>
			<p class="span4">
			    Привет, мир!
			</p>
			<p class="span4">
			    Привет, мир!
			</p>
		</article>
    </div> 
    <div class="carousel slide" id="myCarousel">
	    <ol class="carousel-indicators">
		    <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
		    <div class="item active">
			    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img/1.jpg" />
				<div class="carousel-caption">
				    <h4>Заголовок слайда</h4>
					<p>Текст описание слайда. Любой текст на ваше усмотрение</p>
				</div>
			</div>
			<div class="item">
			    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img/2.jpg" />
				<div class="carousel-caption">
				    <h4>Заголовок слайда</h4>
					<p>Текст описание слайда. Любой текст на ваше усмотрение</p>
				</div>
			</div>
			<div class="item">
			    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/img/3.jpg" />
				<div class="carousel-caption">
				    <h4>Заголовок слайда</h4>
					<p>Текст описание слайда. Любой текст на ваше усмотрение</p>
				</div>
			</div>
		</div>
		<a class="carousel-control left" data-slide="prev" href="#myCarousel"></a>
		<a class="carousel-control right" data-slide="next" href="#myCarousel"></a>
	</div>  	   
	  


	   
</body>
</html>