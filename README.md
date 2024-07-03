# Overview

A simple snake game made with JavaScript, PHP, HTML, and CSS, with code configurable to connect to a MySQL database to track high scores.

If you would like to play locally, begin by cloning this repository. If you would like to track high scores, you will first need to create the MySQL database. Next, you can edit the DB credentials in `example.config.php` and remove the `example.` from the filename to connect. Finally, you can run the migrations in the terminal with `php [projectDirectory]/migrations/create_scores_table.php` to create the table. If you don't wish to track scores, the game should still be playable at the `index.html` file.

There is a live version available to play at [snake.johnnycassidy.dev](https://snake.johnnycassidy.dev) if you would like to try it out. Try to get the high score!!

  <img style="border: 1px solid #666;" src="https://snake.johnnycassidy.dev/images/screenshot_one.png" alt="hangman game being played" width="400" height="400">

  <img style="border: 1px solid #666;" src="https://snake.johnnycassidy.dev/images/screenshot_two.png" alt="hangman game after win" width="400" height="400">
