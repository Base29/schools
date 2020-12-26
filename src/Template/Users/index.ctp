<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_of_student') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tracker') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_verified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_api_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_api_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_ownerId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ownerId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('access') ?></th>
                <th scope="col"><?= $this->Paginator->sort('association') ?></th>
                <th scope="col"><?= $this->Paginator->sort('property') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rooms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('links') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_mode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('show_data') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->school_name) ?></td>
                <td><?= $this->Number->format($user->created_by) ?></td>
                <td><?= h($user->first_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->salt) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->image) ?></td>
                <td><?= $this->Number->format($user->number_of_student) ?></td>
                <td><?= $this->Number->format($user->tracker) ?></td>
                <td><?= $this->Number->format($user->email_verified) ?></td>
                <td><?= h($user->parent_api_key) ?></td>
                <td><?= h($user->user_api_key) ?></td>
                <td><?= $this->Number->format($user->parent_ownerId) ?></td>
                <td><?= $this->Number->format($user->ownerId) ?></td>
                <td><?= $this->Number->format($user->user_group_id) ?></td>
                <td><?= $this->Number->format($user->access) ?></td>
                <td><?= h($user->association) ?></td>
                <td><?= $this->Number->format($user->property) ?></td>
                <td><?= $this->Number->format($user->rooms) ?></td>
                <td><?= $this->Number->format($user->activity) ?></td>
                <td><?= $this->Number->format($user->links) ?></td>
                <td><?= h($user->invoice) ?></td>
                <td><?= $this->Number->format($user->invoice_status) ?></td>
                <td><?= $this->Number->format($user->payment_status) ?></td>
                <td><?= $this->Number->format($user->user_plan) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= $this->Number->format($user->user_mode) ?></td>
                <td><?= h($user->next_date) ?></td>
                <td><?= h($user->last_active) ?></td>
                <td><?= h($user->notes) ?></td>
                <td><?= $this->Number->format($user->active) ?></td>
                <td><?= $this->Number->format($user->show_data) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
