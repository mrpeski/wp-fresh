<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package icsan
 */
// $logo = get_template_directory_uri() . '/images/ppllogo.jpeg';
// $checkmark = get_template_directory_uri() . '/images/checkmark.svg';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/zgk0nwj.css">

	<?php wp_head(); ?>
	<style>
	    .wp-block-search__input {
	        display: block;
            width: 100%;
            height: calc(1.5em + .9rem);
            padding: .45rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: hsl(210, 9%, 31%);
            background-color: hsl(210, 17%, 98%);
            background-clip: padding-box;
            border: 0 solid hsla(0, 0%, 0%, 0);
            border-radius: .1rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	    }
	    .wp-block-search__button {
	        display: inline-block;
	        margin: 20px 10px;
            text-align: center;
            text-transform: uppercase;
            font-weight: 400;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            letter-spacing: 2px;
            border: 3px solid;
            background: hsla(0, 0%, 0%, 0);
            padding: 5px 25px;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	    }
	    .post-thumbnail {
	        overflow: hidden;
	        display:block;
	        width: 100%;
	    }
	    .dropdown-menu .dropdown-menu {
	        left: 100%;
	        top: 0;
	    }
	    .dropdown-menu {
	        font-size: 13px;
	    }
	    .dropdown-menu .dropdown:hover > .dropdown-menu {
	        display: block;
	        width: 100%;
	        visibility: visible;
	        -webkit-animation-name: revealUp;
            animation-name: revealUp;
            -webkit-animation-fill-mode: backwards;
            animation-fill-mode: backwards;
            -webkit-animation-duration: .4s;
            animation-duration: .4s;
            -webkit-animation-timing-function: cubic-bezier(.23,.5,.6,1);
            animation-timing-function: cubic-bezier(.23,.5,.6,1);
	    }
	    .dropdown-menu .dropdown > a::after {
	        display: inline-block;
            vertical-align: 13px;
            content: "";
              border-top: .3em solid transparent;
              border-bottom: .3em solid transparent;
              border-left: .3em solid black;
              float: right;
            margin-top: 8px;
	    }
	    .navbar-nav .nav-link {
            font-size: 13px;
            letter-spacing: 1px;
            padding: 1.6rem 1rem;
        }
        .entry-content {
            margin-bottom: 40px;
        }
        .notice {
                background: hsl(34, 78%, 91%);
    width: 100%;
    display: inline-block;
    padding: 5px;
    color: hsl(0, 1%, 32%);
        }
	</style>
<script data-ad-client="ca-pub-2366112272731752" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body class="bg-white navbar-is-fixed">
<noscript><img src='http://192.168.8.119:80/pixel.png?app_key=800343811e9585a64fb64d2a1324a11e816bbcba&begin_session=1'/></noscript>
<div id="page" class="site">
    <header class="fixed-top shadow">
        <div class="text-center"><a href="https://icsan.org/2020/04/june-examinations-postponed-till-further-notice/" class="notice">2020 ICSAN First Diet Examination Holds AUGUST 11th & 12th </a></div>
        <nav class="navbar navbar-expand-md navbar-light ">
            
                <a class="navbar-brand" href="/">Navbar</a>
                <button class="navbar-toggler bg-transparent p-2" style="width:unset" type="button" 
                        data-toggle="collapse" 
                        data-target="#navbarSupportedContent" 
                        aria-controls="navbarNavDropdown" aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
            	    <?php
            	    wp_nav_menu( array(
            		    'theme_location'  => 'primary',
            		    'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
            		    'container'       => null,
            		    'container_class' => '',
            		    'container_id'    => 'navbarNavDropdown',
            		    'menu_class'      => 'navbar-nav ml-auto mr-auto',
            		    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            		    'walker'          => new WP_Bootstrap_Navwalker(),
            	    ) );
            	    ?>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-primary" href="https://portal.icsan.org" title="Member Login">Login</a>
                        <a class="btn btn-outline-primary" href="https://portal.icsan.org/registration/appreglogin.aspx">New Students</a>
                    </form>
                </div>
        </nav>
    </header>
    
	<div id="content" class="site-content">
