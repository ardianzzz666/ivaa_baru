<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Collectives Controller
 *
 * @property \App\Model\Table\CollectivesTable $Collectives
 *
 * @method \App\Model\Entity\Collective[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollectivesController extends AppController
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
            'contain' => ['Domiciles'],
        ];
        $collectives = $this->paginate($this->Collectives);

        $this->set(compact('collectives'));
    }

    /**
     * View method
     *
     * @param string|null $id Collective id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $collective = $this->Collectives->get($id, [
            'contain' => ['Domiciles', 'Artists'],
        ]);

        $this->set('collective', $collective);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $collective = $this->Collectives->newEmptyEntity();
        if ($this->request->is('post')) {
            $collective = $this->Collectives->patchEntity($collective, $this->request->getData());
            if ($this->Collectives->save($collective)) {
                $this->Flash->success(__('The collective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collective could not be saved. Please, try again.'));
        }
        $domiciles = $this->Collectives->Domiciles->find('list', ['limit' => 200]);
        $artists = $this->Collectives->Artists->find('list', ['limit' => 200]);
        $this->set(compact('collective', 'domiciles', 'artists'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Collective id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $collective = $this->Collectives->get($id, [
            'contain' => ['Artists'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $collective = $this->Collectives->patchEntity($collective, $this->request->getData());
            if ($this->Collectives->save($collective)) {
                $this->Flash->success(__('The collective has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The collective could not be saved. Please, try again.'));
        }
        $domiciles = $this->Collectives->Domiciles->find('list', ['limit' => 200]);
        $artists = $this->Collectives->Artists->find('list', ['limit' => 200]);
        $this->set(compact('collective', 'domiciles', 'artists'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Collective id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $collective = $this->Collectives->get($id);
        if ($this->Collectives->delete($collective)) {
            $this->Flash->success(__('The collective has been deleted.'));
        } else {
            $this->Flash->error(__('The collective could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
