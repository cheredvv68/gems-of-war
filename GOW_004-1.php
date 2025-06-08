<?php
set_time_limit(600); // 10 минут
require "GOW_troops_sp.php";


//*****************************************************************
$mysql_user = 'cheredvv';
$mysql_password = '123456';
$mysql_base = 'gemsofwar';
$link = mysqli_connect('localhost', $mysql_user, $mysql_password, $mysql_base);
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
//echo 'Успешно соединились';
mysqli_set_charset($link, "utf8");
//*****************************************************************
$ng[1] = ['Башня', 'Беда', 'Божество', 'Босс', 'Бык', 'Великан', 'Гном', 'Гоблин', 'Демон', 'Дикий народец', 'Дракон', 'Зверь', 'Карлик', 'Кентавр', 'Конструкт', 'Механизм', 'Мистик', 'Монстр', 'Морской житель', 'Нага', 'Нежить', 'Оборотень', 'Орк', 'Разбойник', 'Ракша', 'Рыцарь', 'Стрикс', 'Урск', 'Фея', 'Человек', 'Элементаль', 'Эльф'];
$ng[2] = ['башня', 'беда', 'божество', 'босс', 'бык', 'великан', 'гном', 'гоблин', 'демон', 'дикий народец', 'дракон', 'зверь', 'карлик', 'кентавр', 'конструкт', 'механизм', 'мистик', 'монстр', 'морской житель', 'нага', 'нежить', 'оборотень', 'орк', 'разбойник', 'ракша', 'рыцарь', 'стрикс', 'урск', 'фея', 'человек', 'элементаль', 'эльф'];
$ng[3] = ['башни', 'беды', 'божества', 'босса', 'быка', 'великана', 'гнома', 'гоблина', 'демона', 'дикого народца', 'дракона', 'зверя', 'карлика', 'кентавра', 'конструкта', 'механизма', 'мистика', 'монстра', 'морского жителя', 'наги', 'нежити', 'оборотня', 'орка', 'разбойника', 'ракши', 'рыцаря', 'стрикса', 'урска', 'феи', 'человека', 'элементаля', 'эльфа'];
$ng[4] = ['башен', 'бед', 'божеств', 'боссов', 'быков', 'великанов', 'гномов', 'гоблинов', 'демонов', 'диких народцев', 'драконов', 'зверей', 'карликов', 'кентавров', 'конструктов', 'механизмов', 'мистиков', 'монстров', 'морских жителей', 'нагов', 'нежити', 'оборотней', 'орков', 'разбойников', 'ракшей', 'рыцарей', 'стриксов', 'урсков', 'фей', 'людей', 'элементалей', 'эльфов'];
$ng[5] = ['Tower', 'Doom', 'Divine', 'Boss', 'Tauros', 'Giant', 'Dwarf', 'Goblin', 'Daemon', 'Wildfolk', 'Dragon', 'Beast', 'Gnome', 'Centaur', 'Construct', 'Mech', 'Mystic', 'Monster', 'Merfolk', 'Naga', 'Undead', 'Wargare', 'Orc', 'Rogue', 'Raksha', 'Knight', 'Stryx', 'Urska', 'Fey', 'Human', 'Elemental', 'Elf'];
$ng[6] = ['tower', 'doom', 'divine', 'boss', 'tauros', 'giant', 'dwarf', 'goblin', 'daemon', 'wildfolk', 'dragon', 'beast', 'gnome', 'centaur', 'construct', 'mech', 'mystic', 'monster', 'merfolk', 'naga', 'undead', 'wargare', 'orc', 'rogue', 'raksha', 'knight', 'stryx', 'urska', 'fey', 'human', 'elemental', 'elf'];
$ng[7] = ['башню', 'беду', 'божество', 'босса', 'быка', 'великана', 'гнома', 'гоблина', 'демона', 'дикого народца', 'дракона', 'зверя', 'карлика', 'кентавра', 'конструкта', 'механизма', 'мистика', 'монстра', 'морского жителя', 'нагу', 'нежить', 'оборотня', 'орка', 'разбойника', 'ракшу', 'рыцаря', 'стрикса', 'урска', 'фею', 'человека', 'элементаля', 'эльфа'];
/*
$sql = "DELETE FROM Basic_Translate";
$result = mysqli_query($link, $sql);
*/
//***************************************************************************************************************************
$mytext = '<!DOCTYPE html><html><head><title>Ближайшие события</title><link rel="stylesheet" href="GOW.css" type="text/css"></head><body>';
//$mytext .= '<p><a href="/index.php">На главную</a></p>'; // Ссылка на страницу index
$mytext .= '<table class="noBorder">'; //   Начало блока таблиц
$_text = 'Возврат на главную страницу проекта';
$mytext .= '<tr><td class="noBorder"><a class="button button-blue" href="/index.php">На главную</a></td><td class="noBorder small grey">' . $_text . '</td></tr>';
$mytext .= '</table>';


//***************************************************************************************************************************

