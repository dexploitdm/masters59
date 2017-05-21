<option
    value="<?= $catalog['id'] ?>"
    <?php if ($catalog['id'] == $this->model->parent_id) echo ' selected'?>
    <?php if ($catalog['id'] == $this->model->id) echo ' disabled'?>
    ><?=$tab . $catalog['name'] ?>
</option>
<?php if( isset($catalog['childs']) ): ?>//Если есть потомки меню, то передаем
    <ul>
        <?= $this->getMenuHtml($catalog['childs'], $tab .  '-')?>
    </ul>
<?php endif;?>
<!--ВЫПОДАЮЩЕЕ МЕНЮ-->
