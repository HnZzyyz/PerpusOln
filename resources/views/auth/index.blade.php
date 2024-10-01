<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Link CSS --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        body {
            background: #0f0f0f;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .bungkusan {
            display: flex;
            width: 90%;
            height: 80vh;
            gap: 7vw;
            overflow: hidden;
            justify-content: center;
        }

        .form_login {
            width: 27vw;
            height: 80vh;
            border-radius: 5px;
            background-color: #ccc;
            display: flex;
            flex-direction: column;
        }

        .background {
            position: relative;
            height: 80vh;
            width: 57%;
            text-align: center;
            border-radius: 5px;
        }

        .background img {
            height: 80vh;
            width: 100%;
            object-fit: cover;
        }

        .background h1 {
            position: absolute;
            top: 43%;
            left: 33%;
            font-weight: lighter;
            font-size: 50px;
            color: white;
        }

        .isi {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80%;
            height: 60vh;
            margin: auto;
            /* background-color: #f9fa; */
            /* Memberikan ruang lebih di bagian atas */
        }

        .isi .title {
            width: 100%;
            text-align: center;
            margin-bottom: 30px;
            /* Jarak bawah antara title dan elemen berikutnya */
            margin-top: -40px;
            /* Jarak atas antara title dan tepi atas container */
        }


        .isi .title,
        .isi form {
            width: 100%;
            /* Menyesuaikan lebar elemen dengan container */
            text-align: center;
            /* Menyusun teks di tengah */
        }

        .isi form input {
            display: block;
            width: 100%;
            margin: 10px 0;
            /* Menambahkan jarak antara elemen */
            padding: 10px;
            /* Menambahkan padding untuk input dan button */
            border-radius: 5px;
            /* Membuat sudut lebih lembut */
            border: 1px solid #ccc;
        }

        .isi form button {
            width: 40%;

            margin: 10px 0;
            /* Menambahkan jarak antara elemen */
            padding: 8px;
            /* Menambahkan padding untuk input dan button */
            border-radius: 5px;
            /* Membuat sudut lebih lembut */
            border: 1px solid #fff;
            background-color: #fff;
        }

        .isi form input {
            margin-bottom: 10px;
        }

        .isi form p {
            text-align: left;
            margin-bottom: -5px;
            margin-left: 5px;
        }
    </style>
</head>

<body>

    {{-- Bungkusan --}}
    <div class="bungkusan d-flex">
        <div class="form_login">
            <div class="isi">
                <div class="title">
                    <h2>Login Account</h2>
                    <p>Welcome back! Let's log in:</p>
                </div>
                <form action="/dashboard" method="">
                    <p>Username</p>
                    <input type="text" id="username" name="username" required>
                    <p>Password</p>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Sign In</button>
                </form>
            </div>
        </div>
        <div class="background">
            <img src="/assets/img/walpaper.jpg" alt="Background Image">
            <h1>Perpus.Oln</h1>
        </div>
    </div>
    {{-- End Bungkusan --}}

    {{-- Link JS --}}
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