//***************************************************************************************************************************
// НОВАЯ ТАБЛИЦА
$mytext .= '<h3>КАЛЕНДАРЬ СОБЫТИЙ</h3><table id="T01">';
$mytext .= '<colgroup>';
//$mytext .= '<col width="100">';
$mytext .= '<col width="150">';
$mytext .= '<col width="100">';
$mytext .= '<col width="280">';
$mytext .= '<col width="180">';
$mytext .= '<col width="120">';
$mytext .= '<col width="130">';
$mytext .= '<col width="80">';
$mytext .= '<col width="80">';
$mytext .= '<col width="80">';
$mytext .= '</colgroup>';
//$mytext .= '<tr><td rowspan="2" class="center bold grey greyBG">Неделя</td>';
//$mytext .= '<td rowspan="2" class="center bold grey greyBG">Королевство</td>';
$mytext .= '<td class="center bold grey greyBG">Неделя</td>';
$mytext .= '<td rowspan="2" class="center bold grey greyBG">Гильдейское событие недели</td>';
$mytext .= '<td class="center bold grey greyBG">Новинки</td>';
$mytext .= '<td class="center bold grey greyBG">Фракция</td>';
$mytext .= '<td class="center bold grey greyBG">Спасение Питомца</td>';
$mytext .= '<td class="center bold grey greyBG">Класс Героя</td>';
$mytext .= '<td colspan="3" class="center bold grey greyBG">Событие на выходные</td></tr>';
$mytext .= '<tr><td class="center grey bold greyBG">Королевство<br>и подшпиль<br><span class="small grey nobold">(ограничение на войска)</span></td>';
$mytext .= '<td class="center grey italic greyBG">Понедельник</td>';
$mytext .= '<td class="center grey italic greyBG">Вторник</td>';
$mytext .= '<td class="center grey italic greyBG">Среда</td>';
$mytext .= '<td class="center grey italic greyBG">Четверг</td>';
$mytext .= '<td class="center grey italic greyBG">Пятница</td>';
$mytext .= '<td class="center italic red greyBG">Суббота</td>';
$mytext .= '<td class="center italic red greyBG">Воскресенье</tr>';

