Project Clock application.

This is a small we app to run a clock for use with project timesheets.  Users are able to enter username, client
cost code and project code.  The app will time the work then output the result so it can be copied / pasted
into a timesheet.

It uses PDO prepared statements to write to and query the database, however beyond this, no special hardening has
been done as of yet.  It's currently a quick hack to solve an annoying problem with my timesheets!
