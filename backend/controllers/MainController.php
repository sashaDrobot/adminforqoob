<?php

namespace backend\controllers;

use backend\core\Controller;

class MainController extends Controller {

    public function indexAction() {
        $this->view->render('Qoob');
    }

    public function feedbackAction() {
        $this->view->render('Feedback');
    }

    public function sendorderAction() {
        $vars = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'text' => $_POST['text'],
        ];
        $this->model->insertOrder($vars);

        $this->view->redirect('/');
    }

    public function aboutAction() {
        $this->view->render('About us');
    }

    public function portfolioAction() {
        $this->view->render('Portfolio');
    }

    public function contactsAction() {
        $this->view->render('Contacts');
    }

}