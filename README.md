# Law3andakDam website
Law3andakdam.com is a free online service that matches blood donors and patients in need of blood, based on location and blood type, and through social media. Donors register their information with Law3andakdam. Recipients fill a very easy to use online request that is broadcasted through our social network. Recipients can also search the online Donor directory.

## Local setup
**prerequisite postgresql and redis**

then run `./bin/setup` after cloning this repo. It will install all dependencies, create database.

## Server
Use forman `foreman start` (if you have `foreman` installed locally) to run application server and workers.

## Testing
You are free to use `rake`, `rake spec` or even `rspec` command to run test suite against whole application.
