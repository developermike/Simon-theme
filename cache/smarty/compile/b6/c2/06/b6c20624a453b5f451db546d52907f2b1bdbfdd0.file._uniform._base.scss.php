<?php /* Smarty version Smarty-3.1.19, created on 2015-04-29 08:05:30
         compiled from "/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/autoload/_uniform._base.scss" */ ?>
<?php /*%%SmartyHeaderCode:688291166554074aa9b3102-91146052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c20624a453b5f451db546d52907f2b1bdbfdd0' => 
    array (
      0 => '/home1/lamppp/htdocs/Simon-theme/themes/default-bootstrap/sass/autoload/_uniform._base.scss',
      1 => 1425623960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688291166554074aa9b3102-91146052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'opacity' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_554074aae848d1_25960579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554074aae848d1_25960579')) {function content_554074aae848d1_25960579($_smarty_tpl) {?>@mixin opacity($opacity) {
	opacity: $opacity;
	filter: unquote("alpha(opacity=#<?php echo round($_smarty_tpl->tpl_vars['opacity']->value*100);?>
)");
	-moz-opacity: $opacity;
}

@mixin hideYetClickable() {
	@include opacity(0);
	border: none;
	background: none;
}

@mixin inline-block() {
	display: -moz-inline-box;
	display: inline-block;
	*display: inline;
	zoom: 1;
}

@mixin ellipsis() {
	text-overflow: ellipsis;
	display: block;
	overflow: hidden;
	white-space: nowrap;
}

@mixin border-radius($radius) {
	-webkit-border-radius: $radius;
	-moz-border-radius: $radius;
	border-radius: $radius;
}

@mixin box-shadow($def) {
	-webkit-box-shadow: $def;
	-moz-box-shadow: $def;
	box-shadow: $def;
}

@mixin retina() {
	@media only screen {
		@media (min-resolution: 124dpi), (-webkit-min-device-pixel-ratio: 1.3), (min--moz-device-pixel-ratio: 1.3), (-o-min-device-pixel-ratio: 4/3), (min-device-pixel-ratio: 1.3), (min-resolution: 1.3dppx) {
			@include use-backgrounds(url($sprite-retina), $sprite-size, url($input-background-retina), url($input-background-focus-retina), $input-background-size);
		}
	}
}

@mixin use-backgrounds($sprite, $sprite-size, $input, $input-focus, $input-size) {
	div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 {
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
 span,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
 span,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'radio';?>
 span,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
 span#<?php echo $_smarty_tpl->tpl_vars['class']->value-'action';?>
,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
,
		&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
 span {
			background-image: $sprite;

			@if $sprite-size > 0 {
				background-size: $sprite-size;
			}
		}
	}

	#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 input#<?php echo $_smarty_tpl->tpl_vars['class']->value-'input';?>
,
    #<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 select#<?php echo $_smarty_tpl->tpl_vars['class']->value-'multiselect';?>
,
    #<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 textarea#<?php echo $_smarty_tpl->tpl_vars['class']->value-'textarea';?>
 {
		background-image: $input;

		@if $sprite-size > 0 {
			background-size: $input-size;
		}

		@include whenActive {
			background-image: $input-focus;
		}
	}
}

@mixin whenActive {
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'active';?>
 {
		@content
	}
}

@mixin whenHover {
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'hover';?>
, &#<?php echo $_smarty_tpl->tpl_vars['class']->value-'focus';?>
 {
		@content
	}
}

@mixin whenDisabled {
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'disabled';?>
, &#<?php echo $_smarty_tpl->tpl_vars['class']->value-'disabled';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'active';?>
 {
		@content
	}
}

@mixin whenChecked {
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checked';?>
 {
		@content
	}
}


$sprite: "../../img/jquery/uniform/sprite.png" !default;
$sprite-retina: "../../img/jquery/uniform/sprite-retina.png" !default;
$sprite-size: 493px !default;
$button-height: 30px !default;
$button-margin-left: 13px !default;
$button-padding: 0 !default;
$button-span-height: $button-height !default;
$checkbox-height: 15px !default;
$checkbox-width: 15px !default;
$input-padding: 3px !default;
$input-background: "../../../img/jquery/uniform/bg-input.png" !default;
$input-background-retina: "../../../img/jquery/uniform/bg-input-retina.png" !default;
$input-background-focus: "../../../img/jquery/uniform/bg-input-focus.png" !default;
$input-background-focus-retina: "../../../img/jquery/uniform/bg-input-focus-retina.png" !default;
$input-background-size: 1px !default;
$radio-height: 13px !default;
$radio-width: 13px !default;
$select-fixed-width: 190px !default;
$select-height: 27px !default;
$select-margin-left: 10px !default;
$select-margin-right: 30px !default;
$select-select-height: 27px !default;
$select-select-top: 0px !default;
$upload-action-width:94px !default;
$upload-filename-margin-top: 0px !default;
$upload-filename-margin-bottom: 0px !default;
$upload-filename-margin-left: 0px !default;
$upload-filename-width: 172px !default;
$upload-filename-padding: 0 10px !default;
$upload-height: 27px !default;
$upload-width: 100% !default;


$checkbox-voffset: (-10 * $select-height);
$radio-voffset: ($checkbox-voffset - $checkbox-height);
$upload-voffset: ($radio-voffset - $radio-height);
$button-voffset: ($upload-voffset - (8 * $upload-height));

$class-action: ".action" !default;
$class-active: ".active" !default;
$class-button: ".button" !default;
$class-checkbox: ".checker" !default;
$class-checked: ".checked" !default;
$class-disabled: ".disabled" !default;
$class-input: ".uniform-input" !default;
$class-filename: ".filename" !default;
$class-focus: ".focus" !default;
$class-hover: ".hover" !default;
$class-multiselect: ".uniform-multiselect" !default;
$class-radio: ".radio" !default;
$class-select: ".selector" !default;
$class-select1: ".selector1" !default;
$class-select2: ".selector2" !default;
$class-select3: ".selector3" !default;
$class-upload: ".uploader" !default;
$class-textarea: ".uniform" !default;
$class-wrapper: "" !default;

$class-wrapper-element: "";
@if $class-wrapper != "" {
	$class-wrapper-element: "span"
}

/* General settings */

