<?php


$prod = array(160 => array('Catalog number' => '160',
            'Product name' => 'סכין פלדת אל-חלד עם ידית מעץ אגוז',
            'Items sold' => '1',
            'Price per item' => '80.0000',
            'Total sold' => '80',
        ),

    161 => array
        (
            'Catalog number' => '161',
            'Product name' => 'מסור אופינל 18 ס"מ',
            'Items sold' => '1',
            'Price per item' => '80.0000',
            'Total sold' => '80',
        )

);
echo "<pre>";
print_r($prod);

$str ='';
foreach ($prod as $key => $value) {
	$str .='<item>'; 
		foreach ($value as $keyval => $nodeVal) {
			$str .="<$keyval><![CDATA[$nodeVal]]></$keyval>";
		}
	$str .='</item>'; 
}

echo $str;
