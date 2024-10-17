

<div class="font-sans antialiased bg-grey-lightest flex h-screen items-center">
  <div class="w-full bg-grey-lightest" style="">
    <div class="container mx-auto py-8">
        <div class="w-5/6 lg:w-1/2 mx-auto bg-white rounded shadow">
            <form action="/register" method="POST">
                <div class="py-4 px-8 text-black text-xl border-b border-grey-lighter">Inscrivez-vous pour un compte gratuit</div>
                <div class="py-4 px-8">
                    <div class="flex mb-4">
                        <div class="w-1/2 mr-1">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="nom">Nom</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="nom" name="nom" type="text" placeholder="Votre nom">
                        </div>
                        <div class="w-1/2 ml-1">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="prenom">Prenom</label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="prenom" type="text" placeholder="Votre prenom">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Addresse email</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="Votre addresse email">
                    </div>
                    <div class="mb-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Password</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" type="password" placeholder="Mot de password">
                        <p class="text-grey text-xs mt-1">au minimum 6 characteres</p>
                    </div>
                    <div class="flex items-center justify-between mt-8">
                        <button class="bg-indigo-600 hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="submit">
                            Enregistrer
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <p class="text-center my-4">
            <a href="/login" class="text-grey-dark text-sm no-underline hover:text-grey-darker">J'ai deja un compte</a>
        </p>
    </div>
  </div>
</div>