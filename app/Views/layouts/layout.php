<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $this->renderSection("title")  ?></title>
</head>
<body>
    <section class="py-1 bg-gray-50 h-screen">

            <?= $this->renderSection("content") ?>

            <footer class="relative pb-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Made by:
                    Acak, Dayondon, and Tapang
                    </div>
                </div>
                </div>
            </div>
            </footer>
    </section>
</body>
</html>

<!-- Made by Mark Lester T. Acak -->