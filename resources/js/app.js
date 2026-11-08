// Antigravity & Syed Najam Style Interactive Features for Atae Dayem Profile

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
        }, 3200);
    };

    // ✦ Copy Contact Helper ✦
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

    // ✦ Framework Modal Controls ✦
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

    // ✦ Mobile Menu Controls ✦
    const mobileMenu = document.getElementById('mobile-nav-drawer');
    window.toggleMobileMenu = function() {
        if (mobileMenu) {
            const isOpen = mobileMenu.classList.toggle('active');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        }
    };

    window.closeMobileMenu = function() {
        if (mobileMenu) {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    };

    // ✦ Close on ESC ✦
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            window.closeFrameworkModal();
            window.closeMobileMenu();
        }
    });

    // ✦ Close mobile menu on clicking any navigation anchor ✦
    document.querySelectorAll('#mobile-nav-drawer a').forEach(link => {
        link.addEventListener('click', () => {
            window.closeMobileMenu();
        });
    });
});
