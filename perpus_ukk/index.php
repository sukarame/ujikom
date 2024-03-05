<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Digital Library</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-r from-blue-500 via-blue-400 to-blue-300">

    <div class="container mx-auto flex justify-center items-center h-screen">

        <div class="max-w-md w-full">
            <!-- Nested Row within Card Body -->
            <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-lg">
                <div class="text-center mb-4">
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Perpustakaan Digital</h1>
                </div>
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-info'>Username dan Password tidak sesuai!</div>";
                    }
                }
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "info_login") {
                        echo "<div class='alert alert-warning'>Maaf Anda belum Login!</div>";
                    }
                }
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "info_logout") {
                        echo "<div class='alert alert-success'>Anda Telah Berhasil Logout!</div>";
                    }
                }
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "info_registrasi") {
                        echo "<div class='alert alert-success'>Anda Telah Berhasil Registrasi Silahkan Login!</div>";
                    }
                }
                ?>
                <form action="cek_login.php" method="post" class="user">
                    <div class="mb-4">
                        <input type="text" name="username" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" placeholder="Username...">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" placeholder="Password">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Login</button>
                    </div>
                </form>
                <hr class="my-4">
                <div class="text-center">
                    <a class="text-blue-500 hover:underline" href="register.php">Create an Account!</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
