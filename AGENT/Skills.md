# 🧠 Skills.md: Multi-Brand & Multi-Sprint Knowledge Base Engine

This document provides the foundational intelligence, product matrices, quantitative formulas, audience blueprints, and visual standards required by the multi-agent content generation swarm. 

It powers all **8 Sprints across the 9-Month Media Engine** defined in [`9MMP.html`](file:///Volumes/ReedBreedCC/9MM/9MMP.html), governing both **Brand 1 (Ofia)** and **Brand 2 (ResultsPro)**.

---

## 1. Two-Brand Strategic Architecture & Voice Matrix

The media engine operates across two distinct brand universes. Agents must strictly align tone, vocabulary, and product positioning with the active sprint.

```
┌─────────────────────────────────────────────────────────────────────────────────┐
│                      THE TWO-BRAND STRATEGIC ARCHITECTURE                       │
├───────────────────────────────────────┬─────────────────────────────────────────┤
│     BRAND 1: OFIA (Sprints 1 – 4)     │   BRAND 2: RESULTSPRO (Sprints 5 – 8)   │
│         Commerce & SME Retail         │        Education ERP & Governance       │
├───────────────────────────────────────┼─────────────────────────────────────────┤
│ • Sprint 1: Impulse Buy (Social)      │ • Sprint 5: K-12 School Administration  │
│ • Sprint 2: Supply Chain (B2B Bulk)   │ • Sprint 6: Tertiary & Campus Systems   │
│ • Sprint 3: Niche Marketplaces        │ • Sprint 7: EdTech & Scale Academies    │
│ • Sprint 4: Omnichannel Retail / POS  │ • Sprint 8: Gov & Corp Compliance Matrix│
└───────────────────────────────────────┴─────────────────────────────────────────┘
```

### 1.1 Brand 1: Ofia (`https://www.ofia.ng`) — Sprints 1 to 4
* **Core Identity**: Commerce operating system, unified ERP, and digital checkout infrastructure for social sellers, distributors, independent marketplace merchants, and physical store retailers.
* **Tone & Voice**: Commercial, tactical, empathetic to merchant operational burnout, fast-paced, grounded in daily trading realities, cash velocity, and margin protection.
* **Publication Identity for Email**: *The Ofia Commerce Brief*
* **Official Logo**: `ofia_logo.svg` (Header: 44px square aligned side-by-side with titles; Footer: 22px inline beside "Ofia Commerce OS").
* **Brand Typography**: `Dropa` (`Dropa-Regular.woff2`) via `@font-face`.
* **Design Palette**: Brand Signal Blue (`#2A6BE0` / `#0069ff`), Ember Gold (`#EF8B3C`), Neutral Canvas (`#FAF9F6`), Deep Ink (`#14151F`).
* **Button Architecture**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all buttons, badges, and containers.

### 1.2 Brand 2: ResultsPro (`https://www.resultspro.ng`) — Sprints 5 to 8
* **Core Identity**: Institutional education ERP, tamper-proof academic grading engine, student records system, and multi-state compliance ledger for K-12 school networks, universities, edtech bootcamps, and government ministries.
* **Tone & Voice**: Institutional authority, academic rigor, governance-focused, data-driven, uncompromising on audit trails, donor transparency, and administrative integrity.
* **Publication Identity for Email**: *The ResultsPro Institutional Dispatch*
* **Official Logo**: `resultspro_logo.png` (Header: 44px square aligned side-by-side with titles; Footer: 22px inline beside "ResultsPro Educational Infrastructure").
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

## 3. Sprint-by-Sprint Core Theses & Mathematical Models

Every sprint's content must incorporate real quantitative friction models instead of vague generalizations.

### Sprint 1 (Impulse Buy · Ofia)
* **Core Thesis**: *"You are paying Mark Zuckerberg for traffic, but losing the sale because your checkout requires human intervention."*
* **Mathematical Formula**:
  $$\text{Daily DM Bottleneck (Hours)} = \frac{\text{Daily Inbound DMs} \times \text{Minutes per Sale Conversation}}{60}$$
  *Example*: 100 DMs × 5 mins ÷ 60 = **8.33 hours/day** working as a human order form.
* **Stock-Out Opportunity Cost**: $\text{Lost Revenue} = \text{Viral Demand Units} \times \text{AOV}$. (400k views, 200 missed Mediums at ₦18.5k = ₦3.7M lost).

### Sprint 2 (Supply Chain B2B · Ofia)
* **Core Thesis**: *"Wholesale enterprise buyers do not cancel orders over 50 naira; they cancel because your sales desk takes 3 days to send a paper quote."*
* **Mathematical Formula**:
  $$\text{Daily Quoting Drag (Hours)} = \frac{\text{Daily Bulk Inquiries} \times \text{Manual Stock Check \& Margin Recalculation (Mins)}}{60}$$
  *Example*: 40 inquiries × 15 mins ÷ 60 = **10 full employee hours/day** wasted on manual paper calculations.
* **Leakage Metric**: 18.4% phantom stock reconciliation variance in paper-run warehouses.

### Sprint 3 (Marketplaces · Ofia)
* **Core Thesis**: *"You do not own an e-commerce business if a marketplace aggregator charges you a 15% landlord tax and conceals your customers' phone numbers."*
* **Mathematical Formula**:
  $$\text{5-Year Commission Bleed} = \text{Annual GMV} \times \text{Aggregator Take Rate (15\%)} \times 5$$
  *Example*: ₦50M annual GMV × 15% × 5 = **₦37,500,000 lost in pure commissions**, with 0 owned customer contacts.

### Sprint 4 (Omnichannel Retail · Ofia)
* **Core Thesis**: *"500 Google reviews and packed showroom aisles mean nothing if walk-in shoppers cannot reorder from home without calling a cashier."*
* **Mathematical Formula**:
  $$\text{Omnichannel Revenue Drag} = (\text{Physical Store Walk-Ins} \times \text{Digital Churn Rate (82\%)}) \times \text{Repeat AOV}$$
  *Example*: 300 daily store visitors with no digital profile = 246 lost reorder opportunities every single day.

### Sprint 5 (K-12 School Admin · ResultsPro)
* **Core Thesis**: *"Your teachers should be inspiring students, not staying awake until 3:00 AM manually entering 500 exam scores into paper gradebooks."*
* **Mathematical Formula**:
  $$\text{Term-End Grading Bottleneck (Hours)} = \frac{\text{Total Students} \times \text{Subjects} \times \text{Manual Entry \& Math Check (3 Mins)}}{60}$$
  *Example*: 500 students × 10 subjects = 5,000 score entries = **250 teacher hours** burned per term just calculating averages.
* **Bursar Audit Drag**: 15 hours/week spent manually matching bank payment narration slips against student rosters.

### Sprint 6 (Tertiary & Campus · ResultsPro)
* **Core Thesis**: *"A university cannot be world-class when graduating seniors queue for four days just to obtain a signature on a paper clearance slip."*
* **Mathematical Formula**:
  $$\text{Annual Clearance Man-Hours Lost} = \text{Graduating Cohort} \times \text{Number of Clearance Desks (8)} \times \text{Avg Wait Time (3 Hours)}$$
  *Example*: 4,000 students × 8 desks × 3 hours = **96,000 student hours wasted** in manual administrative queues.
* **Exam Integrity Metric**: "Missing scripts" account for 74% of all student Senate petitions in legacy universities.

### Sprint 7 (EdTech Scale · ResultsPro)
* **Core Thesis**: *"The ceiling of an online coding bootcamp is not student acquisition—it is the human limit of grading 1,000 code repositories before cohort week 2."*
* **Mathematical Formula**:
  $$\text{Cohort Grading Deficit} = (\text{Cohort Size} \times \text{Submissions/Week} \times \text{Manual Review Time (20 Mins)}) - \text{Instructor Capacity}$$
  *Example*: 500 students submitting 2 weekly labs = 1,000 reviews = **333 hours/week**. Without automated CI autograders, student dropout spikes by 65%.

### Sprint 8 (Gov & Corp Matrix · ResultsPro)
* **Core Thesis**: *"Ministries of Education do not lack funding; they lack real-time data to stop ghost teachers from draining 25% of state payroll."*
* **Mathematical Formula**:
  $$\text{Annual Ghost Worker Payroll Bleed} = \text{Audited Discrepancy Rate (8\%)} \times \text{Total State Teaching Staff} \times \text{Average Annual Salary}$$
  *Example*: 25,000 registered teachers × 8% ghost workers = 2,000 unverified staff × ₦1.8M/year = **₦3.6 Billion annually lost** in public education funds.

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
* **Metadata**: H1 Title, byline (`@Ifeanyi Felix`), publication date, read time, category, target audience.
* **Structure**:
  - Executive summary blockquote.
  - Featured Image Prompt Block (3D Disney Pixar style animation).
  - The Industry Problem & Research Data (real market statistics).
  - The Sprint-Specific Quantitative Formula (worked mathematical example).
  - 10 Actionable Operational Hacks/Fixes (bookmarkable, highly practical).
  - Platform Screen Anchors (mapped to routes from `slugs.md`).
  - Side-by-Side Comparison Table ("Legacy Manual Approach" vs "Designated Product").
  - Closing Call to Action with direct product link.

### 4.3 📰 Pure-News HTML Email Blast (Stream 2: `email-blast.md` / `email-blast.html`)
* **Format**: Responsive, mobile-first HTML email newsletter with inline CSS.
* **Pure News Editorial Mandate**:
  - The **Cover Story** and **all 3 Briefs** must be **pure news reporting on actual events, company launches, regulatory edicts, or market disruptions** directly related to the theme of the week.
  - The newsletter is not an essay; it reports real breaking industry news and explains what operators need to know.
  - The **Growth Hack of the Week** container is where the operational framework and blog link are introduced as the tactical response to the news.
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
  - Cover Story: Hard news headline, real internet news photo with source caption, journalistic event reporting, and a highlighted *"► WHAT IT MEANS FOR OPERATORS"* blockquote.
  - Curated News Grid: 3 real-world news cards with authentic photo thumbnails, sources, and implications.
  - Growth Hack of the Week: High-contrast callout container presenting the blog post's quantitative formula as the tactical antidote to the news.
  - Bulletproof CTA Button: Styled link directing readers to the complete blog post with **zero corner radius (`border-radius: 0px`)**.
  - Footer: Product founding offer/audit, brand details, 22px inline official logo beside brand entity name, and compliance footer.

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

### 5.2 📸 Real Editorial Imagery Standards for News & Email
* All images inside the email blasts and blog body must be **real images from the internet** covering authentic news, industry events, and technology infrastructure.
* Every image must include a descriptive `alt` attribute and an italicized source caption (e.g., *Photo: Commercial logistics terminal. Source: Reuters / Supply Chain Africa*).

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
