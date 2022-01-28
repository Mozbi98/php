<?php
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
    