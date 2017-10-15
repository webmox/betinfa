<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body>

<header class="header">
	<div class="top_header">
		<div class="container">
			<a href="<?php bloginfo('url') ?>" class="logo">Bet<span>infa.com</span> </a>
			<div class="descript_site">Сайт о ставках на спорт Betinfa.com носит исключительно информационный характер и не принимает деньги для ставок. 18+</div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
	        <?php 
                $args =  array(
                        'theme_location'  => 'header-top-menu',
                        'menu'            => '', 
                        'container'       => 'nav', 
                        'container_class' => 'menu', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => '',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    );    
                   wp_nav_menu( $args ); 
            ?>
		</div>
	</div>
</header>



<div class="main_container">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="content">

					<h2 class="title_info">Прогнозы на матчи</h2>
					<div class="descript">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem saepe, obcaecati vitae totam, voluptatibus ex accusantium dolorem illo dicta deleniti velit necessitatibus praesentium molestiae sit tempora, aliquam omnis voluptas quos.</p>
					</div>


					<div class="top-forecasts m-b-40">
						<div class="main-forecast">
							<div class="top_info">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							</div>
							<div class="comand_info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="botton-info-meta">
								<span class="chempionat">Чемпионат: <a href="" class="txt">Лига чемпионов</a></span>
								<span class="date">Дата: <span class="txt">27 марта 2017, 21:45</span> </span>
								<span class="station">Стадион: <span class="txt">"Донбас арена"</span></span>
							</div>
						</div>
					</div>


					<div class="last-forecasts block m-b-40">
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
						<div class="item-forecast">
							<div class="date">
								<span class="day">12</span>
								<span class="month">Окт</span>
							</div>
							<div class="commands-info">
								<div class="comand_one">
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_сити.png" class="icon_comand" alt=""></span>
									<span class="name">Манчестер Юнайтет</span>
								</div>
								<div class="vs">VS</div>
								<div class="comand_two">
									<span class="name">Манчестер Юнайтет</span>
									<span class="icon"><img src="<?php bloginfo('template_url') ?>/build/images/манчестер_юнайтед.png" class="icon_comand" alt=""></span>
								</div>
							</div>
							<div class="chemp_info">
								<a href=""><i class="fa fa-futbol-o" aria-hidden="true"></i> Чемпионат украины</a>
							</div>
							<a href="" class="view_forecast">Читать прогноз</a>
						</div>
					</div>

					<div class="wrap_btn">
						<a href="" class="btn_default">Все прогнозы</a>
					</div>
						
					<h2 class="title_info">Новости букмекеров</h2>	
					<section class="wrap-news-list">

						<div class="row">

							<div class="col-md-6">
								<div class="carousel-main-news">

									<div class="item-main-post">
										<div class="thumb-block"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/imp-post.png" alt=""></a></div>
										<div class="inner-carousel-item">
											<div class="date-block">
												<div class="date">
													<span class="month">Январь</span>
													<span class="day">12</span>
												</div>
												<div class="info-post">
													<span class="views"><i class="fa fa-eye" aria-hidden="true"></i>1234</span>
													<span class="comments"><i class="fa fa-comment" aria-hidden="true"></i>23</span>
												</div>
											</div>
										
										
											<div class="info-txt">
												<h3><a href="#">Новая букмекерская кантора дает бонус за регистрацию</a></h3>
												<div class="post-description">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas.</p>
												</div>
											</div>
										</div>
									</div><!--end item-main-post-->

								</div>
							</div>
							<div class="col-md-6">
								<div class="list-news">

									<div class="item-post">
										<h3><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
										<div class="date-post">12.08.2017</div>
										<div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. </p></div>
										<a href="" class="read-more">Читать больше</a>
									</div>
									<div class="item-post">
										<h3><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
										<div class="date-post">12.08.2017</div>
										<div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. </p></div>
										<a href="" class="read-more">Читать больше</a>
									</div>
									<div class="item-post">
										<h3><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
										<div class="date-post">12.08.2017</div>
										<div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. </p></div>
										<a href="" class="read-more">Читать больше</a>
									</div>

								</div>
							</div>
						</div>
					</section>

					<div class="wrap_btn">
						<a href="" class="btn_default">Все новости</a>
					</div>

					<h2 class="title_info">Обзоры БК</h2>
					<div class="wrap_bonuse">
						<div class="row">
							<div class="col-md-4">
								<div class="item_el block">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item_el block">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="item_el block">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, voluptate qui culpa incidunt ratione dicta libero labore doloremque repellat. Tempore voluptas sed veritatis, reprehenderit dolores reiciendis voluptatem ad neque ab.</p>
								</div>
							</div>
						</div>
					</div>



					<h2 class="title_info m-t-40">Прогнозы на футбол</h2>
					<div class="seotext block">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo minima ex, culpa exercitationem fuga! Amet adipisci, unde modi temporibus, laborum quaerat in culpa aliquam cum, debitis eos, aspernatur quos ipsa.</p>
					</div>

				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar">
					<div class="widget block">
						<h2 class="title_widget"><i class="fa fa-bar-chart" aria-hidden="true"></i> Рейтинг Букмекеров</h2>
						<div class="widget_inner">
							<div class="raiting-bk">
								<div class="item_bk">
									<div class="logo-bk"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/1hStavka.jpg" alt=""></a></div>
									<div class="wrap-raiting-bk">
										<div class="raiting-bk-stars">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</div>
									<div class="btns-bk">
										<a href="#" class="site_link">Сайт</a>
										<a href="#" class="info">Обзор</a>
									</div>
								</div>
								<div class="item_bk">
									<div class="logo-bk"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/Fonbet.jpg" alt=""></a></div>
									<div class="wrap-raiting-bk">
										<div class="raiting-bk-stars">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</div>
									<div class="btns-bk">
										<a href="#" class="site_link">Сайт</a>
										<a href="#" class="info">Обзор</a>
									</div>
								</div>
								<div class="item_bk">
									<div class="logo-bk"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/leon1.jpg" alt=""></a></div>
									<div class="wrap-raiting-bk">
										<div class="raiting-bk-stars">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</div>
									<div class="btns-bk">
										<a href="#" class="site_link">Сайт</a>
										<a href="#" class="info">Обзор</a>
									</div>
								</div>
								<div class="item_bk">
									<div class="logo-bk"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/Liga-Stavok.jpg" alt=""></a></div>
									<div class="wrap-raiting-bk">
										<div class="raiting-bk-stars">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</div>
									<div class="btns-bk">
										<a href="#" class="site_link">Сайт</a>
										<a href="#" class="info">Обзор</a>
									</div>
								</div>
								<div class="item_bk">
									<div class="logo-bk"><a href=""><img src="<?php bloginfo('template_url') ?>/build/images/winline1.jpg" alt=""></a></div>
									<div class="wrap-raiting-bk">
										<div class="raiting-bk-stars">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
									</div>
									<div class="btns-bk">
										<a href="#" class="site_link">Сайт</a>
										<a href="#" class="info">Обзор</a>
									</div>
								</div>
							</div>
						</div>
					</div> 
					<div class="widget block">
						<h2 class="title_widget"><i class="fa fa-gift" aria-hidden="true"></i> Бонусы Букмекеров</h2>
						<div class="widget_inner">

							<div class="item_bonuse">
								<div class="img_bg_logo"  style="background:url('<?= bloginfo('template_url') ?>/build/images/Bonus_stavka.jpg') no-repeat center center; background-size:cover;"></div>
								<div class="main_inf">
									<img src="<?= bloginfo('template_url') ?>/build/images/1hStavka.jpg" alt="" class="logo_book">
									<span class="sum-bonuse">2000 ₽</span>
								</div>
								<h2 class="title_bonuse"><a href="">Бонус за регистрацию</a></h2>
								<div class="wrap_btn_b">
									<a href="" class="get_bonuse">Получить</a>
									<a href="" class="read_bonuse">Подробнее</a>
								</div>
							</div>

							<div class="item_bonuse">
								<div class="img_bg_logo"  style="background:url('<?= bloginfo('template_url') ?>/build/images/Bonus_stavka.jpg') no-repeat center center; background-size:cover;"></div>
								<div class="main_inf">
									<img src="<?= bloginfo('template_url') ?>/build/images/1hStavka.jpg" alt="" class="logo_book">
									<span class="sum-bonuse">2000 ₽</span>
								</div>
								<h2 class="title_bonuse"><a href="">Бонус за регистрацию</a></h2>
								<div class="wrap_btn_b">
									<a href="" class="get_bonuse">Получить</a>
									<a href="" class="read_bonuse">Подробнее</a>
								</div>
							</div>

							<div class="item_bonuse">
								<div class="img_bg_logo"  style="background:url('<?= bloginfo('template_url') ?>/build/images/Bonus_stavka.jpg') no-repeat center center; background-size:cover;"></div>
								<div class="main_inf">
									<img src="<?= bloginfo('template_url') ?>/build/images/1hStavka.jpg" alt="" class="logo_book">
									<span class="sum-bonuse">2000 ₽</span>
								</div>
								<h2 class="title_bonuse"><a href="">Бонус за регистрацию</a></h2>
								<div class="wrap_btn_b">
									<a href="" class="get_bonuse">Получить</a>
									<a href="" class="read_bonuse">Подробнее</a>
								</div>
							</div>

						</div>
					</div>

					<div class="widget block category-chempions">
						<h2 class="title_widget"><i class="fa fa-trophy" aria-hidden="true"></i> Прогнозы по турнирам</h2>
						<div class="widget_inner">

							<ul class="list-categoryes">
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
								<li class="item-cat">
									<a href=""><span class="logo-icon"><img src="<?= bloginfo('template_url') ?>/build/images/logo1.png" alt=""></span>Лига чемпионов</a>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer class="footer">

</footer>

<?php wp_footer(); ?>	

</body>
</html>