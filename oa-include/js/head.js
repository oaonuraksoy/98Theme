
    window.onscroll = function() {
        var navbar = document.querySelector('.sticky');
        if (window.pageYOffset > 0) {
            navbar.classList.add('sticky-active');
        } else {
            navbar.classList.remove('sticky-active');
        }
    };
