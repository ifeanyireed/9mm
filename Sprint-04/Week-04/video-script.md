# 🎬 Video Script: "The 200ms Stock Lock"

* **Sprint & Week**: Sprint 04 (Omnichannel Retail) · Week 04 (Authority & Process / Behind the Scenes)
* **Topic**: Behind the Scenes: How we synchronize physical POS terminals with live online inventory in 200 milliseconds (eliminating double-selling)
* **Format**: Dual-Track Talking Head (TH) cut with Drama Skit (DRAMA)
* **Target Runtime**: ~4:15 (~630 spoken words at 140 WPM)
* **Cast**: Host (@Ifeanyi Felix), Yemi (Owner, Casa Bella Living Furniture Showroom), Blessing (Floor Cashier / Store Supervisor), Customer (Phone Voiceover)
* **Brand in the Skit**: Casa Bella Living (Victoria Island Luxury Showroom)
* **Product Pitched**: **Ofia Smart Cloud POS & Real-Time Omnichannel ERP Sync** (`/erp/admin/pos`, `https://www.ofia.ng/products`)

---

## Technical & Casting Notes
* **Visual Style**: High-end luxury retail meets high-speed cloud engineering. An elegant, sunlit Victoria Island furniture showroom featuring velvet armchairs and marble dining tables, contrasted with technical network sequence diagrams showing sub-second websocket synchronization.
* **Casting**:
  * **Host (@Ifeanyi Felix)**: Sharp, authoritative retail systems architect. Charcoal blazer over slate crewneck, fast-paced and incisive.
  * **Yemi**: 45-year-old sophisticated showroom proprietor, previously traumatized by having to call online buyers to apologize for selling their dining table to a walk-in customer.
  * **Blessing**: 26-year-old showroom cashier, operating the barcode scanner and card terminal with confidence.
  * **Customer**: Demanding corporate executive calling to confirm her high-value online order.
* **Sound Design**: Satisfying optical barcode scanner *BEEP*, crisp POS register receipt cutter snap, gentle acoustic jazz under showroom scenes, fast electronic pulse during the 200ms websocket sync visualization.

---

## Dual-Track Master Production Script

### [0:00 – 0:25] Cold Open: The Double-Selling Nightmare (TH)
**[VISUAL]**: IFEANYI standing center-frame. On the screen behind him, two red warning signs flash simultaneously: In-Store POS: *"Item Sold - Italian Leather Sofa (1 Remaining)"* and Online Website: *"Checkout Confirmed - Italian Leather Sofa (1 Remaining)"*. A red stamp slams down: *"DOUBLE-SOLD: Zero Inventory Remaining."*

**IFEANYI (Host)**:
"It is Saturday afternoon at 2:15 PM.
A walk-in customer in your Victoria Island showroom swipes their card to buy the very last imported marble dining table on the floor.
At the exact same second, a customer in Abuja buys that exact same dining table on your website.
Your offline POS terminal doesn't talk to your online e-commerce website.
You just double-sold a ₦2,500,000 piece of furniture.
Now you have to make the humiliating phone call:
*'Sorry ma, our website had a technical glitch... we have to refund you.'*
Welcome to the Omnichannel Inventory Divide—and today, we are taking you behind the scenes to show you how we solved it with Ofia's 200-millisecond stock lock."

---

### [0:26 – 1:05] Skit Scene 1: The Apology Call (DRAMA)
**[SCENE START: CASA BELLA LIVING SHOWROOM - SATURDAY 3:30 PM]**
YEMI is holding the phone to her ear, sweating, looking terrified. BLESSING stands beside the showroom floor's marble dining table which now has a red "SOLD TO WALK-IN" tag.

**YEMI**:
*(Trembling voice)*
"Mrs. Adeleke... good afternoon ma. I am calling regarding your online order for the Florence Marble Dining Set...
Yes ma, we received the ₦2,800,000 transfer... but... our floor manager just informed me that a walk-in client paid for it at our till ten minutes before your online order processed."

**CUSTOMER (V.O. ON SPEAKER)**:
*(Furious)*
"What do you mean ten minutes before?! Your website said: *'In Stock - 1 Unit Left in Victoria Island'*! I hired decorators for our housewarming party tomorrow! You people are completely disorganized! Refund my money immediately, and I am reporting your page on Instagram!"

**[CALL SLAMS DOWN]**

**YEMI**:
*(Collapsing onto a sofa)*
"Blessing, why didn't the cashier update the online website the moment the POS swiped the card?!"

**BLESSING**:
"Madam, the Saturday rush was too much! Our inventory clerk updates the website spreadsheet at 7:00 PM after the store closes! We can't manually update Shopify while customers are lining up at the till!"
**[SCENE END]**

---

