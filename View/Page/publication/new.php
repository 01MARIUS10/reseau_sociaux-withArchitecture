<div class="home  h-full">
    <?php include(path("/View/Page/components/header.php"));?>
    <div class="flex justify-center ">
        <form 
            class="py-10"
            action="/publication/register" method="POST"
        >
            <div class="mb-2">
                <label for="titre">Titre de la publication:</label>
                <input type="text" id="titre" name="titre" required class="text-black">
            </div>
    
            <input type="number" id="id" name="id" hidden value="<?= ($_SESSION['user']->id); ?>" class="text-black">
            
            <div class="mb-2 flex items-start">
                <label for="description">Description:</label>
                <textarea
                class="text-black"
                id="description" name="description" rows="5" cols="40" required></textarea>
            </div>
    
            <div class="flex justify-center">
                <button 
                    class="transition ease-in-out delay-150 bg-blue-500  p-2 rounded hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"
                    type="submit">
                    Ajouter la publication
                </button>
            </div>
        </form>
    </div>
</div>