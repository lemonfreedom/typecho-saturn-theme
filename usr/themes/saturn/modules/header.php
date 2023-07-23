<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle([
                'category' => _t('%s'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?php $this->options->themeUrl('styles/index.min.css'); ?>">
    <script src="<?php $this->options->themeUrl('scripts/pjax.min.js'); ?>"></script>
    <?php $this->header(); ?>
</head>

<body class="default">
    <header id="header">
        <div class="container">
            <ul class="header-menu">
                <li class="header-menu-item">
                    <a class="header-menu-item-link" href="/">首页</a>
                </li>
                <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                <?php while ($pages->next()) : ?>
                    <li class="header-menu-item">
                        <a class="header-menu-item-link<?= $this->is('page', $pages->slug) ? ' current' : '' ?>" href="<?php $pages->permalink(); ?>">
                            <span><?php $pages->title(); ?></span>
                        </a>
                        <div class="header-menu-item-board">
                            <?php \Widget\Metas\Category\Rows::alloc()->listCategories('wrapClass=category-list'); ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="header-right-wrap">
                <button class="header-right-button">登录</button>
            </div>
        </div>
    </header>
