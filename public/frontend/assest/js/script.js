
document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobileMenuToggle")
  const mobileMenu = document.getElementById("mobileMenu")
  const mobileMenuClose = document.getElementById("mobileMenuClose")

  if (mobileMenuToggle && mobileMenu && mobileMenuClose) {
    mobileMenuToggle.addEventListener("click", () => {
      mobileMenu.classList.add("show")
    })

    mobileMenuClose.addEventListener("click", () => {
      mobileMenu.classList.remove("show")
    })

    // Close mobile menu when clicking outside
    mobileMenu.addEventListener("click", (e) => {
      if (e.target === mobileMenu) {
        mobileMenu.classList.remove("show")
      }
    })
  }

  // Theme toggle functionality
  const themeToggle = document.getElementById("themeToggle")
  const mobileThemeToggle = document.getElementById("mobileThemeToggle")
  const htmlElement = document.documentElement

  function toggleTheme() {
    const currentTheme = htmlElement.getAttribute("data-bs-theme")
    const newTheme = currentTheme === "dark" ? "light" : "dark"
    htmlElement.setAttribute("data-bs-theme", newTheme)
    localStorage.setItem("theme", newTheme)
  }

  // Initialize theme from localStorage or default to dark
  const savedTheme = localStorage.getItem("theme") || "dark"
  htmlElement.setAttribute("data-bs-theme", savedTheme)

  if (themeToggle) {
    themeToggle.addEventListener("click", toggleTheme)
  }

  if (mobileThemeToggle) {
    mobileThemeToggle.addEventListener("click", toggleTheme)
  }

  // Language selection functionality
  const languageItems = document.querySelectorAll("[data-lang]")

  languageItems.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.preventDefault()
      const selectedLang = e.currentTarget.getAttribute("data-lang")
      const selectedText = e.currentTarget.textContent.trim()

      // Update desktop language display
      const desktopLangText = document.querySelector(".nav-language-dropdown .nav-language-text")
      if (desktopLangText) {
        desktopLangText.textContent = selectedLang.toUpperCase()
      }

      // Update mobile language display
      const mobileLangButtons = document.querySelectorAll(".nav-mobile-dropdown .dropdown-toggle")
      mobileLangButtons.forEach((button) => {
        if (
          button.textContent.includes("English") ||
          button.textContent.includes("Español") ||
          button.textContent.includes("Français") ||
          button.textContent.includes("Deutsch")
        ) {
          button.textContent = selectedText
        }
      })

      // Store selected language
      localStorage.setItem("selectedLanguage", selectedLang)

      console.log("Language changed to:", selectedLang)
      // Here you can add actual language switching logic
    })
  })

  // Initialize language from localStorage
  const savedLanguage = localStorage.getItem("selectedLanguage")
  if (savedLanguage) {
    const savedLangItem = document.querySelector(`[data-lang="${savedLanguage}"]`)
    if (savedLangItem) {
      savedLangItem.click()
    }
  }

  // Bootstrap dropdown event listeners (optional - for custom behavior)
  const dropdowns = document.querySelectorAll(".dropdown")
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener("show.bs.dropdown", () => {
      console.log("Dropdown opening")
    })

    dropdown.addEventListener("hide.bs.dropdown", () => {
      console.log("Dropdown closing")
    })
  })
})

function animateWords() {
  const words = document.querySelectorAll(".word-animate");

  words.forEach((word) => {
    word.style.opacity = "0";
    word.style.filter = "blur(5px)";
  });

  words.forEach((word, index) => {
    setTimeout(() => {
      word.style.opacity = "1";
      word.style.filter = "blur(0px)";
    }, index * 300);
  });

  // Fade out all after all have appeared
  const totalDuration = words.length * 300 + 1000;

  setTimeout(() => {
    words.forEach((word) => {
      word.style.opacity = "0";
      word.style.filter = "blur(5px)";
    });
  }, totalDuration - 500); // slight overlap

  // Loop again
  setTimeout(animateWords, totalDuration);
}


