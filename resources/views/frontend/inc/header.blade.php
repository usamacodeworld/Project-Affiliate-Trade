<nav class="nav-header">
    <div class="nav-container">
        <!-- Mobile Menu Toggle -->
        <div class="nav-mobile-toggle">
            <button type="button" id="mobileMenuToggle">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em"
                     width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Logo Section -->
        <div class="nav-logo-section">
            <a href="/">
                <img alt="Logo Light" loading="lazy" width="290" height="70" decoding="async"
                     class="nav-logo nav-logo-light" src="{{asset('essentials/logo.png')}}">
                <img alt="Logo Dark" loading="lazy" width="290" height="70" decoding="async"
                     class="nav-logo nav-logo-dark" src="{{asset('essentials/logo.png')}}">
            </a>
        </div>

        <!-- Mobile Login Icon -->
        <div class="nav-mobile-login">
            <a href="https://my.propxp.com/login" target="_blank">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                     width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path
                        d="M11 7 9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5-5-5zm9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8v14z">
                    </path>
                </svg>
            </a>
        </div>

        <!-- Desktop Navigation Menu -->
        <div class="nav-desktop-menu">
            <div class="nav-menu-item">
                <a class="nav-menu-link" href="/Rules">Rules</a>
            </div>
            <div class="nav-menu-item">
                <a class="nav-menu-link" href="/Blog">Blog</a>
            </div>
            <div class="nav-menu-item">
                <a class="nav-menu-link" href="/Academy">Academy</a>
            </div>
            <div class="nav-menu-item">
                <a class="nav-menu-link" href="/Partners">Partners</a>
            </div>
            <div class="nav-menu-item">
                <div class="dropdown nav-dropdown">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/FAQ">FAQ</a></li>
                        <li><a class="dropdown-item" href="/about-us">About Us</a></li>
                        <li><a class="dropdown-item" href="/contact-us">Contact Us</a></li>
                        <li><a class="dropdown-item" href="/how-it-works">How It Works</a></li>
                        <li><a class="dropdown-item" href="/support">Support</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Desktop Controls -->
        <div class="nav-desktop-controls">
            <!-- Theme Toggle -->
            <button class="nav-theme-toggle" type="button" id="themeToggle">
                <span class="nav-theme-slider"></span>
                <span class="nav-theme-icon nav-theme-sun">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2v2m6.364 1.636l-1.414 1.414M20 12h2m-1.636 6.364l-1.414-1.414M12 20v2m-6.364-1.636l1.414-1.414M4 12H2m1.636-6.364l1.414 1.414M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                <span class="nav-theme-icon nav-theme-moon">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 3c.132 0 .263.002.393.007a9 9 0 008.784 10.196A9 9 0 1112 3z"></path>
                        </svg>
                    </span>
            </button>

            <!-- Language Selector -->
            <div class="dropdown nav-language-dropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('frontend/assest/images/uk.png')}}" alt="UK Flag" class="nav-flag">
                    <span class="nav-language-text">EN</span>
                    <div class="nav-language-arrow">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10l5 5 5-5" stroke="#007bff" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="#" data-lang="en">
                            <img src="https://flagcdn.com/gb.svg" alt="UK Flag" class="me-2"
                                 style="width: 20px; height: 20px; border-radius: 50%;">
                            English
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-lang="es">
                            <img src="https://flagcdn.com/es.svg" alt="Spain Flag" class="me-2"
                                 style="width: 20px; height: 20px; border-radius: 50%;">
                            Español
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-lang="fr">
                            <img src="https://flagcdn.com/fr.svg" alt="France Flag" class="me-2"
                                 style="width: 20px; height: 20px; border-radius: 50%;">
                            Français
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-lang="de">
                            <img src="https://flagcdn.com/de.svg" alt="Germany Flag" class="me-2"
                                 style="width: 20px; height: 20px; border-radius: 50%;">
                            Deutsch
                        </a>
                    </li>
                </ul>

            </div>

            <!-- Login Button -->
            <a href="https://my.propxp.com/login" target="_blank" class="nav-login-button">Login</a>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="nav-mobile-menu" id="mobileMenu">
        <button class="nav-mobile-close" type="button" id="mobileMenuClose">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 352 512" height="1em"
                 width="1em" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg>
        </button>

        <div class="nav-mobile-logo">
            <a href="/">
                <img alt="Logo Light" loading="lazy" width="290" height="63.81" decoding="async"
                     class="nav-logo-light" src="/placeholder.svg?height=64&width=290">
                <img alt="Logo Dark" loading="lazy" width="290" height="63.81" decoding="async"
                     class="nav-logo-dark" src="/placeholder.svg?height=64&width=290">
            </a>
        </div>

        <a class="nav-mobile-link" href="/Rules">Rules</a>
        <a class="nav-mobile-link" href="/Blog">Blog</a>
        <a class="nav-mobile-link" href="/Academy">Academy</a>
        <a class="nav-mobile-link" href="/Partners">Partners</a>

        <div class="dropdown nav-mobile-dropdown">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/FAQ">FAQ</a></li>
                <li><a class="dropdown-item" href="/about-us">About Us</a></li>
                <li><a class="dropdown-item" href="/contact-us">Contact Us</a></li>
                <li><a class="dropdown-item" href="/how-it-works">How It Works</a></li>
                <li><a class="dropdown-item" href="/support">Support</a></li>
            </ul>
        </div>

        <a href="https://my.propxp.com/login" target="_blank" class="nav-mobile-login-btn">Login</a>

        <div class="dropdown nav-mobile-dropdown">
            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                English
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" data-lang="en">
                        <img src="/placeholder.svg?height=20&width=20" alt="UK Flag" class="me-2"
                             style="width: 20px; height: 20px; border-radius: 50%;">
                        English
                    </a></li>
                <li><a class="dropdown-item" href="#" data-lang="es">
                        <img src="/placeholder.svg?height=20&width=20" alt="Spain Flag" class="me-2"
                             style="width: 20px; height: 20px; border-radius: 50%;">
                        Español
                    </a></li>
                <li><a class="dropdown-item" href="#" data-lang="fr">
                        <img src="/placeholder.svg?height=20&width=20" alt="France Flag" class="me-2"
                             style="width: 20px; height: 20px; border-radius: 50%;">
                        Français
                    </a></li>
                <li><a class="dropdown-item" href="#" data-lang="de">
                        <img src="/placeholder.svg?height=20&width=20" alt="Germany Flag" class="me-2"
                             style="width: 20px; height: 20px; border-radius: 50%;">
                        Deutsch
                    </a></li>
            </ul>
        </div>

        <div class="nav-mobile-theme">
            <span class="nav-mobile-theme-label">Theme mode:</span>
            <button class="nav-theme-toggle" type="button" id="mobileThemeToggle">
                <span class="nav-theme-slider"></span>
                <span class="nav-theme-icon nav-theme-sun">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 2v2m6.364 1.636l-1.414 1.414M20 12h2m-1.636 6.364l-1.414-1.414M12 20v2m-6.364-1.636l1.414-1.414M4 12H2m1.636-6.364l1.414 1.414M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </span>
                <span class="nav-theme-icon nav-theme-moon">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 3c.132 0 .263.002.393.007a9 9 0 008.784 10.196A9 9 0 1112 3z"></path>
                        </svg>
                    </span>
            </button>
        </div>
    </div>
</nav>
