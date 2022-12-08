<?php
namespace App\Views;

$post = $data["post"];

?>

<article>
    <h2><?= $post["title"]?></h2>
    <p><?= $post["content"]?></p>
    <h4><?= $post["created_at"]?></h4>
    <h5>Author : <?= $post["author"]?></h5>

</article>
