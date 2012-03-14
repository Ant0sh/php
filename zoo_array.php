<?php
$zoo = array(
    'title' => 'Zoopark 1',
    'animal' => array(
        0 => array(
            'typy_id' => 1,
            'name' => 'Гуппи',
            'sex_id' => 3,
            'age' => 1,
            'color' => 'зеленая',
            'birthday' => '2011-03-08',
            'date_enter' => '2011-06-15 13:07:45'
        ),
        1 => array(
            'typy_id' => 1,
            'name' => 'Немо',
            'sex_id' => 3,
            'age' => 1,
            'color' => 'синия',
            'birthday' => '2011-07-15',
            'date_enter' => '2011-06-17 15:03:07'
        ),
        2 => array(
            'typy_id' => 2,
            'name' => 'Дороттело',
            'sex_id' => 2,
            'age' => 12,
            'color' => 'синий',
            'birthday' => '2002-11-17',
            'date_enter' => '2011-06-14 09:15:15'
        ),
        3 => array(
            'typy_id' => 1,
            'name' => 'Трехочковая',
            'sex_id' => 3,
            'age' => 5,
            'color' => 'желтая',
            'birthday' => '2007-12-31',
            'date_enter' => '2010-05-07 10:19:48'
        ),
        4 => array(
            'typy_id' => 1,
            'name' => 'Гуппи',
            'sex_id' => 3,
            'age' => 3,
            'color' => 'зеленая',
            'birthday' => '2009-09-12',
            'date_enter' => '2010-06-15 08:47:56'
        ),
        5 => array(
            'typy_id' => 1,
            'name' => 'Кря-Кря',
            'sex_id' => 3,
            'age' => 3,
            'color' => 'серая',
            'birthday' => '2009-07-18',
            'date_enter' => '2010-08-17 15:45:54'
        ),
        6 => array(
            'typy_id' => 1,
            'name' => 'Крю-Крю',
            'sex_id' => 2,
            'age' => 2,
            'color' => 'зеленая',
            'birthday' => '2010-02-04',
            'date_enter' => '2010-08-20 14:15:56'
        ),
        7 => array(
            'typy_id' => 1,
            'name' => 'Лапчатый',
            'sex_id' => 2,
            'age' => 1,
            'color' => 'белый',
            'birthday' => '2011-11-11',
            'date_enter' => '2011-11-12 10:12:36'
        ),
        8 => array(
            'typy_id' => 1,
            'name' => 'Педальный',
            'sex_id' => 2,
            'age' => 2,
            'color' => 'серый',
            'birthday' => '2010-10-12',
            'date_enter' => '2010-09-15 16:42:13'
        ),
        9 => array(
            'typy_id' => 1,
            'name' => 'Хрустальный',
            'sex_id' => 2,
            'age' => 1,
            'color' => 'оранжевый',
            'birthday' => '2011-05-06',
            'date_enter' => '2011-06-07 17:48:03'
        )
    ),
    'animal_description' => array(
        0 => 'Рыбка Гуппи зеленого цвета.',
        1 => 'Рыбка Немо синего цвета.',
        2 => 'Черепаха Доротелло синего цвета.',
        3 => 'Змея Трехочковая желтого цвета.',
        4 => 'Змея Гуппи зеленого цвета.',
        5 => 'Утка Кря-Кря серого цвета.',
        6 => '',
        7 => 'Гусь Лапчатый белого цвета.',
        8 => 'Гусь Педальный серого цвета.',
        9 => 'Гусь Хрустальный оранжевого цвета.'
    ),
    'type_location' => array(
        0 => array(
            'type' => 'рыба',
            'location_id' => 2
        ),
        1 => array(
            'type' => 'черепаха',
            'location_id' => 2
        ),
        2 => array(
            'type' => 'змея',
            'location_id' => 3
        ),
        3 => array(
            'type' => 'утка',
            'location_id' => 4
        ),
        4 => array(
            'type' => 'гусь',
            'location_id' => 4
        )
    ),
    'type_description' => array(
        0 => 'Рыбы (лат. Pisces)...',
        1 => 'Черепахи (лат. Testudines)...',
        2 => 'Змеи (лат. Serpentes)...',
        3 => 'Утка, несколько родов птиц семейства утиных...',
        4 => 'Гуси (лат. Anser)...',
    ),
    'location_schedule' => array(
        0 => array(
            'location' => 'Фургон',
            'time' => 'Не работает.',
            'date_construction' => '2007-03-12',
            'date_open' => '0000-00-00'
        ),

        1 => array(
            'location' => 'Аквариум',
            'time' => '9:00 - 12:00',
            'date_construction' => '2011-04-00',
            'date_open' => '2011-06-15'
        ),

        2 => array(
            'location' => 'Террариум',
            'time' => '10:00 - 15:00',
            'date_construction' => '2010-09-00',
            'date_open' => '2010-05-07'
        ),
        3 => array(
            'location' => 'Пруд',
            'time' => '8:00 - 20:00',
            'date_construction' => '2009-05-00',
            'date_open' => '2010-08-16'
        )
    ),
    'sex' => array(
        0 => array(
            'sex' => 'Н',
            'description' => 'Нет'
        ),
        1 => array(
            'sex' => 'М',
            'description' => 'Самец'
        ),
        2 => array(
            'sex' => 'Ж',
            'description' => 'Самка'
        ),
        3 => array(
            'sex' => 'М',
            'description' => 'Мужчина'
        ),
        4 => array(
            'sex' => 'Ж',
            'description' => 'Женщина'
        )
    ),
    'visitor' => array(
        0 => array(
            'name' => 'Куликова Елена',
            'sex_id' => 5,
            'age' => 25,
            'date_visit' => '2011-06-17 15:03:07'
        ),
        1 => array(
            'name' => 'Буканов Влад',
            'sex_id' => 4,
            'age' => 27,
            'date_visit' => '2011-06-17 15:04:09'
        ),
        2 => array(
            'name' => 'Камнева Анастасия',
            'sex_id' => 5,
            'age' => 19,
            'date_visit' => '2011-06-19 12:23:09'
        ),
        3 => array(
            'name' => 'Карпенко Катя',
            'sex_id' => 5,
            'age' => 22,
            'date_visit' => '2011-06-23 16:34:07'
        ),
        4 => array(
            'name' => 'Никитина Анастасия',
            'sex_id' => 5,
            'age' => 21,
            'date_visit' => '2011-07-07 10:43:45'
        ),
        5 => array(
            'name' => 'Звягинцева Наталья',
            'sex_id' => 5,
            'age' => 22,
            'date_visit' => '2011-07-07 10:44:34'
        ),
        6 => array(
            'name' => 'Занятьева Александра',
            'sex_id' => 5,
            'age' => 31,
            'date_visit' => '2011-07-12 15:13:56'
        ),
        7 => array(
            'name' => 'Серов Дима',
            'sex_id' => 4,
            'age' => 22,
            'date_visit' => '2011-08-13 15:53:34'
        ),
        8 => array(
            'name' => 'Маркова Марина',
            'sex_id' => 5,
            'age' => 44,
            'date_visit' => '2011-09-17 15:43:07'
        ),
        9 => array(
            'Макшаев Вячеслав',
            'sex_id' => 4,
            'age' => 45,
            'date_visit' => '2011-09-17 15:44:14'
        )
    ),
    'photographer' => array(
        0 => array(
            'name' => 'Криницына Юлия',
            'sex_id' => '5',
            'age' => 23,
            'experiens' => 6
        ),
        1 => array(
            'name' => 'Михалев Петр',
            'sex_id' => '4',
            'age' => 35,
            'experiens' => 9
        ),
        2 => array(
            'name' => 'Филимонов Иван',
            'sex_id' => '4',
            'age' => 45,
            'experiens' => 25
        )
    ),
    'photo' => array(
        0 => array(
            'photo_datetime' => '2011-06-17 15:23:47',
            'price' => 3000
        ),
        1 => array(
            'photo_datetime' => '2011-06-17 15:33:17',
            'price' => 3000
        ),
        2 => array(
            'photo_datetime' => '2011-06-17 15:35:27',
            'price' => 5000
        ),
        3 => array(
            'photo_datetime' => '2011-06-23 16:44:34',
            'price' => 3000
        ),
        4 => array(
            'photo_datetime' => '2011-07-07 11:03:12',
            'price' => 5000
        ),
        5 => array(
            'photo_datetime' => '2011-07-07 10:58:17',
            'price' => 3000
        ),
        6 => array(
            'photo_datetime' => '2011-08-13 15:57:43',
            'price' => 3000
        ),
        7 => array(
            'photo_datetime' => '2011-08-13 16:06:38',
            'price' => 3000
        ),
        8 => array(
            'photo_datetime' => '2011-09-17 15:49:34',
            'price' => 5000
        ),
        9 => array(
            'photo_datetime' => '2011-09-17 15:54:27',
            'price' => 3000
        ),
        10 => array(
            'photo_datetime' => '2011-09-17 16:03:25',
            'price' => 3000
        ),
        11 => array(
            'photo_datetime' => '2011-09-17 16:17:07',
            'price' => 3000
        ),
        12 => array(
            'photo_datetime' => '2011-09-17 16:33:56',
            'price' => 5000
        )
    ),
    'visitor_photo_photographer' => array(
        1 => array(
            'visitor_id' => 1,
            'photo_id' => 1,
            'photographer_id' => 1
        ),
        2 => array(
            'visitor_id' => 2,
            'photo_id' => 2,
            'photographer_id' => 1
        ),
        3 => array(
            'visitor_id' => 1,
            'photo_id' => 3,
            'photographer_id' => 2
        ),
        4 => array(
            'visitor_id' => 2,
            'photo_id' => 3,
            'photographer_id' => 2
        ),
        5 => array(
            'visitor_id' => 1,
            'photo_id' => 3,
            'photographer_id' => 2
        ),
        6 => array(
            'visitor_id' => 2,
            'photo_id' => 3,
            'photographer_id' => 2
        ),
        7 => array(
            'visitor_id' => 4,
            'photo_id' => 4,
            'photographer_id' => 1
        ),
        8 => array(
            'visitor_id' => 5,
            'photo_id' => 5,
            'photographer_id' => 2
        ),
        9 => array(
            'visitor_id' => 6,
            'photo_id' => 5,
            'photographer_id' => 2
        ),
        10 => array(
            'visitor_id' => 5,
            'photo_id' => 6,
            'photographer_id' => 1
        ),
        11 => array(
            'visitor_id' => 8,
            'photo_id' => 7,
            'photographer_id' => 1
        ),
        12 => array(
            'visitor_id' => 8,
            'photo_id' => 8,
            'photographer_id' => 3
        ),
        13 => array(
            'visitor_id' => 9,
            'photo_id' => 9,
            'photographer_id' => 3
        ),
        14 => array(
            'visitor_id' => 10,
            'photo_id' => 9,
            'photographer_id' => 3
        ),
        15 => array(
            'visitor_id' => 9,
            'photo_id' => 10,
            'photographer_id' => 1
        ),
        16 => array(
            'visitor_id' => 10,
            'photo_id' => 11,
            'photographer_id' => 2
        ),
        17 => array(
            'visitor_id' => 10,
            'photo_id' => 12,
            'photographer_id' => 2
        ),
        18 => array(
            'visitor_id' => 9,
            'photo_id' => 13,
            'photographer_id' => 3
        )
    ),
    'animal_photo' => array(
        0 => array(
            'photo_id' => 1,
            'animal_id' => 5
        ),
        1 => array(
            'photo_id' => 2,
            'animal_id' => 6
        ),
        2 => array(
            'photo_id' => 3,
            'animal_id' => 8
        ),
        3 => array(
            'photo_id' => 3,
            'animal_id' => 9
        ),
        4 => array(
            'photo_id' => 4,
            'animal_id' => 3
        ),
        5 => array(
            'photo_id' => 5,
            'animal_id' => 10
        ),
        6 => array(
            'photo_id' => 6,
            'animal_id' => 4
        ),
        7 => array(
            'photo_id' => 7,
            'animal_id' => 0
        ),
        8 => array(
            'photo_id' => 8,
            'animal_id' => 1
        ),
        9 => array(
            'photo_id' => 9,
            'animal_id' => 6
        ),
        10 => array(
            'photo_id' => 10,
            'animal_id' => 0
        ),
        11 => array(
            'photo_id' => 11,
            'animal_id' => 10
        ),
        12 => array(
            'photo_id' => 12,
            'animal_id' => 9
        ),
        13 => array(
            'photo_id' => 13,
            'animal_id' => 0
        )
    )
);

