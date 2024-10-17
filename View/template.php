<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= style("tailwind-all.css")?>>
    <link rel="stylesheet" href=<?= style("tailwind-utilities.css")?>>
    <link rel="stylesheet" href=<?= style("tailwind-components.css")?>>

    <link rel="stylesheet" href=<?= style("style.css")?>>

    <title><?= $title?></title>
</head>
<body>
    <div class="content relative w-screen min-h-screen h-full bg-[#0c111d]">
        <?= $content?>
        <div id="error" class="absolute border-4 border-red-400 bg-red-200 rounded hidden">
            <h3 class="text-center p-1 text-xl">Erreur</h3>
            <p class="errorMssg p-2 border-t border-red-600">Erreur 404</p>
        </div>
        <div id="toast" class="absolute bg-green-400 rounded flex justify-center items-center hidden">
            Success
        </div>
    </div>
</body>
</html>