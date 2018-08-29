function mobileMenu($button, $menu) {
    var button = document.querySelector($button);
    var menu = document.querySelector($menu);
    console.log(menu);
    button.addEventListener('click', function(){
        console.log('click');
        menu.classList.toggle('display');
    })
};

function init(){
    console.log('init');
    mobileMenu('.bp-menu-button', '.bp-mobile-menu');
}

init();