div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 {
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
 span,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
 span,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'radio';?>
 span,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
 span#<?php echo $_smarty_tpl->tpl_vars['class']->value-'action';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
 span {
		background-image: url($sprite);
		background-repeat: no-repeat;
		-webkit-font-smoothing: antialiased;
	}

	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'radio';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
 {

		vertical-align: middle;

		/* Keeping this as :focus to remove browser styles */
		&:focus {
			outline: 0;
		}
	}

	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'radio';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
,
	&#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
 {
		&, & * {
			margin: 0;
			padding: 0;
		}
	}
}

.highContrastDetect {
	background: url($input-background) repeat-x 0 0;
	width: 0px;
	height: 0px;
}

/* Input & Textarea */

#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 input#<?php echo $_smarty_tpl->tpl_vars['class']->value-'input';?>
,
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 select#<?php echo $_smarty_tpl->tpl_vars['class']->value-'multiselect';?>
,
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper'-'element';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
 textarea#<?php echo $_smarty_tpl->tpl_vars['class']->value-'textarea';?>
 {
	padding: $input-padding;
	background: white;
	outline: 0;

	@include whenActive {

	}
}

/* Remove default webkit and possible mozilla .search styles.
 * Keeping this as :active to remove browser styles */
div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
 input,
input[type="search"],
input[type="search"]:active  {
	-moz-appearance: none;
	-webkit-appearance: none;
}