echo "<h1>Вывод через print_r():</h1>";
echo "<pre>";
print_r($zoo);
echo "</pre>";

echo "<h1>Вывод через foreach:</h1>";
uasort($zoo['animal'], 'sortir');

echo "<pre>";
foreach($zoo as $k => $v) {
    echo "<h2>".$k."</h2>";
    if(is_array($v)) {
        foreach($v as $k1 => $v1) {
            echo "\t".$k1." = ".$v1;
            if(is_array($v1)) {
                echo "<br>";
                foreach($v1 as $k2 => $v2) {
                    if($k2 == "color") {
                        $v2 = strtoupper($v2);
                    }
                    echo "\t\t".$k2." = ".$v2."<br>";
                }
            }
            echo "<br>";
        }
    }
    else {
        echo "\t".$k." = ".$v;
    }
}
echo "</pre>";


echo "<h1>Вывод рекурсией:</h1>";
echo "<pre>";
uasort($zoo['animal'], 'sortir');
rec_array($zoo);
echo "</pre>";

//рекурсивный вывод массива
function rec_array($arr, $count_arr=0) {
    if(is_array($arr)) {
        $i = ++$count_arr;
        foreach($arr as $k => $v) {
            while($i-1){
                echo "\t";
                $i--;
            }
            if($k === 'color') {
                $v = strtoupper($v);
            }
            echo $k." = ".$v."<br>";
            $i = $count_arr;
            if(is_array($v)) {
                rec_array($v, $count_arr);
            }
        }
        echo "<br>";
    }
}

//сравнение элементов массива по ключу
function sortir($a, $b) {
    $key = 'name';
    if($a[$key] == $b[$key]) {
        return 0;
    }
    if($a[$key] < $b[$key]) {
        return -1;
    }
    else {
        return 1;
    }
}