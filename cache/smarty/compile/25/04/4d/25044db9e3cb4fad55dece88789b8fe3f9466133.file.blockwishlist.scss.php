<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockwishlist/blockwishlist.scss" */ ?>
<?php /*%%SmartyHeaderCode:1236147990554074aa5d0e07-02940815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25044db9e3cb4fad55dece88789b8fe3f9466133' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockwishlist/blockwishlist.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236147990554074aa5d0e07-02940815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa654b45_60160395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa654b45_60160395')) {function content_554074aa654b45_60160395($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/* lnk on detail product page */
#wishlist_button, #wishlist_button_nopop {
	font-weight: 700;
	@include border-radius(5px);
	background-color: transparent;
	border-color: transparent;
	margin: auto;
	outline: 0;
	&:before{
		content: "\f08a";
		font: 400 15px/31px $font-icon;
		color: $light-text-color;
		background: #929292;
		width: 30px;
		text-align: center;
		display: inline-block;
		height: 30px;
		margin: 0 6px 0 0;
		@include border-radius(50px);
	}
}

/* wishlist block */
#wishlist_block {
	#wishlist_block_list {
		margin: 0 0 20px 0;
		dl {
			font-weight: 400;
			&.products.no-products {
				font-weight: 700;
				padding: 0 0 15px 0;
				border-bottom: 1px solid $base-border-color;
				dt {
					padding: 0;
					border-top: none;
				}
				dd{
					display: none;
				}
			}
			&.products {
				border-bottom: 1px solid $base-border-color;
				dt {
					padding: 20px 0 0;
					border-top: 1px solid $base-border-color;
				}
				dd {
					padding: 0 0 20px 0;
				}
				dt.first_item {
					padding: 0;
					border-top: none;
				}
			}
			dt {
				position: relative;
				padding-right: 0;
			}
			dd {
				margin: 0 0 0 24px;
			}
		}
	}
	.lnk {
		.form-group {
			margin: 0 0 20px 0;
			select {
				max-width: 192px;
				@media (max-width: $screen-xs-max) { // max 767px
					width: 192px;
				}
			}
		}
	}
	.ajax_cart_block_remove_link {
		font-size: 14px;
		line-height: 14px;
		color: #d3d2d2;
		width: 14px;
		height: 14px;
		float: right;
		&:hover {
			color: $link-hover-color;
		}
	}
	.cart_block_product_name {
		width: 85%;
		display: inline-block;
		font-weight: bold;
	}
	.quantity-formated {
		float: left;
		margin: 0 5px 0 0;
		width: 15px;
	}
}
#wishlist_block_list .price {
	float: right;
}

/* page in my account ************************************************************************* */
#mywishlist {
	td.wishlist_delete a {
		font-size: 15px;
	}
}

/* wishlistLinkTop */
#module-blockwishlist-mywishlist {
	#block-order-detail #hideSendWishlist {
		display: inline-block;
	}
}
#module-blockwishlist-mywishlist .wishlistLinkTop ul.display_list {
	border-bottom: 1px solid $base-border-color;
	margin-bottom: 20px;
	a  {
		display: inline-block;
		color: $base-text-color;
		margin: 10px 10px 10px 0px;
		font-weight: bold;
		&:hover {
			color: $link-hover-color;
		}
	}
}

#module-blockwishlist-mywishlist .wishlistLinkTop li {
	float: left;
}

#module-blockwishlist-mywishlist .wishlistLinkTop #hideSendWishlist {
	float: right;
}
#module-blockwishlist-mywishlist .wishlistLinkTop #showBoughtProducts,
#module-blockwishlist-mywishlist .wishlistLinkTop #hideBoughtProductsInfos {
	display: none;
}

/* wlp_bought ****************************************** */

/* wlp_bought_list */
ul.wlp_bought_list li {
	margin: 0 0 30px 0;
	.product_image {
		padding: 9px;
		border: 1px solid $base-border-color;
		margin: 0 0 20px 0;
		max-width: 270px;
	}
	.product-name {
		margin: 0 0 10px 0;
		padding: 0 20px 0 0;
		small {
			display: block;
			font-size: 11px;
			a {
				font-size: 11px;
			}
		}
	}
	.product_infos {
		position: relative;
	}
	.btn_action .btn {
		margin: 0 0 10px 0;
	}
	/*> 992px*/
	@media (min-width: $screen-md) {
		&.first-in-line {
			clear: left;
		}
	}
	/*768px x 991px*/
	@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {
		&.first-item-of-tablet-line  {
			clear: left;
		}
	}
}
.wishlistLinkTop {
	.submit {
		margin: 0 0 30px 0;
	}
}
ul.wlp_bought_list li .lnkdel {
	position: absolute;
	top: 0;
	right: 0;
	display: block;
	font-size: 14px;
}

#wishlist_button > .btn-group {
	width: 80%;
}
[id=wishlist_button] + .popover,
.wishlist_change_button + .popover {
	padding: 0;
	min-width: 150px;
	 .popover-content {
	 	padding: 0;
	 }
	 table {
	 	margin-bottom: 2px;
	 	td:hover {
	 		background-color: rgb(204, 204, 204);
	 		cursor: pointer;
	 	}
	 }
}
<?php }} ?>
