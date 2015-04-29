<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_panels.scss" */ ?>
<?php /*%%SmartyHeaderCode:1704669449554074a9219608-50767337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'decad06ba043e9157caa213ae4c71bc73a09b13d' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_panels.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704669449554074a9219608-50767337',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9257032_76975158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9257032_76975158')) {function content_554074a9257032_76975158($_smarty_tpl) {?>//
// Panels
// --------------------------------------------------


// Base class
.panel {
  margin-bottom: $line-height-computed;
  background-color: $panel-bg;
  border: 1px solid transparent;
  border-radius: $panel-border-radius;
  @include box-shadow(0 1px 1px rgba(0,0,0,.05));
}

// Panel contents
.panel-body {
  padding: 15px;
  @include clearfix();
}


// List groups in panels
//
// By default, space out list group content from panel headings to account for
// any kind of custom content between the two.

.panel {
  > .list-group {
    margin-bottom: 0;

    .list-group-item {
      border-width: 1px 0;

      // Remove border radius for top one
      &:first-child {
        @include border-top-radius(0);
      }
      // But keep it for the last one
      &:last-child {
        border-bottom: 0;
      }
    }
  }
}
// Collapse space between when there's no additional content.
.panel-heading + .list-group {
  .list-group-item:first-child {
    border-top-width: 0;
  }
}


// Tables in panels
//
// Place a non-bordered `.table` within a panel (not within a `.panel-body`) and
// watch it go full width.

.panel {
  > .table {
    margin-bottom: 0;
  }
  > .panel-body + .table {
    border-top: 1px solid $table-border-color;
  }
}


// Optional heading
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  @include border-top-radius($panel-border-radius - 1);
}

// Within heading, strip any `h*` tag of it's default margins for spacing.
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: ceil(($font-size-base * 1.125));
  > a {
    color: inherit;
  }
}

// Optional footer (stays gray in every modifier class)
.panel-footer {
  padding: 10px 15px;
  background-color: $panel-footer-bg;
  border-top: 1px solid $panel-inner-border;
  @include border-bottom-radius($panel-border-radius - 1);
}


// Collapsable panels (aka, accordion)
//
// Wrap a series of panels in `.panel-group` to turn them into an accordion with
// the help of our collapse JavaScript plugin.

.panel-group {
  // Tighten up margin so it's only between panels
  .panel {
    margin-bottom: 0;
    border-radius: $panel-border-radius;
    overflow: hidden; // crop contents when collapsed
    + .panel {
      margin-top: 5px;
    }
  }

  .panel-heading {
    border-bottom: 0;
    + .panel-collapse .panel-body {
      border-top: 1px solid $panel-inner-border;
    }
  }
  .panel-footer {
    border-top: 0;
    + .panel-collapse .panel-body {
      border-bottom: 1px solid $panel-inner-border;
    }
  }

  // New subcomponent for wrapping collapsable content for proper animations
  .panel-collapse {

  }
}


// Contextual variations
.panel-default {
  @include panel-variant($panel-default-border, $panel-default-text, $panel-default-heading-bg, $panel-default-border);
}
.panel-primary {
  @include panel-variant($panel-primary-border, $panel-primary-text, $panel-primary-heading-bg, $panel-primary-border);
}
.panel-success {
  @include panel-variant($panel-success-border, $panel-success-text, $panel-success-heading-bg, $panel-success-border);
}
.panel-warning {
  @include panel-variant($panel-warning-border, $panel-warning-text, $panel-warning-heading-bg, $panel-warning-border);
}
.panel-danger {
  @include panel-variant($panel-danger-border, $panel-danger-text, $panel-danger-heading-bg, $panel-danger-border);
}
.panel-info {
  @include panel-variant($panel-info-border, $panel-info-text, $panel-info-heading-bg, $panel-info-border);
}
<?php }} ?>
