

function load(){
    document.querySelector(".nameOUTPUT").innerHTML = document.write(
      window.location,
    document.getElementById("name").value
    ,document.getElementById("email").value
    ,document.getElementById("password").value
    + 
    `<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>Example Page</title>
    </head>
    <body>

    <br>
    <br>
    <button id="back" width="20vw" height="10vh"> zurück </button> 
    
    <br>
    
    <h1 font-size="10vh">Test executed </h1>
    </body>

    <script>


    document.getElementById('back').addEventListener('click', () => {
      history.back();
    });

    </script>

    </html>`
    );
}
