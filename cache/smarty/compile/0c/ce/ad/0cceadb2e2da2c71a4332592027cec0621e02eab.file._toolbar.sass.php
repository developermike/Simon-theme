<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_toolbar.sass" */ ?>
<?php /*%%SmartyHeaderCode:1906911977554074abd40768-16098706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cceadb2e2da2c71a4332592027cec0621e02eab' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_toolbar.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906911977554074abd40768-16098706',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abd429c7_89627324',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abd429c7_89627324')) {function content_554074abd429c7_89627324($_smarty_tpl) {?>.page-head
	width: 100%
	height: 55px
	padding: 0
	margin: 0
	border-bottom: 4px solid darken($secondary-color,10%)
	position: fixed
	top: 36px
	z-index: 499
	background-color: $secondary-color
	@include left(0)
	@include box-shadow(rgba(black,0.15) 0 7px 0)
	h2.page-title
		@include float(left)
		position: relative
		margin: 0
		font: 300 20px/1em $font-family-sans-serif
		color: white
		@include padding(28px, 0, 0, ($widthSidebarNav+70px))
		@media (max-width: $screen-tablet)
			@include padding(26px, 0, 0, 70px)
		a
			border-bottom: dotted 1px white
			&:hover
				color: black
				border-color: black
	a
		color: white
		text-decoration: none
	.toolbarBox
		position: absolute
		background-color: transparent!important
		@include right(0)
		@media (max-width: $screen-sm)
			background-color: $secondary-color
		#toolbar-nav
			border: none
			background-color: $secondary-color
		.btn-toolbar
			margin: 0
			@include padding(3px, 0, 0, 0)
			> ul.nav
			.toolbar_btn
				height: 46px
				position: relative
				padding: 2px 5px !important
				font-size: 12px
				line-height: 8px
				color: white
				background-color: $secondary-color
				text-align: center
				text-shadow: none
				white-space: nowrap
				overflow: hidden
				text-overflow: ellipsis
				@include margin(0, 3px, 2px, 0)
				@media (max-width: $screen-desktop)
					width: 46px
					border: solid 1px darken($secondary-color,15%)
					font-size: 11px
				&:hover
					color: $secondary-color
					border-color: white
					background-color: white!important
			.dropdown-toolbar
				display: none
				background-color: $secondary-color
				@include float(right)
				@include border-radius(3px)
				@media (max-width: $screen-sm)
					display: block
	ul.page-breadcrumb
		position: absolute
		list-style: none
		margin: 0
		padding: 0
		top: 4px
		height: 20px
		line-height: 20px
		color: black
		font-size: 12px
		color: rgba(black,0.5)
		background: transparent !important
		border: none !important
		white-space: nowrap
		@include border-radius(0)
		@include left($widthSidebarNav+70px)
		@media (max-width: $screen-tablet)
			@include left(70px)
		li
			text-transform: uppercase
			i
				font-size: 14px
			&.breadcrumb-container i, &.breadcrumb-current i
				position: absolute
				top: 2px
				font-size: 42px
				color: darken($secondary-color,15%)
				@include padding-right(5px)
				@include border-right(solid 1px darken($secondary-color,15%))
				@include left(-60px)
			&:before
				color: darken($secondary-color,15%)
			a
				color: rgba(white,0.6)
				&:hover
					color: white

.page-header-toolbar-back
	border: none!important
	display: inline-block
<?php }} ?>
