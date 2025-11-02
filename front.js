// 🌀 Swiper for Hero Section
var swiper = new Swiper(".mySwiper", {
  loop: true,
  slidesPerView: 1,
  allowTouchMove: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 800,
});

// 🏞️ Tabs for Destination Sections
const tabs = document.querySelectorAll(".tab");
const grids = document.querySelectorAll(".destination-grid");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabs.forEach((t) => t.classList.remove("active"));
    tab.classList.add("active");

    grids.forEach((grid) => (grid.style.display = "none"));
    document.getElementById(tab.dataset.region).style.display = "grid";
  });
});

// 🏕️ Swiper for Categories
var swiperCategory = new Swiper(".categorySwiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    1024: { slidesPerView: 3 },
  },
});

// 🌍 Trending Cards Scroll
const wrapper = document.querySelector(".trending-wrapper");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
let scrollAmount = 0;
const cardWidth = 270; // card + gap

if (wrapper && prevBtn && nextBtn) {
  nextBtn.addEventListener("click", () => {
    scrollAmount += cardWidth;
    if (scrollAmount > wrapper.scrollWidth - wrapper.clientWidth) {
      scrollAmount = 0;
    }
    wrapper.style.transform = `translateX(-${scrollAmount}px)`;
  });

  prevBtn.addEventListener("click", () => {
    scrollAmount -= cardWidth;
    if (scrollAmount < 0) {
      scrollAmount = wrapper.scrollWidth - wrapper.clientWidth;
    }
    wrapper.style.transform = `translateX(-${scrollAmount}px)`;
  });
}

// 🧭 Interest Tabs Filter
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".interest-tabs .tab");
  const cards = document.querySelectorAll(".package-card");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      tabs.forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");

      const category = tab.getAttribute("data-category");
      cards.forEach((card) => {
        card.classList.remove("show");
        if (card.getAttribute("data-category") === category) {
          card.classList.add("show");
        }
      });
    });
  });
});

// 💬 Feedback Tabs
const tabButtons = document.querySelectorAll(".tab-btn");
const feedbackCards = document.querySelectorAll(".feedback-card");

tabButtons.forEach((button) => {
  button.addEventListener("click", () => {
    tabButtons.forEach((btn) => btn.classList.remove("active"));
    feedbackCards.forEach((card) => card.classList.remove("active"));

    button.classList.add("active");
    const tabId = button.getAttribute("data-tab");
    document.getElementById(tabId).classList.add("active");
  });
});


document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-item");

  faqItems.forEach(item => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {
      // Close all open FAQs first
      faqItems.forEach(i => {
        if (i !== item) i.classList.remove("active");
      });

      // Toggle the clicked FAQ
      item.classList.toggle("active");
    });
  });
});
