<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:07
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/blocksearch/blocksearch.css" */ ?>
<?php /*%%SmartyHeaderCode:74872360155407493c734e4-88830571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a71777054daead875cf15801b566a0320f6952' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/blocksearch/blocksearch.css',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74872360155407493c734e4-88830571',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55407493c90913_15727159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55407493c90913_15727159')) {function content_55407493c90913_15727159($_smarty_tpl) {?>#search_block_top {
  padding-top: 50px; }
  #search_block_top #searchbox {
    float: left;
    width: 100%; }
  #search_block_top .btn.button-search {
    background: #333;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    border: none;
    color: #fff;
    width: 50px;
    text-align: center;
    padding: 10px 0 11px 0; }
    #search_block_top .btn.button-search span {
      display: none; }
    #search_block_top .btn.button-search:before {
      content: "\f002";
      display: block;
      font-family: "FontAwesome";
      font-size: 17px;
      width: 100%;
      text-align: center; }
    #search_block_top .btn.button-search:hover {
      color: #6f6f6f; }
  #search_block_top #search_query_top {
    display: inline;
    padding: 13px 60px 13px 13px;
    height: 45px;
    background: #fbfbfb;
    margin-right: 1px; }

.ac_results {
  background: #fff;
  border: 1px solid #d6d4d4;
  width: 271px;
  margin-top: -1px; }
  .ac_results li {
    padding: 0 10px;
    font-weight: normal;
    color: #686666;
    font-size: 13px;
    line-height: 22px; }
    .ac_results li.ac_odd {
      background: #fff; }
    .ac_results li:hover, .ac_results li.ac_over {
      background: #fbfbfb; }

form#searchbox {
  position: relative; }
  form#searchbox label {
    color: #333; }
  form#searchbox input#search_query_block {
    margin-right: 10px;
    max-width: 222px;
    margin-bottom: 10px;
    display: inline-block;
    float: left; }
  form#searchbox .button.button-small {
    float: left; }
    form#searchbox .button.button-small i {
      margin-right: 0; }

/*# sourceMappingURL=blocksearch.css.map */
<?php }} ?>
