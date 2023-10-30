<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1><?= $post->title ?></h1>
<p><small>投稿者：<?php echo h($post->user->username) ?></small></p>
<p><?= $post->body ?></p>