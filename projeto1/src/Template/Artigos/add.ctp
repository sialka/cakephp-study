<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo $artigo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Artigos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cats Artigos'), ['controller' => 'CatsArtigos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cats Artigo'), ['controller' => 'CatsArtigos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artigos form large-9 medium-8 columns content">
    <?= $this->Form->create($artigo) ?>
    <fieldset>
        <legend><?= __('Add Artigo') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('conteudo');
            echo $this->Form->control('cats_artigo_id', ['options' => $catsArtigos, 'empty' => true]);
            echo $this->Form->control('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
