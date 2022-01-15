<div class="editBox">
    <form  action="/manufacturers/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Hersteller</h2>
        <label >Manufacturer Name</label><br>
        <input type="text" name="name" class="field" value="<?php echo $data['name'] ?? ''; ?>" placeholder="Name">
        <label >Manufacturer Description</label><br>
        <textarea name="description" class="field" cols="30" rows="10"
            placeholder="Description" ><?php echo $data['description'] ?? ''; ?></textarea>
        <button class="btn">Speichern</button>
    </form>
</div>
