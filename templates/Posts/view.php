<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<h1><?= $post->title ?></h1>
<?php if(!empty($post->tags)) : ?>
<p><small>タグ：
    <?php foreach ($post->tags as $tag): ?>
        <?php echo $this->Html->link($tag->title, ['controller' => 'Tags', 'action' => 'view', $tag->id]) ?>
        <?php echo $tag !== end($post->tags) ? ',' : '' ?>
    <?php endforeach; ?> 
</small></p>
<?php endif; ?>
<p><small>投稿者：<?php echo h($post->user->username) ?></small></p>
<p><?= $post->body ?></p>