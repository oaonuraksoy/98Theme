<?php 
require_once ("oa-content/pages-part/header.php");
require_once ("oa-content/pages-part/left-side.php");
?>

<div class="window mt-1">
    <div class="title-bar">
        <div class="title-bar-text"> Blog.exe</div>
        <div class="title-bar-controls">
            <button aria-label=Help class=notranslate></button>
            <button aria-label=Close class=notranslate></button>
        </div>
    </div>
    <div class="window-body">
        <div class="row">
            <div class="col col-6 col-md-3">
                <div class="window">
                    <div class="title-bar">
                        <div class="title-bar-text">Blog 1</div>
                    </div>
                    <div class="window-body">
                        <img src="https://picsum.photos/200"
                            alt="Proje 1" class="profil-image">
                        <p>Blog 1 açıklama</p>
                    </div>
                </div>
            </div>

            <div class="col col-6 col-md-3">
                <div class="window">
                    <div class="title-bar">
                        <div class="title-bar-text">Blog 2</div>
                    </div>
                    <div class="window-body">
                        <img src="https://picsum.photos/210"
                            alt="Proje 1" class="profil-image">
                        <p>Blog 2 açıklama</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<?php 
require_once ("oa-content/pages-part/footer.php");
?>