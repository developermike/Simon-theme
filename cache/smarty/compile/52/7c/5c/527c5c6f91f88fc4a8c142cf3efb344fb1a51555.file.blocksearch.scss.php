<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocksearch/blocksearch.scss" */ ?>
<?php /*%%SmartyHeaderCode:764954549554074aa26fd49-29125952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527c5c6f91f88fc4a8c142cf3efb344fb1a51555' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blocksearch/blocksearch.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '764954549554074aa26fd49-29125952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa27bb02_47012675',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa27bb02_47012675')) {function content_554074aa27bb02_47012675($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
#search_block_top {
	padding-top: 50px;
	#searchbox {
		float: left;
		width: 100%;
	}
	.btn.button-search {
		background: $dark-background;
		display: block;
		position: absolute;
		top: 0;
		right: 0;
		border: none;
		color: $light-text-color;
		width: 50px;
		text-align: center;
		padding: 10px 0 11px 0;
		span {
			display: none;
		}
		&:before {
			content: "\f002";
			display: block;
			font-family: $font-icon;
			font-size: 17px;
			width: 100%;
			text-align: center;
		}
		&:hover {
			color: #6f6f6f
		}
	}
	#search_query_top {
		display: inline;
		padding: 13px 60px 13px 13px;
		height: 45px;
		background: $base-box-bg;
		margin-right: 1px;
	}
}

.ac_results {
	background: $light-background;
	border: 1px solid $base-border-color;
	width: 271px;
	margin-top: -1px;
	li {
		padding: 0 10px;
		font-weight: normal;
		color: #686666;
		font-size: 13px;
		line-height: 22px;
		&.ac_odd {
			background: $light-background;
		}
		&:hover, &.ac_over {
			background: $base-box-bg;
		}
	}
}

form#searchbox {
	position: relative;
	label {
		color: $base-text-color;
	}
	input#search_query_block {
		margin-right:10px;
		max-width:222px;
		margin-bottom:10px;
		display:inline-block;
		float:left;
	}
	.button.button-small {
		float:left;
		i {
			margin-right:0;
		}
	}
}<?php }} ?>