$sql = 'SELECT * FROM Garyatrics_EventKingdom ORDER BY DateEvent';
$result = mysqli_query($link, $sql);
while ($data = mysqli_fetch_array($result)) { // Формируем строки таблицы
    $_kingdom = $data['Kingdom'];       // Королевство
    $_date_event = $data['DateEvent'];  // Начальная дата текущей недели
    $_week_event = $data['WeekEvent'];  // Номер текущей недели

    $sql2 = 'SELECT * FROM Basic_Translate WHERE Kingdom_ru = "' . addslashes($_kingdom) . '"';
    $result2 = mysqli_query($link, $sql2);
    $data2 = mysqli_fetch_array($result2);
    $kingdom_en = trim($data2['Kingdom']); // Королевство по английски

    $sql2 = 'SELECT * FROM Mythics WHERE Chest = "" and Kingdom_ru = "' . addslashes($_kingdom) . '"';
    $result2 = mysqli_query($link, $sql2);
    $_green_key = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_green_key .= '<p>' . $data2['Name_ru'] . '</p>';
    }
    $_green_key = '<br><span class="black small bold">Зелёные ключи:</span><br><span class="troopRarity6 bold small">' . $_green_key . '</span>';

    //---------- ПОНЕДЕЛЬНИК и Недельное событие
    $_date_strtotime_1 = strtotime($_date_event); // Понедельник текущей недели
    $_date_1 = date('Y-m-d', $_date_strtotime_1);
    $_date_rus_1 = date('d', $_date_strtotime_1) . ' ' . translateMon(date('M', $_date_strtotime_1));
    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE Duration = 7 and WeekEvent = "' . $_week_event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_unit0 = '';
    $_type_event0 = '';
    $_type_event00 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        if (trim($data2['Type_Event']) <> 'Подшпиль') {
            $_unit0 = $data2['Unit'];
            /*
            if (str_contains($_unit0, ' (') == true) {
                $_pos_end = mb_strpos($_unit0, ' (');
                $_unit0 = substr($_unit0, 0, $_pos_end);
            }
            */
            $_type_event0 = $data2['Type_Event'];
            if (trim($_type_event0) == 'SpecialWeeklyEvent') {
                $_type_event0 = '<span class="grey-dark">Специальное событие недели</span>';
            } elseif (trim($_type_event0) == 'Рейдовый босс') {
                $_unit0 = '<span class="small grey">Капитан события:<br></span>' . $_unit0;
                $_type_event0 = '<span class="magenta">' . $_type_event0 . '</span>';
            } elseif (trim($_type_event0) == 'Путешествие') {
                $_unit0 = '<span class="small grey">Капитан события:<br></span>' . $_unit0;
                $_type_event0 = '<span class="green">' . $_type_event0 . '</span>';
            } elseif (trim($_type_event0) == 'Вторжение') {
                $_unit0 = '<span class="small grey">Капитан события:<br></span>' . $_unit0;
                $_type_event0 = '<span class="brown">' . $_type_event0 . '</span>';
            } elseif (trim($_type_event0) == 'Событие недели') {
                //$_unit0 = '<span class="small grey">Капитан события:<br></span>'.$_unit0;
                $_unit0 = '';
                $_type_event0 = '<span class="blue">Мировое событие</span>';
            } elseif (trim($_type_event0) == 'Башня беды') {
                if (str_contains($_unit0, 'пламени') == true) {
                    $_unit0 = '<span class="red">' . $_unit0 . '</span>';
                } elseif (str_contains($_unit0, 'льда') == true) {
                    $_unit0 = '<span class="blue">' . $_unit0 . '</span>';
                } elseif (str_contains($_unit0, 'камня') == true) {
                    $_unit0 = '<span class="brown">' . $_unit0 . '</span>';
                } elseif (str_contains($_unit0, 'света') == true) {
                    $_unit0 = '<span class="yellow">' . $_unit0 . '</span>';
                } elseif (str_contains($_unit0, 'тьмы') == true) {
                    $_unit0 = '<span class="magenta">' . $_unit0 . '</span>';
                } elseif (str_contains($_unit0, 'природы') == true) {
                    $_unit0 = '<span class="green">' . $_unit0 . '</span>';
                }
            }
        }
        $_type_event00 .= $_type_event0 . '<br>';
    }
    $_type_event0 = mb_substr($_type_event00, 4, -4);
    if ($_type_event0 == '') {
        if ((($_week_event - 1) / 5 + 1) == round(($_week_event - 1) / 5 + 1)) {
            $_type_event0 = '<span class="grey">Путешествие</span>';
        } elseif ((($_week_event - 2) / 5 + 1) == round(($_week_event - 2) / 5 + 1)) {
            $_type_event0 = '<span class="grey">Мировое событие</span>';
        } elseif ((($_week_event - 3) / 5 + 1) == round(($_week_event - 3) / 5 + 1)) {
            $_type_event0 = '<span class="grey">Вторжение</span>';
        } elseif ((($_week_event - 4) / 5 + 1) == round(($_week_event - 4) / 5 + 1)) {
            $_type_event0 = '<span class="grey">Башня беды</span>';
        } elseif ((($_week_event - 5) / 5 + 1) == round(($_week_event - 5) / 5 + 1)) {
            $_type_event0 = '<span class="grey">Рейдовый босс</span>';
        }
    }
    $sql2 = 'SELECT * FROM Taranium_Troop_sp WHERE ReleaseDate = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event1 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id1 = $data2['ID'];
        $_unit1 = $data2['NameTroop'];
        $_rarity1 = trim($data2['Rarity']);
        $_type_troop1 = trim($data2['TypeTroop']);
        $_type_troop1 = '<span class="grey-dark">' . translate_types_troop($_type_troop1) . '</span>';
        $_kingdom1 = trim($data2['Kingdom']);
        $_kingdom1 = trans($_kingdom1);
        $sql3 = 'SELECT * FROM Troop_Translate WHERE ID = "' . $_id1 . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_unit1 = $data3['Name_Troop_ru'];
        }
        $_text_event1 .= '<p>' . colortroops($_unit1, $_rarity1) . ' <span class="small nobold">(' . $_kingdom1 . ') ' . $_type_troop1 . '</span></p>';
    }
    if ($_text_event1 <> '') {
        $_text_event1 = '<p><span class="small black bold">Новые войска:</span></p>' . mb_substr($_text_event1, 0, -4);
    }
    $_text_event1w = '';
    $sql2 = 'SELECT * FROM Taranium_Weapon_sp WHERE ReleaseDate = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event1w = '';
    $_weapon0doom = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id1w = $data2['ID'];
        $_weapon1 = $data2['NameWeapon'];
        $_rarity1w = trim($data2['Rarity']);
        $_kingdom1w = trim($data2['Kingdom']);
        $_kingdom1w = trans($_kingdom1w);
        $sql3 = 'SELECT * FROM Weapon_Translate WHERE ID = "' . $_id1w . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_weapon1 = $data3['Name_Weapon_ru'];
        }
        if ($_rarity1w == 'Doomed') {
            $_weapon0doom = '<span class="small grey">Оружие события:</span><br><span class="red">' . $_weapon1 . '</span>';
        }
        $_text_event1w .= '<p>' . colortroops($_weapon1, $_rarity1w) . ' <span class="small nobold">(' . $_kingdom1w . ')</span></p>';
    }
    if ($_text_event1w <> '') {
        $_text_event1w = '<p><span class="small black bold">Новое оружие:</span><br>' . mb_substr($_text_event1w, 0, -4) . '</p>';
    }

    $sql2 = 'SELECT * FROM Taranium_Pet_sp WHERE ReleaseDate = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event1p = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id1p = $data2['ID'];
        $_pet1 = $data2['NamePet'];
        $_kingdom1p = trim($data2['Kingdom']);
        $_kingdom1p = trans($_kingdom1p);
        $_effect1p = trim($data2['Effect']);
        $_troop_effect1p = trim($data2['TroopEffect']);
        $sql3 = 'SELECT * FROM Pet_Translate WHERE ID = "' . $_id1p . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_pet1 = $data3['Name_Pet_ru'];
            $_effect1p = trim($data3['Effect']);
            $_troop_effect1p = trim($data3['Troop_Effect']);
        }
        if ($_troop_effect1p == 'N/A') {
            $_troop_effect1p = '';
        }
        $_text_event1p .= '<p><span class="brown">' . $_pet1 . '</span> <span class="small nobold">(' . $_kingdom1p . ') </span><span class="small nobold grey-dark">' . $_effect1p . ' ' . $_troop_effect1p . '</span></p>';
    }
    if ($_text_event1p <> '') {
        $_text_event1p = '<p><span class="small black bold">Новые питомцы:</span><br>' . mb_substr($_text_event1p, 0, -4) . '</p>';
    }
    // Повышение MAX мощи
    $sql8 = 'SELECT * FROM PowerUp_Dates WHERE Date_Up = "' . $_date_1 . '"';
    $result8 = mysqli_query($link, $sql8);
    $_text_event1s = '';
    while ($data8 = mysqli_fetch_array($result8)) {
        $_power_up1 = $data8['Power_Up'];
        $_kingdom_up1 = trim($data8['Kingdom']);
        $_kingdom_up1 = trans($_kingdom_up1);
        if ($_power_up1 == 30) {
            $_text_event1s .= '<p><span class="bold">' . $_kingdom_up1 . '</span> до <span class="green bold">' . $_power_up1 . '</span>ур.</p>';
        } else {
            $_text_event1s .= '<p><span class="bold">' . $_kingdom_up1 . '</span> до <span class="grey-dark bold">' . $_power_up1 . '</span>ур.</p>';
        }
    }
    if ($_text_event1s <> '') {
        $_text_event1s = '<p><span class="small black bold">Будет повышена MAX мощь королевств:</span><br>' . mb_substr($_text_event1s, 0, -4) . '</p>';
    }
    // ------------------------
    if (trim($_type_event0) == 'Башня беды') {
        $_unit0 = $_unit0 . '<br>' . $_weapon0doom;
    }
    /*
    $sql2 = 'SELECT * FROM Gemologica_Events WHERE Type_Unit = "Troop" and DateEvent = "'.$_date_1.'"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event11 = '';
    while($data2 = mysqli_fetch_array($result2)) {
        $_unit1 = trim($data2['Unit']);
        $_kingdom1 = trim($data2['Kingdom']);
        $_kingdom1 = trans($_kingdom1);
        $_text_event11 .= $_unit1.' <span class="small grey">('.$_kingdom1.')</span>, ';
    }
    if ($_text_event11 <> '') {
        $_text_event1 .= '<br><span class="small grey">Новые войска (Gemologica):</span><br>'.mb_substr($_text_event11, 0, -2);
    }
    */
    //---------- ВТОРНИК
    $_date_strtotime_2 = strtotime('+1 day', strtotime($_date_event)); // Вторник текущей недели
    $_date_2 = date('Y-m-d', $_date_strtotime_2);
    $_date_rus_2 = date('d', $_date_strtotime_2) . ' ' . translateMon(date('M', $_date_strtotime_2));
    $_Cur_Event = 'Нападение на фракцию';
    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE WeekEvent = "' . $_week_event . '" and Type_Event = "' . $_Cur_Event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_faction2 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_faction2 = $data2['Unit'];
    }
    if ($_faction2 == '') {
        $sql2 = 'SELECT * FROM Basic_Translate WHERE Kingdom_ru = "' . addslashes($_kingdom) . '"';
        $result2 = mysqli_query($link, $sql2);
        while ($data2 = mysqli_fetch_array($result2)) {
            $_faction2 = '<span class="grey">' . $data2['Faction_ru'] . '</span>';
        }
    }
    $sql2 = 'SELECT * FROM Taranium_Troop_sp WHERE ReleaseDate = "' . $_date_2 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event2 = '';
    $_unit2 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id2 = $data2['ID'];
        $_unit2 = $data2['NameTroop'];
        $_rarity2 = trim($data2['Rarity']);
        $_kingdom2 = trim($data2['Kingdom']);
        $_kingdom2 = trans($_kingdom2);
        $sql3 = 'SELECT * FROM Troop_Translate WHERE ID = "' . $_id2 . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_unit2 = $data3['Name_Troop_ru'];
        }
        $_text_event2 .= colortroops($_unit2, $_rarity2) . ' <span class="small nobold">(' . $_kingdom2 . ')</span><br>';
    }
    if ($_text_event2 <> '') {
        $_text_event2 = '<span class="small grey">Новые войска:</span><br>' . mb_substr($_text_event2, 0, -4);
    }
    $sql2 = 'SELECT Faction_Weapon FROM Factions_gow WHERE Kingdom = "' . $kingdom_en . '"';
    $result2 = mysqli_query($link, $sql2);
    $data2 = mysqli_fetch_array($result2);
    $weapon2 = mb_substr(strip_tags($data2['Faction_Weapon']), 1); // Оружие фракции
    $weapon2 = trans($weapon2);



    //---------- СРЕДА
    $_date_strtotime_3 = strtotime('+2 day', strtotime($_date_event)); // Среда текущей недели
    $_date_3 = date('Y-m-d', $_date_strtotime_3);
    $_date_rus_3 = date('d', $_date_strtotime_3) . ' ' . translateMon(date('M', $_date_strtotime_3));
    $_Cur_Event = 'Спасение питомца';
    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE WeekEvent = "' . $_week_event . '" and Type_Event = "' . $_Cur_Event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_unit3 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_unit3 = $data2['Unit'];
        $_unit3 = '<span class="bold brown">' . $_unit3 . '</span>';
    }

    $sql2 = 'SELECT * FROM Taranium_Pet_sp WHERE ReleaseDate = "' . $_date_3 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event3p = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id3p = $data2['ID'];
        $_pet3 = $data2['NamePet'];
        $_kingdom3p = trim($data2['Kingdom']);
        $_kingdom3p = trans($_kingdom3p);
        $_effect3p = trim($data2['Effect']);
        $_troop_effect3p = trim($data2['TroopEffect']);
        if ($_troop_effect3p == 'N/A') {
            $_troop_effect3p = '';
        }
        $_text_event3p .= '<span class="brown">' . $_pet3 . '</span> <span class="small nobold">(' . $_kingdom3p . ') ' . $_effect3p . ' ' . $_troop_effect3p . '</span><br>';
    }
    if ($_text_event3p <> '') {
        $_text_event3p = '<br><span class="small grey">Новый питомец:</span><br>' . mb_substr($_text_event3p, 0, -4);
    }

    //---------- ЧЕТВЕРГ
    $_date_strtotime_4 = strtotime('+3 day', strtotime($_date_event)); // Среда текущей недели
    $_date_4 = date('Y-m-d', $_date_strtotime_4);
    $_date_rus_4 = date('d', $_date_strtotime_4) . ' ' . translateMon(date('M', $_date_strtotime_4));
    $_Cur_Event = 'Классовое испытание';
    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE WeekEvent = "' . $_week_event . '" and Type_Event = "' . $_Cur_Event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_unit4 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_unit4 = $data2['Unit'];
    }
    if ($_unit4 == '') {
        $sql3 = 'SELECT * FROM Basic_Translate WHERE Kingdom_ru = "' . addslashes($_kingdom) . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_unit4 = $data3['Class_ru'];
            $_unit4 = '<span class="grey">' . $_unit4 . '</span>';
        }
    }

    $sql2 = 'SELECT Class_Weapon FROM Classes_gow WHERE Kingdom = "' . $kingdom_en . '"';
    $result2 = mysqli_query($link, $sql2);
    $data2 = mysqli_fetch_array($result2);
    $weapon4 = mb_substr(strip_tags($data2['Class_Weapon']), 1); // Оружие класса
    $weapon4 = trans($weapon4);
    //---------- ВЫХОДНЫЕ
    $_date_strtotime_5 = strtotime('+4 day', strtotime($_date_event)); // Пятница текущей недели
    $_date_5 = date('Y-m-d', $_date_strtotime_5);
    $_date_rus_5 = date('d', $_date_strtotime_5) . ' ' . translateMon(date('M', $_date_strtotime_5));
    $_date_strtotime_7 = strtotime('+6 day', strtotime($_date_event)); // Воскресенье текущей недели
    $_date_7 = date('Y-m-d', $_date_strtotime_7);
    $_date_rus_7 = date('d', $_date_strtotime_7) . ' ' . translateMon(date('M', $_date_strtotime_7));

    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE Type_Event = "Войны гильдий" and WeekEvent = "' . $_week_event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_guidewars = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_guidewars = '<br><p><span class="bold red">Войны гильдий</span></p>';
    }

    $sql2 = 'SELECT * FROM Garyatrics_Events WHERE Duration = 3 and WeekEvent = "' . $_week_event . '"';
    $result2 = mysqli_query($link, $sql2);
    $_unit5 = '';
    $_type_event5 = '';
    $_text_event5 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_type_event5 = $data2['Type_Event'];
        $_unit5 = $data2['Unit'];
        if (trim($_type_event5) == 'Хранилище') {
            $_text_event5 .= '<span class="bold red">Хранилище Карликов</span><br><br>';
        } elseif (trim($_type_event5) == 'Нажива') {
            $_text_event5 .= '<span class="bold blue">' . $_type_event5 . '</span><br>
                <span class="small grey">Капитан события:<br></span>' . $_unit5 . '<br><br>';
        } elseif (trim($_type_event5) == 'Нападение на фракцию') {
            $_text_event5 .= '<span class="bold magenta">' . $_type_event5 . '</span><br>
                <span class="bold black">' . $_unit5 . '</span><br><br>';
        } else {
            $_text_event5 .= '<span class="bold">' . $_type_event5 . '</span><br>' . $_unit5 . '<br><br>';
        }
    }
    if ($_type_event5 == '') {
        if ((($_week_event - 1) / 4 + 1) == round(($_week_event - 1) / 4 + 1)) {
            $_type_event5 = '<span class="grey">Нажива</span>';
        } elseif ((($_week_event - 2) / 4 + 1) == round(($_week_event - 2) / 4 + 1)) {
            $_type_event5 = '<span class="grey">Арена</span>';
        } elseif ((($_week_event - 3) / 4 + 1) == round(($_week_event - 3) / 4 + 1)) {
            $_type_event5 = '<span class="grey">Фракция</span>';
        } elseif ((($_week_event - 4) / 4 + 1) == round(($_week_event - 4) / 4 + 1)) {
            $_type_event5 = '<span class="red">Хранилище Карликов</span>';
        }
    }
    $sql2 = 'SELECT * FROM Taranium_Troop_sp WHERE ReleaseDate = "' . $_date_5 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_text_event51 = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_id5 = $data2['ID'];
        $_unit5 = $data2['NameTroop'];
        $_rarity5 = trim($data2['Rarity']);
        $_type_troop5 = trim($data2['TypeTroop']);
        $_type_troop5 = '<span class="grey-dark">' . translate_types_troop($_type_troop5) . '</span>';
        $_kingdom5 = trim($data2['Kingdom']);
        $_kingdom5 = trans($_kingdom5);
        $sql3 = 'SELECT * FROM Troop_Translate WHERE ID = "' . $_id5 . '"';
        $result3 = mysqli_query($link, $sql3);
        while ($data3 = mysqli_fetch_array($result3)) {
            $_unit5 = $data3['Name_Troop_ru'];
        }
        $_text_event51 .= '<p>' . colortroops($_unit5, $_rarity5) . ' <span class="small nobold">(' . $_kingdom5 . ') ' . $_type_troop5 . '</span></p>';
    }
    if ($_text_event51 <> '') {
        $_text_event5 .= '<p><span class="small black bold">Новые войска:</span><br>' . mb_substr($_text_event51, 0, -4) . '</p>';
    }

    if (date('d', $_date_strtotime_5) <= 7) {
        $_css520 = '<span class="troopRarity6">';
        $_css521 = '</span>';
    } else {
        $_css520 = '';
        $_css521 = '';
    }
    // Повышение MAX мощи
    $sql8 = 'SELECT * FROM PowerUp_Dates WHERE Date_Up = "' . $_date_5 . '"';
    $result8 = mysqli_query($link, $sql8);
    $_text_event5s = '';
    while ($data8 = mysqli_fetch_array($result8)) {
        $_power_up5 = $data8['Power_Up'];
        $_kingdom_up5 = trim($data8['Kingdom']);
        $_kingdom_up5 = trans($_kingdom_up5);
        if ($_power_up5 == 30) {
            $_text_event5s .= '<p><span class="bold">' . $_kingdom_up5 . '</span> до <span class="green bold">' . $_power_up5 . '</span>ур.</p>';
        } else {
            $_text_event5s .= '<p><span class="bold">' . $_kingdom_up5 . '</span> до <span class="grey-dark bold">' . $_power_up5 . '</span>ур.</p>';
        }
    }
    if ($_text_event5s <> '') {
        $_text_event5s = '<p><span class="small black bold">Будет повышена MAX мощь королевств:</span><br>' . mb_substr($_text_event5s, 0, -4) . '</p>';
    }

    //---------- ВЫВОД СТРОКИ В ТАБЛИЦУ
    $mytext .= '<tr><td><span class="bold large blue">' . $_week_event . '</span><br><span class="small blue italic">' . TwoDates($_date_strtotime_1, $_date_strtotime_7) . '</span>';
    $mytext .=      '<br><br><span class="bold">' . $_kingdom . '</span><br>' . $_green_key . '</td>';
    $mytext .= '<td><span class="bold">' . $_type_event0 . '</span><br>' . $_unit0 . '</td>';
    $mytext .= '<td><p><span class="small blue italic">' . $_date_rus_1 . '</span></p>' . $_text_event1 . $_text_event1w . $_text_event1p . $_text_event1s . '</td>'; // Понедельник
    $mytext .= '<td><span class="small blue italic">' . $_date_rus_2 . '</span><br><span class="bold">' . $_faction2 . '</span>'; // Вторник
    $mytext .=      '<br><span class="small grey">В магазине фракции оружие:</span><br><span class="troopRarity5">' . $weapon2 . '</span><br>' . $_text_event2 . '</td>';
    $mytext .= '<td><span class="small blue italic">' . $_date_rus_3 . '</span><br>' . $_unit3 . $_text_event3p . '</td>'; // Среда
    $mytext .= '<td><span class="small blue italic">' . $_date_rus_4 . '</span><br><span class="bold">' . $_unit4 . '</span>' . $_guidewars; // Четверг
    //$mytext .= '<br><span class="small grey">В магазине события оружие:</span><br><span class="troopRarity6">'.$weapon4.'</span></td>';
    $mytext .= '<td colspan="3"><span class="small blue italic">' . TwoDates($_date_strtotime_5, $_date_strtotime_7) . '</span><br>' . $_text_event5 . $_guidewars . $_text_event5s . '</td>'; // Выходные 
    $mytext .= '</tr>';
}
$mytext .= '</table><br>';
// КОНЕЦ НОВОЙ ТАБЛИЦЫ
//***************************************************************************************************************************
$mytext .= '<h3>КАЛЕНДАРЬ ДЛИННЫХ СОБЫТИЙ</h3><table id="T01">';
// Шапка таблицы
$mytext .= '<colgroup>';
$mytext .= '<col width="80">';
$mytext .= '<col width="300">';
$mytext .= '<col width="300">';
$mytext .= '</colgroup>';

