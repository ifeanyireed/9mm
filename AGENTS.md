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

## 2. Standardized Email Campaign Architecture (All 120 Deliverables: 12 Sprints × 10 Weeks)
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
   - `> **► WHAT THIS MEANS FOR OPERATORS:**` (or relevant persona: `CHAIRMEN & MDs`, `EPC CONTRACTORS`, `REAL ESTATE DEVELOPERS`, `FINTECH CTOs`) callout box.
6. **Section 5: Curated Intelligence Briefs (MANDATORY ON ALL 120 CAMPAIGNS)**:
   - Exactly 3 numbered items per issue across ALL sprints (Ofia.ng Sprints 01–04, ResultsPro.ng Sprints 05–08, and ComplianceHub.ng Sprints 09–12).
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

## 3. Blog Post Image Requirements (Minimum 3 Images per Post & Non-Full-Width Sizing)
* **Minimum 3 Embedded Images**: Every blog post across all 120 weeks must contain at least 3 actively embedded images:
  1. **Hero / Featured Cover Image**: At the top of the post (`![Descriptive Caption](IMAGE_URL)` or `<img src="IMAGE_URL" ... />`).
  2. **Inline Investigation / Case Study Image 1**: Accompanying empirical data or sector trends.
  3. **Inline Investigation / Case Study Image 2**: Accompanying operational teardown, regulatory event, or workflow comparison.
* **Active Markdown / HTML Embedding**: Never use raw text bullets for images (e.g., avoid `* **Featured Image**: URL`). Always use `![Caption](URL)` or `<img src="URL" alt="Caption" referrerpolicy="no-referrer" style="max-width: 720px; width: 100%; height: auto; display: block; margin: 20px auto; border-radius: 8px;" />`.
* **Blog Images Must Not Be Full Width**: Avoid blown-up 100% full-width images stretched across desktop screens. Constrain blog images to clean, editorial dimensions (e.g. max-width 720px, centered with balanced margins) so they integrate naturally with surrounding typography.
* **Zero Image Repetition**: Each image must be unique and directly correlated with the topics discussed.

## 4. Mandatory Narrative Image Integration (Images Must Never Stand Alone)
* **Strict Integration Rule**: Visual assets must **NEVER stand alone** as unreferenced decorations. 
* **Explicit Narrative Mention**: Every single image—including Hero covers, inline figures, newsletter cover stories, Curated Briefs (all 3 items), and Industry News Spotlights—must be **explicitly mentioned in the surrounding narration**.
  - Cite the visual directly (e.g., *"As illustrated in Nairametrics' market coverage (featured photo above)..."*, *"As demonstrated in Figure 1 below..."*, *"As documented in the investigation photo above (Source: Punch Nigeria)..."*).
  - Use the image to **buttress a key operational argument**, introduce/support **empirical metrics or sector statistics**, or highlight a **concrete real-world regulatory/industry case study**.
* **Descriptive Contextual Captions & Alt Text**:
  - Image descriptions, captions, and `alt` attributes must not be generic labels (e.g., avoid *"Figure 1: Field investigations"* or *"Photo: Instagram"*).
  - Every description must explicitly explain **what the image depicts AND how it directly connects to the operational context and business lesson of that section**.

## 5. Brand Segregation & Author Personas
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
* **Sprints 09 to 12**: **ComplianceHub.ng**
  - **Domain**: `https://www.compliancehub.ng`
  - **Logo**: `https://res.cloudinary.com/wnmabxiy/image/upload/v1793738670/9mm/compliancehub_logo.png`
  - **Author**: @Ifeanyi Felix (Head of Corporate Governance & Regulatory Technology)
  - **Themes**: Corporate Affairs Commission (CAC) post-incorporation & annual returns governance, Statutory Quad (FIRS TCC, PENCOM, ITF, NSITF) & BPP federal procurement tender readiness, DNFBP AML/CFT & SCUML regulatory reporting, Enterprise Data Protection (NDPA 2023) compliance & cross-border data audits.

