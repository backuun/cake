document.addEventListener('DOMContentLoaded', function() {
  // Function to show the submenu on hover
  function showSubmenu(event) {
    var submenu = event.target.nextElementSibling;
    if (submenu && submenu.classList.contains('submenu-custom')) {
      // Hide all other submenus
      document.querySelectorAll('.submenu-custom').forEach(function(el) {
        el.style.display = 'none';
      });
      submenu.style.display = 'block';
    }
  }

  // Function to hide the submenu when the mouse leaves
  function hideSubmenu(event) {
    var submenu = event.target.nextElementSibling;
    if (submenu && submenu.classList.contains('submenu-custom')) {
      submenu.style.display = 'none';
    }
  }

  // Add event listener to all elements with 'submenu-button' class for mouse enter
  document.querySelectorAll('.submenu-button').forEach(function(button) {
    button.addEventListener('mouseenter', showSubmenu);
    button.addEventListener('mouseleave', hideSubmenu);
  });

  // Optional: Keep submenu open when hovering over it
  document.querySelectorAll('.submenu-custom').forEach(function(submenu) {
    submenu.addEventListener('mouseenter', function() {
      submenu.style.display = 'block';
    });
    submenu.addEventListener('mouseleave', function() {
      submenu.style.display = 'none';
    });
  });
});
