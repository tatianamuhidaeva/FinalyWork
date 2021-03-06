
<?php include('head.php') ?>
    <title>Балаклава | Главная</title>
    <link rel="stylesheet" href="css/index_style.css">
</head>

<body>
  <div class="navbar">
    <div class="container navbar-wrap">
      <a class="navbar__logo" href="#">
        <img src="img/logo.png" alt="Логотип Балаклавы">
      </a>
      <nav class="navbar__menu">
        <button class="navbar__toggle" type="button">
          <span class="navbar__toggle-icon"></span>
        </button>
        <div class="navbar__items">
          <div class="navbar__item"><a href="about.php">О&nbsp;нас</a></div>
          <div class="navbar__item"><a href="rooms.php">Наши&nbsp;номера</a></div>
          <div class="navbar__item"><a href="bathhouse.php">Русская&nbsp;баня</a></div>
          <div class="navbar__item"><a href="landmarks.php">Достопримечательности</a></div>
          <div class="navbar__item"><a href="contacts.php">Контакты</a></div>
      </nav>
    </div>
  </div>
  <section class="feedback-index">
    <div class="feedback-index-wrap">
      <div class="feedback-index__close">&#10006;</div>
      <div class="feedback-index__header">Арендовать номер прямо сейчас!</div>
      <div class="feedback-index__body">
        <?php include('modal-feedback.php'); ?>  
      </div>          
    </div>
  </section>  
  <?php include('modal-success.php'); ?>  
  <section class="main">
    <div class="container">
      <div class="main-wrap">
        <h1 class="main__caption">Balaclava</h1>
        <p class="main__text">
          «Белый дом с орлами» – место для спокойного отдыха у моря, вдали от шумного города. Мы
          предлагаем Вам
          отдохнуть в самом сердце Балаклавы, невероятно
          живописном месте – балке Кефало-вриси.
        </p>
        <button class="main__btn btn-o">Арендовать номер!</button>
      </div>
    </div>
  </section>

  <section class="welcome">
    <div class="container welcome-wrap">
      <div class="welcome-text">
        <h2 class="welcome__subtitle">
          Добро пожаловать!
        </h2>
        <div class="welcome__line-decoration"></div>
        <p class="welcome__paragraph">
          Поверить в то, что когда-то Балаклава была закрытым районом Севастополя, уже почти
          невозможно — настолько
          вжился в наше сознание образ популярного морского городка с романтичной набережной,
          круглосуточно заполненной
          туристами, живописными пляжами и милыми старинными улочками. Всего за несколько
          десятилетий Балаклава
          превратилась в современный курорт, предлагающий отличные возможности для отдыха на берегу
          моря. Одной из
          важных составляющих качественного и незабываемого отпуска традиционно считаются
          экскурсии. Интересных
          исторических и архитектурных памятников здесь видимо-невидимо, поэтому культурная статья
          вашего отдыха в
          Балаклаве будет очень насыщенной.
        </p>
      </div>
      <img src="img/welcome/1.png" alt="Фото базы отдыха" class="welcome__img">
    </div>
  </section>

  <section class="advanges">
    <div class="container">
      <div class="advanges-cards">
        <div class="advanges-cards__item">
          <img class="advanges-cards__img" src="img/advanges/1.png" alt="картинка домиков">
          <h3 class="advanges-cards__title">спокойный отдых</h3>
          <p class="advanges-cards__text">
            «Белый дом с орлами» – место для спокойного отдыха у моря, вдали от шумного города. Мы
            предлагаем Вам
            отдохнуть в самом сердце Балаклавы, невероятно живописном месте – балке Кефало-вриси.
          </p>
        </div>
        <div class="advanges-cards__item">
          <img class="advanges-cards__img" src="img/advanges/2.png" alt="картинка елок">
          <h3 class="advanges-cards__title">прекрасная природа</h3>
          <p class="advanges-cards__text">
            Наш гостевой дом расположен у подножия крепости Чембало, вблизи от пляжей и городской
            набережной. В наличии
            все условия для Вашего комфортного времяпровождения.
          </p>
        </div>
        <div class="advanges-cards__item">
          <img class="advanges-cards__img" src="img/advanges/3.png" alt="картинка гор">
          <h3 class="advanges-cards__title">живописный вид</h3>
          <p class="advanges-cards__text">
            С балконов «Белого дома с орлами» открывается живописный вид на Балаклавскую бухту и
            Генуэские башни. Номер
            люкс или жилье класса «эконом»? Мы готовы предложить вам аренду жилья.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="offer offer-rooms">
    <div class="container offer-wrap offer-rooms-wrap">
      <div class="offer-caption offer-rooms-caption">
        <h2 class="offer__caption offer-rooms__caption">уютные
          <br><span class="offer__decore">&mdash;&mdash;</span>&nbsp;номера
        </h2>
        <br><br>
      </div>
      <div class="offer-text offer-rooms-text">
        <h3 class="offer__subtitle">Номера на любой вкус!</h3>
        <div class="offer__paragraph">
          <p>Фирменный набор принадлежностей индивидуального пользования, комплект махровых
            полотенец и другие предметы
            первой необходимости предусмотрены для каждого нашего гостя, остановившегося у нас,
            чтобы провести отличный
            отдых в Балаклаве.</p>
          <p>Все номера гостиничного комплекса имеют отдельные выходы на территорию!</p>
        </div>
        <a class="offer__btn btn" href="rooms.php">Показать номера!</a>
      </div>
    </div>
  </section>

  <section class="offer offer-bathhouse">
    <div class="container offer-wrap offer-bathhouse-wrap">
      <div class="offer-text offer-bathhouse-text">
        <h3 class="offer__subtitle">Отдых в бане у нас!</h3>
        <div class="offer__paragraph">
          <p>
            Русская баня давно завоевала мировое признание. Миллионы людей постоянно прибегают к
            этому простому и
            надежному способу поддерживать здоровье, красоту, жизненный тонус и хорошее настроение.
            В X веке в
            Киево-Печерском монастыре монахи, узнав о пользе бани из древних книг, собранных в
            библиотеке, стали
            устраивать бани для лечебных целей, но на русский манер.
          </p>
        </div>
        <a class="offer__btn btn" href="bathhouse.php">более подробно!</a>
      </div>
      <div class="offer-caption offer-bathhouse-caption">
        <h2 class="offer__caption offer-bathhouse__caption">Русская
          <br>баня&nbsp;<span class="offer__decore">&mdash;&mdash;&mdash;&mdash;</span>
        </h2>
        <br>
        <br>
        <br>
      </div>
    </div>
  </section>

  <section class="landmarks">
    <div class="container">
      <h3 class="landmarks__subtitle">Достопримечательности Балаклавы</h3>
      <p class="landmarks__text">Балаклава и ее окрестности имеют своеобразный облик: это и
        уникальные памятники
        природы - мысы Айя и Фиолент, и остатки величественной генуэзской крепости Чембало, и следы
        храмов,
        овеянных поэтическими легендами. </p>
      <div class="landmarks-list">
        <div class="landmarks-list__item">
          <a class="landmarks-list__href" href="landmarks/1.php"></a>
          <img src="img/landmarks/1.png" alt="" class="landmarks-list__img">
          <div class="landmarks-list-text">
            <span class="landmarks-list__date">29 Марта, 2016</span>
            <h4 class="landmarks-list__text">Военно-морской музей Балаклава (Музей подводных лодок)</h4>
          </div>
        </div>
        <!-- /.landmarks__card -->
        <div class="landmarks-list__item">
          <a class="landmarks-list__href" href="landmarks/2.php"></a>
          <img src="img/landmarks/2.png" alt="" class="landmarks-list__img">
          <div class="landmarks-list-text">
            <span class="landmarks-list__date">2 Апреля, 2016</span>
            <h4 class="landmarks-list__text">Храм Двенадцати апостолов,
              Балаклава </h4>
          </div>
        </div>
        <!-- /.landmarks__card -->
        <div class="landmarks-list__item">
          <a class="landmarks-list__href" href="landmarks/3.php"></a>
          <img src="img/landmarks/3.png" alt="" class="landmarks-list__img">
          <div class="landmarks-list-text">
            <span class="landmarks-list__date">8 Апреля, 2016</span>
            <h4 class="landmarks-list__text">Фортификационное сооружение, крепость Чембало</h4>
          </div>
        </div>
        <!-- /.landmarks__card -->
      </div>
      <!-- /.landmarks__cards -->
      <!-- <button class="landmarks__btn btn">больше статей!</button> -->
      <a class="landmarks__btn btn" href="landmarks.php">Показать номера!</a>
    </div>
  </section>

  <footer class="footer">
    <div class="container footer-navbar">
      <a class="footer-navbar__logo navbar__logo" href="#">
        <img src="img/logo.png" alt="Логотип Балаклавы">
      </a>
      <nav class="footer-navbar__menu navbar__menu">
        <button class="footer-navbar__toggle navbar__toggle" type="button">
          <span class="footer-navbar__toggle-icon navbar__toggle-icon"></span>
        </button>
        <div class="footer-navbar__items navbar__items">
            <div class="footer-navbar__item navbar__item"><a href="about.php">О&nbsp;нас</a></div>
            <div class="footer-navbar__item navbar__item"><a href="rooms.php">Наши&nbsp;номера</a></div>
            <div class="footer-navbar__item navbar__item"><a href="bathhouse.php">Русская&nbsp;баня</a></div>
            <div class="footer-navbar__item navbar__item"><a href="landmarks.php">Достопримечательности</a></div>
            <div class="footer-navbar__item navbar__item"><a href="contacts.php">Контакты</a></div>
        </div>
      </nav>
    </div>
    <div class="container footer-copyright">
      <p class="footer-copyright__text"><a href="www.rus-sauna.com"> &copy;
          www.rus-sauna.com</a></p>
      <p class="footer-copyright__text">
        Стиль, оформление, дизайн и содержание являются объектами авторского права и
        охраняются законом. Перепечатка и иное их использование без письменного
        разрешения не допускаются и ведут за собой ответственность.
      </p>
    </div>
  </footer>
    <script>
      $(document).ready(function (){
        $('.feedback__btn').text("Арендовать номер");      
      });
    </script>
    <script src="/balaclava/js/togglerMenu.js"></script>
    <script src="/balaclava/js/callModalWindow.js"></script>    
    <script src="/balaclava/js/validate-and-sendMail.js"></script>

</body>
</html>