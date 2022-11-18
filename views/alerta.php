<?php if(isset($error)): ?>
<div class="alert alert-<?= $error['type']?>" role="alert">
    <?= $error['message']?>
</div>
<?php endif;?>