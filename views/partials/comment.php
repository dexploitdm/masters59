<div class="comments">
    <?php if(!empty($comments)): ?>
        <?php foreach($comments as $comment ): ?>

            <h4 class="text-uppercase">3 comments </h4>
            <ul class="media-list">

                <!--=======  COMMENTS =========-->
                <li class="media">
                    <div class="media-left"> <a href="#"> <img class="media-object"src="/masters/images/com-avatar-1.jpg" alt=""> </a> </div>
                    <div class="media-body light-gray-bg">
                        <h6 class="media-heading"><?= $comment->user->name; ?><span>7</span></h6>
                        <p>HTML CODE<?= $comment->user->image;?><?= $comment->text; ?>
                        </p>
                        <a href="#" class="reply">Reply</a> </div>
                </li>

                <!--=======  COMMENTS =========-->
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>

    <!--=======  LEAVE COMMENTS =========-->
    <?php if(!Yii::$app->user->isGuest):?>
        <h4 class="font-alegreya">Написать коментарий</h4>
        <?php if(Yii::$app->session->getFlash('comment')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif;?>
        <form>
            <ul class="row">
                <?php $form = \yii\widgets\ActiveForm::begin([
                    'action'=>['site/comment', 'id'=>$afish->id],
                    'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>
                <div class="form-group">
                    <div class="col-md-12">

                        $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Ваше сообщение'])->label(false)?>
                    </div>
                </div>


                <li class="col-sm-12">
                    <button type="submit" class="btn">post comment </button>
                </li>
                <?php \yii\widgets\ActiveForm::end();?>
            </ul>
        </form>
    <?php endif; ?>


</div>