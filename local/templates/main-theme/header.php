<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
use Bitrix\Main\Page\Asset;
?>
<div id="panel"><? $APPLICATION->ShowPanel();?></div>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $APPLICATION->ShowHead() ?>
    <meta charset="UTF-8">
    
    <title><?php $APPLICATION -> ShowTitle() ?></title>

    <?php 
    
        Asset::getInstance() -> addCss(DEFAULT_TEMPLATE_PATH . '/assets/style/recet.css');
        Asset::getInstance() -> addCss(DEFAULT_TEMPLATE_PATH . '/assets/style/style.css');
        Asset::getInstance() -> addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        Asset::getInstance() -> addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">');
    ?>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="header">
        <div class="container container__header">
            <nav class="header-logo">
                <ul>
                    <li class="header-logo-name"><a href="/"class="head-logo"><i class="fa-solid fa-circle" ></i>РУБЛЬБАНК</a></li>
                    <li><a href="">Частным клиентам</a></li>
                    <li><a href="">Бизнесу</a></li>
                    <li><a href="">Самозанятым</a></li>
                </ul>
                <ul>
                    <li><a href="#!" class=underline>Определения и банкоматы</a></li>
                    <li><a href="#!" class="blue-link">Рубльбанк онлайн</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="header-link">
        <div class="container"> 
            <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu",
		"MENU_THEME" => "site"
	),
	false
);?>
            <!-- <nav class="links-nav">
               <ul>
                <li>Ипотека</li>
                <li>Кредиты</li>
                <li>Вклады</li>
                <li>Карты</li>
                <li>Инвестиции</li>
                <li>Переводы</li>
                <li>Страхование</li>
                <li>Рефинансирование</li>
                <li>Сервисы</li>
            </ul> 
            </nav> -->
        </div>
    </section>
    <div class="container">

 


        