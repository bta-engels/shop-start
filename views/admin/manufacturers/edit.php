<?php
require_once 'inc/header.php';

?>
<div class="editBox">
    <form  action="/manufacturers/store<?php echo '/'.$data['id']?? null; ?>" method="post">
        <h2>Hersteller</h2>
        <label >Manufacturer Name</label><br>
        <input type="text" name="name" class="field"  value="<?php echo $data['name']?? null; ?>" placeholder="Name">
        <label >Manufacturer Description</label><br>
        <textarea name="description" class="field"  cols="30" rows="10"  placeholder="Description" ><?php echo $data['description']?? null; ?>
        </textarea>
        <button class="btn">Speichern</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>