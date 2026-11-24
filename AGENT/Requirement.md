# 🚦 Requirement.md: Quality Gates & Pre-Flight Checklists

This document defines the strict, non-negotiable verification criteria that every marketing asset must pass before advancing to delivery. It is synchronized with [`AGENTS.md`](file:///Volumes/ReedBreedCC/9mm/AGENTS.md) and [`GEMINI.md`](file:///Volumes/ReedBreedCC/9mm/GEMINI.md), and applies to **all 12 Sprints (120 Weeks / 600 Master Files) across all 3 Brands (Ofia.ng, ResultsPro.ng, and ComplianceHub.ng)**.

---

## 1. Universal Workflow & Architecture Gates

* [ ] **Folder Structure Compliance**: All assets for a given sprint and week reside in `Sprint-[XX]/Week-[YY]/` (e.g., `Sprint-01/Week-04/`, `Sprint-09/Week-04/`).
* [ ] **All 5 Deliverable Files Present**:
  1. `video-script.md` (Stream 3: Dual-Track Video Script)
  2. `blog-post.md` (Stream 1: 8-Section Cohesive Story Blog Post)
  3. `email-blast.html` (Stream 2: Responsive Light Executive HTML Email Newsletter)
  4. `email-blast.md` (Stream 2: Subject Matrix, 3-Touch Cold Outreach & Markdown Companion)
  5. `social-media-carousel.md` (Stream 4: Omnichannel Social Media Pack)
* [ ] **Three-Brand Alignment Gate (`BRD-01`)**:
  - Sprints 01–04 → **Ofia.ng** (`https://www.ofia.ng`), *The Ofia Commerce Brief*, legal entity **Ofia Enterprise Growth**, author `@Ifeanyi Felix` (Head of Commerce Editorial, Ofia.ng).
  - Sprints 05–08 → **ResultsPro.ng** (`https://www.resultspro.ng`), *The ResultsPro Institutional Dispatch*, legal entity **ResultsPro Educational Support**, author `@Ifeanyi Felix` (Head of Institutional Governance / Public Sector Strategy, ResultsPro.ng).
  - Sprints 09–12 → **ComplianceHub.ng** (`https://www.compliancehub.ng`), *The ComplianceHub Regulatory Brief*, legal entity **ComplianceHub Regulatory Technologies Limited**, author `@Ifeanyi Felix` (Head of Regulatory Affairs & Corporate Compliance, ComplianceHub.ng).
* [ ] **Anti-Fluff Enforcement (`VOX-01`)**: Zero occurrences of banned buzzwords (*revolutionize, seamless, game-changer, delve into, in today's fast-paced digital world, supercharge, unlock the power of, tapestry, beacon*).
* [ ] **Sprint Product Positioning (`PRD-01`)**: Accurately pitches the designated software product for that sprint (see [`AGENT/Skills.md §2`](file:///Volumes/ReedBreedCC/9mm/AGENT/Skills.md)).
* [ ] **Screen Route Fidelity (`SLG-01`)**: Software workflows map to authentic product routes documented in [`AGENT/Skills.md §2`](file:///Volumes/ReedBreedCC/9mm/AGENT/Skills.md).
* [ ] **Blog Featured Image Prompt Gate (`IMG-01`)**: Every `blog-post.md` includes the 3D Disney Pixar visual prompt block right below the Hero provocative question: `> **VISUAL FOR BLOG FEATURED IMAGE (IMG-01):**` `*3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology...*` tailored to the sprint's Nigerian persona and setting.
* [ ] **Real News, Correlated Photojournalism, Proxy & Zero Logos Gate (`IMG-02`)**:
  - Every editorial image across blogs and emails must be **authentic, real-world Nigerian/African photojournalism** sourced exclusively from approved domains (`Punch`, `Nairametrics`, `TechCabal`, `BusinessDay`, `Daily Trust`, `Techpoint Africa`, `Paystack`), HTTP-200 verified, and wrapped with `https://wsrv.nl/?url=...&w=800&output=jpg` plus `referrerpolicy="no-referrer"`.
  - **Zero Unsplash/Pexels/Shutterstock** anywhere.
  - **Zero isolated logos, school crests, agency badges, static signboards, graphic maps, or promotional ad posters** (e.g., no `Smile-ID.png`, `lsef-logo`, `british-council.png`, `ondo-map.webp`, `Terminal-Poster`).
  - Every cited news story must link to its exact, live, topic-matched article URL (never bare homepages like `https://punchng.com` and never mismatched articles).
* [ ] **Zero Image Repetition Gate (`IMG-03`)**:
  - **Strictly zero image reuse across all 120 weeks**: No news/editorial photo URL may appear twice across any email blast or blog post in the entire repository, nor be reused between a week's blog post and email blast. *(Official Cloudinary brand logos are exempt as brand identifiers.)*
* [ ] **Blog Image Allocation & Non-Full-Width Sizing Gate (`IMG-04`)**:
  - Bare technical floor: 3 actively embedded images. **Full 8-Section Blueprint standard**: **8–9 unique verified photos** per blog post (Hero + 4 matched images in Sec 2 + 2–3 inline images in Sec 4 + 1 inline image in Sec 6).
  - Never use raw text bullets (`* **Featured Image**: URL`). Constrain all blog images to non-full-width centered editorial containers (`max-width: 720px; width: 100%; height: auto; border-radius: 8px;`).
* [ ] **Mandatory Narrative Image Integration Gate (`IMG-05`)**:
  - **No image may stand alone.** Every Hero photo, inline blog figure, Email Cover Story photo, Curated Brief thumbnail (all 3), and Industry News Spotlight photo must be **explicitly cited in the surrounding prose** (in BOTH `.md` and `.html`) with descriptive contextual captions and `alt` attributes explaining what the photo depicts AND how it supports that section's operational lesson.
* [ ] **HTML Email Architecture Parity Gate (`EML-01`)**:
  - All 120 email campaigns (Weeks 01–10 across Sprints 01–12) must achieve 100% `.md` ↔ `.html` parity and include all 10 required sections: Subject Line Matrix (`at {{company}}`), 3-Touch Cold Outreach Sequence (Days 1, 4, 8), Top Utility Bar & Executive Masthead (44px Cloudinary logo), Editor's Opening Letter (`Dear {{first_name|Valued Partner}},`), Lead Cover Story + pull-quote + persona callout, 3 Curated Intelligence Briefs, Industry News Spotlight (in BOTH `.md` and `.html`, 100% × 180px image, zero calculations), Primary CTA Button to the live blog HTTPS URL, Product Spotlight & Founding Offer + author signature, and Light Executive Footer (22px Cloudinary logo + legal entity + physical address + 4 merge tags).
* [ ] **Native Markdown Tables Gate (`TAB-01`)**:
  - All structured comparisons and matrices MUST use native GitHub Flavored Markdown tables (`| col1 | col2 |`). Zero ASCII box art (`┌───┐`, `│`) and zero fenced code block tables.
* [ ] **Zero Calculations & Rich Industry Citations Gate (`CALC-00`)**:
  - **Strictly zero calculations, algebraic formulas, worked math equations, or `$$...$$` LaTeX blocks** across all 5 deliverables (blogs, emails, video scripts, and social packs). Ground arguments in verified Nigerian regulatory directives, empirical studies, and concrete Naira/time operational benchmarks instead.
* [ ] **Execution Hygiene Gate (`EXEC-01`)**:
  - **Strictly zero shell/Python scripts** for editing deliverables or deduplication files (use native file editing tools only; no blind batch boilerplate).
  - Clean Unicode typography (`₦`, `%`, `—`, `•`, `→`, `<` — zero raw HTML entities like `&lt;`, `&rarr;`, `&middot;` in Markdown files; zero `file:///` links; zero unresolved `[BLOG LINK]` placeholders).

---

## 2. Format-Specific Quality Gates

### 2.1 🎬 Video Script Gate (`video-script.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :---: |
| **V-01** | **Runtime & Word Count** | 600–650 spoken words (~4:00–4:30 runtime at 140 WPM). | [ ] |
| **V-02** | **Hybrid Format** | Clear separation between Talking Head (TH) and Drama scenes. | [ ] |
| **V-03** | **Hook Strength** | Pattern interrupt in the first 10 seconds tailored to the sprint's specific friction point. | [ ] |
| **V-04** | **Narrative Arc** | Scene 1 (The High / Volume Spike) → Scene 2 (The Crash / System Failure) → Scene 3 (The Rewind with automated solution). | [ ] |
| **V-05** | **Split-Screen Contrast** | Visual contrast between the overwhelmed manual operator and the automated competitor executing in seconds. | [ ] |
| **V-06** | **Operational Economics Breakdown** | Host explains the quantitative friction and revenue/compliance leakage using concrete Naira/time metrics and the sprint thesis (**zero `$$` LaTeX equations**). | [ ] |
| **V-07** | **Product Close & CTA** | Pitches the designated sprint product with on-screen feature bullets and live brand URL (`ofia.ng/products`, `resultspro.ng/solutions`, or `compliancehub.ng`). | [ ] |
| **V-08** | **Production Notes** | Includes casting guidance, sound design cues (SFX), and a 60-second cutdown concept for TikTok/Reels (consistent currency & metrics throughout). | [ ] |

---

### 2.2 📚 Bookmarkable Blog Post Gate (`blog-post.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :---: |
| **B-01** | **Sec 0 & Sec 1: Hero, `IMG-01` Prompt & Persona Story** | H1 Title (`Why ...: 10 Ways to ...` or `[Problem]: 10 Ways to ...`), `@Ifeanyi Felix` byline, 2-sentence question meta excerpt, Hero photo (`max-width: 720px`, `wsrv.nl`) + 1-sentence bold provocative question + `IMG-01` 3D Pixar prompt block + Section 1 opening Nigerian persona story (*"But [Name] has a problem."* + 3 micro-failures + *"What it lacks is a connected system."*). Warm, simple 1–2 sentence paragraphs. | [ ] |
| **B-02** | **Sec 2: Macro Industry Validation (4 Reports + 4 Matched Photos)** | Exactly **4 numbered industry developments** backed by real, dated Nigerian news/research reports passing the Relevance Test. Each embeds **its own unique verified public photo** (4 matched images), cites source/date/link + photo in prose, and explains in 1–2 sentences *"Why does this matter to [Persona]?"* | [ ] |
| **B-03** | **Sec 3: Core Diagnosis & Zero Calculations** | Revisits the persona and stacks **4 parallel 1-sentence department disconnects**. Strictly zero formulas, calculations, or `$$` blocks anywhere. | [ ] |
| **B-04** | **Sec 4: 10 Practical Fixes (`Why it matters:`)** | 10 numbered fixes (`1`–`10`) with 2–3 unique inline images interspersed (e.g., at #1, #3, #5) and cited in prose. Every item follows: Action-Verb Heading → Friction/Scenario → Connected Solution → `**Why it matters:** [1-sentence benefit].` | [ ] |
| **B-05** | **Sec 6: Product Bridge** | Includes a unique inline image cited in prose, reconnects to the persona, and lists **6 clean module bullets** under *"Depending on the configured modules, businesses/institutions can use the platform to support:"*. | [ ] |
| **B-06** | **Sec 5: 3-Column, 8-Row Native Comparison Table** | Clean **8-row, 3-column** native Markdown table (`Business activity` \| `Disconnected [operations]` \| `Connected [operations]`). Zero ASCII art, zero fenced code tables. | [ ] |
| **B-07** | **Sec 7 & 8: Narrative Closure, CTA, Epigram & Tags** | Closes the persona's realization arc, presents `Ready to Connect Your...?` CTA with live product link, ends with a memorable **2-sentence epigram**, and appends relevant `#tags`. | [ ] |
| **B-08** | **Word Count, Visual Cohesion & Narrative Integration** | 1,500–2,400 words reading as one cohesive story; all 8–9 images globally unique, real Nigerian photojournalism (`wsrv.nl`, `referrerpolicy="no-referrer"`, `max-width: 720px`, `border-radius: 8px`), and explicitly referenced in prose. | [ ] |

---

### 2.3 📰 Cold Outreach & Responsive Email Newsletter Gate (`email-blast.html` & `email-blast.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :---: |
| **E-01** | **Three-Brand Publication Identity** | *The Ofia Commerce Brief* (S01–04), *The ResultsPro Institutional Dispatch* (S05–08), or *The ComplianceHub Regulatory Brief* (S09–12) with matching edition #, date, read time, and live domain link across `.md` and `.html`. | [ ] |
| **E-02** | **Subject Line Matrix & 3-Touch Cold Outreach** | 3 strategic subject lines (Pain, Curiosity/Warning, Metric/SLA) **all incorporating `at {{company}}`** + Preview Text + **3 distinct Cold Outreach touchpoints (Days 1, 4, 8)** with `{{first_name}}`, `{{company}}`, `{{email}}`, `{{unsubscribe_url}}` and CAN-SPAM footers. Standardized newsletter greeting: `Dear {{first_name\|Valued Partner}},`. | [ ] |
| **E-03** | **Lead News Cover Story** | Real, verifiable Nigerian news report relevant to the sprint, actively embedded unique `wsrv.nl` photo (cited in prose), clickable exact article URL, investigative lead, pull-quote, and persona-matched `► WHAT THIS MEANS FOR...` callout. | [ ] |
| **E-04** | **Section 5: Curated Intelligence Briefs (3 Items)** | Exactly **3 numbered real Nigerian news briefs** across all 12 sprints, each with clickable exact article URL, unique `wsrv.nl` photo explicitly cited in prose (in BOTH `.md` and `.html`), source link (`Read Full Story →`), and operational takeaway. | [ ] |
| **E-05** | **Industry News Spotlight (Zero Calculations)** | Mandatory in **BOTH `.md` AND `.html`**: 4th real noteworthy industry event, unique actively embedded photo (`width: 100%; height: 180px; object-fit: cover; border-radius: 0px !important;`) explicitly cited in prose, summary, Why It Matters, and clickable exact article URL. Zero calculations/math. | [ ] |
| **E-06** | **Primary Call to Action** | Prominent zero-radius bulletproof CTA button directing readers to the **live HTTPS blog post teardown URL** in both `.md` and `.html` (zero `file:///` paths). | [ ] |
| **E-07** | **Product Spotlight, Founding Offer & Signature** | Sprint-specific product positioning box, founder/partner offer callout, and `— Ifeanyi Felix` + brand title signature. | [ ] |
| **E-08** | **Deliverability Hygiene & Footer Tokens** | Inline CSS, 600px responsive table layout, zero spam triggers, physical postal address, and all 4 merge tags (`{{name}}`, `{{email}}`, `{{company}}`, `{{unsubscribe_url}}`) in both `.md` and `.html`. | [ ] |
| **E-09** | **Official Cloudinary Brand Logos (44px / 22px)** | Must use canonical Cloudinary URLs: Ofia (`v1795139974/9mm/ofia_logo.svg`), ResultsPro (`v1795139977/9mm/resultspro_logo.png`), ComplianceHub (`v1795139981/9mm/compliancehub_logo.png`). **44×44px** side-by-side in header masthead; **22×22px** inline beside the official legal entity in the footer. | [ ] |
| **E-10** | **Brand Typography (`Dropa-Regular.woff2`)** | Email templates import `Dropa` via `@font-face` (`Dropa-Regular.woff2`) as primary brand typeface with system sans-serif fallback. | [ ] |
| **E-11** | **Strict Brand Palettes & Email Zero Corner Radius** | **Ofia**: `#2A6BE0`/`#0069ff` + `#EF8B3C`; **ResultsPro**: `#1A48B6`/`#0F3282` + `#FE0B10`; **ComplianceHub**: `#064E3B` + `#D97706`. All email buttons, cards, badges, and images enforce `border-radius: 0px !important;`. | [ ] |
| **E-12** | **Light Executive UI Standard** | Strictly NO black or dark (`#0F172A` / `#000000` / `#1E293B`) background blocks in email templates. Use light executive surfaces (`#FFFFFF`, `#F8FAFC`, `#FAF9F6`, `#F1F5F9`) with brand accent borders. | [ ] |
| **E-13** | **Content Hub Data Sync (`content-data.js` & `content-data.json`)** | Whenever any deliverable is created or modified on disk, synchronize updated content, titles, word counts, and visual assets into [`content-data.js`](file:///Volumes/ReedBreedCC/9mm/content-data.js) and [`content-data.json`](file:///Volumes/ReedBreedCC/9mm/content-data.json) so [`contenthub.html`](file:///Volumes/ReedBreedCC/9mm/contenthub.html) never serves stale cache. | [ ] |

---

### 2.4 📱 Social Media Omnichannel Pack Gate (`social-media-carousel.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :---: |
| **S-01** | **LinkedIn Suite** | Long-form post with hook before fold, concrete data points (zero `$$` equations), short alternative, 6-to-8 slide carousel outline with full slide copy, poll concept, and first-comment link strategy. | [ ] |
| **S-02** | **X / Twitter Suite** | 7-tweet viral thread (hook, context, operational impact metrics, tactics preview, CTA — zero `$$` equations) + standalone post under 280 characters. | [ ] |
| **S-03** | **Facebook Suite** | Relatable narrative addressing Nigerian operators in that sector, practical advice, open engagement question, and live blog/product CTA. | [ ] |
| **S-04** | **Meta Ecosystem Suite** | Instagram caption with 2-line hook, bulleted takeaways, hashtags, carousel concept, and a concise Threads post under 500 characters. | [ ] |
| **S-05** | **Unified Live CTA & Clean Formatting** | Every platform includes a live HTTPS CTA URL (zero `[BLOG LINK]` placeholders, zero `file:///` paths, zero raw HTML entities like `&lt;` or `&rarr;`). | [ ] |

---

## 3. Pass/Fail Decision Matrix & Revision Protocol

1. **Gate Evaluation**: The QA Reviewer audits all 5 weekly deliverables against every Universal and Format-Specific gate above.
2. **Passing Standard**: 100% pass rate across all gates—plus verified repository-wide image uniqueness and Content Hub sync (`E-13`).
3. **Revision Loop**: Any deficiency is logged by file and line number, fixed with native editing tools within one revision cycle, re-verified, synced to `content-data.js`/`content-data.json`, and marked `[x] Re-Evaluated & Delivered` in [`AGENT/Progress-Tracker.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Progress-Tracker.md).
