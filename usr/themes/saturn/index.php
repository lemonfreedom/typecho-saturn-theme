<?php

/**
 * Saturn 网站主题
 *
 * @package Saturn Theme
 * @author Saturn
 * @version 1.0
 * @link http://saturnchain.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('modules/header.php');
?>
<img src="https://mkblog.cn/wp-content/uploads/2020/09/QQ20200920203357-1.png" alt="">
<!-- <?php while ($this->next()) : ?>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title" itemprop="name headline">
            <a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </h2>
        <ul class="post-meta">
            <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
            <li><?php _e('时间: '); ?>
                <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            </li>
            <li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
            <li itemprop="interactionCount">
                <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
            </li>
        </ul>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content('- 阅读剩余部分 -'); ?>
        </div>
    </article>
<?php endwhile; ?> -->
<?php $this->need('modules/footer.php'); ?>
