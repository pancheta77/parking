Base Datos MySql

Generar bkp de base:
mysqldump -u pavesur -p -h localhost dbpavesur > cargaInicialTest.sql

Restaurar bkp de base:
mysql -u pavesur -p dbpavesur < cargaIncialTest.sql

###############################################################################3

Base de Datos - Postgre

1. Desde consola sudo -i -u postgres
2. loguearse como user: psql

Crear usuario
3. postgres=# CREATE USER pavesur PASSWORD 'pavesur';

Crear BD
4. postgres-# CREATE DATABASE dbpavesur WITH OWNER pavesur;

Asignar permisos
5. postgres-# GRANT ALL PRIVILEGES ON DATABASE dbpavesur TO pavesur;
6. Desloguearse con \q

Reingresar con el usuario creado
7. psql -d dbpavesur -U pavesur