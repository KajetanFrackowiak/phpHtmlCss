const hoverImg = document.getElementById('hover-img');

/* zdjęcie się pojawia gdy mousleave = myszka wyjdzie */
hoverImg.addEventListener('mouseleave', () => { 
    hoverImg.scr = "https://wallsdesk.com/wp-content/uploads/2017/01/Albert-Einstein-HD-Desktop.jpg";
});

/* to zdarzenie, które występuje, gdy kursor myszy wchodzi na obszar elementu HTML. */
hoverImg.addEventListener('mouseenter', () => {
    hoverImg.src = "https://wallsdesk.com/wp-content/uploads/2017/01/Albert-Einstein-Wallpapers.jpg";
});
