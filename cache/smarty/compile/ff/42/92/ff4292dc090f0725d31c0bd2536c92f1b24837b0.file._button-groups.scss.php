<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_button-groups.scss" */ ?>
<?php /*%%SmartyHeaderCode:162212183554074a99f4ab4-69005516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4292dc090f0725d31c0bd2536c92f1b24837b0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_button-groups.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162212183554074a99f4ab4-69005516',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9b970e5_77647957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9b970e5_77647957')) {function content_554074a9b970e5_77647957($_smarty_tpl) {?>//
// Button groups
// --------------------------------------------------

// Button carets
//
// Match the button text color to the arrow/caret for indicating dropdown-ness.

.caret {
  .btn-default & {
    border-top-color: $btn-default-color;
  }
  .btn-primary &,
  .btn-success &,
  .btn-warning &,
  .btn-danger &,
  .btn-info & {
    border-top-color: #fff;
  }
}
.dropup {
  & .btn-default .caret {
    border-bottom-color: $btn-default-color;
  }
  .btn-primary,
  .btn-success,
  .btn-warning,
  .btn-danger,
  .btn-info {
   .caret {
      border-bottom-color: #fff;
    }
  }
}

// Make the div behave like a button
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle; // match .btn alignment given font-size hack above
  > .btn {
    position: relative;
    float: left;
    // Bring the "active" button to the front
    &:hover,
    &:focus,
    &:active,
    &.active {
      z-index: 2;
    }
    &:focus {
      // Remove focus outline when dropdown JS adds it after closing the menu
      outline: none;
    }
  }
}

// Prevent double borders when buttons are next to each other
.btn-group {
  .btn + .btn,
  .btn + .btn-group,
  .btn-group + .btn,
  .btn-group + .btn-group {
    margin-left: -1px;
  }
}

// Optional: Group multiple button groups together for a toolbar
.btn-toolbar {
  @include clearfix();

  .btn-group {
    float: left;
  }
  // Space out series of button groups
  > .btn,
  > .btn-group {
    + .btn,
    + .btn-group {
      margin-left: 5px;
    }
  }
}

.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}

// Set corners individual because sometimes a single button can be in a .btn-group and we need :first-child and :last-child to both match
.btn-group > .btn:first-child {
  margin-left: 0;
  &:not(:last-child):not(.dropdown-toggle) {
    @include border-right-radius(0);
  }
}
// Need .dropdown-toggle since :last-child doesn't apply given a .dropdown-menu immediately after it
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  @include border-left-radius(0);
}

// Custom edits for including btn-groups within btn-groups (useful for including dropdown buttons within a btn-group)
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    @include border-right-radius(0);
  }
}
.btn-group > .btn-group:last-child > .btn:first-child {
  @include border-left-radius(0);
}

// On active and open, don't show outline
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}


// Sizing
//
// Remix the default button sizing classes into new ones for easier manipulation.

.btn-group-xs > .btn { @extend .btn-xs; }
.btn-group-sm > .btn { @extend .btn-sm; }
.btn-group-lg > .btn { @extend .btn-lg; }


// Split button dropdowns
// ----------------------

// Give the line between buttons some depth
.btn-group > .btn + .dropdown-toggle {
  padding-left: 8px;
  padding-right: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-left: 12px;
  padding-right: 12px;
}

// The clickable button for toggling the menu
// Remove the gradient and set the same inset shadow as the :active state
.btn-group.open .dropdown-toggle {
  @include box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
}


// Reposition the caret
.btn .caret {
  margin-left: 0;
}
// Carets in other button sizes
.btn-lg .caret {
  border-width: $caret-width-large $caret-width-large 0;
  border-bottom-width: 0;
}
// Upside down carets for .dropup
.dropup .btn-lg .caret {
  border-width: 0 $caret-width-large $caret-width-large;
}


// Vertical button groups
// ----------------------

.btn-group-vertical {
  > .btn,
  > .btn-group {
    display: block;
    float: none;
    width: 100%;
    max-width: 100%;
  }

  // Clear floats so dropdown menus can be properly placed
  > .btn-group {
    @include clearfix();
    > .btn {
      float: none;
    }
  }

  > .btn + .btn,
  > .btn + .btn-group,
  > .btn-group + .btn,
  > .btn-group + .btn-group {
    margin-top: -1px;
    margin-left: 0;
  }
}

.btn-group-vertical > .btn {
  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
  &:first-child:not(:last-child) {
    border-top-right-radius: $border-radius-base;
    @include border-bottom-radius(0);
  }
  &:last-child:not(:first-child) {
    border-bottom-left-radius: $border-radius-base;
    @include border-top-radius(0);
  }
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child {
  > .btn:last-child,
  > .dropdown-toggle {
    @include border-bottom-radius(0);
  }
}
.btn-group-vertical > .btn-group:last-child > .btn:first-child {
  @include border-top-radius(0);
}



// Justified button groups
// ----------------------

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
  .btn {
    float: none;
    display: table-cell;
    width: 1%;
  }
}


// Checkbox and radio options
[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  display: none;
}
<?php }} ?>