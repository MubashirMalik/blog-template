
function toggleNavBar() {
    let nav_items = document.getElementsByClassName('secondary');
    for(let i = 0; i < nav_items.length; i++) {
        if (nav_items[i].style.display == 'block')
            nav_items[i].style.display = 'none';
        else {
            nav_items[i].style.display = 'block';   
        }
            
    } 
}