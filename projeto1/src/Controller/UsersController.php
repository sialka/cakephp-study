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
}
