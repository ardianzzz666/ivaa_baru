<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Khazanahs Controller
 *
 * @property \App\Model\Table\KhazanahsTable $Khazanahs
 *
 * @method \App\Model\Entity\Khazanah[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhazanahsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artists', 'KhazanahCategories'],
        ];
        $khazanahs = $this->paginate($this->Khazanahs);

        $this->set(compact('khazanahs'));
    }

    /**
     * View method
     *
     * @param string|null $id Khazanah id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khazanah = $this->Khazanahs->get($id, [
            'contain' => ['Artists', 'KhazanahCategories', 'Artworks', 'Events', 'KhazanahsFiles', 'KhazanahsParticipants'],
        ]);

        $this->set('khazanah', $khazanah);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khazanah = $this->Khazanahs->newEmptyEntity();
        if ($this->request->is('post')) {
            $khazanah = $this->Khazanahs->patchEntity($khazanah, $this->request->getData());
            if ($this->Khazanahs->save($khazanah)) {
                $this->Flash->success(__('The khazanah has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanah could not be saved. Please, try again.'));
        }
        $artists = $this->Khazanahs->Artists->find('list', ['keyField' => 'id','valueField' => 'fullname'], ['limit' => 200]);
        $khazanahCategories = $this->Khazanahs->KhazanahCategories->find('list', ['limit' => 200]);
        $artworks = $this->Khazanahs->Artworks->find('list', ['limit' => 200]);
        $events = $this->Khazanahs->Events->find('list', ['limit' => 200]);
        $this->set(compact('khazanah', 'artists', 'khazanahCategories', 'artworks', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khazanah id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khazanah = $this->Khazanahs->get($id, [
            'contain' => ['Artworks', 'Events'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khazanah = $this->Khazanahs->patchEntity($khazanah, $this->request->getData());
            if ($this->Khazanahs->save($khazanah)) {
                $this->Flash->success(__('The khazanah has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanah could not be saved. Please, try again.'));
        }
        $artists = $this->Khazanahs->Artists->find('list', ['keyField' => 'id','valueField' => 'fullname'], ['limit' => 200]);
        $khazanahCategories = $this->Khazanahs->KhazanahCategories->find('list', ['limit' => 200]);
        $artworks = $this->Khazanahs->Artworks->find('list', ['limit' => 200]);
        $events = $this->Khazanahs->Events->find('list', ['limit' => 200]);
        $this->set(compact('khazanah', 'artists', 'khazanahCategories', 'artworks', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khazanah id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khazanah = $this->Khazanahs->get($id);
        if ($this->Khazanahs->delete($khazanah)) {
            $this->Flash->success(__('The khazanah has been deleted.'));
        } else {
            $this->Flash->error(__('The khazanah could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
