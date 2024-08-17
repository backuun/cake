document.addEventListener('DOMContentLoaded', function() {
    const deliveryTab = document.getElementById('delivery-tab');
    const pickupTab = document.getElementById('pickup-tab');
    const deliveryContent = document.getElementById('delivery-content');
    const pickupContent = document.getElementById('pickup-content');

    deliveryTab.addEventListener('click', function() {
        deliveryTab.classList.add('active');
        pickupTab.classList.remove('active');
        deliveryContent.style.display = 'block';
        pickupContent.style.display = 'none';
    });

    pickupTab.addEventListener('click', function() {
        pickupTab.classList.add('active');
        deliveryTab.classList.remove('active');
        pickupContent.style.display = 'block';
        deliveryContent.style.display = 'none';
    });
});
