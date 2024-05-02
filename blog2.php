<?php include 'app/header.php';?>
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
                        <h1 class="elementor-heading-title elementor-size-default">Salesforce CPQ’s Product Validation
                            Rule</h1>
                    </div>
                </div>
                <div class="elementor-element elementor-element-401b5af5 elementor-align-center elementor-widget elementor-widget-post-info"
                    data-id="401b5af5" data-element_type="widget" data-widget_type="post-info.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-inline-items elementor-icon-list-items elementor-post-info">

                        </ul>
                    </div>
                </div>
                <div class="elementor-element elementor-element-5b392c56 elementor-widget elementor-widget-theme-post-excerpt"
                    data-id="5b392c56" data-element_type="widget" data-widget_type="theme-post-excerpt.default">
                    <div class="elementor-widget-container">
                        Generally Product rules are made in Salesforce CPQ to evaluate product options within a bundle,
                        or a quote, or a quote line against some conditions (Error Condition) and if conditions are
                        fulfilled as per Client requirement then perform ‘Actions’ in that response.
                    </div>
                </div>
                <div class="wp-block-image size-full">
                    <figure class="size-full is-resized">
                        <img decoding="async" src="wp-content/uploads/sites/231/2022/08/blog2pic1.png" alt=""
                            class="wp-image-122" width="400" height="200" />
                    </figure>
                </div>
                <div class="wp-block-image size-full">
                    <figure class="size-full is-resized">
                        <img decoding="async" src="wp-content/uploads/sites/231/2022/08/Salesforce-Consultant-Salesforce-CPQ-Product-Rules-TYPES.png" alt=""
                            class="wp-image-122" width="858" height="385" />
                    </figure>
                </div>
                <h4 class="wp-block-heading">Scenario:</h4>
                <div class="elementor-element elementor-element-413a808e elementor-widget elementor-widget-theme-post-content"
                    data-id="413a808e" data-element_type="widget" data-widget_type="theme-post-content.default">
                    <div class="elementor-widget-container">

                        <p>
                            Create a Validation Product Rule to Limit the Number of Warranty Product should be Equal to
                            Number of Hardware Product (in our Case CARS, Keys,Toolkits are hardware product in our
                            Bundle)
                        </p>
                        <h4 class="wp-block-heading mt-5">Step 1: Create a Summary Variable to get Sum of “Hardware
                            (Tata Cars)”</h4>
                        <ul>
                            <li>Click Summary Variables from the navigation bar.</li>
                            <li>Click New. </li>
                            <li>In the Variable Name field, enter Sum of Hardware (Tata Cars)</li>
                            <li>For the Aggregate Function field, choose Sum.</li>
                            <li>For the Aggregate Field field, choose Quantity.</li>
                            <li>For the Target Object field, choose Product Option</li>
                            <li>For the Filter Field field, choose Product Code.</li>
                            <li>For the Operator field, choose equals.</li>
                            <li>In the Filter Value field, enter HARDWARE.(We have given Product Code as HARDWARE for
                                Hardware Products)</li>
                            <li>Click Save</li>
                        </ul>
                        <div class="wp-block-image size-full">
                            <figure class="size-full is-resized">
                                <img decoding="async" src="wp-content/uploads/sites/231/2022/08/blog2Pictur.png"
                                    alt="" class="wp-image-122 mt-2" width="758" height="385" />
                            </figure>
                        </div>
                        <h4 class="wp-block-heading mt-5">Step 2: Create another Summary Variable to get Sum of Warranty</h4>
                        <ul>
                        <li>Click Summary Variables from the navigation bar.</li>
                            <li>Click New. </li>
                            <li>In the Variable Name field, enter Sum of Hardware (Tata Cars)</li>
                            <li>For the Aggregate Function field, choose Sum.</li>
                            <li>For the Aggregate Field field, choose Quantity.</li>
                            <li>For the Target Object field, choose Product Option</li>
                            <li>For the Filter Field field, choose Product Code.</li>
                            <li>For the Operator field, choose equals.</li>
                            <li>In the Filter Value field, enter <b>WARRANTY</b>
                            <li>Click <b> Save</b></li>
                    </ul>    
                        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

                        <div class="wp-block-image size-full">
                            <figure class="aligncenter size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blog2picture5.png" alt="" class="wp-image-122"

                                    width="858" height="385" /></figure>
                        </div>
                        <h4 class="wp-block-heading">Step 3: Create a Validation Product Rule </h4>
                        <p> 
                            <ul>
                                <li>Click Product Rules from the Navigation bar.</li>
                                <li>Click New.</li>
                                <li>In the Product Rule Name field, enter Warranty Sum should be Equal to Sum of Hardware Product.</li>
                                <li>For the Type field, choose Validation</li>
                                <li>The Scope field remains as Quote, since you need the rule to run on the quote in general, not within a specific bundle.</li>
                                <li>For the Evaluation Event field, choose Save.</li>
                                <li>Check Active.</li>
                                <li>For the Conditions Met field, choose All.</li>
                                <li>In the Message field,<b> “Please Check !! Sum of Warranty should be Equal to Sum of Hardware Product.”</b></li>
                                <li>Click Save.</li>
                            </ul>
                        </p>


                        <div class="wp-block-image size-full">
                            <figure class="aligncenter size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blog2picture6.png" alt="" class="wp-image-122"

                                    width="858" height="385" /></figure>
                        </div>

                        <!-- <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div> -->

                        <h4 class="wp-block-heading">Step 4: Create an Error Condition to Leverage a Summary Variable</h4>
                        <p>
                        <ul>
                                <li>In the Error Conditions related list, click New.</li>
                                <li>Index:10.</li>
                                <li>In the Tested Variable field, search for and select Sum of Warranty (Tata Cars).</li>
                                <li>For the Type field, choose Validation</li>
                                <li>For the Operator field, choose less than.</li>
                                <li>For the Filter Type field, choose Variable.</li>
                                <li>In the Filter Variable field, enter Sum of Hardware(Tata Cars).</li>
                                <li>Click Save.</li>
                            </ul>
                         </p>
                        <div class="wp-block-image size-full">
                            <figure class="align center size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blog2Picture7.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <h4 class="wp-block-heading">Step 5: Create an Error Condition to Leverage a Summary Variable</h4>
                        <p>
                        <ul>
                                <li>In the Error Conditions related list, click New.</li>
                                <li>Index:20.</li>
                                <li>In the Tested Variable field, search for and select Sum of Warranty (Tata Cars).</li>
                                <li>For the Type field, choose Validation</li>
                                <li>For the Operator field, choose Greater than.</li>
                                <li>For the Filter Type field, choose Variable.</li>
                                <li>In the Filter Variable field, enter Sum of Hardware(Tata Cars).</li>
                                <li>Click Save.</li>
                            </ul>
                         </p>
                        <div class="wp-block-image size-full">
                            <figure class="align center size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blogPicture8.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <h4 class="wp-block-heading">Step 6: Save configuration rule by making it Active as per picture</h4>
                        <div class="wp-block-image size-full">
                            <figure class="align center size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blog2Picture9.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <h4 class="wp-block-heading">Final Step Testing :Test the Validation Rule</h4>
                        <p>
                        <ul>
                                <li>Click Accounts in the Navigation bar.</li>
                                <li>Click The Name of Account.</li>
                                <li>Click The Name of Account.</li>
                                <li>Click the Related tab.</li>
                                <li>From the Quotes related list, click Q-XXXX.</li>
                                <li>Click Edit Lines.</li>
                                <li>Click Add Products.(Warranty, Tata Cars, Keys, Toolkit)</li>
                                <li>Update the quantity of the Warranty.</li>
                                <li>Click Save.</li>
                            </ul>
                         </p>
                         <p>If Sum of all Hardware Products is not equal to Sum of Warranty Products then this validation rule will fire and then it does allow to save this quote.</p>

                        <!-- <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div> -->
                        <div class="wp-block-image size-full">
                            <figure class="align center size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/blog2Picture10.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <p class="mt-2">Filter condition</p>
                        <div class="wp-block-image size-full">
                            <figure class="align center size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/Picture8.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>

                        <h4 class="wp-block-heading"> Step 3: put the price action in related list of price rule </h4>
                        <div class="wp-block-image size-full">
                            <figure class="aligncenter size-full is-resized"><img decoding="async"
                                    src="wp-content/uploads/sites/231/2022/08/Picture9.png" alt="" class="wp-image-122"
                                    width="858" height="385" /></figure>
                        </div>
                        <h4 class="wp-block-heading">Note -: Rule should be Activated.</h4>

                    </div>
                </div>
                <div class="elementor-element elementor-element-4741b956 elementor-widget elementor-widget-heading"
                    data-id="4741b956" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
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
                                <div class="elementor-share-btn elementor-share-btn_facebook" role="button" tabindex="0"
                                    aria-label="Share on facebook">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-facebook" aria-hidden="true"></i> </span>
                                </div>
                            </div>
                            <div class="elementor-grid-item">
                                <div class="elementor-share-btn elementor-share-btn_twitter" role="button" tabindex="0"
                                    aria-label="Share on twitter">
                                    <span class="elementor-share-btn__icon">
                                        <i class="fab fa-twitter" aria-hidden="true"></i> </span>
                                </div>
                            </div>
                            <div class="elementor-grid-item">
                                <div class="elementor-share-btn elementor-share-btn_linkedin" role="button" tabindex="0"
                                    aria-label="Share on linkedin">
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
                <!-- <div class="elementor-element elementor-element-5ddcc98b elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
                    data-id="5ddcc98b" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Related Posts</h2>
                    </div>
                </div> -->
                <!-- <div class="elementor-element elementor-element-76362474 elementor-grid-2 elementor-posts--align-center elementor-widget__width-inherit elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts"
                    data-id="76362474" data-element_type="widget"
                    data-settings="{&quot;classic_columns&quot;:&quot;2&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:80,&quot;sizes&quot;:[]},&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                    data-widget_type="posts.classic">
                    <div class="elementor-widget-container">
                        <link rel="stylesheet"
                            href="https://library.elementor.com/local-services-wireframe-4-flexbox/wp-content/plugins/elementor-pro-3.12.3/assets/css/widget-posts.min.css">
                        <div
                            class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                            <article
                                class="elementor-post elementor-grid-item post-149 post type-post status-publish format-standard has-post-thumbnail hentry category-blog">
                                <a class="elementor-post__thumbnail__link" href="">
                                    <div class="elementor-post__thumbnail"><img width="1027" height="835"
                                            src="https://img.freepik.com/free-vector/data-network-illustration_24908-57794.jpg?w=740&t=st=1707144042~exp=1707144642~hmac=4567c06d897b9c675634129fb02f6503e383e60b0f0068d7ced6e40c3fb53ba0"
                                            class="attachment-full size-full wp-image-83" alt="" loading="lazy" /></div>
                                </a>
                                <div class="elementor-post__text">
                                    <h4 class="elementor-post__title">
                                        <a href="">
                                            Api Integration</a>
                                    </h4>
                                    <div class="elementor-post__meta-data">
                                        <span class="elementor-post-date">
                                            August 28, 2022 </span>
                                    </div>
                                </div>

                            </article>

                        </div>


                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include 'app/footer.php';?>