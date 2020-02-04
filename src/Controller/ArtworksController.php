<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Artworks Controller
 *
 * @property \App\Model\Table\ArtworksTable $Artworks
 *
 * @method \App\Model\Entity\Artwork[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtworksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ArtworksCategories'],
        ];
        $artworks = $this->paginate($this->Artworks);

        $this->set(compact('artworks'));
    }

    /**
     * View method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artwork = $this->Artworks->get($id, [
            'contain' => ['ArtworksCategories', 'Events', 'Khazanahs', 'Media', 'ArtworksCreators', 'ArtworksFiles'],
        ]);

        $this->set('artwork', $artwork);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artwork = $this->Artworks->newEmptyEntity();
        if ($this->request->is('post')) {
            $artwork = $this->Artworks->patchEntity($artwork, $this->request->getData());
            if ($this->Artworks->save($artwork)) {
                $this->Flash->success(__('The artwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork could not be saved. Please, try again.'));
        }
        $artworksCategories = $this->Artworks->ArtworksCategories->find('list', ['limit' => 200]);
        $events = $this->Artworks->Events->find('list', ['limit' => 200]);
        $khazanahs = $this->Artworks->Khazanahs->find('list', ['limit' => 200]);
        $media = $this->Artworks->Media->find('list', ['limit' => 200]);
        $this->set(compact('artwork', 'artworksCategories', 'events', 'khazanahs', 'media'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artwork = $this->Artworks->get($id, [
            'contain' => ['Events', 'Khazanahs', 'Media'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artwork = $this->Artworks->patchEntity($artwork, $this->request->getData());
            if ($this->Artworks->save($artwork)) {
                $this->Flash->success(__('The artwork has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artwork could not be saved. Please, try again.'));
        }
        $artworksCategories = $this->Artworks->ArtworksCategories->find('list', ['limit' => 200]);
        $events = $this->Artworks->Events->find('list', ['limit' => 200]);
        $khazanahs = $this->Artworks->Khazanahs->find('list', ['limit' => 200]);
        $media = $this->Artworks->Media->find('list', ['limit' => 200]);
        $this->set(compact('artwork', 'artworksCategories', 'events', 'khazanahs', 'media'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artwork id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artwork = $this->Artworks->get($id);
        if ($this->Artworks->delete($artwork)) {
            $this->Flash->success(__('The artwork has been deleted.'));
        } else {
            $this->Flash->error(__('The artwork could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
