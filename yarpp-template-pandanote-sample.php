<?php 
/**
 * YARPP Template: yarpp-template-pandanote-sample
 * Author: pandanote
 * Description: Template description
 */
?>

<h3>こちらの記事も人気！タグ関連記事</h3>
<?php if(have_posts()):?>
    <div class="yarpp-thumbnails-horizontal flexbox--spacebetween">
    <?php $adpos = 0; ?>
    <?php while(have_posts()) : the_post(); ?>
    	<?php if ($adpos == 2): ?>
        <!-- Insert your infeed ad area ↓-->
        <a class="yarpp-thumbnail" href="">インフィード広告</a> 
        <!-- Insert your infeed ad area ↑-->
        <?php elseif ($adpos == 3): ?>
        <!-- Insert your infeed ad area ↓-->
        <a class="yarpp-thumbnail" href="">インフィード広告</a> 
        <!-- Insert your infeed ad area ↑-->
	<?php endif; ?>
        <a class="yarpp-thumbnail" href="<?php the_permalink() ?>"
           title="<?php the_title_attribute(); ?>"
           rel="bookmark"
           class="related-post">
            <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(array(125, 125)); ?>
            <?php else : ?>
            <img src="<?php echo plugins_url() . '/' . 'yet-another-related-posts-plugin/images/default.png' ?>"
                 alt="no thumbnail"
                 title="no thumbnail"/>
            <?php endif; ?>
            <?php the_title(); ?>
        </a>   
	<?php $adpos++; ?>
    <?php endwhile; ?>
    </div>
<?php else : ?>
<p>関連するページはありません。</p>
<?php endif; ?>

