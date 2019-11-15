<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Market[]|\Cake\Collection\CollectionInterface $markets
 */
?>

<?php
$urlToRestApi = $this->Url->build('/api/markets', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Markets/index', ['block' => 'scriptBottom']);
?>


<div class="container">
    <div class="row">
        <div class="panel panel-default markets-content">
            <div class="panel-heading">Markets <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">more</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Market</h2>
                <form class="form" id="marketAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" id="type"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="marketAction('add')">Add Market</a>
                    <!-- input type="submit" class="btn btn-success" id="addButton" value="Add Market" -->
                </form>
                <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Market</h2>
                <form class="form" id="marketEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="type" id="typeEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="marketAction('edit')">Update Market</a>
                    <!-- input type="submit" class="btn btn-success" id="editButton" value="Update Market" -->
                </form>
            </div>
            </div>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="marketData">
                    <?php
                    $count = 0;
                    foreach ($markets as $market): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $market['type']; ?></td>
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editMarket('<?php echo $market['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? marketAction('delete', '<?php echo $market['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <tr><td colspan="3">No more market(s) found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>