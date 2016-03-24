<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Чертовка</title>
  <link rel="stylesheet" href="../bower_components/normalize-css/normalize.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
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
    <nav id="nav-mobile">
      <a href="index.php">О Нас</a>
      <a href="menu.php">Меню</a>
      <a href="#gallery">Галлерея</a>
      <a href="#contacts">Контакты</a>
    </nav>
    <a href="#" id="nav-mobile-toggle"><i class="fa fa-bars"></i></a>
  </header>
  <div id="beer"></div>
  <section id="menu">
    <h1>Меню</h1>
    <div id="menu-wrapper">
      <button class="menu-button active" id="bar-button" data-tab="#bar">Карта бара</button
        ><button class="menu-button" id="kitchen-button" data-tab="#kitchen">Меню кухни</button>

      <!-- Кухня -->

      <div id="kitchen">
        <cms:nested_pages masterpage="kitchen.php" include_custom_fields="1">
          <h3><cms:show k_nestedpage_title/></h3>
          <table class="menu-table">
            <cms:show_repeatable 'kitchen_position'>
              <tr>
                <td class="menu_item_picture"><a href="<cms:show kitchen_item_picture/>" style="background-image: url(<cms:show kitchen_item_picture/>);"></a></td>
                <td>
                  <p class="menu_item_title"><cms:show kitchen_item_title/></p>
                  <cms:if kitchen_item_content>
                    <p class="menu_item_content"><cms:show kitchen_item_content/></p>
                  </cms:if>
                </td>
                <td>
                  <p class="menu_item_price"><cms:show kitchen_item_price/></p>
                  <p class="menu_item_weight"><cms:show kitchen_item_weight/></p>
                </td>
              </tr>
            </cms:show_repeatable>
          </table>
        </cms:nested_pages>
      </div>

      <!-- Бар -->

      <div id="bar">
        <cms:nested_pages masterpage="bar.php" include_custom_fields="1">
          <h3><cms:show k_nestedpage_title/></h3>
          <table class="menu-table">
            <cms:show_repeatable 'bar_position'>
              <tr>
                <td class="menu_item_picture menu_item_picture_bar">
                <cms:if bar_item_picture>
                  <a href="<cms:show bar_item_picture/>" style="background-image: url(<cms:show bar_item_picture/>);"></a>
                </cms:if>
                </td>
                <td>
                  <p class="menu_item_title"><cms:show bar_item_title/></p>
                  <cms:if bar_item_content>
                    <p class="menu_item_content"><cms:show bar_item_content/></p>
                  </cms:if>
                </td>
                <td>
                  <p class="menu_item_price"><cms:show bar_item_price/></p>
                  <p class="menu_item_volume"><cms:show bar_item_volume/></p>
                </td>
              </tr>
            </cms:show_repeatable>
          </table>
        </cms:nested_pages>
      </div>
    </div>
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
