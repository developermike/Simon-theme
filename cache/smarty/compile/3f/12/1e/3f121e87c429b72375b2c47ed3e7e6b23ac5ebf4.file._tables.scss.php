<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_tables.scss" */ ?>
<?php /*%%SmartyHeaderCode:1491248616554074a9259ca0-19517820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f121e87c429b72375b2c47ed3e7e6b23ac5ebf4' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_tables.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1491248616554074a9259ca0-19517820',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a92f0234_38551165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a92f0234_38551165')) {function content_554074a92f0234_38551165($_smarty_tpl) {?>//
// Tables
// --------------------------------------------------


table {
  max-width: 100%;
  background-color: $table-bg;
}
th {
  text-align: left;
}


// Baseline styles

.table {
  width: 100%;
  margin-bottom: $line-height-computed;
  // Cells
  thead,
  tbody,
  tfoot {
    > tr {
      > th,
      > td {
        padding: $table-cell-padding;
        line-height: $line-height-base;
        vertical-align: top;
        border-top: 1px solid $table-border-color;
      }
    }
  }
  // Bottom align for column headings
  thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid $table-border-color;
  }
  // Remove top border from thead by default
  caption + thead,
  colgroup + thead,
  thead:first-child {
    tr:first-child {
      th, td {
        border-top: 0;
      }
    }
  }
  // Account for multiple tbody instances
  tbody + tbody {
    border-top: 2px solid $table-border-color;
  }

  // Nesting
  .table {
    background-color: $body-bg;
  }
}


// Condensed table w/ half padding

.table-condensed {
  thead,
  tbody,
  tfoot {
    > tr {
      > th,
      > td {
        padding: $table-condensed-cell-padding;
      }
    }
  }
}


// Bordered version
//
// Add borders all around the table and between all the columns.

.table-bordered {
  border: 1px solid $table-border-color;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        border: 1px solid $table-border-color;
      }
    }
  }
  > thead {
    > tr {
      > th,
      > td {
        border-bottom-width: 2px;
      }
    }
  }
}


// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody {
    > tr:nth-child(odd) {
      > td,
      > th {
        background-color: $table-bg-accent;
      }
    }
  }
}


// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody {
    > tr:hover {
      > td,
      > th {
        background-color: $table-bg-hover;
      }
    }
  }
}


// Table cell sizing
//
// Reset default table behavior

table col[class*="col-"] {
  float: none;
  display: table-column;
}
table {
  td,
  th {
    &[class*="col-"] {
      float: none;
      display: table-cell;
    }
  }
}


// Table backgrounds
//
// Exact selectors below required to override `.table-striped` and prevent
// inheritance to nested tables.

.table > thead > tr,
.table > tbody > tr,
.table > tfoot > tr {
  > td.active,
  > th.active,
  &.active > td,
  &.active > th  {
    background-color: $table-bg-active;
  }
}

// Generate the contextual variants
@include table-row-variant('success', $state-success-bg, $state-success-border);
@include table-row-variant('danger', $state-danger-bg, $state-danger-border);
@include table-row-variant('warning', $state-warning-bg, $state-warning-border);


// Responsive tables
//
// Wrap your tables in `.table-scrollable` and we'll make them mobile friendly
// by enabling horizontal scrolling. Only applies <768px. Everything above that
// will display normally.

@media (max-width: $screen-sm) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    overflow-x: scroll;
    border: 1px solid $table-border-color;

    // Tighten up spacing and give a background color
    > .table {
      margin-bottom: 0;
      background-color: #fff;

      // Ensure the content doesn't wrap
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th,
          > td {
            white-space: nowrap;
          }
        }
      }
    }

    // Special overrides for the bordered tables
    > .table-bordered {
      border: 0;

      // Nuke the appropriate borders so that the parent can handle them
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th:first-child,
          > td:first-child {
            border-left: 0;
          }
          > th:last-child,
          > td:last-child {
            border-right: 0;
          }
        }
        > tr:last-child {
          > th,
          > td {
            border-bottom: 0;
          }
        }
      }
    }
  }
}
<?php }} ?>
