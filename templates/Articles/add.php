<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Html->link(__('Listar Articulos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="articles form content">
            <?= $this->Form->create($article) ?>
            <fieldset>
                <legend><?= __('Añadir articulo') ?></legend>
                <?php
                    echo $this->Form->control('title', ['label' => 'Título']);
                    echo $this->Form->control('body', ['label' => 'Info']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Aceptar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
