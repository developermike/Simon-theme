<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tinymce.sass" */ ?>
<?php /*%%SmartyHeaderCode:438645936554074abcb39c3-90494149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faa740282fcaf575267ad5b8aabd48bc3924a204' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_tinymce.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '438645936554074abcb39c3-90494149',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abcddee0_89287907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abcddee0_89287907')) {function content_554074abcddee0_89287907($_smarty_tpl) {?>.mce-container
	margin: 0
	padding: 0
	border: 0
	outline: 0
	vertical-align: top
	background: transparent
	text-decoration: none
	color: #333
	font-size: 12px
	float: none
	position: static
	width: auto
	height: auto
	white-space: nowrap
	cursor: inherit
	-webkit-tap-highlight-color: transparent
	line-height: normal
	font-weight: normal
	box-sizing: content-box
	@include text-align(left)
	direction: ltr
	*
		margin: 0
		padding: 0
		border: 0
		outline: 0
		vertical-align: top
		background: transparent
		text-decoration: none
		color: #333
		font-size: 12px
		float: none
		position: static
		width: auto
		height: auto
		white-space: nowrap
		cursor: inherit
		-webkit-tap-highlight-color: transparent
		line-height: normal
		font-weight: normal
		text-align: left
		box-sizing: content-box
		direction: ltr

.mce-widget
	margin: 0
	padding: 0
	border: 0
	outline: 0
	vertical-align: top
	background: transparent
	text-decoration: none
	color: #333
	font-size: 12px
	float: none
	position: static
	width: auto
	height: auto
	white-space: nowrap
	cursor: inherit
	-webkit-tap-highlight-color: transparent
	line-height: normal
	font-weight: normal
	text-align: left
	box-sizing: content-box
	direction: ltr
	*
		margin: 0
		padding: 0
		border: 0
		outline: 0
		vertical-align: top
		background: transparent
		text-decoration: none
		color: #333
		font-size: 12px
		float: none
		position: static
		width: auto
		height: auto
		white-space: nowrap
		cursor: inherit
		-webkit-tap-highlight-color: transparent
		line-height: normal
		font-weight: normal
		text-align: left
		box-sizing: content-box
		direction: ltr
	button
		box-sizing: border-box

.mce-container *[unselectable]
	-moz-user-select: none
	-webkit-user-select: none
	-o-user-select: none
	user-select: none

.mce-fade
	opacity: 0
	-webkit-transition: opacity .15s linear
	transition: opacity .15s linear
	&.mce-in
		opacity: 1

.mce-tinymce
	visibility: visible !important
	position: relative

.mce-fullscreen
	border: 0
	padding: 0
	margin: 0
	overflow: hidden
	height: 100%
	z-index: 100

div.mce-fullscreen
	position: fixed
	top: 0
	width: 100%
	height: auto
	@include left(0)

.mce-tinymce
	display: block
	border-radius: 2px

.mce-wordcount
	position: absolute
	top: 0
	padding: 8px
	@include right(0)

div.mce-edit-area
	background: #FFF
	filter: none
	padding: 1px

.mce-statusbar
	position: relative
	.mce-container-body
		position: relative

.mce-fullscreen .mce-resizehandle
	display: none

.mce-charmap
	border-collapse: collapse
	td
		cursor: default
		border: 1px solid #9e9e9e
		width: 20px
		height: 20px
		line-height: 20px
		text-align: center
		vertical-align: middle
		padding: 2px
		div
			text-align: center
		&:hover
			background: #d9d9d9

.mce-grid
	td div
		border: 1px solid #d6d6d6
		width: 12px
		height: 12px
		margin: 2px
		cursor: pointer
		border-spacing: 2px
		border-collapse: separate
	a
		display: block
		border: 1px solid transparent
		&:hover
			border-color: #a1a1a1

.mce-grid-border
	margin: 0 4px 0 4px
	a
		border-color: #d6d6d6
		width: 13px
		height: 13px
		&:hover, &.mce-active
			border-color: #a1a1a1
			background: #c8def4

.mce-text-center
	text-align: center

div.mce-tinymce-inline
	width: 100%
	-webkit-box-shadow: none
	-moz-box-shadow: none
	box-shadow: none

.mce-toolbar-grp
	padding-bottom: 2px
	.mce-flow-layout-item
		margin-bottom: 0

.mce-rtl .mce-wordcount
	@include left(0)
	@include right(auto)

.mce-container, .mce-container-body
	display: block

.mce-autoscroll
	overflow: hidden

.mce-scrollbar
	position: absolute
	width: 7px
	height: 100%
	top: 2px
	opacity: .4
	filter: alpha(opacity = 40)
	zoom: 1
	@include right(2px)

.mce-scrollbar-h
	top: auto
	bottom: 2px
	width: 100%
	height: 7px
	@include right(auto)
	@include left(2px)

.mce-scrollbar-thumb
	position: absolute
	background-color: #000
	border: 1px solid #888
	border-color: rgba(85, 85, 85, 0.6)
	width: 5px
	height: 100%
	@include border-radius(7px)

.mce-scrollbar-h .mce-scrollbar-thumb
	width: 100%
	height: 5px

.mce-scrollbar
	&:hover, &.mce-active
		background-color: #AAA
		opacity: .6
		filter: alpha(opacity = 60)
		zoom: 1
		@include border-radius(7px)

.mce-scroll
	position: relative

.mce-panel
	border: 0 solid #ccc
	background-color: #FCFDFE

.mce-floatpanel
	position: absolute
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2)
	&.mce-fixed
		position: fixed
	.mce-arrow
		position: absolute
		display: block
		width: 0
		height: 0
		border-color: transparent
		border-style: solid
		&:after
			position: absolute
			display: block
			width: 0
			height: 0
			border-color: transparent
			border-style: solid
			border-width: 10px
			content: ""
		border-width: 11px
	&.mce-popover
		top: 0
		background: transparent
		background: #fff
		border: 1px solid rgba(0, 0, 0, 0.25)
		@include border-radius(6px)
		@include box-shadow(0 5px 10px rgba(0, 0, 0, 0.2))
		@include left(0)
		&.mce-bottom
			margin-top: 10px
			*margin-top: 0
			> .mce-arrow
				border-top-width: 0
				border-bottom-color: #9e9e9e
				border-bottom-color: rgba(0, 0, 0, 0.25)
				top: -11px
				@include left(50%)
				@include margin-left(-11px)
				&:after
					top: 1px
					border-top-width: 0
					border-bottom-color: #fff
					@include margin-left(-10px)
			&.mce-start
				@include margin-left(-22px)
				> .mce-arrow
					@include left(20px)
			&.mce-end
				@include margin-left(22px)
				> .mce-arrow
					@include right(10px)
					@include left(auto)

.mce-fullscreen
	border: 0
	padding: 0
	margin: 0
	overflow: hidden
	background: #fff
	height: 100%

div.mce-fullscreen
	position: fixed
	top: 0
	@include left(0)

#mce-modal-block
	opacity: 0
	filter: alpha(opacity = 0)
	zoom: 1
	position: fixed
	top: 0
	width: 100%
	height: 100%
	background: #000
	@include left(0)
	&.mce-in
		opacity: .3
		filter: alpha(opacity = 30)
		zoom: 1

.mce-window-move
	cursor: move

.mce-window
	background: transparent
	background: #fff
	position: fixed
	top: 0
	opacity: 0
	-webkit-transition: opacity 150ms ease-in
	transition: opacity 150ms ease-in
	@include left(0)
	@include box-shadow(0 3px 7px rgba(0, 0, 0, 0.3))
	@include border-radius(6px)
	&.mce-in
		opacity: 1

.mce-window-head
	padding: 9px 15px
	border-bottom: 1px solid #c5c5c5
	position: relative
	.mce-close
		position: absolute
		top: 9px
		font-size: 18px
		font-weight: bold
		line-height: 20px
		color: #858585
		cursor: pointer
		height: 20px
		overflow: hidden
		@include right(15px)

.mce-close:hover
	color: #adadad

.mce-window-head .mce-title
	line-height: 20px
	font-size: 14px
	font-weight: normal
	text-rendering: optimizelegibility
	@include padding-right(10px)

.mce-window .mce-container-body
	display: block

.mce-foot
	display: block
	background-color: #fff
	border-top: 1px solid #c5c5c5
	@include border-radius(0 0 6px 6px)

.mce-window-head .mce-dragh
	position: absolute
	top: 0
	cursor: move
	width: 90%
	height: 100%
	@include left(0)

.mce-window
	iframe
		width: 100%
		height: 100%
	&.mce-fullscreen
		@include border-radius(0)
		.mce-foot
			@include border-radius(0)

.mce-rtl .mce-window-head
	.mce-close
		position: absolute
		@include right(auto)
		@include left(15px)
	.mce-dragh
		@include left(auto)
		@include right(0)
	.mce-title
		direction: rtl
		@include text-align(right)

.mce-abs-layout
	position: relative

body .mce-abs-layout-item
	position: absolute

.mce-abs-end
	position: absolute
	width: 1px
	height: 1px

.mce-container-body.mce-abs-layout
	overflow: hidden

.mce-tooltip
	position: absolute
	padding: 5px
	zoom: 1

.mce-tooltip-inner
	font-size: 12px
	background-color: #000
	color: #fff
	max-width: 200px
	text-align: center
	white-space: normal
	@include border-radius(3px)
	@include padding(5px, 8px, 4px, 8px)

.mce-tooltip-arrow
	position: absolute
	width: 0
	height: 0
	line-height: 0
	border: 5px dashed #000

.mce-tooltip-arrow-n
	border-bottom-color: #000

.mce-tooltip-arrow-s
	border-top-color: #000

.mce-tooltip-arrow-e
	@include rtl
		border-left-color: #000
	@include ltr
		border-right-color: #000

.mce-tooltip-arrow-w
	@include rtl
		border-right-color: #000
	@include ltr
		border-left-color: #000

.mce-tooltip-nw, .mce-tooltip-sw
	@include margin-left(-14px)

.mce-tooltip-n .mce-tooltip-arrow
	top: 0px
	border-bottom-style: solid
	border-top: none
	border-left-color: transparent
	border-right-color: transparent
	@include left(50%)
	@include margin-left(-5px)

.mce-tooltip-nw .mce-tooltip-arrow
	top: 0
	border-bottom-style: solid
	border-top: none
	border-left-color: transparent
	border-right-color: transparent
	@include left(10px)

.mce-tooltip-ne .mce-tooltip-arrow
	top: 0
	border-bottom-style: solid
	border-top: none
	border-left-color: transparent
	border-right-color: transparent
	@include right(10px)

.mce-tooltip-s .mce-tooltip-arrow
	bottom: 0
	border-top-style: solid
	border-bottom: none
	border-left-color: transparent
	border-right-color: transparent
	@include left(50%)
	@include margin-left(-5px)

.mce-tooltip-sw .mce-tooltip-arrow
	bottom: 0
	border-top-style: solid
	border-bottom: none
	border-left-color: transparent
	border-right-color: transparent
	@include left(10px)

.mce-tooltip-se .mce-tooltip-arrow
	bottom: 0
	border-top-style: solid
	border-bottom: none
	border-left-color: transparent
	border-right-color: transparent
	@include right(10px)

.mce-tooltip-e .mce-tooltip-arrow
	top: 50%
	margin-top: -5px
	border-left-style: solid
	border-right: none
	border-top-color: transparent
	border-bottom-color: transparent
	@include right(0)

.mce-tooltip-w .mce-tooltip-arrow
	top: 50%
	margin-top: -5px
	border-top-color: transparent
	border-bottom-color: transparent
	@include left(0)
	@include rtl
		border-left-style: solid
		border-right: none
	@include ltr
		border-left-style: solid
		border-right: none

.mce-btn
	position: relative
	display: inline-block
	*display: inline
	*zoom: 1
	background-color: white
	@include box-shadow(rgba(#eee,1) 0 0 0 inset)
	&:hover, &:focus
		color: #eee
		background-color: #eee
		@include box-shadow(rgba(#ddd,1) 0 0 0 inset)
	&.mce-disabled
		button, &:hover button
			cursor: default
			box-shadow: none
			opacity: .4
			filter: alpha(opacity = 40)
			zoom: 1
	&.mce-active
		background-color: #d6d6d6
		&:hover
			background-color: #d6d6d6
	&:not(.mce-disabled):active
		background-color: #d6d6d6
	button
		padding: 2px 6px
		font-size: 12px
		cursor: pointer
		color: #333
		text-align: center
		overflow: visible
		-webkit-appearance: none
		&::-moz-focus-inner
			border: 0
			padding: 0

.mce-primary
	min-width: 50px
	color: #fff
	border: 1px solid #b1b1b1
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25) rgba(0, 0, 0, 0.25)
	background-color: #006dcc
	&:hover, &:focus
		background-color: #005fb3
	&.mce-disabled
		button, &:hover button
			cursor: default
			opacity: .4
			filter: alpha(opacity = 40)
			zoom: 1
			@include box-shadow(none)
	&.mce-active
		background-color: #005299
		&:hover
			background-color: #005299
	&:not(.mce-disabled):active
		background-color: #005299
	button
		color: #fff
		i
			color: #fff

.mce-btn-large
	button
		padding: 9px 14px
		font-size: 12px
		line-height: normal
		@include border-radius(5px)
	i
		margin-top: 2px

.mce-btn-small
	button
		padding: 1px 5px
		font-size: 12px
		*padding-bottom: 2px
	i
		line-height: 20px
		vertical-align: top
		*line-height: 18px

.mce-btn .mce-caret, .mce-btn-small .mce-caret
	margin-top: 8px
	@include margin-left(0)

.mce-caret
	display: inline-block
	*display: inline
	*zoom: 1
	width: 0
	height: 0
	vertical-align: top
	border-top: 4px solid #333
	border-right: 4px solid transparent
	border-left: 4px solid transparent
	content: ""

.mce-disabled .mce-caret
	border-top-color: #aaa

.mce-caret.mce-up
	border-bottom: 4px solid #333
	border-top: 0

.mce-rtl .mce-btn button
	direction: rtl

.mce-btn-group
	.mce-btn
		border: solid 1px #ccc
		border-radius: 0
		@include border-right(none)
	.mce-first
		@include border-radius(3px, 0, 0, 3px)
	.mce-last
		@include border-right(solid 1px #ccc)
		@include border-radius(0 3px 3px 0)
	.mce-first.mce-last
		border-radius: 3px
	.mce-btn.mce-flow-layout-item
		margin: 0

.mce-checkbox

	cursor: pointer

i.mce-i-checkbox
	border: 1px solid #c5c5c5
	border-radius: 3px
	background-color: #f0f0f0
	text-indent: -10em
	*font-size: 0
	*line-height: 0
	*text-indent: 0
	overflow: hidden
	width: 14px
	height: 14px
	text-align: center
	display: inline-block
	@include margin(0, 3px, 0, 0)

.mce-checked i.mce-i-checkbox
	color: #333
	font-size: 12px
	line-height: 16px
	text-indent: 0

.mce-checkbox
	&:focus i.mce-i-checkbox, &.mce-focus i.mce-i-checkbox
		border: 1px solid rgba(82, 168, 236, 0.8)
		@include box-shadow(inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.65))
	&.mce-disabled
		.mce-label, i.mce-i-checkbox
			color: #acacac

.mce-rtl
	.mce-checkbox
		direction: rtl
		@include text-align(right)
	i.mce-i-checkbox
		@include margin(0, 0, 0, 3px)

.mce-colorbutton .mce-ico
	position: relative

.mce-colorbutton-grid
	margin: 4px

.mce-colorbutton
	button
		@include padding-right(4px)
	.mce-preview
		display: block
		position: absolute
		top: 50%
		margin-top: 7px
		background: gray
		width: 13px
		height: 2px
		overflow: hidden
		@include margin-left(-14px)
		@include left(50%)
		@include padding-right(3px)
	&.mce-btn-small .mce-preview
		width: 16px
		@include padding-right(0)
		@include margin-left(-16px)
	.mce-open
		border-left: 1px solid transparent
		border-right: 1px solid transparent
		@include padding-left(4px)
	&:hover .mce-open
		border-left-color: #bdbdbd
		border-right-color: #bdbdbd
	&.mce-btn-small .mce-open
		@include padding(0, 3px, 0, 3px)

.mce-rtl .mce-colorbutton
	direction: rtl
	.mce-preview
		@include margin-left(0)
		@include padding-right(0)
		@include padding-left(4px)
		@include margin-right(14px)
	&.mce-btn-small .mce-preview
		@include margin-left(0)
		@include padding-right(0)
		@include margin-right(-17px)
		@include padding-left(0)
	button
		padding-right: 10px
		padding-left: 10px
	.mce-open
		padding-left: 4px
		padding-right: 4px

.mce-combobox
	display: inline-block
	*display: inline
	*zoom: 1
	*height: 32px
	input
		border: 1px solid #c5c5c5
		border-right-color: #c5c5c5
		height: 28px
	&.mce-disabled input
		color: #adadad
	&.mce-has-open input
		@include border-radius(4px 0 0 4px)
	.mce-btn
		@include border-left(0)
		@include border-radius(0 4px 4px 0)
		background-color: #C5C5C5
		@include box-shadow(rgba(#aaa,1) 0 -2px 0 inset)

	button
		height: 26px
	&.mce-disabled .mce-btn button
		cursor: default
		box-shadow: none
		opacity: .4
		filter: alpha(opacity = 40)
		zoom: 1

.mce-path
	display: inline-block
	*display: inline
	*zoom: 1
	padding: 8px
	white-space: normal
	.mce-txt
		display: inline-block
		@include padding-right(3px)
	.mce-path-body
		display: inline-block

.mce-path-item
	display: inline-block
	*display: inline
	*zoom: 1
	cursor: pointer
	color: #333
	&:hover
		text-decoration: underline
	&:focus
		background: #666
		color: #fff

.mce-path .mce-divider
	display: inline

.mce-disabled .mce-path-item
	color: #aaa

.mce-rtl .mce-path
	direction: rtl

.mce-fieldset
	border: 0 solid #9E9E9E
	border-radius: 3px
	> .mce-container-body
		margin-top: -15px

.mce-fieldset-title
	@include margin-left(5px)
	@include padding(0, 5px, 0, 5px)

.mce-fit-layout
	display: inline-block
	*display: inline
	*zoom: 1

.mce-fit-layout-item
	position: absolute

.mce-flow-layout-item
	display: inline-block
	*display: inline
	*zoom: 1
	@include margin(2px, 0, 2px, 2px)
	&.mce-last
		@include margin-right(2px)

.mce-flow-layout
	white-space: normal

.mce-tinymce-inline .mce-flow-layout
	white-space: nowrap

.mce-rtl
	.mce-flow-layout
		@include text-align(right)
		direction: rtl
	.mce-flow-layout-item
		@include margin(2px, 2px, 2px, 0)
		&.mce-last
			@include margin-left(2px)

.mce-iframe
	border: 0 solid #9e9e9e
	width: 100%
	height: 100%

.mce-label
	display: inline-block
	*display: inline
	*zoom: 1
	border: 0
	overflow: hidden
	&.mce-autoscroll
		overflow: auto
	&.mce-disabled
		color: #aaa
	&.mce-multiline
		white-space: pre-wrap

.mce-rtl .mce-label
	@include text-align(right)
	direction: rtl

.mce-menubar
	border: 1px solid #EEEEEE
	.mce-menubtn
		border-color: transparent
		background: transparent
		border-radius: 0
		box-shadow: none
		filter: none
		button span
			color: #333
	.mce-caret
		border-top-color: #333
	.mce-menubtn
		&:hover, &.mce-active, &:focus
			border-color: transparent
			background: #e6e6e6
			filter: none
			box-shadow: none

.mce-menubtn
	&.mce-disabled span
		color: #aaa
	span
		color: #333
		margin-right: 2px
		line-height: 20px
		*line-height: 16px
	&.mce-btn-small span
		font-size: 12px
	&.mce-fixed-width
		span
			display: inline-block
			overflow-x: hidden
			text-overflow: ellipsis
			width: 90px
		&.mce-btn-small span
			width: 70px
	.mce-caret
		*margin-top: 6px

.mce-rtl .mce-menubtn button
	direction: rtl
	text-align: right

.mce-listbox
	button
		text-align: left
		padding-right: 20px
		position: relative
	.mce-caret
		position: absolute
		margin-top: -2px
		right: 8px
		top: 50%

.mce-rtl .mce-listbox
	.mce-caret
		right: auto
		left: 8px
	button
		padding-right: 10px
		padding-left: 20px

.mce-menu-item
	display: block
	padding: 6px 15px 6px 12px
	clear: both
	font-weight: normal
	line-height: 20px
	color: #333
	white-space: nowrap
	cursor: pointer
	line-height: normal
	border-left: 4px solid transparent
	margin-bottom: 1px
	.mce-ico, .mce-text
		color: #333
	&.mce-disabled
		.mce-text, .mce-ico
			color: #adadad
	&:hover .mce-text, &.mce-selected .mce-text, &:hover .mce-ico, &.mce-selected .mce-ico, &:focus .mce-ico
		color: #fff
	&.mce-disabled:hover
		background: #ccc

.mce-menu-shortcut
	display: inline-block
	color: #adadad
	display: inline-block
	*display: inline
	*zoom: 1
	padding: 0 15px 0 20px

.mce-menu-item
	&:hover .mce-menu-shortcut, &.mce-selected .mce-menu-shortcut, &:focus .mce-menu-shortcut
		color: #fff
	.mce-caret
		margin-top: 4px
		*margin-top: 3px
		margin-right: 6px
		border-top: 4px solid transparent
		border-bottom: 4px solid transparent
		border-left: 4px solid #333
	&.mce-selected .mce-caret, &:focus .mce-caret, &:hover .mce-caret
		border-left-color: #fff

.mce-menu-align
	.mce-menu-shortcut
		*margin-top: -2px
		position: absolute
		right: 0
	.mce-caret
		position: absolute
		right: 0

.mce-menu-item.mce-active i
	visibility: visible

.mce-menu-item-normal.mce-active
	background-color: #c8def4

.mce-menu-item-preview.mce-active
	border-left: 5px solid #aaa

.mce-menu-item-normal.mce-active
	.mce-text
		color: #333
	&:hover
		.mce-text, .mce-ico
			color: #fff

.mce-menu-item
	&:hover, &.mce-selected, &:focus
		text-decoration: none
		color: #fff
		background-color: #0081c2

div.mce-menu .mce-menu-item-sep, .mce-menu-item-sep:hover
	border: 0
	padding: 0
	height: 1px
	margin: 9px 1px
	overflow: hidden
	background: #cbcbcb
	border-bottom: 1px solid #fff
	cursor: default
	filter: none

.mce-menu.mce-rtl
	direction: rtl

.mce-rtl .mce-menu-item
	text-align: right
	direction: rtl
	padding: 6px 12px 6px 15px

.mce-menu-align.mce-rtl
	.mce-menu-shortcut, .mce-caret
		right: auto
		left: 0

.mce-rtl .mce-menu-item
	.mce-caret
		margin-left: 6px
		margin-right: 0
		border-right: 4px solid #333
		border-left: 0
	&.mce-selected .mce-caret, &:focus .mce-caret, &:hover .mce-caret
		border-left-color: transparent
		border-right-color: #fff

.mce-menu
	position: absolute
	left: 0
	top: 0
	background: transparent
	z-index: 1000
	padding: 5px 0 5px 0
	margin: 2px 0 0
	min-width: 160px
	background: #fff
	border: 1px solid #989898
	border: 1px solid rgba(0, 0, 0, 0.2)
	z-index: 1002
	border-radius: 6px
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2)
	max-height: 400px
	overflow: auto
	overflow-x: hidden
	i
		display: none

.mce-menu-has-icons i
	display: inline-block
	*display: inline

.mce-menu-sub-tr-tl
	margin: -6px 0 0 -1px

.mce-menu-sub-br-bl
	margin: 6px 0 0 -1px

.mce-menu-sub-tl-tr
	margin: -6px 0 0 1px

.mce-menu-sub-bl-br
	margin: 6px 0 0 1px

.mce-container-body
	.mce-resizehandle
		position: absolute
		right: 0
		bottom: 0
		width: 16px
		height: 16px
		visibility: visible
		cursor: s-resize
		margin: 0
	.mce-resizehandle-both
		cursor: se-resize

i.mce-i-resize
	color: #333

.mce-spacer
	visibility: hidden

.mce-splitbtn
	.mce-open
		border-left: 1px solid transparent
		border-right: 1px solid transparent
	&:hover .mce-open
	button
		padding-right: 4px
	.mce-open
		padding-left: 4px
		&.mce-active
			box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05)
	&.mce-btn-small .mce-open
		padding: 0 3px 0 3px

.mce-rtl .mce-splitbtn
	direction: rtl
	text-align: right
	button
		padding-right: 10px
		padding-left: 10px
	.mce-open
		padding-left: 4px
		padding-right: 4px

.mce-stack-layout-item
	display: block

.mce-tabs
	display: block
	border-bottom: 1px solid #c5c5c5

.mce-tab
	display: inline-block
	*display: inline
	*zoom: 1
	border: 1px solid #c5c5c5
	border-width: 0 1px 0 0
	background: #e3e3e3
	padding: 8px
	height: 13px
	cursor: pointer
	&:hover
		background: #fdfdfd
	&.mce-active
		background: #fdfdfd
		border-bottom-color: transparent
		margin-bottom: -1px
		height: 14px

.mce-rtl
	.mce-tabs
		text-align: right
		direction: rtl
	.mce-tab
		border-width: 0 0 0 1px

.mce-textbox
	background: #fff
	border: 1px solid #c5c5c5
	border-radius: 3px
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
	display: inline-block
	transition: border linear .2s, box-shadow linear .2s
	height: 28px
	resize: none
	padding: 0 4px 0 4px
	white-space: pre-wrap
	*white-space: pre
	color: #333
	&:focus, &.mce-focus
		border-color: rgba(82, 168, 236, 0.8)
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.65)

.mce-placeholder .mce-textbox
	color: #aaa

.mce-textbox
	&.mce-multiline
		padding: 4px
	&.mce-disabled
		color: #adadad

.mce-rtl .mce-textbox
	text-align: right
	direction: rtl

.mce-throbber
	position: absolute
	top: 0
	left: 0
	width: 100%
	height: 100%
	opacity: .6
	filter: alpha(opacity = 60)
	zoom: 1
	background: white url('img/loader.gif') no-repeat center center

.mce-i-none
	width: 16px
	height: 16px
	margin: 2px 0

.mce-ico
	@extend .icon
	font-size: $icon-size-base
	line-height: 20px

.mce-btn-small .mce-ico

.mce-i-save:before
	content: "\f0c7"
.mce-i-newdocument:before
	content: "\f016"
.mce-i-fullpage:before
	content: "\f065"
.mce-i-alignleft:before
	content: "\f036"
.mce-i-aligncenter:before
	content: "\f037"
.mce-i-alignright:before
	content: "\f038"
.mce-i-alignjustify:before
	content: "\f039"
.mce-i-cut:before
	content: "\f0c4"
.mce-i-paste:before
	content: "\f0ea"
.mce-i-searchreplace:before
	content: "\e009"
.mce-i-bullist:before
	content: "\f0ca"
.mce-i-numlist:before
	content: "\f0cb"
.mce-i-indent:before
	content: "\f03c"
.mce-i-outdent:before
	content: "\f03b"
.mce-i-blockquote:before
	content: "\f10e"
.mce-i-undo:before
	content: "\f112"
.mce-i-redo:before
	content: "\f064"
.mce-i-link:before
	content: "\f0c1"
.mce-i-unlink:before
	content: "\f127"
.mce-i-anchor:before
	content: "\f13d"
.mce-i-image:before
	content: "\f03e"
.mce-i-media:before
	content: "\f008"
.mce-i-help:before
	content: "\f059"
.mce-i-code:before
	content: "\f121"
.mce-i-inserttime:before
	content: "\f017"
.mce-i-preview:before
	content: "\f06e"

.mce-i-forecolor:before, .mce-i-backcolor:before
	content: ""

.mce-i-table:before
	content: "\f0ce"

.mce-i-hr:before
	content: ""
.mce-i-removeformat:before
	content: ""

.mce-i-subscript:before
	content: "\f12c"
.mce-i-superscript:before
	content: "\f12b"

.mce-i-charmap:before
	content: ""

.mce-i-emoticons:before
	content: "\f11a"
.mce-i-print:before
	content: "\f02f"
.mce-i-fullscreen:before
	content: "\f065"

.mce-i-spellchecker:before
	content: ""
.mce-i-nonbreaking:before
	content: ""
.mce-i-template:before
	content: ""
.mce-i-pagebreak:before
	content: ""
.mce-i-restoredraft:before
	content: ""
.mce-i-untitled:before
	content: ""

.mce-i-bold:before
	content: "\f032"
.mce-i-italic:before
	content: "\f033"
.mce-i-underline:before
	content: "\f0cd"
.mce-i-strikethrough:before
	content: "\f0cc"

.mce-i-visualchars:before, .mce-i-visualblocks:before
	content: ""
.mce-i-ltr:before
	content: ""

.mce-i-rtl:before
	content: "\e030"
.mce-i-copy:before
	content: "\f0c5"
.mce-i-resize:before
	content: "\f07d"
.mce-i-browse:before
	content: "\f07c"

.mce-i-pastetext:before
	content: ""

.mce-i-checkbox:before
	content: "\f00c"

.mce-i-selected
	visibility: hidden
	&:before
		content: "\f00c"

i.mce-i-backcolor
	background: #bbb
<?php }} ?>
