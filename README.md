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

Mira **[Deployment]()** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Da un ejemplo
```

### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Dí cómo será ese paso_

```
Da un ejemplo
```

_Y repite_

```
hasta finalizar
```

_Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo_

## Ejecutando las pruebas ⚙️

_Explica como ejecutar las pruebas automatizadas para este sistema_

### Analice las pruebas end-to-end 🔩

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

### Y las pruebas de estilo de codificación ⌨️

_Explica que verifican estas pruebas y por qué_

```
Da un ejemplo
```

## Despliegue 📦

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

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - El framework web usado
* [Maven](https://maven.apache.org/) - Manejador de dependencias
* [ROME](https://rometools.github.io/rome/) - Usado para generar RSS

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Andrés Villanueva** - *Trabajo Inicial* - [villanuevand](https://github.com/villanuevand)
* **Fulanito Detal** - *Documentación* - [fulanitodetal](#fulanito-de-tal)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/your/project/contributors) quíenes han participado en este proyecto. 

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.
