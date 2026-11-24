# 🧠 Skills.md: Multi-Brand & Multi-Sprint Knowledge Base Engine

This document provides the foundational intelligence, 3-brand design tokens, 12-sprint product & route matrices, audience blueprints, personas, and creative standards required by the multi-agent content generation swarm.

It powers all **12 Sprints (120 Weeks / 600 Master Deliverables)** across **Brand 1 (Ofia.ng)**, **Brand 2 (ResultsPro.ng)**, and **Brand 3 (ComplianceHub.ng)** in lockstep with [`AGENTS.md`](file:///Volumes/ReedBreedCC/9mm/AGENTS.md) and [`9MMP.html`](file:///Volumes/ReedBreedCC/9mm/9MMP.html).

---

## 1. Three-Brand Strategic Architecture & Voice Matrix

The media engine operates across three distinct brand universes. Agents must strictly align tone, vocabulary, design tokens, and product positioning with the active sprint.

| BRAND 1: OFIA (Sprints 01–04)<br>*Commerce & SME Retail* | BRAND 2: RESULTSPRO (Sprints 05–08)<br>*Education ERP & Governance* | BRAND 3: COMPLIANCEHUB (Sprints 09–12)<br>*Corporate Governance & RegTech* |
| :--- | :--- | :--- |
| • Sprint 01: Impulse Buy (Social) | • Sprint 05: K-12 School Administration | • Sprint 09: CAC Corporate Governance (CAMA 2020) |
| • Sprint 02: Supply Chain (B2B Bulk) | • Sprint 06: Tertiary & Campus Systems | • Sprint 10: Statutory Quad & BPP Tender Readiness |
| • Sprint 03: Niche Marketplaces | • Sprint 07: EdTech & Scale Academies | • Sprint 11: DNFBP AML/CFT & SCUML Clearances |
| • Sprint 04: Omnichannel Retail / POS | • Sprint 08: Gov & Corp Compliance Matrix | • Sprint 12: Enterprise Data Privacy (NDPA 2023) |


### 1.1 Brand 1: Ofia (`https://www.ofia.ng`) — Sprints 01 to 04
* **Core Identity**: Commerce operating system, unified ERP, and digital checkout infrastructure for social sellers, distributors, independent marketplace merchants, and physical store retailers.
* **Tone & Voice**: Commercial, tactical, empathetic to merchant operational burnout, fast-paced, grounded in daily trading realities, cash velocity, and margin protection.
* **Publication Identity for Email**: *The Ofia Commerce Brief*
* **Official Legal Entity**: **Ofia Enterprise Growth**
* **Author Persona**: `@Ifeanyi Felix` (Head of Commerce Editorial, Ofia.ng)
* **Official Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139974/9mm/ofia_logo.svg` (Header: 44×44px square aligned side-by-side with titles; Footer: 22×22px inline beside "Ofia Enterprise Growth").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: Brand Signal Blue (`#2A6BE0` / `#0069ff`), Ember Gold (`#EF8B3C`), Neutral Canvas (`#FAF9F6`), Deep Ink (`#14151F`).
* **Email Button & Card Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all email buttons, badges, cards, and images. *(Blog editorial images use `max-width: 720px; border-radius: 8px;`.)*

### 1.2 Brand 2: ResultsPro (`https://www.resultspro.ng`) — Sprints 05 to 08
* **Core Identity**: Institutional education ERP, tamper-proof academic grading engine, student records system, and multi-state compliance ledger for K-12 school networks, universities, edtech bootcamps, and government ministries.
* **Tone & Voice**: Institutional authority, academic rigor, governance-focused, data-driven, uncompromising on audit trails, donor transparency, and administrative integrity.
* **Publication Identity for Email**: *The ResultsPro Institutional Dispatch*
* **Official Legal Entity**: **ResultsPro Educational Support**
* **Author Persona**: `@Ifeanyi Felix` (Head of Institutional Governance / Public Sector Strategy, ResultsPro.ng)
* **Official Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139977/9mm/resultspro_logo.png` (Header: 44×44px square aligned side-by-side with titles; Footer: 22×22px inline beside "ResultsPro Educational Support").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: Corporate Royal Blue (`#1A48B6` / `#0F3282`), Signature Red (`#FE0B10`), Soft Blue Surface (`#EFF6FF`), Deep Ink (`#111827`).
* **Email Button & Card Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all email buttons, badges, cards, and images.

### 1.3 Brand 3: ComplianceHub (`https://www.compliancehub.ng`) — Sprints 09 to 12
* **Core Identity**: Enterprise corporate governance, statutory compliance automation, AML/SCUML transaction controls, and NDPA 2023 data privacy infrastructure for Nigerian SMEs, federal contractors, DNFBPs, fintechs, and corporate boards.
* **Tone & Voice**: Calm executive authority, legally exact (citing CAMA 2020, PRA 2014, ITF Act, MLA 2022, NDPA 2023), practical boardroom governance, audit-ready precision.
* **Publication Identity for Email**: *The ComplianceHub Regulatory Brief*
* **Official Legal Entity**: **ComplianceHub Regulatory Technologies Limited** (Abuja & Victoria Island, Lagos, Nigeria)
* **Author Persona**: `@Ifeanyi Felix` (Head of Regulatory Affairs & Corporate Compliance, ComplianceHub.ng)
* **Official Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139981/9mm/compliancehub_logo.png` (Header: 44×44px square aligned side-by-side with titles; Footer: 22×22px inline beside "ComplianceHub Regulatory Technologies Limited").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: Sovereign Emerald (`#064E3B`), Regulatory Gold (`#D97706`), Mint Highlight (`#D1FAE5`), Warm Ivory Canvas (`#FAF9F6`), Deep Ink (`#14151F`).
* **Email Button & Card Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all email buttons, badges, cards, and images.

---

## 2. Master Product Matrix & Software Screen Anchors

Agents must pitch the specific product designated for the active sprint, grounding workflows in the authentic platform routes below:

| Sprint ID & Brand | Target Product | Primary Target Audience | Core Friction Solved | Key Features & Screen Anchors |
| :--- | :--- | :--- | :--- | :--- |
| **Sprint 01** (Ofia) | **Ofia Shop Manager & Shopfront** | Social sellers on IG, TikTok, Meta Ads (`shop-instagram`, `shop-ads`, `shop-tiktok`) | The 100-DM bottleneck; stock-outs during viral spikes; manual variant selection in DMs. | Multi-variant catalog (sizes/colors), live stock sync, reorder alerts, automated Paystack checkout. Anchor: `client_slug.ofia.shop/shopfront`, `/erp/admin/marketplace`, `/erp/admin/inventory` |
| **Sprint 02** (Ofia) | **Ofia Inventory IMS & Logistics** | Wholesale distributors, FMCG suppliers, bulk logistics (`ofia-distributors`, `ofia-logistics`) | 72-hour paper quotation delays; warehouse bin-card mismatches; freight margin leakage. | Multi-warehouse bin tracking, self-service tiered B2B pricing portal, dispatch routing, digital ePOD. Anchor: `/erp/admin/inventory/warehouses`, `/erp/admin/logistics/dispatch`, `/erp/admin/logistics/fleet` |
| **Sprint 03** (Ofia) | **Ofia Niche Marketplace & Escrow** | Independent merchants, tech vendors, verified pros (`ofia-markets`, `shop-marketplaces`) | 15% aggregator commission crush; masked customer data; 14-day payout delays on Jumia/Jiji. | Verified seller badges, automated milestone buyer escrow, direct customer CRM, same-day settlement. Anchor: `ofia.ng/[niche]`, `/book/nexa-verified`, `/booking/[ref]/track` |
| **Sprint 04** (Ofia) | **Ofia POS Terminal & Enterprise ERP** | Supermarkets, multi-branch stores, walk-in showrooms (`ofia-retail`, `ofia-midmarket`) | Disconnected offline/online stock; cashier reconciliation lag; walk-in customer drop-off. | Touchscreen SmartPOS register, multi-tender checkout (Cash/Card/Transfer), instant double-entry general ledger. Anchor: `/erp/admin/pos`, `/erp/accountant/ledger`, `/erp/accountant/reconcile` |
| **Sprint 05** (ResultsPro) | **ResultsPro K-12 Suite & SchoolHub** | Private primary & secondary schools, school groups (`rp-group-b`, `rp-group-c` e.g., Greensprings) | End-of-term manual report card chaos; unverified bank transfers for fees; fragmented PTA comms. | Automated CA gradebook, automated PDF report cards with teacher comments, student virtual accounts & parent fee portal. Anchor: `/schoolhub`, `/classroompro`, `/admin/inbox` |
| **Sprint 06** (ResultsPro) | **ResultsPro Campus & ExamsPro** | Universities, polytechnics, colleges (`rp-group-d`) | "Missing script" exam crises; 4-hour manual graduation clearance queues; portal crashes during course adds. | Digital course registration, tamper-proof student transcript API, semester exam proctoring & score audit. Anchor: `/coursespro`, `/examspro`, `/dashboard` |
| **Sprint 07** (ResultsPro) | **CoursesPro, TutorsPro & ClassroomPro** | Coding bootcamps, exam prep centers, online educators (`rp-group-e`, `rp-group-j`) | Grading 1,000 student projects simultaneously; tutor scheduling chaos; student cohort churn. | Automated homework & coding test autograders, student cohort analytics, live class scheduling, tutor marketplace. Anchor: `/tutorspro`, `/coursespro`, `/blog/[slug]` |
| **Sprint 08** (ResultsPro) | **Institutional Compliance Matrix & Ledger** | Ministries of Education, state boards, donor programs (`rp-group-g`, `rp-group-h`) | Ghost teachers draining payroll across 36 states; falsified local government school reports; donor audit panic. | Real-time state-wide teacher biometric audit, school infrastructure ledger, donor-compliant grant reporting. Anchor: `/erp/md`, `/erp/accountant/statutory-remittances`, `/admin/audit-logs` |
| **Sprint 09** (ComplianceHub) | **ComplianceHub Corporate Governance Suite** | SME founders, MDs, Company Secretaries, CFOs | Unfiled CAC annual returns, unrecorded Form CAC 7A/2A/3 board changes, Section 119 PSC mismatches & bank KYC freezes. | Automated CAC CRP telemetry, live Electronic Status Report monitoring, post-incorporation filing tracker, PSC register sync. Anchor: `/corporate-audit`, `/modules/cac-governance` |
| **Sprint 10** (ComplianceHub) | **ComplianceHub HubCalendar & Payroll Audit Shield** | Federal contractors, EPC firms, engineering & procurement CFOs | Expired Statutory Quad certificates (FIRS TCC, PenCom, ITF, NSITF), BPP IRR tender disqualification, retroactive 2% monthly PenCom penalties. | 5-Year Forensic Inspection Vault, automated Statutory Quad renewal calendar, gross-payroll PRA 2014/ITF reconciliation. Anchor: `/modules/hubcalendar`, `/onboarding?module=hubcalendar` |
| **Sprint 11** (ComplianceHub) | **ComplianceHub HubAML** | Real estate developers, auto dealers, jewellers, law/accounting DNFBPs | MLA 2022 ₦5M/₦10M cash traps, split-transfer smurfing, SCUML/EFCC PND account freezes, delayed NFIU goAML CTR/STR reporting. | Automated BVN/PEP screening, cashless escrow boundaries, NFIU goAML CTR/STR telemetry, pre-emptive bank clearance packs. Anchor: `/modules/hubaml`, `/onboarding?module=hubaml` |
| **Sprint 12** (ComplianceHub) | **ComplianceHub HubPrivacy** | Fintech CTOs, scaleup founders, Data Protection Officers (DPOs) | Shadow data pipelines (local SQL dumps, open support NIN tickets, unvetted foreign pixels) triggering ₦10M or 2% turnover NDPC fines. | NDPA 2023 DCMI audit engine, live RoPA & DPA registry, synthetic staging governance, 72-hour breach workflow. Anchor: `/modules/hubprivacy`, `/onboarding?module=hubprivacy` |

---

## 3. Sprint-by-Sprint Core Theses & Strategic Industry Context

Every sprint's content must incorporate authentic sector context, verified industry statistics, and deep domain intelligence instead of superficial generalizations. **Strict Rule (`CALC-00`)**: Across **all deliverables** (blogs, emails, video scripts, and social packs), **strictly zero calculations, algebraic formulas, or `$$...$$` LaTeX equations** are permitted; ground every piece in rich reporting on real Nigerian industry events, statutory directives, empirical studies, and concrete Naira/time operational benchmarks.

### Sprint 1 (Impulse Buy · Ofia)
* **Core Thesis**: *"You are paying Mark Zuckerberg for traffic, but losing the sale because your checkout requires human intervention."*
* **Sector Context & Industry Benchmark**:
  - In Nigeria and broader Sub-Saharan Africa, over 56% of MSMEs sell exclusively via social channels (GSMA / World Bank).
  - Conversational checkout delay causes 90.5%–91% cart abandonment (*Brands.ng*, *TechCabal*).
  - 100 manual DMs per day consumes 8+ staff hours merely serving as human order forms.
* **Leakage Point**: Viral traffic spikes cause 80%+ stockout drops and missed revenue when customers wait hours for manual bank transfer verification.

### Sprint 2 (Supply Chain B2B · Ofia)
* **Core Thesis**: *"Wholesale enterprise buyers do not cancel orders over 50 naira; they cancel because your sales desk takes 3 days to send a paper quote."*
* **Sector Context & Industry Benchmark**:
  - Over 68% of commercial B2B procurement in West Africa experiences 24-to-72-hour quotation latency (*West African Supply Chain Review*).
  - Physical paper tally ledgers generate an average 18.4% phantom stock reconciliation variance in wholesale warehouses (*Manufacturers Association of Nigeria*).
* **Leakage Point**: Manual paper waybills and untracked freight surcharges leak 4.5% to 7.2% of gross wholesale margins during transit.

### Sprint 3 (Marketplaces · Ofia)
* **Core Thesis**: *"You do not own an e-commerce business if a marketplace aggregator charges you a 15% landlord tax and conceals your customers' phone numbers."*
* **Sector Context & Industry Benchmark**:
  - Dominant third-party marketplace platforms extract 12% to 22% in merchant commission fees, listing levies, and mandatory fulfillment charges (*Nairametrics*, *BusinessDay*).
  - Merchants are subjected to unilateral account suspensions and zero first-party buyer data retention.
* **Leakage Point**: Up to ₦37.5M paid in cumulative platform commissions over 5 years on a ₦50M annual GMV, while building zero enterprise brand equity.

### Sprint 4 (Omnichannel Retail · Ofia)
* **Core Thesis**: *"500 Google reviews and packed showroom aisles mean nothing if walk-in shoppers cannot reorder from home without calling a cashier."*
* **Sector Context & Industry Benchmark**:
  - 82% of physical walk-in shoppers in urban retail hubs never make a second purchase because physical stores fail to capture digital customer identities at POS (*PwC Nigeria SME Survey*).
  - Legacy standalone cash registers create isolated data silos separated from online inventory and delivery tracking.
* **Leakage Point**: 300 daily store walk-ins with no digital profile equals over 240 lost reorder opportunities every single day.

### Sprint 5 (K-12 School Admin · ResultsPro)
* **Core Thesis**: *"Your teachers should be inspiring students, not staying awake until 3:00 AM manually entering 500 exam scores into paper gradebooks."*
* **Sector Context & Industry Benchmark**:
  - Manual term-end academic grading across 500 students taking 10 subjects burns over 250 teacher hours per term in repetitive clerical arithmetic (*Universal Basic Education Commission - UBEC Reports*).
  - Unidentified manual bank transfers consume 15+ hours weekly in bursar reconciliation, creating friction with fee-paying parents.
* **Leakage Point**: Administrative grading fatigue, calculation errors in report card rankings, and tuition fee collection leakages.

### Sprint 6 (Tertiary & Campus · ResultsPro)
* **Core Thesis**: *"A university cannot be world-class when graduating seniors queue for four days just to obtain a signature on a paper clearance slip."*
* **Sector Context & Industry Benchmark**:
  - In legacy universities, graduating cohorts lose an average of 96,000 collective student hours queuing across 8 separate departmental clearance desks (*National Universities Commission - NUC Modernization Directives*).
  - "Missing exam scripts" and transcript delays account for over 70% of student administrative grievances.
* **Leakage Point**: Months of delay in issuing academic transcripts and National Youth Service Corps (NYSC) mobilization clearances due to decentralized paper archives.

### Sprint 7 (EdTech Scale · ResultsPro)
* **Core Thesis**: *"The ceiling of an online coding bootcamp is not student acquisition—it is the human limit of grading 1,000 code repositories before cohort week 2."*
* **Sector Context & Industry Benchmark**:
  - Scaling an EdTech cohort to 500+ students requiring 2 weekly project reviews generates over 330 grading hours weekly, overwhelming human instructors (*TechCabal EdTech Review*).
  - Without automated autograding and continuous integration (CI) test runners, student dropout rates spike above 60% due to delayed feedback.
* **Leakage Point**: High tutor burnout, delayed assignment evaluations, and student churn before cohort milestone completions.

### Sprint 8 (Gov & Corp Matrix · ResultsPro)
* **Core Thesis**: *"Ministries of Education do not lack funding; they lack real-time data to stop ghost teachers from draining 25% of state payroll."*
* **Sector Context & Industry Benchmark**:
  - State education boards and civil service commissions lose billions of naira annually to unverified ghost workers, unaccredited private learning centers, and duplicate payroll records (*Federal Ministry of Education National Personnel Audit*).
  - Paper inspection dossiers take 60 to 90 days to travel from rural schools to headquarters, rendering state regulatory interventions reactive.
* **Leakage Point**: Over ₦3.6 Billion annually lost in unverified teaching payroll and unregulated satellite centers per state.

### Sprint 9 (CAC Corporate Governance · ComplianceHub)
* **Core Thesis**: *"Under CAMA 2020 and automated CBN KYC checks, internal board minutes mean nothing until they are formally gazetted on the CAC Company Registration Portal."*
* **Sector Context & Industry Benchmark**:
  - Unfiled Form CAC 7A (director changes), Form CAC 2A (share allotments), Form CAC 3 (registered address), and Section 119 PSC filings trigger immediate commercial bank debit freezes and credit facility stalls (*Punch*, *Nairametrics*).
  - Chronic non-filing of Annual Returns exposes active Nigerian companies to automatic delisting from the national CAC register.
* **Leakage Point**: Frozen operating accounts, stalled ₦100M+ credit drawdowns, and daily statutory late-filing penalties across subsidiaries.

### Sprint 10 (Statutory Quad & Tender Readiness · ComplianceHub)
* **Core Thesis**: *"Framed annual compliance certificates on your boardroom wall will not save a federal contractor from a 5-year forensic PenCom and ITF payroll audit."*
* **Sector Context & Industry Benchmark**:
  - Federal procurement tenders on the BPP database automatically disqualify contractors missing valid FIRS TCC, PenCom, ITF, or NSITF clearances.
  - Calculating 18% pension or 1% ITF strictly on Basic Salary instead of gross emoluments triggers retroactive 2% monthly PenCom penalties under PRA 2014 Section 4 and instant BPP IRR suspension.
* **Leakage Point**: Multi-million-Naira retroactive statutory assessments and disqualification from billion-Naira federal/state tenders.

### Sprint 11 (High-Scrutiny Sector Clearances / AML · ComplianceHub)
* **Core Thesis**: *"Saying yes to one ₦20 million cash deposit or four split transfers from relatives can freeze every corporate bank account and trigger EFCC forfeiture overnight."*
* **Sector Context & Industry Benchmark**:
  - Real estate developers, auto dealers, jewellers, law firms, and accounting firms are Designated Non-Financial Businesses and Professions (DNFBPs) governed by the Money Laundering (Prevention and Prohibition) Act 2022 (MLA 2022).
  - Accepting cash above ₦5M (individual) or ₦10M (corporate) outside a licensed financial institution is a strict liability criminal offense under Section 2, while structuring ("smurfing") triggers Section 18 interim forfeiture and SCUML/NFIU goAML sanctions.
* **Leakage Point**: Corporate Post-No-Debit (PND) freezes, seized property assets, and personal director liability.

### Sprint 12 (Enterprise Governance & Data Privacy · ComplianceHub)
* **Core Thesis**: *"Locked AWS production firewalls cannot save a Nigerian tech scaleup from a ₦10M NDPC sanction when customer BVNs and NIN slips leak through developer laptops and open support tickets."*
* **Sector Context & Industry Benchmark**:
  - Under the Nigeria Data Protection Act 2023 (NDPA 2023 Sections 24, 29, 39, and 49), Data Controllers of Major Importance (DCMIs) face statutory penalties up to ₦10,000,000 or 2% of annual gross turnover for unconsented cross-border transfers, missing DPAs, and unencrypted PII pipelines.
  - Shadow data pipelines (local SQL dumps, Zendesk NIN attachments, WhatsApp CSV exports, unvetted offshore SDKs) are the primary cause of failed DPCO annual audits.
* **Leakage Point**: Regulatory fines, blocked enterprise B2B procurement sign-offs, and stalled cross-border venture due diligence.


---

## 4. Multi-Format Asset Crafting Guidelines

### 4.1 🎬 Video Scripts (`video-script.md`)
* **Format**: Dual-Track Talking Head (TH) + Drama Skit.
* **Runtime**: ~4:15 (600–650 spoken words at 140 WPM).
* **Narrative Arc**:
  1. *Cold Open TH (0:00–0:25)*: High-stakes pattern interrupt; visceral problem statement.
  2. *Scene 1: The High (0:25–1:15)*: Excitement, demand spike, audit arrival, or volume surge.
  3. *Scene 2: The Crash (1:15–2:40)*: The manual system breaks under real-world pressure; dramatic confrontation; split-screen contrast with automated peer.
  4. *TH: Operational Economics & Impact (2:40–3:20)*: Calm, analytical breakdown of Naira/time leakage and compliance risk using concrete sector benchmarks (**strictly zero `$$` LaTeX equations or algebraic formulas**).
  5. *Scene 3: The Rewind (3:20–4:00)*: Hard rewind effect; exact same scenario replayed using the designated product.
  6. *TH: The Close (4:00–4:15)*: Decisive product pitch and live URL CTA (`ofia.ng/products`, `resultspro.ng/solutions`, or `compliancehub.ng`).
* **Production Notes**: Must include word count, tone notes, casting guidance, consistent currency/metrics, and a 60-second TikTok/Reels cutdown outline.

### 4.2 📚 Bookmarkable Blog Posts (`blog-post.md`) — Master 8-Section Cohesive Story Standard
* **Core Goal**: Must read as **one complete, useful story** from start to finish—never like disconnected briefs stitched together.
* **Tone & Format**: Warm, clear, calm, credible, and simple. Easy to read on a phone (1–2 sentence paragraphs with generous whitespace).
* **Word Count**: 1,500 – 2,400 words.
* **Mandatory 8-Section Structure** (8–9 unique verified `wsrv.nl` Nigerian photos; every image explicitly cited in prose; `max-width: 720px; border-radius: 8px;`):
  1. **Sec 0 — Header, Meta Hook, Hero Question & `IMG-01` Prompt**: H1 Title, metadata (`@Ifeanyi Felix`), 2-sentence question-led excerpt, Hero Cover Image (`max-width: 720px`) followed immediately by a single-sentence bold provocative question, and the 3D Disney Pixar `IMG-01` Featured Image Prompt Block.
  2. **Sec 1 — Relatable Opening Persona Story (`The Busy [Business/Institution] That Was...`)**: Open on a busy day at the persona's real Nigerian location (explicitly citing the Hero photo above), pivot with *"But [Name] has a problem,"* walk through 3 concrete everyday micro-failures, and close with *"Her business has [strengths]. What it lacks is a connected [system]."*
  3. **Sec 2 — Macro Industry Validation (`The [Industry] Is Changing, and [Operators] Cannot Afford to Ignore It`)**: Present **4 numbered industry developments** backed by real, dated Nigerian news/research reports that pass the Relevance Test. Each of the 4 items MUST:
     - Embed **its own unique verified Nigerian/African news photo** (4 matched images across the 4 points, `wsrv.nl`, `referrerpolicy="no-referrer"`, `max-width: 720px`, zero Unsplash, zero logos/maps/posters).
     - Cite the publication, date, core finding with exact clickable article link, and explicit prose citation of the photo.
     - Explicitly tie it back to the persona in 1–2 sentences (*"Why does this matter to [Name]?"* or *"For [Name], this highlights..."*).
  4. **Sec 3 — Core Diagnosis (`The Real Problem: Your [Channels/Departments] Are Competing Instead of Working Together`)**: Revisit the persona (*"Consider [Name]'s business again."*), stack 4 parallel one-sentence operational disconnects across departments, define the unified solution simply, and transition into the 10 ways.
  5. **Sec 4 — The 10 Practical Fixes (`10 Ways to Connect / Solve...`)**: Numbered `1` to `10` with 2–3 unique inline images interspersed (e.g., at #1, #3, #5) and cited in prose. Every item strictly follows the 4-part micro-template:
     - **Action-Verb Heading**
     - **The Current Friction / Mini-Scenario** (2–3 short paragraphs)
     - **The Connected Solution** (2–3 short paragraphs)
     - **Bold Closing Takeaway**: `**Why it matters:** [1-sentence operational benefit].`
  6. **Sec 5 — 3-Column Comparison Table (`What a Connected [Business/Institution] Looks Like`)**: Clean **8-row, 3-column** native Markdown table (`Business activity` | `Disconnected [operations]` | `Connected [operations]`).
  7. **Sec 6 — Product Bridge (`How [Ofia / ResultsPro / ComplianceHub] Helps Bring Your Operations Together`)**: Include a unique inline image cited in prose, reconnect to the persona, and introduce the platform with *"Depending on the configured modules, businesses/institutions can use the platform to support:"* followed by **6 clean module bullets**.
  8. **Sec 7 & 8 — Narrative Closure, Direct CTA & Tags**: Bring narrative closure to the persona's realization, follow with `Ready to Connect Your...?` CTA block, live product link, memorable **2-sentence epigram**, and `#tags`.

### 4.3 📰 Cold Outreach & Pure-News HTML Email Blast (Stream 2: `email-blast.md` / `email-blast.html`)
* **Part 1 & Part 2 (`email-blast.md`)**:
  - **Subject Line Matrix**: 3 high-converting angles (Pain, Curiosity/Warning, Metric/SLA) — **all 3 incorporating `at {{company}}`** — plus Preview Text.
  - **3-Touch Cold Outreach Sequence**: Day 1 (Pain Hook), Day 4 (Warning Signs/Operational Risk), Day 8 (Case Study Proof & Value Offer), each with `{{first_name}}`, `{{company}}`, `{{email}}`, `{{unsubscribe_url}}` and CAN-SPAM footers.
* **Part 3 — Pure-News Responsive Light Executive HTML Newsletter (100% `.md` ↔ `.html` Parity, Zero Calculations)**:
  - Standardized opening greeting: `Dear {{first_name|Valued Partner}},`.
  - The **Cover Story**, **all 3 Curated Industry Intelligence Briefs**, and the **Industry News Spotlight** (mandatory in BOTH `.md` and `.html`) must be **real, verifiable Nigerian news stories** highly relevant to the sprint's sector, each featuring:
    1. A **direct clickable link** to the exact source article URL (never bare homepages or mismatched articles).
    2. Its **globally unique, authentic Nigerian news photo** wrapped in `https://wsrv.nl/?url=...&w=800&output=jpg` with `referrerpolicy="no-referrer"` (zero Unsplash, zero logos/badges/maps/posters, never reused from the blog or any other week).
    3. **Explicit narrative reference** to the photo in the surrounding prose (in BOTH `.md` and `.html`) plus contextual `alt` text and caption.
  - **Zero Calculation / Formula Sections**: Strictly zero calculation boxes, mathematical formulas, or worked equations.
* **Three-Brand Template Styling**:
  * **Brand 1: Ofia (Sprints 01–04)**: *The Ofia Commerce Brief* | Cloudinary `ofia_logo.svg` | `#2A6BE0` / `#EF8B3C` / `#FAF9F6` | Entity: **Ofia Enterprise Growth**.
  * **Brand 2: ResultsPro (Sprints 05–08)**: *The ResultsPro Institutional Dispatch* | Cloudinary `resultspro_logo.png` | `#1A48B6` / `#0F3282` / `#FE0B10` / `#EFF6FF` | Entity: **ResultsPro Educational Support**.
  * **Brand 3: ComplianceHub (Sprints 09–12)**: *The ComplianceHub Regulatory Brief* | Cloudinary `compliancehub_logo.png` | `#064E3B` / `#D97706` / `#D1FAE5` / `#FAF9F6` | Entity: **ComplianceHub Regulatory Technologies Limited**.
* **HTML Architecture Guidelines**:
  - 600px max width table wrapper, Light Executive UI (strictly no dark `#0F172A` / `#000000` background blocks), `Dropa` (`Dropa-Regular.woff2`), strict `border-radius: 0px !important;`.
  - Top Utility Bar (Edition #, Date, Read Time, Live Domain Link) + Executive Masthead with **44×44px Cloudinary logo** aligned side-by-side with titles.
  - Bulletproof Primary CTA Button linking to the **live HTTPS blog post teardown URL** (zero `file:///` paths).
  - Sprint-specific Product Spotlight & Founding Offer + `— Ifeanyi Felix` signature + Light Executive Footer with **22×22px Cloudinary logo**, official legal entity, physical address, and 4 merge tags (`{{name}}`, `{{email}}`, `{{company}}`, `{{unsubscribe_url}}`).

### 4.4 📱 Omnichannel Social Media Packs (`social-media-carousel.md`)
* **LinkedIn Suite**: Long-form thought leadership post (hook before the fold, concrete operational benchmarks—zero `$$` formulas, 5-point summary, live CTA, discussion question), short punchy alternative, 6-to-8 slide carousel outline with full slide copy, engaging poll concept, and first-comment link strategy.
* **X / Twitter Suite**: 7-tweet viral thread (hook, context, operational impact proof—zero `$$` equations, practical fixes, live CTA) + standalone tweet under 280 characters.
* **Facebook Suite**: Conversational, community-oriented Nigerian operator narrative with open discussion prompt and live blog CTA.
* **Meta Ecosystem Suite**: Instagram carousel caption (hook, bullet points, carousel slide cue, hashtags) + punchy Threads post under 500 characters.
* **Clean Formatting**: Zero `[BLOG LINK]` placeholders, zero `file:///` paths, zero raw HTML entities (`&lt;`, `&rarr;`, `&middot;`).

---

## 5. Visual Art Direction & Prompt Standards

### 5.1 🎨 3D Disney Pixar Featured Image Specification (`IMG-01`)
Every blog post must include a featured visual prompt block immediately below the Hero provocative question:
```markdown
> **VISUAL FOR BLOG FEATURED IMAGE (IMG-01):**
> *3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology. [Character description, African ethnic features, occupational setting, emotional expression] staring in shock/awe at [the core manual problem breaking down], while [the designated digital product terminal/screen] casts volumetric rim lighting and vibrant screen glow across the scene.*
```

#### Sprint Character & Setting Guide (Sprints 01–12):
* **Sprint 01 (Impulse Buy · Ofia)**: Chioma in her vibrant Lagos fashion boutique studio (Lekki), overwhelmed by glowing smartphone chat bubbles ("Price?", "Size M?").
* **Sprint 02 (Supply Chain B2B · Ofia)**: Bayo in a vast industrial warehouse depot (Amuwo-Odofin/Apapa), surrounded by cargo trucks and an avalanche of flying paper waybills.
* **Sprint 03 (Marketplaces · Ofia)**: Chuka in Computer Village Ikeja, watching a giant 15% commission fee cut his balance sheet on a laptop, while his independent store glows green with escrow payouts.
* **Sprint 04 (Omnichannel Retail · Ofia)**: Funke in a sprawling modern showroom/supermarket (Victoria Island/Ikeja) with packed checkout lines, holding a barcode scanner that syncs cleanly with an online store tablet.
* **Sprint 05 (K-12 School Admin · ResultsPro)**: Mrs. Adeleke / Mrs. Adeyemi, an exhausted private school proprietor/bursar in Ikeja GRA surrounded by paper report cards and WhatsApp transfer receipts, while the SchoolHub dashboard glows cleanly.
* **Sprint 06 (Tertiary & Campus · ResultsPro)**: Dr. Okon, university examination officer, in a grand academic Senate hall, watching physical exam script archives transform into a secure digital transcript interface.
* **Sprint 07 (EdTech Scale · ResultsPro)**: Tunde, lead coding bootcamp instructor in Yaba, staring wide-eyed at 500 open browser tabs of student GitHub repos, as an automated test runner turns all test badges green.
* **Sprint 08 (Gov & Corp Matrix · ResultsPro)**: Hajia Amina, state education auditor, in a government ministry secretariat, reviewing a multi-state biometric verification ledger that eliminates ghost teacher payroll in real time.
* **Sprint 09 (CAC Corporate Governance · ComplianceHub)**: Chief Raymond Okafor and Company Secretary Barrister Amina Bello in a sunlit Ikoyi boardroom reviewing an emerald-green ComplianceHub CAC Electronic Status Report with verified Form CAC 7A, 2A, 3, and Section 119 PSC checkmarks.
* **Sprint 10 (Statutory Quad & Tender Readiness · ComplianceHub)**: CFO Mrs. Toyin Adewale and Compliance Director Engr. Funke Adebisi in a Wuse II Abuja boardroom opening a glowing ComplianceHub 5-Year Forensic Inspection Vault with verified PenCom, ITF, NSITF, FIRS TCC, and BPP IRR badges.
* **Sprint 11 (High-Scrutiny Sector Clearances / AML · ComplianceHub)**: Real estate MD Mr. Femi Adesanya and Chief AML Officer Barrister Chioma Okafor in a Lekki waterfront pavilion reviewing ComplianceHub HubAML with verified BVN, PEP, SCUML CTR, and cashless escrow gates.
* **Sprint 12 (Enterprise Data Privacy · ComplianceHub)**: Fintech CTO Engr. Zainab Aliyu and DPO Barrister Tunde Bakare in a Victoria Island tech hub reviewing ComplianceHub HubPrivacy as shadow data pipelines turn emerald green with verified NDPA 2023 RoPA, DPA, and synthetic staging badges.

### 5.2 📸 Real Editorial Imagery & Reference Standards for News, Blog & Email
* All editorial visuals across blogs and emails must come from **verified Nigerian/African news publications** (*Punch*, *Nairametrics*, *TechCabal*, *BusinessDay*, *Daily Trust*, *Techpoint Africa*, *Paystack*) with **direct clickable links** to the exact matching source articles.
* Wrap every editorial photo URL with `https://wsrv.nl/?url=...&w=800&output=jpg` and `referrerpolicy="no-referrer"`, verify live HTTP 200 status, guarantee **zero repository-wide duplication**, ban all Unsplash/stock imagery and isolated corporate logos/badges/maps/posters, and **explicitly mention every image in the surrounding prose** with descriptive contextual `alt` text and captions.

---

## 6. Strict Tone, Voice & Anti-Fluff Enforcement

* **Tone**: Authoritative, grounded, operational, direct (warm and mobile-readable in blogs; crisp executive clarity in emails).
* **Banned Buzzwords (`VOX-01` — Zero Tolerance)**:
  - ❌ *revolutionize*
  - ❌ *seamless*
  - ❌ *game-changer*
  - ❌ *delve into*
  - ❌ *in today's fast-paced digital world*
  - ❌ *supercharge*
  - ❌ *unlock the power of*
  - ❌ *tapestry*
  - ❌ *beacon*
* **Approved High-Authority Vocabulary**:
  - ✅ **Ofia**: *SKUs, variants, bin cards, waybills, dead stock, pro-forma quotes, ePOD, double-entry general ledger, milestone escrow, Paystack settlement*
  - ✅ **ResultsPro**: *CA gradebooks, student virtual accounts, semester transcripts, Senate approvals, CBT test runners, biometric audit trails, ghost worker elimination*
  - ✅ **ComplianceHub**: *CAMA 2020, CAC CRP, Form CAC 7A/2A/3, Section 119 PSC, Electronic Status Report, Statutory Quad, BPP IRR, PRA 2014, ITF gross emoluments, MLA 2022, DNFBP, SCUML, NFIU goAML CTR/STR, NDPA 2023, DCMI, DPCO, RoPA, DPA*
