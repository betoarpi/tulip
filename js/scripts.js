$(document).on('ready', function () {
    $('#carousel').slick({
        prevArrow: '<i class="fas fa-arrow-left icon-prev"></i>',
        nextArrow: '<i class="fas fa-arrow-right icon-next"></i>',
    });

    //MENU
    var btnMenu = document.getElementById('btnMenu');
    var btnCloseMenu = document.getElementById('btnCloseMenu');
    var menu = document.getElementById('menuMobile');
    btnMenu.addEventListener("click", function () {
        menu.style.display = "flex";
    });
    btnCloseMenu.addEventListener("click", function () {
        menu.style.display = "none";
    });

});