<?php

// Do not delete these lines or the Matrix will implode. or explode. I can't remember. But whichever it is, it isn't good.
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly or we will hunt you down. Thanks and have a great day!');

    if ( post_password_required() ) { ?>
        <p class="nocomments">This post is top secret and password protected. Enter the password to view comments. (do it within 10 seconds or your computer may explode.)</p>
<?php
        return;
    }
?>

<div id="comments">
    <?php if ( have_comments() ) : ?>
        <h3><?php comments_number('No Comments', '1 Comment', '% Comments' );?> to <u><?php the_title(); ?></u></h3>

        <ol id="comments_list">
            <?php foreach ($comments as $comment) : ?>
            <?php $comment_type = get_comment_type(); ?><?php if($comment_type == 'comment') { ?>
                <li class="<?php if (the_author('', false) == get_comment_author()) echo 'author'; else echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
                    <div class="comments_meta">
                        <?php echo get_avatar($comment, $size = '96'); ?>
                        <p>by <?php comment_author_link()?></p>
                        <p>On <?php comment_date('F j, Y') ?> at <?php comment_time()?></p>
                    </div>
                    <?php if ($comment->comment_approved == '0') : ?><em>Your comment is awaiting moderation.</em><?php endif; ?>
                    <div class="comment_text">
                        <?php comment_text(); ?>
                    </div>
                </li>
                <?php /* Changes every other comment to a different class */	
                if ('alt' == $oddcomment){
                    $oddcomment = 'standard';
                } else {
                    $oddcomment = 'alt';
                }
                ?>
            <?php } else { $trackback = true; } /* End of is_comment statement */ ?>
            <?php endforeach; /* end for each comment */ ?>
        </ol>

    <?php if ($trackback == true) { ?>
        <h3>Trackbacks</h3>
        <ol>
            <?php foreach ($comments as $comment) : ?>
                <?php $comment_type = get_comment_type(); ?>
                <?php if($comment_type != 'comment') { ?>
                    <li><?php comment_author_link() ?></li>
                <?php } ?>
            <?php endforeach; ?>
        </ol>
    <?php } ?>

    <?php else : ?>
        <?php if ( !comments_open() ) : //if comments are closed ?>
		    <p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>
</div><!-- end #comments -->

<?php if ( comments_open() ) : ?>

<div class="comments_reply">
    <h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : //if visitors must be logged in to comment ?>
        <p>Sorry, but you must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( is_user_logged_in() ) : //if user is logged in, displays username and option to log out ?>
            <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
        <?php else : ?>

            <p>
                <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
                <br>
                <input type="text" name="author" class="text" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
            </p>

            <p>
                <label for="email"><small>Mail <small>(will not be published or shared)</small> <?php if ($req) echo "(required)"; ?></small></label>
                <br>
                <input type="text" name="email" class="text" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
            </p>

            <p>
                <label for="url"><small>Website</small></label>
                <br>
                <input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
            </p>
        <?php endif; ?>

        <p class="small">You can use these tags: <code><?php echo allowed_tags(); ?></code></p>
        <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

        <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <?php comment_id_fields(); ?>
        </p>
        <?php do_action('comment_form', $post->ID); ?>
    </form>

    <p class="small">By submitting a comment here you grant <?php bloginfo('name'); ?> a perpetual license to reproduce your words and name/web site in attribution. Inappropriate or irrelevant comments will be removed at <?php bloginfo('name'); ?>'s discretion.</p>
    <?php endif; // If registration required and not logged in ?>
    
</div><!-- end .comments_reply -->

<?php endif; // if you delete this the Matrix will break and will hunt you down for revenge ?>
