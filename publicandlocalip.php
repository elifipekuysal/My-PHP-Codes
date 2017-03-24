<!DOCTYPE html>
<html>

    <head>
        <title>Local ve Public IP</title>  
        <meta charset= "UTF-8">
        <meta name= "author" content= "Elif İpek Uysal">
        <meta name= "description" content= "Bu sayfadan kendi local ve public IP'nizi öğrenebilirsiniz!">
        <meta name= "keywords" content= "Public IP, Local IP, PHP, HTML"> 
    </head>

    <body>
        <h1 style= " color: #404040; background-color: #ccccff">IP Adresiniz</h1>
        <fieldset>
            <?php
                $publicip= 0;
            
                if (getenv('HTTP_CLIENT_IP')) {
                    $localip = getenv('REMOTE_ADDR');
                    $publicip = getenv('HTTP_CLIENT_IP'); 
                } else if(getenv('HTTP_X_FORWARDED_FOR')) {
                    $localip = getenv('REMOTE_ADDR');
                    $publicip = getenv('HTTP_X_FORWARDED_FOR');
                } else if(getenv('HTTP_X_FORWARDED')) {
                    $localip = getenv('REMOTE_ADDR');
                    $publicip = getenv('HTTP_X_FORWARDED');
                } else if(getenv('HTTP_FORWARDED_FOR')) {
                    $localip = getenv('REMOTE_ADDR');
                    $publicip = getenv('HTTP_FORWARDED_FOR');
                } else if(getenv('HTTP_FORWARDED')) {
                    $localip = getenv('REMOTE_ADDR');
                    $publicip = getenv('HTTP_FORWARDED');
                } else {
                    $localip = getenv('REMOTE_ADDR');
                }
                
                if ($publicip != 0) {
                    echo "<h3>Public IP'niz : $publicip </h3>" ;
                    echo "<h3>Local IP'niz : $localip </h3>" ; 
                } else {
                    echo "<h3>Local IP'niz : $localip </h3>" ;                    
                }
            ?>       
        </fieldset>
        

        <center>
            <small>
                <a href="https://elifipekuysal.github.io">Blog</a>
            </small>
        <center>
    </body>

</html>