/* Select */
div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select';?>
 {
	background-position: 0 (-2 * $select-height);
	line-height: $select-height;
	height: $select-height;
	padding: 0 0 0 $select-margin-left;
	position: relative;
	overflow: hidden;
	span {
		@include ellipsis();
		background-position: right 0;
		height: $select-height;
		line-height: $select-height;
		padding-right: $select-margin-right;
		cursor: pointer;
		width: 100%;
		display: block;
	}

	&.fixedWidth{
		width: $select-fixed-width;
		span {
			width: ($select-fixed-width - $select-margin-left - $select-margin-right);
		}
	}

	select {
		@include hideYetClickable();
		position: absolute;
		height: $select-select-height;
		top: $select-select-top;
		left: 0px;
		width: 100%;
	}

	@include whenActive {
		span {
			background-position: right (-1 * $select-height);
		}
	}

	@include whenHover {
		span {
			background-position: right (-1 * $select-height);
		}

		@include whenActive {
			span {
				background-position: right (-1 * $select-height);
			}
		}
	}

	@include whenDisabled {

		span {
			background-position: right 0;
		}
	}
}

/* Select1 */
div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select1';?>
 {
	> div {
		background-position: 0 (-5 * $select-height);
		span {
			background-position: right (-3 * $select-height);
		}

		@include whenActive {
			span {
				background-position: right (-4 * $select-height);
			}
		}

		@include whenHover {
			span {
				background-position: right (-4 * $select-height);
			}

			@include whenActive {
				span {
					background-position: right (-4 * $select-height);
				}
			}
		}

		@include whenDisabled {
			background-position: 0 (-5 * $select-height);
			span {
				background-position: right (-3 * $select-height);
			}
		}
	}
}


/* Select2 */
div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select2';?>
 {
	> div {
		background-position: 0 (-8 * $select-height);
		span {
			background-position: right (-6 * $select-height);
		}

		@include whenActive {
			span {
				background-position: right (-7 * $select-height);
			}
		}

		@include whenHover {
			span {
				background-position: right (-7 * $select-height);
			}

			@include whenActive {
				span {
					background-position: right (-7 * $select-height);
				}
			}
		}

		@include whenDisabled {
			background-position: 0 (-8 * $select-height);
			span {
				background-position: right (-6 * $select-height);
			}
		}
	}
}

/* Select3 */
div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'select3';?>
 {
	> div {
		background-position: 0 (-13 * $select-height);
		span {
			background-position: right (-11 * $select-height);
		}

		@include whenActive {
			span {
				background-position: right (-12 * $select-height);
			}
		}

		@include whenHover {
			span {
				background-position: right (-12* $select-height);
			}

			@include whenActive {
				span {
					background-position: right (-12 * $select-height);
				}
			}
		}

		@include whenDisabled {
			background-position: 0 (-13 * $select-height);
			span {
				background-position: right (-11 * $select-height);
			}
		}
	}
}




/* Checkbox */

div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'checkbox';?>
 {
	position: relative;

	&, span, input {
		width: $checkbox-width;
		height: $checkbox-height;
	}

	span {
		@include inline-block();
		text-align: center;
		background-position: 0 ($checkbox-voffset+$radio-height);
	    @include whenChecked {
	    background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);
		}
	}

	input {
		@include hideYetClickable();
		@include inline-block();
	}

	@include whenActive {
		span {
			background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);

			@include whenChecked {
				background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);
			}
		}
	}

	@include whenHover {
		span {
			background-position: (-2 * $checkbox-width) ($checkbox-voffset + $radio-height);

			@include whenChecked {
				background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);
			}
		}

		@include whenActive {
			span {
				background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);

				@include whenChecked {
					background-position: (-1 * $checkbox-width) ($checkbox-voffset + $radio-height);
				}
			}
		}
	}

	@include whenDisabled {
		background-position: 0 ($checkbox-voffset + $radio-height);

		span {
			@include whenChecked {
				background-position: 0 ($checkbox-voffset + $radio-height);
			}
		}
	}
}


/* Radio */

