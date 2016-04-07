# media_project8

<h1>Installatie van het project:</h1>
<p>Voer in de terminal de volgende commands in:</p>

composer install

<p>Maak een database aan (zorg er voor dat de collatie: utf8_general_ci is)</p>

php artisan migrate:refresh --seed

<p>In de root directory van het project staat een bestand: .env.example</p>
<p>Kopieer het bestand en hernoem het naar .env</p>

<p>In het .env bestand verander de volgende gegevens naar jouw gegevens:</p>

<pre>
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Database naam
DB_USERNAME=Database username
DB_PASSWORD=Database password
</pre>

<p>Letop dat op mac de port soms ook veranderd moet worden (check hiervoor welke mysql poort jou webserver gebruikt).</p>