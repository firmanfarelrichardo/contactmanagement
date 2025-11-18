<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: views/auth/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Contact Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <nav class="bg-white shadow-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-xl font-bold text-blue-600">PHPContact
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-slate-600">Halo, <b><?= htmlspecialchars($_SESSION['name']); ?></b></span>
                    <a href="actions/auth/logout.php" class="text-sm font-medium text-red-600 hover:text-red-800 transition">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard Kontak</h2>
            <p class="text-gray-600 mb-6">Selamat datang di sistem manajemen kontak Anda.</p>
            
            <div class="flex gap-4">
                <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                    + Tambah Kontak Baru
                </a>
            </div>

            <div class="mt-8 p-8 text-center bg-slate-50 rounded-lg border border-dashed border-slate-300">
                <p class="text-slate-500">Belum ada kontak yang ditampilkan. (Fitur CRUD akan segera dibuat)</p>
            </div>
        </div>
    </main>

</body>
</html>