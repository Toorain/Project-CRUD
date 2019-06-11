<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liste jeux vidéos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
        <link rel="stylesheet" href="ressources/CSS/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Titre</th>
              <th scope="col">Prix</th>
              <th scope="col">Date de sortie</th>
              <th scope="col">Genre</th>
              <th scope="col">Origine</th>
              <th scope="col">Mode</th>
              <th scope="col">Connexion</th>
              <th scope="col"></th>
              <th scope="col">Plateforme</th>
              <th scope="col">Desription</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php include('ressources/PHP/show.php'); ?>
          </tbody>
        </table>
    
        <form id="creator" action="ressources/PHP/create.php" method="POST" <?php if (isset($_GET['action']) && $_GET['action'] == "update") { ?> style="display:none;" <?php } else { ?>style="display:block;" <?php }?>>
            <div class="container-fluid">
                <?php
                if (isset($_GET['refresh'])) { 
                if ($_GET['refresh'] === 'ok') {                    
                    echo '<div class="alert alert-success" id="success-alert" role="alert">
                        <h4 class="alert-heading">Votre jeu a été ajouté</h4>                    
                        </div>';
                    } elseif ($_GET['delete'] === 'ok') {
                        echo '<div class="alert alert-danger" id="success-alert" role="alert">
                        <h4 class="alert-heading">Votre jeu a été supprimé</h4>                    
                        </div>';   
                    }  
                }
                ?>                              
                <div class="row top-row">
                    <div class="col">
                        <label for="jeux" >Jeux : </label><br>
                        <input type="text" name="jeux" id="jeux">
                    </div>
                    <div class="col">
                        <label for="image" >Image : </label><br>
                        <input type="text" name="image" id="image">                        
                    </div>
                    <div class="col">
                        <label for="prix" >Prix : </label><br>
                        <input type="text" name="prix" id="prix">                        
                    </div>
                    <div class="col">
                        <label for="release" >Date de sortie : </label><br>
                        <input type="text" name="release" id="release">
                    </div>
                    <div class="col">
                        <label for="genre" >Genre :</label><br>
                        <input type="text" name="genre" id="genre">
                    </div>                  
                </div>
                <div class="row">
                    <div class="col">
                        <label for="origine" >Origine :</label><br>
                        <input type="text" name="origine" id="origine">
                    </div>
                    <div class="col">
                        <label for="mode" >Mode :</label><br>
                        <input type="text" name="mode" id="mode">
                    </div> 
                    <div class="col">
                        <label for="connexion" >Connexion :</label><br>
                        <input type="text" name="connexion" id="connexion">
                    </div> 
                    <div class="col">
                        <fieldset>
                            <legend>Plateforme : </legend>
                            <label for="pc" >PC</label>
                            <input type="checkbox" name="plateforme[]" id="pc" value="PC">
                            <label for="ps4" >PS4</label>
                            <input type="checkbox" name="plateforme[]" id="ps4" value="PS4">
                            <label for="xbox" >XBOX 360</label>
                            <input type="checkbox" name="plateforme[]" id="xbox" value="XBOX ONE">
                        </fieldset>
                    </div>
                    <div class="col">
                        <label for="description" >Description :</label><br>
                        <input type="text" name="description" id="description">
                    </div>                    
                </div>
                <div class="row">                    
                    <div class="col buttons-row">
                        <input type="submit" name="btn-send" value="Send" id="send" class="btn btn-success">
                        <input type="reset" value="Reset" id="reset" class="btn btn-secondary">                          
                    </div>
                </div>
            </div>
        </form>
        <form id="updator" action="ressources/PHP/update.php" method="POST" <?php if (isset($_GET['action']) && $_GET['action'] == "update") { ?>style="display:block"<?php } else { ?>style="display:none" <?php }?>>
            <div class="container-fluid">                                           
                <div class="row top-row">
                    <div class="col">
                        <label for="jeux" >Jeux (UPDATE): </label><br>
                        <input type="text" name="jeux" id="jeux" value="<?php echo($requestUpdate[0]['titre']) ?>">
                    </div>
                    <div class="col">
                        <label for="image" >Image (UPDATE): </label><br>
                        <input type="text" name="image" id="image" value="<?php echo($requestUpdate[0]['image']) ?>">                        
                    </div>
                    <div class="col">
                        <label for="prix" >Prix (UPDATE): </label><br>
                        <input type="text" name="prix" id="prix" value="<?php echo($requestUpdate[0]['prix']) ?>">                        
                    </div>
                    <div class="col">
                        <label for="release" >Date de sortie (UPDATE): </label><br>
                        <input type="text" name="release" id="release" value="<?php echo($requestUpdate[0]['date_de_sortie']) ?>">
                    </div>
                    <div class="col">
                        <label for="genre" >Genre (UPDATE):</label><br>
                        <input type="text" name="genre" id="genre" value="<?php echo($requestUpdate[0]['genre']) ?>">
                    </div>                  
                </div>
                <div class="row">
                    <div class="col">
                        <label for="origine" >Origine (UPDATE):</label><br>
                        <input type="text" name="origine" id="origine" value="<?php echo($requestUpdate[0]['origine']) ?>">
                    </div>
                    <div class="col">
                        <label for="mode" >Mode (UPDATE):</label><br>
                        <input type="text" name="mode" id="mode" value="<?php echo($requestUpdate[0]['mode']) ?>">
                    </div> 
                    <div class="col">
                        <label for="connexion" >Connexion (UPDATE):</label><br>
                        <input type="text" name="connexion" id="connexion" value="<?php echo($requestUpdate[0]['connexion']) ?>">
                    </div> 
                    <div class="col">
                        <fieldset>
                            <legend>Plateforme (UPDATE): </legend>
                            <label for="pc" >PC</label>
                            <input type="checkbox" name="plateforme[]" id="pc" value="PC" <?php if (strpos($requestUpdate[0]['plateforme'], "PC") !== false) { ?> checked <?php } ?>>
                            <label for="ps4" >PS4</label>
                            <input type="checkbox" name="plateforme[]" id="ps4" value="PS4" <?php if (strpos($requestUpdate[0]['plateforme'], "PS4") !== false) { ?> checked <?php } ?>>
                            <label for="xbox" >XBOX ONE</label>
                            <input type="checkbox" name="plateforme[]" id="xbox" value="XBOX ONE" <?php if (strpos($requestUpdate[0]['plateforme'], "XBOX ONE") !== false) { ?> checked <?php } ?>>
                        </fieldset>
                    </div>
                    <div class="col">
                        <label for="description" >Description (UPDATE):</label><br>
                        <input type="text" name="description" id="description" value="<?php echo($requestUpdate[0]['description']) ?>">
                    </div>                    
                </div>
                <div class="row">                    
                    <div class="col buttons-row">
                        <input type="submit" value="Update" id="update" class="btn btn-warning">
                        <input type="reset" value="Reset" id="reset" class="btn btn-secondary">
                        <a href="index.php" class="btn btn-success">Back</a>                          
                    </div>
                </div>
            </div>
        </form>              
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="ressources/JS/main.js"></script>
    </body>
</html>