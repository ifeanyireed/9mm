# 9MM Content Production & Email Campaign Agent Guidelines

This document is the **master repository-wide compliance & execution standard** for all **120 weekly deliverables (12 Sprints × 10 Weeks = 600 master files)** across **3 Brands** (**Ofia.ng**, **ResultsPro.ng**, and **ComplianceHub.ng**). It works in lockstep with the operational playbook inside [`AGENT/`](file:///Volumes/ReedBreedCC/9mm/AGENT) (`Content-Lead-Agent.md`, `Skills.md`, `Steps.md`, `Requirement.md`, `Progress-Tracker.md`) and [`GEMINI.md`](file:///Volumes/ReedBreedCC/9mm/GEMINI.md).

---

## 1. Zero Unsplash, Zero Logos & Zero Image Repetition Policy
* **Absolute Ban on Stock Photography**: Never use Unsplash (`images.unsplash.com`), Pexels, Shutterstock, or unrealistic generic stock photography in any email blast, blog post, social media pack, or video script.
* **Absolute Ban on Isolated Logos, Crests, Badges, Maps & Promo Posters**: No editorial or news image in any blog post or email blast may be an isolated corporate logo (e.g., `Smile-ID.png`, `lsef-logo`, `british-council.png`), school crest, institutional shield, agency badge, static signboard, graphic map, or promotional ad poster. Every visual asset must be **authentic, real-world Nigerian/African photojournalism** depicting real people, retail floors, warehouses, classrooms, exam halls, boardrooms, or field operations. *(Official Cloudinary brand logos are exempt solely as brand masthead/footer identifiers.)*
* **Zero Image Repetition (No Duplicate Images Anywhere)**: NO NEWS/EDITORIAL IMAGE MAY BE USED TWICE across any email blast or blog post in the entire repository (across all 120 weeks). Every single Hero cover, inline blog figure, email cover story, Curated Brief thumbnail, and Industry Spotlight must feature a distinct, authentic, live Nigerian/African news photo.
* **Approved Image Domains**: All news visual assets, featured thumbnails, and editorial headers must come exclusively from verified Nigerian and African business, technology, education, and governance news portals:
  - **Punch Nigeria**: `https://cdn.punchng.com/...` / `https://punchng.com/...`
  - **Nairametrics**: `https://cdn.nairametrics.com/...` / `https://media.nairametrics.com/...` / `https://nairametrics.com/...`
  - **TechCabal**: `https://techcabal.com/...`
  - **BusinessDay Nigeria**: `https://cdn.businessday.ng/...` / `https://businessday.ng/...`
  - **Daily Trust**: `https://dailytrust.com/...`
  - **Techpoint Africa**: `https://techpoint.africa/...`
  - **Paystack Engineering**: `https://paystack.com/...`
* **Live HTTP 200 Verification & Proxy Wrapping**: Every image URL must be live (HTTP 200) and wrapped with `https://wsrv.nl/?url=...&w=800&output=jpg` plus `referrerpolicy="no-referrer"` to prevent CDN 403 hotlink blocks.

---

## 2. Standardized Email Campaign Architecture (All 120 Deliverables: 12 Sprints × 10 Weeks)
Weeks 4 to 10 across all 12 sprints must match the exact depth, comprehensive structure, visual polish, and `.md` ↔ `.html` parity of Weeks 1 to 3:

1. **Subject Line Matrix**: 3 high-converting angles (Pain Hook, Curiosity/Warning Hook, Metric/SLA Hook) — **all 3 incorporating `at {{company}}`** — plus Preview Text.
2. **Cold Outreach Sequence**: **3 distinct touchpoints (Days 1, 4, 8)** (Pain Hook → Warning Signs/Risk → Case Study Proof/Value Offer) with dynamic personalization tokens (`{{first_name}}`, `{{company}}`, `{{email}}`, `{{unsubscribe_url}}`) and CAN-SPAM compliant footers.
3. **Top Utility Bar & Executive Masthead**: Edition number, date, read time, live domain link, and **44×44px official Cloudinary brand logo** aligned side-by-side with the publication title in a 2-column table row (never standing alone on its own line).
4. **Editor's Opening Letter**: Standardized greeting format: `**Dear {{first_name|Valued Partner}},**` in `.md` and `<p>Dear {{first_name|Valued Partner}},</p>` in `.html`.
5. **Lead News Cover Story**:
   - Clickable Markdown/HTML headline: `**HEADLINE: [Headline](URL)**` linking to a real, verifiable Nigerian news article (never bare homepages or mismatched slugs).
   - Actively embedded unique verified Nigerian news image (`<img src="https://wsrv.nl/?url=...&w=800&output=jpg" alt="..." referrerpolicy="no-referrer" style="width: 100%; height: auto; border-radius: 0px !important; display: block;" />`) — **never raw text bullets** (`* **Featured Image**: URL`).
   - Source attribution: `* **Source**: Publication · [Read Full Story →](URL)`.
   - Hard-hitting investigative news lead explicitly referencing the photo, connecting real events to the sprint thesis.
   - Executive pull-quote block.
   - `> **► WHAT THIS MEANS FOR [PERSONA]:**` callout box tailored to the sprint's exact audience (e.g., `SOCIAL RETAIL FOUNDERS`, `SUPPLY CHAIN & LOGISTICS DIRECTORS`, `PROPRIETORS & REGISTRARS`, `COMMISSIONERS & PERMANENT SECRETARIES`, `MANAGING DIRECTORS & COMPANY SECRETARIES`).
6. **Section 5: Curated Industry Intelligence Briefs (MANDATORY ON ALL 120 CAMPAIGNS)**:
   - Exactly **3 numbered items** per issue across ALL 12 sprints (Ofia.ng Sprints 01–04, ResultsPro.ng Sprints 05–08, ComplianceHub.ng Sprints 09–12).
   - Each item includes: clickable headline (`* **1. [Headline](URL)**`), actively embedded unique authentic Nigerian news image (`wsrv.nl` + `referrerpolicy="no-referrer"`), source attribution (`Publication · [Read Full Story →](URL)`), and concise operational analysis explicitly referencing the image.
7. **Industry News Spotlight (Zero Calculations — Mandatory in BOTH `.md` AND `.html`)**:
   - Prominent container featuring a **4th noteworthy industry event**, its unique actively embedded article image (`width: 100%; height: 180px; object-fit: cover; border-radius: 0px !important;`), executive summary explicitly referencing the photo, operational takeaway ("Why It Matters"), and direct clickable source link.
   - **Strictly zero calculation sections, cost formulas, or worked math equations** in email copies.
8. **Primary Call to Action**: Prominent zero-radius bulletproof button (`border-radius: 0px !important;`) directing readers to the **live HTTPS URL of the complete blog post teardown** (never `file:///` local paths).
9. **Product Spotlight & Founding Offer**: Sprint-specific product positioning box, founder/partner offer callout, and author signature (`— Ifeanyi Felix` + brand title).
10. **Light Executive Footer**: **22×22px official Cloudinary brand logo** inline beside the official legal entity and physical address, plus personalization unsubscribe tags (`{{name}}`, `{{email}}`, `{{company}}`, `{{unsubscribe_url}}`).
* **Email Visual & UI Rules**: 600px responsive table layout with inline CSS, `Dropa` (`Dropa-Regular.woff2`) typography via `@font-face`, strict **zero corner radius (`border-radius: 0px !important;`)**, and **Light Executive UI** (strictly no dark `#0F172A` / `#000000` background blocks). Exact brand hex palettes are defined in [`AGENT/Skills.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Skills.md).

---

## 3. Blog Post Image Requirements (8-Section Blueprint & Non-Full-Width Sizing)
* **Image Count & Blueprint Allocation**:
  - **Bare Technical Floor**: Minimum 3 embedded images on legacy drafts.
  - **Full 8-Section Cohesive Story Blueprint Standard (Mandatory for all new & re-evaluated posts)**: **8–9 distinct, unique verified Nigerian photos** per blog post:
    1. **Hero Cover Image** at the top of the post (Sec 0).
    2. **4 Matched Report Images** — one for each of the 4 numbered dated industry reports in Section 2.
    3. **2–3 Inline Action Images** interspersed across the 10 practical fixes in Section 4 (e.g., at #1, #3, #5).
    4. **1 Product Bridge Image** in Section 6.
* **Active HTML/Markdown Embedding**: Never use raw text bullets for images (avoid `* **Featured Image**: URL`). Always wrap with `wsrv.nl` and `referrerpolicy="no-referrer"` in a centered, non-full-width container:
  ```html
  <div style="max-width: 720px; margin: 24px auto; text-align: center;">
    <img src="https://wsrv.nl/?url=SOURCE_IMAGE_URL&w=800&output=jpg" alt="Descriptive contextual alt text" referrerpolicy="no-referrer" loading="lazy" style="max-width: 720px; width: 100%; height: auto; border-radius: 8px; border: 1px solid #E2E8F0; display: block; margin: 0 auto;" />
    <p style="font-size: 13px; color: #64748B; margin-top: 8px; line-height: 1.5; font-style: italic; text-align: left;">Contextual journalistic caption explaining what the photo shows and how it connects to this section. (Photo: Publication)</p>
  </div>
  ```
* **Blog Images Must Not Be Full Width**: Always constrain blog images to clean editorial dimensions (`max-width: 720px`, centered, `border-radius: 8px`) so they never stretch edge-to-edge across desktop monitors. *(Note: `border-radius: 0px !important;` applies strictly to HTML email templates; blog editorial photos use `border-radius: 8px`.)*
* **Zero Image Repetition**: Every blog image must be globally unique across all 120 weeks and never reused inside the same week's email blast.

---

## 4. Mandatory Narrative Image Integration (Images Must Never Stand Alone)
* **Strict Integration Rule**: Visual assets must **NEVER stand alone** as unreferenced decorations.
* **Explicit Narrative Mention**: Every single image—including Blog Hero covers, all Section 2 report photos, Section 4/6 inline photos, Newsletter Cover Stories, Curated Briefs (all 3 items), and Industry News Spotlights—must be **explicitly mentioned in the surrounding narration** in BOTH `.md` and `.html` editions.
  - Cite the visual directly (e.g., *"As illustrated in Nairametrics' coverage (featured photo above)..."*, *"As pictured inside the Lagos warehousing facility above..."*, *"As documented in Punch Nigeria's report above..."*).
  - Use the image to **buttress a key operational argument**, support **empirical metrics or sector statistics**, or highlight a **real-world regulatory/industry case study**.
* **Descriptive Contextual Captions & Alt Text**:
  - Never use generic labels or bare article headlines as `alt` text or captions (avoid *"Figure 1: Field investigations"* or *"Photo: Instagram"*).
  - Every caption and `alt` attribute must explain **what the photo depicts AND how it directly connects to the operational context and business lesson of that section**.

---

## 5. Three-Brand Segregation, Design Identity & Author Personas
* **Sprints 01 to 04**: **Ofia.ng**
  - **Domain**: `https://www.ofia.ng`
  - **Publication**: *The Ofia Commerce Brief*
  - **Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139974/9mm/ofia_logo.svg` (44px header / 22px footer)
  - **Palette**: Signal Blue (`#2A6BE0` / `#0069ff`), Ember Gold (`#EF8B3C`), Neutral Canvas (`#FAF9F6`), Deep Ink (`#14151F`)
  - **Legal Entity**: **Ofia Enterprise Growth**
  - **Author**: `@Ifeanyi Felix` (Head of Commerce Editorial, Ofia.ng)
  - **Themes**: Social commerce checkout (S1), B2B multi-depot supply chain & inventory (S2), zero-commission niche marketplaces & escrow (S3), omnichannel retail & POS (S4).
* **Sprints 05 to 08**: **ResultsPro.ng**
  - **Domain**: `https://www.resultspro.ng`
  - **Publication**: *The ResultsPro Institutional Dispatch*
  - **Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139977/9mm/resultspro_logo.png` (44px header / 22px footer)
  - **Palette**: Corporate Royal Blue (`#1A48B6` / `#0F3282`), Signature Red (`#FE0B10`), Soft Blue Surface (`#EFF6FF`), Deep Ink (`#111827`)
  - **Legal Entity**: **ResultsPro Educational Support**
  - **Author**: `@Ifeanyi Felix` (Head of Institutional Governance / Public Sector Strategy, ResultsPro.ng)
  - **Themes**: K-12 private school ERP & SchoolHub (S5), tertiary campus & ExamsPro/TranscriptsPro (S6), EdTech CBT & CoursesPro autograders (S7), public-sector SUBEB biometric auditing & ghost worker elimination (S8).
* **Sprints 09 to 12**: **ComplianceHub.ng**
  - **Domain**: `https://www.compliancehub.ng`
  - **Publication**: *The ComplianceHub Regulatory Brief*
  - **Cloudinary Logo**: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139981/9mm/compliancehub_logo.png` (44px header / 22px footer)
  - **Palette**: Sovereign Emerald (`#064E3B`), Regulatory Gold (`#D97706`), Mint Highlight (`#D1FAE5`), Warm Ivory Canvas (`#FAF9F6`), Deep Ink (`#14151F`)
  - **Legal Entity**: **ComplianceHub Regulatory Technologies Limited** (Abuja & Victoria Island, Lagos, Nigeria)
  - **Author**: `@Ifeanyi Felix` (Head of Regulatory Affairs & Corporate Compliance, ComplianceHub.ng)
  - **Themes**: CAC post-incorporation & annual returns governance under CAMA 2020 (S9), Statutory Quad (FIRS TCC, PenCom, ITF, NSITF) & BPP federal procurement tender readiness (S10), DNFBP AML/CFT, SCUML & NFIU goAML regulatory reporting under MLA 2022 (S11), Enterprise Data Protection under NDPA 2023 & NDPC DCMI audits (S12).

---

## 6. Quality Control, Anti-Fluff & Execution Protocol
* **No Blind Batch Writing**: Refactor and inspect one file at a time or use coordinated subagents for granular quality control. Never replace rich, specific editorial prose with generic template boilerplate.
* **Strictly Zero Scripts**: Never run shell/Python scripts or automated scripts to edit deliverables or deduplication files. Perform all reading and editing using native file editing tools.
* **Zero Calculations / Math Blocks Across All Streams**: Strictly zero `$$...$$` LaTeX blocks, algebraic formulas, or worked math equations in blog posts, emails, video scripts, or social packs. Use concrete operational benchmarks (Naira figures, hours lost, verified survey stats) and rich industry reporting instead.
* **Anti-Fluff Enforcement (`VOX-01`)**: Zero banned buzzwords (*revolutionize, seamless, game-changer, delve into, in today's fast-paced digital world, supercharge, unlock the power of, tapestry, beacon*).
* **Clean Formatting & Links**: Native GitHub Flavored Markdown tables only (zero ASCII box art, zero fenced code block tables); clean Unicode (`₦`, `%`, `—`, `•`, `→`, `<` — never raw HTML entities like `&lt;` or `&rarr;` in Markdown files); all links fully qualified HTTPS (zero `file:///` paths and zero unresolved `[BLOG LINK]` placeholders).

---

## 7. Granular Content & Visual Curation Protocol (Laser-Precision Execution)
* **Sub-Agent Copy Reading & Evaluation**: For each edition (all 5 deliverables), read closely to identify the sprint's exact operational bottleneck, Nigerian persona, and core thesis.
* **Worthy & Deduplicated Story Verification**:
  - Check existing stories, news citations, and case studies in the copy.
  - **If authentic, worthy, and deduplicated**: Retrieve that story's live Nigerian news photo (HTTP 200), embed via `wsrv.nl` with `referrerpolicy="no-referrer"`, and hyperlink the exact article URL.
  - **If broken, off-topic, generic, logo/banner, or duplicated elsewhere**: Replace with an authentic, deduplicated, topic-specific Nigerian news story + live photojournalism + exact article URL.
* **Global Deduplication Registry**: Maintain absolute repository-wide deduplication. Every editorial visual asset must appear in exactly one place across all 120 weeks.

---

## 8. Mandatory Content Hub Synchronization (`content-data.js` & `content-data.json`)
* **Always Sync After An Update**: Whenever any deliverable (`blog-post.md`, `email-blast.html`, `email-blast.md`, `video-script.md`, or `social-media-carousel.md`) is modified or curated, ALWAYS synchronize the updated file content, titles, word counts, and visual assets into [`content-data.js`](file:///Volumes/ReedBreedCC/9mm/content-data.js) and [`content-data.json`](file:///Volumes/ReedBreedCC/9mm/content-data.json).
* **Zero Stale Cache in Content Hub**: [`contenthub.html`](file:///Volumes/ReedBreedCC/9mm/contenthub.html) runs locally via `file:///` and reads directly from `content-data.js` (replacing the deprecated `INITIAL_FALLBACK_FILES` inline array).

---

## 9. Master Blog Post Writing Style & 8-Section Cohesive Story Blueprint (Live Ofia.ng Editorial Standard)
* **Core Goal — One Cohesive Story from Start to Finish**: Every blog post (~1,500–2,400 words) must read as **one complete, useful story** from start to finish—never like disconnected briefs stitched together.
* **Tone**: Warm, clear, calm, credible, and simple. Easy to read on a phone (1–2 sentence paragraphs with generous whitespace).
* **Strict Rules for News & Story Curation**:
  - **The Relevance Test**: Every curated story must help the reader solve the problem, make a decision, or understand the topic better. Never include a story merely because it is trending.
  - Explain in **1–2 sentences** why each story matters to the persona (*"Why does this matter to [Name]?"* or *"For [Name], this highlights..."*).
* **Mandatory 8-Section Blog Structure**:
  1. **Section 0 — Header, Meta Hook, Hero Question & 3D Visual Prompt (`IMG-01`)**:
     - H1 Title format: `Why [Target Audience] Struggle to [Goal]: 10 Ways to [Bridge the Gap / Solve It]` (or `[Problem]: 10 Ways to [Solve It]`).
     - Metadata bullets (Sprint & Week, Author `@Ifeanyi Felix`, Read Time, Platform/Brand).
     - 2-sentence meta excerpt starting with a direct question.
     - Embedded Hero Image (`max-width: 720px`, `wsrv.nl`, `referrerpolicy="no-referrer"`, `border-radius: 8px`) followed immediately by a **single-sentence bold provocative question**.
     - **3D Disney Pixar Featured Image Prompt Block (`IMG-01`)**:
       `> **VISUAL FOR BLOG FEATURED IMAGE (IMG-01):**`
       `> *3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology. [Sprint-specific Nigerian persona & setting]...*`
  2. **Section 1 — The Relatable Opening Persona Story (`The Busy [Business/Institution] That Was...`)**:
     - Open on a busy day at the persona's real Nigerian location (explicitly citing the Hero photo above), then pivot with: *"But [Name] has a problem."*
     - Walk through **3 concrete everyday micro-failures**.
     - Close with the core thesis: *"Her business has [strengths]. What it lacks is a connected [system]."*
  3. **Section 2 — Macro Industry Validation (`The [Industry] Is Changing, and [Operators] Cannot Afford to Ignore It`)**:
     - Present **4 numbered industry developments** backed by real, dated Nigerian news/research reports.
     - **Mandatory 4 Matched Public Images**: Embed **1 unique verified Nigerian/African news photo for each of the 4 numbered items** (`wsrv.nl`, `referrerpolicy="no-referrer"`, `max-width: 720px`).
     - Each item follows a 3-step pattern: (a) embed the matching verified photo; (b) cite publication, date, core finding with clickable link & prose image reference; (c) explicitly tie back to the persona in 1–2 sentences (*"Why does this matter to [Name]?"*).
  4. **Section 3 — The Core Diagnosis (`The Real Problem: Your [Channels/Departments] Are Competing Instead of Working Together`)**:
     - Revisit the persona (*"Consider [Name]'s business again."*).
     - Stack **4 parallel 1-sentence operational disconnects** across departments.
     - Define the unified solution simply and transition into the 10 practical ways.
  5. **Section 4 — The 10 Practical Fixes (`10 Ways to [Solve the Problem]`)**:
     - Numbered `1` to `10`, with **2–3 unique inline images interspersed** (e.g., at #1, #3, #5), each explicitly cited in prose.
     - Every single item (`1`–`10`) strictly follows the **4-part micro-template**:
       1. **Action-Verb Heading**
       2. **The Current Friction / Mini-Scenario** (2–3 short paragraphs)
       3. **The Connected Solution** (2–3 short paragraphs)
       4. **Bold Closing Takeaway**: `**Why it matters:** [1-sentence operational benefit].`
  6. **Section 5 — The 3-Column Comparison Table (`What a Connected [Business/Institution] Looks Like`)**:
     - A clean **8-row, 3-column native Markdown table**: `Business activity` | `Disconnected [operations]` | `Connected [operations]`.
  7. **Section 6 — The Product Bridge (`How [Ofia / ResultsPro / ComplianceHub] Helps Bring Your Operations Together`)**:
     - Include a unique inline image (explicitly cited in prose) and reconnect to the persona.
     - Introduce the sprint's designated product with *"Depending on the configured modules, businesses/institutions can use the platform to support:"* followed by **6 clean module bullets**.
  8. **Section 7 & 8 — Narrative Closure, Direct CTA & Tags**:
     - **Narrative Closure**: Close the persona's realization arc.
     - **Closing CTA (`Ready to Connect Your...?`)**: Address operators directly, include the live product link, end with a memorable **2-sentence epigram**, and append relevant `#tags`.

---

## 10. Companion Playbook Cross-Reference ([`AGENT/`](file:///Volumes/ReedBreedCC/9mm/AGENT))
For stream-specific production blueprints and QA checklists, consult the synchronized files inside [`AGENT/`](file:///Volumes/ReedBreedCC/9mm/AGENT):
* [`AGENT/Content-Lead-Agent.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Content-Lead-Agent.md) — Multi-agent swarm orchestration, 3-brand routing engine, and specialist roles.
* [`AGENT/Skills.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Skills.md) — Brand color/typography tokens, 12-sprint product & route matrix, core theses, persona roster, Video/Social/Blog/Email frameworks, and banned buzzword list (`VOX-01`).
* [`AGENT/Steps.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Steps.md) — Sequential Phase 0–5 production workflow.
* [`AGENT/Requirement.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Requirement.md) — Pass/fail quality gates (`V-01`–`V-08`, `B-01`–`B-08`, `E-01`–`E-13`, `S-01`–`S-05`, `IMG-01`–`IMG-05`, `CALC-00`, `EXEC-01`).
* [`AGENT/Progress-Tracker.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Progress-Tracker.md) — 12-sprint × 10-week execution & re-evaluation ledger.
