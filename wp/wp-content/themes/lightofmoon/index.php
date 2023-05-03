<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LightOfMoon
 */

get_header();
?>
		<hr>
        <section class="fractions">
            <div class="fraction fraction_1">
                <h1>Королевство Свадия</h1>
                <p>dasuiohaiouasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiaioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiansdifu</p>
                <button>ВСТУПИТЬ</button>
            </div>
            <div class="fraction fraction_2">
                <h1>Империя Ресцен</h1>
                <p>dasuiohaiouasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiaioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiansdifu</p>
                <button>ВСТУПИТЬ</button>
            </div>
            <div class="fraction fraction_3">
                <h1>Союз Солнца</h1>
                <p>dasuiohaiouasdnfiafioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiaioasbdifobasiodfbaiosdbfioasdbfioanbsdiofnasdiofnaisudnfiouasdnfiansdifu</p>
                <button>ВСТУПИТЬ</button>
            </div>
            <div class="fraction_4">
            </div>
        </section>
		<hr>
        <section class="races">
            <div class="race_panel">
                <div class="race_bonus_info">
                    <div class="race_info_box">
                        <h3>Расовые особенности</h3>
                        <img>
                        <img>
                    </div>
                </div>
                <div class="race_model">
                    <br><br><br><br><h1>Человек</h1>
                    <img class="race_member_model" src="images/steve_model.png">
                </div>
                <div class="race_fraction">
                    <img class="race_fraction_image">
                    <h1 class="race_choice_label">Свадия</h1>
                    <p class="race_choice_text">Широко расселившийся народ на просторах подлнного мира</p>
                </div>
            </div><br>
            <div class="race_choice">
                <br><h1>Расы</h1>
                <ul>
                    <li><a href="">Человек</a></li>
                    <li><a href="">Эльф</a></li>
                    <li><a href="">Гном</a></li>
                    <li><a href="">Орк</a></li>
                    <li><a href="">Темный эльф</a></li>
                    <li><a href="">Гоблин</a></li>
                    <li><a href="">Оборотень</a></li>
                    <li><a href="">Драконорожденный</a></li>
                    <li><a href="">Дворф</a></li>
                </ul>
            </div>
        </section>
		<hr>
        <section class="pvp">
            <h1 class="pvp_h1">PVP</h1>
            <p class="pvp_info">На нашем сервере каждый волен выбирать свой путь - За Свадию, За Империю или За Союз, а может и вовсе путь изгоя. Выбор между тем, на чьей стороне сражаться в противостоянии фракций, в открытом мире, на полях боя, или на арене. Или быть может, отказаться от этой войны, сосредоточившись на сражениях с чудовищами, что угрожают всему Подлунному миру? Выбор за вами.</p>
            <ul class="pvp_events">
                <li><a href="">Арены</a></li>
                <li><a href="">ОЛО</a></li>
                <li><a href="">Поля боя</a></li>
                <li><a href="">Боевой пропуск</a></li>
            </ul>
            <div class="pvp_event_panel">
                <div class="image_catalog">
                </div>
                <div class="event_info">
                    <h1>Арена1</h1>
                    <h3>Усыпальница вождя клана Каменного Молота Кор'галла, стала местом проведения кровавых боев арены, согласно странным обычаям расы огров. И хотя время изрядно потрепало целостность Усыпальницы, проливаемая на ней кровь очищает каменные колонны и плиты пола арены. Словно безмолвный и незримый дух огра хранит ее, радуясь сражениям.</h3>
                </div>
            </div>
        </section>
		<hr>
        <section class="pve">
            <h1 class="pve_h1">PVE</h1>
            <p class="pve_info">На нашем сервере доступны подземелья и рейды. Прогрессируйте по мере поэтапного открытия рейдов и станьте первым на сервере, кто одолеет боссов и получит уникальные достижения и звания!</p>
            <ul class="pve_events">
                <li><a href="">Рейд1</a></li>
                <li><a href="">Рейд2</a></li>
                <li><a href="">Рейд3</a></li>
                <li><a href="">Рейд4</a></li>
            </ul><br>
            <div class="pve_event_panel">
                <div class="event_info">
                    <h1>Рейд1</h1>
                    <h3>Знаменитое рейдовое подземелье, мрачный дом Медива, в котором он и встретил свою смерть. Адаптированный под 80-й уровень Каражан в обычной сложности рейда является одним из подземелий, где игроки могут получить первые фрагменты рейдового набора т4, сразившись с классическими версиями боссов. А в героической сложности рейда способности и поведение всех боссов абсолютно новые и заставят попотеть даже опытных игроков, но и награда будет значительно лучше.</h3>
                </div>
                <div class="image_catalog">
                </div>
            </div>
        </section>
		<hr>
        <section class="peculiarities">
            <div class="peculiarity_1">
                <div class="peculiarity_left">
                    <h1>Интерфейс</h1>
                    <h3>Мы привнесли многочисленные улучшения к стандартному интерфейсу 3.3.5 - Окно Гильдии, Окно Талантов, Окно Информации о персонаже, Коллекцию средств передвижения, новое Окно гильдий, Путеводитель по приключениям, оповещения срабатывания классовых эффектов и аур, статус потери контроля и многое другое! Совершенствуя интерфейс и обновляя аддоны, мы стремимся создать максимально удобную и приятную глазу среду для игроков.</h3>
                    <button>Играть бесплатно</button>
                </div>
                <div class="peculiarity_right">
                    <img>
                </div>
            </div>
        </section>
		<hr>
        <section class="registration">
            <h1></h1>
            <h2></h2>
            <form>
                <input type="text" name="account" value="Аккаунт"><br>
                <input type="password" name="password" value="Пароль"><br>
                <input type="text" name="email" value="Электронная почта"><br>
                <input type="text" name="referal" value="Реферальный код"><br>
                <input type="submit" value="Создать аккаунт">
            </form>
        </section>
<?php
get_sidebar();
get_footer();
