window.onload = function() {
const menuicon = document.getElementById('menuicon');
menuicon.addEventListener('click', function() {

    const menu = document.getElementById('leftmenu');

    if (menu.classList.contains('displaynone')) {
        menu.classList.remove('displaynone');
    }
    else {
        menu.classList.add('displaynone')
    }
})
};