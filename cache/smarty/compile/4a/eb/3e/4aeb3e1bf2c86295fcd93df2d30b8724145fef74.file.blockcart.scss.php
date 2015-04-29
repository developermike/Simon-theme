<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcart/blockcart.scss" */ ?>
<?php /*%%SmartyHeaderCode:1701172197554074aa515604-51951667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4aeb3e1bf2c86295fcd93df2d30b8724145fef74' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcart/blockcart.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1701172197554074aa515604-51951667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa643700_75116529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa643700_75116529')) {function content_554074aa643700_75116529($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
/*******************************************************************
					Cart Block Styles
********************************************************************/
#header .shopping_cart {
	position: relative;
	float: right;
	padding-top: 50px;
	> a:first-child {
		&:after {
			content: "\f0d7";
			font-family: $font-icon;
			display: inline-block;
			float: right;
			font-size: 18px;
			color: #686666;
			padding: 6px 0 0 0;
		}
	}
	> a:first-child:hover {
		&:after {
			content: "\f0d8";
			padding: 4px 0px 2px 0px;
		}
	}
}
.shopping_cart {
	width: 270px;
	@media (max-width: $screen-xs) {
		padding-top: 20px;
	}
	@media (max-width: $screen-lg){
		margin: 0 auto;
		float: none;
		width: 100%;
	}
	> a:first-child {
		padding: 7px 10px 14px 16px;
		background: $dark-background;
		display: block;
		font-weight: bold;
		color: #777777;
		text-shadow: 1px 1px rgba(0,0,0,0.2);
		overflow: hidden;
		span.ajax_cart_product_txt, span.ajax_cart_product_txt_s {
			@media (min-width: $screen-sm) and (max-width: $screen-sm-max) { // min 768px max 991px
				display: none !important;
			}
		}
		b {
			color: $light-text-color;
			font: 600 18px/22px $font-custom;
			padding-right: 5px;
		}
		&:before {
			content: "\f07a";
			font-family: $font-icon;
			display: inline-block;
			font-size: 23px;
			line-height: 23px;
			color: $light-text-color;
			padding-right: 15px;
		}
	}
	.ajax_cart_total {
		display: none !important;
	}
	.block_cart_expand, .block_cart_collapse {
		&:after {
			content: "\f0d7";
			font-family: $font-icon;
			display: inline-block;
			float: right;
			font-size: 18px;
			color: #686666;
			padding: 6px 0 0 0;
		}
	}
	.block_cart_collapse {
		&:after {
			content: "\f0d8";
			padding: 4px 0px 2px 0px;
		}
	}
}

