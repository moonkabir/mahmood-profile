<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atae Dayem Syed Mahmood Ullah — International Programmes &amp; Transformation Leader</title>
    <meta name="description" content="18+ years across international humanitarian assistance, multi-country programme delivery, governance architecture, budget negotiation, and £1m+ portfolio leadership.">
    <meta name="keywords" content="Atae Dayem Syed Mahmood Ullah, Dayem Mahmood, International Programmes Leader, Programme Governance, Humanitarian Assistance, VerifiAid, Minhaj Welfare Foundation, Dayemi Foundation">
    <meta name="author" content="Atae Dayem Syed Mahmood Ullah">

    <meta property="og:title" content="Atae Dayem Syed Mahmood Ullah — International Programmes &amp; Transformation Leader">
    <meta property="og:description" content="Bridging UK charity governance with on-the-ground operational delivery across 13+ nations. From 1,000 annual clean water installations to £1m+ fixed-deadline humanitarian aid.">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-home" id="top">

    <!-- ✦ BESPOKE LIVE STATUS TICKER RIBBON ✦ -->
    <div class="live-status-ribbon">
        <div class="status-indicator">
            <span class="status-dot" aria-hidden="true"></span>
            <span>Current Executive Portfolio</span>
        </div>
        <div>
            Leading Multi-Country Programmes (£1M+ Portfolio) &amp; Operational Governance ·
            <a href="#governance" onclick="openFrameworkModal(); return false;">
                Explore VerifiAid™ Framework <b>→</b>
            </a>
        </div>
    </div>

    <!-- ✦ ELEVATED STICKY HEADER ✦ -->
    <header class="home-header">
        <a class="brand-crest-group" href="#top">
            <div class="brand-crest" aria-hidden="true">AD</div>
            <div class="brand-titles">
                <span class="brand-title-main">
                    Atae Dayem <span class="star">✦</span>
                </span>
                <span class="brand-title-sub">Syed Mahmood Ullah</span>
            </div>
        </a>

        <nav aria-label="Main navigation">
            <a href="#pillars">Capabilities</a>
            <a href="#about">Perspective</a>
            <a href="#governance">VerifiAid™</a>
            <a href="#global">Global Footprint</a>
            <a href="#experience">Career History</a>
            <a href="#education">Credentials</a>
        </nav>

        <div class="home-header-actions">
            <button class="mobile-nav-toggle" onclick="toggleMobileMenu()" aria-label="Open mobile navigation">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <a class="btn-header-secondary" href="/cv">Executive CV</a>
            <a class="btn-header-primary" href="#contact">Connect / Inquire</a>
        </div>
    </header>

    <!-- ✦ MOBILE NAVIGATION DRAWER ✦ -->
    <div class="mobile-nav-drawer" id="mobile-nav-drawer" aria-hidden="true">
        <div class="mobile-nav-header">
            <span>Atae Dayem <em>✦</em></span>
            <button class="mobile-nav-close" onclick="toggleMobileMenu()" aria-label="Close menu">&times;</button>
        </div>
        <nav>
            <a href="#top">Overview <span>↗</span></a>
            <a href="#pillars">Core Capabilities <span>↗</span></a>
            <a href="#about">The Perspective <span>↗</span></a>
            <a href="#governance">VerifiAid™ Framework <span>↗</span></a>
            <a href="#global">Global Footprint (13+) <span>↗</span></a>
            <a href="#experience">Career History <span>↗</span></a>
            <a href="#education">Credentials &amp; Tools <span>↗</span></a>
            <a href="/cv">Executive CV (Printable) <span>↗</span></a>
            <a href="#contact">Contact &amp; Connect <span>↗</span></a>
        </nav>
        <div class="mobile-nav-footer">
            <p><strong>Manchester, United Kingdom</strong></p>
            <p>mail@dayemmahmood.com · 07563 586 168</p>
        </div>
    </div>

    <main>
        <!-- ✦ HERO SECTION ✦ -->
        <section class="home-hero">
            <div class="home-hero-copy">
                <div class="hero-badge-pill">
                    <span>✦</span> 18+ Years Transforming International Charity Portfolios
                </div>
                <h1>Strategic Governance.<br/><em>Humanitarian Delivery at Scale.</em></h1>
                <p>
                    Bridging high-level UK charity governance with on-the-ground operational delivery across South Asia, the Middle East, and vulnerable communities. From 1,000 annual clean water installations to £1m+ fixed-deadline humanitarian aid.
                </p>
                <div class="home-actions">
                    <a class="btn-hero-primary" href="#pillars">
                        <span>Explore Core Capabilities</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    <a class="btn-hero-outline" href="#governance">
                        <span>VerifiAid™ Assurance Model</span>
                        <span>↗</span>
                    </a>
                    <a class="hero-cv-link" href="/cv">
                        <span>Download Executive CV (PDF)</span>
                        <span>→</span>
                    </a>
                </div>
            </div>

            <!-- Bespoke Executive Showcase Card (Elevated & Distinctive) -->
            <div class="hero-showcase-container">
                <!-- Floating Badge Top-Right -->
                <div class="floating-badge floating-badge-top">
                    <div class="icon-box" aria-hidden="true">🏆</div>
                    <div>
                        <b>MSc Project Management</b>
                        <small>Graduated with Distinction · UWE Bristol</small>
                    </div>
                </div>

                <!-- Main Executive Frame -->
                <div class="executive-frame-card">
                    <div class="exec-card-header">
                        <div class="exec-seal-emblem">AD</div>
                        <span class="exec-tag">Senior Executive</span>
                    </div>

                    <div class="exec-card-body">
                        <h3>Atae Dayem</h3>
                        <p class="title">Head of Programmes &amp; Projects · MWF UK</p>

                        <div class="exec-metrics-strip">
                            <div class="exec-metric-col">
                                <strong>£1M+</strong>
                                <span>Portfolio</span>
                            </div>
                            <div class="exec-metric-col">
                                <strong>13+</strong>
                                <span>Nations</span>
                            </div>
                            <div class="exec-metric-col">
                                <strong>9</strong>
                                <span>Partners</span>
                            </div>
                        </div>

                        <p style="font-size: 12.5px; color: #a4bece; line-height: 1.6; margin: 0;">
                            Overseeing multi-country humanitarian delivery, partner due diligence, and board-level risk assurance across South Asia and international hubs.
                        </p>
                    </div>
                </div>

                <!-- Floating Badge Bottom-Left -->
                <div class="floating-badge floating-badge-bottom">
                    <div class="icon-box" aria-hidden="true">🛡️</div>
                    <div>
                        <b>VerifiAid™ Creator</b>
                        <small>40-Check Multi-Tier Partner Assurance</small>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ PROOF & METRIC TICKER BAR ✦ -->
        <section class="home-proof" aria-label="Quantified performance records">
            <div class="proof-item">
                <strong>£1M+</strong>
                <span>Annual Portfolio</span>
            </div>
            <div class="proof-item">
                <strong>13+</strong>
                <span>Nations Delivered</span>
            </div>
            <div class="proof-item">
                <strong>9</strong>
                <span>Delivery Partners</span>
            </div>
            <div class="proof-item">
                <strong>1,000</strong>
                <span>Annual Water Wells</span>
            </div>
            <div class="proof-item">
                <strong>UN ECOSOC</strong>
                <span>Consultative NGO</span>
            </div>
            <div class="proof-item">
                <strong>99%</strong>
                <span>On-Time Delivery</span>
            </div>
        </section>

        <!-- ✦ CORE CAPABILITIES / STRATEGIC PILLARS ✦ -->
        <section class="home-talk-preview" id="pillars">
            <div class="home-section-intro">
                <div>
                    <p>Core Capabilities</p>
                    <h2>Disciplined programme design.<br/><em>Transformational delivery at scale.</em></h2>
                </div>
                <a href="#experience">Explore career milestones <span>→</span></a>
            </div>

            <div class="home-talk-grid">
                <!-- Pillar 01 -->
                <article class="home-talk-card">
                    <div class="card-top-row">
                        <span class="card-number">01</span>
                        <svg class="card-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <small class="card-tag">Portfolio Standards</small>
                    <h3>Programme Transformation</h3>
                    <p class="card-summary">
                        Helped transition Minhaj Welfare Foundation from ad-hoc emergency delivery into structured programme scopes, outcome expectations, standardised templates, and systematic delivery controls across 13+ countries.
                    </p>
                    <div class="card-metric-badge">Standardised Portfolios Across 13+ Countries</div>
                    <b class="card-arrow" aria-hidden="true">↗</b>
                </article>

                <!-- Pillar 02 -->
                <article class="home-talk-card">
                    <div class="card-top-row">
                        <span class="card-number">02</span>
                        <svg class="card-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <small class="card-tag">Execution &amp; Scale</small>
                    <h3>Delivery Performance</h3>
                    <p class="card-summary">
                        Coordinated nine delivery partners across two fixed-deadline seasonal food distribution programmes in 2026, achieving 99% on-time completion across a combined budget of approximately £1m.
                    </p>
                    <div class="card-metric-badge">99% On-Time Execution · 9 Partners</div>
                    <b class="card-arrow" aria-hidden="true">↗</b>
                </article>

                <!-- Pillar 03 -->
                <article class="home-talk-card">
                    <div class="card-top-row">
                        <span class="card-number">03</span>
                        <svg class="card-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                        </svg>
                    </div>
                    <small class="card-tag">Infrastructure &amp; WASH</small>
                    <h3>Clean Water Access</h3>
                    <p class="card-summary">
                        Oversaw delivery controls for ~1,000 rural water installations annually with 100% on-schedule completion, linking installation records, contractor payments, GPS coordinates, and independent site inspections.
                    </p>
                    <div class="card-metric-badge">1,000 Annual Installs · 100% On-Schedule</div>
                    <b class="card-arrow" aria-hidden="true">↗</b>
                </article>

                <!-- Pillar 04 -->
                <article class="home-talk-card">
                    <div class="card-top-row">
                        <span class="card-number">04</span>
                        <svg class="card-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <small class="card-tag">Institutional Alliances</small>
                    <h3>Partnership Growth</h3>
                    <p class="card-summary">
                        Negotiated repeat multi-year delivery scopes with international NGOs (including an ongoing ~£150,000 annual scope), achieving an 80% submission approval rate (12 of 15 project proposals approved).
                    </p>
                    <div class="card-metric-badge">80% Win Rate · 12 of 15 Approved</div>
                    <b class="card-arrow" aria-hidden="true">↗</b>
                </article>
            </div>
        </section>

        <!-- ✦ THE PERSPECTIVE / ABOUT SECTION ✦ -->
        <section class="home-about" id="about">
            <div class="home-about-heading">
                <small>The Perspective</small>
                <h2>Eighteen years inside humanitarian leadership. A career rooted in accountability, dignity and scale.</h2>
            </div>

            <div class="home-about-story">
                <p>
                    Atae Dayem combines strategic programme design with hands-on multi-country delivery, partnership negotiation, risk management and operational process improvement.
                </p>
                <p>
                    At Minhaj Welfare Foundation (MWF), he leads the programmes and projects function, translating senior executive decisions into disciplined plans, partner scopes, and delivery controls across Pakistan, Bangladesh, and beyond.
                </p>
                <p>
                    In 2007, he founded Dayemi Foundation, steering its growth into a six-branch humanitarian and development organisation with UN ECOSOC Special Consultative Status, caring for 550+ children in residential care and sustaining programs reaching nearly 500,000 people.
                </p>
                <a href="#experience">Explore full professional history <span>↓</span></a>
            </div>

            <!-- Role Cards -->
            <div class="home-role-cards">
                <article>
                    <span>01</span>
                    <h3>Executive Leadership</h3>
                    <p>Head of Programmes &amp; Projects at Minhaj Welfare Foundation UK, steering £1m+ annual budgets, 9 delivery partners, and board reporting.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>NGO Governance</h3>
                    <p>Founder &amp; Non-Executive Director at Dayemi Foundation, serving as client-side governance lead for a 100-bed residential facility.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>Assurance Innovation</h3>
                    <p>Designer of VerifiAid™ 40-check partner assurance architecture and digital tracking workflows linking field proof to payment approval.</p>
                </article>
            </div>

            <!-- Tech / Experience Proof Bar -->
            <div class="home-tech-proof" aria-label="Key leadership credentials">
                <span>
                    <b>18+ Years</b>
                    Humanitarian assistance &amp; international development
                </span>
                <span>
                    <b>MWF UK · Dayemi</b>
                    Multi-country programme oversight across 13+ nations
                </span>
                <span>
                    <b>MSc Distinction · MBA · Lean</b>
                    Rigorous project management &amp; governance standards
                </span>
            </div>
        </section>

        <!-- ✦ MEASURABLE PERFORMANCE / DIFFERENCE SECTION ✦ -->
        <section class="speaker-difference">
            <div>
                <small>Operational Rigour</small>
                <h2>Disciplined controls.<br/><em>Proven outcomes.</em></h2>
            </div>
            <div>
                <p>
                    International aid requires unbending adherence to compliance, local sensitivity, and transparent verification. Every programme is designed around clear approval gates, measurable deliverables, and verified field evidence.
                </p>
                <div class="speaker-difference-facts">
                    <span>
                        <b>99% On-Time</b>
                        Coordinated 9 partners across 2 fixed-deadline food programmes (£1m budget)
                    </span>
                    <span>
                        <b>1,000 Installations</b>
                        Annual rural water installations overseen with 100% on-schedule completion
                    </span>
                    <span>
                        <b>80% Win Rate</b>
                        Contributed to 15 project submissions with 12 approved and funded
                    </span>
                    <span>
                        <b>£150k Repeat Scope</b>
                        Annual delivery scope developed and negotiated with international NGOs
                    </span>
                    <span>
                        <b>550+ Children</b>
                        Full residential care, education, and health infrastructure built at Dayemi
                    </span>
                    <span>
                        <b>~500,000 Reach</b>
                        Cumulative reach achieved across multi-year humanitarian interventions
                    </span>
                </div>
            </div>
        </section>

        <!-- ✦ PROPRIETARY GOVERNANCE INNOVATION: VERIFIAID™ (BESPOKE HUB) ✦ -->
        <section class="governance-hub-section" id="governance">
            <div class="governance-header-group">
                <div>
                    <small>Proprietary Assurance Innovation</small>
                    <h2>VerifiAid™: 40-Check Assurance.<br/><em>Six Weighted Risk Categories.</em></h2>
                </div>
                <div>
                    <button class="btn-gold-primary" onclick="openFrameworkModal()">
                        <span>Launch 40-Check Matrix Explorer</span>
                        <span>→</span>
                    </button>
                </div>
            </div>

            <!-- Overview Box -->
            <div class="governance-overview-box">
                <div class="governance-overview-copy">
                    <p class="lead">
                        Designed to eliminate operational blind spots in international charity delivery. VerifiAid™ replaces informal, ad-hoc reviews with an objective, institutional-grade due diligence framework.
                    </p>
                    <p class="details">
                        Piloted across nine implementing partners at Minhaj Welfare Foundation, the model links legal compliance, sanctions screening, financial reserves, child safeguarding, delivery capacity, and on-site geotagged GPS verification to formal milestone payment approvals.
                    </p>
                </div>
                <div class="governance-stats-card">
                    <strong>40</strong>
                    <span>Audit Checks</span>
                    <div style="font-size: 11px; color: var(--gold); margin-top: 10px; font-weight: 800;">6 Weighted Categories</div>
                </div>
            </div>

            <!-- Six Interactive Category Cards -->
            <div class="pillar-tabs-container">
                <!-- 01 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 01 · 15%</span>
                    <h4>Due Diligence</h4>
                    <small>Legal status, trust deed, board conflicts &amp; NGO registration validation.</small>
                </div>

                <!-- 02 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 02 · 20%</span>
                    <h4>Sanctions &amp; AML</h4>
                    <small>UN/UK OFSI screening, PEP checks, counter-terror financing &amp; anti-fraud protocols.</small>
                </div>

                <!-- 03 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 03 · 20%</span>
                    <h4>Financial Health</h4>
                    <small>Audited accounts, bank signatory mandates, reserve policies &amp; ledger reviews.</small>
                </div>

                <!-- 04 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 04 · 15%</span>
                    <h4>Safeguarding</h4>
                    <small>PSEA standards, child protection codes, whistleblower lines &amp; police vetting.</small>
                </div>

                <!-- 05 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 05 · 15%</span>
                    <h4>Delivery Capacity</h4>
                    <small>Field technical staffing, storage/cold-chain, logistics &amp; sub-contractor control.</small>
                </div>

                <!-- 06 -->
                <div class="pillar-tab-card" onclick="openFrameworkModal()">
                    <span class="num">TIER 06 · 15%</span>
                    <h4>Site Verification</h4>
                    <small>GPS water coordinates, independent inspections &amp; geotagged photo sign-offs.</small>
                </div>
            </div>

            <!-- Footer Action Strip -->
            <div class="governance-actions-strip">
                <button class="btn-gold-primary" onclick="openFrameworkModal()">
                    Explore Full 40-Check Audit Matrix <b>→</b>
                </button>
                <div class="empactflow-tag">
                    <span class="badge">Next Generation</span>
                    <span><strong>EmpactFlow™</strong> workflow automation engine currently in active development.</span>
                </div>
            </div>
        </section>

        <!-- ✦ GLOBAL FOOTPRINT & COMMUNITY SECTION ✦ -->
        <section class="home-community" id="global">
            <div class="home-community-copy">
                <small>Multi-Country Operations</small>
                <h2>Programmes delivered in service—<br/><em>across 13+ nations.</em></h2>
                <p>
                    Translating senior leadership decisions into coordinated partner scopes and operational implementation across Pakistan, Bangladesh, Cox’s Bazar, and international partner hubs.
                </p>
                <a href="#experience">View full deployment history <span>→</span></a>
                <p class="home-community-principle">
                    <span>✦</span> Needs-based design · dignity before spotlight
                </p>
            </div>

            <div class="home-location-grid">
                <!-- Location 01 -->
                <a href="#experience">
                    <article>
                        <div class="location-bg-pattern" style="background: radial-gradient(circle at top right, #0d8275 0%, #0b1a28 75%);"></div>
                        <div class="location-shade" aria-hidden="true"></div>
                        <span>01</span>
                        <div class="location-mark" aria-hidden="true">✦</div>
                        <div class="location-copy">
                            <h3>Pakistan</h3>
                            <small>1,000+ Annual Water Wells &amp; Emergency Food Distributions</small>
                        </div>
                        <b aria-hidden="true">↗</b>
                    </article>
                </a>

                <!-- Location 02 -->
                <a href="#experience">
                    <article>
                        <div class="location-bg-pattern" style="background: radial-gradient(circle at top right, #df9e35 0%, #0b1a28 75%);"></div>
                        <div class="location-shade" aria-hidden="true"></div>
                        <span>02</span>
                        <div class="location-mark" aria-hidden="true">✦</div>
                        <div class="location-copy">
                            <h3>Bangladesh</h3>
                            <small>Dayemi Foundation Hub, 6 Regional Branches &amp; Childcare</small>
                        </div>
                        <b aria-hidden="true">↗</b>
                    </article>
                </a>

                <!-- Location 03 -->
                <a href="#experience">
                    <article>
                        <div class="location-bg-pattern" style="background: radial-gradient(circle at top right, #c04930 0%, #0b1a28 75%);"></div>
                        <div class="location-shade" aria-hidden="true"></div>
                        <span>03</span>
                        <div class="location-mark" aria-hidden="true">✦</div>
                        <div class="location-copy">
                            <h3>Cox’s Bazar</h3>
                            <small>Refugee &amp; Host Community Emergency Interventions</small>
                        </div>
                        <b aria-hidden="true">↗</b>
                    </article>
                </a>

                <!-- Location 04 -->
                <a href="#experience">
                    <article>
                        <div class="location-bg-pattern" style="background: radial-gradient(circle at top right, #0d8275 0%, #07131e 75%);"></div>
                        <div class="location-shade" aria-hidden="true"></div>
                        <span>04</span>
                        <div class="location-mark" aria-hidden="true">✦</div>
                        <div class="location-copy">
                            <h3>United Kingdom</h3>
                            <small>Minhaj Welfare Foundation Strategic Programmes &amp; Governance Hub</small>
                        </div>
                        <b aria-hidden="true">↗</b>
                    </article>
                </a>

                <!-- Location 05 -->
                <a href="#experience">
                    <article>
                        <div class="location-bg-pattern" style="background: radial-gradient(circle at top right, #df9e35 0%, #07131e 75%);"></div>
                        <div class="location-shade" aria-hidden="true"></div>
                        <span>05</span>
                        <div class="location-mark" aria-hidden="true">✦</div>
                        <div class="location-copy">
                            <h3>International Emergency</h3>
                            <small>Multi-Country Humanitarian Response &amp; 13+ Partner Geographies</small>
                        </div>
                        <b aria-hidden="true">↗</b>
                    </article>
                </a>
            </div>
        </section>

        <!-- ✦ CAREER TIMELINE / PROFESSIONAL EXPERIENCE ✦ -->
        <section class="experience-section" id="experience">
            <div class="home-section-intro">
                <div>
                    <p>Professional Experience</p>
                    <h2>Eighteen years of disciplined<br/>delivery and transformation.</h2>
                </div>
                <a href="mailto:mail@dayemmahmood.com">Inquire about advisory roles <span>→</span></a>
            </div>

            <div class="experience-grid">
                <!-- Role 1 -->
                <article class="experience-card">
                    <div class="experience-header">
                        <div class="experience-role-title">
                            <h3>Head of Programmes &amp; Projects</h3>
                            <div class="experience-org">Minhaj Welfare Foundation (MWF), UK · International charity delivering across 13+ countries</div>
                        </div>
                        <span class="experience-date-badge">Jan 2026 – Present</span>
                    </div>
                    <p class="experience-summary">
                        Lead the programmes and projects function, overseeing a £1m+ annual portfolio and strengthening programme standards, approval gates, delivery controls and reporting.
                    </p>
                    <ul class="experience-bullets">
                        <li>Translate senior leadership decisions into programme plans, budgets, partner scopes and implementation arrangements; provide recommendations on feasibility, cost, risk and delivery capacity.</li>
                        <li>Coordinate delivery partners and cross-functional teams across Pakistan, Bangladesh and other programme locations, distinguishing direct line management from wider team coordination of up to 30 people.</li>
                        <li>Oversee programme delivery across food assistance, water access, orphan sponsorship, emergency response and humanitarian interventions, from initiation through procurement, verification, reconciliation and closure.</li>
                        <li>Negotiate project budgets and delivery costs with partners; support needs-based programme design, local consultation, capacity assessment and outcome-focused resource allocation.</li>
                        <li>Strengthen partner due diligence and performance review, covering registration, sanctions, financial health, safeguarding, capacity and on-site verification.</li>
                        <li>Developed reporting and digital tracking approaches; designed and rolled out a unified project-management platform across nine partners.</li>
                        <li>Prepare senior-leadership and board-level reporting on progress, risks, budgets, compliance and operational improvements.</li>
                        <li>Architect of VerifiAid™ partner assurance workflow and central water-programme database linking installation records, payments, inspections and reporting.</li>
                    </ul>
                </article>

                <!-- Role 2 -->
                <article class="experience-card">
                    <div class="experience-header">
                        <div class="experience-role-title">
                            <h3>International Programme Manager</h3>
                            <div class="experience-org">Minhaj Welfare Foundation (MWF), UK · Promoted to Head of Programmes in Jan 2026</div>
                        </div>
                        <span class="experience-date-badge">Oct 2023 – Dec 2025</span>
                    </div>
                    <p class="experience-summary">
                        Managed and coordinated international programme delivery with country teams and implementing partners, supporting planning, budgets, procurement, monitoring and donor reporting.
                    </p>
                    <ul class="experience-bullets">
                        <li>Introduced and standardised project proposal, budget, monitoring and reporting templates to improve consistency and executive decision-making.</li>
                        <li>Supported partner engagement and repeat delivery scopes, improving clarity of deliverables, evidence requirements, responsibilities and communication with international counterparts.</li>
                        <li>Contributed to the development of a structured, impact-focused delivery model with clear project options, outcome expectations and quality-improvement processes.</li>
                    </ul>
                </article>

                <!-- Role 3 -->
                <article class="experience-card">
                    <div class="experience-header">
                        <div class="experience-role-title">
                            <h3>Founder &amp; Non-Executive Director</h3>
                            <div class="experience-org">Dayemi Foundation · Governance oversight; operations led by in-country Programme &amp; Accounts Managers</div>
                        </div>
                        <span class="experience-date-badge">2023 – Present</span>
                    </div>
                    <p class="experience-summary">
                        Provide governance oversight to the organisation founded in 2007, supporting strategy, accountability and sustainable development while operational management remains with the in-country team.
                    </p>
                    <ul class="experience-bullets">
                        <li>Act as client-side governance lead for a 100-bed residential building project, including architect brief, masterplan approval and coordination with the delivery team.</li>
                        <li>Support continued diversification from reliance on a single delivery partner towards multiple international NGO relationships and independently defined programme scopes.</li>
                    </ul>
                </article>

                <!-- Role 4 -->
                <article class="experience-card">
                    <div class="experience-header">
                        <div class="experience-role-title">
                            <h3>Founder &amp; Executive Director</h3>
                            <div class="experience-org">Dayemi Foundation, Bangladesh · NGO with 6 branches and UN ECOSOC Special Consultative Status</div>
                        </div>
                        <span class="experience-date-badge">Sep 2007 – Jan 2022</span>
                    </div>
                    <p class="experience-summary">
                        Founded and developed a local community initiative into an established organisation working across residential childcare, education, health, livelihoods and community support.
                    </p>
                    <ul class="experience-bullets">
                        <li>Led strategy, fundraising, teams and programme delivery, including support for 550+ children in residential care and services for vulnerable families and communities.</li>
                        <li>Managed six-figure annual budgets and multi-year projects supported by US, UK and European funders, with responsibility for donor reporting, compliance and programme oversight.</li>
                        <li>Delivered construction, education, community-enterprise and emergency-response interventions in rural Bangladesh, including support to refugee and host communities in Cox’s Bazar.</li>
                        <li>Helped build governance, HR, safeguarding and financial-reporting systems and sustained annual income above US$500,000 from international supporters.</li>
                        <li>Contributed to interventions with an estimated cumulative reach approaching 500,000 people over multiple years.</li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- ✦ EDUCATION, CREDENTIALS & DIGITAL TOOLKIT ✦ -->
        <section class="credentials-section" id="education">
            <div class="home-section-intro">
                <div>
                    <p>Academic &amp; Methodological Foundation</p>
                    <h2>Education, certifications<br/>and technical toolkit.</h2>
                </div>
                <a href="/cv">View complete résumé document <span>→</span></a>
            </div>

            <div class="credentials-grid">
                <!-- Credential 1 -->
                <div class="credential-card">
                    <span class="cred-year">2022 – 2023</span>
                    <h3>MSc Project Management</h3>
                    <p class="cred-inst">University of the West of England (UWE Bristol)</p>
                    <span class="cred-tag">Graduated with Distinction</span>
                </div>

                <!-- Credential 2 -->
                <div class="credential-card">
                    <span class="cred-year">2006 – 2008</span>
                    <h3>MBA International Business</h3>
                    <p class="cred-inst">Cardiff Metropolitan University</p>
                    <span class="cred-tag">Master of Business Admin</span>
                </div>

                <!-- Credential 3 -->
                <div class="credential-card">
                    <span class="cred-year">2004 – 2006</span>
                    <h3>Bachelor’s in IT &amp; E-Commerce</h3>
                    <p class="cred-inst">Charles Sturt University (London Campus)</p>
                    <span class="cred-tag">Business IT &amp; Systems</span>
                </div>

                <!-- Credential 4 -->
                <div class="credential-card">
                    <span class="cred-year">2023</span>
                    <h3>Lean Project Management Foundation</h3>
                    <p class="cred-inst">Professional Certification</p>
                    <span class="cred-tag">Certified Practitioner</span>
                </div>

                <!-- Credential 5 -->
                <div class="credential-card">
                    <span class="cred-year">Assurance Architecture</span>
                    <h3>VerifiAid™ &amp; EmpactFlow</h3>
                    <p class="cred-inst">Charity Governance &amp; Partner Due Diligence</p>
                    <span class="cred-tag">Proprietary Framework</span>
                </div>

                <!-- Credential 6 -->
                <div class="credential-card">
                    <span class="cred-year">Global Recognition</span>
                    <h3>UN ECOSOC Consultative NGO</h3>
                    <p class="cred-inst">Dayemi Foundation Founded &amp; Accredited</p>
                    <span class="cred-tag">Special Consultative Status</span>
                </div>
            </div>

            <!-- Toolkit & Languages -->
            <div class="toolkit-container">
                <div class="toolkit-block">
                    <h4>Digital Tools &amp; Enterprise Platforms</h4>
                    <div class="pill-cloud">
                        <span>Microsoft Project</span>
                        <span>Smartsheet</span>
                        <span>Monday.com</span>
                        <span>Microsoft Excel (Advanced)</span>
                        <span>Microsoft 365</span>
                        <span>VerifiAid™ Database</span>
                        <span>GPS Water Tracking Systems</span>
                    </div>
                </div>

                <div class="toolkit-block">
                    <h4>Languages</h4>
                    <div class="pill-cloud">
                        <span>English · Fluent</span>
                        <span>Bangla · Native</span>
                        <span>Urdu · Working Proficiency</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ CONTACT & INVITATION SECTION ✦ -->
        <section class="home-contact" id="contact">
            <p>For INGOs · Charitable Foundations · Institutional Donors · Boards of Trustees</p>
            <h2>Bring strategic clarity and disciplined governance to your humanitarian portfolio.</h2>
            <div class="contact-cta-block">
                <a class="contact-btn" href="mailto:mail@dayemmahmood.com">
                    <span>Contact Atae Dayem</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <span class="contact-sub">Available for Executive Leadership, Strategic Advisory &amp; Board Governance</span>
            </div>

            <div class="contact-meta-cards">
                <div class="contact-meta-card" onclick="copyToClipboard('mail@dayemmahmood.com', 'Email Address')">
                    <span class="meta-icon">✉</span>
                    <div>
                        <div style="font-size: 10px; color: #768994; text-transform: uppercase; letter-spacing: 0.1em;">Direct Email</div>
                        <strong>mail@dayemmahmood.com</strong>
                    </div>
                </div>

                <div class="contact-meta-card" onclick="copyToClipboard('+447563586168', 'Phone Number')">
                    <span class="meta-icon">📞</span>
                    <div>
                        <div style="font-size: 10px; color: #768994; text-transform: uppercase; letter-spacing: 0.1em;">Phone / WhatsApp</div>
                        <strong>07563 586 168</strong>
                    </div>
                </div>

                <div class="contact-meta-card" onclick="window.open('https://linkedin.com/in/ata-e-dayem-syed-mahmood-ullah', '_blank')">
                    <span class="meta-icon">🔗</span>
                    <div>
                        <div style="font-size: 10px; color: #768994; text-transform: uppercase; letter-spacing: 0.1em;">LinkedIn Profile</div>
                        <strong>ata-e-dayem-syed-mahmood-ullah ↗</strong>
                    </div>
                </div>

                <div class="contact-meta-card" onclick="window.location.href='/cv'">
                    <span class="meta-icon">📄</span>
                    <div>
                        <div style="font-size: 10px; color: #768994; text-transform: uppercase; letter-spacing: 0.1em;">Executive CV View</div>
                        <strong>Printable Résumé Page ↗</strong>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ✦ EDITORIAL FOOTER ✦ -->
    <footer class="home-footer">
        <a class="brand-crest-group" href="#top" style="color: #fff;">
            <div class="brand-crest" style="background: rgba(255,255,255,0.08); border-color: rgba(223, 158, 53, 0.5);">AD</div>
            <div class="brand-titles">
                <span class="brand-title-main" style="color: #fff; font-size: 18px;">
                    Atae Dayem <span class="star">✦</span>
                </span>
                <span class="brand-title-sub" style="color: var(--gold);">Syed Mahmood Ullah</span>
            </div>
        </a>

        <p>Strategic vision. Measurable impact.</p>

        <div>
            <a href="https://linkedin.com/in/ata-e-dayem-syed-mahmood-ullah" target="_blank" rel="noreferrer">LinkedIn ↗</a>
            <a href="mailto:mail@dayemmahmood.com">Email ↗</a>
            <a href="tel:+447563586168">Phone ↗</a>
            <a href="/cv">CV View ↗</a>
        </div>

        <small>© 2026 Atae Dayem Syed Mahmood Ullah. All rights reserved. Manchester, United Kingdom.</small>
    </footer>

    <!-- ✦ VERIFIAID™ 40-CHECK FRAMEWORK MODAL ✦ -->
    <div class="modal-overlay" id="framework-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
        <div class="modal-content">
            <button class="modal-close" onclick="closeFrameworkModal()" aria-label="Close modal">&times;</button>
            <div style="letter-spacing: 0.18em; color: var(--emerald); font-size: 10.5px; font-weight: 900; text-transform: uppercase; margin-bottom: 8px;">
                Proprietary Assurance Architecture
            </div>
            <h2 id="modal-title" style="font-family: Georgia, serif; font-size: 32px; margin: 0 0 16px; color: var(--ink);">
                VerifiAid™: 40-Check Partner Assurance Framework
            </h2>
            <p style="color: var(--text-muted); font-size: 14.5px; line-height: 1.6; margin-bottom: 30px;">
                Designed and piloted at Minhaj Welfare Foundation by Atae Dayem to replace informal partner assessments with an objective, institutional assurance system across six weighted risk categories.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px;">
                <!-- Category 1 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--emerald); letter-spacing: 0.12em; text-transform: uppercase;">Category 01 · 15% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Legal Due Diligence</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>Statutory NGO/charity registration validity</li>
                        <li>Governing constitution &amp; trust deed validation</li>
                        <li>Board trustee identity &amp; conflict registers</li>
                        <li>Government operating clearances &amp; permits</li>
                        <li>Tax exemption &amp; reporting standing</li>
                        <li>Historical litigation &amp; adverse media scan</li>
                    </ul>
                </div>

                <!-- Category 2 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--gold); letter-spacing: 0.12em; text-transform: uppercase;">Category 02 · 20% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Sanctions &amp; AML Risk</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>UN, UK OFSI &amp; international sanctions list checks</li>
                        <li>Politically Exposed Persons (PEP) screening</li>
                        <li>Counter-Terrorism Financing (CTF) protocols</li>
                        <li>Intermediary banking &amp; fund transfer scrutiny</li>
                        <li>Dual-use goods &amp; supply chain vetting</li>
                        <li>Zero-tolerance fraud &amp; bribery policies</li>
                    </ul>
                </div>

                <!-- Category 3 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--emerald); letter-spacing: 0.12em; text-transform: uppercase;">Category 03 · 20% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Financial Health &amp; Audits</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>Three years of certified external audit reports</li>
                        <li>Dual-signatory bank account mandates</li>
                        <li>Budget variance threshold &amp; cost analysis</li>
                        <li>Reserves policy &amp; operational liquidity ratio</li>
                        <li>Segregation of financial duties &amp; ledger reviews</li>
                        <li>Procurement value-for-money thresholds</li>
                    </ul>
                </div>

                <!-- Category 4 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--gold); letter-spacing: 0.12em; text-transform: uppercase;">Category 04 · 15% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Safeguarding &amp; Protection</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>PSEA (Protection from Sexual Exploitation) policies</li>
                        <li>Child safeguarding &amp; residential care codes</li>
                        <li>Staff police checks &amp; reference verification</li>
                        <li>Whistleblower &amp; incident reporting channels</li>
                        <li>Beneficiary feedback &amp; complaints mechanism</li>
                        <li>Data privacy &amp; vulnerable person identity protection</li>
                    </ul>
                </div>

                <!-- Category 5 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--emerald); letter-spacing: 0.12em; text-transform: uppercase;">Category 05 · 15% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Delivery Capacity</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>Field staffing &amp; technical engineering expertise</li>
                        <li>Warehouse, storage &amp; cold-chain facilities</li>
                        <li>Past milestone delivery track record</li>
                        <li>Sub-contractor management procedures</li>
                        <li>Local community &amp; stakeholder relationships</li>
                        <li>Emergency response readiness &amp; buffer stock</li>
                    </ul>
                </div>

                <!-- Category 6 -->
                <div style="background: #fff; padding: 22px; border: 1px solid var(--parchment-border); border-radius: 12px;">
                    <span style="font-size: 10px; font-weight: 900; color: var(--gold); letter-spacing: 0.12em; text-transform: uppercase;">Category 06 · 15% Weight</span>
                    <h4 style="font-family: Georgia, serif; font-size: 18px; margin: 6px 0 10px; color: var(--ink);">Field Verification &amp; GPS</h4>
                    <ul style="font-size: 12.5px; color: var(--text-muted); line-height: 1.65; padding-left: 16px; margin: 0;">
                        <li>GPS coordinate logging for all water wells</li>
                        <li>Independent on-site monitoring inspections</li>
                        <li>Timestamped &amp; geotagged photo/video proof</li>
                        <li>Beneficiary registration &amp; signature sheets</li>
                        <li>Post-distribution monitoring surveys (PDM)</li>
                        <li>Reconciliation gate prior to final payment tranche</li>
                    </ul>
                </div>
            </div>

            <div style="margin-top: 36px; text-align: center;">
                <button class="btn-hero-primary" onclick="closeFrameworkModal()" style="display: inline-flex;">
                    Close Assurance Matrix
                </button>
            </div>
        </div>
    </div>

    <!-- ✦ TOAST NOTICE ✦ -->
    <div id="toast-notice" class="toast-notice"></div>

</body>
</html>
