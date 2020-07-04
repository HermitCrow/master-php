<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" autofocus="autofocus" minlength="3" pattern="[A-Z a-z]+" required="required" placeholder="Escribe tu nombre"/>
            </p>
            <p>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" minlength="3" pattern="[A-Z a-z]+" required="required" placeholder="Escribe tu apellido"/>
            </p>
            <p>
                <label for="boton">Boton: </label>
                <input type="button" name="boton" value="Boton"/>
            </p>
            <p>
                <label for="sexo">Sexo: </label>
                Hombre <input type="checkbox" name="sexo" value="M" checked="checked"/>
                Mujer <input type="checkbox" name="sexo" value="F"/>
            </p>
            <p>
                <label for="color">Color: </label>
                <input type="color" name="color"/>
            </p>
            <p>
                <label for="fecha">Fecha: </label>
                <input type="date" name="fecha"/>
            </p>
            <p>
                <label for="correo">Email: </label>
                <input type="email" name="correo"/>
            </p>
            <p>
                <label for="archivo">Archivo: </label>
                <input type="file" name="archivo" multiple="multiple"/>
            </p>
            <p>
                <label for="numero">Numero: </label>
                <input type="number" name="numero"/>
            </p>
            <p>
                <label for="pass">Password: </label>
                <input type="password" name="pass"/>
            </p>
            <p>
                <label for="conti">Temperatura: </label>
                Frio<input type="radio" name="conti" value="frio" checked="checked"/>
                Caliente<input type="radio" value="caliente" name="conti"/>
               
            </p>
             <p>
                <label for="web">Web: </label>
                <input type="url" name="web"/>
            </p> 
             <p>
                <label for="direccion">Direccion: </label>
                <textarea name="direccion"></textarea>
            </p>
             <p>
                <label for="continente">Continentes: </label>
                <select name="continente">
                    <option value="asia">Asia</option>
                    <option value="africa">Africa</option>
                    <option value="america">America</option>
                    <option value="europa">Europa</option>
                    <option value="oceania">Oceania</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Enviar"/>
            </p>
        </form>
    </body>
</html>
