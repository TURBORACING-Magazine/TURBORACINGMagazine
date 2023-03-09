<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contacto.css">
    <link rel="icon" type="image/png" href="img/Logo pagina.png">
    <title>Contacto</title>

    <style>
* {
    padding: 0;
    margin: 0;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    margin: 0;
    padding: 0;
    background: url(fondo.jpg);   
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

form {
    width: 700px;
    margin: auto;
    background-color: #8bf;
    margin-top: 10px;
    border-radius: 12px;
}

input{
    margin: 12px;
    padding: 8px;
    width: 640px;
    font-size: 18px;
    border: none;
}

textarea {
    margin: 12px;
    padding: 8px;
    width: 640px;
    font-size: 18px;
    min-width: 640px;
    max-width: 640px;
    min-height: 100px;
    max-height: 200px;
    border: none;
}

.pie-pagina {
    width: 100%;
    background-color: #0d141d;
    margin-top: 20px;
}

.pie-pagina .grupo-1 {
    width: 100%;
    max-width: 1200px;
    margin: autos;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 50px;
    padding: 45px 0px;
}

.pie-pagina .grupo-1 .box figure {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.pie-pagina .grupo-1 .box figure img {
    width: 350px;

} 

.pie-pagina .grupo-1 .box h2 {
    color: #fff;
    margin-bottom: 25px;
    font-size: 20px;
}

.pie-pagina .grupo-1 .box p {
    color: #efefef;
    margin-bottom: 10px;
}

.pie-pagina .grupo-1 .box .red-social a img {
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;
    background-color: #0d2033;
    text-align: center;
    border-radius: 12px;
}

small {
    color: #efefef;
}


#imagenes img:hover{
    transform: scale(1.05);
}

.hhh img {
    width: 500px;
    height: 550px;
    border: 5px solid black;
}

#hola a img:hover{
    transform: scale(1.5);
}

.contenido {
    text-align: center;
}

.pie-pagina .grupo-1 .box .xd a img {
      width: 150px;
      height: 150px;
}

.jorgito {
    border: 5px solid black;
    font-size: 50px;
    background-color: grey;
    width: 500px;
    border-radius: 12px;
    font-family: cooper black;
}

input[type="submit"]{
    margin-top: 5px;
    margin-bottom: 10px;
    
}

</style>

</head>
<body>
<center>
     
    <h1 class="jorgito">Envíame un Mail</h1>

     <form method="post">
        <input type="text" placeholder="Nombre" name="name" required="">
        <input type="email" placeholder="Email" name="email" required="">
        <input type="text" placeholder="Asunto" name="asunto" required="">
        <textarea placeholder="Mensaje" name="msg"></textarea>
        <input type="submit">
     </form>
    
<?php
    include ("Correo.php")
?>
</center>

            <!--::::Pie de Pagina::::::-->
            <footer class="pie-pagina">
                <div class="grupo-1">
                    <div class="box">
                        <figure class="xd">
                           <a href="#">
                            <img src="img/Logo footer.png" style="width: 500px; height: 150px;" alt="">
                           </a> 
                        </figure>
                    </div>
                    <div class="box">
                        <h2>SOBRE NOSOTROS</h2>
                        <P>Conesa (2907), San Nicolás,</P>
                        <p>Provincia de Buenos Aires, Argentina</p>
                    </div>
                    <div class="box">
                    <h2>CONTÁCTANOS</h2>
                    <div class="red-social" id="hola">
    
                    <a href="https://www.instagram.com/turboracing_magazine/" class="fa fa-instagram" target="_blank"><img src="img/Instagram-Logo-2016.png" alt=""></a>
                    <a href="https://wa.me/542477532902" class="fa fa-whatsapp" target="_blank"><img src="img/WhatsApp.svg.png" alt=""></a>
                    <a href="Contacto.php" class="fa fa-youtube" target="_blank"><img src="img/correo logo.png" alt=""></a>
                    
    
                    </div>
                    
    
                    </div>
                </div>
    
                
                </div>
    
                <div class="grupo-2">
                    <small>&copy; 2023 <b>Diego Micheletti</b> - Todos los Derechos Reservados. </small>
                </div>
    
            </footer>
                 
            
      </p>

</body>
</html>