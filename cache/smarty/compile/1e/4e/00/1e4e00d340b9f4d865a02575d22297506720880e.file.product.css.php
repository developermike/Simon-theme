<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:08
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/product.css" */ ?>
<?php /*%%SmartyHeaderCode:5417146905540749490c404-42835326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e4e00d340b9f4d865a02575d22297506720880e' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/css/product.css',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5417146905540749490c404-42835326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55407494a726f8_70821573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55407494a726f8_70821573')) {function content_55407494a726f8_70821573($_smarty_tpl) {?>/* product desc */
/* primary_block ***************************************************************************** */
.primary_block {
  margin-bottom: 40px; }

.top-hr {
  background: #C4C4C4;
  height: 5px;
  margin: 2px 0 31px; }

.product-heading-h5 {
  color: #999999;
  font-weight: 200;
  margin: 3px 0 8px;
  font-size: 19px;
  font-family: "Open Sans", sans-serif; }

.box-security .product-heading-h5 {
  margin: 3px 0 -8px; }
  @media (max-width: 1199px) {
    .box-security .product-heading-h5 {
      margin-bottom: 8px; } }

.primary_block .pb-left-column img {
  max-width: 100%;
  height: auto; }

a.fancybox-nav {
  outline: 0; }

/* .pb-left-column ***************************************************************************** */
.pb-left-column #image-block {
  position: relative;
  display: block;
  cursor: pointer;
  padding: 5px;
  border: 1px solid #dbdbdb;
  background: #fff; }
  @media (max-width: 767px) {
    .pb-left-column #image-block {
      width: 280px;
      margin: 0 auto; } }
  .pb-left-column #image-block img {
    background: #fbfbfb;
    width: 100%; }
  .pb-left-column #image-block #view_full_size .span_link {
    position: absolute;
    bottom: 20px;
    left: 50%;
    margin-left: -68px;
    display: block;
    padding: 10px 0;
    text-align: center;
    line-height: 22px;
    color: #777676;
    width: 136px;
    text-align: center;
    font-weight: 700;
    background: rgba(255, 255, 255, 0.5);
    -moz-box-shadow: 0 2px 8px rgba(0, 0, 0, 0.16);
    -webkit-box-shadow: 0 2px 8px rgba(0, 0, 0, 0.16);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.16); }
    .pb-left-column #image-block #view_full_size .span_link:after {
      font-family: "FontAwesome";
      color: #c0c0c0;
      font-size: 20px;
      line-height: 22px;
      content: "\f00e";
      font-weight: normal;
      margin: 0 0 0 4px; }
    .pb-left-column #image-block #view_full_size .span_link:hover:after {
      color: #333; }
  .pb-left-column #image-block a.jqzoom div div img {
    width: auto;
    max-width: 10000px; }
  .pb-left-column #image-block a.jqzoom div div .zoomWrapper {
    border: none; }
  .pb-left-column #image-block .zoomPad {
    z-index: auto !important; }
  .pb-left-column #image-block .new-box,
  .pb-left-column #image-block .sale-box {
    z-index: 5002; }

/* miniatures */
.pb-left-column #views_block {
  margin-top: 10px; }
  @media (max-width: 767px) {
    .pb-left-column #views_block {
      width: 280px;
      margin-left: 10px auto 0px auto; } }

#thumbs_list {
  overflow: hidden;
  float: left;
  width: 392px; }
  @media (min-width: 992px) and (max-width: 1199px) {
    #thumbs_list {
      width: 294px; } }
  @media (min-width: 768px) and (max-width: 991px) {
    #thumbs_list {
      width: 164px; } }
  @media (max-width: 767px) {
    #thumbs_list {
      width: 196px; } }
  #thumbs_list ul#thumbs_list_frame {
    list-style-type: none;
    padding-left: 0;
    overflow: hidden;
    height: 90px; }
  #thumbs_list li {
    float: left;
    height: 90px;
    width: 90px;
    cursor: pointer;
    border: 1px solid #dbdbdb;
    margin-right: 8px;
    line-height: 0;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box; }
    @media (min-width: 768px) and (max-width: 991px) {
      #thumbs_list li {
        width: 76px;
        height: 76px;
        margin-right: 6px; } }
    #thumbs_list li a {
      display: block;
      border: 3px solid #fff;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      background: #fbfbfb; }
      #thumbs_list li a:hover, #thumbs_list li a.shown {
        border-color: #dbdbdb; }
    #thumbs_list li img {
      border: 1px solid #fff;
      width: 100%;
      height: 100%;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box; }
      @media (min-width: 768px) and (max-width: 991px) {
        #thumbs_list li img {
          width: 68px;
          height: 68px; } }

