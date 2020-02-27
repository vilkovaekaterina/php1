<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
</head>
<body>
    <h1>Домашнее задание 3</h1>
    <div>
        <?php
        //Task1
        echo ' <br>';
        $i=0;
        while ($i<100){
            if ($i%3===0){
                echo $i.'   ';
            };
            $i++;
        };


        //Task2
        echo '<br> <br> <br>';
        $j=0;
        do{
            if ($j ===0 ){
                echo $j.' -ноль. <br>';
            }
            else if($j % 2===0){
                echo $j.' -четное число. <br>';
            }
            else {
                echo $j.' -нечетное число. <br>';
            };
            $j++;
        } while ($j <= 10);

        //Task 3
        echo '<br> <br> <br>';
        $cities = [
            'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
            'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
            'Ульяновская область:' => ['Ульяновск', 'Сенгилей', 'Димитровград']
        ];
        function showCities($arr)
        {
            if (!is_array($arr)) {
                echo 'Ошибка данных';
            }
            foreach ($arr as $key => $value) {
                echo $key . '<br>';
                for ($i = 0; $i < count($arr[$key]); $i++) {
                    if ($i == count($arr[$key]) - 1) {
                        echo $arr[$key][$i] . '.' . '<br>';
                    } else {
                        echo $arr[$key][$i] . ', ';
                    };
                };
            };
        };
        showCities($cities);

        //Task 4
        echo '<br> <br> <br>';
        function translate($string)
        {
            if (!is_string($string)) {
                return 'Ошибка';
            }

            $ruChars = 'а	б	в	г	д	е	ё	ж	з	и	й	к	л	м	н	о	п	р	с	т	у	ф	х	ц	ч	ш	щ	ъ	ы	ь	э	ю	я';
            $enChars = 'a	b	v	g	d	e	e	zh	z	i	y	k	l	m	n	o	p	r	s	t	u	f	kh	ts	ch	sh	sch	’ 	y	’ 	e	yu	ya';

            //Склеивание строк в один массив
            $charsArr = array_combine(explode('	', $ruChars), explode('	', $enChars));
            //Исходная строка в массив
            $stringArr = preg_split('//u',mb_strtolower($string), -1, PREG_SPLIT_NO_EMPTY);

            $resultArr = [];

            //перебираем строку и для каждой буквы ищем совпадение в массиве перевода
            for ($i = 0; $i < count($stringArr); $i++) {
                foreach ($charsArr as $key => $value) {
                    if ($stringArr[$i] === $key) {
                        array_push($resultArr, $value);
                        break;
                        //если встречаются знаки пунктуации или пробелы, добавляем без обработки
                    } else if (preg_match('/[[:punct:]]|[[:space:]]|\d/', $stringArr[$i])){
                        array_push($resultArr, $stringArr[$i]);
                        break;
                    }
                }
            };

            //выводим на экран
            return implode($resultArr);
        };
        echo translate('Вот тут конечно пришлось подумать,без гугла не обошлось');

        //Task 5
        echo '<br> <br> <br>';
        function change($string){
            if(!is_string($string)){
                echo 'Ошибка <br>';
            } else {
                $string = preg_replace('/\s/','_',$string);
            };
            return $string;
        };
        echo change ('Что-то написано здесь');

        //Task 6
        $menuItems=[
            'Menu',
            'Photo',
            'Video',
            'About'=>['History','Contacts','Us']
        ];
        function menuRender($arr)
        {
            if (!is_array($arr)) {
                return 'Ошибка';
            }

            $renderArr[] = '<ul>';
            foreach ($arr as $key => $value) {
                if (is_array($value)) {
                    $renderArr[] = '<li>'.$key . menuRender($value) . '</li>';
                } else {
                    $renderArr[] = '<li>' . $value . '</li>';
                }
            }
            $renderArr[] = '</ul>';

            return implode($renderArr);
        }

        echo menuRender($menuItems);

        //Task 7
        echo '<br> <br> <br>';
        for ($i = 0; $i < 10; print $i++ . ' ') {};

        //Task 9
        echo '<br> <br> <br>';
        echo change(translate('Строка для 9-го задания'));
        ?>
    </div>
</body>
<footer>
    <?php echo date('D/M/Y')?>
</footer>
</html>
