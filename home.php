<?php
    include_once 'common/isAuthenticated.php';
    include_once 'classes/autoload.php';
    $pageTitle = 'Home';
//    $name = 'aymen; Drop table user';


    $userRepositroy = new UserRepository();
//    $userRepositroy->insert([
//        "name" => 'anas',
//        "username" => 'anas',
//        "email" => 'anas@gmail.com'
//    ]);
    $users = $userRepositroy->findAll();

    include_once 'common/header.php' ?>
</head>
<body>

    <div class="alert alert-danger">
        Bienvenu chez vous
    </div>

    <ol class="list-group">
        <?php
            foreach($users as $user) :
        ?>
        <li class="list-group-item">
            <?= $user->id.' - '.$user->username.' - '.$user->name.' - '.$user->email?>
            <a href="deleteUser.php?id=<?=$user->id ?>">X</a>
        </li>
            <?php endforeach ?>
    </ol>
<?php
include_once 'common/footer.php';
?>