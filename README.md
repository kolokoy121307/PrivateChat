STEP 1
Create database private_chat_db.sql in your MySQL databases
Import private_chat_db.sql from private_chat.zip
STEP 2
Setup MySQL databases connection in file connection.php
 $db = new mysqli("localhost", "root", "", "private_chat_db");
STEP 3
Run server_websocket.php use console. In this example, i use Windows OS console
STEP 4
Open web-based private chat application in your browser.


