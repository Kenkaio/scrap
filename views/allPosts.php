<?php

    $posts = allPosts();
    $array1 = array('&lt;', '&gt;', '&quot;', '&amp;', '&eacute;', '&#39;', '&egrave;', '&ccedil;', '&agrave;', '=&nbsp;');
    $array2 = array('<', '>', '"', '&', 'é', '\'', 'è', 'ç', 'à', '=');

    while ($data = $posts->fetch()){
        $img = $data['image'];
        $imgF = str_replace($array1, $array2, $img);
        ?>
            <div class="contentAllPosts post<?= $data['id'] ?>">
                <div class="imagesAllPosts"><?= $imgF ?></div>
            </div>
        <?php
    }
