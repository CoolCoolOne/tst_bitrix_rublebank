<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "карты");
$APPLICATION->SetTitle("Карты");
?><section class="section__card">
        <div class="container">
            <p class="head-section-card">
                Дебетовые карты
            </p>
            <div class="block-ruble-card">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/ruble-card.png" alt="">
                <div class="ruble-card-info">
                    <p class="head-info-card">
                        Рублькарта
                    </p>
                    
                        <ul>
                            <li>Моментальный выпуск</li>
                            <li>Бесплатное обслуживание</li>
                            <li>Кэшбэк до 2%</li>
                        </ul>
                    
                    <div class="button-banner">
                        <a href="#!" class="blue-button">Оформить карту</a>
                        <a href="#!" class="white-button">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="block-ruble-card">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/suoercard.png" alt="">
                <div class="ruble-card-info">
                    <p class="head-info-card">
                        Суперкарта
                    </p>
                    
                        <ul>
                            <li>Скидки до 20% на отели</li>
                            <li>Бесплатное обслуживание</li>
                            <li>Кешбэк до 11%</li>
                        </ul>
                    
                    <div class="button-banner">
                        <a href="#!" class="blue-button">Оформить карту</a>
                        <a href="#!" class="white-button">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="block-ruble-card">
                <img src="<?=DEFAULT_TEMPLATE_PATH?>/assets/img/travel-pic.png" alt="">
                <div class="ruble-card-info">
                    <p class="head-info-card">
                        Travel карта
                    </p>
                        <ul>
                            <li>Моментальный выпуск</li>
                            <li>Индивидуальный дизайн</li>
                            <li>Премиальные опции</li>
                        </ul>
                    
                    <div class="button-banner">
                        <a href="#!" class="blue-button">Оформить карту</a>
                        <a href="#!" class="white-button">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>