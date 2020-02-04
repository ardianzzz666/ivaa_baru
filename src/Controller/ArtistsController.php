<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Artists Controller
 *
 * @property \App\Model\Table\ArtistsTable $Artists
 *
 * @method \App\Model\Entity\Artist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Countries', 'Cities', 'Domiciles'],
        ];
        $artists = $this->paginate($this->Artists);

        $this->set(compact('artists'));
    }

    /**
     * View method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => ['Users', 'Countries', 'Cities', 'Domiciles', 'CreativeIndustries', 'Collectives', 'Khazanahs'],
        ]);

        $this->set('artist', $artist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artist = $this->Artists->newEmptyEntity();
        if ($this->request->is('post')) {
            $artist = $this->Artists->patchEntity($artist, $this->request->getData());
            if ($this->Artists->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $users = $this->Artists->Users->find('list', ['limit' => 200]);
        $countries = $this->Artists->Countries->find('list', ['limit' => 200]);
        $cities = $this->Artists->Cities->find('list', ['limit' => 200]);
        $domiciles = $this->Artists->Domiciles->find('list', ['limit' => 200]);
        $creativeIndustries = $this->Artists->CreativeIndustries->find('list', ['limit' => 200]);
        $collectives = $this->Artists->Collectives->find('list', ['limit' => 200]);
        $this->set(compact('artist', 'users', 'countries', 'cities', 'domiciles', 'creativeIndustries', 'collectives'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artist = $this->Artists->get($id, [
            'contain' => ['CreativeIndustries', 'Collectives'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artist = $this->Artists->patchEntity($artist, $this->request->getData());
            if ($this->Artists->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $users = $this->Artists->Users->find('list', ['limit' => 200]);
        $countries = $this->Artists->Countries->find('list', ['limit' => 200]);
        $cities = $this->Artists->Cities->find('list', ['limit' => 200]);
        $domiciles = $this->Artists->Domiciles->find('list', ['limit' => 200]);
        $creativeIndustries = $this->Artists->CreativeIndustries->find('list', ['limit' => 200]);
        $collectives = $this->Artists->Collectives->find('list', ['limit' => 200]);
        $this->set(compact('artist', 'users', 'countries', 'cities', 'domiciles', 'creativeIndustries', 'collectives'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artist = $this->Artists->get($id);
        if ($this->Artists->delete($artist)) {
            $this->Flash->success(__('The artist has been deleted.'));
        } else {
            $this->Flash->error(__('The artist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
