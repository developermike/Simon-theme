<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/global.scss" */ ?>
<?php /*%%SmartyHeaderCode:916087738554074a9b283e6-48838198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f8d5053b8a827fe684626be77ed6b624fd1311' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/global.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '916087738554074a9b283e6-48838198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa467798_26942200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa467798_26942200')) {function content_554074aa467798_26942200($_smarty_tpl) {?>@charset "UTF-8";
// Make sure the charset is set appropriately

@import "compass";
@import "compass/reset";
@import "theme_variables";
@import "bootstrap";
@import "font-awesome/font-awesome";
@import "icons";

a:hover {
	text-decoration: none;
}

@media only screen and (min-width: 1200px) {
	.container {
		padding-left: 0;
		padding-right: 0;
	}
}

body {
	min-width: 320px;
	height: 100%;
	line-height: 18px;
	font-size: 13px;
	color: $base-body-color;
	&.content_only {
		background: none;
	}
}

textarea {
	resize: none;
}

//structure
#header {
	z-index: 5003;
}

.columns-container {
	background: $light-background;
}

#columns {
	position: relative;
	padding-bottom: 50px;
	padding-top: 15px;
}

#index {
	.tab-content {
		margin-top: 35px;
		margin-bottom: 34px;
	}
}

header {
	z-index: 1;
	position: relative;
	background: $light-background;
	padding-bottom: 15px;
	.banner {
		background: black;
		max-height: 100%;
		.row {
			margin: 0px;
		}
	}
	.nav {
		background: $dark-background;
		.row {
			margin: 0px;
		}
		nav {
			width: 100%;
		}
	}
	.row {
		position: relative;
		> .container {
			position: relative;
		}
		#header_logo {
			padding-top: 15px;
			@extend .col-sm-4;
			@media (max-width: $screen-md) {
				padding-top: 40px;
			}
			@media (max-width: $screen-xs-max) {
				padding-top: 15px;
				img {
					margin: 0 auto;
				}
			}
		}
	}
	@media (min-width: $screen-xs-max){
		.col-sm-4 + .col-sm-4 + .col-sm-4 {
			float: right;
		}
	}
}

.ie8 #header #header_logo {
	width: 350px;
}

//title
#center_column {
	.page_product_box {
		h3 {
			@include sub-heading;
		}
	}
}

//text
p.info-title {
	font-weight: bold;
	color: $base-text-color;
	margin-bottom: 25px;
}

p.info-account {
	margin: -4px 0 24px 0;
}

.dark {
	color: $base-text-color;
}

.main-page-indent {
	margin-bottom: $base-page-indent;
}

.alert {
	font-weight: bold;
	&:before {
		cursor:  pointer;
	}
	ul, ol {
		padding-left: 15px;
		margin-left: 27px;
		li {
			list-style-type: decimal;
			font-weight: normal;
		}
	}
	&.alert-success {
		text-shadow: 1px 1px rgba(0, 0, 0, 0.1);
		&:before {
			font-family: $font-icon;
			content: "\f058";
			font-size: 20px;
			vertical-align: -2px;
			padding-right: 7px;
		}
	}
	&.alert-danger {
		text-shadow: 1px 1px rgba(0, 0, 0, 0.1);
		&:before {
			font-family: $font-icon;
			content: "\f057";
			font-size: 20px;
			vertical-align: -2px;
			padding-right: 7px;
			float: left;
		}
	}
}

.label {
	white-space: normal;
	display: inline-block;
	padding: 6px 10px;
}

label {
	color: $base-title-color;
	&.required {
		&:before {
			content: "*";
			color: red;
			font-size: 14px;
			position: relative;
			line-height: 12px;
		}
	}
}

.unvisible {
	display: none;
}

.checkbox {
	line-height: 16px;
	label {
		color: #777777;
	}
}

.close {
	opacity: 1;
	&:hover {
		opacity: 1;
	}
}

//buttons
input.button_mini,
input.button_small,
input.button,
input.button_large,
input.button_mini_disabled,
input.button_small_disabled,
input.button_disabled,
input.button_large_disabled,
input.exclusive_mini,
input.exclusive_small,
input.exclusive,
input.exclusive_large,
input.exclusive_mini_disabled,
input.exclusive_small_disabled,
input.exclusive_disabled,
input.exclusive_large_disabled,
a.button_mini,
a.button_small,
a.button,
a.button_large,
a.exclusive_mini,
a.exclusive_small,
a.exclusive,
a.exclusive_large,
span.button_mini,
span.button_small,
span.button,
span.button_large,
span.exclusive_mini,
span.exclusive_small,
span.exclusive,
span.exclusive_large,
span.exclusive_large_disabled {
	position: relative;
	display: inline-block;
	padding: 5px 7px;
	border: 1px solid #cc9900;
	font-weight: bold;
	color: black;
	background: url(../img/bg_bt.gif) repeat-x 0 0 #f4b61b;
	cursor: pointer;
	white-space: normal;
	text-align: left;
}

*:first-child+html input.button_mini,
*:first-child+html input.button_small,
*:first-child+html input.button,
*:first-child+html input.button_large,
*:first-child+html input.button_mini_disabled,
*:first-child+html input.button_small_disabled,
*:first-child+html input.button_disabled,
*:first-child+html input.button_large_disabled,
*:first-child+html input.exclusive_mini,
*:first-child+html input.exclusive_small,
*:first-child+html input.exclusive,
*:first-child+html input.exclusive_large,
*:first-child+html input.exclusive_mini_disabled,
*:first-child+html input.exclusive_small_disabled,
*:first-child+html input.exclusive_disabled,
*:first-child+html input.exclusive_large_disabled {
	border: none;
}

//hover button
input.button_mini:hover,
input.button_small:hover,
input.button:hover,
input.button_large:hover,
input.exclusive_mini:hover,
input.exclusive_small:hover,
input.exclusive:hover,
input.exclusive_large:hover,
a.button_mini:hover,
a.button_small:hover,
a.button:hover,
a.button_large:hover,
a.exclusive_mini:hover,
a.exclusive_small:hover,
a.exclusive:hover,
a.exclusive_large:hover {
	text-decoration: none;
	background-position: left -50px;
}

//active button
input.button_mini:active,
input.button_small:active,
input.button:active,
input.button_large:active,
input.exclusive_mini:active,
input.exclusive_small:active,
input.exclusive:active,
input.exclusive_large:active,
a.button_mini:active,
a.button_small:active,
a.button:active,
a.button_large:active,
a.exclusive_mini:active,
a.exclusive_small:active,
a.exclusive:active,
a.exclusive_large:active {
	background-position: left -100px;
}

input.button_disabled,
input.exclusive_disabled,
span.exclusive {
	border: 1px solid #cccccc;
	color: #999999;
	background: url(../img/bg_bt_2.gif) repeat-x 0 0 #cccccc;
	cursor: default;
}

.btn.disabled,
.btn[disabled]:hover {
	opacity: 0.3;
}

.button.button-small {
	font: bold 13px / 17px $font-family;
	color: $button-text-color;
	background: $button-small-bg;
	border: 1px solid;
	border-color: #666666 #5f5f5f #292929 #5f5f5f;
	padding: 0;
	text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
	@include border-radius(0);
	span {
		display: block;
		padding: 3px 8px 3px 8px;
		border: 1px solid;
		border-color: #8b8a8a;
		i {
			vertical-align: 0px;
			margin-right: 5px;
			&.right {
				margin-right: 0;
				margin-left: 5px;
			}
		}
		&:hover {
			background: $button-small-hover-bg;
			border-color: #303030 #303030 #666666 #444444;
		}
	}
}

.button.button-medium {
	font-size: 17px;
	line-height: 21px;
	color: $button-text-color;
	padding: 0;
	font-weight: bold;
	background: rgb(67, 183, 84);
	background: -moz-linear-gradient(top, rgba(67, 183, 84, 1) 0%, rgba(65, 183, 87, 1) 2%, rgba(65, 184, 84, 1) 4%, rgba(67, 183, 86, 1) 6%, rgba(65, 179, 84, 1) 38%, rgba(68, 179, 85, 1) 40%, rgba(69, 175, 85, 1) 66%, rgba(65, 174, 83, 1) 74%, rgba(66, 172, 82, 1) 91%, rgba(65, 174, 85, 1) 94%, rgba(67, 171, 84, 1) 96%, rgba(66, 172, 82, 1) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(67, 183, 84, 1)), color-stop(2%, rgba(65, 183, 87, 1)), color-stop(4%, rgba(65, 184, 84, 1)), color-stop(6%, rgba(67, 183, 86, 1)), color-stop(38%, rgba(65, 179, 84, 1)), color-stop(40%, rgba(68, 179, 85, 1)), color-stop(66%, rgba(69, 175, 85, 1)), color-stop(74%, rgba(65, 174, 83, 1)), color-stop(91%, rgba(66, 172, 82, 1)), color-stop(94%, rgba(65, 174, 85, 1)), color-stop(96%, rgba(67, 171, 84, 1)), color-stop(100%, rgba(66, 172, 82, 1)));
	background: -webkit-linear-gradient(top, rgba(67, 183, 84, 1) 0%, rgba(65, 183, 87, 1) 2%, rgba(65, 184, 84, 1) 4%, rgba(67, 183, 86, 1) 6%, rgba(65, 179, 84, 1) 38%, rgba(68, 179, 85, 1) 40%, rgba(69, 175, 85, 1) 66%, rgba(65, 174, 83, 1) 74%, rgba(66, 172, 82, 1) 91%, rgba(65, 174, 85, 1) 94%, rgba(67, 171, 84, 1) 96%, rgba(66, 172, 82, 1) 100%);
	background: -o-linear-gradient(top, rgba(67, 183, 84, 1) 0%, rgba(65, 183, 87, 1) 2%, rgba(65, 184, 84, 1) 4%, rgba(67, 183, 86, 1) 6%, rgba(65, 179, 84, 1) 38%, rgba(68, 179, 85, 1) 40%, rgba(69, 175, 85, 1) 66%, rgba(65, 174, 83, 1) 74%, rgba(66, 172, 82, 1) 91%, rgba(65, 174, 85, 1) 94%, rgba(67, 171, 84, 1) 96%, rgba(66, 172, 82, 1) 100%);
	background: -ms-linear-gradient(top, rgba(67, 183, 84, 1) 0%, rgba(65, 183, 87, 1) 2%, rgba(65, 184, 84, 1) 4%, rgba(67, 183, 86, 1) 6%, rgba(65, 179, 84, 1) 38%, rgba(68, 179, 85, 1) 40%, rgba(69, 175, 85, 1) 66%, rgba(65, 174, 83, 1) 74%, rgba(66, 172, 82, 1) 91%, rgba(65, 174, 85, 1) 94%, rgba(67, 171, 84, 1) 96%, rgba(66, 172, 82, 1) 100%);
	background: linear-gradient(to bottom, rgba(67, 183, 84, 1) 0%, rgba(65, 183, 87, 1) 2%, rgba(65, 184, 84, 1) 4%, rgba(67, 183, 86, 1) 6%, rgba(65, 179, 84, 1) 38%, rgba(68, 179, 85, 1) 40%, rgba(69, 175, 85, 1) 66%, rgba(65, 174, 83, 1) 74%, rgba(66, 172, 82, 1) 91%, rgba(65, 174, 85, 1) 94%, rgba(67, 171, 84, 1) 96%, rgba(66, 172, 82, 1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#43b754', endColorstr='#42ac52',GradientType=0 );
	border: 1px solid;
	border-color: #399a49 #247f32 #1a6d27 #399a49;
	@include border-radius(0);
	span {
		display: block;
		padding: 10px 10px 10px 14px;
		border: 1px solid;
		border-color: #74d578;
		// max 480px
		@media (max-width: $screen-xs) {
			font-size: 15px;
			padding-right: 7px;
			padding-left: 7px;
		}
		i {
			&.left {
				font-size: 24px;
				vertical-align: -2px;
				margin: -4px 10px 0 0;
				display: inline-block;
				// max 480px
				@media (max-width: $screen-xs) {
					margin-right: 5px;
				}
			}
			&.right {
				margin-right: 0;
				margin-left: 9px;
				// max 480px
				@media (max-width: $screen-xs) {
					margin-left: 5px;
				}
			}
		}
	}
	&:hover {
		background: rgb(58, 160, 76);
		background: -moz-linear-gradient(top, rgba(58, 160, 76, 1) 0%, rgba(58, 160, 74, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(58, 160, 76, 1)), color-stop(100%, rgba(58, 160, 74, 1)));
		background: -webkit-linear-gradient(top, rgba(58, 160, 76, 1) 0%, rgba(58, 160, 74, 1) 100%);
		background: -o-linear-gradient(top, rgba(58, 160, 76, 1) 0%, rgba(58, 160, 74, 1) 100%);
		background: -ms-linear-gradient(top, rgba(58, 160, 76, 1) 0%, rgba(58, 160, 74, 1) 100%);
		background: linear-gradient(to bottom, rgba(58, 160, 76, 1) 0%, rgba(58, 160, 74, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3aa04c', endColorstr='#3aa04a',GradientType=0 );
		border-color: #196f28 #399a49 #399a49 #258033;
	}
}

.button.button-medium.exclusive {
	border-color: #db8600 #d98305 #c86d26 #d98305;
	@include background-image(linear-gradient(top, rgba(253, 170, 2, 1), rgba(254, 151, 2, 1)));
	span {
		border-color: #fec133 #febc33 #feb233 #febc33;
	}
	&:hover {
		background: #f89609;
		border-color: #a6550c #ba6708 #db8600 #ba6708;
		span {
			border-color: #fec133;
		}
	}
}

.link-button {
	font-weight: bold;
	i {
		margin-right: 5px;
		&.large {
			font-size: 26px;
			line-height: 26px;
			vertical-align: -3px;
			color: silver;
		}
	}
}

.btn.button-plus,
.btn.button-minus {
	font-size: 14px;
	line-height: 14px;
	color: $button-pm-color;
	text-shadow: 1px -1px rgba(0, 0, 0, 0.05);
	padding: 0;
	border: 1px solid;
	border-color: #dedcdc #c1bfbf #b5b4b4 #dad8d8;
	@include border-radius(0);
	span {
		display: block;
		border: 1px solid $light-border-color;
		vertical-align: middle;
		width: 25px;
		height: 25px;
		text-align: center;
		vertical-align: middle;
		padding: 4px 0 0 0;
		background: rgb(30, 87, 153);
		background: rgb(255, 255, 255);
		background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(251, 251, 251, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(100%, rgba(251, 251, 251, 1)));
		background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(251, 251, 251, 1) 100%);
		background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(251, 251, 251, 1) 100%);
		background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(251, 251, 251, 1) 100%);
		background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(251, 251, 251, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#fbfbfb',GradientType=0);
	}
	&:hover {
		color: $base-text-color;
		span {
			filter: none;
			background: #f6f6f6;
		}
	}
}

.button.exclusive-medium {
	font-size: 17px;
	padding: 0;
	line-height: 21px;
	color: $button-em-color;
	font-weight: bold;
	border: 1px solid;
	border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
	text-shadow: 1px 1px rgba(255, 255, 255, 1);
	span {
		border: 1px solid;
		border-color: $light-border-color;
		display: block;
		padding: 9px 10px 11px 10px;
		background: rgb(247, 247, 247);
		background: -moz-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(247, 247, 247, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
		background: -webkit-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -o-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -ms-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: linear-gradient(to bottom, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0);
		// max 480px
		@media (max-width: $screen-xs) {
			font-size: 15px;
			padding-right: 7px;
			padding-left: 7px;
		}
		&:hover {
			border-color: #9e9e9e #c2c2c2 #c8c8c8 #c2c2c2;
			span {
				background: rgb(231, 231, 231);
				background: -moz-linear-gradient(top, rgba(231, 231, 231, 1) 0%, rgba(231, 231, 231, 1) 0%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(231, 231, 231, 1)), color-stop(0%, rgba(231, 231, 231, 1)));
				background: -webkit-linear-gradient(top, rgba(231, 231, 231, 1) 0%, rgba(231, 231, 231, 1) 0%);
				background: -o-linear-gradient(top, rgba(231, 231, 231, 1) 0%, rgba(231, 231, 231, 1) 0%);
				background: -ms-linear-gradient(top, rgba(231, 231, 231, 1) 0%, rgba(231, 231, 231, 1) 0%);
				background: linear-gradient(to bottom, rgba(231, 231, 231, 1) 0%, rgba(231, 231, 231, 1) 0%);
				filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e7e7e7', endColorstr='#e7e7e7',GradientType=0);
			}
		}
	}
}

.button.ajax_add_to_cart_button {
	font: 700 17px / 21px $font-family;
	color: $button-text-color;
	text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
	padding: 0;
	border: 1px solid;
	border-color: #0079b6 #006fa8 #012740 #006fa8;
	span {
		border: 1px solid;
		border-color: #06b2e6;
		padding: 10px 14px;
		display: block;
		background: rgb(0, 154, 208);
		background: -moz-linear-gradient(top, rgba(0, 154, 208, 1) 0%, rgba(0, 122, 183, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 154, 208, 1)), color-stop(100%, rgba(0, 122, 183, 1)));
		background: -webkit-linear-gradient(top, rgba(0, 154, 208, 1) 0%, rgba(0, 122, 183, 1) 100%);
		background: -o-linear-gradient(top, rgba(0, 154, 208, 1) 0%, rgba(0, 122, 183, 1) 100%);
		background: -ms-linear-gradient(top, rgba(0, 154, 208, 1) 0%, rgba(0, 122, 183, 1) 100%);
		background: linear-gradient(to bottom, rgba(0, 154, 208, 1) 0%, rgba(0, 122, 183, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#009ad0', endColorstr='#007ab7',GradientType=0);
	}
	&:hover {
		border-color: #01314e #004b74 #0079b6 #004b74;
		span {
			filter: none;
			background: #0084bf;
		}
	}
}

.button.lnk_view {
	font: 700 17px / 21px $font-family;
	color: $base-text-color;
	text-shadow: 1px 1px rgba(255, 255, 255, 1);
	padding: 0;
	border: 1px solid;
	border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
	span {
		border: 1px solid;
		border-color: $light-border-color;
		padding: 10px 14px;
		display: block;
		background: rgb(247, 247, 247);
		background: -moz-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(247, 247, 247, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
		background: -webkit-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -o-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: -ms-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		background: linear-gradient(to bottom, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0);
	}
	&:hover {
		border-color: #9e9e9e #9e9e9e #c8c8c8 #9e9e9e;
		span {
			filter: none;
			background: #e7e7e7;
		}
	}
	i.left {
		padding-right: 8px;
		color: #777777;
	}
}

//form
.form-control {
	padding: 3px 5px;
	height: 27px;
	@include box-shadow(none);
	&.grey {
		background: $base-box-bg;
	}
}

//table
table.std,
table.table_block {
	margin-bottom: 20px;
	width: 100%;
	border: 1px solid #999999;
	border-bottom: none;
	background: white;
	border-collapse: inherit;
}

table.std th,
table.table_block th {
	padding: 14px 12px;
	font-size: 12px;
	color: $light-text-color;
	font-weight: bold;
	text-transform: uppercase;
	text-shadow: 0 1px 0 black;
	background: #999999;
}

table.std tr.alternate_item,
table.table_block tr.alternate_item {
	background-color: #f3f3f3;
}

table.std td,
table.table_block td {
	padding: 12px;
	border-right: 1px solid #e9e9e9;
	border-bottom: 1px solid #e9e9e9;
	font-size: 12px;
	vertical-align: top;
}

.table {
	margin-bottom: 30px;
	> thead {
		> tr {
			> th {
				background: $table-background;
				border-bottom-width: 1px;
				color: $base-text-color;
				vertical-align: middle;
			}
		}
	}
	td {
		a.color-myaccount {
			color: $link-color;
			text-decoration: underline;
			&:hover {
				text-decoration: none;
			}
		}
	}
	tfoot {
		tr {
			background: $table-background;
		}
	}
}

//product elements
.product-name {
	font-size: 17px;
	line-height: 23px;
	color: $product-name-color;
	margin-bottom: 0;
	a {
		font-size: 17px;
		line-height: 23px;
		color: $product-name-color;
		&:hover {
			color: $product-name-hover-color;
		}
		@media (max-width: $screen-sm) {
			font-size: 14px;
		}
	}
}

.price {
	font-size: 13px;
	color: $price-color;
	white-space: nowrap;
}

.price.product-price {
	font: 600 21px / 26px $font-custom;
	color: $product-price-color;
}

.old-price {
	color: $product-old-price-color;
	text-decoration: line-through;
}

.old-price.product-price {
	font-size: 17px;
}

.special-price {
	color: $product-special-price-color;
}

.price-percent-reduction {
	background: #f13340;
	border: 1px solid #d02a2c;
	font: 600 21px / 24px $font-custom;
	color: $light-text-color;
	padding: 0 5px 0 3px;
	display: inline-block;
	&.small {
		font: 700 14px / 17px $font-family;
		padding: 1px 6px;
	}
}

//Labels New/Sale
.new-box,
.sale-box {
	position: absolute;
	top: -4px;
	overflow: hidden;
	height: 85px;
	width: 85px;
	text-align: center;
	z-index: 0;
}

.new-box {
	left: -4px;
}

.sale-box {
	right: -5px;
}

.new-label {
	font: 700 14px / 12px $font-family;
	color: $light-text-color;
	background: #6ad4ff;
	text-transform: uppercase;
	padding: 9px 0 7px;
	text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
	width: 130px;
	text-align: center;
	display: block;
	position: absolute;
	left: -33px;
	top: 16px;
	z-index: 1;
	@include rotate(-45deg);
	&:before {
		position: absolute;
		bottom: -3px;
		right: 5px;
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 4px 4px 0px 4px;
		border-color: #21a3d8 transparent transparent transparent;
		content: ".";
		text-indent: -5000px;
		@include rotate(225deg);
	}
	&:after {
		position: absolute;
		bottom: -3px;
		left: 3px;
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 4px 4px 0px 4px;
		border-color: #21a3d8 transparent transparent transparent;
		content: ".";
		text-indent: -5000px;
		@include rotate(135deg);
	}
}

.sale-label {
	font: 700 14px / 12px $font-family;
	color: $light-text-color;
	background: #f13340;
	text-transform: uppercase;
	padding: 9px 0 7px;
	text-shadow: 1px 1px rgba(0, 0, 0, 0.24);
	width: 130px;
	text-align: center;
	display: block;
	position: absolute;
	right: -33px;
	top: 16px;
	z-index: 1;
	@include rotate(45deg);
	&:before {
		position: absolute;
		bottom: -3px;
		right: 4px;
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 4px 4px 0px 4px;
		border-color: #ad2b34 transparent transparent transparent;
		content: ".";
		text-indent: -5000px;
		@include rotate(225deg);
	}
	&:after {
		position: absolute;
		bottom: -3px;
		left: 5px;
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 4px 4px 0px 4px;
		border-color: #ad2b34 transparent transparent transparent;
		content: ".";
		text-indent: -5000px;
		@include rotate(135deg);
	}
}

.ie8 {
	.new-label {
		left: 0px;
		top: 0px;
		width: auto;
		padding: 5px 15px;
		&:after {
			display: none;
		}
		&:before {
			display: none;
		}
	}
	.sale-label {
		right: 0px;
		top: 0px;
		width: auto;
		padding: 5px 15px;
		&:after {
			display: none;
		}
		&:before {
			display: none;
		}
	}
	.new-box {
		top: -1px;
		left: -1px;
	}
	.sale-box {
		right: -1px;
		top: -1px;
	}
}

//BOXES
.box {
	background: $base-box-bg;
	border: 1px solid $base-border-color;
	padding: $base-box-padding;
	margin: $base-box-indent;
	line-height: 23px;
	p {
		margin-bottom: 0;
	}
	&.box-small {
		padding: 9px 10px 9px 20px;
		.dark {
			padding-top: 10px;
			padding-right: 20px;
			margin-bottom: 0;
			width: auto;
		}
	}
}

.page-product-box {
	padding-bottom: 10px;
}

.product-box {
	width: 178px;
	float: left;
	@include box-sizing(border-box);
	.product-image {
		border: $main_border;
		background: white;
		padding: 5px;
		display: block;
		margin-bottom: 11px;
		img {
			max-width: 100%;
			width: 100%;
			height: auto;
		}
	}
}

//Homepage Tabs
#home-page-tabs {
	border: none;
	background: $light-background;
	// min 768px
	@media (min-width: $screen-sm) {
		padding: 10px 0;
		margin: 0 0 0 -18px;
	}
	> li {
		margin-bottom: 0;
		// min 768px
		@media (min-width: $screen-sm-max) {
			border-left: 1px solid $base-border-color;
			margin: 0 0px 0 9px;
			padding: 0 0px 0 9px;
		}
		// max 479px
		@media (max-width: $screen-xs - 1) {
			width: 100%;
		}
		a {
			font: 600 21px / 24px $font-custom;
			color: $base-heading-color;
			text-transform: uppercase;
			border: none;
			outline: none;
			margin: 0;
			padding: 10px;
			// min 768px
			@media (min-width: $screen-sm) {
				padding: 1px 10px;
			}
			@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
				padding: 10px 10px;
			}
		}
		&:first-child {
			border: none;
		}
	}
	> li.active a,
	>li a:hover {
		background: $dark-background;
		color: $light-text-color;
		padding: 10px;
		// min 768px
		@media (min-width: $screen-sm) {
			margin: -9px 0;
		}
		@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
			margin: 0px 0;
		}
	}
}

.block {
	margin-bottom: 30px;
	// max 767px
	@media (max-width: $screen-xs-max) {
		margin-bottom: 0px;
	}
	.block_content {
		// max 767px
		@media (max-width: $screen-xs-max) {
			margin-bottom: 20px;
		}
	}
}

.block {
	.title_block,
	h4 {
		font: 600 18px / 22px $font-custom;
		color: $base-heading-color;
		background: #f6f6f6;
		border-top: 5px solid $dark-border-color;
		text-transform: uppercase;
		padding: 14px 5px 17px 20px;
		margin-bottom: 20px;
		@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
			font-size: 14px;
		}
		// max 767px
		@media (max-width: $screen-xs-max) {
			position: relative;
			&:after {
				display: block;
				font-family: $font-icon;
				content: "";
				position: absolute;
				right: 0;
				top: 15px;
				height: 36px;
				width: 36px;
				font-size: 26px;
				font-weight: normal;
			}
			&.active:after {
				content: "";
			}
		}
		a {
			color: $base-heading-color;
			&:hover {
				color: $base-text-color;
			}
		}
	}
	.list-block {
		margin-top: -8px;
		// max 767px
		@media (max-width: $screen-xs-max) {
			margin-top: 0;
		}
		li {
			padding: 5px 0 6px 20px;
			border-top: 1px solid $base-border-color;
			a {
				i {
					display: none;
				}
				&:before {
					content: "\f105";
					display: inline;
					font-family: $font-icon;
					color: $base-text-color;
					padding-right: 8px;
				}
				&:hover {
					color: $base-text-color;
					font-weight: bold;
				}
			}
			&:first-child {
				border-top: none;
			}
		}
		.form-group {
			padding-top: 20px;
			border-top: 1px solid $base-border-color;
			margin-bottom: 0;
			select {
				max-width: 270px;
				// max 767px
				@media (max-width: $screen-xs-max) {
					width: 270px;
				}
			}
		}
		.btn {
			margin-top: 12px;
		}
	}
	.products-block {
		li {
			padding: 0 0 20px 0;
			margin-bottom: 20px;
			border-bottom: 1px solid $base-border-color;
			.products-block-image {
				float: left;
				border: 1px solid $base-border-color;
				margin-right: 19px;
				// min 768px max 991px
				@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
					float: none;
					display: inline-block;
					margin: 0 auto 10px;
					text-align: center;
				}
			}
			.product-content {
				overflow: hidden;
				h5 {
					margin: -3px 0 0 0;
				}
			}
		}
		.product-name {
			font-size: 15px;
			line-height: 18px;
		}
		.product-description {
			margin-bottom: 14px;
		}
		.price-percent-reduction {
			font: 700 14px / 17px $font-family;
			padding: 1px 6px;
		}
	}
}

.page-heading {
	font: 600 18px / 22px $font-custom;
	color: $base-heading-color;
	text-transform: uppercase;
	padding: 0px 0px 17px 0px;
	margin-bottom: 30px;
	border-bottom: 1px solid $base-border-color;
	overflow: hidden;
	span.heading-counter {
		font: bold 13px / 22px $font-family;
		float: right;
		color: $base-text-color;
		text-transform: none;
		margin-bottom: 10px;
		@media (max-width: $screen-xs) {
			float: none;
			display: block;
			padding-top: 5px;
		}
	}
	span.lighter {
		color: #9c9c9c;
	}
	&.bottom-indent {
		margin-bottom: 16px;
	}
	&.product-listing {
		border-bottom: none;
		margin-bottom: 0;
	}
}

.page-subheading {
	font-family: $font-custom;
	font-weight: 600;
	text-transform: uppercase;
	color: $base-heading-color;
	font-size: 18px;
	padding: 0 0 15px;
	line-height: normal;
	margin-bottom: 12px;
	border-bottom: 1px solid $base-border-color;
}

h3.page-product-heading {
	@include sub-heading;
}

// BLOCK .footer_links (cms pages)
ul.footer_links {
	padding: 20px 0 0px 0;
	border-top: 1px solid $base-border-color;
	height: 65px;
	li {
		float: left;
		&+li {
			margin-left: 10px;
		}
	}
}

// barre comparaison / tri
.content_sortPagiBar {
	.sortPagiBar {
		border-bottom: 1px solid $base-border-color;
		clear: both;
		#productsSortForm {
			float: left;
			margin-right: 20px;
			margin-bottom: 10px;
			select {
				max-width: 192px;
				float: left;
				@media (max-width: $screen-sm-max) {
					max-width: 160px;
				}
			}
			.selector {
				float: left;
			}
		}
		.nbrItemPage {
			float: left;
			select {
				max-width: 59px;
				float: left;
			}
			.clearfix > span {
				padding: 3px 0 0 12px;
				display: inline-block;
				float: left;
			}
			#uniform-nb_item {
				float: left;
			}
		}
		label,
		select {
			float: left;
		}
		label {
			padding: 3px 6px 0 0;
		}
		&.instant_search {
			#productsSortForm {
				display: none;
			}
		}
	}
	.display,
	.display_m {
		float: right;
		margin-top: -4px;
		li {
			float: left;
			padding-left: 12px;
			text-align: center;
			a {
				color: $GL-text-color;
				font-size: 11px;
				line-height: 14px;
				cursor: pointer;
				i {
					display: block;
					font-size: 24px;
					height: 24px;
					line-height: 24px;
					margin-bottom: -3px;
					color: $GL-icon-color;
				}
				&:hover {
					i {
						color: lighten($GL-icon-color-hover, 30%);
					}
				}
			}
			&.selected {
				a {
					cursor: default;
				}
				i {
					color: $GL-icon-color-hover;
				}
			}
			&.display-title {
				font-weight: bold;
				color: $base-text-color;
				padding: 7px 6px 0 0;
			}
		}
	}
}

//pagination
.top-pagination-content,
.bottom-pagination-content {
	text-align: center;
	padding: 12px 0 12px 0;
	position: relative;
	div.pagination {
		margin: 0;
		float: right;
		width: 530px;
		text-align: center;
		// min 992px max 1199px
		@media (min-width: $screen-md) and (max-width: $screen-md-max) {
			width: 380px;
		}
		// max 991px
		@media (max-width: $screen-sm-max) {
			float: left;
			width: auto;
		}
		.showall {
			float: right;
			margin: 8px 53px 8px 14px;
			// min 992px max 1199px
			@media (min-width: $screen-md) and (max-width: $screen-md-max) {
				margin-right: 11px;
			}
			// max 991px
			@media (max-width: $screen-sm-max) {
				margin-right: 0;
			}
			.btn {
				span {
					font-size: 13px;
					padding: 3px 5px 4px 5px;
					line-height: normal;
				}
			}
		}
	}
	ul.pagination {
		margin: 8px 0px 8px 0;
		// max 991px
		@media (max-width: $screen-sm-max) {
			float: left;
		}
		li {
			display: inline-block;
			float: left;
			> a,
			> span {
				margin: 0 1px 0 0px;
				padding: 0;
				font-weight: bold;
				border: 1px solid;
				border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
				display: block;
				span {
					border: 1px solid $light-border-color;
					padding: 2px 8px;
					display: block;
					background: url(../img/pagination-li.gif) 0 0 repeat-x $pagination-bgcolor;
				}
			}
			> a:hover {
				span {
					background: $pagination-hover-bg;
				}
			}
			&.pagination_previous,
			&.pagination_next {
				color: $pagination-prevnext-color;
				font-weight: bold;
				> a,
				> span {
					border: none;
					background: none;
					display: block;
					padding: 4px 0;
					// max 767px
					@media (max-width: $screen-xs-max) {
						b {
							display: none;
						}
					}
					span {
						border: none;
						padding: 0;
						background: none;
						b {
							font-weight: bold;
						}
					}
				}
			}
			&.pagination_previous {
				margin-right: 10px;
			}
			&.pagination_next {
				margin-left: 10px;
			}
			&.active {
				> span {
					color: $base-text-color;
					border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
					span {
						background: $pagination-hover-bg;
					}
				}
			}
		}
	}
	.compare-form {
		float: right;
		// max 479px
		@media (max-width: $screen-xs - 1) {
			float: left;
			width: 100%;
			text-align: left;
			padding-bottom: 10px;
			clear: both;
		}
	}
	.product-count {
		padding: 11px 0 0 0;
		float: left;
		// max 991px
		@media (max-width: $screen-sm-max) {
			clear: left;
		}
	}
}

.bottom-pagination-content {
	border-top: 1px solid $base-border-color;
}

//CART steps
ul.step {
	margin-bottom: 30px;
	overflow: hidden;
	//min 480px
	@media (min-width: $screen-sm) {
		@include border-radius(4px);
	}
	li {
		float: left;
		width: 20%;
		text-align: left;
		border: 1px solid;
		border-top-color: #cacaca;
		border-bottom-color: #9a9a9a;
		border-right-color: #b7b7b7;
		border-left-width: 0px;
		// max 480px
		@media (max-width: $screen-sm - 1) {
			width: 100%;
			border-left-width: 1px;
		}
		a,
		span,
		&.step_current span,
		&.step_current_end span {
			display: block;
			padding: 13px 10px 14px 13px;
			color: $base-text-color;
			font-size: 17px;
			line-height: 21px;
			font-weight: bold;
			text-shadow: 1px 1px rgba(255, 255, 255, 1);
			position: relative;
			// max 991px
			@media (max-width: $screen-md) {
				font-size: 15px;
			}
			// min 991px
			@media (min-width: $screen-md) {
				&:after {
					content: ".";
					position: absolute;
					top: 0;
					right: -31px;
					z-index: 0;
					text-indent: -5000px;
					display: block;
					width: 31px;
					height: 52px;
					margin-top: -2px;
				}
			}
			&:focus {
				text-decoration: none;
				outline: none;
			}
		}
		&.first {
			border-left-width: 1px;
			border-left-color: #b7b7b7;
			//min 480px
			@media (min-width: $screen-sm) {
				@include border-top-left-radius(4px);
				@include border-bottom-left-radius(4px);
			}
			span,
			a {
				z-index: 5;
				padding-left: 13px !important;
				//min 480px
				@media (min-width: $screen-sm) {
					@include border-top-left-radius(4px);
					@include border-bottom-left-radius(4px);
				}
			}
		}
		&.second {
			span, a {
				z-index: 4;
			}
		}
		&.third {
			span, a {
				z-index: 3;
			}
		}
		&.four {
			span, a {
				z-index: 2;
			}
		}
		&.last {
			span {
				z-index: 1;
			}
			//min 480px
			@media (min-width: $screen-sm) {
				@include border-top-right-radius(4px);
				@include border-bottom-right-radius(4px);
				span {
					@include border-top-right-radius(4px);
					@include border-bottom-right-radius(4px);
				}
			}
		}
		&.step_current {
			font-weight: bold;
			background: rgb(66, 184, 86);
			background: -moz-linear-gradient(top, rgba(66, 184, 86, 1) 0%, rgba(67, 171, 84, 1) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(66, 184, 86, 1)), color-stop(100%, rgba(67, 171, 84, 1)));
			background: -webkit-linear-gradient(top, rgba(66, 184, 86, 1) 0%, rgba(67, 171, 84, 1) 100%);
			background: -o-linear-gradient(top, rgba(66, 184, 86, 1) 0%, rgba(67, 171, 84, 1) 100%);
			background: -ms-linear-gradient(top, rgba(66, 184, 86, 1) 0%, rgba(67, 171, 84, 1) 100%);
			background: linear-gradient(to bottom, rgba(66, 184, 86, 1) 0%, rgba(67, 171, 84, 1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#42b856', endColorstr='#43ab54',GradientType=0);
			border-color: #399b49 #51ae5c #208931 #369946;
			span {
				color: $light-text-color;
				text-shadow: 1px 1px rgba(32, 137, 49, 1);
				border: 1px solid;
				border-color: #73ca77 #74c776 #74c175 #74c776;
				position: relative;
				//min 991px
				@media (min-width: $screen-md) {
					padding-left: 38px;
					&:after {
						background: url(../img/order-step-a.png) right 0 no-repeat;
					}
				}
			}
		}
		&.step_current_end {
			font-weight: bold;
		}
		&.step_todo {
			background: rgb(247, 247, 247);
			background: -moz-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(247, 247, 247, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
			background: -webkit-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
			background: -o-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
			background: -ms-linear-gradient(top, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
			background: linear-gradient(to bottom, rgba(247, 247, 247, 1) 0%, rgba(237, 237, 237, 1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0);
			span {
				display: block;
				border: 1px solid;
				border-color: $light-border-color;
				color: $base-text-color;
				position: relative;
				// min 991px
				@media (min-width: $screen-md) {
					padding-left: 38px;
					&:after {
						background: url(../img/order-step-current.png) right 0 no-repeat;
					}
				}
			}
		}
		&.step_done {
			border-color: #666666 #5f5f5f #292929 #5f5f5f;
			background: rgb(114, 113, 113);
			background: -moz-linear-gradient(top, rgba(114, 113, 113, 1) 0%, rgba(102, 102, 102, 1) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(114, 113, 113, 1)), color-stop(100%, rgba(102, 102, 102, 1)));
			background: -webkit-linear-gradient(top, rgba(114, 113, 113, 1) 0%, rgba(102, 102, 102, 1) 100%);
			background: -o-linear-gradient(top, rgba(114, 113, 113, 1) 0%, rgba(102, 102, 102, 1) 100%);
			background: -ms-linear-gradient(top, rgba(114, 113, 113, 1) 0%, rgba(102, 102, 102, 1) 100%);
			background: linear-gradient(to bottom, rgba(114, 113, 113, 1) 0%, rgba(102, 102, 102, 1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#727171', endColorstr='#666666',GradientType=0);
			a {
				color: $light-text-color;
				text-shadow: 1px 1px rgba(0, 0, 0, 0.3);
				border: 1px solid;
				border-color: #8b8a8a;
				// min 991px
				@media (min-width: $screen-md) {
					padding-left: 38px;
					&:after {
						background: url(../img/order-step-done.png) right 0 no-repeat;
					}
				}
			}
		}
		&.step_done.step_done_last {
			@media (min-width: $screen-md) {
				a:after {
					background: url(../img/order-step-done-last.png) right 0 no-repeat;
				}
			}
		}
		&#step_end {
			span {
				@media (min-width: $screen-md) {
					&:after {
						display: none;
					}
				}
			}
		}
		em {
			font-style: normal;
			// min 480px max 767px
			@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
				display: none;
			}
		}
	}
}

// module productcomments
.rating {
	clear: both;
	display: block;
	margin: 2em;
	cursor: pointer;
}

.rating:after {
	content: ".";
	display: block;
	height: 0;
	width: 0;
	clear: both;
	visibility: hidden;
}

.cancel, .star {
	overflow: hidden;
	float: left;
	margin: 0 1px 0 0;
	width: 16px;
	height: 16px;
	cursor: pointer;
}

.cancel, .cancel a {
	background: url(../../../modules/productcomments/img/delete.gif) no-repeat 0 -16px !important;
}

.cancel a, .star a {
	display: block;
	width: 100%;
	height: 100%;
	background-position: 0 0;
}

div.star_on a {
	background-position: 0 -16px;
}

div.star_hover a,
div.star a:hover {
	background-position: 0 -32px;
}

.pack_content {
	margin: 10px 0 10px 0;
}

.confirmation {
	margin: 0 0 10px;
	padding: 10px;
	border: 1px solid #e6db55;
	font-size: 13px;
	background: none repeat scroll 0 0 lightyellow;
}

#page .rte {
	background: transparent none repeat scroll 0 0;
}

.listcomment {
	list-style-type: none;
	margin: 0 0 20px 0 !important;
}

.listcomment li {
	padding: 10px 0;
	border-bottom: 1px dotted $base-border-color;
	color: #666666;
}

.listcomment .titlecomment {
	display: block;
	font-weight: bold;
	font-size: 12px;
	color: $base-text-color;
}

.listcomment .txtcomment {
	display: block;
	padding: 5px 0;
	color: $base-text-color;
}

.header-container {
	background: $light-background;
}

// BREADCRUMB
.breadcrumb {
	display: inline-block;
	padding: 0 11px;
	border: 1px solid $base-border-color;
	font-weight: bold;
	font-size: 12px;
	line-height: 24px;
	min-height: 6px;
	@include border-radius(3px);
	overflow: hidden;
	margin-bottom: 16px;
	position: relative;
	z-index: 1;
	.navigation-pipe {
		width: 18px;
		display: inline-block;
		text-indent: -5000px;
	}
	a {
		display: inline-block;
		background: $light-background;
		padding: 0 15px 0 22px;
		margin-left: -26px;
		position: relative;
		z-index: 2;
		color: $base-text-color;
		&.home {
			font-size: 17px;
			color: $text-color;
			width: 38px;
			text-align: center;
			padding: 0;
			margin: 0 0 0 -10px;
			@include border-top-left-radius(3px);
			@include border-bottom-left-radius(3px);
			z-index: 99;
			line-height: 22px;
			display: inline-block;
			height: 25px;
			i {
				vertical-align: -1px;
			}
			&:before {
				border: none;
			}
		}
		&:after {
			display: inline-block;
			content: ".";
			position: absolute;
			right: -10px;
			top: 3px;
			width: 18px;
			height: 18px;
			background: $light-background;
			border-right: 1px solid $base-border-color;
			border-top: 1px solid $base-border-color;
			border-radius: 2px;
			text-indent: -5000px;
			z-index: -1;
			@include rotate(45deg);
		}
		&:before {
			display: inline-block;
			content: ".";
			position: absolute;
			left: -10px;
			top: 3px;
			width: 18px;
			height: 18px;
			background: transparent;
			border-right: 1px solid $base-border-color;
			border-top: 1px solid $base-border-color;
			border-radius: 2px;
			text-indent: -5000px;
			z-index: -1;
			@include rotate(45deg);
		}
		&:hover {
			color: #777777;
		}
	}
}

.ie8 {
	.breadcrumb {
		min-height: 1px;
		a:after {
			display: none;
		}
		.navigation-pipe {
			width: 20px;
		}
	}
}

// FOOTER
.footer-container {
	background-color: $dark-background;
	// min 768px
	@media (min-width: $screen-sm) {
		background: url(../img/footer-bg.png) repeat-x $dark-background;
	}
	.container {
		padding-bottom: 100px;
	}
	#footer {
		color: #777777;
		.row {
			position: relative;
		}
		ul.row{
			position: static;
		}
		.footer-block {
			margin-top: 45px;
			// max 767px
			@media (max-width: $screen-xs-max) {
				margin-top: 20px;
			}
		}
		a {
			color: #777777;
			&:hover {
				color: $light-text-color;
			}
		}
		h4 {
			font: 600 18px / 22px $font-custom;
			color: $light-text-color;
			margin: 0 0 13px 0;
			cursor: pointer;
			// max 767px
			@media (max-width: $screen-xs-max) {
				position: relative;
				margin-bottom: 0;
				padding-bottom: 13px;
				&:after {
					display: block;
					content: "\f055";
					font-family: $font-icon;
					position: absolute;
					right: 0;
					top: 1px;
				}
				&.active:after {
					content: "\f056";
				}
			}
			a {
				color: $light-text-color;
			}
		}
		ul {
			li {
				padding-bottom: 8px;
				a {
					font-weight: bold;
					text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.4);
				}
			}
		}
		#block_contact_infos {
			border-left: 1px solid #515151;
			// max 767px
			@media (max-width: $screen-xs-max) {
				border: none;
			}
			> div {
				padding: 0 0 0 5px;
				// max 767px
				@media (max-width: $screen-xs-max) {
					padding-left: 0;
				}
				ul {
					li {
						padding: 0 0 7px 4px;
						overflow: hidden;
						line-height: 30px;
						> span,
						> span a {
							color: $light-text-color;
							font-weight: normal;
						}
						i {
							font-size: 25px;
							width: 32px;
							text-align: center;
							padding-right: 12px;
							float: left;
							color: #908f8f;
						}
					}
				}
			}
		}
		.blockcategories_footer {
			clear: left;
		}
		#social_block {
			float: left;
			width: 50%;
			padding: 22px 15px 0 15px;
			// max 767px
			@media (max-width: $screen-xs-max) {
				width: 100%;
				float: left;
				padding-top: 5px;
			}
			ul {
				float: right;
				@media (max-width: $screen-xs-max) {
					float: none;
				}
				li {
					float: left;
					width: 40px;
					text-align: center;
					// min 768px max 991px
					@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
						width: 30px;
					}
					a {
						display: inline-block;
						color: #908f8f;
						font-size: 28px;
						// min 768px max 991px
						@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
							font-size: 20px;
						}
						span {
							display: none;
						}
						&:before {
							display: inline-block;
							font-family: $font-icon;
							vertical-align: -5px;
							font-weight: normal;
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
						}
						&:hover {
							color: $light-text-color;
						}
					}
					&.facebook {
						a {
							&:before {
								content: "\f09a";
							}
						}
					}
					&.twitter {
						a {
							&:before {
								content: "\f099";
							}
						}
					}
					&.rss {
						a {
							&:before {
								content: "\f09e";
							}
						}
					}
					&.youtube {
						a {
							&:before {
								content: "\f167";
							}
						}
					}
					&.google-plus {
						a {
							&:before {
								content: "\f0d5";
							}
						}
					}
					&.pinterest {
						a {
							&:before {
								content: "\f0d2";
							}
						}
					}
					&.vimeo {
						a {
							&:before {
								content: "\f194";
							}
						}
					}
					&.instagram {
						a {
							&:before {
								content: "\f16d";
							}
						}
					}
				}
			}
			h4 {
				float: right;
				margin-bottom: 0;
				font-size: 21px;
				line-height: 25px;
				text-transform: none;
				padding: 0 10px 0 0;
				// max 767px
				@media (max-width: $screen-xs-max) {
					display: none;
					text-align: center;
				}
			}
		}
		.bottom-footer {
			position: absolute;
			bottom: -55px;
			left: 0;
			div {
				padding: 15px 0 0 0;
				border-top: 1px solid #515151;
				width: 100%;
			}
		}
	}
}

#reinsurance_block {
	clear: both !important;
}

// Make sure lists are correctly displayed in tinyMCE BO edition mode too
#short_description_content ul,
#short_description_content ol,
#short_description_content dl,
#tinymce ul,
#tinymce ol,
#tinymce dl {
	margin-left: 20px;
}

.rte ul {
	list-style-type: disc;
	padding-left: 15px;
}

.rte ol {
	list-style-type: decimal;
	padding-left: 15px;
}

.block_hidden_only_for_screen {
	display: none;
}

// PAIMENT - PAGE ORDER

//nav bottom
.cart_navigation {
	margin: 0 0 20px;
	.button-medium {
		float: right;
		@include border-radius(4px);
		font-size: 20px;
		line-height: 24px;
		span {
			@include border-radius(4px);
			padding: 11px 15px 10px 15px;
			// max 992px
			@media (max-width: $screen-md) {
				font-size: 16px;
			}
		}
		i.right {
			font-size: 25px;
			line-height: 25px;
			vertical-align: -4px;
			margin-left: 6px;
		}
	}
	.button-exclusive {
		border: none;
		background: none;
		padding: 0;
		font-size: 17px;
		font-weight: bold;
		color: $base-text-color;
		margin: 9px 0 0 0;
		i {
			color: #777777;
			margin-right: 8px;
		}
		&:hover, &:focus, &:active {
			color: $link-hover-color;
			@include box-shadow(none);
		}
	}
	@media (max-width: $screen-xs) {
		> span {
			display: block;
			width: 100%;
			padding-bottom: 15px;
		}
	}
}

// step 1 - cart
.cart_last_product {
	display: none;
}

.cart_quantity .cart_quantity_input {
	height: 27px;
	line-height: 27px;
	padding: 0;
	text-align: center;
	width: 57px;
}

.cart_gift_quantity .cart_quantity_input {
	height: 27px;
	line-height: 27px;
	padding: 0;
	text-align: center;
	width: 57px;
}

.table {
	tbody > tr > td {
		vertical-align: middle;
		&.cart_quantity {
			padding: 41px 14px 25px;
			width: 70px;
			.cart_quantity_button {
				margin-top: 3px;
				a {
					float: left;
					margin-right: 3px;
					&+ a {
						margin-right: 0;
					}
				}
			}
		}
		&.cart_delete,
		&.price_discount_del {
			padding: 5px;
		}
	}
	tfoot > tr > td {
		vertical-align: middle;
	}
}

.cart_delete a.cart_quantity_delete,
a.price_discount_delete {
	font-size: 23px;
	color: $base-text-color;
	&:hover {
		color: silver;
	}
}

#cart_summary {
	thead {
		th {
			padding: 7px 8px 9px 8px;
			&.cart_product {
				@extend .text-center;
			}
		}
	}
	tbody {
		td {
			padding: 7px 8px 9px 8px;
			&.cart_product {
				@extend .text-center;
				padding: 7px;
				width: 137px;
				img {
					border: 1px solid $table-border-color;
				}
			}
			&.cart_unit {
				@extend .text-right;
				.price {
					span {
						display: inline-block;
						&.price-percent-reduction {
							margin: 5px auto;
							display: inline-block;
						}
						&.old-price {
							text-decoration: line-through;
						}
					}
				}
			}
			&.cart_description {
				small {
					display: block;
					padding: 5px 0 0 0;
				}
			}
			&.cart_avail{
				@extend .text-center;
				width: 1%;
				span {
					white-space: nowrap;
				}
			}
			&.cart_delete{
				@extend .text-center;
				width: 1%;
			}
			&.cart_total {
				@extend .text-right;
			}
		}
	}
	tfoot {
		td {
			&.text-right {
				font-weight: bold;
				color: $base-text-color;
			}
			&.price {
				text-align: right;
			}
			&.total_price_container {
				span {
					font: 600 18px / 22px $font-custom;
					color: #555454;
					text-transform: uppercase;
				}
			}
			&#total_price_container {
				font: 600 21px / 25px $font-custom;
				color: $product-price-color;
				background: $light-background;
			}
		}
	}
}

#cart_summary .stock-management-on {
	tbody {
		td {
			&.cart_description {
				width: 480px;
			}
		}
	}
}

.cart_discount_price{
  text-align: right;
}

.cart_discount_delete{
  text-align: center;
}

@media (max-width: $screen-xs-max) {
	#order-detail-content {
		#cart_summary {
			table, thead, tbody, th, td, tr {
				display: block;
			}
			thead tr {
				position: absolute;
				top: -9999px;
				left: -9999px;
			}
			tr {
				border-bottom: 1px solid #cccccc;
				padding-bottom: 7px;
				overflow: hidden;
				position: relative;
			}
			td {
				border: none;
				position: relative;
				float: left;
				white-space: normal;
				padding: 7px 20px 7px 20px;
				&.cart_product {
					text-align: left;
				}
				&.cart_description {}
				&.cart_avail {
					display: none;
				}
				&.cart_unit {
					width: 33%;
					text-align: right;
					min-height: 70px;
					clear: both;
					.price {
						text-align: right;
					}
				}
				&.cart_quantity {
					div {
						display: block;
					}
					&>.form-control {
						display: inline;
					}
					&>.cart_quantity_button a {
						margin-right: 0px;
						float: none;
					}
					width: 33%;
					min-height: 70px;
					border-left: 1px solid #cccccc;
					border-right: 1px solid #cccccc;
				}
				&.cart_total {
					width: 33%;
					min-height: 70px;
					text-align: right;
				}
				&.cart_delete {
					position: absolute;
					right: 20px;
					top: 7px;
					&:before {
						content: '' !important;
					}
				}
				div {
					display: inline;
				}
			}
			td:before {
				content: attr(data-title);
				font-weight: bold;
				display: block;
			}
			tfoot {
				td {
					float: none;
					width: 100%;
					&:before {
						display: inline;
					}
				}
				tr {
					.text-right, .price {
						display: block;
						float: left;
						width: 50%;
					}
				}
			}
		}
	}
}

@media (max-width: $screen-sm) {
	#order-detail-content {
		#cart_summary {
			tbody {
				td {
					.price {
						text-align: center;
					}
					&.cart_description {
						width: 300px;
					}
				}
			}
		}
	}
}

.cart_voucher {
	vertical-align: top !important;
	h4 {
		font: 600 18px / 22px $font-custom;
		color: $base-heading-color;
		text-transform: uppercase;
		padding: 7px 0 10px 0;
	}
	.title-offers {
		color: $base-text-color;
		font-weight: bold;
		margin-bottom: 6px;
	}
	fieldset {
		margin-bottom: 10px;
		#discount_name {
			float: left;
			width: 219px;
			margin-right: 11px;
		}
	}
	#display_cart_vouchers {
		span {
			font-weight: bold;
			cursor: pointer;
			color: $link-color;
			&:hover {
				color: $link-hover-color;
			}
		}
	}
}

.enable-multishipping {
	margin: -13px 0 17px;
	label {
		font-weight: normal;
	}
}

#HOOK_SHOPPING_CART {
	#loyalty {
		i {
			font-size: 26px;
			line-height: 26px;
			color: #cfcccc;
		}
	}
}

#order_carrier {
	clear: both;
	margin-top: 20px;
	border: 1px solid #999999;
	background: $light-background;
}

#order_carrier .title_block {
	padding: 0 15px;
	height: 29px;
	font-weight: bold;
	line-height: 29px;
	color: $light-text-color;
	font-weight: bold;
	text-transform: uppercase;
	background: url(../img/bg_table_th.png) repeat-x 0 -10px #999999;
}

#order_carrier span {
	display: block;
	padding: 15px;
	font-weight: bold;
}

.multishipping_close_container {
	text-align: center;
}

table#cart_summary .gift-icon {
	color: white;
	background: #0088cc;
	line-height: 20px;
	padding: 2px 5px;
	border-radius: 5px;
}

// step 3 - address
#multishipping_mode_box {
	padding-top: 12px;
	padding-bottom: 19px;
	.title {
		font-weight: bold;
		color: $base-text-color;
		margin-bottom: 15px;
	}
	.description_off {
		display: none;
		div {
			margin-bottom: 10px;
		}
	}
	.description_off a:hover,
	.description a:hover {
		background: #f3f3f3;
		border: 1px solid #cccccc;
	}
}

#multishipping_mode_box.on .description_off {
	display: block;
}

.multishipping-cart {
	.cart_address_delivery {
		&.form-control {
			width: 198px;
		}
	}
}

#order .address_add.submit {
	margin-bottom: 20px;
}

#ordermsg {
	margin-bottom: 30px;
}

#id_address_invoice.form-control,
#id_address_delivery.form-control {
	width: 269px;
}

.addresses {
	.select label,
	.selector,
	.addresses .address_select {
		clear: both;
		float: left;
	}
	.waitimage {
		display: none;
		float: left;
		width: 24px;
		height: 24px;
		background-image: url("../../../img/loader.gif");
		background-repeat: no-repeat;
		position: relative;
		bottom: -2px;
		left: 10px;
	}
	.checkbox.addressesAreEquals {
		clear: both;
		float: left;
		margin: 15px 0 25px 0;
	}
}

// step 4 - paiement
#order .delivery_option,
#order-opc .delivery_option {
	> div {
		display: block;
		margin-bottom: 20px;
		font-weight: normal;
		> table {
			background: $light-background;
			margin-bottom: 0;
			&.resume {
				height: 53px;
				&.delivery_option_carrier {
					margin-top: 10px;
					width: 100%;
					border: 1px solid $table-border-color;
					font-weight: bold;
					td {
						padding: 8px 11px 7px 11px;
						i {
							font-size: 20px;
							margin-right: 7px;
							vertical-align: -2px;
						}
					}
				}
				td {
					&.delivery_option_radio {
						width: 54px;
						padding-left: 0;
						padding-right: 0;
						text-align: center;
					}
					&.delivery_option_logo {
						width: 97px;
						padding-left: 21px;
					}
					&.delivery_option_price {
						width: 162px;
					}
				}
			}
		}
	}
}

.order_carrier_content {
	line-height: normal;
	padding-bottom: 16px;
	.carrier_title {
		font-weight: bold;
		color: $base-text-color;
	}
	.checkbox {
		input {
			margin-top: 2px;
		}
	}
	.delivery_options_address {
		.carrier_title {
			margin-bottom: 17px;
		}
	}
	& + div {
		padding-bottom: 15px;
	}
}

#carrierTable {
	border: 1px solid #999999;
	border-bottom: none;
	background: $light-background;
}

#carrierTable tbody {
	border-bottom: 1px solid #999999;
}

#carrierTable th {
	padding: 0 15px;
	height: 29px;
	font-weight: bold;
	line-height: 29px;
	color: $light-text-color;
	text-transform: uppercase;
	background: url(../img/bg_table_th.png) repeat-x 0 -10px #999999;
}

#carrierTable td {
	padding: 15px;
	font-weight: bold;
	border-right: 1px solid #e9e9e9;
}

#carrierTable td.carrier_price {
	border: none;
}

p.checkbox.gift {
	margin-bottom: 10px;
}

#gift_div {
	display: none;
	margin-top: 5px;
	margin-bottom: 10px;
}

a.iframe {
	color: $base-text-color;
	text-decoration: underline;
	&:hover {
		text-decoration: none;
	}
}

//step 5 - paiement
p.payment_module {
	margin-bottom: 10px;
	a {
		display: block;
		border: 1px solid $table-border-color;
		@include border-radius(4px);
		font-size: 17px;
		line-height: 23px;
		color: $base-text-color;
		font-weight: bold;
		padding: 33px 40px 34px 99px;
		letter-spacing: -1px;
		position: relative;
		&.bankwire {
			background: url(../img/bankwire.png) 15px 12px no-repeat $base-box-bg;
		}
		&.cheque {
			background: url(../img/cheque.png) 15px 15px no-repeat $base-box-bg;
		}
		&.cash {
			background: url(../img/cash.png) 15px 15px no-repeat $base-box-bg;
		}
		&.cheque, &.bankwire, &.cash {
			&:after {
				display: block;
				content: "\f054";
				position: absolute;
				right: 15px;
				margin-top: -11px;
				top: 50%;
				font-family: $font-icon;
				font-size: 25px;
				height: 22px;
				width: 14px;
				color: $link-color;
			}
		}
		&:hover {
			background-color: #f6f6f6;
		}
		span {
			font-weight: bold;
			color: $base-body-color;
		}
	}
}

.payment_module.box {
	margin-top: 20px;
}

p.cheque-indent {
	margin-bottom: 9px;
}

.cheque-box {
	.form-group {
		margin-bottom: 0px;
		.form-control {
			width: 269px;
		}
	}
}

.order-confirmation.box {
	line-height: 29px;
	a {
		text-decoration: underline;
		&:hover {
			text-decoration: none;
		}
	}
}

//PAGE ORDER-OPC
.delivery_option_carrier td {
	width: 200px;
}

.delivery_option_carrier td + td {
	width: 280px;
}

.delivery_option_carrier td + td + td {
	width: 200px;
}

.delivery_option_carrier tr td {
	padding: 5px;
}

.delivery_option_carrier.selected {
	display: table;
}

.not-displayable {
	display: none;
}

//PAGES ADRESSES, IDENTITY
#address,
#identity,
#account-creation_form,
#new_account_form,
#opc_account_form,
#authentication {
	.box {
		padding-bottom: 20px;
		line-height: 20px;
	}
	p.required {
		color: #f13340;
		margin: 9px 0 16px 0;
	}
	p.inline-infos {
		color: red;
	}
	.form-group {
		margin-bottom: 4px;
		.form-control {
			max-width: 271px;
			&#adress_alias {
				margin-bottom: 20px;
			}
		}
		&.phone-number {
			// min 1200px
			@media (min-width: $screen-lg) {
				float: left;
				width: 270px;
				margin-right: 13px;
			}
			+ p {
				@media (min-width: $screen-lg) {
					padding: 23px 0 0 0px;
					margin-bottom: 0;
				}
			}
		}
	}
	.gender-line {
		margin-bottom: 4px;
		padding-top: 4px;
		> label {
			margin-right: 10px;
			margin-bottom: 0;
		}
		.radio-inline {
			label {
				font-weight: normal;
				color: #777777;
			}
		}
	}
}

#identity,
#authentication,
#order-opc {
	#center_column {
		form.std {
			.row {
				margin-left: -5px;
				margin-right: -5px;
				.col-xs-4 {
					padding-left: 5px;
					padding-right: 5px;
					max-width: 94px;
					.form-control {
						max-width: 84px;
					}
				}
			}
		}
		.footer_links {
			border: none;
			padding-top: 0;
		}
	}
}

#new_account_form .box {
	line-height: 20px;
	.date-select {
		padding-bottom: 10px;
	}
	.top-indent {
		padding-top: 10px;
	}
	.customerprivacy {
		padding-top: 15px;
	}
}

#authentication {
	fieldset.account_creation {
		margin-bottom: 20px;
	}
}

// PASSWORD
#password {
	.box {
		p {
			margin-bottom: 9px;
		}
		.form-group {
			margin-bottom: 20px;
			.form-control {
				width: 263px;
			}
		}
	}
	.footer_links {}
	padding-top: 0;
	border: none;
}

//PAGE SEARCH
#instant_search_results {
	a.close {
		font-size: 13px;
		font-weight: 600;
		opacity: 1;
		line-height: inherit;
		text-transform: none;
		font-family: $font-family;
		&:hover {
			color: $link-hover-color;
		}
	}
}

// MANUFACTURERS/SUPPLIERS
#manufacturers_list,
#suppliers_list {
	h3 {
		font-size: 17px;
		line-height: 23px;
	}
	.description {
		line-height: 18px;
	}
	.product-counter {
		a {
			font-weight: bold;
			color: $base-text-color;
			&:hover {
				color: $link-hover-color;
			}
		}
	}
	&.list {
		li {
			.mansup-container {
				border-top: 1px solid $base-border-color;
				padding: 31px 0 30px 0;
				// < 768
				@media (max-width: $screen-xs-max) {
					text-align: center;
				}
			}
			&:first-child {
				.mansup-container {
					border-top: 0;
				}
			}
			.left-side {
				text-align: center;
			}
			h3 {
				margin-top: -5px;
				padding-bottom: 8px;
			}
			.middle-side {
				padding-left: 0;
				// < 768
				@media (max-width: $screen-xs-max) {
					padding-right: 15px;
					padding-left: 15px;
				}
			}
			.right-side-content {
				border-left: 1px solid $base-border-color;
				padding: 0 0 32px 31px;
				min-height: 108px;
				// < 768
				@media (max-width: $screen-xs-max) {
					min-height: 1px;
					padding: 0;
					border: none;
				}
				.product-counter {
					position: relative;
					top: -6px;
					margin-bottom: 12px;
					// < 768
					@media (max-width: $screen-xs-max) {
						top: 0;
					}
				}
			}
		}
	}
	&.grid {
		li {
			text-align: center;
			.product-container {
				padding-top: 40px;
				padding-bottom: 20px;
				border-bottom: 1px solid $base-border-color;
				.left-side {
					padding-bottom: 42px;
				}
				h3 {
					padding-bottom: 10px;
				}
				.product-counter {
					margin-bottom: 12px;
				}
			}
		}
		// > 1199
		@media (min-width: $screen-lg) {
			li.first-in-line {
				clear: left;
			}
			li.last-line {
				.product-container {
					border-bottom: none;
				}
			}
		}
		//768 -> 1199
		@media (min-width: $screen-sm) and (max-width: $screen-md-max) {
			li.first-item-of-tablet-line {
				clear: left;
			}
			li.last-tablet-line {
				.product-container {
					border-bottom: none;
				}
			}
		}
		// < 768
		@media (max-width: $screen-xs-max) {
			li.item-last {}
			.product-container {
				border-bottom: none;
			}
		}
	}
}

#manufacturer,
#supplier {
	.description_box {
		padding-top: 20px;
		padding-bottom: 20px;
		border-top: 1px solid $base-border-color;
		.hide_desc {
			display: none;
		}
	}
	.bottom-pagination-content,
	.top-pagination-content {
		min-height: 69px;
	}
	.top-pagination-content.bottom-line {
		border-bottom: 1px solid $base-border-color;
	}
}

//DISCOUNT PAGE
table.discount {
	i {
		font-size: 20px;
		line-height: 20px;
		vertical-align: -2px;
		&.icon-ok {
			color: #46a74e;
		}
		&.icon-remove {
			color: #f13340;
		}
	}
}

//GUEST TRACKING
#guestTracking {
	.form-control {
		max-width: 271px;
	}
	// > 1200px
	@media (min-width: $screen-lg) {
		.form-group {
			overflow: hidden;
			i {
				padding-left: 10px;
			}
		}
		.form-control {
			float: left;
		}
		label {
			float: left;
			clear: both;
			width: 100%;
		}
	}
}

//PAGE 404
#pagenotfound {
	.pagenotfound {
		max-width: 824px;
		margin: 0 auto;
		text-align: center;
		.img-404 {
			padding: 8px 0 27px 0;
			img {
				max-width: 100%;
			}
		}
		h1 {
			font: 600 28px / 34px $font-custom;
			color: $base-text-color;
			text-transform: uppercase;
			margin-bottom: 7px;
		}
		p {
			font: 600 16px / 20px $font-custom;
			color: #555454;
			text-transform: uppercase;
			border-bottom: 1px solid $base-border-color;
			padding-bottom: 19px;
			margin-bottom: 20px;
		}
		h3 {
			font-weight: bold;
			color: $base-text-color;
			font-size: 13px;
			line-height: normal;
			margin-bottom: 18px;
		}
		label {
			font-weight: normal;
			@media (max-width: $screen-xs-max) {
				display: block;
			}
		}
		.form-control {
			max-width: 293px;
			display: inline-block;
			margin-right: 5px;
			// max 767px
			@media (max-width: $screen-xs-max) {
				margin: 0 auto 15px auto;
				display: block;
			}
		}
		.buttons {
			padding: 48px 0 20px 0;
			.button-medium {
				i.left {
					font-size: 17px;
				}
			}
		}
	}
}

//addon RerversoForm
#account-creation_form fieldset.reversoform {
	padding: 10px !important;
}

#account-creation_form fieldset.reversoform .text label {
	display: block;
	padding: 0 0 10px 0;
	width: 100%;
	text-align: left;
}

#account-creation_form fieldset.reversoform .infos-sup {
	padding: 0 !important;
	font-size: 10px;
	font-style: italic;
	text-align: right;
}

//addon customer privacy
#account-creation_form fieldset.customerprivacy label,
fieldset.customerprivacy label {
	cursor: pointer;
}

//addon referralprogram
.tab-content {
	margin-top: 20px;
}

//addons comments products
form#sendComment fieldset {
	padding: 10px;
	border: 1px solid #cccccc;
	background: #eeeeee;
}

form#sendComment h3 {
	font-size: 14px;
}

#new_comment_form p.text {
	margin-bottom: 0;
	padding-bottom: 0;
}

#sendComment p.text label,
#sendComment p.textarea label {
	display: block;
	margin: 12px 0 4px;
	font-weight: bold;
	font-size: 12px;
}

#sendComment p.text input {
	padding: 0 5px;
	height: 28px;
	width: 498px;
	border: 1px solid #cccccc;
	background: url(../img/bg_input.png) repeat-x 0 0 $light-background;
}

#sendComment p.textarea textarea {
	height: 80px;
	width: 508px;
	border: 1px solid #cccccc;
}

#sendComment p.submit {
	padding: 0;
	text-align: right;
}

#sendComment p.closeform {
	float: right;
	padding: 0;
	height: 12px;
	width: 12px;
	text-indent: -5000px;
	background: url(../img/icon/delete.gif) no-repeat 0 0;
}

.star {
	position: relative;
	top: -1px;
	float: left;
	width: 14px;
	overflow: hidden;
	cursor: pointer;
	font-size: 14px;
	font-weight: normal;
}

.star {
	display: block;
	a {
		display: block;
		position: absolute;
		text-indent: -5000px;
	}
}

div.star {
	&:after {
		content: "\f006";
		font-family: $font-icon;
		display: inline-block;
		color: #777676;
	}
}

div.star.star_on {
	display: block;
	&:after {
		content: "\f005";
		font-family: $font-icon;
		display: inline-block;
		color: #ef8743;
	}
}

div.star.star_hover {
	&:after {
		content: "\f005";
		font-family: $font-icon;
		display: inline-block;
		color: #ef8743;
	}
}

//CSS Modules
//IMPORTANT - Internet Explorer can read 31 CSS files max. Some CSS have been put here and erased from their own module folder.

//Block ADVERTISING
.advertising_block {
	width: 191px;
	margin-bottom: 1em;
	text-align: center;
}

//footer
.blockcategories_footer ul ul {
	display: none !important;
}

//Form validate
.form-group {
	&.form-error {
		input, textarea {
			border: 1px solid #f13340;
			color: #f13340;
			background: url(../img/icon/form-error.png) 98% 5px no-repeat #fff1f2;
		}
	}
	&.form-ok {
		input, textarea {
			border: 1px solid #46a74e;
			color: #35b33f;
			background: url(../img/icon/form-ok.png) 98% 5px no-repeat #ddf9e1;
		}
	}
	&.form-error, &.form-ok {
		.form-control {
			padding-right: 30px;
		}
	}
}

//uniform
.radio-inline, .checkbox {
	padding-left: 0;
	.checker {
		float: left;
		span {
			top: 0px;
		}
	}
	div.radio {
		display: inline-block;
		span {
			float: left;
			top: 0px;
		}
	}
}

.fancybox-skin {
	background: $light-background !important;
}

.fancybox-skin .fancybox-close {
	width: 28px;
	height: 28px;
	background: none;
	font-size: 28px;
	line-height: 28px;
	color: $base-text-color;
	text-align: center;
	background: white;
	@include border-radius(50px);
	&:hover {
		color: $link-hover-color;
	}
	&:after {
		content: "\f057";
		font-family: $font-icon;
	}
}

//Homepage pre-footer
#facebook_block,
#cmsinfo_block {
	overflow: hidden;
	background: $homepage-footer-bg;
	min-height: 344px;
	height: 344px;
	padding-right: 29px;
	padding-left: 29px;
	// max 991px
	@media (max-width: $screen-sm-max) {
		min-height: 354px;
		height: 354px;
		padding-left: 13px;
		padding-right: 13px;
	}
	// max 767px
	@media (max-width: $screen-xs-max) {
		width: 100%;
		min-height: 1px;
	}
}

#facebook_block {
	h4 {
		padding: 35px 0 0 0;
		margin: 0 0 12px 0;
		font: 300 21px / 25px $font-custom;
		color: lighten($base-heading-color, 10%);
		// max 991px
		@media (max-width: $screen-sm-max) {
			font-size: 18px;
		}
		// max 767px
		@media (max-width: $screen-xs-max) {
			padding-top: 20px !important;
		}
		// 768px
		@media (max-width: $screen-sm) {
			font-size: 16px;
		}
	}
	.facebook-fanbox {
		background: $light-background;
		border: 1px solid #aaaaaa;
		padding-bottom: 10px;
	}
}

#cmsinfo_block {
	border-left: 1px solid $homepage-footer-border;
	// max 767px
	@media (max-width: $screen-xs-max) {
		border: none;
		margin-top: 10px;
	}
	> div {
		padding: 35px 10px 0 0;
		// max 767px
		@media (max-width: $screen-xs-max) {
			padding-top: 20px;
		}
		// max 479px
		@media (max-width: $screen-xs - 1) {
			width: 100%;
			border-top: 1px solid $homepage-footer-border;
		}
	}
	> div + div {
		border-left: 1px solid $homepage-footer-border;
		min-height: 344px;
		padding-left: 29px;
		// max 479px
		@media (max-width: $screen-xs - 1) {
			border-left: none;
			padding-left: 10px;
			min-height: 1px;
			padding-bottom: 15px;
		}
	}
	em {
		float: left;
		width: 60px;
		height: 60px;
		margin: 3px 10px 0 0;
		font-size: 30px;
		color: $light-text-color;
		line-height: 60px;
		text-align: center;
		background: lighten($base-heading-color, 10%);
		@include border-radius(100px);
		// max 991px
		@media (max-width: $screen-sm-max) {
			width: 30px;
			height: 30px;
			line-height: 30px;
			font-size: 20px;
		}
	}
	.type-text {
		overflow: hidden;
	}
	h3 {
		margin: 0 0 5px 0;
		font: 300 21px / 25px $font-custom;
		color: lighten($base-heading-color, 10%);
		// max 1199px
		@media (max-width: $screen-md-max) {
			font-size: 18px;
		}
	}
	ul {
		li {
			padding-bottom: 22px;
			// max 1199px
			@media (max-width: $screen-md-max) {
				padding-bottom: 10px;
			}
			// max 991px
			@media (max-width: $screen-sm-max) {
				padding-bottom: 0;
			}
		}
	}
	p {
		em {
			background: none;
			@include border-radius(0);
			margin: 0;
			font-size: 13px;
			color: $text-color;
			float: none;
			height: inherit;
			line-height: inherit;
			text-align: left;
			font-style: italic;
		}
	}
}

.ie8 {
	#facebook_block,
	#cmsinfo_block {
		height: 344px;
	}
}

//Zoom
// max 1199px
@media (max-width: $screen-md-max) {
	.zoomdiv {
		display: none !important;
	}
}

//temporary fix for quickview
#product.content_only {
	div.pb-left-column {
		p.resetimg {
			margin-bottom: 0px;
			padding-top: 0px;
		}
		#thumbs_list_frame {
			margin-bottom: 0px;
		}
	}
}

//Product Compare
#product_comparison {
	td.compare_extra_information {
		padding: 10px;
	}
	#social-share-compare {
		margin-bottom: 50px;
	}
}

//Social Sharing
.btn-facebook, .btn-twitter, .btn-google-plus, .btn-pinterest {
	&:hover {
		border-color: white;
	}
}

.btn-facebook {
	i {
		color: #435f9f;
	}
	&:hover {
		color: white;
		background-color: #435f9f;
		i {
			color: white;
		}
	}
}

.btn-twitter {
	i {
		color: #00aaf0;
	}
	&:hover {
		color: white;
		background-color: #00aaf0;
		i {
			color: white;
		}
	}
}

.btn-google-plus {
	i {
		color: #e04b34;
	}
	&:hover {
		color: white;
		background-color: #e04b34;
		i {
			color: white;
		}
	}
}

.btn-pinterest {
	i {
		color: #ce1f21;
	}
	&:hover {
		color: white;
		background-color: #ce1f21;
		i {
			color: white;
		}
	}
}
<?php }} ?>
