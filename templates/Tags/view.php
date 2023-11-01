<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tags $tag
 */
?>
<h1>「<?= $tag->title ?>」の投稿一覧</h1>
<?php foreach($posts as $post): ?>
    <h3><?php echo h($post->title); ?></h3>
    <p><?php echo $post->created; ?></p>
    <p><?php echo h($post->description); ?></p>
    <p><small>
        <?php if(!empty($post->tags)) : ?>
            <?php foreach ($post->tags as $tag): ?>
                <?php echo $this->Html->link($tag->title, ['action' => 'view', $tag->id]) ?>
                <?php echo $tag !== end($post->tags) ? ',' : '' ?>
            <?php endforeach; ?> / 
        <?php endif; ?>
    投稿者：<?php echo h($post->user->username) ?>
    </small></p>
    <a href="/posts/view/<?= $post->id ?>" class='button'>記事を読む</a>
    <hr>
<?php endforeach; ?>
<?php echo $this->Html->link('一覧へ戻る', [
    'action' => 'index'
],['class' => 'button']) ?>
