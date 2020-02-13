<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Domiciles Controller
 *
 * @property \App\Model\Table\DomicilesTable $Domiciles
 *
 * @method \App\Model\Entity\Domicile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DomicilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('backend');
        $domiciles = $this->paginate($this->Domiciles);
        $this->set('judul', 'Domisili');
        $this->set(compact('domiciles'));
    }

    /**
     * View method
     *
     * @param string|null $id Domicile id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $domicile = $this->Domiciles->get($id, [
            'contain' => [],
        ]);

        $this->set('domicile', $domicile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $domicile = $this->Domiciles->newEmptyEntity();
        if ($this->request->is('post')) {
            $domicile = $this->Domiciles->patchEntity($domicile, $this->request->getData());
            if ($this->Domiciles->save($domicile)) {
                $this->Flash->success(__('The domicile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The domicile could not be saved. Please, try again.'));
        }
        $this->set(compact('domicile'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Domicile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $domicile = $this->Domiciles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $domicile = $this->Domiciles->patchEntity($domicile, $this->request->getData());
            if ($this->Domiciles->save($domicile)) {
                $this->Flash->success(__('The domicile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The domicile could not be saved. Please, try again.'));
        }
        $this->set(compact('domicile'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Domicile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $domicile = $this->Domiciles->get($id);
        if ($this->Domiciles->delete($domicile)) {
            $this->Flash->success(__('The domicile has been deleted.'));
        } else {
            $this->Flash->error(__('The domicile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
