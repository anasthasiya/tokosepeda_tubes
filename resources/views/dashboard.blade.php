<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            background-color: #212529;
            color: white;
            padding-top: 1.5rem;
        }
        .sidebar h3 {
            text-align: center;
            margin-bottom: 2rem;
            color: orange;
        }
        .sidebar a {
            color: #f8f9fa;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #343a40;
        }
        .content {
            margin-left: 240px;
            padding: 2rem;
        }
        .header {
            background-color: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
            text-align: center;
        }
        .header h1 {
            color: #333;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
        }
        .dashboard-card {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.2s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .dashboard-card h5 {
            color: #555;
            margin-bottom: 0.5rem;
        }
        .dashboard-card p {
            font-size: 1.6rem;
            font-weight: bold;
            color: orange;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Admin Panel</h3>
        <a href="#">Dashboard</a>
        <a href="#">Kelola Produk</a>
        <a href="#">Kelola Pesanan</a>
        <a href="#">Kelola Pengguna</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <div class="header">
            <h1>Selamat Datang di Dashboard Admin</h1>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-card">
                <h5>Total Produk</h5>
                <p>–</p>
            </div>
            <div class="dashboard-card">
                <h5>Pesanan Masuk</h5>
                <p>–</p>
            </div>
            <div class="dashboard-card">
                <h5>Pengguna Terdaftar</h5>
                <p>–</p>
            </div>
            <div class="dashboard-card">
                <h5>Aktivitas Hari Ini</h5>
                <p>–</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