span.view_scroll_spacer {
  float: left;
  width: 39px;
  padding-left: 12px; }
  @media (min-width: 768px) and (max-width: 991px) {
    span.view_scroll_spacer {
      padding-left: 6px;
      width: 28px; } }

#view_scroll_left,
#view_scroll_right {
  margin-top: 38px;
  height: 20px;
  width: 20px;
  line-height: 0;
  font-size: 0;
  overflow: hidden; }
  @media (min-width: 768px) and (max-width: 991px) {
    #view_scroll_left,
    #view_scroll_right {
      margin-top: 28px; } }
  #view_scroll_left:before,
  #view_scroll_right:before {
    padding-left: 2px;
    color: #c0c0c0;
    font-family: "FontAwesome";
    font-size: 20px;
    line-height: 22px; }
  #view_scroll_left:hover:before,
  #view_scroll_right:hover:before {
    color: #333; }

#view_scroll_right {
  float: left; }
  #view_scroll_right:before {
    content: "\f138"; }

#view_scroll_left {
  margin-top: 0; }
  #view_scroll_left:before {
    content: "\f137";
    padding-right: 2px; }

.resetimg {
  padding: 10px 0 0; }
  .resetimg #resetImages i {
    margin-right: 6px; }

.view_scroll_spacer {
  margin-top: 38px; }
  @media (min-width: 768px) and (max-width: 991px) {
    .view_scroll_spacer {
      margin-top: 28px; } }

/* link list */
#usefull_link_block {
  list-style-type: none; }
  #usefull_link_block li {
    margin: 0 0 8px 0; }
    @media (min-width: 768px) and (max-width: 991px) {
      #usefull_link_block li {
        float: none !important; } }
    #usefull_link_block li:first-child {
      margin: 0 0 8px 0;
      border: none;
      padding: 0; }
    #usefull_link_block li a {
      color: #777676;
      font-weight: 700;
      position: relative;
      padding-left: 30px;
      line-height: 22px;
      display: inline-block; }
      #usefull_link_block li a:before {
        font-family: "FontAwesome";
        color: #333;
        font-size: 19px;
        line-height: 24px;
        position: absolute;
        top: -2px;
        left: 0;
        font-weight: normal; }
      #usefull_link_block li a:hover {
        color: #000; }
    @media (min-width: 768px) and (max-width: 991px) {
      #usefull_link_block li.print {
        margin: 8px 0 0;
        padding: 0;
        border: none; } }
    #usefull_link_block li.print a:before {
      content: "\f02f"; }
    #usefull_link_block li.sendtofriend a:before {
      content: "\f003"; }
    #usefull_link_block li#left_share_fb {
      clear: both;
      float: none; }
      #usefull_link_block li#left_share_fb a {
        padding-left: 18px; }
      #usefull_link_block li#left_share_fb a:before {
        content: "\f09a"; }
    #usefull_link_block li#favoriteproducts_block_extra_remove, #usefull_link_block li#favoriteproducts_block_extra_add, #usefull_link_block li#favoriteproducts_block_extra_removed, #usefull_link_block li#favoriteproducts_block_extra_added {
      cursor: pointer;
      font-weight: 700;
      clear: both;
      float: none;
      margin: 0 0 8px 0;
      border: none;
      padding: 0;
      position: relative; }
      #usefull_link_block li#favoriteproducts_block_extra_remove:before, #usefull_link_block li#favoriteproducts_block_extra_add:before, #usefull_link_block li#favoriteproducts_block_extra_removed:before, #usefull_link_block li#favoriteproducts_block_extra_added:before {
        font-family: "FontAwesome";
        color: #333;
        font-size: 19px;
        line-height: 24px;
        position: absolute;
        top: -2px;
        left: 0;
        font-weight: normal;
        content: "\f08a"; }
      #usefull_link_block li#favoriteproducts_block_extra_remove:hover, #usefull_link_block li#favoriteproducts_block_extra_add:hover, #usefull_link_block li#favoriteproducts_block_extra_removed:hover, #usefull_link_block li#favoriteproducts_block_extra_added:hover {
        color: #000; }
    #usefull_link_block li#favoriteproducts_block_extra_removed:before {
      content: "\f004"; }

