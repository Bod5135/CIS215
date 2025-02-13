<!DOCTYPE html>
    <html lang='eng-US'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'/>
        </head>
        <body>
            <main>
                <form action='' method='post' class='planes_form'>
                    <label for='name_input'>Enter name here: </label>
                    <input type='text' name='name' id='name_input'>

                    <label for='email_input'>Enter your email:</label>
                    <input type='email' name='email' id= 'email_input'>

                    <label for='fav_plane_input'>what is your favorite plane:</label>
                    <input type='text' name='fav_plane' id='fav_plane_input'>

                    <label for='is_military_input'>is it military:</label>
                    <input type='radio' name='is_military' id='is_military_input'> Yes
                    <input type='radio' name='is_military' id='is_not_military_input'> no
                    
                    <label for='num_planes_input'> How many plane have you seen today:</label>
                    <select name='num_planes' id='num_planes_input'>
                        <option value="0">none</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </form>
            </main>
        </body>
    </html>