<?php

    $posts = posts();
    $array1 = array('&lt;', '&gt;', '&quot;', '&amp;', '&eacute;', '&#39;', '&egrave;', '&ccedil;', '&agrave;', '=&nbsp;');
    $array2 = array('<', '>', '"', '&', 'é', '\'', 'è', 'ç', 'à', '=');

    while ($data = $posts->fetch()){
        $img = $data['image'];
        $text = $data['contenu'.$lang];
        $title = $data['nomArticle'.$lang];
        $date = $data['date'];
        $imgF = str_replace($array1, $array2, $img);
        $textF = str_replace($array1, $array2, $text);
        $titleF = str_replace($array1, $array2, $title);
        $dateF = date_create(str_replace($array1, $array2, $date));
        ?>
            <div class="contentPosts post<?= $data['id'] ?>">
                <div class="imagesPosts"><?= $imgF ?></div>
                <div class="contentAllPost">
                    <div class="titlesPosts"><?= $titleF ?></div>
                    <div class="datePosts"><em><?= date_format($dateF, 'd-m-Y H:i:s') ?></em></div>
                    <div class="textsPosts"><?= $textF ?></div>
                </div>
            </div>
        <?php
    }
