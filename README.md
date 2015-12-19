# Supervision Duty Allotter
####Online application for supervision duty allotment

This is an application for allotting supervision/reliever duty during examination.

### Features

- Easy to use, Can be accessed from any computer on the network
- Random supervision/reliever duty allotment based on the constraints given
- Supervision/Reliever duty allotted to each teacher based on priority, seniority and preset individual constraints
- Teachers can login and look at their supervision duties
- Individual teacher duties report
- Detailed report generation to see duties for a particular day and/or time

### Installation

Download all the files into your server (server must support PHP and MySQL) create a database named 'sup'. Import the db.sql file provided into the newly created database. Change the details of the MySQL server in 'login_config.php' and 'settings.php'

### First steps

Login as Administrator. Username: admin, Password: Admin123. Presently there are 36 teachers in the database (imported from db.sql). Follow these steps to have a brief overview of the software:
- Click on 'Setup a New Time table' in the homepage
- Choose a from and to date in given format
- Uncheck the days on which there will not be any exams
- Enter the required quantity of supervision/reliever duties on each of the dates in both morning and evening. Click submit to continue
- The preset values of max supervision and reliever duties that each teacher has is shown, can be changed if necessary. Click continue
- Name of the examination and block numbers are asked, these do not have any influence on the result, just to be shown in the final timetable. Click continue
- A random timetable is generated with required constraints, reload this page to re allot duties. Click continue to save
- The saved timetable is shown. Go to home
- Explore the different options available
- Each generated timetable has a unique key, this key is required to get that timetable for future references

### Demo & Screenshots

Will be updated soon

DISCLAIMER: I did this project as a hobby when I was in middle school, So please excuse my coding style. There are bugs.