/* pb-left-column ****************************************************************************** */
.pb-center-column {
  margin-bottom: 30px;
  /* form */ }
  .pb-center-column h1 {
    padding-bottom: 16px;
    font-size: 20px;
    color: #3a3939; }
  .pb-center-column p {
    margin-bottom: 10px; }
  .pb-center-column #product_reference {
    margin-bottom: 6px; }
  .pb-center-column #short_description_block {
    color: #666; }
    .pb-center-column #short_description_block .buttons_bottom_block {
      display: none; }
    .pb-center-column #short_description_block #short_description_content {
      padding: 0 0 15px;
      word-wrap: break-word; }
      .pb-center-column #short_description_block #short_description_content p {
        line-height: 18px; }
  .pb-center-column #buy_block {
    margin-top: 10px; }
    .pb-center-column #buy_block label {
      display: inline-block;
      width: 125px;
      font-weight: 700;
      font-size: 12px;
      text-align: right; }
    .pb-center-column #buy_block p.price {
      padding: 0; }
  .pb-center-column #color_picker p {
    padding-bottom: 5px;
    font-weight: 700; }

#product p#loyalty {
  padding: 17px 0 15px 35px;
  border-top: 1px solid #d6d4d4;
  border-bottom: 1px solid #d6d4d4;
  margin: 10px 0 -5px;
  position: relative; }
  #product p#loyalty b {
    color: #333; }
  #product p#loyalty:before {
    content: "\f024";
    font-family: "FontAwesome";
    color: #cfcccc;
    font-size: 26px;
    line-height: 28px;
    position: absolute;
    top: 16px;
    left: 0; }

#page .rte {
  padding: 0 20px 20px;
  word-wrap: break-word; }
  #page .rte p {
    margin-bottom: 1em;
    min-height: 1px; }

#attributes fieldset {
  padding-bottom: 3px; }
  #attributes fieldset label {
    vertical-align: top;
    display: block; }
#attributes .attribute_list {
  width: 100%; }
  #attributes .attribute_list .form-control {
    max-width: 230px; }
    #attributes .attribute_list .form-control option {
      background: #fff;
      color: #666; }
  #attributes .attribute_list ul {
    clear: both; }
    #attributes .attribute_list ul li {
      float: left;
      margin-right: 10px; }
  #attributes .attribute_list input.attribute_radio {
    float: left;
    margin-left: 3px; }
  #attributes .attribute_list div.radio,
  #attributes .attribute_list div.radio span,
  #attributes .attribute_list div.radio input {
    float: none;
    display: inline-block; }
  #attributes .attribute_list #color_to_pick_list {
    list-style-type: none; }
    #attributes .attribute_list #color_to_pick_list li {
      float: left;
      margin: 0 3px 3px 0;
      padding: 1px;
      border: 1px solid #d6d4d4;
      clear: none;
      width: 26px;
      height: 26px; }
      #attributes .attribute_list #color_to_pick_list li a.color_pick {
        display: block;
        height: 22px;
        width: 22px;
        cursor: pointer; }
        #attributes .attribute_list #color_to_pick_list li a.color_pick img {
          display: block;
          height: 22px;
          width: 22px; }
      #attributes .attribute_list #color_to_pick_list li.selected {
        border: 1px solid #4d4d4d; }

.product_attributes,
.box-cart-bottom {
  -moz-box-shadow: inset 0 6px 6px rgba(0, 0, 0, 0.05);
  -webkit-box-shadow: inset 0 6px 6px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 6px 6px rgba(0, 0, 0, 0.05);
  padding: 19px 19px 17px; }

