<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>HTML-5 Example - Mateusz Miotk</title>
</head>
<body>
<header>
    <h3>FORMULARZ</h3>
</header>
<form name="form">
    <fieldset>
        <legend>Text</legend>
        <input type="text" name="input" value="Complete with up to 15 characters" maxlength="15"><br>
    </fieldset>
    <fieldset>
        <legend>Radio</legend>
        <label>Yes: </label><input type="radio" name="radio1" value="Button is not selected">
        <label>No: </label><input type="radio" name="radio1" checked value="Button is selected"><br><br>
    </fieldset>
    <fieldset>
        <legend>Checkbox</legend>
        <label>Coffee: </label><input type="checkbox" name="check1" value="Button check not selected">
        <label>Tea: </label><input type="checkbox" name="check2" value="Button check selected" checked><br>
    </fieldset>
    <fieldset>
        <legend>Reset</legend>
        <input type="reset" name="reset" value="Reset the form"><br>
    </fieldset>
    <fieldset>
        <legend>Text Area</legend>
        <textarea name="textarea" cols="2" rows="10" wrap="hard">Here enter the text</textarea><br>
    </fieldset>
    <fieldset>
        <legend>Select and options</legend>
        <select name="nationality" size="2" required>
            <option value="PL" selected>Poland</option>
            <option value="DE">German</option>
            <option value="GB">Great Britain</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Email</legend>
        <label>Enter email: </label><input type="email" name="email" required>
    </fieldset>
    <fieldset>
        <legend>Number</legend>
        <label>Enter a number from one to ten: </label><input type="number" name="number" value="1" min="1" max="10"
                                                              required>
    </fieldset>
    <fieldset>
        <legend>Date</legend>
        <label>Date of birth: </label><input type="date" name="birth" required>
    </fieldset>
    <fieldset>
        <legend>Time</legend>
        <label>Time of birth: </label><input type="time" name="time">
    </fieldset>
    <fieldset>
        <legend>Color</legend>
        <label>Kolor: </label><input type="color" name="color">
    </fieldset>
    <fieldset>
        <legend>Range</legend>
        <label>Range: </label><input type="range" name="range" min="1" max="25" value="5">
    </fieldset>
    <fieldset>
        <legend>Datalist and options</legend>
        <label>Stan cywilny: </label><input type="text" required list="stany">
        <datalist id="stany">
            <option value="Zamężny/Zamężna"></option>
            <option value="Kawaler/Panna"></option>
            <option value="Rozwodnik"></option>
        </datalist>
    </fieldset>
    <br><br>
    <fieldset>
        <legend>Submit</legend>
        <input type="submit" name="send" value="send it"><br>
    </fieldset>
</form>
<footer>Footer - &copy;&nbsp;Copyright 2020</footer>
</body>
</html>