## 6. Quality Control & Execution Protocol
* **No Blind Batch Writing**: Refactor and inspect one file at a time or use coordinated subagents for granular quality control. Never replace rich, specific editorial prose with generic template boilerplate.
* **Strictly Zero Scripts**: Never run shell/python scripts or automated scripts to edit deliverables or deduplication files. Perform all reading and editing using native file editing tools.
* Native markdown tables for data, balance sheets, and comparison matrices (zero ASCII box art, zero fenced code block tables).
* Clean Unicode typography (₦ for Naira, %, —, •) with no broken escapes.
* All links must be fully qualified and functional.

## 7. Granular Content & Visual Curation Protocol (Laser-Precision Execution)
* **Sub-Agent Copy Reading & Evaluation**:
  - For each edition (blog and email), read the text closely to identify the specific operational bottleneck, case study, or thesis being discussed (e.g., DM checkout drop-off, demurrage in port haulage, gradebook calculation errors, ghost worker audits).
* **Worthy & Deduplicated Story Verification**:
  - Check existing stories, news citations, and case studies in the copy.
  - **If a cited story/event is authentic, worthy, and deduplicated**: Search the verified Nigerian/African news source (Punch, Nairametrics, TechCabal, BusinessDay, Daily Trust, Techpoint Africa) for that story's original live visual/photo asset, embed the visual with `referrerpolicy="no-referrer"`, and hyperlink the source publication.
  - **If no worthy or deduplicated story/event exists** (or if the existing reference is broken, generic, or duplicated elsewhere): Find and add an authentic, deduplicated, topic-specific Nigerian news story/event that laser-matches the weekly narrative, embed its real visual, and hyperlink the curation source in the copy.
* **Thematic Alignment & Narrative Integration of Visuals**:
  - In `blog-post.md`: Embed 3 distinct, authentic images (Hero Cover, Figure 1 Case Study, Figure 2 Architecture) directly relevant to the specific sections they accompany, with descriptive journalistic captions citing the real Nigerian source. Every image must be mentioned in the text to buttress an argument or statistic. Blog images must not be full width. Zero `$$` math formula blocks.
  - In `email-blast.html` & `email-blast.md`: Ensure Lead Cover Story, Section 5 Curated Briefs (3 items), and Industry Spotlight feature authentic, unique Nigerian news visuals with matching hyperlinked headlines, sources, explicit narrative references, and descriptive captions/alts.
* **Global Deduplication Registry**:
  - Maintain absolute repository-wide deduplication. Every visual asset must appear in exactly one place across all 120 weeks.

## 8. Mandatory Content Hub Synchronization (content-data.js & content-data.json)
* **Always Sync After An Update**: Whenever any deliverable (`blog-post.md`, `email-blast.html`, `email-blast.md`, `video-script.md`, or `social-media-carousel.md`) is modified or curated, ALWAYS synchronize the updated file content, titles, and visual assets into `content-data.js` and `content-data.json`.
* **Zero Stale Cache in Content Hub**: `contenthub.html` runs locally via the `file:///` protocol and relies directly on `content-data.js`. Synchronizing after every change guarantees that the Content Hub immediately displays the latest live visuals, word counts, and verified copy without serving stale or obsolete placeholder assets.

## 9. Master Blog Post Writing Style & 8-Section Cohesive Story Blueprint (Live Ofia.ng Editorial Standard)
* **Core Goal — One Cohesive Story from Start to Finish**:
  - Every blog post must feel like **one complete, useful story** from start to finish—never like five separate articles or random news briefs stitched together.
  - **Tone**: Warm, clear, calm, credible, and simple. Easy to read on a phone (1–2 sentence paragraphs with generous whitespace).
* **Cohesive Story Structure**:
  - Start with **one clear problem or question** the reader already has.
  - Use a **short intro** (anchored in a relatable Nigerian persona in a real commercial location, e.g., *Funke in Victoria Island* or *Zainab in Ikeja*) that connects directly to that problem.
  - Share **only 3 to 5 curated stories or news items** (specifically **4 numbered developments** in the Macro Industry Validation section).
  - End with **one clear takeaway and one next step**.
* **Strict Rules for News & Story Curation**:
  - **The Relevance Test**: Every curated story or news item must pass this test: *Does it help the reader solve the problem, make a decision, or understand the topic better?* If not, remove it.
  - Do **not** include a story just because it is trending or popular.
  - Every story must be heavily relevant to the main topic and to the reader's specific context.
  - Explain in **1 to 2 sentences** why each story matters to the reader / persona (*"Why does this matter to [Name]?"* or *"For [Name], this highlights..."*).
  - Link each story back to the main theme so the reader feels a natural narrative flow.
  - Remove anything that feels off-topic, repetitive, or random.
