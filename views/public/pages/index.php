<div class="containerBox">
    <?php foreach ($data as $item):?>  
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $item['title']; ?></h3>
        <p ><?php echo $item['body']; ?></p>
        <a href="/pages/<?php echo $item['id'] ?>">Details <i class="fas fa-angle-double-right"></i></a>
    </div>
    <?php endforeach; ?>
</div>
