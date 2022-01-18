<div class="containerBox">
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $data['name']; ?> (<?php echo $data['manufacturer_name']; ?>)</h3>
        <?php if($data['image']): ?>
            <img src="/uploads/<?php echo $data['image']; ?>" height="200" alt="Bild" title="Bild" />
            <br>
        <?php endif; ?>
        <p><?php echo $data['description']; ?></p>
    </div>
</div>