.box-cart-bottom {
  padding: 0; }

#short_description_content a,
.page-product-box .rte a {
  color: #333333;
  text-decoration: underline; }
#short_description_content a.btn,
.page-product-box .rte a.btn {
  text-decoration: none; }

.box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf; }
  .box-info-product p {
    margin-bottom: 7px; }
  .box-info-product .exclusive {
    padding: 0;
    border-top: 1px solid #0079b6;
    border-right: 1px solid #006fa8;
    border-left: 1px solid #006fa8;
    border-bottom: 1px solid #012740;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    position: relative;
    display: block;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwOWFkMCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwN2FiNyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #009ad0), color-stop(100%, #007ab7));
    background-image: -moz-linear-gradient(#009ad0, #007ab7);
    background-image: -webkit-linear-gradient(#009ad0, #007ab7);
    background-image: linear-gradient(#009ad0, #007ab7);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#009ad0', endColorstr='#007ab7',GradientType=0 ); }
    .box-info-product .exclusive:before {
      font-family: "FontAwesome";
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      color: #fff;
      font-size: 25px;
      line-height: 47px;
      text-shadow: 0 1px #015883;
      content: "\f07a";
      z-index: 2;
      width: 51px;
      text-align: center;
      border: 1px solid #06b2e6;
      -moz-border-radius: 5px 0 0 5px;
      -webkit-border-radius: 5px;
      border-radius: 5px 0 0 5px; }
      @media (max-width: 991px) {
        .box-info-product .exclusive:before {
          display: none; } }
    .box-info-product .exclusive.added:before {
      content: "\f00c"; }
    .box-info-product .exclusive.added.disabled:before, .box-info-product .exclusive.disabled:before {
      height: 51px;
      content: "\f110";
      animation: 2s linear 0s normal none infinite spin;
      -webkit-animation: 2s linear 0s normal none infinite spin;
      -moz-animation: 2s linear 0s normal none infinite spin;
      border: none; }
    .box-info-product .exclusive:after {
      background: url(../img/border-1.gif) repeat-y 0 0;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 51px;
      content: "";
      width: 1px;
      z-index: 2; }
      @media (max-width: 991px) {
        .box-info-product .exclusive:after {
          display: none; } }
    .box-info-product .exclusive span {
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      border-radius: 5px;
      font-weight: 700;
      font-size: 20px;
      line-height: 22px;
      border-top: 1px solid #06b2e6;
      border-right: 1px solid #06b2e6;
      border-left: 1px solid #06b2e6;
      border-bottom: 1px solid #06b2e6;
      text-shadow: 0 1px #015883;
      padding: 12px 36px 14px 60px;
      color: #fff;
      display: block !important;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      @media (max-width: 1199px) {
        .box-info-product .exclusive span {
          padding: 12px 22px 14px 55px;
          font-size: 14px; } }
      @media (max-width: 991px) {
        .box-info-product .exclusive span {
          padding: 8px 12px 10px;
          text-align: left; } }
    .box-info-product .exclusive:hover {
      background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwN2FiNyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwOWFkMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
      background-size: 100%;
      background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #007ab7), color-stop(100%, #009ad0));
      background-image: -moz-linear-gradient(#007ab7, #009ad0);
      background-image: -webkit-linear-gradient(#007ab7, #009ad0);
      background-image: linear-gradient(#007ab7, #009ad0);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007ab7', endColorstr='#009ad0',GradientType=0 );
      background-position: 0 0; }

#center_column.col-sm-9 .col-md-3 .box-info-product {
  background: #f6f6f6;
  border: 1px solid #d2d0d0;
  border-top: 1px solid #b0afaf;
  border-bottom: 1px solid #b0afaf; }
  #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive {
    padding: 0;
    border-top: 1px solid #0079b6;
    border-right: 1px solid #006fa8;
    border-left: 1px solid #006fa8;
    border-bottom: 1px solid #012740;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    position: relative;
    display: block;
    background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwOWFkMCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwN2FiNyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
    background-size: 100%;
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #009ad0), color-stop(100%, #007ab7));
    background-image: -moz-linear-gradient(#009ad0, #007ab7);
    background-image: -webkit-linear-gradient(#009ad0, #007ab7);
    background-image: linear-gradient(#009ad0, #007ab7);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#009ad0', endColorstr='#007ab7',GradientType=0 ); }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
      font-family: "FontAwesome";
      position: relative;
      top: 0;
      left: 0;
      bottom: 0;
      color: #fff;
      font-size: 25px;
      line-height: 47px;
      text-shadow: 0 1px #015883;
      content: "\f07a";
      z-index: 2;
      width: 51px;
      text-align: center;
      border: none;
      -moz-border-radius: 0;
      -webkit-border-radius: 0;
      border-radius: 0; }
      @media (max-width: 991px) {
        #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:before {
          display: none; } }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive.added:before {
      content: "\f00c"; }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive.added.disabled:before, #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive.disabled:before {
      content: "\f110";
      animation: 2s linear 0s normal none infinite spin;
      -webkit-animation: 2s linear 0s normal none infinite spin;
      -moz-animation: 2s linear 0s normal none infinite spin;
      border: none; }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
      background: none;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 51px;
      content: "";
      width: 1px;
      z-index: 2; }
      @media (max-width: 991px) {
        #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:after {
          display: none; } }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
      font-weight: 500;
      font-size: 18px;
      line-height: 22px;
      border: none;
      border-top: 1px solid #006fa8;
      text-shadow: 0 1px #015883;
      padding: 12px 16px 14px;
      color: #fff;
      display: block !important;
      -moz-border-radius: 0;
      -webkit-border-radius: 0;
      border-radius: 0;
      -moz-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease; }
      @media (max-width: 1199px) {
        #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
          font-size: 16px; } }
      @media (max-width: 991px) {
        #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive span {
          padding: 8px 12px 10px;
          text-align: center; } }
    #center_column.col-sm-9 .col-md-3 .box-info-product .exclusive:hover {
      background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwN2FiNyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwOWFkMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
      background-size: 100%;
      background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #007ab7), color-stop(100%, #009ad0));
      background-image: -moz-linear-gradient(#007ab7, #009ad0);
      background-image: -webkit-linear-gradient(#007ab7, #009ad0);
      background-image: linear-gradient(#007ab7, #009ad0);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007ab7', endColorstr='#009ad0',GradientType=0 );
      background-position: 0 0; }

/* table_data_sheet */
.table-data-sheet {
  border-bottom: 1px solid #d6d4d4;
  width: 100%;
  margin: 0 0 20px;
  background: #fff; }
  .table-data-sheet tr {
    border-top: 1px solid #d6d4d4; }
    .table-data-sheet tr.even {
      background: #fdfdfd; }
    .table-data-sheet tr td {
      padding: 10px 20px 11px; }
      .table-data-sheet tr td:first-child {
        border-right: 1px solid #d6d4d4;
        width: 30%;
        font-weight: 700;
        color: #333; }

/* table product-discounts */
table.table-product-discounts {
  border: none;
  border-bottom: 1px solid #d6d4d4;
  border-right: 1px solid #d6d4d4;
  width: 50%;
  margin: 0 0 20px;
  background: #fff; }
  @media (max-width: 767px) {
    table.table-product-discounts {
      width: 100%; } }
  table.table-product-discounts tr th {
    background: #fbfbfb;
    color: #333;
    font-weight: 700;
    border: none;
    font-weight: 700; }
  table.table-product-discounts tr td,
  table.table-product-discounts tr th {
    border-left: 1px solid #d6d4d4;
    width: 33%;
    padding: 10px 20px 11px;
    border-top: 1px solid #d6d4d4;
    border-right: none;
    text-shadow: none;
    text-transform: none;
    font-weight: 13px;
    line-height: 18px;
    border-bottom: none; }

/* accessories  */
.accessories-block .block_description {
  display: none; }
.accessories-block .exclusive span {
  font-size: 13px;
  line-height: 18px;
  padding: 2px 8px 3px;
  text-decoration: none; }
  .accessories-block .exclusive span:focus, .accessories-block .exclusive span:active {
    text-decoration: none; }
.accessories-block .product-name {
  margin-bottom: 5px; }
  .accessories-block .product-name a {
    font-size: 15px;
    line-height: 18px;
    color: #3a3939; }
    .accessories-block .product-name a:hover {
      color: #515151; }
.accessories-block div ul li a {
  display: inline-block; }
.accessories-block div ul li.s_title_block a,
.accessories-block div ul li.s_title_block span {
  font-weight: 700; }

/* quantity_wanted */
#quantity_wanted_p input {
  width: 78px;
  height: 27px;
  padding: 0 6px;
  float: left;
  border: 1px solid #d6d4d4;
  line-height: 27px; }
#quantity_wanted_p .btn {
  float: left;
  margin-left: 3px; }
#quantity_wanted_p label {
  display: block;
  margin-bottom: 7px; }

/* availability_statut */
#availability_statut span#availability_label,
#availability_date_label {
  display: inline-block;
  width: 125px;
  font-weight: 700;
  font-size: 12px;
  text-align: right; }

#quantityAvailable {
  color: #333;
  font-size: 13px;
  line-height: 18px;
  font-weight: 700; }

#availability_value,
#last_quantities {
  color: #fff;
  font-weight: 700;
  line-height: 18px;
  display: inline-block;
  padding: 3px 8px 4px;
  margin-left: 5px; }

#last_quantities {
  background: #fe9126;
  border: 1px solid #e4752b;
  padding: 4px 8px 3px;
  position: relative;
  top: 1px;
  margin-left: 0px; }

#availability_statut,
#pQuantityAvailable {
  display: inline-block; }

#pQuantityAvailable span {
  font-weight: 700;
  color: #333; }

/* box-security */
.box-security {
  border-top: 1px solid #dfdede;
  padding: 19px 19px 6px;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZiZmJmYiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #ffffff), color-stop(100%, #fbfbfb));
  background-image: -moz-linear-gradient(#ffffff, #fbfbfb);
  background-image: -webkit-linear-gradient(#ffffff, #fbfbfb);
  background-image: linear-gradient(#ffffff, #fbfbfb);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#fbfbfb',GradientType=0 ); }

/* prices */
.content_prices {
  padding: 13px 19px; }

.discount {
  display: none; }

.our_price_display {
  font-weight: 600;
  font-size: 29px;
  line-height: 32px;
  font-family: "Open Sans", sans-serif;
  color: #333; }
  @media (max-width: 991px) {
    .our_price_display {
      font-size: 26px;
      line-height: 28px; } }
  .our_price_display .price {
    font-weight: 600;
    font-size: 29px;
    line-height: 32px;
    color: #333; }
    @media (max-width: 991px) {
      .our_price_display .price {
        font-size: 26px;
        line-height: 28px; } }

#old_price {
  padding-bottom: 15px;
  font-size: 17px;
  text-decoration: line-through;
  display: inline-block;
  font-family: "Open Sans", sans-serif;
  line-height: 23px; }

#reduction_percent,
#reduction_amount {
  margin-right: 10px;
  padding: 1px 2px;
  font-weight: 600;
  font-family: "Open Sans", sans-serif;
  font-size: 21px;
  line-height: 23px;
  color: #fff;
  background: #f13340;
  border: 1px solid #d02a2c; }
  #reduction_percent span,
  #reduction_amount span {
    display: block; }
  .hide-left-column.hide-right-column #reduction_percent, .hide-left-column.hide-right-column
  #reduction_amount {
    display: inline-block; }

/* online_only */
.pb-center-column p.online_only {
  font-weight: 700;
  font-size: 13px;
  color: #f13340;
  text-align: left; }

.buttons_bottom_block {
  clear: both;
  padding: 13px 19px 0; }
  .buttons_bottom_block #wishlist_button {
    font-weight: 700; }

/* SEND TO FRIEND (pop-in) ##################################################################### */
#send_friend_form {
  width: 555px;
  overflow: hidden; }
  @media (max-width: 767px) {
    #send_friend_form {
      width: 280px; } }
  #send_friend_form .product img {
    margin: 0 0 10px 0;
    border: 1px solid #d6d4d4; }
  #send_friend_form .product p {
    padding: 0;
    color: #333; }
    #send_friend_form .product p .product_name {
      font-size: 12px;
      color: #000; }
  #send_friend_form .form_container {
    padding: 10px 15px;
    border: 1px solid #d6d4d4;
    background: #fbfbfb; }
    #send_friend_form .form_container p.intro_form {
      padding-bottom: 6px;
      font-weight: 700;
      font-size: 13px;
      color: #333; }
    #send_friend_form .form_container p.txt_required {
      padding-bottom: 0;
      color: #666; }
    #send_friend_form .form_container .text {
      padding-bottom: 10px; }
      #send_friend_form .form_container .text label {
        display: block;
        padding: 0;
        width: 100%;
        font-size: 12px; }
      #send_friend_form .form_container .text input {
        padding: 0 5px;
        height: 22px;
        width: 100%;
        border: 1px solid base-border-color;
        font-size: 12px;
        color: #666; }
  #send_friend_form .submit {
    margin-top: 20px;
    padding-bottom: 0;
    text-align: right; }

/* PERSONNALISATION ##################################################################### */
p.infoCustomizable {
  margin-bottom: 30px; }

ul#uploadable_files,
ul#text_fields {
  list-style-type: none; }

