const input = document.getElementById('searchInput');
const col7 = document.querySelector('.search-custom');
const searchOverlay = document.getElementById('searchOverlay');

// Tambahkan event listener untuk input
input.addEventListener('focus', function() {
    col7.classList.add('p-2', 'p-md-3', 'bg-light', 'rounded-4');
    searchOverlay.style.display = 'block';
});

// Tambahkan event listener untuk menangani klik di luar input
document.addEventListener('click', function(event) {
    if (!col7.contains(event.target) && !input.contains(event.target)) {
        col7.classList.remove('p-2', 'p-md-3');
        searchOverlay.style.display = 'none';
        // Sembunyikan hasil pencarian ketika klik di luar
        resultsPopup.style.display = 'none';
    }
});
