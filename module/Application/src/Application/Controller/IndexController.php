<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;
use Google\Cloud\Translate\V2\TranslateClient;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        session_start();
        if(!isset($_SESSION['count'])){$_SESSION['count']=0;} 
        $translate = new TranslateClient(['key'=>'AIzaSyCiXfQXw_QJLcZreRx8AEZLzmsQ--cowEY']);
        $languages = $translate->languages();
        if($_SESSION['count']>=3){ 
           echo '<script>alert("Çeviri hakkınız bitmiştir")</script>';
        }
        return new ViewModel(array('languages'=>$languages));
       }

}
