# Overview

A simple snake game made in vanilla JavaScript, HTML, and CSS, with PHP code configurable to connect to a MySQL database to track high scores.
If you would like to play locally clone this repository. If you would like to track high scores you will first need to create the MySQL database. Next, you can edit the DB credentials in `example.config.php` and remove the `example.` from the filename to connect. Finally, you can run the migrations in the terminal with `php [projectDirectory]/migrations/create_scores_table.php` to create the table. Either way the game should still be playable at the index.html file if you choose not to track high scores.

There is a configured version available to play at [johnnycassidy.dev/snake](https://johnnycassidy.dev/snake) without cloning this repository if you would like to try it out. Try to get the high score!! You can also preview the repo unconfigured at [snake.johnnycassidy.dev](https://snake.johnnycassidy.dev) with some console errors.