.customizableProductsFile,
.customizableProductsText {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #d6d4d4; }

.customizationUploadLine {
  padding-bottom: 10px; }
  .customizationUploadLine label {
    display: block;
    vertical-align: top; }
  .customizationUploadLine textarea {
    width: 50%;
    border: 1px solid #d6d4d4;
    color: #777777; }

.customizationUploadBrowse img + a {
  position: relative;
  top: -51px; }

#customizedDatas {
  float: right; }

/******************************************************************
Quick View Styles
******************************************************************/
#product.content_only div.primary_block {
  margin-bottom: 0; }
  @media (max-width: 991px) {
    #product.content_only div.primary_block {
      margin-right: 0; } }
  #product.content_only div.primary_block div.pb-left-column {
    padding: 20px 20px 5px 35px;
    width: 47%; }
    @media (max-width: 479px) {
      #product.content_only div.primary_block div.pb-left-column {
        width: 100%;
        float: none; } }
    #product.content_only div.primary_block div.pb-left-column span.view_scroll_spacer {
      width: 38px;
      padding-left: 10px; }
    #product.content_only div.primary_block div.pb-left-column #thumbs_list {
      width: 392px; }
  #product.content_only div.primary_block div.pb-center-column {
    padding: 20px 20px 60px 0px;
    width: 27.5%;
    margin-bottom: 0;
    min-height: 623px;
    height: 100%; }
    @media (max-width: 991px) {
      #product.content_only div.primary_block div.pb-center-column {
        min-height: 440px; } }
    @media (max-width: 479px) {
      #product.content_only div.primary_block div.pb-center-column {
        width: 100%;
        float: none; } }
    #product.content_only div.primary_block div.pb-center-column .product_comments_block_extra {
      padding-right: 0; }
    @media (max-width: 479px) {
      #product.content_only div.primary_block div.pb-center-column .comments_advices li {
        display: block; }
      #product.content_only div.primary_block div.pb-center-column .comments_advices a.reviews {
        margin: 0;
        padding: 0;
        border: none; } }
    #product.content_only div.primary_block div.pb-center-column #ShareDiv {
      position: absolute;
      bottom: 8px; }
  #product.content_only div.primary_block div.pb-right-column {
    width: 25.5%;
    padding-right: 15px;
    padding-left: 0; }
    #product.content_only div.primary_block div.pb-right-column .box-info-product {
      border-top-width: 0px;
      border-right: none;
      border-bottom: none;
      min-height: 623px;
      height: 100%;
      -moz-border-radius: 0 4px 4px 0;
      -webkit-border-radius: 0;
      border-radius: 0 4px 4px 0;
      position: relative;
      padding-bottom: 125px; }
      @media (max-width: 991px) {
        #product.content_only div.primary_block div.pb-right-column .box-info-product {
          -moz-border-radius: 0;
          -webkit-border-radius: 0;
          border-radius: 0;
          border: 1px solid #d6d4d4; } }
      #product.content_only div.primary_block div.pb-right-column .box-info-product #add_to_cart .exclusive {
        display: block;
        width: 100%; }
        #product.content_only div.primary_block div.pb-right-column .box-info-product #add_to_cart .exclusive:before, #product.content_only div.primary_block div.pb-right-column .box-info-product #add_to_cart .exclusive:after {
          display: block; }
        #product.content_only div.primary_block div.pb-right-column .box-info-product #add_to_cart .exclusive span {
          font-size: 20px;
          text-align: center; }
          @media (max-width: 1199px) {
            #product.content_only div.primary_block div.pb-right-column .box-info-product #add_to_cart .exclusive span {
              padding: 12px 22px 14px 70px;
              font-size: 20px; } }
      #product.content_only div.primary_block div.pb-right-column .box-info-product .box-cart-bottom {
        right: 0;
        left: 0; }
    #product.content_only div.primary_block div.pb-right-column #attributes .attribute_list .form-control {
      width: 230px; }
    #product.content_only div.primary_block div.pb-right-column .product_attributes,
    #product.content_only div.primary_block div.pb-right-column .box-cart-bottom {
      -moz-box-shadow: transparent 0px 0px 0px;
      -webkit-box-shadow: transparent 0px 0px 0px;
      box-shadow: transparent 0px 0px 0px; }
    #product.content_only div.primary_block div.pb-right-column .product_attributes {
      padding-top: 0; }

