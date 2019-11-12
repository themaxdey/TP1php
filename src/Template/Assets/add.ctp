<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Villes",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Assets/add', ['block' => 'scriptBottom']);
?>

<?php
$urlToGenresAutocompletedemoJson = $this->Url->build([
    "controller" => "Genres",
    "action" => "findGenres",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToGenresAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Genres/autocompletedemo', ['block' => 'scriptBottom']);
?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asset $asset
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Villes'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assets form large-9 medium-8 columns content">
    <?= $this->Form->create($asset) ?>
    <fieldset>
        <legend><?= __('Add Asset') ?></legend>
        <?php
            echo $this->Form->control('pays_id', ['options' => $pays]);
            echo $this->Form->control('villes_id', ['options' => $villes]);
            echo $this->Form->control('market_id', ['options' => $markets, 'empty' => true]);
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('body');
            echo $this->Form->input('serviceField', ['id' => 'autocomplete']);
            echo $this->Form->control('type');
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
