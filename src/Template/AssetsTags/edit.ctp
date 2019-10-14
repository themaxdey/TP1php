<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssetsTag $assetsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assetsTag->asset_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assetsTag->asset_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Assets Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetsTags form large-9 medium-8 columns content">
    <?= $this->Form->create($assetsTag) ?>
    <fieldset>
        <legend><?= __('Edit Assets Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
