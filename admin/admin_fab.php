<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 30px;">
    <a class="btn-floating btn-large black tooltipped" data-position="left" data-delay="25" data-tooltip="New">
      <i class="large material-icons" >add</i>
    </a>
    <ul>
<!--      <li>
          <a href="index.php?fab=<?php echo md5(1)?>"
              class="btn-floating tooltipped blue darken-2" data-position="left" 
             data-delay="25" data-tooltip="New Department">
              <i class="material-icons">school</i>
          </a>
      </li>-->
      <li>
          <a href="index.php?fab=<?php echo md5(2)?>"
              class="btn-floating tooltipped red darken-2" data-position="left" 
             data-delay="25" data-tooltip="New Course">
              <i class="material-icons">import_contacts</i>
          </a>
      </li>
      <li>
          <a href="index.php?fab=<?php echo md5(3)?>"
              class="btn-floating tooltipped yellow darken-2" data-position="left" 
             data-delay="25" data-tooltip="New Faculty">
              <i class="material-icons">person_add</i>
          </a>
      </li>
      <li>
          <a href="index.php?fab=<?php echo md5(4)?>"
              class="btn-floating tooltipped green darken-3" data-position="left" 
             data-delay="25" data-tooltip="New Student">
              <i class="material-icons">people</i>
          </a>
      </li>
    </ul>
</div>
<script>
    $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 25});
  });
</script>