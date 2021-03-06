<?php

namespace App\Controller;

/**
 * Users Controller.
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method.
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 5,
            'order' => [
                'Users.id' => 'asc',
            ],
        ];

        // Testando envio de dados
        // $usuarios = 'sidnei';
        // $this->set(['usuarios' => $usuarios]);

        // Exibindo todos os usuarios
        // $usuarios = $this->Users->find()->all();

        // Adicionando Paginação
        $usuarios = $this->paginate($this->Users);
        $this->set(compact('usuarios'));
    }

    public function view($id = null)
    {
        $usuario = $this->Users->get($id);

        $this->set(['usuario' => $usuario]);
    }

    public function add()
    {
        $user = $this->Users->newEntity();

        // caso houver um click em cadastrar
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            // debug($user);
            // die();

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro: Usuário não foi cadastrado com sucesso'));
            }
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $usuario = $this->Users->get($id);

        // caso houver um click em cadastrar
        if ($this->request->is(['post', 'put'])) {
            $user = $this->Users->patchEntity($usuario, $this->request->getData());
            // debug($user);
            // die();

            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Erro: Usuário não foi editado com sucesso'));
            }
        }

        $this->set(compact('usuario'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(('Usuário apagado com sucesso'));
        } else {
            $this->Flash->error(('O usuário não foi apagado com sucesso'));
        }

        return $this->redirect((['action' => 'index']));
    }
}
