<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Productos Controller
 *
 * @property \App\Model\Table\ProductosTable $Productos
 */
class ProductosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $productos = $this->paginate($this->Productos);

        $this->set(compact('productos'));
        $this->set('_serialize', ['productos']);
    }

    /**
     * View method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => ['Ventas','Empresas','Marcas']
        ]);

        $this->set('producto', $producto);
        $this->set('_serialize', ['producto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $producto = $this->Productos->newEntity();
        if ($this->request->is('post')) {
            $codigo=$this->request->data['codigo'];
            $modelo=$this->request->data['modelo'];
            $co=strval($codigo);
            $st=" del producto ";
            $full=$modelo.$st.$co;
            $this->request->data['full']=$full;
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producto could not be saved. Please, try again.'));
            }
        }
        $empresas = $this->Productos->Empresas->find('list', ['limit' => 200]);
        $marcas = $this->Productos->Marcas->find('list', ['limit' => 200]);
        $this->set(compact('producto','marcas','empresas'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $producto = $this->Productos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $producto = $this->Productos->patchEntity($producto, $this->request->data);
            if ($this->Productos->save($producto)) {
                $this->Flash->success(__('The producto has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The producto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('producto'));
        $this->set('_serialize', ['producto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $producto = $this->Productos->get($id);
        if ($this->Productos->delete($producto)) {
            $this->Flash->success(__('The producto has been deleted.'));
        } else {
            $this->Flash->error(__('The producto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function searchjson(){
        $term= null;
        if(!empty($this->requeste->query['term']))
        {
            $term=$this->request->query['term'];
            $terms=explode('',trim($term));
            $terms=array_diff($terms, array(''));
            foreach ($terms as $term) {
                $conditions[]=array('Producto.modelo LIKE'=> '%'.$term.'%');
            }
            $productos=$this->Producto->find('all')
                        ->select(['modelo'])
                        ->limit(10)
                        ->where([$conditions]);
            echo json_encode($productos);
            $this->autoRender=false;
        }    

    }
}
