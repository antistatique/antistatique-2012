<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'as2012' ), max( $paged, $page ) );

    ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( home_url() ); ?>/../assets/css/antistatique.css?v=3e83083" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>
<script src="//use.typekit.net/lfl3jyz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="Antistatique"/>
<meta name="msapplication-TileColor" content="#EF2678" />
<meta name="msapplication-TileImage" content="/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="/mstile-310x310.png" />

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-4367884-3']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<!--[if lt IE 9]>
    <script src="<?php echo esc_url( home_url() ); ?>/../assets/js/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
    <script src="<?php echo esc_url( home_url() ); ?>/../assets/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
    <script src="<?php echo esc_url( home_url() ); ?>/../assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed blog">

    <header class="topbar">
      <section>
      <a class="brand" href="/">
          <object data='/assets/img/logo-antistatique-w.svg?v=3e83083' style='height:35px; width:175px;' >
            <img alt="antistatique" src="/assets/img/logo-antistatique.png" width="175" height="35" />
          </object>
        </a>
        <?php get_template_part( 'aside', 'navigation' ) ?>
      </section>
    </header>

    <div class="baseline-space"></div>

