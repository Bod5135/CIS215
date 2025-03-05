<!DOCTYPE html>
<html>
    <head>
        <title>Survey: Survey Name</title>  <!-- TODO: Change "Survey Name" to the topic of your survey -->
    </head>
    <body>


    <!-- TODO: Fix all bugs/poor practice in the form -->
    <form action="password_checker.php" method="post" class="survey">
        <div>
            <label for="email-id">Enter your email: </label>
            <input type="email" name="email-name" id="email-id">
        </div>
        
        <div>
            <label for="pw-id">Enter your password: </label>
            <input type="password" name="pw-name" id="pw-id">
        </div>
        <div>
            <fieldset>
                <legend>What age are you?</legend>
                <input type="radio" name="age" id="0-12" value="0-12">
                <label for="0-12">0-12 </label>
                <input type="radio" name="age" id="13-17" value="13-17">
                <label for="13-17">13-17 </label>
                <input type="radio" name="age" id="18-22" value="18-22">
                <label for="18-22">18-22 </label>
                <input type="radio" name="age" id="23-27" value="23-27">
                <label for="23-27">23-27 </label>
                <input type="radio" name="age" id="28-32" value="28-32">
                <label for="28-32">28-32 </label>
                <input type="radio" name="age" id="33-37" value="33-37">
                <label for="33-37">33-37 </label>
                <input type="radio" name="age" id="38-42" value="38-42">
                <label for="38-42">38-42 </label>
                <input type="radio" name="age" id="43-47" value="43-47">
                <label for="43-47">43-47 </label>
                <input type="radio" name="age" id="48-52" value="48-52">
                <label for="48-52">48-52 </label>
                <input type="radio" name="age" id="53-57" value="53-57">
                <label for="53-57">53-57 </label>
                <input type="radio" name="age" id="58-62" value="58-62">
                <label for="58-62">58-62 </label>
                <input type="radio" name="age" id="63-67" value="63-67">
                <label for="63-67">63-67 </label>
                <input type="radio" name="age" id="68+" value="68+">
                <label for="68+">68+ </label>
            </fieldset>
        </div>
        
        <div>
            <label for="gender">what gender are you</label>
            <select name="gender" id="gender">
                <optgroup>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="nb">Nonbinary</option>
                    <option value="gf">Genderfluid</option>
                    <option value="a">Agender</option>
                    <option value="o">Choose not to say/Other</option>
                </optgroup>
            </select>
        </div>
        <div>
            <button type="submit" name="submit" id="submit">Submit</button>
        </div>

        <!-- TODO: Add your own survey questions -->
        <div>
            <label for="pet_name">What is your pet name</label>
            <input type="text" name="pets_name" id="pets">
        </div>
        <div>
            <label for="pet_age">How old is your pet</label>
            <input type="text" name="pets_age" id="pets">
        </div>
    </form>

    <!-- TODO: All the backend PHP/SQL stuff! (you may need a separate file for this!) -->

    </body>
</html>