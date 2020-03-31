<?php

?>
<?php if (isset($item)): ?>
    <div class="col item">
        <div class="item__rate">
            <?= getRate($item->ups) ?>
        </div>
        <div class="item__content">
            <div class="item__posted-by">
                Posted by: <a target="_blank" href="https://www.reddit.com/user/<?= $item->author ?>"><?= $item->author ?></a>
                <span class="item__date"><?= getFormattedDate($item->created_utc) ?></span>
            </div>
            <div class="item__title-and-thumb">
                <div>
                    <a class="item__title" target="_blank" href="<?= $item->url ?>"><?= $item->title ?></a>
                    <a href="<?= $item->url ?>" class="item__link"><?= $item->url ?></a>
                </div>
                <?php if ($item->thumbnail !== 'self' && $item->thumbnail !== 'default'): ?>
                    <img class="item__thumb" src="<?= $item->thumbnail ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif ?>
