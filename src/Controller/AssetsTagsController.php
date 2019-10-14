<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssetsTags Controller
 *
 * @property \App\Model\Table\AssetsTagsTable $AssetsTags
 *
 * @method \App\Model\Entity\AssetsTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssetsTagsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assets', 'Tags']
        ];
        $assetsTags = $this->paginate($this->AssetsTags);

        $this->set(compact('assetsTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Assets Tag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assetsTag = $this->AssetsTags->get($id, [
            'contain' => ['Assets', 'Tags']
        ]);

        $this->set('assetsTag', $assetsTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assetsTag = $this->AssetsTags->newEntity();
        if ($this->request->is('post')) {
            $assetsTag = $this->AssetsTags->patchEntity($assetsTag, $this->request->getData());
            if ($this->AssetsTags->save($assetsTag)) {
                $this->Flash->success(__('The assets tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assets tag could not be saved. Please, try again.'));
        }
        $assets = $this->AssetsTags->Assets->find('list', ['limit' => 200]);
        $tags = $this->AssetsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('assetsTag', 'assets', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Assets Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assetsTag = $this->AssetsTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assetsTag = $this->AssetsTags->patchEntity($assetsTag, $this->request->getData());
            if ($this->AssetsTags->save($assetsTag)) {
                $this->Flash->success(__('The assets tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The assets tag could not be saved. Please, try again.'));
        }
        $assets = $this->AssetsTags->Assets->find('list', ['limit' => 200]);
        $tags = $this->AssetsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('assetsTag', 'assets', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Assets Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assetsTag = $this->AssetsTags->get($id);
        if ($this->AssetsTags->delete($assetsTag)) {
            $this->Flash->success(__('The assets tag has been deleted.'));
        } else {
            $this->Flash->error(__('The assets tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
