<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_forms.sass" */ ?>
<?php /*%%SmartyHeaderCode:1126558198554074abd35026-38891220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e1333fbf6e7a795ebba719836277296e245270' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_forms.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126558198554074abd35026-38891220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abd38002_64899737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abd38002_64899737')) {function content_554074abd38002_64899737($_smarty_tpl) {?>//form
label.control-label
	font-size: 13px
	font-weight: normal
	color: #666

label.control-label span.label-tooltip
	text-decoration: none
	font-size: 13px
	color: #3586AE
	background-color: lighten(#D8EDF7,5%)
	border: none
	border-bottom: solid 1px #D8EDF7
	padding: 0 5px
	@include border-radius(3px)

label.required:before
	content: '*'
	color: red
	font-size: 14px
	position: relative
	line-height: 12px

.tooltip
	font-size: 12px
	font-family: $font-family-sans-serif
	white-space: normal

select.input-tiny,
input[type="text"].input-tiny,
input[type="password"].input-tiny
	width: 80px
	@include float(left)

textarea
	resize: none

textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus
	background-color: #FEFBE2
	@include box-shadow(none)

//buttons
.btn
	.caret
		border-top-color: $gray-dark!important
	&:hover
		.caret
			border-top-color: white!important
	&.btn-default
		@include box-shadow(darken($btn-default-bg,10%) 0 -2px 0 inset)
		i
			color: $gray
		&:hover
			color: white
			background-color: $brand-primary
			border-color: darken($brand-primary,10%)
			@include box-shadow(none)
			i
				color: white
	&.btn-primary
		background-color: $brand-primary
		color: white
		text-transform: uppercase
		border-color: darken($brand-primary,10%)
		@include box-shadow(darken($brand-primary,10%) 0 -2px 0 inset)
		&:hover
			background-color: darken($brand-primary,10%)
			border-color: darken($brand-primary,20%)
			@include box-shadow(none)
	&.btn-default[disabled]
		border-color: $gray-light
		color: $gray-light
		background-color: lighten($gray-light,35%)
		@include box-shadow(lighten($gray-light,20%) 0 -2px 0 inset)

.dropdown-menu
	@include text-align(left)
	> li a
		padding: 5px 10px
		&:hover
			i
				color: white

.btn-group-action
	line-height: 0
	.btn
		font-family: $font-family-sans-serif
	.btn-group
		white-space: nowrap
		> a, button
			text-decoration: none
			display: inline-block
			float: none
		> a:first-child
			@include margin-right(-3px)
		i
			font-size: 14px
//form file upload
.dummyfile
	position: relative
	padding-top: 8px
	.hide-file-upload
		position: absolute
		top: 0
		left: 0
		width: 100%
		height: 100%
		@include opacity(0)

//typeahead
.tt-query
	@include border-right-radius(3px!important)
.tt-dropdown-menu
	background-color: white
	border: solid 1px #ccc
	font-size: 0.9em
	text-transform: none
.tt-suggestions
	padding: 0 6px
	@include box-shadow(rgba(black,0.25) 0 1px 4px)
.tt-suggestion p
	border-bottom: solid 1px #ccc
	margin: 0!important
	padding: 0!important
.tt-suggestion:last-child p
	border-bottom: none

//tag
.tagify-container
	background-color: white
	padding: 0px 3px
	min-height: 30px
	overflow: auto
	border: solid 1px #ccc
	@include border-radius(3px)
	@include box-shadow(rgba(0, 0, 0, 0.075) 0 1px 1px inset)
	span
		@include float(left)
	> span
		display: inline-block
		padding: 2px 5px
		margin: 3px
		border-radius: 2px
		border: 1px solid $brand-primary
		background-color: lighten($brand-primary,15%)
		color: white
		> a
			color: $brand-primary
			text-decoration: none
			font-weight: bold
			@include padding-left(5px)
	> input
		margin-top: 2px
		border: 0 none
		width: 140px
		height: auto
		@include box-shadow(none)
	> input:focus
		outline: 0
		@include box-shadow(none)

.form-group
	@media (max-width: $screen-lg)
		input[type="text"],input[type="search"],input[type="password"], textarea, select
			margin: 4px 0
		.input-group
			margin: 4px 0
		.input-group
			input[type="text"],input[type="search"],input[type="password"], textarea, select
				margin: 0
<?php }} ?>
