<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Markets Controller
 *
 * @property \App\Model\Table\MarketssTable $Markets
 *
 * @method \App\Model\Entity\Market[] paginate($object = null, array $settings = [])
 */
class MarketsController extends AppController {

    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 150,
        /*        'fields' => [
          'id', 'name', 'description'
          ],
         */ 'sortWhitelist' => [
            'id', 'type'
        ]
    ];

    public function initialize() {
        parent::initialize();
        // Use the Bootstrap layout from the plugin.
        // $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $markets = $this->paginate($this->Markets);

        $this->set(compact('markets'));
        $this->set('_serialize', ['markets']);
    }

    /**
     * View method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $market = $this->Markets->get($id, [
            'contain' => []
        ]);

        $this->set('market', $market);
        $this->set('_serialize', ['market']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $market = $this->Markets->newEntity();
        if ($this->request->is('post')) {
            $market = $this->Markets->patchEntity($market, $this->request->getData());
            if ($this->Markets->save($market)) {
                $this->Flash->success(__('The market has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market could not be saved. Please, try again.'));
        }
        $this->set(compact('market'));
        $this->set('_serialize', ['market']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $market = $this->Markets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $market = $this->Markets->patchEntity($market, $this->request->getData());
            if ($this->Markets->save($market)) {
                $this->Flash->success(__('The market has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The market could not be saved. Please, try again.'));
        }
        $this->set(compact('market'));
        $this->set('_serialize', ['market']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $market = $this->Markets->get($id);
        if ($this->Markets->delete($market)) {
            $this->Flash->success(__('The market has been deleted.'));
        } else {
            $this->Flash->error(__('The market could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
