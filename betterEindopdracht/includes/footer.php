<!-- jouw HTML voor een Footer komt hier... 
Benoem hier ten minste je naam en de tijd
-->

<html>
    <body>
        <div id="maindiv">
            <h3>Brenda Stoute</h3>
            <?php
                date_default_timezone_set('Europe/Amsterdam');
                echo "The time is " . date("h:i");
            ?>
        </div>
    </body>


</html>
