<div class="home  h-full">
    <?php include(path("/View/Page/components/header.php"));?>
    <div class="list m-8 border-gray-700 border-2 rounded-lg p-4">
        <div class="flex items-center justify-between px-4">
            <h2>Liste des utilisateurs</h2>
            <button><a href="/new">Ajouter</a></button>
        </div>
        <table class="w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user) :?>
                <tr>
                    <td><?=$user->id?></td>
                    <td><?=$user->nom?></td>
                    <td><?=$user->prenom?></td>
                    <td><?=$user->email?></td>
                    <td>
                        <button class="edit-btn">
                            <a href="<?= '/edit/'.$user->id ?>">
                                Éditer
                            </a>
                        </button>
                        <button class="delete-btn">
                            <a href="<?= '/delete/'.$user->id ?>">
                                Supprimer
                            </a>    
                        </button>
                    </td>
                </tr>
            <?php endforeach ;?>
            </tbody>
        </table>
    </div>


</div>

    
