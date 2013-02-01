<div class='grid_4'>
    <div class='da-panel'>
        <div class='da-panel-header'>
            <span class='da-panel-title'>
                <?php echo $this->Html->image('/dandelion/images/icons/color/wand.png', array( 'alt'=>'')); ?>
                <?php echo $modalities['Modality']['name']; ?>
            </span>
            
        </div>
        <div class='da-panel-content with-padding'>
                <ul>
                </ul>
                <?php foreach ($modalities['Specialty'] as $specialty):?>
                    <li>
                        <?php echo $this->Html->link(
                                utf8_encode($specialty['name']), 
                                array('controller' => 'specialtyMemberships', 'action' => 'showList', $specialty['id'])
                            ); 
                        ?>
                    </li>
                <?php endforeach; ?>
                <?php ?>
        </div>
    </div>
</div>

