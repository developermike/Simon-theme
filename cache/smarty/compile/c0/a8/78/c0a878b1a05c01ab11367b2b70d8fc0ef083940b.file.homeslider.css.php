<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:08
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/homeslider/homeslider.css" */ ?>
<?php /*%%SmartyHeaderCode:163244048255407494181658-97546058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a878b1a05c01ab11367b2b70d8fc0ef083940b' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/modules/homeslider/homeslider.css',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163244048255407494181658-97546058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55407494199b28_64554108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55407494199b28_64554108')) {function content_55407494199b28_64554108($_smarty_tpl) {?>/******************************************************************************
						Home Page Slider
*******************************************************************************/
#homepage-slider {
  padding-left: 0;
  padding-right: 0;
  margin-bottom: 14px;
  max-width: 100%;
  max-height: 100%;
  overflow: hidden;
  position: relative;
  z-index: 1;
  float: left;
  /*****************************************************************************
  						BXSlider Styles
  ********************************************************************************/ }
  @media (max-width: 767px) {
    #homepage-slider {
      width: 100%;
      max-width: 100%;
      padding-top: 20px; } }
  #homepage-slider #homeslider {
    margin: 0 auto;
    padding: 0; }
  #homepage-slider .homeslider-container {
    position: relative; }
  #homepage-slider .homeslider-image {
    position: absolute;
    left: 0;
    top: 0; }
  #homepage-slider .homeslider-description {
    position: absolute;
    left: 0;
    top: 0;
    padding: 50px 50px;
    cursor: pointer; }
    #homepage-slider .homeslider-description h2 {
      font-size: 2.7em;
      color: white;
      margin: 0;
      padding: 0; }
    #homepage-slider .homeslider-description p {
      width: 50%;
      font-size: 1.15em;
      line-height: 1.3em;
      padding: 0.5em 0;
      color: white; }
    #homepage-slider .homeslider-description button {
      font-size: 1.2em;
      text-transform: uppercase; }
    @media (max-width: 1200px) {
      #homepage-slider .homeslider-description {
        padding: 20px;
        font-size: 0.8em; } }
    @media (max-width: 768px) {
      #homepage-slider .homeslider-description {
        padding: 30px;
        font-size: 0.7em; }
        #homepage-slider .homeslider-description p {
          font-size: 1.5em; } }
    @media (max-width: 480px) {
      #homepage-slider .homeslider-description {
        padding: 30px;
        font-size: 0.5em; }
        #homepage-slider .homeslider-description p {
          font-size: 1.7em; } }
  #homepage-slider .bx-wrapper a {
    display: block; }
  #homepage-slider .bx-wrapper img {
    height: auto; }
  #homepage-slider .bx-wrapper .bx-viewport {
    width: 100%;
    direction: ltr !important; }
  #homepage-slider .bx-wrapper .bx-pager.bx-default-pager a {
    background: #666; }
  #homepage-slider .bx-wrapper .bx-controls-direction a {
    top: auto;
    margin-top: 0px;
    font-size: 1em;
    bottom: 10px;
    outline: 0;
    width: 52px;
    height: 52px;
    text-indent: -9999px;
    z-index: 9999;
    border: 2px solid #fff;
    line-height: 18px; }
    #homepage-slider .bx-wrapper .bx-controls-direction a:before {
      height: 48px;
      width: 48px;
      display: block;
      background: #fff;
      content: ".";
      opacity: 0.14;
      text-indent: -9999px;
      position: absolute;
      left: 0;
      top: 0;
      z-index: 1; }
    #homepage-slider .bx-wrapper .bx-controls-direction a:after {
      display: block;
      width: 48px;
      height: 48px;
      color: #fff;
      text-indent: 0;
      text-align: center;
      font-size: 21px;
      font-family: "FontAwesome";
      position: absolute;
      top: 0;
      left: 0;
      z-index: 2;
      padding: 16px 0 0 0; }
    #homepage-slider .bx-wrapper .bx-controls-direction a:hover:before {
      background: #333;
      opacity: 0.83; }
  #homepage-slider .bx-wrapper .bx-prev {
    right: 60px;
    left: auto; }
    #homepage-slider .bx-wrapper .bx-prev:after {
      content: "\f053"; }
  #homepage-slider .bx-wrapper .bx-next:after {
    content: "\f054"; }

.ie8 #homepage-slider .bx-wrapper .bx-controls-direction a:before {
  background: #333; }

/*# sourceMappingURL=homeslider.css.map */
<?php }} ?>
