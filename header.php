<!DOCTYPE html>
<!--[if IE 6]>
<html class="ie ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
<?php do_action( 'before' ); ?>
  <header class="branding" role="banner">
    <hgroup>
      <h1 class="site-title">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <span class="title"><?php bloginfo( 'name' ); ?></span>
          <svg
             xmlns:dc="http://purl.org/dc/elements/1.1/"
             xmlns:cc="http://creativecommons.org/ns#"
             xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
             xmlns:svg="http://www.w3.org/2000/svg"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
             xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
             width="65.235649mm"
             height="59.927685mm"
             viewBox="0 0 231.14994 212.34219"
             id="svg4163"
             version="1.1"
             inkscape:version="0.91 r13725"
             sodipodi:docname="logo.svg">
            <defs
               id="defs4165">
              <inkscape:perspective
                 sodipodi:type="inkscape:persp3d"
                 inkscape:vp_x="-47.477173 : 468.01173 : 1"
                 inkscape:vp_y="0 : 999.99999 : 0"
                 inkscape:vp_z="1004.885 : 468.01173 : 1"
                 inkscape:persp3d-origin="478.70394 : 343.99598 : 1"
                 id="perspective4930" />
              <inkscape:path-effect
                 effect="skeletal"
                 id="path-effect4764"
                 is_visible="true"
                 pattern="m 0,313.26772 c 0,-2.76 2.24,-5 5,-5 2.76,0 5,2.24 5,5 0,2.76 -2.24,5 -5,5 -2.76,0 -5,-2.24 -5,-5 z"
                 copytype="single_stretched"
                 prop_scale="0.94"
                 scale_y_rel="false"
                 spacing="0"
                 normal_offset="0"
                 tang_offset="0"
                 prop_units="false"
                 vertical_pattern="false"
                 fuse_tolerance="0" />
            </defs>
            <sodipodi:namedview
               id="base"
               borderopacity="1.0"
               inkscape:pageopacity="0.0"
               inkscape:pageshadow="2"
               inkscape:zoom="0.98994949"
               inkscape:cx="249.57159"
               inkscape:cy="67.842289"
               inkscape:document-units="px"
               inkscape:current-layer="layer6"
               showgrid="false"
               inkscape:showpageshadow="false"
               inkscape:window-width="1920"
               inkscape:window-height="1017"
               inkscape:window-x="-8"
               inkscape:window-y="-8"
               inkscape:window-maximized="1"
               fit-margin-top="0"
               fit-margin-left="0"
               fit-margin-right="0"
               fit-margin-bottom="0">
              <inkscape:grid
                 type="xygrid"
                 id="grid4721"
                 originx="-128.55352"
                 originy="-356.89987" />
            </sodipodi:namedview>
            <metadata
               id="metadata4168">
              <rdf:RDF>
                <cc:Work
                   rdf:about="">
                  <dc:format>image/svg+xml</dc:format>
                  <dc:type
                     rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                  <dc:title></dc:title>
                </cc:Work>
              </rdf:RDF>
            </metadata>
            <g
               inkscape:groupmode="layer"
               id="layer6"
               inkscape:label="Original Logo (Just the Path)"
               style="display:inline"
               transform="translate(-128.55352,-174.85241)">
              <path
                 d="m 174.91078,174.85819 c -28.12832,0.0606 -46.34906,0.51623 -46.34906,0.51623 l 0.0288,0.0533 -0.037,0 0,211.14823 35.72896,0 0,-70.98636 30.40246,0 0,71.60502 35.72897,0 0,-44.65019 0.037,0.0533 -0.037,-17.32665 37.54416,0 c 31.08587,0 54.09755,-5.94092 69.03492,-17.82239 15.13922,-11.88146 22.71047,-30.6123 22.71047,-56.18766 0,-25.57536 -7.36716,-44.50569 -22.10267,-56.78994 -14.73551,-12.2842 -38.15127,-18.42468 -70.24642,-18.42468 l -6.71048,0 c -32.19472,-0.97389 -62.42226,-1.23843 -85.73309,-1.18815 z m -10.62832,32.89152 32.59958,0 29.88502,0.88907 c 10.23075,1.15996 17.90465,3.46352 22.8994,6.96507 7.46868,5.03452 11.20328,14.49765 11.20328,28.39293 0,13.69389 -3.63255,23.66194 -10.89938,29.90475 -5.30355,4.55617 -14.09041,7.42981 -26.27515,8.66128 l -18.00824,0.70468 -41.40451,0 0,-75.51778 z m 126.93225,2.75325 c 7.43969,1.50889 13.53363,3.8074 18.22588,6.92821 9.08353,6.04142 13.62629,16.4126 13.62629,31.11339 0,14.49942 -3.63665,25.57502 -10.90348,33.22749 -5.8838,6.20534 -16.24146,9.78702 -30.94457,10.82455 10.85488,-11.61113 16.28747,-27.80929 16.28747,-48.59982 0,-13.13517 -2.10744,-24.29112 -6.29159,-33.49382 z m -56.58726,118.59881 0.041,19.41617 27.10882,38.05797 45.41685,0 -41.44148,-57.384 c -1.30199,0.008 -2.55148,0.0283 -3.86038,0.0327 -13.7258,0.0462 -25.37176,-0.10048 -27.26487,-0.12293 z"
                 id="path4742-0-8"
                 inkscape:connector-curvature="0" />
            </g>
          </svg>
        </a>
      </h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>

    <nav class="access" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- nav.access -->
  </header><!-- header.branding -->

  <div class="main">
