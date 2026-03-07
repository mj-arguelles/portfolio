<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mar Jude Arguelles | Mobile Developer</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        (function() {
            const userPref = localStorage.getItem('dark-mode');
            const systemPref = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (userPref === 'true' || (userPref === null && systemPref)) {
                document.documentElement.classList.add('dark');
            }
        })();

        tailwind.config = {
            darkMode: 'class'
        }
    </script>

    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease;
        }

        .fade-in.show {
            opacity: 1;
            transform: translateY(0);
        }

        .perspective {
            perspective: 1200px;
        }

        .transform-style-preserve-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        .rotate-y-180 {
            transform: rotateY(180deg);
        }

        /* Hover Flip */
        .mobile-card:hover .card-inner {
            transform: rotateY(180deg);
        }

        /* Tap Flip */
        .mobile-card.flipped .card-inner {
            transform: rotateY(180deg);
        }
    </style>
    </style>
</head>

<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-100 font-sans">

    <!-- Navbar -->
    <header class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Mar Jude Arguelles</h1>
            <div class="flex items-center gap-6">
                <nav class="space-x-6 text-sm font-medium hidden md:block">
                    <a href="#about" class="hover:text-blue-600">About</a>
                    <a href="#experience" class="hover:text-blue-600">Experience</a>
                    <a href="#projects" class="hover:text-blue-600">Projects</a>
                    <a href="#contact" class="hover:text-blue-600">Contact</a>
                </nav>
                <button onclick="toggleDarkMode()" class="px-3 py-1 rounded-lg border text-sm">🌙</button>
            </div>
        </div>
    </header>

    <!-- Hero -->
    <section class="py-24">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col-reverse md:flex-row items-center gap-12">

                <!-- Text -->
                <div class="flex-1 text-center md:text-left fade-in">
                    <h2 class="text-4xl md:text-5xl font-extrabold mb-4">
                        Hi, I'm <span class="text-blue-600">Mar Jude Arguelles</span>
                    </h2>

                    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-xl mx-auto md:mx-0 text-justify">
                        Mobile Developer specializing in building high-performance, cross-platform applications.
                        I create scalable mobile systems with clean architecture, real-time data integration, and
                        seamless user experiences. My focus is delivering reliable, business-driven mobile solutions
                        that perform smoothly across devices.
                    </p>

                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#projects"
                            class="px-6 py-3 bg-blue-600 text-white rounded-2xl hover:bg-blue-700 transition">
                            View Projects
                        </a>

                        <a href="assets/files/Mar Jude Arguelles.pdf" target="_blank" download
                            class="px-6 py-3 border rounded-2xl hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                            Download Resume
                        </a>
                    </div>
                </div>

                <!-- Image -->
                <div class="flex-1 flex justify-center fade-in">
                    <img src="assets/img/profile.jpeg" alt="Mar Jude Arguelles"
                        class="w-64 h-64 md:w-80 md:h-80 object-cover rounded-full shadow-xl border-4 border-white dark:border-gray-700" />
                </div>

            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="bg-white dark:bg-gray-800 py-20 fade-in">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold mb-6">About Me</h3>
            <p class="leading-relaxed text-gray-600 dark:text-gray-300 max-w-3xl text-justify">
                Based in the Philippines, I specialize in cross-platform mobile development and scalable backend
                systems. My stack includes Flutter (Android and iOS), Firebase, Laravel, Node.js, Python, MySQL,
                PostgreSQL, and TailwindCSS. Also have worked using Google Appsheets for internal tools and automation.
                With over 6 years of experience, I have a proven track record of delivering high-quality mobile
                applications and web platforms that drive business growth.<br>
                I focus on performance, maintainability, and delivering real-world business solutions.
            </p>
        </div>
    </section>

    <!-- Experience -->
    <section id="experience" class="py-20 fade-in">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold mb-10">Experience</h3>

            <div class="space-y-8 max-w-3xl">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
                    <h4 class="font-semibold">Full Stack Mobile Developer</h4>
                    <p class="text-sm text-gray-500">2022 – Present</p>
                    <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">
                        Developed and maintained cross-platform mobile apps using Flutter, integrated with Firebase for
                        real-time data sync, authentication, and push notifications. Built scalable backend APIs with
                        Node.js and Python, ensuring high performance and reliability. Built numerous internal tools and
                        automation using Google Appsheets, streamlining workflows and improving operational efficiency.
                    </p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow">
                    <h4 class="font-semibold">Full Stack Laravel Developer</h4>
                    <p class="text-sm text-gray-500">2018 – 2020</p>
                    <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">
                        Designed and implemented web applications using Laravel and MySQL, focusing on clean
                        architecture and maintainable code. Developed responsive front-end interfaces with TailwindCSS,
                        ensuring seamless user experiences across devices. Collaborated with cross-functional teams to
                        deliver business-driven solutions that met client requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="bg-white dark:bg-gray-800 py-20 fade-in">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold mb-12">Projects</h3>

            <!-- Web -->
            <div class="mb-16">
                <h4 class="text-xl font-semibold mb-6">
                    Web
                </h4>

                <div class="relative max-w-4xl mx-auto">

                    <!-- Carousel Wrapper -->
                    <div class="overflow-hidden">
                        <div id="webCarousel" class="flex transition-transform duration-700 ease-in-out">

                            <!-- Slide 1 -->
                            <div
                                class="min-w-full flex flex-col md:flex-row items-center justify-center gap-8 p-8 text-center md:text-left">
                                <img src="assets/img/billing-logo.png" class="w-32 h-32 object-contain" />

                                <div>
                                    <h5 class="text-xl font-semibold">
                                        Billing & Collection System
                                    </h5>
                                    <p class="text-sm mt-3 text-gray-600 dark:text-gray-300 max-w-md">
                                        Laravel + MySQL platform for automated billing,
                                        reporting, and payment tracking.
                                    </p>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div
                                class="min-w-full flex flex-col md:flex-row items-center justify-center gap-8 p-8 text-center md:text-left">
                                <img src="assets/img/portfolio-logo.png" class="w-32 h-32 object-contain" />

                                <div>
                                    <h5 class="text-xl font-semibold">
                                        Company Portfolio Platform
                                    </h5>
                                    <p class="text-sm mt-3 text-gray-600 dark:text-gray-300 max-w-md">
                                        SEO-optimized website with CMS integration
                                        and responsive UI using TailwindCSS.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button id="prevBtn"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-700 p-3 rounded-full shadow hover:scale-110 transition">
                        ‹
                    </button>

                    <button id="nextBtn"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-700 p-3 rounded-full shadow hover:scale-110 transition">
                        ›
                    </button>

                </div>
            </div>

            <!-- Mobile -->
            <div class="mt-20">
                <?php /* <h4 class="text-xl font-semibold mb-6">Mobile</h4> */ ?>
                <div class="relative max-w-4xl mx-auto">

                    <div class="overflow-hidden">
                        <div id="mobileCarousel" class="flex transition-transform duration-700 ease-in-out">


                        </div>
                    </div>

                    <!-- Controls -->
                    <button id="mobilePrev"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-700 p-3 rounded-full shadow hover:scale-110 transition">
                        ‹
                    </button>

                    <button id="mobileNext"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white dark:bg-gray-700 p-3 rounded-full shadow hover:scale-110 transition">
                        ›
                    </button>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 text-center fade-in">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-2xl font-bold mb-6">Contact</h3>

            <p class="text-gray-600 dark:text-gray-300 mb-10">
                Open for freelance, collaboration, and full-time opportunities.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">

                <!-- Email Button -->
                <a href="mailto:ramj.arguelles@gmail.com?subject=Project%20Inquiry&body=Hi%20MJ,%0A%0AI%20would%20like%20to%20discuss%20a%20mobile%20development%20project.%0A%0AThanks,"
                    class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-2xl hover:bg-blue-700 transition">

                    <!-- Mail Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75M21.75 6.75L12 13.5 2.25 6.75M21.75 6.75A2.25 2.25 0 0019.5 4.5H4.5A2.25 2.25 0 002.25 6.75" />
                    </svg>

                    Email Me
                </a>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/639615271817" target="_blank"
                    class="flex items-center justify-center gap-2 px-6 py-3 bg-green-500 text-white rounded-2xl hover:bg-green-600 transition">

                    <!-- WhatsApp Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12.04 2C6.5 2 2 6.49 2 12.03c0 1.95.51 3.85 1.48 5.52L2 22l4.6-1.43A9.94 9.94 0 0012.04 22C17.58 22 22 17.51 22 11.97 22 6.49 17.58 2 12.04 2zm5.56 14.54c-.23.64-1.36 1.18-1.88 1.26-.48.07-1.09.1-1.76-.12-.41-.13-.94-.31-1.62-.6-2.84-1.22-4.7-4.07-4.85-4.27-.15-.2-1.15-1.53-1.15-2.92 0-1.39.73-2.08.99-2.37.26-.29.57-.36.76-.36.19 0 .38 0 .55.01.18.01.42-.07.66.5.23.55.79 1.91.86 2.05.07.14.11.3.02.49-.09.2-.13.32-.26.49-.13.16-.27.36-.39.48-.13.13-.26.27-.11.53.15.26.68 1.12 1.46 1.81 1 .89 1.85 1.17 2.11 1.3.26.13.41.11.57-.07.16-.18.69-.8.87-1.08.18-.27.36-.23.6-.14.25.09 1.58.75 1.85.89.27.14.45.2.51.31.06.12.06.7-.17 1.34z" />
                    </svg>

                    WhatsApp
                </a>

                <!-- Call Button -->
                <a href="tel:+639615271817"
                    class="flex items-center justify-center gap-2 px-6 py-3 border rounded-2xl hover:bg-gray-200 dark:hover:bg-gray-700 transition">

                    <!-- Phone Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h2.28a2 2 0 011.97 1.68l.33 2a2 2 0 01-.45 1.7l-1.27 1.27a16 16 0 006.59 6.59l1.27-1.27a2 2 0 011.7-.45l2 .33A2 2 0 0121 16.72V19a2 2 0 01-2 2h-1C9.16 21 3 14.84 3 7V5z" />
                    </svg>

                    Call Me
                </a>

            </div>
        </div>
    </section>

    <footer class="bg-white dark:bg-gray-800 py-6 text-center text-sm text-gray-500">
        ©
        <script>
            document.write(new Date().getFullYear())
        </script> Mar Jude Arguelles. All rights reserved.
    </footer>

    <script>
        if (localStorage.getItem('dark-mode') === 'true') {
            document.documentElement.classList.add('dark');
        }

        function toggleDarkMode() {
            const btn = document.querySelector('header button');
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('dark-mode', isDark);
            if (btn) btn.textContent = isDark ? '☀️' : '🌙';
        }

        const themeBtn = document.querySelector('header button');
        if (themeBtn) {
            themeBtn.textContent = document.documentElement.classList.contains('dark') ? '☀️' : '🌙';
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) entry.target.classList.add('show');
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

        function initCarousel(carouselId, prevBtnId, nextBtnId, intervalTime = 5000) {
            const carousel = document.getElementById(carouselId);
            if (!carousel) return null;

            const wrapper = carousel.parentElement;
            const slides = carousel.children.length;

            let index = 0;
            let autoScroll;
            let startX = 0;
            let currentX = 0;
            let isSwiping = false;

            function update() {
                carousel.style.transform = `translateX(-${index * 100}%)`;
            }

            function next() {
                index = (index + 1) % slides;
                update();
            }

            function prev() {
                index = (index - 1 + slides) % slides;
                update();
            }

            document.getElementById(prevBtnId)?.addEventListener('click', prev);
            document.getElementById(nextBtnId)?.addEventListener('click', next);

            function startAuto() {
                clearInterval(autoScroll);
                autoScroll = setInterval(next, intervalTime);
            }

            function stopAuto() {
                clearInterval(autoScroll);
            }

            startAuto();

            wrapper.addEventListener('mouseenter', stopAuto);
            wrapper.addEventListener('mouseleave', () => {
                if (!document.querySelector('.mobile-card.flipped')) startAuto();
            });

            // FIXED SWIPE LOGIC
            wrapper.addEventListener('touchstart', (e) => {
                // Removed the "if closest .mobile-card" return so swiping works on cards
                startX = e.touches[0].clientX;
                currentX = startX;
                isSwiping = true;
            }, {
                passive: true
            });

            wrapper.addEventListener('touchmove', (e) => {
                if (!isSwiping) return;
                currentX = e.touches[0].clientX;
            }, {
                passive: true
            });

            wrapper.addEventListener('touchend', () => {
                if (!isSwiping) return;
                let diff = startX - currentX;

                if (diff > 50) {
                    prev(); // Swipe Left
                } else if (diff < -50) {
                    next(); // Swipe Right
                }
                isSwiping = false;
            });

            return {
                start: startAuto,
                stop: stopAuto
            };
        }

        // 4. Initialization
        const webCarousel = initCarousel("webCarousel", "prevBtn", "nextBtn", 5000);
        // const mobileCarousel = initCarousel("mobileCarousel", "mobilePrev", "mobileNext", 6000);

        document.querySelectorAll('.mobile-card').forEach(card => {
            let cardStartX = 0;

            const toggleFlip = (e) => {
                e.stopPropagation();
                card.classList.toggle('flipped');

                const anyFlipped = document.querySelector('.mobile-card.flipped');
                if (anyFlipped) {
                    mobileCarousel?.stop();
                } else {
                    mobileCarousel?.start();
                }
            };

            card.addEventListener('touchstart', (e) => {
                cardStartX = e.touches[0].clientX;
            }, {
                passive: true
            });

            card.addEventListener('touchend', (e) => {
                let cardEndX = e.changedTouches[0].clientX;

                // IMPORTANT: If movement is > 30px, it's a swipe, NOT a flip tap
                if (Math.abs(cardStartX - cardEndX) > 30) return;

                e.preventDefault();
                toggleFlip(e);
            });

            card.addEventListener('click', (e) => {
                // Prevent flip on click if we just performed a swipe
                toggleFlip(e);
            });
        });
    </script>

    <script>
        const carousel = document.getElementById("mobileCarousel");

        async function loadApps() {

            const res = await fetch("assets/data/mobile-projects.json");
            const mobileApps = await res.json();

            for (const app of mobileApps) {

                const base = `assets/img/projects/mobile/${app.folder}`;

                const screenshotsHTML = app.screenshots
                    .map(img => `<img src="${base}/${img}" class="h-52 rounded-xl shadow"/>`)
                    .join("");

                const slide = `
        <div class="min-w-full flex justify-center p-8">
            <div class="mobile-card perspective w-full max-w-4xl h-80 cursor-pointer">

                <div class="card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">

                    <div class="absolute inset-0 bg-white dark:bg-gray-800 rounded-2xl shadow backface-hidden flex flex-col md:flex-row items-center justify-center gap-8 p-8 text-center md:text-left">

                        <img src="${base}/${app.logo}" class="w-32 h-32 object-contain"/>

                        <div>
                            <h5 class="text-xl font-semibold">${app.name}</h5>
                            <p class="text-md mt-3 text-gray-600 dark:text-gray-300 max-w-md text-justify">
                                ${app.description}
                            </p>
                            <p class="text-md mt-3 text-gray-600 dark:text-gray-300 max-w-md italic text-justify">
                                ${app.languages}
                            </p>
                        </div>

                    </div>

                    <div class="absolute inset-0 bg-gray-100 dark:bg-gray-900 rounded-2xl shadow rotate-y-180 backface-hidden flex gap-4 justify-center items-center p-6">
                        ${screenshotsHTML}
                    </div>

                </div>
            </div>
        </div>
        `;

                carousel.insertAdjacentHTML("beforeend", slide);
            }

            // initCarousel();
            const mobileCarousel = initCarousel("mobileCarousel", "mobilePrev", "mobileNext", 6000);

            initMobileCards(mobileCarousel);
        }

        loadApps();
    </script>

    <script>
        function initMobileCards(mobileCarousel) {

            document.querySelectorAll('.mobile-card').forEach(card => {

                let cardStartX = 0;

                const toggleFlip = (e) => {
                    e.stopPropagation();
                    card.classList.toggle('flipped');

                    const anyFlipped = document.querySelector('.mobile-card.flipped');

                    if (anyFlipped) {
                        mobileCarousel?.stop();
                    } else {
                        mobileCarousel?.start();
                    }
                };

                card.addEventListener('touchstart', (e) => {
                    cardStartX = e.touches[0].clientX;
                }, {
                    passive: true
                });

                card.addEventListener('touchend', (e) => {

                    let cardEndX = e.changedTouches[0].clientX;

                    if (Math.abs(cardStartX - cardEndX) > 30) return;

                    e.preventDefault();
                    toggleFlip(e);

                });

                card.addEventListener('click', toggleFlip);

            });

        }
    </script>

</body>

</html>