$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= $('section').height() + 160) {
        $(".navbar").removeClass("navbar-expand-lg");
        $(".navbar-light .navbar-nav .nav-link").css("color", "#1122337a");
        $(".navbar-light .navbar-nav .nav-item .active>.nav-link").css("color", "#123");
        $(".navbar-light .navbar-brand").css("color", "#123");
    }
    if (scroll <= $('section').height() + 160) {
        $(".navbar").addClass("navbar-expand-lg");
        $(".navbar-light .navbar-nav .active>.nav-link").css("color", "");
        $(".navbar-light .navbar-nav .nav-link").css("color", "");
        $(".navbar-light .navbar-brand").css("color", "");
        $(".navbar-light .navbar-toggler-icon").css("background-image", "url(data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(17,34,51, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E)");

    }
});