<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/_theme_variables.scss" */ ?>
<?php /*%%SmartyHeaderCode:622037568554074aadd3ef9-60201559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ecf5c9294489d6503b5fa0415cf22840f6cecaa' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/_theme_variables.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622037568554074aadd3ef9-60201559',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aadd7093_02086633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aadd7093_02086633')) {function content_554074aadd7093_02086633($_smarty_tpl) {?>@import 'bootstrap_lib/_variables';

//------- FONTS
$font-family:				  		Arial, Helvetica, sans-serif;
$font:						  		normal 13px/18px $font-family;
$font-custom:                 		'Open Sans', sans-serif;
$font-icon:                   		"FontAwesome";
$fa-css-prefix:       				icon !default;


//-------- BORDERS
$base-border-color:					#d6d4d4;
$main_border:						1px solid $base-border-color;
$dark-border-color:					#333;
$light-border-color:				#fff;
$homepage-footer-border:            #d9d9d9;

//--------- BACKGROUNDS
$base-box-bg:                       #fbfbfb;
$table-background:                  $base-box-bg;
$dark-background:                   #333;
$light-background:                  #fff;
$homepage-footer-bg:                #f2f2f2;

//--------- COLORS
$base-body-color:                   #777;
$base-text-color:                   #333;
$base-heading-color:				#555454;
$base-title-color:					$base-text-color;
$light-text-color:                  #fff;
$link-color:						$link-color;
$link-hover-color:                  $link-hover-color;
$description-color:					#666;


//--------- Indents
$base-page-indent:                 	$grid-gutter-width;
$base-box-padding:                  14px 18px 13px;
$base-box-indent:                  	0 0 30px 0;

//---------- Product Elements
$product-name-color:                #3a3939;
$product-name-hover-color:          #515151;
$price-color:						$base-body-color;
$product-price-color:				$base-text-color;
$product-reduced-price:				#f00;
$product-special-price-color:		#f13340;
$product-old-price-color:			#6f6f6f;

//---------- Buttons
$button-text-color:					$light-text-color;

		//------ Buttons +/- ---
		$button-pm-color:			#c0c0c0;
		$button-pm-hover-color:		$base-text-color;

		//------ Button Small --
		$button-small-bg:			#6f6f6f;
		$button-small-hover-bg:		#575757;

		//-------Button exclusive-medium
		$button-em-color:			$base-text-color;

//---------- Product Listing
$base-listing-border-color:					$base-border-color;
$base-listing-grid-padding:					$base-box-padding;

		//-------------- Grid/List vars
		$GL-text-color:								#808080;
		$GL-title-color:							$base-text-color;
		$GL-icon-color:								#e1e0e0;
		$GL-icon-color-hover:						$base-text-color;

		//-------------- Pagination vars
		$pagination-prevnext-color:					#777676;
		$pagination-bgcolor:	               		$base-box-bg;
		$pagination-hover-bg:						#f6f6f6;

//---------- Product Info
$top-line-color:									#C4C4C4;
$product-image-border:								#dbdbdb;
$scroll-button-color:								#c0c0c0;
$list-info-bg:										#f6f6f6;
$scroll-button-hover-color:							$base-text-color;
$tr-even-bg:										#fdfdfd;

//sub heading (h2,h3) define
@mixin sub-heading {
	color: $base-heading-color;
	text-transform: uppercase;
	font-family: $font-custom;
	font-weight: 600;
	font-size: 18px;
	line-height: 20px;
	padding: 14px 20px 17px;
	margin: 0 0 20px;
	position: relative;
	border: 1px solid $base-border-color;
	border-bottom: none;
	background: $base-box-bg;
}<?php }} ?>
