<?php
?>

<?php if (!empty($links)) :?>
<ul>
    <?php foreach ($links as $link) : ?>
    <li>
        <a href="<?= $link->link?>" class="nav-link">
            <?= $link->title?>
        </a>
        <!-- /.mav-link -->
    </li>
        <?php endforeach;?>
</ul>
<?php endif; ?>