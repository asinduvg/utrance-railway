<?php

include_once "../classes/core/Controller.php";
include_once "../controllers/AuthController.php";
include_once "../middlewares/AuthMiddleware.php";
include_once "../models/DetailsProviderModel.php";

  

class DetailsProviderController extends Controller
{

    private function protect()
    {
        $authMiddleware = new AuthMiddleware();

        if(!$authMiddleware->isLoggedIn()) {
            return 'Your are not logged in!';
        }

        if (!$authMiddleware->restrictTo('detailsProvider')) {
            echo 'You are unorthorized to perform this action!!';
            return false;
        }
        return true;

    }

    public function contactAdmin($request,$response)
    { 
        $contactAdminModel = new DetailsProviderModel();

        if ($request->isPost()) 
        {
            $contactAdminModel->loadData($request->getbody());
            var_dump($request->getbody());
             $contactAdminModel->contactAdmin();

            return $response->redirect('/utrance-railway/contact-admin');
        
        
        }
        if($request ->isGet()){
            $contactAdminModel->loadData($request->getBody());
            $getAllAdminEmailResults = $contactAdminModel->getAdminEmails();
           
            return $this->render(['detailsProvider','contactAdmin'],$getAllAdminEmailResults); 
          
        }
        

    }

}
