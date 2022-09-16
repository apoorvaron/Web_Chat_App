# Chat_App
## How to Run on local 📖

- Must install PHP version (FOR WINDOWS) & (FOR MAC) Both
- Tutorial - https://www.youtube.com/watch?v=mVBe75aGBHQ


- Must install xampp (FOR WINDOWS) & MAMP (FOR MAC) 
- Tutorial - https://www.youtube.com/watch?v=at19OmH2Bg4

-------*---------*----------

Step -1   Download Zip File 

Step -2   Unzip it & Rename it to "chatApp"

Step -3   Put chatApp folder inside 

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Change in /Applications/MAMP/htdocs/gForm/environment.php. file (FOR MAC)
          
            <?php
               $env_server = "localhost";
               $env_username = "root";
               $env_password = "root";
               $env_database = "chatapp";
               $env_port = "8889";
            ?>

Step -4   Change in htdocs/gForm/environment.php. file (FOR WINDOWS)
          
            <?php
              $env_server = "localhost:3306";
              $env_username = "root";
              $env_password = "";
              $env_database = "chatapp";
              $env_port = "3306";
            ?>

Step -5   Setup database, Open 

          localhost:8888/phpmyadmin/   (FOR MAMP)
          localhost/phpmyadmin/   (FOR XAMPP)

Step -6   Create Database 

Step -7   Database name  "chatapp"

Step -8   Import the database from "/htdocs/chatApp/chatapp.sql" directory in database.

Step -9   Run in browser 

          localhost:8888/chatApp/     (FOR MAMP)
          localhost/chatApp/          (FOR XAMPP)


