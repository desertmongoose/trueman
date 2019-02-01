<!DOCTYPE html>
<html>
<head>
	<title>франшиза Trueman</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.fiveth.css">
<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/main.css">	



<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">  
function showHide(element_id) {
	//Если элемент с id-шником element_id существует
	if (document.getElementById(element_id)) {
		//Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
		var obj = document.getElementById(element_id);
		//Если css-свойство display не block, то: 
		if (obj.style.display != "block") {
			obj.style.display = "block"; //Показываем элемент
		} else obj.style.display = "none"; //Скрываем элемент
	}
	//Если элемент с id-шником element_id не найден, то выводим сообщение
	else alert("Элемент с id: " + element_id + " не найден!");
}  
function showelem(element_id) {
	//Если элемент с id-шником element_id существует
	if (document.getElementById(element_id)) {
		//Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
		var obj = document.getElementById(element_id);		
		obj.style.display = "block"; //Показываем элемент		
	}
	//Если элемент с id-шником element_id не найден, то выводим сообщение
	else alert("Элемент с id: " + element_id + " не найден!");
}
function hideelem(element_id)  {
	//Если элемент с id-шником element_id существует
	if (document.getElementById(element_id)) {
		//Записываем ссылку на&nbsp;элемент в&nbsp;переменную obj
		var obj = document.getElementById(element_id);		
		obj.style.display = "none"; //Показываем элемент		
	}
	//Если элемент с id-шником element_id не найден, то выводим сообщение
	else alert("Элемент с id: " + element_id + " не найден!");
}

