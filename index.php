<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Buisness Trans Group</title>
		<link rel="shortcut icon" href="img/main/logo.png" type="image/png">
		<style>
		html {
		font-size: 10px;
		overflow-x: hidden;
		}
		body {
		font-family: 'Roboto', sans-serif;
		overflow-x: hidden;
		}
		a:hover,
		a:focus {
		text-decoration: none;
		}
		button:focus,
		input:focus,
		a:focus,
		textarea:focus {
		outline: none;
		}
		/* Заголовки секций */
		.section-title {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		-moz-flex-pack: center;
		justify-content: center;
		-webkit-box-align: center;
		-moz-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		margin: 0 auto;
		padding-top: 7.5rem;
		padding-bottom: 5.5rem;
		text-align: center;
		}
		.section-title h3 {
		margin: 0 3rem;
		text-transform: uppercase;
		font-size: 2.3rem;
		font-weight: 700;
		display: inline-block;
		}
		.section-title img {
		display: inline-block;
		}
		.main {
		background: #133f58 url('img/main/main-ship.jpg') center center no-repeat;
		background-size: cover;
		color: #fff;
		padding: 4.5rem 0 26rem 0;
		}
		.main .header {
		font-size: 1.5rem;
		text-align: center;
		}
		.main .header-btn {
		font-weight: 700;
		padding: 1rem 1.8rem;
		border-radius: 25px;
		border: 2px solid #fff;
		background: none;
		font-size: 1.5rem;
		}
		.main .header-btn:hover {
		border: 2px solid #d2cece;
		color: #d2cece;
		cursor: pointer;
		}
		.main .header p {
		margin: 0;
		height: 9.2rem;
		line-height: 9.2rem;
		text-align: left;
		}
		.main .header .logo {
		position: relative;
		height: 9.2rem;
		display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
		-webkit-box-pack: end;
		-ms-flex-pack: end;
		justify-content: flex-end;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		}
		.main .header .logo img:nth-child(2) {
		margin: 0 3rem;
		}
		.main .header .logo img:nth-child(odd) {
		width: 16%;
		}
		.main .header .phone-link {
		font-weight: 700;
		color: #fff;
		height: 9.2rem;
		line-height: 9.2rem;
		}
		.main .header .wrap {
		display: table;
		width: 100%;
		height: 9.2rem;
		}
		.main .header .wrap-block {
		display: table-cell;
		vertical-align: middle;
		}
		.main .menu {
		margin-top: 4.5rem;
		position: relative;
		}
		.main .menu ul {
		list-style: none;
		text-align: center;
		margin: 0;
		padding: 0;
		}
		.main .menu ul li {
		display: inline-block;
		font-family: 'Roboto', sans-serif;
		font-size: 1.6rem;
		font-weight: 700;
		margin-left: 4rem;
		max-height: 4rem;
		}
		.main .menu ul li:nth-child(1) {
		margin-left: 0;
		}
		.main .menu ul li a {
		display: inline-block;
		color: #fff;
		text-decoration: none;
		}
		.main .menu ul li a::after {
		content: '';
		display: block;
		width: 100%;
		height: 2px;
		background: #0b5e8f;
		-webkit-transform: scaleX(0);
		-moz-transform: scaleX(0);
		-ms-transform: scaleX(0);
		transform: scaleX(0);
		-webkit-transition: all 0.2s;
		-moz-transition: all 0.2s;
		-o-transition: all 0.2s;
		transition: all 0.2s;
		}
		.main .menu ul li a:hover::after {
		-webkit-transform: scaleX(1);
		-moz-transform: scaleX(1);
		-ms-transform: scaleX(1);
		transform: scaleX(1);
		cursor: pointer;
		}
		.main .menu .search {
		border: none;
		width: 30px;
		height: 30px;
		color: #fff;
		border-radius: 50%;
		background-color: #133f58;
		background-image: -webkit-gradient(linear, left top, right top, from(#6da1c0), to(#0b5e8f));
		background-image: -webkit-linear-gradient(left, #6da1c0 0%, #0b5e8f 100%);
		background-image: -moz-linear-gradient(left, #6da1c0 0%, #0b5e8f 100%);
		background-image: -o-linear-gradient(left, #6da1c0 0%, #0b5e8f 100%);
		background-image: linear-gradient(90deg, #6da1c0 0%, #0b5e8f 100%);
		}
		.main .main-title {
		margin-top: 10rem;
		}
		.main .main-title h1 {
		font-weight: 700;
		margin: 0;
		font-size: 6.1rem;
		}
		.main .main-title p {
		margin-top: 4rem;
		font-size: 1.6rem;
		margin-bottom: 0;
		}
		.main .main-title .button {
		margin-top: 4rem;
		font-weight: 700;
		padding: 1.5rem 3.5em;
		font-size: 1.5rem;
		border-radius: 25px;
		border: none;
		background-image: -webkit-linear-gradient(342deg, #2e76a0 0%, #0b5e8f 100%);
		background-image: -moz-linear-gradient(342deg, #2e76a0 0%, #0b5e8f 100%);
		background-image: -o-linear-gradient(342deg, #2e76a0 0%, #0b5e8f 100%);
		background-image: linear-gradient(108deg, #2e76a0 0%, #0b5e8f 100%);
		color: #fff;
		}
		.main .main-title .button:hover {
		background-image: -webkit-linear-gradient(63deg, #2e76a0 42%, #0b5e8f 100%);
		background-image: -moz-linear-gradient(63deg, #2e76a0 42%, #0b5e8f 100%);
		background-image: -o-linear-gradient(63deg, #2e76a0 42%, #0b5e8f 100%);
		background-image: linear-gradient(27deg, #2e76a0 42%, #0b5e8f 100%);
		cursor: pointer;
		}
		.main-slider-btn {
		top: 50%;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
		position: absolute;
		border: none;
		background: none;
		}
		.main-prev-btn {
		left: -7%;
		z-index: 9;
		}
		.main-next-btn {
		right: -7%;
		z-index: 9;
		}
		.main .slick-dots {
		bottom: -85px;
		left: 0rem;
		}
		.main .slick-dots li button::before {
		content: '';
		display: inline-block;
		width: 1.4rem;
		height: 1.4rem;
		padding: 0.3rem;
		border: 2px solid #fff;
		border-radius: 50%;
		opacity: 1;
		}
		.main .slick-dots li.slick-active button:before {
		background-color: #246f9b;
		border: none;
		}
		</style>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
				<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47127249 = new Ya.Metrika({ id:47127249, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47127249" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
		<main class="main">
			<div class="container">
				
<div class="header">
					<div class="row">
						<div class="col-md-3 col-sm-12 ">
							<p>Импортно-экспортная компания</p>
						</div>
						<div class="col-md-5 col-sm-12 ">
							<div class="logo">
								<img src="img/main/line.png" alt="">
								<img src="img/main/main-logo.png" alt="">
								<img src="img/main/line.png" alt="">
							</div>
						</div>
						<div class="col-md-2 col-sm-12">
							<a class="phone-link contacts" href="tel:+89619962503">8 (961) 996-25-03</a>
						</div>
						<div class="col-md-2 col-sm-12">
							<div class="wrap ">
								<div class="wrap-block">
									<button class="button  header-btn" onclick="yaCounter47127249.reachGoal('callback-btn'); return true;" >		Заказать звонок</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="menu">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<ul>
								<li class="col-xs-12 visible-xs "><a href="index.php">О компании</a></li>
								<li class="col-xs-12	visible-xs "><a href="page.php">Услуги</a></li>
								<li class="col-xs-12	visible-xs "><a href="#">Новости</a></li>
								<li class="col-xs-12 visible-xs"><a href="#">Калькулятор</a></li>
								<li class="col-xs-12 visible-xs"><a href="#">Контакты</a></li>
								<li class="col-xs-12 visible-xs"><button class="search"><i class="fa fa-search" aria-hidden="true"></i></button></li>
								<li class="hidden-xs "><a href="index.php">О компании</a></li>
								<li class="hidden-xs "><a href="page.php">Услуги</a></li>
								<li class="hidden-xs "><a href="#">Новости</a></li>
								<li class="hidden-xs "><a href="#">Калькулятор</a></li>
								<li class="hidden-xs "><a href="#">Контакты</a></li>
								<li class="hidden-xs "><button class="search"><i class="fa fa-search" aria-hidden="true"></i></button></li>
							</ul>
						</div>
					</div>
				</div>				<div class="main-title">
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Грузы из Китая<br>с компанией "BTG"</h1>
								<p>Экспорт и импорт грузов из Китая любым видом транспорта.<br>
								Без переплат и точно в срок!</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Быстрая заявка</button>
								
							</div>
						</div>
					</div>
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Грузы из Африки<br>с компанией "BTG"</h1>
								<p>Экспорт и импорт грузов из Китая любым видом транспорта.<br>
								Без переплат и точно в срок!</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Быстрая заявка</button>
							</div>
						</div>
					</div>
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Грузы из Америки<br>с компанией "BTG"</h1>
								<p>Экспорт и импорт грузов из Китая любым видом транспорта.<br>
								Без переплат и точно в срок!</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Быстрая заявка</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<section class="service">
			<div class="service-wrap">
				<div class="container">
					<div class="col-md-12">
						<div class="section-title">
							<img src="img/news/line.png" alt="">
							<h3>Наши услуги</h3>
							<img src="img/news/line.png" alt="">
						</div>
					</div>
					<div class="row">
						<div class="service-slider">
							<div class="col-md-4 col-sm-6  ">
								<div class="service-block">
									
									<div class="wrap">
										<img src="img/service/1.png" alt="1">
										<p>Международные<br>грузоперевозки</p>
										<button class="button popup-btn-request" onclick=" yaCounter47127249.reachGoal('request-btn'); return true;" >Подробней</button>
									</div>
									
								</div>
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="service-block">
									<div class="wrap">
										<img src="img/service/2.png" alt="2">
										<p>Доставка<br>грузов из Китая</p>
										<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true; ">Подробней</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="service-block">
									<div class="wrap">
										<img src="img/service/3.png" alt="3">
										<p>Таможенное<br>оформление</p>
										<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;">Подробней</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="service-block">
									<div class="wrap">
										<img src="img/service/4.png" alt="4">
										<p>Контейнерные<br> перевозки</p>
										<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Подробней</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="service-block">
									<div class="wrap">
										<img src="img/service/5.png" alt="5">
										<p>Доставка<br>сборных грузов</p>
										<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Подробней</button>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 ">
								<div class="service-block">
									<div class="wrap">
										<img src="img/service/6.png" alt="6">
										<p>Финансирование<br>поставок</p>
										<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Подробней</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<section class="trans">
			<div class="trans-img ">
				<img class="trans-ship" src="img/trans/ship-trans.jpg" alt="">
				<img class="trans-logo" src="img/trans/logo.png" alt="">
			</div>
			<div class="trans-discription">
				<div class="wrap">
					<h3>"BTG" - Buisness Trans Group</h3>
					<p>Международная компания</p>
					<p>Идейные соображения высшего порядка, а также начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации систем массового участия. Товарищи! постоянное информационно-пропагандистское обеспечение нашей деятельности способствует подготовки и реализации существенных финансовых и административных условий.</p>
				</div>
			</div>
			<div style="clear:both;"></div>
		</section>
		<section class="news">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<img src="img/news/line.png" alt="">
							<h3>новости</h3>
							<img src="img/news/line.png" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="news-block">
							<img src="img/news/1.jpg" alt="Фото №1">
							<div class="news-block-text">
								<h4>Открытие нового<br>направления поставок</h4>
								<p>15.09.17</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="news-block">
							<img src="img/news/2.jpg" alt="Фото №2">
							<div class="news-block-text">
								<h4>Открытие нового<br>направления поставок</h4>
								<p>15.09.17</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="news-block">
							<img src="img/news/3.jpg" alt="Фото №3">
							<div class="news-block-text">
								<h4>Открытие нового<br>направления поставок</h4>
								<p>15.09.17</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="news-block">
							<img src="img/news/4.jpg" alt="Фото №4">
							<div class="news-block-text">
								<h4>Открытие нового<br>направления поставок</h4>
								<p>15.09.17</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class=" plane">
			<div class="container">
				<div class="plane-title">
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Работаем с экспортом<br> и импортом по всему миру</h1>
								<p>Наши специалисты помогут вам доставить<br>ваши грузы в любую точку мира</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;">Быстрая заявка</button>
							</div>
						</div>
					</div>
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Работаем с экспортом<br> и импортом по всему миру</h1>
								<p>Наши специалисты помогут вам доставить<br>ваши грузы в любую точку мира</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;">Быстрая заявка</button>
							</div>
						</div>
					</div>
					<div class="slider-item">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<h1>Работаем с экспортом<br> и импортом по всему миру</h1>
								<p>Наши специалисты помогут вам доставить<br>ваши грузы в любую точку мира</p>
								<button class="button popup-btn-request" onclick="yaCounter47127249.reachGoal('request-btn'); return true;">Быстрая заявка</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="partners">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<img src="img/news/line.png" alt="">
							<h3>Партнеры</h3>
							<img src="img/news/line.png" alt="">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="partners-block"><img src="img/partners/1.png" alt="Партнер №1"></div>
					<div class="partners-block"><img src="img/partners/2.png" alt="Партнер №2"></div>
					<div class="partners-block"><img src="img/partners/3.png" alt="Партнер №3"></div>
					<div class="partners-block"><img src="img/partners/4.png" alt="Партнер №4"></div>
					<div class="partners-block"><img src="img/partners/5.png" alt="Партнер №5"></div>
				</div>
			</div>
		</section>
		<section class="consult">
			<div class="container">
				<div class="row">
					
					<div class="col-md-8 col-md-offset-2">
						<h4 class="consult-header">Быстрая заявка</h4>
						<div class="main-form consult-form">
							<img src="img/consult/plane.png" alt="">
							<form class="form" action="mailer/smart.php" method="post">
								
								<input class="form-input first  " name="place_start" required type="text" placeholder="Откуда">
								<input class="form-input second" name="place_finish" required type="text" placeholder="Куда">
								
								<input class="form-input " name="user_name" required type="text" placeholder="Как Вас зовут">
								<input class="form-input phone"  name="user_phone" required type="text" placeholder="Номер телефона">
								<button class="button" type="submit" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Получить расчет</button>
							</form>
						</div>
						<p>Нажав кнопку «Получить расчет»,я даю согласие на обработку моих персональных данных.</p>
					</div>
				</div>
			</div>
	</section>
	
	<footer class="footer ">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12">
					<div class="footer-logo">
						<img src="img/footer/logo.png" alt="Гипсолит. Штукатурка стен">
					</div>
				</div>
				<div class="col-md-7 col-sm-12">
					<div class="footer-menu ">
						<nav >
							<ul>
								<li><a href="index.php">О компании</a></li>
								<li><a href="page.php">Услуги</a></li>
								<li><a href="#">Новости</a></li>
								<li><a href="#">Калькулятор</a></li>
								<li><a href="#">Контакты</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="footer-dev-logo">
						<p>Cоздание сайта:</p>
						<img src="img/footer/dev-logo.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</footer>
	
		<div class="popup">
			<div class="popup-dialog">
				<div class="popup-content">
					<button class="popup-close">&times;</button>
					<h4 class="popup-header">Заказать звонок</h4>
					<div class="main-form popup-form">
						<form class="form" action="mailer/smart.php" method="post">
							<input class="form-input"  name="user_name" required type="text" placeholder="Как Вас зовут?">
							<input class="form-input phone" name="user_phone" required type="text" placeholder="Номер телефона">
							<button class="button" type="submit">Заказать звонок</button>
						</form>
					</div>
					<p>Нажав кнопку «Заказать звонок»,<br> я даю согласие на обработку моих персональных данных.</p>
				</div>
			</div>
		</div>
		
		<div class=" popup-request ">
			<div class="popup-dialog">
				<div class="popup-content">
					<button class="popup-close">&times;</button>
					<h4 class="popup-header">Быстрая заявка</h4>
					<div class="main-form popup-form">
						<form class="form" action="mailer/smart.php" method="post">
							<input class="form-input first"  name="place_start" required type="text" placeholder="Откуда">
							<input class="form-input  second"  name="place_finish" required type="text" placeholder="Куда">
							<input class="form-input" name="user_name" required type="text" placeholder="Как Вас зовут">
							<input class="form-input phone" name="user_phone" required type="text" placeholder="Номер телефона">
							<button class="button" type="submit" onclick="yaCounter47127249.reachGoal('request-btn'); return true;" >Заказать звонок</button>
						</form>
					</div>
					<p>Нажав кнопку «Заказать звонок»,<br> я даю согласие на обработку моих персональных данных.</p>
				</div>
			</div>
		</div>
		<div class="popup-thanks">
			<div class="popup-dialog">
				<div class="popup-content">
					<button class="popup-close">&times;</button>
					<h4 class="popup-header">Спасибо за обращение <br><br>
					Наш специалист свяжется с <br> Вами в ближайшее время!
					</h4>
				</div>
			</div>
		</div>

		<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="slick/slick.css">
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="slick/slick.min.js"></script>
		<script src="js/jquery.maskedinput.min.js"></script>
		<script>
																	
		$('form').submit(function(event) {
		event.preventDefault();
		$.ajax({
		type: "POST",
		url: "mailer/smart.php",
		data: $(this).serialize()
		}).done(function() {
		$(this).find("input").val("");
		$('.popup-thanks').fadeIn();
		$('.popup .popup-request').fadeOut();
		$('.popup-close').on('click', function(event) {
			event.preventDefault();
		$('.popup-thanks').fadeOut();
		});
		$("form").trigger("reset");
		});
		return false;
		});
		</script>
		<script>
			jQuery(function($){
		$(".phone").mask("+7(999) 999-99-99");
		});
		</script>
		<script>
				$(document).ready(function(){
																// $(".menu").find("a").click(function(){
																// // удаляем у старого элемента, класс   activeClass
																// $(".menu .active-link").removeClass("active-link");
																// // добавляем к ссылки по которой щёлкнули класс activeClass
																// $(this).addClass("active-link");
																// });
																	$('.header-btn').on('click', function(e){
																				e.preventDefault();
																				$('.popup').fadeIn();
																	});
																	$('.popup-close').on('click', function(e){
																				e.preventDefault();
																				$('.popup').fadeOut();
																	});
																		$('.popup-btn-request').on('click', function(e){
																				e.preventDefault();
																				$('.popup-request').fadeIn();
																	});
																	$('.popup-close').on('click', function(e){
																				e.preventDefault();
																				$('.popup-request').fadeOut();
																	});
																		$('.main-title').slick({
																		dots: true,
																		infinite: true,
																		slidesToShow: 1,
																		slidesToScroll: 1,
																		autoplay: true,
																		autoplaySpeed: 2000,
																		prevArrow: '<button type="button" class="main-slider-btn main-prev-btn"><img src="img/main/prevArrow.svg"></button>',
																		nextArrow: '<button type="button" class="main-slider-btn main-next-btn" ><img src="img/main/nextArrow.svg"></button>',
																		responsive: [
																		{
																			breakpoint: 768,
																			settings: {
																				arrows: false,
																				slidesToShow: 1,
																				slidesToScroll: 1,
																			}
																		}
																		]
																	});
																	$('.plane-title').slick({
																		infinite: true,
																		slidesToShow: 1,
																		slidesToScroll: 1,
																		autoplay: true,
																		autoplaySpeed: 2000,
																		prevArrow: '<button type="button" class="main-slider-btn main-prev-btn"><img src="img/main/prevArrow.svg"></button>',
																		nextArrow: '<button type="button" class="main-slider-btn main-next-btn" ><img src="img/main/nextArrow.svg"></button>',
																			responsive: [
																		{
																			breakpoint: 768,
																			settings: {
																				arrows: false,
																				dots: true,
																				slidesToShow: 1,
																				slidesToScroll: 1,
																			}
																		}
																		]
																	});
																	
																});
																
		</script>
	</body>
</html>