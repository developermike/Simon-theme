<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_ladda.sass" */ ?>
<?php /*%%SmartyHeaderCode:1079568577554074abdbf214-25867494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78dcc8979317d7e3d4ef5c5b06e8f600e8f8b10e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_ladda.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079568577554074abdbf214-25867494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'property' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abe0bf38_53258745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abe0bf38_53258745')) {function content_554074abe0bf38_53258745($_smarty_tpl) {?>/*!
 * Ladda
 * http://lab.hakim.se/ladda
 * MIT licensed
 *
 * Copyright (C) 2013 Hakim El Hattab, http://hakim.se
 */


// CONFIG
$spinnerSize: 32px

// MIXINS
@mixin prefix ( $property, $value )
	-webkit-#<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
: $value
	-moz-#<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
: $value
	-ms-#<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
: $value
	-o-#<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
: $value
	#<?php echo $_smarty_tpl->tpl_vars['property']->value;?>
: $value

@mixin transition( $value )
	-webkit-transition: $value !important // important to override bootstrap
	-moz-transition: $value !important
	-ms-transition: $value !important
	-o-transition: $value !important
	transition: $value !important

@mixin vendor-transform( $value )
	@include prefix( transform, $value )

@mixin transform-origin( $value )
	@include prefix( transform-origin, $value )

