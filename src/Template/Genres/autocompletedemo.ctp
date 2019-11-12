<?php
$urlToGenresAutocompletedemoJson = $this->Url->build([
    "controller" => "Genres",
    "action" => "findGenres",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToGenresAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Genres/autocompletedemo', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Genres') ?>
<fieldset>
    <legend><?= __('Search Genre') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>