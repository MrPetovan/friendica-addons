<?php

if(! function_exists("string_plural_select_en_gb")) {
function string_plural_select_en_gb($n){
	return ($n != 1);;
}}
;
$a->strings["Friendica-Native events"] = "Friendica-native events";
$a->strings["Friendica-Contacts"] = "Friendica contacts";
$a->strings["Your Friendica-Contacts"] = "Your Friendica contacts";
$a->strings["Something went wrong when trying to import the file. Sorry. Maybe some events were imported anyway."] = "Something went wrong when trying to import the file. Some events may have been imported anyway.";
$a->strings["Something went wrong when trying to import the file. Sorry."] = "Something went wrong when trying to import the file.";
$a->strings["The ICS-File has been imported."] = "The ICS file has been imported.";
$a->strings["No file was uploaded."] = "No file was uploaded.";
$a->strings["Go back to the calendar"] = "Go back to the calendar";
$a->strings["Import a ICS-file"] = "Import an ICS file";
$a->strings["ICS-File"] = "ICS file";
$a->strings["Overwrite all #num# existing events"] = "Overwrite all #num# existing events";
$a->strings["Upload"] = "Upload";
$a->strings["Settings"] = "Settings";
$a->strings["Help"] = "Help";
$a->strings["New event"] = "New event";
$a->strings["Today"] = "Today";
$a->strings["Day"] = "Day";
$a->strings["Week"] = "Week";
$a->strings["Month"] = "Month";
$a->strings["Reload"] = "Reload";
$a->strings["Previous"] = "Previous";
$a->strings["Next"] = "Next";
$a->strings["Date"] = "Date";
$a->strings["Error"] = "Error";
$a->strings["Permission denied."] = "Permission denied.";
$a->strings["The new values have been saved."] = "The new values have been saved.";
$a->strings["The calendar has been updated."] = "The calendar has been updated.";
$a->strings["The new calendar has been created."] = "The new calendar has been created.";
$a->strings["The calendar has been deleted."] = "The calendar has been deleted.";
$a->strings["Calendar Settings"] = "Calendar settings";
$a->strings["Date format"] = "Date format";
$a->strings["Time zone"] = "Time zone";
$a->strings["Save"] = "Save";
$a->strings["Calendars"] = "Calendars";
$a->strings["Create a new calendar"] = "Create a new calendar";
$a->strings["Limitations"] = "Limitations";
$a->strings["Warning"] = "Warning";
$a->strings["Synchronization (iPhone, Thunderbird Lightning, Android, ...)"] = "Synchronisation (iPhone, Thunderbird Lightning, Android etc.)";
$a->strings["Synchronizing this calendar with the iPhone"] = "Synchronising this calendar with an iPhone";
$a->strings["Synchronizing your Friendica-Contacts with the iPhone"] = "Synchronising your Friendica contacts with an iPhone";
$a->strings["The current version of this addon has not been set up correctly. Please contact the system administrator of your installation of friendica to fix this."] = "The current version of this addon has not been set up correctly. Please contact the administrator of your Friendica site to ask them to fix this.";
$a->strings["Calendar"] = "Calendar";
$a->strings["Extended calendar with CalDAV-support"] = "Extended calendar with CalDAV support";
$a->strings["noreply"] = "noreply";
$a->strings["Notification: "] = "Notification: ";
$a->strings["The database tables have been installed."] = "The database tables have been installed.";
$a->strings["An error occurred during the installation."] = "An error occurred during the installation.";
$a->strings["The database tables have been updated."] = "The database tables have been updated.";
$a->strings["An error occurred during the update."] = "An error occurred during the update.";
$a->strings["No system-wide settings yet."] = "No system-wide settings yet.";
$a->strings["Database status"] = "Database status";
$a->strings["Installed"] = "Installed";
$a->strings["Upgrade needed"] = "Upgrade needed";
$a->strings["Please back up all calendar data (the tables beginning with dav_*) before proceeding. While all calendar events <i>should</i> be converted to the new database structure, it's always safe to have a backup. Below, you can have a look at the database-queries that will be made when pressing the 'update'-button."] = "Please back up all calendar data (tables beginning with dav_*) before proceeding. While all calendar events <i>should</i> be converted to the new database structure, it's recommended that you make a backup just to be on the safe side. You can see the database queries that will be made during the update below.";
$a->strings["Upgrade"] = "Upgrade";
$a->strings["Not installed"] = "Not installed";
$a->strings["Install"] = "Install";
$a->strings["Unknown"] = "Unknown";
$a->strings["Something really went wrong. I cannot recover from this state automatically, sorry. Please go to the database backend, back up the data, and delete all tables beginning with 'dav_' manually. Afterwards, this installation routine should be able to reinitialize the tables automatically."] = "Something has gone wrong. It is impossible to recover from this state automatically. Please go to the database backend, back up the data, and manually delete all tables beginning with 'dav_'. When you have done this, the installation routine should be able to reinitialise the tables automatically.";
$a->strings["Troubleshooting"] = "Troubleshooting";
$a->strings["Manual creation of the database tables:"] = "Manual creation of database tables:";
$a->strings["Show SQL-statements"] = "Show SQL statements";
$a->strings["Private Calendar"] = "Private calendar";
$a->strings["Friendica Events: Mine"] = "Friendica events: My events";
$a->strings["Friendica Events: Contacts"] = "Friendica events: Contacts' events";
$a->strings["Private Addresses"] = "Private addresses";
$a->strings["Friendica Contacts"] = "Friendica contacts";
$a->strings["Could not open component for editing"] = "Could not open component for editing";
$a->strings["Event data"] = "Event data";
$a->strings["Special color"] = "Special colour";
$a->strings["Subject"] = "Subject";
$a->strings["Starts"] = "Starts";
$a->strings["Ends"] = "Ends";
$a->strings["Location"] = "Location";
$a->strings["Description"] = "Description";
$a->strings["Recurrence"] = "Recurrence";
$a->strings["Frequency"] = "Frequency";
$a->strings["None"] = "None";
$a->strings["Daily"] = "Daily";
$a->strings["Weekly"] = "Weekly";
$a->strings["Monthly"] = "Monthly";
$a->strings["Yearly"] = "Yearly";
$a->strings["days"] = "days";
$a->strings["weeks"] = "weeks";
$a->strings["months"] = "months";
$a->strings["years"] = "years";
$a->strings["Interval"] = "Interval";
$a->strings["All %select% %time%"] = "";
$a->strings["Days"] = "Days";
$a->strings["Sunday"] = "Sunday";
$a->strings["Monday"] = "Monday";
$a->strings["Tuesday"] = "Tuesday";
$a->strings["Wednesday"] = "Wednesday";
$a->strings["Thursday"] = "Thursday";
$a->strings["Friday"] = "Friday";
$a->strings["Saturday"] = "Saturday";
$a->strings["First day of week:"] = "First day of the week:";
$a->strings["Day of month"] = "Day of month";
$a->strings["#num#th of each month"] = "#num#th of each month";
$a->strings["#num#th-last of each month"] = "#num#th-last of each month";
$a->strings["#num#th #wkday# of each month"] = "#num#th #wkday# of each month";
$a->strings["#num#th-last #wkday# of each month"] = "#num#th-last #wkday# of each month";
$a->strings["#num#th of the given month"] = "#num#th of the given month";
$a->strings["#num#th-last of the given month"] = "#num#th-last of the given month";
$a->strings["#num#th #wkday# of the given month"] = "#num#th #wkday# of the given month";
$a->strings["#num#th-last #wkday# of the given month"] = "#num#th-last #wkday# of the given month";
$a->strings["Repeat until"] = "Repeat until";
$a->strings["Infinite"] = "Indefinite";
$a->strings["Until the following date"] = "Until the following date";
$a->strings["Number of times"] = "Number of times";
$a->strings["Exceptions"] = "Exceptions";
$a->strings["none"] = "none";
$a->strings["Notification"] = "Notification";
$a->strings["Notify by"] = "Notify by";
$a->strings["Remove"] = "Remove";
$a->strings["E-Mail"] = "Email";
$a->strings["On Friendica / Display"] = "On Friendica / Display";
$a->strings["Time"] = "Time";
$a->strings["Hours"] = "Hours";
$a->strings["Minutes"] = "Minutes";
$a->strings["Seconds"] = "Seconds";
$a->strings["Weeks"] = "Weeks";
$a->strings["before the"] = "before the";
$a->strings["start of the event"] = "start of the event";
$a->strings["end of the event"] = "end of the event";
$a->strings["Add a notification"] = "Add a notification";
$a->strings["The event #name# will start at #date"] = "The event #name# will start at #date";
$a->strings["#name# is about to begin."] = "#name# is about to begin.";
$a->strings["Saved"] = "Saved";
$a->strings["U.S. Time Format (mm/dd/YYYY)"] = "US time format (mm/dd/YYYY)";
$a->strings["German Time Format (dd.mm.YYYY)"] = "UK time format (dd/mm/YYYY)";
$a->strings["Private Events"] = "Private events";
$a->strings["No access"] = "No access";
$a->strings["Private Addressbooks"] = "Private address books";