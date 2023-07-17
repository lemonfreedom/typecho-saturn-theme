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
    <div class="morph-wrap">
        <svg class="morph" width="1400" height="770" viewBox="0 0 1400 770">
            <path d="M 262.9,252.2 C 210.1,338.2 212.6,487.6 288.8,553.9 372.2,626.5 511.2,517.8 620.3,536.3 750.6,558.4 860.3,723 987.3,686.5 1089,657.3 1168,534.7 1173,429.2 1178,313.7 1096,189.1 995.1,130.7 852.1,47.07 658.8,78.95 498.1,119.2 410.7,141.1 322.6,154.8 262.9,252.2 Z" />
        </svg>
    </div>
    <header id="header">
        <ul class="header-menu">
            <li class="header-menu-item">
                <a href="/">
                    <svg class="decoshape" preserveAspectRatio="none" viewBox="0 0 200 100">
                        <path d="M 6.144,74.1 C 20.4,107.4 70.13,94.33 94.22,95.74 121.3,97.41 130.8,101.1 154.7,99.38 178.6,97.72 201.9,78.95 199.4,46.86 197.1,14.96 174.9,4.781 161.4,1.827 147.9,-1.128 119.8,8.284 105.6,8.766 85.34,9.449 81.91,7.628 51.08,2.334 17.26,-3.482 -8.105,40.84 6.144,74.1 Z" />
                    </svg>
                    <span class="material-symbols-rounded">home</span>
                    <span>首页</span>
                </a>
            </li>
            <li class="header-menu-item">
                <svg class="decoshape" preserveAspectRatio="none" viewBox="0 0 200 100">
                    <path d="M 6.144,74.1 C 20.4,107.4 70.13,94.33 94.22,95.74 121.3,97.41 130.8,101.1 154.7,99.38 178.6,97.72 201.9,78.95 199.4,46.86 197.1,14.96 174.9,4.781 161.4,1.827 147.9,-1.128 119.8,8.284 105.6,8.766 85.34,9.449 81.91,7.628 51.08,2.334 17.26,-3.482 -8.105,40.84 6.144,74.1 Z" />
                </svg>
                <span class="material-symbols-rounded">category</span>
                <span>分类</span>
                <div class="header-menu-item-board">
                    <?php \Widget\Metas\Category\Rows::alloc()->listCategories('wrapClass=category-list'); ?>
                </div>
            </li>
        </ul>
    </header>
    <main id="main" class="loading">
