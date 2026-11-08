<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV — Atae Dayem Syed Mahmood Ullah | International Programmes &amp; Transformation Leader</title>
    <meta name="robots" content="noindex, nofollow">

    <style>
        :root {
            --ink: #10263a;
            --teal: #11a6b5;
            --gold: #f3b61f;
            --cream: #f7f0e5;
            --line: #d8d4cd;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            color: #1a252c;
            background: #fdfbf7;
            line-height: 1.55;
            padding: 40px 20px 80px;
        }

        .cv-container {
            max-width: 860px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid var(--line);
            padding: 56px 64px;
            box-shadow: 0 10px 30px rgba(16, 38, 58, 0.06);
        }

        .no-print-bar {
            max-width: 860px;
            margin: 0 auto 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .no-print-bar a,
        .no-print-bar button {
            background: var(--ink);
            color: #fff;
            border: 0;
            border-radius: 999px;
            padding: 10px 20px;
            font-size: 12px;
            font-weight: 800;
            cursor: pointer;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .no-print-bar a.back-btn {
            background: transparent;
            color: var(--ink);
            border: 1px solid var(--ink);
        }

        /* ✦ HEADER ✦ */
        .cv-header {
            border-bottom: 2px solid var(--ink);
            padding-bottom: 24px;
            margin-bottom: 28px;
        }

        h1.cv-name {
            font-family: Georgia, serif;
            font-size: 32px;
            letter-spacing: -0.02em;
            color: var(--ink);
            line-height: 1.1;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .cv-subtitle {
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 0.14em;
            color: var(--teal);
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .cv-tagline {
            font-size: 12.5px;
            color: #435b67;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .cv-contact-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 12px;
            color: #556c78;
        }

        .cv-contact-row span {
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        /* ✦ SECTIONS ✦ */
        .cv-section {
            margin-bottom: 30px;
        }

        .cv-section-title {
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--ink);
            border-bottom: 1px solid var(--line);
            padding-bottom: 6px;
            margin-bottom: 14px;
        }

        .cv-body-text {
            font-size: 13.5px;
            line-height: 1.6;
            color: #31444e;
        }

        /* ✦ METRICS SNAPSHOT ✦ */
        .cv-metrics {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
            background: #f7f3ec;
            border: 1px solid var(--line);
            padding: 16px 20px;
            margin: 18px 0;
        }

        .cv-metric-item {
            text-align: center;
        }

        .cv-metric-item strong {
            font-family: Georgia, serif;
            font-size: 22px;
            color: var(--ink);
            display: block;
            line-height: 1.1;
        }

        .cv-metric-item span {
            font-size: 9.5px;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #5c727e;
            font-weight: 700;
        }

        /* ✦ CONTRIBUTIONS ✦ */
        .cv-bullets {
            list-style: none;
            display: grid;
            gap: 10px;
        }

        .cv-bullets li {
            position: relative;
            padding-left: 20px;
            font-size: 13px;
            line-height: 1.55;
            color: #384c56;
        }

        .cv-bullets li:before {
            content: "▪";
            position: absolute;
            left: 2px;
            top: 0;
            color: var(--teal);
            font-size: 14px;
        }

        .cv-bullets li strong {
            color: var(--ink);
            font-weight: 700;
        }

        /* ✦ EXPERIENCE ENTRIES ✦ */
        .cv-job {
            margin-bottom: 24px;
        }

        .cv-job-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 4px;
        }

        .cv-job-title {
            font-family: Georgia, serif;
            font-size: 17px;
            color: var(--ink);
            font-weight: 700;
        }

        .cv-job-date {
            font-size: 11px;
            font-weight: 800;
            color: #697e8a;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .cv-job-org {
            font-size: 12.5px;
            color: var(--teal);
            font-weight: 700;
            margin-bottom: 8px;
        }

        /* ✦ EDUCATION GRID ✦ */
        .cv-edu-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .cv-edu-item {
            border: 1px solid var(--line);
            padding: 12px 16px;
            background: #faf8f5;
        }

        .cv-edu-item strong {
            font-family: Georgia, serif;
            font-size: 14px;
            color: var(--ink);
            display: block;
        }

        .cv-edu-item span {
            font-size: 11.5px;
            color: #556c78;
            display: block;
        }

        .cv-edu-item small {
            font-size: 10.5px;
            font-weight: 800;
            color: var(--teal);
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        /* ✦ PRINT MEDIA QUERY ✦ */
        @media print {
            body {
                background: #fff;
                padding: 0;
            }
            .no-print-bar {
                display: none;
            }
            .cv-container {
                border: 0;
                padding: 0;
                box-shadow: none;
                max-width: 100%;
            }
            .cv-section {
                page-break-inside: avoid;
            }
            .cv-job {
                page-break-inside: avoid;
            }
        }

        @media (max-width: 700px) {
            .cv-container {
                padding: 32px 24px;
            }
            .cv-metrics {
                grid-template-columns: 1fr 1fr;
            }
            .cv-edu-grid {
                grid-template-columns: 1fr;
            }
            .cv-job-header {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <div class="no-print-bar">
        <a class="back-btn" href="/">← Return to Main Website</a>
        <button onclick="window.print()">🖨️ Print or Save as PDF</button>
    </div>

    <div class="cv-container">
        <!-- HEADER -->
        <header class="cv-header">
            <h1 class="cv-name">ATAE DAYEM SYED MAHMOOD ULLAH</h1>
            <div class="cv-subtitle">International Programmes &amp; Transformation Leader</div>
            <div class="cv-tagline">Programme Strategy | Partnership Development | Governance &amp; Assurance | Operational Improvement</div>
            <div class="cv-contact-row">
                <span>📍 Manchester, UK</span>
                <span>📞 07563 586 168</span>
                <span>✉ mail@dayemmahmood.com</span>
                <span>🌐 dayemmahmood.com</span>
                <span>🔗 linkedin.com/in/ata-e-dayem-syed-mahmood-ullah</span>
            </div>
        </header>

        <!-- PROFESSIONAL PROFILE -->
        <section class="cv-section">
            <div class="cv-section-title">Professional Profile</div>
            <p class="cv-body-text">
                International programmes and charity-sector leader with 18+ years of experience across humanitarian assistance, international development, programme governance and organisational growth. Combines strategic programme design with hands-on experience in multi-country delivery, partnership development, budget negotiation, risk management and process improvement. At Minhaj Welfare Foundation (MWF), has helped strengthen programme structures, partner assessment, reporting and delivery oversight, while contributing to repeat international delivery partnerships. Founded Dayemi Foundation in 2007 and led its development into a multi-partner humanitarian and development organisation.
            </p>
        </section>

        <!-- CAREER SNAPSHOT -->
        <div class="cv-metrics">
            <div class="cv-metric-item">
                <strong>£1m+</strong>
                <span>Annual Portfolio</span>
            </div>
            <div class="cv-metric-item">
                <strong>13+</strong>
                <span>Countries Delivered</span>
            </div>
            <div class="cv-metric-item">
                <strong>9</strong>
                <span>Delivery Partners</span>
            </div>
            <div class="cv-metric-item">
                <strong>30</strong>
                <span>Cross-Functional Team</span>
            </div>
        </div>

        <!-- SELECTED LEADERSHIP CONTRIBUTIONS -->
        <section class="cv-section">
            <div class="cv-section-title">Selected Leadership Contributions</div>
            <ul class="cv-bullets">
                <li><strong>Programme Transformation:</strong> Helped move MWF from largely case-by-case delivery towards clearer programme scopes, outcome expectations, standardised templates, partner reviews and continuous improvement.</li>
                <li><strong>Delivery Performance:</strong> Coordinated nine delivery partners across two fixed-deadline food distribution programmes in 2026, achieving 99% on-time delivery across a combined budget of approximately £1m.</li>
                <li><strong>Infrastructure Delivery:</strong> Oversaw delivery controls for around 1,000 rural water installations annually, with 100% on-schedule completion reported for the period measured.</li>
                <li><strong>Partnership Development:</strong> Contributed to the development and negotiation of repeat delivery opportunities with international NGOs, including an ongoing annual scope valued at approximately £150,000, subject to allocation and confirmation.</li>
                <li><strong>Proposal Development:</strong> Contributed to 15 project submissions, of which 12 were approved. Three further submissions could not proceed because funding allocation was unavailable.</li>
                <li><strong>Governance Innovation:</strong> Designed VerifiAid, a 40-check partner-assurance framework across six weighted risk categories; piloted the approach, with wider implementation planned. EmpactFlow is in development.</li>
            </ul>
        </section>

        <!-- PROFESSIONAL EXPERIENCE -->
        <section class="cv-section">
            <div class="cv-section-title">Professional Experience</div>

            <!-- Job 1 -->
            <div class="cv-job">
                <div class="cv-job-header">
                    <span class="cv-job-title">Head of Programmes &amp; Projects</span>
                    <span class="cv-job-date">Jan 2026 – Present</span>
                </div>
                <div class="cv-job-org">Minhaj Welfare Foundation (MWF), UK — International charity delivering programmes across 13+ countries</div>
                <ul class="cv-bullets">
                    <li>Lead the programmes and project’s function, overseeing a £1m+ annual portfolio and strengthening programme standards, approval gates, delivery controls and reporting.</li>
                    <li>Translate senior leadership decisions into programme plans, budgets, partner scopes and implementation arrangements; provide recommendations on feasibility, cost, risk and delivery capacity.</li>
                    <li>Coordinate delivery partners and cross-functional teams across Pakistan, Bangladesh and other programme locations; distinguish direct line management from wider team coordination.</li>
                    <li>Oversee programme delivery across food assistance, water access, orphan sponsorship, emergency response and other humanitarian interventions, from initiation through verification, reconciliation and closure.</li>
                    <li>Negotiate project budgets and delivery costs with partners; support needs-based programme design, local consultation, capacity assessment and outcome-focused use of resources.</li>
                    <li>Strengthen partner due diligence and performance review, including registration, sanctions, financial health, safeguarding, capacity and site-verification considerations.</li>
                    <li>Develop reporting and digital tracking approaches to improve visibility of progress, partner accountability and payment approvals; lead the design and rollout of a project-management platform across nine partners.</li>
                    <li>Prepare senior-leadership and board-level reporting on progress, risks, budgets, compliance and operational improvements; contribute to compliance-improvement planning for overseas operations.</li>
                    <li>Designed VerifiAid partner assurance workflow and a central water-programme database to link installation records, payments, inspections and reporting.</li>
                </ul>
            </div>

            <!-- Job 2 -->
            <div class="cv-job">
                <div class="cv-job-header">
                    <span class="cv-job-title">International Programme Manager</span>
                    <span class="cv-job-date">Oct 2023 – Dec 2025</span>
                </div>
                <div class="cv-job-org">Minhaj Welfare Foundation (MWF), UK — Promoted to Head of Programmes &amp; Projects in Jan 2026</div>
                <ul class="cv-bullets">
                    <li>Managed and coordinated international programme delivery with country teams and implementing partners, supporting planning, budgets, procurement, implementation monitoring and donor reporting.</li>
                    <li>Introduced and standardised project proposal, budget, monitoring and reporting templates to improve consistency and decision-making.</li>
                    <li>Supported partner engagement and repeat delivery scopes, improving clarity of deliverables, evidence requirements, responsibilities and communication with international counterparts.</li>
                    <li>Contributed to the development of a more structured, impact-focused delivery model, with clearer project options, outcome expectations and quality-improvement processes.</li>
                </ul>
            </div>

            <!-- Job 3 -->
            <div class="cv-job">
                <div class="cv-job-header">
                    <span class="cv-job-title">Founder &amp; Non-Executive Director</span>
                    <span class="cv-job-date">2023 – Present</span>
                </div>
                <div class="cv-job-org">Dayemi Foundation — Governance oversight; day-to-day operations led by in-country Programme Manager and Accounts Manager</div>
                <ul class="cv-bullets">
                    <li>Provide governance oversight to the organisation founded in 2007, supporting strategy, accountability and sustainable development while operational management remains with the in-country team.</li>
                    <li>Act as client-side governance lead for a 100-bed residential building project, including architect brief, masterplan approval and coordination with the delivery team.</li>
                    <li>Support continued diversification from reliance on a single delivery partner towards multiple international NGO relationships and independently defined programme scopes.</li>
                </ul>
            </div>

            <!-- Job 4 -->
            <div class="cv-job">
                <div class="cv-job-header">
                    <span class="cv-job-title">Founder &amp; Executive Director</span>
                    <span class="cv-job-date">Sep 2007 – Jan 2022</span>
                </div>
                <div class="cv-job-org">Dayemi Foundation, Bangladesh — Humanitarian and development NGO with six branches and UN ECOSOC Special Consultative Status</div>
                <ul class="cv-bullets">
                    <li>Founded and developed a local community initiative into an established organisation working across residential childcare, education, health, livelihoods and community support.</li>
                    <li>Led strategy, fundraising, teams and programme delivery, including support for 550+ children in residential care and services for vulnerable families and communities.</li>
                    <li>Managed six-figure annual budgets and multi-year projects supported by US, UK and European funders, with responsibility for donor reporting, compliance and programme oversight.</li>
                    <li>Delivered construction, education, community-enterprise and emergency-response interventions in rural Bangladesh, including support to refugee and host communities in Cox’s Bazar.</li>
                    <li>Helped build governance, HR, safeguarding and financial-reporting systems and sustain annual income above US$500,000 from international supporters.</li>
                    <li>Contributed to interventions with an estimated cumulative reach approaching 500,000 people over multiple years.</li>
                </ul>
            </div>
        </section>

        <!-- CORE EXPERTISE -->
        <section class="cv-section">
            <div class="cv-section-title">Core Expertise</div>
            <p class="cv-body-text">
                International programme strategy • Portfolio planning and delivery • NGO and donor partnerships • Budget development and negotiation • Programme governance and assurance • Risk and compliance • Partner due diligence and capacity building • Monitoring, reporting and learning • Digital workflow and process improvement • Emergency response • Team leadership and stakeholder management
            </p>
        </section>

        <!-- EDUCATION & PROFESSIONAL DEVELOPMENT -->
        <section class="cv-section">
            <div class="cv-section-title">Education &amp; Professional Development</div>
            <div class="cv-edu-grid">
                <div class="cv-edu-item">
                    <strong>MSc Project Management, Distinction</strong>
                    <span>University of the West of England (UWE Bristol)</span>
                    <small>2022 – 2023 · Graduated with Distinction</small>
                </div>
                <div class="cv-edu-item">
                    <strong>MBA International Business</strong>
                    <span>Cardiff Metropolitan University</span>
                    <small>2006 – 2008</small>
                </div>
                <div class="cv-edu-item">
                    <strong>Bachelor’s in IT &amp; E-Commerce</strong>
                    <span>Charles Sturt University, London Campus</span>
                    <small>2004 – 2006</small>
                </div>
                <div class="cv-edu-item">
                    <strong>Lean Project Management Foundation</strong>
                    <span>Professional Methodology Certification</span>
                    <small>2023</small>
                </div>
            </div>
        </section>

        <!-- DIGITAL TOOLS & LANGUAGES -->
        <section class="cv-section">
            <div class="cv-section-title">Digital Tools &amp; Languages</div>
            <p class="cv-body-text" style="margin-bottom: 8px;">
                <strong>Digital Tools:</strong> Microsoft Excel, Microsoft Project, Smartsheet, Monday.com, Microsoft 365, VerifiAid Tracking Workflows.
            </p>
            <p class="cv-body-text">
                <strong>Languages:</strong> English (fluent) • Bangla (native) • Urdu (working proficiency)
            </p>
        </section>
    </div>

</body>
</html>

