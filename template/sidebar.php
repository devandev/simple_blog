<div class="sidebar-tag">
    <h3>Tag Sidebar :</h3>
    <?php $tag = $post->selectSidebar('tb_blog','tag'); ?>
    <ol>
        <?php foreach ($tag as $key => $value) { ?>
            <li><a href="tag.php?name=<?= $value['tag'];?>"><?= $value['tag'];?></a></li>
        <?php } ?>
    </ol>
</div>