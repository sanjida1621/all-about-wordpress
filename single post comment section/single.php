<?php 
    if(!post_password_required() && comments_open()):
?>
    <div class="col-md-12">
        <?php 
        comments_template();
        ?>
    </div>
<?php 
endif; 
?>