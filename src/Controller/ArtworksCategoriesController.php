<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArtworksCategories Controller
 *
 * @property \App\Model\Table\ArtworksCategoriesTable $ArtworksCategories
 *
 * @method \App\Model\Entity\ArtworksCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtworksCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $artworksCategories = $this->paginate($this->ArtworksCategories);
        $this->set('judul', 'Kategori Karya Seni');
        $this->set(compact('artworksCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Artworks Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artworksCategory = $this->ArtworksCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('artworksCategory', $artworksCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('backend');
        $this->set('judul', 'Kategori Karya Seni');
        $artworksCategory = $this->ArtworksCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $artworksCategory = $this->ArtworksCategories->patchEntity($artworksCategory, $this->request->getData());
            if ($this->ArtworksCategories->save($artworksCategory)) {
                $this->Flash->success(__('The artworks category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artworks category could not be saved. Please, try again.'));
        }
        $this->set(compact('artworksCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artworks Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('backend');
        $this->set('judul', 'Kategori Karya Seni');
        $artworksCategory = $this->ArtworksCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artworksCategory = $this->ArtworksCategories->patchEntity($artworksCategory, $this->request->getData());
            if ($this->ArtworksCategories->save($artworksCategory)) {
                $this->Flash->success(__('The artworks category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artworks category could not be saved. Please, try again.'));
        }
        $this->set(compact('artworksCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artworks Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artworksCategory = $this->ArtworksCategories->get($id);
        if ($this->ArtworksCategories->delete($artworksCategory)) {
            $this->Flash->success(__('The artworks category has been deleted.'));
        } else {
            $this->Flash->error(__('The artworks category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
