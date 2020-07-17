# APPLICATION TEST DOCUMENTATION


### To create an access code for user visit http://localhost/application/access_code.php to create access code for users the login into the application and update details http://localhost/application/login.php to login to update information.
## Autheticated page login with access to the status,confirm and details page
### http://localhost/application/recover.php lo log in to view user status
### http://localhost/application/detail.php to view user details
### http://localhost/application/status.php

# Database structure
### The database structure of the application is defined below

| name            | type         | default |
| --------------- | ------------ | ------- |
| id              | int(11)      | no      |
| firstname       | varchar(191) | null    |
| lastname        | varchar(191) | null    |
| home_address    | varchar(191) | null    |
| marrital_status | varchar(191) | null    |
| education       | varchar(191) | null    |
| subjects        | varchar(191) | null    |
| religion        | varchar(191) | null    |
| state_of_origin | varchar(191) | null    |
| dob             | varchar(191) | null    |
| image           | varchar(191) | null    |
| access_code     | bigint(50)   | no      |
