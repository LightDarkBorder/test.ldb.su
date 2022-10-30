<?php
    $isEdge = false;
    $isYandex = false;
    $isYandexM = false; 
    $isOther = false;
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($agent, 'Edg') !== FALSE or strpos($agent, 'EdgA') !== FALSE or strpos($agent, 'EdgiOS') !== FALSE)
        $isEdge = true;
    elseif (strpos($agent, 'YaBrowser') !== FALSE and strpos($agent, 'Mobile') !== FALSE)
        $isYandexM = true;
    elseif (strpos($agent, 'YaBrowser') !== FALSE and strpos($agent, 'Yowser') !== FALSE)
        $isYandex = true;
    else
        $isOther = true;
    $support_lang = array("en","ru");
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if (!in_array($lang, array_keys($support_lang))){
        $lang = 'en';
    }
    $strings = array
    (
        'ru' => array
            (
                'title' =>  'Досье LightDarkBorder',
                'mtitle' =>  'Досье LDB',
                'description'   =>  'Анкета и все, по мотивам ошибок в Браузерах.',
                'body_title'    =>  'Досье LightDarkBorder утеряно.',
                'body_description'    =>  'Здравствуйте, до свидания! Список соц. сетей для связи со мной (нет).',
                'body_list'    =>  'Список:',
                'body_write'    =>  'Написать',
                'body_details_show'    =>  'Подробные сведения',
                'body_details_hide'    =>  'Скрыть подробные сведения',
                'body_details'    =>  'Подробнее',
                'body_detail_1_title'    =>  'Бытие/сознание:',
                'body_detail_1_desc'    =>  'Ломаю Вконтакте, черчу чертежи, кайфую.',
                'body_detail_2_title'    =>  'Полезные ссылки:',
                'body_detail_2_desc_1'    =>  'Получить токен Вконтакте',
                'body_detail_2_desc_2'    =>  'Редактор сохранений Cuphead',
            ),
        'en' => array
            (
                'title' =>  'Dossier LightDarkBorder',
                'mtitle' =>  'Dossier LDB',
                'description' => 'Questionnaire and all, based on errors in browsers.',
                'body_title'    => 'The LightDarkBorder dossier has been lost.',
                'body_description'    =>  'Hello good Bye! List of social networks to contact me (none).',
                'body_list'    =>  'List:',
                'body_write'    =>  'Write',
                'body_details_show'    =>  'Details',
                'body_details_hide'    =>  'Hide details',
                'body_details'    =>  'More',
                'body_detail_1_title'    =>  'Being/consciousness:',
                'body_detail_1_desc'    =>  'I break Vkontakte, draw drawings, get high.',
                'body_detail_2_title'    =>  'Useful links:',
                'body_detail_2_desc_1'    =>  'Get a Vkontakte token',
                'body_detail_2_desc_2'    =>  'Cuphead save editor',
            )
    );
?>
<html dir="ltr">
<?php include 'templ/head.php'; ?>
<?php
    if ($isYandex)
        include 'templ/yandex_body.php';
    elseif ($isYandexM)
        include 'templ/yandex_mobile_body.php';
    else
        include 'templ/chrome_body.php';
?>
</html>