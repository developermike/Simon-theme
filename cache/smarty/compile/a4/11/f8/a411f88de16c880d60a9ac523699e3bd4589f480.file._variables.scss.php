<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:29
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_variables.scss" */ ?>
<?php /*%%SmartyHeaderCode:2096248941554074a98eb2a6-21342651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a411f88de16c880d60a9ac523699e3bd4589f480' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/bootstrap_lib/_variables.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096248941554074a98eb2a6-21342651',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074a9904320_10852765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074a9904320_10852765')) {function content_554074a9904320_10852765($_smarty_tpl) {?>//
// Variables
// --------------------------------------------------


// Global values
// --------------------------------------------------

// Grays
// -------------------------

$gray-darker:            lighten(#000, 13.5%) !default; // #222
$gray-dark:              lighten(#000, 20%) !default;   // #333
$gray:                   lighten(#000, 33.5%) !default; // #555
$gray-light:             lighten(#000, 60%) !default;   // #999
$gray-lighter:           lighten(#000, 93.5%) !default; // #eee

// Brand colors
// -------------------------

$brand-primary:         #428bca !default;
$brand-success:         #46a74e !default;
$brand-warning:         #f0ad4e !default;
$brand-danger:          #d9534f !default;
$brand-info:            #5192f3 !default;

// Scaffolding
// -------------------------

$body-bg:               #fff !default;
$text-color:            #777777 !default;

// Links
// -------------------------

$link-color:            #777 !default;
$link-hover-color:      darken($link-color, 15%) !default;

// Typography
// -------------------------

$font-family-sans-serif:  Arial, Helvetica, sans-serif !default;
$font-family-serif:       Georgia, "Times New Roman", Times, serif !default;
$font-family-monospace:   Monaco, Menlo, Consolas, "Courier New", monospace !default;
$font-family-base:        $font-family-sans-serif !default;

$font-size-base:          13px !default;
$font-size-large:         ceil($font-size-base * 1.25) !default; // ~18px
$font-size-small:         ceil($font-size-base * 0.85) !default; // ~12px

$line-height-base:        1.428571428; // 20/14
$line-height-computed:    floor($font-size-base * $line-height-base) !default; // ~20px

$headings-font-family:    $font-family-base !default;
$headings-font-weight:    500 !default;
$headings-line-height:    1.1 !default;

// Iconography
// -------------------------

$icon-font-path:          "../fonts/" !default;
$icon-font-name:          "glyphicons-halflings-regular" !default;


// Components
// -------------------------
// Based on 14px font-size and 1.428 line-height (~20px to start)

$padding-base-vertical:          6px !default;
$padding-base-horizontal:        12px !default;

$padding-large-vertical:         10px !default;
$padding-large-horizontal:       16px !default;

$padding-small-vertical:         5px !default;
$padding-small-horizontal:       10px !default;

$line-height-large:              1.33 !default;
$line-height-small:              1.5 !default;

$border-radius-base:             0px !default;
$border-radius-large:            6px !default;
$border-radius-small:            3px !default;

$component-active-bg:            $brand-primary !default;

$caret-width-base:               4px !default;
$caret-width-large:              5px !default;

// Tables
// -------------------------

$table-cell-padding:                 9px 8px 11px 18px !default;
$table-condensed-cell-padding:       5px !default;

$table-bg:                           transparent !default; // overall background-color
$table-bg-accent:                    #f9f9f9 !default; // for striping
$table-bg-hover:                     #f5f5f5 !default;
$table-bg-active:                    $table-bg-hover !default;

$table-border-color:                 #d6d4d4 !default; // table and cell border


// Buttons
// -------------------------

$btn-font-weight:                normal !default;

$btn-default-color:              #333 !default;
$btn-default-bg:                 #fff !default;
$btn-default-border:             #ccc !default;

$btn-primary-color:              #fff !default;
$btn-primary-bg:                 $brand-primary !default;
$btn-primary-border:             darken($btn-primary-bg, 5%) !default;

$btn-success-color:              #fff !default;
$btn-success-bg:                 $brand-success !default;
$btn-success-border:             darken($btn-success-bg, 5%) !default;

$btn-warning-color:              #fff !default;
$btn-warning-bg:                 $brand-warning !default;
$btn-warning-border:             darken($btn-warning-bg, 5%) !default;

$btn-danger-color:               #fff !default;
$btn-danger-bg:                  $brand-danger !default;
$btn-danger-border:              darken($btn-danger-bg, 5%) !default;

$btn-info-color:                 #fff !default;
$btn-info-bg:                    $brand-info !default;
$btn-info-border:                darken($btn-info-bg, 5%) !default;

$btn-link-disabled-color:        $gray-light !default;


// Forms
// -------------------------

$input-bg:                       #fff !default;
$input-bg-disabled:              $gray-lighter !default;

$input-color:                    #9c9b9b !default;
$input-border:                   #d6d4d4 !default;
$input-border-radius:            $border-radius-base !default;
$input-border-focus:             #66afe9 !default;

$input-color-placeholder:        $gray-light !default;

$input-height-base:              ($line-height-computed + ($padding-base-vertical * 2) + 2) !default;
$input-height-large:             (floor($font-size-large * $line-height-large) + ($padding-large-vertical * 2) + 2) !default;
$input-height-small:             (floor($font-size-small * $line-height-small) + ($padding-small-vertical * 2) + 2) !default;

$legend-color:                   $gray-dark !default;
$legend-border-color:            #e5e5e5 !default;

$input-group-addon-bg:           $gray-lighter !default;
$input-group-addon-border-color: $input-border !default;


// Dropdowns
// -------------------------

$dropdown-bg:                    #fff !default;
$dropdown-border:                rgba(0,0,0,.15) !default;
$dropdown-fallback-border:       #ccc !default;
$dropdown-divider-bg:            #e5e5e5 !default;

$dropdown-link-active-color:     #fff !default;
$dropdown-link-active-bg:        $component-active-bg !default;

$dropdown-link-color:            $gray-dark !default;
$dropdown-link-hover-color:      #fff !default;
$dropdown-link-hover-bg:         $dropdown-link-active-bg !default;

$dropdown-link-disabled-color:   $gray-light !default;

$dropdown-header-color:          $gray-light !default;

$dropdown-caret-color:           #000 !default;


// COMPONENT VARIABLES
// --------------------------------------------------


// Z-index master list
// -------------------------
// Used for a bird's eye view of components dependent on the z-axis
// Try to avoid customizing these :)

$zindex-navbar:            1000 !default;
$zindex-dropdown:          1000 !default;
$zindex-popover:           1010 !default;
$zindex-tooltip:           1030 !default;
$zindex-navbar-fixed:      1030 !default;
$zindex-modal-background:  1040 !default;
$zindex-modal:             1050 !default;

// Media queries breakpoints
// --------------------------------------------------

// Extra small screen / phone
$screen-xs:                  480px !default;
$screen-phone:               $screen-xs !default;

// Small screen / tablet
$screen-sm:                  768px !default;
$screen-tablet:              $screen-sm !default;

// Medium screen / desktop
$screen-md:                  992px !default;
$screen-desktop:             $screen-md !default;

// Large screen / wide desktop
$screen-lg:                  1200px !default;
$screen-lg-desktop:          $screen-lg !default;

// So media queries don't overlap when required, provide a maximum
$screen-xs-max:              ($screen-sm - 1) !default;
$screen-sm-max:              ($screen-md - 1) !default;
$screen-md-max:              ($screen-lg - 1) !default;


// Grid system
// --------------------------------------------------

// Number of columns in the grid system
$grid-columns:              12 !default;
// Padding, to be divided by two and applied to the left and right of all columns
$grid-gutter-width:         30px !default;
// Point at which the navbar stops collapsing
$grid-float-breakpoint:     $screen-tablet !default;


// Navbar
// -------------------------

// Basics of a navbar
$navbar-height:                    50px !default;
$navbar-margin-bottom:             $line-height-computed !default;
$navbar-default-color:             #777 !default;
$navbar-default-bg:                #f8f8f8 !default;
$navbar-default-border:            darken($navbar-default-bg, 6.5%) !default;
$navbar-border-radius:             $border-radius-base !default;
$navbar-padding-horizontal:        floor($grid-gutter-width / 2) !default;
$navbar-padding-vertical:          (($navbar-height - $line-height-computed) / 2) !default;

// Navbar links
$navbar-default-link-color:                #777 !default;
$navbar-default-link-hover-color:          #333 !default;
$navbar-default-link-hover-bg:             transparent !default;
$navbar-default-link-active-color:         #555 !default;
$navbar-default-link-active-bg:            darken($navbar-default-bg, 6.5%) !default;
$navbar-default-link-disabled-color:       #ccc !default;
$navbar-default-link-disabled-bg:          transparent !default;

// Navbar brand label
$navbar-default-brand-color:               $navbar-default-link-color !default;
$navbar-default-brand-hover-color:         darken($navbar-default-link-color, 10%) !default;
$navbar-default-brand-hover-bg:            transparent !default;

// Navbar toggle
$navbar-default-toggle-hover-bg:           #ddd !default;
$navbar-default-toggle-icon-bar-bg:        #ccc !default;
$navbar-default-toggle-border-color:       #ddd !default;


// Inverted navbar
//
// Reset inverted navbar basics
$navbar-inverse-color:                      $gray-light !default;
$navbar-inverse-bg:                         #222 !default;
$navbar-inverse-border:                     darken($navbar-inverse-bg, 10%) !default;

// Inverted navbar links
$navbar-inverse-link-color:                 $gray-light !default;
$navbar-inverse-link-hover-color:           #fff !default;
$navbar-inverse-link-hover-bg:              transparent !default;
$navbar-inverse-link-active-color:          $navbar-inverse-link-hover-color !default;
$navbar-inverse-link-active-bg:             darken($navbar-inverse-bg, 10%) !default;
$navbar-inverse-link-disabled-color:        #444 !default;
$navbar-inverse-link-disabled-bg:           transparent !default;

// Inverted navbar brand label
$navbar-inverse-brand-color:                $navbar-inverse-link-color !default;
$navbar-inverse-brand-hover-color:          #fff !default;
$navbar-inverse-brand-hover-bg:             transparent !default;

// Inverted navbar search
// Normal navbar needs no special styles or vars
$navbar-inverse-search-bg:                  lighten($navbar-inverse-bg, 25%) !default;
$navbar-inverse-search-bg-focus:            #fff !default;
$navbar-inverse-search-border:              $navbar-inverse-bg !default;
$navbar-inverse-search-placeholder-color:   #ccc !default;

// Inverted navbar toggle
$navbar-inverse-toggle-hover-bg:            #333 !default;
$navbar-inverse-toggle-icon-bar-bg:         #fff !default;
$navbar-inverse-toggle-border-color:        #333 !default;


// Navs
// -------------------------

$nav-link-padding:                          10px 15px !default;
$nav-link-hover-bg:                         $gray-lighter !default;

$nav-disabled-link-color:                   $gray-light !default;
$nav-disabled-link-hover-color:             $gray-light !default;

$nav-open-link-hover-color:                 #fff !default;
$nav-open-caret-border-color:               #fff !default;

// Tabs
$nav-tabs-border-color:                     #ddd !default;

$nav-tabs-link-hover-border-color:          $gray-lighter !default;

$nav-tabs-active-link-hover-bg:             $body-bg !default;
$nav-tabs-active-link-hover-color:          $gray !default;
$nav-tabs-active-link-hover-border-color:   #ddd !default;

$nav-tabs-justified-link-border-color:            #ddd !default;
$nav-tabs-justified-active-link-border-color:     $body-bg !default;

// Pills
$nav-pills-active-link-hover-bg:            $component-active-bg !default;
$nav-pills-active-link-hover-color:         #fff !default;


// Pagination
// -------------------------

$pagination-bg:                        #fff !default;
$pagination-border:                    #ddd !default;

$pagination-hover-bg:                  $gray-lighter !default;

$pagination-active-bg:                 $brand-primary !default;
$pagination-active-color:              #fff !default;

$pagination-disabled-color:            $gray-light !default;


// Pager
// -------------------------

$pager-border-radius:                  15px !default;
$pager-disabled-color:                 $gray-light !default;


// Jumbotron
// -------------------------

$jumbotron-padding:              30px !default;
$jumbotron-color:                inherit !default;
$jumbotron-bg:                   $gray-lighter !default;

$jumbotron-heading-color:        inherit !default;


// Form states and alerts
// -------------------------

$state-warning-text:             #fff !default;
$state-warning-bg:               #fe9126 !default;
$state-warning-border:           #e4752b !default;

$state-danger-text:              #fff !default;
$state-danger-bg:                #f3515c !default;
$state-danger-border:            #d4323d !default;

$state-success-text:             #fff !default;
$state-success-bg:               #55c65e !default;
$state-success-border:           #48b151 !default;

$state-info-text:                #fff !default;
$state-info-bg:                  #5192f3 !default;
$state-info-border:              #4b80c3 !default;


// Tooltips
// -------------------------
$tooltip-max-width:           200px !default;
$tooltip-color:               #fff !default;
$tooltip-bg:                  #000 !default;

$tooltip-arrow-width:         5px !default;
$tooltip-arrow-color:         $tooltip-bg !default;


// Popovers
// -------------------------
$popover-bg:                          #fff !default;
$popover-max-width:                   276px !default;
$popover-border-color:                rgba(0,0,0,.2) !default;
$popover-fallback-border-color:       #ccc !default;

$popover-title-bg:                    darken($popover-bg, 3%) !default;

$popover-arrow-width:                 10px !default;
$popover-arrow-color:                 #fff !default;

$popover-arrow-outer-width:           ($popover-arrow-width + 1) !default;
$popover-arrow-outer-color:           rgba(0,0,0,.25) !default;
$popover-arrow-outer-fallback-color:  #999 !default;


// Labels
// -------------------------

$label-default-bg:            $gray-light !default;
$label-primary-bg:            $brand-primary !default;
$label-success-bg:            $state-success-bg !default;
$label-info-bg:               $brand-info !default;
$label-warning-bg:            $state-warning-bg !default;
$label-danger-bg:             $state-danger-bg !default;

$label-color:                 #fff !default;
$label-link-hover-color:      #fff !default;
$label-success-border:        #36943e !default;
$label-warning-border:        $state-warning-border !default;
$label-info-border:        	  $state-info-border !default;
$label-danger-border:         $state-danger-border !default;

// Modals
// -------------------------
$modal-inner-padding:         20px !default;

$modal-title-padding:         15px !default;
$modal-title-line-height:     $line-height-base !default;

$modal-content-bg:                             #fff !default;
$modal-content-border-color:                   rgba(0,0,0,.2) !default;
$modal-content-fallback-border-color:          #999 !default;

$modal-backdrop-bg:           #000 !default;
$modal-header-border-color:   #e5e5e5 !default;
$modal-footer-border-color:   $modal-header-border-color !default;


// Alerts
// -------------------------
$alert-padding:               15px !default;
$alert-border-radius:         $border-radius-base !default;
$alert-link-font-weight:      bold !default;

$alert-success-bg:            $state-success-bg !default;
$alert-success-text:          $state-success-text !default;
$alert-success-border:        $state-success-border !default;

$alert-info-bg:               $state-info-bg !default;
$alert-info-text:             $state-info-text !default;
$alert-info-border:           $state-info-border !default;

$alert-warning-bg:            $state-warning-bg !default;
$alert-warning-text:          $state-warning-text !default;
$alert-warning-border:        $state-warning-border !default;

$alert-danger-bg:             $state-danger-bg !default;
$alert-danger-text:           $state-danger-text !default;
$alert-danger-border:         $state-danger-border !default;


// Progress bars
// -------------------------
$progress-bg:                 #f5f5f5 !default;
$progress-bar-color:          #fff !default;

$progress-bar-bg:             $brand-primary !default;
$progress-bar-success-bg:     $brand-success !default;
$progress-bar-warning-bg:     $brand-warning !default;
$progress-bar-danger-bg:      $brand-danger !default;
$progress-bar-info-bg:        $brand-info !default;


// List group
// -------------------------
$list-group-bg:               #fff !default;
$list-group-border:           #ddd !default;
$list-group-border-radius:    $border-radius-base !default;

$list-group-hover-bg:         #f5f5f5 !default;
$list-group-active-color:     #fff !default;
$list-group-active-bg:        $component-active-bg !default;
$list-group-active-border:    $list-group-active-bg !default;

$list-group-link-color:          #555 !default;
$list-group-link-heading-color:  #333 !default;


// Panels
// -------------------------
$panel-bg:                    #fff !default;
$panel-inner-border:          #ddd !default;
$panel-border-radius:         $border-radius-base !default;
$panel-footer-bg:             #f5f5f5 !default;

$panel-default-text:          $gray-dark !default;
$panel-default-border:        #ddd !default;
$panel-default-heading-bg:    #f5f5f5 !default;

$panel-primary-text:          #fff !default;
$panel-primary-border:        $brand-primary !default;
$panel-primary-heading-bg:    $brand-primary !default;

$panel-success-text:          $state-success-text !default;
$panel-success-border:        $state-success-border !default;
$panel-success-heading-bg:    $state-success-bg !default;

$panel-warning-text:          $state-warning-text !default;
$panel-warning-border:        $state-warning-border !default;
$panel-warning-heading-bg:    $state-warning-bg !default;

$panel-danger-text:           $state-danger-text !default;
$panel-danger-border:         $state-danger-border !default;
$panel-danger-heading-bg:     $state-danger-bg !default;

$panel-info-text:             $state-info-text !default;
$panel-info-border:           $state-info-border !default;
$panel-info-heading-bg:       $state-info-bg !default;


// Thumbnails
// -------------------------
$thumbnail-padding:           4px !default;
$thumbnail-bg:                $body-bg !default;
$thumbnail-border:            #ddd !default;
$thumbnail-border-radius:     $border-radius-base !default;

$thumbnail-caption-color:     $text-color !default;
$thumbnail-caption-padding:   9px !default;


// Wells
// -------------------------
$well-bg:                     #f5f5f5 !default;


// Badges
// -------------------------
$badge-color:                 #fff !default;
$badge-link-hover-color:      #fff !default;
$badge-bg:                    $gray-light !default;

$badge-active-color:          $link-color !default;
$badge-active-bg:             #fff !default;

$badge-font-weight:           bold !default;
$badge-line-height:           1 !default;
$badge-border-radius:         10px !default;


// Breadcrumbs
// -------------------------
$breadcrumb-bg:               #f6f6f6 !default;
$breadcrumb-color:            #333 !default;
$breadcrumb-active-color:     $breadcrumb-color !default;


// Carousel
// ------------------------

$carousel-text-shadow:                        0 1px 2px rgba(0,0,0,.6) !default;

$carousel-control-color:                      #fff !default;
$carousel-control-width:                      15% !default;
$carousel-control-opacity:                    .5 !default;
$carousel-control-font-size:                  20px !default;

$carousel-indicator-active-bg:                #fff !default;
$carousel-indicator-border-color:             #fff !default;

$carousel-caption-color:                      #fff !default;


// Close
// ------------------------
$close-color:                 #000 !default;
$close-font-weight:           bold !default;
$close-text-shadow:           0 1px 0 #fff !default;


// Code
// ------------------------
$code-color:                  #c7254e !default;
$code-bg:                     #f9f2f4 !default;

$pre-bg:                      #f5f5f5 !default;
$pre-color:                   $gray-dark !default;
$pre-border-color:            #ccc !default;
$pre-scrollable-max-height:   340px !default;

// Type
// ------------------------
$text-muted:                  $gray-light !default;
$abbr-border-color:           $gray-light !default;
$headings-small-color:        $gray-light !default;
$blockquote-small-color:      $gray-light !default;
$blockquote-border-color:     $gray-lighter !default;
$page-header-border-color:    $gray-lighter !default;

// Miscellaneous
// -------------------------

// Hr border color
$hr-border:                   $gray-lighter !default;

// Horizontal forms & lists
$component-offset-horizontal: 180px !default;


// Container sizes
// --------------------------------------------------

// Small screen / tablet
$container-tablet:            ((720px + $grid-gutter-width)) !default;

// Medium screen / desktop
$container-desktop:           ((940px + $grid-gutter-width)) !default;

// Large screen / wide desktop
$container-lg-desktop:        ((1140px + $grid-gutter-width)) !default;
<?php }} ?>
