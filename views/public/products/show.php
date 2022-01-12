<?php
require_once 'inc/header.php';

?>
<div class="containerBox">   
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $data['name']; ?> (<?php echo $data['manufacturer_name']; ?>)</h3>
      
        <p ><?php echo $data['description']; ?></p>
    </div>
    
</div>


<?php
require_once 'inc/footer.php';
?>