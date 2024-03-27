<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="flex items-start justify-start p-4 text-white">
    <div id="nav-logo" class="text-2xl font-bold w-11/12">Website Pabo</div>
    <div class="">
        <button id="menu-toggle" class="text-white focus:outline-none">
            <span id="menu-toggle-label">Menu</span>
        </button>
    </div>
    <div class="hidden flex flex-col justify-right items-end" id="menu-links">
        <a href="./geschiedenis" class="block p-2 hover:text-gray-500">Geschiedenis</a>
        <a href="./adrijkskunde" class="block p-2 hover:text-gray-500">Adrijkskunde</a>
        <a href="./natuurentechniek" class="block p-2 hover:text-gray-500">Natuur & Techniek</a>
    </div>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menuLinks = document.getElementById('menu-links');
    const navLogo = document.getElementById('nav-logo');
    const menuToggleLabel = document.getElementById('menu-toggle-label');

    let menuOpen = false;

    menuToggle.addEventListener('click', () => {
        menuOpen = !menuOpen;
        menuLinks.classList.toggle('hidden');
        navLogo.classList.toggle('hidden');
        
        if (menuOpen) {
            menuToggleLabel.textContent = "Close";
            menuToggle.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>`;
        } else {
            menuToggleLabel.textContent = "Menu";
            menuToggle.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>`;
        }
    });
</script>

</body>
</html>
