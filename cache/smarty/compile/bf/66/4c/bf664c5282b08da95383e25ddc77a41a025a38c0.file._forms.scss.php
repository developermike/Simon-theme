<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:28
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_forms.scss" */ ?>
<?php /*%%SmartyHeaderCode:1750550972554074a88cbe03-68311030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf664c5282b08da95383e25ddc77a41a025a38c0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_forms.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750550972554074a88cbe03-68311030',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a8916b23_55649892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a8916b23_55649892')) {function content_554074a8916b23_55649892($_smarty_tpl) {?>//
// Forms
// --------------------------------------------------


// Normalize non-controls
//
// Restyle and baseline non-control form elements.

fieldset {
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: $line-height-computed;
  font-size: ($font-size-base * 1.5);
  line-height: inherit;
  color: $legend-color;
  border: 0;
  border-bottom: 1px solid $legend-border-color;
}

label {
  display: inline-block;
  margin-bottom: 5px;
  font-weight: bold;
}


// Normalize form controls

// Override content-box in Normalize (* isn't specific enough)
input[type="search"] {
  @include box-sizing(border-box);
}

// Position radios and checkboxes better
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9; /* IE8-9 */
  line-height: normal;
}

// Set the height of select and file controls to match text inputs
input[type="file"] {
  display: block;
}

// Make multiple select elements height not fixed
select[multiple],
select[size] {
  height: auto;
}

// Fix optgroup Firefox bug per https://github.com/twbs/bootstrap/issues/7611
select optgroup {
  font-size: inherit;
  font-style: inherit;
  font-family: inherit;
}

// Focus for select, file, radio, and checkbox
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  @include tab-focus();
}

// Fix for Chrome number input
// Setting certain font-sizes causes the `I` bar to appear on hover of the bottom increment button.
// See https://github.com/twbs/bootstrap/issues/8350 for more.
input[type="number"] {
  &::-webkit-outer-spin-button,
  &::-webkit-inner-spin-button {
    height: auto;
  }
}


// Placeholder
//
// Placeholder text gets special styles because when browsers invalidate entire
// lines if it doesn't understand a selector/
.form-control {
  @include placeholder();
}


// Common form controls
//
// Shared size and type resets for form controls. Apply `.form-control` to any
// of the following form controls:
//
// select
// textarea
// input[type="text"]
// input[type="password"]
// input[type="datetime"]
// input[type="datetime-local"]
// input[type="date"]
// input[type="month"]
// input[type="time"]
// input[type="week"]
// input[type="number"]
// input[type="email"]
// input[type="url"]
// input[type="search"]
// input[type="tel"]
// input[type="color"]

.form-control {
  display: block;
  width: 100%;
  height: $input-height-base; // Make inputs at least the height of their button counterpart (base line-height + padding + border)
  padding: $padding-base-vertical $padding-base-horizontal;
  font-size: $font-size-base;
  line-height: $line-height-base;
  color: $input-color;
  vertical-align: middle;
  background-color: $input-bg;
  border: 1px solid $input-border;
  border-radius: $input-border-radius;
  @include box-shadow(inset 0 1px 1px rgba(0,0,0,.075));
  @include transition(border-color ease-in-out .15s, box-shadow ease-in-out .15s);

  // Customize the `:focus` state to imitate native WebKit styles.
  @include form-control-focus();

  // Disabled and read-only inputs
  // Note: HTML5 says that controls under a fieldset > legend:first-child won't
  // be disabled if the fieldset is disabled. Due to implementation difficulty,
  // we don't honor that edge case; we style them as disabled anyway.
  &[disabled],
  &[readonly],
  fieldset[disabled] & {
    cursor: not-allowed;
    background-color: $input-bg-disabled;
  }
}

// Reset height for `textarea`s
textarea.form-control {
  height: auto;
}


// Form groups
//
// Designed to help with the organization and spacing of vertical forms. For
// horizontal forms, use the predefined grid classes.

.form-group {
  margin-bottom: 15px;
}


// Checkboxes and radios
//
// Indent the labels to position radios/checkboxes as hanging controls.

