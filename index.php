<?

$projetos = [
    [
        "titulo" => "Projeto 1",
        "finalizado" => true,
        "descricao" => "Descrição do projeto 1",
        "stack" => ["Java", "Spring Boot", "Thymeleaf"],
        "ano" => 2021
    ],
    [
        "titulo" => "Projeto 2",
        "finalizado" => true,
        "descricao" => "Descrição do projeto 2",
        "stack" => ["Ruby", "Rails", "Bulma"],
        "ano" => 2018
    ],
    [
        "titulo" => "Projeto 3",
        "finalizado" => false,
        "descricao" => "Descrição do projeto 3",
        "stack" => ["JavaScript", "Node.js", "React"],
        "ano" => 2021
    ],
    [
        "titulo" => "Projeto 4",
        "finalizado" => false,
        "descricao" => "Descrição do projeto 4",
        "stack" => ["Java", "Spring Boot", "Thymeleaf"],
        "ano" => 2019
    ],
    [
        "titulo" => "Projeto 5",
        "finalizado" => true,
        "descricao" => "Descrição do projeto 5",
        "stack" => ["JavaScript", "Node.js", "React"],
        "ano" => 2023
    ],
    [
        "titulo" => "Projeto 6",
        "finalizado" => true,
        "descricao" => "Descrição do projeto 6",
        "stack" => ["Java", "Spring Boot", "Thymeleaf"],
        "ano" => 2020
    ],
    [
        "titulo" => "Projeto 7",
        "finalizado" => true,
        "descricao" => "Descrição do projeto 7",
        "stack" => ["C#", "ASP.NET", "Blazor"],
        "ano" => 2018
    ]
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio - Formação PHP Rocketseat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    </style>
</head>

<body class="bg-slate-900 text-gray-200">

    <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between ">
        <!-- logo -->
        <div class="font-bold text-xl text-cyan-600">
            🐧 Meu portifólio
        </div>

        <!-- links -->
        <div>
            <ul class="flex gap-x-3 font-medium text-gray-200">
                <li><a href="#projetos" class="hover:underline">Projetos</a></li>
                <li><a href="" class="hover:underline">Github</a></li>
                <li><a href="" class="hover:underline">Linkedin</a></li>
                <li><a href="" class="hover:underline">X</a></li>
            </ul>
        </div>
    </header>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 padding-y-6">
        <!-- hero -->
        <section class="flex gap-x-3">

            <!-- titulo e descricao -->
            <div class="w-2/3">
                <h1 class="text-3xl font-bold">Oi, meu nome é Julho.</h1>

                <p class="text-xl leading-6 mt-6">
                    Sou um desenvolvedor web e mobile, apaixonado por tecnologia e inovação. Atualmente estou estudando
                    PHP e Laravel na Rocketseat.
                </p>

                <ul class="flex gap-x-3 mt-3">
                    <!-- links de rede social -->
                    <li>
                        <a href="">

                            <img class="h-8 hover:animate-bounce" src="img/twitter.png" alt="Twitter Logo">

                        </a>
                    </li>
                    <li>
                        <a href="">

                            <img class="h-8 hover:animate-bounce" src="img/facebook.png" alt="Facebook Logo">

                        </a>
                    </li>
                    <li>
                        <a href="">

                            <img class="h-8 hover:animate-bounce" src="img/youtube.png" alt="Youtube Logo">

                        </a>
                    </li>
                    <li>
                        <a href="">

                            <img class="h-8 hover:animate-bounce" src="img/twitter.png" alt="Twitter Logo">

                        </a>
                    </li>

                </ul>

            </div>
            <!-- foto -->
            <div class="w-1/3 flex items-center justify-center">
                <img class="h-60 rounded-lg -mt-2 hover:animate-pulse" src="img/avatar.svg">
            </div>
        </section>

        <!-- projetos -->
        <section class=" space-y-6 py-6" id="projetos">
            <h2 class="text-2xl font-bold">Meus Projetos</h2>
            <!-- projetos -->
            <div class="bg-slate-800 rounded-lg p-3 flex items-center">
                <div class="w-1/5">foto do proejto</div>
                <div class="w-4/5 space-y-3">
                    <div class="flex gap-3  justify-between">
                        <h3 class="font-semibold text-xl">
                            ✅ Projeto 1 <span class="text-xs text-gray-400 opacity-50 italic">(Finalizado em 2024)</span>
                        </h3>
                        <div>
                            <span class="bg-sky-400 text-sky-900 rounded-md px-2 py-1 font-semibold text-xs">PHP</span>
                            <span class="bg-lime-400 text-lime-900 rounded-md px-2 py-1 font-semibold text-xs">Javascript</span>
                            <span class="bg-yellow-400 text-yellow-900 rounded-md px-2 py-1 font-semibold text-xs">Tailwind</span>
                            <span class="bg-fuchsia-400 text-fuchsia-900 rounded-md px-2 py-1 font-semibold text-xs">HTML</span>

                        </div>
                    </div>
                    <p class="leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, alias cumque excepturi architecto itaque debitis aliquid ut sequi et odio esse dolorum reiciendis deleniti dolores quod voluptate quasi saepe sunt.
                    </p>



                </div>
            </div>


        </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20 px-3 padding-y-6 ">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">

            &copy; Copyright 2024. Construído por mim mesmo :).

        </div>

    </footer>




</body>

</html>