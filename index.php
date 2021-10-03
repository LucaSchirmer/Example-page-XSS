
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Example Page</title>
</head>
<body>
    <div class="box">
      <h1 class="kein-schutz">
        Method GET
      </h1>
        <form action="" method="get" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="name" id="name">
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
            if(isset($_GET["name"])){
              if($_SERVER["REQUEST_METHOD"] == "GET"){
                echo $_GET["name"];
              }
            }
            
                
            ?></div>
            <div class="password"> Passwort: <?php 
            if(isset($_GET["name"])){
              if($_SERVER["REQUEST_METHOD"] == "GET"){
                echo $_GET["password"];
              }
            }
            ?> </div>
          
          </div>
    </div>
    <div class="box">
      <h1 class="kein-schutz">
        Method POST
      </h1>
        <form action="" method="POST" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="name" id="name">
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
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              echo $_POST["name"];
            }
            
                
            ?></div>
            <div class="password"> Passwort: <?php 
            if($_SERVER["REQUEST_METHOD"] == "POST"){
              echo $_POST["password"];
            }
            ?> </div>
          
          </div>
    </div>
     <!-- <div class="box">
      <h1 class="kein-schutz">
        Gesichert
      </h1>
        <form action="" method="POST" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="name" id="name">
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
            if($_SERVER["REQUEST_METHOD"] == "GET"){
              echo htmlspecialchars($_GET["name"]);
            }
            
                
            ?></div>
            <div class="password"> Passwort: <?php 
            if($_SERVER["REQUEST_METHOD"] == "GET"){
              $_returN =  htmlspecialchars($_GET["password"]);
              echo  $_returN ;
            }
            ?> </div>
          
          </div>
    </div> -->
    <!-- <div class="box">
      <h1 class="kein-schutz">
        Gesichert
      </h1>
        <form action="" method="POST" class="form">
            <div class="form-example">
              <label for="email">Benutzername: </label>
              <input type="text" name="name" id="name">
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
            if($_SERVER["REQUEST_METHOD"] == "GET"){
              echo htmlspecialchars($_GET["name"]);
            }
            
                
            ?></div>
            <div class="password"> Passwort: <?php 
            if($_SERVER["REQUEST_METHOD"] == "GET"){
              $_returN =  htmlspecialchars($_GET["password"]);
              echo  $_returN ;
            }
            ?> </div>
          
          </div>
    </div> -->
</body>
</html>