.radio,
.checkbox {
  display: block;
  min-height: $line-height-computed; // clear the floating input if there is no label text
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 20px;
  vertical-align: middle;
  label {
    display: inline;
    margin-bottom: 0;
    font-weight: normal;
    cursor: pointer;
  }
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  float: left;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px; // Move up sibling radios or checkboxes for tighter spacing
}

// Radios and checkboxes on same line
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  vertical-align: middle;
  font-weight: normal;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px; // space out consecutive inline controls
}

// Apply same disabled cursor tweak as for inputs
//
// Note: Neither radios nor checkboxes can be readonly.
input[type="radio"],
input[type="checkbox"],
.radio,
.radio-inline,
.checkbox,
.checkbox-inline {
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
  }
}

// Form control sizing

@include input-size('.input-sm', $input-height-small, $padding-small-vertical, $padding-small-horizontal, $font-size-small, $line-height-small, $border-radius-small);

@include input-size('.input-lg', $input-height-large, $padding-large-vertical, $padding-large-horizontal, $font-size-large, $line-height-large, $border-radius-large);


// Form control feedback states
//
// Apply contextual and semantic states to individual form controls.

// Warning
.has-warning {
  @include form-control-validation($state-warning-text, $state-warning-text, $state-warning-bg);
}
// Error
.has-error {
  @include form-control-validation($state-danger-text, $state-danger-text, $state-danger-bg);
}
// Success
.has-success {
  @include form-control-validation($state-success-text, $state-success-text, $state-success-bg);
}


// Static form control text
//
// Apply class to a `p` element to make any string of text align with labels in
// a horizontal form layout.

.form-control-static {
  margin-bottom: 0; // Remove default margin from `p`
  padding-top: ($padding-base-vertical + 1);
}


// Help text
//
// Apply to any element you wish to create light text for placement immediately
// below a form control. Use for general help, formatting, or instructional text.

.help-block {
  display: block; // account for any element using help-block
  margin-top: 5px;
  margin-bottom: 10px;
  color: lighten($text-color, 25%); // lighten the text some for contrast
}



// Inline forms
//
// Make forms appear inline(-block) by adding the `.form-inline` class. Inline
// forms begin stacked on extra small (mobile) devices and then go inline when
// viewports reach <768px.
//
// Requires wrapping inputs and labels with `.form-group` for proper display of
// default HTML form controls and our custom form controls (e.g., input groups).
//
// Heads up! This is mixin-ed into `.navbar-form` in navbars.less.

.form-inline {

  // Kick in the inline
  @media (min-width: $screen-tablet) {
    // Inline-block all the things for "inline"
    .form-group  {
      display: inline-block;
      margin-bottom: 0;
      vertical-align: middle;
    }

    // In navbar-form, allow folks to *not* use `.form-group`
    .form-control {
      display: inline-block;
    }

    // Remove default margin on radios/checkboxes that were used for stacking, and
    // then undo the floating of radios and checkboxes to match (which also avoids
    // a bug in WebKit: https://github.com/twbs/bootstrap/issues/1969).
    .radio,
    .checkbox {
      display: inline-block;
      margin-top: 0;
      margin-bottom: 0;
      padding-left: 0;
    }
    .radio input[type="radio"],
    .checkbox input[type="checkbox"] {
      float: none;
      margin-left: 0;
    }
  }
}


// Horizontal forms
//
// Horizontal forms are built on grid classes and allow you to create forms with
// labels on the left and inputs on the right.

.form-horizontal {

  // Consistent vertical alignment of labels, radios, and checkboxes
  .control-label,
  .radio,
  .checkbox,
  .radio-inline,
  .checkbox-inline {
    margin-top: 0;
    margin-bottom: 0;
    padding-top: ($padding-base-vertical + 1); // Default padding plus a border
  }

  // Make form groups behave like rows
  .form-group {
    @include make-row();
  }

  // Only right align form labels here when the columns stop stacking
  @media (min-width: $screen-tablet) {
    .control-label {
      text-align: right;
    }
  }
}
<?php }} ?>
