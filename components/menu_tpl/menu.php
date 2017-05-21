<li>
    <a href="<?= \yii\helpers\Url::to(['site/catalog', 'id' =>$catalog['id']])?>">
        <?= $catalog['title']?>
        <?php if( isset($catalog['childs']) ): ?>

        <?php endif;?>
    </a>
    <?php if( isset($catalog['childs']) ): ?>
        <ul>
            <?= $this->getMenuHtml($catalog['childs'])?>
        </ul>
    <?php endif;?>
</li>