<?php
require('../templates/header.php');
require('../templates/menu.php');

?>
<div style="display: none">
    <!-- query -->
</div>

<form name="user" action="index.php?action=updateImage" method="post">
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="form-group"><label for="titolo" class="required">Titolo</label><input type="text" id="titolo" name="titolo"  maxlength="180" class="form-control" readonly value="<?php echo ""?>"></div>
        </div>
        <button class="btn btn-primary">Salva</button>
    </div>

