<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tables.sass" */ ?>
<?php /*%%SmartyHeaderCode:179779113554074abc88a74-10567648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2bf4a348762927932a9aa6cac6ee8d7e24054a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tables.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179779113554074abc88a74-10567648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abc8c788_02266752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abc8c788_02266752')) {function content_554074abc8c788_02266752($_smarty_tpl) {?>.table
	border-collapse: separate
	border-spacing: 0 2px 0 0
	margin-bottom: 5px
	thead 
		> tr > th
			border: none
			font-weight: normal
			vertical-align: top
			border-bottom: solid 1px darken(#CAE5F4,10%)
			span.title_box
				color: #656565
				display: block
				word-wrap: nowrap
				white-space: nowrap
				&.active
					font-weight: bold
				a
					text-decoration: none
				a.active
					color: black
				.label-tooltip
					color: #3586AE
					background-color: lighten(#D8EDF7,5%)
					border: none
					border-bottom: solid 1px #D8EDF7
					padding: 0 5px
		> tr.filter > th
			background-color: lighten(#CAE5F4,8%)
			input[type="text"].filter, input[type="password"].filter, select.filter
				font-size: 11px
				padding: 4px
				border-color: darken(#CAE5F4,10%)
	input, select
		margin: 0
	tbody
		> tr > td
			border-top: none
			color: lighten(black,40%)
			background-color: white
			padding: 3px 7px
			vertical-align: middle
			word-wrap: nowrap
			font-size: 12px
			border-bottom: solid 1px #EAEDEF
		> tr.odd > td
			background-color: #FCFDFE
		> tr:hover > td
			background-color: darken(#FCFDFE,2%)
	td.center, th.center
		text-align: center
	td.pointer
		cursor: pointer
	td.dragHandle
		.dragGroup
			width: 80px
			cursor: move
			text-align: center
			position: relative
			font-size: $icon-size-base
			@include padding(4px, 4px, 4px, 20px)
			@include border-radius(5px)
			&:hover
				color: white
				background-color: $brand-primary !important
			&:before
				@extend .icon
				@extend .icon-arrows
				display: block
				height: 16px
				width: 16px
				position: absolute
				top: 8px
				@include left(6px)
			.btn-group
			.positions
				display: inline-block
				border: solid 1px #ccc
				background-color: #eee
				padding: 0 5px
				color: #aaa
				width: 43px
				@include text-shadow(white 1px 1px)
				@include border-radius(3px)
				@include box-shadow(rgba(0,0,0,0.2) 0 1px 3px inset)

	tr.actions
		@include text-align(right)
	td.actions
		@include text-align(right)
		@include padding-right(5px)
	th.actions .btn,
		margin-bottom: 4px !important

	tr.myDragClass
		padding: 10px
		background-color: #EEEEEE
		td
			color: white !important
			background-color: $brand-primary !important
			@include transform(translate(5px,10px))

	&.tableDnD td
		@include transition-property(all)
		@include transition-duration(0.2s)
		@include transition-timing-function(ease-out)

tr.highlighted td
	background-color: $brand-primary!important
	color: white !important

.bulk-actions
	@include margin(17px, 0, 0, 0)
	ul i
		font-size: 14px

.list-action-enable
	font-size: 1.3em
	display: inline-block
	width: 30px
	text-align: center
	color: rgba(white,0.8)
	@include border-radius(3px)
	&.action-enabled
		border: solid $brand-success 1px
		background-color: lighten($brand-success,10%)
	&.action-disabled
		border: solid $brand-danger 1px
		background-color: lighten($brand-danger,10%)
	&:hover
		color: white

.list-empty
	background-color: #FCFDFE !important
	.list-empty-msg
		text-align: center
		display: block
		width: 50%
		margin: 20px auto
		color: #999
		font-family: $headings-font-family
		font-size: 1.4em
	.list-empty-icon
		color: #dedede
		display: block
		clear: both
		font-size: $icon-size-base*6
		@include text-shadow(white 1px 1px 0)

.date_range .input-group:first-child
	margin-bottom: 5px

@media (max-width: $screen-sm-max)
	.table-responsive-row
		overflow: visible
		table, thead, tbody, th, td, tr
			display: block
		thead tr
			position: absolute
			top: -9999px
			left: -9999px
		tr
			border: 1px solid #ccc
			@include box-shadow(#EAEDEF 0 2px 0 0 )
			width: 100%
			margin-bottom: 6px
			&:last-child
				border-bottom: 1px solid #ccc
		td
			position: relative
			padding-left: 35% !important
			width: 100% !important
			text-align: left !important
			line-height: 2em !important
			font-size: 1.15em !important
			white-space: nowrap
			overflow: hidden
			text-overflow: ellipsis
			&:last-child
				border: none				
			.btn-group-action
				.dropdown-toggle
					display: none !important
				ul.dropdown-menu, .dropdown-menu li
					position: relative
					padding: 0
					margin: 0
					float: right
					display: inline-block
					background: transparent
					border: none
					z-index: 13
					@include box-shadow(none)
			.dropdown-menu li a, a.btn, button.btn
				background-color: white
				border: none
				padding: 12px 10px !important
				margin-right: 5px
				display: inline-block
				margin: 0 !important
				float: right
				border-left: 1px solid #EAEDEF
				z-index: 13
				color: $brand-primary
				font-weight: bold
				@include box-shadow(none)
				@include border-radius(0)
				i
					color: $brand-primary
				&:hover
					background-color: $brand-primary
					color: white
					i
						color: white
		.odd td
			background-color: #FCFDFE !important
		td.row-selector
			display: none
		td:before
			position: absolute
			top: 4px
			left: 12px
			width: 30%
			border-right: 1px solid #EAEDEF
			padding-right: 10px
			white-space: nowrap
			color: #aaa
			text-align: right
			font-size: 0.9em
			font-style: italic
		td:last-child
			text-align: right !important
			padding: 0 !important
			&:before
				content: none !important
		.btn-group
			float: none !important


	.table-responsive
		width: 100%
		margin-bottom: ($line-height-computed * 0.75)
		overflow-y: hidden
		overflow-x: auto
		border: 1px solid $table-border-color
		-ms-overflow-style: -ms-autohiding-scrollbar
		-webkit-overflow-scrolling: touch
		> .table 
			margin-bottom: 0
			> thead,
			> tbody,
			> tfoot
				> tr
					> th,
					> td
						white-space: nowrap
		> .table-bordered
			border: 0
			> thead,
			> tbody,
			> tfoot
				> tr
					> th:first-child,
					> td:first-child
						@include border-left(0)
					> th:last-child,
					> td:last-child
						@include border-right(0)
			> tbody,
			> tfoot
				> tr:last-child 
					> th,
					> td
						border-bottom: 0
<?php }} ?>
