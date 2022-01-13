<?php
require_once 'inc/header.php';
?>
<div class="editBox">
    <form  action="/products/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Update </h2>
        <label >Product Name</label><br>
        <input type="text" name="name" class="field" value="<?php echo $data['name'] ?? ''; ?>" placeholder="Name">
        <label >Manufacturer Name</label><br>
        <div class="field">
            <select name="manufacturer_id">
                <option value="<?php echo $data['manufacturer_id']; ?>"><?php echo $data['manufacturer_name'] ?? ''; ?></option>
                <option value="<?php echo $data['manufacturer_id']; ?>"><?php echo $data['manufacturer_name'] ?? ''; ?></option>
            </select>

        </div>
        <label >Product Description</label><br>
        <textarea name="description" class="field" cols="30" rows="10" 
        placeholder="Description"><?php echo $data['description'] ?? ''; ?></textarea>
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>