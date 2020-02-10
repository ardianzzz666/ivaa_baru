<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
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
            'contain' => ['EventOrganizers'],
        ];
        $events = $this->paginate($this->Events);

        $this->set(compact('events'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['EventOrganizers', 'Artworks', 'Khazanahs', 'EventsCategories', 'EventsDetails', 'EventsParticipants'],
        ]);

        $this->set('event', $event);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEmptyEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $eventOrganizers = $this->Events->EventOrganizers->find('list', ['limit' => 200]);
        $artworks = $this->Events->Artworks->find('list', ['limit' => 200]);
        $khazanahs = $this->Events->Khazanahs->find('list', ['limit' => 200]);
        $eventsCategories = $this->Events->EventsCategories->find('list', ['limit' => 200]);
        $this->set(compact('event', 'eventOrganizers', 'artworks', 'khazanahs', 'eventsCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Artworks', 'Khazanahs', 'EventsCategories'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $eventOrganizers = $this->Events->EventOrganizers->find('list', ['limit' => 200]);
        $artworks = $this->Events->Artworks->find('list', ['limit' => 200]);
        $khazanahs = $this->Events->Khazanahs->find('list', ['limit' => 200]);
        $eventsCategories = $this->Events->EventsCategories->find('list', ['limit' => 200]);
        $this->set(compact('event', 'eventOrganizers', 'artworks', 'khazanahs', 'eventsCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
