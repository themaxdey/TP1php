<?php

namespace App\Controller;

use App\Controller\AppController;

class MarketsController extends AppController {

    public function initialize() {
        parent::initialize();
        // Set the layout.
        $this->viewBuilder()->setLayout('monopage');
    }

    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 150,
        /*        'fields' => [
          'id', 'name', 'description'
          ],
         */ 'sortWhitelist' => [
            'id', 'type'
        ]
    ];

}
