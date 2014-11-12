<div class="row">

    <div class="span10 offset1">

        <form action="<?=\Idno\Core\site()->config()->getDisplayURL()?>following/confirm/" method="post">
            <h1>
                Follow <?=$vars['feed']->getTitle()?>? <input type="submit" class="btn btn-primary" value="Follow">
                <input type="hidden" name="feed" value="<?=htmlspecialchars($vars['feed']->getURL())?>">
                <?=\Idno\Core\site()->actions()->signForm('following/confirm')?>
            </h1>
            <p class="explanation">
                Here's the latest content.
            </p>
        </form>

    </div>

</div>
<?php

    if (!empty($vars['items'])) {

        foreach($vars['items'] as $item) {

            /* @var \Idno\Entities\Reader\FeedItem $item */
?>

            <?=$item->draw()?>

<?php

        }

    }

?>