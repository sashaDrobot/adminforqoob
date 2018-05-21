<?php

namespace backend\controllers;

use backend\core\Controller;

class AdminController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout='admin';
    }

    public function adminAction() {
        $this->view->redirect('login');
    }

    public function loginAction() {
        if (isset($_SESSION['admin'])) {
			$this->view->redirect('orders');
		}
		if (!empty($_POST)) {
			if (!$this->model->loginValidate($_POST)) {
				$this->view->message('error', $this->model->error);
			}
			$_SESSION['admin'] = true;
			$this->view->location('admin/orders');
		}
		$this->view->render('Вход');
    }

    public function ordersAction() {
        $vars = $this->model->selectOrders();
        $this->view->render('Список заказов', $vars);
    }

    public function processedAction() {
        $this->view->render('Список заказов');
    }

    public function deleteAction() {
        debug($this->route);
	//	if (!$this->model->isOrderExists($this->route['id'])) {
	//		$this->view->errorCode(404);
	//	}
	//	$this->model->orderDelete($this->route['id']);
	//	$this->view->redirect('admin/orders');
	}

	public function logoutAction() {
		unset($_SESSION['admin']);
		$this->view->redirect('login');
	}

}