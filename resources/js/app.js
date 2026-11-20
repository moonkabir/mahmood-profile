// Dayem Intelligence & Executive Advisory - Interactive Scripts

// Attach handlers immediately so inline onclick calls always resolve
window.toggleMobileMenu = function() {
    const mobileMenu = document.getElementById('mobile-nav-drawer');
    const backdrop = document.getElementById('mobile-nav-backdrop');
    if (mobileMenu) {
        const isOpen = mobileMenu.classList.toggle('active');
        if (backdrop) backdrop.classList.toggle('active', isOpen);
        document.body.style.overflow = isOpen ? 'hidden' : '';
    }
};

window.closeMobileMenu = function() {
    const mobileMenu = document.getElementById('mobile-nav-drawer');
    const backdrop = document.getElementById('mobile-nav-backdrop');
    if (mobileMenu) {
        mobileMenu.classList.remove('active');
        if (backdrop) backdrop.classList.remove('active');
        document.body.style.overflow = '';
    }
};

// ✦ Search Modal Controls ✦
window.openSearchModal = function() {
    const searchModal = document.getElementById('search-modal');
    if (searchModal) {
        searchModal.classList.add('active');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            const input = searchModal.querySelector('.search-input-field');
            if (input) input.focus();
        }, 100);
    }
};

window.closeSearchModal = function() {
    const searchModal = document.getElementById('search-modal');
    if (searchModal) {
        searchModal.classList.remove('active');
        document.body.style.overflow = '';
    }
};

window.setSearchQuery = function(term) {
    const input = document.getElementById('search-input-field');
    if (input) {
        input.value = term;
        window.filterSearchResults(term);
    }
};

window.filterSearchResults = function(query) {
    const q = (query || '').toLowerCase().trim();
    const items = document.querySelectorAll('.search-result-item');
    let visibleCount = 0;
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (!q || text.includes(q)) {
            item.style.display = 'block';
            visibleCount++;
        } else {
            item.style.display = 'none';
        }
    });
    const emptyNotice = document.getElementById('search-no-results');
    if (emptyNotice) {
        emptyNotice.style.display = visibleCount === 0 ? 'block' : 'none';
    }
};

document.addEventListener('DOMContentLoaded', () => {
    // ✦ Toast Notification Helper ✦
    window.showToast = function(message) {
        let toast = document.getElementById('toast-notice');
        if (!toast) {
            toast = document.createElement('div');
            toast.id = 'toast-notice';
            toast.className = 'toast-notice';
            document.body.appendChild(toast);
        }
        toast.textContent = message;
        toast.classList.add('show');
        setTimeout(() => {
            toast.classList.remove('show');
        }, 3600);
    };

    // ✦ Copy Helper ✦
    window.copyToClipboard = function(text, label) {
        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard.writeText(text).then(() => {
                window.showToast(`Copied ${label} to clipboard: ${text}`);
            }).catch(() => {
                fallbackCopy(text, label);
            });
        } else {
            fallbackCopy(text, label);
        }
    };

    function fallbackCopy(text, label) {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        textarea.style.position = 'fixed';
        textarea.style.left = '-9999px';
        document.body.appendChild(textarea);
        textarea.focus();
        textarea.select();
        try {
            document.execCommand('copy');
            window.showToast(`Copied ${label} to clipboard: ${text}`);
        } catch (err) {
            window.showToast(`Selected ${label}: ${text}`);
        }
        document.body.removeChild(textarea);
    }

    // ✦ Booking & Invitation Modal Controls (Syed Najam Style) ✦
    const bookingModal = document.getElementById('booking-modal');
    window.openBookingModal = function(preferredTrack = '') {
        if (bookingModal) {
            bookingModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            if (preferredTrack) {
                const trackSelect = document.getElementById('engagement-type-select');
                if (trackSelect) {
                    trackSelect.value = preferredTrack;
                }
            }
        }
    };

    window.closeBookingModal = function() {
        if (bookingModal) {
            bookingModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    if (bookingModal) {
        bookingModal.addEventListener('click', (e) => {
            if (e.target === bookingModal) {
                window.closeBookingModal();
            }
        });
    }

    window.handleBookingSubmit = function(e) {
        e.preventDefault();
        const form = e.target;
        const name = form.querySelector('[name="full_name"]')?.value || 'Guest';
        const type = form.querySelector('[name="engagement_type"]')?.value || 'Consultation';
        
        window.closeBookingModal();
        window.showToast(`Thank you, ${name}! Your request for "${type}" has been registered.`);
        form.reset();
    };

    // ✦ VerifiAid™ Framework Modal Controls ✦
    const frameworkModal = document.getElementById('framework-modal');
    window.openFrameworkModal = function() {
        if (frameworkModal) {
            frameworkModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeFrameworkModal = function() {
        if (frameworkModal) {
            frameworkModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    if (frameworkModal) {
        frameworkModal.addEventListener('click', (e) => {
            if (e.target === frameworkModal) {
                window.closeFrameworkModal();
            }
        });
    }

    // ✦ Editorial Article Modal Controls ✦
    const articleModal = document.getElementById('article-modal');
    window.openArticleModal = function() {
        if (articleModal) {
            articleModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    };

    window.closeArticleModal = function() {
        if (articleModal) {
            articleModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    if (articleModal) {
        articleModal.addEventListener('click', (e) => {
            if (e.target === articleModal) {
                window.closeArticleModal();
            }
        });
    }

    // ✦ Search Modal Click Outside ✦
    const searchModal = document.getElementById('search-modal');
    if (searchModal) {
        searchModal.addEventListener('click', (e) => {
            if (e.target === searchModal) {
                window.closeSearchModal();
            }
        });
    }

    // ✦ Newsletter Subscription Handler ✦
    window.handleNewsletterSubmit = function(e) {
        e.preventDefault();
        const email = e.target.querySelector('input[type="email"]')?.value;
        if (email) {
            window.showToast(`Subscribed ${email} to Dayem Intelligence Daily Brief.`);
            e.target.reset();
        }
    };

    // ✦ Global ESC Handler ✦
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            window.closeBookingModal();
            window.closeFrameworkModal();
            window.closeArticleModal();
            window.closeSearchModal();
            window.closeMobileMenu();
        }
    });

    // ✦ Close mobile menu on clicking any navigation anchor ✦
    document.addEventListener('click', (e) => {
        if (e.target.closest('#mobile-nav-drawer a') || e.target.id === 'mobile-nav-backdrop') {
            window.closeMobileMenu();
        }
    });
});
