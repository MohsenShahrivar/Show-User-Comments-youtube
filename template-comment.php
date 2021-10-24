<?php
/**
 * Template Name: Comment Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>

</head>
<body>

<main id="site-content" role="main">

    <?php $user_id = get_current_user_id();
    $args = array(
        'user_id' => $user_id, // use user_id
    );
    $comments = get_comments( $args );
    ?>

    <div id="your-comments" class="mt-5" style="display: flex; justify-content: center; flex-flow: column; direction: rtl;">
        <h2 class="py-4">آخرین نظرات شما در تیدینو</h2>
        <?php foreach ( $comments as $comment ) : ?>
            <div style="padding: 15px; margin: 1rem; border: 2px dashed;">
                <!--<pre>
                <?php /*var_dump( $comment ); */?>
                </pre>-->

                <h5 class="">
                    <span>در</span>
                    <a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comments'; ?>" target="_blank">
                        <?php echo get_the_title( $comment->comment_post_ID ); ?>
                    </a>
                    <span>
                    با عنوان
                    <?php echo $comment->comment_author; ?>
                    گفتید:
                    </span>
                </h5>

                <p>
                    <?php echo $comment->comment_content; ?>
                </p>
            </div>
        <?php endforeach; ?>
    </div>

</main><!-- #site-content -->

<?php wp_footer(); ?>
</body>
</html>