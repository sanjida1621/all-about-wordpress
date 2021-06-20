<div class="comments">
<h2 class="comments-title">
<?php 
    $sanran_cmnt_nmbr= get_comments_number();
    echo $sanran_cmnt_nmbr." ".__("Comments","sanran");
?>
</h2>

<div class="comments-list">

    <?php
        wp_list_comments();
        ?>

        <div class="comments-pagination">

            <?php 
            the_comments_pagination(array(
                'screen_reader_text' => __('Comments pagination','sanran'),
                'prev_text' => '<'.__('Previous Comments','sanran'),
                'next_text' => '<'.__('Next Comments','sanran')
            ));
            ?>
            
        </div>

        <?php

        if(!comments_open()){
            _e("Comments are closed","sanran");
        }
    ?>

</div>

<div class="comments-form">
    <?php
    comment_form(); 
    ?>
</div>

</div>