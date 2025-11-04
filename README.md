Welcome to the Smart-PHP-Menu-System wiki!

<html>
<body>
<!--StartFragment--><h3 dir="auto">How to Use</h3>
<h4 dir="auto">1. Add Static Items (edit the array):</h4>
<div dir="auto"><div data-testid="code-block"><div><span>php</span></div><div><div><div style="opacity: 1;"></div></div></div><div style="border-radius: 0px 0px 12px 12px; border-top: none; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left-color: ; border-left-style: ; border-left-width: ; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; padding: 16px; margin-top: 0px; font-size: 0.9em; font-family: var(--font-ibm-plex-mono); line-height: 1.5em; background-color: hsl(var(--surface-inset)); color: var(--fg-primary); display: block; overflow: auto;"><pre tabindex="0" style="background-color: rgb(34, 34, 34); color: rgb(230, 230, 230);"><code><span><span style="color: rgb(156, 220, 254);">$static_items</span><span style="color: rgb(212, 212, 212);"> =</span><span style="color: rgb(230, 230, 230);"> [</span></span>
<span><span style="color: rgb(230, 230, 230);">    [</span><span style="color: rgb(206, 145, 120);">'label'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> 'Home'</span><span style="color: rgb(230, 230, 230);">,      </span><span style="color: rgb(206, 145, 120);">'href'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> '#'</span><span style="color: rgb(230, 230, 230);">],</span></span>
<span><span style="color: rgb(230, 230, 230);">    [</span><span style="color: rgb(206, 145, 120);">'label'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> 'Over Ons'</span><span style="color: rgb(230, 230, 230);">,  </span><span style="color: rgb(206, 145, 120);">'href'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> '#menu_about'</span><span style="color: rgb(230, 230, 230);">],</span></span>
<span><span style="color: rgb(230, 230, 230);">    [</span><span style="color: rgb(206, 145, 120);">'label'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> 'Blog'</span><span style="color: rgb(230, 230, 230);">,      </span><span style="color: rgb(206, 145, 120);">'href'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> 'https://blog.example.com'</span><span style="color: rgb(230, 230, 230);">, </span><span style="color: rgb(206, 145, 120);">'target'</span><span style="color: rgb(212, 212, 212);"> =&gt;</span><span style="color: rgb(206, 145, 120);"> '_blank'</span><span style="color: rgb(230, 230, 230);">],</span></span>
<span><span style="color: rgb(230, 230, 230);">];</span></span></code></pre></div><div></div><div></div></div></div>
<h4 dir="auto">2. Keep Dynamic Sections:</h4>
<div dir="auto"><div data-testid="code-block"><div><span>html</span></div><div><div><div style="opacity: 1;"></div></div></div><div style="border-radius: 0px 0px 12px 12px; border-top: none; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left-color: ; border-left-style: ; border-left-width: ; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; padding: 16px; margin-top: 0px; font-size: 0.9em; font-family: var(--font-ibm-plex-mono); line-height: 1.5em; background-color: hsl(var(--surface-inset)); color: var(--fg-primary); display: block; overflow: auto;"><pre tabindex="0" style="background-color: rgb(34, 34, 34); color: rgb(230, 230, 230);"><code><span><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">section</span><span style="color: rgb(156, 220, 254);"> id</span><span style="color: rgb(230, 230, 230);">=</span><span style="color: rgb(206, 145, 120);">"menu_services"</span><span style="color: rgb(128, 128, 128);">&gt;</span><span style="color: rgb(230, 230, 230);">…</span><span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">section</span><span style="color: rgb(128, 128, 128);">&gt;</span></span>
<span><span style="color: rgb(128, 128, 128);">&lt;</span><span style="color: rgb(86, 156, 214);">section</span><span style="color: rgb(156, 220, 254);"> id</span><span style="color: rgb(230, 230, 230);">=</span><span style="color: rgb(206, 145, 120);">"menu_contact"</span><span style="color: rgb(128, 128, 128);">&gt;</span><span style="color: rgb(230, 230, 230);">…</span><span style="color: rgb(128, 128, 128);">&lt;/</span><span style="color: rgb(86, 156, 214);">section</span><span style="color: rgb(128, 128, 128);">&gt;</span></span></code></pre></div><div></div><div></div></div></div>
<h4 dir="auto">3. Render:</h4>
<div dir="auto"><div data-testid="code-block"><div><span>php</span></div><div><div><div style="opacity: 1;"></div></div></div><div style="border-radius: 0px 0px 12px 12px; border-top: none; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left-color: ; border-left-style: ; border-left-width: ; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; padding: 16px; margin-top: 0px; font-size: 0.9em; font-family: var(--font-ibm-plex-mono); line-height: 1.5em; background-color: hsl(var(--surface-inset)); color: var(--fg-primary); display: block; overflow: auto;"><pre tabindex="0" style="background-color: rgb(34, 34, 34); color: rgb(230, 230, 230);"><code><span><span style="color: rgb(212, 212, 212);">&lt;</span><span style="color: rgb(230, 230, 230);">header</span><span style="color: rgb(212, 212, 212);">&gt;&lt;?</span><span style="color: rgb(230, 230, 230);">php </span><span style="color: rgb(220, 220, 170);">echo</span><span style="color: rgb(220, 220, 170);"> generate_menu</span><span style="color: rgb(230, 230, 230);">(); </span><span style="color: rgb(212, 212, 212);">?&gt;&lt;/</span><span style="color: rgb(230, 230, 230);">header</span><span style="color: rgb(212, 212, 212);">&gt;</span></span></code></pre></div><div></div><div></div></div></div>
<hr>
<h3 dir="auto">Active State Works For:</h3>

























