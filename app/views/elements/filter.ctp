<script type="text/javascript">
  // Create the javascript array
  var projects = new Array('',<?php echo implode(",", $projects); ?>);
  
  // Selector expression for case insensitive search
  jQuery.expr[':'].Contains = function(a,i,m){
    return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase())>=0;
  };

  // Function that hides and shows matched rows
  function rowslide() {
    clearTimeout(slidenow);
    var filter = $('#project_filter').val(); // get search string value
    for (var i=0; i < projects.length; i++) { // loop through all project rows
      if (projects[i].match(filter)) { 
        $('#prow' + i).slideDown(); // show the row
      } else {
        $('#prow' + i).slideUp(); // hide the row
      }
    }
    $('#load_filter').hide();
  }

  $(document).ready(function() {
    // Set and toggle value in search field
    var strval = 'Search projects..';
    $('#project_filter').val(strval);
    $('#project_filter').click(function () {
      if ($('#project_filter').val() == strval) {
        $(this).focus().val('');
      }
      $(this).focus().css({'color':'#000000', 'font-style':'normal'});
    });
    $('#project_filter').blur(function () {
      if ($('#project_filter').val() == '') {
        $(this).focus().css({'color':'#AAAAAA', 'font-style':'italic'});
        $('#project_filter').val(strval);
      }
    });
    
    // Perform the search filtering function
    $('#project_filter').change(function () {
      $('#load_filter').show();
      slidenow = setTimeout("rowslide()", 400);
    }).keyup(function () {
      $(this).change();
    });
    
    // Submit form on selection a tag from select field
    $('#tag_filter').change(function () {
      $(this).parents('form').attr('action', '/projects/index/tag:' + $(this).find(':selected').val());
      $(this).parents('form').submit();
    });
  });
</script>