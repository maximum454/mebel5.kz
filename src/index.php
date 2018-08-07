<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?$curPage = $APPLICATION->GetCurPage(true);?>
<!doctype html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Twitter Card data -->
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?$APPLICATION->ShowHead()?>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/".SITE_TEMPLATE_ID."/css/mebel5.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrp">
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img class="header__logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="header__location">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/location.svg" alt="">Астана, ул. Жанажол, 4
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <a class="header__phone" href="tel:+77476760549"><img src="<?=SITE_TEMPLATE_PATH?>/img/phone.svg" alt="">+7 747 676 05 49</a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <button class="header__btn popap_box" data-toggle="modal" data-target="#exampleModal">ЗАКАЗАТЬ ЗВОНОК</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="modal__header">Заказать обратный звонок</div>
                    </div>
                    <div class="row">
                        <div class="modal__item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Ваше имя">
                        </div>
                        <div class="modal__item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Контактный телефон">
                        </div>
                    </div>
                    <div class="row">
                        <div class="modal__item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" placeholder="Электроннная почта">
                        </div>
                        <div class="modal__item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:menu", "nav", Array(
        "COMPONENT_TEMPLATE" => ".default",
        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
        "MAX_LEVEL" => "1",	// Уровень вложенности меню
        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
    ),
        false
    );?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "slider",
            "EDIT_TEMPLATE" => ""
        )
    );?>
    <main class="main">
        <div class="container">
            <div class="row">
                <? if ($curPage != SITE_DIR."index.php") {?>
                    <h1 class="main__header"><?=$APPLICATION->ShowTitle(false);?></h1>
                <?} else {?>
                    <h1 style="display: none"><?$APPLICATION->ShowTitle()?></h1>
                <?} ?>
                #WORK_AREA#
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "main-catalog",
                "EDIT_TEMPLATE" => ""
            )
        );?>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "now",
                "EDIT_TEMPLATE" => ""
            )
        );?>
        <div class="feedback">
            <div class="container">
                <div class="row">
                    <div class="feedback__inner">
                        <h2>ВЫЗВАТЬ ЗАМЕРЩИКА БЕСПЛАТНО</h2>
                        <h5>оставьте свои контактные данные и мы вам обязательно перезвоним</h5>
                        <form action="" class="feedback__form">
                            <div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-4 col-xs-12">
                                <input type="text" placeholder="Ваше имя">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <input type="text" placeholder="Контактный телефон">
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <input type="submit" value="ВЫЗВАТЬ ЗАМЕРЩИКА">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "testimonials",
                "EDIT_TEMPLATE" => ""
            )
        );?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "page",
                "AREA_FILE_SUFFIX" => "banners",
                "EDIT_TEMPLATE" => ""
            )
        );?>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h4>© BIG ELEPHANT GROUP</h4>
                    <p class="footer__p">Производство мебели одно из&nbsp;наших приоритетных направлений деятельности. Мы&nbsp;делаем качественную корпусную и&nbsp;индивидуальную мебель под все требования и&nbsp;пожелания заказчика. Только лучшие материалы и&nbsp;слаженная работа коллектива дают прекрасный результат и&nbsp;довольных клиентов.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h4>КОНТАКТЫ</h4>

                    <p><b>Адрес:</b><br>
                        г. Астана, 010000, ул. Жанажол, 4</p>

                    <p><b>Телефон:</b><br>
                        +7 747 676 05 49</p>

                    <p><b>Электронная почта:</b><br>
                        <a href="mailto:bigelephant5@yandex.kz">bigelephant5@yandex.kz</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <h4>МЫ В СОЦИАЛЬНЫХ СЕТЯХ</h4>
                    <a class="footer__social" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/fb.svg" alt=""></a>
                    <a class="footer__social" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/inst.svg" alt=""></a>
                    <a class="footer__social" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/vk.svg" alt=""></a>
                    <a class="footer__social" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/youtube.svg" alt=""></a>
                    <br>
                    <br>
                    <h4>МЫ ПРИНИМАЕМ К ОПЛАТЕ</h4>
                    <div class="accept-payment">
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/visa.svg" alt="">
                        </div>
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/mastercard.svg" alt="">
                        </div>
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/maestro.svg" alt="">
                        </div>
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/american-express.svg" alt="">
                        </div>
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/unionpay.svg" alt="">
                        </div>
                        <div class="accept-payment__item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/western-union.svg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<?$APPLICATION->AddHeadScript("/bitrix/templates/".SITE_TEMPLATE_ID."/js/mebel5.js");?>
</body>
</html>
