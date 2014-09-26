<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Test</title>
        
    </head>
    <body>
        <?php 
            $connexion = "hist=localhost password=****** user=****** dbname=******** port=5432";
            $cnx = pg_connect($connexion);
            if($cnx){
                print("ok");
            }
            else{
                print("Echec");
            }
        ?>
        
        
        
        
    </body>
    
    
    
</html>
