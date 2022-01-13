RedirectPermanent /shop-start http://shop-start.loc

<IfModule mod_headers.c>
	Header set Access-Control-Allow-Origin "*"
</IfModule>

RewriteEngine On
#RewriteRule  ^login$ index.php?controller=user&action=login
RewriteRule  ^login/check$ index.php?controller=user&action=check
RewriteRule  ^logout$ index.php?controller=user&action=logout

#RewriteRule  ^api/manufacturers/([0-9]+)$ index.php?controller=api&action=manufacturers&id=$1
#RewriteRule  ^api/manufacturers$ index.php?controller=api&action=manufacturers

RewriteRule  ^home$ index.php?home

#RewriteRule  ^(manufacturers|products)/(edit|store|delete)/([0-9]+)$ index.php?controller=$1&action=$2&id=$3
#RewriteRule  ^(manufacturers|products)/(edit|store)$ index.php?controller=$1&action=$2&id
#RewriteRule  ^(manufacturers|products)/([0-9]+)$ index.php?controller=$1&action=show&id=$2
#RewriteRule  ^(manufacturers|products)$ index.php?controller=$1&action=index

RewriteRule  ^([a-z]+)/(edit|store|delete)/([0-9]+)$ index.php?controller=$1&action=$2&id=$3
RewriteRule  ^([a-z]+)/(edit|store)$ index.php?controller=$1&action=$2&id
RewriteRule  ^([a-z]+)/([0-9]+)$ index.php?controller=$1&action=show&id=$2
RewriteRule  ^([a-z]+)$ index.php?controller=$1&action=index

#RewriteRule  ^(.*)$ index.php