function writeTextByJS(id, text, speed){

var ele = document.getElementById(id),
    txt = text.join("").split("");

var interval = setInterval(function(){

	if(!txt[0]){

		return clearInterval(interval);
	};

	ele.innerHTML += txt.shift();
}, speed != undefined ? speed : 150);

return false;
};
</script>
</head>
<body>
	<div class="wrapper">
		
		<div class="container-fluid" id="con1">
			<!--First desktop begin-->
			<div class="container" id="desk1">
				<div class="desk1_border"></div><!--border-->
				<div class="row desk1_top">
					<div class="col-xs-3 col-sm-2 logo">						
						<img src="img/png/desk1/logoWhite.png" alt="" class="img-responsive">						
					</div>
					<div class="col-xs-6 col-sm-4 logozag">
						Франшиза<br>британского<br>барбершопа
					</div>
					<div class="hidden-xs col-sm-5 toptel">
						<div>
							<a href="tel:+375291660250">+375 (29) 166-02-50</a>
						</div>
						<div class="desk1_top__feed">
							<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">Заказать звонок</a>
						</div>
					</div>
					<div class="col-xs-3 col-sm-1 hamb">
						<a href="javascript:void(0);" onclick="showHide('menu');">
							<img src="img/png/desk1/hamb.png" alt="">
						</a>							
					</div>
					<div class="col-xs-10 col-sm-5" id="menu">
						<div class="row">
							<div class="col-xs-1-5">
								<img src="img/png/desk1/logoWhite.png" alt="" class="logomenu">
							</div>
							<div class="col-xs-3-5 zagmenu">
								<span>
									Trueman
								</span>
							</div>
							<div class="col-xs-1-5 hambmenu">
								<a href="javascript:void(0);" onclick="showHide('menu');">
									<img src="img/png/desk1/cl.png" alt="" style="border: 1px solid #b1b0b0;border-radius: 50%;">
								</a>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<ul>
										<li>
											<a href="#desk2">Франшизы барбершопов</a>
										</li>
										<li>
											<a href="#podhodancor">Подход <span class="upper">Trueman</span></a>
										</li>
										<li>
											<a href="#desk5">C <span class="upper">Trueman</span> вы получаете</a>
										</li>
										<li>
											<a href="#formatsFR">Форматы франшизы</a>
										</li>
										<li>
											<a href="#desk16line">Как открыть барбершоп <span class="upper">Trueman</span></a>
										</li>
										<li>
											<a href="#desk19">Создатели <span class="upper">Trueman</span></a>
										</li>
										<li>
											<a href="#dobropozhancor">Добро пожаловать в <span class="upper">Trueman</span></a>
										</li>
										<li class="hidden-sm hidden-md hidden-lg">
											<a href="tel:+375291660250">+375 (29) 166-02-50</a>
										</li>
										<li class="hidden-sm hidden-md hidden-lg"  id="mobfeed">
											<a  href="javascript:void(0);" data-toggle="modal" data-target="#myModal1">Заказать звонок</a>
										</li>
									</ul>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-7">
						<h2>
							Как выбрать <br>действительно надёжную <br>франшизу барбершопа?
						</h2>
					</div>
					<div class="hidden-xs col-sm-4"></div>
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-8">
						<ul>
							<li>
								С открытым подходом в бизнесе
							</li>
							<li>
								Для работы в реалиях Беларуси
							</li>
							<li>
								С бизнес-моделью на все времена
							</li>
						</ul>
					</div>
					<div class="hidden-xs col-sm-3"></div>
					<div class="col-xs-12 desk1_arrow">
						<a href="#desk2">
							<img src="img/png/desk1/arrowBottom.png" alt="">
						</a>						
					</div>
				</div>
			</div>
			<!--First desktop end-->

			<!--Second desktop begin-->
			<div class="container" id="desk2">
				<div class="row">
					<div class="col-xs-12">
						<h2>
							Что предлагают франшизы барбершопов сегодня:
						</h2>
					</div>
					<div class="hidden-xs col-sm-2"></div>
					<div class="col-xs-12 col-sm-8">
						<div class="row">
							<div class="col-xs-12 col-sm-4 cap1">
								<div class="capture">
									<img src="img/png/desk2/pic2-1.png" alt="">	
									<div class="capItem">
										Откройте за&nbsp;1&nbsp;месяц
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 cap2">
								<div class="capture">
									<img src="img/png/desk2/pic2-2.png" alt="">
									<div class="capItem">
										Зарабатывайте от&nbsp;3000$&nbsp;в месяц
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 cap3">
								<div class="capture">
									<img src="img/png/desk2/pic2-3.png" alt="">
									<div class="capItem">
										Окупите за&nbsp;7&nbsp;месяцев
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hidden-xs col-sm-2"></div>
				</div>
				<div class="row">
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<div class="ramka">
							<h2>
								Все говорят одно и то же
							</h2>
						</div>						
					</div>
					<div class="col-xs-1 col-sm-2"></div>
				</div>
			</div>
			<!--Second desktop end-->



		</div>
		<div class="container-fluid" id="desk3">
			<div class="container">
				<div class="row">
					<div id="desk3top1">
						<div class="hidden-xs col-sm-2"></div>
						<div class="col-xs-12 col-sm-8">
							<img src="img/png/desk2/people.png" class="img-responsive"><!--фотка с табличками абсолютно позиционируется-->
							<h2>
								Разве барбершоп &mdash; это только про деньги?
							</h2>
						</div>
						<div class="hidden-xs col-sm-2"></div>
					</div>					
				</div>
			</div>
		</div>


		<!--left arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk3line">
			<img src="img/png/desk3/lineleft.png" alt="">
		</div>
		<!--left arrow end-->
		
		<!--left arrow begin-->
		<div class="container-fluid lineleft hidden-lg" id="desk3line">
			<div class="row">
				<div class="col-xs-9">
					<img src="img/png/desk3/lineleft.png" alt="">
				</div>
				<div class="col-xs-3"></div>
			</div>			
		</div>
		<!--left arrow end-->

		<div class="clearfix"></div>

		

		<div class="container-fluid" id="desk4">
			<div class="container">
				<div class="row">
					<div id="desk4top1">
						<div class="hidden-xs col-sm-2"></div>
						<div class="col-xs-12 col-sm-8">
							<div>
								<img src="img/png/desk3/money.png" class="img-responsive"><!--Фотка с деньгами-->
							</div>
							
						</div>
						<div class="hidden-xs col-sm-2"></div>
					</div>
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-11 cav">
						<div>
							&mdash;&nbsp;А разве нет?
						</div>
						<img src="img/png/desk3/cav15proc.png">
					</div>					
				</div>
				<div class="row" id="podhodancor">
					<div class="hidden-xs col-sm-2"></div>
					<div class="col-xs-12 col-sm-8">
						<div class="barforus">
							Барбершоп для нас&nbsp;&mdash;&nbsp;это прежде всего ценности <br>и особый подход в бизнесе
						</div>
					</div>
					<div class="hidden-xs col-sm-2"></div>
				</div>
				<div class="row">
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<div class="ramka">
							<h2>
								Давайте расскажем о Trueman
							</h2>							
						</div>
						<p>
							True&nbsp;(англ.)&nbsp;&mdash;&nbsp;настоящий, истинный, преданный
						</p>
					</div>
					<div class="col-xs-1 col-sm-2"></div>										
				</div>
				<!--о трумэн таблица в рамке, пункты-->
				<div class="row" id="podhod">
					<div class="col-sm-12" id="maxipodhod">
						<div id="podhodtbl">
							<table> 
								<tr>
									<td colspan="3" class="zagtable">
										Мы за честный и открытый подход
									</td>
								</tr>							
								<tr class="podhod_points">
									<td>
										<span>&bull;</span>&nbsp;<span>к партнёрам</span>
									</td>
									<td>
										<span>&bull;</span>&nbsp;<span>к гостям</span>
									</td>
									<td>
										<span>&bull;</span>&nbsp;<span>к сотрудникам</span>
									</td>
								</tr>
							</table>
						</div>							
					</div>
					<div class="col-xs-12" id="minipodh">
						<div id="podhodtbl">
							<table> 
								<tr>
									<td class="zagtable">
										Мы за честный и&nbsp;открытый подход
									</td>
								</tr>							
								<tr class="podhod_points">
									<td>
										<span>&bull;</span>&nbsp;<span>к партнёрам</span>
									</td>
								</tr>
								<tr class="podhod_points">
									<td>
										<span>&bull;</span>&nbsp;<span>к гостям</span>
									</td>
								</tr>
								<tr class="podhod_points">
									<td>
										<span>&bull;</span>&nbsp;<span>к сотрудникам</span>
									</td>
								</tr>
							</table>
						</div>	
					</div>
					<div class="col-xs-12">
						<h3>
							И&nbsp;верим, что&nbsp;построить устойчивый бизнес на&nbsp;все времена <br>возможно только с&nbsp;истинными ценностями
						</h3>						
					</div>
				</div>
				<div class="row" id="cen">
					<div class="hidden-xs col-sm-1 col-md-3"></div>
					<div class="col-xs-12 col-sm-10 col-md-6">
						<div class="row">
							<div class="col-xs-12 col-sm-4 cen_item" id="cen_item_one">
								<img src="img/png/desk4/pic4-1.png" class="img-responsive">
							<div>
								Уважением
							</div>
							</div>
							<div class="col-xs-12 col-sm-4 cen_item">
								<img src="img/png/desk4/pic4-2.png" class="img-responsive">
							<div>
								Порядочностью
							</div>
							</div>
							<div class="col-xs-12 col-sm-4 cen_item">
								<img src="img/png/desk4/pic4-3.png" class="img-responsive">
							<div>
								Лидерством
							</div>
							</div>
						</div>
					</div>						
					<div class="hidden-xs col-sm-1 col-md-3"></div>
				</div>
				<div class="row bluebut">
					<div class="hidden-xs col-sm-3"></div>
					<div class="col-xs-12 col-sm-6">
						<a  href="javascript:void(0);" data-toggle="modal" data-target="#myModal4" class="upper">
							связаться с собственниками
						</a>
						<div class="hidden-xs col-sm-3"></div>
					</div>
				</div>
				<div class="row" id="interest">
					<div class="hidden-xs col-sm-1"></div>

					<div class="col-xs-12 col-sm-11 cav2">
						<div>
							&mdash;&nbsp;Интересно.<br>
							А чем ещё вы выделяетесь?
						</div>
						<img src="img/png/desk3/cav15proc.png">
					</div>								
				</div>
			</div>
		</div>
		<div class="container-fluid" id="desk5">
			<div class="container">
				<div class="row">

					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<div class="ramka">
							<h2>
								С Trueman вы получаете
							</h2>
						</div>						
					</div>
					<div class="col-xs-1 col-sm-2"></div>

					<div class="col-xs-12 desk5_dostup">
						<h2>
							<span style="color:#7f7f7f;">&bull;</span>
							Доступ к&nbsp;элите вашего города
							<span style="color:#7f7f7f;">&bull;</span>
						</h2>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="hidden-xs col-sm-1 col-md-2"></div>
					<div class="col-sm-10 col-md-8">
						<div class="flexcon">
							<div class="flexitem">
								<img src="img/png/desk5/pic5-1.png">
								<p>Бизнесмены</p>
							</div>
							<div class="flexitem">
								<img src="img/png/desk5/pic5-2.png">
								<p>Руководители</p>
							</div>
							<div class="flexitem">
								<img src="img/png/desk5/pic5-3.png">
								<p>ИТ-специалисты</p>
							</div>
							<div class="flexitem">
								<img src="img/png/desk5/pic5-4.png">
								<p>Спортсмены</p>
							</div>
							<div class="flexitem">
								<img src="img/png/desk5/pic5-5.png">
								<p>Творческие люди</p>
							</div>							
						</div>
					</div>
					<div class="hidden-xs col-sm-1 col-md-2"></div>
				</div>
			</div>
		</div>


		<div class="clearfix"></div>

		<!--right arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk5line">
			<img src="img/png/desk5/lineright.png" alt="">
		</div>
		<!--right arrow end-->
		
		<!--right arrow begin-->
		<div class="container-fluid lineright hidden-lg" id="desk5line">
			<div class="row">
				<div class="col-xs-3"></div>
				<div class="col-xs-9">
					<img src="img/png/desk5/lineright.png" alt="">
				</div>
				
			</div>			
		</div>
		<!--right arrow end-->





		<div class="container-fluid" id="desk6">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 desk5_dostup">
						<h2>
							<span style="color:#7f7f7f;">&bull;</span>
							Авторский интерьер в&nbsp;британском стиле
							<span style="color:#7f7f7f;">&bull;</span>
						</h2>					
						<div class="everydetail">
							каждая деталь продумана до мелочей
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

        <div class="container-fluid hidden-xs" id="desk7">
            <div class="split-slideshow">
                <div class="split-slideshow-dots"></div>
                <div class="slideshow">
                    <div class="slider">
                        <div class="item">
                            <img src="http://eliteweb.by/trueman/img/png/desk5/slide5-1.jpg" />
                        </div>
                        <div class="item">
                            <img src="http://eliteweb.by/trueman/img/png/desk5/slide5-2.jpg" />
                        </div>
                        <div class="item">
                            <img src="http://eliteweb.by/trueman/img/png/desk5/slide5-3.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="clearfix"></div>

		<div class="container-fluid" id="desk8">
			<div class="container col-xs-12 hidden-sm hidden-md hidden-lg">
				<!--owl-carousel-->
				<div class="owl-carousel owl-theme" id="carouselOne">
					<div>
						<img src="img/png/desk5/slide5-2-1.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk5/slide5-2-2.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk5/slide5-2-3.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk5/slide5-2-4.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk5/slide5-2-5.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk5/slide5-2-6.jpg" class="img-responsive"/>
					</div>
				</div>
				<!--owl-carousel-->
			</div>	


			<div class="container bluebut">				
				<div class="row bluebut">
					<div class="hidden-xs col-sm-3"></div>
					<div class="col-xs-12 col-sm-6">
						<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal4" class="upper">
							Хочу такой же барбершоп
						</a>
						<div class="hidden-xs col-sm-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<!--slider here-->
		</div>
		




		<!--left arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk8line">
			<img src="img/png/desk3/lineleft.png" alt="">
		</div>
		<!--left arrow end-->
		
		<!--left arrow begin-->
		<div class="container-fluid lineleft hidden-lg" id="desk8line">
			<div class="row">
				<div class="col-xs-9">
					<img src="img/png/desk3/lineleft.png" alt="">
				</div>
				<div class="col-xs-3"></div>
			</div>			
		</div>
		<!--left arrow end-->

		<div class="clearfix"></div>




		<div class="clearfix"></div>
		<div class="container-fluid" id="desk9">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 desk5_dostup">
						<h2>
							<span style="color:#7f7f7f;">&bull;</span>
							Доверие и&nbsp;лояльность гостей
							<span style="color:#7f7f7f;">&bull;</span>
						</h2>					
						<div class="ocenka">
							Cредняя оценка по отзывам Google&nbsp;&mdash;&nbsp;<img src="img/png/desk6/stars.png">&nbsp;(5,0)
						</div>
					</div>
				</div>
			</div>
		</div>







		<!--slider carousel3d begin-->
		<div class="container-fluid" id="desk10">
			<div class="container">
				<div id="carousel3d"  >
					<carousel-3d :perspective="0" :space="450" :display="3" :controls-visible="true" :controls-prev-html="'❬'" :controls-next-html="'❭'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="false" :autoplay-timeout="5000">
						<slide :index="0">
							<span class="title"></span>
							<img src="img/png/desk6/comment1-2.png" class="img-responsive">
						</slide>
						<slide :index="1">
							<span class="title"></span>
							<img src="img/png/desk6/comment2-2.png" class="img-responsive">
						</slide>
						<slide :index="2">
							<span class="title"></span>
							<img src="img/png/desk6/comment3-2.png" class="img-responsive">
						</slide>
						<slide :index="3">
							<span class="title"></span>
							<img src="img/png/desk6/comment4-2.png" class="img-responsive">
						</slide>
						<slide :index="4">
							<span class="title"></span>
							<img src="img/png/desk6/comment5-2.png" class="img-responsive">
						</slide>
						<slide :index="5">
							<span class="title"></span>
							<img src="img/png/desk6/comment6-2.png" class="img-responsive">
						</slide>
					</carousel-3d>
				</div>
			</div>
		</div>
		<!--slider carousel3d end-->




		<div class="clearfix"></div>

		<!--right arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk10line">
			<img src="img/png/desk5/lineright.png" alt="">
		</div>
		<!--right arrow end-->
		
		<!--right arrow begin-->
		<div class="container-fluid lineright hidden-lg" id="desk10line">
			<div class="row">
				<div class="col-xs-3"></div>
				<div class="col-xs-9">
					<img src="img/png/desk5/lineright.png" alt="">
				</div>
				
			</div>			
		</div>
		<!--right arrow end-->



		<!--slider split-slick begin-->
		<div class="container-fluid" id="desk101">
			<div class="hidden-xs">
                <div class="split-slideshow">
                    <div class="split-slideshow-dots"></div>
                    <div class="slideshow">
                        <div class="slider">
                            <div class="item">
                                <img src="img/png/desk6/slide6-1.png" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="img/png/desk6/slide6-2.png" class="img-responsive" />
                            </div>
                            <div class="item">
                                <img src="img/png/desk6/slide6-3.png" class="img-responsive" />
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="container col-xs-12 hidden-sm hidden-md hidden-lg">
				<!--owl-carousel-->
				<div class="owl-carousel owl-theme" id="carouselThree">
					<div>
						<img src="img/png/desk6/slide6-1.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk6/slide6-2.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk6/slide6-3.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk6/slide6-4.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk6/slide6-5.jpg" class="img-responsive"/>
					</div>
					<div>
						<img src="img/png/desk6/slide6-6.jpg" class="img-responsive"/>
					</div>
				</div>
				<!--owl-carousel-->
			</div>		
		</div>
		<!--slider split-slick end-->


		<div class="container-fluid" id="desk11">
			<div class="container">
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-xs-12 col-sm-8 desk5_dostup">
						<h2>
							<span style="color:#7f7f7f;">&bull;</span>
							Сильный маркетинг
							<span style="color:#7f7f7f;">&bull;</span>
						</h2>	
					</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<div class="container">				
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-sm-push-3">
						<div class="capture">
							<div class="capItem">Сайт и мобильное приложение</div>
							<img src="img/png/desk7/site-mob-pr.png" alt="" class="img-responsive">							
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-sm-pull-6">
						<div class="capture">
							<div class="capItem">Социальные сети</div>
							<img src="img/png/desk7/social.png" alt="" class="socialwevbs img-responsive">							
						</div>
					</div>
					
					<div class="col-xs-6 col-sm-3">
						<div class="capture">
							<div class="capItem">Программа лояльности</div>
							<img src="img/png/desk7/programma-loyalnosti.png" alt="" class="img-responsive">							
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-xs-12">
						<div class="capture contrekl">
							<div class="capItem">
								Контекстная, таргетированная реклама и СЕО
							</div>
							<img src="img/png/desk7/kont-rekl-seo.png" class="img-responsive"> <!--скрин из Гугл-->
						</div>
							
					</div>
				</div>
			</div>
		</div>


		<div class="container-fluid hidden-xs" id="desk12">
			<div class="container">
				<div class="row row1">
					<div class="hidden-xs col-sm-2"></div>
					<div class="col-xs-7 col-sm-5 desk5_dostup" id="podborpers">					
						<h2 style="color:#fff;" class="taright">
							<span style="color:#fff;">&bull;</span>
							Поиск, отбор и&nbsp;обучение персонала
							<span style="color:#fff;">&bull;</span>
						</h2>
					</div>
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-5 col-sm-3 classimg">
						<img src="img/png/desk8/personal3.png">
					</div>
					<div class="hidden-xs col-xs-1"></div>
				</div>
				<div class="row row2">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-10 desk5_dostup classimg whitefon">
						<table>
							<tr>
								<td style="width: 40%;">
									<img src="img/png/desk8/firm-style2.png">
								</td>
								<td style="width: 60%;">
									<h2 class="taleft" id="h2two">
										<span style="color:#000;">&bull;</span>
										Права на&nbsp;бренд <br>и&nbsp;фирменный стиль
										<span style="color:#000;">&bull;</span>
									</h2>
								</td>
							</tr>
						</table>
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
				<div class="row row3">
					<div class="hidden-xs col-sm-2"></div>
					<div class="col-xs-7 col-sm-5 desk5_dostup">
						<h2 style="color:#fff;" class="taright">
							<span style="color:#fff;">&bull;</span>
							Стандарты ведения бизнеса
							<span style="color:#fff;">&bull;</span>
						</h2>
					</div>
					<div class="col-xs-5 classimg">
						<img src="img/png/desk8/vedenie-biznesa.png">
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
				<div class="row row4">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-10 desk5_dostup classimg whitefon">
						<table>
							<tr>
								<td style="width: 40%;">
									<img src="img/png/desk8/biznes-plan.png">
								</td>
								<td style="width: 60%;">
									<h2 class="taleft" id="h2three">
										<span style="color:#000;">&bull;</span>
										Бизнес-план
										<span style="color:#000;">&bull;</span>
									</h2>
								</td>
							</tr>
						</table>
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
			</div>
		</div>


		<div class="container-fluid hidden-sm hidden-md hidden-lg" id="desk12min">
			<div class="container">
				<div class="row5 desk5_dostup">
					<img src="img/png/desk8/personal3.png" class="img-responsive">
					<h2 style="color:#fff;" class="tacenter">
						<span style="color:#fff;">&bull;</span>
						Поиск, отбор и&nbsp;обучение персонала
						<span style="color:#fff;">&bull;</span>
					</h2>
				</div>
				<div class="row6 desk5_dostup">
					<img src="img/png/desk8/firm-style2.png" class="img-responsive">
					<h2 style="color:#fff;" class="tacenter">
						<span style="color:#fff;">&bull;</span>
						Права на&nbsp;бренд <br>и&nbsp;фирменный стиль
						<span style="color:#fff;">&bull;</span>
					</h2>
				</div>
				<div class="row7 desk5_dostup">
					<img src="img/png/desk8/vedenie-biznesa.png" class="img-responsive">
					<h2 style="color:#fff;" class="tacenter">
						<span style="color:#fff;">&bull;</span>
						Стандарты ведения бизнеса
						<span style="color:#fff;">&bull;</span>
					</h2>
					
				</div>
				<div class="row8 desk5_dostup">
					<img src="img/png/desk8/biznes-plan.png" class="img-responsive">
					<h2 style="color:#fff;" class="tacenter">
						<span style="color:#fff;">&bull;</span>
						Бизнес-план
						<span style="color:#fff;">&bull;</span>
					</h2>
					
				</div>
			</div>
		</div>



		<div class="container-fluid" id="desk13">
			<div class="container">

				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-11 cav">
						<div>
							&mdash;&nbsp;Круто! А что ещё?
						</div>
					</div>					
				</div>




				
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-10">
						<div class="row">
							<div class="col-xs-6 col-sm-3">
								<div class="capture oneCapture">
									<img src="img/png/desk9/pic9-1.png" alt="">
									<div class="capItem">
										Помощь с&nbsp;поиском помещения
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="capture">
									<img src="img/png/desk9/pic9-2.png" alt="">
									<div class="capItem">
										Готовые решения по&nbsp;юридическим вопросам
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="capture">
									<img src="img/png/desk9/pic9-3.png" alt="">
									<div class="capItem">
										Скидки от&nbsp;поставщиков и&nbsp;партнёров
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-3">
								<div class="capture">
									<img src="img/png/desk9/pic9-4.png" alt="">
									<div class="capItem">
										Онлайн-поддержка
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
			</div>
		</div>



		<div class="clearfix"></div>

		<!--right arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk13line">
			<img src="img/png/desk5/lineright.png" alt="">
		</div>
		<!--right arrow end-->
		
		<!--right arrow begin-->
		<div class="container-fluid lineright hidden-lg" id="desk13line">
			<div class="row">
				<div class="col-xs-3"></div>
				<div class="col-xs-9">
					<img src="img/png/desk5/lineright.png" alt="">
				</div>
				
			</div>			
		</div>
		<!--right arrow end-->


		
		<div class="container-fluid" id="desk14">
			<div class="container bluebut">
				<div class="row">
					<div class="col-xs-12 col-sm-7">
						<h2>
							Получите подробную презентацию <br>франшизы <span>Trueman</span>
						</h2>
						<img src="img/png/desk9/presentation.png" class="img-responsive"><!--book-->
						<img src="img/png/desk9/arrow9.png" class="hidden-sm hidden-md hidden-lg"><!--arrow-->
					</div>
					<div class="col-xs-12 col-sm-4" style="padding-top: 5px;">
						<img src="img/png/desk9/arrow9.png" class="hidden-xs"><!--arrow-->
						<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal2">Получить презентацию</a>
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
			</div>
		</div>




		<div class="clearfix"></div>

		<!--right arrow begin-->
		<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk14line">
			<img src="img/png/desk3/lineleft.png" alt="">
		</div>
		<!--right arrow end-->
		
		<!--right arrow begin-->
		<div class="container-fluid lineright hidden-lg" id="desk14line">
			<div class="row">
				<div class="col-xs-3"></div>
				<div class="col-xs-9">
					<img src="img/png/desk3/lineleft.png" alt="">
				</div>
				
			</div>			
		</div>
		<!--right arrow end-->




		<div class="container-fluid" id="desk15">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 cav">
						<div>
							&mdash;&nbsp;Звучит убедительно.<br>
							Но всё же, какие нужны инвестиции и сколько можно зарабатывать?
						</div>							
					</div>					
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-3"></div>
					<div class="col-xs-12 col-sm-6">
						<div class="ramka" id="formatsFR">
							<h2>
								Форматы франшизы
							</h2>
						</div>							
					</div>
					<div class="hidden-xs col-sm-3"></div>
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-10">
						<table class="hidden-xs">
							<thead>
								<tr>
									<th colspan="2">Показатели</th>
									<th>3 кресла</th>
									<th>5 кресел</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="2">Паушальный взнос</td>
									<td>6&nbsp;300&nbsp;$</td>
									<td>7&nbsp;100&nbsp;$</td>
								</tr>
								<tr>
									<td colspan="2">Инвестиции</td>
									<td>~50&nbsp;тыс.&nbsp;$</td>
									<td>~70&nbsp;тыс.&nbsp;$</td>
								</tr>
								<tr>
									<td colspan="2">Окупаемость</td>
									<td>от&nbsp;28&nbsp;мес.</td>
									<td>от&nbsp;20&nbsp;мес.</td>
								</tr>
								<tr>
									<td colspan="2">ROI</td>
									<td>160%</td>
									<td>280%</td>
								</tr>
								<tr>
									<td colspan="2">Роялти</td>
									<td>150&nbsp;$&nbsp;с&nbsp;1&nbsp;кресла</td>
									<td>150&nbsp;$&nbsp;с&nbsp;1&nbsp;кресла</td>
								</tr>
								<tr>
									<td colspan="2">Прибыль</td>
									<td>1800&nbsp;$/мес.</td>
									<td>3500&nbsp;$/мес.</td>
								</tr>
							</tbody>
						</table>
						<table class="hidden-sm hidden-md hidden-lg minitable">
							<tr>
								<td>3 кресла</td>
								<td>5 кресел</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">Паушальный взнос</td>
							</tr>
							<tr>
								<td>6&nbsp;300&nbsp;$</td>
								<td>7&nbsp;100&nbsp;$</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">Инвестиции</td>
							</tr>
							<tr>
								<td>~50&nbsp;тыс.&nbsp;$</td>
								<td>~70&nbsp;тыс.&nbsp;$</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">Окупаемость</td>
							</tr>
							<tr>
								<td>от&nbsp;28&nbsp;мес.</td>
								<td>от&nbsp;20&nbsp;мес.</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">ROI</td>
							</tr>
							<tr>
								<td>160%</td>
								<td>280%</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">Роялти</td>
							</tr>
							<tr>
								<td>150&nbsp;$&nbsp;с&nbsp;1&nbsp;кресла</td>
								<td>150&nbsp;$&nbsp;с&nbsp;1&nbsp;кресла</td>
							</tr>
							<tr>
								<td colspan="2" class="zag_minitable">Прибыль</td>
							</tr>
							<tr>
								<td>1800&nbsp;$/мес.</td>
								<td>3500&nbsp;$/мес.</td>
							</tr>
						</table>
					</div>
					<div class="hidden-xs col-sm-1"></div>
				</div>
			</div>
		</div>


		<div class="container-fluid" id="desk160">
			<div class="container-fluid" id="desk16">
				<div class="container">
					<div class="row">
						<div class="hidden-xs col-sm-1"></div>
						<div class="col-xs-12 col-sm-10">
							<div class="seeyuo">
								<p>
									Посмотрите, как развивается барбершоп<br>
									по адресу г. Минск, пр. Независимости, 46
								</p>	
								<img src="img/png/desk10/grafik.png" class="img-responsive"> <!--график-->						
							</div>						
						</div>
						<div class="hidden-xs col-sm-1"></div>					
					</div>
					<div class="row zakl_dog">
						<div class="hidden-xs col-sm-4"></div>
						<div class="col-xs-12 col-sm-4 bluebut">
							<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal3">Заключить договор</a>
						</div>
						<div class="hidden-xs col-sm-4"></div>
					</div>
					<div class="clearfix"></div>		
				</div>
			</div>

			<!--right arrow begin-->
			<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk16line">
				<img src="img/png/desk10/white-strelka-right-10.png" alt="">
			</div>
			<!--right arrow end-->
			
			<!--right arrow begin-->
			<div class="container-fluid lineright hidden-lg" id="desk16line">
				<div class="row">
					<div class="col-xs-3"></div>
					<div class="col-xs-9">
						<img src="img/png/desk10/white-strelka-right-10.png" alt="">
					</div>
					
				</div>			
			</div>
			<!--right arrow end-->
		</div>
			

		<div class="container-fluid" id="desk17">
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-xs-1 col-sm-3"></div>
						<div class="col-xs-10 col-sm-6">
							<div class="ramka">
								<h2>
									Как открыть<br>
									ваш барбершоп Trueman
								</h2>
							</div>						
						</div>
						<div class="col-xs-1 col-sm-3"></div>
					</div>
					<div class="row hidden-xs">
						<div class="hidden-xs col-sm-1"></div>
						<div class="col-xs-12 col-sm-10">
							<img src="img/png/desk11/all-etaps.png" class="img-responsive">
						</div>
						<div class="hidden-xs col-sm-1"></div>
					</div>
					<div class="row hidden-sm hidden-md hidden-lg">
						<div class="col-xs-12">
							<table>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-1.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>1. Заявка на презентацию</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-2.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>2. Встреча</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-3.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>3. Поиск помещения</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-4.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>4. Создание дизайн-проекта</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-5.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>5. Ремонт</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-6.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>6. Подбор и обучение персонала</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-7.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>7. Запуск маркетинговой активности, подключение CRM и онлайн-записи</p>
									</td>
								</tr>
								<tr>
									<td>
										<img src="img/png/desk11/pic11-8.png" class="img-responsive">
									</td>
									<td colspan="4">
										<p>8. Финальная подготовка и проведение открытия</p>
									</td>
								</tr>
								<tr>
									<td colspan="5">
										<p style="text-align: center; font-weight: bold;">Добро пожаловать!</p>
									</td>
								</tr>
								<tr>
									<td colspan="5">
										<img src="img/png/desk11/arrow-to-bottom.png" class="img-responsive arrowdobro">
									</td>									
								</tr>
								<tr>
									<td colspan="5">
										<img src="img/png/desk11/logo-black.png" class="img-responsive">
									</td>									
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--left arrow begin-->
			<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md" id="desk17line">
				<img alt="" src="img/png/desk3/lineleft.png">
			</div><!--left arrow end-->
			<!--left arrow begin-->
			<div class="container-fluid lineleft hidden-lg" id="desk17line">
				<div class="row">
					<div class="col-xs-9">
						<img alt="" src="img/png/desk3/lineleft.png">
					</div>
					<div class="col-xs-3"></div>
				</div>
			</div><!--left arrow end-->
			<div class="clearfix"></div>
			<div class="container-fluid" id="whatelse">
				<div class="container">
					<div class="row">
						<div class="hidden-xs col-sm-1"></div>
						<div class="col-xs-12 col-sm-11 cav">
							<div>
								&mdash;&nbsp;А что дальше?
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>


		<div class="container-fluid" id="desk18">
			<div class="container">
				<div class="row">
					<div class="col-xs-1 col-sm-3"></div>
					<div class="col-xs-10 col-sm-6">
						<div class="ramka">
							<h2>А дальше всё только начинается</h2>
						</div>
					</div>
					<div class="col-xs-1 col-sm-3"></div>
					<div class="col-xs-12" id="wehelp">
						<span>Мы будем ежедневно помогать вам по всем вопросам в процессе работы.</span>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="desk18_text">
							<p>
								Мы не продаём франшизу&nbsp;&mdash;&nbsp;мы ищем партнёров для развития сети, с&nbsp;которыми не&nbsp;только приятно вести&nbsp;бизнес, но и&nbsp;посидеть вечером в&nbsp;баре
							</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6" id="desk18_fotoblock">
						<div id="notalone">
							
						</div> 
						<script type="text/javascript">
							
							
							var fn = function(){ 
								document.getElementById('notalone').innerHTML = '';
								writeTextByJS(
									"notalone",
									[
										"Вы не останетесь одни"
									]
								);
								setTimeout(arguments.callee,5000);
							}
							setTimeout( fn,10000 );

							
						</script>
						<img src="img/png/desk12/foto12.png" class="img-responsive">
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row" id="peredtem">
					<div class="col-xs-12" id="wehelp2">
						<span>
							И перед тем, как вы решите запросить счёт на оплату
						</span>
					</div>
				</div>
			</div>
		</div>




		<div class="container-fluid" id="desk19">
			<div class="container">
				<div class="row">					
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<div class="ramka">
							<h2>
								Слово создателям Trueman
							</h2>
						</div>						
					</div>
					<div class="col-xs-1 col-sm-2"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<img src="img/png/desk13/quote13.png" class="cavbot hidden-xs"><!--Абсолютно позиционированная картинка кавычек-->
						<img src="img/png/desk13/yaroslav.png" class="hidden-sm hidden-md hidden-lg fotoInText"><!--фото Ярослава-->
						<p class="underfoto hidden-sm hidden-md hidden-lg">Ярослав Соболев</p>
						<p>
							Мы обошли все барбершопы Минска&hellip;<br>
                            &hellip;и в каждом смотрели, чего нам не хватает<br>
							(а кое-где делали предложения о работе).
						</p>
						<p>
							Иногда мы уходили с ощущением обмана:<br>
							оставил за стрижку головы и бороды 60 рублей, 
							постригли хорошо, но как будто переплатил. 
							Приходишь, а тебе говорят, как в обычной
							парикмахерской: «Здравствуйте, вы записывались?»
							Никакого радушия.<br>
							Тот же чай/кофе предлагали либо только после запроса, 
							либо не предлагали вовсе.
						</p>
						<p>
							Так что сильной стороной мы решили сделать сервис 
							и атмосферу. Постарались создать действительно 
							уютную обстановку, в которую хочется возвращаться. 
							Искренние улыбки, позитивное настроение, 
							бесплатные напитки.
						</p> <!--текст мы обошли все барбершопы...-->
					</div>
					<div class="hidden-xs col-sm-6">
						<img src="img/png/desk13/yaroslav.png" class="img-responsive" id="foto_yaroslav"><!--фото Ярослава-->
						<p class="underfoto" id="dobropozhancor">Ярослав Соболев</p>
					</div>
				</div>
			</div>
		</div>




		<div class="container-fluid" id="desk20">
			<div class="container">
				<div class="row">					
					<div class="col-xs-1 col-sm-2"></div>
					<div class="col-xs-10 col-sm-8">
						<div class="ramka">
							<h2>
								Добро пожаловать в Trueman!
							</h2>
						</div>						
					</div>
					<div class="col-xs-1 col-sm-2"></div>
				</div>
				<div class="row">
					<div class="hidden-xs col-sm-1"></div>
					<div class="col-xs-12 col-sm-10 col-md-5">
						<div class="feedback">
							<div class="feedinside">
								<p>
									Просто введите свои данные в&nbsp;форму,
									запросите счёт на&nbsp;оплату франшизы 
									и&nbsp;запишитесь на&nbsp;встречу 
									с&nbsp;основателями
								</p>
								<!--Форма обратного звонка на последнем экране-->
								<form action="presentation/index.php" method="POST">
									<input type="text" name="name" placeholder="Ваше имя" required>
									<input type="email" name="email" placeholder="Ваш email" required>
									<input type="text" name="phone" placeholder="Ваш номер телефона" id="phone1" required>
									<input type="text" name="city" placeholder="Ваш город" required>
									<button class="bluebut">Записаться</button>
								</form>
							</div>
						</div>						
					</div>
					<div class="hidden-xs col-sm-1 col-md-6"></div>
				</div>
			</div>
			<div class="clearfix"></div>

			<!--right arrow begin-->
			<div class="container-fluid lineleft hidden-xs hidden-sm hidden-md"  id="desk20line">
				<img src="img/png/desk10/white-strelka-right-10.png" alt="">
			</div>
			<!--right arrow end-->
			
			<!--right arrow begin-->
			<div class="container-fluid lineright hidden-lg" id="desk20line">
				<div class="row">
					<div class="col-xs-3"></div>
					<div class="col-xs-9">
						<img src="img/png/desk10/white-strelka-right-10.png" alt="">
					</div>
					
				</div>			
			</div>
			<!--right arrow end-->
			</div>




	</div>

