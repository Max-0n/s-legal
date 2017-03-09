<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
	<head>
		<title>214 защита</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-language" content="ru-RU" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="animate.css">
		<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
		<script async type="text/javascript" src="jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="jquery.lettering-0.6.1.min.js"></script>
		<script type="text/javascript" src="jquery.textillate.js"></script>
	</head>
	<body>
		<div class="wrapper header">
			<div class="menu ready">
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(1)');">ДДУ</a>
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(2)');">Сопровождение</a>
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(3)');">Согласование</a>
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(4)');">Решение проблем</a>
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(5)');">Неустойки</a>
				<a href="javascript:moveToBlock('.uslugi .line:nth-of-type(6)');">Выкуп долгов</a>
			</div>
			<div class="line">
				<img src="img/logo.png" title="logo" class="ready">
				<label class="ready">Центр выплаты застройщиков</label>
				<a href="javascript:alert('Заявочка');" class="ready">Оставить заявку</a>
			</div>
		</div>
		<div class="wrapper uslugi">
			<label class="ready">Наши услуги:</label>
			<div class="line">
				<div class="part">
					<label class="ready">Юридическая помощь по взысканию и спорам с застройщиками</label>
				</div>
				<div class="part">
					<img src="img/1step.jpg" class="ready" />
				</div>

				<div class="part">
					<img src="img/2step.jpg" class="ready" />
				</div>
				<div class="part">
					<label class="ready">Юридическая помощь по взысканию и спорам с застройщиками</label>
				</div>
				
				<div class="part">
					<label class="ready">Выкуп долгов застройщика</label>
				</div>
				<div class="part">
					<img src="img/3step.jpg" class="ready" />
				</div>
			</div>
		</div>
		
		<div class="wrapper neustoika">
			<label class="ready">Как получить неустойку с застройщика?</label>
			<div class="line">
				<div class="bgline" class="ready"></div>
				<div class="choice">
					<div class="icon phone ready"></div>
					<span class="ready">Узнать возможность получения у юриста по телефону</span>
				</div>
				<div class="choice">
					<div class="icon meet ready"></div>
					<span class="ready">Придти на консультацию для изучения документов</span>
				</div>
				<div class="choice">
					<div class="icon clock ready"></div>
					<span class="ready">В течении часа получить выплату*</span>
				</div>
				<a href="/ooo" class="ready">*Условия получения выплат от застройщиков</a>
			</div>
		</div>
		
		<div class="wrapper recall">
			<label class="ready">Оставьте свой телефон и мы Вам позвоним</label>
			<form>
				<input type="tel" name="phone" placeholder="+7 (123) 456-78-90" class="ready">
				<input type="button" value="Отправить" onclick="alert('Отправка телефона в БД и/или письмом');" class="ready" />
			</form>
		</div>
		<div class="wrapper question">
			<label class="ready"><b>Какие вопросы</b> часто задают наши клиенты?</label>
			<div class="line">
				<div class="row">
					<div class="ready">
						<p>Вы точно даете гарантии?</p>
						Да, мы даем гарантии, что проект будет приводить новых клиентов из интернета. Мы фиксируем это обещание в договоре и несем полную ответственность за результат.
					</div>
					<div class="ready">
						<p>В нашей тематике будет работать?</p>
						Перед тем, как начать работу над проектом, мы обязательно проводим предварительный анализ и составляем прогноз эффективности. Мы не берем в разработку проекты, которые заведомо имеют низкий потенциал. Если мы взялись за проект, то точно доведем его до результата.
					</div>
				</div>
				
				<div class="row">
					<div class="ready">
						<p>Как быстро окупаются вложения?</p>
						В среднем, все вложения в проект окупаются за 4 недели. Много зависит от сферы бизнеса и состояния рынка. Самый долгий срок окупаемости в нашей практике - это 7 недель, самый короткий - 14 дней.
					</div>
					<div class="ready">
						<p>Сколько времени нужно для разработки?</p>
						Обычно разработка проекта с 0 до результата занимает 21 рабочий день. Первых клиентов Вы получите уже в первые дни после запуска.
					</div>
				</div>
			</div>
		</div>		
		<div class="wrapper contacts">
			<div class="line">
				<div class="phone" class="ready">+7 (777) 555-33-44</div>
				<div class="mail" class="ready">ourmail@adress.ru</div>
			</div>
		</div>
		
		<div class="wrapper map">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=MNUyVlrHeMQve9SIT-O4PfSEYbIkU48N&amp;width=100%&amp;height=600&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
		</div>
		
		<div class="wrapper footer">
			<div class="line">
				<div class="part">
					<label class="ready">Помощь:</label>
					<a href="javascript:alert('Link to...');" class="ready">Перечень документов</a>
					<a href="javascript:alert('Link to...');" class="ready">Как мы работаем</a>
					<a href="javascript:alert('Link to...');" class="ready">Критерии</a>
					<a href="javascript:alert('Link to...');" class="ready">Условия</a>
				</div>
				<div class="part">
					<label class="ready">О нас:</label>
					<a href="javascript:alert('Link to...');" class="ready">Как мы работаем</a>
					<a href="javascript:alert('Link to...');" class="ready">Наши условия</a>
					<a href="javascript:alert('Link to...');" class="ready">Link 1</a>
				</div>
				<div class="part">
					<label class="ready">Контакты:</label>
					<a href="javascript:alert('Link to...');" class="ready">Компания</a>
					<a href="javascript:alert('Link to...');" class="ready">Где мы</a>
				</div>
			</div>
			<div class="copyright ready">&copy; 2016 LogoName. All Rights Reserved.</div>
		</div>
		<script type="text/javascript" src="max0n.js"></script>
	</body>
</html>