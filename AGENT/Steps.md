# 📋 Steps.md: Sequential Multi-Agent Production Workflow

This document outlines the sequential steps required to generate the complete marketing content suite. Agents must follow this exact sequence to ensure consistency, voice alignment, and adherence to quality standards across **all 8 Sprints and both Brands (Ofia vs. ResultsPro)**.

---

## Workflow Overview

```
[Phase 0: 9MMP.html Calendar & Lead Ingestion]
                  │
                  ▼
[Folder Initialization: Sprint-[XX]/Week-[YY]/]
                  │
                  ▼
[Phase 1: Video Script ──► video-script.md]
                  │
                  ▼
[Phase 2: Blog Post ────► blog-post.md]
                  │
                  ▼
[Phase 3: Email Blast ──► email-blast.html & email-blast.md]
                  │
                  ▼
[Phase 4: Social Pack ──► social-media-carousel.md]
                  │
                  ▼
[Phase 5: Cross-Asset Audit & Progress-Tracker Update]
```

---

## Phase 0: Calendar & Lead Ingestion from 9MMP.html

### Step 0.1: Extract Sprint, Brand & Week Parameters from 9MMP.html
* **Action**: Read `CALENDAR_DATA` inside [`9MMP.html`](file:///Volumes/ReedBreedCC/9MM/9MMP.html) for the target `groupId` and `monthId`.
* **Brand Routing Gate**:
  - **Sprints 1 to 4 $\rightarrow$ Brand: OFIA**: Use Ofia merchant tone, commerce terminology, and `ofia.ng` URLs.
  - **Sprints 5 to 8 $\rightarrow$ Brand: RESULTSPRO**: Use ResultsPro institutional governance tone, academic terminology, and `resultspro.ng` URLs.
* **Extract the 4 Streams for the Target Week**:
  - `w.week`: Week number and theme (e.g., *Week 1: The Core Problem*).
  - `w.focus`: Funnel stage (e.g., *TOFU (Foundation) - Why [Group] struggles to scale*).
  - `w.blog`: Stream 1 Blog topic.
  - `w.email`: Stream 2 Email topic and body angle.
  - `w.video`: Stream 3 Video topic and format.
  - `w.graphic`: Stream 4 Graphic / Carousel topic.

### Step 0.2: Lead Profile & Friction Extraction
* **Action**: Query the corresponding lead tab in `9MMP.html` (e.g., `shop-instagram` for Sprint 1, `ofia-distributors` for Sprint 2, `rp-group-b` for Sprint 5, `rp-group-d` for Sprint 6, etc.).
* **Extract Lead Details**:
  - Target business archetypes / institutional roles.
  - Core operational friction points (e.g. quotation delay, fee reconciliation, ghost workers).
  - Designated product solution from `Skills.md`.

### Step 0.3: Folder Initialization
* **Action**: Create the dedicated directory for the sprint and week:
  ```
  Sprint-[XX]/Week-[YY]/
  ```
  *(Example: `/Volumes/ReedBreedCC/9MM/Sprint-02/Week-01/`)*

---

## Phase 1: Video Script Production (Stream 3)

### Step 1.1: Storyboard & Scene Breakdown
* **Action**: Build the narrative arc based on the `video` prompt in `CALENDAR_DATA`:
  1. *Cold Open (Host TH)*: Pattern interrupt hooking the audience with the sprint's core operational bottleneck.
  2. *Scene 1 (Drama)*: The excitement of volume, traction, or opening hours.
  3. *Scene 2 (Drama)*: The manual system crashes under pressure; customer/client loss; split-screen contrast with automated competitor.
  4. *TH Segment*: Mathematical breakdown using the sprint's quantitative friction formula.
  5. *Scene 3 (Drama)*: The rewind replaying the same scenario powered by the sprint's designated product.
  6. *TH Close*: Decisive product pitch and direct URL (`ofia.ng/products` or `resultspro.ng/solutions`).

### Step 1.2: Two-Track Script Drafting
* **Action**: Write the complete script (~600–650 spoken words, ~4:15 runtime) with audio/visual cues, SFX, production notes, casting notes, and a 60-second cutdown for short-form video.
* **Save File**: `Sprint-[XX]/Week-[YY]/video-script.md`.

### Step 1.3: Quality Gate Verification
* **Action**: Audit against the Video Script Gate (V-01 to V-08) in `Requirement.md`.

---

## Phase 2: Long-Form Blog Post Production (Stream 1)

### Step 2.1: Outline, Visual Brief & Research Framing
* **Action**: Build the structure for the `blog` topic in `CALENDAR_DATA`:
  - **Visual Asset Specification**: Define the Featured Image prompt using the required style:
    `VISUAL FOR BLOG FEATURED IMAGE: 3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology.` featuring the sprint-appropriate character and setting.
  - Research framing: Cite verified industry reports, regulatory announcements, and sector data relevant to the sprint (*BusinessDay*, *TechCabal*, *Nairametrics*, *NIBSS*, *World Bank*, *UBEC*, *NUC*, etc.).
  - **Zero Calculations / Rich Educative Reporting**: Strictly no mathematical formulas, algebraic models, or worked math calculations. Instead, provide deep contextual reporting on real-world industry news, policy shifts, market trends, and operational case precedents.
  - 10 actionable, bookmarkable operational fixes.
  - Screen route mapping from `slugs.md`.
  - Comparison table: "Legacy Manual Method" vs "Designated Product Platform".
  - Closing CTA pointing to the brand's product portal.

### Step 2.2: Full Article Drafting
* **Action**: Write the complete article (~1,500–2,000 words), embedding the 3D Pixar visual prompt block at the top and real software UI descriptions throughout.
* **Save File**: `Sprint-[XX]/Week-[YY]/blog-post.md`.

### Step 2.3: Quality Gate Verification
* **Action**: Audit against the Blog Post Gate (B-01 to B-08) in `Requirement.md`.

---

## Phase 3: Responsive HTML Email Blast Production (Stream 2)

### Step 3.1: Newsletter Curation, Real News References, Correlated Images & Subject Matrix
* **Action**: Formulate 3 subject line options (Pain, Curiosity, Operational/Compliance) + preview text for the `email` topic in `CALENDAR_DATA`.
* **Select Real Industry News Stories, Attach Source Links & Grab Actual Article Images**:
  - **Lead Cover Story**: Real, verifiable industry news report highly relevant to the sprint's sector, paired with the **actual image grabbed directly from that news article** (`og:image` / featured media), a **clickable link (`<a href="..." target="_blank">`) to the original news URL**, and *"► WHAT IT MEANS FOR OPERATORS"* commentary.
  - **3 Curated Sector News Briefs**: 3 distinct, real industry news stories with their actual grabbed article images (100% correlated with each story), source attributions, clickable links to the real news URLs, and operator takeaways.
  - **Latest Industry News Worthy of Note Spotlight (Replaces Calculation Section)**: Prominent callout container featuring a latest noteworthy news report in the appropriate industry, complete with its grabbed article image, summary, operational takeaway, and clickable link to the original news article (**strictly zero calculation formulas or worked math equations in email copies**).

### Step 3.2: HTML Newsletter Drafting
* **Action**: Draft the complete edition of the newsletter in **clean, production-ready, responsive HTML with inline CSS**:
  - **Sprints 1–4**: *The Ofia Commerce Brief* template (`#2A6BE0` Signal Blue / `#EF8B3C` Ember) with `ofia_logo.svg` in header (44px square side-by-side with titles) and footer (22px inline beside "Ofia Enterprise Growth").
  - **Sprints 5–8**: *The ResultsPro Institutional Dispatch* template (`#1A48B6` Corporate Royal Blue / `#FE0B10` Signature Red) with `resultspro_logo.png` in header (44px square side-by-side with titles) and footer (22px inline beside "ResultsPro Educational Support").
  - **Typography**: `@font-face` import of `Dropa` (`Dropa-Regular.woff2`) as primary brand font.
  - **Button Styling**: Strict **zero corner radius (`border-radius: 0px !important;`)** on all CTA buttons, cards, and images.
  - Structure: 600px max width card, publication header banner with logo side-by-side with titles, cover story with grabbed article image and clickable news link, 3 news item cards with correlated grabbed article images and clickable news links, "Industry News Spotlight: Latest [Sector] News Worthy of Note" container (zero calculation/formula boxes), and bulletproof CTA button.
* **Save Files**: `Sprint-[XX]/Week-[YY]/email-blast.html` and `Sprint-[XX]/Week-[YY]/email-blast.md`.

### Step 3.3: Quality Gate Verification
* **Action**: Audit against the Email Gate (E-01 to E-12) in `Requirement.md`.

---

## Phase 4: Omnichannel Social Media Pack Production (Stream 4)

### Step 4.1: Social Media Suite Drafting
* **Action**: Craft the omnichannel pack for the `graphic` topic in `CALENDAR_DATA`:
  1. **LinkedIn**: Long-form thought leadership post with hook before fold, short alternative, 6-slide document carousel outline with complete slide copy, interactive poll, first-comment link strategy.
  2. **X (Twitter)**: 7-tweet viral thread with math formula and top tactics preview + standalone tweet under 280 characters.
  3. **Facebook**: Relatable story addressing operators in that sector, practical advice, open engagement question, and blog CTA.
  4. **Meta (Instagram & Threads)**: Caption with 2-line hook, bulleted takeaways, hashtags, carousel concept, and a concise Threads post under 500 characters.
* **Unified CTA**: Direct readers to the blog post across all platforms.
* **Save File**: `Sprint-[XX]/Week-[YY]/social-media-carousel.md`.

### Step 4.2: Quality Gate Verification
* **Action**: Audit against the Social Media Gate (S-01 to S-05) in `Requirement.md`.

---

## Phase 5: Cross-Asset Audit & Progress-Tracker Logging

### Step 5.1: Cross-Channel Message & CTA Consistency Audit
* **Action**: Verify that all generated files share consistent terminology, quantitative data, product positioning, and active URLs.

### Step 5.2: Synchronize Offline Cache in `index.html` & `contenthub.html`
* **Action**: Whenever any deliverable in `Sprint-[XX]/Week-[YY]/` is created or modified, rebuild the `const INITIAL_FALLBACK_FILES = [...]` JSON array inside [`index.html`](file:///Volumes/ReedBreedCC/9mm/index.html) and [`contenthub.html`](file:///Volumes/ReedBreedCC/9mm/contenthub.html) from the disk files so local/offline browser previews immediately reflect the latest content.

### Step 5.3: Update Progress-Tracker.md
* **Action**: Record the sprint and week as completed in `Progress-Tracker.md`, log all generated file paths, and update screen route coverage.

### Step 5.4: Packaging & Delivery
* **Action**: Present the deliverables with clickable markdown links to each generated asset file.
