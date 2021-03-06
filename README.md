Ballista - Code Deployment System
=================================

Ballista is a Code Deployment system that is designed for environments that have multiple developers working on multiple projects that need to be deployed to multiple servers. It is primarily designed to work with Git.

Features
--------
- Graphical user interface for performing code deployment.
- Supports working with Git code that is hosted in-house or hosted on Github.
- Easy click deploy to multiple servers.
- Easy click rollback to any previous version.
- Create unlimited Users, Groups and Servers.
- Users can be assigned to multiple Groups.
- Groups can be assigned permissions on each server. This means you could have 
  a "Developers" group that has permission to deploy to your "Staging" server 
  and a "Release Managers" group that has permission to deploy to your "Production" 
  server, and the "Admin" group has permission to deploy to all servers.
- Timed deploys allow you to set a pre-determined time in the future to deploy your 
  project, and Ballista will deploy it for you.
- Deploy your Git branches to your testing/staging servers. 
- Detailed activity log of all deploys performed.
- Executing hook scripts after performing deploys on server gives you great 
  flexibility to do a variety of things after a deploy.

Documentation
-------------
Find documentation under the docs folder.

Issues
------
Send issues to:
https://github.com/allerinternett/ballista/issues

License
-------
Licensed under GPL v3

Copyright
---------
Aller Internett AS, 2011-2012

