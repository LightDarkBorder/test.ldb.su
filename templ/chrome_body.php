<body style="font-family: system-ui, sans-serif; font-size: 75%" class="neterror">
    <div id="main-frame-error" class="interstitial-wrapper">
        <div id="main-content">
            <div class="icon icon-blocked"></div>
            <div id="main-message">
                <h1>
                <span><?=$strings[$lang]['body_title']?></span>
                </h1>
                <p><?=$strings[$lang]['body_description']?></p>
                <div id="suggestions-list">
                <p><?=$strings[$lang]['body_list']?></p>
                <ul>
                    <li><a accesskey="t" tabindex="0" href="https://t.me/LightDarkBorder">Telegram</a></li>
                    <li><a accesskey="g" tabindex="0" href="https://github.com/LightDarkBorder">Github</a></li>
                    <li><a accesskey="s" tabindex="0" href="https://steamcommunity.com/id/lightdarkborder/">Steam</a></li>
                </ul>
                </div>
                <div class="error-code">ERR_CRINGE_PRODACTION</div>
            </div>
        </div>
        <div id="buttons" class="nav-wrapper suggested-left">
            <div id="control-buttons">
                <button id="social-button" class="blue-button text-button" accesskey="v" tabindex="0" onclick="location.href='http\://t.me/LightDarkBorder'"><?=$strings[$lang]['body_write']?></button>
            </div>
            <div id="details-buttons">
                <button id="details-button" accesskey="d" tabindex="0" onclick="detailsButtonClick(); toggleHelpBox()"><?=$strings[$lang]['body_details_show']?></button>
            </div>
        </div>
        <div id="details" class="hidden">
        <div class="suggestions">
            <div class="suggestion-header"><?=$strings[$lang]['body_detail_1_title']?></div>
            <div class="suggestion-body"><?=$strings[$lang]['body_detail_1_desc']?></div>
        </div>
        <div class="suggestions">
            <div class="suggestion-header"><?=$strings[$lang]['body_detail_2_title']?></div>
            <div class="suggestion-body">
                <li><a accesskey="v" tabindex="0" href="https://ldb.su/token"><?=$strings[$lang]['body_detail_2_desc_1']?></a></li>
                <li><a accesskey="c" tabindex="0" href="https://ldb.su/cuphead"><?=$strings[$lang]['body_detail_2_desc_2']?></a></li>
            </div>
        </div>
        </div>
    </div>
</body>