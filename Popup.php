<?php
namespace cmsgears\widgets\popup;

class Popup extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Template
	public $template	= 'message';

	// Title
	public $title;

	// Modal popups
	public $modal		= true;

	// Size - small, medium, large
	public $size;

	// Screen Background

	public $bkg;

	public $bkgClass;

	public $bkgUrl;

	// Content Background

	public $bkgData;

	public $bkgDataClass;

	public $bkgDataUrl;

	// Widget Data - Key Value pairs
	public $data	= [];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	public function renderWidget( $config = [] ) {

		if( !isset( $this->title ) ) {

			switch( $this->template ) {

				case 'message': {

					$this->title = 'Message';

					break;
				}
				case 'success': {

					$this->title = 'Success';

					break;
				}
				case 'warning': {

					$this->title = 'Alert';

					break;
				}
				case 'error': {

					$this->title = 'Error';

					break;
				}
			}
		}

		if( !isset( $this->size ) ) {

			if( $this->modal && in_array( $this->template, [ 'message', 'success', 'warning', 'error' ] ) ) {

				$this->size = 'medium';
			}
		}

		$widgetHtml = $this->render( $this->template, [
			'widget' => $this
		]);

		return $widgetHtml;
	}

	// Widget --------------------------------

}
