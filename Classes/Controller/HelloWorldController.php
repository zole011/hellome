<?php
namespace Zole\Hellome\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class HelloWorldController extends ActionController
{
    public function indexAction()
    {
        $this->view->assign('message', 'Hello World');
    }
}