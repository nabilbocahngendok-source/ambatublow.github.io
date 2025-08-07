<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ambatublow Food & Drink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@700&display=swap"
        rel="stylesheet" />
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        padding: 0;
    }

    h1,
    h2 {
        font-family: 'Helectiva', sans-serif;
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.47);
    }

    .btn-login {
        color: #f2f2f2;
        background-color: #ff0000;
        border: 3px thin black;
        padding: 10px 20px;
        font-size: 24px;
        cursor: pointer;
        border-radius: 3px;
        transition: all 0.3s ease;
        margin-right: 10px;
    }

    .btn-login:hover {
        background-color: #f2f2f2;
        color: #ff0000;
        border-radius: 5px;
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.41);
    }

    .container-red {
        background: rgba(183, 0, 0, 0.85);
        box-shadow: inset 10px 10px 30px #b70000;
        backdrop-filter: blur(4px);
    }

    .background-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url('baso.jpg');
        /* Ganti dengan file atau URL gambarmu */
        background-size: cover;
        background-position: center;
    }

    .background-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        /* Overlay hitam semi-transparan */
    }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center justify-center px-4">

    <!-- ✅ Latar belakang dengan overlay -->
    <div class="background-wrapper">
        <div class="background-overlay"></div>
    </div>

    <div class="text-center mb-10">
        <p class="text-white font-bold text-sm mb-1" style="text-shadow: 1px 1px 3px #000000;">WELCOME TO</p>
        <h1 class="text-red-600 text-5xl sm:text-7xl font-extrabold leading-none mb-1"
            style="text-shadow: 2px 2px 6px #000000;">AMBATUBLOW</h1>
        <h2 class="text-red-600 text-3xl sm:text-4xl font-extrabold leading-none"
            style="text-shadow: 2px 2px 6px #000000;">FOOD &amp; DRINK</h2>
    </div>

    <form class="container-red rounded-[3rem] max-w-3xl w-full sm:p-6" style="width: 500px;">
        <p class="text-[32px] font-extrabold leading-tight mb-3 text-white p-5 max-w-3xl mx-auto text-center">
            SELAMAT DATANG!!<br />
            AYO CEPAT PESAN!!
        </p>

        <button type="submit"
            class="btn-login w-90 p-8 mx-auto block rounded-lg py-3 text-white text-3xl font-bold tracking-wide"
            style="font-family: 'Montserrat', sans-serif;">
            <a href="menu.php">BUAT PESANAN</a>
        </button>
    </form>

    <footer
        class="container-red w-full mt-10 py-4 px-4 flex items-center justify-center fixed bottom-0 left-0 text-white">
        © 2025 Ambatublow Food & Drink
    </footer>
</body>

</html>