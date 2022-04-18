<?php

require "../../vendor/autoload.php";

//use Jopa\QueryBuilder;

//$db = new QueryBuilder();


//самый простой роутинг, пока закоменчу
//if($_SERVER['REQUEST_URI'] == '/home'){
//	require '../../mycomponent/controllers/homepage.php';
//}


//exit;


$templates = new League\Plates\Engine('../../mycomponent/views'); 
//**ЕСЛИ БЫ ПОДКЛЮЧАЛИ В ДРУГОМ МЕСТЕ, В КОНТРОЛЛЕРЕ,ТО ВСЁ РАВНО ПУТЬ УКАЗЫВАЛИ БЫ ОТНОСИТЕЛЬНО ЭТОГО ФАЙЛА ИНДЕКС,ПОТОМУ ЧТО ЗДЕСЬ ПОДКЛЮЧАЮТСЯ МОИ КОНТРОЛЛЕРЫ



// Render a template - Эту инфу передаём в вид. 'КУДА ПЕРЕДАЁМ/КАКОЙ ФАЙЛ', ['КАКАЯ ПЕРЕМЕННАЯ' => 'ЧТО В ПЕРЕМЕННОЙ']

echo $templates->render('about', ['title' => 'Описание']);


?>