$mytext .= '<td class="center bold grey greyBG">Неделя</td>';
$mytext .= '<td class="center bold grey greyBG">События кампаний</td>';
$mytext .= '<td class="center bold grey greyBG">События ПвП сезонов</tr>';
// Формирование данных таблицы
$sql = 'SELECT * FROM Garyatrics_EventKingdom ORDER BY DateEvent';
$result = mysqli_query($link, $sql);
$_first_flag_camp = 1;
$_first_flag_pvp = 1;
while ($data = mysqli_fetch_array($result)) { // Формируем строки таблицы
    $_kingdom = $data['Kingdom'];       // Королевство
    $_date_event = $data['DateEvent'];  // Начальная дата текущей недели
    $_week_event = $data['WeekEvent'];  // Номер текущей недели
    $_date_strtotime_1 = strtotime($_date_event); // Понедельник текущей недели
    $_date_1 = date('Y-m-d', $_date_strtotime_1);
    $_date_rus_1 = date('d', $_date_strtotime_1) . ' ' . translateMon(date('M', $_date_strtotime_1));
    $_date_strtotime_7 = strtotime('+6 day', strtotime($_date_event)); // Воскресенье текущей недели
    $_date_7 = date('Y-m-d', $_date_strtotime_7);
    $_date_rus_7 = date('d', $_date_strtotime_7) . ' ' . translateMon(date('M', $_date_strtotime_7));
    
    // Неделя начала Кампании
    if ($_first_flag_camp == 0) {
        $sql2 = 'SELECT * FROM Campaigns WHERE BeginDate = "' . $_date_1 . '"';
        $result2 = mysqli_query($link, $sql2);
        $_campaign = '';
        $_camp_begin_date = '';
        $_camp_end_date = '';
        $_camp_dates = '';
        while ($data2 = mysqli_fetch_array($result2)) {
            $_campaign = 'Начинается '.$data2['Campaign'];
            $_camp_begin_date = $data2['BeginDate'];
            $_camp_end_date = $data2['EndDate'];
            $_camp_dates = TwoDates(strtotime($_camp_begin_date), strtotime($_camp_end_date));
        }
    } else {
        $sql2 = 'SELECT * FROM Campaigns WHERE BeginDate <= "'. $_date_1 .'" and EndDate > "' . $_date_1 . '"';
        $result2 = mysqli_query($link, $sql2);
        $_campaign = '';
        $_camp_begin_date = '';
        $_camp_end_date = '';
        $_camp_dates = '';
        while ($data2 = mysqli_fetch_array($result2)) {
            $_campaign = 'Продолжается '.$data2['Campaign'];
            $_camp_begin_date = $data2['BeginDate'];
            $_camp_end_date = $data2['EndDate'];
            $_camp_dates = TwoDates(strtotime($_camp_begin_date), strtotime($_camp_end_date));
        }
        $_first_flag_camp = 0;
    }
    // Неделя окончания Кампании
        $sql2 = 'SELECT * FROM Campaigns WHERE EndDate = "' . $_date_7 . '"';
        $result2 = mysqli_query($link, $sql2);
        $_campaign_e = '';
        $_camp_begin_date_e = '';
        $_camp_end_date_e = '';
        $_camp_dates_e = '';
        while ($data2 = mysqli_fetch_array($result2)) {
            $_campaign_e = 'Окончание '.$data2['Campaign'];
            $_camp_begin_date_e = $data2['BeginDate'];
            $_camp_end_date_e = $data2['EndDate'];
            //$_camp_dates = TwoDates(strtotime($_camp_begin_date), strtotime($_camp_end_date));
        }
        $_campaign .= $_campaign_e;
    // Неделя появления мифика Кампании
    $sql2 = 'SELECT * FROM Campaigns WHERE DateMithic = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_campaign_m = '';
    $_camp_mythic = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_campaign_m = 'Мифик кампании';
        $_camp_mythic = $data2['NameMithic'];
    }
    $_campaign .= $_campaign_m.' '.$_camp_mythic;
    // Неделя начала ПвП сезона
    if ($_first_flag_pvp == 0) {
    $sql2 = 'SELECT * FROM PvP_Seasons WHERE BeginDate = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_pvp_season = '';
    $_pvp_begin_date = '';
    $_pvp_end_date = '';
    $_pvp_date_mythic = '';
    $_pvp_dates = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_pvp_season = $data2['Season'];
        $_pvp_begin_date = $data2['BeginDate'];
        $_pvp_end_date = $data2['EndDate'];
        $_pvp_dates = TwoDates(strtotime($_pvp_begin_date), strtotime($_pvp_end_date));
    }
    } else {
        $sql2 = 'SELECT * FROM PvP_Seasons WHERE BeginDate <= "'. $_date_1 .'" and EndDate > "' . $_date_1 . '"';
        $result2 = mysqli_query($link, $sql2);
        $_pvp_season = '';
        $_pvp_begin_date = '';
        $_pvp_end_date = '';
        $_pvp_dates = '';
        while ($data2 = mysqli_fetch_array($result2)) {
            $_pvp_season = 'Продолжается '.$data2['Season'];
            $_pvp_begin_date = $data2['BeginDate'];
            $_pvp_end_date = $data2['EndDate'];
            $_pvp_dates = TwoDates(strtotime($_pvp_begin_date), strtotime($_pvp_end_date));
        }
        $_first_flag_pvp = 0;
    }
    // Неделя окончания ПвП сезона
    $sql2 = 'SELECT * FROM PvP_Seasons WHERE EndDate = "' . $_date_7 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_pvp_season_e = '';
    $_pvp_begin_date_e = '';
    $_pvp_end_date_e = '';
    $_pvp_dates_e = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_pvp_season_e = 'Окончание '.$data2['Season'];
        $_pvp_begin_date_e = $data2['BeginDate'];
        $_pvp_end_date_e = $data2['EndDate'];
        //$_camp_dates = TwoDates(strtotime($_camp_begin_date), strtotime($_camp_end_date));
    }
    if ($_pvp_season <> '') {
        if ($_pvp_season_e <> '') {
            $_pvp_season = $_pvp_season_e;
        } else {

        }
    } else {
        $_pvp_season = $_pvp_season_e;
    }
    // Неделя появления мифика Сезона ПвП
    $sql2 = 'SELECT * FROM PvP_Seasons WHERE DateMithic = "' . $_date_1 . '"';
    $result2 = mysqli_query($link, $sql2);
    $_pvp_season_m = '';
    $_pvp_mythic = '';
    while ($data2 = mysqli_fetch_array($result2)) {
        $_pvp_season_m = '<br>Мифик PvP-сезона';
        $_pvp_mythic = $data2['NameMithic'];
    }
    $_pvp_season .= '<br>' . $_pvp_dates . $_pvp_season_m .' '.$_pvp_mythic;
    //---------- ВЫВОД СТРОКИ В ТАБЛИЦУ
    $mytext .= '<tr><td><span class="bold large blue">' . $_week_event . '</span><br><span class="small blue italic">' . TwoDates($_date_strtotime_1, $_date_strtotime_7)  . '</span></td>';
    //$mytext .=      '<br><br><span class="bold">' . $_kingdom . '</span></td>';
    $mytext .= '<td>' . $_campaign . '<br>' . $_camp_dates . '</td>'; // Кампании
    $mytext .= '<td>' . $_pvp_season .  '</td>'; // ПвП Сезоны
    $mytext .= '</tr>';
    $_first_flag_camp = 0;
    $_first_flag_pvp = 0;
}
$mytext .= '</table><br>';
//***************************************************************************************************************************
$mytext .= '</body></html>';
//*****************************************************************
// Переводчик
//*****************************************************************
$mytext = str_replace('(Cannot detect ownershipif a weapon has no upgrades)', '', $mytext);
/*
$sql = 'SELECT Wordgow.ID, Wordgow.NameItem as NameEn, Wordgow.Rarity, Wordgow_ru.NameItem as NameRu 
    FROM Wordgow 
    JOIN Wordgow_ru ON Wordgow.ID = Wordgow_ru.ID WHERE Wordgow.Item="Kingdom"';
$result = mysqli_query($link, $sql);
while($data = mysqli_fetch_array($result)){ 
    $mytext = str_replace($data['NameEn'], $data['NameRu'], $mytext);
}
*/

