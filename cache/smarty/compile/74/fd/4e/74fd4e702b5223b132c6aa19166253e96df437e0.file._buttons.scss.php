<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_buttons.scss" */ ?>
<?php /*%%SmartyHeaderCode:1109518561554074a9840122-90574492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74fd4e702b5223b132c6aa19166253e96df437e0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_buttons.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109518561554074a9840122-90574492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a98baae1_67358962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a98baae1_67358962')) {function content_554074a98baae1_67358962($_smarty_tpl) {?>//
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

// Core styles
.btn {
  display: inline-block;
  padding: $padding-base-vertical $padding-base-horizontal;
  margin-bottom: 0; // For input.btn
  font-size: $font-size-base;
  font-weight: $btn-font-weight;
  line-height: $line-height-base;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: $border-radius-base;
  white-space: nowrap;
  @include user-select(none);

  &:focus {
    @include tab-focus();
  }

  &:hover,
  &:focus {
    color: $btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    @include box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
    pointer-events: none; // Future-proof disabling of clicks
    @include opacity(.65);
    @include box-shadow(none);
  }

}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  @include button-variant($btn-default-color, $btn-default-bg, $btn-default-border);
}
.btn-primary {
  @include button-variant($btn-primary-color, $btn-primary-bg, $btn-primary-border);
}
// Warning appears as orange
.btn-warning {
  @include button-variant($btn-warning-color, $btn-warning-bg, $btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  @include button-variant($btn-danger-color, $btn-danger-bg, $btn-danger-border);
}
// Success appears as green
.btn-success {
  @include button-variant($btn-success-color, $btn-success-bg, $btn-success-border);
}
// Info appears as blue-green
.btn-info {
  @include button-variant($btn-info-color, $btn-info-bg, $btn-info-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: $link-color;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;

  &,
  &:active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    @include box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: $link-hover-color;
    text-decoration: underline;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: $btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  @include button-size($padding-large-vertical, $padding-large-horizontal, $font-size-large, $line-height-large, $border-radius-large);
}
.btn-sm,
.btn-xs {
  // line-height: ensure proper height of button next to small input
  @include button-size($padding-small-vertical, $padding-small-horizontal, $font-size-small, $line-height-small, $border-radius-small);
}
.btn-xs {
  padding: 1px 5px;
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type="submit"],
input[type="reset"],
input[type="button"] {
  &.btn-block {
    width: 100%;
  }
}
<?php }} ?>
