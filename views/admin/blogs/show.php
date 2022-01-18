<?php
require_once 'inc/header.php';

?>
     
<div class="containerBox">   
    <div class="box">
        <div class="icon">
            <span class="fas fa-code"></span>
        </div>
        <h3 class="title"><?php echo $data['title']; ?></h3>
        <p ><?php echo $data['body']; ?></p>
    </div>
    
</div>


<?php
require_once 'inc/footer.php';
?>