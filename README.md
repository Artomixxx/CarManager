<p align="center">
    <h1 align="center">CarManager</h1>
    <br>
</p>

CarManager is a web application built using the Yii2 framework, allowing users to manage information about cars.

Installation
To run the CarManager application locally, follow these steps:

Clone the repository to your local machine.
Import the database dump file located in the database_dump directory into your MySQL database using phpMyAdmin:
Start XAMPP and ensure Apache and MySQL services are running.
Open phpMyAdmin in your web browser.
Click on the "Import" tab and choose the carmanager.sql file.
Click "Go" to import the database.
Place the project folder inside the htdocs directory of your XAMPP installation.
Open your web browser and navigate to http://127.0.0.1/CarManager/web.
Project Structure
The project follows the standard Yii2 directory structure:

assets: Contains published asset files.
commands: Contains console command classes.
config: Contains configuration files.
controllers: Contains controller classes.
mail: Contains email view files.
models: Contains model classes.
runtime: Contains runtime files generated during application runtime.
tests: Contains test classes.
vendor: Contains composer dependencies.
views: Contains view files.
web: Contains entry script and web resources.
widgets: Contains widget classes.

Usage
Access the application by navigating to http://127.0.0.1/CarManager/web in your web browser.
Use the application to view, add, and update car information.
Security
The application is designed to handle user input securely and prevent common attacks such as SQL Injection. Input validation and parameterized queries are used to mitigate these risks.

License
This project is licensed under the MIT License.