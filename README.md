# NYTWordle
 
to do:
    allow people to use keyboard (only matters if you're playing on pc like a weirdo)
    localStorage for current run (so you cant just refresh and cuck it all)
    build leaderboard that shows your stats after game ends
    implement RIT login to associate statistics/scores with a person
    build firebase db to store statistics
        - each individual person has their own collection
        - each one has a spot for current day, and for overall scores
            - current day one is checked on first load, if the days don't match it wipes the currentDay (implement different maybe)
        - store names with usernames (this will just be hard coded in the db with everyone's rit emails which im hoping we can pull from RIT login)
    build leaderboard.html page to show statistics for: 
        - how everyone did today
        - your personal stats
        - everyone's comparative stats (points system- 6 points for first word, 1 point for last, etc.?)

less important but would be nice:
    convert window.alerts to something nice like on actual wordle (animation for word not real, etc.)

