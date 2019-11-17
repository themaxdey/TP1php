
<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Market') ?></th>
            <td><?= $asset->has('market') ? $this->Html->link($asset->market->id, ['controller' => 'Markets', 'action' => 'view', $asset->market->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($asset->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ServiceField') ?></th>
            <td><?= h($asset->serviceField) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($asset->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($asset->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($asset->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($asset->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Invoice') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Efface') ?></th>

            </tr>
            <?php foreach ($asset->events as $events): ?>
            <tr>
                <td><?= h($events->type) ?></td>
                <td><?= h($events->date) ?></td>
                <td><?= h($events->invoice) ?></td>
                <td><?= h($events->description) ?></td>
                <td><?= h($events->efface) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
