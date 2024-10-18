<?php

$itens = [
    [
        "href" => "#projetos",
        "texto" => "Projetos"

    ],
    [
        "href" => "#",
        "texto" => "Github"

    ],
    [
        "href" => "#",
        "texto" => "Linkedin"

    ],
    [
        "href" => "#",
        "texto" => "X"

    ]
]

?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between ">
    <!-- logo -->
    <div class="font-bold text-xl text-cyan-600">
        🐧 Meu portifólio
    </div>

    <!-- links -->
    <div>
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php foreach ($itens as $item) : ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:underline">
                        <?= $item['texto'] ?>
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>
    </div>
</header>