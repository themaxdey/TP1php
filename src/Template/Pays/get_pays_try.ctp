<dl>
    <?php foreach ($pays as $pays): ?>
        <li value="<?php echo $pays['id']; ?>"><?php echo $pays['name']; ?>
            <dl>
                <?php foreach ($pays->ville as $ville): ?>
                    <li value="<?php echo $ville['id']; ?>"><?php echo $ville['name']; ?>
                <?php endforeach; ?>            
            </dl>
        </li>
    <?php endforeach; ?>
</dl>
