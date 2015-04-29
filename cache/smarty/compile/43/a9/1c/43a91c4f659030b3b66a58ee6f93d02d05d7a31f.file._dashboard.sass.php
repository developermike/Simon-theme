<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_dashboard.sass" */ ?>
<?php /*%%SmartyHeaderCode:1304786714554074b1b80073-69724891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a91c4f659030b3b66a58ee6f93d02d05d7a31f' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/controllers/_dashboard.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304786714554074b1b80073-69724891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'line' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b1c113f3_63936604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b1c113f3_63936604')) {function content_554074b1c113f3_63936604($_smarty_tpl) {?>//DASHBOARD
.size_s, .size_md, .size_l, .size_xl, .size_xxl
.size_s
	font-size: 1.1em
.size_md
	font-size: 1.3em
.size_l
	font-size: 1.7em
.size_xl
	font-size: 2em
.size_xxl
	font-size: 2.3em

.number-monospace
	font-family: $font-family-mono!important
	word-spacing: -0.3em
	font-weight: 200

.color_success
	color: $brand-success
.color_danger
	color: $brand-danger

.dash_trend_down
	color: $brand-danger
	&:before
		font-family: FontAwesome
		content: "\f0ab"
		@include margin-right(4px)
.dash_trend_up
	color: $brand-success
	&:before
		font-family: FontAwesome
		content: "\f0aa"
		@include margin-right(4px)
.dash_trend_right
	&:before
		font-family: FontAwesome
		content: "\f0a9"
		@include margin-right(4px)

#dashboard
	section > section
		header
			padding: 3px 8px
			color: white
			font-size: 1.2em
			background-color: $brand-primary
			@include margin(0, 0, 3px, 0)
			.small
				display: block
				clear: both
				font-variant: small-cap
				text-transform: uppercase
				font-size: 0.8em
				font-family: $font-family-sans-serif
	.data_list
		@extend .list-group
		padding: 0
		@include margin(0, 0, 10px, 0)
		li
			@extend .list-group-item
			position: relative
		.data_label
			small
		.data_value
			line-height: 39px
			position: absolute
			top: 0
			@include right(0)
			@include padding(0, 10px, 0, 0)

	.data_list_small
		padding: 0
		border-top: solid 1px #ddd
		@include margin(8px, 0, 10px, 0)
		li
			padding: 3px 0
			position: relative
			border: none
			margin: 0
			border-bottom: dashed 1px #ddd
		.data_label
			text-transform: uppercase
			color: #bbb
		.data_value
			line-height: 25px
			position: absolute
			top: 0
			padding: 0
			@include right(0)

	.data_list_large
		@extend .list-unstyled
		padding: 0
		@include margin(8px, 0, 10px, 0)
		li
			padding: 6px 0
			position: relative
			border: none
			margin: 0
		.data_label
			line-height: 0.8em
			small
				font-size: 0.6em
		.data_value
			text-align: right
			line-height: 0.6em
			position: absolute
			top: 0
			@include right(0)
			@include padding(8px, 0, 0, 0)
			small
				font-size: 0.5em

	.data_list_vertical
		@extend .list-unstyled
		@extend .row
		padding: 0
		border: 1px solid #ddd
		@include margin(0, 0, 10px, 0)
		@include border-radius(3px)
		li
			@extend .col-xs-6
			padding: 6px
			@include border-left(solid 1px #ddd)
			&:first-child
				border: none
		.data_label
			min-height: 32px
			display: block
			line-height: 1em
			text-align: center
		.data_value
			display: block
			text-align: center
			
	#dashtrends
		header
			margin-bottom: 0
		#dashtrends_toolbar
			margin: 0 -16px 10px
			dl
				@include box-shadow(0 0 0 2px white inset)
				dt
					color: #777
					padding: 0
					margin: 0
					height: 2.6em
				dd.data_value
					color: #aaa
					@extend .clearfix
				dd.dash_trend
					background-color: white
					width: 80px
					margin: 0 auto
					@include border-radius(3px)
				&:hover
					dt, dd.data_value
						color: $brand-primary
					dt
						text-decoration: underline
				&.active
					dt, dd.data_value
						color: white
		dl
			cursor: pointer
			margin: 0
			min-height: 70px
			text-align: center
			background-color: white
			padding: 10px
			border-bottom: 1px solid #ddd
			@include border-left(1px solid #ddd)
			&:first-child
				@include border-left(none)
			&.active
				background-color: $brand-primary
				@include box-shadow(white 0 0 0 2px inset)
				dt
					color: white
					font-size: 1.2em
		dt
			text-align: center
			height: 37px
			line-height: 1em
			font: 400 1.1em/120% $headings-font-family
		dd
			span
				font-size: 0.9em
				white-space: nowrap
		svg
			height: 350px

	#dashgoals
		svg
			height: 250px
			
	#dashproducts
		nav
			margin-bottom: 10px
			font: 400 1.1em/120% $headings-font-family
			text-transform: uppercase

	#dashaddons
		background-color: white
		border: 1px dashed #C0C0C0
		@include border-radius(3px)
		a
			display: block
			&:hover
				text-decoration: none
		padding: 10px 20px
		font-size: 1.3em
		text-align: center

	#dashactivity
		svg
			height: 150px

	.data_value
		span, .dash_trend
			@extend .data_loading
	.loading
		.data_value
			min-width: 30px
			text-align: center
			&:before
				@extend .icon-spin
				@extend .icon
				@extend .icon-refresh
				font-size: 14px
				color: #ccc
			span, small
				display: none
		.data_trend
			display: none

		.data_table

		.data_chart

		.data_trends
	.tooltip-panel
		padding: 10px
		min-width: 150px
	.tooltip-panel-heading
		font: 400 1.2em/#<?php echo $_smarty_tpl->tpl_vars['line']->value-'height'-'base';?>
 $headings-font-family
		text-align: center
		margin-bottom: 10px
		text-transform: uppercase
		border-bottom: 1px solid #ccc

=animation($name,$value)
	-webkit-animation-#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
: $value
	animation-#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
: $value

=keyframes($name)
	@-webkit-keyframes #<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		@content
	@-moz-keyframes #<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		@content
	@-ms-keyframes #<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		@content
	@-o-keyframes #<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		@content
	@keyframes #<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

		@content

.data_loading
	opacity: 1
	+animation(name,bounceG)
	+animation(duration,0.7s)
	+animation(direction,linear)
	+scaleX(0.7)
	+scaleY(0.7)

+keyframes(bounceG)
	0%
		+opacity(0)
		+scaleX(0.1)
		+scaleY(0.1)
	100%
		+opacity(1)
		+scaleX(1)
		+scaleY(1)

#dash_version
	@extend .panel
	padding: 0!important
	overflow: hidden
	iframe
		height: 80px
		width: 100%

#calendar
	button.btn-default.active
		border-color: darken($brand-primary,10%)
		color: white
		font-weight: 700
		background-color: $brand-primary
		@include box-shadow(none)
	@media (max-width: $screen-phone)
		padding: 10px!important
		button.btn-default
			padding: 5px 5px
<?php }} ?>
