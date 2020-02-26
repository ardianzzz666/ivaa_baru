<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CreativeIndustries Controller
 *
 * @property \App\Model\Table\CreativeIndustriesTable $CreativeIndustries
 *
 * @method \App\Model\Entity\CreativeIndustry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CreativeIndustriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->set('judul', 'Kategori Pelaku Seni');
        $this->viewBuilder()->setLayout('backend');
        $creativeIndustries = $this->paginate($this->CreativeIndustries);

        $this->set(compact('creativeIndustries'));
    }

    /**
     * View method
     *
     * @param string|null $id Creative Industry id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creativeIndustry = $this->CreativeIndustries->get($id, [
            'contain' => ['ArtistsIndustries'],
        ]);

        $this->set('creativeIndustry', $creativeIndustry);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->set('judul', 'Tambah Kategori Pelaku Seni');
        $this->viewBuilder()->setLayout('backend');
        $creativeIndustry = $this->CreativeIndustries->newEmptyEntity();
        if ($this->request->is('post')) {
            $creativeIndustry = $this->CreativeIndustries->patchEntity($creativeIndustry, $this->request->getData());
            if ($this->CreativeIndustries->save($creativeIndustry)) {
                $this->Flash->success(__('The creative industry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creative industry could not be saved. Please, try again.'));
        }
        $this->set(compact('creativeIndustry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Creative Industry id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->set('judul', 'Tambah Kategori Pelaku Seni');
        $this->viewBuilder()->setLayout('backend');
        $creativeIndustry = $this->CreativeIndustries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creativeIndustry = $this->CreativeIndustries->patchEntity($creativeIndustry, $this->request->getData());
            if ($this->CreativeIndustries->save($creativeIndustry)) {
                $this->Flash->success(__('The creative industry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The creative industry could not be saved. Please, try again.'));
        }
        $this->set(compact('creativeIndustry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Creative Industry id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creativeIndustry = $this->CreativeIndustries->get($id);
        if ($this->CreativeIndustries->delete($creativeIndustry)) {
            $this->Flash->success(__('The creative industry has been deleted.'));
        } else {
            $this->Flash->error(__('The creative industry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
