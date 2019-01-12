<?php
$cache_time = 10;
$OJ_CACHE_SHARE = false;
require_once('./include/cache_start.php');
require_once('./include/db_info.inc.php');
require_once('./include/setlang.php');
$view_title = "Welcome To Online Judge";
?>
<!doctype html>
<html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width initial-scale=1'>
    <title>国际大学生程序设计竞赛（ICPC）.md</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400&subset=latin,latin-ext'
          rel='stylesheet' type='text/css'/>
    <?php
    require_once("template/$OJ_TEMPLATE/js.php");
    require_once("template/$OJ_TEMPLATE/css.php");
    ?>
    
</head>
<?php require_once("template/$OJ_TEMPLATE/nav.php") ?>
<body>
    <style type='text/css'>html {
            overflow-x: initial !important;
        }

        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --code-block-bg-color: inherit;
        }

        html {
            font-size: 14px;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        body {
            margin: 0px;
            padding: 0px;
            height: auto;
            bottom: 0px;
            top: 0px;
            left: 0px;
            right: 0px;
            font-size: 1rem;
            line-height: 1.42857;
            overflow-x: hidden;
            background: inherit;
        }

        a:active, a:hover {
            outline: 0px;
        }

        .in-text-selection, ::selection {
            background: rgb(181, 214, 252);
            text-shadow: none;
        }

        #write {
            margin: 0px auto;
            height: auto;
            width: inherit;
            word-break: normal;
            word-wrap: break-word;
            position: relative;
            padding-bottom: 70px;
            white-space: pre-wrap;
            overflow-x: visible;
        }

        .for-image #write {
            padding-left: 8px;
            padding-right: 8px;
        }

        body.typora-export {
            padding-left: 30px;
            padding-right: 30px;
        }

        @media screen and (max-width: 500px) {
            body.typora-export {
                padding-left: 0px;
                padding-right: 0px;
            }

            .CodeMirror-sizer {
                margin-left: 0px !important;
            }

            .CodeMirror-gutters {
                display: none !important;
            }
        }

        .typora-export #write {
            margin: 0px auto;
        }

        #write > p:first-child, #write > ul:first-child, #write > ol:first-child, #write > pre:first-child, #write > blockquote:first-child, #write > div:first-child, #write > table:first-child {
            margin-top: 30px;
        }

        #write li > table:first-child {
            margin-top: -20px;
        }

        img {
            max-width: 100%;
            vertical-align: middle;
        }

        input, button, select, textarea {
            color: inherit;
            font-style: inherit;
            font-variant: inherit;
            font-weight: inherit;
            font-stretch: inherit;
            font-size: inherit;
            line-height: inherit;
            font-family: inherit;
        }

        input[type="checkbox"], input[type="radio"] {
            line-height: normal;
            padding: 0px;
        }

        ::before, ::after, * {
            box-sizing: border-box;
        }

        #write p, #write h1, #write h2, #write h3, #write h4, #write h5, #write h6, #write div, #write pre {
            width: inherit;
        }

        #write p, #write h1, #write h2, #write h3, #write h4, #write h5, #write h6 {
            position: relative;
        }

        h1 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.8rem;
        }

        h3 {
            font-size: 1.6rem;
        }

        h4 {
            font-size: 1.4rem;
        }

        h5 {
            font-size: 1.2rem;
        }

        h6 {
            font-size: 1rem;
        }

        p {
            -webkit-margin-before: 1rem;
            -webkit-margin-after: 1rem;
            -webkit-margin-start: 0px;
            -webkit-margin-end: 0px;
        }

        .typora-export p {
            white-space: normal;
        }

        .mathjax-block {
            margin-top: 0px;
            margin-bottom: 0px;
            -webkit-margin-before: 0rem;
            -webkit-margin-after: 0rem;
        }

        .hidden {
            display: none;
        }

        .md-blockmeta {
            color: rgb(204, 204, 204);
            font-weight: bold;
            font-style: italic;
        }

        a {
            cursor: pointer;
        }

        sup.md-footnote {
            padding: 2px 4px;
            background-color: rgba(238, 238, 238, 0.7);
            color: rgb(85, 85, 85);
            border-radius: 4px;
        }

        #write input[type="checkbox"] {
            cursor: pointer;
            width: inherit;
            height: inherit;
            margin: 4px 0px 0px;
        }

        tr {
            break-inside: avoid;
            break-after: auto;
        }

        thead {
            display: table-header-group;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0px;
            width: 100%;
            overflow: auto;
            break-inside: auto;
            text-align: left;
        }

        table.md-table td {
            min-width: 80px;
        }

        .CodeMirror-gutters {
            border-right: 0px;
            background-color: inherit;
        }

        .CodeMirror {
            text-align: left;
        }

        .CodeMirror-placeholder {
            opacity: 0.3;
        }

        .CodeMirror pre {
            padding: 0px 4px;
        }

        .CodeMirror-lines {
            padding: 0px;
        }

        div.hr:focus {
            cursor: none;
        }

        pre {
            white-space: pre-wrap;
        }

        .CodeMirror-gutters {
            margin-right: 4px;
        }

        .md-fences {
            font-size: 0.9rem;
            display: block;
            break-inside: avoid;
            text-align: left;
            overflow: visible;
            white-space: pre;
            background: var(--code-block-bg-color);
            position: relative !important;
        }

        .md-diagram-panel {
            width: 100%;
            margin-top: 10px;
            text-align: center;
            padding-top: 0px;
            padding-bottom: 8px;
            overflow-x: auto;
        }

        .md-fences .CodeMirror.CodeMirror-wrap {
            top: -1.6em;
            margin-bottom: -1.6em;
        }

        .md-fences.mock-cm {
            white-space: pre-wrap;
        }

        .show-fences-line-number .md-fences {
            padding-left: 0px;
        }

        .show-fences-line-number .md-fences.mock-cm {
            padding-left: 40px;
        }

        .footnotes {
            opacity: 0.8;
            font-size: 0.9rem;
            padding-top: 1em;
            padding-bottom: 1em;
        }

        .footnotes + .footnotes {
            margin-top: -1em;
        }

        .md-reset {
            margin: 0px;
            padding: 0px;
            border: 0px;
            outline: 0px;
            vertical-align: top;
            background: transparent;
            text-decoration: none;
            text-shadow: none;
            float: none;
            position: static;
            width: auto;
            height: auto;
            white-space: nowrap;
            cursor: inherit;
            -webkit-tap-highlight-color: transparent;
            line-height: normal;
            font-weight: normal;
            text-align: left;
            box-sizing: content-box;
            direction: ltr;
        }

        li div {
            padding-top: 0px;
        }

        blockquote {
            margin: 1rem 0px;
        }

        li p, li .mathjax-block {
            margin: 0.5rem 0px;
        }

        li {
            margin: 0px;
            position: relative;
        }

        blockquote > :last-child {
            margin-bottom: 0px;
        }

        blockquote > :first-child {
            margin-top: 0px;
        }

        .footnotes-area {
            color: rgb(136, 136, 136);
            margin-top: 0.714rem;
            padding-bottom: 0.143rem;
        }

        @media print {
            html, body {
                border: 1px solid transparent;
                height: 99%;
                break-after: avoid;
                break-before: avoid;
            }

            .typora-export * {
                -webkit-print-color-adjust: exact;
            }

            h1, h2, h3, h4, h5, h6 {
                break-after: avoid-page;
                orphans: 2;
            }

            p {
                orphans: 4;
            }

            html.blink-to-pdf {
                font-size: 13px;
            }

            .typora-export #write {
                padding-left: 1cm;
                padding-right: 1cm;
                padding-bottom: 0px;
                break-after: avoid;
            }

            .typora-export #write::after {
                height: 0px;
            }

            @page {
                margin: 20mm 0mm;
            }
        }

        .footnote-line {
            margin-top: 0.714em;
            font-size: 0.7em;
        }

        a img, img a {
            cursor: pointer;
        }

        pre.md-meta-block {
            font-size: 0.8rem;
            min-height: 2.86rem;
            white-space: pre-wrap;
            background: rgb(204, 204, 204);
            display: block;
            overflow-x: hidden;
        }

        p .md-image:only-child {
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        #write .MathJax_Display {
            margin: 0.8em 0px 0px;
        }

        .mathjax-block {
            white-space: pre;
            overflow: hidden;
            width: 100%;
        }

        p + .mathjax-block {
            margin-top: -1.143rem;
        }

        .mathjax-block:not(:empty)::after {
            display: none;
        }

        [contenteditable="true"]:active, [contenteditable="true"]:focus {
            outline: none;
            box-shadow: none;
        }

        .task-list {
            list-style-type: none;
        }

        .task-list-item {
            position: relative;
            padding-left: 1em;
        }

        .task-list-item input {
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .math {
            font-size: 1rem;
        }

        .md-toc {
            min-height: 3.58rem;
            position: relative;
            font-size: 0.9rem;
            border-radius: 10px;
        }

        .md-toc-content {
            position: relative;
            margin-left: 0px;
        }

        .md-toc::after, .md-toc-content::after {
            display: none;
        }

        .md-toc-item {
            display: block;
            color: rgb(65, 131, 196);
            text-decoration: none;
        }

        .md-toc-inner:hover {
        }

        .md-toc-inner {
            display: inline-block;
            cursor: pointer;
        }

        .md-toc-h1 .md-toc-inner {
            margin-left: 0px;
            font-weight: bold;
        }

        .md-toc-h2 .md-toc-inner {
            margin-left: 2em;
        }

        .md-toc-h3 .md-toc-inner {
            margin-left: 4em;
        }

        .md-toc-h4 .md-toc-inner {
            margin-left: 6em;
        }

        .md-toc-h5 .md-toc-inner {
            margin-left: 8em;
        }

        .md-toc-h6 .md-toc-inner {
            margin-left: 10em;
        }

        @media screen and (max-width: 48em) {
            .md-toc-h3 .md-toc-inner {
                margin-left: 3.5em;
            }

            .md-toc-h4 .md-toc-inner {
                margin-left: 5em;
            }

            .md-toc-h5 .md-toc-inner {
                margin-left: 6.5em;
            }

            .md-toc-h6 .md-toc-inner {
                margin-left: 8em;
            }
        }

        a.md-toc-inner {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            line-height: inherit;
        }

        .footnote-line a:not(.reversefootnote) {
            color: inherit;
        }

        .md-attr {
            display: none;
        }

        .md-fn-count::after {
            content: ".";
        }

        .md-tag {
            opacity: 0.5;
        }

        .md-comment {
            color: rgb(162, 127, 3);
            opacity: 0.8;
            font-family: monospace;
        }

        code {
            text-align: left;
        }

        h1 .md-tag, h2 .md-tag, h3 .md-tag, h4 .md-tag, h5 .md-tag, h6 .md-tag {
            font-weight: initial;
            opacity: 0.35;
        }

        a.md-print-anchor {
            border-width: initial !important;
            border-style: none !important;
            border-color: initial !important;
            display: inline-block !important;
            position: absolute !important;
            width: 1px !important;
            right: 0px !important;
            outline: none !important;
            background: transparent !important;
            text-decoration: initial !important;
            text-shadow: initial !important;
        }

        .md-inline-math .MathJax_SVG .noError {
            display: none !important;
        }

        .mathjax-block .MathJax_SVG_Display {
            text-align: center;
            margin: 1em 0em;
            position: relative;
            text-indent: 0px;
            max-width: none;
            max-height: none;
            min-height: 0px;
            min-width: 100%;
            width: auto;
            display: block !important;
        }

        .MathJax_SVG_Display, .md-inline-math .MathJax_SVG_Display {
            width: auto;
            margin: inherit;
            display: inline-block !important;
        }

        .MathJax_SVG .MJX-monospace {
            font-family: monospace;
        }

        .MathJax_SVG .MJX-sans-serif {
            font-family: sans-serif;
        }

        .MathJax_SVG {
            display: inline;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            zoom: 90%;
            text-indent: 0px;
            text-align: left;
            text-transform: none;
            letter-spacing: normal;
            word-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            float: none;
            direction: ltr;
            max-width: none;
            max-height: none;
            min-width: 0px;
            min-height: 0px;
            border: 0px;
            padding: 0px;
            margin: 0px;
        }

        .MathJax_SVG * {
            transition: none;
        }

        .md-diagram-panel > svg {
            max-width: 100%;
        }

        [lang="flow"] svg, [lang="mermaid"] svg {
            max-width: 100%;
        }

        :root {
            --side-bar-bg-color: #fafafa;
            --control-text-color: #777;
        }

        @font-face {
            font-family: "Open Sans";
            font-style: normal;
            font-weight: normal;
            src: local("Open Sans Regular"), url("./github/400.woff") format("woff");
        }

        @font-face {
            font-family: "Open Sans";
            font-style: italic;
            font-weight: normal;
            src: local("Open Sans Italic"), url("./github/400i.woff") format("woff");
        }

        @font-face {
            font-family: "Open Sans";
            font-style: normal;
            font-weight: bold;
            src: local("Open Sans Bold"), url("./github/700.woff") format("woff");
        }

        @font-face {
            font-family: "Open Sans";
            font-style: italic;
            font-weight: bold;
            src: local("Open Sans Bold Italic"), url("./github/700i.woff") format("woff");
        }

        body {
            font-family: "Open Sans", "Clear Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: rgb(51, 51, 51);
            line-height: 1.6;
        }

        #write {
            max-width: 860px;
            margin: 0px auto;
            padding: 20px 30px 100px;
        }

        #write > ul:first-child, #write > ol:first-child {
            margin-top: 30px;
        }

        body > :first-child {
            margin-top: 0px !important;
        }

        body > :last-child {
            margin-bottom: 0px !important;
        }

        a {
            color: rgb(65, 131, 196);
        }

        h1, h2, h3, h4, h5, h6 {
            position: relative;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
            line-height: 1;
            cursor: text;
        }

        h1:hover a.anchor, h2:hover a.anchor, h3:hover a.anchor, h4:hover a.anchor, h5:hover a.anchor, h6:hover a.anchor {
            text-decoration: none;
        }

        h1 tt, h1 code {
            font-size: inherit;
        }

        h2 tt, h2 code {
            font-size: inherit;
        }

        h3 tt, h3 code {
            font-size: inherit;
        }

        h4 tt, h4 code {
            font-size: inherit;
        }

        h5 tt, h5 code {
            font-size: inherit;
        }

        h6 tt, h6 code {
            font-size: inherit;
        }

        h1 {
            padding-bottom: 0.3em;
            font-size: 2.25em;
            line-height: 1.2;
            border-bottom: 1px solid rgb(238, 238, 238);
        }

        h2 {
            padding-bottom: 0.3em;
            font-size: 1.75em;
            line-height: 1.225;
            border-bottom: 1px solid rgb(238, 238, 238);
        }

        h3 {
            font-size: 1.5em;
            line-height: 1.43;
        }

        h4 {
            font-size: 1.25em;
        }

        h5 {
            font-size: 1em;
        }

        h6 {
            font-size: 1em;
            color: rgb(119, 119, 119);
        }

        p, blockquote, ul, ol, dl, table {
            margin: 0.8em 0px;
        }

        li > ol, li > ul {
            margin: 0px;
        }

        hr {
            height: 4px;
            padding: 0px;
            margin: 16px 0px;
            background-color: rgb(231, 231, 231);
            border-width: 0px 0px 1px;
            border-style: none none solid;
            border-top-color: initial;
            border-right-color: initial;
            border-left-color: initial;
            border-image: initial;
            overflow: hidden;
            box-sizing: content-box;
            border-bottom-color: rgb(221, 221, 221);
        }

        body > h2:first-child {
            margin-top: 0px;
            padding-top: 0px;
        }

        body > h1:first-child {
            margin-top: 0px;
            padding-top: 0px;
        }

        body > h1:first-child + h2 {
            margin-top: 0px;
            padding-top: 0px;
        }

        body > h3:first-child, body > h4:first-child, body > h5:first-child, body > h6:first-child {
            margin-top: 0px;
            padding-top: 0px;
        }

        a:first-child h1, a:first-child h2, a:first-child h3, a:first-child h4, a:first-child h5, a:first-child h6 {
            margin-top: 0px;
            padding-top: 0px;
        }

        h1 p, h2 p, h3 p, h4 p, h5 p, h6 p {
            margin-top: 0px;
        }

        li p.first {
            display: inline-block;
        }

        ul, ol {
            padding-left: 30px;
        }

        ul:first-child, ol:first-child {
            margin-top: 0px;
        }

        ul:last-child, ol:last-child {
            margin-bottom: 0px;
        }

        blockquote {
            border-left: 4px solid rgb(221, 221, 221);
            padding: 0px 15px;
            color: rgb(119, 119, 119);
        }

        blockquote blockquote {
            padding-right: 0px;
        }

        table {
            padding: 0px;
            word-break: initial;
        }

        table tr {
            border-top: 1px solid rgb(204, 204, 204);
            margin: 0px;
            padding: 0px;
        }

        table tr:nth-child(2n) {
            background-color: rgb(248, 248, 248);
        }

        table tr th {
            font-weight: bold;
            border: 1px solid rgb(204, 204, 204);
            text-align: left;
            margin: 0px;
            padding: 6px 13px;
        }

        table tr td {
            border: 1px solid rgb(204, 204, 204);
            text-align: left;
            margin: 0px;
            padding: 6px 13px;
        }

        table tr th:first-child, table tr td:first-child {
            margin-top: 0px;
        }

        table tr th:last-child, table tr td:last-child {
            margin-bottom: 0px;
        }

        .CodeMirror-gutters {
            border-right: 1px solid rgb(221, 221, 221);
        }

        .md-fences, code, tt {
            border: 1px solid rgb(221, 221, 221);
            background-color: rgb(248, 248, 248);
            border-radius: 3px;
            font-family: Consolas, "Liberation Mono", Courier, monospace;
            padding: 2px 4px 0px;
            font-size: 0.9em;
        }

        .md-fences {
            margin-bottom: 15px;
            margin-top: 15px;
            padding: 8px 1em 6px;
        }

        .task-list {
            padding-left: 0px;
        }

        .task-list-item {
            padding-left: 32px;
        }

        .task-list-item input {
            top: 3px;
            left: 8px;
        }

        @media screen and (min-width: 914px) {
        }

        @media print {
            html {
                font-size: 13px;
            }

            table, pre {
                break-inside: avoid;
            }

            pre {
                word-wrap: break-word;
            }
        }

        .md-fences {
            background-color: rgb(248, 248, 248);
        }

        #write pre.md-meta-block {
            padding: 1rem;
            font-size: 85%;
            line-height: 1.45;
            background-color: rgb(247, 247, 247);
            border: 0px;
            border-radius: 3px;
            color: rgb(119, 119, 119);
            margin-top: 0px !important;
        }

        .mathjax-block > .code-tooltip {
            bottom: 0.375rem;
        }

        #write > h3.md-focus::before {
            left: -1.5625rem;
            top: 0.375rem;
        }

        #write > h4.md-focus::before {
            left: -1.5625rem;
            top: 0.285714rem;
        }

        #write > h5.md-focus::before {
            left: -1.5625rem;
            top: 0.285714rem;
        }

        #write > h6.md-focus::before {
            left: -1.5625rem;
            top: 0.285714rem;
        }

        .md-image > .md-meta {
            border: 1px solid rgb(221, 221, 221);
            border-radius: 3px;
            font-family: Consolas, "Liberation Mono", Courier, monospace;
            padding: 2px 4px 0px;
            font-size: 0.9em;
            color: inherit;
        }

        .md-tag {
            color: inherit;
        }

        .md-toc {
            margin-top: 20px;
            padding-bottom: 20px;
        }

        .sidebar-tabs {
            border-bottom: none;
        }

        #typora-quick-open {
            border: 1px solid rgb(221, 221, 221);
            background-color: rgb(248, 248, 248);
        }

        #typora-quick-open-item {
            background-color: rgb(250, 250, 250);
            border-color: rgb(254, 254, 254) rgb(229, 229, 229) rgb(229, 229, 229) rgb(238, 238, 238);
            border-style: solid;
            border-width: 1px;
        }

        #md-notification::before {
            top: 10px;
        }

        .on-focus-mode blockquote {
            border-left-color: rgba(85, 85, 85, 0.12);
        }

        header, .context-menu, .megamenu-content, footer {
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .file-node-content:hover .file-node-icon, .file-node-content:hover .file-node-open-state {
            visibility: visible;
        }

        .mac-seamless-mode #typora-sidebar {
            background-color: var(--side-bar-bg-color);
        }

        .md-lang {
            color: rgb(180, 101, 77);
        }


    </style>
