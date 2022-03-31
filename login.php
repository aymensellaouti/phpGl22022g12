<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:home.php');
}
$pageTitle = 'Login';
include_once 'common/header.php' ?>
</head>
<body>
<form action="processLogin.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
<!--        <div class="form-group">-->
<!--            <label for="exampleInputPassword1">Image</label>-->
            <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="Password">
<!--        </div>-->
<!--                <div class="form-check">-->
<!--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                </div>-->
        <?php
            if (isset($_SESSION['errorMessage'])) {
        ?>
        <div class="alert alert-danger">
            <?php
                echo $_SESSION['errorMessage'];
                unset($_SESSION['errorMessage']);
            ?>
        </div>
        <?php
            }
        ?>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
<?php
    include_once 'common/footer.php';
?>