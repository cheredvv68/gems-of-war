<?php
$mytext = '<!DOCTYPE html><html><head><link type="image/x-icon" rel="shortcut icon" href="favicon.ico"><title>Главная</title><link rel="stylesheet" href="GOW.css" type="text/css"></head><body>';
//$mytext .= '<table class="noBorder">'; //   Начало блока таблиц
//------------------------------------------------------------------------------------------------
$mytext .= '<table class="noBorder"><tr><td class="noBorder">'; //   Начало блока таблиц
$mytext .= '<table class="noBorder">';
//------------------------------------------------------------------------------------------------ 
$_text = 'Обновляет в базе данных информацию с предварительно сохранённой страницы Gemologica.html';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_Ясена1.php">Аккаунт</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
/*
$_text = 'Обновляет в базе данных словарь GOW со страниц Taransworld';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_000.php">Словарь</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Обновляет в базе данных информацию о предстоящих в ближайшие недели событиях с сайта taransworld';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_101.php">События</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Обновляет в базе данных информацию об оружии';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_weapon2.php">Оружие</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Обновляет в базе данных информацию об войсках';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_troops.php">Войска</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
*/
$_text = 'Обновляет информацию о предстоящих в ближайшие недели событиях с ресурсов Gemologica и garyatrics.com bot';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_004-0.php">События</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Новые запросы json';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_002-4-json.php">JSON</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Информация о кампаниях';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_008_camp.php">Кампании</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';


$_text = 'Отображает таблицу доходности по королевствам с итогами';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_001-2.php">Прогноз</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Отображает таблицу условий развития Мощи королевств';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_001-3.php">Условия</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Отображает в виде таблиц прокачиваемые классы и классы уже достигшие 100-го уровня';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_002.php">Классы</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Перевод основных игровых понятий';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_004-2.php">Перевод</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

//------------------------------------------------------------------------------------------------------
$mytext .= '</table>';
$mytext .= '</td><td class="noBorder">'; // Конец/начало табличного блока
$mytext .= '<table class="noBorder">';
//------------------------------------------------------------------------------------------------------
$_text = 'Отображает общую информацию о классах';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_002-3.php">Классы</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

$_text = 'Отображает прогресс за последний день и за последнюю неделю';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_006.php">Прогресс</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
//$mytext .= '<p><a href="/GOW_006.php">Прогресс развития</a></p>'; // Ссылка на страницу 
//$mytext .= '<p><a href="/GOW_002-1.php">Полученные войска, оружие и питомцы по Королевствам</a></p>'; // Ссылка на страницу
$_text = 'Отображает информацию о не полученных войсках и оружии по Королевствам';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_002-1.php">Отсутствуют</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
//$mytext .= '<p><a href="/GOW_002-2.php">Полученные и неполученные Мифики по Королевствам</a></p>'; // Ссылка на страницу
$_text = 'Отображает информацию о Мификах на аккаунте по Королевствам. В том числе полученных и не полученных';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_002-2.php">Мифики</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Формирует список отсутствующих Мификов на аккаунте';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_000-2.php">Мифики</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Формирует таблицу всех Мификов';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_002-5.php">Мифики</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

//$mytext .= '<p><a href="/GOW_003.php">Питомцы</a></p>'; // Ссылка на страницу 
$_text = 'Отображает информацию о питомцах на аккаунте. В том числе полностью возвышенных и не полученных';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_003.php">Питомцы</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Отображает информацию о питомцах';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_003-1.php">Питомцы</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

//$mytext .= '<p><a href="/GOW_004.php">Посмотреть СОБЫТИЯ</a></p><br>'; // Ссылка на страницу 
$_text = 'Отображает информацию о предстоящих в ближайшие недели событиях';
//$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_004.php">События</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_004-1.php">События</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
//$mytext .= '<p><a href="/GOW_001.php">Фракции</a></p>'; // Ссылка на страницу 
$_text = 'Отображает информацию о фракциях';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_001.php">Фракции</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Отображает информацию о словарных парах';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_000-1.php">Словарь</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
//------------------------------------------------------------------------------------------------------
$mytext .= '</table>';
$mytext .= '</td><td class="noBorder">'; // Конец/начало табличного блока
$mytext .= '<table class="noBorder">';
//------------------------------------------------------------------------------------------------------
/*
$_text = 'Формирует информацию появлении в Кузне душ мифических войск';
$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_201_sf_history.php">Кузня Душ</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
*/
$_text = 'Отображает информацию появлении в Кузне душ мифических войск';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_202_sf_history.php">Кузня Душ</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_203_sf_history.php">Кузня Душ+</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

$_text = 'Отображает информацию о блестящих';
$mytext .= '<tr><td class="noBorder"><a class="button button-green" href="/GOW_007-1.php">Блестящие</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';


$_text = 'Сводная таблица по штормам. Карты и события позволяющие получить нужный шторм';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/Storms.php">Штормы</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Сводная таблица по оружию';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_weapon3.php">Оружие</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Таблица специального оружия';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_weapon4.php">Оружие С1</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Таблица специального оружия';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_weapon5.php">Оружие С2</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Таблица войск';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_troops2.php">Войска</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
$_text = 'Доступ к Гугл-таблицам';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/GOW_X_00.php">Forms</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';

//$_text = 'Изучение данных информации с предварительно сохранённой страницы Gemologica.html';
//$mytext .= '<tr><td class="noBorder"><a class="button button-red" href="/GOW_Ясена2-0.php">Аккаунт*</a></td><td class="noBorder small grey">'.$_text.'</td></tr>';
//------------------------------------------------------------------------------------------------------
$mytext .= '</table>';
$mytext .= '</td><td class="noBorder">'; // Конец/начало табличного блока

//------------------------------------------------------------------------------------------------------

//$mytext .= '<p><a href="/GOW_005.php">ЭКСПЕРИМЕНТЫ</a></p>'; // Ссылка на страницу 
$mytext .= '</table>';
$mytext .= '</body></html>';
echo $mytext.'<br>';

?>