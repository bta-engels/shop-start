
<div class="containerBox">
    <?php foreach ($data as $item):?>    
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $item['name']; ?></h3>
        <p ><?php echo $item['description']; ?></p>
        <div class="manubuttons">
            <a href="/manufacturers/<?php echo $item['id'] ?>">Details<i class="fas fa-angle-double-right"></i></a>
            <a href="/manufacturers/edit/<?php echo $item['id'] ?>">Edit<i class="fas fa-angle-double-right"></i></a>
            <a href="/manufacturers/delete/<?php echo $item['id'] ?>">Delete<i class="fas fa-angle-double-right"></i></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
