<!DOCTYPE html>
    <html lang='eng-US'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'/>
        </head>
        <body>
            <main>
                <form action='submit4.php' method='post' class='Destiny_quiz'>
                    <div>
                        <fieldset>
                            <legend>what animal do you like the most:</legend>
                            <input type='radio' name='fav_animal' id='lion' value='1'> Lion
                            <input type='radio' name='fav_animal' id='snake' value='2'> Snake
                            <input type='radio' name='fav_animal' id='hawk' value='3'> Hawk
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <legend>What role do you play the most:</legend>
                            <input type='radio' name='fav_role' id='tank' value='1'> tank
                            <input type='radio' name='fav_role' id='damage' value='2'> damage
                            <input type='radio' name='fav_role' id='support' value='3'> support
                        </fieldset>
                    </div>
                    <fieldset>
                            <legend>how would you fight:</legend>
                            <input type='radio' name='fav_fight' id='fists' value='1'> Fists
                            <input type='radio' name='fav_fight' id='knife' value='2'> Knife
                            <input type='radio' name='fav_fight' id='magic' value='3'> Magic
                    </fieldset>
                    <fieldset>
                        <legend>what ablitiy do you think is the best:</legend>
                        <input type='radio' name='fav_ablitiy' id='wall' value='1'> A wall
                        <input type='radio' name='fav_ablitiy' id='dodge' value='2'> dodge
                        <input type='radio' name='fav_ablitiy' id='heal'  value='3'> healing circle
                    </fieldset>
                    <div>
                        <button type='submit' name='submit_button' id='submit_button'>Submit</button>
                    </div>
                </form>
            </main>
        </body>
    </html>