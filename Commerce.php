<!DOCTYPE html>
<html lang="ja">
    <?php include_once __DIR__ . "/static/head/head.php"; ?>
    <title>特定商取引法に基づく表記｜FingerPartner</title>
    <style>
        /*==========================================
        デザイン全体設定の追加設定
        ============================================*/
        /*==========================================
            サイト構造と背景色のデフォルト
            （section直下のdiv）
        ============================================*/
        /*==========================================
            Bootstrapの再設定
        ============================================*/
        .container {
            width: 100%;
        }

        #header .navbar-default {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0);
            border: medium none;
            padding-bottom: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            /*transition: all 0.25s ease-in-out 0s;*/
        }

        @media (min-width: 768px) {
            #header .navbar-default {
                padding-left: 0;
                padding-right: 0;
                border-radius: 0;
            }
        }

        #header .navbar-default ul.navbar-nav {
            padding: 3px;
            width: 100%;
            background-color: #00bcd4;
            /*point_color2*/
            margin-top: 3px;
            margin-left: 0px;
            border-radius: 3px;
        }

        #header .navbar-default ul.navbar-nav li a {
            color: #ffffff;
            /*point_color4*/
            font-size: 16px;
            font-weight: 400;
            padding: 8px;
            text-transform: capitalize;
            /*transition: all 0.25s ease-in-out 0s;*/
        }

        @media screen and (min-width: 768px) {
            #header .navbar-default ul.navbar-nav > li > a {
                border-right: 1px dotted #ccc;
            }

            #header .navbar-default ul.navbar-nav > li:last-child a {
                border: 0 none;
            }
        }

        #header2 .navbar-default ul.navbar-nav li a::after {
            background: none repeat scroll 0 0 rgba(0, 0, 0, 1);
            border-radius: 5em;
            bottom: 2px;
            color: #ffffff;
            content: "";
            height: 4px;
            left: 20px;
            position: absolute;
            transition: all 0.25s ease-in-out 0s;
            width: 32px;
            z-index: 99999;
        }

        #header .navbar-default ul.navbar-nav li a:hover {
            background-color: #0097a7;
            /*point_color1*/
            transition: all 0.25s ease-in-out 0s;
            color: #ffffff;
            /*point_color4*/
        }

        #header .navbar-default ul.navbar-nav li a:hover::after {
            background: #00bcd4 repeat scroll 0 0 #a1a1a1;
            /*point_color2*/
        }

        #header .navbar-default ul.navbar-nav li.active a {
            background-color: #0097a7;
            /*point_color1*/
            /* transition: all 0.25s ease-in-out 0s;*/
            color: #ffffff;
            /*point_color4*/
        }

        #header2 .navbar-default ul.navbar-nav li a.active::after {
            display: none;
        }

        #header2 .navbar-default ul.navbar-nav li a:focus {
            color: #00bcd4;
            /*point_color2*/
        }

        #header .navbar-default .navbar-brand {
            float: none;
            display: block;
            height: auto;
            padding: 0 0 0 15px;
        }

        #header .navbar-default .navbar-brand img {
            max-height: 100px;
            max-width: 80%;
        }

        #header .dropdown-menu {
            background-color: #00bcd4;
            /*point_color2*/
        }

        #header .dropdown-menu a {
            padding: 10px 0 10px 15px;
        }

        #header .navbar-toggle {
            margin-top: 0px;
        }

        #header .navbar-collapse {
            max-height: 340px;
        }

        @media screen and (max-width: 768px) {
            #header .navbar-collapse li:first-child {
                display: inline-block;
                width: 100%;
            }
        }

        #header .navbar-default.be_scrolled {
            background: none repeat scroll 0 0 rgba(255, 255, 255, 0.95);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            /*    transition: all 0.25s ease-in-out 0s;*/
            padding: 5px 15px;
            margin-top: 0px;
            top: 0;
            left: 0;
            right: 0;
            position: fixed;
            z-index: 1030;
            border-width: 0 0 1px;
        }

        @media screen and (min-width: 768px) {
            #header .navbar-default.be_scrolled {
                padding: 0px;
            }
        }

        #header .navbar-default.be_scrolled .container {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        @media screen and (min-width: 768px) {
            #header .navbar-default.be_scrolled .container {
                padding-top: 0px;
                padding-bottom: 5px;
            }
        }

        #header .navbar-default.be_scrolled .navbar-brand img {
            max-height: 50px;
            width: auto;
        }

        #header2 .navbar-default.be_scrolled ul.navbar-nav {
            padding: 5px 0px;
        }

        #header .be_navbar_box {
            padding: 5px;
            width: 100%;
            background-color: #f3f3f3;
            margin: 0px;
        }

        #header .navbar-default .navbar-header {
            margin: 0;
        }

        @media screen and (min-width: 768px) {
            #header .navbar-default .navbar-header {
                width:100%;
            }
        }

        #header2 .be_top-area {
            height: 0px;
        }

        .navbar-toggle {
            border: none;
            border-radius: 0px;
            font-size: 35px;
            margin: 0 5px;
            padding: 6px 6px 6px 14px;
            color: #0097a7;
            /*point_color1*/
        }

        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
            background-color: #b2ebf2;
            /*point_color3*/
        }

        .btn {
            border-radius: 2px;
        }

        .btn-group-lg > .btn, .btn-lg {
            border-radius: 2px;
        }

        .well {
            white-space: normal;
        }

        blockquote {
            background: #eee url(http://www.dekiru-web.net/image/123.gif) no-repeat 10px 10px;
            padding: 25px;
            font-family: "ヒラギノ角ゴ Pro W3","Hiragino Kaku Gothic Pro",Meiryo,"メイリオ",Helvetica,Sans-Serif;
        }

        /*-------------------
        v-table(2列の表をスマホ時縦に並べる）
        ---------------------*/
        .v-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .v-table th, .v-table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .v-table th {
            background: #f4f4f4;
            width: 30%;
            text-align: left;
            vertical-align: top;
        }

        @media only screen and (max-width: 500px) {
            .v-table th, .v-table td {
                width: 100%;
                display: block;
                border-top: none;
            }

            .v-table tr:first-child th {
                border-top: 1px solid #ddd;
            }
        }

        .v-table-th2 {
            background-color: #666666 !important;
            color: #fff;
        }

        .v-table-th3 {
            background-color: #f5f5e9 !important;
            color: #000;
            font-size: 17px;
            text-align: right !important;
        }

        /*==========================================
            必須プラグイン
        ============================================*/
        /*メインメニュー（ヘッダー用）*/
        .be_top_navibar {
            background-color: #eee;
            border: none;
        }

        .be_top_navibar .navbar-header {
            background-color: #f5f5f5;
            border-color: #cccccc;
        }

        .be_top_navibar .navbar-nav > li > a {
            color: #808080;
            font-size: 1.1em;
        }

        .be_top_navibar .navbar-nav > li > a:hover {
            color: #000;
            background-color: rgba(255,255,255,0.3);
        }

        .be_top_navibar .navbar-nav > .active > a, .be_top_navibar .navbar-nav > .active > a:hover {
            color: #000;
        }

        .be_top_navibar .navbar-toggle {
            background-color: #ddd;
        }

        /*メインメニュー（ヘッダー用）ＰＣ用*/
        @media (min-width: 768px) {
            .be_top_navibar {
                background-color: #f5f5f5;
                border-color: #999;
            }

            .be_top_navibar .navbar-header {
                background-image: none;
            }
        }

        /*サブメニュー（ヘッダー用）*/
        /*メインメニュー（サブコンテンツ用）*/
        .be_side_navi {
            border-left: 1px solid #CCCCCC;
            border-right: 1px solid #CCCCCC;
            border-bottom: 1px solid #CCCCCC;
            border-top-width: 5px;
            border-top-style: solid;
            border-top-color: #666666;
            color: #333333;
            font-size: 1.0em;
            margin-top: 0px;
            margin-bottom: 12px;
            padding: 0px;
            border-radius: 3px;
            background-color: #ffffff;
        }

        .be_side_navi ul {
            padding: 0px;
            list-style: outside none none;
        }

        .be_side_navi a i:first-child {
            margin: 0 5px 0 0;
        }

        .be_side_navi li > a {
            padding: 10px;
            border-top: 1px solid #ccc;
            border-radius: 0;
            display: block;
            text-decoration: none;
        }

        .be_side_navi .nav-pills > li.active > a, .be_side_navi .nav-pills > li.active > a:focus, .be_side_navi .nav-pills > li.active > a:hover {
            background-color: #eee;
            color: #000;
        }

        .be_side_navi .nav-stacked > li + li {
            margin-top: 0px;
        }

        .be_side_navi > ul > li > ul > li > a {
            border: none;
        }

        .be_side_navi a:hover, .be_side_navi a:focus {
            background-color: #eee;
            color: #000;
        }

        .be_side_navi > ul > li:last-child > a {
        }

        /*サブメニュー（サブコンテンツ用）*/
        /*メインメニュー（フッター用）*/
        /*サブメニュー（フッター用）*/
        .be_foot_navibar {
            text-align: center;
            background-color: #0097a7;
            /*point_color1*/
            margin: 0 -15px;
            padding: 10px 0;
        }

        .be_foot_navibar a {
            color: #fff;
            text-decoration: none;
            font-size: 12px;
        }

        .be_foot_navibar ul {
            padding-left: 0px;
            margin: 0;
        }

        .be_foot_navibar li {
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            border-left: 1px dotted #abaaa7;
        }

        .be_foot_navibar li:first-child {
            border-left: none;
        }

        /*サブメニュー（フッター用）ＰＣ用*/
        @media (min-width: 768px) {
            .be_foot_navibar a {
                font-size:15px;
            }
        }

        /*パンくずリンク*/
        .breadcrumb {
            display: none
        }

        /*パンくずリンク（ＰＣ用）*/
        @media (min-width: 768px) {
            .breadcrumb {
                background: none;
                display: block;
                border-radius: 0;
                font-size: 11px;
                margin: 0;
                padding: 8px 0;
            }
        }

        /*サイトマップ*/
        .plug_sitemap dl {
            margin: 5px 0 10px;
        }

        .plug_sitemap dt a {
            background: #eee none repeat scroll 0 0;
            border-radius: 3px;
            color: #333333;
            display: block;
            font-weight: bold;
            padding: 4px 0 3px 5px;
            text-decoration: none;
        }

        .plug_sitemap dt a:hover {
            background: #f1f1f1;
        }

        .plug_sitemap dd {
            padding: 5px 0;
        }

        .plug_sitemap dd ul {
            padding-left: 0px;
        }

        .plug_sitemap dd li {
            list-style-type: none;
        }

        .plug_sitemap dd li a {
            display: block;
        }

        .plug_sitemap a i {
            margin: 0 10px 0 0;
        }

        /*更新履歴*/
        .whatsnew .row {
            margin: 3px 0;
        }

        .whatsnew hr {
            margin: 0;
        }

        .whatsnew .label {
            border-radius: 0;
            padding: 1px 10px;
            margin: 0 15px;
            font-size: 10px;
        }

        .whatsnew .whatsnew-date, .whatsnew .whatsnew-content {
            font-size: 14px;
        }

        @media (min-width: 768px) {
            .whatsnew hr {
                margin:5px 0;
            }

            .whatsnew .label {
                padding: 2px 10px;
                margin: 2px 10px;
                font-size: 11px;
            }

            .whatsnew .whatsnew-date, .whatsnew .whatsnew-content {
                font-size: 15px;
            }
        }

        /*記事最下部用シェア*/
        .share-area {
            display: table;
            border: 1px solid #eeeeee;
            width: 100%;
        }

        .share-area-facebook-left {
            display: table-cell;
        }

        .share-area-facebook-right {
            padding: 15px;
            display: table-cell;
            background-color: #57544e;
            vertical-align: middle;
            text-align: center;
            color: #fff;
        }

        /*シェアボタン*/
        .social-area-syncer {
            width: 100% ;
            background: #ffffff ;
            padding: 5px ;
        }

        @media screen and ( min-width: 480px ) {
            .social-area-syncer {
            }
        }

        ul.social-button-syncer {
            width: 238px ;
            margin: 5px auto ;
            padding: 0 ;
            border: none ;
            list-style-type: none ;
        }

        @media screen and ( min-width: 480px ) {
            ul.social-button-syncer {
                width: 410px ;
            }
        }

        ul.social-button-syncer li {
            float: left ;
            text-align: center ;
            height: 71px ;
            margin: 0 8px ;
            padding: 0 ;
        }

        .sc-tw {
            width: 71px ;
        }

        .sc-tw svg {
            width: 30px ;
            height: 30px ;
        }

        .sc-tw a {
            height: 56px ;
            margin: 0 auto ;
            padding-top: 6px ;
            display: block ;
            background: #1B95E0 ;
            font-size: 12px ;
            color: #fff ;
            font-weight: 700 ;
            text-decoration: none ;
            letter-spacing: .5px ;
            border-radius: 2px ;
        }

        .sc-tw a:hover {
            color: #fff ;
            background: #0c7abf ;
        }

        .sc-tw span:before {
            white-space: pre ;
            content: '\A' ;
        }

        .sc-fb {
            z-index: 99 ;
            width: 69px ;
        }

        .sc-li {
            width: 50px ;
        }

        .sc-li-img {
            border: none ;
            margin: 0 auto ;
            padding: 0 ;
            width: 36px ;
            height: 60px ;
        }

        @media screen and ( min-width: 480px ) {
            .sc-li {
                display: none ;
            }
        }

        /*==========================================
        記事用
        ============================================*/
        .be_block_000 {
            margin: 0;
        }

        .be_block_000_tb10 {
            margin: 10px 0;
        }

        .be_block_000_btm10 {
            margin: 0 0 10px 0;
        }

        /*-------------------
        be_block_001
        ---------------------*/
        .be_block_001 {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_001 > .m_on {
            border-left: 1px solid #CCCCCC;
            border-right: 1px solid #CCCCCC;
            border-bottom: 1px solid #CCCCCC;
            border-top-width: 5px;
            border-top-style: solid;
            border-top-color: #0097a7;
            /*point_color1*/
            color: #333333;
            font-size: 1.4em;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 6px;
            padding: 9px;
            border-radius: 3px;
        }

        .be_block_001 > .m_on > h1, .be_block_001 > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_001 > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_001 > div {
            padding: 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        be_block_001_b
        ---------------------*/
        .be_block_001_b {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_001_b > .m_on {
            border-left: 1px solid #CCCCCC;
            border-right: 1px solid #CCCCCC;
            border-top-width: 5px;
            border-top-style: solid;
            border-top-color: #0097a7;
            /*point_color1*/
            color: #333333;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 0px;
            padding: 9px;
            border-radius: 2px 2px 0px 0px;
        }

        .be_block_001_b > .m_on > h1, .be_block_001_b > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_001_b > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
            border-radius: 0px 0px 2px 2px;
        }

        /*-------------------
        be_block_002
        ---------------------*/
        .be_block_002 {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_002 > .m_on {
            background-color: #0097a7;
            /*point_color1*/
            margin-bottom: 6px;
            margin-top: 0px;
            font-size: 1.2em;
            color: #ffffff;
            /*point_color4*/
            padding: 12px;
            font-weight: bold;
            border-radius: 3px;
        }

        .be_block_002 > .m_on > h1, .be_block_002 > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_002 > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_002 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        be_block_002_b
        ---------------------*/
        .be_block_002_b {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_002_b > .m_on {
            background-color: #0097a7;
            /*point_color1*/
            font-size: 1.2em;
            color: #FFFFFF;
            font-weight: bold;
            padding: 12px;
            border-radius: 3px 3px 0px 0px;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .be_block_002_b > .m_on > h1, .be_block_002_b > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_002_b > .k_on {
            padding: 8px;
            margin-top: 0px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
            border-radius: 0px 0px 2px 2px;
        }

        .be_block_002_b > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠3
        ---------------------*/
        .be_block_003 {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_003 > .m_on {
            border-bottom: 1px solid #CCCCCC;
            border-left-width: 9px;
            border-left-style: solid;
            border-left-color: #0097a7;
            /*point_color1*/
            color: #333333;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 0px;
            margin-bottom: 6px;
            padding: 9px;
        }

        .be_block_003 > .m_on > h1, .be_block_003 > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_003 > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_003 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠4
        ---------------------*/
        .be_block_004 {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_004 > .m_on {
            background-color: #eee;
            margin-bottom: 6px;
            margin-top: 0px;
            font-size: 1.2em;
            color: #666;
            padding: 12px;
            font-weight: bold;
            border-radius: 3px;
        }

        .be_block_004 > .m_on > h1, .be_block_004 > .m_on > h2 {
            font-size: 1.2em;
            margin: 0;
        }

        .be_block_004 > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_004 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠5
        ---------------------*/
        .be_block_005 {
            padding: 0px;
            margin: 0px;
            margin-bottom: 15px;
            clear: both;
        }

        .be_block_005 > .m_on {
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #0097a7;
            /*point_color1*/
            color: #333333;
            font-size: 1em;
            margin-top: 0px;
            margin-bottom: 6px;
            padding: 9px;
        }

        .be_block_005 > .m_on > h1, .be_block_005 > .m_on > h2 {
            font-size: 1em;
            margin: 0;
        }

        .be_block_005 > .k_on {
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_005 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠6
        ---------------------*/
        .be_block_006 {
            padding: 0px;
            margin: 0px;
            clear: both;
            border-radius: 2px;
        }

        .be_block_006 > .m_on {
            background-color: #0097a7;
            /*point_color1*/
            font-size: 1.3em;
            color: #FFFFFF;
            font-weight: bold;
            padding: 10px 6px;
            margin-bottom: 0px;
            margin-top: 0px;
            text-align: center;
        }

        .be_block_006 > .m_on > h1, .be_block_006 > .m_on > h2 {
            font-size: 1.3em;
            margin: 0;
        }

        @media (min-width: 768px) {
            .be_block_006 > .m_on {
                font-size: 2.2em;
                padding: 30px 12px;
            }

            .be_block_006 > .m_on > h1, .be_block_006 > .m_on > h2 {
                font-size: 2.2em;
                margin: 0;
            }
        }

        .be_block_006 > .k_on {
            padding: 15px;
            margin-top: 0px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_006 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠7
        ---------------------*/
        .be_block_007 {
            padding: 0px;
            margin: 0px;
            clear: both;
            border-radius: 2px;
        }

        .be_block_007 > .m_on {
            background-color: #f1f1f1;
            font-size: 1.3em;
            color: #333;
            font-weight: bold;
            padding: 20px 16px;
            margin-bottom: 0px;
            margin-top: 0px;
        }

        .be_block_007 > .m_on > h1, .be_block_007 > .m_on > h2 {
            font-size: 1.3em;
            margin: 0;
        }

        .be_block_007 > .k_on {
            padding: 8px;
            margin-top: 0px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_007 > div {
            padding: 15px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        見出し＆記事枠8
        ---------------------*/
        .be_block_008 {
            padding: 0px;
            margin: 10px 0 0 0;
            clear: both;
            border-radius: 4px;
        }

        .be_block_008 > .m_on {
            border-radius: 30px;
            background-color: #0097a7;
            /*point_color1*/
            font-size: 1.1em;
            color: #FFFFFF;
            font-weight: bold;
            padding: 10px 6px;
            margin-bottom: 10px;
            margin-top: 0px;
            text-align: center;
            position: relative;
        }

        .be_block_008 > .m_on:after {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: #fff;
            border-top-color: #0097a7;
            /*point_color1*/
            border-width: 10px;
            margin-left: -10px;
        }

        @media (min-width: 768px) {
            .be_block_008 > .m_on {
                font-size: 1.5em;
                padding: 12px;
            }

            .be_block_008 > .m_on:after {
                border-width: 15px;
            }
        }
        }

        .be_block_008 > .k_on {
            padding: 15px;
            margin-top: 0px;
            margin-bottom: 12px;
            border: 1px solid #CCCCCC;
        }

        .be_block_008 > div {
            padding: 5px 0;
            margin-top: 0px;
            margin-bottom: 12px;
        }

        /*-------------------
        記事に背景を適用
        ---------------------*/
        .be_back_image {
            position: relative;
            > img {
                max-width: 100%;
                height: auto;
                display: block;
                margin: 0 auto;
            }
        }

        .be_back_image_in {
            position: absolute;
            top: 5px;
            left: 5px;
            -webkit-transform: translate(10px, 15px);
            transform: translate(10px, 15px);
            background-color: rgba(255,255,255,0.7);
        }

        .be_back_image_in2 > div {
            width: 90%;
            margin: 0 auto;
            font-size: 1rem;
            line-height: 1.7;
            padding: 20px 0;
        }
        }

        @media only screen and (max-width: 480px) {
            .be_back_image {
                overflow: scroll;
            }

            .be_back_image_in {
                width: 100%;
            }
        }

        /*-------------------
        リストアイコン
        ---------------------*/
        .list_icon {
            border-collapse: separate;
            border-spacing: 3px 0;
            display: table;
            margin: 0;
        }

        .list_icon p {
            display: table-cell;
            vertical-align: middle;
        }

        .list_icon .label {
            border-radius: 1em;
            display: block;
            font-family: Verdana;
            font-size: 1.4em;
            line-height: unset;
            margin: 0.4em 0.2em;
            /*
            padding: 0.3em 0.6em;

            */
        }

        /*==========================================
            デザインパーツ（ヘッダー、サイド、フッター）
            プラグインのcssはここには記載しない
        ============================================*/
        /*-------------------
        デザインパーツ（ヘッダー）
        ---------------------*/
        /*★h1エリア背景*/
        .be_h1_area {
            margin-bottom: 0px;
            border-top-width: 5px;
            border-top-style: solid;
            border-top-color: #0097a7;
            /*point_color1*/
        }

        @media (min-width: 768px) {
            .be_h1_area {
                margin-bottom:0px;
            }
        }

        /*h1エリア左側*/
        .be_h1_area_left {
        }

        .be_h1_area_left h1 {
            margin-bottom: 0;
            margin-top: 0;
            padding-bottom: 1px;
            padding-top: 4px;
            font-size: 12px;
        }

        /*h1エリア右側*/
        .be_h1_area_right {
            font-size: 12px;
            padding-top: 2px;
        }

        .be_h1_area_right a {
            margin-bottom: 0;
            margin-top: 0;
        }

        /*タイトルエリア*/
        .be_title_area {
            height: auto;
            padding-top: 0px;
            padding-bottom: 0px;
        }

        @media (min-width: 768px) {
            .be_title_area {
                height: auto;
                padding-top: 5px;
                padding-bottom: 5px;
            }
        }

        /*タイトルエリア左側*/
        .be_title_area_left {
        }

        /*タイトルエリア右側*/
        .be_title_area_right {
            text-align: center;
            font-size: 13px;
            /*background-color: #f6f6f6;*/
        }

        /*タイトルエリア右側（ＰＣ用）*/
        @media (min-width: 768px) {
            .be_title_area_right {
                padding-top: 0px;
                text-align: right;
            }
        }

        /*電話文字大きさ*/
        .be_title_tel {
            font-size: 25px;
            /*電話番号の文字の大きさ*/
            font-weight: bold;
            /*フォントの太さ*/
            color: #999;
            line-height: 1;
        }

        /*電話文字大きさ（ＰＣ用）*/
        @media (min-width: 992px) {
            .be_title_tel {
                font-size:30px;
                /*電話番号の文字の大きさ*/
            }
        }

        .be_title_tel:hover {
            text-decoration: none;
        }

        /*-------------------
        デザインパーツ（メインコンテンツ下部）
        ---------------------*/
        /*メール予約ボタン（大）*/
        .be_yoyaku_big {
            font-size: 1em;
            padding: 0;
            margin: 0px 20px;
        }

        /*メール予約ボタン（大）（ＰＣ用）*/
        @media (min-width: 768px) {
            .be_yoyaku_big {
                font-size: 2em;
                margin: 0px 20px;
            }
        }

        /*-------------------
        デザインパーツ（サブコンテンツ）
        ---------------------*/
        /*サイド用電話文字大きさ*/
        .be_tel_m {
            font-size: 30px;
            /*電話番号の文字の大きさ*/
            font-weight: bold;
            /*フォントの太さ*/
            color: #cc3201;
        }

        /*サイド用電話文字大きさ（ＰＣ用）*/
        @media (min-width: 768px) {
            .be_tel_m {
                font-size:27px;
                /*電話番号の文字の大きさ*/
            }
        }

        /*------------------------------------------
        デザインパーツ（フッター）
        --------------------------------------------*/
        /*フッターロゴ*/
        .be_foot_logo {
            color: #00467c;
            font-size: 20px;
        }

        .be_foot_main {
            background-color: #57544e;
            margin: 0 -15px;
            padding: 10px 0;
        }

        .be_foot_main span {
            display: block;
            color: #fff;
            font-size: 12px;
        }

        .be_foot_main .company {
            font-size: 22px;
        }

        /* フッター用のSNSアイコン */
        ul.circle_group {
            margin: auto;
            list-style: none;
            padding: 0;
            text-align: center;
        }

        .sns_circle {
            position: relative;
            width: 40px;
            height: 40px;
            margin: 0 2px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.4);
            display: inline-block;
            list-style: none;
        }

        .sns_circle span {
            position: absolute;
            padding: 8px;
            font-size: 25px;
            color: #FFF;
        }

        .sns_circle a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            text-indent: -999px;
            color: #FFF;
        }

        .sns_circle a:hover {
            background-color: #FFF;
            filter: alpha(opacity=50);
            -moz-opacity: 0.5;
            opacity: 0.5;
        }

        .sns_circle.feedly {
            background-color: #6CC655;
        }

        .sns_circle.facebook {
            background-color: #265a96;
        }

        .sns_circle.twitter {
            background-color: #00acec;
        }

        .sns_circle.hatebu {
            background-color: #006fbb;
        }

        .sns_circle.pocket {
            background-color: #EE4256;
        }

        .sns_circle.googleplus {
            background-color: #dd4b39;
        }

        .sns_circle.line {
            background-color: #2cbf13;
        }

        .sns_circle.feed {
            background-color: #ff9900;
        }

        .sns_circle.youtube {
            background-color: #e22d26;
        }

        /*コピーライト部*/
        .be_copyright, .be_copyright a {
            font-size: 13px;
            padding-top: 4px;
            padding-bottom: 4px;
            text-align: center;
        }

        /*トップへ戻るボタン*/
        .page-top {
            position: fixed;
            bottom: 60px;
            right: 5px;
            font-size: 77%;
        }

        @media (min-width: 768px) {
            .page-top {
                bottom: 20px;
            }
        }

        .page-top a {
            background: #999;
            text-decoration: none;
            color: #fff !important;
            width: 80px;
            padding: 10px 0;
            text-align: center;
            display: block;
            border-radius: 2px;
        }

        .page-top a:hover {
            text-decoration: none !important;
            background: #ccc !important;
        }

        /*Sticky footer styles フッターエリアを下端に合わせる処理*/
        html, body {
            height: 100%;
        }

        #push, #footer {
            height: auto;
        }

        #footer {
            margin-top: 0px;
            margin-bottom: 70px;
        }

        @media (min-width: 768px) {
            #footer {
                margin-bottom: 0px;
            }
        }

        #page-top {
            bottom: 20px;
            font-size: 77%;
            position: fixed;
            right: 20px;
        }

        #page-top a {
            background: none repeat scroll 0 0 #333;
            border-radius: 5px;
            color: #fff;
            display: block;
            padding: 20px 0;
            text-align: center;
            text-decoration: none;
            width: 80px;
        }

        #page-top a:hover {
            background: none repeat scroll 0 0 #ccc;
            text-decoration: none;
        }

        /*フッターフロートの問合せボタン*/
        .footer-tel {
            width: 100%;
            padding-top: 8px;
            padding-bottom: 8px;
            position: fixed;
            bottom: 0px;
            background-color: rgba(255, 255, 255, 0.5);
            z-index: 100;
            display: none;
            left: 0;
        }

        .footer-tel ul {
            border-collapse: separate;
            border-spacing: 3px 0;
            display: table;
            list-style-type: none;
            overflow: hidden;
            padding-left: 4px;
            padding-right: 4px;
            width: 100%;
        }

        .footer-tel li {
            display: table-cell;
        }

        .footer-tel i {
            display: table-cell;
            vertical-align: middle;
        }

        .footer-tel a {
            background-color: #ffc23e;
            border-collapse: separate;
            border-radius: 2px;
            border-spacing: 3px 0;
            color: #fff;
            display: table;
            padding-left: 8px;
            padding-right: 8px;
            width: 100%;
        }

        .footer-tel li:last-child a {
            background-color: #ff5544;
        }

        .footer-tel a:hover {
            text-decoration: none;
        }

        .footer-tel li > a > span {
            display: table-cell;
            font-size: 14px;
            line-height: 14px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px 2px;
            position: relative;
            text-align: left;
            vertical-align: middle;
            white-space: nowrap;
        }

        .footer-tel li > a > span > strong {
            display: block;
            font-size: 9px;
            line-height: 9px;
            padding-top: 2px;
            text-align: left;
            white-space: nowrap;
        }

        .table2 {
            width: 100%;
        }

        .table2 th,.table2 td {
            padding: 15px;
            text-align: center;
            border: 1px solid #cccccc;
        }

        .table2 th {
            background-color: #f4f4f4;
        }

        /*==========================================
            ボタン素材
        ============================================*/
        /*ボタンベース（領域のリセット）*/
        .be_btn {
            -moz-user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857;
            margin-bottom: 0;
            padding: 6px 12px;
            text-align: center;
            vertical-align: middle;
            white-space: normal;
            background-color: #fff;
            border-color: #ccc;
            color: #333;
        }

        .be_btn:hover,.be_btn:focus,.be_btn:active {
            text-decoration: none;
        }

        .be_btn:active {
        }

        .be_btn:hover {
        }

        /*-------------------
        ボタンベース（大きさ）
        ---------------------*/
        .be_btn-xs {
            border-radius: 2px;
            font-size: 11px;
            line-height: 1.0;
            padding: 1px 3px;
        }

        .be_btn-sm {
            border-radius: 3px;
            font-size: 12px;
            line-height: 1.1;
            padding: 2px 6px;
        }

        .be_btn-lg {
            border-radius: 4px;
            font-size: 17px;
            line-height: 1.2;
            padding: 4px 13px;
        }

        .be_btn-100 {
            width: 100%;
        }

        @media (min-width: 768px) {
            .be_btn-xs {
                border-radius: 3px;
                font-size: 12px;
                line-height: 1.5;
                padding: 1px 5px;
            }

            .be_btn-sm {
                border-radius: 3px;
                font-size: 12px;
                line-height: 1.5;
                padding: 5px 10px;
            }

            .be_btn-lg {
                border-radius: 4px;
                font-size: 18px;
                line-height: 1.33333;
                padding: 10px 16px;
            }
        }

        /*-------------------
        ボタン000
        ---------------------*/
        .be_btn[class*="be_btn_000"]:active {
            background-image: none;
            box-shadow: 0 7px 15px rgba(0, 0, 0, 0.225) inset;
            outline: 0 none;
        }

        /*白*/
        .be_btn_000_0 {
            background-color: #fff;
        }

        .be_btn_000_0:hover {
            background-color: #eee;
        }

        /*赤*/
        .be_btn_000_1 {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff;
        }

        .be_btn_000_1:hover,.be_btn_000_1:focus {
            background-color: #c9302c;
            border-color: #ac2925;
            color: #fff;
        }

        /*オレンジ*/
        .be_btn_000_2 {
            background-color: #ff9349;
            border-color: #eea236;
            color: #fff;
        }

        .be_btn_000_2:hover,.be_btn_000_2:focus {
            background-color: #f27a3c;
            border-color: #d58512;
            color: #fff;
        }

        /*黄*/
        .be_btn_000_3 {
            background-color: #FFDD32;
            border-color: #ffcd1b;
            color: #963;
        }

        .be_btn_000_3:hover,.be_btn_000_3:focus {
            background-color: #ffcd1b;
            border-color: #f5b015;
            color: #963;
        }

        /*黄緑*/
        .be_btn_000_4 {
            background-color: #dbf332;
            border-color: #cee625;
            color: #3f5d01;
        }

        .be_btn_000_4:hover,.be_btn_000_4:focus {
            background-color: #cee625;
            border-color: #bbd312;
            color: #3f5d01;
        }

        /*緑*/
        .be_btn_000_5 {
            background-color: #5cb85c;
            border-color: #4cae4c;
            color: #fff;
        }

        .be_btn_000_5:hover,.be_btn_000_5:focus {
            background-color: #449d44;
            border-color: #398439;
            color: #fff;
        }

        /*水色*/
        .be_btn_000_6 {
            background-color: #5bc0de;
            border-color: #46b8da;
            color: #fff;
        }

        .be_btn_000_6:hover,.be_btn_000_6:focus {
            background-color: #31b0d5;
            border-color: #269abc;
            color: #fff;
        }

        /*青*/
        .be_btn_000_7 {
            background-color: #337ab7;
            border-color: #2e6da4;
            color: #fff;
        }

        .be_btn_000_7:hover,.be_btn_000_7:focus {
            background-color: #286090;
            border-color: #204d74;
            color: #fff;
        }

        /*紫*/
        .be_btn_000_8 {
            background-color: #9932FF;
            border-color: #7a13da;
            color: #fff;
        }

        .be_btn_000_8:hover,.be_btn_000_8:focus {
            background-color: #8a23ea;
            border-color: #8a23ea;
            color: #fff;
        }

        /*ピンク*/
        .be_btn_000_9 {
            background-color: #ff85df;
            border-color: #e971cb;
            color: #fff;
        }

        .be_btn_000_9:hover,.be_btn_000_9:focus {
            background-color: #e971cb;
            border-color: #d25ab4;
            color: #fff;
        }

        /*茶*/
        .be_btn_000_10 {
            background-color: #BF7226;
            border-color: #a6590d;
            color: #fff;
        }

        .be_btn_000_10:hover,.be_btn_000_10:focus {
            background-color: #a6590d;
            border-color: #994c00;
            color: #fff;
        }

        /*グレー*/
        .be_btn_000_11 {
            background-color: #ddd;
            border-color: #bbb;
            color: #666;
        }

        .be_btn_000_11:hover,.be_btn_000_11:focus {
            background-color: #ccc;
            border-color: #999;
            color: #666;
        }

        /*黒*/
        .be_btn_000_12 {
            background-color: #444;
            color: #fff;
        }

        .be_btn_000_12:hover,.be_btn_000_12:focus {
            background-color: #222;
            color: #fff;
        }

        /*-------------------
        ボタン001
        ---------------------*/
        .be_btn[class*="be_btn_001"] {
            position: relative;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
        }

        .be_btn[class*="be_btn_001"]:active {
            top: 3px;
            box-shadow: none;
        }

        /*白*/
        .be_btn_001_0 {
            background-color: #fff;
            box-shadow: 0 3px 0 #eee;
        }

        .be_btn_001_0:hover {
            background-color: #eee;
        }

        /*赤*/
        .be_btn_001_1 {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff;
            box-shadow: 0 3px 0 #ac2925;
        }

        .be_btn_001_1:hover,.be_btn_001_1:focus {
            background-color: #c9302c;
            border-color: #ac2925;
            color: #fff;
        }

        /*オレンジ*/
        .be_btn_001_2 {
            background-color: #ff9349;
            border-color: #eea236;
            color: #fff;
            box-shadow: 0 3px 0 #d58512;
        }

        .be_btn_001_2:hover,.be_btn_001_2:focus {
            background-color: #f27a3c;
            border-color: #d58512;
            color: #fff;
        }

        /*黄*/
        .be_btn_001_3 {
            background-color: #FFDD32;
            border-color: #ffcd1b;
            color: #963;
            box-shadow: 0 3px 0 #f5b015;
        }

        .be_btn_001_3:hover,.be_btn_001_3:focus {
            background-color: #ffcd1b;
            border-color: #f5b015;
            color: #963;
        }

        /*黄緑*/
        .be_btn_001_4 {
            background-color: #dbf332;
            border-color: #cee625;
            color: #3f5d01;
            box-shadow: 0 3px 0 #bbd312;
        }

        .be_btn_001_4:hover,.be_btn_001_4:focus {
            background-color: #cee625;
            border-color: #bbd312;
            color: #3f5d01;
        }

        /*緑*/
        .be_btn_001_5 {
            background-color: #5cb85c;
            border-color: #4cae4c;
            color: #fff;
            box-shadow: 0 3px 0 #398439;
        }

        .be_btn_001_5:hover,.be_btn_001_5:focus {
            background-color: #449d44;
            border-color: #398439;
            color: #fff;
        }

        /*水色*/
        .be_btn_001_6 {
            background-color: #5bc0de;
            border-color: #46b8da;
            color: #fff;
            box-shadow: 0 3px 0 #269abc;
        }

        .be_btn_001_6:hover,.be_btn_001_6:focus {
            background-color: #31b0d5;
            border-color: #269abc;
            color: #fff;
        }

        /*青*/
        .be_btn_001_7 {
            background-color: #337ab7;
            border-color: #2e6da4;
            color: #fff;
            box-shadow: 0 3px 0 #204d74;
        }

        .be_btn_001_7:hover,.be_btn_001_7:focus {
            background-color: #286090;
            border-color: #204d74;
            color: #fff;
        }

        /*紫*/
        .be_btn_001_8 {
            background-color: #9932FF;
            border-color: #7a13da;
            color: #fff;
            box-shadow: 0 3px 0 #8a23ea;
        }

        .be_btn_001_8:hover,.be_btn_001_8:focus {
            background-color: #8a23ea;
            border-color: #8a23ea;
            color: #fff;
        }

        /*ピンク*/
        .be_btn_001_9 {
            background-color: #ff85df;
            border-color: #e971cb;
            color: #fff;
            box-shadow: 0 3px 0 #d25ab4;
        }

        .be_btn_001_9:hover,.be_btn_001_9:focus {
            background-color: #e971cb;
            border-color: #d25ab4;
            color: #fff;
        }

        /*茶*/
        .be_btn_001_10 {
            background-color: #BF7226;
            border-color: #a6590d;
            color: #fff;
            box-shadow: 0 3px 0 #994c00;
        }

        .be_btn_001_10:hover,.be_btn_001_10:focus {
            background-color: #a6590d;
            border-color: #994c00;
            color: #fff;
        }

        /*グレー*/
        .be_btn_001_11 {
            background-color: #ddd;
            border-color: #bbb;
            color: #666;
            box-shadow: 0 3px 0 #999;
        }

        .be_btn_001_11:hover,.be_btn_001_11:focus {
            background-color: #ccc;
            border-color: #999;
            color: #666;
        }

        /*黒*/
        .be_btn_001_12 {
            background-color: #444;
            border-color: #222;
            color: #fff;
            box-shadow: 0 3px 0 #222;
        }

        .be_btn_001_12:hover,.be_btn_001_12:focus {
            background-color: #222;
            border-color: #000;
            color: #fff;
        }

        /*-------------------
        ボタン002
        ---------------------*/
        .be_btn[class*="be_btn_002"] {
            -webkit-transition: none;
            transition: none;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
        }

        .be_btn[class*="be_btn_002"]:hover {
            box-shadow: inset 0 3px 25px rgba(0, 0, 0, .2);
            text-shadow: 0 1px 1px rgba(255, 255, 255, .4);
        }

        .be_btn[class*="be_btn_002"]:active {
            box-shadow: inset 0 3px 25px rgba(0, 0, 0, .5);
            text-shadow: 0 1px 1px rgba(255, 255, 255, .6);
        }

        /*白*/
        .be_btn_002_0 {
            background-color: #fff;
            box-shadow: 0 3px 0 #eee;
            background-image: -webkit-linear-gradient(top, #fff, #ddd);
        }

        .be_btn_002_0:hover {
            background-color: #eee;
        }

        /*赤*/
        .be_btn_002_1 {
            background-color: #d9534f;
            border-color: #d43f3a;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #fd7773, #c7413d);
        }

        .be_btn_002_1:hover,.be_btn_002_1:focus {
            background-color: #c9302c;
            border-color: #ac2925;
            color: #fff;
        }

        /*オレンジ*/
        .be_btn_002_2 {
            background-color: #ff9349;
            border-color: #eea236;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #ffca61, #ec8036);
        }

        .be_btn_002_2:hover,.be_btn_002_2:focus {
            background-color: #f27a3c;
            border-color: #d58512;
            color: #fff;
        }

        /*黄*/
        .be_btn_002_3 {
            background-color: #FFDD32;
            border-color: #ffcd1b;
            color: #963;
            background-image: -webkit-linear-gradient(top, #ffee50, #e4c217);
        }

        .be_btn_002_3:hover,.be_btn_002_3:focus {
            background-color: #ffcd1b;
            border-color: #f5b015;
            color: #963;
        }

        /*黄緑*/
        .be_btn_002_4 {
            background-color: #dbf332;
            border-color: #cee625;
            color: #3f5d01;
            background-image: -webkit-linear-gradient(top, #e7ff3e, #c5dd1c);
        }

        .be_btn_002_4:hover,.be_btn_002_4:focus {
            background-color: #cee625;
            border-color: #bbd312;
            color: #3f5d01;
        }

        /*緑*/
        .be_btn_002_5 {
            background-color: #5cb85c;
            border-color: #4cae4c;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #6fcb6f, #3d993d);
        }

        .be_btn_002_5:hover,.be_btn_002_5:focus {
            background-color: #449d44;
            border-color: #398439;
            color: #fff;
        }

        /*水色*/
        .be_btn_002_6 {
            color: #fff;
            border: 1px solid #15aeec;
            background-color: #49c0f0;
            background-image: -webkit-linear-gradient(top, #5fcfff, #2cafe3);
        }

        .be_btn_002_6:hover,.be_btn_002_6:focus {
            color: #fff;
            border: 1px solid #1090c3;
            background-color: #1ab0ec;
        }

        /*青*/
        .be_btn_002_7 {
            background-color: #337ab7;
            border-color: #2e6da4;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #63aae7, #1a619e);
        }

        .be_btn_002_7:hover,.be_btn_002_7:focus {
            background-color: #286090;
            border-color: #204d74;
            color: #fff;
        }

        /*紫*/
        .be_btn_002_8 {
            background-color: #9932FF;
            border-color: #7a13da;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #c47dff, #7d0fea);
        }

        .be_btn_002_8:hover,.be_btn_002_8:focus {
            background-color: #8a23ea;
            border-color: #8a23ea;
            color: #fff;
        }

        /*ピンク*/
        .be_btn_002_9 {
            background-color: #ff85df;
            border-color: #e971cb;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #ffb9df, #e268c2);
        }

        .be_btn_002_9:hover,.be_btn_002_9:focus {
            background-color: #e971cb;
            border-color: #d25ab4;
            color: #fff;
        }

        /*茶*/
        .be_btn_002_10 {
            background-color: #BF7226;
            border-color: #a6590d;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #f8ab5f, #a85b0f);
        }

        .be_btn_002_10:hover,.be_btn_002_10:focus {
            background-color: #a6590d;
            border-color: #994c00;
            color: #fff;
        }

        /*グレー*/
        .be_btn_002_11 {
            background-color: #ddd;
            border-color: #bbb;
            color: #666;
            background-image: -webkit-linear-gradient(top, #eee, #c6c6c6);
        }

        .be_btn_002_11:hover,.be_btn_002_11:focus {
            background-color: #ccc;
            border-color: #999;
            color: #666;
        }

        /*黒*/
        .be_btn_002_12 {
            background-color: #444;
            border-color: #222;
            color: #fff;
            background-image: -webkit-linear-gradient(top, #999, #000);
        }

        .be_btn_002_12:hover,.be_btn_002_12:focus {
            background-color: #222;
            border-color: #000;
            color: #fff;
        }

        /*==========================================
            背景素材
        ============================================*/
        /*背景素材*/
        .be_bg_1 {
            background: /*背景パターン*/ url("") left top / auto repeat, /*背景画像の明るさ＋オーバーレイ色*/ linear-gradient(rgba(255,255,255,0.1), rgba(255,255,255,0.9)) , /*背景画像*/ url(http://be-cms.net/preview/86/image/12.jpg) center center / cover no-repeat, /*背景色*/ rgba(255,255,255,0.9) ;
        }

        .be_bg_2 {
            background: linear-gradient(45deg, rgba(0,0,0,0) 0, rgba(0,0,0,0) 46%,rgba(255,255,255,0.34) 50%,rgba(255,255,255,0.95) 100%) 50% 50% / 100% auto repeat padding-box border-box, linear-gradient(90deg, rgba(255,255,255,0.3) 0, rgba(255,255,255,0.6) 100%) 50% 50% / auto auto no-repeat, url("http://be-cms.net/preview/86/image/13.jpg") center center / cover no-repeat, rgba(0,170,238,0.67);
        }

        /*背景オプション素材（飾り線）*/
        .be_bg-option_1_before:before {
            background: url("http://be-cms.net/preview/78/image/54.gif");
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-origin: padding-box;
            background-origin: padding-box;
            -webkit-background-clip: border-box;
            background-clip: border-box;
            -webkit-background-size: contain;
            background-size: contain;
            content: "";
            display: block;
            min-height: 30px;
        }

        .be_bg-option_1_after:after {
            background: url("http://be-cms.net/preview/78/image/55.gif");
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-origin: padding-box;
            background-origin: padding-box;
            -webkit-background-clip: border-box;
            background-clip: border-box;
            -webkit-background-size: contain;
            background-size: contain;
            content: "";
            display: block;
            min-height: 30px;
        }

        /*-------------------
        テキストの位置
        ---------------------*/
        /*.catch-style_1*/
        .catch-style_1 {
            vertical-align: top !important;
            text-align: left !important;
        }

        .catch-style_2 {
            vertical-align: top !important;
            text-align: center !important;
        }

        .catch-style_3 {
            vertical-align: top !important;
            text-align: right !important;
        }

        .catch-style_4 {
            text-align: left !important;
        }

        .catch-style_6 {
            text-align: right !important;
        }

        .catch-style_7 {
            vertical-align: bottom !important;
            text-align: left !important;
        }

        .catch-style_8 {
            vertical-align: bottom !important;
            text-align: center !important;
        }

        .catch-style_9 {
            vertical-align: bottom !important;
            text-align: right !important;
        }

        /*==========================================
            キャッチコピーデフォルト設定
        ============================================*/
        /*.catch-box 外側div*/
        .catch-box {
            display: table;
            width: 100%;
        }

        .catch-box:before {
            content: "";
            display: inline-block;
            min-height: 80px;
        }

        @media (min-width: 768px) {
            .catch-box:before {
                min-height: 120px;
            }
        }

        /*.catch-box-h_mid 外側divを大きく*/
        .catch-box-h_mid:before {
            height: 180px;
        }

        @media (min-width: 768px) {
            .catch-box-h_mid:before {
                height:300px;
            }
        }

        /*.catch-box-h_big 外側divを大きく*/
        .catch-box-h_big:before {
            height: 300px;
        }

        @media (min-width: 768px) {
            .catch-box-h_big:before {
                height:600px;
            }
        }

        /*.catch-box-unit 内側div*/
        .catch-box-unit {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            float: unset;
            position: static;
            padding: 15px;
        }

        /*.キャッチコピー文言*/
        .catch-main {
            font-size: 15px;
            font-weight: bold;
            color: #999;
        }

        .catch-main_bg_w {
            background-color: #fff;
            color: #000;
            margin: 0 -15px;
            opacity: 0.7;
            padding: 7px;
        }

        .catch-sub {
            font-size: 10px;
        }

        @media (min-width: 768px) {
            .catch-main {
                font-size: 25px;
            }

            .catch-sub {
                font-size: 14px;
            }
        }

        .catch-link {
            margin-top: 10px;
        }

        /*キャッチコピー全体にリンクをはる*/
        .catch-link-all {
            background-color: rgba(255, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        /*==========================================
            写真の後付け加工
        ============================================*/
        .img-photo {
            padding: 8px;
            border-top: 1px solid #ccc;
            border-left: 1px solid #ccc;
            border-bottom: 1px solid #c2c2c2;
            border-right: 1px solid #c2c2c2;
            /* IE */
            -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(color=#cccccc,direction=135,strength=3,enabled=true)";
            filter: progid:DXImageTransform.Microsoft.Shadow(color=#cccccc,direction=135,strength=3,enabled=true);
            /*IE5.5+*/
            background: #fff;
        }

        .img-circle {
            border-radius: 50%;
        }

        span > strong {
            font-size: 20px;
        }

        /*==========================================
            ふきだし
        ============================================*/
        .arrow_answer, .arrow_question {
            position: relative;
            background: #fff;
            border: 1px solid #c8c8c8;
            border-radius: 10px;
            width: 80%;
            font-size: 14px;
            padding: 3%;
        }

        .arrow_question {
            float: right;
        }

        .arrow_answer:after, .arrow_answer:before, .arrow_question:after, .arrow_question:before {
            top: 30%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .arrow_question:after, .arrow_question:before {
            right: 100%;
        }

        .arrow_answer:after, .arrow_answer:before {
            left: 100%;
        }

        .arrow_answer:after, .arrow_question:after {
            border-color: rgba(255, 255, 255, 0);
            border-width: 8px;
            margin-top: -8px;
        }

        .arrow_answer:after {
            border-left-color: #fff;
        }

        .arrow_question:after {
            border-right-color: #fff;
        }

        .arrow_answer:before, .arrow_question:before {
            border-color: rgba(200, 200, 200, 0);
            border-width: 9px;
            margin-top: -9px;
        }

        .arrow_answer:before {
            border-left-color: #c8c8c8;
        }

        .arrow_question:before {
            border-right-color: #c8c8c8;
        }

        .question_image {
            float: left;
            width: 15%;
        }

        .answer_image {
            float: right;
            width: 15%;
        }

        .answer_image img, .question_image img {
            border-radius: 50px;
            display: block;
            margin: 0 auto;
            max-width: 60px;
            width: 100%;
        }

        .question_Box .name {
            text-align: center;
            font-size: 12px;
        }

        .question_Box {
            width: 100%;
            overflow: hidden;
            margin-bottom: 8px;
        }

        .question_Box:nth-child(even) {
            margin-bottom: 25px;
        }

    </style>
</head>
<body>
    <?php include_once __DIR__ . "/static/header/header.php"; ?>

    <main>
        <p class="fs-1 label1">特定商取引法に基づく表記</p>
        <div id="87" class="be_block_004 m-5" style="position:relative">
            <div class="">
                <div class="row">
                    <div data-bediv="1" class="col-xs-12 ">
                        <div data-beparts="html">
                            <table class="v-table">
                                <tbody>
                                    <tr>
                                        <th>販売業者</th>
                                        <td>FingerPartner</td>
                                    </tr>
                                    <tr>
                                        <th>運営統括責任者</th>
                                        <td>尾花　和輝</td>
                                    </tr>
                                    <tr>
                                        <th>所在地</th>
                                        <td>未　定</td>
                                    </tr>
                                    <tr>
                                        <th>電話番号</th>
                                        <td>未　定</td>
                                    </tr>
                                    <tr>
                                        <th>電話受付時間</th>
                                        <td>未　定</td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス</th>
                                        <td>support@finger-partner.jp</td>
                                    </tr>
                                    <tr>
                                        <th>ホームページ</th>
                                        <td><a href="https://finger-partner.jp/">https://finger-partner.jp/</a></td>
                                    </tr>
                                    <tr>
                                        <th>販売価格</th>
                                        <td>見積金額により変動</td>
                                    </tr>
                                    <tr>
                                        <th>商品代金以外の必要料金</th>
                                        <td>商品価格に応じた数%の手数料 + 送料 (全国一律1000円)</td>
                                    </tr>
                                    <tr>
                                        <th>引き渡し時期</th>
                                        <td>ご注文から3ヶ月以内に発送</td>
                                    </tr>
                                    <tr>
                                        <th>お支払方法</th>
                                        <td>銀行振込またはクレジットカード (手数料はお客様負担)</td>
                                    </tr>
                                    <tr>
                                        <th>返品・交換・キャンセル等</th>
                                        <td>商品発送後の返品・返却等はお受け致しかねます。商品が不良の場合のみ良品と交換致します。</td>
                                    </tr>
                                    <tr>
                                        <th>返品期限</th>
                                        <td>商品出荷より14日以内にご連絡してください</td>
                                    </tr>
                                    <tr>
                                        <th>返品送料</th>
                                        <td>不良品の場合は弊社が負担いたします。
                                            <br>それ以外はお客様のご負担となります。
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--beParts-->
                    </div>
                    <!--beDiv-->
                </div>
            </div>
        </div>
    </main>

    <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>
</html>