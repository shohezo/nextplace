<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!-- OGP -->
    <meta property="og:url" content="http://next-place.co.jp/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="NextPlace" />
    <meta property="og:description" content="通信事業のスペシャリスト | NextPlace" />
    <meta property="og:site_name" content="NextPlace" />
    <meta property="og:image" content="" />
    <!-- スタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/reset.css" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/responsive.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/cssanimation.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/gh/yesiamrocks/cssanimation.io@1.0.3/cssanimation.min.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/30c76fcb1e.js" crossorigin="anonymous"></script>
    <!-- Adobe fonts -->
    <script>
    (function(d) {
        var config = {
                kitId: 'txh7cze',
                scriptTimeout: 3000,
                async: true
            },
            h = d.documentElement,
            t = setTimeout(function() {
                h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
            }, config.scriptTimeout),
            tk = d.createElement("script"),
            f = false,
            s = d.getElementsByTagName("script")[0],
            a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function() {
            a = this.readyState;
            if (f || a && a != "complete" && a != "loaded") return;
            f = true;
            clearTimeout(t);
            try {
                Typekit.load(config)
            } catch (e) {}
        };
        s.parentNode.insertBefore(tk, s)
    })(document);
    </script>
</head>
<!-- ドロワーメニュー -->
<div class="bl_drawer">
    <ul class="bl_drawer_list">
        <!-- 開いたときの中身 -->
        <li class="bl_drawer_item"><a href="<?php echo esc_url(home_url('/'));?>">HOME</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/about">ABOUT</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/service">SERVICE</a></li>
        <!-- <li class="bl_drawer_item"><a href="#message">MESSAGE</a></li>
        <li class="bl_drawer_item"><a href="#company">COMPANY</a></li> -->
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/recruit">RECRUIT</a></li>
        <li class="bl_drawer_item"><a href="<?php bloginfo('url');?>/contact">CONTACT</a></li>
    </ul>
    <div class="bl_drawerBtn">
        <!-- ハンバーガーボタン -->
        <span class="hambarg"></span>
        <span class="hambarg"></span>
        <span class="hambarg"></span>
    </div>
    <!--bl_drawerBtn-->
</div>
<!--bl_drawer-->

<body>
    <?php wp_body_open();?>
    <header>
        <div class="header__lines">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="ly_inner hp_flex">
            <a href="#" class="el_logo">
                <img src="<?php bloginfo('template_url');?>/img/logo_yoko.png" alt="" />
            </a>
            <a href="#" class="el_logo_white">
                <img src="<?php bloginfo('template_url');?>/img/logo_yoko_white.png" alt="" />
            </a>
            <nav>
                <ul class="bl_header_list hp_flex hp_jcsb">
                    <li class="bl_header_item">
                        <a
                            href="<?php echo esc_url(home_url('/'));?>"><span>H</span><span>O</span><span>M</span><span>E</span></a>
                    </li>
                    <li class="bl_header_item">
                        <a
                            href="<?php bloginfo('url');?>/about"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span></a>
                    </li>
                    <li class="bl_header_item">
                        <a
                            href="<?php bloginfo('url');?>/service"><span>S</span><span>E</span><span>R</span><span>V</span><span>I</span><span>C</span><span>E</span></a>
                    </li>
                    <!-- <li class="bl_header_item">
                        <a
                            href="#message"><span>M</span><span>E</span><span>S</span><span>S</span><span>A</span><span>G</span><span>E</span></a>
                    </li>
                    <li class="bl_header_item">
                        <a
                            href="#company"><span>C</span><span>O</span><span>M</span><span>P</span><span>A</span><span>N</span><span>Y</span></a>
                    </li> -->
                    <li class="bl_header_item">
                        <a
                            href="<?php bloginfo('url');?>/recruit"><span>R</span><span>E</span><span>C</span><span>R</span><span>U</span><span>I</span><span>T</span></a>
                    </li>
                    <li class="bl_header_item">
                        <a
                            href="<?php bloginfo('url');?>/contact"><span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <?php if(is_home()){?>
        <div class="bl_newsbox">
            <p class="bl_newsbox_head">TOPICS</p>
            <p class="bl_newsbox_body">
                公式LINEから問い合わせ、ご依頼が可能です<br />
                <a href="#"><img src="<?php bloginfo('template_url');?>/img/line.png" style="width: 20px"
                        alt="" /><span>公</span><span>式</span><span>L</span><span>I</span><span>N</span><span>E</span><span>登</span><span>録</span></a>
            </p>
        </div>
        <?php }?>
        <div class="el_copyRight">
            Copyright©NextPlace corp., ltd. All Rights Reserved.
        </div>
        <?php if( !is_home()){?>
        <div class="el_info" style="bottom: 40px">
            <p>Nagoya Office.</p>
            <a href="#" class="el_tel">000-0000-0000</a>
        </div>
        <?php }else if(is_home()){?>
        <div class="el_info">
            <p>Nagoya Office.</p>
            <a href="#" class="el_tel">000-0000-0000</a>
        </div>
        <?php }else{}?>
        <div class="el_summary_txt hp_flex hp_aic">
            <span>▷ </span>
            <p>愛知県名古屋市で通信コンサルティング</p>
        </div>
        <div class="c-scrolldown">
            <div class="c-line"></div>
        </div>
    </header>
    <?php wp_head();?>