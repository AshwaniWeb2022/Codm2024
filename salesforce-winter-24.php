
<?php include 'app/header.php';?>


<head>

    <title>Salesforce Winter 24</title>
    <meta property="og:url" content="codmsoftware.com" />
    <meta property="og:site_name" content="CODM SOFTWARE | Salesforce Consulting Partner" />
    <meta property="og:image" content="wp-content/uploads/sites/231/2022/08/blog5.png" />
    <meta property="og:image:secure_url" content="wp-content/uploads/sites/231/2022/08/blog5.png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="380" />
    <meta name="twitter:card" content="Salesforce Consulting Partner." />
    <meta name="twitter:description" content="CodM Software Ltd. is a certified Salesforce Consulting Partner." />
    <meta name="twitter:title" content="codmsoftware.com" />
    <meta name="twitter:image" content="wp-content/uploads/sites/231/2022/08/blog5.png" />

    <style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-includes/css/dist/block-library/style.min.css?ver=6.2'
        media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-includes/css/classic-themes.min.css?ver=6.2'
        media='all' />
    <style id='global-styles-inline-css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex>* {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='hello-elementor-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1'
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/css/frontend-lite.min.css?ver=3.12.2'
        media='all' />
    <link rel='stylesheet' id='elementor-post-16-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/elementor/css/post-16.css?ver=1684334869'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/eicons/css/elementor-icons.min.css?ver=5.18.0'
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/swiper/css/swiper.min.css?ver=5.3.6'
        media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-pro-3.12.3/assets/css/frontend-lite.min.css?ver=3.12.3'
        media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/css/all.min.css?ver=3.12.2'
        media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/css/v4-shims.min.css?ver=3.12.2'
        media='all' />
    <link rel='stylesheet' id='elementor-global-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/elementor/css/global.css?ver=1684334870'
        media='all' />
    <link rel='stylesheet' id='elementor-post-18-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/elementor/css/post-18.css?ver=1691498103'
        media='all' />
    <link rel='stylesheet' id='elementor-post-23-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/elementor/css/post-23.css?ver=1684334870'
        media='all' />
    <link rel='stylesheet' id='elementor-post-32-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/elementor/css/post-32.css?ver=1684398255'
        media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.2'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css'
        href='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script
        src='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-includes/js/jquery/jquery.min.js?ver=3.6.3'
        id='jquery-core-js'></script>
    <script
        src='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0'
        id='jquery-migrate-js'></script>
    <script
        src='https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-3.12.2/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.12.2'
        id='font-awesome-4-shim-js'></script>
    <link rel="https://api.w.org/" href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-json/" />
    <link rel="alternate" type="application/json"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-json/wp/v2/posts/151" />
    <meta name="generator" content="WordPress 6.2" />
    <link rel='shortlink' href='https://library.elementor.com/local-services-wireframe-4-flexbox/?p=151' />
    <link rel="alternate" type="application/json+oembed"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibrary.elementor.com%2Flocal-services-wireframe-4-flexbox%2Fblog-post-title-6%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-json/oembed/1.0/embed?url=https%3A%2F%2Flibrary.elementor.com%2Flocal-services-wireframe-4-flexbox%2Fblog-post-title-6%2F&#038;format=xml" />
    <meta name="generator"
        content="Elementor 3.12.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <link rel="icon"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/2022/08/elementor_favicon.png"
        sizes="32x32" />
    <link rel="icon"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/2022/08/elementor_favicon.png"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/2022/08/elementor_favicon.png" />
    <meta name="msapplication-TileImage"
        content="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/uploads/sites/231/2022/08/elementor_favicon.png" />
</head>

