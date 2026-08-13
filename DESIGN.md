# DESIGN.md - Design System Documentation

## Executive Theme Summary
- **Primary Palette**: Blue - Purple - White (`ฟ้า-ม่วง-ขาว`) Light Theme
- **Background**: High-contrast Pearl White (`#F8FAFC`) with Crisp Pure White Surface (`#FFFFFF`)
- **Primary Brand Colors**:
  - Sky Blue Accent: `#0284C7`
  - Violet Purple Accent: `#7C3AED`
- **Typography**: LINE Seed Sans TH (`LINESeedSansTH`)
- **Reading Contrast**: 100% High-Contrast Dark Slate Headings (`#0F172A`) & Dark Slate Body (`#334155`)
- **Card Design**: Pure White Glassmorphism Cards with Soft Purple Glow Borders & Shadows
- **Footer Anchor**: Deep Dark Slate Anchor (`#0F172A`) with Pure White Headings and Slate Links

## Color Tokens
```css
--bg-dark: #F8FAFC;
--bg-card: #FFFFFF;
--primary-blue: #0284C7;
--accent-purple: #7C3AED;
--text-white: #0F172A;
--text-slate: #334155;
--text-muted: #64748B;
--border-glass: rgba(124, 58, 237, 0.18);
```

## Responsive Layout Rules
- **Notebook & Laptop Displays (13-15", 1366x768 / 1536x864)**: Fluid container padding `clamp(16px, 3.5vw, 40px)` and navbar scaled to `96%` width with `white-space: nowrap` to prevent text wrapping distortion.
- **Mobile Screens (< 991px)**: Full-width vertical navigation drawer, fluid typography scaling, and no overflow on long links or license badges.
