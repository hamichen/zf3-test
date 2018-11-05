<?php
/**
 *
 *
 * @author    sfs teams <zfsfs.team@gmail.com>
 * @copyright 2010-2018 (http://www.sfs.tw)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://www.sfs.tw
 * Date: 2018/11/5
 * Time: 下午 11:04
 */

namespace Application\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class PdoDB implements  FactoryInterface
{

    protected  $container ;

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config');
        $db = $config['db'];
        try {
            $dsn = 'mysql:host='.$db['host'].';dbname='.$db['dbname'].';charset='.$db['charset'];
            $mysqlPdo = new \PDO($dsn, $db['user'], $db['password']);

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $mysqlPdo;
    }


}