<!-- Modals begin -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#10181f;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-header feedinside">
				<p>
					Укажите свои данные
					и&nbsp;мы перезвоним
					в&nbsp;удобное для вас время
				</p>
				
			</div>
			<div class="modal-body feedinside">
				<form method="POST" action="javascript:void(null);" id="formx" onsubmit="call()">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control" id="phone" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control inp" id="time" name="time" placeholder="Промежуток времени для звонка" required>
					</div>
					<button type="submit" class="bluebut" data-target="#myModal5">Заказать звонок</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#10181f;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-header feedinside">
				<p>
					Введите свои данные в&nbsp;форму
					и&nbsp;получите доступ 
					к&nbsp;презентации франшизы
				</p>
				
			</div>
			<div class="modal-body feedinside">
				<form method="POST" action="presentation/index.php">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control" id="phone2" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Ваш email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" name="city" placeholder="Ваш город" required>
					</div>
					<button type="submit" class="bluebut">Получить презентацию</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#10181f;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-header feedinside">
				<p>
					Введите свои данные в&nbsp;форму
					и&nbsp;получите доступ к&nbsp;презентации
				</p>
				
			</div>
			<div class="modal-body feedinside">
				<form method="POST" action="presentation/index.php">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control" id="phone3" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Ваш email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" name="city" placeholder="Ваш город" required>
					</div>
					<button type="submit" class="bluebut">Заключить договор</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#10181f;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			<div class="modal-header feedinside">
				<p>
					Введите свои данные в&nbsp;форму 
					и&nbsp;узнайте, как&nbsp;открыть барбершоп
					TRUEMAN в&nbsp;вашем городе
				</p>
				
			</div>
			<div class="modal-body feedinside">
				<form method="POST" action="presentation/index.php">
					<div class="form-group">
						<input type="text" name="name" class="form-control" id="name" placeholder="Ваше имя" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control" id="phone4" placeholder="Номер телефона" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Ваш email" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="city" name="city" placeholder="Ваш город" required>
					</div>
					<button type="submit" class="bluebut">Организовать встречу</button>
				</form>
			</div>
		</div>
	</div>
