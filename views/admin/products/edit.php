<?php
require_once 'inc/header.php';
?>
<div class="editBox">
    <form  action="/products/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Products </h2>
        <label >Product Name</label><br>
        <input type="text" name="name" class="field" placeholder="Name" value="<?php echo $data['name'] ?? ''; ?>">
        <label >Product Description</label><br>
        <textarea name="description" class="field" cols="30" rows="10" 
        placeholder="Description"><?php echo $data['description'] ?? ''; ?></textarea>
        <div class="select">
            <select name="manufacturer_id">
                <option value="">Bitte wählen</option>
                <?php foreach ($manufacturers as $item) :?>
                    <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                <?php endforeach;?>
            </select>
        </div>
        
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>