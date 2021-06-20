<div class="author-section">
    <div class="row">
        <div class="col-md-3 text-center author-image">
            <?php
                echo get_avatar(get_the_author_meta("id"));
            ?>
        </div>
        <div class="col-md-9">
            <h4>
                <?php
                    echo get_the_author_meta("display_name");
                ?>
            </h4>
            <p>
                <?php
                    echo get_the_author_meta("description");
                ?>
            </p>
        </div>
    </div>
</div>