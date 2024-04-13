1.XAMPP

2."TEXT EDITOR" VISUAL STUDO CODE OR SUBLIME TEXT 3 / ETC.

3"voting management system"

4. Download the zip file/ download winrar

5. Extract the file and copy "voting management system" folder

6.Paste inside root directory/ where you install xammp local disk C: drive D: drive E: paste: for xampp/htdocs, 

7. Open PHPMyAdmin (http://localhost/phpmyadmin)

8. Create a database with name votingsystem

6. Import votingsystem.sql file(given inside the zip package in SQL file folder)

7.Run the script http://localhost/votingsystem

username  admin
password  password

Brought to you by: www.alphacodecamp.com.ng & cmanirudh.netlify.app

As mentioned above this project is mainly done by alphacodecamp but there were some drawbacks in this project which I have overcome by adding my part of the code.
Drawbacks:
1. The admin had mannually register every single voter by himself and the admin was setting all the passwords for the users which increases the admin work a lot.
2. The ID was generating automatically but the password was set by the admin.
3. How will the user get his/her credentials to login and participate in voting process?
4. There was no time restriction for the voter
ie The voter could login at anytime of the day and participate in election process.


Overcome:
1. I have overcome the first drawback by introducing a registration page which is connected to the same database by introducing this the work of admin has reduced. The registration process has been automated.
2. Secon drawback has been overcomed by adding few lines of code which automatically sets password for a user abd stores in the backend databse.
3. Third drawback has beeen overcomed by adding a folder named SMS in which I have written 2 python programs. On execution of these two python programs they will send voter credentials to the registered voters via mail & sms.
This program can be run before 10 min of the election so that we can make sure that the user dosen't have the credentials before the election by this the security of the voting system has also been enhanced.
4. I have written few lines of PHP program, in that program we can set the opening and closing hour of the election.
After setting the open and close hour the voter cannot access the website until the open hour and after the closing hour the voter will not be able to vote.

I have overcomed above drawbacks by implementing my knowledge.
