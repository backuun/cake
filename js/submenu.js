document.addEventListener('DOMContentLoaded', function() {
    // Function to toggle submenu visibility
    function toggleSubmenu(event) {
      var submenu = event.target.nextElementSibling;
      if (submenu && submenu.classList.contains('submenu-custom')) {
        if (submenu.style.display === 'block') {
          submenu.style.display = 'none';
        } else {
          // Hide all other submenus
          document.querySelectorAll('.submenu-custom').forEach(function(el) {
            el.style.display = 'none';
          });
          submenu.style.display = 'block';
        }
      }
    }
  
    // Add event listener to all elements with 'submenu-button' class
    document.querySelectorAll('.submenu-button').forEach(function(button) {
      button.addEventListener('click', toggleSubmenu);
    });
  
    // Optional: Click outside to close submenus
    document.addEventListener('click', function(event) {
      var isClickInside = event.target.classList.contains('submenu-button') || 
                          event.target.closest('.submenu-custom');
      if (!isClickInside) {
        document.querySelectorAll('.submenu-custom').forEach(function(el) {
          el.style.display = 'none';
        });
      }
    });
  });
  