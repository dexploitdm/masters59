<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<!-- Header -->
<header id="header">
    <div class="logo">
        <a href="#" class="hidden-xs">
            Master59
            <small>Административная панель</small>
        </a>
        <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
    </div>

    <ul class="top-menu">
        <li class="top-menu__trigger hidden-lg hidden-md">
            <a href=""><i class="zmdi zmdi-search"></i></a>
        </li>

        <li class="top-menu__apps dropdown hidden-xs hidden-sm">
            <a data-toggle="dropdown" href="">
                <i class="zmdi zmdi-apps"></i>
            </a>
            <ul class="dropdown-menu pull-right">
                <li>
                    <a href="">
                        <i class="zmdi zmdi-calendar"></i>
                        <small>Calendar</small>
                    </a>
                </li>

                <li>
                    <a href="">
                        <i class="zmdi zmdi-file-text"></i>
                        <small>Files</small>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-email"></i>
                        <small>Mail</small>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-trending-up"></i>
                        <small>Analytics</small>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-view-headline"></i>
                        <small>News</small>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="zmdi zmdi-image"></i>
                        <small>Gallery</small>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown hidden-xs">
            <a data-toggle="dropdown" href=""><i class="zmdi zmdi-more-vert"></i></a>
            <ul class="dropdown-menu dropdown-menu--icon pull-right">
                <li class="hidden-xs">
                    <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                </li>
                <li>
                    <a data-mae-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                </li>
            </ul>
        </li>
        <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
            <a href=""><i class="zmdi zmdi-notifications"></i></a>
        </li>
        <li class="top-menu__profile dropdown">
            <a data-toggle="dropdown" href="">
                <img src="/adminTheme/demo/img/profile-pics/1.jpg" alt="">
            </a>

            <ul class="dropdown-menu pull-right dropdown-menu--icon">
                <li>
                    <a href="profile-about.html"><i class="zmdi zmdi-account"></i> Профиль</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-settings"></i> Перейти на сайт</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i> Выход</a>
                </li>
            </ul>
        </li>
    </ul>

</header>

<section id="main">
    <aside id="notifications">
        <ul class="tab-nav tab-nav--justified tab-nav--icon">
            <li><a class="user-alert__messages" href="#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
            <li><a class="user-alert__notifications" href="#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
            <li><a class="user-alert__tasks" href="#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane" id="notifications__messages">
                <div class="list-group">
                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="media-body">
                            <div class="list-group__heading">David Villa Jacobs</div>
                            <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Candice Barnes</div>
                            <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Jeannette Lawson</div>
                            <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Darla Mckinney</div>
                            <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Rudolph Perez</div>
                            <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                        </div>
                    </a>
                </div>

                <a href="" class="btn btn--float">
                    <i class="zmdi zmdi-plus"></i>
                </a>
            </div>

            <div class="tab-pane" id="notifications__updates">
                <div class="list-group">
                    <a href="" class="list-group-item media">
                        <div class="pull-right">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="media-body">
                            <div class="list-group__heading">David Villa Jacobs</div>
                            <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item">
                        <div class="list-group__heading">Candice Barnes</div>
                        <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                    </a>

                    <a href="" class="list-group-item">
                        <div class="list-group__heading">Jeannette Lawson</div>
                        <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-right">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Darla Mckinney</div>
                            <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                        </div>
                    </a>

                    <a href="" class="list-group-item media">
                        <div class="pull-right">
                            <img class="avatar-img" src="/adminTheme/demo/img/profile-pics/2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <div class="list-group__heading">Rudolph Perez</div>
                            <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                        </div>
                    </a>
                </div>
            </div>

            <div class="tab-pane" id="notifications__tasks">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="list-group__heading m-b-5">HTML5 Validation Report</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                <span class="sr-only">95% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group__heading m-b-5">Google Chrome Extension</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group__heading m-b-5">Social Intranet Projects</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group__heading m-b-5">Bootstrap Admin Template</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="list-group__heading m-b-5">Youtube Client App</div>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="" class="btn btn--float">
                    <i class="zmdi zmdi-plus"></i>
                </a>
            </div>
        </div>
    </aside>

    <aside id="navigation">
        <div class="navigation__header">
            <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
        </div>

        <div class="navigation__toggles">
            <a href="/admin/zovs/index" class="active" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                <i class="zmdi zmdi-email"></i>
            </a>
        </div>

        <div class="navigation__menu c-overflow">
            <ul>
                <li class="navigation__active">
                    <a href="/admin/default/index"><i class="zmdi zmdi-home"></i> Главная</a>
                </li>
                <li><a href="/admin/banner/index"><i class="zmdi zmdi-image"></i> Редактировани главной</a></li>
                <li><a href="/admin/comment/index"><i class="zmdi zmdi-format-underlined"></i> Коментарии</a></li>
                <li><a href="/admin/catalog/index"><i class="zmdi zmdi-widgets"></i> Каталоги</a></li>
                <li><a href="/admin/afish/index"><i class="zmdi zmdi-layers"></i> Афиши</a></li>
                <li><a href="/admin/zovs/index" class="dropmenu"><i class="zmdi zmdi-collection-item"></i> Отзывы</a></li>
            </ul>
        </div>
    </aside>

<?= $content; ?>
    <footer id="footer">
        Exploitdm &copy; 2017 Material Admin

        <ul class="footer__menu">
            <li><a href="/site/index">Перейти на сайт</a></li>
        </ul>
    </footer>
</section>







<?php $this->endBody() ?>
<?php $this->registerJsFile('/ckeditor/ckeditor.js'); ?>
<?php $this->registerJsFile('/ckfinder/ckfinder.js'); ?>
<script>
    $(document).ready(function(){
        var editor = CKEDITOR.replaceAll();
        CKFinder.setupCKEditor( editor );
    })
</script>

</body>
</html>
<?php $this->endPage() ?>
