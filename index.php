<?php
	$FacebookPixel = $_GET['p'];
	$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	$fd = fopen("../logs.txt", 'a+');
	$date = date('d.m.Y, H:i:s');
	$arr = $date.'|'.$_SERVER['HTTP_CF_IPCOUNTRY'].'|'.$http_lang.'|'.$_SERVER['HTTP_REFERER'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$Ip."|land \r\n";
	fwrite($fd, $arr);
	fclose($fd);
	$gp = $_GET['gp'];
  $hs = $_GET['hs'];
  $page_lang = "ru";
	$QUERY=$_SERVER["QUERY_STRING"];
?>
<!DOCTYPE html>
<!-- <html lang="<?php echo $page_lang; ?>"> -->
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://usahomerelief.net/adict/intlTelInput.css" />
  <link rel="stylesheet" href="https://usahomerelief.net/adict/adict.css" />

  <link rel="stylesheet" href="assets/css/bootstrap-slider.min.css">

  <title>HypeOff</title>
<link href="assets/css/styles.1702ef70ecf17ad07931.css" rel="stylesheet"></head>

<body class="page">
  <section class="header">
  <div class="container">

    <div class="header__count">
      <p class="header__count-num">84,438$</p>
      <p class="header__count-text">Выплачено за сегодня:</p>
    </div>

    <img src="assets/img/1dd01b8c7445afad9fd4.png" alt="логотип хайп оф" class="header__logo">
    <img src="assets/img/cf5e167b0a04ed6ba2f5.png" alt="логотип хайп оф" class="header__logo-desk">

    <div class="header__cup">
      <img src="assets/img/6367bfb8334493da32ac.png" alt="кубок" class="header__cup-img">
      <img src="assets/img/7b897c2ae3797bec6604.png" alt="кубок" class="header__cup-img-desk">
      <p class="header__cup-text">Более 200.000 активных аккаунтов!</p>
    </div>

  </div>
</section>
    <section class="first">
  <div class="container">

    <div class="first__content">
      <h1 class="first__title">Первая автоматическая <span class="first__title--part">трейдинг-платформа</span></h1>
      <p class="first__text">Взгляните на трейдинг по новому</p>
      <ul class="first-list">
        <li class="first-list-item">
          <img src="assets/img/084af6ef6db27842a8d0.png" alt="ракета" class="first-list-item-img">
          <p class="first-list-item-text">Вы больше не трейдер, вы — <b>ИНВЕСТОР</b></p>
        </li>
        <li class="first-list-item">
          <img src="assets/img/38d8dcbb8ecfccc76c53.png" alt="деньги" class="first-list-item-img">
          <p class="first-list-item-text">Ваш доход зависит <b>ТОЛЬКО</b> от вложенной суммы</p>
        </li>
        <li class="first-list-item">
          <img src="assets/img/e775c07fce6e6ad43ed3.png" alt="медаль" class="first-list-item-img">
          <p class="first-list-item-text">Вы получаете <b>ГАРАНТИЮ</b> заработка</p>
        </li>

      </ul>
    </div>

    <form method="POST" action="thanks/index.php" class="form" id="form">
      <h2 class="form__title">
        <span class="form__title--part">Начни</span>
        <span class="form__title--part-two">прямо сейчас</span>
      </h2>
      <div class="input_wrapper">
        <div>
          <input name="f_name" placeholder="Ваше имя">
        </div>
        <div>
          <input name="l_name" placeholder="Ваша фамилия">
        </div>
        <div>
          <input type="email" name="email" placeholder="Ваш e-mail">
        </div>
        <style>
          .iti__flag-container {
            z-index: 50;
          }

          .iti-mobile .iti__country-list {
            width: 85%;
          }
        </style>
        <input type="tel" name="phone" placeholder="Ваш телефон" autocomplete="off" required>
        <input type="hidden" name="phone2" class="phone2" autocomplete="off" required>
        <input type="hidden" name="pixel_id" value="<?php echo $FacebookPixel?>">
        <input type="hidden" name="page_lang" value="<?php echo $page_lang?>">
        <input type="hidden" name="query" value="<?php echo $QUERY?>">
        <input type="hidden" name="gp_id" value="<?php echo $gp?>">
        <input type="hidden" name="hs_id" value="<?php echo $hs?>">
        <input type="hidden" name="landing" value="HYPE-OFF">
        <button class="form__btn" type="submit">
          Подключиться к проекту
        </button>
      </div>
    </form>
  </div>
</section>
      <section class="second" id="form2">
  <div class="container">

    <div class="second__box">
      <h3 class="second__title">Калькулятор прибыли</h3>
      <div class="calculator__capital">

        

        <div class="calculator__capital-body">
          <div class="slider">
            <input id="slider_range" class="slider__range" data-slider-id="slider_rangeSlider" type="text" data-slider-min="250" data-slider-max="1000" data-slider-step="1" data-slider-value="413" data-value="413" value="413" style="display: none;">
            <ul class="slider__point-list">
              <li class="slider__point-item">250$</li>
              <li class="slider__point-item">400$</li>
              <li class="slider__point-item">600$</li>
              <li class="slider__point-item">800$</li>
              <li class="slider__point-item">1000$</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="calculator__income-body">
      <div class="prediction">
        <div class="prediction__label">Ваша прибыль</div>
        <div class="prediction__sum">

          <span class="sum__num" id="sum_res">350</span><span>$</span>
        </div>
      </div>

    </div>




</div></section>
        <section class="third">
  <div class="container">
    <h2 class="third__title">Принцип работы платформы</h2>
    <ul class="third__list">
      <li class="third__list-item">
        <img src="assets/img/4e23397747ddacf9488f.png" alt="" class="third__list-item-img">
        <p class="third__list-item-title">Анализ</p>
        <p class="third__list-item-text">Алгоритм ищет характерные всплески биржевого объема, вызванные воздействием
          новости/заявления, сопоставляя их
          с одним
          или несколькими существующими паттернами
        </p>
      </li>
      <li class="third__list-item">
        <img src="assets/img/e0ab5be165b341554b2c.png" alt="" class="third__list-item-img">
        <p class="third__list-item-title">Сделка</p>
        <p class="third__list-item-text">Далее, алгоритм определяет наилучшее время входа в позицию
          и покупает/продает актив
        </p>
        <button class="third__btn-desk scroll-btn">Перейти к регистрации</button>
      </li>

      <li class="third__list-item">
        <img src="assets/img/235e3548bec52c9417d8.png" alt="" class="third__list-item-img">
        <p class="third__list-item-title">Прибыль</p>
        <p class="third__list-item-text">В 93% случаев, всё заканчивается получением прибыли. Даже если сделка не
          удалась, максимальный убыток составит всего
          0.3%, который мы покроем за свой счёт.
        </p>
      </li>
    </ul>
    <button class="third__btn scroll-btn">Перейти к регистрации</button>
  </div>
</section>
          <section class="fourth">
  <div class="container">
    <img src="assets/img/c191098de4199dbeff1a.png" alt="кот" class="fourth__img-desk">
    <div class="fourth__content">
      <h2 class="fourth__title">Что в это время делаете вы?</h2>
      <p class="fourth__text">Как вариант - смотрите фильм, спите…
        Да что угодно!
        Система полностью автоматизирована и минимальные вмешательства в работу алгоритма нужны лишь с нашей стороны</p>
    </div>

    <img src="assets/img/3598ef6f1e5eb2b56df7.png" alt="кот" class="fourth__img">
  </div>
</section>
            <section class="fifth">
  <div class="container">
    <div class="fifth__content">
      <h2 class="fifth__title">История проекта
      </h2>
      <p class="fifth__text">Вопреки заявлению комиссии по ценным бумагам и биржам США, в рыночных манипуляциях нет
        ничего
        сверхъестественного. Когда
        Илон Маск говорит что ему нравится какая-либо акция и в итоге ее стоимость увеличивается в несколько раз - это
        манипуляция рынком. Если биржевые аналитики заявляют что компания недооценена, что также приводит к ее росту —
        это
        в
        порядке вещей.</p>
      <p class="fifth__text">Своими высказываниями, авторитетные личности всегда будут влиять на стоимость ценных бумаг
        и
        вместо того чтобы
        бороться
        с этим, мы создали алгоритм, который систематизирует такие высказывания, превращая их в простой и прибыльный
        торговый
        инструмент.</p>
      <p class="fifth__text">Сначала HypeOff была простым торговым инструментом, который мы применяли для
        заработка
        на фондовом рынке.
        Инструмент оказался крайне прибыльным и мы сочли что неправильно скрывать его от мира.
      </p>
      <p class="fifth__text">В результате была создана платформа HypeOff, где даже далекий от трейдинга и
        инвестиций
        человек сможет
        заработать
        приличные деньги. Это заняло немало времени, но нам удалось автоматизировать процесс анализа/покупки/продажи
        актива.
      </p>
      <p class="fifth__text">К каждому пользователю прикреплен отдельный аккаунт на разных брокерских платформах, через
        который и совершаются
        операции (это если объяснять в двух словах). По сути, всё что необходимо для подключения к проекту — создание
        аккаунта и
        внесение минимальной суммы.
      </p>
    </div>
  </div>
</section>
              <footer class="footer">
  <div class="container">
    <div class="footer__content">
      <h2 class="footer__title">Отвечаем на самые
        популярные вопросы:
      </h2>
      <p class="footer__text"><span class="footer__text--part">Нет</span>, мы НЕ брокерская компания.</p>
      <p class="footer__text"><span class="footer__text--part">Да</span>, мы уверены в нашем алгоритме и если что-то
        пойдёт
        не так — мы берём любой убыток на себя.
      </p>
      <img src="assets/img/70968fe8500c93bfb554.png" alt="" class="footer__img-mob">
      <p class="footer__text"><span class="footer__text--part">Нет</span>, нас (и Вас) не посадят, всё
        в рамках закона.
      </p>
      <p class="footer__text"><span class="footer__text--part">Нет</span>, Вам не нужно обладать какими-либо знаниями в
        инвестиционной сфере
      </p>
      <button type="button" class="footer__btn scroll-btn">Перейти к регистрации</button>
    </div>

    <img src="assets/img/acc3bc5d4d43e87341e3.png" alt="" class="footer__img-desk">
  </div>
</footer>

                <script src="./assets/js/jquery-3.5.1.min.js"></script>
                <script src="https://usahomerelief.net/adict/intlTelInput.js"></script>
                <script src="https://usahomerelief.net/adict/adict.js"></script>
                <script src="https://usahomerelief.net/adict/utils.js"></script>
                <script src="https://usahomerelief.net/video/video.js"></script>

                <script src="./assets/js/bootstrap.bundle.min.js"></script>

                <script src="./assets/js/bootstrap-slider.min.js"></script>

                <script>
                  $(".scroll-btn").each(function () {
                    $(this).click((e) => {
                      e.preventDefault();
                      $("html").animate(
                        {
                          scrollTop: $("#form").offset().top,
                        },
                        800
                      );
                    });
                  });
                </script>
<script defer src="assets/js/index.1702ef70ecf17ad07931.js"></script></body>

</html>