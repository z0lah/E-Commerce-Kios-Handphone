<?php
require("header.php");
echo '
	<script>
	alert("Website ini hanyalah sample untuk portofilio");
	</script>
	<p>
Is It a bird? Is it a plane? 
</p>

<div id="modal" class="modal hide fade" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h3 id="ModalLabel">No, it super modal!</h3>
    </div>
    <div class="modal-body">
    </div>
    <div class="modal-footer">
      <button class="btn" data-dismiss="modal" aria-hidden="true" data-modal-action="cancel">Ok</button>
    </div>
  </div>
 <script src="1.js"></script>
	';

require("footer.php");
?>