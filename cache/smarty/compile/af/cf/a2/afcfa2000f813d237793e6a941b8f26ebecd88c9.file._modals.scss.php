<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_modals.scss" */ ?>
<?php /*%%SmartyHeaderCode:1214536682554074a87065e2-91012487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afcfa2000f813d237793e6a941b8f26ebecd88c9' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_modals.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214536682554074a87065e2-91012487',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8736403_81656135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8736403_81656135')) {function content_554074a8736403_81656135($_smarty_tpl) {?>//
// Modals
// --------------------------------------------------

// .modal-open      - body class for killing the scroll
// .modal           - container to scroll within
// .modal-dialog    - positioning shell for the actual modal
// .modal-content   - actual modal w/ bg and corners and shit

// Kill the scroll on the body
.modal-open {
  overflow: hidden;


  // Account for hiding of scrollbar
  
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    margin-right: 15px
  }
}

body.modal-open {
  margin-right: 15px
}

// Container that the modal scrolls within
.modal {
  display: none;
  overflow: auto;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: $zindex-modal-background;

  // When fading in the modal, animate it to slide down
  &.fade .modal-dialog {
    @include translate(0, -25%);
    @include transition-transform(0.3s ease-out);
  }
  &.in .modal-dialog { @include translate(0, 0)}
}

// Shell div to position the modal with bottom padding
.modal-dialog {
  margin-left: auto;
  margin-right: auto;
  width: auto;
  padding: 10px;
  z-index: ($zindex-modal-background + 10);
}

// Actual modal
.modal-content {
  position: relative;
  background-color: $modal-content-bg;
  border: 1px solid $modal-content-fallback-border-color; //old browsers fallback (ie8 etc)
  border: 1px solid $modal-content-border-color;
  border-radius: $border-radius-large;
  @include box-shadow(0 3px 9px rgba(0,0,0,.5));
  background-clip: padding-box;
  // Remove focus outline from opened modal
  outline: none;
}

// Modal background
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: ($zindex-modal-background - 10);
  background-color: $modal-backdrop-bg;
  // Fade for backdrop
  &.fade { @include opacity(0); }
  &.in { @include opacity(.5); }
}

// Modal header
// Top section of the modal w/ title and dismiss
.modal-header {
  padding: $modal-title-padding;
  border-bottom: 1px solid $modal-header-border-color;
  min-height: ($modal-title-padding + $modal-title-line-height);
}
// Close icon
.modal-header .close {
  margin-top: -2px;
}

// Title text within header
.modal-title {
  margin: 0;
  line-height: $modal-title-line-height;
}

// Modal body
// Where all modal content resides (sibling of .modal-header and .modal-footer)
.modal-body {
  position: relative;
  padding: $modal-inner-padding;
}

// Footer (for actions)
.modal-footer {
  margin-top: 15px;
  padding: ($modal-inner-padding - 1) $modal-inner-padding $modal-inner-padding;
  text-align: right; // right align buttons
  border-top: 1px solid $modal-footer-border-color;
  @include clearfix(); // clear it in case folks use .pull-* classes on buttons

  // Properly space out buttons
  .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0; // account for input[type="submit"] which gets the bottom margin like all other inputs
  }
  // but override that for button groups
  .btn-group .btn + .btn {
    margin-left: -1px;
  }
  // and override it for block buttons as well
  .btn-block + .btn-block {
    margin-left: 0;
  }
}

// Scale up the modal
@media screen and (min-width: $screen-tablet) {

  .modal-dialog {
    left: 50%;
    right: auto;
    width: 600px;
    padding-top: 30px;
    padding-bottom: 30px;
  }
  .modal-content {
    @include box-shadow(0 5px 15px rgba(0,0,0,.5));
  }

}
<?php }} ?>
