<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocktopmenu/css/superfish-modified.scss" */ ?>
<?php /*%%SmartyHeaderCode:666126800554074aa35cb84-13933251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08cb72ab7d24f8255b71b95a10ef4e42a82c0318' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocktopmenu/css/superfish-modified.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '666126800554074aa35cb84-13933251',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa3e35a3_54190318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa3e35a3_54190318')) {function content_554074aa3e35a3_54190318($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/*** ESSENTIAL STYLES ***/
.sf-contener {
	clear: both;
	float: left;
	width: 100%;
}
.sf-right {}
.sf-menu,
.sf-menu * {
	margin: 0;
	padding: 0;
	list-style: none;
}
.sf-menu {
	position: relative;
	padding: 0;
	width: 100%;
	border-bottom: 3px solid #e9e9e9;
	background: #f6f6f6;
	@media (max-width: $screen-xs-max) { // max 767px
		display: none;
	}
}
.sf-menu ul {
	position: absolute;
	top: -999em;
	background: $light-background;
	@media (max-width: $screen-xs-max) { // max 767px
		position: relative;
	}
}
.sf-menu ul li {
	width: 100%;
}
.sf-menu li:hover {
	visibility: inherit; /* fixes IE7 'sticky bug' */
}
.sf-menu > li {
	float: left;
	border-right: 1px solid $base-border-color;
	margin-bottom: -3px;
	@media (max-width: $screen-xs-max) { // max 767px
		float: none;
		position: relative;
		border-right: none;
		span {
			position: absolute;
			right: 6px;
			top: 20px;
			width: 30px;
			height: 30px;
			z-index: 2;
			&:after {
				font-family: $font-icon;
				content: "\f067";
				font-size: 26px;
			}
			&.active {
				&:after {
					content: "\f068";
				}
			}
		}
	}
	> a {
		font: 600 18px/22px $font-custom;
		text-transform: uppercase;
		color: #484848;
		display: block;
		padding: 17px 20px;
		border-bottom: 3px solid #e9e9e9;
	}
	&.sfHover > a,
	> a:hover,
	&.sfHoverForce > a {
		background: $dark-background;
		border-bottom-color: #666666;
		color: $light-text-color;
	}
}
.sf-menu li li li a {
	display: inline-block;
	position: relative;
	color: #777777;
	font-size: 13px;
	line-height: 16px;
	font-weight: bold;
	padding-bottom: 10px;
	&:before {
		content: "\f105";
		display: inline-block;
		font-family: $font-icon;
		padding-right: 10px;
	}
	&:hover {
		color: $base-text-color;
	}
}
.sf-menu li ul {
	display: none;
	left: 0;
	top: 59px; /* match top ul list item height */
	z-index: 99;
	padding: 12px 0px 18px 0px;
	@include box-shadow(rgba(black, 0.20) 0px 5px 13px);
	@media (max-width: $screen-xs-max) { // max 767px
		top: 0;
	}
}
.sf-menu li li ul {
	position: static;
	display: block !important;
	opacity: 1 !important;
	background: none;
	@include box-shadow(rgba(black, 0) 0px 0px 0px);
}
.sf-menu li li li ul {
	padding: 0 0 0 20px;
}
.sf-menu li li li ul {
	width: 220px;
}
ul.sf-menu li:hover li ul,
ul.sf-menu li.sfHover li ul {
	top: -999em;
}
ul.sf-menu li li:hover ul,
ul.sf-menu li li.sfHover ul {
	left: 200px; /* match ul width */
	top: 0;
}
ul.sf-menu li li:hover li ul,
ul.sf-menu li li.sfHover li ul {
	top: -999em;
}
ul.sf-menu li li li:hover ul,
ul.sf-menu li li li.sfHover ul {
	left: 200px; /* match ul width */
	top: 0;
}
.sf-menu > li > ul {
	padding: 26px 30px 31px;
	width: 100%;
	> li {
		> a {
			text-transform: uppercase;
			font: 600 16px/20px $font-custom;
			color: $base-text-color;
			&:hover {
				color: $link-hover-color;
			}
		}
	}
}
.sf-menu > li > ul > li {
	float: left;
	width: 20%;
	padding-right: 15px;
	@media (max-width: $screen-xs-max) { // max 767px
		width: 50%;
	}
	@media (max-width: $screen-xs - 1) { // max 479px
		width: 100%;
		padding-bottom: 20px;
	}
	@media (min-width: $screen-sm) { // min 768px
		&.first-in-line-lg {
			clear: left;
		}
	}
	@media (min-width: $screen-xs) and (max-width: $screen-xs-max) { // min 480px max 767px
		&.first-in-line-xs {
			clear: left;
		}
	}
}
.sf-menu > li > ul > li.category-thumbnail {
	width: 100% !important;
	float: none;
	clear: both;
	overflow: hidden;
	padding-right: 0;
	> div {
		float: left;
		padding-left: 10px;
		width: 33.333%;
		@media (max-width: $screen-xs - 1) { // max 479px
			width: 100%;
			padding-left: 0;
			padding-top: 10px;
			text-align: center;
		}
		&:first-child {
			padding-left: 0;
		}
		img {
			max-width: 100%;
			display: block;
		}
	}
}
.cat-title {
	display: none;
	@media (max-width: $screen-xs-max) { // max 767px
		display: block;
		font: 600 18px/22px $font-custom;
		text-transform: uppercase;
		color: #484848;
		display: block;
		padding: 17px 20px;
		border-bottom: 3px solid #e9e9e9;
		background: #f6f6f6;
		position: relative;
		&:hover {
			background: $dark-background;
			border-bottom-color: #666666;
			color: $light-text-color;
		}
		&:after {
			display: block;
			font-family: $font-icon;
			content: "\f067";
			position: absolute;
			right: 15px;
			top: 18px;
			font-size: 26px;
		}
		&.active:after{
			content: "\f068";
		}
	}
}

.sf-menu {
	li.sf-search{
		border: none;
		input{
			display: inline;
			padding: 0 13px;
			height: 30px;
			line-height: 30px;
			background: $input-bg;
			margin: 13px 10px 0 0;
			font-size: 13px;
			color: $input-color;
			border: 1px solid $input-border;
		}
	}
}

#block_top_menu {
	.category-thumbnail {
		clear: both;
		width:100%;
		float:none;
		div {
			float: left;
			width: 100 / 3 * 1%;
			img {
				max-width: 100%;
			}
		}
	}
	li.category-thumbnail {
		padding-right: 0;
	}
}<?php }} ?>
