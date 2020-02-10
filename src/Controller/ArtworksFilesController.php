<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArtworksFiles Controller
 *
 * @property \App\Model\Table\ArtworksFilesTable $ArtworksFiles
 *
 * @method \App\Model\Entity\ArtworksFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtworksFilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $this->paginate = [
            'contain' => ['Artworks'],
        ];
        $artworksFiles = $this->paginate($this->ArtworksFiles);

        $this->set(compact('artworksFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Artworks File id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artworksFile = $this->ArtworksFiles->get($id, [
            'contain' => ['Artworks'],
        ]);

        $this->set('artworksFile', $artworksFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artworksFile = $this->ArtworksFiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $artworksFile = $this->ArtworksFiles->patchEntity($artworksFile, $this->request->getData());
            if ($this->ArtworksFiles->save($artworksFile)) {
                $this->Flash->success(__('The artworks file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artworks file could not be saved. Please, try again.'));
        }
        $artworks = $this->ArtworksFiles->Artworks->find('list', ['limit' => 200]);
        $this->set(compact('artworksFile', 'artworks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artworks File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artworksFile = $this->ArtworksFiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artworksFile = $this->ArtworksFiles->patchEntity($artworksFile, $this->request->getData());
            if ($this->ArtworksFiles->save($artworksFile)) {
                $this->Flash->success(__('The artworks file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artworks file could not be saved. Please, try again.'));
        }
        $artworks = $this->ArtworksFiles->Artworks->find('list', ['limit' => 200]);
        $this->set(compact('artworksFile', 'artworks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artworks File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artworksFile = $this->ArtworksFiles->get($id);
        if ($this->ArtworksFiles->delete($artworksFile)) {
            $this->Flash->success(__('The artworks file has been deleted.'));
        } else {
            $this->Flash->error(__('The artworks file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
