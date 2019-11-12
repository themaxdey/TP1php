<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pays Controller
 *
 * @property \App\Model\Table\PaysTable $Pays
 *
 * @method \App\Model\Entity\Pay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $pays = $this->paginate($this->Pays);

        $this->set(compact('pays'));
    }

    /**
     * View method
     *
     * @param string|null $id Pay id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pay = $this->Pays->get($id, [
            'contain' => []
        ]);

        $this->set('pay', $pay);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pay = $this->Pays->newEntity();
        if ($this->request->is('post')) {
            $pay = $this->Pays->patchEntity($pay, $this->request->getData());
            if ($this->Pays->save($pay)) {
                $this->Flash->success(__('The pay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pay could not be saved. Please, try again.'));
        }
        $this->set(compact('pay'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pay id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pay = $this->Pays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pay = $this->Pays->patchEntity($pay, $this->request->getData());
            if ($this->Pays->save($pay)) {
                $this->Flash->success(__('The pay has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pay could not be saved. Please, try again.'));
        }
        $this->set(compact('pay'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pay id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pay = $this->Pays->get($id);
        if ($this->Pays->delete($pay)) {
            $this->Flash->success(__('The pay has been deleted.'));
        } else {
            $this->Flash->error(__('The pay could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
