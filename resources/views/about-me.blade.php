<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabanal Internship Blog</title>
    @vite( 'resources/css/app.css' )

    <!-- Poppins font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">

</head>

<body class="bg-[#F0F0F0]">

    <header class="h-14 border-b-black border-2 flex justify-between items-center">
        <div class="flex justify-start items-start ml-10">
            <div>
                <a href="{{ url('/') }}" class="hover:text-[#A18167]">
                    <h1 class="font-pop font-normal text-sm">SABANAL-INTERNSHIP-BLOG</h1>
                </a>
            </div>
        </div>
        <nav class="flex justify-end mr-10">
            <ul class="flex justify-end items-center gap-7">
                <li>
                    <a href="{{ url('/') }}" class="font-pop font-normal text-sm hover:text-[#A18167]">/ HOME</a>
                </li>
                <li>
                    <a href="{{ url('about-internship') }}" class="font-pop font-normal text-sm hover:text-[#A18167]">/ ABOUT-INTERNSHIP</a>
                </li>
                <li>
                    <a href="{{ url('about-me') }}" class="font-pop font-normal text-sm text-[#A18167]">/ ABOUT-ME</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="flex flex-row m-10 mt-20">
        <div class="w-2/4 flex items-center flex-col">
            <img src="{{ asset('images/me.jpg') }}" alt="" class="h-[270px] w-[250px] ml-10 h-62 w-82 hover:rounded-3xl cursor-pointer transition-all duration-500 ease-in-out">
            <p class="font-pop mt-5 text-xl font-thin">Errol Sabanal</p>
            <p class="font-pop mt-1 text-gray-500">ersabanal@nemsu.edu.ph</p>
        </div>
        <div class="w-2/4 mb-10 flex flex-col">
            <div class="border-b-black border-b-2 ">
                <li class="font-pop font-normal text-sm mb-10">ABOUT ME</li>
                <p class="text-lg font-pop font-[300] mr-20 mb-10">I am a 21-year-old 4th-year Bachelor of Science in Computer Science (BSCS)
                    student at North Eastern Mindanao State University (NEMSU) for the Academic Year
                    2024-2025.</p>
                <p class="text-lg font-pop font-[300] mr-20 mb-10">For me, learning computer science
                    has been an interesting and fulfilling experience. Solving challenging puzzles and
                    discovering all of technology's potential provide me great delight. Writing code, or knowing algorithms are just a few of the creative and challenging tasks that computer
                    science brings to life.</p>
            </div>

            <div class="border-b-black border-b-2 mt-10">
                <li class="font-pop font-normal text-sm mb-10">HOBBIES</li>
                <p class="text-lg font-pop font-[300] mr-20 mb-10">In my free time, I am either doing these things: </p>
                <p class="text-lg font-pop font-[300] mr-20 mb-3">- Learning <a href="https://laravel.com/" target="_blank" class="text-[#A18167] hover:text-gray-400">LARAVEL</a></p>
                <p class="text-lg font-pop font-[300] mr-20 mb-3">- Playing video games like <a href="https://www.dota2.com/home" class="text-[#A18167] hover:text-gray-400">Dota 2</a> and <a href="https://supercell.com/en/games/clashofclans/" class="text-[#A18167] hover:text-gray-400">Clash of Clans</a></p>
                <p class="text-lg font-pop font-[300] mr-20 mb-3">- Testing my Typing Skill at <a href="https://monkeytype.com" class="text-[#A18167] hover:text-gray-400">Monkeytype.com</a></p>
                <p class="text-lg font-pop font-[300] mr-20 mb-10">- Watching anime</p>
            </div>

            <div class="mt-10">
                <li class="font-pop font-normal text-sm mb-10">Socials</li>
                <p class="text-lg font-pop font-[300] mr-20 mb-10"></p>

                <div class="flex flex-row justify-start items-center gap-4 mb-4">
                    <img src="{{ asset('images/facebook.png') }}" alt="" class="w-5 h-5">
                        <a href="https://www.facebook.com/xicserif.12/" target="_blank"><p class="font-pop font-medium text-gray-500 hover:text-[#A18167]"> Errol Sabanal</p></a>
                </div>
                
                <div class="flex flex-row justify-start items-center gap-4 mb-4">
                    <img src="{{ asset('images/instagram.png') }}" alt="" class="w-5 h-5">
                        <a href="https://www.instagram.com/xiccerrol/" target="_blank"><p class="font-pop font-medium text-gray-500 hover:text-[#A18167]"> @xiccerrol</p></a>
                </div>

                <div class="flex flex-row justify-start items-center gap-4 mb-4">
                    <img src="{{ asset('images/email.png') }}" alt="" class="w-5 h-5">
                        <p class="font-pop font-medium"> ersabanal@nemsu.edu.ph</p>
                </div>

                <div class="flex flex-row justify-start items-center gap-4 mb-4">
                    <img src="{{ asset('images/phone-call.png') }}" alt="" class="w-5 h-5">
                        <p class="font-pop font-medium"> 09062377530</p>
                </div>
            </div>
        </div>
    </div>

<div class="h-20 border-t-black border-t-2 ml-10 mr-10 flex justify-center items-center">
    <p class="text-gray-500 text-sm">© 2024 <a href="{{ url('/') }}" class="text-[#A18167] font-bold hover:text-gray-600">Errol Sabanal</a> All Rights Reserved.</p>
</div>

</body>
</html>