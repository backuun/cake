document.addEventListener('DOMContentLoaded', function() {
    const offcanvasElement = document.getElementById('offcanvasAdd');

    function updateOffcanvasClass() {
        if (window.innerWidth <= 768) {
            offcanvasElement.classList.remove('offcanvas-start');
            offcanvasElement.classList.add('offcanvas-bottom');
        } else {
            offcanvasElement.classList.remove('offcanvas-bottom');
            offcanvasElement.classList.add('offcanvas-start');
        }
    }

    // Run on load
    updateOffcanvasClass();

    // Run on window resize
    window.addEventListener('resize', updateOffcanvasClass);
});


document.addEventListener('DOMContentLoaded', function() {
    const offcanvasElement = document.getElementById('offcanvasCart');

    function updateOffcanvasClass() {
        if (window.innerWidth <= 768) {
            offcanvasElement.classList.remove('offcanvas-start');
            offcanvasElement.classList.add('offcanvas-bottom');
        } else {
            offcanvasElement.classList.remove('offcanvas-bottom');
            offcanvasElement.classList.add('offcanvas-start');
        }
    }

    // Run on load
    updateOffcanvasClass();

    // Run on window resize
    window.addEventListener('resize', updateOffcanvasClass);
});
