<?
$url = "counter.dat";//Указываем адрес файла с данными для записи
$file = file($url);//Считываем файл в массив
$count = $file[0];//Первая строчка - наши данные, в php отсчет начинается с нуля
$count++;//Увеличиваем значение счетчика на 1
$handle = fopen($url, "w");//Открываем файл для записи
fwrite($handle, $count);//Записываем
fclose($handle);//Закрываем 

$a = $count % 10;

$b = $count % 100;
if ($a <= 4 and $a != 1 and $a != 0){
  $type = 0;
}
else $type = 1;
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>Артём Тарасов</title>
    
    <link rel="stylesheet" href="stylesheets/styles.css">
    <link rel="stylesheet" href="stylesheets/pygment_trac.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name='yandex-verification' content='67fdb0d9f711af83' />
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <header>
        <h1>Артём Тарасов</h1>
          <p>
            Веб-разработка </br>
            Фриланс
          </p>
        <br>
        Почта:
          <a class="email" href="mailto:xeon.web@ya.ru">xeon.web@ya.ru</a></br>
        Телефон: +7 960 39-46-418
      </header>
      <section>
        <p>Привет, меня зовут Артём, мне 21 год и я занимаюсь веб-разработкой. Умею верстать сайты, писать внутреннюю (backend) часть к ним и различным веб-приложениям, делаю вид что разбираюсь в веб-дизайне. <br>Скучные подробности:</p>
        <ul>
          <li>Серверные языки: PHP, шаблон проектирования MVC, основы ООП.</li>
          <li>Опыт граббинга: phpquery, cURL.</li>
          <li>Клиентские веб-технологии: HTML5, CSS3(Опыт использования CSS и JS фреймворков).</li>
          <li>БД: MySQL.</li>
          <li>ОС: Mac OS (опыт - 2 года), Linux (Опыт 1 год - Debian), Windows (98 - 7).</li>
          <li>Настройка серверов: Nginx + PHP-FPM + конфигурирование MySqli.</li>   
        </ul>
        <p> 
        Знаком с:<br>
        C++, JavaScript, JQuery
        </p>
        <p>
          <h2>Опыт</h2>
          <h4>TM Media Group – веб-разработка, дизайн, полиграфия</h4>
          01.05.2013 – Настоящее время<br>
          <a href="http://tm-mg.ru">tm-mg.ru</a><br>
          Разработка сайтов, услуги в области дизайна и чуть-чуть полиграфии. <br><br>
          <h4>ООО «Геомаком» – специалист по рекламе</h4>
          2012 – 30.04.2013 <br>
          Создание, поддержка и продвижение сайта компании: <a href="http://www.geomacom.ru">www.geomacom.ru</a><br>
          Создание и поддержка внутрикорпоративной ERP: <a href="/img/netpack.png">NetPack</a>
        </p>
        <p>
        <h2>Работы</h2>
        <a href="http://olgasorrento.ru">http://olgasorrento.ru</a>,
        <a href="http://voennyibilet.ru">http://voennyibilet.ru</a>,
        <a href="http://okna-bahetle.ru">http://okna-bahetle.ru</a>,
        <a href="http://tuimazy-sushi.ru">http://tuimazy-sushi.ru</a>,
        <a href="http://navigator-tmz.ru">http://navigator-tmz.ru</a>,
        <a href="http://zinnurova.com/">http://zinnurova.com/</a>, 
        <a href="http://geomacom.ru/">http://geomacom.ru/</a>, 
        <a href="http://loye.ru/">http://loye.ru/</a>, 
        <a href="http://театр-туймазы.рф/">http://театр-туймазы.рф/</a>
        </p>
        <p>
        <h2>Образование</h2>
        <h4>Средне-специальное:</h4>
        Туймазинский государственный юридический колледж. <br>
        Программное обеспечение вычислительной техники и автоматизированных систем (2009-2012)<br>
        </p>
        <p>
        <h2>Профессиональная цель</h2>
        Повышать уровень владения языками, учиться новым. Верить в свое дело.
        </p>
        <p>
        <h2>Как было раньше?</h2>
        <a href="/02.06.14.html" title="Предыдущая версия странички">От создания – до 2 июня 2014 года.</a>
        </p>
      </section>
      <footer>
        <p><small>Вас тут не стояло <?echo $count; if ($type == 0) { echo " раза"; } else echo " раз"; ?></small></p>
        <p>Theme by <a href="https://github.com/orderedlist">orderedlist</a></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter21436333 = new Ya.Metrika({id:21436333, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/21436333" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
  </body>
</html>