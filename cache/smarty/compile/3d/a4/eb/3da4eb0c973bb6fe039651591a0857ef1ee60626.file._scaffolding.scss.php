<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:37
         compiled from "/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_scaffolding.scss" */ ?>
<?php /*%%SmartyHeaderCode:388175174554074b1959fa3-98363460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3da4eb0c973bb6fe039651591a0857ef1ee60626' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/admin/themes/default/sass/vendor/bootstrap-sass/_scaffolding.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '388175174554074b1959fa3-98363460',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074b19a0032_90148810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074b19a0032_90148810')) {function content_554074b19a0032_90148810($_smarty_tpl) {?>//
// Scaffolding
// --------------------------------------------------


// Reset the box-sizing
//
// Heads up! This reset may cause conflicts with some third-party widgets.
// For recommendations on resolving such conflicts, see
// http://getbootstrap.com/getting-started/#third-box-sizing
* {
  @include box-sizing(border-box);
}
*:before,
*:after {
  @include box-sizing(border-box);
}


// Body reset

html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}

body {
  font-family: $font-family-base;
  font-size: $font-size-base;
  line-height: $line-height-base;
  color: $text-color;
  background-color: $body-bg;
}

// Reset fonts for relevant elements
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}


// Links

a {
  color: $link-color;
  text-decoration: none;

  &:hover,
  &:focus {
    color: $link-hover-color;
    text-decoration: underline;
  }

  &:focus {
    @include tab-focus();
  }
}


// Figures
//
// We reset this here because previously Normalize had no `figure` margins. This
// ensures we don't break anyone's use of the element.

figure {
  margin: 0;
}


// Images

img {
  vertical-align: middle;
}

// Responsive images (ensure images don't scale beyond their parents)
.img-responsive {
  @include img-responsive();
}

// Rounded corners
.img-rounded {
  border-radius: $border-radius-large;
}

// Image thumbnails
//
// Heads up! This is mixin-ed into thumbnails.less for `.thumbnail`.
.img-thumbnail {
  padding: $thumbnail-padding;
  line-height: $line-height-base;
  background-color: $thumbnail-bg;
  border: 1px solid $thumbnail-border;
  border-radius: $thumbnail-border-radius;
  @include transition(all .2s ease-in-out);

  // Keep them at most 100% wide
  @include img-responsive(inline-block);
}

// Perfect circle
.img-circle {
  border-radius: 50%; // set radius in percents
}


// Horizontal rules

hr {
  margin-top:    $line-height-computed;
  margin-bottom: $line-height-computed;
  border: 0;
  border-top: 1px solid $hr-border;
}


// Only display content to screen readers
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
// Useful for "Skip to main content" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
// Credit: HTML5 Boilerplate

.sr-only-focusable {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
}
<?php }} ?>
