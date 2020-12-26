<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('school_name');
            echo $this->Form->control('created_by');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('salt');
            echo $this->Form->control('email');
            echo $this->Form->control('image');
            echo $this->Form->control('db_color');
            echo $this->Form->control('number_of_student');
            echo $this->Form->control('tracker');
            echo $this->Form->control('email_verified');
            echo $this->Form->control('parent_api_key');
            echo $this->Form->control('user_api_key');
            echo $this->Form->control('parent_ownerId');
            echo $this->Form->control('ownerId');
            echo $this->Form->control('user_group_id');
            echo $this->Form->control('access');
            echo $this->Form->control('association');
            echo $this->Form->control('property');
            echo $this->Form->control('rooms');
            echo $this->Form->control('activity');
            echo $this->Form->control('links');
            echo $this->Form->control('invoice');
            echo $this->Form->control('invoice_status');
            echo $this->Form->control('payment_status');
            echo $this->Form->control('user_plan');
            echo $this->Form->control('user_mode');
            echo $this->Form->control('next_date');
            echo $this->Form->control('last_active');
            echo $this->Form->control('notes');
            echo $this->Form->control('message');
            echo $this->Form->control('active');
            echo $this->Form->control('show_data');
            echo $this->Form->control('user_logo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
