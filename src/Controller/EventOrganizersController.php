<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventOrganizers Controller
 *
 * @property \App\Model\Table\EventOrganizersTable $EventOrganizers
 *
 * @method \App\Model\Entity\EventOrganizer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventOrganizersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $eventOrganizers = $this->paginate($this->EventOrganizers);

        $this->set(compact('eventOrganizers'));
    }

    /**
     * View method
     *
     * @param string|null $id Event Organizer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventOrganizer = $this->EventOrganizers->get($id, [
            'contain' => [],
        ]);

        $this->set('eventOrganizer', $eventOrganizer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventOrganizer = $this->EventOrganizers->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventOrganizer = $this->EventOrganizers->patchEntity($eventOrganizer, $this->request->getData());
            if ($this->EventOrganizers->save($eventOrganizer)) {
                $this->Flash->success(__('The event organizer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event organizer could not be saved. Please, try again.'));
        }
        $this->set(compact('eventOrganizer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Organizer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventOrganizer = $this->EventOrganizers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventOrganizer = $this->EventOrganizers->patchEntity($eventOrganizer, $this->request->getData());
            if ($this->EventOrganizers->save($eventOrganizer)) {
                $this->Flash->success(__('The event organizer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event organizer could not be saved. Please, try again.'));
        }
        $this->set(compact('eventOrganizer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Organizer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventOrganizer = $this->EventOrganizers->get($id);
        if ($this->EventOrganizers->delete($eventOrganizer)) {
            $this->Flash->success(__('The event organizer has been deleted.'));
        } else {
            $this->Flash->error(__('The event organizer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
