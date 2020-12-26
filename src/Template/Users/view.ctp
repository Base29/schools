<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School Name') ?></th>
            <td><?= h($user->school_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salt') ?></th>
            <td><?= h($user->salt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($user->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Api Key') ?></th>
            <td><?= h($user->parent_api_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Api Key') ?></th>
            <td><?= h($user->user_api_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Association') ?></th>
            <td><?= h($user->association) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= h($user->invoice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Date') ?></th>
            <td><?= h($user->next_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Active') ?></th>
            <td><?= h($user->last_active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($user->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Of Student') ?></th>
            <td><?= $this->Number->format($user->number_of_student) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tracker') ?></th>
            <td><?= $this->Number->format($user->tracker) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Verified') ?></th>
            <td><?= $this->Number->format($user->email_verified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent OwnerId') ?></th>
            <td><?= $this->Number->format($user->parent_ownerId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OwnerId') ?></th>
            <td><?= $this->Number->format($user->ownerId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Group Id') ?></th>
            <td><?= $this->Number->format($user->user_group_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access') ?></th>
            <td><?= $this->Number->format($user->access) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Property') ?></th>
            <td><?= $this->Number->format($user->property) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rooms') ?></th>
            <td><?= $this->Number->format($user->rooms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity') ?></th>
            <td><?= $this->Number->format($user->activity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Links') ?></th>
            <td><?= $this->Number->format($user->links) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Status') ?></th>
            <td><?= $this->Number->format($user->invoice_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= $this->Number->format($user->payment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Plan') ?></th>
            <td><?= $this->Number->format($user->user_plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Mode') ?></th>
            <td><?= $this->Number->format($user->user_mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($user->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Show Data') ?></th>
            <td><?= $this->Number->format($user->show_data) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Db Color') ?></h4>
        <?= $this->Text->autoParagraph(h($user->db_color)); ?>
    </div>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($user->message)); ?>
    </div>
    <div class="row">
        <h4><?= __('User Logo') ?></h4>
        <?= $this->Text->autoParagraph(h($user->user_logo)); ?>
    </div>
</div>
