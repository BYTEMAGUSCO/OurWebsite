document.addEventListener('DOMContentLoaded', () => {
    const carouselSlide = document.querySelector('.carousel-slide');
    const carouselItems = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const descriptionElement = document.getElementById('carousel-description');
    let currentIndex = 0;

    const descriptions = [
        "BYTEMAGUS CO. creates custom web systems with a focus on responsive design, ensuring optimal performance across devices. They emphasize aesthetic appeal, functionality, rigorous testing, SEO optimization, and seamless integration with business tools. Services include content management systems, e-commerce platforms, and custom web applications.",
        "BYTEMAGUS CO. provides comprehensive computer support services, including hardware diagnostics, software installation, data backup, and recovery. They also offer proactive monitoring and maintenance to keep systems secure, up-to-date, and optimized, minimizing disruptions to business operations.",
        "BYTEMAGUS CO. ensures your business has a robust and secure network infrastructure. Their services cover network design, installation, ongoing management, performance monitoring, troubleshooting, and cybersecurity. They tailor solutions to meet your specific needs, ensuring scalability and resilience for business growth."
    ];

    function showSlide(index) {
        const slideWidth = carouselItems[0].clientWidth;
        carouselSlide.style.transform = `translateX(${-index * slideWidth}px)`;
        updateDescription(index);
    }

    function updateDescription(index) {
        descriptionElement.textContent = descriptions[index];
    }

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        showSlide(currentIndex);
    });

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        showSlide(currentIndex);
    });

    // Initialize carousel
    showSlide(currentIndex);

    // Handle window resize to keep carousel responsive
    window.addEventListener('resize', () => {
        showSlide(currentIndex);
    });
});
