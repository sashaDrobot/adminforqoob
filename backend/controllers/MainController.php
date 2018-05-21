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
            'name' => trim($_POST['name']),
            'phone' => trim($_POST['phone']),
            'email' => trim($_POST['email']),
            'text' => trim($_POST['text']),
        ];
        $this->model->insertOrder($vars);
        $this->view->redirect('');
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