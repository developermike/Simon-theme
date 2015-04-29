<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/productcomments/productcomments.scss" */ ?>
<?php /*%%SmartyHeaderCode:36256949554074aa70f6d0-17846692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0052a3e15602056362a514535f31999e1c7a30b3' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/productcomments/productcomments.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36256949554074aa70f6d0-17846692',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa77a888_95901135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa77a888_95901135')) {function content_554074aa77a888_95901135($_smarty_tpl) {?>@import "compass";
@import "theme_variables";

#product_comments_block_extra {
	padding: 8px 10px 10px;
	font-weight: bold;
	line-height: 18px;
	border: 1px solid $base-border-color;
	background: $base-box-bg;
	margin: 39px 0 22px;
	.comments_note {
		margin-bottom: 5px;
	}
	.comments_note span,
	.star_content {
		float: left;
		color: $base-text-color;
	}
	.star_content {
		margin-top: 1px;
	}
	div.star {
		&:after {
			content: "\f006";
			font-family: $font-icon;
			display: inline-block;
			color: #777676;
		}
	}
	div.star_on {
		&:after {
			content:"\f005";
			font-family: $font-icon;
			display: inline-block;
			color: #ef8743;
		}
	}
	.comments_advices {
		clear:both;
	}
}

.comments_advices {
	padding-top: 2px;
	li{
		display:inline-block;
		line-height: 30px;
		@media (min-width: $screen-sm) and (max-width: $screen-sm-max) {	//min 768px max 991px
			display: block;
			line-height: 20px;
		}
	}
	a {
		text-decoration: none;
		color: $base-body-color;
		position:relative;
		margin-right: 8px;
		line-height: 30px;
		padding: 0;
		display:inline-block;
		@media (min-width: $screen-sm) and (max-width: $screen-md-max) { //min 768px max 991px
			float: none;
			line-height: 20px;
		}
		&:before{
			background: #929292;
			@include border-radius(50px);
			color: white;
			display: inline-block;
			font-family: $font-icon;
			font-size: 15px;
			font-weight: normal;
			height: 30px;
			line-height: 30px;
			margin-right: 6px;
			text-align: center;
			width: 30px;
			/*max 1199px*/
			@media  (max-width: $screen-md-max) {
				display:none;
			}
		}
		&.reviews:before{
			content: "\f0e5";
		}
		&.open-comment-form:before{
			content: "\f040";
	}
		&:hover {
			color:$base-text-color
		}
		&.reviews{
			border-right: 1px solid $base-border-color;
			padding-right: 30px;
			margin-right: 9px;

			@media (min-width: $screen-sm) and (max-width: $screen-sm-max) { // min 768px max 991px
				margin-right: 0;
				padding: 0;
				border: none;
			}
		}
	}
}


/* pop-in add grade/advice ********************************************************************* */
#fancybox-wrap {
	width: 585px;
}
#fancybox-content {
	width: 585px;
	border-width: 0;
}
#new_comment_form {
	overflow: hidden;
	color: $base-text-color;
	text-align: left;
	h2{
		margin-bottom: 10px;
	}
	.title {
		padding: 10px;
		font-size: 13px;
		color: $light-text-color;
		text-transform: uppercase;
		background: $dark-background;
	}
	ul.grade_content {
		list-style-type: none;
		margin: 0 0 20px 0;
		li{
			width: 50%;
		}
		span{
			display:inline-block;
			padding: 0 10px;
			width: 150px;
			font-weight: bold;
		}
		.cancel {
			margin-right: 5px;
		}
	}
	.product {
		padding: 15px;
		img{
			border: $main_border;
		}
		.product_desc {
			line-height: 18px;
			color: $description-color;
			.product_name {
				padding: 10px 0 5px;
				font-size: 13px;
				color: #000;
			}
		}
	}
	.new_comment_form_content {
		padding: 15px 25px 15px 15px;
		background: #f8f8f8;
		@media (max-width: $screen-xs-max) { //max 767px
			padding-left:25px;
		}
		.intro_form {
			padding-bottom: 10px;
			font-weight: bold;
			font-size: 12px;
		}
	}
	label {
		display: block;
		margin: 12px 0 4px 0;
		font-weight: bold;
		font-size: 12px;
	}
	input,
	textarea  {
		padding: 0 5px;
		height: 28px;
		width: 100%;
		border: 1px solid #ccc;
		background: $light-background;
	}
	textarea {
		height: 80px;
	}
	.submit {
		margin-top: 20px;
		padding: 0;
		font-size: 13px;
		text-align: right;
	}

	#criterions_list {
		border-bottom: 1px solid #CCC;
		padding-bottom: 15px;
		list-style-type: none;
		li{
			margin-bottom: 10px;
		}
		label {
			display: inline;
			float: left;
			margin: 0 10px 0 0;
		}
		.star_content {
			float: left;
		}
	}
	#new_comment_form_footer {
		margin-top: 20px;
		font-size: 12px;
	}
}
/* TAB COMMENTS ******************************************************************************** */
#product_comments_block_tab {
	margin: 0 0 20px 0;
	div.comment {
		margin: 0 0 14px;
		padding-top: 14px;
		border-top: 1px solid $base-border-color;
		&:first-child{
			padding: 0;
			border: none;
		}
		.comment_author {
			padding: 0 20px;
			line-height: 18px;
			span{
				font-weight: bold;
				float: left;
			}
			.star_content {
				display: inline-block;
				vertical-align: middle;
				margin: 0 0 0 5px;
			}
		}
		.comment_details {
			overflow: hidden;
			border-left: $main_border;
			@media (max-width: $screen-sm-max) { //max 767px
				border-left: none;
				ul {
					list-style-type: none;
					margin: 0;
					li {
						padding: 2px 0 2px;
						&:before{
							font-family: $font-icon;
							content: "\f0da";
							color: $base-text-color;
							margin-right: 8px;
						}
					}
				}
			}
		}
	}
	div.star {
		&:after {
			content: "\f006";
			font-family: $font-icon;
			display: inline-block;
			color: #777676;
		}
	}
	div.star_on {
		&:after {
			content: "\f005";
			font-family: $font-icon;
			display: inline-block;
			color: #ef8743;
		}
	}
	.comment_author_infos {
		clear: both;
		padding-top: 9px;
		strong{
			display: block;
			color: $base-text-color;
		}
		em {
			color: #adadad;
		}
	}
	a {
		text-decoration: none;
		font-weight: bold;
	}

	span.report_btn {
		cursor: pointer;
	}
	span.report_btn:hover {
		text-decoration: underline;
	}
}
.fl {
	float: left;
}
.fr {
	float: right;
}
<?php }} ?>
