# MCD_UTC504
## MCD 
![MCD_VAA.jpg](..%2F..%2FMCD-MLD%2FMCD_VAA.jpg)

## MLD
![MLD_VAA.jpg](..%2F..%2FMCD-MLD%2FMLD_VAA.jpg)


**_seances_** = (id_seance *INT*, date_seance *DATE*, lieu *VARCHAR*(50), horaire *TIME*, max_users *INT*);\
**_profil_** = (id_user_statuts *INT*, libelle *VARCHAR*(50));\
**_users_** = (id_user *INT*, name *VARCHAR*(50), username *VARCHAR*(50), email VARCHAR(50), email_verified_at DATE, statut *INT*, password *VARCHAR*(50), remember_token *VARCHAR*(50), __#id_user_statuts__);\
**_Participer_** = (__#id_user__, __#id_seance__);

## TINKER REQUEST

**Créer et remplir la base en amont avec les commandes : (Ne pas oublier de faire son .env pour se connecter à sa base de donnée)

### Création de la base et de ses tables
```bash
php artisan migrate
```
### Peupler sa base
```bash
php artisan db:seed
```
### Faire les requêtes Tinker
#### *Au préalable, vous pouvez faire des requêtes SQL avec MYSQL pour savoir le nom des tables*
```bash
mysql -u root -p
```
```bash
show databases;
```
```bash
use <name_database>;
```
```bash
show tables;
```
#### *Puis revenir sur Tinker console*
```bash
php artisan sql:select "SELECT * FROM <table_name>"
```
