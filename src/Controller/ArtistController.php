<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Artist Controller
 *
 *
 * @method \App\Model\Entity\Artist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtistController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $artist = $this->paginate($this->Artist);

        $this->set(compact('artist'));
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
        $artist = $this->Artist->get($id, [
            'contain' => [],
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
        $artist = $this->Artist->newEmptyEntity();
        if ($this->request->is('post')) {
            $artist = $this->Artist->patchEntity($artist, $this->request->getData());
            if ($this->Artist->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $this->set(compact('artist'));
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
        $artist = $this->Artist->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artist = $this->Artist->patchEntity($artist, $this->request->getData());
            if ($this->Artist->save($artist)) {
                $this->Flash->success(__('The artist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artist could not be saved. Please, try again.'));
        }
        $this->set(compact('artist'));
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
        $artist = $this->Artist->get($id);
        if ($this->Artist->delete($artist)) {
            $this->Flash->success(__('The artist has been deleted.'));
        } else {
            $this->Flash->error(__('The artist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
