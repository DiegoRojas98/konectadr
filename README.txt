konectadr

instrucciones de ejecucion

El proyecto fue desarrollodo sobre php y mysql con la herramienta "xammp"
la cual provee tanto el gestor de bases de datos como el servidor de 
apache para ejecutar PHP en las ventanas del navegador
Teniendo en cuenta lo anterior se debe realizar lo siguente

--Instalar xampp y subir servicios
Para la instalcion de xampp puede ejecutar el archivo adjunto xampp.exe
o descargar la aplicacion desde la pagina oficial de xampp
https://www.apachefriends.org/

La ejecucion de dicho archivo le ayudara sobre la instalaccion de xampp 
trate de realizar dicha instalacion por defecto ya que la conexion a la
base de datos depende de varios datos especificos otorgados por xampp

una vez instalado xammp ejecute la aplicacion Xampp Control Panel
esto le deplegara un ventana donde vera los servicio apache y mysql
Por favor con el boton "start" a el lado derecho de cada servicio
inicie los servicio teniendo en encueta que el servicio mysql debe 
quedara con el numero de puerto 3306 (el cual se genera por defecto)

--Ejecuion del proyecto 
    --base de datos
    Por favor dirijase a la siguente ruta dentro de su navegador
    http://localhost/phpmyadmin/index.php?route=/server/sql

    alli le aparecera un cuadro de texto donde debera pegar el 
    contenido del archivo "BaseDatos.txt" 
    una vez lo pegue por favor oprima el boton de continuar y esta
    accion le creara la base de datos nesesaria para la ejecucion del
    proyecto

    Tambien puede realizarlo de la siguiente manera
    dirijase en su navegador de preferencia a la ruta
    http://localhost/phpmyadmin/index.php?route=/server/import

    en el lugar de archivo a importar seleccione el archivo 

    konectadr.sql
    
    El cual esta incluido en esta carpeta
    Luego de seleccionar dicho archivo por favor dirijase a la 
    parte inferior de la ventana vera un boton "Importar" por favor
    dele click y de esta manera ya tendra importada la base de datos
    lista para usar.


    --proyecto
Para ejecutar el proyecto por favor copee la carpeta que contiene este 
archivo es decir "konectadr" y peguela en la siguente ruta 

C:\xampp\htdocs

Tenga en cuenta que esta ruta tambien dependera de como instalo la 
aplicacio wampp si usted cambio la ruta de wampp por favor
identifiqula ruta donde se almacene la aplicacion wampp y dentro
encontrara la carpeta "htdocs" por favor dentro de dicha carpeta 
copee la carpeta que contiene el proyecto a ejecutar

Una vez realizado esto por favor en su navegador de preferencia dirijase
a la siguente ruta
http://localhost/konectadr/index.php

La cual contine la aplicacion lista para reealizar el test

