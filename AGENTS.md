# 9MM Content Production & Email Campaign Agent Guidelines

## 1. Zero Unsplash & Zero Image Repetition Policy
* **Mandate**: Never use Unsplash, Pexels, Shutterstock, or unrealistic generic stock photography in any email blast, blog post, social media pack, or video script.
* **Zero Image Repetition (No Duplicate Images Anywhere)**: NO NEWS/EDITORIAL IMAGE MAY BE USED TWICE across any email blast or blog post in the entire repository. Every single story, thumbnail, case study, and spotlight must feature a distinct, authentic, live Nigerian/African news photo. (Official Cloudinary brand logos are exempt as brand identifiers).
* **Approved Image Domains**: All news visual assets, featured thumbnails, and editorial headers must come exclusively from verified Nigerian and African business, technology, and economic news portals:
  - **Punch Nigeria**: `https://cdn.punchng.com/...` / `https://punchng.com/...`
  - **Nairametrics**: `https://cdn.nairametrics.com/...` / `https://nairametrics.com/...`
  - **TechCabal**: `https://techcabal.com/...`
  - **BusinessDay Nigeria**: `https://businessday.ng/...`
  - **Daily Trust**: `https://dailytrust.com/...`
  - **Techpoint Africa**: `https://techpoint.africa/...`
  - **Paystack Engineering**: `https://paystack.com/...`
* **Live HTTP 200 Verification**: Every image URL must be live and verified. Wrap with `https://wsrv.nl/?url=...` with `referrerpolicy="no-referrer"` to prevent CDN 403 hotlink blocks.

## 2. Standardized Email Campaign Architecture (All 80 Deliverables: Weeks 1–10)
Weeks 4 to 10 across all sprints must match the exact depth, comprehensive structure, and formatting of Weeks 1 to 3:
1. **Subject Line Matrix**: 3 high-converting angles (Pain Hook, Curiosity/Warning Hook, Metric/SLA Hook) incorporating `at {{company}}`.
2. **Cold Outreach Sequence**: 3 distinct touchpoints (Days 1, 4, 8) with dynamic personalization tokens (`{{first_name}}`, `{{company}}`, `{{email}}`, `{{unsubscribe_url}}`).
3. **Top Utility Bar & Executive Masthead**: Edition number, date, read time, domain link, and 44px official Cloudinary brand logo aligned side-by-side with titles.
4. **Editor's Opening Letter**: Standardized greeting format: `**Dear {{first_name|Valued Partner}},**`.
5. **Lead News Cover Story**:
   - `**HEADLINE: [Headline](URL)**` (clickable markdown link).
   - `* **Featured Image**: URL` (must point to a unique, verified Nigerian news domain).
   - `* **Source**: Publication · [Read Full Story →](URL)` (verified news URL).
   - Hard-hitting investigative news lead connecting real events to the campaign thesis.
   - Executive pull-quote block.
   - `> **► WHAT THIS MEANS FOR OPERATORS:**` (or relevant persona) callout box.
6. **Section 5: Curated Intelligence Briefs (MANDATORY ON ALL 80 CAMPAIGNS)**:
   - Exactly 3 numbered items per issue.
   - Each item includes a hyperlinked headline: `* **1. [Headline](URL)**`.
   - Each item includes a unique authentic news image: `  * **Featured Image**: URL`.
   - Each item includes a source attribution: `  * **Source**: Publication · [Read Full Story →](URL)`.
   - Concise operational analysis.
7. **Industry News Spotlight (Zero Calculations)**:
   - Prominent container featuring a 4th noteworthy industry event, its unique article image (100% width, 180px height), executive summary, why it matters, and direct source link.
   - Strictly zero calculation sections or worked math formulas in email copies.
8. **Primary Call to Action**: Prominent button directing readers to the complete blog post teardown.
9. **Product Spotlight & Founding Offer**: High-converting product positioning box, founder plan callout, and author signature (`— Ifeanyi Felix`).
10. **Light Executive Footer**: 22px Cloudinary brand logo, legal entity, address, and personalization unsubscribe tags (`{{name}}`, `{{email}}`, `{{company}}`, `{{unsubscribe_url}}`).

## 3. Blog Post Image Requirements (Minimum 3 Images per Post)
* **Minimum 3 Embedded Images**: Every blog post across all 80 weeks must contain at least 3 actively embedded images:
  1. **Hero / Featured Cover Image**: At the top of the post (`![Descriptive Caption](IMAGE_URL)`).
  2. **Inline Investigation / Case Study Image 1**: Accompanying empirical data or sector trends.
  3. **Inline Investigation / Case Study Image 2**: Accompanying operational teardown, regulatory event, or workflow comparison.
* **Active Markdown / HTML Embedding**: Never use raw text bullets for images (e.g., avoid `* **Featured Image**: URL`). Always use `![Caption](URL)` or `<img src="URL" alt="Caption" referrerpolicy="no-referrer" width="100%" />`.
* **Zero Image Repetition**: Each image must be unique and directly correlated with the topics discussed.

## 4. Brand Segregation & Author Personas
* **Sprints 01 to 04**: **Ofia.ng**
  - **Domain**: `https://www.ofia.ng`
  - **Logo**: `https://res.cloudinary.com/wnmabxiy/image/upload/v1793738590/9mm/ofia_logo.svg`
  - **Author**: @Ifeanyi Felix (Head of Commerce Editorial, Ofia.ng)
  - **Themes**: Social commerce checkout, B2B multi-store inventory, digital escrow & dispute resolution, omnichannel retail.
* **Sprints 05 to 08**: **ResultsPro.ng**
  - **Domain**: `https://www.resultspro.ng`
  - **Logo**: `https://res.cloudinary.com/wnmabxiy/image/upload/v1793738629/9mm/resultspro_logo.png`
  - **Author**: Ifeanyi Felix (Head of Institutional Governance / Public Sector Strategy)
  - **Themes**: K-12 private school ERP, tertiary campus university automation, EdTech CBT infrastructure, SUBEB biometric civil service & ghost worker auditing.

## 5. Quality Control & Execution Protocol
* **No Blind Batch Writing**: Refactor and inspect one file at a time or use coordinated subagents for granular quality control.
* Native markdown tables for data, balance sheets, and comparison matrices (zero ASCII box art, zero fenced code block tables).
* Clean Unicode typography (₦ for Naira, %, —, •) with no broken escapes.
* All links must be fully qualified and functional.
