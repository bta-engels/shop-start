<div class="manuController">
    <div class="containerBox">
        <?php if ( is_array($data) && count($data) > 0 ): ?>
        <?php foreach ($data as $item): ?>
            <div class="box">
                <div class="icon">
                    <span class="fas fa-code"></span>
                </div>
                <h3 class="title"><?php echo $item['title']; ?></h3>
                <p><?php echo nl2br($item['body']); ?></p>
                <a href="/pages/<?php echo $item['id'] ?>"><i class="fas fa-angle-double-right"></i> Details</a>
            </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h2>Keine Daten vorhanden</h2>
        <?php endif; ?>
    </div>
</div>
