<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Market $market
 */
?>

<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $market->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]
        )
    ?></li>
    <li><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>

<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $market->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]
        )
    ?></li>
    <li><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
</ul>
<?php
$this->end();
?>

<?= $this->Form->create($market) ?>
<fieldset>
    <legend><?= __('Edit Market') ?></legend>
    <?php
        echo $this->Form->control('type');
    ?>
</fieldset>
<?= $this->Form->button(__('Save')) ?>
<?= $this->Form->end() ?>

