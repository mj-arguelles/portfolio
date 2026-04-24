# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

A responsive personal portfolio website for Mar Jude Arguelles showcasing mobile development experience. The site uses vanilla HTML, CSS (Tailwind via CDN), and JavaScript with no build tools or frameworks. It features a dark mode toggle, image carousels, 3D flip cards, and data-driven project listings.

## Directory Structure

```
portfolio/
├── index.html              # Main portfolio page with all sections
├── index.php               # Alternative PHP version (not currently used)
├── assets/
│   ├── css/
│   │   └── style.css       # Custom 3D flip card and animation styles
│   ├── js/
│   │   ├── main.js         # Carousel, card flip, project loading logic
│   │   └── toggle-mode.js  # Dark mode functionality
│   ├── data/
│   │   └── mobile-projects.json  # Mobile app portfolio data
│   ├── img/
│   │   ├── projects/       # Project screenshots grouped by type and project name
│   │   ├── profile.jpeg    # Profile picture
│   │   ├── favicon.png     # Site favicon
│   │   └── *.png/webp      # Store badges and app icons
│   └── files/
│       └── Mar Jude Arguelles.pdf  # Resume file
```

## Key Features & Architecture

### 1. Dark Mode System
- Toggled via header button, state persisted to localStorage
- CSS dark: prefix classes in Tailwind for styling variants
- Initialization in `toggle-mode.js` and `main.js` to prevent flash

### 2. Carousel Component
- **Web Projects Carousel**: Auto-scrolling carousel for featured projects
- **Mobile Projects Carousel**: Dynamic carousel built from `mobile-projects.json`
- Features:
  - Auto-scroll that pauses on hover
  - Previous/Next button navigation
  - Touch/swipe support for mobile devices
  - Auto-scroll resumes when cards are deselected

### 3. Mobile Project Cards (3D Flip)
- Data-driven: dynamically generated from JSON in `loadApps()`
- Front shows: app logo, name, description, tech stack, store badges
- Back shows: app screenshots in a scrollable/carousel view
- Logic:
  - Click/tap to flip between front/back
  - Touch swipe detection distinguishes between flip tap (< 30px movement) and carousel swipe
  - Flipped state stored in `.flipped` class on card element
  - Auto-scroll pauses while card is flipped

### 4. Animation System
- Intersection Observer triggers fade-in animations for sections
- `.fade-in` elements start off-screen with opacity 0
- `.show` class applied when element becomes visible
- Custom 3D transform styles in `style.css` for flip card perspective

## Development Tasks

### Viewing the Site
Open `index.html` directly in a browser. No local server needed for basic development, but a simple HTTP server recommended for reliable asset loading:
```bash
# Option 1: Python (built-in)
python3 -m http.server 8000

# Option 2: Node.js (if installed)
npx http-server

# Option 3: PHP (if installed)
php -S localhost:8000
```
Then navigate to `http://localhost:8000`

### Adding Mobile Projects
1. Create a new folder in `assets/img/projects/mobile/{project-name}/`
2. Add project logo and screenshots to that folder
3. Add entry to `assets/data/mobile-projects.json` with:
   - `name`: Project display name
   - `description`: Project overview
   - `languages`: Tech stack
   - `folder`: Folder name from step 1
   - `logo`: Logo filename
   - `screenshots`: Array of screenshot filenames

The carousel will automatically load the new project on page reload.

### Modifying Sections
- **Hero Section** (lines 37–76): Main title, subtitle, buttons, profile image
- **About Section** (lines 78–91): Experience description and tech stack
- **Experience Section** (lines 93+): Employment history entries
- **Projects Section**: Split into web projects carousel and mobile projects carousel
- **Contact Section**: Links and call-to-action

### Styling Guidelines
- **Responsive**: Use Tailwind's `md:` prefix for tablet/desktop changes, default mobile-first
- **Dark Mode**: Use `dark:` prefix for dark mode variants (e.g., `dark:bg-gray-800`)
- **Custom Styles**: Place in `assets/css/style.css`; keep Tailwind classes in HTML
- **Colors**: Primary accent is blue-600, use for links and calls-to-action

### Carousel/Card Behavior Notes
- **Carousel Auto-interval**: Configurable per carousel (5000ms web, 6000ms mobile)
- **Swipe Threshold**: 50px for carousel, 30px for card flip detection (see `main.js`)
- **Flip Trigger**: Mobile devices use tap/click; desktop uses hover
- **Height on Mobile**: Mobile card height auto-adjusts based on content; use CSS Grid or padding to align

## Common Patterns

### Event Delegation for Dynamically Added Cards
Since mobile cards are inserted via `insertAdjacentHTML`, flip logic is wrapped in `initMobileCards()` to attach listeners to new DOM nodes. This function is called after carousel init.

### Intersection Observer
Used for fade-in animations. Elements with `.fade-in` class are observed; `.show` class triggers CSS transition when 10% of element is visible.

### Smooth Scrolling
`scroll-smooth` class on `<html>` enables smooth anchor scrolling for navigation links.

## Deployment

The site is static and ready to deploy to any static host (GitHub Pages, Netlify, Vercel, etc.). The `CNAME` file (if present in git) indicates a custom domain is configured.

## Performance Notes

- Tailwind CSS loaded via CDN; consider self-hosting for production
- Images should be optimized (WebP preferred for new additions, with PNG fallback)
- Lazy-load images for non-critical sections if needed
- Intersection Observer is throttled by browser; no explicit debouncing needed

## Browser Support

Modern browsers (Chrome, Firefox, Safari, Edge). CSS features used:
- `transform-style: preserve-3d` and `rotateY()` for 3D flip
- CSS Grid & Flexbox for layout
- CSS custom properties (via Tailwind)
- Intersection Observer API (fallback not implemented)
