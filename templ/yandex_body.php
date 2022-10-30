<body id="t" class="b-page">
    <div class="wrap">
        <div class="paper">
        <div class="paper__text-wrap">
            <div class="paper__title">
            <div class="paper__title-text"><?=$strings[$lang]['body_title']?></div>
            </div>
            <div class="paper__summary">
            <div class="paper__summary-text"><?=$strings[$lang]['body_description']?></div>
            </div>
        </div>
        <div id="suggestions-list">
            <p><?=$strings[$lang]['body_list']?></p>
            <ul>
                <li><a accesskey="t" tabindex="0" href="https://t.me/LightDarkBorder">Telegram</a></li>
                <li><a accesskey="g" tabindex="0" href="https://github.com/LightDarkBorder">Github</a></li>
                <li><a accesskey="s" tabindex="0" href="https://steamcommunity.com/id/lightdarkborder/">Steam</a></li>
            </ul>
        </div>
        <button class="button button_theme_action button_size_m" accesskey="v" tabindex="0" onclick="location.href='http\://t.me/LightDarkBorder'">
            <span class="button__text"><?=$strings[$lang]['body_write']?></span>
        </button>
        <div class="paper__action">
            <button class="button button_theme_pseudo button_size_xs" id="reveal-button" accesskey="d" tabindex="0" onclick="showErrorBox()">
                <span class="button__text"><?=$strings[$lang]['body_details']?></span>
            </button>
        </div>
        <div class="paper__disclosure" id="disclosure">
            <ul class="paper__suggestions">
                <li class="paper__suggestion">
                    <span class="paper__suggestion-text"><?=$strings[$lang]['body_detail_1_title']?></span>
                    <span class="paper__suggestion-text"><?=$strings[$lang]['body_detail_1_desc']?></span>
                </li>
                <li class="paper__suggestion">
                    <span class="paper__suggestion-text"><?=$strings[$lang]['body_detail_2_title']?></span>
                    <span class="paper__suggestion-text"><a accesskey="v" tabindex="0" href="https://ldb.su/token"><?=$strings[$lang]['body_detail_2_desc_1']?></a>, <a accesskey="c" tabindex="0" href="https://ldb.su/cuphead"><?=$strings[$lang]['body_detail_2_desc_2']?></a></span>
                </li>
            </ul>
            <div id="error-block" class="error error_hidden_yes">
            <span class="error__code">ERR_CRINGE_PRODACTION</span>
            </div>
        </div>
        </div>
    </div>
</body>