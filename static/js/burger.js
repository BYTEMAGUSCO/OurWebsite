const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const closeMenu = document.getElementById('close-menu');

// Function to open the mobile menu
hamburger.addEventListener('click', () => {
    mobileMenu.classList.add('open'); // Show the mobile menu
});

// Function to close the mobile menu when the close button is clicked
closeMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
});

// Close the mobile menu when a menu item is clicked
const menuItems = mobileMenu.querySelectorAll('a'); // Select all anchor tags inside the mobile menu
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        mobileMenu.classList.remove('open'); // Hide the mobile menu when a menu item is clicked
    });
});
