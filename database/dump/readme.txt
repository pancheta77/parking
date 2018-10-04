Generar bkp de base:
mysqldump -u pavesur -p -h localhost dbpavesur > cargaInicialTest.sql

Restaurar bkp de base:
mysql -u pavesur -p dbpavesur < cargaIncialTest.sql
