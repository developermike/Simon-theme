<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:31
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_nav.sass" */ ?>
<?php /*%%SmartyHeaderCode:786397184554074abc74ec5-00398672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f595342711ac9c5116d05ad21f0248563edb4d32' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/partials/_nav.sass',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786397184554074abc74ec5-00398672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074abc8f487_07294280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074abc8f487_07294280')) {function content_554074abc8f487_07294280($_smarty_tpl) {?>$widthSidebarNav: 210px
$widthSidebarSubmenu: 200px
$menu-item-size: 34px
$min-height: 850px

#nav-sidebar
	position: fixed
	width: $widthSidebarNav
	height: 100%
	z-index: 500
	background-color: darken($main-color,15%)
	@include left(0)
	ul.menu
		margin: 0
		padding: 0
		list-style: none !important
		li.searchtab
			padding: 14px 7px
			height: 55px
			position: relative
			background-color: darken($main-color,5%)
			border-bottom: darken($main-color,10%) solid 1px
			@include box-shadow(rgba(black,0.1s) 0 -3px 0 0 inset)
			#bo_query
				color: $main-color
				background-color: lighten($main-color,60%)
			.form-group.focus-search
				position: absolute
				width: 400px
				height: 55px
				z-index: 900
				top: 0
				background-color: darken($main-color,5%)
				border-bottom: darken($main-color,10%) solid 1px
				@include left(0)
				@include padding(14px, 13px, 0, 7px)
				#bo_query
					width: 100%
			.clear_search
				position: absolute
				top: 6px
				z-index: 10
				@include right(8px)
			i
				font-size: $icon-size-base
		li.maintab
			position: relative
			ul.submenu
				display: none
				padding: 4px
				background-color: darken($main-color,8%)
				li
					list-style: none !important
					a
						color: mix($main-color, contrast-color($main-color, black, white, 50%), 30%)
						display: block
						padding: 3px 8px
						background-color: $main-color
						border-bottom: darken($main-color,10%) solid 1px
						&:hover
							color: contrast-color($main-color, black, white, 50%)
							text-decoration: none
							background-color: darken($main-color,10%)
							@include box-shadow($brand-primary -4px 0 0 0 inset)
			a
				white-space: nowrap
				text-overflow: ellipsis
				overflow: hidden
			> a.title
				display: block
				position: relative
				padding: 0 .35em
				height: $menu-item-size
				border-bottom: darken($main-color,10%) solid 1px
				background-color: $main-color
				color: mix($main-color, contrast-color($main-color, black, white, 50%), 30%)
				line-height: $menu-item-size
				text-transform: uppercase
				text-decoration: none
				@include transition-property(background-color)
				@include transition-duration(0.2s)
				@include transition-timing-function(ease-out)
				i
					width: 42px
					font-size: $icon-size-base*2
					vertical-align: middle
					color: mix($main-color, contrast-color($main-color, black, white, 50%), 60%)
					@include transition-property(color)
					@include transition-duration(0.4s)
					@include transition-timing-function(ease-out)
			&.hover, &:hover:not(.hover)
				> a.title
					background-color: darken($main-color,8%)
					color: contrast-color($main-color, black, white, 50%)
					i
						color: white
			&.hover
				ul.submenu
					position: absolute
					display: block
					width: $widthSidebarSubmenu
					top: 0
					z-index: 600
					@include left($widthSidebarNav)
			&:last-child > a.title
				border-bottom: none
			&.active
				a, li.active a
					background-color: lighten($main-color,10%)
					color: contrast-color($main-color, black, white, 50%)
					i
						color: white
				@media (min-height: $min-height)
					ul.submenu
						body:not(.page-sidebar-closed) &
							display: block
							background-color: white
							@include border-right(1px solid darken($bg-content-color,10%))
							a
								background-color: white
								color: $brand-primary
								border-bottom: solid 1px mix(white, $brand-primary, 85%)
								&:hover
									color: $brand-primary
									border-bottom: solid 1px mix(white, $brand-primary, 85%)
									background-color: mix(white, $brand-primary, 85%)
									text-decoration: none
									@include box-shadow(white 0 -1px)
							li:last-child a
								border-bottom: solid 1px white
							li.active a
								color: contrast-color($brand-primary, white, #333, 10%)
								background-color: $brand-primary
								position: relative
								top: -1px
								border-top: solid 1px white
								border-bottom: solid 1px $brand-primary
			
	@media (max-width: $screen-phone)
		display: none

@media (max-height: $min-height)
	body:not(.page-sidebar-closed)
		#nav-sidebar ul.menu li.maintab > a.title
			font-size: 12px
			height: 28px
			line-height: 28px
			i
				vertical-align: baseline
				width: 18px
				font-size: $icon-size-base
				@include text-align(right)
		#nav-sidebar ul.menu li.maintab ul.submenu
			@include padding(1px, 1px, 0, 1px)
			li a
				padding: 0 6px
				height: 26px
				line-height: 26px
		#nav-sidebar ul.menu li.maintab.active ul.submenu
			display: none
		#nav-sidebar ul.menu li.maintab.active.hover ul.submenu
			position: absolute
			display: block
			width: 200px
			z-index: 600
			@include left($widthSidebarNav)
			top: 0

.page-sidebar
	#content
		@include margin-left($widthSidebarNav)

.page-sidebar-closed
	#nav-sidebar
		overflow: visible
		width: 50px
		ul.submenu
			display: none!important
			position: relative
			top: $menu-item-size
			padding-top: 0!important
		li.searchtab
			color: rgba(white,.5)
			&:hover
				cursor: pointer
				color: white
			&.search-expanded
				width: 400px
				background-color: darken($main-color,5%)
				@include padding(14px, 13px, 0, 7px)
				&:before
					display: none
				form .form-group
					display: block
		li.maintab.active ul.submenu
			border: none!important
		a.title
			text-align: center
			> span
				display: none
		> ul > li.maintab:hover
			width: 250px!important
			position: relative
			z-index: 500
			a.title
				@include text-align(left)
				> span
					display: inline-block
			ul.submenu
				position: absolute!important
				display: block!important
				top: $menu-item-size!important
				width: 200px!important
				@include rtl
					right: 50px
				@include ltr
					left: 50px
	#content
		@include margin-left(55px)
		@media (max-width: $screen-phone)
			@include margin-left(0)
		h2.page-title
			white-space: nowrap
			@include padding(26px, 0, 0, 120px)
		ul.page-breadcrumb
			@include left(120px!important)
	.submenu_expand
		display: none

#nav-topbar
	position: fixed
	height: 30px
	top: 36px
	width: 100%
	z-index: 600
	background-color: white
	border: solid 1px white
	@include padding(0, 40px, 0, 0)
	ul.menu
		margin: 0
		padding: 0
		display: block
		list-style: none
		li.maintab
			border-right: solid 1px #E6E6E6
		li.maintab:last-child
			border: none
		li.searchtab
			width: 200px
			@include margin-right(5px)
			@include float(right)
		li.maintab, li.subtab
			height: 28px
			padding: 0
			margin: 0
			list-style: none
			position: relative
			@include float(left)
			> a
				display: block
				line-height: 27px
				color: lighten($main-color,20%)
				padding: 0 6px
				margin: 0
				font-size: 12px
				i
					margin: 0
					width: 15px
					color: lighten($main-color,10%)
					background-color: transparent
					font-size: 14px
			&.active, &:hover
				background-color: $brand-primary
				> a
					text-decoration: none
					color: contrast-color($main-color, white, #333, 10%)
					i
						color: white

		li.expanded > ul.submenu
			display: block
		ul.submenu
			background-color: white
			display: none
			position: absolute
			margin: 0
			padding: 0
			@include left(0)
			top: 28px
			width: 200px!important
			@include box-shadow(rgba(black,0.3) 0 2px 4px)
			> li
				width: 200px
				padding: 0
				list-style: none
				&:last-child > a
					border: none
				> a
					display: block
					@include padding(4px, 5px, 4px, 10px)
					border-bottom: solid 1px #E6E6E6
					&:hover
						color: white
						background-color: $brand-primary
						text-decoration: none
				&.active a
					color: contrast-color($brand-primary, white, #333, 10%)
					background-color: $brand-primary
					border-bottom: solid 1px darken($brand-primary,10%)
	#ellipsistab
		display: block
		width: 40px
		height: 28px
		padding: 0
		margin: 0
		position: absolute
		@include right(0)
		> a
			text-align: center
			font-size: 14px
			line-height: 30px
			color: $main-color
			cursor: pointer
		ul#ellipsis_submenu
			@include right(0)
			left: inherit
			a.title
				padding: 0 8px
				@include text-align(left)
			li.subtab.expanded > ul
				top: 0
				@include left(-200px)
	.menu-collapse
		display: none

#nav-mobile
	position: fixed
	top: 0
	width: 35px
	height: 35px
	z-index: 1100
	@include left(0)
	&.expanded
		width: 100%
		height: 100%
		top: 35px
		.menu-collapse
			top: -35px
			position: absolute
			z-index: 1200
			@include left(0)
	ul.menu
		position: absolute
		display: none
		width: 100%
		height: 100%
		background-color: rgba(black,0.8)
		padding: 0
		border-top: 1px black solid
		list-style: none
		@include margin(0, 0, 100px, 0)
		@include transition(all 0.35s ease-out)
		@include animate(fadeInLeft, 0.3s)
		> li.searchtab
			padding: 15px
			position: relative
			@include box-shadow(rgba(black,0.1s) 0 -3px 0 0 inset)
			#bo_query
				color: $main-color
				background-color: lighten($main-color,60%)
			.form-group
				margin: 0
			.clear_search
				position: absolute
				top: 5px
				@include right(5px)
		> li
			background: $main-color
			position: relative
			> a
				display: block
				height: $menu-item-size
				line-height: $menu-item-size
				position: relative
				border-bottom: 1px solid darken($main-color,10%)
				font-size: 12px
				color: mix($main-color, contrast-color($main-color, white, #333, 10%), 30%)
				background-color: $main-color
				text-transform: uppercase
				text-decoration: none
				@include padding(0, 0, 0, 10px)
				@include transition-property(background-color)
				@include transition-duration(0.4s)
				@include transition-timing-function(ease-out)
				i
					color: rgba(white,.6)
					vertical-align: middle
					@include transition-property(color)
					@include transition-duration(0.4s)
					@include transition-timing-function(ease-out)
				&:hover
					background-color: lighten($main-color,10%)
					color: white
					i
						color: white
			> a > i
				display: inline-block
				height: $menu-item-size
				width: $menu-item-size
				font-size: 20px
				line-height: $menu-item-size
				color: white
				text-align: center
	ul.submenu
		display: none
	#nav-mobile-submenu
		a:not(#nav-mobile-submenu-back)
			font-size: 1.2em
			text-transform: none
			@include padding-left(50px)
	a#nav-mobile-submenu-back
		background-color: darken($main-color,5%)
		font-size: 1.5em
	ul.menu.menu-close
		@include animate(fadeOutLeft, 0.2s)
	.menu-collapse
		color: white
		background-color: black
		width: 35px
		height: 35px
		text-align: center
		line-height: 1.3em

.menu-collapse
	cursor: pointer
	height: 54px
	width: 100%
	font-size: 2em
	text-align: center
	line-height: 55px
	display: block
	color: $main-color

.mobile-nav
	#content
		h2.page-title
			@include padding-left(10px!important)
		ul.page-breadcrumb
			@include left(10px!important)

.page-topbar:not(.mobile-nav)
	#main
		padding-top: 64px
	#content
		@include margin-left(0)
		.page-head
			top: 66px
		.page-title
			@include padding-left(75px)
		.page-breadcrumb
			@include left(75px)

.page-sidebar-closed:not(.nav-topbar):not(.mobile-nav)
	.searchtab
		&:before
			z-index: 1000
			position: absolute
			top: 16px
			display: block
			width: 28px
			height: 28px
			@include left(14px)
			@extend .icon
			@extend .icon-2x
			@extend .icon-search
		.form-group
			display: none
<?php }} ?>
