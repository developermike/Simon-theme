<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:07
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/blockcurrencies/blockcurrencies.css" */ ?>
<?php /*%%SmartyHeaderCode:67908060755407493d5cd21-54830170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9c5314bd915960775bee8c2ef8acb7185dbf395' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/blockcurrencies/blockcurrencies.css',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67908060755407493d5cd21-54830170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55407493d78c69_72220160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55407493d78c69_72220160')) {function content_55407493d78c69_72220160($_smarty_tpl) {?>#currencies-block-top {
  float: right;
  border-left: 1px solid #515151;
  position: relative; }
  @media (max-width: 479px) {
    #currencies-block-top {
      width: 25%; } }
  #currencies-block-top span.firstWord {
    display: none; }
  #currencies-block-top div.current {
    font-weight: bold;
    padding: 8px 10px 10px 10px;
    color: #fff;
    text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    line-height: 18px; }
    @media (max-width: 479px) {
      #currencies-block-top div.current {
        text-align: center;
        padding: 9px 5px 10px;
        font-size: 11px; } }
    #currencies-block-top div.current strong {
      color: #777777; }
    #currencies-block-top div.current:hover, #currencies-block-top div.current.active {
      background: #2b2b2b; }
    #currencies-block-top div.current:after {
      content: "\f0d7";
      font-family: "FontAwesome";
      font-size: 18px;
      line-height: 18px;
      color: #686666;
      vertical-align: -2px;
      padding-left: 12px; }
      @media (max-width: 479px) {
        #currencies-block-top div.current:after {
          padding-left: 2px;
          font-size: 13px;
          line-height: 13px;
          vertical-align: 0; } }
    @media (max-width: 479px) {
      #currencies-block-top div.current .cur-label {
        display: none; } }
  #currencies-block-top ul {
    display: none;
    position: absolute;
    top: 37px;
    left: 0;
    width: 157px;
    background: #333;
    z-index: 2; }
    #currencies-block-top ul li {
      color: #fff;
      line-height: 35px;
      font-size: 13px; }
      #currencies-block-top ul li a,
      #currencies-block-top ul li > span {
        padding: 0 10px 0 12px;
        display: block;
        color: #fff; }
      #currencies-block-top ul li.selected, #currencies-block-top ul li:hover a {
        background: #484848; }

/*# sourceMappingURL=blockcurrencies.css.map */
<?php }} ?>
