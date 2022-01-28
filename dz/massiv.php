<?php
// 1
// $arr = [1, 2, 7, 6, 9, 8, 3, 10, 4, 5];
// $sum = 0;
// $meen = 0;
// echo '<h2>';
// echo 'Элементы которые больше предыдущих: ';

// for($i = 1; $i < count($arr); $i++) {
//     if($arr[$i] > $arr[$i - 1]) {
//         echo $arr[$i];
//     }
//     $sum += $arr[$i];
// }
// echo '<br>';
// echo '</h2>';

// echo '<h5>';
// echo 'Сумма всех элементов: '. $sum. '<br>';
// $meen = $sum / count($arr);
// echo '</h5>';

// echo '<h5>';
// echo 'Среднее значение: '. $meen. '<br>';
// echo '</h5>';

// echo '<h4>';
// asort($arr);
// echo 'Сортировка: ';
// foreach($arr as $elem) {
//     if($elem % 2 !== 0) {
//         echo $elem;
//     }
// }
// echo '</h4>';

// 2
// $arrDate = [
//     '31-12-2018',
//     '16-01-2019',
//     '20-02-2019',
//     '21-02-2019',
//     '08-03-2019'
// ];
// echo '<h5>';
// for($i = 0; $i < count($arrDate) - 1; $i++) {
//     $data = abs(strtotime($arrDate[$i]) - strtotime($arrDate[$i + 1]));
//     echo $arrDate[$i]. ' - '. $arrDate[$i + 1]. ' - ';
//     echo $data / (60 * 60 * 24). 'days'. '<br>';
// }
// echo '</h5>';

// 3
// $array = [
//     'Text1' => 'Text',
//     'radio1' => 'Radio',
//     'checkbox1' => 'Checkbox',
//     'button1' => 'Button',
//     'text2' => 'Text',
//     'text3' => 'Text',
//     'radio2' => 'Radio',
//     'radio3' => 'Radio',
//     'checkbox2' => 'Checkbox',
//     'button2' => 'Button'
// ];


// foreach($array as $k => $v) {
//         echo '<input type='.$v.' value='.$k.'>'.'<br>';
// }

// 4
// function getFigures(): array {
//     $figures = [
//         ['name' => 'circle',
//          'width' => '40px',
//          'border-radius' => '50%',
//          'height' => '40px',
//          'background-color' => 'red',
//          'position' => 'absolute',
//          'top' => 25,
//          'left' => 25
//         ],
//         ['name' => 'square',
//         'width' => '40px',
//         'border-radius' => '0%',
//         'height' => '40px',
//         'background-color' => 'green',
//         'position' => 'absolute',
//         'top' => 60,
//         'left' => 60
//         ],
//         ['name' => 'square',
//         'width' => '40px',
//         'border-radius' => '20%',
//         'height' => '40px',
//         'background-color' => 'blue',
//         'position' => 'absolute',
//         'top' => 50,
//         'left' => 150
//         ]
//     ];
//     return $figures;
// }

//     function printElements() {
//         $figures = getFigures();
//         foreach($figures as $item) {
//                 echo '<div style="width: ' . $item["width"] . 
//                 '; height: ' . $item["height"] . 
//                 '; border-radius:' . $item["border-radius"] . 
//                 '; background-color:' . $item["background-color"] . 
//                 '; position:' . $item["position"] . 
//                 '; top:' . $item["top"] . 
//                 '; left:' . $item["left"] . 
//                 '"></div>';
//         }
//     }

//     printElements();


// 6
// $arrayBlock = [
//      [
//         'width' => '100%',
//         'height' => '20%',
//         'background-color' => 'red',
//         'color' => 'white',
//         'text' => 'Header'
//     ],
//     [
//         'width' => '100%',
//         'height' => '70%',
//         'background-color' => 'green',
//         'color' => 'grey',
//         'text' => 'Content'
//     ],
//     [
//         'width' => '100%',
//         'height' => '10%',
//         'background-color' => 'blue',
//         'color' => 'yellow',
//         'text' => 'Footer'
//     ]
// ];

// foreach($arrayBlock as $block) {
//     echo '<div style="width: ' . $block["width"] . 
//     '; height: ' . $block["height"] . 
//     '; background-color: ' . $block["background-color"] . 
//     '; color: ' . $block["color"] . 
//     '">' . $block["text"] . '</div>'; 
// }