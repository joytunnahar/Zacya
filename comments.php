
<!-- post comments starts -->
<?php 
if(post_password_required()){
    return;
}
$zacya_comments_count = get_comments_number();
?>

<style>
    ul.coments-list >li.comment ul.children{
        margin-left: 70px;
        padding-left: 0;
    }
</style>
<div id="comments" class="comments-area">
    <?php 
    if(have_comments()):
    ?>

<!-- comments title -->
<h3 class="comments-heading">
    
<?php if('1'===$zacya_comments_count)?>
<?php esc_html_e('1 comment', 'zacya')?>
<?php else: ?>
    <?php 
        printf(
            esc_html(_nx('%s comment', '%s comments', $zacya_comments_count,'comments title', 'zacya')),
            esc_html(number_format_i18n( $zacya_comments_count))
        );
    ?>
<?php endif; ?>

</h3>

<?php 
if(get_comment_pages_count() > 1 && get_option('page-comments') ):
?>
<nav>
    <h1>Comments Navigations</h1>
    <div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'zacya')); ?></div>
    <div class="nav-next"><?php next_comments_link(__('Next Comments', 'zacya')); ?></div>
</nav>
<?php endif; ?>

<!-- comment list -->
<ul class="comments-list">
    <?php 
    wp_list_comments(
        array(
            'avatar_size'=> 84,
           ' style'=> 'ul',
           'short_ping'=> true,
        )
    )
    ?>

</ul>

<!-- comments reply -->
<?php 
if(get_comment_pages_count() > 1 && get_option('page-comments') ):
?>
<nav>
    <h1>Comments Navigations</h1>
    <div class="nav-previous"><?php previous_comments_link(__('Older Comments', 'zacya')); ?></div>
    <div class="nav-next"><?php next_comments_link(__('Next Comments', 'zacya')); ?></div>
</nav>
<?php endif; ?>



<!-- is off comments -->
<?php if(!comments_open()):?>
    <h3 class="cooments-heading"><?php esc_html_e('comments are closed', 'zacya') ?></h3>
    <?php endif; ?>
<!-- post comments end -->

    
<!-- comments form -->
<?php 
$fields=array(
   'author'=> '<div class="col-md-4">
   <div class="form-group">
   <label for="name"><input class="form-control" name="author" id="name" placeholder="Your Name" type="text" required></label>
 </div>  
 </div> ' ,

 'email'=>'<div class="col-md-4">
     <div class="form-group">
   <label for="email"><input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required></label>
 </div>
</div>',

'url'=>'<div class="col-md-4">
<div class="form-group">
  <label for="website"><input class="form-control" id="website"  name="url" placeholder="Your Website" type="text" required></label>
</div>
</div>'
  
);

$args=array(
    'class_submit'=> 'btn btn-primary',
    'label_submit'=>'Post Comments',
    'comment_field'=>'<div class="col-md-12">
    <div class="form-group">
      <label for="message"><textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" cols="50" required></textarea></label>
    </div>
  </div>',
    'fields'=> apply_filters('comments_form_default_fields', $fields)
);
comment_form($args);
?>

