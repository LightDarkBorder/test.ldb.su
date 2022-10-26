<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="theme-color" content="#fff">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
  <title>Досье LightDarkBorder</title>
  <meta property="og:locale" content="ru_RU"/>
  <meta property="og:title" content="Досье LightDarkBorder"/>
  <meta property="og:description" content="Анкета и все, по мотивам ошибок в Edge"/>
  <meta property="og:site_name" content="Time to hack"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="Досье LDB">
  <meta name="description" content="Анкета и все, по мотивам ошибок в Edge">
  <script>let mobileNav = false; function onResize() { const helpOuterBox = document.querySelector("#details"); const mainContent = document.querySelector("#main-content"); const mediaQuery = "(min-width: 240px) and (max-width: 420px) and " + "(min-height: 401px), " + "(max-height: 560px) and (min-height: 240px) and " + "(min-width: 421px)"; const detailsHidden = helpOuterBox.classList.contains("hidden"); const runnerContainer = document.querySelector(".runner-container"); if (mobileNav !== window.matchMedia(mediaQuery).matches) { mobileNav = !mobileNav; if (mobileNav) { mainContent.classList.toggle("hidden", !detailsHidden); helpOuterBox.classList.toggle("hidden", detailsHidden); if (runnerContainer) { runnerContainer.classList.toggle("hidden", !detailsHidden) } } else if (!detailsHidden) { mainContent.classList.remove("hidden"); helpOuterBox.classList.remove("hidden"); if (runnerContainer) { runnerContainer.classList.remove("hidden") } } } } function setupMobileNav() { window.addEventListener("resize", onResize); onResize() } document.addEventListener("DOMContentLoaded", setupMobileNav);
  </script>
  <script>function toggleHelpBox(){const e=document.getElementById("details");e.classList.toggle("hidden");const t=document.getElementById("details-button");if(e.classList.contains("hidden")?(t.innerText="Подробные сведения",t.classList.remove("expanded")):(t.innerText="Скрыть подробные сведения",t.classList.add("expanded")),mobileNav){document.getElementById("main-content").classList.toggle("hidden");const n=document.querySelector(".runner-container");n&&n.classList.toggle("hidden")}}function detailsButtonClick(){window.errorPageController&&errorPageController.detailsButtonClick()}window.top.location==window.location&&!window.portalHost||document.documentElement.setAttribute("subframe","");</script>
  <script>
    let isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor) && !(/Edg/.test(navigator.userAgent) || /EdgA/.test(navigator.userAgent) || /EdgiOS/.test(navigator.userAgent));
    let isEdge = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor) && (/Edg/.test(navigator.userAgent) || /EdgA/.test(navigator.userAgent) || /EdgiOS/.test(navigator.userAgent));

    if (isChrome) {
      var link = document.createElement('link');
      link.setAttribute('rel', 'stylesheet');
      link.setAttribute('href', 'css/chrome.css');
      document.head.appendChild(link);
    } else if (isEdge) {
      var link = document.createElement('link');
      link.setAttribute('rel', 'stylesheet');
      link.setAttribute('href', 'css/edge.css');
      document.head.appendChild(link);
    } else {
      var link = document.createElement('link');
      link.setAttribute('rel', 'stylesheet');
      link.setAttribute('href', 'css/edge.css');
      document.head.appendChild(link);
    }
  </script>
  <link rel="stylesheet" href="css/main.css">
</head>