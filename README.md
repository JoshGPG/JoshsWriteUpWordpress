# Josh's Write Up - Sports Community Platform

[![WordPress](https://img.shields.io/badge/WordPress-6.x-blue.svg)](https://wordpress.org/)
[![PHP](https://img.shields.io/badge/PHP-7.4+-purple.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

> **A sports community site where fans connect, share, and celebrate the power of sports.**

## Project Vision

Josh's Write Up is a sports publishing and community platform built on WordPress. The goal is simple: create a place to write about sports, talk with other fans, and highlight how sports bring people together and serve as a positive force in people's lives.

This is a continuation of the [original ASP.NET project](https://github.com/JoshGPG/JoshsWriteUpASPNET), rebuilt on WordPress for easier hosting, built-in community features, and a lower barrier to getting content out there.

**What this site is about:**
- Writing about sports across every major league and beyond
- Building a community of fans who love talking sports
- Celebrating how sports connect people and provide a positive distraction from everyday life
- Having fun with it

---

## Features

### Content
- **Multi-sport coverage** — NFL, NBA, MLB, NHL, NCAA, Soccer, Golf, Tennis, Boxing, MMA, F1, Cricket, Rugby, and more
- **Rich article publishing** — WordPress block editor with featured images, categories, and tags
- **Top stories** — Sticky posts for homepage prominence
- **SEO-friendly URLs** — WordPress permalink structure
- **Full-text search** — Built-in WordPress search across all content

### Community & Engagement
- **Threaded comments** — Nested reply system for real conversations
- **User profiles** — Readers can register, comment, and build a presence
- **Social sharing** — Easy sharing to Twitter/X, Facebook, and other platforms (via plugins)

### Theme: `joshs-writeup`
A custom theme built specifically for this site with:
- Clean, readable typography focused on long-form sports writing
- Mobile-first responsive layout
- Two-column design (content + sidebar) on larger screens
- Collapsible mobile navigation
- Widget-ready sidebar for categories, recent posts, and more
- WordPress Customizer integration (accent color, footer text)
- Accessibility-ready (skip links, screen reader text, ARIA attributes)

---

## Theme Structure

```
wp-content/themes/joshs-writeup/
├── style.css                  # Theme metadata + base styles
├── functions.php              # Theme setup, menus, widgets, enqueues
├── index.php                  # Main fallback template
├── header.php                 # Site header (nav, branding)
├── footer.php                 # Site footer
├── sidebar.php                # Sidebar with dynamic widgets
├── single.php                 # Single blog post view
├── page.php                   # Static page template
├── archive.php                # Category/tag/date archives
├── search.php                 # Search results
├── 404.php                    # Not found page
├── comments.php               # Comments display + form
├── template-parts/
│   ├── content.php            # Post excerpt partial
│   ├── content-single.php     # Full post partial
│   └── content-none.php       # "No posts found" partial
├── assets/
│   ├── css/
│   │   └── main.css           # Main responsive stylesheet
│   └── js/
│       ├── main.js            # Mobile menu toggle
│       └── customizer.js      # Live Customizer preview
└── inc/
    └── customizer.php         # Theme Customizer options
```

---

## Hosting

This site runs on WordPress hosting — no AWS, no server management, no database administration. Since this is a hobby project, the priority is keeping costs low.

**Budget-friendly options for custom themes:**
- **Bluehost** — Official WordPress.org recommended host, cheap shared plans
- **DreamHost** — Affordable managed WordPress with free SSL
- **Hostinger** — Very low-cost WordPress hosting
- **InfinityFree / 000WebHost** — Free tiers available (limited but fine for starting out)

> **Note:** WordPress.com free/cheap plans don't allow custom themes. You need self-hosted WordPress (WordPress.org) on one of the hosts above, or a WordPress.com Business plan. Self-hosted is usually the better deal for a hobby site.

---

## Local Development

### Prerequisites
- PHP 7.4+
- MySQL 5.7+ or MariaDB 10.3+
- WordPress 5.0+
- A local WordPress environment ([Local by Flywheel](https://localwp.com/), MAMP, or similar)

### Setup

1. **Set up a local WordPress install** using Local by Flywheel or your preferred tool.

2. **Clone this repo:**
   ```bash
   git clone https://github.com/JoshGPG/JoshsWriteUpWordpress.git
   ```

3. **Copy the theme into your WordPress installation:**
   ```bash
   cp -r wp-content/themes/joshs-writeup /path/to/wordpress/wp-content/themes/
   ```

4. **Activate the theme** from the WordPress admin under Appearance > Themes.

5. **Configure the site:**
   - Go to Appearance > Menus and create a Primary Menu
   - Go to Appearance > Widgets and add widgets to the Sidebar
   - Go to Appearance > Customize for accent color and footer text
   - Go to Settings > Permalinks and choose "Post name" for clean URLs

---

## Recommended Plugins (All Free)

This is a solo hobby project, so everything here is **100% free**. No premium plugins, no paid tiers.

| Plugin | Purpose |
|--------|---------|
| **Yoast SEO** (free tier) | Search engine optimization for articles |
| **Akismet** (free for personal sites) | Spam comment filtering |
| **WPForms Lite** | Contact form for reader feedback |
| **AddToAny** | Social sharing buttons |
| **WP Super Cache** | Performance caching |
| **UpdraftPlus** (free tier) | Automated backups |

---

## Roadmap

### Phase 1: Foundation (Current)
- [x] Custom WordPress theme with sports-focused design
- [x] Responsive layout with mobile support
- [x] Comment system with threaded replies
- [x] Category support for multi-sport coverage
- [ ] Launch on managed WordPress hosting
- [ ] Publish initial batch of articles

### Phase 2: Community Growth
- [ ] Social sharing integration (AddToAny plugin)
- [ ] Email newsletter (Mailchimp free tier)
- [ ] Reader polls and engagement widgets
- [ ] Author bio sections for guest writers

### Phase 3: Social Integration
- [ ] Auto-post to Twitter/X and Facebook (free Jetpack Publicize or manual)
- [ ] Instagram integration
- [ ] Share analytics

### Phase 4: Monetization (if/when it makes sense)
- [ ] Google AdSense integration
- [ ] Newsletter sponsorships

---

## License

This project is licensed under the MIT License — see the [LICENSE](LICENSE) file for details.

---

## Contact

**Developer:** Joshua Rieth
**GitHub:** [@JoshGPG](https://github.com/JoshGPG)
**Project:** [JoshsWriteUpWordpress](https://github.com/JoshGPG/JoshsWriteUpWordpress)
