<?php require_once( 'couch/cms.php' ); ?>

<cms:template title="Главная">
  <cms:editable
    name="phone_number"
    label="Номер телефона"
    type="text"
  />
  <cms:editable
    name="address"
    label="Адрес"
    type="text"
  />

</cms:template>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Пивница Чертовка</title>
  <link rel="stylesheet" href="../bower_components/normalize-css/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/app.min.css">
</head>
<body>
  <header>
    <a href="#" id="logo">
      <span>Пивница</span>
      <div id="logo-img"><img src="img/logo.png" alt="logo" /></div>
      <span>Чертовка</span>
    </a>
    <nav id="nav-desktop">
      <a href="index.php">О Нас</a>
      <a href="menu.php">Меню</a>
      <a href="#gallery">Галлерея</a>
      <a href="#contacts">Контакты</a>
    </nav>
    <a href="#" id="nav-mobile-toggle"><i class="fa fa-bars"></i></a>
  </header>
  <nav id="nav-mobile">
    <a href="index.php">О Нас</a>
    <a href="menu.php">Меню</a>
    <a href="#gallery">Галлерея</a>
    <a href="#contacts">Контакты</a>
  </nav>
  <section id="about">
    <div class="about-tile about-pics">
    </div>
    <div class="about-tile about-contacts">
      <div class="about-contacts-wrapper">
        <h1>Контакты:</h1>
        <p><i class="fa fa-phone"></i><a href="tel:<cms:show phone_number />"><cms:show phone_number /></a></p>
        <p><i class="fa fa-map-marker"></i><a href="#map"><cms:show address /></a></p>
        <div class="metro">
          <div class="metro-sign lime"></div>
          <div class="metro-text">Сретенский бульвар</div>
        </div>
        <div class="metro">
          <div class="metro-sign red"></div>
          <div class="metro-text">Чистые пруды</div>
        </div>
        <div class="metro">
          <div class="metro-sign orange"></div>
          <div class="metro-text">Тургеневская, Сухаревская</div>
        </div>
      </div>
    </div>
    <div class="about-tile about-menu">
      <div class="about-menu-wrapper">
        <h1>Меню</h1>
      </div>
    </div>
    <div class="about-tile about-special">
      <h2>Отличная Акция!</h2>
      <h1>90 руб.</h1>
      <h3>Только по четвергам</h3>
    </div>
  </section>
  <section id="interior">
    <div class="interior-wrapper">
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
      <a href="" class="interior-small-pic" onclick="return false;"></a>
    </div>
  </section>
  <section id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.427946884127!2d37.63223199999997!3d55.768439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a661d30a4b7%3A0xcd5435cad0839690!2z0KfQtdGA0YLQvtCy0LrQsA!5e0!3m2!1sru!2sru!4v1444214599880"></iframe>
  </section>
  <footer>
    <div id="footer-wrap">
      <nav id="footer-nav">
        <a href="index.php">О Нас</a>
        <a href="menu.php">Меню</a>
        <a href="#gallery">Галлерея</a>
        <a href="#contacts">Контакты</a>
      </nav>
      <div id="footer-social">
        <a class="link-facebook" href="#facebook"><i class="fa fa-facebook"></i></a>
        <a class="link-vk" href="#vk"><i class="fa fa-vk"></i></a>
        <a class="link-instagram"href="#instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div id="footer-copyright">
      &copy; 2016 Пивница "Чертовка"
    </div>
  </footer>
  <button id="back-to-top"><i class="fa fa-chevron-up"></i></button>

  <script src="../bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
  <script src="js/main.min.js"></script>
</body>
</html>

<?php COUCH::invoke(); ?>
