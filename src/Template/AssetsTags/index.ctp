<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssetsTag[]|\Cake\Collection\CollectionInterface $assetsTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assets Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetsTags index large-9 medium-8 columns content">
    <h3><?= __('Assets Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('asset_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetsTags as $assetsTag): ?>
            <tr>
                <td><?= $assetsTag->has('asset') ? $this->Html->link($assetsTag->asset->title, ['controller' => 'Assets', 'action' => 'view', $assetsTag->asset->id]) : '' ?></td>
                <td><?= $assetsTag->has('tag') ? $this->Html->link($assetsTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $assetsTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetsTag->asset_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetsTag->asset_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetsTag->asset_id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetsTag->asset_id)]) ?>
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
