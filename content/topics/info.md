# Function
Shows all topics

**Topic Fields**

- topicId (INT (auto_increment)- topic id)
- gameId (INT - game id)
- teamId (INT - team id)
- status (INT)
  - 0: inactive/PendingDelete (not visible)
  - 1: Active (visible)
- permission (INT - required role to view the topic)

- title (STRING - fulltitle of topic)
- text (TEXT - fulltext of topic)
- date (DATETIME)
- sticky (INT - is topic sticky)

- upVotes (INT)
- downVotes (INT)


**Permission**
Public
