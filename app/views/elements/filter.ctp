<div class="search_filter_form">
  <form id="filter_form" action="/projects/" method="post">
    <?php echo $this->Form->input('Tag', array('options' => $tags, 'label' => '', 'empty' => 'Filter by tag', 'id' => 'tag_filter')); ?>
  </form>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#tag_filter').change(function () {
      $(this).parents('form').attr('action', '/projects/index/tag:' + $(this).find(':selected').val());
      $(this).parents('form').submit();
    });
  });
</script>