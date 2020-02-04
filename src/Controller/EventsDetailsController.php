<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EventsDetails Controller
 *
 * @property \App\Model\Table\EventsDetailsTable $EventsDetails
 *
 * @method \App\Model\Entity\EventsDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'ArtVenues'],
        ];
        $eventsDetails = $this->paginate($this->EventsDetails);

        $this->set(compact('eventsDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Events Detail id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventsDetail = $this->EventsDetails->get($id, [
            'contain' => ['Events', 'ArtVenues'],
        ]);

        $this->set('eventsDetail', $eventsDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventsDetail = $this->EventsDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $eventsDetail = $this->EventsDetails->patchEntity($eventsDetail, $this->request->getData());
            if ($this->EventsDetails->save($eventsDetail)) {
                $this->Flash->success(__('The events detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events detail could not be saved. Please, try again.'));
        }
        $events = $this->EventsDetails->Events->find('list', ['limit' => 200]);
        $artVenues = $this->EventsDetails->ArtVenues->find('list', ['limit' => 200]);
        $this->set(compact('eventsDetail', 'events', 'artVenues'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Events Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventsDetail = $this->EventsDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventsDetail = $this->EventsDetails->patchEntity($eventsDetail, $this->request->getData());
            if ($this->EventsDetails->save($eventsDetail)) {
                $this->Flash->success(__('The events detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events detail could not be saved. Please, try again.'));
        }
        $events = $this->EventsDetails->Events->find('list', ['limit' => 200]);
        $artVenues = $this->EventsDetails->ArtVenues->find('list', ['limit' => 200]);
        $this->set(compact('eventsDetail', 'events', 'artVenues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Events Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventsDetail = $this->EventsDetails->get($id);
        if ($this->EventsDetails->delete($eventsDetail)) {
            $this->Flash->success(__('The events detail has been deleted.'));
        } else {
            $this->Flash->error(__('The events detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
