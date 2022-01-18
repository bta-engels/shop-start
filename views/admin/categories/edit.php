<div class="editBox">
    <form  action="/categories/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Kategorie</h2>
        <label>Name</label><br>
        <input type="text" name="name" class="field" value="<?php echo $data['name'] ?? ''; ?>" placeholder="Name">
        <button class="btn">Speichern</button>
    </form>
</div>
