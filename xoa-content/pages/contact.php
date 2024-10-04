<?php 
require_once ("oa-content/pages-part/header.php");
require_once ("oa-content/pages-part/left-side.php");
?>
<style>
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.contact-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 30px;
}

.contact-info div {
    flex: 1;
    margin-right: 20px;
}

.contact-info div:last-child {
    margin-right: 0;
}

.contact-info h3 {
    color: #555;
    margin-bottom: 10px;
}

.contact-info p {
    font-size: 16px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
    font-weight: 600;
}

input[type="text"],
input[type="email"],
textarea {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 16px;
}

textarea {
    height: 150px;
    resize: none;
}
</style>

<div class="window mt-1">
    <div class="title-bar">
        <div class="title-bar-text"> İletişim.exe</div>
        <div class="title-bar-controls">
            <button aria-label=Help class=notranslate></button>
            <button aria-label=Close class=notranslate></button>
        </div>
    </div>
    <div class="window-body">
        <div class="contact-info">
            <div>
                <h3>E-posta:</h3>
                <p>example@mail.com</p>
            </div>
            <div>
                <h3>Telefon:</h3>
                <p>+90 555 555 55 55</p>
            </div>
        </div>

        <form action="#" method="POST">
            <label for="name">İsim</label>
            <input type="text" id="name" name="name" placeholder="İsminiz" required>

            <label for="email">E-posta</label>
            <input type="email" id="email" name="email" placeholder="E-posta adresiniz" required>

            <label for="message">Mesaj</label>
            <textarea id="message" name="message" placeholder="Mesajınız" required></textarea>

            <button type="submit">Gönder</button>
        </form>
    </div>
</div>


<?php 
require_once ("oa-content/pages-part/footer.php");
?>