<div><div><div></div></div><div dir="auto" style=""><div style="height: 100%; width: 1px; left: 0px; flex-shrink: 0;"></div>
Type | Active When
-- | --
href="#" | On page load or top
href="#menu_about" | Scrolled to section
href="blog.php" | Visiting blog.php
External link | Not active (unless you add logic)

<div style="height: 100%; width: 1px; right: 0px; flex-shrink: 0;"></div></div></div>
<hr>
<h3 dir="auto">Option B (Alternative): Static via Comments?</h3>
<p dir="auto" style="white-space: pre-wrap;">If you <strong>really</strong> want HTML-style:</p>
<div dir="auto"><div data-testid="code-block"><div><span>html</span></div><div><div><div style="opacity: 1;"></div></div></div><div style="border-radius: 0px 0px 12px 12px; border-top: none; border-right-color: ; border-right-style: ; border-right-width: ; border-bottom-color: ; border-bottom-style: ; border-bottom-width: ; border-left-color: ; border-left-style: ; border-left-width: ; border-image-source: ; border-image-slice: ; border-image-width: ; border-image-outset: ; border-image-repeat: ; padding: 16px; margin-top: 0px; font-size: 0.9em; font-family: var(--font-ibm-plex-mono); line-height: 1.5em; background-color: hsl(var(--surface-inset)); color: var(--fg-primary); display: block; overflow: auto;"><pre tabindex="0" style="background-color: rgb(34, 34, 34); color: rgb(230, 230, 230);"><code><span><span style="color: rgb(106, 153, 85);">&lt;!-- MENU: Home | # --&gt;</span></span>
<span><span style="color: rgb(106, 153, 85);">&lt;!-- MENU: Blog | blog.php --&gt;</span></span></code></pre></div><div></div><div></div></div></div>
<p dir="auto" style="white-space: pre-wrap;">Then parse with regex — but <strong>less safe</strong>, harder to add <span>target</span>, etc.</p>
<p dir="auto" style="white-space: pre-wrap;"><strong>We recommend Option A</strong> — it’s <strong>cleaner, safer, more powerful</strong>.</p><!--EndFragment-->
</body>
</html>
