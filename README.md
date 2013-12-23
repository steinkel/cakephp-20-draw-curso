#Curso básico de CakePHP 2.0

##Objetivo básico

Se trata de un portal el cual relaciona tanto a __Estudiantes__ con __Ofertas__ como a __Ofertas__ con __Empresas__, a través de una serie de __Focos__. Esto permite relacionar a un estudiante con una empresa por medio de una oferta.

Como funcionalidad 'estrella' tenemos el filtrado de las últimas 5 ofertas ordenadas de tal manera que la antes que acabe _(_ ___fecha limite___ _menor)_ se mostrará primero. En caso de que más de una oferta acabase en la misma fecha se ordena por ___número de vacantes___ de menor a mayor disponibilidad.


##Organización de la base de datos

+ ___Nota:___ se ha puesto a disposición de los navegantes un archivo __.slq__ en el directorio __webroot/files__ el cual contiene tanto la estructura de las tablas que se describen a continuación como una serie de registros para que la visualización de la web sea mejor.

###Conjunto de Tablas
```sql
+---------------------+
| Tables_in_practicas |
+---------------------+
| alumnos             |
| alumnos_focos       |
| empresas            |
| focos               |
| focos_ofertas       |
| ofertas             |
+---------------------+

```

###Tabla alumnos
```sql
+------------------+--------------+------+-----+---------+-------+
| Field            | Type         | Null | Key | Default | Extra |
+------------------+--------------+------+-----+---------+-------+
| id               | varchar(36)  | NO   | PRI | NULL    |       |
| nombre           | varchar(255) | NO   |     | NULL    |       |
| primer_apellido  | varchar(255) | NO   |     | NULL    |       |
| segundo_apellido | varchar(255) | NO   |     | NULL    |       |
| email            | varchar(255) | NO   |     | NULL    |       |
| telefono         | varchar(255) | NO   |     | NULL    |       |
| created          | datetime     | NO   |     | NULL    |       |
| modified         | datetime     | NO   |     | NULL    |       |
+------------------+--------------+------+-----+---------+-------+
```

###Tabla alumnos_focos
```sql
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| id        | varchar(36) | NO   | PRI | NULL    |       |
| alumno_id | varchar(36) | NO   |     | NULL    |       |
| foco_id   | varchar(36) | NO   |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
```

###Tabla empresas
```sql
+---------------+--------------+------+-----+---------+-------+
| Field         | Type         | Null | Key | Default | Extra |
+---------------+--------------+------+-----+---------+-------+
| id            | varchar(36)  | NO   | PRI | NULL    |       |
| nombre_social | varchar(255) | NO   |     | NULL    |       |
| cif           | varchar(255) | NO   |     | NULL    |       |
| email         | varchar(255) | NO   |     | NULL    |       |
| direccion     | text         | NO   |     | NULL    |       |
| created       | datetime     | NO   |     | NULL    |       |
| modified      | datetime     | NO   |     | NULL    |       |
+---------------+--------------+------+-----+---------+-------+
```

###Tabla focos
```sql
+--------+--------------+------+-----+---------+-------+
| Field  | Type         | Null | Key | Default | Extra |
+--------+--------------+------+-----+---------+-------+
| id     | varchar(36)  | NO   | PRI | NULL    |       |
| nombre | varchar(255) | NO   |     | NULL    |       |
+--------+--------------+------+-----+---------+-------+
```

###Tabla focos_ofertas
```sql
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| id        | varchar(36) | NO   | PRI | NULL    |       |
| foco_id   | varchar(36) | NO   |     | NULL    |       |
| oferta_id | varchar(36) | NO   |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
```

###Tabla ofertas
```sql
+--------------+--------------+------+-----+---------+-------+
| Field        | Type         | Null | Key | Default | Extra |
+--------------+--------------+------+-----+---------+-------+
| id           | varchar(36)  | NO   | PRI | NULL    |       |
| titulo       | varchar(255) | NO   |     | NULL    |       |
| activa       | tinyint(1)   | NO   |     | NULL    |       |
| created      | datetime     | NO   |     | NULL    |       |
| modified     | datetime     | NO   |     | NULL    |       |
| vacantes     | int(3)       | NO   |     | NULL    |       |
| fecha_limite | date         | NO   |     | NULL    |       |
| empresa_id   | varchar(36)  | NO   |     | NULL    |       |
+--------------+--------------+------+-----+---------+-------+
```
