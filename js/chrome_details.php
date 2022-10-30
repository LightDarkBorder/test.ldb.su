<script>
    function toggleHelpBox() {
        const e = document.getElementById("details");
        e.classList.toggle("hidden");
        const t = document.getElementById("details-button");
        if ((e.classList.contains("hidden") ? ((t.innerText = '<?=$strings[$lang]['body_details_show']?>'), t.classList.remove("expanded")) : ((t.innerText = '<?=$strings[$lang]['body_details_hide']?>'), t.classList.add("expanded")), mobileNav)) {
            document.getElementById("main-content").classList.toggle("hidden");
        }
    }
    function detailsButtonClick() {
        window.errorPageController && errorPageController.detailsButtonClick();
    }
    window.top.location==window.location&&!window.portalHost||document.documentElement.setAttribute("subframe","");
</script>