<?php
require_once 'inc/header.php';
?>
<div class="editBox">
    <form  action="/pages/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>Blogs</h2>
        <label >Title</label><br>
        <input type="text" name="title" class="field" value="<?php echo $data['title'] ?? ''; ?>" placeholder="Title">
        <label >Text (Body)</label><br>
        <textarea name="body" class="field" cols="30" rows="10" 
            placeholder="text (body)" ><?php echo $data['body'] ?? ''; ?></textarea>
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>