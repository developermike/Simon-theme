<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/comparator.scss" */ ?>
<?php /*%%SmartyHeaderCode:904833413554074ad792da2-83173219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63811fb19f7cbb7557d0a9767e82a6e0b5a4c27a' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/comparator.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904833413554074ad792da2-83173219',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad7f4803_78558682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad7f4803_78558682')) {function content_554074ad7f4803_78558682($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/********************************************************************
					Compare Page Styles
********************************************************************/
table#product_comparison {
	tbody {
		tr {
			td.product-block {
				vertical-align: top;
				padding: 14px 19px 19px;
				text-align: center;
			}
			td.td_empty,
			td.feature-name,
			&.comparison_header {
				background: $table-background;
				color: $base-text-color;
			}
			td.comparison_infos {
				text-align: center;
				div.center {
					margin: 0 auto;
					width: 80px;
				}
			}
			td.td_empty {
				vertical-align: bottom;
				> span {
					font: 600 18px/22px $font-custom;
					text-transform: uppercase;
					color: #555454;
				}
			}
		}
	}
	.remove {
		text-align: right;
		padding:  0 0 15px 0;
		a {
			font-size: 23px;
			line-height: 23px;
			color: #c0c0c0;
			&:hover {
				  color: $link-hover-color;
			}
		}
	}
	.product-image-block {
		display: inline-block;
		position: relative;
		.product_image {
			padding: 9px;
			border: 1px solid $base-border-color;
			display: inline-block;
			margin: 0 0 8px 0;
			img {
				width: 100%;
			}
		}
	}
	h5 {
		padding: 0 0 8px 0 ;
		min-height: 54px;
	}
	.prices-container {
		padding: 0 0 5px 0;
	}
	.comparison_availability_statut {
		display: none;
		font-weight: 700;
		color: #060;
	}
	.product_discount {
		padding-top: 5px;
		.reduced-price {
			color: $product-reduced-price;
			font-weight: 700;
		}
	}
	.product_desc {
		padding: 0 0 12px 0;
	}
	.button-container {
		a, > span {
			margin-bottom: 10px;
		}
	}
	.comparison_unit_price {
		font-size: 17px;
		font-family: $font-custom;
		color: $product-price-color;
		font-style: italic;
	}
	.product-rating {
		width: 80px;
		margin: 0 auto;
		overflow: hidden;
	}

	.comparison_feature{
		.product_name{
			display: none;
		}
	}
}


.footer_link {
	margin: 0 0 20px 0;
}

#stOCClose {
	width: 29px !important;
	height: 29px !important;
}
.stButton .stFb,
.stButton .stTwbutton,
.stButton .stMainServices,
.stButton .stButton_gradient {
	height: 22px !important;
}

.share {
	strong {
		display: block;
		margin-bottom: 10px;
	}

	> div{
		margin-bottom: 8px;
	}
	@media (min-width: $screen-lg) { // min 1200px
		position: relative;
		top: -350px;
	}
	@media (min-width: $screen-md) and (max-width: $screen-md-max) { // min 992px max 1199px
		position: relative;
		top: -260px;
	}
	@media (min-width: $screen-sm) and (max-width: $screen-sm-max) { // min 768px max 991px
		position: relative;
		top: -245px;
	}
}

.stArrow {
	display: none !important;
}

/***** IE code ****/

.ie8 table#product_comparison .product-image-block .product_image img {
	width: auto;
}

/**** responsive code ******/

@media (max-width: 992px) {
	#columns table#product_comparison{
		tbody tr td.td_empty span {
			font-size: 14px;
		}
		tbody tr td.product-block {
			padding: 14px;
		}
		.button.ajax_add_to_cart_button,
		.button.lnk_view{
			font-size: 14px;
		}
	}
}

@media (max-width: 767px) {
	#product_comparison table,
	#product_comparison thead,
	#product_comparison tbody,
	#product_comparison th,
	#product_comparison td,
	#product_comparison tr {
		display: block;
	}

	#product_comparison thead tr {
		position: absolute;
		top: -9999px;
		left: -9999px;
	}

	#product_comparison tr {
		overflow: hidden;
		&:last-child{
			border-bottom: none;
			td{
				border-bottom: none;
			}
		}
	}

	#product_comparison td {
		border: none;
		position: relative;
		white-space: normal;
		float: left;
		width: 33.33%;
		&.td_empty{
			width: 100% !important;
			clear: both;
		}
		&:last-child{
			border-bottom: none;
		}
	}

	#product_comparison{
		.comparison_feature{
			.feature-name{
				width: 100%;
				float: none;
				clear: both;
			}
		}
	}
}

@media (max-width: 480px) {
	#product_comparison td {
		float: none;
		width: 100%;
	}

	#product_comparison{
		.comparison_feature{
			td{
				float: left;
				width: 50%;
			}
			.feature-name{
				width: 100%;
				clear: both;
			}
			.product-name{
				width: 50%;
				float: left;
				display: block;
			}
		}
	}
}
<?php }} ?>
