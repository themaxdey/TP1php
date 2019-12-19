<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Pays",
    "action" => "getPays",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Assets/add', ['block' => 'scriptBottom']);
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asset $asset
 */
?>
<?php
    $this->start('tb_actions');
?>
<li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?></li>
<li><?= $this->Html->link(__('List Markets'), ['controller' => 'Markets', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Market'), ['controller' => 'Markets', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Villes'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
<?php
    $this->end();
?>

<div class="dropdown hidden-xs">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= __("Actions") ?>
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <?= $this->fetch('tb_actions') ?>
    </ul>
</div>


<div class="assets form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="paysController">
    <?= $this->Form->create($asset) ?>
    <fieldset>
        <legend><?= __('Add Asset') ?></legend>
        <div>
            Pays:
            <select name="pays_id" id="pays-id" ng-model="pays" ng-options="pays.name for pays in pays track by pays.id">
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Villes:
            <select name="ville_id" id="ville-id" ng-disabled="!pays" ng-model="ville" ng-options="ville.name for ville in pays.villes track by pays.id">
                <option value=''>Select</option>
            </select>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Save Asset')) ?>
    <?= $this->Form->end() ?>

    <div id="example1"></div> 
<p style="color:red;">{{ captcha_status }}</p>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer></script>

<script>
    var onloadCallback = function() {
        widgetId1 = grecaptcha.render('example1', {
            'sitekey' : '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'theme' : 'dark'
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer>
</div>