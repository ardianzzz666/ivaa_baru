<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Roso Controller
 *
 * @property \App\Model\Table\RosoTable $Roso
 *
 * @method \App\Model\Entity\Roso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RosoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $roso = $this->paginate($this->Roso);

        $this->set(compact('roso'));
    }

    /**
     * View method
     *
     * @param string|null $id Roso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roso = $this->Roso->get($id, [
            'contain' => [],
        ]);

        $this->set('roso', $roso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roso = $this->Roso->newEmptyEntity();
        if ($this->request->is('post')) {
            $roso = $this->Roso->patchEntity($roso, $this->request->getData());
            if ($this->Roso->save($roso)) {
                $this->Flash->success(__('The roso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roso could not be saved. Please, try again.'));
        }
        $this->set(compact('roso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Roso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roso = $this->Roso->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roso = $this->Roso->patchEntity($roso, $this->request->getData());
            if ($this->Roso->save($roso)) {
                $this->Flash->success(__('The roso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The roso could not be saved. Please, try again.'));
        }
        $this->set(compact('roso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Roso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roso = $this->Roso->get($id);
        if ($this->Roso->delete($roso)) {
            $this->Flash->success(__('The roso has been deleted.'));
        } else {
            $this->Flash->error(__('The roso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
