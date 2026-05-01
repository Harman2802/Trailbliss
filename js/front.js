
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

// 🏞️ Tabs for FAQ Sections
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






// Get today's date in YYYY-MM-DD format
const today = new Date();
const yyyy = today.getFullYear();
let mm = today.getMonth() + 1; // Months start at 0
let dd = today.getDate();

if (mm < 10) mm = '0' + mm;
if (dd < 10) dd = '0' + dd;

const minDate = `${yyyy}-${mm}-${dd}`;


// 🏞️ Tabs for Book your Trip

// Set the min attribute of the date input
document.getElementById('travelDate').setAttribute('min', minDate);
document.addEventListener("DOMContentLoaded", () => {
  const openBtn = document.getElementById("openQuote");
  const closeBtn = document.getElementById("closePopup");
  const overlay = document.getElementById("quoteOverlay");

  openBtn.addEventListener("click", (e) => {
    e.preventDefault();
    overlay.classList.add("active");
  });

  closeBtn.addEventListener("click", () => {
    overlay.classList.remove("active");
  });

  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) {
      overlay.classList.remove("active");
    }
  });
});



// 🏞️ Tabs for Book your tickets

document.addEventListener("DOMContentLoaded", () => {

  /* ===== OPEN / CLOSE POPUP (SAFE) ===== */
  const openBtn = document.querySelector(".open-ticket-popup");
  const popup = document.getElementById("ticketPopup");
  const closeBtn = popup ? popup.querySelector(".close-popup") : null;

  if (openBtn && popup) {
    openBtn.addEventListener("click", () => popup.classList.add("active"));
  }

  if (closeBtn) {
    closeBtn.addEventListener("click", () => popup.classList.remove("active"));
  }

  if (popup) {
    popup.addEventListener("click", (e) => {
      if (e.target === popup) popup.classList.remove("active");
    });
  }

  /* ===== TABS ===== */
  const tabs = document.querySelectorAll(".ticket-tabs .tab");
  const contents = document.querySelectorAll(".tab-content");
  const ticketType = document.getElementById("ticketType");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      tab.classList.add("active");
      const activeTab = document.getElementById(tab.dataset.tab);
      if (activeTab) activeTab.classList.add("active");

      if (ticketType) ticketType.value = tab.dataset.tab;
    });
  });

  /* ===== FLIGHT TRIP TYPE ===== */
  const tripOptions = document.querySelectorAll(".trip-option");
  const returnDate = document.querySelector(".return-date");

  tripOptions.forEach(option => {
    option.addEventListener("click", () => {
      tripOptions.forEach(o => o.classList.remove("active"));
      option.classList.add("active");

      if (returnDate) {
        if (option.dataset.trip === "round") {
          returnDate.style.display = "block";
          returnDate.required = true;
        } else {
          returnDate.style.display = "none";
          returnDate.value = "";
          returnDate.required = false;
        }
      }
    });
  });

  /* ===== DATE MIN TODAY ===== */
  const today = new Date().toISOString().split("T")[0];
  document.querySelectorAll("#ticketPopup input[type='date']")
    .forEach(input => input.setAttribute("min", today));

  /* ===== SEARCH FORM (REDIRECT VERSION) ===== */
const ticketForm = document.getElementById("ticketForm");

if (ticketForm) {
  ticketForm.addEventListener("submit", (e) => {

    // 🔎 JS validation (optional but safe)
    const activeTab = document.querySelector(".tab-content.active");
    const inputs = activeTab.querySelectorAll("input");

    for (let input of inputs) {
      if (
        input.type !== "checkbox" &&
        input.type !== "hidden" &&
        input.style.display !== "none" &&
        !input.value.trim()
      ) {
        alert("Please fill all fields");
        input.focus();
        e.preventDefault(); // stop submit ONLY if invalid
        return;
      }
    }

    // ✅ IMPORTANT: DO NOT preventDefault here
    // Browser will now redirect to search-results.php
  });
}

});


document.addEventListener("DOMContentLoaded", () => {

  const bookBtn = document.querySelector(".book-ticket-btn");
  const popup   = document.getElementById("ticketPopup");
  const closeBtn = document.querySelector(".close-popup");

  if (!bookBtn || !popup) return;

  // OPEN POPUP
  bookBtn.addEventListener("click", (e) => {
    e.preventDefault();
    popup.style.display = "flex";
    document.body.style.overflow = "hidden"; // stop background scroll
  });

  // CLOSE POPUP
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      popup.style.display = "none";
      document.body.style.overflow = "auto";
    });
  }

  // CLICK OUTSIDE TO CLOSE
  popup.addEventListener("click", (e) => {
    if (e.target === popup) {
      popup.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });

});

 history.pushState(null, "", location.href); window.onpopstate = function () { window.location.href = "front.php";  };


