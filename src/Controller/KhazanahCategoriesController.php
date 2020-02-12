<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * KhazanahCategories Controller
 *
 * @property \App\Model\Table\KhazanahCategoriesTable $KhazanahCategories
 *
 * @method \App\Model\Entity\KhazanahCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhazanahCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $khazanahCategories = $this->paginate($this->KhazanahCategories);
        $this->set('judul', 'Kategori Khazanah');
        $this->set(compact('khazanahCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Khazanah Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khazanahCategory = $this->KhazanahCategories->get($id, [
            'contain' => ['Khazanahs'],
        ]);

        $this->set('khazanahCategory', $khazanahCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khazanahCategory = $this->KhazanahCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $khazanahCategory = $this->KhazanahCategories->patchEntity($khazanahCategory, $this->request->getData());
            if ($this->KhazanahCategories->save($khazanahCategory)) {
                $this->Flash->success(__('The khazanah category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanah category could not be saved. Please, try again.'));
        }
        $this->set(compact('khazanahCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khazanah Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khazanahCategory = $this->KhazanahCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khazanahCategory = $this->KhazanahCategories->patchEntity($khazanahCategory, $this->request->getData());
            if ($this->KhazanahCategories->save($khazanahCategory)) {
                $this->Flash->success(__('The khazanah category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanah category could not be saved. Please, try again.'));
        }
        $this->set(compact('khazanahCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khazanah Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khazanahCategory = $this->KhazanahCategories->get($id);
        if ($this->KhazanahCategories->delete($khazanahCategory)) {
            $this->Flash->success(__('The khazanah category has been deleted.'));
        } else {
            $this->Flash->error(__('The khazanah category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
