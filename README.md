# Project Setup Guide
This guide will help you download and set up the dispensary project on your local machine.

## Database Setup
1. **Open PHPMyAdmin in your browser**:
    - Navigate to `http://localhost/phpmyadmin` (or the URL for your PHPMyAdmin installation).
2. **Create a new database**:
    - Click on the `Databases` tab.
    - In the `Create database` field, enter `dispensary_db`.
    - Click `Create`.
3. **Import the SQL file**:
    - Select the `dispensary_db` database from the list on the left.
    - Go to the `Import` tab.
    - Click `Choose File` and select the `myhmsdb.sql` file located in the project directory.
    - Click `Go` to import the database schema and data.

## Local Development Environment Setup
1. **Set Up a Local Web Server**:
    - Ensure you have a local web server running. You can use software like [XAMPP](https://www.apachefriends.org/index.html), which provides Apache, PHP, and MySQL.
2. **Place Your Project in the Web Server Directory**:
    - Move or copy your project folder (`Site dispensary`) to the web server's root directory:
        - For **XAMPP**: `C:\xampp\htdocs\`
        - For **WAMP**: `C:\wamp\www\`
        - For **MAMP**: `/Applications/MAMP/htdocs/`
3. **Start Your Web Server**:
    - Open your web server control panel.
    - Start the Apache and MySQL services.
4. **Access Your Project in the Browser**:
    - Open a web browser.
    - Navigate to `http://localhost/Site%20dispensary` (adjust the URL if your project folder name is different).

## Example Using XAMPP
1. **Move Project to XAMPP Directory**:
    - Place the `Site dispensary` folder inside `C:\xampp\htdocs\`.
2. **Start Apache and MySQL**:
    - Open the XAMPP Control Panel.
    - Click "Start" next to Apache and MySQL.
3. **Open Browser**:
    - Navigate to `http://localhost/(Site)`.

By following these steps, you should have your project set up and running on your local machine. If you encounter any issues, ensure that your web server and database configurations are correct, and that all services are running properly.
