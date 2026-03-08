if (localStorage.getItem("dark-mode") === "true") {
  document.documentElement.classList.add("dark");
}

function toggleDarkMode() {
  const btn = document.querySelector("header button");
  const isDark = document.documentElement.classList.toggle("dark");
  localStorage.setItem("dark-mode", isDark);
  if (btn) btn.textContent = isDark ? "☀️" : "🌙";
}

const themeBtn = document.querySelector("header button");
if (themeBtn) {
  themeBtn.textContent = document.documentElement.classList.contains("dark")
    ? "☀️"
    : "🌙";
}

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) entry.target.classList.add("show");
    });
  },
  {
    threshold: 0.1,
  },
);

document.querySelectorAll(".fade-in").forEach((el) => observer.observe(el));

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

  document.getElementById(prevBtnId)?.addEventListener("click", prev);
  document.getElementById(nextBtnId)?.addEventListener("click", next);

  function startAuto() {
    clearInterval(autoScroll);
    autoScroll = setInterval(next, intervalTime);
  }

  function stopAuto() {
    clearInterval(autoScroll);
  }

  startAuto();

  wrapper.addEventListener("mouseenter", stopAuto);
  wrapper.addEventListener("mouseleave", () => {
    if (!document.querySelector(".mobile-card.flipped")) startAuto();
  });

  // FIXED SWIPE LOGIC
  wrapper.addEventListener(
    "touchstart",
    (e) => {
      // Removed the "if closest .mobile-card" return so swiping works on cards
      startX = e.touches[0].clientX;
      currentX = startX;
      isSwiping = true;
    },
    {
      passive: true,
    },
  );

  wrapper.addEventListener(
    "touchmove",
    (e) => {
      if (!isSwiping) return;
      currentX = e.touches[0].clientX;
    },
    {
      passive: true,
    },
  );

  wrapper.addEventListener("touchend", () => {
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
    stop: stopAuto,
  };
}

// 4. Initialization
const webCarousel = initCarousel("webCarousel", "prevBtn", "nextBtn", 5000);
// const mobileCarousel = initCarousel("mobileCarousel", "mobilePrev", "mobileNext", 6000);

document.querySelectorAll(".mobile-card").forEach((card) => {
  let cardStartX = 0;

  const toggleFlip = (e) => {
    e.stopPropagation();
    card.classList.toggle("flipped");

    const anyFlipped = document.querySelector(".mobile-card.flipped");
    if (anyFlipped) {
      mobileCarousel?.stop();
    } else {
      mobileCarousel?.start();
    }
  };

  card.addEventListener(
    "touchstart",
    (e) => {
      cardStartX = e.touches[0].clientX;
    },
    {
      passive: true,
    },
  );

  card.addEventListener("touchend", (e) => {
    let cardEndX = e.changedTouches[0].clientX;

    // IMPORTANT: If movement is > 30px, it's a swipe, NOT a flip tap
    if (Math.abs(cardStartX - cardEndX) > 30) return;

    e.preventDefault();
    toggleFlip(e);
  });

  card.addEventListener("click", (e) => {
    // Prevent flip on click if we just performed a swipe
    toggleFlip(e);
  });
});

const carousel = document.getElementById("mobileCarousel");

async function loadApps() {
  const res = await fetch("assets/data/mobile-projects.json");
  const mobileApps = await res.json();

  for (const app of mobileApps) {
    const base = `assets/img/projects/mobile/${app.folder}`;

    const screenshotsHTML = app.screenshots
      .map(
        (img) => `<img src="${base}/${img}" class="h-52 rounded-xl shadow"/>`,
      )
      .join("");

    const slide = `
      <div class="min-w-full flex justify-center items-center p-8">

          <div class="mobile-card perspective w-full max-w-4xl h-[28rem] md:h-80 cursor-pointer">

              <div class="card-inner relative w-full h-full transition-transform duration-700 transform-style-preserve-3d">

                  <!-- FRONT -->
                  <div class="absolute inset-0 bg-white dark:bg-gray-800 rounded-2xl shadow backface-hidden flex flex-col md:flex-row items-center justify-start md:justify-center gap-4 p-6 text-center md:text-left">

                      <img
                          src="${base}/${app.logo}"
                          class="w-24 h-24 md:w-32 md:h-32 object-contain flex-shrink-0"
                      />

                      <div class="flex-1 overflow-y-auto max-h-44 md:max-h-none w-full pr-2">

                          <h5 class="text-xl font-semibold sticky top-0 bg-white dark:bg-gray-800 py-1">
                              ${app.name}
                          </h5>

                          <div class="border-b border-gray-300 dark:border-gray-600 mb-3"></div>

                          <p class="text-sm md:text-md mt-3 text-gray-600 dark:text-gray-300 text-justify">
                              ${app.description}
                          </p>

                          <p class="text-sm md:text-md mt-3 text-indigo-600 dark:text-indigo-400 italic font-medium text-justify">
                              ${app.languages}
                          </p>

                          <!-- STORE BADGES -->
                          <div class="flex gap-4 mt-4 justify-center md:justify-start">

                              <img
                                  src="assets/img/appstore.png"
                                  alt="Download on the App Store"
                                  class="h-10 hover:scale-105 transition"
                              />

                              <img
                                  src="assets/img/playstore.png"
                                  alt="Get it on Google Play"
                                  class="h-10 hover:scale-105 transition"
                              />

                          </div>

                      </div>

                  </div>

                  <!-- BACK -->
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
  const mobileCarousel = initCarousel(
    "mobileCarousel",
    "mobilePrev",
    "mobileNext",
    6000,
  );

  initMobileCards(mobileCarousel);
}

loadApps();

function initMobileCards(mobileCarousel) {
  document.querySelectorAll(".mobile-card").forEach((card) => {
    let cardStartX = 0;

    const toggleFlip = (e) => {
      e.stopPropagation();
      card.classList.toggle("flipped");

      const anyFlipped = document.querySelector(".mobile-card.flipped");

      if (anyFlipped) {
        mobileCarousel?.stop();
      } else {
        mobileCarousel?.start();
      }
    };

    card.addEventListener(
      "touchstart",
      (e) => {
        cardStartX = e.touches[0].clientX;
      },
      {
        passive: true,
      },
    );

    card.addEventListener("touchend", (e) => {
      let cardEndX = e.changedTouches[0].clientX;

      if (Math.abs(cardStartX - cardEndX) > 30) return;

      e.preventDefault();
      toggleFlip(e);
    });

    card.addEventListener("click", toggleFlip);
  });
}
