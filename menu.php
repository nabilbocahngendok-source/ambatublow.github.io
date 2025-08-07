<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ambatublow Food & Drink Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@700&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: rgba(223, 235, 169, 0.58);
    }

    h1,
    h2 {
        text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    }

    .container-red {
        background: linear-gradient(135deg, #ff0000, #b70000);
        box-shadow: inset 10px 10px 30px #b70000;
    }

    .btn-logout {
        color: #f2f2f2;
        background-color: #b70000;
        border: 2px thin black;
        padding: 10px 20px;
        font-size: 24px;
        cursor: pointer;
        border-radius: 3px;
        transition: all 0.3s ease;
        margin-right: 10px;
    }

    .btn-logout:hover {
        background-color: #f2f2f2;
        color: #ff0000;
        border-radius: 5px;
        transform: scale(1.3);
        box-shadow: 0 4px 10px rgba(255, 255, 255, 0.41);
    }

    .background-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        background-image: url('dapur.jpg');
        /* Ganti dengan file atau URL gambarmu */
        background-size: cover;
        background-position: center;
        backdrop-filter: blur(10px);
    }

    .background-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        /* Overlay hitam semi-transparan */
    }

    video {
        border-radius: 10px;
    }
    </style>
</head>

<body class="min-h-screen flex flex-col items-center px-2">

    <div class="background-wrapper">
        <div class="background-overlay"></div>
    </div>

    <!-- NAVBAR -->
    <nav class="container-red w-full py-6 px-6 sm:px-20 flex items-center justify-between fixed top-0 left-0 z-50">
        <div class="flex flex-col leading-tight">
            <span class="text-white font-extrabold text-xl sm:text-3xl tracking-wide">AMBATUBLOW</span>
            <span class="text-white font-semibold text-sm sm:text-lg">FOOD & DRINK</span>
        </div>
        <div class="flex items-center space-x-3">
            <span class="text-white font-bold text-base sm:text-2xl">
                <button class="btn-logout"><a href="logout.php">Kembali</a></button>
            </span>

        </div>
    </nav>

    <!-- VIDEO BANNER -->
    <div class="mt-32 rounded-[3rem] overflow-hidden" style="width:90%; height:500px; background-color:#f2f2f2;">
        <video src="cocot.mp4" class="w-full h-full object-cover" autoplay muted loop playsinline>
        </video>
    </div>

    <!-- GRID MAKANAN -->
    <div class="relative w-full flex flex-col items-center">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-10 mb-10" style="width: 90%;">
            <!-- CARD MAKANAN -->
            <div onclick="tambahPesanan('BAKSO')"
                class="bg-white rounded-xl shadow-md p-3 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-xl hover:scale-105 cursor-pointer">
                <img src="bakso.jpg" class="rounded-lg w-full h-60 object-cover mb-2" alt="Bakso">
                <span class="font-bold text-xl" style="text-shadow:1px 1px 2px rgba(0,0,0,0.3)">BAKSO</span>
            </div>
            <div onclick="tambahPesanan('MIE GORENG')"
                class="bg-white rounded-xl shadow-md p-3 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-xl hover:scale-105 cursor-pointer">
                <img src="mie.jpg" class="rounded-lg w-full h-60 object-cover mb-2" alt="Mie Goreng">
                <span class="font-bold text-xl" style="text-shadow:1px 1px 2px rgba(0,0,0,0.3)">MIE GORENG</span>
            </div>
            <div onclick="tambahPesanan('NASI GORENG')"
                class="bg-white rounded-xl shadow-md p-3 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-xl hover:scale-105 cursor-pointer">
                <img src="nasgor.avif" class="rounded-lg w-full h-60 object-cover mb-2" alt="Nasi Goreng">
                <span class="font-bold text-xl" style="text-shadow:1px 1px 2px rgba(0,0,0,0.3)">NASI GORENG</span>
            </div>
            <div onclick="tambahPesanan('ESTEHANGET')"
                class="bg-white rounded-xl shadow-md p-3 flex flex-col items-center text-center transform transition-all duration-300 hover:shadow-xl hover:scale-105 cursor-pointer">
                <img src="estehanget.webp" class="rounded-lg w-full h-60 object-cover mb-2" alt="Es Teh Anget">
                <span class="font-bold text-xl" style="text-shadow:1px 1px 2px rgba(0,0,0,0.3)">ES TEH ANGET</span>
            </div>
        </div>
    </div>

    <!-- PANEL PESANAN -->
    <div id="panelPesanan"
        class="fixed top-0 left-0 w-80 h-full bg-[#d9d9d9] shadow-xl transform -translate-x-full transition-transform duration-300 z-50 flex flex-col justify-between">

        <!-- Bagian Atas -->
        <div>
            <div class="bg-[#e8e8e8] m-3 rounded shadow-inner">
                <h2 class="text-center py-3 font-bold text-lg tracking-wide">- DETAIL PESANAN -</h2>
            </div>

            <!-- List Pesanan -->
            <ul id="daftarPesanan" class="px-4 space-y-3 text-black font-bold text-base">
                <!-- item pesanan akan ditambah lewat JS -->
            </ul>
        </div>

        <!-- Bagian Ringkasan -->
        <div class="bg-gray-300 p-3 text-sm font-bold space-y-1">
            <div class="flex justify-between">
                <span>TOTAL :</span>
                <span id="totalHarga">Rp 0</span>
            </div>
            <div class="flex justify-between items-center">
                <span>UANG :</span>
                <input id="uangInput" type="number" class="w-24 text-black text-right px-1 rounded"
                    oninput="hitungKembalian()" />
            </div>
            <div class="flex justify-between">
                <span>KEMBALIAN :</span>
                <span id="kembalian">Rp 0</span>
            </div>
        </div>

        <!-- Tombol Bawah -->
        <div class="p-3 space-y-3">
            <button onclick="pesanSekarang()"
                class="w-full bg-white text-black font-bold py-2 rounded shadow-md hover:bg-gray-200">
                PESAN
            </button>

            <div class="flex space-x-2">
                <button onclick="hapusSemua()"
                    class="w-1/2 bg-red-600 text-white font-bold py-2 rounded shadow-md hover:bg-red-700">HAPUS</button>
                <button onclick="tutupPanel()"
                    class="w-1/2 bg-gray-400 text-white font-bold py-2 rounded shadow-md hover:bg-gray-500">KEMBALI</button>
            </div>
        </div>
    </div>

    <!-- Tombol Buka Panel -->
    <button onclick="bukaPanel()"
        class="fixed bottom-6 left-6 bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-5 rounded-full shadow-xl"
        style="margin-bottom:40px; width:100px; height:70px;">
        🛒
    </button>

    <script>
    const hargaMenu = {
        'BAKSO': 15000,
        'MIE GORENG': 21000,
        'NASI GORENG': 18000,
        'ESTEHANGET': 7000
    };

    const daftarPesanan = [];

    function tambahPesanan(nama) {
        const found = daftarPesanan.find(item => item.nama === nama);
        if (found) {
            found.qty++;
        } else {
            daftarPesanan.push({
                nama: nama,
                qty: 1
            });
        }
        renderPesanan();
        bukaPanel();
    }

    function renderPesanan() {
        const list = document.getElementById('daftarPesanan');
        list.innerHTML = '';
        let total = 0;

        daftarPesanan.forEach((item, index) => {
            const subtotal = hargaMenu[item.nama] * item.qty;
            total += subtotal;
            const li = document.createElement('li');
            li.className = "flex justify-between items-center border-b border-gray-300 pb-1";
            li.innerHTML = `
          <div class="flex-1">${item.nama}</div>
          <div class="flex items-center space-x-2">
            <button class="text-red-600 font-bold px-2" onclick="kurangiQty(${index})">-</button>
            <span class="w-4 text-center">${item.qty}</span>
            <button class="text-red-600 font-bold px-2" onclick="tambahQty(${index})">+</button>
          </div>
          <div class="w-20 text-right">Rp ${subtotal.toLocaleString()}</div>
        `;
            list.appendChild(li);
        });

        document.getElementById('totalHarga').innerText = 'Rp ' + total.toLocaleString();
        hitungKembalian();
    }

    function tambahQty(index) {
        daftarPesanan[index].qty++;
        renderPesanan();
    }

    function kurangiQty(index) {
        if (daftarPesanan[index].qty > 1) {
            daftarPesanan[index].qty--;
        } else {
            daftarPesanan.splice(index, 1);
        }
        renderPesanan();
    }

    function hapusSemua() {
        daftarPesanan.length = 0;
        renderPesanan();
    }

    function hitungKembalian() {
        const total = daftarPesanan.reduce((sum, item) => sum + hargaMenu[item.nama] * item.qty, 0);
        const uang = parseInt(document.getElementById('uangInput').value) || 0;
        const kembalian = uang - total;
        document.getElementById('kembalian').innerText = 'Rp ' + (kembalian < 0 ? 0 : kembalian).toLocaleString();
    }

    function bukaPanel() {
        const panel = document.getElementById('panelPesanan');
        panel.classList.remove('-translate-x-full');
        panel.classList.add('translate-x-0');
    }

    function tutupPanel() {
        const panel = document.getElementById('panelPesanan');
        panel.classList.add('-translate-x-full');
        panel.classList.remove('translate-x-0');
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            tutupPanel();
        }
    });

    function pesanSekarang() {
        if (daftarPesanan.length === 0) {
            alert('Belum ada pesanan.');
            return;
        }

        alert('Terima kasih telah memesan!💕💕');
        // Jika setelah pesan mau reset daftar:
        daftarPesanan.length = 0;
        renderPesanan();
        document.getElementById('uangInput').value = '';
        document.getElementById('kembalian').innerText = 'Rp 0';
        tutupPanel();
    }
    </script>

    <footer
        class="container-red w-full mt-10 py-4 px-4 flex items-center justify-center fixed bottom-0 left-0 text-white">
        © 2025 Ambatublow Food & Drink
    </footer>

</body>

</html>