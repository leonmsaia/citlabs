CodeIgniter 3 Docker Implementation for Learning Purposes

Step 1: Clone the Repository Clone the repository from GitHub: 
`git clone https://github.com/leonmsaia/citlabs`

Step 2: Configure the .env File Complete the .env file with the desired data as needed. (It can be left as default)

Step 3: Build and Run Docker Containers docker-compose up --build This will build the necessary Docker containers, namely: Laravel (11.0.0), MySQL, phpMyAdmin, MongoDB.

Step 4: If you need to set special enviroment variables, check the .env file inside the codeigniter folder, that will be mapped in: codeigniter/application/config/database. And the load of the composer vendors are inicialized in the main index.php file in the root folder (codeigniter).

Step 5: Access CodeIgniter 3 and phpMyAdmin Once the previous steps are completed, CodeIgniter 3 should be available at http://localhost:8080 and phpMyAdmin at http://localhost:8081. You can access phpMyAdmin using the credentials defined in the .env file.

That's it! Now you have a lab environment to study, modify, create, break, and recreate a complete Laravel Enhancement System With Multiple Databases.

CodeIgniter 3 Documentation: https://www.codeigniter.com/userguide3/general/

Author Leon. M. Saia leonmsaia@gmail.com 
+54 9 11 2374 7372 
https://www.linkedin.com/in/leonmsaia/ https://github.com/leonmsaia/citlabs