<body
    class="post-template post-template-elementor_theme single single-post postid-151 single-format-standard wp-custom-logo elementor-default elementor-kit-16 elementor-page-32">

    <div data-elementor-type="single-post" data-elementor-id="32"
        class="elementor elementor-32 elementor-location-single post-151 post type-post status-publish format-standard has-post-thumbnail hentry category-blog">
        <div class="elementor-element elementor-element-6e8460c3 e-con-boxed e-con" data-id="6e8460c3"
            data-element_type="container" data-settings="{&quot;content_width&quot;:&quot;boxed&quot;}">
            <div class="e-con-inner">

                <div class="elementor-element elementor-element-635e9dbd elementor-widget elementor-widget-theme-post-title elementor-page-title elementor-widget-heading"
                    data-id="635e9dbd" data-element_type="widget" data-widget_type="theme-post-title.default">
                    <div class="elementor-widget-container">
                        <style>
                        /*! elementor - v3.12.2 - 23-04-2023 */
                        .elementor-heading-title {
                            padding: 0;
                            margin: 0;
                            line-height: 1
                        }

                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
                            color: inherit;
                            font-size: inherit;
                            line-height: inherit
                        }

                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                            font-size: 15px
                        }

                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                            font-size: 19px
                        }

                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                            font-size: 29px
                        }

                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                            font-size: 39px
                        }

                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                            font-size: 59px
                        }

                        .dropdown a {
                            color: black !important;
                        }
                        </style>
                        <h1 class="elementor-heading-title elementor-size-default">Salesforce winter 24 release</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-401b5af5 elementor-align-center elementor-widget elementor-widget-post-info"
                    data-id="401b5af5" data-element_type="widget" data-widget_type="post-info.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">

                        </ul>
                    </div>
                </div>
                <section>
                    <div class="elementor-element elementor-element-5b392c56 elementor-widget elementor-widget-theme-post-excerpt"
                        data-id="5b392c56" data-element_type="widget" data-widget_type="theme-post-excerpt.default">
                        <div class="elementor-widget-container">
                            Admin Release Countdown: Get Ready for Winter ’24

                        </div>
                    </div>
                    <div class="wp-block-image size-full">
                        <figure class="size-full is-resized">
                            <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture1.png" alt=""
                                class="wp-image-122" width="858" height="385" />
                        </figure>
                    </div>
                    <h4 class="wp-block-heading">Salesforce Winter ’24 Release Date + Preview Information</h4>
                    <p> The peak of excitement in the Salesforce ecosystem is right around the corner! Dreamforce and
                        the Winter ’24 release coincide in the same 30-day period, and with this comes a lot of exciting
                        news.</p>
                    <p>
                        There are many agenda items you need to prepare for with each release, but at this stage, there
                        are only a couple of things you need to know:<br> 1. how to prepare your sandbox <br> 2. when
                        your instance will get upgraded.</p>
                    <h4 class="wp-block-heading">Salesforce Winter ’24 Release Date</h4>
                    <p>The first thing you should be aware of is when your production instance will be upgraded to the
                        Salesforce Winter ’24 release. It’s important that you test all the main use cases in your org
                        before this date to ensure that everything continues to work. Although Salesforce releases
                        rarely have any major bugs, these checks should still be carried out.</p>
                    <p>The release date for Winter ’24 will depend on your instance of Salesforce, but the main release
                        weekends are on:<br>
                        Sep 2, 2023<br>
                        Oct 07, 2023<br>
                        Oct 14, 2023<br>
                    </p>
                    <p>If you already know the instance your production org is located on, you can head over to Salesforce Trust, click on your instance name, and hit “Maintenance”. This will show you the date of the Salesforce Winter ’24 release hitting your org.</p>
                    <p>If you don’t know your instance, the quickest way to find out is to head to “company information” within “Setup” in your Salesforce. If you want to know more about Salesforce instances, check out our comprehensive post about how to find yours.</p>
                    <h4 class="wp-block-heading mt-2">Winter ’24 Sandbox Preview Information</h4>
                    <p>The second thing you should be aware of is how (and when) your sandbox is going to be upgraded. This is extremely important as this is the first opportunity you will get to test your system on the new release. You can sign up for a pre-release org, but these, of course, will not have any of your configurations.</p>
                    <p>Salesforce has two release windows for sandboxes, which depends on whether your sandbox is a “Preview” instance or a “Non-Preview” instance. Stay tuned for more information on Sandbox previews, but it looks like most sandboxes will be upgraded on Aug 26th 2023.</p>
                    
                    <h4 class="wp-block-heading mt-2">Winter ’24 Pre-Release Org</h4>
                    <p>As mentioned above, pre-release orgs are a great way to get familiar with the new release before it hits your sandboxes. For those with existing preview orgs, these are now upgraded with the Winter ’24 release, and you can login to get access to the latest features.</p>

                    <h4 class="wp-block-heading mt-2">Winter ’24 Pre-Release Notes</h4>

                    <p>Although the dates mentioned above are some of the most important of the Salesforce release cycle, the most anticipated date is for the official “Salesforce Release Notes”. This is the first glimpse of the features and upgrades that are being applied across the Salesforce suite of products. Salesforce have yet to announce a date for the release notes, but they should be here in early August.</p>
                  
                    <h4 class="wp-block-heading mt-2">1. View all the permissions in the permission set in a single page using view summary button (Beta).</h4>

                    <div class="wp-block-image size-full">
                        <figure class="size-full is-resized">
                            <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture2.png" alt=""
                                class="wp-image-122" width="858" height="385" />
                        </figure>
                    </div>
                 
                    <div style="height: 50px;" aria-hidden="true" class="wp-block-spacer"></div>

                    <div class="wp-block-image size-full">
                        <figure class="size-full is-resized">
                            <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture3.png" alt=""
                                class="wp-image-122" width="858" height="385" />
                        </figure>
                    </div>

                    <h4 class="wp-block-heading mt-5">2. Display Custom Error Messages in Record-Triggered Flows</h4>
                        <p>Salesforce introduced a new element called Custom Error. Using this new element, you can display custom error messages in record-triggered flows. It is possible to use this element to build complex validation rules, display error messages in fault paths, and even block deleting records.</p>

                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture4.png"
                                    alt="" class="wp-image-122" width="858" height="385" />
                            </figure>
                        </div>
                </section>

                <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

                <h4 class="wp-block-heading mt-3">3. Filter Flows in Flow Trigger Explorer</h4>
                <div class="elementor-element elementor-element-413a808e elementor-widget elementor-widget-theme-post-content"
                    data-id="413a808e" data-element_type="widget" data-widget_type="theme-post-content.default">
                    <div class="elementor-widget-container">

                        <p>To help you easily view all of your record-triggered flows by the object, Salesforce introduced Flow Trigger Explorer in the Spring '22 release. It is a great tool that displays record-triggered flows in a single place.</p>
                        <p>If you have a lot of flows (active or inactive), it can be hard to see them in a single place. In the Winter '24 release, Salesforce added an option to filter flows in Flow Trigger Explorer. Using this feature, you can filter flows by their status, package state, or process type.</p>
                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture5.png"
                                    alt="" class="wp-image-122 mt-2" width="758" height="385" />
                            </figure>
                        </div>

                        <h4 class="wp-block-heading mt-3">4. HTTP Callout Supports More Methods</h4>

                        <p class="mt-3">HTTP Callout is an amazing feature that Salesforce introduced in the Spring '23 release. In the previous release, they added a POST method as well. Starting with the Winter '24 release, HTTP Callout supports other methods as well (PUT, PATCH, DELETE).</p>
                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture6.png"
                                    alt="" class="wp-image-122 mt-2" width="758" height="385" />
                            </figure>
                        </div>
                        <h4 class="wp-block-heading mt-5">5. Transform (Beta) Element</h4>
                        <p>Salesforce introduced a new element called Transform (Beta). This element transforms source data to target data. For source and target data, you can select resources like outputs from actions, record variables, and Apex-defined variables. Then, map the data using the circled bullet icons.</p>
                        <P>In the screenshot below, this element transforms a lead record to a contact record.</P>
                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture7.png"
                                    alt="" class="wp-image-122 mt-2" width="758" height="385" />
                            </figure>
                        </div>  
                        <h4 class="wp-block-heading mt-5">It is also possible to use a formula for the mapping.</h4>
                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture8.png"
                                    alt="" class="wp-image-122 mt-2" width="758" height="385" />
                            </figure>
                        </div>  
                        <p>Output of this element is a variable (single or collection). For example, here the output is a Contact record variable and then it is used to create a Contact record.</P>

                            <div class="wp-block-image size-full">
                                <figure class="size-full is-resized">
                                    <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture9.png"
                                        alt="" class="wp-image-122 mt-2" width="758" height="385" />
                                </figure>
                            </div>
                            <P class="mt-3">Here is another example that transforms Contact records to Opportunity Contact Role records. It transforms a record collection to another type of record collection. Before this release, you had to use Loop and Assignment elements in order to achieve this.</P>
                            <div class="wp-block-image size-full">
                                <figure class="size-full is-resized">
                                    <img decoding="async" src="wp-content/uploads/sites/231/2022/08/SF24Picture10.png"
                                        alt="" class="wp-image-122 mt-2" width="758" height="385" />
                                </figure>
                            </div>
                            <h4 class="wp-block-heading mt-5">6. More Components Are Reactive</h4>

                            <p>Salesforce introduced reactive screen components in the Spring '23 release. With reactive screen components, your screen components can react to a user’s actions on the same screen. However, some of the standard screen components were not reactive. In the Winter '24 release, more components start to support reactivity. For instance, selection components are now reactive. On the other hand, display text component starts to be reactive too. However, it is a beta program and you have to opt in from Process Automation Settings in Salesforce setup.</p>
                            <p>As you can see from the screenshot below, reactive screen components is not a beta program anymore. If you are using API version 59, you don't need to enable reactive screen components.</p>

                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture11.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                          
                            <h4 class="wp-block-heading mt-5">7. Pause Element is Replaced By Wait Elements</h4>
                          
                            <p>Salesforce introduced 3 new Wait elements to replace the Pause element.</p>
                          
                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture12.png" alt=""
                                        class="wp-image-122" width="400" height="385" /></figure>
                            </div>
                            <P class="mt-3"><b>The Wait for Conditions</b> element replaces the Pause element, there is nothing different here.
                            
                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture13.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                            <P class="mt-3"><b>Wait for the Amount of Time </b>element lets you wait for a specified amount of time. Valid values are Minutes, Hours, Days, and Months. Moreover, you can resume at a specific time of day.</p>

                            
                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture14.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                            <p><b>Wait Until Date </b>element lets you wait until a specific date and time.</p>
                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture15.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                            <h4 class="wp-block-heading mt-5">8. Product Selector Screen Component</h4>

                            <p>There is a new screen component called Product Selector. This input component lets you select products with quantities. In order to configure this component, you have to provide the available products and price book entries.</p>
                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture16.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>

                            <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture17.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                        
                        <p class="mt-3">This element stores the output in an Apex-defined collection variable.</p>

                        <h4 class="wp-block-heading mt-5">9. Auto-Layout User Interface Changes</h4>

                        <p>The element configuration will now appear on the right side instead of as a popup.</p>
                        
                        <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture20.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                            </div>
                        <h4 class="wp-block-heading mt-5">10. Dynamic Actions on Mobile for Standard Objects</h4>
                        <p>The future is all things ‘dynamic’: Dynamic Forms, Dynamic Interactions, and – the subject of this idea – Dynamic Actions.</p>
                        <p>Dynamic Actions enable admins to create uncluttered, intuitive, and responsive pages that display only the actions your users need to see based on the criteria you specify.</p>
                        <p>Instead of scanning an endless list of actions, your users will be presented with a simple choice relevant to their role, profile, or when a record meets certain criteria.</p>
                        <div class="wp-block-image size-full">
                                <figure class="align center size-full is-resized"><img decoding="async"
                                        src="wp-content/uploads/sites/231/2022/08/SF24Picture21.png" alt=""
                                        class="wp-image-122" width="858" height="385" /></figure>
                        </div>
                        <P>Currently, you can define different Dynamic Actions for mobile (versus desktop) for<b> custom objects.</b> This idea is advocating for this flexibility to be extended for<b>standard objects.</b></P>
                        <h4 class="wp-block-heading mt-5">11. Disable Access to Session IDs in Flows (Release Update)</h4>
                        <p>To improve security, this update prevents flow interviews from resolving the $Api.Session_ID variable at run time. Previously, when a flow screen included the $Api.Session_ID variable, the browser session ID of the user that ran the flow appeared on the screen. A user was able to employ the session ID to bypass security controls. This update was first made available in Winter ’23 and was scheduled to be enforced in Summer ’23, but we postponed the enforcement date to Winter ’24.</p>
                        <p>Where: This change applies to Lightning Experience and Salesforce Classic in Enterprise, Performance, Unlimited, and Developer editions.</p>
                        <p>When: Salesforce enforces this update in Winter ’24. To get the major release upgrade date for your instance, go to Trust Status, search for your instance, and click the maintenance tab.</p>
                        <p>How: Before you apply this update, remove all dependencies on the $Api.Session_ID variable from your flows. Then, from Setup, in the Quick Find box, enter Release Updates, and then select Release Updates. To get the Disable Access to Browser Session IDs in Flows release update, follow the testing and activation steps.</p>

                        <div class="elementor-element elementor-element-4741b956 elementor-widget elementor-widget-heading"
                            data-id="4741b956" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container-fluid mt-5">
                                <span class="elementor-heading-title elementor-size-default">Share the Post:</span>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-7878ac4d elementor-share-buttons--view-icon elementor-share-buttons--skin-minimal elementor-share-buttons--color-custom elementor-share-buttons-mobile--align-center elementor-widget__width-inherit elementor-share-buttons--shape-square elementor-grid-0 elementor-widget elementor-widget-share-buttons"
                            data-id="7878ac4d" data-element_type="widget" data-widget_type="share-buttons.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                    href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-pro-3.12.3/assets/css/widget-share-buttons.min.css">
                                <div class="elementor-grid">
                                    <div class="elementor-grid-item">
                                        <div class="elementor-share-btn elementor-share-btn_facebook" role="button"
                                            tabindex="0" aria-label="Share on facebook">
                                            <span class="elementor-share-btn__icon">
                                                <i class="fab fa-facebook" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="elementor-grid-item">
                                        <div class="elementor-share-btn elementor-share-btn_twitter" role="button"
                                            tabindex="0" aria-label="Share on twitter">
                                            <span class="elementor-share-btn__icon">
                                                <i class="fab fa-twitter" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="elementor-grid-item">
                                        <div class="elementor-share-btn elementor-share-btn_linkedin" role="button"
                                            tabindex="0" aria-label="Share on linkedin">
                                            <span class="elementor-share-btn__icon">
                                                <i class="fab fa-linkedin" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-789a58f elementor-widget elementor-widget-post-navigation"
                            data-id="789a58f" data-element_type="widget" data-widget_type="post-navigation.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-post-navigation">

                                    <div class="elementor-post-navigation__next elementor-post-navigation__link">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'app/footer.php';?>