$mytext = str_replace('&&1', 'Пн', $mytext);
$mytext = str_replace('&&2', 'Вт', $mytext);
$mytext = str_replace('&&3', 'Ср', $mytext);
$mytext = str_replace('&&4', 'Чт', $mytext);
$mytext = str_replace('&&5', 'Пт', $mytext);
$mytext = str_replace('&&6', '<span class="red bold">Сб</span>', $mytext);
$mytext = str_replace('&&7', '<span class="red bold">Вс</span>', $mytext);
//---------------------------------------------------------------------------------------------------------------
echo $mytext . '<br>';
mysqli_close($link);
//---------------------------------------------------------------------------------------------------------------
function trans($_word)
{
    global $link;
    $sql = 'SELECT Wordgow.ID, Wordgow.NameItem as NameEn, Wordgow.Rarity, Wordgow_ru.NameItem as NameRu 
    FROM Wordgow 
    JOIN Wordgow_ru ON Wordgow.ID = Wordgow_ru.ID WHERE Wordgow.NameItem = "' . $_word . '"';
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_array($result);
    return $data['NameRu'];
}

function translate_types_troop($_word)
{ // Tribe-Tribe_ru
    global $link;
    if ($_word <> '') {
        if ($_word == 'No Troop Type') {
            return '';
        } else {
            $_pos = strpos($_word, ',');
            if ($_pos == false) { // в слове нет запятой
                $sql2 = 'SELECT * FROM Basic_Translate WHERE Tribe = "' . addslashes($_word) . '"';
                $result2 = mysqli_query($link, $sql2);
                while ($data2 = mysqli_fetch_array($result2)) {
                    $_tribe_ru = $data2['Tribe_ru'];
                }
                return mb_strtolower($_tribe_ru);
            } else { // в слове есть запятая и ее позиция $_pos
                $_tribe_0 = substr($_word, 0, $_pos);
                $_tribe_1 = substr($_word, $_pos + 2);
                $sql2 = 'SELECT * FROM Basic_Translate WHERE Tribe = "' . addslashes($_tribe_0) . '"';
                $result2 = mysqli_query($link, $sql2);
                while ($data2 = mysqli_fetch_array($result2)) {
                    $_tribe_ru_0 = $data2['Tribe_ru'];
                } 
                if ($_tribe_1 == 'Immortal') {
                    $_tribe_ru_1 = 'бессмертный';
                } else {
                $sql2 = 'SELECT * FROM Basic_Translate WHERE Tribe = "' . addslashes($_tribe_1) . '"';
                $result2 = mysqli_query($link, $sql2);
                while ($data2 = mysqli_fetch_array($result2)) {
                    $_tribe_ru_1 = $data2['Tribe_ru'];
                }
                }
                return mb_strtolower($_tribe_ru_0 . ', ' . $_tribe_ru_1);

            }
        }
    } else {
        return '';
    }
}


