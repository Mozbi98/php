<?php
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

// function viewSystemUnit(): array {
//     $systemUnit = [
//        [ 
//            [
//                 'element' => 'CPU',
//                 '1' => 'AMD Ryzen 7 1700X',
//                 '2' => 'AM4',
//                 '3' => '3.4 GHz, Cores:8',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'background-color' => 'blue',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'red'
//             ],
//             [
//                 'element' => 'CPU',
//                 '1' => 'Intel Core i7-8700',
//                 '2' => 'Soket 1151',
//                 '3' => '3.2 GHz, Cores:8',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'background-color' => 'blue',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'red'
//             ]
//         ],
//         [
//             [
//                 'element' => 'motherboard',
//                 '1' => 'MSI B450 TOMAHAWK',
//                 '2' => 'AM4',
//                 '3' => 'DDR4',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'background-color' => 'red',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'green'
//             ],
//             [
//                 'element' => 'motherboard',
//                 '1' => 'ASRock J3455M',
//                 '2' => 'Integrated CPU',
//                 '3' => 'DDR3',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'background-color' => 'red',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'green'
//             ]
//         ],
//         [   [
//                 'element' => 'RAM',
//                 '1' => 'Corsair DDR4 3000Mhz',
//                 '2' => 'DDR4',
//                 '3' => '8GB',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'background-color' => 'green',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'grey'
//             ]
//         ],
//         [
//             [
//                 'element' => 'HDD',
//                 '1' => 'Kingston SSDNow A400 TLC',
//                 '2' => 'SSD',
//                 '3' => '240GB',
//                 'background-color' => 'orange',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'blue'
//             ]
//         ],
//         [
//             [
//                 'element' => 'PS',
//                 '1' => 'CHIEFTEC Power Smart',
//                 '2' => '1450W', 
//                 'background-color' => 'grey',
//                 'width' => '150px',
//                 'height' => '200px',
//                 'float' => 'left',
//                 'margin' => '10px',
//                 'color' => 'orange'
//             ]
//         ]
//     ];
//     return $systemUnit;
// }

// function getRandom($arr) {
//     $rand = rand(0, 1);
//     return $rand;
// }

// function printResult() {
//     $systemUnit = viewSystemUnit(); 
//     // $getRandomInt = getRandom(0, 1);
//     $res;
//     $result;
//     foreach($systemUnit as $unit) {
//         $randomElement = getRandom($unit);
//         for($i = 0; $i < count($unit); $i++) {
//             echo '<div style="color: ' . $unit[$i]["color"] . 
//             '; background-color: ' . $unit[$i]["background-color"] . 
//             '; width: ' . $unit[$i]["width"] . 
//             '; float: ' . $unit[$i]["float"] . 
//             '; margin: ' . $unit[$i]["margin"] .
//             '; height: ' . $unit[$i]["height"] . 
//             '"><h3>' . $unit[$i]['1'] . '</h3>
//             <h3>' . $unit[$i]['2'] . '</h3>
//             <h3>' . $unit[$i]['3'] . '</h3>
//             </div>';
//             $result[] .= $unit[$i][1] . '<br>';
//             $res = array_unique($result);
//         }
//     }
//     foreach($res as $k => $v) {
//         $resultat .= $v;
//     }
//     echo '<div style="float:left; width:150px; height:200px; 
//     background-color:black; color:white">' . $resultat . '</div>';

// }

