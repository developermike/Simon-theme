<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcategories/blockcategories.scss" */ ?>
<?php /*%%SmartyHeaderCode:1961969373554074aa7c61d0-02443105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df43221deff00d03535cbe2c5a1ee8deeec060b4' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/modules/blockcategories/blockcategories.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1961969373554074aa7c61d0-02443105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aa809135_07399177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aa809135_07399177')) {function content_554074aa809135_07399177($_smarty_tpl) {?>@import "compass";
@import "theme_variables";
#categories_block_top {
  clear: both;
  position: relative;
  top: 30px;
  .sf-menu {
    position: relative;
    > li {
      position: static;
      > ul {
        width: 100%;
        top: 60px;
        margin: 0 20px;
        > li {
          display: block;
          float: left;
          width: 20%;
          -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
          box-sizing: border-box;
          padding: 0 10px;
        }
        > .category_thumb {
          display: block;
          clear: both;
          overflow: hidden;
          width: 100%;
          img {
            display: inline-block;
            width: 33%;
          }
        }
      }
      h4 {
        a {
          font-size: 1.1em;
          &:before {
            display: none;
          }
        }
      }
      .main-level-submenus {
        position: relative;
        display: block !important;
        visibility: visible !important;
        top: 0;
        background: none;
        box-shadow: none;
        padding: 0;
        left: 0;
      }
    }
    .category_thumb {
      display: none;
    }
  }
}

#categories_block_left {
  .block_content > ul {
    border-top: 1px solid $base-border-color;
  }
  li {
    position: relative;
    a {
      font-weight: bold;
      color: $base-text-color;
      display: block;
      font-size: 13px;
      line-height: 30px;
      padding: 0 30px 0 19px;
      border-bottom: 1px solid $base-border-color;
    }
    span.grower {
      display: block;
      background: #f6f6f6;
      position: absolute;
      right: 0;
      top: 0;
      cursor: pointer;
      font-family: $font-icon;
      font-size: 14px;
      &.OPEN,
      &.CLOSE {
        &:before {
          content: "\f068";
          display: block;
          vertical-align: middle;
          width: 30px;
          height: 30px;
          color: $base-text-color;
          line-height: 30px;
          text-align: center;
        }
      }
      &.CLOSE:before {
        content: "\f067";
        color: silver;
      }
    }
    & span.grower:hover + a,
    a:hover,
    a.selected {
      background: #f6f6f6;
    }
    li {
      a {
        font-weight: normal;
        color: #777777;
        &:before {
          content: "\f105";
          font-family: $font-icon;
          line-height: 29px;
          padding-right: 8px;
        }
      }
    }
  }
}<?php }} ?>
