<!doctype html>
<html>

<head>
  <meta charset=utf8>
  <meta name=viewport content="width=device-width,initial-scale=1,viewport-fit=cover">
  <style>
    :root {
      color-scheme: light;
      box-sizing: border-box;
      padding-top: env(safe-area-inset-top, 0px);
      padding-bottom: env(safe-area-inset-bottom, 0px)
    }

    html {
      scroll-padding-top: env(safe-area-inset-top, 0px)
    }

    body {
      margin: 0;
      padding: 0;
      font: 14px -apple-system, BlinkMacSystemFont, sans-serif;
      background: #fff;
      color: #000
    }

    img {
      max-width: 100%
    }

    [hidden]:not([hidden=until-found i]) {
      display: none !important
    }
  </style>
</head>

<body>
  <!DOCTYPE html>
  <html lang="fa" dir="rtl">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>پارسا صابر | توسعه‌دهنده فول‌استک · Laravel، Vue 3 و وردپرس</title>
    <meta name="description"
      content="نمونه‌کار پارسا صابر، توسعه‌دهنده فول‌استک با تخصص در Laravel، Vue 3، Vuetify، وردپرس و ووکامرس.">
    <script>
      (function () {
        var l = 'fa'; try {
          var q = new URLSearchParams(location.search).get('lang'); var s = null; try {s = localStorage.getItem('lang')} catch (e) { }
          l = (q === 'en' || q === 'fa') ? q : ((s === 'en' || s === 'fa') ? s : 'fa')
        } catch (e) { }
        var d = document.documentElement; d.lang = l; d.dir = (l === 'en') ? 'ltr' : 'rtl'; window.__L = l;
      })();
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&family=Vazirmatn:wght@400;500;700;800;900&display=swap"
      rel="stylesheet">
    <style>
      :root {
        box-sizing: border-box;
        padding-top: env(safe-area-inset-top, 0px);
        padding-bottom: env(safe-area-inset-bottom, 0px);
        --bg: #F3F6F5;
        --surface: #FFFFFF;
        --ink: #101A33;
        --muted: #566178;
        --line: #D9E1E1;
        --lapis: #16254A;
        --lapis-2: #1E3263;
        --on-lapis: #EAF0F9;
        --on-lapis-muted: #A9B7D3;
        --turq: #0B7F7D;
        --turq-bright: #35C7C1;
        --turq-soft: #DCF1EF;
        --saffron: #C98515;
        --saffron-bright: #F0B458;
        --saffron-soft: #FBEFD6;
        --code-bg: #0F1B38;
        --code-ink: #DCE6F7;
        --track: rgba(110, 124, 150, .2);
        --shadow: 0 1px 0 rgba(16, 26, 51, .04), 0 14px 34px -18px rgba(16, 26, 51, .28);
      }

      @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]) {
          --bg: #0B1121;
          --surface: #131B33;
          --ink: #E8EEF8;
          --muted: #9BA7C2;
          --line: #25304F;
          --lapis: #09101F;
          --lapis-2: #101A33;
          --turq: #35C7C1;
          --turq-soft: #10303A;
          --saffron: #F0B458;
          --saffron-soft: #352B18;
          --code-bg: #0A1226;
          --shadow: 0 1px 0 rgba(255, 255, 255, .03), 0 14px 34px -18px rgba(0, 0, 0, .7);
        }
      }

      :root[data-theme="dark"] {
        --bg: #0B1121;
        --surface: #131B33;
        --ink: #E8EEF8;
        --muted: #9BA7C2;
        --line: #25304F;
        --lapis: #09101F;
        --lapis-2: #101A33;
        --turq: #35C7C1;
        --turq-soft: #10303A;
        --saffron: #F0B458;
        --saffron-soft: #352B18;
        --code-bg: #0A1226;
        --shadow: 0 1px 0 rgba(255, 255, 255, .03), 0 14px 34px -18px rgba(0, 0, 0, .7);
      }

      html {
        background: var(--lapis);
        scroll-padding-top: calc(env(safe-area-inset-top, 0px) + 76px);
        scroll-behavior: smooth
      }

      *,
      *::before,
      *::after {
        box-sizing: inherit
      }

      body {
        margin: 0;
        background: var(--bg);
        color: var(--ink);
        font-family: "Vazirmatn", Tahoma, "Segoe UI", sans-serif;
        font-size: 16px;
        line-height: 1.85;
        -webkit-font-smoothing: antialiased
      }

      a {
        color: inherit;
        text-decoration: none
      }

      h1,
      h2,
      h3,
      h4,
      p {
        margin: 0
      }

      ul {
        margin: 0;
        padding: 0;
        list-style: none
      }

      button {
        font: inherit;
        color: inherit;
        cursor: pointer
      }

      :focus-visible {
        outline: 3px solid var(--saffron-bright);
        outline-offset: 3px;
        border-radius: 6px
      }

      .wrap {
        width: min(1120px, 100% - 40px);
        margin-inline: auto
      }

      .ltr {
        direction: ltr;
        unicode-bidi: isolate
      }

      /* language */
      html[lang="fa"] [data-l="en"],
      html[lang="en"] [data-l="fa"] {
        display: none !important
      }

      html[lang="en"] body {
        font-family: "Manrope", "Vazirmatn", "Segoe UI", system-ui, sans-serif;
        line-height: 1.65
      }

      html[lang="en"] :is(h1, h2, h3) {
        line-height: 1.25
      }

      html[lang="en"] .hero h1,
      html[lang="en"] .head h2 {
        letter-spacing: -.02em
      }

      html[lang="en"] .btn svg {
        transform: scaleX(-1)
      }

      html[lang="en"] .chips {
        justify-content: flex-start
      }

      html[lang="en"] .links a:hover {
        transform: translateY(-2px)
      }

      html[lang="en"] .hero::before {
        -webkit-mask-image: radial-gradient(ellipse at 80% 40%, #000 0%, transparent 70%);
        mask-image: radial-gradient(ellipse at 80% 40%, #000 0%, transparent 70%)
      }

      /* header */
      .top {
        position: sticky;
        top: env(safe-area-inset-top, 0px);
        z-index: 50;
        background: color-mix(in srgb, var(--lapis) 92%, transparent);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid rgba(255, 255, 255, .08);
        color: var(--on-lapis)
      }

      .top .wrap {
        display: flex;
        align-items: center;
        gap: 24px;
        height: 62px
      }

      .brand {
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 800
      }

      .brand i {
        display: grid;
        place-items: center;
        width: 34px;
        height: 34px;
        border-radius: 10px;
        background: var(--saffron-bright);
        color: #16254A;
        font-style: normal;
        font-weight: 900;
        font-size: 18px
      }

      .top nav {
        display: flex;
        gap: 4px;
        margin-inline-start: auto
      }

      .top nav a {
        padding: 6px 14px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 500;
        color: var(--on-lapis-muted);
        transition: color .2s, background .2s
      }

      .top nav a:hover {
        color: #fff
      }

      .top nav a.on {
        background: rgba(255, 255, 255, .1);
        color: #fff
      }

      .top nav a.cta-s {
        background: var(--saffron-bright);
        color: #16254A;
        font-weight: 700
      }

      .ctrl {
        display: flex;
        gap: 10px;
        align-items: center
      }

      .tbtn {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, .18);
        background: transparent;
        display: grid;
        place-items: center;
        color: var(--on-lapis)
      }

      .lbtn {
        min-width: 46px;
        height: 38px;
        padding: 0 12px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, .28);
        background: transparent;
        color: #fff;
        font-weight: 700;
        font-size: 13px
      }

      .tbtn:hover,
      .lbtn:hover {
        background: rgba(255, 255, 255, .1)
      }

      /* hero */
      .hero {
        position: relative;
        background: var(--lapis);
        color: var(--on-lapis);
        overflow: hidden;
        padding: 68px 0 76px
      }

      .hero::before {
        content: "";
        position: absolute;
        inset: 0;
        opacity: .09;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 64 64'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1'%3E%3Crect x='14' y='14' width='36' height='36'/%3E%3Crect x='14' y='14' width='36' height='36' transform='rotate(45 32 32)'/%3E%3C/g%3E%3C/svg%3E");
        -webkit-mask-image: radial-gradient(ellipse at 20% 40%, #000 0%, transparent 70%);
        mask-image: radial-gradient(ellipse at 20% 40%, #000 0%, transparent 70%)
      }

      .hero .wrap {
        position: relative;
        display: grid;
        grid-template-columns: 1.2fr .8fr;
        gap: 56px;
        align-items: center
      }

      .pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 4px 14px;
        border: 1px solid rgba(255, 255, 255, .2);
        border-radius: 999px;
        font-size: 14px;
        color: var(--on-lapis-muted)
      }

      .pill b {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        background: var(--turq-bright);
        box-shadow: 0 0 0 4px rgba(53, 199, 193, .2)
      }

      .hero h1 {
        margin: 20px 0 14px;
        font-size: clamp(2.1rem, 4.8vw, 3.6rem);
        line-height: 1.35;
        font-weight: 900;
        color: #fff
      }

      .hero .lead {
        max-width: 32em;
        font-size: 1.08rem;
        color: var(--on-lapis-muted)
      }

      .hero .lead strong {
        color: #fff;
        font-weight: 700
      }

      .actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 28px
      }

      .btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 24px;
        border-radius: 12px;
        font-weight: 700;
        border: 1px solid transparent;
        transition: transform .15s, background .2s
      }

      .btn.pri {
        background: var(--saffron-bright);
        color: #16254A
      }

      .btn.pri:hover {
        background: #f6c773
      }

      .btn.sec {
        border-color: rgba(255, 255, 255, .28);
        color: #fff
      }

      .btn.sec:hover {
        background: rgba(255, 255, 255, .08)
      }

      .journey {
        background: var(--lapis-2);
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: 20px;
        padding: 22px 22px 20px;
        box-shadow: 0 30px 60px -30px rgba(0, 0, 0, .6)
      }

      .journey h2 {
        font-size: 13px;
        font-weight: 500;
        color: var(--on-lapis-muted);
        margin-bottom: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px
      }

      .journey h2 code {
        font-family: ui-monospace, Menlo, Consolas, monospace;
        font-size: 12px;
        color: var(--turq-bright);
        direction: ltr;
        flex: none
      }

      .layer {
        position: relative;
        display: grid;
        grid-template-columns: 40px 1fr;
        gap: 14px;
        padding-bottom: 18px;
        align-items: center
      }

      .layer:last-child {
        padding-bottom: 0
      }

      .layer .node {
        position: relative;
        z-index: 1;
        display: grid;
        place-items: center;
        width: 40px;
        height: 40px;
        border-radius: 11px;
        border: 1px solid rgba(255, 255, 255, .14);
        color: var(--on-lapis-muted);
        background: var(--lapis-2);
        animation: light .6s forwards;
        animation-delay: var(--d)
      }

      .layer .rail {
        position: absolute;
        top: 40px;
        bottom: 0;
        inset-inline-start: 19px;
        width: 2px;
        background: rgba(255, 255, 255, .1);
        overflow: hidden
      }

      .layer .rail::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(var(--turq-bright), var(--saffron-bright));
        transform: scaleY(0);
        transform-origin: top;
        animation: fill .8s forwards;
        animation-delay: calc(var(--d) + .4s)
      }

      .layer h3 {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        display: flex;
        gap: 10px;
        align-items: baseline;
        flex-wrap: wrap
      }

      .layer h3 small {
        font-family: ui-monospace, Menlo, Consolas, monospace;
        font-size: 12px;
        font-weight: 500;
        color: var(--turq-bright);
        direction: ltr
      }

      @keyframes light {
        to {
          background: var(--turq-bright);
          border-color: var(--turq-bright);
          color: #0B2230;
          box-shadow: 0 0 0 6px rgba(53, 199, 193, .16)
        }
      }

      @keyframes fill {
        to {
          transform: scaleY(1)
        }
      }

      /* sections */
      section {
        padding: 72px 0
      }

      .head {
        max-width: 42em;
        margin-bottom: 32px
      }

      .head h2 {
        font-size: clamp(1.6rem, 3.1vw, 2.2rem);
        font-weight: 900;
        line-height: 1.5
      }

      .head p {
        margin-top: 8px;
        color: var(--muted)
      }

      /* skills */
      .skills-bg {
        background: var(--surface);
        border-block: 1px solid var(--line)
      }

      .sk-bar {
        display: flex;
        flex-wrap: wrap;
        gap: 12px 24px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 22px
      }

      .legend {
        display: flex;
        flex-wrap: wrap;
        gap: 6px 20px;
        font-size: 13.5px;
        color: var(--muted)
      }

      .legend>span {
        display: flex;
        align-items: center;
        gap: 8px
      }

      .sw {
        display: inline-block;
        width: 22px;
        height: 8px;
        border-radius: 8px;
        flex: none
      }

      .sw.d {
        background: var(--turq)
      }

      .sw.a {
        background: var(--saffron-bright)
      }

      .seg {
        display: inline-flex;
        background: var(--bg);
        border: 1px solid var(--line);
        border-radius: 999px;
        padding: 4px
      }

      .seg button {
        border: 0;
        background: transparent;
        padding: 5px 16px;
        border-radius: 999px;
        font-size: 14px;
        font-weight: 500;
        color: var(--muted)
      }

      .seg button[aria-pressed="true"] {
        background: var(--lapis);
        color: #fff;
        font-weight: 700
      }

      :root[data-theme="dark"] .seg button[aria-pressed="true"] {
        background: var(--turq);
        color: #08202a
      }

      @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]) .seg button[aria-pressed="true"] {
          background: var(--turq);
          color: #08202a
        }
      }

      .sk-layout {
        display: grid;
        grid-template-columns: 270px 1fr;
        gap: 34px;
        align-items: start
      }

      .tabs {
        display: grid;
        gap: 8px;
        position: sticky;
        top: calc(env(safe-area-inset-top, 0px) + 80px)
      }

      .tab {
        display: block;
        width: 100%;
        text-align: start;
        border: 1px solid var(--line);
        background: var(--bg);
        padding: 12px 14px 12px;
        border-radius: 14px;
        transition: border-color .2s, background .2s
      }

      .tab:hover {
        border-color: var(--turq)
      }

      .tab[aria-selected="true"] {
        background: var(--lapis);
        border-color: var(--lapis);
        color: #fff
      }

      :root[data-theme="dark"] .tab[aria-selected="true"] {
        background: var(--lapis-2);
        border-color: var(--turq)
      }

      @media (prefers-color-scheme: dark) {
        :root:not([data-theme="light"]) .tab[aria-selected="true"] {
          background: var(--lapis-2);
          border-color: var(--turq)
        }
      }

      .tab strong {
        display: block;
        font-size: .98rem;
        font-weight: 800;
        line-height: 1.5
      }

      .tab em {
        display: block;
        margin-top: 5px;
        font-style: normal;
        font-size: 12px;
        opacity: .7;
        line-height: 1.5
      }

      .tab .t1 {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        gap: 10px
      }

      .tab .t1 b {
        font-size: 15px;
        font-weight: 800;
        font-variant-numeric: tabular-nums
      }

      .tab .mbar {
        display: block;
        position: relative;
        height: 9px;
        margin-top: 9px;
        border-radius: 9px;
        background: var(--track);
        overflow: hidden
      }

      .tab .mbar i {
        position: absolute;
        inset-block: 0;
        inset-inline-start: 0;
        width: 0;
        border-radius: 9px;
        background: var(--turq);
        transition: width 1s cubic-bezier(.2, .8, .2, 1)
      }

      .tab[aria-selected="true"] .mbar {
        background: rgba(255, 255, 255, .2)
      }

      .tab[aria-selected="true"] .mbar i {
        background: var(--turq-bright)
      }

      .panel-head h3 {
        font-size: 1.35rem;
        font-weight: 900
      }

      .panel-head p {
        color: var(--muted);
        font-size: .93rem
      }


      /* projects */
      .cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px
      }

      .card {
        display: flex;
        flex-direction: column;
        background: var(--surface);
        border: 1px solid var(--line);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow)
      }

      .card svg {
        display: block;
        width: 100%;
        height: auto
      }

      .card .in {
        display: flex;
        flex-direction: column;
        gap: 6px;
        padding: 20px 22px 22px;
        flex: 1
      }

      .card h3 {
        font-size: 1.25rem;
        font-weight: 900;
        line-height: 1.5
      }

      .card .kind {
        color: var(--muted);
        font-size: .9rem
      }

      .card ul {
        margin-top: 8px;
        display: grid;
        gap: 8px
      }

      .card li {
        display: grid;
        grid-template-columns: 16px 1fr;
        gap: 8px;
        font-size: .92rem;
        line-height: 1.75;
        color: var(--muted)
      }

      .card li svg {
        color: var(--turq);
        margin-top: 6px;
        width: 16px
      }

      .chips {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: auto;
        padding-top: 14px;
        direction: ltr;
        justify-content: flex-end
      }

      .chip {
        font-family: ui-monospace, Menlo, Consolas, monospace;
        font-size: 12px;
        padding: 1px 9px;
        border-radius: 7px;
        border: 1px solid var(--line);
        color: var(--ink)
      }

      /* challenges */
      .chal-bg {
        background: var(--lapis);
        color: var(--on-lapis)
      }

      .chal-bg .head h2 {
        color: #fff
      }

      .chal-bg .head p {
        color: var(--on-lapis-muted)
      }

      details {
        border-top: 1px solid rgba(255, 255, 255, .14)
      }

      details:last-of-type {
        border-bottom: 1px solid rgba(255, 255, 255, .14)
      }

      summary {
        list-style: none;
        cursor: pointer;
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 18px;
        align-items: center;
        padding: 18px 4px
      }

      summary::-webkit-details-marker {
        display: none
      }

      summary h3 {
        font-size: 1.08rem;
        font-weight: 800;
        color: #fff;
        line-height: 1.6
      }

      summary span.sub {
        display: block;
        font-weight: 400;
        font-size: .88rem;
        color: var(--on-lapis-muted)
      }

      summary .plus {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, .25);
        display: grid;
        place-items: center;
        transition: transform .25s, background .2s
      }

      details[open] summary .plus {
        transform: rotate(45deg);
        background: var(--saffron-bright);
        color: #16254A;
        border-color: var(--saffron-bright)
      }

      .cbody {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 26px;
        padding: 2px 4px 24px
      }

      .cbody h4 {
        font-size: 13px;
        font-weight: 700;
        color: var(--turq-bright);
        margin-bottom: 2px
      }

      .cbody p {
        color: var(--on-lapis-muted);
        font-size: .93rem
      }

      .cbody pre {
        grid-column: 1/-1;
        margin: 0;
        direction: ltr;
        text-align: left;
        background: var(--code-bg);
        color: var(--code-ink);
        border: 1px solid rgba(255, 255, 255, .08);
        border-radius: 12px;
        padding: 14px 16px;
        overflow-x: auto;
        font: 13px/1.8 ui-monospace, Menlo, Consolas, monospace
      }

      pre .k {
        color: #7FD6D2
      }

      pre .c {
        color: #7385A8
      }

      pre .s {
        color: #F0B458
      }

      /* contact — redesigned */
      .contact {
        position: relative;
        padding: 84px 0;
        background:
          radial-gradient(circle at 12% 18%, color-mix(in srgb, var(--turq) 22%, transparent), transparent 55%),
          radial-gradient(circle at 88% 82%, color-mix(in srgb, var(--saffron) 20%, transparent), transparent 55%),
          var(--lapis);
        color: var(--on-lapis);
        overflow: hidden;
        isolation: isolate
      }

      .contact::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        opacity: .07;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 48 48'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1'%3E%3Ccircle cx='24' cy='24' r='9'/%3E%3Cpath d='M24 4v6M24 38v6M4 24h6M38 24h6'/%3E%3C/g%3E%3C/svg%3E");
        -webkit-mask-image: radial-gradient(ellipse at 50% 50%, #000 0%, transparent 75%);
        mask-image: radial-gradient(ellipse at 50% 50%, #000 0%, transparent 75%)
      }

      .cbox {
        display: grid;
        grid-template-columns: 1fr 1.05fr;
        gap: 48px;
        align-items: center
      }

      .cbox-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 5px 14px;
        border: 1px solid rgba(255, 255, 255, .22);
        border-radius: 999px;
        font-size: 13px;
        font-weight: 600;
        color: var(--turq-bright);
        background: rgba(53, 199, 193, .08)
      }

      .cbox h2 {
        margin: 18px 0 14px;
        font-size: clamp(1.7rem, 3.4vw, 2.5rem);
        font-weight: 900;
        line-height: 1.45;
        color: #fff
      }

      .cbox-sub {
        max-width: 30em;
        color: var(--on-lapis-muted);
        font-size: 1rem
      }

      .links {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px
      }

      .link-card {
        position: relative;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 18px;
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, .14);
        background: linear-gradient(180deg, rgba(255, 255, 255, .07), rgba(255, 255, 255, .02));
        color: var(--on-lapis);
        overflow: hidden;
        transition: transform .25s cubic-bezier(.2, .8, .2, 1), border-color .25s, background .25s, box-shadow .25s
      }

      .link-card::after {
        content: "";
        position: absolute;
        inset-inline-start: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(var(--turq-bright), var(--saffron-bright));
        transform: scaleY(0);
        transform-origin: top;
        transition: transform .3s ease
      }

      .link-card:hover {
        transform: translateY(-4px);
        border-color: rgba(53, 199, 193, .5);
        background: linear-gradient(180deg, rgba(53, 199, 193, .14), rgba(255, 255, 255, .03));
        box-shadow: 0 18px 40px -22px rgba(53, 199, 193, .8)
      }

      .link-card:hover::after {
        transform: scaleY(1)
      }

      .link-ic {
        flex: none;
        display: grid;
        place-items: center;
        width: 44px;
        height: 44px;
        border-radius: 13px;
        background: rgba(255, 255, 255, .08);
        color: var(--turq-bright);
        transition: background .25s, color .25s, transform .25s
      }

      .link-card:hover .link-ic {
        background: var(--turq-bright);
        color: #08202a;
        transform: rotate(-6deg) scale(1.06)
      }

      .link-txt {
        display: flex;
        flex-direction: column;
        gap: 2px;
        min-width: 0;
        flex: 1
      }

      .link-txt b {
        font-size: 15px;
        font-weight: 800;
        color: #fff;
        direction: ltr;
        unicode-bidi: isolate;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
      }

      .link-txt small {
        font-size: 12.5px;
        color: var(--on-lapis-muted)
      }

      .link-arrow {
        flex: none;
        color: var(--on-lapis-muted);
        transition: transform .25s, color .25s
      }

      .link-card:hover .link-arrow {
        color: var(--saffron-bright);
        transform: translateX(4px)
      }

      html[lang="fa"] .link-arrow {
        transform: scaleX(-1)
      }

      html[lang="fa"] .link-card:hover .link-arrow {
        transform: scaleX(-1) translateX(4px)
      }

      footer {
        background: var(--lapis);
        color: var(--on-lapis-muted);
        padding: 20px 0;
        font-size: 13.5px
      }

      footer .wrap {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 8px
      }

      @media (max-width:980px) {

        .hero .wrap,
        .sk-layout {
          grid-template-columns: 1fr
        }

        .hero {
          padding: 48px 0 56px
        }

        .hero .wrap {
          gap: 36px
        }

        .tabs {
          position: static;
          display: flex;
          overflow-x: auto;
          padding-bottom: 6px;
          gap: 10px
        }

        .tab {
          min-width: 210px;
          flex: none
        }

        .cards {
          grid-template-columns: 1fr 1fr
        }

        section {
          padding: 56px 0
        }

        .cbox {
          grid-template-columns: 1fr;
          gap: 34px
        }

        .links {
          grid-template-columns: 1fr 1fr
        }
      }

      @media (max-width:720px) {
        .top nav a:not(.cta-s) {
          display: none
        }

        .top .wrap {
          gap: 12px
        }

        .rows,
        .cbody,
        .cards,
        .links {
          grid-template-columns: 1fr
        }

        .contact {
          padding: 60px 0
        }
      }

      @media print {

        .top,
        .tbtn,
        .lbtn,
        .seg,
        .actions {
          display: none !important
        }

        html,
        body {
          background: #fff !important
        }

        .hero,
        .chal-bg,
        footer,
        .contact {
          background: #fff !important;
          color: #000 !important
        }

        .hero::before,
        .contact::before {
          display: none
        }

        .hero h1,
        .chal-bg h2,
        summary h3,
        .cbox h2 {
          color: #000 !important
        }

        .cbox-sub,
        .link-txt small {
          color: #333 !important
        }

        .link-card {
          border-color: #ccc !important;
          background: #fff !important;
          box-shadow: none !important;
          color: #000 !important
        }

        .link-txt b {
          color: #000 !important
        }

        .link-ic {
          background: #f2f2f2 !important;
          color: #0B7F7D !important
        }

        details>* {
          display: block
        }

        details .cbody {
          display: grid
        }

        section {
          padding: 24px 0;
          break-inside: avoid-page
        }

        .layer .node {
          animation: none !important
        }
      }

      @media (prefers-reduced-motion:reduce) {
        html {
          scroll-behavior: auto
        }

        * {
          animation-duration: .001ms !important;
          animation-delay: 0s !important;
          transition-duration: .001ms !important
        }
      }

      .tab .t1 b {
        font-size: 13px;
        font-weight: 700;
        color: var(--muted)
      }

      .tab[aria-selected="true"] .t1 b {
        color: var(--on-lapis-muted)
      }

      .sk {
        padding: 14px 0 13px;
        border-bottom: 1px solid var(--line)
      }

      .sk .s1 {
        display: flex;
        justify-content: space-between;
        align-items: baseline;
        gap: 12px
      }

      .sk h4 {
        font-size: .98rem;
        font-weight: 800;
        direction: ltr;
        unicode-bidi: isolate
      }

      .sk .lab {
        font-size: 12.5px;
        font-weight: 700;
        color: var(--turq);
        white-space: nowrap
      }

      .sk.a .lab {
        color: var(--saffron)
      }

      .seg4 {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 4px;
        margin-top: 8px
      }

      .seg4 i {
        height: 8px;
        border-radius: 8px;
        background: var(--track)
      }

      .seg4 i.on {
        background: var(--turq)
      }

      .sk.a .seg4 i.on {
        background: var(--saffron-bright)
      }

      .sk small {
        display: block;
        margin-top: 6px;
        color: var(--muted);
        font-size: 12.5px;
        line-height: 1.6
      }

      .ev {
        display: flex;
        flex-wrap: wrap;
        gap: 6px;
        margin-top: 6px
      }

      .evc {
        font-size: 12px;
        padding: 0 9px;
        border-radius: 999px;
        border: 1px solid var(--line);
        color: var(--ink);
        line-height: 22px;
        background: var(--bg)
      }

      a.evc:hover {
        border-color: var(--turq);
        color: var(--turq)
      }

      .ev0 {
        font-size: 12px;
        color: var(--muted);
        font-style: italic
      }

      .lvkey {
        display: inline-flex;
        align-items: center;
        gap: 8px
      }

      .lvkey .seg4 {
        width: 56px;
        margin: 0
      }

      .proof {
        margin-top: 12px;
        padding-top: 12px;
        border-top: 1px dashed var(--line)
      }

      .proof small {
        display: block;
        font-size: 12px;
        color: var(--muted);
        margin-bottom: 6px
      }

      .proof div {
        display: flex;
        flex-wrap: wrap;
        gap: 6px
      }

      .pf {
        font-size: 12px;
        font-weight: 700;
        padding: 0 9px;
        border-radius: 999px;
        line-height: 22px;
        background: var(--turq-soft);
        color: var(--turq)
      }

      .pf.l1 {
        background: var(--saffron-soft);
        color: var(--saffron)
      }

      .card {
        scroll-margin-top: 84px
      }
    </style>
  </head>

  <body>

    <header class="top">
      <div class="wrap">
        <a class="brand" href="#top" data-aria-fa="پارسا صابر — بازگشت به بالای صفحه"
          data-aria-en="Parsa Saber — back to top"><i><span data-l="fa">PS</span><span
              data-l="en">PS</span></i><span><span data-l="fa">پارسا صابر</span><span data-l="en">Parsa
              Saber</span></span></a>
        <nav data-aria-fa="منوی اصلی" data-aria-en="Main menu">
          <a href="#skills"><span data-l="fa">مهارت‌ها</span><span data-l="en">Skills</span></a>
          <a href="#projects"><span data-l="fa">پروژه‌ها</span><span data-l="en">Projects</span></a>
          <a href="#contact" class="cta-s"><span data-l="fa">تماس</span><span data-l="en">Contact</span></a>
        </nav>
        <div class="ctrl">
          <button class="lbtn" id="lang" type="button" data-aria-fa="Switch to English"
            data-aria-en="تغییر زبان به فارسی"><span data-l="fa">EN</span><span data-l="en">فا</span></button>
          <button class="tbtn" id="theme" type="button" data-aria-fa="تغییر حالت روشن و تاریک"
            data-aria-en="Toggle light and dark mode">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M21 12.8A9 9 0 1 1 11.2 3a7 7 0 0 0 9.8 9.8z" />
            </svg>
          </button>
        </div>
      </div>
    </header>

    <main id="top">
      <div class="hero">
        <div class="wrap">
          <div>
            <span class="pill"><b></b><span data-l="fa">توسعه‌دهنده فول‌استک</span><span data-l="en">Full-stack
                developer · Iran</span></span>
            <h1><span data-l="fa">از جدول دیتابیس تا آخرین پیکسل رابط کاربری.</span><span data-l="en">From the database
                table to the last pixel of the UI.</span></h1>
            <p class="lead"><span data-l="fa">من پارسا صابر هستم؛ توسعه‌دهنده وب با تمرکز بر ساخت اپلیکیشن‌های تحت وب، توسعه بک‌اند و پیاده‌سازی راهکارهای نرم‌افزاری متناسب با نیاز کسب‌وکارها.</span><span data-l="en">I'm <strong>Parsa
                  Saber</strong>. I build web products with <strong>Laravel</strong> and <strong>Vue 3</strong>,
                customise <strong>WordPress and WooCommerce</strong> stores, and design Persian and right-to-left
                interfaces with care.</span></p>
            <div class="actions">
              <a class="btn pri" href="#skills"><span data-l="fa">مشاهده مهارت‌ها</span><span data-l="en">See my
                  skills</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
                  stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M19 12H5M11 6l-6 6 6 6" />
                </svg></a>
              <a class="btn sec" href="#contact"><span data-l="fa">تماس با من</span><span data-l="en">Get in
                  touch</span></a>
            </div>
          </div>

          <aside class="journey" data-aria-fa="مسیر یک درخواست در محصولاتی که ساخته‌ام"
            data-aria-en="The path of a request through the products I've built">
            <h2><span><span data-l="fa">مسیر یک درخواست</span><span data-l="en">One request, end to
                  end</span></span><code>request → report</code></h2>
            <div class="layer" style="--d:.5s">
              <div class="node"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <rect x="3" y="4" width="18" height="14" rx="2" />
                  <path d="M8 21h8M12 18v3" />
                </svg></div>
              <div>
                <h3><span><span data-l="fa">مرورگر</span><span data-l="en">Browser</span></span><small>Vue 3 +
                    Vuetify</small></h3>
              </div>
              <span class="rail"></span>
            </div>
            <div class="layer" style="--d:1.4s">
              <div class="node"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                </svg></div>
              <div>
                <h3><span>API</span><small>Laravel + Sanctum</small></h3>
              </div>
              <span class="rail"></span>
            </div>
            <div class="layer" style="--d:2.3s">
              <div class="node"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <ellipse cx="12" cy="5" rx="8" ry="3" />
                  <path d="M4 5v6c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 11v6c0 1.7 3.6 3 8 3s8-1.3 8-3v-6" />
                </svg></div>
              <div>
                <h3><span><span data-l="fa">داده</span><span data-l="en">Data</span></span><small>MySQL +
                    Eloquent</small></h3>
              </div>
              <span class="rail"></span>
            </div>
            <div class="layer" style="--d:3.2s">
              <div class="node"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M4 20V10M10 20V4M16 20v-8M22 20H2" />
                </svg></div>
              <div>
                <h3><span><span data-l="fa">گزارش</span><span data-l="en">Report</span></span><small>ApexCharts +
                    Excel</small></h3>
              </div>
            </div>
          </aside>
        </div>
      </div>

      <!-- SKILLS -->
      <section id="skills" class="skills-bg">
        <div class="wrap">
          <div class="head">
            <h2><span data-l="fa">مهارت های من</span><span data-l="en">My level in each area, with
                evidence</span></h2>
          </div>

          <div class="sk-bar">
            <div class="legend">
              <span><i class="sw d"></i><span data-l="fa">مستقیم</span><span data-l="en">Direct</span></span>
              <span><i class="sw a"></i><span data-l="fa">مرتبط</span><span data-l="en">Related</span></span>
              <span class="lvkey"><span class="seg4"><i class="on"></i><i></i><i></i><i></i></span><span
                  data-l="fa">مقدماتی</span><span data-l="en">Basic</span></span><span class="lvkey"><span
                  class="seg4"><i class="on"></i><i class="on"></i><i></i><i></i></span><span
                  data-l="fa">متوسط</span><span data-l="en">Intermediate</span></span><span class="lvkey"><span
                  class="seg4"><i class="on"></i><i class="on"></i><i class="on"></i><i></i></span><span
                  data-l="fa">پیشرفته</span><span data-l="en">Advanced</span></span>
            </div>
            <div class="seg" role="group" data-aria-fa="فیلتر مهارت‌ها" data-aria-en="Skill filter">
              <button type="button" data-f="all" aria-pressed="true"><span data-l="fa">همه</span><span
                  data-l="en">All</span></button>
              <button type="button" data-f="d" aria-pressed="false"><span data-l="fa">مستقیم</span><span
                  data-l="en">Direct</span></button>
              <button type="button" data-f="a" aria-pressed="false"><span data-l="fa">مرتبط</span><span
                  data-l="en">Related</span></button>
            </div>
          </div>

          <div class="sk-layout">
            <div class="tabs" role="tablist" data-aria-fa="حوزه‌های مهارتی" data-aria-en="Skill areas"
              aria-orientation="vertical" id="tabs"></div>
            <div id="panel" role="tabpanel" aria-live="polite"></div>
          </div>
        </div>
      </section>

      <!-- PROJECTS -->
      <section id="projects">
        <div class="wrap">
          <div class="head">
            <h2><span data-l="fa">پروژه‌های اصلی</span><span data-l="en">Selected projects</span></h2>
          </div>
          <div class="cards">

            <article class="card" id="proj-kv">
              <svg viewBox="0 0 480 250" role="img" data-aria-fa="نمای ساده‌شده از کاراویزیت"
                data-aria-en="Simplified view of KaraVisit">
                <rect width="480" height="250" fill="#F3F5FA" />
                <rect width="480" height="42" fill="#1D3461" />
                <rect x="22" y="13" width="70" height="16" rx="8" fill="#F47820" />
                <rect x="330" y="17" width="40" height="8" rx="4" fill="#fff" opacity=".5" />
                <rect x="380" y="17" width="40" height="8" rx="4" fill="#fff" opacity=".5" />
                <rect x="430" y="17" width="30" height="8" rx="4" fill="#fff" opacity=".5" />
                <rect x="26" y="62" width="136" height="168" rx="14" fill="#fff" />
                <circle cx="94" cy="104" r="26" fill="#DDE5F3" />
                <circle cx="94" cy="96" r="9" fill="#9FB1D1" />
                <path d="M76 120c4-12 32-12 36 0" fill="#9FB1D1" />
                <circle cx="120" cy="127" r="9" fill="#F47820" />
                <path d="M116 127l3 3 5-6" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round"
                  stroke-linejoin="round" />
                <rect x="52" y="146" width="84" height="9" rx="4.5" fill="#1D3461" />
                <rect x="62" y="162" width="64" height="7" rx="3.5" fill="#B7C3DB" />
                <rect x="46" y="188" width="96" height="26" rx="13" fill="#F47820" />
                <rect x="172" y="62" width="136" height="168" rx="14" fill="#fff" />
                <circle cx="240" cy="104" r="26" fill="#DDE5F3" />
                <circle cx="240" cy="96" r="9" fill="#9FB1D1" />
                <path d="M222 120c4-12 32-12 36 0" fill="#9FB1D1" />
                <rect x="198" y="146" width="84" height="9" rx="4.5" fill="#1D3461" />
                <rect x="208" y="162" width="64" height="7" rx="3.5" fill="#B7C3DB" />
                <rect x="192" y="188" width="96" height="26" rx="13" fill="#F47820" />
                <rect x="318" y="62" width="136" height="168" rx="14" fill="#fff" />
                <circle cx="386" cy="104" r="26" fill="#DDE5F3" />
                <circle cx="386" cy="96" r="9" fill="#9FB1D1" />
                <path d="M368 120c4-12 32-12 36 0" fill="#9FB1D1" />
                <circle cx="412" cy="127" r="9" fill="#F47820" />
                <path d="M408 127l3 3 5-6" stroke="#fff" stroke-width="2" fill="none" stroke-linecap="round"
                  stroke-linejoin="round" />
                <rect x="344" y="146" width="84" height="9" rx="4.5" fill="#1D3461" />
                <rect x="354" y="162" width="64" height="7" rx="3.5" fill="#B7C3DB" />
                <rect x="338" y="188" width="96" height="26" rx="13" fill="#F47820" />
              </svg>
              <div class="in">
                <h3><span data-l="fa">کاراویزیت</span><span data-l="en">KaraVisit</span></h3>
                <p class="kind"><span data-l="fa">نرم افزار مشاوره تلفنی</span><span data-l="en">Phone-consultation
                    marketplace</span></p>
                <ul>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">سایت عمومی، پنل ادمین و API؛ هر دو سمت محصول</span><span
                        data-l="en">Public site, admin panel and API: both sides of the product</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">داشبورد آمار تماس با ApexCharts و گزارش با خروجی Excel</span><span
                        data-l="en">Call-stats dashboard with ApexCharts and Excel-export reports</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">اشتراک فایل امن و صفحه‌ساز JSON-محور</span><span data-l="en">Secure
                        file sharing and a JSON-driven page builder</span></span></li>
                </ul>
                <div class="proof" data-p="kv"></div>
                <div class="chips"><span class="chip">Laravel</span><span class="chip">Vue 3</span><span
                    class="chip">Vuetify</span></div>
              </div>
            </article>

            <article class="card" id="proj-tm">
              <svg viewBox="0 0 480 250" role="img" data-aria-fa="نمای ساده‌شده از تله‌مشاوره"
                data-aria-en="Simplified view of Tele-Moshaver">
                <rect width="480" height="250" fill="#EEF4F4" />
                <rect width="480" height="108" fill="#16254A" />
                <rect x="150" y="24" width="180" height="14" rx="7" fill="#fff" />
                <rect x="190" y="48" width="100" height="9" rx="4.5" fill="#fff" opacity=".5" />
                <rect x="196" y="70" width="88" height="24" rx="12" fill="#F0B458" />
                <rect x="46" y="126" width="180" height="104" rx="16" fill="#fff" stroke="#D3DEDE" />
                <rect x="70" y="146" width="70" height="10" rx="5" fill="#16254A" />
                <rect x="70" y="166" width="100" height="16" rx="6" fill="#0B7F7D" opacity=".18" />
                <g fill="#B7C6C6">
                  <rect x="70" y="194" width="120" height="7" rx="3.5" />
                  <rect x="70" y="210" width="104" height="7" rx="3.5" />
                </g>
                <rect x="254" y="126" width="180" height="104" rx="16" fill="#16254A" />
                <rect x="278" y="146" width="70" height="10" rx="5" fill="#fff" />
                <rect x="278" y="166" width="100" height="16" rx="6" fill="#35C7C1" />
                <g fill="#8FA2C6">
                  <rect x="278" y="194" width="120" height="7" rx="3.5" />
                  <rect x="278" y="210" width="104" height="7" rx="3.5" />
                </g>
              </svg>
              <div class="in">
                <h3><span data-l="fa">تله‌مشاوره</span><span data-l="en">Tele-Moshaver</span></h3>
                <p class="kind"><span data-l="fa">SaaS سفید‌برچسب برای سازمان‌ها</span><span data-l="en">White-label
                    SaaS for organisations</span></p>
                <ul>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">صفحه فرود B2B کامل با قیمت‌گذاری، نظرات و فرم سرنخ</span><span
                        data-l="en">Complete B2B landing page with pricing, testimonials and a lead form</span></span>
                  </li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">طراحی دیتابیس سازمان‌ها و مشاوران با Eloquent</span><span
                        data-l="en">Organisations-to-advisors schema design with Eloquent</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">مقاوم‌سازی سیستم پرداخت در برابر race condition</span><span
                        data-l="en">Hardened the payment system against race conditions</span></span></li>
                </ul>
                <div class="proof" data-p="tm"></div>
                <div class="chips"><span class="chip">Laravel</span><span class="chip">multipay</span><span
                    class="chip">Vuetify</span></div>
              </div>
            </article>

            <article class="card" id="proj-wc">
              <svg viewBox="0 0 480 250" role="img" data-aria-fa="نمای ساده‌شده از کاروسل محصولات"
                data-aria-en="Simplified view of a product carousel">
                <rect width="480" height="250" fill="#F6F3EE" />
                <rect x="30" y="26" width="150" height="12" rx="6" fill="#16254A" />
                <rect x="30" y="56" width="100" height="150" rx="14" fill="#fff" />
                <rect x="42" y="68" width="76" height="74" rx="10" fill="#E8EEF1" />
                <path d="M50 126c8-24 24-30 40-24l20 8c8 3 8 14 0 16H54z" fill="#16254A" />
                <rect x="42" y="154" width="66" height="8" rx="4" fill="#16254A" />
                <rect x="42" y="170" width="44" height="7" rx="3.5" fill="#0B7F7D" />
                <rect x="140" y="56" width="100" height="150" rx="14" fill="#fff" />
                <rect x="152" y="68" width="76" height="74" rx="10" fill="#FBEFD6" />
                <path d="M160 126c8-24 24-30 40-24l20 8c8 3 8 14 0 16h-56z" fill="#C98515" />
                <rect x="152" y="154" width="66" height="8" rx="4" fill="#16254A" />
                <rect x="152" y="170" width="44" height="7" rx="3.5" fill="#0B7F7D" />
                <rect x="250" y="56" width="100" height="150" rx="14" fill="#fff" />
                <rect x="262" y="68" width="76" height="74" rx="10" fill="#DCF1EF" />
                <path d="M270 126c8-24 24-30 40-24l20 8c8 3 8 14 0 16h-56z" fill="#0B7F7D" />
                <rect x="262" y="154" width="66" height="8" rx="4" fill="#16254A" />
                <rect x="262" y="170" width="44" height="7" rx="3.5" fill="#0B7F7D" />
                <rect x="360" y="56" width="100" height="150" rx="14" fill="#fff" opacity=".6" />
                <circle cx="46" cy="226" r="5" fill="#16254A" />
                <circle cx="62" cy="226" r="5" fill="#C9D2D2" />
                <circle cx="78" cy="226" r="5" fill="#C9D2D2" />
              </svg>
              <div class="in">
                <h3><span data-l="fa">فروشگاه‌های ووکامرس</span><span data-l="en">WooCommerce stores</span></h3>
                <p class="kind"><span data-l="fa">وردپرس و Elementor Pro</span><span data-l="en">WordPress and Elementor
                    Pro</span></p>
                <ul>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">کاروسل پرفروش و پربازدید، بدون‌کد</span><span data-l="en">Best-seller
                        and most-viewed carousels, no custom code</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">ویترین سفارشی با CSS Grid</span><span data-l="en">Custom showcase
                        built with CSS Grid</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">تغییر قیمت انبوه با پشتیبان CSV</span><span data-l="en">Bulk price
                        changes with CSV backup and restore</span></span></li>
                  <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                      stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M20 6 9 17l-5-5" />
                    </svg><span><span data-l="fa">رفع خطای افزونه حضور و غیاب و عیب‌یابی یک قالب WHMCS</span><span
                        data-l="en">Fixed an attendance-plugin activation error and debugged a WHMCS
                        template</span></span></li>
                </ul>
                <div class="proof" data-p="wc"></div>
                <div class="chips"><span class="chip">WordPress</span><span class="chip">WooCommerce</span><span
                    class="chip">Elementor</span></div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- CONTACT -->
      <section id="contact" class="contact">
        <div class="wrap cbox">
          <div class="cbox-text">
            <span class="cbox-pill">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4z"/></svg>
              <span data-l="fa">آماده همکاری</span><span data-l="en">Open to work</span>
            </span>
            <h2>
              <span data-l="fa">ایده‌ات را بفرست،<br>بقیه‌اش با من.</span>
              <span data-l="en">Send me the idea,<br>I'll handle the rest.</span>
            </h2>
            <p class="cbox-sub">
              <span data-l="fa">از یک صفحه فرود ساده تا یک پلتفرم کامل Laravel + Vue.</span>
              <span data-l="en">From a simple landing page to a full Laravel + Vue platform.</span>
            </p>
          </div>
          <div class="links">
            <a href="mailto:you@parsasaber0123@gmail.com" class="link-card">
              <span class="link-ic">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="3"/><path d="M3 8l9 5 9-5"/></svg>
              </span>
              <span class="link-txt">
                <b>parsasaber0123@gmail.com</b>
                <small><span data-l="fa">ایمیل</span><span data-l="en">Email</span></small>
              </span>
              <svg class="link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <a href="https://t.me/Parsa_Saber" class="link-card">
              <span class="link-ic">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 4 3 11l6 2 2 6 3-4 5 3z"/></svg>
              </span>
              <span class="link-txt">
                <b>@Parsa_Saber</b>
                <small><span data-l="fa">تلگرام</span><span data-l="en">Telegram</span></small>
              </span>
              <svg class="link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <a href="https://github.com/ParsaSaber2006" class="link-card">
              <span class="link-ic">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg>
              </span>
              <span class="link-txt">
                <b>GitHub</b>
                <small><span data-l="fa">کدها و پروژه‌ها</span><span data-l="en">Code & projects</span></small>
              </span>
              <svg class="link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
            <a href="https://linkedin.com" class="link-card">
              <span class="link-ic">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M8 11v6M8 7.5v.01M12 17v-6M12 13a3 3 0 0 1 6 0v4"/></svg>
              </span>
              <span class="link-txt">
                <b>LinkedIn</b>
                <small><span data-l="fa">رزومه حرفه‌ای</span><span data-l="en">Professional profile</span></small>
              </span>
              <svg class="link-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
            </a>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="wrap"><span><span data-l="fa">پارسا صابر · توسعه‌دهنده فول‌استک</span><span data-l="en">Parsa Saber ·
            Full-stack developer</span></span><span><span data-l="fa">فارسی و انگلیسی</span><span data-l="en">Persian &
            English</span></span></div>
    </footer>

    <script>
      (function () {
        var L = window.__L || 'fa';
        var root = document.documentElement;
        try {var t = localStorage.getItem('theme'); if (t) root.setAttribute('data-theme', t)} catch (e) { }
        document.getElementById('theme').addEventListener('click', function () {
          var dark = root.getAttribute('data-theme') === 'dark' || (!root.getAttribute('data-theme') && matchMedia('(prefers-color-scheme: dark)').matches);
          var next = dark ? 'light' : 'dark';
          root.setAttribute('data-theme', next);
          try {localStorage.setItem('theme', next)} catch (e) { }
        });

        var LVL = [['مقدماتی', 'Basic'], ['متوسط', 'Intermediate'], ['پیشرفته', 'Advanced'], ['مسلط', 'Expert']];
        var P = {kv: ['کاراویزیت', 'KaraVisit', '#proj-kv'], tm: ['تله‌مشاوره', 'Tele-Moshaver', '#proj-tm'], wc: ['فروشگاه‌ها و وردپرس', 'Stores & WordPress', '#proj-wc'], upg: ['ارتقای Laravel', 'Laravel upgrade', null]};

        /* [name, type d|a, level 1-4, fa note, en note, project keys]  — edit levels here */
        var D = [
          {
            id: 'backend', title: ['بک‌اند و API', 'Backend & APIs'], blurb: ['سرویس‌های امن و قابل‌اتکا', 'Secure, dependable services'], s: [
              ['Laravel', 'd', 3, 'Eloquent، Event، Migration', 'Eloquent, events, migrations', ['kv', 'tm', 'upg']],
              ['PHP 8', 'd', 3, 'شی‌گرا، سازگار با هاست اشتراکی', 'OOP, shared-hosting friendly', ['kv', 'tm', 'wc']],
              ['REST API Design', 'd', 2, 'جست‌وجو، فیلتر، گزارش، فایل', 'Search, filter, report, files', ['kv', 'tm']],
              ['Laravel Sanctum', 'd', 2, 'احراز هویت Bearer Token', 'Bearer-token auth', ['kv']],
              ['Payment Gateways', 'd', 2, 'ایدمپوتنسی و قفل رکورد', 'Idempotency and row locking', ['tm']],
              ['MySQL / SQL', 'a', 1, 'از مسیر Eloquent', 'Through Eloquent', []],
              ['Automated Testing', 'a', 1, 'PHPUnit و Pest', 'PHPUnit and Pest', []]
            ]
          },
          {
            id: 'frontend', title: ['فرانت‌اند و UI/UX', 'Frontend & UI/UX'], blurb: ['رابط‌های روان با هویت برند', 'Smooth interfaces with a brand identity'], s: [
              ['Vue 3', 'd', 2, 'کامپوننت، computed، state', 'Components, computed, state', ['kv', 'tm']],
              ['Vuetify', 'd', 2, 'پنل مدیریت و سایت عمومی', 'Admin panel and public site', ['kv']],
              ['RTL & Persian UI', 'd', 3, 'Vazirmatn و تقویم شمسی', 'Vazirmatn and Jalali calendar', ['kv', 'tm', 'wc']],
              ['HTML5 & CSS3', 'd', 3, 'Grid، Flexbox، ریسپانسیو', 'Grid, Flexbox, responsive', ['kv', 'tm', 'wc']],
              ['JavaScript (ES6+)', 'd', 2, 'ماژول، async/await', 'Modules, async/await', ['kv']],
              ['UI/UX Design', 'd', 2, 'صفحه فرود و کارت با هویت برند', 'Landing pages and cards with brand identity', ['kv', 'tm']],
              ['Vite & npm', 'a', 1, 'اکوسیستم Vue', 'The Vue ecosystem', []],
              ['Accessibility', 'a', 1, 'دسترس‌پذیری پایه', 'Baseline accessibility', []]
            ]
          },
          {
            id: 'cms', title: ['وردپرس و فروشگاه', 'WordPress & E-commerce'], blurb: ['فروشگاه‌هایی که همیشه آنلاین می‌مانند', 'Stores that stay online and accurate'], s: [
              ['WordPress', 'd', 3, 'سایت، افزونه، عیب‌یابی', 'Sites, plugins, troubleshooting', ['wc']],
              ['Elementor Pro', 'd', 3, 'کاروسل، گرید، Loop', 'Carousels, grids, loops', ['wc', 'tm']],
              ['WooCommerce', 'd', 2, 'محصول متغیر و قیمت انبوه', 'Variable products, bulk pricing', ['wc']],
              ['Plugin Troubleshooting', 'd', 2, 'رفع خطای فعال‌سازی', 'Fixing activation errors', ['wc']],
              ['WHMCS & Smarty', 'd', 1, 'عیب‌یابی یک قالب', 'Debugging one template', ['wc']],
              ['Hosting & cPanel', 'a', 1, 'هاست بدون دسترسی پنل', 'Hosting without panel access', []],
              ['SEO & Web Vitals', 'a', 1, 'ساختار و سرعت', 'Structure and speed', []]
            ]
          },
          {
            id: 'data', title: ['داده و گزارش‌گیری', 'Data & Reporting'], blurb: ['از داده خام تا تصمیم', 'From raw data to decisions'], s: [
              ['Excel / CSV Export', 'd', 2, 'maatwebsite/excel', 'maatwebsite/excel', ['kv']],
              ['ApexCharts', 'd', 2, 'میله‌ای، ناحیه‌ای، radialBar', 'Bar, area, radialBar', ['kv']],
              ['Jalali Date Pickers', 'd', 2, 'فیلتر گزارش با تقویم شمسی', 'Report filters with Jalali dates', ['kv']],
              ['Server-side Pagination', 'd', 2, 'گزارش روی داده زیاد', 'Reports over large datasets', ['kv']],
              ['Data Visualization', 'a', 1, 'انتخاب نمودار مناسب', 'Choosing the right chart', []]
            ]
          },
          {
            id: 'process', title: ['روش کار و ابزار', 'Workflow & Tooling'], blurb: ['مهندسی فراتر از یک فیچر', 'Engineering beyond one feature'], s: [
              ['Debugging & Root-cause', 'd', 3, 'ریشه، نه علامت', 'Root cause, not symptoms', ['kv', 'tm', 'wc']],
              ['Composer', 'd', 2, 'پکیج و ارتقای Laravel', 'Packages and Laravel upgrades', ['upg']],
              ['AI-assisted Development', 'd', 2, 'پرامپت و بازبینی خروجی', 'Prompting and output review', ['kv', 'tm']],
              ['Git', 'd', 2, 'submodule و vendor', 'Submodules and vendor', ['upg']],
              ['Code Review & Refactoring', 'd', 2, 'بازبینی سیستم پرداخت', 'Reviewing the payment system', ['tm']],
              ['Linux & CLI', 'a', 1, 'ترمینال و اسکریپت', 'Terminal and scripting', []],
              ['CI/CD Concepts', 'a', 1, 'از مسیر Git', 'Through Git tooling', []]
            ]
          }
        ];

        var cur = 0, filter = 'all';
        var tabs = document.getElementById('tabs'), panel = document.getElementById('panel');
        var ix = function () {return L === 'en' ? 1 : 0};
        function nf(n) {return new Intl.NumberFormat(L === 'en' ? 'en-US' : 'fa-IR').format(n)}
        function lab(n) {return LVL[Math.max(1, Math.min(4, n)) - 1][ix()]}
        function avg(d) {var t = 0; d.s.forEach(function (x) {t += x[2]}); return t / d.s.length}
        var skillWord = {fa: 'مهارت', en: 'skills'};
        var viaWord = {fa: 'از مسیر اکوسیستم، بدون پروژه مستقل', en: 'Via the ecosystem, no standalone project'};
        var proofWord = {fa: 'مهارت‌های اثبات‌شده در این پروژه', en: 'Skills this project backs up'};

        function segs(n) {var h = ''; for (var k = 1; k <= 4; k++)h += '<i' + (k <= n ? ' class="on"' : '') + '></i>'; return h}

        function renderTabs() {
          tabs.innerHTML = '';
          D.forEach(function (d, idx) {
            var a = avg(d);
            var b = document.createElement('button');
            b.type = 'button'; b.className = 'tab'; b.setAttribute('role', 'tab');
            b.setAttribute('aria-selected', idx === cur); b.id = 'tab-' + d.id;
            b.innerHTML = '<span class="t1"><strong>' + d.title[ix()] + '</strong><b>' + lab(Math.round(a)) + '</b></span><span class="mbar"><i data-w="' + (a / 4 * 100) + '"></i></span><em>' + nf(d.s.length) + ' ' + skillWord[L] + '</em>';
            b.addEventListener('click', function () {cur = idx; renderTabs(); renderPanel()});
            b.addEventListener('keydown', function (e) {
              var k = e.key, n = null;
              if (k === 'ArrowDown' || k === 'ArrowLeft') n = (cur + 1) % D.length;
              if (k === 'ArrowUp' || k === 'ArrowRight') n = (cur - 1 + D.length) % D.length;
              if (n !== null) {e.preventDefault(); cur = n; renderTabs(); renderPanel(); document.getElementById('tab-' + D[cur].id).focus()}
            });
            tabs.appendChild(b);
          });
          requestAnimationFrame(function () {
            requestAnimationFrame(function () {
              tabs.querySelectorAll('.mbar i').forEach(function (el) {el.style.width = el.getAttribute('data-w') + '%'});
            })
          });
        }
        function evidence(x) {
          if (!x[5].length) return '<span class="ev0">' + viaWord[L] + '</span>';
          return x[5].map(function (k) {var p = P[k]; return p[2] ? '<a class="evc" href="' + p[2] + '">' + p[ix()] + '</a>' : '<span class="evc">' + p[ix()] + '</span>'}).join('');
        }
        function renderPanel() {
          var d = D[cur];
          var list = d.s.filter(function (x) {return filter === 'all' || x[1] === filter});
          var html = '<div class="panel-head"><h3>' + d.title[ix()] + '</h3><p>' + d.blurb[ix()] + '</p></div><div class="rows">' + list.map(function (x) {
            return '<div class="sk ' + x[1] + '"><div class="s1"><h4>' + x[0] + '</h4><span class="lab">' + lab(x[2]) + '</span></div><div class="seg4" role="img" aria-label="' + x[0] + ': ' + lab(x[2]) + '">' + segs(x[2]) + '</div><small>' + (L === 'en' ? x[4] : x[3]) + '</small><div class="ev">' + evidence(x) + '</div></div>';
          }).join('') + '</div>';
          panel.setAttribute('aria-labelledby', 'tab-' + d.id);
          panel.innerHTML = html;
        }
        function renderProofs() {
          document.querySelectorAll('.proof').forEach(function (el) {
            var key = el.getAttribute('data-p'), all = [];
            D.forEach(function (d) {d.s.forEach(function (x) {if (x[5].indexOf(key) > -1) all.push(x)})});
            all.sort(function (a, b) {return b[2] - a[2]});
            el.innerHTML = '<small>' + proofWord[L] + '</small><div>' + all.slice(0, 7).map(function (x) {return '<span class="pf l' + x[2] + '">' + x[0] + ' · ' + lab(x[2]) + '</span>'}).join('') + '</div>';
          });
        }
        document.querySelectorAll('.seg button').forEach(function (b) {
          b.addEventListener('click', function () {
            filter = b.getAttribute('data-f');
            document.querySelectorAll('.seg button').forEach(function (o) {o.setAttribute('aria-pressed', o === b)});
            renderPanel();
          });
        });

        var META = {
          fa: {title: 'پارسا صابر | توسعه‌دهنده فول‌استک · Laravel، Vue 3 و وردپرس', desc: 'نمونه‌کار پارسا صابر، توسعه‌دهنده فول‌استک با تخصص در Laravel، Vue 3، Vuetify، وردپرس و ووکامرس.'},
          en: {title: 'Parsa Saber | Full-stack Developer · Laravel, Vue 3 & WordPress', desc: 'Portfolio of Parsa Saber, a full-stack developer specialising in Laravel, Vue 3, Vuetify, WordPress and WooCommerce.'}
        };
        function applyStatic() {
          document.title = META[L].title;
          var m = document.querySelector('meta[name="description"]'); if (m) m.setAttribute('content', META[L].desc);
          document.querySelectorAll('[data-aria-fa]').forEach(function (el) {el.setAttribute('aria-label', el.getAttribute('data-aria-' + L))});
        }
        function setLang(l) {
          L = l; window.__L = l; root.lang = l; root.dir = (l === 'en') ? 'ltr' : 'rtl';
          try {localStorage.setItem('lang', l)} catch (e) { }
          applyStatic(); renderTabs(); renderPanel(); renderProofs();
        }
        document.getElementById('lang').addEventListener('click', function () {setLang(L === 'en' ? 'fa' : 'en')});
        applyStatic(); renderTabs(); renderPanel(); renderProofs();

        var links = [].slice.call(document.querySelectorAll('.top nav a:not(.cta-s)'));
        var map = {}; links.forEach(function (a) {map[a.getAttribute('href').slice(1)] = a});
        if ('IntersectionObserver' in window) {
          var io = new IntersectionObserver(function (es) {
            es.forEach(function (e) {
              if (e.isIntersecting) {links.forEach(function (a) {a.classList.remove('on')}); if (map[e.target.id]) map[e.target.id].classList.add('on')}
            });
          }, {rootMargin: '-45% 0px -50% 0px'});
          Object.keys(map).forEach(function (id) {var el = document.getElementById(id); if (el) io.observe(el)});
        }
      })();
    </script>
  </body>

  </html>

</body>

</html>