<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_dropdowns.scss" */ ?>
<?php /*%%SmartyHeaderCode:797693201554074a9986369-88340739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ae534a5e85d6930ea37f81769bec694ee0cf41c' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_dropdowns.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '797693201554074a9986369-88340739',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9a29799_15296700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9a29799_15296700')) {function content_554074a9a29799_15296700($_smarty_tpl) {?>//
// Dropdown menus
// --------------------------------------------------


// Dropdown arrow/caret
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top:   $caret-width-base solid $dropdown-caret-color;
  border-right: $caret-width-base solid transparent;
  border-left:  $caret-width-base solid transparent;
  // Firefox fix for https://github.com/twbs/bootstrap/issues/9538. Once fixed,
  // we can just straight up remove this.
  border-bottom: 0 dotted;
  content: "";
}

// The dropdown wrapper (div)
.dropdown {
  position: relative;
}

// Prevent the focus on the dropdown toggle when closing dropdowns
.dropdown-toggle:focus {
  outline: 0;
}

// The dropdown menu (ul)
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: $zindex-dropdown;
  display: none; // none by default, but block on "open" of the menu
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0; // override default ul
  list-style: none;
  font-size: $font-size-base;
  background-color: $dropdown-bg;
  border: 1px solid $dropdown-fallback-border; // IE8 fallback
  border: 1px solid $dropdown-border;
  border-radius: $border-radius-base;
  @include box-shadow(0 6px 12px rgba(0,0,0,.175));
  background-clip: padding-box;

  // Aligns the dropdown menu to right
  &.pull-right {
    right: 0;
    left: auto;
  }

  // Dividers (basically an hr) within the dropdown
  .divider {
    @include nav-divider($dropdown-divider-bg);
  }

  // Links within the dropdown menu
  > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: $line-height-base;
    color: $dropdown-link-color;
    white-space: nowrap; // prevent links from randomly breaking onto new lines
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    text-decoration: none;
    color: $dropdown-link-hover-color;
    background-color: $dropdown-link-hover-bg;
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: $dropdown-link-active-color;
    text-decoration: none;
    outline: 0;
    background-color: $dropdown-link-active-bg;
  }
}

// Disabled state
//
// Gray out text and ensure the hover/focus state remains gray

.dropdown-menu > .disabled > a {
  &,
  &:hover,
  &:focus {
    color: $dropdown-link-disabled-color;
  }
}
// Nuke hover/focus effects
.dropdown-menu > .disabled > a {
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none; // Remove CSS gradient
    @include reset-filter();
    cursor: not-allowed;
  }
}

// Open state for the dropdown
.open {
  // Show the menu
  > .dropdown-menu {
    display: block;
  }

  // Remove the outline when :focus is triggered
  > a {
    outline: 0;
  }
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: $font-size-small;
  line-height: $line-height-base;
  color: $dropdown-header-color;
}

// Backdrop to catch body clicks on mobile, etc.
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: $zindex-dropdown - 10;
}

// Right aligned dropdowns
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

// Allow for dropdowns to go bottom up (aka, dropup-menu)
//
// Just add .dropup after the standard .dropdown class and you're set, bro.
// TODO: abstract this so that the navbar fixed styles are not placed here?

.dropup,
.navbar-fixed-bottom .dropdown {
  // Reverse the caret
  .caret {
    // Firefox fix for https://github.com/twbs/bootstrap/issues/9538. Once this
    // gets fixed, restore `border-top: 0;`.
    border-top: 0 dotted;
    border-bottom: 4px solid $dropdown-caret-color;
    content: "";
  }
  // Different positioning for bottom up menu
  .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px;
  }
}


// Component alignment
//
// Reiterate per navbar.less and the modified component alignment there.

@media (min-width: $grid-float-breakpoint) {
  .navbar-right {
    .dropdown-menu {
      right: 0;
      left: auto;
    }
  }
}

<?php }} ?>
