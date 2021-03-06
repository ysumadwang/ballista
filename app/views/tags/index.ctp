<div class="tags index">
  <h2><?php __('Tags');?></h2>
  <table cellpadding="0" cellspacing="0">
  <tr>
    <th><?php echo $this->Paginator->sort('id');?></th>
    <th><?php echo $this->Paginator->sort('tag');?></th>
    <th>&nbsp;</th>
  </tr>
  <?php
  $i = 0;
  foreach ($tags as $tag):
    $class = null;
    if ($i++ % 2 == 0) {
      $class = ' class="altrow"';
    }
  ?>
  <tr<?php echo $class;?>>
    <td><?php echo $tag['Tag']['id']; ?>&nbsp;</td>
    <td><?php echo $tag['Tag']['tag']; ?>&nbsp;</td>
    <td class="buttons">
      <?php 
        echo $this->Html->link(
          $this->Html->image('edit.png', array('alt' => 'Edit', 'title' => 'Edit')),  
          array('action' => 'edit', $tag['Tag']['id']),
          array('escape' => false)
        );
        echo $this->Html->link(
          $this->Html->image('delete.png', array('alt' => 'Delete', 'title' => 'Delete')), 
          array('action' => 'delete', $tag['Tag']['id']), 
          array('escape' => false), 
          sprintf(__('Are you sure you want to delete %s?', true), $tag['Tag']['tag'])
        ); 
      ?>
    </td>
  </tr>
  <?php endforeach; ?>
  </table>
  <p>
  <?php
    echo $this->Paginator->counter(
      array(
        'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
      )
    );
  ?>  
  </p>

  <div class="paging">
    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    | 
    <?php echo $this->Paginator->numbers();?>
    | 
    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
  </div>
</div>

<?php echo $this->element('actions') ?>
