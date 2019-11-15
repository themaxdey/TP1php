<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Markets Controller
 *
 * @property \App\Model\Table\MarketsTable $Markets
 *
 * @method \App\Model\Entity\Market[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarketsController extends AppController
{

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
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $markets = $this->paginate($this->Markets);

        $this->set(compact('markets'));
    }

    /**
     * View method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $market = $this->Markets->get($id, [
            'contain' => ['Assets']
        ]);

        $this->set('market', $market);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
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
    }

    /**
     * Edit method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
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
    }

    /**
     * Delete method
     *
     * @param string|null $id Market id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $market = $this->Markets->get($id);
        if ($this->Markets->delete($market)) {
            $this->Flash->success(__('The market has been deleted.'));
        } else {
            $this->Flash->error(__('The market could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
        // authentifiés sur l'application
        if (in_array($action, ['add', 'edit', 'delete', 'tags'])) {
            return true;
        }

       /* // Toutes les autres actions nécessitent un slug
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // On vérifie que l'asset appartient à l'utilisateur connecté
        $asset = $this->Assets->findBySlug($slug)->first();

        return $asset->user_id === $user['id'];*/
    }
    
}
