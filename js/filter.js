document.addEventListener('DOMContentLoaded', function() {
    const openPopup = document.getElementById('openPopup');
    const closePopup = document.getElementById('closePopup');
    const popup = document.getElementById('filter_custom');

    // Function to toggle the popup visibility
    function togglePopup() {
        popup.classList.toggle('hiddenFilter');
    }

    // Event listener for the open button
    openPopup.addEventListener('click', togglePopup);

    // Event listener for the close button
    closePopup.addEventListener('click', togglePopup);

    // Optional: Close the popup if clicking outside of the popup content
    window.addEventListener('click', function(event) {
        if (event.target === popup) {
            togglePopup();
        }
    });
});
