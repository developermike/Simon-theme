<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_date-range-picker.sass" */ ?>
<?php /*%%SmartyHeaderCode:1288685507554074abd3b6d7-11156311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68118cfdcc13125cb3168dc42c376f0783d08b22' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_date-range-picker.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1288685507554074abd3b6d7-11156311',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abd50676_88597615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abd50676_88597615')) {function content_554074abd50676_88597615($_smarty_tpl) {?>$color-bright: white

$color-calendar: #00A4E7
$color-calendar-compare: #FF8000

$color-calendar-day: $color-bright

$color-calendar-outrange: #ccc

$color-calendar-day-selected: $color-calendar
$color-calendar-day-selected-compare: $color-calendar-compare

$color-calendar-range: lighten($color-calendar,10%)
$color-calendar-range-compare: lighten($color-calendar-compare,10%)

#datepicker
	.input-selected
		margin: 0
	#date-start.input-selected, #date-end.input-selected,
		border: solid 3px $color-calendar-day-selected
	#date-start-compare.input-selected, #date-end-compare.input-selected,
		border: solid 3px $color-calendar-day-selected-compare
	div#datepicker-form
		#date-range
			border: solid 1px darken($color-calendar,5%)
			.form-date-heading
				background-color: darken($color-calendar,5%)
		#date-compare
			border: solid 1px darken($color-calendar-compare,5%)
			.form-date-heading
				background-color: darken($color-calendar-compare,5%)
		.form-date-heading
			height: 30px
			line-height: 30px
			@include padding(0, 0, 0, 8px)
			.title, .checkbox-title label
				font-size: 1.15em
				color: $color-bright
				font-weight: 200
				text-transform: uppercase
				line-height: 2em
			.btn-default
				background-color: rgba($color-bright,0.3)
				font-weight: 700
				color: $color-bright
				border: none
			select
				@include margin(2px,2px,0,0)
		.form-date-body, .form-date-actions
			width: 100%
			padding: 10px
			background-color: white
			display: inline-block
		.form-date-actions
			border: solid 1px #ccc
		.form-date-group
			clear: both
			width: 100%
			margin: 0 auto 6px
			label
				font-size: 0.8em
				font-weight: 700
				text-transform: uppercase
				color: #666
			input
				@include margin(4px, 4px, 0, 0)
			input[type='text']
				width: 35%
			button
				@include margin(5px, 0, 0, 0)

	.daterangepicker
		position: relative
		width: 100%
		font-size: 13px
		border: solid 1px #ccc
		@include margin(0, 0, 8px, 0)
		table
			width: 100%
			margin: 0
			border-spacing: 1px
		thead
			tr th
				background-color: darken($color-calendar,5%)
				color: white
				font-size: 0.7em
				height: 1.5em
				text-transform: uppercase
			tr:first-child th
				background-color: $color-bright
				border-bottom: 1px solid darken($color-calendar,5%)
				font-weight: 200
				font-size: 1.4em
				color: $color-calendar-day-selected
		td, th
			text-align: center
			padding: 0
			position: relative
		tr
			border-bottom: solid 1px white
		td
			color: $color-calendar-day-selected
			height: 2.4em
			padding: 0 8px
			@include transition-property(all)
			@include transition-duration(0.2s)
			@include transition-timing-function(ease-out)
			&.day:after
				content: ""
				position: absolute
				display: block
				top: 0
				width: 100%
				z-index: 0
				background-color: transparent
				@include left(0)
			&.day:hover
				cursor: pointer
			&.day.disabled
				color: $color-calendar-outrange
			&.old, &.new
				color: $color-calendar-outrange
			&.start-selected:not(.old):not(.new):not(.end-selected)
				color: $color-bright
				font-weight: 700
				background-color: $color-calendar-day-selected
				@include border-left-radius(15px)
				//@extend .chevron-left
				&.range-compare
					background-color: mix($color-calendar-day-selected,$color-calendar-range-compare,70%)
					@include border-left-radius(0)
				&.end-selected-compare, &.start-selected-compare
					background-color: mix($color-calendar-day-selected,$color-calendar-day-selected-compare,70%)
				&.end-selected-compare
					@include border-radius(0)
			&.end-selected:not(.old):not(.new):not(.start-selected)
				color: $color-bright
				font-weight: 700
				background-color: $color-calendar-day-selected
				//@extend .chevron-right
				@include border-right-radius(15px)
				&.range-compare
					background-color: mix($color-calendar-day-selected,$color-calendar-range-compare,70%)
					@include border-right-radius(0)
				&.end-selected-compare, &.start-selected-compare
					background-color: mix($color-calendar-day-selected,$color-calendar-day-selected-compare,70%)
				&.start-selected-compare
					@include border-radius(0)
			&.start-selected-compare:not(.old):not(.new):not(.end-selected-compare)
				color: $color-bright
				font-weight: 700
				background-color: $color-calendar-day-selected-compare
				@include border-left-radius(15px)
				&.range
					background-color: mix($color-calendar-day-selected-compare,$color-calendar-range,70%)
					@include border-left-radius(0)
			&.end-selected-compare:not(.old):not(.new):not(.start-selected-compare)
				color: $color-bright
				font-weight: 700
				background-color: $color-calendar-day-selected-compare
				@include border-right-radius(15px)
				&.range
					background-color: mix($color-calendar-day-selected-compare,$color-calendar-range,70%)
					@include border-right-radius(0)
			&.end-selected.start-selected
				color: $color-bright
				@include border-radius(15px)
				font-weight: 700
				background-color: $color-calendar-day-selected
				&.range-compare
					background-color: mix($color-calendar-day-selected,$color-calendar-range-compare,70%)
					@include border-radius(0)
			&.end-selected-compare.start-selected-compare
				color: $color-bright
				@include border-radius(15px)
				font-weight: 700
				background-color: $color-calendar-day-selected-compare
				&.range
					background-color: mix($color-calendar-day-selected-compare,$color-calendar-range,70%)
					@include border-radius(0)
			&.range
				color: lighten($color-calendar-range,35%)
				background-color: $color-calendar-range
				&.range-compare
					background-color: mix($color-calendar-range,$color-calendar-range-compare,50%)
			&.range-compare
				color: lighten($color-calendar-range-compare,35%)
				background-color: $color-calendar-range-compare
				&.range
					background-color: mix($color-calendar-range,$color-calendar-range-compare,50%)
			&.today
				background-color: $color-bright
			span
				padding: 0
				display: block
				width: 33.333%
				height: 3em
				line-height: 3em
				font-weight: 400
				float: left
				text-transform: uppercase
				cursor: pointer
				&:hover
					color: white
					background-color: $color-calendar-day-selected
				&.active
					background-color: $color-calendar-day-selected
					color: #fff
				&.old
					color: $color-calendar-outrange
		th
			&.next
				@include text-align(right)
				@include padding(0, 10px, 0, 0)
			&.prev
				@include text-align(left)
				@include padding(0, 0, 0, 10px)
			&.next, &.prev, &.month-switch
				font-size: 1.3em
				line-height: 2em
				height: 2em
				&:hover
					background-color: darken($color-calendar,5%)
					color: white
		thead tr:first-child th
			cursor: pointer

//chevrons are disabled time to figure out the firefox incompatibility..
.chevron-left, .chevron-right
	position: relative
.chevron-left:before, .chevron-right:before
	display: block
	content: ""
	width: 0
	height: 0
	border-style: solid
	position: absolute
.chevron-left:before
	top: 0
	border-color: transparent transparent transparent $color-calendar-day-selected
	background-color: $color-calendar-range
	@include right(0)
	@include border-width(1.2em, 0, 1.2em, 0.5em)
.chevron-right:before
	top: 0
	border-color: transparent transparent transparent $color-calendar-range
	background-color: $color-calendar-day-selected
	@include left(0)
	@include border-width(1.2em, 0, 1.2em, 0.5em)
.input-complete
	-webkit-animation: one 0.2s ease-in-out
	-moz-animation: one 0.2s ease-in-out
	-ms-animation: one 0.2s ease-in-out
	-o-animation: one 0.2s ease-in-out
	animation: one 0.2s ease-in-out
		
@-webkit-keyframes one
	0%
		background-color: $color-calendar
	100%
		background-color: $color-bright

@-webkit-keyframes two
	0%
		+box-shadow($color-calendar 0 0 0 20px inset)
	100%
		+box-shadow($color-calendar 0 0 0 inset)
<?php }} ?>
