<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Forma za unos</title>

    <script>
        function provjeri(f) {
            let greske = "";

            if (f.ime.value == "") greske += "Ime nije uneseno\n";
            if (f.prezime.value == "") greske += "Prezime nije uneseno\n";
            if (f.username.value.length < 5) greske += "Username mora imati barem 5 znakova\n";
            if (f.password.value.length < 6) greske += "Lozinka mora imati barem 6 znakova\n";
            if (f.dob.value < 18 || f.dob.value > 110) greske += "Dob mora biti između 18 i 110\n";

            if (greske != "") {
                alert(greske);
                return false;
            }
            return true;
        }
    </script>

</head>
<body>

<form method="post"
      action="UnesiKorisnika.php"
      onsubmit="return provjeri(this)">

    Ime: <input type="text" name="ime"><br><br>
    Prezime: <input type="text" name="prezime"><br><br>
    Username: <input type="text" name="username"><br><br>
    Lozinka: <input type="password" name="password"><br><br>
    Dob: <input type="number" name="dob"><br><br>
    Email: <input type="text" name="email"><br><br>

    <input type="submit" value="Pošalji">

</form>

</body>
</html>
