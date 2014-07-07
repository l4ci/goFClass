# Users
shows all users with games/ranks/roles/level

### Subpages
- ->Badges

### Fields

- userId (INT (auto_increment) - user id)
- firstName
- lastName
- nick
- email
- password
- code (STRING - activation code for account activation or password reset )
- registrationDate (DATETIME)
- referralUserId (INT - user id who referred/invited the user)
- lastloginDate (DATETIME)
- role (INT)
  - 55555: Admin
  - 333: Moderator
  (- 23: Teamleader)
  - 22: Member
  - 1: Trial
  - 0: Guest

## Permission
Mods+
