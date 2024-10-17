<div class="home min-h-screen h-full">
    <?php include(path("/View/Page/components/header.php"));?>
    <div class="flex items-center justify-end px-10 py-4">
        <!-- <h2>Liste des utilisateurs</h2> -->
        <!-- <button class="border border-red-200 p-2 rounded"><a href="/new">Ajouter un nouveau publication</a></button> -->
        <button class="transition ease-in-out delay-150 bg-blue-500  p-2 rounded hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><a href="/publication/new">Ajouter un nouveau publication</a></button>
    </div>
    <section class="flex w-full flex-wrap">
        <?php foreach($publications as $pub) : ?>
            <article 
                class="list mx-8 mt-2 mb-8 border-gray-700 border-2 rounded-lg p-4"    
            >
                <h4>
                    <span class="text-gray-600">Titre :</span> 
                        <?= $pub->titre; ?>
                </h4>
                <p>
                    <span class="text-gray-600">Publiee par :</span> 
                    <strong><?= $pub->auteur_nom; ?>   </strong>
                    <strong><?= $pub->auteur_prenom; ?></strong>
                </p>
                <p>
                    <span class="text-gray-600">Contenu:  :</span> 
                    <?= $pub->description; ?>
                </p>
                <div 
                    class="flex mt-5 items-center justify-between"
                >
                    <span class="reaction-btn px-2 py-1 border border-1 border-white-200 :hover relative">
                        reactions (<?= $pub->count_reactions; ?>)
                        <div class="reaction-content absolute flex justift-between top-12 left-0 w-40 bg-transparent shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <?php foreach($reactions as $r):?>
                            <img src="<?= $r->image ?>" width="25" height="25" alt="<?= $r->label ?>">
                            <?php endforeach; ?>
                        </div>
                    </span>
                    <span class="px-2 py-1 border border-1 border-white-200 :hover" onclick="getCommentFor(<?= $pub->publication_id;?>)">commentaires (<?= $pub->count_comments; ?>) </span>
                </div>
                <div id="commentaire<?= $pub->publication_id ;?>" class="pt-2"></div>
                <div class="newComs">
                    <form action="#" class="flex">
                        <div>
                            <input type="text" name="newComs">
                            <input type="number" name="idPub" hidden value="<?= $pub->publication_id ;?>">
                        </div>
                        <button type="submit">Envoyer</button>
                    </form>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

</div>

<script>
    let selectReact=''; 
    let boolInReact=false;   
    let rs = document.querySelectorAll('.reaction-btn')
    rs.forEach((e)=>{
        e.addEventListener('mouseover', () => {
            let reactionContent = e.querySelector('.reaction-content');
            reactionContent.style.opacity = '1';
            let ics = e.querySelectorAll('.reaction-content img');
            ics.forEach((i)=>{
                i.addEventListener('mouseover', () => {
                    selectReact=i; 
                    boolInReact=true;   
                })
                i.addEventListener('mouseout', () => {
                    boolInReact=false;   
                })
            })
        });
        e.addEventListener('mouseleave', () => {
            let reactionContent = e.querySelector('.reaction-content');
            reactionContent.style.opacity = '0'; 
            console.log('mouseleave')
            setTimeout(() => {
                if (!boolInReact) {
                    console.log('===',selectReact);
                }
                selectReact=''
            }, 1000); 
        });
    })
</script>
<script type="module" src="<?= script("main.js");?>"></script>


    
