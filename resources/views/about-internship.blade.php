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
            <a href="{{ url('/') }}" class="hover:text-[#A18167]"><h1 class="font-pop font-normal text-sm">SABANAL-INTERNSHIP-BLOG</h1></a>
        </div>
    </div>
    <nav class="flex justify-end mr-10">
        <ul class="flex justify-end items-center gap-7">
            <li>
                <a href="{{ url('/') }}" class="font-pop font-normal text-sm hover:text-[#A18167]">/ HOME</a>
            </li>
            <li>
                <a href="{{ url('about-internship') }}" class="font-pop font-normal text-sm text-[#A18167]">/ ABOUT-INTERNSHIP</a>
            </li>
            <li>
                <a href="{{ url('about-me') }}" class="font-pop font-normal text-sm hover:text-[#A18167]">/ ABOUT-ME</a>
            </li>
        </ul>
    </nav>
</header>

<div class="ml-10 mr-10 mt-10 border-b-black border-b-2">
    <p class="font-pop font-normal text-[70px]">Students are given 162 hours equivalent to 20 days of</p>
    <p class="font-pop font-normal text-[70px]">ON-THE-JOB-TRAINING</p>
    <p class="font-pop font-normal text-[30px] mb-10">Here are my activities that are given with the prior days of the internship training.</p>
</div>

<div class="flex justify-center items-center ml-10 mr-10 border-b-black border-b-2">
    <div class="flex flex-col">
        <div class="flex flex-row mt-10">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-bold font-pop">Days</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-bold font-pop">Activity</h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop">Day 1</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Orientation and assigning of department.</h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 2</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Computer Diagnose, Troubleshoot and Reformat.</h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 3</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Installing Software, Reformat.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 4</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Laptop Diagnose, Troubleshoot and Reformat.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 5</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Encodes Data as per supervisor’s request.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 6</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Scanning important documents as per supervisor’s request.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 7</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Encode Important data as per supervisor’s request.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 8</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Continue to encode important documents as per supervisor’s request.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 9</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Diagnose Computer.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 10</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Edit, Encode Data, and Print Documents.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 11</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Packing of relief foods for the Police Community Relations Month Celebration.  </h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 12</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Assisting for the 29th Police Community Relations Month Celebration 2024 at Purok Santan, Brgy. Quezon.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 13</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Scanning documents and encode data as per supervisor’s request.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 14</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Troubleshoot system units.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 15</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Clean system units.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 16</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Continue to clean system units.</h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 17</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Edit posters as supervisors request.  </h1>
                </div>
            </div>
        </div>
        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 18</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Scan important documents as per supervisor’s request.  </h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Day 19</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center border-b-black border-b-2">
                    <h1 class="pb-5 font-pop text-center">Troubleshoot computer software and performed other related tasks as supervisors request.</h1>
                </div>
            </div>
        </div>

        <div class="flex flex-row">
            <div class="w-[400px] flex justify-center items-center border-r-black border-r-2 mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center">
                    <h1 class="pb-5 font-pop text-center">Day 20</h1>
                </div>
            </div>
            <div class="w-[400px] flex justify-center items-center mb-10">
                <div class="w-[300px] h-28 flex justify-center items-center">
                    <h1 class="pb-5 font-pop text-center">Assist and print needed documents as supervisors request.</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ml-10 mr-10 mt-10 mb-5">
    <div class="flex flex-row mb-10">
        <div class="w-2/4 h-[400px] border-r-black border-r-2">
            <li class="font-pop font-normal text-sm mb-10">CERTIFICATE OF COMPLETION</li>
            <p class="text-lg font-pop font-[300] mr-20 mb-10">After fulfilling the tasks 
                assigned to me with dedication and determination, I am filled with a deep 
                sense of accomplishment and pride upon receiving my certificate of completion. 
                Each task and responsibility handed to me during my internship was not just 
                a challenge, but an opportunity to apply and enhance my skills in a real-world setting.
                It represents not just the completion of my internship, but the growth, learning, and professional development that came with it.</p>
        </div>
        <div class="w-2/4 h-[400px] flex justify-center">
            <img src="{{ asset('images/cert-pic.png') }}" alt="" class="ml-10 h-62 w-82 hover:rounded-3xl cursor-pointer transition-all duration-500 ease-in-out">
        </div>
    </div>
</div>

<div class="h-20 border-t-black border-t-2 ml-10 mr-10 flex justify-center items-center">
    <p class="text-gray-500 text-sm">© 2024 <a href="{{ url('/') }}" class="text-[#A18167] font-bold hover:text-gray-600">Errol Sabanal</a> All Rights Reserved.</p>
</div>

</body>
</html>