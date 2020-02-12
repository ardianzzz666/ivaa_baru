<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * KhazanahsFiles Controller
 *
 * @property \App\Model\Table\KhazanahsFilesTable $KhazanahsFiles
 *
 * @method \App\Model\Entity\KhazanahsFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KhazanahsFilesController extends AppController
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
            'contain' => ['Khazanahs'],
        ];
        $khazanahsFiles = $this->paginate($this->KhazanahsFiles);

        $this->set(compact('khazanahsFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Khazanahs File id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khazanahsFile = $this->KhazanahsFiles->get($id, [
            'contain' => ['Khazanahs'],
        ]);

        $this->set('khazanahsFile', $khazanahsFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khazanahsFile = $this->KhazanahsFiles->newEmptyEntity();
        if ($this->request->is('post')) {
            $khazanahsFile = $this->KhazanahsFiles->patchEntity($khazanahsFile, $this->request->getData());
            if ($this->KhazanahsFiles->save($khazanahsFile)) {
                $this->Flash->success(__('The khazanahs file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanahs file could not be saved. Please, try again.'));
        }
        $khazanahs = $this->KhazanahsFiles->Khazanahs->find('list', ['limit' => 200]);
        $this->set(compact('khazanahsFile', 'khazanahs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khazanahs File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khazanahsFile = $this->KhazanahsFiles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khazanahsFile = $this->KhazanahsFiles->patchEntity($khazanahsFile, $this->request->getData());
            if ($this->KhazanahsFiles->save($khazanahsFile)) {
                $this->Flash->success(__('The khazanahs file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khazanahs file could not be saved. Please, try again.'));
        }
        $khazanahs = $this->KhazanahsFiles->Khazanahs->find('list', ['limit' => 200]);
        $this->set(compact('khazanahsFile', 'khazanahs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khazanahs File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khazanahsFile = $this->KhazanahsFiles->get($id);
        if ($this->KhazanahsFiles->delete($khazanahsFile)) {
            $this->Flash->success(__('The khazanahs file has been deleted.'));
        } else {
            $this->Flash->error(__('The khazanahs file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
