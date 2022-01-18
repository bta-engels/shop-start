<div class="editBox">
    <form  action="/blogs/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Blogs</h2>
        <label>Titel</label><br>
        <input type="text" name="title" class="field" value="<?php echo $data['title'] ?? ''; ?>" placeholder="Titel">
        <label>Inhalt</label><br>
        <textarea name="body" class="field" cols="30" rows="10"
            placeholder="Inhalt" ><?php echo $data['body'] ?? ''; ?></textarea>
        <button class="btn">Speichern</button>
    </form>
</div>
