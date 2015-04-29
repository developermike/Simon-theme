<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:33
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/cms.scss" */ ?>
<?php /*%%SmartyHeaderCode:395610821554074ad7f7249-82755966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '196ed381fad6735a73c96b153bb5ec4da1987e00' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/cms.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '395610821554074ad7f7249-82755966',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074ad816763_49959872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074ad816763_49959872')) {function content_554074ad816763_49959872($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

/**************************************************************
					CMS Pages Styles
***************************************************************/

#cms {
	#center_column {
		.block-cms {
			padding-bottom: 20px;
		}
		h1 {
			margin-bottom: 25px;
		}
		h3 {
			font-size: 16px;
			border-bottom: none;
			margin: 0;
			padding: 0 0 17px 0;
		}
		p {
			line-height: 18px;
		}
		.list-1 {
			li {
				padding: 4px 0 6px 0;
				font-weight: bold;
				color: #46a74e;
				border-top: 1px solid $base-border-color;
				&:first-child {
					border: none;
				}
				em {
					font-size: 20px;
					line-height: 20px;
					padding-right: 15px;
					vertical-align: -2px;
				}
			}
		}
		img {
			margin: 4px 0 17px;
			max-width: 100%;
			height: auto;
		}
		.testimonials {
			border: 1px solid;
			border-color: #dfdede #d2d0d0 #b0afaf #d2d0d0;
			margin: 4px 0 13px 0;
			position: relative;
			.inner {
				border: 1px solid $light-border-color;
				padding: 19px 18px 11px 18px;
				background: rgb(251,251,251);
				background: -moz-linear-gradient(top,  rgba(251,251,251,1) 0%, rgba(254,254,254,1) 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(251,251,251,1)), color-stop(100%,rgba(254,254,254,1)));
				background: -webkit-linear-gradient(top,  rgba(251,251,251,1) 0%,rgba(254,254,254,1) 100%);
				background: -o-linear-gradient(top,  rgba(251,251,251,1) 0%,rgba(254,254,254,1) 100%);
				background: -ms-linear-gradient(top,  rgba(251,251,251,1) 0%,rgba(254,254,254,1) 100%);
				background: linear-gradient(to bottom,  rgba(251,251,251,1) 0%,rgba(254,254,254,1) 100%);
				span {
					text-indent: -5000px;
					display: inline-block;
					width: 20px;
					height: 15px;
					&.before {
						background: url(../img/bl-before-bg.png) no-repeat;
						margin-right: 8px;
					}
					&.after {
						background: url(../img/bl-after-bg.png) no-repeat;
						margin-left: 8px;
					}
				}
			}
			&:after {
				content: ".";
				display: block;
				text-indent: -5000px;
				position: absolute;
				bottom: -16px;
				left: 21px;
				width: 15px;
				height: 16px;
				background: url(../img/testimon-after.gif) no-repeat;
			}
			& + p {
				padding-left: 45px;
				margin-bottom: 18px;
			}
		}
		p.bottom-indent {
			margin-bottom: 18px;
		}
		#admin-action-cms{
			background: none repeat 0 0 #F6F6F6;
			border: 1px solid #d2d0d0;
			padding: 10px;
			p{
				margin: 0;
				span{
					display: block;
					padding-bottom: 10px;
					font-size: 14px;
					font-weight: bold;
					color: $product-price-color;
				}
				.button{
					font: 700 17px/21px $font-family;
					padding: 0;
					border: 1px solid;
					padding: 10px 14px;
					display: inline-block;
					&.publish_button{
						color: $button-text-color;
						text-shadow: 1px 1px rgba(0,0,0,0.2);
						border-color: #0079b6 #006fa8 #012740 #006fa8;
						background: rgb(0,154,208);
						background: -moz-linear-gradient(top, rgba(0,154,208,1) 0%, rgba(0,122,183,1) 100%);
						background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,154,208,1)), color-stop(100%,rgba(0,122,183,1)));
						background: -webkit-linear-gradient(top, rgba(0,154,208,1) 0%,rgba(0,122,183,1) 100%);
						background: -o-linear-gradient(top, rgba(0,154,208,1) 0%,rgba(0,122,183,1) 100%);
						background: -ms-linear-gradient(top, rgba(0,154,208,1) 0%,rgba(0,122,183,1) 100%);
						background: linear-gradient(to bottom, rgba(0,154,208,1) 0%,rgba(0,122,183,1) 100%);
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#009ad0', endColorstr='#007ab7',GradientType=0);
						&:hover{
							border-color: #01314e #004b74 #0079b6 #004b74;
							filter: none;
							background: #0084bf;
						}
					}
					&.lnk_view{
						color: $base-text-color;
						text-shadow: 1px 1px rgba(255,255,255,1);
						border-color: #cacaca #b7b7b7 #9a9a9a #b7b7b7;
						background: rgb(247,247,247);
						background: -moz-linear-gradient(top, rgba(247,247,247,1) 0%, rgba(237,237,237,1) 100%);
						background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(247,247,247,1)), color-stop(100%,rgba(237,237,237,1)));
						background: -webkit-linear-gradient(top, rgba(247,247,247,1) 0%,rgba(237,237,237,1) 100%);
						background: -o-linear-gradient(top, rgba(247,247,247,1) 0%,rgba(237,237,237,1) 100%);
						background: -ms-linear-gradient(top, rgba(247,247,247,1) 0%,rgba(237,237,237,1) 100%);
						background: linear-gradient(to bottom, rgba(247,247,247,1) 0%,rgba(237,237,237,1) 100%);
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f7f7', endColorstr='#ededed',GradientType=0);
						&:hover{
							border-color: #9e9e9e #9e9e9e #c8c8c8 #9e9e9e;
							filter: none;
							background: #e7e7e7;
						}
					}
				}
			}
		}
	}
}<?php }} ?>
