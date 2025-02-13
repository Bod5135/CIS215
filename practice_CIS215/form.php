<!DOCTYPE html>
    <html lang='eng-US'>
        <head>
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width,initial-scale=1'/>
        </head>
        <body>
            <main>
                <form action='' method='post' class='planes_form'>
                    Enter name here: <input type='text' name='name' id='name_input'>

                    Enter your email: <input type='email' name='email' id= 'email_input'>

                    what is your favorite plane: <input type='text' name='fav_plane' id='fav_plane_input'>

                    is it military: 
                    <input type='radio' name='is_military' id='is_military_input'> Yes
                    <input type='radio' name='is_military' id='is_not_military_input'> no
                    
                    How many plane have you seen today:
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