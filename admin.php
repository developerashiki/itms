<?php
$conn = mysqli_connect('localhost', 'root', '', 'dbms');
?>

<!DOCTYPE HTML>
<html class="no-js" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IESDZ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png" />

    <!-- Stylesheet -->
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="all" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css" media="all" />
    <!-- Fontawesome CSS -->
    <!-- <link rel="stylesheet" href="assets/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- normalize -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- image -->
    <link href="assets/css/camera.css" rel="stylesheet">
    <!-- news ticker -->
    <link rel="stylesheet" href="assets/css/eocjs-newsticker.css" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-12">
                <h1>Client Message</h1>
                <hr>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM students";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['subject'] ?></td>
                                <td><?php echo $row['message'] ?></td>
                                <td>
                                    <!-- <a class="btn btn-info" href="show.php?id=<?php echo $row['id']; ?>">View</a>
                                    <a class="btn btn-warning" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> -->
                                    <a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Js Files -->
    <!-- modernizr -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap Popper -->
    <script src="assets/js/popper.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- image -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/camera.min.js"></script>
    <!-- News Ticker -->
    <script src="assets/js/eocjs-newsticker.js"></script>
    <script src="assets/js/newsticker.js"></script>
    <!-- notice board -->
    <script src="assets/js/jquery.easy-ticker.min.js"></script>
    <script src="assets/js/noticeboard.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Custom Scripts -->
    <script src="assets/js/main.js"></script>
</body>

</html>