document.addEventListener('DOMContentLoaded', function() {
    const listSearch = document.querySelector('.list-search');
    const listItems = listSearch.querySelectorAll('a'); // Menghitung item berdasarkan tag <a>

    if (listItems.length > 6) {
        listSearch.classList.add('overflow-custom');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const listSearch = document.querySelector('.list-search-collection');
    const listItems = listSearch.querySelectorAll('a'); // Menghitung item berdasarkan tag <a>

    if (listItems.length > 6) {
        listSearch.classList.add('overflow-custom');
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const listSearch = document.querySelector('.list-search-page');
    const listItems = listSearch.querySelectorAll('a'); // Menghitung item berdasarkan tag <a>

    if (listItems.length > 6) {
        listSearch.classList.add('overflow-custom');
    }
});