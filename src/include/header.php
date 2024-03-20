<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="flex items-center justify-between p-4 bg-gray-900 text-white">
        <div class="text-2xl font-bold">Website Pabo</div>
        <div class="lg:hidden">
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex space-x-4">
            <a href="./geschiedenis" class="hover:text-gray-500">Geschiedenis</a>
            <a href="./adrijkskunde" class="hover:text-gray-500" >Adrijkskunde</a>
            <a href="./natuurentechniek" class="hover:text-gray-500">Natuur & Techniek</a>
        </div>
    </div>


    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menuNav = document.querySelector('.lg\\:hidden + .hidden');

        menuToggle.addEventListener('click', () => {
            menuNav.classList.toggle('hidden');
        });
    </script>

</body>
</html>
