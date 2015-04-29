<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_content.sass" */ ?>
<?php /*%%SmartyHeaderCode:1819100440554074abcdddb5-88006098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a83ea3dbdb19ba48f7ede305c9b0f5acaca1dbed' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_content.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819100440554074abcdddb5-88006098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'font' => 0,
    'line' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abd28460_81164707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abd28460_81164707')) {function content_554074abd28460_81164707($_smarty_tpl) {?>html, body
	min-height: 100%
	height: 100%
	
body
	font: 400 #<?php echo $_smarty_tpl->tpl_vars['font']->value-'size'-'base';?>
/#<?php echo $_smarty_tpl->tpl_vars['line']->value-'height'-'base';?>
 $font-family-base
	color: $text-color
	background-color: $body-bg
	-webkit-tap-highlight-color: rgba(0,0,0,0)

#main
	z-index: 10
	width: 100%
	padding: 36px 0 60px
	@include margin(0, 0, -50px, 0)
	@include float(left)

#content.bootstrap
	padding: 80px 10px 0
	@include transition-property(margin)
	@include transition-duration(0.4s)
	@include transition-timing-function(ease-out)
	.panel
		position: relative
		padding: 20px
		margin-bottom: 20px
		border: solid 1px darken($bg-content-color,10%)
		background-color: white
		@include border-radius(5px)
		@include box-shadow(rgba(black,0.10) 0 2px 0, white 0 0 0 3px inset)
		&.panel-highlighted
			border-color: $brand-primary!important
			@include box-shadow(rgba($brand-primary,.15) 0 0 0 6px inset !important)
		.panel-heading
			font-family: $headings-font-family
			font-weight: $headings-font-weight
			font-size: 14px
			text-overflow: ellipsis
			white-space: nowrap
			color: #555
			height: 32px
			a.btn
				font-family: $font-family-sans-serif
				text-transform: none
				position: relative
				top: 2px
			i
				font-size: $icon-size-base
		.panel
			border: solid 1px #DDDDDD
			@include box-shadow(rgba(black,0.10) 0 2px 0, white 0 0 0 3px inset)
		.panel.tab-content
			@include border-radius(0 0 3px 3px)
	h3:not(.modal-title), .panel-heading
		border: none
		font-size: 1.2em
		line-height: 2.2em
		height: 2.2em
		text-transform: uppercase
		border-bottom: solid 1px #EEEEEE
		@include padding(0, 0, 0, 5px)
		@include margin(-20px, -16px, 15px, -16px)
		i, a
			color: contrasted($bg-panel-heading-color)
		.badge
			color: $gray
			font-size: 1.1em
			line-height: 1.2em			
			padding: 0 10px
			font-weight: 700
			border: solid 1px lighten($gray-light,25%)
			background-color: white
			@include margin-left(0.4em)
			@include border-radius(20px)
			a
				display: block
				font-size: 0.8em
		.panel-heading-action
			line-height: 0
			position: absolute
			top: 2px
			@include right(0)
			.btn-group
				position: absolute
				white-space: nowrap
				top: -2px
				@include right(2px)
				a.btn
					float: none
			> a.btn
				position: absolute
				top: 0
				@include right(2px)
			a.list-toolbar-btn
				height: 30px
				width: 30px
				color: #CCC
				@include float(left)
				@include border-left(solid 1px #eee)
				&:hover
					text-decoration: none
					color: $brand-primary
				i
					text-align: center
					font-size: 18px
					line-height: 30px
	.panel-danger .panel-heading
		background-color: $badge-notif-color!important
	form .alert
		clear: both		
	@media (max-width: $screen-phone)
		padding: 80px 5px 0
		@include margin-left(0!important)
	.help-block
		font-style: italic
	.nav.nav-tabs li.active a
		z-index: 99
	.breadcrumb
		background-color: white
		border: solid 1px darken($bg-content-color,10%)
	.panel.panel-sm
		padding: 8px!important
		.panel-heading
			font-size: 13px
			margin: -8px -8px 10px
			@include ltr
				padding-left: 8px
			@include rtl
				padding-right: 8px
		.form-group
			margin-bottom: 8px

//data-focus
.data-focus
	&.data-focus-primary
		background-color: $brand-primary
		color: white
		@include border-radius(10px)

//orders
#customer_part
	.customerCard
		&.selected-customer .panel
			color: $brand-success
			border: solid 2px $brand-success

//modal 
body.display-modal
	#content, #main
		margin: 0
		padding: 0
		background: #F8F8F8

.bootstrap
	.modal
		.alert
			h3
				margin-top: 0
	.modal-footer
		.alert
			text-align: left

//todo: remove temp fix for bootstrap RC1 -> final
.bootstrap
	input[type="text"],input[type="search"],input[type="password"], textarea, select
		@extend .form-control

//panels
.bootstrap
	.panel
		.panel-footer
			height: 73px
			border-color: #eee
			background-color: #FCFDFE
			margin: 15px -20px -20px
			.btn.pull-right:not(:first-child)
				@include margin-right(5px)
			.btn
				line-height: 1em

#header
	.panel-footer
		margin: 15px 0 0!important
		height: 40px!important

//help containers
#main.helpOpen
	width: 70%
	@media (max-width: $screen-lg)
		width: 100%

#help-container
	position: relative
	margin: 0
	padding: 0
	float: right
	width: 30%
	margin-top: 120px
	margin-bottom: 50px
	background-color: white
	box-sizing: border-box
	overflow-x: hidden
	@media (max-width: $screen-lg)
		display: none	

.page-topbar
	#help-container
		margin-top: 140px


<?php }} ?>