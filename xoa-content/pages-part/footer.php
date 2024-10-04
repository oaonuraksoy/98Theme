</div>
</div>
<div id=closeModal class="modal window">
    <div class=title-bar>
        <div class=title-bar-text> Exit.exe</div>
        <div class=title-bar-controls>
            <button aria-label=Close class=notranslate
                onclick="this.parentNode.parentNode.parentNode.style.display='none'"></button>
        </div>
    </div>
    <div class=window-body>
        <p>Are you sure you want to close the page?</p>
        <p>You've been on this page for so long: </p>
        <p><span id=uptime></span></p>
        <section class=field-row style=justify-content:flex-end>
            <button onclick=closeModal()>Cancel</button>
            <button onclick=closePage()>OK!</button>
        </section>
    </div>
</div>
</div>
</div>
</div>
<?php require("oa-content/pages-part/include.php")?>

</body>

</html>