</div>
<button data-toggle="modal" data-target="#myModal5" id="showModal5" style="display: none;"></button>
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="color:#10181f;">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-header feedinside">
				<p>
					Мы получили вашу заявку 
					и перезвоним в указанное 
					вами время.
				</p>
				<p>
					А пока ждёте звонка — 
					запишитесь на стрижку 
					в наш барбершоп
				</p>
				
			</div>
			<div class="modal-body feedinside bluebut">				
				<a href="https://trueman.by/" class="bluebut" target="_blank" style="margin: 0 auto;font-size: 24px;height: auto;padding: 15px;">Записаться</a>
			</div>
		</div>
	</div>
</div>
<!-- Modals end --> 
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>

<script src="js/index.js"></script>
<script>
$(function(){
  $('a[href^="#"]').on('click', function(event) {
    // отменяем стандартное действие
    event.preventDefault();
    
    var sc = $(this).attr("href"),
        dn = $(sc).offset().top;
    /*
    * sc - в переменную заносим информацию о том, к какому блоку надо перейти
    * dn - определяем положение блока на странице
    */
    
    $('html, body').animate({scrollTop: dn}, 1000);
    
    /*
    * 1000 скорость перехода в миллисекундах
    */
  });
});

	$(document).ready(function() {
            $('#carouselOne').owlCarousel({
                loop:true, //Зацикливаем слайдер
                margin:50, //Отступ от элемента справа в 50px
                nav:false, //Отключение навигации
                autoplay:true, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
});
	$(document).ready(function() {
            $('#carouselThree').owlCarousel({
                loop:true, //Зацикливаем слайдер
                margin:50, //Отступ от элемента справа в 50px
                nav:false, //Отключение навигации
                autoplay:true, //Автозапуск слайдера
                smartSpeed:1000, //Время движения слайда
                autoplayTimeout:5000, //Время смены слайда
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
});
</script>
<script src='js/vue.js'></script>
<script src='js/vue-carousel-3d.min.js'></script>
<script >new Vue({
  el: '#carousel3d',
  data: {
    slides: 6
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
//# sourceURL=pen.js
</script>
<script type="text/javascript" language="javascript">
	function call() {
	  var msg   = $('#formx').serialize();
    $.ajax({
      type: 'POST',
      url: 'mail.php',
      data: msg,
      success: function(data) {
      	$('.close').trigger('click'); 
        $('#showModal5').trigger('click');
      },
      error:  function(xhr, str){
    alert('Возникла ошибка: ' + xhr.responseCode);
      }
    });

}

$(function(){
  $("#phone").mask("+375 (99) 999-99-99");
});
$(function(){
  $("#phone1").mask("+375 (99) 999-99-99");
});
$(function(){
  $("#phone2").mask("+375 (99) 999-99-99");
});
$(function(){
  $("#phone3").mask("+375 (99) 999-99-99");
});
$(function(){
  $("#phone4").mask("+375 (99) 999-99-99");
});

/*$(".slider").slick({

  // normal options...
  infinite: false,
  appendDots: 'split-slideshow-dots'

});*/
</script>
</body>
</html>