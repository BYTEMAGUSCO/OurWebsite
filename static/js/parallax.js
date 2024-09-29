document.addEventListener('scroll', function() {
    const layers = document.querySelectorAll('.parallax-layer');

    layers.forEach(layer => {
        const speed = layer.getAttribute('data-speed');
        const yOffset = window.scrollY * speed; // Adjust the speed of the layer
        layer.style.transform = `translateY(${yOffset}px)`; // Move the layer
    });
});
