
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Example Page</title>
</head>
<body>
<div class="box">
      <h1 class="kein-schutz">
        Gesichert
      </h1>
        <form action="" method="GET" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="name" id="nameGet">
              <div class="fill"></div>
              <input type="submit" value="GO"></input>
            </div>
            <div class="form-example">
                <label for="password">Passwort: </label>
                <input type="password" name="passwordGET" id="passwordGET">
                <div class="fill"></div>
                <input type="submit" value="GO"></input>
            </div>
        </form>
          <div class="output"> 
            <div class="nameOUTPUT"> 
            Benutzername: 
            <?php 
            if(isset($_GET["name"])){
                if($_SERVER["REQUEST_METHOD"] == "GET"){
                echo htmlspecialchars($_GET["name"]);
                echo "based"; 
                }
            }
            
                
            ?></div>
            <div class="password"> Passwort: <?php 
            if(isset($_GET["passwordGET"])){
                echo "bass";

                    echo "bassaaa";
                $_returN =  htmlspecialchars($_GET["passwordGET"]);
                echo  $_returN;
                echo "based"; 
                
            }
            ?> </div>
          
          </div>
    </div>
    <div class="box">
      <h1 class="kein-schutz">
        Gesichert
      </h1>
        <form action="" method="POST" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="namePOST" id="namePOST">
              <div class="fill"></div>
              <input type="submit" value="GO"></input>
            </div>
            <div class="form-example">
                <label for="password">Passwort: </label>
                <input type="password" name="password" id="password">
                <div class="fill"></div>
                <input type="submit" value="GO"></input>
            </div>
        </form>
          <div class="output"> 
            <div class="nameOUTPUT"> 
            Benutzername: 
            <?php 
            if(isset($_POST["namePOST"])){
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                echo htmlspecialchars($_POST["namePOST"]);
                }
            }
            
                
            ?></div>
            <div class="password" height="100%"> Passwort: <?php 
            if(isset($_POST["password"])){
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                $_returN =  htmlspecialchars($_POST["password"]);
                echo  $_returN ;
                }
            }
            ?> 
            </div>
          
          </div>
    </div>

</body>
</html>
