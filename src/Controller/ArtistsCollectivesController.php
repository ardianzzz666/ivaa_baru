<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ArtistsCollectives Controller
 *
 * @property \App\Model\Table\ArtistsCollectivesTable $ArtistsCollectives
 *
 * @method \App\Model\Entity\ArtistsCollective[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtistsCollectivesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Artists', 'Collectives'],
        ];
        $artistsCollectives = $this->paginate($this->ArtistsCollectives);

        $this->set(compact('artistsCollectives'));
    }

    /**
     * View method
     *
     * @param string|null $id Artists Collective id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artistsCollective = $this->ArtistsCollectives->get($id, [
            'contain' => ['Artists', 'Collectives'],
        ]);

        $this->set('artistsCollective', $artistsCollective);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artistsCollective = $this->ArtistsCollectives->newEmptyEntity();
        if ($this->request->is('post')) {
            $artistsCollective = $this->ArtistsCollectives->patchEntity($artistsCollective, $this->request->getData());
            if ($this->ArtistsCollectives->save($artistsCollective)) {
                $this->Flash->success(__('The artists collective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artists collective could not be saved. Please, try again.'));
        }
        $artists = $this->ArtistsCollectives->Artists->find('list', ['limit' => 200]);
        $collectives = $this->ArtistsCollectives->Collectives->find('list', ['limit' => 200]);
        $this->set(compact('artistsCollective', 'artists', 'collectives'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Artists Collective id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artistsCollective = $this->ArtistsCollectives->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artistsCollective = $this->ArtistsCollectives->patchEntity($artistsCollective, $this->request->getData());
            if ($this->ArtistsCollectives->save($artistsCollective)) {
                $this->Flash->success(__('The artists collective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artists collective could not be saved. Please, try again.'));
        }
        $artists = $this->ArtistsCollectives->Artists->find('list', ['limit' => 200]);
        $collectives = $this->ArtistsCollectives->Collectives->find('list', ['limit' => 200]);
        $this->set(compact('artistsCollective', 'artists', 'collectives'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artists Collective id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artistsCollective = $this->ArtistsCollectives->get($id);
        if ($this->ArtistsCollectives->delete($artistsCollective)) {
            $this->Flash->success(__('The artists collective has been deleted.'));
        } else {
            $this->Flash->error(__('The artists collective could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
