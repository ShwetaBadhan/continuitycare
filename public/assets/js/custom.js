(function () {
	"use strict";

	window.onload = function () {

		// Header Sticky
		const getHeaderId = document.getElementById("navbar");
		if (getHeaderId) {
			window.addEventListener('scroll', event => {
				const height = 200;
				const { scrollTop } = event.target.scrollingElement;
				document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
			});
		}

		// Back to Top JS
		const getId = document.getElementById("backtotop");
		if (getId) {
			const topbutton = document.getElementById("backtotop");
			topbutton.onclick = function (e) {
				window.scrollTo({ top: 0, behavior: "smooth" });
			};
			window.onscroll = function () {
				if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
					topbutton.style.opacity = "1";
				} else {
					topbutton.style.opacity = "0";
				}
			};
		}

		// Preloader JS
		const getPreloaderId = document.getElementById('preloader');
		if (getPreloaderId) {
			getPreloaderId.style.display = 'none';
		}
	};

	// Text Limit
	const paragraphs = document.querySelectorAll('.text_limit'); // Select all paragraphs with class
	paragraphs.forEach(paragraph => {
		const fullText = paragraph.textContent.trim();
		const words = fullText.split(/\s+/);
		const limit = 20;

		if (words.length > limit) {
			const shortText = words.slice(0, limit).join(' ') + '...';
			paragraph.innerHTML = `${shortText} <span class="less-show-btn">Show</span>`;
			let expanded = false;

			paragraph.addEventListener('click', (e) => {
				if (e.target.classList.contains('less-show-btn')) {
					expanded = !expanded;

					if (expanded) {
						paragraph.innerHTML = `${fullText} <span class="less-show-btn">Less</span>`;
					} else {
						paragraph.innerHTML = `${shortText} <span class="less-show-btn">Show</span>`;
					}
				}
			});
		}
	});

	// Services BG Hover Animation JS
	const cards = document.querySelectorAll('.services-single-item');
	let activeCard = null;
	cards.forEach(card => {
		const liquid = document.createElement('span');
		liquid.classList.add('liquid');
		card.appendChild(liquid);

		card.addEventListener('mouseenter', e => {
			// Remove previous active card
			if (activeCard && activeCard !== card) {
				activeCard.classList.remove('active');
				const prevLiquid = activeCard.querySelector('.liquid');
				prevLiquid.style.transform = 'scale(0)';
				prevLiquid.style.opacity = '0';
			}

			// Set new active card
			activeCard = card;
			card.classList.add('active');

			const rect = card.getBoundingClientRect();
			const x = e.clientX - rect.left;
			const y = e.clientY - rect.top;

			liquid.style.left = `${x}px`;
			liquid.style.top = `${y}px`;
			liquid.style.transform = 'scale(80)';
			liquid.style.opacity = '1';
		});

		card.addEventListener('mouseleave', e => {
			// Keep it active if needed — or uncomment below to remove after leave:
			// card.classList.remove('active');
			// liquid.style.transform = 'scale(0)';
			// liquid.style.opacity = '0';
		});
	});

	// Odometer JS
	if ("IntersectionObserver" in window) {
		let counterObserver = new IntersectionObserver(function (entries, observer) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					let counter = entry.target;
					let target = parseInt(counter.innerText, 10); // ✅ Added radix 10
					let step = target / 200;
					let current = 0;
					let timer = setInterval(function () {
						current += step;
						counter.innerText = Math.floor(current);
						if (parseInt(counter.innerText, 10) >= target) { // ✅ Added radix 10
							clearInterval(timer);
						}
					}, 10);
					counterObserver.unobserve(counter);
				}
			});
		});
		let counters = document.querySelectorAll(".counter");
		counters.forEach(function (counter) {
			counterObserver.observe(counter);
		});
	}

	// Partner Slide JS
	var swiper = new Swiper(".partner-slide", {
		slidesPerView: 1,
		spaceBetween: 30,
		centeredSlides: false,
		preventClicks: true,
		loop: false,
		autoHeight: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		pagination: {
			clickable: true,
		},
		breakpoints: {
			0: {
				slidesPerView: 2,
			},
			475: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 5,
			},
			1600: {
				slidesPerView: 6,
			},
		}
	});

	// Testimonial Slide JS
	var swiper = new Swiper(".testimonial-slide", {
		slidesPerView: 1,
		spaceBetween: 0,
		centeredSlides: false,
		preventClicks: true,
		loop: false,
		autoHeight: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		pagination: {
			el: ".swiper-pagination-testimonial",
			clickable: true,
		},
	});

	// Case Study Mouse Hover JS
	const serviceImgItem = document.querySelectorAll(".case-study-single-item-two");
	function followImageCursor(event, serviceImgItem) {
		const contentBox = serviceImgItem.getBoundingClientRect();
		const dx = event.clientX - contentBox.x;
		const dy = event.clientY - contentBox.y;
		serviceImgItem.children[3].style.transform = `translate(${dx}px, ${dy}px)`;
	}
	serviceImgItem.forEach((item, i) => {
		item.addEventListener("mousemove", (event) => {
			setInterval(followImageCursor(event, item), 1000);
		});
	});

	// Banner Slide JS
	var swiper = new Swiper(".banner-slide", {
		slidesPerView: 1,
		spaceBetween: 0,
		centeredSlides: false,
		preventClicks: true,
		loop: false,
		autoHeight: true,
		effect: "fade",
		speed: 1000,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		pagination: {
			el: ".swiper-pagination-banner",
			clickable: true,
		},
	});

	// Case Study Slide JS
	var swiper = new Swiper(".case-study-slide", {
		slidesPerView: 1,
		spaceBetween: 30,
		centeredSlides: false,
		preventClicks: true,
		loop: false,
		autoHeight: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
			pauseOnMouseEnter: true,
		},
		pagination: {
			clickable: true,
			el: ".swiper-pagination-case-study",
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			576: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
			},
			992: {
				slidesPerView: 3,
			},
			1200: {
				slidesPerView: 4,
			},
		}
	});

	// Ukiyo.js
	const parallax = new Ukiyo('.ukiyo', {
		externalRAF: true,
	});

	//smooth scroll
	const lenis = new Lenis({
		duration: 0.75,
		smoothWheel: true,
		smoothTouch: false,
	});

	// animate
	function raf(time) {
		parallax.animate();

		lenis.raf(time);
		requestAnimationFrame(raf);
	}
	requestAnimationFrame(raf);

	// ScrollCue JS
	scrollCue.init();

	// Only For Light & Dark
	const toggleButton = document.getElementById('for-light-dark');
	if (toggleButton) {
		const savedMode = localStorage.getItem('for_mode');

		// Apply saved mode on load
		if (savedMode) {
			document.body.setAttribute('for-dark-light-data-mode', savedMode);
			toggleButton.textContent =
				savedMode === 'for-dark' ? 'Switch To Light' : 'Switch To Dark';
		} else {
			document.body.setAttribute('for-dark-light-data-mode', 'for-light');
			toggleButton.textContent = 'Switch To Dark';
		}

		// Add event listener
		toggleButton.addEventListener('click', () => {
			const currentMode = document.body.getAttribute('for-dark-light-data-mode');
			const newMode = currentMode === 'for-dark' ? 'for-light' : 'for-dark';

			document.body.setAttribute('for-dark-light-data-mode', newMode);
			localStorage.setItem('for_mode', newMode);

			toggleButton.textContent =
				newMode === 'for-dark' ? 'Switch To Light' : 'Switch To Dark';
		});
	}

	// Only For RTL & LTR
	try {
		function setMode(modeName) {
			localStorage.setItem('for_rtl', modeName);
			document.documentElement.className = modeName;

			// Update button text dynamically
			const btn = document.getElementById('rtlToggleBtn');
			if (btn) {
				btn.textContent = modeName === 'rtl' ? 'Switch To LTR' : 'Switch To RTL';
			}
		}

		function toggleMode() {
			if (localStorage.getItem('for_rtl') === 'rtl') {   // ✅ fixed strict equality
				setMode('ltr');
			} else {
				setMode('rtl');
			}
		}

		// Run on load
		(function () {
			if (localStorage.getItem('for_rtl') === 'rtl') {   // ✅ fixed strict equality
				setMode('rtl');
			} else {
				setMode('ltr');
			}

			// Add event listener instead of onclick
			const btn = document.getElementById('rtlToggleBtn');
			if (btn) {
				btn.addEventListener('click', toggleMode);
			}
		})();
	} catch (e) { }

	// Select all buttons with the class 'like-button' Favorite Button
	document.querySelectorAll('.slide-active').forEach(button => {
		// Add click event listener to each button
		button.addEventListener('click', () => {
			// Toggle 'liked' class
			button.classList.toggle('active');
		});
	});

	// Close modal if click is outside the input
	const getCloseModalId = document.getElementById("staticBackdrop");
	if (getCloseModalId) {
		document.addEventListener("click", function (e) {
			const modal = document.querySelector("#staticBackdrop");
			const input = document.querySelector("#searchInput");

			if (modal.classList.contains("show")) {
				// if click is inside input → do nothing
				if (input.contains(e.target)) return;

				// if click is inside modal-content → prevent closing only for input
				if (modal.querySelector(".modal-content").contains(e.target) && !input.contains(e.target)) {
					bootstrap.Modal.getInstance(modal).hide();
				}
			}
		});
	}

})();

