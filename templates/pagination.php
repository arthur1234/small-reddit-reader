<?php
if (isset($nextPage)): ?>
    <div class="pagination">
        <a href="/items.php?after=<?= $nextPage ?>" class="next">Next page</a>
    </div>
<?php endif ?>
