<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST REPORT COLOR</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;900&display=swap"
          rel="stylesheet">
    <style>

        :root {
            --color-grey: #eaeaea;
            --color-blue: #4e72aa;
            --color-green: #79ae6d;
            --color-dark-grey: #3a3a3a;
            --color-mid-grey: #8d8d8d;
            --color-print-black: #555555;
            --progress-bar-width: 30mm;
            --main-gradient: linear-gradient(90deg, var(--color-blue) 0%, var(--color-green) 100%);
            --color-red: #e35043;
            --color-orange: #f09319;
            --color-semi-transparent: rgba(255, 255, 255, 0.4);
        }

        .page-init{
            width: 210mm;
        }

        table {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        tbody {
            flex-direction: column;
            display: flex;
            flex-wrap: wrap;
        }

        .circle {
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            justify-content: center;

            transform: rotate(180deg)
        }

        .circle > div {
            z-index: 1;
            transform: rotate(180deg)
        }

        @page {
            size: A4;
            margin: 0;
        }

        .page {
            position: relative;
        }

        body * {
            display: block;
        }

        tr {
            width: 100%
        }

        .col {
            display: inline-block;
        }

        table {
            position: relative;
        }

        .footer {
            background-color: white;
            z-index: 2000;
            width: 170mm;
            padding: 5mm 20mm 0;
            bottom: 0;
            height: 18mm;
        }


        .footer > div {
            border-top: 1px var(--color-grey) solid;
            width: 170mm;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            padding-top:2px;
        }

        .footer div div{
            margin: 0;
            padding: 0;
            font-size: 14px;
            color: var(--color-dark-grey);
            font-weight: 300;
            font-family: "Poppins", sans-serif !important;
        }

        .half-page {
            width: 83mm;
        }

        .quater-page {
            width: 24%
        }

        .links {
            font-size: 14px;
            line-height: 24px;
            text-align: right;
            font-weight: 300;
            color: var(--color-dark-grey);
            font-family: "Poppins", sans-serif;
        }

        .font-poppins {
            font-family: "Poppins", sans-serif;
            font-style: normal;
        }

        .logo {
            height: 10mm;
            width: 10mm;
        }

        .first-page {
            font-size: 24px;
            font-style: normal;
            width: 210mm;
            height: 297mm;
            margin: 0 !important;
            padding: 0 !important;
        }


        .row {
            display: flex;
            flex-direction: row;
            page-break-inside: avoid;
        }

        #proctor-notes {
            position: relative;
            font-size: 16px;
            margin-bottom: 3mm;
            font-weight: 600
        }

        #proctor-notes svg {
            position: absolute;
            width: 40px;
            top: -30px;
            right: -10px;
        }

        .first-page .header {
            width: 210mm;
            display: block;
            height: 220mm;
            padding: 10mm 20mm;
            overflow: hidden;
        }

        .first-page .header tbody {
            width: 210mm;
            display: block;
        }

        .first-page #logo {
            height: 80px;
            margin-bottom: 80px;
            position: relative;
            display: block;
            left: 115mm;
        }

        .indoc-header {
            margin: 10mm 20mm 5mm;
            width: 170mm;
        }

        .partial-score-charts {
            margin-top: 5mm;
            margin-bottom: 5mm;
        }

        .subject.math {
            width: 58.5mm;
        }


        .labels {
            position: relative;
            padding-bottom: 5mm;
            width: 100%;
            display: flex;
            flex-direction: row;
            padding-left: 2mm;
        }

        .labels span {
            width: 31px;
            height: 130px;
            align-items: center;
        }

        .labels span span {
            transform: translate(-50px, 50px) rotate(270deg);
            width: 130px;
            height: 31px;
            align-self: center;
        }

        .math .question-row span:nth-child(3), .math .labels span:nth-child(3) {
            width: 18mm;
        }

        .math .question-row span:nth-child(2), .math .labels span:nth-child(2) {
            width: 12mm;

        }

        .math .labels span:nth-child(2) span {
            padding-top: 3mm;
            padding-left: 3mm;
        }

        .labels span:nth-child(3) span {
            padding-top: 1mm;
            padding-left: 1mm;
        }

        .math .labels span:nth-child(3) span {
            padding-left: 3mm;
            padding-top: 3mm
        }

        .labels span:last-child span {
            padding-top: 4mm;
            padding-left: 4mm;
        }

        .column-header {
            padding: 3mm 2mm 0;
            margin-bottom: 0;
        }

        .subject {
            min-width: 45mm;
            color: var(--color-dark-grey);
            border: 0;
        }

        .subject h3 {
            text-align: center;
            color: black;
            margin-bottom: 0;
            margin-top: 0;
            font-size: 20px;
            font-weight: 400;
        }

        .questions-container {
            padding: 5mm 1mm 5mm 3mm;
            margin-top: 0;
        }

        .subject-general-score, .partial-score-container {
            font-weight: 300
        }

        .partial-score div:last-child {
            font-size: 30px;
        }

        .partial-score div:first-child {
            font-size: 14px;
        }

        .total-core-container .total-score div:nth-child(2) {
            font-size: 40px;
        }

        .section-details {
            font-weight: 300;
        }

        .question-row span:nth-child(2) {
            padding-top: 1px;
            padding-bottom: 1px;
        }

        .title {
            font-weight: 600;
            font-size: 22px;
            margin-top: 10mm;
            margin-bottom: 10mm;
            font-family: "Poppins", sans-serif;
        }

        .partial-score-container-title {
            font-size: 18px;
        }

        .number-stats {
            width: 10mm;
            text-align: center;
            padding: 0 2px;
        }

        .font-semi {
            font-weight: 400;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:visited {
            color: white;
        }

        body {
            margin: 0;
            padding: 0;
            color: black;
        }

        .page-break {
            page-break-before: always;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:visited {
            color: white;
        }

        body {
            color: black;
        }
    </style>
    {{&#45;&#45; FIRST PAGE &#45;&#45;}}
    <style>
        .first-page {
            color: white;
            font-family: "Poppins", sans-serif;
        }

        .first-page tfoot, .first-page thead {
            display: none;
            height: 0;
        }

        .first-page .header {
            background: var(--main-gradient);
            color: #fff;
        }

        .first-page .date {
            font-weight: 500;
            font-size: 20px;
        }

        .first-page .list {
            margin-left: 27.5mm;
            z-index: 10;
            display: inline-block;
        }

        .first-page .company-name {
            display: inline-block;
            position: relative;
        }

        .first-page .list-line {
            height: 51mm;
            width: 30mm;
            border-right: solid 1.1mm black;
            position: absolute;
            top: 246mm;
            z-index: -1000;
        }

        .first-page .list-circle {
            width: 4.5mm;
            height: 4.5mm;
            border-radius: 5mm;
            border-color: black;
            border-style: solid;
            display: block;
            background-color: white;
        }

        .first-page .list-item {
            margin-bottom: 5mm;
            line-height: 4mm;
        }

        .first-page .list-item span {
            display: inline-block;
        }

        .first-page .list-item span:nth-child(2) {
            margin-left: 2mm;
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 4mm;
        }

        .first-page .circle {
            height: 103mm;
            width: 103mm;
        }

        .first-page .circle:before {
            border-radius: 50%;
            content: "";
            width: 98mm;
            height: 98mm;
            background: linear-gradient(90deg, #6CA264 0%, #5A8682 100%);
        }

        .first-page .circle:before, .circle:after {
            position: absolute;
        }

        .first-page .circle #score-title {
            font-size: 45px;
            font-weight: 500;
            line-height: 45px;
        }

        .score-row {
            margin-top: 10mm;
        }

        .first-page .score-row td {
            margin: 0;
            display: inline-block;
            position: relative;
        }

        .first-page .circle #score-number {
            font-weight: 300;
            font-size: 120px;
            line-height: 140px;
        }
    </style>
    {{&#45;&#45; SECOND PAGE &#45;&#45;}}
    <style>
        .second-page {
            font-family: "Open Sans", sans-serif;
            margin-bottom: 23mm;
        }
        @page {
            margin-top: 11mm;
            margin-bottom: 15mm;
        }

        .second-page .circle:before {
            border-radius: 50%;
            background: white;
            content: "";
            width: 132px;
            height: 132px;
        }

        .second-page .circle:before, .circle:after {
            position: absolute;
        }

        .second-page .total-score.circle:before {
            width: 182px;
            height: 182px;
        }

        .second-page .note {
            padding: 5mm;
            background: linear-gradient(90deg, var(--color-blue) 0%, var(--color-green) 100%);
            border-radius: 3mm;
            color: white;
            position: relative;
            max-width: 100mm;
        }

        .second-page .note:before {
            content: "";
            position: absolute;
            border-left: 16px solid #75a874;
            border-right: 12px solid transparent;
            border-top: 12px solid #75a874;
            border-bottom: 20px solid transparent;
            right: 32px;
            bottom: -30px;
        }

        .second-page .total-score {
            font-size: 20px;
            width: 200px;
            height: 200px;
            margin-right: 10mm;
            font-weight: 400;
        }


        .second-page .total-score div:nth-child(2) {
            font-size: 46px;

        }

        .second-page .subject-score {
            width: 140px;
            height: 140px;
            margin: auto;
            font-size: 16px;
            font-weight: 400;
        }

        .second-page .subject-score:before {
            width: 128px;
            height: 128px;
        }

        .second-page .subject-score div:nth-child(2) {
            font-size: 36px;
        }

        .second-page #score-table {
            background-color: var(--color-grey);
            font-size: 14px;
            color: var(--color-dark-grey);
            padding-bottom: 5mm;
            font-weight: 300;
        }

        .second-page#score-table thead {
            border-bottom: 2px solid var(--color-dark-grey);
            margin-bottom: 2mm;
        }

        .second-page #score-table thead td {
            padding: 3mm 0;
        }

        .second-page #score-table tbody tr {
            padding: 1.5mm 0;
        }

        .second-page .personal-best {
            color: var(--color-blue);
            font-weight: 700;
        }

        .second-page .best-score-number, .best-in-column {
            padding: 2px 7px;
            border-radius: 2px;
            margin: auto;
        }

        .second-page .best-score-number {
            background-color: var(--color-blue);
            color: white;
            max-width: 4ch;
        }

        .second-page .best-in-column {
            background-color: white;
        }

        .second-page .graphic-stats {
            width: 60mm;
        }

        .progress-bar-front, .progress-bar-background {
            border-radius: 50mm;
            height: 2mm;
            position: absolute;
            left: 5mm;
            top: 1.5mm
        }

        .progress-bar-background {
            background-color: white;
            width: var(--progress-bar-width);

        }

        .progress-bar-front {
            background-color: var(--color-blue);
            z-index: 1000;
        }

        .second-page .graphic-stats div, .progress-bar-container {
            position: relative;
            top: 4px;
            left: 0;
        }
        .second-page .graphic-stats div {
            display: flex;
            flex-direction: row;
        }
        .second-page .graphic-stats .progress-numbers {
            text-align: right;
            position: absolute;
            right: 2mm;
        }
    </style>
    {{&#45;&#45; THIRD PAGE &#45;&#45;}}
    <style>
        @page {
            margin-top: 11mm;
            margin-bottom: 15mm;
        }
        .third-page {
            font-family: "Open Sans", sans-serif;
            font-weight: 300;
        }

        .third-page #scores td {
            vertical-align: top;
        }

        .third-page #scores td {
            margin-right: 7mm;
        }

        .third-page #scores td:last-child {
            margin-right: 0
        }


        .third-page .labels, .question-row {
            font-size: 14px;
        }

        .third-page .column-header, .questions-container {
            background-color: var(--color-grey);
            border: 2px transparent solid;
        }

        .third-page .question-row {
            line-height: 16px;
            page-break-inside: avoid;
        }

        .third-page .question-row span {
            display: inline-block;
            width: 7mm;
            text-align: center;
        }

        .third-page .question-row span:nth-child(2) {
            width: 8.5mm;
            background-color: #61b245;
            color: white;
        }

        .third-page .questions-container .question-row:first-child > span:nth-child(2) {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
            color: white;
        }

        .third-page .questions-container .question-row:last-child > span:nth-child(2) {
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;

        }

        .third-page .subject-legend {
            background-color: white;
            font-size: 12px;
            padding: 7mm 3mm;
            border: none;
        }

        .third-page .subject-legend span {
            display: inline-block;
            vertical-align: text-top;
            line-height: 20px;
            font-weight: 300;
        }

        .third-page .subject-legend span:first-child {
            width: 7mm;
            text-align: center;
            margin-bottom: 1.5mm;
        }


        .third-page .legend-element span {
            font-size: 14px;
            color: var(--color-dark-grey);

        }

        .third-page .legend-element span:first-child {
            border: 1px black solid;
            width: 10mm;
            text-align: center
        }

        .third-page .legend-element span:last-child {
            margin-right: 10mm;
        }

        .third-page .column-header {
            border-bottom: 1px black solid;
        }
    </style>
    {{&#45;&#45; FOURTH PAGE &#45;&#45;}}
    <style>
        @page {
            margin-top: 11mm;
            margin-bottom: 15mm;
        }
        .fourth-page {
            font-family: "Open Sans", sans-serif;
            width: 210mm;

        }

        .fourth-page .subject-header, .fourth-page .subject-general-score {
            color: white;
            background: var(--main-gradient);
            width: 170mm;
            margin: 0;
            padding: 5mm 20mm;
        }

        .fourth-page .subject-header {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            border-bottom: white solid 2px;
        }

        .fourth-page .subject-general-score {
            top: 44.1mm
        }

        .margin-body {
            width: 170mm;
            padding-left: 20mm;
            padding-right: 20mm;
        }

        .fourth-page .section-header {
            width: 210mm;
        }

        .fourth-page .section-header div  {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            width: 160mm;
            margin: 10mm 20mm;
        }

        .fourth-page .top-issues-section {
            background-color: var(--color-grey);
            font-size: 14px;
            font-weight: 600;
            padding: 2mm 5mm;
            margin-top: 1mm;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 160mm;
            margin-left: 20mm;
            margin-right: 20mm;
            page-break-inside: avoid;
        }

        .fourth-page .top-issues-section div {
            margin-right: 3mm
        }

        .fourth-page .top-issues-section > div:last-child {
            margin-right: 0;
            text-align: right;
            width: 25mm;
        }

        .fourth-page .top-issues-section > div:nth-child(2) {
            width: 90mm
        }

        .fourth-page .top-issues-section > div:nth-child(3) {
            width: 30mm
        }

        .fourth-page .badge {
            color: white;
            border-radius: 3px;
            padding: 0.7mm 2mm;
        }

        .fourth-page .red {
            background-color: var(--color-red);
        }

        .fourth-page .green {
            background-color: var(--color-green);
        }

        .fourth-page .orange {
            background-color: var(--color-orange);
        }

        .fourth-page .section-details {
            background-color: var(--color-grey);
            padding: 3mm 0;
            border-top: 1px solid var(--color-dark-grey);
            margin-bottom: 5mm;

        }

        .fourth-page .details-row {
            font-size: 14px;
            padding-left: 5mm;
            padding-right: 5mm;
            width: 100%;
            display: flex;
            flex-direction: row;;
            justify-content: space-between;
            margin-left: 20mm;
            margin-right: 20mm;
            background-color: var(--color-grey);
            page-break-inside: avoid;

        }
        .fourth-page .details-row > div {
            padding-top: 1.5mm;
            padding-bottom: 1.5mm;
        }

        .fourth-page .details-row > div:nth-child(2) {
            padding-left: 5mm;
        }

        .fourth-page .details-row > div:nth-child(3) {
            width: 50mm
        }

        .fourth-page .details-row > div:last-child {
            width: 25mm;
            text-align: right;
        }


        .fourth-page .first-sub-section {
            padding-left: 10mm;
            width: 155mm;
        }

        .fourth-page .second-sub-section {
            width: 150mm;
        }

        .fourth-page .sub-section {
            width: 160mm;
        }

        .fourth-page .sub-section > div:nth-child(2) {
            width: 102mm;
        }
        .fourth-page .first-sub-section > div:nth-child(2) {
            width: 95mm;
        }

        .fourth-page .second-sub-section {
            padding-left: 15mm;
        }

        .fourth-page .second-sub-section div:nth-child(2) {
            width: 88mm;
        }

        .fourth-page .total-core-container, .partial-score-container {
            display: inline-block;
            vertical-align: top;
            margin-top: 10mm;
            margin-bottom: 10mm;
        }

        .fourth-page .partial-score-container {
            margin-left: 5mm;
        }

        .fourth-page .circle:before {
            border-radius: 50%;
            content: "";
        }

        .fourth-page .circle:before, .circle:after {
            position: absolute;
        }

        .fourth-page .total-score {
            width: 200px;
            height: 200px;
            margin: 0;
        }

        .fourth-page .total-score:before {
            width: 180px;
            height: 180px;
            background: linear-gradient(90deg, #5c879a 0%, #537aa6 100%);
        }

        .fourth-page .partial-score {
            border-radius: 50%;
            display: inline-flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;
            justify-content: center;
            width: 140px;
            height: 140px;
            transform: rotate(180deg);
            font-size: 16px;
            text-align: center;
            margin-right: 5mm;
        }

        .fourth-page .partial-score:before, .total-score:before {
            border-radius: 50%;
            content: "";

        }

        .fourth-page .partial-score:before {
            width: 122px;
            height: 122px;
        }

        .fourth-page .partial-score:before,
        .fourth-page .partial-score:after,
        .fourth-page .total-score:before,
        .fourth-page .total-score:after {
            position: absolute;
        }

        .fourth-page .partial-score div, .total-score div {
            z-index: 10;
            transform: rotate(180deg)
        }

        .fourth-page #ps1:before {
            background: linear-gradient(90deg, #66948d 0%, #608c95 100%);
        }

        .fourth-page #ps2:before {
            background: linear-gradient(90deg, #6d9e81 0%, #689789 100%);
        }

        .fourth-page #ps3:before {
            background: linear-gradient(90deg, #74a775 0%, #6fa17d 100%);
        }


    </style>

</head>
<body>
<div class="page-init first-page page-break">
    <div class="page">
        <table class="header">
            <tbody>
            <tr class="date">
                <td class="font-poppins">Mar.1, 2021</td>
            </tr>
            <tr>
                <td><img id="logo" alt="" src="../images/logo-color.png"/></td>
            </tr>
            <tr>
                <td class="font-poppins" style="font-weight:500">Company ACT diagnostics for</td>
            </tr>
            <tr>
                <td class="font-poppins" style="font-size: 80px;line-height: 100px;font-weight:700;height:200px">
                    Matthew Doe
                </td>
            </tr>
            <tr class="score-row">
                <td style="width: 80mm; font-size: 16px;position: relative;font-weight: 500;">
                    <div style="margin-top: 30mm">
                        <a href="#">www.clearchoice.nyc</a>
                    </div>
                    <div>
                        <a href="#">office@clearechoice.nyc</a>
                    </div>

                </td>
                <td style="width: 80mm; position: relative">
                    <div class="circle"
                         style="background: conic-gradient(white 0deg, white calc(72 / 233 * 360deg), var(--color-semi-transparent) calc(72 / 233 * 360deg), var(--color-semi-transparent) 360deg);">
                        <div id="score-number">72</div>
                        <div id="score-title">Score</div>
                    </div>
                </td>
            </tr>

            </tbody>

        </table>
        <table class="content-list">
            <tbody>
            <tr>

                <td class="list" style="margin-top: 20mm;">
                    <div class="list-item">
                        <span class="list-circle"></span>
                        <span style="color: black">Scores and history</span>
                    </div>
                    <div class="list-item">
                        <span class="list-circle"></span>
                        <span style="color: black">Answer Summary</span>
                    </div>
                    <div class="list-item">
                        <span class="list-circle"></span>
                        <span style="color: black">Data (for tutor use)</span>
                    </div>
                </td>
                <td class="company-name" style="color: silver; font-size: 16px; font-weight: 600;top: 22mm; left: 60mm">
                    &#169; CompanyName
                </td>
            </tr>
            </tbody>
        </table>
        <div class="list-line"></div>
    </div>
</div>
<div class="page-init second-page page-break">
    <div class="page">
        <table>
            <thead>
            <tr class="indoc-header ">
                <td class="col half-page"><img alt="" src="../images/logo.png" class="logo"/></td>
                <td class="col half-page links">
                    <div>
                        www.clearchoice.nyc
                    </div>
                    <div>
                        office@clearechoice.nyc
                    </div>
                </td>
            </tr>
            </thead>
            <tbody>

            <tr class="margin-body">
                <td class="col title ">Scores and History</td>
            </tr>
            <tr class="margin-body row">
                <td class="col">
                    <div class="circle total-score"
                         style="background: conic-gradient(#4868b1 0deg, #4868b1 calc(72 /233 * 360deg),var(--color-grey) calc(72 /233 * 360deg), var(--color-grey) 360deg);">
                        <div>72 of 223</div>
                        <div>72</div>
                        <div>Total Score</div>
                    </div>

                </td>
                <td class="col note">
                    <div id="proctor-notes">Proctor notes
                        <svg xmlns="http://www.w3.org/2000/svg" width="117.122" height="91.06"
                             viewBox="0 0 117.122 91.06">
                            <path d="M22.294-178.666a114.691,114.691,0,0,1-7.222-39.564q0-22.922,12.089-37.209T62.8-269.726v22.294q-16.642,0-16.642,22.294v4.082H67.2v42.39Zm65,0A109.583,109.583,0,0,1,80.07-218.23q0-22.922,12.089-37.209T127.8-269.726v22.294q-16.956,0-16.956,22.294v4.082h21.352v42.39Z"
                                  transform="translate(132.194 -178.666) rotate(-180)" fill="#fff"/>
                        </svg>
                    </div>

                    <div style="font-size: 14px; font-weight: 100; line-height: 24px; max-width: 110mm">Lorem ipsum
                        dolor sit amet,
                        consectetur adipiscing elit.
                        Fusce vulputate viverra lectus at facilisis.
                        Suspendisse pretium lacus sit amet diam facilisis tempor.
                        Quisque gravida diam hendrerit bibendum lobortis.
                        Aliquam aliquet mi vel purus tristique, ut ullamcorper odio vehicula.
                        Duis eget nisi eget enim auctor dapibus
                    </div>
                </td>
            </tr>
            <tr style="margin-top: 20mm; margin-bottom: 10mm" class="margin-body row">
                <td class="col quater-page">
                    <div class="circle subject-score"
                         style="background: conic-gradient(#4868b1 0deg, #4868b1 calc(141 / 233 * 360deg),var(--color-grey) calc(141 / 233 * 360deg), var(--color-grey) 360deg);">
                        <div>141 of 223</div>
                        <div>141</div>
                        <div>English</div>
                    </div>

                </td>
                <td class="col quater-page">
                    <div class="circle subject-score"
                         style="background: conic-gradient(#4868b1 0deg, #4868b1 calc(22 / 97 * 360deg),var(--color-grey) calc(22 / 97 * 360deg), var(--color-grey) 360deg);">
                        <div>22 of 97</div>
                        <div>22</div>
                        <div>Math</div>
                    </div>

                </td>
                <td class="col quater-page">
                    <div class="circle subject-score"
                         style="background: conic-gradient(#4868b1 0deg, #4868b1 calc(145 / 233 *360deg),var(--color-grey) calc(145 / 233 *360deg), var(--color-grey) 360deg);">
                        <div>145 of 223</div>
                        <div>145</div>
                        <div>Reading</div>
                    </div>

                </td>
                <td class="col quater-page">
                    <div class="circle subject-score "
                         style="background: conic-gradient(#4868b1 0deg, #4868b1 calc(72 / 233 *360deg),var(--color-grey) calc(72 / 233 *360deg), var(--color-grey) 360deg);">
                        <div>72 of 223</div>
                        <div>72</div>
                        <div>Science</div>
                    </div>

                </td>

            </tr>
            <tr class="margin-body">
                <td class="col title">Score History</td>
            </tr>
            <tr class="margin-body">
                <td>
                    <table id="score-table">
                        <thead style="text-align: center;">
                        <tr>
                            <td class="col" style="width: 20mm">Date</td>
                            <td class="col" style="width: 20mm">Form</td>
                            <td class="col" style="width: 20mm">Score</td>
                            <td class="col number-stats">E</td>
                            <td class="col number-stats">M</td>
                            <td class="col number-stats">R</td>
                            <td class="col number-stats">S</td>
                            <td class="col graphic-stats">Stats</td>
                        </tr>

                        </thead>
                        <tbody style="text-align: center">
                        <tr class="row personal-best">
                            <td class="col" style="width: 20mm">
                                <div>
                                    3.1.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    74FPRE
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div class="best-score-number">
                                    34
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    51
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    17
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    71
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div>
                                    15
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(272 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">272 of 925</span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row">
                            <td class="col" style="width: 20mm">
                                <div>
                                    1.26.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    16MC1
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    27
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    43
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    15
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    87
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div class="best-in-column">
                                    14
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(13 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">13 of 925</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="row">
                            <td class="col" style="width: 20mm">
                                <div>
                                    1.26.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    16MC1
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    27
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    43
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    15
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    87
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div class="best-in-column">
                                    14
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(13 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">13 of 925</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="row">
                            <td class="col" style="width: 20mm">
                                <div>
                                    1.26.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    16MC1
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    27
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    43
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    15
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    87
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div class="best-in-column">
                                    14
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(13 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">13 of 925</span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row">
                            <td class="col" style="width: 20mm">
                                <div>
                                    1.26.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    16MC1
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    27
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    43
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    15
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    87
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div class="best-in-column">
                                    14
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(13 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">13 of 925</span>
                                </div>
                            </td>
                        </tr>


                        <tr class="row">
                            <td class="col" style="width: 20mm">
                                <div>
                                    1.26.2020
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    16MC1
                                </div>
                            </td>
                            <td class="col" style="width: 20mm">
                                <div>
                                    27
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    43
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div class="best-in-column">
                                    15
                                </div>
                            </td>
                            <td class="col number-stats">
                                <div>
                                    87
                                </div>
                            </td>
                            <td class="col  number-stats">
                                <div class="best-in-column">
                                    14
                                </div>
                            </td>
                            <td class="col graphic-stats">
                                <div>
                                <span class="col progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(13 / 925 * var(--progress-bar-width))"></span>
                                    <span class="progress-bar-background"></span>
                                </span>
                                    <span class="col progress-numbers">13 of 925</span>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="row" style="font-size: 14px; margin-top: 5mm; font-weight: 300">
                        <span class="best-score-number" style="font-weight: 500; margin-right: 2mm">34</span>
                        <span style="color: var(--color-dark-grey)">Personal Best</span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="page-init third-page page-break">
        <table>
            <tbody>
            <tr style="margin-top: 10mm" id="scores" class="margin-body">
                <td class="col subject">
                    <div class="column-header">
                        <h3>English</h3>
                        <div class="labels">
                            <span><span>Question #</span></span>
                            <span><span>Your Answer</span></span>
                            <span><span>Correct</span></span>
                            <span><span>Tags</span></span>
                        </div>
                    </div>
                    <div class="questions-container">
                        <div class="question-row">
                            <span>1</span>
                            <span style="background-color: var(--color-red)">B</span>
                            <span>C</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>2</span>
                            <span>&nbsp;</span>
                            <span>A</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>3</span>
                            <span>&nbsp;</span>
                            <span>C</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>4</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>5</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>6</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>7</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>8</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>9</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>

                    </div>
                </td>


                <td class="col subject">
                    <div class="column-header">
                        <h3>Reading</h3>
                        <div class="labels">
                            <span><span>Question #</span></span>
                            <span><span>Your Answer</span></span>
                            <span><span>Correct</span></span>
                            <span><span>Tags</span></span>
                        </div>
                    </div>
                    <div class="questions-container">
                        <div class="question-row">
                            <span>1</span>
                            <span style="background-color: var(--color-red)">B</span>
                            <span>C</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>2</span>
                            <span>&nbsp;</span>
                            <span>A</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>3</span>
                            <span>&nbsp;</span>
                            <span>C</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>4</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>5</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>6</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>7</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>8</span>
                            <span>&nbsp;</span>
                            <span>D</span>
                            <span></span>
                        </div>
                    </div>
                    <div class="subject-legend">
                        <div>
                            <span>LN</span>
                            <span>Literary Narrative</span>
                        </div>
                        <div>
                            <span>SS</span>
                            <span>Social Science</span>
                        </div>
                        <div>
                            <span>HM</span>
                            <span>Humanities</span>
                        </div>
                        <div>
                            <span>NS</span>
                            <span>Natural Science</span>
                        </div>
                    </div>
                </td>


                <td class="col subject math">
                    <div class="column-header">
                        <h3>Math</h3>
                        <div class="labels">
                            <span><span>Question #</span></span>
                            <span><span>Your Answer</span></span>
                            <span><span>Correct</span></span>
                            <span><span>Tags</span></span>
                        </div>
                    </div>
                    <div class="questions-container">
                        <div class="question-row">
                            <span>1</span>
                            <span style="background-color: var(--color-red)">0.56</span>
                            <span>0066 + ...</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>2</span>
                            <span>&nbsp;</span>
                            <span>45</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>3</span>
                            <span>&nbsp;</span>
                            <span>3456</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>4</span>
                            <span>&nbsp</span>
                            <span>0.89</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>5</span>
                            <span>&nbsp;</span>
                            <span>.903</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>6</span>
                            <span>&nbsp;</span>
                            <span>3/2</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>7</span>
                            <span>&nbsp;</span>
                            <span>1/34</span>
                            <span></span>
                        </div>
                        <div class="question-row">
                            <span>8</span>
                            <span>&nbsp;</span>
                            <span>3.89</span>
                            <span></span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr id="legend" class="margin-body">
                <td class="col">
                    <div class="legend-element">
                        <span class="col">?</span>
                        <span class="col">I guest on this question</span>
                    </div>
                </td>
                <td class="col">
                    <div class="legend-element">
                        <span class="col">#</span>
                        <span class="col">I rushed or run out of time on this question</span>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
<div class="page-init fourth-page page-break">
        <table>
            <tbody>
            <tr class="subject-header">
                <td>
                    <div>
                        <span class="col">English</span>
                        <span class="col" style="text-align: right;float: right;">1/2</span>
                    </div>
                </td>
            </tr>
                <tr>
                    <td class="subject-general-score row">
                        <div class="total-core-container">
                            <div class="total-score circle"
                                 style="background: conic-gradient(white 0deg, white calc(111 / 233 * 360deg), var(--color-semi-transparent) calc(111 / 233 * 360deg), var(--color-semi-transparent) 360deg);">
                                <div class="font-semi">111 of 233</div>
                                <div>111</div>
                                <div class="font-semi">Score</div>
                            </div>
                        </div>

                        <div class="partial-score-container">
                            <div class="partial-score-container-title font-semi">Knowledge of the issues</div>
                            <div class="partial-score-charts row">
                                <div class="col">

                                    <div class="partial-score font-semi" id="ps1"
                                         style="background: conic-gradient(var(--color-green) 0deg, var(--color-green) calc(51 / 233 * 360deg), var(--color-semi-transparent) calc(51 / 233 * 360deg), var(--color-semi-transparent) 360deg);">
                                        <div class="score-text">Mastered <br/>issues</div>
                                        <div class="score-number">51</div>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="partial-score font-semi" id="ps2"
                                         style="background: conic-gradient(var(--color-orange) 0deg, var(--color-orange) calc(35 / 233 * 360deg), var(--color-semi-transparent) calc(35 / 233 * 360deg), var(--color-semi-transparent) 360deg);">
                                        <div class="score-text">Issues for <br/> training</div>
                                        <div class="score-number">35</div>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="partial-score font-semi" id="ps3"
                                         style="background: conic-gradient(var(--color-red) 0deg, var(--color-red) calc(14 / 233 * 360deg), var(--color-semi-transparent) calc(14 / 233 * 360deg), var(--color-semi-transparent) 360deg);">
                                        <div class="score-text">Unmanned<br/> issues</div>
                                        <div class="score-number">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="partial-score-container-title font-semi">Total issues: 42</div>
                        </div>

                    </td>
                </tr>



            </tbody>
        </table>

    <div class="section-header"><div>What to Work On - Top Issue</div></div>
    <div class="top-issues-section">
        <div><div class="badge red">34</div></div>
        <div>Plane Geometry and Trigonometry</div>
        <div>Points Lost: <span class="col" style="color: var(--color-red)">4</span></div>
        <div>34 of 233</div>
    </div>
    <div class="top-issues-section">
        <div><div class="badge red">24</div></div>
        <div>Pre-Algebra and Elementary Algebra</div>
        <div>Points Lost: <span class="col" style="color: var(--color-red)">4</span></div>
        <div>28 of 87</div>
    </div>

    <div class="top-issues-section">
        <div><div class="badge red">34</div></div>
        <div>Intermediate Algebra and Coordinate Geometry</div>
        <div>Points Lost: <span class="col" style="color: var(--color-red)">2</span></div>
        <div>12 of 233</div>
    </div>


    <div class="section-header"><div>Strengths & Weaknesses</div></div>
    <div class="top-issues-section">
        <div><div class="badge red">34</div></div>
        <div>Plane Geometry and Trigonometry</div>
        <div>Points Lost: <span class="col"
                               style="color: var(--color-red)">4</span></div>
        <div>34 of 233</div>
    </div>

    <div class="details-row sub-section">
        <div><div class="badge red">34</div></div>
        <div>Plane Geometry</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(4 / 17 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>4 of 17</div>
    </div>

    <div class="details-row first-sub-section">
        <div><div class="badge red">34</div></div>
        <div>Other Polygons</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(7 / 15 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>7 of 15</div>
    </div>

    <div class="details-row second-sub-section">
        <div><div class="badge green">100</div></div>
        <div>Triangles</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(48 / 78 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>48 of 78</div>
    </div>

    <div class="details-row second-sub-section">
        <div><div class="badge green">100</div></div>
        <div>Triangles</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(48 / 78 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>48 of 78</div>
    </div>

    <div class="details-row second-sub-section">
        <div><div class="badge green">100</div></div>
        <div>Triangles</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(48 / 78 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>48 of 78</div>
    </div>

    <div class="details-row second-sub-section">
        <div><div class="badge green">100</div></div>
        <div>Triangles</div>
        <div class="progress-bar-container">
                                    <span class="progress-bar-front"
                                          style="width: calc(48 / 78 * var(--progress-bar-width))"></span>
            <span class="progress-bar-background"></span>
        </div>
        <div>48 of 78</div>
    </div>


    <div class="footer" style="page-break-inside: avoid">
        <div>
            <div class="col" style="text-align: left">
            Doe, Matthew
            </div>
            <div class="col" style="text-align: center">
                ACT 74PRE - Mar.1, 2020
            </div>
            <div class="col" style="text-align: right">
                4/10
            </div>
        </div>
    </div>

</div>
</body>
</html>
