<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArtVenues Controller
 *
 * @property \App\Model\Table\ArtVenuesTable $ArtVenues
 *
 * @method \App\Model\Entity\ArtVenue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtVenuesController extends AppController
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
            'contain' => ['Cities', 'Provinces', 'Countries'],
        ];
        $artVenues = $this->paginate($this->ArtVenues);
        $this->set('judul', 'Ruang Seni');
        $this->set(compact('artVenues'));
    }

    /**
     * View method
     *
     * @param string|null $id Art Venue id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artVenue = $this->ArtVenues->get($id, [
            'contain' => ['Cities', 'Provinces', 'Countries', 'EventsDetails'],
        ]);

        $this->set('artVenue', $artVenue);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('backend');
        $this->set('judul', 'Tambah Ruang Seni');
        $artVenue = $this->ArtVenues->newEmptyEntity();
        if ($this->request->is('post')) {
            $artVenue = $this->ArtVenues->patchEntity($artVenue, $this->request->getData());
            if ($this->ArtVenues->save($artVenue)) {
                $this->Flash->success(__('The art venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The art venue could not be saved. Please, try again.'));
        }
        $cities = $this->ArtVenues->Cities->find('list', ['limit' => 200]);
        $provinces = $this->ArtVenues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->ArtVenues->Countries->find('list', ['limit' => 200]);
        $this->set(compact('artVenue', 'cities', 'provinces', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Art Venue id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('backend');
        $this->set('judul', 'Edit Ruang Seni');
        $artVenue = $this->ArtVenues->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artVenue = $this->ArtVenues->patchEntity($artVenue, $this->request->getData());
            if ($this->ArtVenues->save($artVenue)) {
                $this->Flash->success(__('The art venue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The art venue could not be saved. Please, try again.'));
        }
        $cities = $this->ArtVenues->Cities->find('list', ['limit' => 200]);
        $provinces = $this->ArtVenues->Provinces->find('list', ['limit' => 200]);
        $countries = $this->ArtVenues->Countries->find('list', ['limit' => 200]);
        $this->set(compact('artVenue', 'cities', 'provinces', 'countries'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Art Venue id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artVenue = $this->ArtVenues->get($id);
        if ($this->ArtVenues->delete($artVenue)) {
            $this->Flash->success(__('The art venue has been deleted.'));
        } else {
            $this->Flash->error(__('The art venue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
