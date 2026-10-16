# 🚦 Requirement.md: Quality Gates & Pre-Flight Checklists

This document defines the strict, non-negotiable verification criteria that every marketing asset must pass before advancing to the next production step. 

It is fully modular and applies to **all 8 Sprints and both Brands (Ofia vs. ResultsPro)** across the 9-Month Media Engine.

---

## 1. Universal Workflow & Architecture Gates

* [ ] **Folder Structure Compliance**: All assets for a given sprint and week must reside in:
  ```
  Sprint-[XX]/Week-[YY]/
  ```
  *(e.g., `Sprint-01/Week-01/`, `Sprint-05/Week-01/`)*
* [ ] **Deliverable Files Present**: Each weekly folder must contain:
  1. `video-script.md` (Stream 3: Dual-Track Video Script)
  2. `blog-post.md` (Stream 1: In-depth Bookmarkable Blog Post)
  3. `email-blast.html` (Stream 2: Responsive HTML Email Newsletter)
  4. `email-blast.md` (Stream 2: Markdown Companion Edition)
  5. `social-media-carousel.md` (Stream 4: Omnichannel Social Media Pack)
* [ ] **Two-Brand Alignment Gate (BRD-01)**:
  - If Sprint is 1, 2, 3, or 4 $\rightarrow$ Brand MUST be **Ofia** (`https://www.ofia.ng`), publication: *The Ofia Commerce Brief*.
  - If Sprint is 5, 6, 7, or 8 $\rightarrow$ Brand MUST be **ResultsPro** (`https://www.resultspro.ng`), publication: *The ResultsPro Institutional Dispatch*.
