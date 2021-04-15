# Agenda Covid

_Este proyecto que combina HTML y PHP junto a la librería mas conocida de estilos bootstrap, nos permite agendar a aquellos que se encuentren ya registrados en nuestro programa. Ademas una vez que nos atendamos podemos consultar las fechas de las dosis, borrarla si y solo si aun no nos dimos la primera, y consultar la cantidad de usuarios agendados por grupo o por edad._

## Comenzando 🚀

Para comenzar es necesario que clonemos este repo en direcctorio root de Apache
### Windows 10
`C:/xampp/htdocs`
### Linux
`C:/xampp/htdocs`
### MacOS
`/Applications/XAMP/htdocs`

Mira **[Instalación](https://github.com/DosSantosBrunoo/agenda_covid/blob/README/README.md#instalación-)** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

[XAMPP](https://www.apachefriends.org/es/index.html)
[PHP](https://www.php.net/downloads)
[VsCode](https://code.visualstudio.com)

### Instalación 🔧

Ejecutar `XAMPP` e iniciar los servicios de `Apache` y `MySQL`\
Entrar a esta url `http://localhost/phpmyadmin/`\
Crear una Base de Datos en MySQL llamada “agenda_covid” con las siguientes
tablas:

### Usuario
  idUsuario INT\
  nombre VARCHAR\
  apellido VARCHAR\
  fechaNacimiento DATE\
  telefono VARCHAR\
  idGrupo INT\
  activo TINYINT(1)\
### Grupo
  idGrupo INT\
  nombre VARCHAR\
  activo TINYINT(1)\
### Agenda
  idUsuario INT\
  fechaV1 VARCHAR\
  fechaV2 VARCHAR\
  \
Cargar los datos del adjunto “Datos.xlsx” en las tablas “Usuario” y “Grupo”:
[Datos.xlsx](https://github.com/DosSantosBrunoo/agenda_covid/files/6317387/Datos.xlsx)
También puedes usar este script para que cree todas las tablas y agregue los datos:
[agenda_covid.txt](https://github.com/DosSantosBrunoo/agenda_covid/files/6317480/agenda_covid.txt)
Acuerdese de cambiar la extension del archivo a `sql`

Entrar a esta [url](http://localhost/agenda_covid/view/index.php) para comenzar!

## Ejecutando las pruebas ⚙️

Para ejecutar las pruebas debemos ingresar a la web como se explicó al final del punto [Instalación](https://github.com/DosSantosBrunoo/agenda_covid/blob/README/README.md#instalación-)
1. Agendar a alguien en nuestra tabla `agenda`, por ende nos dirigimos a [Agendar](http://localhost/agenda_covid/view/agendarme.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `usuario`) e ingresarle telefono al usuario.
2. Borrar a alguien de nuestra tabla `agenda`, por ende nos dirigimos a [Borrar](http://localhost/agenda_covid/view/borrar.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `agenda`)
3. Consultar las dosis de un usuario desde la tabla `agenda`, por ende nos dirigimos a [Consultar](http://localhost/agenda_covid/view/consultar_1.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `agenda`)
4. Consultar cantidad de usuarios agendados por grupo desde la tabla `agenda`, por ende nos dirigimos a [Consultar por grupo](http://localhost/agenda_covid/view/consultar_2.php)
Seleccione grupo de usuarios
5. Consultar cantidad de usuarios agendados por grupo de edad desde la tabla `agenda`, por ende nos dirigimos a [Consultar por edad](http://localhost/agenda_covid/view/consultar_3.php)\
Selecciona grupo de edad

### Analice las pruebas end-to-end 🔩

1. Un usuario existente se pueda agendar
2. La agenda de un usuario se pueda borrar
3. Se puedan consultar los usuarios agendados
4. Se pueden consultar los usuarios agendados por grupos
5. Se pueden consultar los usuarios agendados por grupos de edad

## Construido con 🛠️

* [Bootstrap](https://getbootstrap.com) - El framework de estilos web usado
* [PHP](https://www.php.net) - Lenguaje de programación
* HTML - Lenguaje de etiquetado
* CSS - Lenguaje de diseño

## Autores ✒️

* **Bruno Dos Santos** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/bruno-dos-santos-650a56193/) - [GITHUB](https://github.com/DosSantosBrunoo)
* **Ezequiel Padilla** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/ezequiel-padilla-46804a193/) - [GITHUB](https://github.com/Ezequiel-Padilla)

## Expresiones de Gratitud 🎁

Desde todo el equipo de la Fundación Agenda Covid queremos decirte "GRACIAS" por tu apoyo!