function translateMon($_Mon)
{
    $a = $_Mon;
    $_tr = match ($a) {
        'Jan' => 'января',
        'Feb' => 'февраля',
        'Mar' => 'марта',
        'Apr' => 'апреля',
        'May' => 'мая',
        'Jun' => 'июня',
        'Jul' => 'июля',
        'Aug' => 'августа',
        'Sep' => 'сентября',
        'Oct' => 'октября',
        'Nov' => 'ноября',
        'Dec' => 'декабря',
        default => '',
    };
    return $_tr;
}

function NumbMon($_Mon)
{
    $a = $_Mon;
    $_tr = match ($a) {
        '01' => 'январь',
        '02' => 'февраль',
        '03' => 'март',
        '04' => 'апрель',
        '05' => 'май',
        '06' => 'июнь',
        '07' => 'июль',
        '08' => 'август',
        '09' => 'сентябрь',
        '10' => 'октябрь',
        '11' => 'ноябрь',
        '12' => 'декабрь',
        default => '',
    };
    return $_tr;
}
// $_date_5t = date('d', $_date_5).' '.translateMon(date('M', $_date_5));
function TwoDates($_date1, $_date2)
{
    $_day1 = date('d', $_date1);
    if (substr($_day1, 0, 1) == 0) {
        $_day1 = substr($_day1, 1);
    }
    $_day2 = date('d', $_date2);
    if (substr($_day2, 0, 1) == 0) {
        $_day2 = substr($_day2, 1);
    }
    if (date('M', $_date1) == date('M', $_date2)) {
        return $_day1 . '-' . $_day2 . ' ' . translateMon(date('M', $_date1));
    } else {
        return $_day1 . ' ' . translateMon(date('M', $_date1)) . ' - ' . $_day2 . ' ' . translateMon(date('M', $_date2));
    }
}
// =ДАТА(G5;H5;1)+День_недели-ДЕНЬНЕД(ДАТА(G5;H5;1);2)+(Порядк_номер-(День_недели>=ДЕНЬНЕД(ДАТА(G5;H5;1);2)))*7
// 
function RusDateToSql($_text)
{
    if (substr_count($_text, '-') > 0) {
        $_d = mb_substr($_text, 4, 2);
        $_m = T4(mb_substr($_text, 0, 3));
        $_d2 = mb_substr($_text, 13, 2);
        $_m2 = T4(mb_substr($_text, 9, 3));
        $_date1 = '2025-' . $_m . '-' . $_d;
        $_date2 = '2025-' . $_m2 . '-' . $_d2;
        $seconds = abs(strtotime($_date1) - strtotime($_date2));
        $_date[0] = $_date1;
        $_date[1] = round($seconds / 86400, 0);
    } else {
        $_d = mb_substr($_text, 4);
        $_m = T4(mb_substr($_text, 0, 3));
        $_date[0] = '2025-' . $_m . '-' . $_d;
        $_date[1] = 1;
    }

    return $_date;
}

function T4($_Mon)
{
    $a = $_Mon;
    $_tr = match ($a) {
        'янв' => '01',
        'фев' => '02',
        'мар' => '03',
        'апр' => '04',
        'май' => '05',
        'июн' => '06',
        'июл' => '07',
        'авг' => '08',
        'сен' => '09',
        'окт' => '10',
        'ноя' => '11',
        'дек' => '12',
        default => '',
    };
    return $_tr;
}
