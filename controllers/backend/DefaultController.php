<?php
namespace kouosl\harita\controllers\backend;


/**
 * Default controller for the `harita` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
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