### [1:06 – 1:40] Talking Head Breakdown: Why Batch Sync Fails (TH)
**[VISUAL]**: IFEANYI returns. Graphic on screen breaks down the "Batch Synchronization Gap": Manual CSV Uploads (6 to 8 hours latency, 18% double-selling rate), Polling APIs (15-minute delay), vs. Real-Time Bidirectional WebSockets (200 milliseconds).

**IFEANYI (Host)**:
"Most retail chains run on what software engineers call 'Batch Synchronization.'
Your physical store runs on one local POS software.
Your online store runs on Shopify or WooCommerce.
And every four hours—or at the end of the day—a clerk manually exports a CSV spreadsheet to reconcile inventory.
That four-hour gap is an operational death zone.
In high-velocity retail, inventory is a living, breathing stream.
The moment a barcode is scanned at a physical till, that stock deduction must propagate to your website, mobile app, and WhatsApp catalog instantly.
Not in fifteen minutes. Not at 7:00 PM.
In less than the blink of a human eye."

---

### [1:41 – 2:30] Skit Scene 2: The 200-Millisecond Sync (DRAMA)
**[SCENE START: 3 WEEKS LATER - CASA BELLA LIVING SHOWROOM]**
YEMI and BLESSING stand in front of the sleek **Ofia Smart Cloud POS Terminal**. A customer is paying for a velvet armchair.

**BLESSING**:
"Scanning barcode now."

**[SOUND CUE: Optical barcode BEEP]**
Blessing swipes the customer's card.
The POS screen flashes: *"Payment Approved: ₦650,000. Item: Milan Velvet Armchair."*

**YEMI**:
*(Looking at her iPad displaying `casabella.ofia.shop`)*
"Watch the website screen right now!"

On the iPad, the product page for the Milan Velvet Armchair updates in real time:
From: *"1 Unit Available"* to *"SOLD OUT - Back in Stock in 14 Days (Pre-Order Available)"*.
A stopwatch graphic on screen freezes at: **184 Milliseconds**.

**BLESSING**:
*(Grinning)*
"Less than a quarter of a second! The online store already locked the stock before the physical till receipt even finished printing!"

**YEMI**:
*(Beaming with relief)*
"And what if an online buyer checks out while a walk-in customer is carrying the box to the till?"

**BLESSING**:
"The moment the online checkout enters the payment gateway, the Ofia Cloud POS locks that SKU across all branch terminals with a temporary 10-minute cart reservation hold. Zero double-selling. Ever."
**[SCENE END]**

---

### [2:31 – 3:30] Deep-Dive: The Three Mechanics of Real-Time Omnichannel (TH)
**[VISUAL]**: IFEANYI standing center-frame with sleek animated callouts showcasing the Ofia POS & ERP Architecture.

**IFEANYI (Host)**:
"Here is the engineering architecture behind Ofia's real-time omnichannel sync:
1. **Bidirectional WebSocket Event Streaming**:
   When a cashier scans a product at any branch terminal, an encrypted webhook event fires to the cloud. Online stock levels update globally across web, mobile, and social storefronts in under 200 milliseconds.
2. **Dynamic Cart Reservation Locking**:
   When an online shopper reaches the checkout payment screen, the system places a temporary 10-minute reservation lock on that physical SKU across all store terminals, preventing walk-in cashiers from ringing up items that are actively being paid for online.
3. **Offline Resilient Local Queueing**:
   If your store loses internet connection, the Ofia POS continues ringing up sales locally using cached encrypted ledgers, automatically syncing and deduplicating stock the second the connection restores."

---

### [3:31 – 4:15] Outro & Call to Action (TH)
**[VISUAL]**: IFEANYI steps forward. The Ofia logo and URL glow beneath him.

**IFEANYI (Host)**:
"You cannot build a modern retail brand when your physical stores and your digital website live in separate universes.
Stop embarrassing your brand with stockout apology calls.
Stop losing high-net-worth customers to inventory lag.
Unify your physical tills and your online storefront on a single, lightning-fast cloud brain.
Deploy the **Ofia Smart Cloud POS & Omnichannel ERP** today.
Head over to **ofia.ng/products** and schedule your live omnichannel demonstration right now.
I'm Ifeanyi Felix. Build smart. Sync with certainty."

---

## 📱 Short-Form Cutdown (60-Second Vertical Reel / TikTok / Shorts)

* **[0:00 - 0:08] Hook (TH)**: "Have you ever had to call an online customer and say: *'Sorry, a walk-in customer just bought the last item off our shelf'*?"
* **[0:09 - 0:24] Skit Highlight**: Cut to Yemi sweating on phone: *"Mrs. Adeleke, we double-sold your ₦2.8M dining table..."* Customer screaming: *"I hired decorators for tomorrow! You people are disorganized!"*
* **[0:25 - 0:42] The Solution**: Cut to Ofia Smart POS: Cashier scans armchair at till, online website flips to "Sold Out" in 184 milliseconds! Zero double-selling.
* **[0:43 - 0:60] CTA**: "Unify your physical store and online website in real time. Visit ofia.ng/products."
