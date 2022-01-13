<?php
require_once 'inc/header.php';

?>
<div class="editBox">
    <form  action="" method="post">
        <h2>Update</h2>
        <label >Manufacturer Name</label><br>
        <input type="text" name="name" class="field"   placeholder="Name">
        <label >Manufacturer Description</label><br>
        <div class="select">
            <select name="" id="">
                <option value="">item</option>
                <option value="">item</option>
            </select>
        </div>
        <textarea name="description" class="field"  cols="30" rows="10"  placeholder="Description"></textarea>
        <button class="btn">Update</button>
    </form>
</div>

<?php
require_once 'inc/footer.php';
?>