* **Strict Rules for Images & Visual Cohesion**:
  - Change or replace any image that does not match the story or the mood.
  - Use images that feel like they belong in the same blog: consistent style, colours, and feeling (sourced from verified Nigerian/African media or authentic platform photography—never Unsplash).
  - Each image must **actively support the section it is in**, not just decorate it. If an image does not add meaning, remove it.
* **Mandatory 8-Section Blog Structure**:
  1. **Header, Meta Hook & Hero Question**:
     - Title format: `Why [Target Audience] Struggle to [Goal]: 10 Ways to [Bridge the Gap / Solve It]` (or `[Problem]: 10 Ways to [Solve It]`).
     - 2-sentence meta excerpt starting with a direct question.
     - Embedded Hero Image (`max-width: 720px`) followed immediately by a single-sentence provocative question.
  2. **Section 1 — The Relatable Opening Persona Story (`The Busy [Business] That Was Losing Customers`)**:
     - Open on a busy day at the persona's Nigerian business where everything looks successful from the outside, then pivot with: *"But [Name] has a problem."*
     - Walk through 3 concrete everyday micro-failures (customer journey friction, missing digital records, hours of manual reconciliation/admin).
     - Close with the core thesis: *"Her business has customers, products and physical locations. What it lacks is a connected system."*
  3. **Section 2 — Macro Industry Validation (`The [Industry] Is Changing, and [Businesses] Cannot Afford to Ignore It`)**:
     - Present **4 numbered industry developments** backed by real, dated Nigerian news/research reports (e.g., *BusinessDay / McKinsey*, *TechCabal*, *Nairametrics*, *Punch*, *Techpoint Africa*, *The Guardian*).
     - **Mandatory Matched Public Image for Each of the 4 Reports**: Grab and embed **4 publicly available, verified images** (one for each of the 4 numbered items) that directly match the specific news story, event, company, or research report cited (`referrerpolicy="no-referrer"`, `max-width: 720px`, zero Unsplash).
     - Each numbered item must follow a 3-step pattern: (a) embed the matching publicly available news/research image; (b) cite the publication, date, and core finding with a link; (c) explicitly tie it back to the persona in 1–2 sentences (*"Why does this matter to [Name]?"*).
  4. **Section 3 — The Core Diagnosis (`The Real Problem: Your [Channels/Departments] Are Competing Instead of Working Together`)**:
     - Revisit the persona (*"Consider [Name]'s business again."*).
     - Stack 4 parallel one-sentence operational disconnects across departments.
     - Define the unified solution concept simply and transition into the 10 practical ways.
  5. **Section 4 — The 10 Practical Fixes (`10 Ways to [Solve the Problem]`)**:
     - Numbered `1` to `10`, with inline images interspersed (e.g., at #1, #3, #5).
     - Every single item (`1`–`10`) must strictly follow this **4-part micro-template**:
       1. **Action-Verb Heading**
       2. **The Current Friction / Mini-Scenario** (2–3 short paragraphs showing the manual pain or *"Imagine [Name]..."*)
       3. **The Connected Solution** (2–3 short paragraphs explaining how an integrated system handles it)
       4. **Bold Closing Takeaway**: `**Why it matters:** [1-sentence operational benefit].`
  6. **Section 5 — The 3-Column Comparison Table (`What a Connected [Business] Looks Like`)**:
     - A clean 8-row, 3-column Markdown table: `Business activity` | `Disconnected [operations]` | `Connected [operations]`.
  7. **Section 6 — The Product Bridge (`How [Ofia / ResultsPro / ComplianceHub] Helps Bring Your Operations Together`)**:
     - Include an inline image and reconnect to the persona.
     - Introduce the platform with *"Depending on the configured modules, businesses can use the platform to support:"* followed by 6 clean module bullets.
  8. **Section 7 & 8 — Narrative Closure, Direct CTA & Tags**:
     - **Narrative Closure**: Bring closure to the persona's realization.
     - **Closing CTA (`Ready to Connect Your...?`)**: Address operators directly, include the CTA link, end with a memorable 2-sentence epigram, and append relevant `#tags`.


