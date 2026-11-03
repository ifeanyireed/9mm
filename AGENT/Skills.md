# 🧠 Skills.md: Multi-Brand & Multi-Sprint Knowledge Base Engine

This document provides the foundational intelligence, product matrices, quantitative formulas, audience blueprints, and visual standards required by the multi-agent content generation swarm. 

It powers all **8 Sprints across the 9-Month Media Engine** defined in [`9MMP.html`](file:///Volumes/ReedBreedCC/9MM/9MMP.html), governing both **Brand 1 (Ofia)** and **Brand 2 (ResultsPro)**.

---

## 1. Two-Brand Strategic Architecture & Voice Matrix

The media engine operates across two distinct brand universes. Agents must strictly align tone, vocabulary, and product positioning with the active sprint.

| BRAND 1: OFIA (Sprints 1 – 4)<br>*Commerce & SME Retail* | BRAND 2: RESULTSPRO (Sprints 5 – 8)<br>*Education ERP & Governance* |
| :--- | :--- |
| • Sprint 1: Impulse Buy (Social) | • Sprint 5: K-12 School Administration |
| • Sprint 2: Supply Chain (B2B Bulk) | • Sprint 6: Tertiary & Campus Systems |
| • Sprint 3: Niche Marketplaces | • Sprint 7: EdTech & Scale Academies |
| • Sprint 4: Omnichannel Retail / POS | • Sprint 8: Gov & Corp Compliance Matrix |


### 1.1 Brand 1: Ofia (`https://www.ofia.ng`) — Sprints 1 to 4
* **Core Identity**: Commerce operating system, unified ERP, and digital checkout infrastructure for social sellers, distributors, independent marketplace merchants, and physical store retailers.
* **Tone & Voice**: Commercial, tactical, empathetic to merchant operational burnout, fast-paced, grounded in daily trading realities, cash velocity, and margin protection.
* **Publication Identity for Email**: *The Ofia Commerce Brief*
* **Official Logo**: `ofia_logo.svg` (Header: 44px square aligned side-by-side with titles; Footer: 22px inline beside "Ofia Enterprise Growth").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: Brand Signal Blue (`#2A6BE0` / `#0069ff`), Ember Gold (`#EF8B3C`), Neutral Canvas (`#FAF9F6`), Deep Ink (`#14151F`).
* **Button Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all buttons, badges, and containers.

### 1.2 Brand 2: ResultsPro (`https://www.resultspro.ng`) — Sprints 5 to 8
* **Core Identity**: Institutional education ERP, tamper-proof academic grading engine, student records system, and multi-state compliance ledger for K-12 school networks, universities, edtech bootcamps, and government ministries.
* **Tone & Voice**: Institutional authority, academic rigor, governance-focused, data-driven, uncompromising on audit trails, donor transparency, and administrative integrity.
* **Publication Identity for Email**: *The ResultsPro Institutional Dispatch*
* **Official Logo**: `resultspro_logo.png` (Header: 44px square aligned side-by-side with titles; Footer: 22px inline beside "ResultsPro Educational Support").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: New Era Transports Corporate Royal Blue (`#1A48B6` / `#0F3282`), Signature Red (`#FE0B10`), Soft Blue Surface (`#EFF6FF`), Deep Ink (`#111827`).
* **Button Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all buttons, badges, and containers.

---

## 2. Master Product Matrix & Software Screen Anchors

Agents must pitch the specific product designated for the active sprint, grounding features in authentic screen routes from [`slugs.md`](file:///Volumes/ReedBreedCC/9MM/AGENT/slugs.md):

| Sprint ID & Brand | Target Product | Primary Target Audience | Core Friction Solved | Key Features & Screen Anchors |
| :--- | :--- | :--- | :--- | :--- |
| **Sprint 1** (Ofia) | **Ofia Shop Manager & Shopfront** | Social sellers on IG, TikTok, Meta Ads (`shop-instagram`, `shop-ads`, `shop-tiktok`) | The 100-DM bottleneck; stock-outs during viral spikes; manual variant selection in DMs. | Multi-variant catalog (sizes/colors), live stock sync, reorder alerts, automated Paystack checkout. Anchor: `client_slug.ofia.shop`, `/erp/admin/marketplace` |
| **Sprint 2** (Ofia) | **Ofia Inventory IMS & Logistics** | Wholesale distributors, FMCG suppliers, bulk logistics (`ofia-distributors`, `ofia-logistics`) | 72-hour paper quotation delays; warehouse bin-card mismatches; freight margin leakage. | Multi-warehouse bin tracking, self-service tiered B2B pricing portal, dispatch routing, digital ePOD. Anchor: `/erp/admin/inventory/warehouses`, `/erp/admin/logistics/dispatch` |
| **Sprint 3** (Ofia) | **Ofia Niche Marketplace & Escrow** | Independent merchants, tech vendors, verified pros (`ofia-markets`, `shop-marketplaces`) | 15% aggregator commission crush; masked customer data; 14-day payout delays on Jumia/Jiji. | Verified seller badges, automated milestone buyer escrow, direct customer CRM, same-day settlement. Anchor: `ofia.ng/[niche]`, `/book/nexa-verified`, `/booking/[ref]/track` |
| **Sprint 4** (Ofia) | **Ofia POS Terminal & Enterprise ERP** | Supermarkets, multi-branch stores, walk-in showrooms (`ofia-retail`, `ofia-midmarket`) | Disconnected offline/online stock; cashier reconciliation lag; walk-in customer drop-off. | Touchscreen SmartPOS register, multi-tender checkout (Cash/Card/Transfer), instant double-entry general ledger. Anchor: `/erp/admin/pos`, `/erp/accountant/ledger` |
| **Sprint 5** (ResultsPro) | **ResultsPro K-12 Suite & SchoolHub** | Private primary & secondary schools, school groups (`rp-group-b`, `rp-group-c` e.g., Greensprings) | End-of-term manual report card chaos; unverified bank transfers for fees; fragmented PTA comms. | Automated CA gradebook, automated PDF report cards with teacher comments, parent fee billing portal. Anchor: `/schoolhub`, `/classroompro`, `/admin/inbox` |
| **Sprint 6** (ResultsPro) | **ResultsPro Campus & ExamsPro** | Universities, polytechnics, colleges (`rp-group-d`) | "Missing script" exam crises; 4-hour manual graduation clearance queues; portal crashes during course adds. | Digital course registration, tamper-proof student transcript API, semester exam proctoring & score audit. Anchor: `/coursespro`, `/examspro`, `/dashboard` |
| **Sprint 7** (ResultsPro) | **CoursesPro, TutorsPro & ClassroomPro** | Coding bootcamps, exam prep centers, online educators (`rp-group-e`, `rp-group-j`) | Grading 1,000 student projects simultaneously; tutor scheduling chaos; student cohort churn. | Automated homework & coding test autograders, student cohort analytics, live class scheduling, tutor marketplace. Anchor: `/tutorspro`, `/coursespro`, `/blog/[slug]` |
| **Sprint 8** (ResultsPro) | **Institutional Compliance Matrix & Ledger** | Ministries of Education, state boards, donor programs (`rp-group-g`, `rp-group-h`) | Ghost teachers draining payroll across 36 states; falsified local government school reports; donor audit panic. | Real-time state-wide teacher biometric audit, school infrastructure ledger, donor-compliant grant reporting. Anchor: `/erp/md`, `/erp/accountant/statutory-remittances`, `/admin/audit-logs` |

---

## 3. Sprint-by-Sprint Core Theses & Strategic Industry Context

Every sprint's content must incorporate authentic sector context, verified industry statistics, and deep domain intelligence instead of superficial generalizations. **Note**: In blog posts and email blasts, **strictly zero calculations, mathematical formulas, or worked math equations** are permitted; instead, content must feature rich reporting on real industry events, policy directives, and empirical market studies. In video scripts, the host provides a high-level operational friction breakdown.

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


---

## 4. Multi-Format Asset Crafting Guidelines

### 4.1 🎬 Video Scripts (`video-script.md`)
* **Format**: Dual-Track Talking Head (TH) + Drama Skit.
* **Runtime**: ~4:15 (600–650 spoken words at 140 WPM).
* **Narrative Arc**:
  1. *Cold Open TH (0:00–0:25)*: High-stakes pattern interrupt; visceral problem statement.
  2. *Scene 1: The High (0:25–1:15)*: Excitement, demand spike, volume surge.
  3. *Scene 2: The Crash (1:15–2:40)*: The manual system breaks under real-world pressure; dramatic confrontation; split-screen contrast with automated competitor.
  4. *TH: The Math (2:40–3:20)*: Calm, analytical breakdown using the sprint's specific mathematical model.
  5. *Scene 3: The Rewind (3:20–4:00)*: Hard rewind effect; exact same scenario replayed using the designated product.
  6. *TH: The Close (4:00–4:15)*: Decisive product pitch and URL CTA (`ofia.ng/products` or `resultspro.ng/solutions`).
* **Production Notes**: Must include word count, tone notes, casting guidance, and a 60-second TikTok/Reels cutdown outline.

### 4.2 📚 Bookmarkable Blog Posts (`blog-post.md`)
* **Word Count**: 1,500 – 2,200 words.
* **Metadata**: H1 Title, author byline (`@Ifeanyi Felix`), publication date, read time, category, target audience, meta description.
* **Structure**:
  - Executive summary blockquote.
  - Featured Image Prompt Block (3D Disney Pixar style animation).
  - The Industry Problem & Research Data (real market statistics).
  - Rich Industry News, Recent Sector Events & Authoritative Citations (verifiable sector developments, regulatory milestones, institutional reports; strictly zero calculations, mathematical formulas, or worked math equations).
  - 10 Actionable Operational Hacks/Fixes (bookmarkable, highly practical).
  - Platform Screen Anchors (mapped to routes from `slugs.md`).
  - Native Markdown Tables: All balance sheets, flow cycles, metric maps, and side-by-side comparison tables ("Legacy Manual Approach" vs "Designated Product") MUST be rendered as native Markdown tables. Strictly zero ASCII art boxes (`┌───┐`) and zero code blocks for tabular data.
  - Closing Call to Action with direct product link.

### 4.3 📰 Pure-News HTML Email Blast (Stream 2: `email-blast.md` / `email-blast.html`)
* **Format**: Responsive, mobile-first HTML email newsletter with inline CSS.
* **Pure News Editorial & Real Reference Mandate (Zero Calculation Sections)**:
  - The **Cover Story**, **all 3 Curated Industry News Briefs**, and the **Industry News Spotlight (Worthy of Note)** section must be **real, verifiable news stories** highly relevant to the sprint's appropriate industry.
  - **Every single news story MUST include**:
    1. A **direct clickable link (`<a href="..." target="_blank">`)** to the real source article URL.
    2. The **actual image grabbed from that news report** (`og:image` / `jetpack_featured_media_url`) so that every image correlates 100% with the story headline and content (strictly zero generic, uncorrelated stock photos).
  - **Zero Calculation / Formula Sections**: Email copies must contain **zero calculation boxes, mathematical formulas, or worked cost equations**. The former "Growth Hack / Insight of the Week" calculation container is permanently replaced by **"Industry News Spotlight: Latest [Sector] News Worthy of Note"**—featuring a prominent latest news development in the sprint's industry, its grabbed article image, a concise summary, its operational takeaway, and a clickable link to the full news report.
* **Two-Brand Template Styling**:
  * **Brand 1: Ofia (Sprints 1–4)**:
    - *Publication*: *The Ofia Commerce Brief*
    - *Official Logo*: `ofia_logo.svg`
    - *Palette*: Brand Signal Blue (`#2A6BE0` / `#0069ff`), Ember Gold (`#EF8B3C`), Neutral Canvas (`#FAF9F6`), Deep Ink (`#14151F`).
    - *News Focus*: Actual retail acquisitions, fintech gateway launches, logistics tariff changes, POS deployments, e-commerce policies.
  * **Brand 2: ResultsPro (Sprints 5–8)**:
    - *Publication*: *The ResultsPro Institutional Dispatch*
    - *Official Logo*: `resultspro_logo.png`
    - *Palette*: Corporate Royal Blue (`#1A48B6` / `#0F3282`), Signature Red (`#FE0B10`), Soft Blue (`#EFF6FF`), Deep Ink (`#111827`).
    - *News Focus*: Ministry of Education biometric audits, WAEC/JAMB exam digitalization mandates, university transcript disputes, EdTech funding & tech rollouts.
* **HTML Architecture Guidelines**:
  - Container: 600px max width table/wrapper, responsive styling, clean typography powered by `Dropa` (`Dropa-Regular.woff2`).
  - Header: Publication banner with official brand logo (`ofia_logo.svg` or `resultspro_logo.png`) as a 44px square placed **directly side-by-side with the titles** in a 2-column table row (NEVER standing alone on its own line), with issue number, date, and byline.
  - Cover Story: Real breaking news headline, the actual image grabbed directly from the news article with source caption, a clickable link to the real news URL, journalistic event reporting, and a highlighted *"► WHAT IT MEANS FOR OPERATORS"* blockquote.
  - Curated News Grid: 3 real, verifiable industry news cards, each with its actual correlated news image grabbed from the article, source attribution, clickable link to the original report, and operational implications.
  - Industry News Spotlight (Latest News Worthy of Note): Prominent callout container replacing all calculation/formula boxes. Features a noteworthy recent news story in the appropriate industry, its grabbed news image (`width: 100%; height: 180px; object-fit: cover; border-radius: 0px;`), summary, why it matters to operators, and a clickable link (`Read Full Report →`) to the real news URL.
  - Bulletproof CTA Button: Styled link directing readers to the complete blog post with **zero corner radius (`border-radius: 0px`)**.
  - Footer: Product founding offer/audit, brand details, 22px inline official logo beside the official entity name ("Ofia Enterprise Growth" for Sprints 1–4; "ResultsPro Educational Support" for Sprints 5–8), and compliance footer.

### 4.4 📱 Omnichannel Social Media Packs (`social-media-carousel.md`)
* **LinkedIn Suite**: Long-form thought leadership post (hook before the fold, data points, formula, 5-point summary, CTA, discussion question), short punchy alternative, 6-slide carousel outline with full slide copy, engaging poll concept, and first-comment link strategy.
* **X / Twitter Suite**: 7-tweet viral thread (hook, context, math formula, operational fixes, CTA) + standalone tweet under 280 characters.
* **Facebook Suite**: Conversational, community-oriented narrative with open discussion prompt and blog CTA.
* **Meta Ecosystem Suite**: Instagram carousel caption (hook, bullet points, carousel slide cue, hashtags) + punchy Threads post under 500 characters.

---

## 5. Visual Art Direction & Prompt Standards

### 5.1 🎨 3D Disney Pixar Featured Image Specification
Every blog post must specify a featured image following this exact styling syntax:
```markdown
> **VISUAL FOR BLOG FEATURED IMAGE:**
> *3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology. [Character description, African ethnic features, occupational setting, emotional expression] staring in shock/awe at [the core manual problem breaking down], while [the designated digital product terminal/screen] casts volumetric rim lighting and vibrant screen glow across the scene.*
```

#### Sprint Character & Setting Guide:
* **Sprint 1 (Impulse Buy)**: Chioma in her vibrant Lagos fashion boutique studio, overwhelmed by glowing smartphone chat bubbles ("Price?", "Size M?").
* **Sprint 2 (Supply Chain B2B)**: Bayo in a vast industrial warehouse depot, surrounded by cargo trucks and an avalanche of flying paper waybills.
* **Sprint 3 (Marketplaces)**: Chuka in Computer Village Ikeja, watching a giant 15% commission fee cut his balance sheet on a laptop, while his independent store glows green with escrow payouts.
* **Sprint 4 (Omnichannel Retail)**: Funke in a sprawling modern supermarket/showroom with packed checkout lines, holding a barcode scanner that syncs seamlessly with an online store tablet.
* **Sprint 5 (K-12 School Admin)**: Mrs. Adeleke, an exhausted school principal or bursar at 11:00 PM, surrounded by towering stacks of paper report cards, while the SchoolHub dashboard glows with automated grades.
* **Sprint 6 (Tertiary & Campus)**: Dr. Okon, university examination officer, in a grand academic Senate hall, watching physical exam script archives transform into a secure digital transcript interface.
* **Sprint 7 (EdTech Scale)**: Tunde, lead coding bootcamp instructor, staring wide-eyed at 500 open browser tabs of student GitHub repos, as an automated test runner turns all test badges green.
* **Sprint 8 (Gov & Corp Matrix)**: Hajia Amina, state education auditor, in a government ministry secretariat, reviewing a multi-state biometric verification ledger that eliminates ghost teacher payroll in real time.

### 5.2 📸 Real Editorial Imagery & Reference Standards for News & Email
* All stories inside the email blasts (Cover Story, 3 Curated News Briefs, and Industry News Spotlight) must be **real, verifiable news stories** from reputable Nigerian/African publications (e.g., *The Punch*, *Nairametrics*, *TechCabal*, *BusinessDay*, *Premium Times*, *Daily Trust*, *Nigerian Tribune*) with **direct clickable links (`<a href="...">`)** to the source articles.
* Every news story must use **the actual image grabbed directly from that news article** (`og:image` / `jetpack_featured_media_url`) so that the visual correlates 100% with the headline and story (strictly zero generic stock photos). Every image must include a descriptive `alt` attribute and an italicized source caption with a clickable link.

---

## 6. Strict Tone, Voice & Anti-Fluff Enforcement

* **Tone**: Authoritative, grounded, operational, direct.
* **Banned Buzzwords (Zero Tolerance)**:
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
  - ✅ *SKUs, variants, bin cards, waybills, dead stock, pro-forma quotes, ePOD*
  - ✅ *double-entry general ledger, milestone escrow, statutory remittances, Paystack settlement*
  - ✅ *CA gradebooks, semester transcripts, Senate approvals, biometric audit trails, ghost worker elimination*
