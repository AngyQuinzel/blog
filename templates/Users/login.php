<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Iniciar sesión</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Escribe tu correo y tu contraseña') ?></legend>
        <?= $this->Form->control('email', ['required' => true, 'label' => 'Correo']) ?>
        <?= $this->Form->control('password', ['required' => true, 'label' => 'Contraseña']) ?>
    </fieldset>
    <?= $this->Form->submit(__('Entrar')); ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link("Crear usuario", ['action' => 'add']) ?>
</div>
