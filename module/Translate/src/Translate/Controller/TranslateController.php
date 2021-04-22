<?php

namespace Translate\Controller;

 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;
 use Zend\Form\Form;
 use Zend\Http\Request;
 use Google\Cloud\Translate\V2\TranslateClient;


 class TranslateController extends AbstractActionController
 {


     public function indexAction()
     { 
      session_start();
      $request = $this->getRequest();
      if ($request->isPost()) {
      if($_SESSION['count']>=3){ 
      return $this->redirect()->toUrl('/');}
      else{
      $data = $this->params()->fromPost();   
      $translate = new TranslateClient(['key'=>'AIzaSyCiXfQXw_QJLcZreRx8AEZLzmsQ--cowEY']);
      $result = $translate->detectLanguage($data['metin']);        
      $configs=['source'=>$result['languageCode'],'target'=>$data['dil']];
      $result = $translate->translate($data['metin'],$configs);
      $result=$result['text'];
       
      if($data['arama']!=''){
      $result = explode(" ", $result);
      $arama = explode(" ", $data['arama']);

      for($a=0;$a<count($result);$a++){
      for($i=0;$i<count($arama);$i++)
      {
      if(strtolower($result[$a])==strtolower($arama[$i]))
      {$result[$a]='<b>'.$result[$a].'</b>';}
      } 
      }
      $result=implode($result,' '); 
      }
      $_SESSION['count']++;
      return new ViewModel(['metin'=>$result]);
      }
     }    
     else{ return $this->redirect()->toUrl('/');}
      return new ViewModel();
     }

 }