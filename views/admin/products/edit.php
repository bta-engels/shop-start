<div class="editBox">
    <form  action="/products/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>"
        method="post"  enctype="multipart/form-data">
        <h2>Produkt</h2>
        <label>Name</label><br>
        <input type="text" name="name" class="field" placeholder="Name"
            value="<?php echo $data['name'] ?? ''; ?>">
        <label >Kategorie</label><br>
        <div class="select">
            <select name="category_id">
                <option value="">Bitte wählen</option>
                <?php
                foreach($categories as $item):
                    $selected = '';
                    if(isset($data['category_id']) && $data['category_id'] === $item['id']) {
                        $selected = 'selected';
                    }
                    ?>
                    <option value="<?php echo $item['id']; ?>" <?php echo $selected; ?>><?php echo $item['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <label >Hersteller</label><br>
        <div class="select">
            <select name="manufacturer_id">
                <option value="">Bitte wählen</option>
                <?php
                foreach($manufacturers as $item):
                    $selected = '';
                    if(isset($data['manufacturer_id']) && $data['manufacturer_id'] === $item['id']) {
                        $selected = 'selected';
                    }
                ?>
                <option value="<?php echo $item['id']; ?>" <?php echo $selected; ?>><?php echo $item['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label >Categories</label><br>
        <div class="select">
            <select name="categorie_id">
                <option value="">Bitte wählen</option>
                <?php 
                foreach($categories as $item): 
                    $selected = '';
                    if(isset($data['categorie_id']) && $data['categorie_id'] === $item['id']) {
                        $selected = 'selected';
                    }
                ?>
                <option value="<?php echo $item['id']; ?>" <?php echo $selected; ?>><?php echo $item['name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <label>Beschreibung</label><br>
        <textarea name="description" class="field" cols="30" rows="10"
        placeholder="Description"><?php echo $data['description'] ?? ''; ?></textarea>
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>
