# LAMP Stack Scoring Application

![Home Page View](/home.png)
![Scoreboard Display](/scoreboard.png)
![Judges Addition](/judge.png)


## Setup Instructions



1.**Prerequisites**


  -Apache web server
  -MySQL database
  -PHP 7.4 or higher


2.**Database Setup**


  -Create a database named `scoring_database`


  -Import the SQL schema from `database/schema.sql`


3.**Configuration**


  -Update database credentials in `includes/db_connect.php`


4.**Initial Date**


  -You can manually add judges and participants through admin interface

## Features Implemented


-Admin panel for judge management


-Judge portal for submitting scores


-Public scoreboard that auto-refreshes every 10 seconds


## Database Schema
The database consists of three main tables:


-`judges`:Stores judge information


-`participants`:Stores participant information


-`scores`:Stores scoring data with foreign keys to judges and participants


## Design Choices


1. **PDO for Database Access**:Used PDO for secure database access


2. **Simple Frontend**: Basic HTML/CSS for quick implementation


3. **Auto-refreshing Scoreboard**: Javascript setTimeout for simple auto-refresh


## Future Enhancements
1. User authentication
2. More detailed scoring criteria
3. Participant registration system
4. Real-time updates using WebSockets
5. Export functionality for results

