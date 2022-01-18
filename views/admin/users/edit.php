<div class="editBox">
    <form  action="/users/store<?php if(isset($data['id'])) echo '/'.$data['id']; ?>" method="post">
        <h2>User</h2>
        <label>Name</label><br>
        <input type="text" name="name" class="field" value="<?php echo $data['name'] ?? ''; ?>" placeholder="Name">
        <label>Email</label><br>
        <input type="email" name="email" class="field" value="<?php echo $data['email'] ?? ''; ?>" placeholder="Email">
        <label>Passwort</label><br>
        <input type="password" name="password" class="field" value="" placeholder="Password">
        <button class="btn">Speichern</button>
    </form>
</div>
