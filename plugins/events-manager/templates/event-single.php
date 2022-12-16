<?php
/* 
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output() 
 */
 
 $member_meta = get_post_meta(get_the_ID(),'reg_member',true);
  $non_member_meta = get_post_meta(get_the_ID(),'reg_non_member',true);

?>

<div style="padding: 20px ">
    <?php 
    global $EM_Event;
    /* @var $EM_Event EM_Event */
    echo $EM_Event->output_single();
    ?>
</div>

<div style="padding: 30px 0; text-align:center; background:#cecece" class="mb-4">
    <h5 class="mb-4">Registration</h5>
    <a href="<?php echo $member_meta ?>" class="btn btn-primary">Members</a>
    <a href="<?php echo $non_member_meta ?>" class="btn btn-primary">Non-Members</a>
</div>