.cart_block {
	.cart_block_list {
		.remove_link {
			position: absolute;
			right: 10px;
			top: 19px;
		}
		.remove_link a,
		.ajax_cart_block_remove_link {
			color: $link-color;
			display: block;
			width: 100%;
			height: 100%;
			&:before {
				display: inline-block;
				content: "\f057";
				font-family: $font-icon;
				font-size: 18px;
				line-height: 18px;
			}
			&:hover {
				color: $link-hover-color;
			}
		}
	}
	.cart-images {
		float: left;
		margin-right: 20px;
	}
	.cart-info {
		overflow: hidden;
		position: relative;
		padding-right: 20px;
		.product-name {
			padding-bottom: 5px;
			margin-top: -4px;
			a {
				font-size: 13px;
				line-height: 18px;
				display: inline-block;
			}
		}
		.quantity-formated {
			display: inline-block;
			color: #9c9b9b;
			text-transform: uppercase;
			font-size: 10px;
    		padding-right: 5px;
    		.quantity{
    			font-size: 15px;
    		}
		}
	}
	dt {
		font-weight: normal;
		overflow: hidden;
		padding: 20px 10px 16px 20px;
		position: relative;
	}
	dd {
		position: relative;
		.cart_block_customizations{
			border-top: 1px dashed $dark-background;
			li {
				padding: 10px 20px;

				.deleteCustomizableProduct {
					position: absolute;
					right: 10px;
				}
			}
		}

	}
	.cart_block_no_products {
		margin: 0;
		padding: 10px 20px;
	}
	.cart-prices {
		border-top: 1px solid $base-border-color;
		font-weight: bold;
		padding: 10px 20px 22px 20px;
		.cart-prices-line {
			overflow: hidden;
			border-bottom: 1px solid #515151;
			padding: 7px 0;
			&.last-line {
				border: none;
			}
		}
	}
	.cart-buttons {
		overflow: hidden;
		padding: 20px 20px 10px 20px;
		margin: 0;
		background: #f6f6f6;
		a {
			width: 100%;
			float: left;
			text-align: center;
			margin-bottom: 10px;
			margin-right: 10px;
			&#button_order_cart {
				margin-right: 0;
				border: none;
				span {
					padding: 7px 0;
					font-size: 1.1em;
					border: solid 1px lighten(#43b155,10%);
					background: #43b155;
				}
				&:hover span {
					border: solid 1px darken(#43b155,10%);
					background: darken(#43b155,15%);
					color: $light-text-color;
				}
			}
		}
	}
}
/*******************************************************************
					Cart Block(Header) Styles
********************************************************************/
#header {
	.cart_block {
		position: absolute;
		top: 95px;
		right: 0;
		z-index: 100;
		display: none;
		height: auto;
		background: #484848;
		color: $light-text-color;
		width: 270px;
		@media (max-width: $screen-xs) {
			width: 100%;
		}
		@media (max-width: $screen-lg){
			width: 100%;
		}
		a {
			color: $light-text-color;
			&:hover {
				color: #9c9b9b;
			}
		}
		.cart_block_list {
			.remove_link a,
			.ajax_cart_block_remove_link {
				color: $light-text-color;
				outline: none;
				text-decoration: none;
				&:hover {
					color: #9c9b9b;
				}
			}
		}
		.price {
			color: $light-text-color;
		}
		dt {
			background: url(../../../img/cart-shadow.png) repeat-x;
			&.first_item {
				background: none;
			}
		}
		.product-atributes {
			padding-bottom: 10px;
			font-size: 11px;
			a {
				color: #9c9b9b;
				&:hover {
					color: $light-text-color;
				}
			}
		}
		.cart-prices {
			border: none;
			background: url(../../../img/cart-shadow.png) repeat-x #3d3d3d;
		}
		.cart-buttons {
			background: url(../../../img/cart-shadow.png) repeat-x $dark-background;
		}
	}
	.block_content {
		margin-bottom: 0;
	}
}

.cart_block #cart_block_summary,
.cart_block .title_block span,
#header .cart_block h4,
#header .cart_block .title_block,
#header .cart_block h4 {
	display: none
}

.cart_block .cart_block_shipping_cost,
.cart_block .cart_block_tax_cost,
.cart_block .cart_block_total,
.cart_block .cart_block_wrapping_cost {
	float: right
}

.cart_block table.vouchers {
	clear: both;
	width: 80%;
	margin: 0 auto;
	margin-bottom: 10px;
	tr td {
		padding: 2px;
		&.quantity{
			margin-right: 5px;
			min-width: 18px
		}
		&.delete{
			padding-left: 0;
			padding-right: 0;
			text-align: right;
			width: 15px;
		}
	}
}
/*****************************************************************************
					Layer Cart Css
*****************************************************************************/
.layer_cart_overlay {
	background-color: #000;
	display: none;
	height: 100%;
	left: 0;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 98;
	@include opacity(.20);
}

* html .layer_cart_overlay {
	position: absolute;
	left: 0;
	margin-left: -160px;
	@include opacity(.20)
}

