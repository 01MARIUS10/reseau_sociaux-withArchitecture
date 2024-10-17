<header class="flex justify-between px-8 border-b-4 border-gray-700">
    <div class="flex items-center">
        <img src="<?= img('/logo.png')?>" alt="" width=100 height="80">
        <h2>Hello Mr/Mme <?= $_SESSION['user']->nom. " " .$_SESSION['user']->prenom?>
        <?php if(UserService::isAdmin()): ?>
            <span class="text-red-500">
                (Admin)
            </span>
        <?php endif;?>
        </h2>
    </div>

    <div class="flex">
        <?php if(UserService::isAdmin()): ?>
            <button class="mx-2 hover:text-blue-300"><a href="/home">Publications</a></button>
            <button class="mx-2 hover:text-blue-300"><a href="/users">Users</a></button>
        <?php endif;?>
        <button class="ml-16 hover:text-red-400"><a href="/deconnection">deconnection</a></button>
    </div>


</header>