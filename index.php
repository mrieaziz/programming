<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelajah Kota Indonesia</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #3498db;
            --sidebar-bg: #f8f9fa;
            --text-color: #333;
            --light-gray: #ecf0f1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f3;
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Container Utama */
        .wrapper {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* Header Modern */
        header {
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 2.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* Layout Main */
        .main-container {
            display: flex;
            min-height: 400px;
        }

        /* Sidebar Navigasi */
        nav {
            width: 250px;
            background-color: var(--sidebar-bg);
            padding: 40px 0;
            border-right: 1px solid #eee;
        }

        nav ul {
            list-style: none;
        }

        nav ul li {
            padding: 5px 0;
        }

        nav ul li a {
            display: block;
            padding: 12px 30px;
            color: #555;
            text-decoration: none;
            font-weight: 400;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        nav ul li a:hover {
            background-color: white;
            color: var(--accent-color);
            border-left: 4px solid var(--accent-color);
            padding-left: 40px;
        }

        /* Konten Artikel */
        article {
            flex: 1;
            padding: 50px;
            background-color: #fff;
        }

        article h2 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        article h2::after {
            content: '';
            display: block;
            width: 50px;
            height: 4px;
            background: var(--accent-color);
            margin-top: 5px;
            border-radius: 2px;
        }

        article p {
            margin-bottom: 20px;
            font-size: 1rem;
            color: #666;
            text-align: justify;
        }

        /* --- STYLING TAMBAHAN UNTUK FORM --- */
        .form-section {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #eee;
        }

        .form-section h3 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
            font-size: 0.9rem;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: var(--accent-color);
        }

        .btn-submit {
            background-color: var(--accent-color);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            width: 100%;
            margin-top: 10px;
            transition: background 0.3s;
        }

        .btn-submit:hover {
            background-color: #2980b9;
        }

        /* Styling Hasil Output */
        .result-box {
            margin-top: 30px;
            padding: 20px;
            background-color: #f0f8ff;
            border-left: 5px solid var(--accent-color);
            border-radius: 8px;
        }
        
        .result-box h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: rgba(255,255,255,0.7);
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }

        /* Responsif untuk Smartphone */
        @media (max-width: 768px) {
            .main-container {
                flex-direction: column;
            }
            nav {
                width: 100%;
                padding: 20px 0;
            }
            nav ul {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            article {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <header>
            <h1>Kota di Indonesia</h1>
        </header>

        <div class="main-container">
            <nav>
                <ul>
                    <li><a href="#">Jakarta</a></li>
                    <li><a href="#">Depok</a></li>
                    <li><a href="#">Surabaya</a></li>
                    <li><a href="#">Bandung</a></li>
                </ul>
            </nav>

            <article>
                <h2>Jakarta</h2>
                <p>
                    Ibu kota <strong>Jakarta</strong> merupakan suatu wilayah yang padat penduduk dan menjadi pusat pemerintahan Republik Indonesia. Sebagai kota megapolitan, Jakarta menjadi pusat bisnis, politik, dan kebudayaan.
                </p>
                <p>
                    DKI Jakarta mempunyai banyak tempat rekreasi menarik seperti <em>Kepulauan Seribu</em>, Taman Impian Jaya Ancol, Monumen Nasional (Monas), dan berbagai pusat perbelanjaan kelas dunia yang tersebar di seluruh penjuru kota.
                </p>

                <div class="form-section">
                    <h3>Input Nilai Mahasiswa</h3>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" id="nama" name="nama" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="no_hp">Nomor HP:</label>
                            <input type="number" id="no_hp" name="no_hp" required>
                        </div>

                        <div class="form-group">
                            <label for="ttl">Tanggal Lahir (TTL):</label>
                            <input type="date" id="ttl" name="ttl" required>
                        </div>

                        <div class="form-group">
                            <label for="nilai_tugas_1">Nilai Tugas 1:</label>
                            <input type="number" id="nilai_tugas_1" name="nilai_tugas_1" required>
                        </div>

                        <div class="form-group">
                            <label for="nilai_tugas_2">Nilai Tugas 2:</label>
                            <input type="number" id="nilai_tugas_2" name="nilai_tugas_2" required>
                        </div>

                        <button type="submit" name="kirim" class="btn-submit">Input</button>
                    </form>
                </div>

                <?php if (isset($_POST['kirim'])): ?>
                    <div class="result-box">
                        <h4>Hasil Input Data:</h4>
                        <p><strong>Nama:</strong> <?php echo htmlspecialchars($_POST['nama'] ?? ''); ?></p>
                        <p><strong>Nomor HP:</strong> <?php echo htmlspecialchars($_POST['no_hp'] ?? ''); ?></p>
                        <p><strong>TTL:</strong> <?php echo htmlspecialchars($_POST['ttl'] ?? ''); ?></p>
                        <p><strong>Nilai Tugas 1:</strong> <?php echo (float)($_POST['nilai_tugas_1'] ?? 0); ?></p>
                        <p><strong>Nilai Tugas 2:</strong> <?php echo (float)($_POST['nilai_tugas_2'] ?? 0); ?></p>
                        <p><strong>Total Nilai:</strong> 
                            <?php 
                                $tugas1 = (float)($_POST['nilai_tugas_1'] ?? 0);
                                $tugas2 = (float)($_POST['nilai_tugas_2'] ?? 0);
                                echo "<strong>" . ($tugas1 + $tugas2) . "</strong>"; 
                            ?>
                        </p>
                    </div>
                <?php endif; ?>

            </article>
        </div>

        <footer>
            &copy; 2026 MUHAMMAD MARIE AZIZ - UBSI CILEDUG 
        </footer>
    </div>

</body>
</html>