<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi Disini!</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-to-r from-blue-500 via-blue-400 to-blue-300">

    <div class="container mx-auto">

        <div class="flex flex-col md:flex-row justify-between items-center shadow-lg my-5 md:col-lg-10 mx-auto">
            <div class="md:w-5/12 p-8 hidden md:block">
                <img src="assets/img/register.png" alt="">
            </div>
            <div class="md:w-7/12 p-8 bg-white bg-opacity-80 rounded-lg">
                <div class="text-center mb-4">
                    <h1 class="text-gray-900 text-4xl font-bold mb-4">Registrasi Disini!</h1>
                </div>
                <form action="proses_register.php" method="post" class="user">
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" name="nama_lengkap" id="Nama_Lengkap" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-4 flex flex-col md:flex-row">
                        <input type="text" class="w-full md:w-1/2 p-3 mb-2 md:mb-0 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" name="username" id="Username" placeholder="Username" required>
                        <input type="password" class="w-full md:w-1/2 p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" name="password" id="Password" placeholder="Password" required>
                    </div>
                    <div class="mb-4">
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-md text-gray-800 placeholder-gray-500 focus:outline-none focus:ring focus:border-blue-300" name="alamat" id="Alamat" placeholder="Alamat" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 text-white p-3 rounded-md hover:bg-blue-600 transition duration-300 ease-in-out">Register</button>
                </form>
                <hr class="my-4">
                <div class="text-center">
                    <a class="text-blue-500 hover:underline" href="index.php">Already have an account? Login!</a>
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