* [ ] **Anti-Fluff Enforcement (VOX-01)**: Zero occurrences of banned buzzwords (*revolutionize, seamless, game-changer, delve into, in today's fast-paced digital world, supercharge, unlock the power of, tapestry, beacon*).
* [ ] **Sprint Product Positioning (PRD-01)**: Accurately pitches the designated software product for that specific sprint (e.g. Ofia Shop Manager for Sprint 1, Ofia Inventory IMS for Sprint 2, Ofia Niche Marketplace for Sprint 3, ResultsPro SchoolHub for Sprint 5, ResultsPro Campus for Sprint 6, etc.).
* [ ] **Screen Route Fidelity (SLG-01)**: Software workflows must map to authentic routes from [`slugs.md`](file:///Volumes/ReedBreedCC/9MM/AGENT/slugs.md).
* [ ] **Blog Featured Image Style Gate (IMG-01)**: Blog featured image MUST follow the exact prompt style: `VISUAL FOR BLOG FEATURED IMAGE: 3D Disney Pixar style animation. Netflix-grade cinematic lighting with screen glow on faces, UHD 8k, stylized technology.` featuring the sprint-appropriate character and setting.
* [ ] **Real News & Editorial Imagery Gate (IMG-02)**: Email cover story and news round-ups must contain real images from the internet covering authentic industry developments with descriptive captions and sources.
* [ ] **HTML Email Format Gate (EML-01)**: Email newsletter MUST be written in clean, production-ready, mobile-responsive HTML with inline CSS (max 600px width card).

---

## 2. Format-Specific Quality Gates

### 2.1 🎬 Video Script Gate (`video-script.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :--- |
| **V-01** | **Runtime & Word Count** | 600–650 spoken words (~4:00–4:30 runtime at 140 WPM). | [ ] |
| **V-02** | **Hybrid Format** | Clear separation between Talking Head (TH) and Drama scenes. | [ ] |
| **V-03** | **Hook Strength** | Pattern interrupt in the first 10 seconds tailored to the sprint's specific friction point. | [ ] |
| **V-04** | **Narrative Arc** | Scene 1 (The High / Volume Spike) $\rightarrow$ Scene 2 (The Crash / System Failure) $\rightarrow$ Scene 3 (The Rewind with automated solution). | [ ] |
| **V-05** | **Split-Screen Contrast** | Visual contrast between the overwhelmed manual operator and the automated competitor executing in seconds. | [ ] |
| **V-06** | **Economics Breakdown** | Host explains the quantitative friction and revenue leakage using the sprint's core thesis. | [ ] |
| **V-07** | **Product Close & CTA** | Pitches the designated sprint product with on-screen feature bullets and direct URL (`ofia.ng/products` or `resultspro.ng/solutions`). | [ ] |
| **V-08** | **Production Notes** | Includes casting guidance, sound design cues (SFX), and a 60-second cutdown concept for TikTok/Reels. | [ ] |

---

### 2.2 📚 Bookmarkable Blog Post Gate (`blog-post.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :--- |
| **B-01** | **Metadata & Structure** | H1 Title, author byline (`@Ifeanyi Felix`), publication date, read time, category, and meta description. | [ ] |
| **B-02** | **Research Grounding** | Cites authoritative industry reports, verifiable sector statistics, and benchmark figures relevant to the sprint topic. | [ ] |
| **B-03** | **Quantitative Model** | Features the sprint-specific mathematical formula with a detailed, realistic worked example. | [ ] |
| **B-04** | **10 Actionable Tactics** | Delivers exactly 10 high-utility, bookmarkable operational fixes with clear implementation guidance. | [ ] |
| **B-05** | **Screen Anchoring** | Grounds features in authentic software routes from `slugs.md`. | [ ] |
| **B-06** | **Comparison Table** | Includes a side-by-side comparison table ("Legacy Manual Method" vs "Designated Product Platform"). | [ ] |
| **B-07** | **Clear Closing CTA** | Summarizes the core operational shift and directs readers to the designated brand product URL. | [ ] |
| **B-08** | **Word Count** | Substantive long-form depth between 1,500 and 2,200 words. | [ ] |

---

### 2.3 📰 Responsive Email Newsletter Gate (`email-blast.html` & `email-blast.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :--- |
| **E-01** | **Brand Publication Identity** | Formatted as *The Ofia Commerce Brief* (Sprints 1–4) or *The ResultsPro Institutional Dispatch* (Sprints 5–8) with byline and date. | [ ] |
| **E-02** | **Subject Line Matrix** | 3 strategic subject line options (Pain Hook, Curiosity Hook, Metric Hook) + Preview Text. | [ ] |
| **E-03** | **Lead News Cover Story** | Pure journalistic reporting on an actual breaking news event, corporate launch, or regulatory edict around the week's theme, with a real photo and "What it means for operators" analysis. | [ ] |
| **E-04** | **Industry News Round-up** | 3 distinct, authentic industry news event cards with real photos, source attribution, and operator implications. | [ ] |
| **E-05** | **Growth Hack / Insight Box** | High-contrast callout container presenting the blog's quantitative formula as the tactical response to the news. | [ ] |
| **E-06** | **Primary Call to Action** | Prominent button directing readers to the complete blog post. | [ ] |
| **E-07** | **Footer Offer** | Closing note highlighting the designated sprint product's founding offer or demo audit. | [ ] |
| **E-08** | **Deliverability Hygiene** | Inline CSS, 600px responsive table layout, zero spam trigger words, and proper unsubscribe/company footer. | [ ] |
| **E-09** | **Official Brand Logos (`ofia_logo.svg` / `resultspro_logo.png`)** | The official brand logo must be reduced in size and placed **directly side-by-side with the titles** (NEVER standing alone on its own line): in the **header masthead** as a 44px square (`width="44" height="44"`, `border-radius: 0px`, `object-fit: contain`) aligned side-by-side with the titles in a 2-column table row, and in the **footer legal section** as a 22px icon (`width="22" height="22"`, `border-radius: 0px`) inline beside the brand legal entity ("Ofia Commerce OS" / "ResultsPro Educational Infrastructure"). Sprints 1–4 MUST use `ofia_logo.svg`; Sprints 5–8 MUST use `resultspro_logo.png`. | [ ] |
| **E-10** | **Brand Typography (`Dropa-Regular.woff2`)** | All email templates and content hub pages must import `Dropa` via `@font-face` using `Dropa-Regular.woff2` and set `font-family: 'Dropa', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;` as the primary brand typeface. | [ ] |
| **E-11** | **Strict Brand Palettes & Zero Corner Radius** | Strict compliance with brand palettes: **Ofia (Sprints 1–4)** in Signal Blue (`#2A6BE0` / `#0069ff`) and Ember (`#EF8B3C`); **ResultsPro (Sprints 5–8)** in New Era Corporate Royal Blue (`#1A48B6` / `#0F3282`) and Signature Red (`#FE0B10`). All CTA buttons, badges, cards, and containers must strictly enforce **zero corner radius (`border-radius: 0px !important;`)** with sharp architectural corners. | [ ] |

---

### 2.4 📱 Social Media Omnichannel Pack Gate (`social-media-carousel.md`)

| Check ID | Verification Item | Standard Required | Pass / Fail |
| :--- | :--- | :--- | :--- |
| **S-01** | **LinkedIn Suite** | Long-form post with hook before fold, short alternative, 6-slide carousel outline with full slide copy, poll concept, and first-comment link strategy. | [ ] |
| **S-02** | **X / Twitter Suite** | 7-tweet viral thread (hook, context, math formula, tactics preview, CTA) + standalone post under 280 characters. | [ ] |
| **S-03** | **Facebook Suite** | Relatable narrative addressing operators in that sector, practical advice, open engagement question, and blog CTA. | [ ] |
| **S-04** | **Meta Ecosystem Suite** | Instagram caption with 2-line hook, bulleted takeaways, hashtags, carousel concept, and a concise Threads post under 500 characters. | [ ] |
| **S-05** | **Unified Blog CTA** | Every social channel asset includes a clear call to action pointing to the blog post. | [ ] |

---

## 3. Pass/Fail Decision Matrix & Revision Protocol

1. **Gate Evaluation**: The Quality Assurance reviewer audits each asset against the checklist.
2. **Passing Standard**: An asset must achieve a 100% pass rate across both Universal and Format-Specific gates.
3. **Revision Loop**:
   * If any check fails, the reviewer logs the specific deficiency.
   * The authoring agent must revise the asset within one revision cycle.
   * Only upon passing all checks may the step be marked `[x] Delivered` in `Progress-Tracker.md`.
