const searchInput = document.getElementById('searchInput');
const resultsPopup = document.getElementById('resultsPopup');

// Menyembunyikan popup hasil pencarian secara default
resultsPopup.style.display = 'none';

searchInput.addEventListener('input', function() {
    const searchValue = searchInput.value.trim();
    if (searchValue.length > 0) {
        resultsPopup.style.display = 'block'; // Tampilkan popup hasil pencarian
    } else {
        resultsPopup.style.display = 'none'; // Sembunyikan popup jika input kosong
    }
});
