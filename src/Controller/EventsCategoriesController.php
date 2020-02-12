<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventsCategories Controller
 *
 * @property \App\Model\Table\EventsCategoriesTable $EventsCategories
 *
 * @method \App\Model\Entity\EventsCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsCategoriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $eventsCategories = $this->paginate($this->EventsCategories);
        $this->set('judul', 'Kategori Event');
        $this->set(compact('eventsCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Events Category id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventsCategory = $this->EventsCategories->get($id, [
            'contain' => [],
        ]);

        $this->set('eventsCategory', $eventsCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventsCategory = $this->EventsCategories->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventsCategory = $this->EventsCategories->patchEntity($eventsCategory, $this->request->getData());
            if ($this->EventsCategories->save($eventsCategory)) {
                $this->Flash->success(__('The events category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events category could not be saved. Please, try again.'));
        }
        $this->set(compact('eventsCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Events Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventsCategory = $this->EventsCategories->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventsCategory = $this->EventsCategories->patchEntity($eventsCategory, $this->request->getData());
            if ($this->EventsCategories->save($eventsCategory)) {
                $this->Flash->success(__('The events category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events category could not be saved. Please, try again.'));
        }
        $this->set(compact('eventsCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Events Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventsCategory = $this->EventsCategories->get($id);
        if ($this->EventsCategories->delete($eventsCategory)) {
            $this->Flash->success(__('The events category has been deleted.'));
        } else {
            $this->Flash->error(__('The events category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
