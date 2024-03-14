<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <h2>Sign Up Form</h2>
        <p>
            <label>First name:</label>
            <input type="text" name="firstname" placeholder="" />
        </p>
        <p>
            <label>Last name:</label>
            <input type="text" name="lastname" placeholder="" />
        </p>
        <p>
            <label>Gender:</label>
            <br>
            <input type="radio" name="gender" value="laki-laki" /> Laki-laki
            <br>
            <input type="radio" name="gender" value="perempuan" /> Perempuan
            <br>
            <input type="radio" name="gender" value="Other" /> Other
        </p>
        <p>Nationality:</p>
            <select name="Nationality">
                <option value="Indonesian">Indonesian</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Russia">Russia</option>
                <option value="Uzbekistan">Uzbekistan</option>
            </select>
        <p>
            <label>Language Spoken:</label>
            <br>
            <input type="checkbox" name="Language" value="Bahasa Indonesia" /> Bahasa Indonesia
            <br>
            <input type="checkbox" name="Language" value="Pakistan" /> Pakistan
            <br>
            <input type="checkbox" name="Language" value="Russia" /> Russia
            <br>
            <input type="checkbox" name="Language" value="Uzbekistan" /> Uzbekistan
            <br>
            <input type="checkbox" name="Language" value="Other" /> Other
        </p>
        <p>
            <label>Bio:</label>
            <br>
            <textarea name="bio"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Sign up" />
        </p>
    </form>
</body>
</html>
