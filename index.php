<?php

    define('FORRO', 'Forro Systems');
    header('Content-Type: text/html; charset=urf-8');

    require_once __DIR__ . '/config.php';

?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=1000">
        <meta name="robots" content="<?php echo $robots; ?>">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="copyright" content="ИнфоСистем, sibinfosystem.ru">
        <link rel="shortcut icon" href="/favicon.png">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700&subset=latin,cyrillic">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <section class="center-block section-1">
            <header>
                <div class="logo"></div>
                <h1 class="text-center"><?php echo $h1; ?></h1>
                <div class="phone">
                    <?php echo $phone; ?><br>
                    <a href="#">Заказать обратный звонок</a>
                </div>
            </header>
            <div class="slider"></div>
            <div class="timer">
                <h2 class="text-center"><?php echo $offer_h2; ?></h2>
                <div class="widget"></div>
                <button type="button">Заказать</button>
            </div>
        </section>
        <section class="center-block section-2">
            <h2 class="text-center">Как работает конвектор?</h2>
            <div class="text">
                Конвектор &mdash; отопительный прибор, который работает по принципу конвекции
                (от лат. convectio &mdash; перенесение, перемещение теплых и холодных масс).
                В отличие от радиатора, который производит обогрев помещения, в основном, путем
                излучения энергии, конвектор нагревает воздух за счет его циркуляции
                (естественной или принудительной) через теплообменники. Другими словами,
                холодный воздух опускается вниз, проходит через горячие ламели теплообменника,
                откуда уже нагретый выбрасывается в помещение.
            </div>
            <iframe src="<?php echo $video_url; ?>" width="486" height="312" frameborder="0" allowfullscreen></iframe>
        </section>
        <section class="center-block section-3">
            <h2 class="text-center">Где используются конвекторы?</h2>
            <p class="text-center">Мы рекомендуем использовать конвекторы:</p>
            <div class="slider-container">
                <div class="slider"></div>
            </div>
        </section>
        <section class="center-block section-4">
            <h2 class="text-center">Современные конвекторы во многом превосходят традиционные радиаторы</h2>
            <table>
                <thead>
                    <tr>
                        <th class="text-center">Радиаторы</th>
                        <th class="text-center">Конвекторы</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <ul class="limitations">
                                <li>длительное время прогрева помещения (до 5 часов)</li>
                                <li>неравномерность прогрева помещения, наличие &laquo;тепловых теней&raquo;</li>
                                <li>наличие сквозняков</li>
                                <li>запотевание и замерщание окон</li>
                                <li>высокая температура поверхности радиатора, риск ожогов</li>
                                <li>ограниченность в дизайне и стилистических решениях</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="advantages">
                                <li>высокая скорость отклика (10-20 минут)</li>
                                <li>равномерный прогрев всего объема помещения за счет мощной конвекции воздуха</li>
                                <li>полное отсечение холодного воздуха (тепловая завеса)</li>
                                <li>гарантированное исключение эффекта конденсации влаги за счет постоянного обдува</li>
                                <li>абсолютная безопасность для детей, домашних животных, а также мебели</li>
                                <li>безупречный внешний вид и разнообразие вариантов исполнения</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="center-block section-5">
            <h2 class="text-center">Расчет конвектора</h2>
            <div class="text">
                <div class="image"></div>
                <p>
                    Чтобы конвектор эффективно выполнял свои функции, а в помещении было тепло и комфортно,
                    необходимо правильно рассчитать мощность конвектора (если уж быть точными &mdash; тепловые потери помещения).
                    Неправильный расчет может привести к печальным последствиям вроде промерзания стен и выхода из строя
                    всей системы отопления.
                </p>
                <p>
                    Расчет теплопотерь помещения должен производиться специалистами исходя из характеристик конкретного помещения.
                    Свяжитесь с нами прямо сейчас, и мы совершенно бесплатно выполним расчет теплопотерь вашего помещения,
                    а также подберем конвектор необходимой мощности!
                </p>
                <button type="button">Заказать расчет</button>
            </div>
        </section>
        <section class="center-block section-6">
            <h2 class="text-center">Распространенные заблуждения о конвекторах</h2>
            <table>
                <tbody>
                    <tr>
                        <td class="mistake">
                            <span>&mdash;</span>
                            Конвекторы с принудительной конвекцией очень сильно шумят, устанавливать их в спальне нельзя
                        </td>
                        <td class="answer">
                            <strong><em>Ответ:</em></strong>
                            Современные тангенциальные вентиляторы действительно имеют определенный уровень шума при работе.
                            При этом максимальный уровень звукового давления не превышает 40 дБ (аналогично работе бытового кондиционера
                            или системного блока), а менее мощные модели вообще работают на пределе слышимости (26-28 дБ)
                        </td>
                    </tr>
                    <tr>
                        <td class="mistake">
                            <span>&mdash;</span>
                            Конвекторы не могут использоваться в качестве основного источника отопления
                        </td>
                        <td class="answer">
                            <strong><em>Ответ:</em></strong>
                            Могут! Мощность современных конвекторов с принудительной вентиляцией доходит до 10 кВт,
                            что является достаточным для отопления помещения площадью около 100 м<sup>2</sup>.
                            И это мощность лишь одного конвектора
                        </td>
                    </tr>
                    <tr>
                        <td class="mistake">
                            <span>&mdash;</span>
                            Сложность монтажа и возможность установки только при первичном строительстве
                        </td>
                        <td class="answer">
                            <strong><em>Ответ:</em></strong>
                            Монтаж настенных и напольных конвекторов не сложнее монтажа традиционных радиаторов.
                            Что же касается внутрипольных конвекторов, то с его установкой справится любой строитель-отделочник,
                            следуя подробным инструкциям. Устанавливать конвекторы отопления можно на любой стадии строительства,
                            в том числе и в помещениях с готовой отделкой (конвекторы монтируются в ступеньку)
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section class="center-block section-7">
            <div class="block">
                <h2 class="text-center">Наши поставщики</h2>
            </div>
        </section>
        <section class="center-block section-8">
            <h2 class="text-center">Как мы работаем</h2>
        </section>
        <section class="center-block section-9">
            <h2 class="text-center">Отзывы</h2>
            <table>
                <ul class="list-inline text-center">
                    <li>
                        <img src="<?php echo $review1_photo; ?>">
                        <p>
                            <span>&laquo;</span>
                            <?php echo $review1_text; ?>
                            <span>&raquo;</span>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo $review2_photo; ?>">
                        <p>
                            <span>&laquo;</span>
                            <?php echo $review2_text; ?>
                            <span>&raquo;</span>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo $review3_photo; ?>">
                        <p>
                            <span>&laquo;</span>
                            <?php echo $review3_text; ?>
                            <span>&raquo;</span>
                        </p>
                    </li>
                </ul>
                <button type="button">Заказать</button>
            </table>
            <div id="map"></div>
        </section>
        <section class="center-block section-10">
            <h2 class="text-center">Немного о нас</h2>
            <p>
                Forro Systems &mdash; молодая, динамично развивающаяся компания, которая является  единственным во Владимирской области
                официальным дистрибьютором ведущих российских и зарубежных производителей водяных конвекторов. Мы не только
                предлагаем  широкий ассортимент водяных конвекторов отопления, но и осуществляем их монтаж, гарантийное и
                послегарантийное обслуживание.
            </p>
            <p>
                Вместе с тем, хотя основной специализацией компании являются именно конвекторы отопления, наиболее взыскательным
                клиентам мы готовы предложить элитные трубчатые, дизайн- и ретро-радиаторы таких ведущих мировых производителей,
                как Arbonia и Guratec.
            </p>
            <p>
                Ждем Вас по адресу: г. Владимир, ул. Мещерская, д. 6. Рекомендуем предварительно звонить для заказа пропуска на территорию.
            </p>
        </section>
        <section class="center-block section-11">
            <footer>
                <div class="address">
                    <h3>Наш адрес</h3>
                    г. Владимир, ул. Мещерская, д. 6<br>
                    &copy; 2015 Forro Systems
                </div>
                <div class="phones">
                    <h3>Наши телефоны</h3>
                    <span></span> +7 (915) 790-06-71<br>
                    <span></span> +7 (4922) 52-22-79
                </div>
                <div class="social">
                    <h3>Мы в соцсетях</h3>
                    <a href="#" class="facebook"></a>
                    <a href="#" class="vkontakte"></a>
                    <a href="#" class="instagram"></a>
                </div>
            </footer>
        </section>
        <script src="/js/jquery-1.11.3.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        <script src="/js/script.js"></script>
    </body>
</html>