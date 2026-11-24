# 📋 Steps.md: Sequential Multi-Agent Production & Re-Evaluation Workflow

This document outlines the sequential workflow for producing or re-evaluating the complete 5-file weekly marketing suite across **all 12 Sprints (120 Weeks) and all 3 Brands (Ofia.ng, ResultsPro.ng, and ComplianceHub.ng)** in strict alignment with [`AGENTS.md`](file:///Volumes/ReedBreedCC/9mm/AGENTS.md) and [`AGENT/Requirement.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Requirement.md).

---

## Workflow Overview

```
[Phase 0: Sprint/Brand Routing, Topic & Global Image Registry Check]
                  │
                  ▼
[Folder Check: Sprint-[XX]/Week-[YY]/]
                  │
                  ▼
[Phase 1: Video Script ──► video-script.md]
                  │
                  ▼
[Phase 2: Blog Post ────► blog-post.md (8-Section Blueprint + 8-9 Unique Photos)]
                  │
                  ▼
[Phase 3: Email Blast ──► email-blast.md & email-blast.html (3-Touch Cold + 10-Sec Newsletter)]
                  │
                  ▼
[Phase 4: Social Pack ──► social-media-carousel.md]
                  │
                  ▼
[Phase 5: Cross-Asset QA, content-data.js/json Sync & Progress-Tracker Update]
```

> **Execution Rule (`EXEC-01`)**: Perform all reading and editing with native file editing tools and coordinated subagents—**strictly zero shell/Python scripts** to edit deliverables or deduplication files, and zero blind batch boilerplate.

---

## Phase 0: Sprint Routing, Lead Context & Global Visual Deduplication Check

### Step 0.1: Route Brand, Palette, Logo & Legal Entity
* **Sprints 01–04 → Brand: OFIA (`https://www.ofia.ng`)**
  - Publication: *The Ofia Commerce Brief* | Legal Entity: **Ofia Enterprise Growth** | Logo: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139974/9mm/ofia_logo.svg`
* **Sprints 05–08 → Brand: RESULTSPRO (`https://www.resultspro.ng`)**
  - Publication: *The ResultsPro Institutional Dispatch* | Legal Entity: **ResultsPro Educational Support** | Logo: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139977/9mm/resultspro_logo.png`
* **Sprints 09–12 → Brand: COMPLIANCEHUB (`https://www.compliancehub.ng`)**
  - Publication: *The ComplianceHub Regulatory Brief* | Legal Entity: **ComplianceHub Regulatory Technologies Limited** | Logo: `https://res.cloudinary.com/iqwyufpt/image/upload/v1795139981/9mm/compliancehub_logo.png`

### Step 0.2: Ingest Calendar, Lead Friction & Sprint Persona
* For Sprints 01–08, read `CALENDAR_DATA` and the matching lead tab in [`9MMP.html`](file:///Volumes/ReedBreedCC/9mm/9MMP.html); for Sprints 09–12, read the regulatory sprint topic, statutory authority (CAMA 2020, PRA 2014/ITF/BPP, MLA 2022/SCUML/NFIU, NDPA 2023/NDPC), and target persona from [`AGENT/Skills.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Skills.md).
* Before selecting any news photo, verify that **zero candidate URLs** appear anywhere else in the 120-week repository (`IMG-03`), that all URLs return HTTP 200 from approved Nigerian media domains, and that none are isolated logos, crests, badges, maps, or promotional posters (`IMG-02`).

### Step 0.3: Verify Directory
* Ensure `/Volumes/ReedBreedCC/9mm/Sprint-[XX]/Week-[YY]/` exists.

---

## Phase 1: Video Script Production (Stream 3)

### Step 1.1: Storyboard & Scene Breakdown
Build the 6-part narrative arc (~600–650 spoken words, ~4:15 runtime at 140 WPM):
1. *Cold Open (Host TH)*: Pattern interrupt hooking the audience on the sprint's core operational/regulatory bottleneck.
2. *Scene 1 (Drama)*: Peak demand, audit arrival, or opening-day momentum.
3. *Scene 2 (Drama)*: The manual system breaks under real-world pressure; split-screen contrast with an automated peer.
4. *TH Segment (Operational Economics & Impact)*: Calm breakdown of concrete Naira/time leakage and compliance risk using real benchmarks (**zero `$$` LaTeX equations**).
5. *Scene 3 (Drama — The Rewind)*: Same high-pressure scenario resolved effortlessly using the sprint's designated software module.
6. *TH Close*: Decisive product pitch and live brand CTA URL (`ofia.ng/products`, `resultspro.ng/solutions`, or `compliancehub.ng`).

### Step 1.2: Draft & Verify
* Include audio/visual cues, SFX, casting guidance, consistent currency/metrics, and a 60-second short-form cutdown.
* Save to `Sprint-[XX]/Week-[YY]/video-script.md` and verify against **V-01 to V-08** in [`AGENT/Requirement.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Requirement.md).

---

## Phase 2: Long-Form Blog Post Production (Stream 1)

### Step 2.1: Outline & Cohesive Story Framing (8-Section Blueprint)
Build `blog-post.md` (~1,500–2,400 words) as **one complete, warm, mobile-readable story** (1–2 sentence paragraphs) anchored in the sprint's Nigerian persona:
* **Sec 0 (Header, Meta Hook, Hero & `IMG-01`)**: H1 Title (`Why ...: 10 Ways to ...` or `[Problem]: 10 Ways to ...`), metadata (`@Ifeanyi Felix`), 2-sentence question meta excerpt, Hero Cover Image (`wsrv.nl`, `referrerpolicy="no-referrer"`, `max-width: 720px`, `border-radius: 8px`), 1-sentence bold provocative question, and the `VISUAL FOR BLOG FEATURED IMAGE (IMG-01)` 3D Disney Pixar prompt block.
* **Sec 1 (Opening Persona Story)**: Busy day at the persona's real Nigerian business/institution (explicitly citing the Hero photo above) → *"But [Name] has a problem."* → 3 concrete micro-failures → *"What it lacks is a connected system."*
* **Sec 2 (Macro Industry Validation — 4 Dated Reports + 4 Matched Photos)**: Curate **4 numbered, dated Nigerian news/research reports** passing the Relevance Test. Embed **1 unique verified public photo per report** (4 photos total in Sec 2), cite source/date/link and the photo in prose, and tie each back in 1–2 sentences (*"Why does this matter to [Name]?"*).
* **Sec 3 (Core Diagnosis)**: Revisit persona + stack **4 parallel 1-sentence operational disconnects** across departments.
* **Sec 4 (10 Practical Fixes)**: Numbered `1`–`10` with **2–3 unique inline photos** interspersed (e.g., at #1, #3, #5) and cited in prose. Every item strictly follows: Action-Verb Heading → Friction/Scenario → Connected Solution → `**Why it matters:** [1-sentence benefit].`
* **Sec 5 (3-Column Comparison Table)**: Clean **8-row, 3-column** native GFM table (`Business activity` | `Disconnected [operations]` | `Connected [operations]`).
* **Sec 6 (Product Bridge)**: Unique inline photo cited in prose + persona tie-back + *"Depending on the configured modules, businesses/institutions can use the platform to support:"* + **6 clean module bullets**.
* **Sec 7 & 8 (Closure, CTA & Tags)**: Close the persona's story arc, add `Ready to Connect Your...?` CTA with live product link, memorable **2-sentence epigram**, and `#tags`.

### Step 2.2: Save & Verify
* Save to `Sprint-[XX]/Week-[YY]/blog-post.md` and audit against **B-01 to B-08**, **IMG-01 to IMG-05**, **TAB-01**, **CALC-00**, and **VOX-01**.

---

## Phase 3: Cold Outreach & Responsive HTML Email Blast Production (Stream 2)

### Step 3.1: Curate 5 Globally Unique Verified Nigerian News Stories & Photos
Never reuse any image from `blog-post.md` or any other sprint/week:
1. **Subject Line Matrix + 3-Touch Cold Outreach Sequence (`email-blast.md`)**:
   - 3 subject angles (Pain, Curiosity/Warning, Metric/SLA), **all including `at {{company}}`** + Preview Text.
   - 3 distinct cold outreach touches (**Day 1 Pain Hook**, **Day 4 Warning Signs/Risk**, **Day 8 Case Study Proof/Offer**) with `{{first_name}}`, `{{company}}`, `{{email}}`, `{{unsubscribe_url}}` and CAN-SPAM footers.
2. **Lead Cover Story (Unique Photo #1)**: Real Nigerian news article with exact clickable URL, `wsrv.nl`-wrapped photo explicitly cited in prose, investigative lead, pull-quote, and persona-adapted `► WHAT THIS MEANS FOR...` callout.
3. **Section 5: Curated Industry Intelligence Briefs (Unique Photos #2, #3, #4)**: Exactly 3 numbered real Nigerian news stories, each with clickable exact article URL, `wsrv.nl` photo explicitly cited in prose (in BOTH `.md` and `.html`), source link (`Read Full Story →`), and operational takeaway.
4. **Industry News Spotlight (Unique Photo #5 — Mandatory in BOTH `.md` AND `.html`)**: 4th real noteworthy event, `width: 100%; height: 180px; object-fit: cover; border-radius: 0px !important;` photo explicitly cited in prose, summary, Why It Matters, and clickable exact article URL. **Strictly zero calculations or math formulas.**

### Step 3.2: Draft Full-Parity `email-blast.md` & `email-blast.html`
* Build responsive 600px Light Executive HTML with inline CSS, `Dropa-Regular.woff2`, `border-radius: 0px !important;`, brand palette, **44×44px Cloudinary masthead logo** side-by-side with publication title, `Dear {{first_name|Valued Partner}},` opening letter, live HTTPS blog CTA button (zero `file:///` links), sprint-specific Product Spotlight & Founding Offer + `— Ifeanyi Felix` signature, and **22×22px Cloudinary footer logo** + official legal entity + physical address + 4 merge tags.
* Save to `Sprint-[XX]/Week-[YY]/email-blast.md` and `Sprint-[XX]/Week-[YY]/email-blast.html`, then audit against **E-01 to E-12** and **IMG-02/03/05**.

---

## Phase 4: Omnichannel Social Media Pack Production (Stream 4)

### Step 4.1: Draft All 4 Channel Suites
1. **LinkedIn**: Long-form thought leadership post (hook before fold, concrete operational metrics—zero `$$` formulas), short alternative, 6-to-8 slide carousel outline with complete slide copy, poll concept, first-comment link strategy.
2. **X (Twitter)**: 7-tweet viral thread (hook, context, operational impact proof, top fixes, live CTA) + standalone tweet under 280 characters.
3. **Facebook**: Relatable Nigerian operator story, practical advice, open engagement question, live blog CTA.
4. **Meta (Instagram & Threads)**: Caption with 2-line hook, bulleted takeaways, hashtags, carousel concept, and Threads post under 500 characters.

### Step 4.2: Save & Verify
* Confirm zero `[BLOG LINK]` placeholders, zero `file:///` links, zero raw HTML entities (`&lt;`, `&rarr;`), and zero banned buzzwords.
* Save to `Sprint-[XX]/Week-[YY]/social-media-carousel.md` and audit against **S-01 to S-05**.

---

## Phase 5: Cross-Asset QA, Content Hub Sync & Progress Logging

### Step 5.1: Cross-Channel Audit
* Verify consistent persona, product positioning, metrics, brand identity, zero duplicate images across the repo, and 100% `.md` ↔ `.html` parity.

### Step 5.2: Synchronize Content Hub (`content-data.js` & `content-data.json`)
* Immediately synchronize all updated deliverables into [`content-data.js`](file:///Volumes/ReedBreedCC/9mm/content-data.js) and [`content-data.json`](file:///Volumes/ReedBreedCC/9mm/content-data.json) (`E-13` / `AGENTS.md §8`) so [`contenthub.html`](file:///Volumes/ReedBreedCC/9mm/contenthub.html) displays live visuals, word counts, and verified copy with zero stale cache.

### Step 5.3: Update Progress Tracker & Deliver
* Record completion in [`AGENT/Progress-Tracker.md`](file:///Volumes/ReedBreedCC/9mm/AGENT/Progress-Tracker.md) and present clickable `file://` links to all verified deliverables.
