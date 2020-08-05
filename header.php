<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?php wp_title(''); ?></title>
    <meta name="author" content="IESEG School of Management"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	  <script src="<?php echo get_template_directory_uri(); ?>js/html5shiv.js"></script>
      <script src="<?php echo get_template_directory_uri(); ?>js/respond.min.js"></script>
	<![endif]-->
    <!-- Facebook Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '442608819273575');
        fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=442608819273575&ev=PageView&noscript=1"/></noscript>

    <!-- End Facebook Pixel Code -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="<?php echo get_locale(); ?>">
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-45279853-8', 'auto');
    ga('send', 'pageview');

</script>

<!-- Script for pixel Linkedin tracking -->
<script type="text/javascript"> _linkedin_data_partner_id = "70961"; </script>
<script type="text/javascript"> (function () {
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(); </script>
<noscript><img height="1" width="1" style="display:none;" alt=""
               src="https://dc.ads.linkedin.com/collect/?pid=70961&fmt=gif"/></noscript>
<!-- End Script for pixel Linkedin tracking -->

<div id="container-global">
    <header class="header">
        <div class="header-container">
            <div class="header-wrapper">
                <div class="header-logo" id="header-logo"><img src="<?php echo get_template_directory_uri() . '/img/logos/logo_ieseg.png' ?>"
                                         alt="IÉSEG School Of Management"></div>
                <a class="btn-jaune" href="#form-container">Je télécharge la <strong>Brochure</strong></a>
            </div>
        </div>
    </header>