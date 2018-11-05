<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Service\PdoDB;
use Zend\View\Model\ViewModel;

class IndexController extends BaseController
{
    public function indexAction()
    {
        /** @var  $db \PDO */
        $db = $this->getServiceManager()->get(PdoDB::class);

        $sql = "SELECT * FROM student";
        $arr = $db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

        $viewModel = new ViewModel();

        $viewModel->setVariable('data', $arr);

        return $viewModel;


    }

}