<div id='write' class='is-node'><h1><a name='header-n0' class='md-header-anchor '></a>国际大学生程序设计竞赛（ICPC）
    </h1>
    <h2><a name='header-n15' class='md-header-anchor '></a>1.什么是ICPC？</h2>
    <div align="center"><img src='./img/icpc.jpg' alt='icpc' align=center/></div>
    <p> 国际大学生程序设计竞赛（International Collegiate Programming
        Contest，简称ICPC）是一项旨在展示大学生创新能力、团队精神和在压力下编写程序、分析和解决问题能力的年度竞赛。国际大学生程序设计竞赛始于1970年，成形于1977年，并于1996年由上海大学引入中国大陆，目前已发展成为最具影响力的大学生计算机竞赛，被誉为“程序设计竞赛的奥林匹克”。</p>
    <p>
        参加ICPC可很好地锻炼团队成员的算法设计、逻辑推理、数学建模、程序设计和英语阅读能力。该竞赛题目使用英文描述，要求参赛者在5小时内完成10-13道题目的读题、算法设计、编码、调试并提交裁判实际运行通过，能够全面考察学生的基础理论和实际动手能力。竞赛成绩已成为通往行业内著名企业的就业通行证，参与过ICPC竞赛训练的学生因其扎实的理论功底和实践动手能力，也成为各高校研究生导师争抢的对象。</p>
    <p><strong>通过参与ICPC，大批学生得到良好的锻炼并因此到行业内著名企业高薪就业或者考取国内一流大学的研究生。</strong></p>
    <h2><a name='header-n165' class='md-header-anchor '></a>2.竞赛时间：</h2>
    <ul>
        <li>校赛（个人赛，每年3-4月份）</li>
        <li>省赛（3人组队，每年五一之后第一个周末）</li>
        <li>亚洲区网络预选赛（3人组队，每年9月份）</li>
        <li>亚洲区域赛现场赛（Asia Regional）（3人组队，每年10-12月份）</li>
        <li>全球总决赛(World Final)（每年3-5月份）</li>
    </ul>
    <h2><a name='header-n261' class='md-header-anchor '></a>3.竞赛内容</h2>
    <ul>
        <li><p>ICPC竞赛形式</p>
            <ul>
                <li>队伍人数≤3人。如果三人都是女生，则为女队。</li>
                <li>上机编程解决问题(可带纸质资料)。</li>
                <li>每队使用1台电脑。</li>
                <li>比赛时间为5个小时（网络赛一般为12:00--17:00，现场赛一般为9:00---14:00）。</li>
                <li>比赛题目为10 - 12道英文题。</li>
                <li>每题可选用C、C++、Java、Python语言之一编写(2017 World Final)。</li>
                <li>程序实时测试，动态排名。</li>
                <li>正确完成一题，得到一只代表该题颜色的气球。</li>
            </ul>
        </li>
        <li><p>参与ICPC的意义</p>
            <ul>
                <li>代码和算法训练——锻炼专业基本功。</li>
                <li>3人1队——培养团队精神与合作能力。</li>
                <li>10个题目5个小时——考察程序设计能力。</li>
                <li>看谁做得多+看谁做得快——检验竞技意识和水平。</li>
                <li>机器实时评测——真正公平+公正+公开。</li>
                <li>测试：运行时间+占用内存+输入输出格式——强化软件开发基准要素训练。</li>
                <li>英语描述——提升外语阅读能力。</li>
            </ul>
        </li>
        <li><p>ICPC竞赛的内容</p>
            <ul>
                <li>经典的计算机科学分支：程序设计语言、数据结构、算法设计方法、计算理论。</li>
                <li>其他：高等数学、计算几何、组合数学、图论、概率论、数论、博弈论、动态规划、人工智能、计算机图形学、搜索等。</li>
            </ul>
        </li>
    </ul>
    <p></p>
    <p></p></div>

<p align="center" class="style_footnote">Created by UPCtanker Modified by Ryan Lee
</p>
<?php
require_once("template/$OJ_TEMPLATE/bottom.php");
?>
</body>
</html>