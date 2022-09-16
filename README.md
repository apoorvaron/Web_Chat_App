# Web_Chat_App
## How to Run on local 📖

- Must install PHP version (FOR WINDOWS) & (FOR MAC) Both
- Tutorial - https://www.youtube.com/watch?v=mVBe75aGBHQ


- Must install xampp (FOR WINDOWS) & MAMP (FOR MAC) 
- Tutorial - https://www.youtube.com/watch?v=at19OmH2Bg4

-------*---------*----------

Step -1   Download Zip File 

Step -2   Unzip it & Rename it to "chatApp"

Step -3   Put "chatApp" folder inside 

          /Applications/MAMP/htdocs/  folder  (FOR MAC)
          C:/xampp/htdocs/            folder  (FOR WINDOWS)

Step -4   Change in /Applications/MAMP/htdocs/chatApp/php/config.php. file (FOR MAC)
          
            <?php
 
              $hostname = "localhost";
              $username = "root";
              $password = "root";
              $dbname = "chatapp";
              $env_port = "8889";
 
              $conn = mysqli_connect($hostname, $username, $password, $dbname,$env_port);
              if(!$conn){
                echo "Database connection error".mysqli_connect_error();
              }
            ?>


Step -4   Change in htdocs/chatApp/php/config.php. file (FOR WINDOWS)

            <?php
 
              $hostname = "localhost:3306";
              $username = "root";
              $password = "";
              $dbname = "chatapp";
              $env_port = "3306";
 
              $conn = mysqli_connect($hostname, $username, $password, $dbname,$env_port);
              if(!$conn){
                echo "Database connection error".mysqli_connect_error();
              }
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


