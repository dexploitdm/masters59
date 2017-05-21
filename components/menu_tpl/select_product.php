<option
    value="<?= $category['id'] ?>"
    <?php if ($category['id'] == $this->model->category_id) echo ' selected'?>
><?=$tab . $category['name'] ?>
</option>
<?php if( isset($category['childs']) ): ?>//Если есть потомки меню, то передаем
    <ul>
        <?= $this->getMenuHtml($category['childs'], $tab .  '-')?>
    </ul>
<?php endif;?>