// For Mobile Navbar JS
const list = document.querySelectorAll('.mobile-menu-list');
function accordion(e) {
	e.stopPropagation();
	if (this.classList.contains('active')) {
		this.classList.remove('active');
	}
	else if (this.parentElement.parentElement.classList.contains('active')) {
		this.classList.add('active');
	}
	else {
		for (i = 0; i < list.length; i++) {
			list[i].classList.remove('active');
		}
		this.classList.add('active');
	}
}
for (i = 0; i < list.length; i++) {
	list[i].addEventListener('click', accordion);
}


// Google Translate Integration
window.googleTranslateElementInit = function () {
	new google.translate.TranslateElement({
		pageLanguage: 'en',
		includedLanguages: 'en,es,fr,de,hi,zh-CN,ar,pt',
		autoDisplay: false
	}, 'google_translate_element');

};


// Load Google Translate Script
(function () {
	const script = document.createElement('script');
	script.type = 'text/javascript';
	script.src = 'https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';
	document.getElementsByTagName('head')[0].appendChild(script);
})();

document.addEventListener('DOMContentLoaded', function () {
	// Language Switcher with Google Translate
	const languageItems = document.querySelectorAll('[data-lang]');
	const currentLangLabel = document.getElementById('currentLangLabel');

	// Language code mapping for Google Translate
	const langMapping = {
		'en': 'en',
		'es': 'es',
		'fr': 'fr',
		'de': 'de',
		'hi': 'hi',
		'zh': 'zh-CN',
		'ar': 'ar',
		'pt': 'pt'
	};

	languageItems.forEach(item => {
		item.addEventListener('click', function (e) {
			e.preventDefault();
			const lang = this.getAttribute('data-lang');
			const label = this.getAttribute('data-label');

			// Remove active class from all items
			languageItems.forEach(i => i.classList.remove('active'));
			// Add active class to selected item
			this.classList.add('active');

			// Update button label
			currentLangLabel.textContent = label;

			// Store language preference
			localStorage.setItem('language', lang);
			localStorage.setItem('languageLabel', label);

			// Trigger Google Translate
			changeLanguage(langMapping[lang]);

			// Show confirmation
			showNotification(`Language changed to ${label}`);
		});
	});

	function changeLanguage(langCode) {
		let attempts = 0;

		const interval = setInterval(() => {
			const select = document.querySelector('.goog-te-combo');

			if (select) {
				select.value = langCode;
				select.dispatchEvent(new Event('change'));
				clearInterval(interval);
			}

			if (++attempts > 50) clearInterval(interval); // 5 seconds max
		}, 100);
	}


	// Load saved language preference
	const savedLang = localStorage.getItem('language') || 'en';
	const savedLabel = localStorage.getItem('languageLabel') || 'English';

	if (savedLang !== 'en') {
		currentLangLabel.textContent = savedLabel;
		document.querySelector(`[data-lang="${savedLang}"]`)?.classList.add('active');

		// Apply saved language after Google Translate loads
		setTimeout(() => {
			changeLanguage(langMapping[savedLang]);
		}, 1500);
	} else {
		document.querySelector(`[data-lang="en"]`)?.classList.add('active');
	}

	// Font Size Controller
	const DEFAULT_FONT_SIZE = null;
	let currentFontSize = localStorage.getItem('fontSizeLevel') ? parseInt(localStorage.getItem('fontSizeLevel')) : DEFAULT_FONT_SIZE;

	const decreaseBtn = document.getElementById('decreaseFont');
	const increaseBtn = document.getElementById('increaseFont');
	const resetBtn = document.getElementById('resetFont');

	// Only apply saved font size if user has previously adjusted it
	if (currentFontSize !== null) {
		applyFontSize(currentFontSize);
	}

	// Decrease font size
	decreaseBtn.addEventListener('click', function () {
		if (currentFontSize === null) {
			currentFontSize = parseInt(window.getComputedStyle(document.body).fontSize);
		}
		currentFontSize = Math.max(8, currentFontSize - 2);
		applyFontSize(currentFontSize);
		showNotification(`Font size: ${currentFontSize}px`);
	});

	// Increase font size
	increaseBtn.addEventListener('click', function () {
		if (currentFontSize === null) {
			currentFontSize = parseInt(window.getComputedStyle(document.body).fontSize);
		}
		currentFontSize = Math.min(40, currentFontSize + 2);
		applyFontSize(currentFontSize);
		showNotification(`Font size: ${currentFontSize}px`);
	});

	// Reset font size
	resetBtn.addEventListener('click', function () {
		currentFontSize = null;

		document.body.style.fontSize = '';
		document.querySelectorAll('h1, h2, h3, h4, h5, h6').forEach(el => {
			el.style.fontSize = '';
		});

		localStorage.removeItem('fontSizeLevel');
		showNotification('Font size reset to default');
	});

	function applyFontSize(size) {
		if (size === null) return;

		document.body.style.fontSize = size + 'px';

		const h1Size = size * 2.5;
		const h2Size = size * 2;
		const h3Size = size * 1.75;
		const h4Size = size * 1.5;
		const h5Size = size * 1.25;
		const h6Size = size * 1.1;

		document.querySelectorAll('h1').forEach(el => el.style.fontSize = h1Size + 'px');
		document.querySelectorAll('h2').forEach(el => el.style.fontSize = h2Size + 'px');
		document.querySelectorAll('h3').forEach(el => el.style.fontSize = h3Size + 'px');
		document.querySelectorAll('h4').forEach(el => el.style.fontSize = h4Size + 'px');
		document.querySelectorAll('h5').forEach(el => el.style.fontSize = h5Size + 'px');
		document.querySelectorAll('h6').forEach(el => el.style.fontSize = h6Size + 'px');

		if (size <= 8) {
			decreaseBtn.style.opacity = '0.5';
		} else {
			decreaseBtn.style.opacity = '1';
		}

		if (size >= 40) {
			increaseBtn.style.opacity = '0.5';
		} else {
			increaseBtn.style.opacity = '1';
		}

		localStorage.setItem('fontSizeLevel', size);
	}
});
// Show notification function
function showNotification(message) {
	// Remove existing notification if any
	const existing = document.querySelector('.accessibility-notification');
	if (existing) existing.remove();

	const notification = document.createElement('div');
	notification.className = 'accessibility-notification';
	notification.textContent = message;
	notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: linear-gradient(40deg, #0c874c , #025670 );
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        z-index: 9999;
        animation: slideIn 0.3s ease;
        font-size: 14px;
        font-weight: 500;
    `;

	document.body.appendChild(notification);

	setTimeout(() => {
		notification.style.animation = 'slideOut 0.3s ease';
		setTimeout(() => notification.remove(), 300);
	}, 2000);
}

(function removeGoogleTranslateBar() {
	const killBar = () => {
		// Remove iframe
		document.querySelectorAll('iframe.goog-te-banner-frame').forEach(el => {
			el.remove();
		});

		// Reset body position
		document.body.style.top = '0px';
		document.documentElement.style.top = '0px';

		// Kill new injected div
		document.querySelectorAll('.VIpgJd-ZVi9od-ORHb-KE6vqe').forEach(el => {
			el.remove();
		});
	};

	// Run repeatedly (Google reinjects it)
	setInterval(killBar, 300);
})();
 function showResults() {
            document.getElementById('searchPage').style.display = 'none';
            document.getElementById('resultsPage').classList.add('show');
        }

function openContactModal(facilityName) {
            document.getElementById('facilityName').textContent = facilityName;
            const modal = new bootstrap.Modal(document.getElementById('contactModal'));
            modal.show();
        }

        function submitForm(event) {
            event.preventDefault();
            alert('Thank you! Your inquiry has been submitted successfully. We will contact you soon.');
            const modal = bootstrap.Modal.getInstance(document.getElementById('contactModal'));
            modal.hide();
            event.target.reset();
        }

		var thumbSwiper = new Swiper(".product-thumb-swiper", {
  spaceBetween: 10,
  slidesPerView: 4,
  watchSlidesProgress: true,
  loop: true
});

var mainSwiper = new Swiper(".product-swiper", {
  spaceBetween: 10,
  loop: true,
  navigation: {
    nextEl: ".product-next",
    prevEl: ".product-prev",
  },
  thumbs: {
    swiper: thumbSwiper,
  },
});
 function openSurvey() {
        document.getElementById('surveyOverlay').style.display = 'flex';
    }

    function closeSurvey() {
        const modal = document.getElementById('surveyModal');
        modal.style.animation = 'slideDown 0.3s ease-out';

        setTimeout(() => {
            document.getElementById('surveyOverlay').style.display = 'none';
            modal.style.animation = 'slideUp 0.4s ease-out';
        }, 300);
    }

  

    // Close on overlay click
    document.getElementById('surveyOverlay').addEventListener('click', function(e) {
        if (e.target === this) closeSurvey();
    });
  function showTab(tabName) {
            // Hide all content
            const contents = document.querySelectorAll('.activity-content');
            contents.forEach(content => content.classList.remove('active'));
            
            // Remove active class from all buttons
            const buttons = document.querySelectorAll('.tab-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Show selected content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked button
            event.target.closest('.tab-btn').classList.add('active');
        }


		document.querySelectorAll('.case-left').forEach(item=>{
    item.addEventListener('click',()=>{
        document.querySelectorAll('.case-item')
        .forEach(i=>i.classList.remove('active'));

        item.parentElement.classList.add('active');
    });
});