// Initialize word animation when page loads
document.addEventListener("DOMContentLoaded", () => {
  // Set initial state for all words
  const words = document.querySelectorAll(".word-animate")
  words.forEach((word) => {
    if (!word.classList.contains("word-blur")) {
      word.style.opacity = "0"
      word.style.filter = "blur(5px)"
    }
  })

  // Start animation after a short delay
  setTimeout(animateWords, 500)
})

// Intersection Observer for scroll animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: "0px 0px -50px 0px",
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = "1"
      entry.target.style.transform = "translateY(0)"
    }
  })
}, observerOptions)

// Observe hero elements for scroll animations
document.addEventListener("DOMContentLoaded", () => {
  const heroElements = document.querySelectorAll(".hero-content, .hero-stats")
  heroElements.forEach((el) => {
    observer.observe(el)
  })
})

$(document).ready(function () {
  let currentTab = '1-step';
  const owlCarousels = {};

  // Simple carousel settings
  const carouselSettings = {
    items: 1,
    center: true,
    loop: true,
    margin: 12,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 500,
    startPosition: 2, // Start at Gold card
    responsive: {
      0: {
        items: 1,
        stagePadding: 50
      },
      576: {
        items: 1,
        stagePadding: 100
      },
      768: {
        items: 2,
        stagePadding: 50
      },
      992: {
        items: 3,
        stagePadding: 0
      },
      1200: {
        items: 4,
        stagePadding: 100
      }
    },
    onInitialized: function (event) {
      updateActiveCard(event.target);
    },
    onChanged: function (event) {
      updateActiveCard(event.target);
    }
  };

  // Initialize all carousels
  owlCarousels['1-step'] = $('#owl-1-step').owlCarousel(carouselSettings);
  owlCarousels['2-steps'] = $('#owl-2-steps').owlCarousel(carouselSettings);
  owlCarousels['xpzero'] = $('#owl-xpzero').owlCarousel(carouselSettings);

  // Simple active card update
  function updateActiveCard(carousel) {
    const $carousel = $(carousel);

    // Remove active from all cards
    $carousel.find('.trading-card').removeClass('active');

    // Add active to center card
    setTimeout(() => {
      $carousel.find('.owl-item.center .trading-card').addClass('active');
    }, 100);
  }

  // Tab switching
  function switchTab(tabName) {
    $('.trading-slider').removeClass('active');
    $('#slider-' + tabName).addClass('active');
    currentTab = tabName;

    if (owlCarousels[tabName]) {
      owlCarousels[tabName].trigger('to.owl.carousel', [2, 300]);
      setTimeout(() => {
        updateActiveCard(owlCarousels[tabName][0]);
      }, 350);
    }
  }

  // Tab click handlers
  $('.trading-tab').on('click', function () {
    $('.trading-tab').removeClass('active');
    $(this).addClass('active');
    switchTab($(this).data('tab'));
  });

  // Card click
  $(document).on('click', '.trading-card', function () {
    const $carousel = $(this).closest('.owl-carousel');
    const itemIndex = $(this).closest('.owl-item').index();
    $carousel.trigger('to.owl.carousel', [itemIndex, 300]);
  });

  // Initialize
  switchTab('1-step');
});
// Challenge Tables Functionality
const challengeTables = {
  "1-step": document.getElementById("challenge-1-step"),
  "2-steps": document.getElementById("challenge-2-steps"),
  xpzero: document.getElementById("challenge-xpzero"),
}

const challengeTabsElements = document.querySelectorAll(".challenge-tab")

let currentChallengeTab = "1-step"

function switchChallengeTab(tabName) {
  // Hide all tables
  Object.values(challengeTables).forEach((table) => {
    if (table) table.classList.remove("active")
  })

  // Show current table
  if (challengeTables[tabName]) {
    challengeTables[tabName].classList.add("active")
  }

  currentChallengeTab = tabName
}

// Challenge Tab functionality
challengeTabsElements.forEach((tab) => {
  tab.addEventListener("click", () => {
    challengeTabsElements.forEach((t) => t.classList.remove("active"))
    tab.classList.add("active")

    const tabName = tab.getAttribute("data-challenge-tab")
    switchChallengeTab(tabName)
  })
})

// Initialize challenge tables
switchChallengeTab("1-step")
