<div class="users index large-12 medium-12 columns content">
    <h3><?php echo 'Lista de Usuários'; ?></h3>
    <table>
        <thead>
            <trt>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Açoes</th>
            </trt>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td> <?php echo $usuario->id; ?> </td>
                <td> <?php echo $usuario->name; ?> </td>
                <td> <?php echo $usuario->email; ?> </td>
                <td>
                    <?php
                        echo $this->Html->link(('Ver '), ['action' => 'view', $usuario->id]);
                        echo $this->Html->link((' Editar '), ['action' => 'edit', $usuario->id]);
                        echo $this->Form->postLink(('Apagar '), ['action' => 'delete', $usuario->id], ['confirm' => 'Realmente quer apagar o usuário?', $usuario->id]);
                    ?>                        
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
        echo $this->Html->link(__('Cadastrar Usuário'), ['controller' => 'users', 'action' => 'add']);
    ?>
    <div class="paginator">
        <ul class="pagination">            
            <?php echo $this->Paginator->first('<< '.__('Primeira')); ?>    
            <?php echo $this->Paginator->prev('< '.__('Anterior')); ?>    
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('Próximo').' >'); ?>    
            <?php echo $this->Paginator->last(__('Última').' >>'); ?>    
        </ul>
        <p class="">
            <?php
            echo $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrado {{current}} registro(s) do total de {{count}}')]);
            ?>
        </p>
    </div>
</div>