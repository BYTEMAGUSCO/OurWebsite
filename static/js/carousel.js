// Array to store titles and descriptions
const carouselItems = [
    {
        title: 'Web Systems Development and Designing',
        description: 'BYTEMAGUS CO. creates custom web systems with a focus on responsive design, ensuring optimal performance across devices. They emphasize aesthetic appeal, functionality, rigorous testing, SEO optimization, and seamless integration with business tools. Services include content management systems, e-commerce platforms, and custom web applications.'
    },
    {
        title: 'Computer System Support and Management',
        description: 'BYTEMAGUS CO. provides comprehensive computer support services, including hardware diagnostics, software installation, data backup, and recovery. They also offer proactive monitoring and maintenance to keep systems secure, up-to-date, and optimized, minimizing disruptions to business operations.'
    },
    {
        title: 'Network Support and Management',
        description: 'BYTEMAGUS CO. ensures your business has a robust and secure network infrastructure. Their services cover network design, installation, ongoing management, performance monitoring, troubleshooting, and cybersecurity. They tailor solutions to meet your specific needs, ensuring scalability and resilience for business growth.'
    }
];

let currentIndex = 0;
const titleElement = document.getElementById('carousel-title');
const descriptionElement = document.getElementById('carousel-description');
const carousel = document.getElementById('carousel-items');

// Function to update title and description
function updateContent(index) {
    titleElement.textContent = carouselItems[index].title;
    descriptionElement.textContent = carouselItems[index].description;
}

// Event listeners for buttons
document.getElementById('prev').addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
    } else {
        currentIndex = carouselItems.length - 1; // Loop to last item
    }
    updateCarousel();
});

document.getElementById('next').addEventListener('click', () => {
    if (currentIndex < carouselItems.length - 1) {
        currentIndex++;
    } else {
        currentIndex = 0; // Loop to first item
    }
    updateCarousel();
});

// Function to update the carousel position, title, and description
function updateCarousel() {
    const offset = -currentIndex * 100; // Assuming each item takes 100% width
    carousel.style.transform = `translateX(${offset}%)`;
    updateContent(currentIndex);
}

// Initialize with the first title and description
updateContent(currentIndex);
