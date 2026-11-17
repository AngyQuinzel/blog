<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Acciones') ?></h4>
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('¿Seguro que quieres eliminar el usuario # {0}?', $user->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Editar usuario') ?></legend>
                <?php
                    echo $this->Form->control('email', ['label' => 'Correo']);
                    echo $this->Form->control('password', ['label' => 'Contraseña']);
                    echo $this->Form->control('role', ['label' => 'Rol']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('ACEPTAR')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
