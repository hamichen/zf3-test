<?php
/**
 *
 *
 * @author    sfs teams <zfsfs.team@gmail.com>
 * @copyright 2010-2018 (http://www.sfs.tw)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.sfs.tw
 * Date: 2018/11/5
 * Time: 下午 11:30
 */

namespace Application\Service\Factory;


use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class BaseFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        return new $requestedName($container);
    }

}