div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'radio';?>
 {
	position: relative;
	display:inline;
	&, span, input {
		width: $radio-width;
		height: $radio-height;
	}
	span {
		@include inline-block();
		text-align: center;
		background-position: 0 ($radio-voffset + 42px);

		@include whenChecked {
			background-position: (-1 * $radio-width) ($radio-voffset + 42px);
		}
	}

	input {
		@include hideYetClickable();
		@include inline-block();
		text-align: center;
	}

	@include whenActive {
		span {
			background-position: (-1 * $radio-width) ($radio-voffset + 42px);

			@include whenChecked {
				background-position: (-1 * $radio-width) ($radio-voffset + 42px);
			}
		}
	}

	@include whenHover {
		span {
			background-position: (-1 * $radio-width)-36px ($radio-voffset + 42px);

			@include whenChecked {
				background-position: (-1 * $radio-width) ($radio-voffset + 42px);
			}
		}

		@include whenActive {
			span {
				background-position: (-1 * $radio-width) ($radio-voffset + 42px);

				@include whenChecked {
					background-position: (-1 * $radio-width) ($radio-voffset + 42px);
				}
			}
		}
	}

	@include whenDisabled {
		span {
			background-position: 0 ($radio-voffset + 42px);

			@include whenChecked {
				background-position: 0 ($radio-voffset + 42px);
			}
		}
	}
}

/* Uploader */

div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'upload';?>
 {
	background:none;
	height: $upload-height;
	width: $upload-width;
	cursor: pointer;
	position: relative;
	overflow: hidden;

	span#<?php echo $_smarty_tpl->tpl_vars['class']->value-'action';?>
 {
		background-position: 0 -378px;
		height: $upload-height;
		line-height: $upload-height;
		width: $upload-action-width;
		text-align: center;
		float: left;
		display: inline;
		overflow: hidden;
		cursor: pointer;
	}

	span#<?php echo $_smarty_tpl->tpl_vars['class']->value-'filename';?>
 {
		@include ellipsis();
		float: left;
		cursor: default;
		height: ($upload-height - $upload-filename-margin-top - $upload-filename-margin-bottom);
		margin: $upload-filename-margin-top 0 $upload-filename-margin-bottom $upload-filename-margin-left;
		line-height: ($upload-height - $upload-filename-margin-top - $upload-filename-margin-bottom);
		width: $upload-filename-width;
		padding: $upload-filename-padding;
	}

	input {
		@include hideYetClickable();
		position: absolute;
		top: 0;
		right: 0;
		float: right;
		cursor: default;
		width: 100%;
		height: 100%;
	}
}

/* Buttons */

div#<?php echo $_smarty_tpl->tpl_vars['class']->value-'wrapper';?>
#<?php echo $_smarty_tpl->tpl_vars['class']->value-'button';?>
 {
	background-position: 0 ($button-voffset + (-4 * $button-height));
	height: $button-height;
	cursor: pointer;
	position: relative;

	/* Keep buttons barely visible so they can get focus */
	a, button, input {
		@include opacity(0.01);
		display: block;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		position: absolute;
	}

	span {
		@include inline-block();
		line-height: $button-span-height;
		text-align: center;
		background-position: right $button-voffset;
		height: $button-span-height;
		margin-left: $button-margin-left;
		padding: $button-padding;
	}

	@include whenActive {
		background-position: 0 ($button-voffset + (-5 * $button-height));

		span {
			background-position: right ($button-voffset + (-1 * $button-height));
			cursor: default;
		}
	}

	@include whenHover {
		background-position: 0 ($button-voffset + (-6 * $button-height));

		span {
			background-position: right ($button-voffset + (-2 * $button-height));
		}
	}

	@include whenDisabled {
		background-position: 0 ($button-voffset + (-7 * $button-height));

		span {
			background-position: right ($button-voffset + (-3 * $button-height));
			cursor: default;
		}
	}
}
<?php }} ?>
