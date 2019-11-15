<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $market->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $market->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $market->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Markets'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($market); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Market']) ?></legend>
    <?php
    echo $this->Form->control('type');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
