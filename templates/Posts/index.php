<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>

<div class="content">
    <?php foreach($posts as $post): ?>
        <h3><?php echo h($post->title); ?></h3>
    <p><?php echo $post->created; ?></p>
    <p><?php echo h($post->description); ?></p>
    <p><small>
        <?php if(!empty($post->tags)) : ?>
            <?php foreach ($post->tags as $tag): ?>
                <?php echo $this->Html->link($tag->title, ['controller' => 'Tags', 'action' => 'view', $tag->id]) ?>
                <?php echo $tag !== end($post->tags) ? ',' : '' ?>
            <?php endforeach; ?> / 
        <?php endif; ?>
    投稿者：<?php echo h($post->user->username) ?>
    </small></p>
    <a href="/posts/view/<?= $post->id ?>" class='button'>記事を読む</a>
    <?php endforeach; ?>

    <?php if($this->Paginator->total() >1): ?>
        <div class='paginator'>
            <ul class='pagination'>
                <?= $this->Paginator->first('<< 最初')?>
                <?= $this->Paginator->prev('< 前へ')?>
                <?= $this->Paginator->numbers()?>
                <?= $this->Paginator->next('次へ >')?>
                <?= $this->Paginator->last('最後 >>')?>
            </ul>
        </div>
    <?php endif; ?>


</div>