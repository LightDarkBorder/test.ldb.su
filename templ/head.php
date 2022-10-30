<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="theme-color" content="#fff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?=$strings[$lang]['title']?></title>
    <meta name="description" content="<?=$strings[$lang]['description']?>">
    <meta name="author" content="LightDarkBorder">
    <meta property="og:title" content="<?=$strings[$lang]['title']?>"/>
    <meta property="og:description" content="<?=$strings[$lang]['description']?>"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="<?=$strings[$lang]['mtitle']?>">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="msapplication-navbutton-color" content="black-translucent">
    <meta name="msapplication-TileColor" content="black-translucent">
    <meta name="application-name" content="<?=$strings[$lang]['mtitle']?>">
    <meta name="msapplication-tooltip" content="<?=$strings[$lang]['description']?>">
    <?php
        if ($isEdge)
            include("css/edge.html");
        elseif ($isYandex)
            include("css/yandex.html");
        elseif ($isYandexM)
            include("css/yandex_mobile.html");
        else
            include("css/chrome.html");
    ?>
    <?php
        if ($isYandex)
            include("js/yandex.html");
        elseif ($isYandexM) {}
        else {
            include("js/chrome_details.php");
            include("js/chrome_mobile.html");
        }
    ?>
</head>