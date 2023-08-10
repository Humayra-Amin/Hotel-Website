
jQuery(document).addEventListener("scroll", (event) => {
    let lastKnownScrollPosition = window.scrollY;
    let headerEl = document.querySelector('.header-outer');
    if(lastKnownScrollPosition > headerEl.offsetHeight){
        headerEl.classList.add('sticky-header')
    }else{
        headerEl.classList.remove('sticky-header')
    }
    });