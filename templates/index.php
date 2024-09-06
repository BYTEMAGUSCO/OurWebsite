<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ByteMagus Co.</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .hero-bg {
            background-image: url('/static/img/home.png');
            background-size: cover;
            background-position: center;
        }
        .hero-height {
            height: 500px; /* Adjust the height as needed */
        }
        .bg-primary {
            background-color: #090526;
        }
        .bg-secondary {
            background-color: #FFBD20;
        }
        .text-primary {
            color: #090526;
        }
        .text-secondary {
            color: #FFBD20;
        }
        .text-light {
            color: #E0E0E0;
        }
        .bg-dark {
            background-color: #1A1A2E;
        }
        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #FFBD20;
            color: #090526;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s, transform 0.3s;
        }
        .scroll-to-top.show {
            opacity: 1;
            transform: translateY(0);
        }
        .scroll-to-top:hover {
            background-color: #FFA500;
        }
    </style>
</head>
<body class="font-sans bg-dark text-light">

    <!-- Navigation Bar -->
    <nav class="bg-primary text-light p-4">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <a href="#" class="flex items-center">
                <img src="/static/img/logo.png" alt="ByteMagus Co. Logo" class="h-8 mr-3">
                <span class="text-2xl font-bold text-light">ByteMagus Co.</span>
            </a>
            <ul class="flex flex-wrap space-x-4 mt-2">
                <li><a href="#home" class="hover:underline">Home</a></li>
                <li><a href="#features" class="hover:underline">Features</a></li>
                <li><a href="#testimonials" class="hover:underline">Testimonials</a></li>
                <li><a href="#contact" class="hover:underline">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg hero-height flex items-center justify-center text-center text-light">
        <div class="p-8">
            <h1 class="text-4xl font-bold mb-4 text-secondary">Welcome to ByteMagus Co.</h1>
            <p class="text-lg mb-8">Your premier IT partner in the Philippines for network solutions, programming, and software development.</p>
            <a href="#contact" class="bg-secondary hover:bg-yellow-500 text-primary py-2 px-4 rounded">Contact Us</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 text-secondary">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-primary p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4 text-secondary">Network Solutions</h3>
                    <p>Providing comprehensive network services to ensure your connectivity is always up and running.</p>
                </div>
                <div class="bg-primary p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4 text-secondary">Software Development</h3>
                    <p>Expert programming for custom software and application development tailored to your needs.</p>
                </div>
                <div class="bg-primary p-6 rounded shadow">
                    <h3 class="text-xl font-semibold mb-4 text-secondary">IT Consultancy</h3>
                    <p>Offering professional IT advice and support to optimize your technology infrastructure.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-primary py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 text-secondary">What Our Clients Say</h2>
            <div class="flex flex-wrap justify-center">
                <div class="bg-dark p-6 rounded shadow mx-4 my-2 w-full sm:w-1/2 md:w-1/3">
                    <p class="italic">"ByteMagus Co. has transformed our IT infrastructure with their exceptional network solutions."</p>
                    <p class="font-bold mt-4">- John Doe</p>
                </div>
                <div class="bg-dark p-6 rounded shadow mx-4 my-2 w-full sm:w-1/2 md:w-1/3">
                    <p class="italic">"Their custom software development is top-notch. Our business processes are now much smoother."</p>
                    <p class="font-bold mt-4">- Jane Smith</p>
                </div>
                <div class="bg-dark p-6 rounded shadow mx-4 my-2 w-full sm:w-1/2 md:w-1/3">
                    <p class="italic">"Highly recommend ByteMagus Co. for their professional IT consultancy and support."</p>
                    <p class="font-bold mt-4">- Alex Johnson</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 text-secondary">Get in Touch</h2>
            <p class="mb-8">Have questions or need support? Reach out to us!</p>
            <form action="#" method="post" class="mx-auto max-w-lg">
                <div class="flex flex-col mb-4">
                    <label for="name" class="text-left mb-2">Name:</label>
                    <input type="text" id="name" name="name" class="p-2 border border-gray-600 rounded bg-dark text-light" required>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="email" class="text-left mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="p-2 border border-gray-600 rounded bg-dark text-light" required>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="message" class="text-left mb-2">Message:</label>
                    <textarea id="message" name="message" rows="4" class="p-2 border border-gray-600 rounded bg-dark text-light" required></textarea>
                </div>
                <button type="submit" class="bg-secondary hover:bg-yellow-500 text-primary py-2 px-4 rounded">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-light py-4 text-center">
        <p>&copy; 2024 ByteMagus Co. All rights reserved.</p>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="scroll-to-top">
        &uarr;
    </button>

    <script>
        // JavaScript for Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        // Show the button when scrolled down
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });

        // Scroll to top when the button is clicked
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

</body>
</html>
