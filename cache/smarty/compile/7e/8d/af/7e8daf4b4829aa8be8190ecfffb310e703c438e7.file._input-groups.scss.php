<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_input-groups.scss" */ ?>
<?php /*%%SmartyHeaderCode:809840246554074a8950d54-72453145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e8daf4b4829aa8be8190ecfffb310e703c438e7' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_input-groups.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809840246554074a8950d54-72453145',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a898f408_96793495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a898f408_96793495')) {function content_554074a898f408_96793495($_smarty_tpl) {?>//
// Input groups
// --------------------------------------------------

// Base styles
// -------------------------
.input-group {
  position: relative; // For dropdowns
  display: table;
  border-collapse: separate; // prevent input groups from inheriting border styles from table cells when placed within a table

  // Undo padding and float of grid classes
  &.col {
    float: none;
    padding-left: 0;
    padding-right: 0;
  }

  .form-control {
    width: 100%;
    margin-bottom: 0;
  }
}

// Sizing options
//
// Remix the default form control sizing classes into new ones for easier
// manipulation.

.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn { @extend .input-lg; }
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn { @extend .input-sm; }


// Display as table-cell
// -------------------------
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;

  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
}
// Addon and addon wrapper for buttons
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle; // Match the inputs
}

// Text input groups
// -------------------------
.input-group-addon {
  padding: $padding-base-vertical $padding-base-horizontal;
  font-size: $font-size-base;
  font-weight: normal;
  line-height: 1;
  text-align: center;
  background-color: $input-group-addon-bg;
  border: 1px solid $input-group-addon-border-color;
  border-radius: $border-radius-base;

  // Sizing
  &.input-sm {
    padding: $padding-small-vertical $padding-small-horizontal;
    font-size: $font-size-small;
    border-radius: $border-radius-small;
  }
  &.input-lg {
    padding: $padding-large-vertical $padding-large-horizontal;
    font-size: $font-size-large;
    border-radius: $border-radius-large;
  }

  // Nuke default margins from checkboxes and radios to vertically center within.
  input[type="radio"],
  input[type="checkbox"] {
    margin-top: 0;
  }
}

// Reset rounded corners
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  @include border-right-radius(0);
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  @include border-left-radius(0);
}
.input-group-addon:last-child {
  border-left: 0;
}

// Button input groups
// -------------------------
.input-group-btn {
  position: relative;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
  // Jankily prevent input button groups from wrapping
  + .btn {
    margin-left: -4px;
  }
  // Bring the "active" button to the front
  &:hover,
  &:active {
    z-index: 2;
  }
}
<?php }} ?>