#layer_cart {
	background-color: $light-background;
	position: absolute;
	display: none;
	z-index: 99;
	width: 84%;
	margin-right: 8%;
	margin-left: 8%;
	@include border-radius(4px);
	.layer_cart_product {
		padding: 30px 30px 30px 30px;
		overflow: hidden;
		position: static;
		h2 {
			font: 400 23px/29px $font-family;
			color: #46a74e;
			margin-bottom: 22px;
			@media (max-width: $screen-xs-max) { // max 767px
				font-size: 18px;
				padding-right: 0;
				line-height: normal;
			}
			i {
				font-size: 30px;
				line-height: 30px;
				float: left;
				padding-right: 8px;
				@media (max-width: $screen-xs-max) { // max 767px
					font-size: 22px;
					line-height: 22px;
				}
			}
		}
		.product-image-container {
			max-width: 178px;
			border: 1px solid $base-border-color;
			padding: 5px;
			float: left;
			margin-right: 30px;
			@media (max-width: $screen-xs) { // max 480px
				float: none;
				margin-right: 0;
				margin-bottom: 10px;
			}
		}
		.layer_cart_product_info {
			padding: 38px 0 0 0;
			#layer_cart_product_title {
				display: block;
				padding-bottom: 8px;
			}
			> div {
				padding-bottom: 7px;
				strong {
					padding-right: 3px
				}
			}
		}
	}
	.layer_cart_cart {
		background: #fafafa;
		border-left: 1px solid $base-border-color;
		padding: 21px 30px 170px 30px;
		@include border-radius(0px 4px 4px 0px);
		position: relative;
		@media (min-width: $screen-lg) { // min 1200px
			min-height: 318px;
		}

		@media (min-width: $screen-md) and (max-width: $screen-md-max) { // min 992px max 1199px
			min-height: 360px;
		}

		@media (max-width: $screen-sm-max) { // max 991px
			border-left: none;
			border-top: 1px solid $base-border-color;
		}
		h2 {
			font: 400 23px/29px $font-family;
			color: $base-text-color;
			border-bottom: 1px solid $base-border-color;
			padding-bottom: 13px;
			margin-bottom: 17px;
			@media (max-width: $screen-xs-max) { // max 767px
				font-size: 18px;
			}
		}
		.layer_cart_row {
			padding: 0 0 7px 0;
		}
		.button-container {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			padding: 0px 30px 20px 30px;
			.btn {
				margin-bottom: 10px;
			}
			span.exclusive-medium {
				margin-right: 5px;
				i {
					padding-right: 5px;
					color: #777777;
				}
			}
		}
	}
	.cross {
		position: absolute;
		right: 7px;
		top: 8px;
		width: 25px;
		height: 25px;
		cursor: pointer;
		color: $base-text-color;
		z-index: 2;
		&:before {
			content: "\f057";
			display: block;
			font-family: $font-icon;
			font-size: 25px;
			line-height: 25px;
		}
		&:hover {
			color: $link-hover-color;
		}
	}
	.continue {
		cursor: pointer;
	}
	p {
		padding: 0px;
	}
}
/************************************************************************
						Layer Cart Caroucel
*************************************************************************/
#layer_cart {
	.crossseling {
		.crossseling-content {
			border-top: 1px solid $base-border-color;
			padding: 26px 30px 40px 30px;
			position: relative;
		}
		h2 {
			font: 400 23px/26px $font-family;
			color: $base-text-color;
			margin-bottom: 25px;
		}
		#blockcart_list {
			max-width: 773px;
			width: 84%;
			margin: 0 auto;
			overflow: hidden;
			ul {
				display: block;
				li {
					float: left;
					width: 178px;
					margin: 0 0px 0 0;
					.product-image-container {
						border: 1px solid $base-border-color;
						text-align: center;
						padding: 5px;
						margin-bottom: 15px;

						img {
							width: 100%;
						}
					}
					.product-name {
						padding-bottom: 5px;

						a {
							font-size: 15px;
							line-height: 20px;
						}
					}
				}
			}
			a.bx-prev,
			a.bx-next {
				display: block;
				font-family: $font-icon;
				font-size: 20px;
				line-height: 20px;
				width: 20px;
				height: 20px;
				color: $base-text-color;
				text-indent: -5000px;
				position: absolute;
				top: 45%;
				margin-top: -20px;
				&:after {
					display: block;
					text-indent: 0;
				}
				&:hover {
					color: #c0c0c0;
				}
				&.disabled {
					display: none;
				}
			}
			a.bx-prev {
				left: 5%;
				&:after {
					content: "\f137";
				}
			}
			a.bx-next {
				right: 5%;
				&:after {
					content: "\f138";
				}
			}
			.bx-controls {
				overflow: hidden;
			}
		}
	}
}<?php }} ?>
