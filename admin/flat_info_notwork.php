<?
/* 

* [brief] - выводит информацию на основной странице
* [detail] - выводит информацию в выезжающем диалоговом окне
* [brief][status] - может быть только трех типов: свободна, в резерве, куплена.

*/

$flat_01 = [
	"brief" => [
		"area" => "100",
		"status" => "Свободна",
	],
	"detail" => [
		"plan" => "/omega/order/section_one/sheme.png",
		"features" => [
			flat_number => "1",
			section_number => "1",
			levels_quantity => "2",
			floor => "1 и 2",
			rooms_quantity => "2",
			bathroom_quantity => "1",
			flat_area => [
				level_one => "5,44",
				level_two => "67,32",
				summary => "72,76",
			],
			price_meter => "1.345,15",
			price_summary => "107.905,17",
		],
		"slider" => [
			slide_01 = "/omega/order/section_one/img_chania.jpg",
			slide_02 = "/omega/order/section_one/img_flower.jpg",
			slide_03 = "/omega/order/section_one/img_chania.jpg",
			slide_04 = "/omega/order/section_one/img_flower.jpg",
		],
	],
];



echo $flat01["brief"]["area"];
?>