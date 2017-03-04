<?php
$title	= $widget->title;
$modal	= $widget->modal;
?>
<div id="popup-success" class="popup popup-success <?= $modal ? 'popup-modal' : null ?>">
	<div class="popup-screen"></div>
	<?php if( $widget->bkg ) { ?>
		<div class='popup-bkg <?= $widget->bkgClass ?>' <?= isset( $widget->bkgUrl ) ? "style='background-image:url($widget->bkgUrl);'" : null ?>></div>
	<?php } ?>
	<div class="popup-screen-listener"></div>
	<div class="popup-data <?= isset( $widget->size ) ? "popup-data-$widget->size" : null ?>">
		<span class="popup-close fa fa-2x fa-close"></span>
		<?php if( $widget->bkgData ) { ?>
			<div class='popup-data-bkg <?= $widget->bkgDataClass ?>' <?= isset( $widget->bkgDataUrl ) ? "style='background-image:url($widget->bkgDataUrl);'" : null ?>></div>
		<?php } ?>
		<div class="popup-wrap-title">
			<div class="popup-title"><?= $title ?></div>
		</div>
		<div class="popup-content"></div>
	</div>
</div>