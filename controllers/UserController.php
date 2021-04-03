<?php

include_once "../classes/Controller.php";
include_once "../models/UserModel.php";
include_once "../middlewares/AuthMiddleware.php";

class UserController extends Controller
{
    private $authMiddleware;

    public function __construct()
    {
        $this->authMiddleware = new AuthMiddleware();
    }

    public function getMe($request, $response)
    {

        if ($this->authMiddleware->isLoggedIn()) {
            if ($request->isGet()) {

                return $this->render('dashboard');
            }
        } else {
            return 'You are not logged in!';
        }
    }

    public function viewAllTrains($request)
    {
        $getTrainDetailsModel = new UserModel();
        if ($request->isPost()) {
            $getTrainDetailsModel->loadData($request->getBody());
            $viewAllTrainDetailsArray = $getTrainDetailsModel->viewAllTrainsByUsers();

        }

    }

    public function upload($request, $response)
    {
        if ($request->isPost()) {

            $updateUserDetailsModel = new UserModel();
            $tempUpdateUserBody = $request->getBody();
            $tempUpdateUserBody['id'] = App::$APP->activeUser()['id'];
            $tempUpdateUserBody['file'] = $_FILES;
            $updateUserDetailsModel->loadData($tempUpdateUserBody);
<<<<<<< HEAD
            $array=$updateUserDetailsModel->uploadImage(App::$APP->activeUser()['id']);
            if($array === "Success"){
                return $response->redirect('/settings');
            }else{
=======
            $array = $updateUserDetailsModel->uploadImage(App::$APP->activeUser()['id']);
            if ($array === "Success") {
                App::$APP->session->set('operation', 'success');
                return $response->redirect('/utrance-railway/dashboard');
            } else {
                App::$APP->session->set('operation', 'fail');
>>>>>>> master
                var_dump($array);
            }

        }
        return $this->render('dashboard');

    }

    public function updateMe($request, $response)
    {

        $updateUserDetailsModel = new UserModel();

        if ($request->isPost()) {

            $tempUpdateUserBody = $request->getBody();

            $tempUpdateUserBody['id'] = App::$APP->activeUser()['id'];
            $tempUpdateUserBody['user_role'] = App::$APP->activeUser()['role'];
            $tempUpdateUserBody['user_profile_image'] = App::$APP->activeUser()['user_image'];

            $updateUserDetailsModel->loadData($tempUpdateUserBody);

            $state = $updateUserDetailsModel->updateMyProfile();
<<<<<<< HEAD
           
            if ($state === 'success') { 
                
                return $response->redirect('/settings');
=======

            if ($state === 'success') {

                App::$APP->session->set('operation', 'success');
                return $response->redirect('/utrance-railway/dashboard');

>>>>>>> master
            } else {
                $updateUserDetailsSetValue = $updateUserDetailsModel->registerSetValue($state); //Ashika

                App::$APP->session->set('operation', 'fail');
                return $this->render('dashboard', $updateUserDetailsSetValue);
            }
        }

    }

    public function deleteMe()
    {
        // delete my profile
    }

    public function createUser()
    {
        // do not implement this method
        // use sign up in AuthController
    }

    public function aboutUs()
    {

        return $this->render('aboutUs');

    }

    public function newsFeed()
    {

        return $this->render('newsFeed');
    }

    // public function newsFeed01(){

    //     return $this->render(['newsFeed','newsFeed01']);
    // }

    //return $this->render(['newsFeed', 'newsFeed01']);
    //}

}
