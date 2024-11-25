<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/website/public/css/style.css">

</head>
<body>
    <nav>
        <div class="icon">Tokosaya<sup>Co</sup></div>
        <!--<ul>
            <li>Home</li>
            <li>Home</li>
            <li>Home</li>
        </ul>-->
    </nav>
    <section>
        <form action="">
            <img src="/website/public/assets/logos.jpg" alt="">
            <p>Bergabung bersama Kami</p>
            <input type="text" placeholder="Email Adress">
            <input type="text" placeholder="Password">
            <button>Register</button>
            <p>Sudah punya akun? <a href="<?= base_url('home/regis') ?>">Login</a></p>
        </form>
    </section>
</body>
</html>