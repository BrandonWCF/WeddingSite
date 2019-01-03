
function unCommentLocalHostJquery{
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://localhost:80/WeddingSite/php/quickLogin.php",','url: "http://localhost:80/WeddingSite/php/quickLogin.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://localhost:80/WeddingSite/php/RSVPuser.php",','url: "http://localhost:80/WeddingSite/php/RSVPuser.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://localhost:80/WeddingSite/php/email.php",','url: "http://localhost:80/WeddingSite/php/email.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://localhost:80/WeddingSite/php/refreshView.php",','url: "http://localhost:80/WeddingSite/php/refreshView.php",') | Set-Content -Path ../javascript/jquery.js
}
function commentLocalHostJquery{
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://localhost:80/WeddingSite/php/quickLogin.php",','//url: "http://localhost:80/WeddingSite/php/quickLogin.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://localhost:80/WeddingSite/php/RSVPuser.php",','//url: "http://localhost:80/WeddingSite/php/RSVPuser.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://localhost:80/WeddingSite/php/email.php",','//url: "http://localhost:80/WeddingSite/php/email.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://localhost:80/WeddingSite/php/refreshView.php",','//url: "http://localhost:80/WeddingSite/php/refreshView.php",') | Set-Content -Path ../javascript/jquery.js
}
function unCommentWebsiteJquery{
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://www.faulinginlove.co.za/php/refreshView.php",','url: "http://www.faulinginlove.co.za/php/refreshView.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://www.faulinginlove.co.za/php/quickLogin.php",','url: "http://www.faulinginlove.co.za/php/quickLogin.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://www.faulinginlove.co.za/php/email.php",','url: "http://www.faulinginlove.co.za/php/email.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace '//url: "http://www.faulinginlove.co.za/php/RSVPuser.php",','url: "http://www.faulinginlove.co.za/php/RSVPuser.php",') | Set-Content -Path ../javascript/jquery.js
}
function commentWebsiteJquery{
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://www.faulinginlove.co.za/php/refreshView.php",','//url: "http://www.faulinginlove.co.za/php/refreshView.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://www.faulinginlove.co.za/php/quickLogin.php",','//url: "http://www.faulinginlove.co.za/php/quickLogin.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://www.faulinginlove.co.za/php/email.php",','//url: "http://www.faulinginlove.co.za/php/email.php",') | Set-Content -Path ../javascript/jquery.js
((Get-Content -path ../javascript/jquery.js -Raw) -replace 'url: "http://www.faulinginlove.co.za/php/RSVPuser.php",','//url: "http://www.faulinginlove.co.za/php/RSVPuser.php",') | Set-Content -Path ../javascript/jquery.js
}

$commentedWeddingDatabase = "/*`n`rprivate `$servername = 'localhost';`n`rprivate `$username = 'faulingi_brandon';`n`rprivate `$password = 'bran-5496_436518';`n`rprivate `$database = 'faulingi_wedding_database';`n`rpublic `$connection = null;`n`r*/"
$unCommentedWeddingDatabase = "private `$servername = 'localhost';`n`rprivate `$username = 'faulingi_brandon';`n`rprivate `$password = 'bran-5496_436518';`n`rprivate `$database = 'faulingi_wedding_database';`n`rpublic `$connection = null;"
$commentedLocalhostDatabase = "/*`n`rprivate `$servername = 'localhost';`n`rprivate `$username = 'brandon';`n`rprivate `$password = 'P@ssword';`n`rprivate `$database = 'wedding_database';`n`rpublic `$connection = null;`n`r*/"
$unCommentedLocalhostDatabase = "private `$servername = 'localhost';`n`rprivate `$username = 'brandon';`n`rprivate `$password = 'P@ssword';`n`rprivate `$database = 'wedding_database';`n`rpublic `$connection = null;"

function commentWebsiteDatabase{
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$username = 'faulingi_brandon';','//private `$username = 'faulingi_brandon';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$password = 'bran-5496_436518';','//private `$password = 'bran-5496_436518';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$database = 'faulingi_wedding_database';','//private `$database = 'faulingi_wedding_database';") | Set-Content -Path ../php/DatabaseConnect.php
}
function unCommentWebsiteDatabase{
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$username = 'faulingi_brandon';','private `$username = 'faulingi_brandon';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$password = 'bran-5496_436518';','private `$password = 'bran-5496_436518';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$database = 'faulingi_wedding_database';','private `$database = 'faulingi_wedding_database';") | Set-Content -Path ../php/DatabaseConnect.php
}
function commentLocalDatabase{
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$username = 'brandon';','//private `$username = 'brandon';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$password = 'P@ssword';','//private `$password = 'P@ssword';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "private `$database = 'wedding_database';','//private `$database = 'wedding_database';") | Set-Content -Path ../php/DatabaseConnect.php
}
function unCommentLocalDatabase{
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$username = 'brandon';','private `$username = 'brandon';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$password = 'P@ssword';','private `$password = 'P@ssword';") | Set-Content -Path ../php/DatabaseConnect.php
    ((Get-Content -path ../php/DatabaseConnect.php -Raw) -replace "//private `$database = 'wedding_database';','private `$database = 'wedding_database';") | Set-Content -Path ../php/DatabaseConnect.php
}
if($args[0] -eq 1){
    echo 'making localhost the source'
    unCommentLocalHostJquery
    commentWebsiteJquery  
    unCommentLocalDatabase
    commentWebsiteDatabase  
}

if($args[0] -eq 0){
    echo 'making faulinginlove.co.za the source'
    unCommentWebsiteJquery
    commentLocalHostJquery
    unCommentWebsiteDatabase
    commentLocalDatabase
}

if($args[0] -eq 2){
    echo 'making localhost the source' 
echo $commentedLocalhostDatabase
echo $unCommentedLocalhostDatabase
echo $commentedWeddingDatabase
echo $unCommentedWeddingDatabase
    unCommentLocalDatabase
    commentWebsiteDatabase  
}