# CRUD_PHP

## Descripción
 Sistema de registro de datos usando **MVC** con **PHP**, **MySQL**, **HTML** y **CSS**.
 
## Software
 Para la ejecución de este proyecto se requiere de la instalación de **XAMPP Version 8.0.30**, el cual incluye el sistema de gestión de base de datos **MySQL**, el servidor web **Apache** y los intérpretes para los script de **PHP**.

 Una vez instalado el software necesario, se podrá inicializar en el **Panel de control de XAMPP** tanto el servidor web y el gestor de base de datos.

## Inicialización de proyecto
 Antes de comenzar a poner en marcha este proyecto, se debe importar el script **prueba.sql** que se encuentra en este repositorio para la creación de la base de datos. Lo podrá realizar dentro del **phpmyadmin** al inicizalizar XAMPP.

 **OJO**: Todos los archivos de este repositorio se deberan colocar dentro del directorio que se crea al instalar XAMPP dentro de una carpeta llamada **prueba**:
 ```
 xampp\htdocs\prueba
 ```

Una vez teniendo los archivos en el directorio indicado, podrá colocar lo siguiente URL en el navegador:
```
localhost/prueba/
```
Deberá tener una  vista como la siquiente:

![image](https://github.com/user-attachments/assets/97e72db0-f5aa-4261-bd73-48c29b1a2902)

## Funcionalidades
### Registro
A partir de esa vista podrá realizar nuevos registros en **Registrar nuevo** que lo llevará a una visualización como la siguiente:

![image](https://github.com/user-attachments/assets/f807e71c-bc3c-4414-a570-9146d3cb62fd)

### Visualización de datos

Una vez realizado un registro se podrán ir visualizando al término de dicho registro y al ir al apartado de **Ver registros**:

![image](https://github.com/user-attachments/assets/f5d3f973-dc12-4ea8-8942-0f0ac3159487)

### Modificar datos

El sistema permite la modificación de datos registrados mediante el botón de **Modificar** que se encuentra en la parte derecha de cada registro, permitiendo un formulario con los datos registrados hasta el momento y la función de poder modificar cada campo:

![image](https://github.com/user-attachments/assets/76a281e2-35cc-4614-8b9a-4a7314a7cb89)

### Eliminar datos

De igual forma, cada registro tiene la opción de ser eliminado con el botón de **Eliminar**.

![image](https://github.com/user-attachments/assets/356fa7a8-187f-4102-902f-9024bbf516ca)

Si no se encuentra ningún registro se indicará como se muestra a continuación:

![image](https://github.com/user-attachments/assets/c8e7e646-9fd3-4d0d-adb4-21eeca289c25)


**Este proyecto contiene algunas validadciones al ingresar datos en cada input, desde restricciones de números donde no corresponde, carácteres especiales, tamaño de ingreso de datos y evita el registro de campos vacios**.
