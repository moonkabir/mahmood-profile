<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atae Dayem Syed Mahmood Ullah — International Programmes &amp; Transformation Leader</title>
    <meta name="description" content="18+ years across international humanitarian assistance, multi-country programme delivery, governance architecture, budget negotiation, and £1m+ portfolio leadership. Founder of Dayem Intelligence and VerifiAid™.">
    <meta name="keywords" content="Atae Dayem, Dayem Mahmood, International Programmes Leader, Programme Governance, Humanitarian Delivery at Scale, VerifiAid, Dayem Intelligence, Minhaj Welfare Foundation, Dayemi Foundation">
    <meta name="author" content="Atae Dayem Syed Mahmood Ullah">

    <!-- OpenGraph / Social Metadata -->
    <meta property="og:title" content="Atae Dayem Syed Mahmood Ullah — International Programmes &amp; Transformation Leader">
    <meta property="og:description" content="Strategic Governance. Humanitarian Delivery at Scale. Bridging UK charity governance with field delivery across 13+ nations.">
    <meta property="og:type" content="website">

    <!-- Preconnect & Modern Google Fonts (Newsreader, Plus Jakarta Sans, Inter, Caveat) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Inter:wght@400;500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;0,6..72,700;0,6..72,800;1,6..72,400;1,6..72,600&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body id="top">

    <!-- ✦ LUXURY FLOATING EXECUTIVE HEADER (SYED NAJAM & SAQIB QURESHI BENCHMARK) ✦ -->
    <header class="editorial-header">
        <div class="header-inner">
            <a class="personal-brand-group" href="#top" aria-label="Atae Dayem Home">
                <div class="personal-brand-avatar" aria-hidden="true">AD</div>
                <div class="personal-brand-text">
                    <div class="name-row">
                        <span class="name">Atae Dayem</span>
                        <span class="star-accent">✦</span>
                    </div>
                    <p class="sub">Programmes &amp; Governance Leader</p>
                </div>
            </a>

            <!-- Streamlined Editorial Nav -->
            <nav class="header-nav" aria-label="Primary Navigation">
                <a href="#pillars">Capabilities</a>
                <a href="#case-studies">Case Studies</a>
                <a href="#verifiaid">VerifiAid™</a>
                <a class="nav-featured" href="#intelligence-hub">
                    <span>Dayem Intelligence</span>
                    <span style="font-size: 10px;">↗</span>
                </a>
                <a href="#credentials">Credentials</a>
                <a href="#perspectives">Perspectives</a>
            </nav>

            <!-- Actions: Discreet CV & Invite/Book (Syed Najam Model) -->
            <div class="header-actions">
                <a class="header-cv-link" href="/cv" title="View Printable Formal Résumé">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                    <span>Executive CV</span>
                </a>

                <button class="header-cta-btn" onclick="openBookingModal()" aria-label="Book a consultation or invite Dayem">
                    <span>Invite / Book Dayem</span>
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </button>

                <button class="mobile-nav-toggle" onclick="toggleMobileMenu()" aria-label="Toggle mobile navigation menu">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
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
            <a class="personal-brand-group" href="#top" onclick="closeMobileMenu()">
                <div class="personal-brand-avatar" aria-hidden="true">AD</div>
                <div class="personal-brand-text">
                    <span style="font-weight: 800; font-size: 16px; color: var(--ink);">Atae Dayem</span>
                    <p style="font-size: 9.5px; color: var(--emerald-dark); font-weight: 700; text-transform: uppercase;">Programmes &amp; Governance</p>
                </div>
            </a>
            <button class="mobile-drawer-close" onclick="closeMobileMenu()" aria-label="Close menu">&times;</button>
        </div>

        <nav class="mobile-drawer-nav" aria-label="Mobile Drawer Navigation">
            <a class="mobile-nav-link" href="#pillars">
                <span>Core Capabilities</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#case-studies">
                <span>Impact Case Studies</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#verifiaid">
                <span>VerifiAid™ Due Diligence</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#intelligence-hub" style="color: var(--emerald-dark);">
                <span>Dayem Intelligence Desk</span>
                <span class="arrow">↗</span>
            </a>
            <a class="mobile-nav-link" href="#credentials">
                <span>Academic Credentials</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="#perspectives">
                <span>Thought Leadership</span>
                <span class="arrow">→</span>
            </a>
            <a class="mobile-nav-link" href="/cv" style="color: var(--gold-dark);">
                <span>Executive CV (Printable PDF)</span>
                <span class="arrow">↗</span>
            </a>
        </nav>

        <div class="mobile-drawer-actions">
            <button class="btn-editorial-primary" onclick="closeMobileMenu(); openBookingModal();" style="width: 100%; justify-content: center;">
                <span>Invite Dayem / Book Consultation</span>
                <span>→</span>
            </button>
            <a class="btn-editorial-secondary" href="/cv" style="width: 100%; justify-content: center;">
                <span>View Formal CV Document</span>
                <span>↗</span>
            </a>
            <a class="btn-editorial-gold" href="/intelligence" style="width: 100%; justify-content: center;">
                <span>Visit Dayem Intelligence Desk ↗</span>
            </a>
        </div>

        <div class="mobile-drawer-footer">
            <strong style="color: var(--ink);">Manchester, United Kingdom</strong>
            <span>Direct Email: <a href="mailto:mail@dayemmahmood.com" style="color: var(--emerald-dark); font-weight: 600;">mail@dayemmahmood.com</a></span>
            <span>Phone / WhatsApp: <a href="tel:+447563586168" style="color: var(--ink); font-weight: 600;">07563 586 168</a></span>
        </div>
    </div>

    <main>
        <!-- ✦ HERO SECTION: EXECUTIVE PRESENCE & INTELLECTUAL GRAVITAS ✦ -->
        <section class="hero-section">
            <div class="container-editorial">
                <div class="hero-grid">
                    <!-- Left: Personal Stature & Power Statement -->
                    <div class="hero-copy">
                        <div class="kicker-pill">
                            <span>✦</span> International Programmes Leader &amp; Board Advisor
                        </div>

                        <h2 class="hero-headline">
                            Strategic Governance.<br/>
                            Humanitarian Delivery at Scale.<br/>
                            <em>Impact Across 13+ Nations.</em>
                        </h2>

                        <p class="hero-lead">
                            Bridging UK charity governance with field delivery across South Asia, the Middle East, and vulnerable communities. Led by <strong>Atae Dayem (Dayem Mahmood)</strong> — steering £1m+ fixed-deadline humanitarian programmes, 1,000 annual clean water installations, and institutional due diligence architecture for international NGOs, charitable foundations, and boards of trustees.
                        </p>

                        <div class="hero-actions-row">
                            <button class="btn-editorial-primary" onclick="openBookingModal('Strategic Programme Advisory')">
                                <span>Invite Dayem / Book Consultation</span>
                                <span>→</span>
                            </button>
                            <a class="btn-editorial-secondary" href="#case-studies">
                                <span>Explore Case Showcases</span>
                                <span>↓</span>
                            </a>
                            <a class="btn-editorial-gold" href="#intelligence-hub">
                                <span>Dayem Intelligence Hub ↗</span>
                            </a>
                        </div>

                        <!-- Discreet CV link representation in the corner -->
                        <div>
                            <a class="hero-cv-discreet" href="/cv">
                                <span>Board Trustees &amp; Institutional Donors: Access Executive CV Document</span>
                                <span>→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Distinguished Portrait & Credential Badges -->
                    <div style="position: relative;">
                        <!-- Floating Badge Top-Right -->
                        <div class="hero-floating-pill pill-top-right">
                            <span class="icon" aria-hidden="true">🏆</span>
                            <div class="text-box">
                                <b>MSc Project Management</b>
                                <small>Graduated with Distinction · UWE Bristol</small>
                            </div>
                        </div>

                        <div class="hero-portrait-card">
                            <div class="portrait-photo-wrap">
                                <img src="/images/dayem-portrait.jpg" alt="Atae Dayem Syed Mahmood Ullah — International Programmes Leader" onerror="this.onerror=null; this.src='/images/dayem-hero.jpg';" />
                                <div class="portrait-badge-overlay">
                                    <strong>Atae Dayem</strong> · Senior Programmes Leader
                                </div>
                            </div>

                            <div class="portrait-caption">
                                <p class="portrait-quote">“Stronger People, Fairer Futures”</p>
                                <div class="portrait-meta">
                                    <div class="portrait-name">
                                        <h2>Dayem Mahmood</h2>
                                        <p>Head of Programmes (MWF UK) · Founder (Dayemi Foundation)</p>
                                    </div>
                                    <div class="portrait-seal">
                                        <span>UN ECOSOC Special Consultative Status</span><br/>
                                        <span>Founder &amp; Editor, Dayem Intelligence</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Badge Bottom-Left -->
                        <div class="hero-floating-pill pill-bottom-left">
                            <span class="icon" aria-hidden="true">🛡️</span>
                            <div class="text-box">
                                <b>VerifiAid™ Architecture</b>
                                <small>40-Check Multi-Tier Partner Assurance</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ QUANTIFIED TRACK RECORD STRIP ✦ -->
        <section class="credibility-strip" aria-label="Quantified track record">
            <div class="container-editorial">
                <div class="credibility-grid">
                    <div class="cred-metric-item">
                        <div class="val">£1M+</div>
                        <div class="lbl">Annual programme portfolio led with fixed-deadline execution</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">13+</div>
                        <div class="lbl">Countries of programme oversight and delivery</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">9</div>
                        <div class="lbl">Implementing delivery partners coordinated</div>
                    </div>
                    <div class="cred-metric-item">
                        <div class="val">1,000</div>
                        <div class="lbl">Annual clean water installations with 100% on-schedule record</div>
                    </div>
                    <div class="cred-pillars">
                        <span>UN ECOSOC Status</span>
                        <span>80% Grant Win Rate</span>
                        <span>VerifiAid™ Model</span>
                        <span>30+ Team Led</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ CORE LEADERSHIP CAPABILITIES (WHAT DAYEM DOES) ✦ -->
        <section class="pillars-section" id="pillars">
            <div class="container-editorial">
                <div class="section-head-row">
                    <div>
                        <div class="kicker-pill" style="margin-bottom: 6px;">Strategic Pillars</div>
                        <h2>Disciplined programme design.<br/>Transformational delivery at scale.</h2>
                        <p>Combining senior executive decision-making with rigorous on-the-ground operational controls.</p>
                    </div>
                    <a class="btn-editorial-secondary" href="#case-studies">View Case Studies ↓</a>
                </div>

                <div class="pillars-grid">
                    <!-- Pillar 01 -->
                    <article class="pillar-card">
                        <div>
                            <span class="pillar-num">Pillar 01</span>
                            <span class="pillar-tag">Portfolio Standards</span>
                            <h3>Programme Transformation</h3>
                            <p>
                                Helped transition Minhaj Welfare Foundation from ad-hoc emergency delivery into structured programme scopes, outcome expectations, standardised templates, and systematic delivery controls across 13+ countries.
                            </p>
                        </div>
                        <div class="pillar-metric-tag">Standardised Portfolios Across 13+ Countries</div>
                    </article>

                    <!-- Pillar 02 -->
                    <article class="pillar-card">
                        <div>
                            <span class="pillar-num">Pillar 02</span>
                            <span class="pillar-tag">Execution &amp; Scale</span>
                            <h3>Delivery Performance</h3>
                            <p>
                                Coordinated nine delivery partners across two fixed-deadline seasonal food distribution programmes in 2026, achieving 99% on-time completion across a combined budget of approximately £1m with zero defaults.
                            </p>
                        </div>
                        <div class="pillar-metric-tag">99% On-Time Execution · 9 Delivery Partners</div>
                    </article>

                    <!-- Pillar 03 -->
                    <article class="pillar-card">
                        <div>
                            <span class="pillar-num">Pillar 03</span>
                            <span class="pillar-tag">Infrastructure &amp; WASH</span>
                            <h3>Clean Water Access</h3>
                            <p>
                                Oversaw delivery controls for ~1,000 rural water installations annually with 100% on-schedule completion, linking installation records, contractor payments, GPS coordinates, and independent site inspections.
                            </p>
                        </div>
                        <div class="pillar-metric-tag">1,000 Annual Installs · Geotagged GPS Records</div>
                    </article>

                    <!-- Pillar 04 -->
                    <article class="pillar-card">
                        <div>
                            <span class="pillar-num">Pillar 04</span>
                            <span class="pillar-tag">Institutional Alliances</span>
                            <h3>Partnership &amp; Grants</h3>
                            <p>
                                Negotiated repeat multi-year delivery scopes with international NGOs (including an ongoing ~£150,000 annual scope), achieving an 80% submission approval rate (12 of 15 project proposals approved).
                            </p>
                        </div>
                        <div class="pillar-metric-tag">80% Win Rate · 12 of 15 Proposals Approved</div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ✦ OPERATIONAL IMPACT CASE SHOWCASES ("কাজের শো-কেসগুলা দেন") ✦ -->
        <section class="showcase-section" id="case-studies">
            <div class="container-editorial">
                <div class="section-head-row">
                    <div>
                        <div class="kicker-pill" style="margin-bottom: 6px;">Executive Track Record</div>
                        <h2>Operational Impact &amp; Case Showcases</h2>
                        <p>How disciplined programme design translates into high-stakes humanitarian delivery at scale.</p>
                    </div>
                    <button class="btn-editorial-secondary" onclick="openBookingModal('Strategic Programme Advisory')">
                        <span>Inquire About Programme Advisory</span>
                        <span>→</span>
                    </button>
                </div>

                <div class="case-studies-grid">
                    <!-- Showcase 1 -->
                    <article class="case-card">
                        <div>
                            <div class="case-meta-top">
                                <span class="case-num">CASE STUDY 01 · EMERGENCY RELIEF</span>
                                <span class="case-stat-pill">99% On-Time Execution</span>
                            </div>
                            <h3>£1M+ Fixed-Deadline Humanitarian Food Distribution</h3>
                            <p class="case-desc">
                                Coordinated nine implementing delivery partners across two strict fixed-deadline seasonal food programmes in 2026. Established standardized procurement specifications, pre-vetted supplier contracts, and daily milestone burndown charts across Pakistan, Bangladesh, and vulnerable hubs.
                            </p>
                        </div>
                        <div class="case-outcomes">
                            <div><strong>Portfolio:</strong> £1m combined budget across multiple nations</div>
                            <div><strong>Accountability:</strong> Zero delivery default, 100% reconciled audit logs</div>
                        </div>
                    </article>

                    <!-- Showcase 2 -->
                    <article class="case-card">
                        <div>
                            <div class="case-meta-top">
                                <span class="case-num">CASE STUDY 02 · WASH INFRASTRUCTURE</span>
                                <span class="case-stat-pill">1,000 Installs / Year</span>
                            </div>
                            <h3>Clean Water Infrastructure with Geotagged GPS Verification</h3>
                            <p class="case-desc">
                                Oversaw delivery controls and quality assurance for approximately 1,000 rural deep-tube water wells annually. Built a central water-programme database that systematically cross-references GPS location coordinates, contractor stage invoices, and independent site audit reports.
                            </p>
                        </div>
                        <div class="case-outcomes">
                            <div><strong>Completion:</strong> 100% on-schedule completion reported</div>
                            <div><strong>Impact:</strong> Sustainable clean water access for remote rural villages</div>
                        </div>
                    </article>

                    <!-- Showcase 3 -->
                    <article class="case-card">
                        <div>
                            <div class="case-meta-top">
                                <span class="case-num">CASE STUDY 03 · INSTITUTION BUILDING</span>
                                <span class="case-stat-pill">UN ECOSOC Status</span>
                            </div>
                            <h3>Dayemi Foundation: 18-Year Growth &amp; Childcare Scale</h3>
                            <p class="case-desc">
                                Founded Dayemi Foundation in 2007 and steered its development into a six-branch organisation with UN ECOSOC Special Consultative Status. Provided sustained care, nutrition, and schooling for 550+ children in residential care, while acting as client-side governance lead for a 100-bed residential facility.
                            </p>
                        </div>
                        <div class="case-outcomes">
                            <div><strong>Cumulative Reach:</strong> Approaching 500,000 people over multiple years</div>
                            <div><strong>Sustainability:</strong> Diversified funding beyond single-donor reliance</div>
                        </div>
                    </article>

                    <!-- Showcase 4 -->
                    <article class="case-card">
                        <div>
                            <div class="case-meta-top">
                                <span class="case-num">CASE STUDY 04 · INGO PARTNERSHIPS</span>
                                <span class="case-stat-pill">80% Proposal Win Rate</span>
                            </div>
                            <h3>Multi-Year International Partnerships &amp; Grants</h3>
                            <p class="case-desc">
                                Negotiated repeat multi-year delivery scopes with international non-governmental organisations, including an ongoing annual scope valued at ~£150,000. Contributed to 15 major institutional project submissions, achieving 12 funded approvals by aligning local operational reality with donor standards.
                            </p>
                        </div>
                        <div class="case-outcomes">
                            <div><strong>Success Rate:</strong> 12 of 15 proposals approved and funded</div>
                            <div><strong>Assurance:</strong> Compliant with UK Charity Commission standards</div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ✦ PROPRIETARY ASSURANCE INNOVATION: VERIFIAID™ DUE DILIGENCE ✦ -->
        <section class="governance-section" id="verifiaid">
            <div class="container-editorial">
                <div class="gov-hero-box">
                    <div class="gov-hero-copy">
                        <div class="kicker-pill kicker-pill-dark">Proprietary Governance &amp; PM Architecture</div>
                        <h2>VerifiAid™: 40-Check Partner Assurance Architecture</h2>
                        <p>
                            Designed by Atae Dayem and piloted across nine implementing partners at Minhaj Welfare Foundation. Replaces informal, subjective partner vetting with an institutional due diligence system linking legal verification, sanctions screening, financial reserves, and GPS site verification to formal milestone payments.
                        </p>
                    </div>
                    <div class="gov-stat-box">
                        <div class="big-num">40</div>
                        <div class="big-label">Audit Verification Checks</div>
                        <div class="sub-label">Across 6 Weighted Risk Tiers</div>
                        <button class="btn-editorial-gold" style="margin-top: 14px; width: 100%; justify-content: center;" onclick="openFrameworkModal()">
                            <span>Launch 40-Check Matrix Explorer</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>

                <!-- 6 Weighted Categories Grid -->
                <div class="categories-grid">
                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 01 · 15% Weight</span>
                        <h4>Legal Due Diligence</h4>
                        <p>Statutory NGO registration, constitution validity, trustee identity, conflict registers, and tax standing.</p>
                    </div>

                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 02 · 20% Weight</span>
                        <h4>Sanctions &amp; AML Screening</h4>
                        <p>Automated UN, UK OFSI &amp; EU consolidated screening, PEP checks, and counter-terror financing protocols.</p>
                    </div>

                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 03 · 20% Weight</span>
                        <h4>Financial Health &amp; Controls</h4>
                        <p>Three-year audited accounts, dual-signatory mandates, reserve policies, and general ledger reconciliation.</p>
                    </div>

                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 04 · 15% Weight</span>
                        <h4>Safeguarding &amp; PSEAH</h4>
                        <p>Child protection policies, police background vetting, whistleblower hotlines, and survivor-first protocols.</p>
                    </div>

                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 05 · 15% Weight</span>
                        <h4>Field Delivery Capacity</h4>
                        <p>Technical engineering staff, cold-chain / warehouse logistics, procurement registers, and subcontractor vetting.</p>
                    </div>

                    <div class="cat-card" onclick="openFrameworkModal()">
                        <span class="cat-weight">Category 06 · 15% Weight</span>
                        <h4>Geotagged Site Verification</h4>
                        <p>GPS water coordinates, physical inspection audits, beneficiary sign-offs, and before-and-after photo evidence.</p>
                    </div>
                </div>

                <!-- Project Management Theory & EmpactFlow™ -->
                <div class="pm-theory-strip">
                    <div class="theory-points">
                        <div class="theory-point">
                            <span class="check">✓</span>
                            <span>EmpactFlow™ Engine: Milestone-locked tranche disbursement</span>
                        </div>
                        <div class="theory-point">
                            <span class="check">✓</span>
                            <span>Lean Project Management: Eliminating procurement bottlenecks</span>
                        </div>
                        <div class="theory-point">
                            <span class="check">✓</span>
                            <span>Risk-Adjusted Localisation: Equitable local partnership models</span>
                        </div>
                    </div>
                    <button class="btn-editorial-secondary" style="font-size: 12px; padding: 8px 14px;" onclick="openFrameworkModal()">
                        <span>Inspect Full Audit Framework</span>
                        <span>→</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- ✦ FEATURED VENTURE: "DAYEM INTELLIGENCE DESK" (ON-PAGE HUB & LINK TO /intelligence) ✦ -->
        <section class="intel-hub-section" id="intelligence-hub">
            <div class="container-editorial">
                <div class="intel-hub-head">
                    <div>
                        <div class="kicker-pill kicker-pill-dark" style="margin-bottom: 8px;">Featured Enterprise &amp; Publication</div>
                        <h2>Dayem Intelligence: Live Desk &amp; Funding Radar</h2>
                        <p>
                            Independent humanitarian and development intelligence founded and edited by Dayem Mahmood. Tracking real-time verified donor calls, grants, and regional telemetry.
                        </p>
                    </div>
                    <div>
                        <a class="btn-editorial-gold" href="/intelligence" style="font-size: 13.5px; padding: 12px 24px;">
                            <span>Launch Dedicated Intelligence Platform ↗</span>
                        </a>
                    </div>
                </div>

                <div class="intel-hub-grid">
                    <!-- Left: Live Funding Radar (Grants & Market Updates) -->
                    <div class="intel-hub-card">
                        <h3>
                            <span>Funding Radar: Verified Grants</span>
                            <span class="badge">Live Calls</span>
                        </h3>

                        <div class="radar-feed" style="gap: 10px;">
                            <div class="radar-card" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.15);">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-open">OPEN</span>
                                    <span class="radar-amount" style="color: var(--gold);">£10m – £25m</span>
                                </div>
                                <h4 class="radar-title" style="color: #fff;">FCDO — Climate Resilient Livelihoods Programme</h4>
                                <div class="radar-meta" style="color: #9cb5c7;">
                                    <span>Global South</span>
                                    <span class="radar-deadline" style="color: #fca5a5;">Deadline: 30 Sep 2026</span>
                                </div>
                            </div>

                            <div class="radar-card" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.15);">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-open">OPEN</span>
                                    <span class="radar-amount" style="color: var(--gold);">€5m – €50m</span>
                                </div>
                                <h4 class="radar-title" style="color: #fff;">EU — Humanitarian Aid Response (ECHO)</h4>
                                <div class="radar-meta" style="color: #9cb5c7;">
                                    <span>Multiple Countries</span>
                                    <span class="radar-deadline" style="color: #fca5a5;">Deadline: 15 Oct 2026</span>
                                </div>
                            </div>

                            <div class="radar-card" style="background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.15);">
                                <div class="radar-top-row">
                                    <span class="badge-status badge-partner">PARTNER</span>
                                    <span class="radar-amount" style="color: var(--gold);">Multiple Awards</span>
                                </div>
                                <h4 class="radar-title" style="color: #fff;">WFP — Local Implementing Partners Roster</h4>
                                <div class="radar-meta" style="color: #9cb5c7;">
                                    <span>Africa &amp; Asia</span>
                                    <span class="radar-deadline" style="color: #fca5a5;">Deadline: Ongoing</span>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 11.5px; color: #8eaec2;">Includes IsDB ($10m) &amp; Gates Foundation</span>
                            <a href="/intelligence#funding-radar" style="color: var(--gold); font-size: 12px; font-weight: 700;">View All 5 Calls →</a>
                        </div>
                    </div>

                    <!-- Right: Today's Brief & Global Telemetry -->
                    <div class="intel-hub-card">
                        <h3>
                            <span>Today’s Brief: Key Developments</span>
                            <span class="badge">Autumn 2026</span>
                        </h3>

                        <div class="brief-feed" style="gap: 12px;">
                            <div style="display: flex; gap: 10px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">
                                <span style="font-family: var(--font-serif); font-size: 16px; color: var(--gold); font-weight: 700;">01</span>
                                <div>
                                    <span style="font-size: 9.5px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); font-weight: 800;">Humanitarian Financing</span>
                                    <p style="font-size: 12.5px; color: #fff; font-weight: 600; line-height: 1.35; margin-top: 2px;">Global humanitarian funding under renewed pressure; major appeals <40% funded.</p>
                                </div>
                            </div>

                            <div style="display: flex; gap: 10px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 10px;">
                                <span style="font-family: var(--font-serif); font-size: 16px; color: var(--gold); font-weight: 700;">02</span>
                                <div>
                                    <span style="font-size: 9.5px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); font-weight: 800;">Conflict &amp; Displacement</span>
                                    <p style="font-size: 12.5px; color: #fff; font-weight: 600; line-height: 1.35; margin-top: 2px;">Yemen displacement reaches new peak; protection and access concerns escalate.</p>
                                </div>
                            </div>

                            <div style="display: flex; gap: 10px;">
                                <span style="font-family: var(--font-serif); font-size: 16px; color: var(--gold); font-weight: 700;">03</span>
                                <div>
                                    <span style="font-size: 9.5px; text-transform: uppercase; letter-spacing: 0.1em; color: var(--gold); font-weight: 800;">Development Policy</span>
                                    <p style="font-size: 12.5px; color: #fff; font-weight: 600; line-height: 1.35; margin-top: 2px;">New UN and World Bank policy shifts on direct funding to national Southern actors.</p>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 16px; display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 12px;">
                            <span style="font-size: 11.5px; color: #8eaec2;">Global South Watch: Africa 315M · Asia 290M</span>
                            <a href="/intelligence" style="color: var(--gold); font-size: 12px; font-weight: 700;">Open Intelligence Platform →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ THOUGHT LEADERSHIP & PROGRAMME LEADER’S VIEW ✦ -->
        <section class="analysis-section" id="perspectives">
            <div class="container-editorial">
                <div class="analysis-grid">
                    <!-- Featured Article -->
                    <div class="editorial-article-card">
                        <div class="editorial-tag">Thought Leadership · Programme Leader’s View</div>
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

                    <!-- Curated Downloads & Toolkits -->
                    <div id="resources">
                        <div class="column-header">
                            <h3>Curated Toolkits &amp; Evidence</h3>
                            <a class="link-view-all" href="/intelligence#resources">View library →</a>
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

                            <div class="resource-card" onclick="openFrameworkModal()">
                                <div class="resource-info">
                                    <h4>Partner Due Diligence Audit Matrix (VerifiAid™)</h4>
                                    <p>40-check audit spreadsheet &amp; scoring model</p>
                                </div>
                                <span class="resource-format-tag">XLSX · 0.9 MB</span>
                            </div>

                            <div class="resource-card" onclick="window.showToast('Downloading Water Infrastructure GPS Verification Standard...')">
                                <div class="resource-info">
                                    <h4>Water Infrastructure GPS Verification Standard</h4>
                                    <p>Technical field specifications &amp; telemetry</p>
                                </div>
                                <span class="resource-format-tag">PDF · 2.1 MB</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ ACADEMIC CREDENTIALS & TECHNICAL TOOLKIT (SAQIB QURESHI MODEL) ✦ -->
        <section class="credentials-section" id="credentials">
            <div class="container-editorial">
                <div class="section-head-row">
                    <div>
                        <div class="kicker-pill" style="margin-bottom: 6px;">Academic &amp; Methodological Foundations</div>
                        <h2>Education, Certifications &amp; Toolkit</h2>
                        <p>A rigorous academic foundation in project management, international business, and digital systems.</p>
                    </div>
                    <a class="btn-editorial-secondary" href="/cv">View Printable Résumé Page ↗</a>
                </div>

                <div class="creds-grid">
                    <div class="cred-degree-card">
                        <span class="cred-degree-year">2022 – 2023 · Bristol, UK</span>
                        <h4>MSc Project Management</h4>
                        <p class="inst">University of the West of England (UWE Bristol)</p>
                        <span class="cred-degree-tag">Graduated with Distinction</span>
                    </div>

                    <div class="cred-degree-card">
                        <span class="cred-degree-year">2006 – 2008 · Cardiff, UK</span>
                        <h4>MBA International Business</h4>
                        <p class="inst">Cardiff Metropolitan University</p>
                        <span class="cred-degree-tag">Master of Business Administration</span>
                    </div>

                    <div class="cred-degree-card">
                        <span class="cred-degree-year">2004 – 2006 · London Campus</span>
                        <h4>Bachelor’s in IT &amp; E-Commerce</h4>
                        <p class="inst">Charles Sturt University</p>
                        <span class="cred-degree-tag">Business Systems &amp; IT</span>
                    </div>

                    <div class="cred-degree-card">
                        <span class="cred-degree-year">2023 · Professional Credential</span>
                        <h4>Lean Project Management Foundation</h4>
                        <p class="inst">Process Optimization &amp; Agile Workflows</p>
                        <span class="cred-degree-tag">Certified Practitioner</span>
                    </div>

                    <div class="cred-degree-card">
                        <span class="cred-degree-year">Proprietary Architecture</span>
                        <h4>VerifiAid™ &amp; EmpactFlow™</h4>
                        <p class="inst">Due Diligence &amp; Milestone Release System</p>
                        <span class="cred-degree-tag">Creator &amp; Architect</span>
                    </div>

                    <div class="cred-degree-card">
                        <span class="cred-degree-year">Global NGO Standing</span>
                        <h4>UN ECOSOC Special Consultative Status</h4>
                        <p class="inst">Dayemi Foundation Founded &amp; Accredited</p>
                        <span class="cred-degree-tag">Founder &amp; Non-Exec Director</span>
                    </div>
                </div>

                <!-- Tools & Languages Cloud -->
                <div style="background: #ffffff; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 24px; display: grid; grid-template-columns: 1.4fr 0.6fr; gap: 24px;">
                    <div>
                        <h4 style="font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--ink);">
                            Digital Systems &amp; Project Management Tools
                        </h4>
                        <div class="toolkit-pill-cloud">
                            <span>Microsoft Project</span>
                            <span>Smartsheet</span>
                            <span>Monday.com</span>
                            <span>Advanced Microsoft Excel</span>
                            <span>Microsoft 365 Suite</span>
                            <span>VerifiAid™ Database</span>
                            <span>Geotagged GPS Water Tracking</span>
                        </div>
                    </div>
                    <div>
                        <h4 style="font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--ink);">
                            Languages
                        </h4>
                        <div class="toolkit-pill-cloud">
                            <span>English · Fluent</span>
                            <span>Bangla · Native</span>
                            <span>Urdu · Working Proficiency</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✦ "INVITE DAYEM / BOOK A CONSULTATION" HUB (Syed Najam Model) ✦ -->
        <section class="booking-section" id="booking-hub">
            <div class="container-editorial">
                <div class="booking-header">
                    <div class="kicker-pill" style="margin-bottom: 6px;">Executive Engagement &amp; Advisory</div>
                    <h2>Invite Dayem Mahmood / Book a Consultation</h2>
                    <p>
                        Available for strategic programme turnarounds, institutional governance audits, keynote speaking, and advisory partnerships with international NGOs, charitable foundations, and boards of trustees.
                    </p>
                </div>

                <div class="advisory-tracks-grid">
                    <!-- Track 1 -->
                    <div class="advisory-track-card">
                        <div>
                            <div class="track-icon">🏛️</div>
                            <h3>Strategic Programme Advisory</h3>
                            <p>Portfolio design, proposal structuring, budget negotiations, and multi-country operational setup for £1M+ budgets.</p>
                        </div>
                        <button class="track-select-btn" onclick="openBookingModal('Strategic Programme Advisory')">
                            <span>Book Consultation →</span>
                        </button>
                    </div>

                    <!-- Track 2 -->
                    <div class="advisory-track-card">
                        <div>
                            <div class="track-icon">🛡️</div>
                            <h3>Governance &amp; VerifiAid™ Audit</h3>
                            <p>Independent 40-check due diligence review for delivery partners, covering AML, sanctions, safeguarding, and financial risk.</p>
                        </div>
                        <button class="track-select-btn" onclick="openBookingModal('Governance & Due Diligence Audit')">
                            <span>Request Audit →</span>
                        </button>
                    </div>

                    <!-- Track 3 -->
                    <div class="advisory-track-card">
                        <div>
                            <div class="track-icon">🎤</div>
                            <h3>Keynote &amp; Panel Speaking</h3>
                            <p>Keynote lectures on Localisation in Practice, Humanitarian Tech, Ethical Leadership, and Aid Accountability.</p>
                        </div>
                        <button class="track-select-btn" onclick="openBookingModal('Keynote & Panel Speaking')">
                            <span>Invite to Speak →</span>
                        </button>
                    </div>

                    <!-- Track 4 -->
                    <div class="advisory-track-card">
                        <div>
                            <div class="track-icon">🤝</div>
                            <h3>Consortium &amp; Delivery Partnerships</h3>
                            <p>Exploring institutional consortium roles, emergency response alliances, and technical cooperation.</p>
                        </div>
                        <button class="track-select-btn" onclick="openBookingModal('Consortium & Partnership')">
                            <span>Initiate Alliance →</span>
                        </button>
                    </div>
                </div>

                <div class="booking-cta-banner">
                    <div class="cta-text">
                        <h3>Direct Executive Communication</h3>
                        <p>Based in Manchester, UK · Operating across South Asia, Middle East, and International Donor Capitals.</p>
                    </div>
                    <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                        <button class="btn-editorial-gold" onclick="copyToClipboard('mail@dayemmahmood.com', 'Email Address')">
                            <span>Copy Email: mail@dayemmahmood.com</span>
                        </button>
                        <button class="btn-editorial-primary" onclick="openBookingModal()">
                            <span>Launch Booking Request Form</span>
                            <span>→</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ✦ INSTITUTIONAL FOOTER ✦ -->
    <footer class="institutional-footer">
        <div class="container-editorial">
            <div class="footer-top-grid">
                <!-- Brand Column -->
                <div class="footer-brand">
                    <h3>Atae Dayem Syed Mahmood Ullah</h3>
                    <p>
                        International Programmes &amp; Transformation Leader. Bridging high-level UK charity governance with on-the-ground operational delivery across 13+ nations.
                    </p>
                    <p class="footer-quote">“Stronger People, Fairer Futures”</p>
                </div>

                <!-- Navigation -->
                <div class="footer-col">
                    <h4>Executive Navigation</h4>
                    <ul>
                        <li><a href="#pillars">Capabilities &amp; Pillars</a></li>
                        <li><a href="#case-studies">Impact Case Studies</a></li>
                        <li><a href="#verifiaid">VerifiAid™ Architecture</a></li>
                        <li><a href="#credentials">Academic Credentials</a></li>
                        <li><a href="#perspectives">Thought Leadership</a></li>
                    </ul>
                </div>

                <!-- Featured Initiatives -->
                <div class="footer-col">
                    <h4>Featured Initiatives</h4>
                    <ul>
                        <li><a href="/intelligence" style="color: var(--gold); font-weight: 700;">Dayem Intelligence Platform ↗</a></li>
                        <li><a href="/intelligence#funding-radar">Funding Radar (Grants)</a></li>
                        <li><a href="/intelligence#daily-brief">Today’s Intelligence Brief</a></li>
                        <li><a href="/cv" style="color: var(--emerald-light); font-weight: 700;">Printable Executive CV (PDF) ↗</a></li>
                    </ul>
                </div>

                <!-- Direct Contact -->
                <div class="footer-col">
                    <h4>Direct Inquiries</h4>
                    <ul>
                        <li><a href="mailto:mail@dayemmahmood.com">mail@dayemmahmood.com</a></li>
                        <li><a href="tel:+447563586168">07563 586 168</a></li>
                        <li><a href="https://linkedin.com/in/ata-e-dayem-syed-mahmood-ullah" target="_blank" rel="noreferrer">LinkedIn Profile ↗</a></li>
                        <li><span style="color: #8fa7b8;">Manchester, United Kingdom</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    © 2026 Atae Dayem Syed Mahmood Ullah. All rights reserved. Manchester, United Kingdom.
                </div>
                <div style="display: flex; gap: 16px; align-items: center;">
                    <a href="/cv" style="color: var(--gold); font-weight: 700;">Executive CV Document ↗</a>
                    <a href="/intelligence" style="color: var(--emerald-light);">Dayem Intelligence ↗</a>
                    <a href="mailto:mail@dayemmahmood.com">Contact Editorial Desk</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ✦ INTERACTIVE MODAL 1: "INVITE DAYEM / BOOK A CONSULTATION" (Syed Najam Style) ✦ -->
    <div class="modal-overlay" id="booking-modal" role="dialog" aria-modal="true" aria-labelledby="booking-modal-title">
        <div class="modal-card">
            <button class="modal-close-btn" onclick="closeBookingModal()" aria-label="Close modal">&times;</button>
            <div class="kicker-pill" style="margin-bottom: 8px;">Direct Advisory Engagement</div>
            <h2 id="booking-modal-title" style="font-size: 26px; margin-bottom: 8px;">
                Invite Atae Dayem / Book a Consultation
            </h2>
            <p style="color: var(--text-muted); font-size: 13.5px; margin-bottom: 24px; line-height: 1.55;">
                For International NGOs, Charitable Foundations, Institutional Donors, and Event Organisers seeking strategic programme design, partner due diligence systems, or keynote insights.
            </p>

            <form onsubmit="handleBookingSubmit(event)">
                <div class="form-group">
                    <label for="engagement-type-select">Engagement Type *</label>
                    <select id="engagement-type-select" name="engagement_type" required>
                        <option value="Strategic Programme Advisory">Strategic Programme Advisory &amp; Portfolio Restructuring</option>
                        <option value="Governance & Due Diligence Audit">Executive Governance &amp; VerifiAid™ Due Diligence Audit</option>
                        <option value="Keynote & Panel Speaking">Keynote Lecture / Panel Speaking</option>
                        <option value="Consortium & Partnership">Consortium Collaboration / Institutional Partnership</option>
                    </select>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
                    <div class="form-group">
                        <label for="full-name-input">Your Full Name *</label>
                        <input id="full-name-input" type="text" name="full_name" placeholder="e.g. Dr. Sarah Jenkins" required />
                    </div>
                    <div class="form-group">
                        <label for="org-input">Organisation / Institution *</label>
                        <input id="org-input" type="text" name="organisation" placeholder="e.g. Global Humanitarian Trust" required />
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 14px;">
                    <div class="form-group">
                        <label for="email-input">Official Email Address *</label>
                        <input id="email-input" type="email" name="email" placeholder="sarah@globaltrust.org" required />
                    </div>
                    <div class="form-group">
                        <label for="timeline-input">Target Date / Timeline</label>
                        <input id="timeline-input" type="text" name="timeline" placeholder="e.g. Q4 2026 or Immediate" />
                    </div>
                </div>

                <div class="form-group">
                    <label for="message-input">Scope &amp; Objectives *</label>
                    <textarea id="message-input" name="message" rows="4" placeholder="Briefly describe your programme requirements, country context, or event themes..." required></textarea>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 20px;">
                    <span style="font-size: 11.5px; color: var(--text-muted);">Confidential &amp; direct response within 24–48 hours.</span>
                    <button type="submit" class="btn-editorial-primary" style="padding: 12px 24px;">
                        <span>Submit Booking Request →</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ✦ INTERACTIVE MODAL 2: VERIFIAID™ 40-CHECK FRAMEWORK MATRIX ✦ -->
    <div class="modal-overlay" id="framework-modal" role="dialog" aria-modal="true" aria-labelledby="framework-modal-title">
        <div class="modal-card">
            <button class="modal-close-btn" onclick="closeFrameworkModal()" aria-label="Close modal">&times;</button>
            <div class="kicker-pill" style="margin-bottom: 8px;">Proprietary Assurance Architecture</div>
            <h2 id="framework-modal-title" style="font-size: 26px; margin-bottom: 8px;">
                VerifiAid™: 40-Check Partner Assurance Matrix
            </h2>
            <p style="color: var(--text-muted); font-size: 13.5px; margin-bottom: 24px; line-height: 1.55;">
                Piloted across nine implementing partners at Minhaj Welfare Foundation. An objective scoring system designed to safeguard donor funds and ensure field delivery integrity across six weighted tiers.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 16px;">
                <!-- Category 1 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 01 · 15% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Legal Due Diligence</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>Statutory NGO registration validity with government</li>
                        <li>Trust deed &amp; constitutional purpose alignment</li>
                        <li>Board trustee identity &amp; conflict of interest register</li>
                        <li>Operating permits &amp; ministerial security clearances</li>
                        <li>Tax exemption status &amp; statutory compliance</li>
                        <li>Adverse media and litigation background checks</li>
                    </ul>
                </div>

                <!-- Category 2 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 02 · 20% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Sanctions &amp; AML Risk</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>UN Consolidated Sanctions List automated checks</li>
                        <li>UK OFSI &amp; EU asset freeze screening</li>
                        <li>Politically Exposed Persons (PEP) register verification</li>
                        <li>Counter-terror financing (CTF) prevention policy</li>
                        <li>Anti-bribery &amp; anti-fraud code of conduct</li>
                        <li>Bank account verification in partner legal name only</li>
                    </ul>
                </div>

                <!-- Category 3 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 03 · 20% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Financial Health &amp; Reserves</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>3 years of externally audited accounts by accredited firm</li>
                        <li>Dual-signatory bank mandates for all disbursements</li>
                        <li>Documented reserves policy (minimum 3 months operating)</li>
                        <li>General ledger &amp; sub-ledger reconciliation protocols</li>
                        <li>Standardised procurement quotation thresholds (3 quotes)</li>
                        <li>Asset register &amp; serialised inventory tracking</li>
                    </ul>
                </div>

                <!-- Category 4 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 04 · 15% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Safeguarding &amp; PSEAH</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>Formal Child Protection &amp; Vulnerable Adult Policy</li>
                        <li>PSEA (Protection from Sexual Exploitation &amp; Abuse) standard</li>
                        <li>Mandatory police &amp; background vetting for field staff</li>
                        <li>Confidential community whistleblower &amp; reporting hotlines</li>
                        <li>Survivor-centred incident management protocol</li>
                        <li>Annual mandatory safeguarding refresher certification</li>
                    </ul>
                </div>

                <!-- Category 5 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 05 · 15% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Field Delivery Capacity</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>Qualified full-time technical engineers on payroll</li>
                        <li>Secure warehousing, storage &amp; cold-chain facilities</li>
                        <li>Fleet management, fuel tracking &amp; distribution logs</li>
                        <li>Sub-contractor and vendor assessment protocols</li>
                        <li>Emergency response readiness &amp; buffer stock protocols</li>
                        <li>Beneficiary selection criteria &amp; vulnerability scoring</li>
                    </ul>
                </div>

                <!-- Category 6 -->
                <div style="background: var(--paper); padding: 18px; border: 1px solid var(--border-light); border-radius: 8px;">
                    <span class="cat-weight">Category 06 · 15% Weight</span>
                    <h4 style="font-size: 15px; margin: 4px 0 8px; color: var(--ink);">Geotagged Site Verification</h4>
                    <ul style="font-size: 11.5px; color: var(--text-muted); line-height: 1.6; padding-left: 14px;">
                        <li>Geotagged GPS coordinates recorded at water well sites</li>
                        <li>Independent third-party engineering inspections</li>
                        <li>High-resolution date-stamped photo &amp; video proof</li>
                        <li>Beneficiary thumbprint / signed distribution receipts</li>
                        <li>Water quality testing certificate (arsenic, salinity, bacteria)</li>
                        <li>Final payment tranche locked until digital audit sign-off</li>
                    </ul>
                </div>
            </div>

            <div style="margin-top: 24px; text-align: center;">
                <button class="btn-editorial-gold" onclick="closeFrameworkModal(); openBookingModal('Governance & Due Diligence Audit');">
                    <span>Inquire About Implementing VerifiAid™ in Your Portfolio →</span>
                </button>
            </div>
        </div>
    </div>

    <!-- ✦ INTERACTIVE MODAL 3: PROGRAMME LEADER’S VIEW ARTICLE ✦ -->
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
                <p>
                    The roadblock is rarely ideological—it is almost entirely institutional and operational. Intermediaries justify retaining funds because international donors demand draconian compliance standards that local NGOs struggle to navigate without substantial overhead support.
                </p>
                <h4 style="font-size: 16px; color: var(--ink); margin-top: 6px;">The Five Practical Steps for Programme Directors:</h4>
                <ol style="padding-left: 18px; display: flex; flex-direction: column; gap: 8px;">
                    <li><strong>Equitable Risk Sharing:</strong> Moving away from sub-contractual models where all delivery risk sits with the local partner while overhead margins remain in London or Geneva.</li>
                    <li><strong>Universal Due Diligence Passports:</strong> Standardising compliance criteria through objective models like VerifiAid™ so national NGOs are not forced to undergo 12 redundant audits for 12 different donors.</li>
                    <li><strong>Funding Core Overhead Costs:</strong> Allocating at least 15% of project budgets specifically for local institutional capacity, accounting software, and staff safeguarding retention.</li>
                    <li><strong>Objective Digital Verification:</strong> Using geotagged GPS telemetry and mobile proof-of-work to satisfy donor audit standards without imposing stifling bureaucratic paperwork.</li>
                    <li><strong>Anticipatory Action Clauses:</strong> Embedding pre-approved contingency envelopes into local partner agreements to enable rapid activation during climate disasters.</li>
                </ol>
                <p>
                    Localisation is not an act of charity toward Southern organisations; it is the fundamental prerequisite for an effective, dignified, and resilient humanitarian response.
                </p>
            </div>

            <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 12px; color: var(--text-muted);">Share this perspective or invite Dayem for a discussion.</span>
                <button class="btn-editorial-primary" onclick="closeArticleModal(); openBookingModal('Keynote & Panel Speaking');">
                    <span>Discuss Localisation Advisory →</span>
                </button>
            </div>
        </div>
    </div>

</body>
</html>
