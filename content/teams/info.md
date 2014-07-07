**Function**
Shows all visible teams with their game

**Team Fields**

- tid (INT (auto_increment)- team id)
- shorttitle (STRING - short title of team)
- title (STRING - fulltitle of team)
- description (TEXT - short description of team)
- gid (INT - game id)
- status (INT)
  - 0: inactive/PendingDelete (not visible)
  - 1: Active (visible)
- permission (INT)
  - 1: Public (anyone can join)
  - 2: Closed (Members must apply)
  - 3: Secret (Members must apply - not listed anywhere / must join via url)
- Ranks (STRING - array of ranks)
  -DEFAULT: {'Officer','Recruiter','Member','Trials'}

**Permission**
Public
