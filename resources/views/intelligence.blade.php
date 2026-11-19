<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dayem Intelligence — Humanitarian &amp; Development Intelligence Desk</title>
    <meta name="description" content="Know What’s Changing. Find What’s Possible. Act with Evidence. Independent humanitarian and development intelligence, verified funding radar, due diligence architecture, and regional telemetry.">
    <meta name="author" content="Dayem Mahmood · Atae Dayem">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="top">

    <!-- ✦ 1. TOP LIVE ANNOUNCEMENT RIBBON ✦ -->
    <aside class="top-announcement-ribbon" aria-label="Intelligence Desk Status">
        <div class="inner">
            <div class="ribbon-tagline">
                <span class="dot" aria-hidden="true"></span>
                <span>People · Evidence · Partnerships · Stronger Futures</span>
            </div>
            <div class="ribbon-actions">
                <a href="/" style="color: var(--gold); font-weight: 700;">← Founder Executive Profile (Atae Dayem)</a>
                <span class="badge-date">Daily Edition · Autumn 2026</span>
                <a href="#funding-radar">Funding Radar: <b>5 Active Calls</b> ↗</a>
            </div>
        </div>
    </aside>

    <!-- ✦ 1. BRAND / NAVIGATION (DAYEM INTELLIGENCE) ✦ -->
    <header class="editorial-header">
        <div class="header-inner">
            <a class="brand-group" href="/intelligence" aria-label="Dayem Intelligence Home">
                <div class="brand-mark" aria-hidden="true">Dm</div>
                <div class="brand-text">
                    <h1 class="brand-title">Dayem Intelligence</h1>
                    <p class="brand-sub">Humanitarian &amp; Development Intelligence</p>
                </div>
            </a>

            <!-- Editorial Nav -->
            <nav class="header-nav" aria-label="Primary Navigation">
                <a href="#daily-brief">Daily Brief</a>
                <a href="#funding-radar">Funding Radar</a>
                <a href="#partner-radar">Partner Radar</a>
                <a href="#global-south">Global South</a>
                <a href="#sector-signals">Signals</a>
                <a href="#leader-view">Leader’s View</a>
                <a href="#resources">Resources</a>
                <a href="/">About Founder</a>
            </nav>

            <!-- Actions: Discreet CV & Founder Profile -->
            <div class="header-actions">
                <a class="btn-header-cv" href="/cv" title="View Printable Formal Résumé">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <span>Executive CV</span>
                </a>

                <a class="btn-header-book" href="/" aria-label="View Founder Profile">
                    <span>Founder Profile</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>

                <a class="btn-header-subscribe" href="#newsletter">
                    <span>Subscribe</span>
                </a>

                <button class="mobile-nav-toggle" onclick="toggleMobileMenu()" aria-label="Toggle mobile navigation menu">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <!-- ✦ RESPONSIVE MOBILE NAVIGATION DRAWER & BACKDROP ✦ -->
    <div class="mobile-nav-backdrop" id="mobile-nav-backdrop" onclick="closeMobileMenu()" aria-hidden="true"></div>
    <div class="mobile-nav-drawer" id="mobile-nav-drawer" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Mobile Navigation">
        <div class="mobile-drawer-header">
            <a class="brand-group" href="/intelligence" onclick="closeMobileMenu()">
                <div class="brand-mark" aria-hidden="true">Dm</div>
                <div class="brand-text">
                    <span style="font-weight: 800; font-size: 15px; color: var(--ink);">Dayem Intelligence</span>
                    <p style="font-size: 9px; color: var(--emerald-dark); font-weight: 700; text-transform: uppercase;">Intelligence Desk</p>
                </div>
            </a>
            <button class="mobile-drawer-close" onclick="closeMobileMenu()" aria-label="Close menu">&times;</button>
        </div>

        <nav class="mobile-drawer-nav" aria-label="Mobile Drawer Navigation">
            <a class="mobile-nav-link" href="#daily-brief">
                <span>Daily Brief</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#funding-radar">
                <span>Funding Radar</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#partner-radar">
                <span>Partner Radar</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#global-south">
                <span>Global South Watch</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#sector-signals">
                <span>Sector Signals</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#leader-view">
                <span>Leader’s View</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#resources">
                <span>Research &amp; Toolkits</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="/" style="color: var(--emerald-dark);">
                <span>← Founder Portfolio (Atae Dayem)</span>
                <span class="arrow">↗</span>
            </a>
            <a class="mobile-nav-link" href="/cv" style="color: var(--gold-dark);">
                <span>Executive CV (Printable PDF)</span>
                <span class="arrow">↗</span>
            </a>
        </nav>

        <div class="mobile-drawer-actions">
            <a class="btn-editorial-primary" href="/#booking-hub" style="width: 100%; justify-content: center;">
                <span>Invite Founder / Advisory</span>
                <span>→</span>
            </a>
            <a class="btn-editorial-secondary" href="/" style="width: 100%; justify-content: center;">
                <span>View Founder Profile</span>
                <span>↗</span>
            </a>
        </div>

        <div class="mobile-drawer-footer">
            <strong style="color: var(--ink);">Manchester, United Kingdom</strong>
            <span>Direct Email: <a href="mailto:mail@dayemmahmood.com" style="color: var(--emerald-dark); font-weight: 600;">mail@dayemmahmood.com</a></span>
            <span>Phone: <a href="tel:+447563586168" style="color: var(--ink); font-weight: 600;">07563 586 168</a></span>
        </div>
    </div>

    <main>
        <!-- ✦ 2. HERO SECTION ✦ -->
        <section class="hero-section">
            <div class="container-editorial">
                <div class="hero-grid">
                    <div class="hero-copy">
                        <div class="kicker-pill">
                            <span>✦</span> Intelligence Desk · Autumn 2026 Edition
                        </div>

                        <h2 class="hero-headline">
                            Know What’s Changing.<br/>
                            Find What’s Possible.<br/>
                            <em>Act with Evidence.</em>
                        </h2>

                        <p class="hero-lead">
                            Independent humanitarian and development intelligence for a more effective, fairer and more resilient world. Curated and edited by <strong>Dayem Mahmood</strong> — translating senior operational experience into actionable donor telemetry and field evidence.
                        </p>

                        <div class="hero-actions-row">
                            <a class="btn-editorial-primary" href="#daily-brief">
                                <span>Read Today’s Brief</span>
                                <span>↓</span>
                            </a>
                            <a class="btn-editorial-secondary" href="#funding-radar">
                                <span>Explore Funding Opportunities</span>
                                <span>↗</span>
                            </a>
                            <a class="btn-editorial-gold" href="/">
                                <span>View Founder Executive Profile</span>
                                <span>→</span>
                            </a>
                        </div>
                    </div>

                    <div class="hero-portrait-card">
                        <div class="portrait-photo-wrap">
                            <img src="/images/dayem-portrait.jpg" alt="Dayem Mahmood — Editor &amp; Founder" onerror="this.onerror=null; this.src='/images/dayem-hero.jpg';" />
                            <div class="portrait-badge-overlay">
                                <strong>Dayem Mahmood</strong> · Editor &amp; Founder
                            </div>
                        </div>

                        <div class="portrait-caption">
                            <p class="portrait-quote">“Stronger People, Fairer Futures”</p>
                            <div class="portrait-meta">
                                <div class="portrait-name">
                                    <h2>Dayem Intelligence</h2>
                                    <p>Humanitarian &amp; Development Intelligence</p>
                                </div>
                                <div class="portrait-seal">
                                    <span>Manchester, UK</span><br/>
                                    <a href="/" style="color: var(--emerald-dark); font-weight: 700;">Executive Advisory ↗</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ 3. CREDIBILITY STRIP ✦ -->
        <section class="credibility-strip" aria-label="Quantified track record">
            <div class="container-editorial">
                <div class="credibility-grid">
                    <div class="cred-metric-item">
                        <div class="val">18+</div>
                        <div class="lbl">Years’ experience in international development</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">13+</div>
                        <div class="lbl">Countries of programme delivery</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">£1M+</div>
                        <div class="lbl">Programmes led and managed</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">30+</div>
                        <div class="lbl">Staff and partners supported</div>
                    </div>
                    <div class="cred-pillars">
                        <span>Evidence</span>
                        <span>Analysis</span>
                        <span>Partnerships</span>
                        <span>Practical Insight</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ 4. EIGHT INTELLIGENCE PRODUCTS ✦ -->
        <section class="products-section" id="products">
            <div class="container-editorial">
                <div class="section-head-row">
                    <div class="title-group">
                        <div class="kicker-pill" style="margin-bottom: 6px;">Eight Intelligence Streams</div>
                        <h2>Intelligence products built for humanitarian practitioners.</h2>
                        <p>Actionable data, funding trackers, and operational due diligence designed to cut through noise.</p>
                    </div>
                    <a class="btn-editorial-secondary" href="#daily-brief">Browse Intelligence Desk ↓</a>
                </div>

                <div class="products-grid">
                    <a class="product-card" href="#daily-brief">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">📰</div>
                                <span class="product-tag">Stream 01</span>
                            </div>
                            <h3>Daily Brief</h3>
                            <p>Five vital developments and practical interpretations for leaders.</p>
                        </div>
                        <span class="product-arrow">Read Brief <span>→</span></span>
                    </a>

                    <a class="product-card" href="#funding-radar">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">🎯</div>
                                <span class="product-tag">Stream 02</span>
                            </div>
                            <h3>Funding Radar</h3>
                            <p>Current verified grants, CSR calls, and institutional donor intelligence.</p>
                        </div>
                        <span class="product-arrow">View Radar <span>→</span></span>
                    </a>

                    <a class="product-card" href="#partner-radar">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">🤝</div>
                                <span class="product-tag">Stream 03</span>
                            </div>
                            <h3>Partner Radar</h3>
                            <p>Organisations actively seeking delivery, technical &amp; local partners.</p>
                        </div>
                        <span class="product-arrow">Find Partners <span>→</span></span>
                    </a>

                    <a class="product-card" href="#global-south">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">🌐</div>
                                <span class="product-tag">Stream 04</span>
                            </div>
                            <h3>Global South Watch</h3>
                            <p>Regional vulnerability analysis, funding gaps, and emerging opportunities.</p>
                        </div>
                        <span class="product-arrow">Explore Regions <span>→</span></span>
                    </a>

                    <a class="product-card" href="#global-south">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">📊</div>
                                <span class="product-tag">Stream 05</span>
                            </div>
                            <h3>Data Desk</h3>
                            <p>Key indicators, visual datasets, and funding deficit telemetry.</p>
                        </div>
                        <span class="product-arrow">Inspect Data <span>→</span></span>
                    </a>

                    <a class="product-card" href="/#verifiaid">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">💡</div>
                                <span class="product-tag">Stream 06</span>
                            </div>
                            <h3>Programme Intelligence</h3>
                            <p>Tools, guidance, due diligence frameworks and practical resources.</p>
                        </div>
                        <span class="product-arrow">Audit Tools <span>→</span></span>
                    </a>

                    <a class="product-card" href="#resources">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">📚</div>
                                <span class="product-tag">Stream 07</span>
                            </div>
                            <h3>Research &amp; Resources</h3>
                            <p>Curated evidence, reports, datasets, and field-tested toolkits.</p>
                        </div>
                        <span class="product-arrow">Download Tools <span>→</span></span>
                    </a>

                    <a class="product-card" href="#leader-view">
                        <div>
                            <div class="product-card-top">
                                <div class="product-icon">👥</div>
                                <span class="product-tag">Stream 08</span>
                            </div>
                            <h3>People &amp; Practice</h3>
                            <p>Practitioner voices, executive reflections, and field leadership lessons.</p>
                        </div>
                        <span class="product-arrow">Read Insights <span>→</span></span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ✦ 5, 6, 7 & 8. MAIN THREE-COLUMN INTELLIGENCE DECK ✦ -->
        <section class="deck-section" id="daily-brief">
            <div class="container-editorial">
                <div class="deck-grid">
                    <!-- COLUMN 1: TODAY'S BRIEF -->
                    <div class="deck-column">
                        <div class="column-header">
                            <h3>Today’s Brief</h3>
                            <a class="link-view-all" href="#newsletter">View Archive →</a>
                        </div>

                        <div class="brief-feed">
                            <article class="brief-card">
                                <span class="brief-num">01</span>
                                <div class="brief-content">
                                    <span class="brief-cat">Humanitarian Financing</span>
                                    <h4 class="brief-title">Global humanitarian financing under renewed pressure</h4>
                                    <p class="brief-summary">Funding gaps widen as major crises continue into 2026, with humanitarian plans less than 40% funded on average.</p>
                                </div>
                            </article>

                            <article class="brief-card">
                                <span class="brief-num">02</span>
                                <div class="brief-content">
                                    <span class="brief-cat">Conflict &amp; Displacement</span>
                                    <h4 class="brief-title">Yemen displacement reaches new high</h4>
                                    <p class="brief-summary">Humanitarian access and protection concerns intensify across multiple governorates.</p>
                                </div>
                            </article>

                            <article class="brief-card">
                                <span class="brief-num">03</span>
                                <div class="brief-content">
                                    <span class="brief-cat">Food Security</span>
                                    <h4 class="brief-title">Global food security outlook remains fragile</h4>
                                    <p class="brief-summary">New analysis warns of worsening conditions in vulnerable agro-pastoral belts, with acute food insecurity rising.</p>
                                </div>
                            </article>

                            <article class="brief-card">
                                <span class="brief-num">04</span>
                                <div class="brief-content">
                                    <span class="brief-cat">Climate &amp; Resilience</span>
                                    <h4 class="brief-title">Adaptation funding shows cautious progress</h4>
                                    <p class="brief-summary">Positive signals for resilience programmes, but major gaps remain for the most vulnerable communities.</p>
                                </div>
                            </article>

                            <article class="brief-card">
                                <span class="brief-num">05</span>
                                <div class="brief-content">
                                    <span class="brief-cat">Development Policy</span>
                                    <h4 class="brief-title">New policy shifts to watch</h4>
                                    <p class="brief-summary">Key announcements from UN, World Bank, and bilateral donors on localisation and fragile contexts.</p>
                                </div>
                            </article>
                        </div>

                        <div class="deck-col-footer">
                            <a class="btn-editorial-primary" style="padding: 8px 14px; font-size: 11.5px;" href="#leader-view">Read Full Brief →</a>
                            <span style="font-size: 11px; color: var(--text-muted);">Updated 2 hours ago</span>
                        </div>
                    </div>

                    <!-- COLUMN 2: FUNDING RADAR -->
                    <div class="deck-column" id="funding-radar">
                        <div class="column-header">
                            <h3>Funding Radar</h3>
                            <a class="link-view-all" href="#newsletter">View all calls →</a>
                        </div>

                        <div class="radar-feed">
                            <div class="radar-card">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-open">OPEN</span>
                                    <span class="radar-amount">£10m – £25m</span>
                                </div>
                                <h4 class="radar-title">FCDO — Climate Resilient Livelihoods Programme</h4>
                                <div class="radar-meta">
                                    <span>Global South</span>
                                    <span class="radar-deadline">Deadline: 30 Sep 2026</span>
                                </div>
                            </div>

                            <div class="radar-card">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-open">OPEN</span>
                                    <span class="radar-amount">€5m – €50m</span>
                                </div>
                                <h4 class="radar-title">EU — Humanitarian Aid Response (ECHO)</h4>
                                <div class="radar-meta">
                                    <span>Multiple Countries</span>
                                    <span class="radar-deadline">Deadline: 15 Oct 2026</span>
                                </div>
                            </div>

                            <div class="radar-card">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-partner">PARTNER</span>
                                    <span class="radar-amount">Multiple Awards</span>
                                </div>
                                <h4 class="radar-title">WFP — Local Implementing Partners Roster</h4>
                                <div class="radar-meta">
                                    <span>Africa &amp; Asia</span>
                                    <span class="radar-deadline">Deadline: Ongoing</span>
                                </div>
                            </div>

                            <div class="radar-card">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-open">OPEN</span>
                                    <span class="radar-amount">Up to $10m</span>
                                </div>
                                <h4 class="radar-title">Islamic Development Bank — Water &amp; Sanitation</h4>
                                <div class="radar-meta">
                                    <span>Water Infrastructure</span>
                                    <span class="radar-deadline">Deadline: 20 Oct 2026</span>
                                </div>
                            </div>

                            <div class="radar-card">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-watch">WATCH</span>
                                    <span class="radar-amount">Up to $10m</span>
                                </div>
                                <h4 class="radar-title">Gates Foundation — Food Systems Innovation</h4>
                                <div class="radar-meta">
                                    <span>Smallholder Tech</span>
                                    <span class="radar-deadline">Expected: Q4 2026</span>
                                </div>
                            </div>
                        </div>

                        <div class="deck-col-footer">
                            <a class="btn-editorial-secondary" style="padding: 8px 14px; font-size: 11.5px;" href="#newsletter">Explore all funding opportunities →</a>
                        </div>
                    </div>

                    <!-- COLUMN 3: GLOBAL SOUTH WATCH & PARTNER RADAR -->
                    <div class="deck-column" id="global-south">
                        <div class="column-header">
                            <h3>Global South Watch</h3>
                            <a class="link-view-all" href="#newsletter">All regions →</a>
                        </div>

                        <div class="global-south-box">
                            <div class="south-map-wrap">
                                <img src="/images/global-south-map.svg" alt="Global South Humanitarian Vulnerability Map" style="width: 100%; display: block;" />
                            </div>
                            <div class="south-legend">
                                <span>↑ People in need</span>
                                <span>■ Funding gap</span>
                                <span>⚙ Key developments</span>
                            </div>
                        </div>

                        <div class="column-header" style="margin-top: 10px;" id="partner-radar">
                            <h3>Partner Radar</h3>
                            <a class="link-view-all" href="#newsletter">View all →</a>
                        </div>

                        <div class="partner-radar-list">
                            <div class="partner-item">
                                <div class="partner-item-head">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    <span>NGO seeking WASH partners</span>
                                </div>
                                <p>East Africa · Implementation partner with GPS tracking capacity</p>
                            </div>

                            <div class="partner-item">
                                <div class="partner-item-head">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                    <span>Consortium partners for education programme</span>
                                </div>
                                <p>Multiple countries · Technical partner for displacement learning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ 9. KEY SECTOR SIGNALS ✦ -->
        <section class="signals-section" id="sector-signals">
            <div class="container-editorial">
                <div class="section-head-row" style="margin-bottom: 20px;">
                    <div>
                        <div class="kicker-pill" style="margin-bottom: 4px;">Sector Intelligence</div>
                        <h2 style="font-size: 22px;">Key Sector Signals</h2>
                        <p>Seven defining trends shaping the international humanitarian and development architecture.</p>
                    </div>
                    <a class="link-view-all" href="#leader-view">Deep Dive →</a>
                </div>

                <div class="signals-grid">
                    <div class="signal-pill-card">
                        <div class="signal-icon">📈</div>
                        <div class="signal-name">Humanitarian Financing</div>
                        <div class="signal-desc">Donor priorities, pooling mechanisms &amp; catalytic grants.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">🌱</div>
                        <div class="signal-name">Localisation</div>
                        <div class="signal-desc">Equitable partnership models &amp; direct Southern funding.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">⚡</div>
                        <div class="signal-name">Anticipatory Action</div>
                        <div class="signal-desc">From reactive relief to forecast-based telemetry.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">🌍</div>
                        <div class="signal-name">Climate Resilience</div>
                        <div class="signal-desc">Loss &amp; damage mechanisms and resilient livelihoods.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">🌾</div>
                        <div class="signal-name">Food Security</div>
                        <div class="signal-desc">Agro-pastoral resilience &amp; supply chain continuity.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">🛡️</div>
                        <div class="signal-name">Safeguarding</div>
                        <div class="signal-desc">PSEAH standards, child protection &amp; accountability.</div>
                    </div>

                    <div class="signal-pill-card">
                        <div class="signal-icon">📐</div>
                        <div class="signal-name">Programme Quality</div>
                        <div class="signal-desc">Disciplined MEAL frameworks &amp; milestone verification.</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ 10 & 11. PROGRAMME LEADER’S VIEW & RESOURCES ✦ -->
        <section class="analysis-section" id="leader-view">
            <div class="container-editorial">
                <div class="analysis-grid">
                    <div class="editorial-article-card">
                        <div class="editorial-tag">Programme Leader’s View · Practical Analysis</div>
                        <h3>What humanitarian organisations need to get right on localisation in 2026</h3>
                        <p class="lead">
                            Localisation is no longer optional, but turning policy into practice remains a challenge. Decades of top-down sub-contracting have created compliance gridlocks. Here are five practical steps for programme leaders to genuinely empower national implementing partners without compromising fiduciary assurance.
                        </p>
                        
                        <div style="margin-bottom: 20px;">
                            <button class="btn-editorial-primary" onclick="openArticleModal()" style="font-size: 12.5px; padding: 10px 18px;">
                                <span>Read Full Analysis (8 min read)</span>
                                <span>→</span>
                            </button>
                        </div>

                        <div class="article-author-strip">
                            <div class="author-thumb">
                                <img src="/images/dayem-portrait.jpg" alt="Dayem Mahmood" onerror="this.onerror=null; this.src='/images/dayem-hero.jpg';" />
                            </div>
                            <div class="author-meta">
                                <h4>Dayem Mahmood</h4>
                                <p>Editor &amp; Founder · 21 September 2026 Edition</p>
                            </div>
                        </div>
                    </div>

                    <div id="resources">
                        <div class="column-header">
                            <h3>Research &amp; Resources</h3>
                            <a class="link-view-all" href="#newsletter">View library →</a>
                        </div>

                        <div class="resources-list">
                            <div class="resource-card" onclick="window.showToast('Downloading Humanitarian Financing Outlook 2026...')">
                                <div class="resource-info">
                                    <h4>Humanitarian Financing Outlook 2026</h4>
                                    <p>Multi-donor analysis · Funding gap breakdown</p>
                                </div>
                                <span class="resource-format-tag">PDF · 2.4 MB</span>
                            </div>

                            <div class="resource-card" onclick="window.showToast('Downloading Localisation in Practice Field Guide...')">
                                <div class="resource-info">
                                    <h4>Localisation in Practice: A Field Guide</h4>
                                    <p>Practical toolkit for INGO programme directors</p>
                                </div>
                                <span class="resource-format-tag">PDF · 1.8 MB</span>
                            </div>

                            <div class="resource-card" onclick="window.showToast('Downloading Climate and Humanitarian Action Brief...')">
                                <div class="resource-info">
                                    <h4>Climate &amp; Humanitarian Action</h4>
                                    <p>Key trends, anticipatory triggers &amp; loss mechanisms</p>
                                </div>
                                <span class="resource-format-tag">PDF · 2.1 MB</span>
                            </div>

                            <div class="resource-card" onclick="window.location.href='/#verifiaid'">
                                <div class="resource-info">
                                    <h4>Partner Due Diligence Audit Matrix (VerifiAid™)</h4>
                                    <p>40-check audit spreadsheet &amp; scoring model</p>
                                </div>
                                <span class="resource-format-tag">XLSX · 0.9 MB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ 12. GET THE DAYEM BRIEF ✦ -->
        <section class="newsletter-section" id="newsletter">
            <div class="container-editorial">
                <div class="newsletter-box">
                    <div>
                        <div class="kicker-pill kicker-pill-dark" style="margin-bottom: 8px;">Weekly Intelligence Alerts</div>
                        <h2>Get the Dayem Brief</h2>
                        <p>A concise, practical briefing for executive directors, programme leaders, and funders working across international humanitarian and development programmes.</p>
                    </div>

                    <form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
                        <div class="input-row">
                            <input type="email" placeholder="Your institutional email address..." required aria-label="Email address" />
                            <button type="submit">Subscribe →</button>
                        </div>
                        <div class="newsletter-options">
                            <label><input type="checkbox" checked /> Weekly Brief</label>
                            <label><input type="checkbox" checked /> Key Donor Alerts</label>
                            <label><input type="checkbox" checked /> Sector Signals</label>
                            <span style="opacity: 0.7; margin-left: auto;">No spam. Unsubscribe anytime.</span>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- ✦ 13. INSTITUTIONAL FOOTER ✦ -->
    <footer class="institutional-footer">
        <div class="container-editorial">
            <div class="footer-top-grid">
                <div class="footer-brand">
                    <h3>Dayem Intelligence</h3>
                    <p>
                        Independent humanitarian and development intelligence for a more effective, fairer and more resilient world.
                    </p>
                    <p class="footer-quote">“Stronger People, Fairer Futures”</p>
                </div>

                <div class="footer-col">
                    <h4>Intelligence Streams</h4>
                    <ul>
                        <li><a href="#daily-brief">Daily Brief</a></li>
                        <li><a href="#funding-radar">Funding Radar</a></li>
                        <li><a href="#partner-radar">Partner Radar</a></li>
                        <li><a href="#global-south">Global South Watch</a></li>
                        <li><a href="#sector-signals">Sector Signals</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Founder &amp; Executive</h4>
                    <ul>
                        <li><a href="/" style="color: var(--gold); font-weight: 700;">Atae Dayem Portfolio ↗</a></li>
                        <li><a href="/#verifiaid">VerifiAid™ Due Diligence</a></li>
                        <li><a href="/#case-studies">Impact Showcases</a></li>
                        <li><a href="/cv">Executive CV (Printable PDF) ↗</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Institutional Standards</h4>
                    <ul>
                        <li><a href="#top" onclick="window.showToast('Methodology: Triangulated field telemetry and verified donor data.'); return false;">Methodology</a></li>
                        <li><a href="#top" onclick="window.showToast('Corrections: We maintain strict transparency in editorial updates.'); return false;">Corrections Policy</a></li>
                        <li><a href="#top" onclick="window.showToast('Privacy: We respect practitioner anonymity and strict data ethics.'); return false;">Privacy Policy</a></li>
                        <li><a href="#top" onclick="window.showToast('Terms: Academic and institutional citation guidelines.'); return false;">Terms of Service</a></li>
                        <li><a href="mailto:mail@dayemmahmood.com">Contact Editorial Desk</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    © 2026 Dayem Intelligence · Atae Dayem Syed Mahmood Ullah. All rights reserved. Manchester, United Kingdom.
                </div>
                <div style="display: flex; gap: 16px; align-items: center;">
                    <a href="/">Founder Profile ↗</a>
                    <a href="https://linkedin.com/in/ata-e-dayem-syed-mahmood-ullah" target="_blank" rel="noreferrer">LinkedIn ↗</a>
                    <a href="mailto:mail@dayemmahmood.com">mail@dayemmahmood.com</a>
                    <a href="/cv" style="color: var(--gold);">Formal CV Document ↗</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Article Modal -->
    <div class="modal-overlay" id="article-modal" role="dialog" aria-modal="true" aria-labelledby="article-modal-title">
        <div class="modal-card">
            <button class="modal-close-btn" onclick="closeArticleModal()" aria-label="Close modal">&times;</button>
            <div class="kicker-pill" style="margin-bottom: 8px;">Programme Leader’s View · 8 Min Read</div>
            <h2 id="article-modal-title" style="font-size: 26px; line-height: 1.25; margin-bottom: 8px;">
                What humanitarian organisations need to get right on localisation in 2026
            </h2>
            <div style="font-size: 12px; color: var(--emerald-dark); font-weight: 700; margin-bottom: 20px;">
                By Dayem Mahmood · 21 September 2026 Edition
            </div>
            <div style="font-size: 13.5px; color: var(--text-body); line-height: 1.7; display: flex; flex-direction: column; gap: 14px;">
                <p>
                    For nearly a decade following the Grand Bargain in 2016, the international aid sector has pledged to shift funding and decision-making power to local and national actors. Yet, in 2026, less than 5% of international humanitarian assistance reaches Southern organisations directly.
                </p>
                <h4 style="font-size: 16px; color: var(--ink); margin-top: 6px;">The Five Practical Steps for Programme Directors:</h4>
                <ol style="padding-left: 18px; display: flex; flex-direction: column; gap: 8px;">
                    <li><strong>Equitable Risk Sharing:</strong> Moving away from sub-contractual models where all delivery risk sits with the local partner while overhead margins remain in London or Geneva.</li>
                    <li><strong>Universal Due Diligence Passports:</strong> Standardising compliance criteria through objective models like VerifiAid™ so national NGOs are not forced to undergo 12 redundant audits for 12 different donors.</li>
                    <li><strong>Funding Core Overhead Costs:</strong> Allocating at least 15% of project budgets specifically for local institutional capacity, accounting software, and staff safeguarding retention.</li>
                    <li><strong>Objective Digital Verification:</strong> Using geotagged GPS telemetry and mobile proof-of-work to satisfy donor audit standards without imposing stifling bureaucratic paperwork.</li>
                    <li><strong>Anticipatory Action Clauses:</strong> Embedding pre-approved contingency envelopes into local partner agreements to enable rapid activation during climate disasters.</li>
                </ol>
            </div>
            <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 12px; color: var(--text-muted);">Consult with Dayem Mahmood on localisation.</span>
                <a class="btn-editorial-primary" href="/#booking-hub">
                    <span>Discuss Advisory Engagement →</span>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
