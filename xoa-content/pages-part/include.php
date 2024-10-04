<!-- loader -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    let progressBar = document.getElementById('progress-bar');
    let preloader = document.getElementById('preloader');
    let content = document.getElementById('content');

    let progress = 0;

    // Progress bar'ı kademeli olarak dolduruyoruz, yükleme süreci tamamlana kadar
    let interval = setInterval(function() {
        if (progress < 90) { // Sayfa yüklenirken max %90'a kadar doldur
            progress += 1;
            progressBar.style.width = progress + "%";
        }
    }, 50);

    // window.onload sayfanın tamamen yüklendiğini gösterir
    window.onload = function() {
        clearInterval(interval); // Progress bar simülasyonunu durdur
        progress = 100;
        progressBar.style.width = progress + "%"; // Yüzde 100'e çıkar

        setTimeout(function() {
            preloader.style.display = 'none'; // Preloader'ı kaldır
            content.style.display = 'block'; // Sayfa içeriğini göster
        }, 500); // Biraz gecikme ile içeriği göster
    };
});
</script>
<!-- loader Sonu -->

<script>
// Çerez oluşturma
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Çerez okuma
function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}
document.addEventListener("DOMContentLoaded", function() {
    // Sayfa yüklendiğinde çerezi kontrol et
    if (getCookie('hideElement') === 'true') {
        document.getElementById('myElement').style.display = 'none'; // Çereze göre gizle
    }

    // Butonun onclick olayını ayarla
    document.getElementById('myButton').onclick = function() {
        // İlgili öğeyi gizle
        this.parentNode.parentNode.parentNode.style.display = 'none';
        // Çerezi oluştur (7 gün boyunca geçerli olacak)
        setCookie('hideElement', 'true', 7);
    };
});
</script>
<!-- çerez sonu -->


<script>
const closeButton = document.querySelector('.bb');
if (window.innerWidth < 768) {
    closeButton.remove();
}

function showModal() {
    document.getElementById('closeModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('closeModal').style.display = 'none';
}

function closePage() {
    window.close();
    setTimeout(function() {
        alert(
            "Tarayıcınız sayfanın otomatik olarak kapanmasına izin vermedi. Lütfen pencereyi manuel olarak kapatın."
        );
    }, 1000);
}
let startTime = new Date().getTime();

function updateUptime() {
    let currentTime = new Date().getTime();
    let uptime = Math.floor((currentTime - startTime) / 1000);
    let hours = Math.floor(uptime / 3600);
    let minutes = Math.floor((uptime % 3600) / 60);
    let seconds = uptime % 60;
    let uptimeString =
        `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    document.getElementById('uptime').textContent = uptimeString;
}
setInterval(updateUptime, 1000);
</script>
<script>
function isMobileSize() {
    return window.matchMedia("(max-width: 768px)").matches;
}

function toggleMenu() {
    if (isMobileSize()) {
        document.getElementById('menuToggle').addEventListener('click', function() {
            var menu = document.querySelector('.menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'flex';
            } else {
                menu.style.display = 'none';
            }
        });
    }
}
window.addEventListener('load', toggleMenu);
window.addEventListener('resize', toggleMenu);
</script>
<script>
window.gtranslateSettings = {
    "default_language": "en",
    "languages": ["en", "tr", "de"],
    "wrapper_selector": ".gtranslate_wrapper",
    "flag_size": 20
}
</script>
<script src=https://cdn.gtranslate.net/widgets/latest/flags.js defer></script>