<?php

namespace Application\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceManager;

class BaseController extends AbstractActionController
{

    /**
     * @var ServiceManager
     */
    protected $serviceManager;

    /**
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * @param mixed $serviceManager
     * @return $this
     */
    public function setServiceManager($serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }


}