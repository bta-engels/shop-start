<?php
require_once 'inc/header.php';
?>
<div class="editBox">
    <form  action="/categories/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Categories</h2>
        <label >Categories Name</label><br>
        <input type="text" name="name" class="field" value="<?php echo $data['name'] ?? ''; ?>" placeholder="Name">
        <label >Text (Body)</label><br>
        
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>