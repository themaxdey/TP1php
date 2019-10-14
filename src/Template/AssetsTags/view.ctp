<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssetsTag $assetsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assets Tag'), ['action' => 'edit', $assetsTag->asset_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assets Tag'), ['action' => 'delete', $assetsTag->asset_id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetsTag->asset_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assets Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetsTags view large-9 medium-8 columns content">
    <h3><?= h($assetsTag->asset_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Asset') ?></th>
            <td><?= $assetsTag->has('asset') ? $this->Html->link($assetsTag->asset->title, ['controller' => 'Assets', 'action' => 'view', $assetsTag->asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $assetsTag->has('tag') ? $this->Html->link($assetsTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $assetsTag->tag->id]) : '' ?></td>
        </tr>
    </table>
</div>