.addsharethisinner .stButton .stArrow {
  display: none !important; }

@media (max-width: 1050px) and (max-width: 479px) {
  #product.content_only div.primary_block,
  #product.content_only section.primary_block {
    margin-left: 0; } }
@media (max-width: 1050px) {
  #product.content_only div.primary_block div.pb-left-column,
  #product.content_only section.primary_block div.pb-left-column {
    width: 100%;
    padding-right: 15px; }
    #product.content_only div.primary_block div.pb-left-column #image-block, #product.content_only div.primary_block div.pb-left-column #views_block,
    #product.content_only section.primary_block div.pb-left-column #image-block,
    #product.content_only section.primary_block div.pb-left-column #views_block {
      max-width: 470px;
      width: 100%;
      margin-left: auto;
      margin-right: auto; }
    #product.content_only div.primary_block div.pb-left-column #thumbs_list li,
    #product.content_only section.primary_block div.pb-left-column #thumbs_list li {
      width: 90px;
      height: 90px; }
      #product.content_only div.primary_block div.pb-left-column #thumbs_list li img,
      #product.content_only section.primary_block div.pb-left-column #thumbs_list li img {
        width: 82px;
        height: 82px; }
  #product.content_only div.primary_block div.pb-center-column,
  #product.content_only section.primary_block div.pb-center-column {
    width: 50%;
    float: left;
    padding-left: 35px; } }
  @media (max-width: 1050px) and (max-width: 479px) {
    #product.content_only div.primary_block div.pb-center-column,
    #product.content_only section.primary_block div.pb-center-column {
      width: 100%;
      float: none;
      padding-left: 15px;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box; } }
@media (max-width: 1050px) {
  #product.content_only div.primary_block div.pb-right-column,
  #product.content_only section.primary_block div.pb-right-column {
    width: 50%;
    float: left; } }
  @media (max-width: 1050px) and (max-width: 479px) {
    #product.content_only div.primary_block div.pb-right-column,
    #product.content_only section.primary_block div.pb-right-column {
      margin-top: 10px;
      width: 100%;
      float: none;
      padding-left: 15px;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box; } }
@media (max-width: 1050px) {
    #product.content_only div.primary_block div.pb-right-column .box-info-product,
    #product.content_only section.primary_block div.pb-right-column .box-info-product {
      border-top-width: 1px;
      min-height: 1px; } }
/***** IE code ****/
.ie8 .pb-left-column #image-block #view_full_size .span_link {
  background: #fff;
  border: 1px solid #d6d4d4; }
.ie8 .box-security {
  filter: none; }

/*# sourceMappingURL=product.css.map */
<?php }} ?>
