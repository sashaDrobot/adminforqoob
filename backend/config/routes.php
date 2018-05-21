<?php

return [

    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'about' => [
        'controller' => 'main',
        'action' => 'about'
    ],

    'portfolio' => [
        'controller' => 'main',
        'action' => 'portfolio'
    ],

    'services' => [
        'controller' => 'main',
        'action' => 'services'
    ],

    'contacts' => [
        'controller' => 'main',
        'action' => 'contacts'
    ],

    'feedback' => [
        'controller' => 'main',
        'action' => 'feedback'
    ],

    'sendorder' => [
        'controller' => 'main',
        'action' => 'sendorder'
    ],

    //AdminController
    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],
	
	'admin/orders' => [
		'controller' => 'admin',
		'action' => 'orders',
	],

	'admin/processed' => [
		'controller' => 'admin',
		'action' => 'processed',
	],

    'admin/processed/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'processed',
    ],

    'admin/delete/{id:\d+}' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
	
    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],

];