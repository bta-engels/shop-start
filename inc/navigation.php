<nav class="navBar">
    <a href="/home">Home</a>
    <a href="/manufacturers">Hersteller</a>
    <a href="/products">Produkte</a>
<?php if(isset($_SESSION['auth'])): ?>
    <a href="/categories">Kategorien</a>
    <a href="/pages">Pages</a>
    <a href="/blogs">Blogs</a>
    <a href="/features">Features</a>
    <a href="/users">Users</a>
<?php else: ?>
    <a href="/pages/1">About</a>
    <a href="/blogs/1">Blog</a>
    <a href="#">Kontakt</a>
<?php endif; ?>
</nav>

