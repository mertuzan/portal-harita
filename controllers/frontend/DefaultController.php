<?php
namespace vendor\kouosl\harita\controllers\frontend;


/**
 * Default controller for the `harita` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
	 public function actionMap()
    {
        return $this->render('map');
    }
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