@mixin buttonColor( $name, $color )
	&[data-color=#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]
		background: $color
		&:hover
			background-color: lighten( $color, 5% )

// BUTTON BASE
.ladda-button
	position: relative
	.ladda-spinner
		position: absolute
		z-index: 2
		display: inline-block
		width: $spinnerSize
		height: $spinnerSize
		top: 50%
		margin-top: -$spinnerSize/2
		opacity: 0
		pointer-events: none

	.ladda-label
		position: relative
		z-index: 3

	.ladda-progress
		position: absolute
		width: 0
		height: 100%
		top: 0
		background: rgba( 0, 0, 0, 0.2 )
		visibility: hidden
		opacity: 0
		@include left(0)
		@include transition( 0.1s linear all )
		&[data-loading] .ladda-progress
			opacity: 1
			visibility: visible

// EASING
.ladda-button, .ladda-button .ladda-spinner, .ladda-button .ladda-label
	@include transition( 0.3s cubic-bezier(0.175, 0.885, 0.320, 1.275) background-color )
.ladda-button[data-style=zoom-in],
.ladda-button[data-style=zoom-in] .ladda-spinner,
.ladda-button[data-style=zoom-in] .ladda-label,
.ladda-button[data-style=zoom-out],
.ladda-button[data-style=zoom-out] .ladda-spinner,
.ladda-button[data-style=zoom-out] .ladda-label
	@include transition( 0.3s ease all )

// EXPAND LEFT
.ladda-button[data-style=expand-right]
	.ladda-spinner
		@include right(14px)
	&[data-size="s"] .ladda-spinner,
	&[data-size="xs"] .ladda-spinner
		@include right(4px)
	&[data-loading]
		@include padding-right(56px)
		.ladda-spinner
			opacity: 1
		&[data-size="s"],
		&[data-size="xs"]
			@include padding-right(40px)

// EXPAND RIGHT
.ladda-button[data-style=expand-left]
	.ladda-spinner
		@include left(14px)
	&[data-size="s"] .ladda-spinner,
	&[data-size="xs"] .ladda-spinner
		@include left(4px)
	&[data-loading]
		@include padding-left(56px)
		.ladda-spinner
			opacity: 1
		&[data-size="s"],
		&[data-size="xs"]
			@include padding-left(40px)

// EXPAND UP
.ladda-button[data-style=expand-up]
	overflow: hidden
	.ladda-spinner
		top: -$spinnerSize
		@include margin-left(-$spinnerSize/2)
		@include left(50%)
	&[data-loading]
		padding-top: 54px
		.ladda-spinner
			opacity: 1
			top: 14px
			margin-top: 0
		&[data-size="s"],
		&[data-size="xs"]
			padding-top: 32px
			.ladda-spinner
				top: 4px


// EXPAND DOWN
 .ladda-button[data-style=expand-down]
 	overflow: hidden
 	.ladda-spinner
 		top: 62px
 		@include left(50%)
 		margin-left: -$spinnerSize/2
 	&[data-size="s"] .ladda-spinner,
 	&[data-size="xs"] .ladda-spinner
 		top: 40px
 	&[data-loading]
 		padding-bottom: 54px
 		.ladda-spinner
 			opacity: 1
 		&[data-size="s"]
 		&[data-size="xs"]
 			padding-bottom: 32px


// SLIDE LEFT
.ladda-button[data-style=slide-left]
	overflow: hidden
	.ladda-label
		position: relative
	.ladda-spinner
		@include left(100%)
		@include margin-left(-$spinnerSize/2)
	&[data-loading]
		.ladda-label
			opacity: 0
			@include left(-100%)
		.ladda-spinner
			opacity: 1
			@include left(50%)

// SLIDE RIGHT
.ladda-button[data-style=slide-right]
	overflow: hidden
	.ladda-label
		position: relative
	.ladda-spinner
		@include right(100%)
		@include margin-left(-$spinnerSize/2)
	&[data-loading]
		.ladda-label
			opacity: 0
			@include left(100%)
		.ladda-spinner
			opacity: 1
			@include left(50%)

// SLIDE UP
.ladda-button[data-style=slide-up]
	overflow: hidden
	.ladda-label
		position: relative
	.ladda-spinner
		margin-top: 1em
		@include left(50%)
		@include margin-left(-$spinnerSize/2)
	&[data-loading]
		.ladda-label
			opacity: 0
			top: -1em
		.ladda-spinner
			opacity: 1
			margin-top: -$spinnerSize/2

// SLIDE DOWN
.ladda-button[data-style=slide-down]
	overflow: hidden
	.ladda-label
		position: relative
	.ladda-spinner
		margin-top: -2em
		@include margin-left(-$spinnerSize/2)
		@include left(50%)
	&[data-loading]
		.ladda-label
			opacity: 0
			top: 1em
		.ladda-spinner
			opacity: 1
			margin-top: -$spinnerSize/2

// ZOOM-OUT
.ladda-button[data-style=zoom-out]
	overflow: hidden
	.ladda-spinner
		@include left(50%)
		@include margin-left(-$spinnerSize/2)
		@include vendor-transform( scale( 2.5 ) )
	.ladda-label
		position: relative
		display: inline-block
	&[data-loading] .ladda-label
		opacity: 0
		@include vendor-transform( scale( 0.5 ) )
	&[data-loading] .ladda-spinner
		opacity: 1
		@include vendor-transform( none )


// ZOOM-IN
.ladda-button[data-style=zoom-in]
	overflow: hidden
	.ladda-spinner
		@include margin-left(-$spinnerSize/2)
		@include left(50%)
		@include vendor-transform( scale( 0.2 ) )
	.ladda-label
		position: relative
		display: inline-block
	&[data-loading] .ladda-label
		opacity: 0
		@include vendor-transform( scale( 2.2 ) )
	&[data-loading] .ladda-spinner
		opacity: 1
		@include vendor-transform( none )


// CONTRACT
.ladda-button[data-style=contract]
	overflow: hidden
	width: 100px
	.ladda-spinner
		@include left(50%)
		@include margin-left(-16px)

.ladda-button[data-style=contract][data-loading]
	border-radius: 50%
	width: 52px
	.ladda-label
		opacity: 0
	.ladda-spinner
		opacity: 1

// OVERLAY
.ladda-button[data-style=contract-overlay]
	overflow: hidden
	width: 100px
	@include ltr
		box-shadow: 0px 0px 0px 3000px rgba(0,0,0,0)
	@include rtl
		box-shadow: 0px 3000px 0px 0px rgba(0,0,0,0)
	.ladda-spinner
		@include left(50%)
		@include margin-left(-16px)
	&[data-loading]
		border-radius: 50%
		width: 52px
		@include ltr
			box-shadow: 0px 0px 0px 3000px rgba(0,0,0,0.8)
		@include rtl
			box-shadow: 0px 3000px 0px 0px rgba(0,0,0,0.8)
		.ladda-label
			opacity: 0
		.ladda-spinner
			opacity: 1

.ladda-button
	&[disabled],
	&[data-loading]
		border-color: rgba( 0, 0, 0, 0.07 )
		cursor: default
		background-color: #999
		&:hover
			cursor: default
			background-color: #999
	&[data-size=xs]
		padding: 4px 8px
		.ladda-label
			font-size: 0.7em
	&[data-size=s]
		padding: 6px 10px
		.ladda-label
			font-size: 0.9em
	&[data-size=l] .ladda-label
		font-size: 1.2em
	&[data-size=xl] .ladda-label
		font-size: 1.5em
<?php }} ?>
