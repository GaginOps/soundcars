<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 */
class ClientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
   
    

    public function index()
    {
        $clientes = $this->paginate($this->Clientes);

        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Ventatotales']
        ]);

        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
        
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $nombre=$this->request->data['nombre'];
            $cedula=$this->request->data['cedula'];
            $ci=strval($cedula);
            $st=" dueño de la CI: ";
            $full=$nombre.$st.$ci;
            $this->request->data['full']=$full;
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            $descripcion=$this->request->data['carro'];
            $carros = TableRegistry::get('Carros');
            if ($this->Clientes->save($cliente)) {
               $cliente_id=$cliente->id;
               $car=['descripcion'=>$descripcion,'cliente_id'=>$cliente_id];
               $carro= $carros->newEntity($car, ['validate' => false]);
                $carros->save($carro);
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    public function add2()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('ajax')) {
            $nombre=$this->request->data['nombre'];
            $cedula=$this->request->data['cedula'];
            $ci=strval($cedula);
            $st=" dueño de la CI: ";
            $full=$nombre.$st.$ci;
            $this->request->data['full']=$full;
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            $descripcion=$this->request->data['carro'];
            $carros = TableRegistry::get('Carros');
            if ($this->Clientes->save($cliente)) {
               $cliente_id=$cliente->id;
               $car=['descripcion'=>$descripcion,'cliente_id'=>$cliente_id];
               $carro= $carros->newEntity($car, ['validate' => false]);
                $carros->save($carro);
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data);
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('The cliente has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('The cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
