<?php $this->title = 'Masters59 | Админ';?>
<section id="content">


    <div id="content__grid" data-columns>
        <div class="card">
            <div class="card__header">
                <h2>Последние отзывы</h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="">Refresh</a></li>
                            <li><a href="">Manage</a></li>
                            <li><a href="">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <?php foreach($recentOtz as $afish): ?>
                <a href="" class="list-group-item media">
                    <div class="pull-left">
                        <img class="avatar-img" src="<?= $afish->user->photo ?>" alt="">
                    </div>

                    <div class="media-body">
                        <div class="list-group__heading"><?= $afish->user->name; ?></div>
                        <small class="list-group__text"><?= $afish->text ?></small>
                    </div>
                </a>
                <?php endforeach; ?>


                <a href="<?php echo Yii::getAlias('@admin');   ?>/zovs/index" class="view-more">
                    <i class="zmdi zmdi-long-arrow-right"></i> Показать все
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card__header">
                <h2>Последние комментарии</h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="">Refresh</a></li>
                            <li><a href="">Manage</a></li>
                            <li><a href="">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="list-group">
                <?php foreach($recenCom as $comment): ?>
                    <a href="" class="list-group-item media">
                        <div class="pull-left">
                            <img class="avatar-img" src="<?= $comment->user->photo ?>" alt="">
                        </div>

                        <div class="media-body">
                            <div class="list-group__heading"><?= $comment->user->name; ?></div>
                            <small class="list-group__text"><?= $comment->text ?></small>
                        </div>
                    </a>
                <?php endforeach; ?>


                <a href="<?php echo Yii::getAlias('@admin');   ?>/comment/index" class="view-more">
                    <i class="zmdi zmdi-long-arrow-right"></i> Показать все
                </a>
            </div>
        </div>

        <div class="card widget-past-days">
            <div class="card__header">
                <h2>For the past 30 days <small>Pellentesque ornare sem lacinia quam</small></h2>
                <div class="actions">
                    <div class="dropdown">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="">Refresh</a></li>
                            <li><a href="">Manage</a></li>
                            <li><a href="">Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="card widget-todo-lists">
            <div class="card__header card__header--highlight">
                <h2>Каталоги<small></small></h2>

                <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
            </div>

            <div class="list-group">
                <div class="list-group-item">
                    <div class="checkbox checkbox--char">
                        <label>
                            <input type="checkbox" checked>
                            <span class="checkbox__helper"><i>F</i></span>
                            <span class="widget-todo-lists__info">
                                            Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            <small>Today at 8.30 AM</small>
                                        </span>

                            <span class="list-group__attrs">
                                            <span>#Messages</span>
                                            <span>!!!</span>
                                        </span>
                        </label>
                    </div>

                    <div class="actions list-group__actions">
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                            <ul class="dropdown-menu pull-right">
                                <li><a href="">Mark as done</a></li>
                                <li><a href="">Edit</a></li>
                                <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="" class="view-more"><i class="zmdi zmdi-long-arrow-right"></i> View all</a>
        </div>

        <div class="card widget-calendar">
            <div class="card__header card__header--highlight">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>

                <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
            </div>

            <div class="card__body--sm">
                <div id="widget-calendar__main"></div>
            </div>
        </div>

    </div>
</section>
