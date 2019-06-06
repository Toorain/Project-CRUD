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
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
        <form action="ressources/PHP/create.php" method="POST">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <label for="jeux" >Jeux : </label><br>
                        <input type="text" name="jeux" id="jeux">
                    </div>
                    <div class="col">
                        <label for="prix" >Prix : </label><br>
                        <input type="text" name="prix" id="prix">
                    </div>
                    <div class="col">
                        <label for="upload" >Date de sortie : </label><br>
                        <input type="text" name="upload" id="upload">
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
                        <input type="submit" value="Send" id="send" class="btn btn-success">
                        <input type="reset" value="Reset" id="reset" class="btn btn-secondary">
                    </div> 
                </div>
            </div>
        </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="ressources/JS/main.js"></script>
    </body>
</html>