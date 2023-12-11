<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <Script Language="JavaScript">
      function DameLaFechaHora() {
        var hora = new Date()
        var hrs = hora.getHours();
        var min = hora.getMinutes();
        var hoy = new Date();
        var m = new Array();
        var d = new Array()
        var an= hoy.getYear();
        m[0]="Enero";  m[1]="Febrero";  m[2]="Marzo";
        m[3]="Abril";   m[4]="Mayo";  m[5]="Junio";
        m[6]="Julio";    m[7]="Agosto";   m[8]="Septiembre";
        m[9]="Octubre";   m[10]="Noviembre"; m[11]="Diciembre";
        document.write("Son las "+hrs+":"+min+" (");
        document.write(hoy.getDate());
        document.write(" de ");
        document.write(m[hoy.getMonth()]);
        document.write(")");
      }
    </Script>
</head>
<body class="body1">
  <div class="rectangulo3">
    <b class="hora">
      <script>
        DameLaFechaHora();
      </script>
    </b>
    <header class="Encabezado">
      <img class="logo"src="imagenes/Mesa-de-trabajo-6-copia.png">
    </header>
  </div>
  <div class="login-page">
    <div class="form">
      <b class="Support">Portal TI Support & Digital Solutions</b>
        &nbsp;
        &nbsp;
        &nbsp;
      <form class="login-form"  action="php/login.php" method="post">
        <input type="text" placeholder="Usuario" name="usuariodb" required/>
        <input type="password" placeholder="Contraseña" name="contrasenadb" required/>
        <input type=submit class="botoningreso" name="botoningresar" value="Entrar">
        <p class="mensaje">Recuerda anotar tu contraseña en algun lugar</p>
      </form>
    </div>
  </div>
  <div class="rectangulo"></div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>