// printResult();


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
    
    // function getRandomint($min, $max) {
        //     return rand($min, $max);
        // }
        
    $result = [];
    
    function getRandomElement($arr) {
        $rand = rand(0, 1);
        return $arr[$rand];
    }

    $cpu = [
        [
            'element' => 'CPU',
            '1' => 'AMD Ryzen 7 1700X',
            '2' => 'AM4',
            '3' => '3.4 GHz, Cores:8',
            'width' => '150px',
            'height' => '200px',
            'background-color' => 'blue',
            'float' => 'left',
            'margin' => '10px',
            'color' => 'red'
        ],
        [
            'element' => 'CPU',
            '1' => 'Intel Core i7-8700',
            '2' => 'Soket 1151',
            '3' => '3.2 GHz, Cores:8',
            'width' => '150px',
            'height' => '200px',
            'background-color' => 'blue',
            'float' => 'left',
            'margin' => '10px',
            'color' => 'red'
            ]
        ];
        
        foreach($cpu as $k => $v) {
            echo '<div style="color: ' . $v["color"] . 
            '; background-color: ' . $v["background-color"] . 
            '; width: ' . $v["width"] . 
            '; float: ' . $v["float"] . 
            '; margin: ' . $v["margin"] .
            '; height: ' . $v["height"] . 
            '"><h3>' . $v['1'] . '</h3>
            <h3>' . $v['2'] . '</h3>
            <h3>' . $v['3'] . '</h3>
            </div>';
        }
        array_push($result, getRandomElement($cpu)['1']);
        
    $motherboard = [
        [
            'element' => 'motherboard',
            '1' => 'MSI B450 TOMAHAWK',
            '2' => 'AM4',
            '3' => 'DDR4',
            'width' => '150px',
            'height' => '200px',
            'background-color' => 'red',
            'float' => 'left',
            'margin' => '10px',
            'color' => 'green'
        ],
        [
            'element' => 'motherboard',
            '1' => 'ASRock J3455M',
            '2' => 'Integrated CPU',
            '3' => 'DDR3',
            'width' => '150px',
            'height' => '200px',
            'background-color' => 'red',
            'float' => 'left',
            'margin' => '10px',
            'color' => 'green'
            ]
    ];
    foreach($motherboard as $k => $v) {
        echo '<div style="color: ' . $v["color"] . 
        '; background-color: ' . $v["background-color"] . 
        '; width: ' . $v["width"] . 
        '; float: ' . $v["float"] . 
        '; margin: ' . $v["margin"] .
        '; height: ' . $v["height"] . 
        '"><h3>' . $v['1'] . '</h3>
        <h3>' . $v['2'] . '</h3>
        <h3>' . $v['3'] . '</h3>
        </div>';
    }
    array_push($result, getRandomElement($motherboard)['1']);
    
    $ram = [
        [
        'element' => 'RAM',
        '1' => 'Corsair DDR4 3000Mhz',
        '2' => 'DDR4',
        '3' => '8GB',
        'width' => '150px',
        'height' => '200px',
        'background-color' => 'green',
        'float' => 'left',
        'margin' => '10px',
        'color' => 'grey'
        ]
    ];
    
    foreach($ram as $elem) {
        echo '<div style="color: ' . $elem["color"] . 
        '; background-color: ' . $elem["background-color"] . 
        '; width: ' . $elem["width"] . 
        '; float: ' . $elem["float"] . 
        '; margin: ' . $elem["margin"] .
        '; height: ' . $elem["height"] . 
        '"><h3>' . $elem['1'] . '</h3>
        <h3>' . $elem['2'] . '</h3>
        <h3>' . $elem['3'] . '</h3>
        </div>';
    }
    array_push($result, $elem['1']);

    $hdd = [
      [
          'element' => 'HDD',
          '1' => 'Kingston SSDNow A400 TLC',
          '2' => 'SSD',
          '3' => '240GB',
          'background-color' => 'orange',
          'width' => '150px',
          'height' => '200px',
          'float' => 'left',
          'margin' => '10px',
          'color' => 'blue'
      ]
    ];
    foreach($hdd as $elem) {
        echo '<div style="color: ' . $elem["color"] . 
        '; background-color: ' . $elem["background-color"] . 
        '; width: ' . $elem["width"] . 
        '; float: ' . $elem["float"] . 
        '; margin: ' . $elem["margin"] .
        '; height: ' . $elem["height"] . 
        '"><h3>' . $elem['1'] . '</h3>
        <h3>' . $elem['2'] . '</h3>
        <h3>' . $elem['3'] . '</h3>
        </div>';
    }
    array_push($result, $elem['1']);
    $pc = [
        [
            'element' => 'PS',
            '1' => 'CHIEFTEC Power Smart',
            '2' => '1450W', 
            'background-color' => 'grey',
            'width' => '150px',
            'height' => '200px',
            'float' => 'left',
            'margin' => '10px',
            'color' => 'orange'
        ]
    ];
    foreach($pc as $elem) {
        echo '<div style="color: ' . $elem["color"] . 
        '; background-color: ' . $elem["background-color"] . 
        '; width: ' . $elem["width"] . 
        '; float: ' . $elem["float"] . 
        '; margin: ' . $elem["margin"] .
        '; height: ' . $elem["height"] . 
        '"><h3>' . $elem['1'] . '</h3>
        <h3>' . $elem['2'] . '</h3>
        <h3>' . $elem['3'] . '</h3>
        </div>';
    }
    array_push($result, $elem['1']);
    echo '<div style="float:left; width:150px; height:200px; 
    background-color:black; color:white">' . implode('<br>', $result) . '</div>';
    