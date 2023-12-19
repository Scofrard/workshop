<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un article</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<!-- page créé par Julien / Front-admin -->

<body>

    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded shadow-md">
            <h1 class="text-4xl font-bold mb-4">Créer un article</h1>

            <form action="" method="POST">

                <!-- PROPOSITION A : CHARGER UN IMAGE VIA UN UPLOAD -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image de l'article</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="image" type="file" name="image">
                </div>

                <!-- PROPOSITION B : CHARGER UN IMAGE VIA L'URL -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image de l'article</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="image" type="text" name="image" placeholder="URL de l'image">
                </div>

                <!-- Titre de l'article -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">Titre de l'article</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="titre" type="text" placeholder="Titre de l'article" name="titre">
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description</label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" id="description" placeholder="Description de l'article" name="description"></textarea>
                </div>

                <!-- Date de publication -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="date">Date de publication</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3" id="date" type="date" name="date">
                </div>


                <!-- Boutons créer & annuler -->
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded" type="submit">Créer</button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-6 rounded" type="reset">Annuler</button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>