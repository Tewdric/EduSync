<?php
$tipo = $tipo ?? "Pública";
$imagem = $imagem ?? "../img/default.png";
$nome = $nome ?? "Instituição";
$cidade = $cidade ?? "Cidade, Estado";
$alunos = $alunos ?? "0 alunos";
$nota = $nota ?? "0.0";
$fundacao = $fundacao ?? "0000";
$avaliacoes = $avaliacoes ?? "0";
$cursos = $cursos ?? [];
$evento = $evento ?? null;

//mocado para teste
$tipo = "Pública";
$imagem = "../img/faculSp.png";
$nome = "Universidade Federal de São Paulo";
$cidade = "São Paulo, SP";
$alunos = "12.5k alunos";
$nota = "4.8";
$fundacao = "1994";
$avaliacoes = "245";

$cursos = [
    "Medicina",
    "Engenharia",
    "Direito",
    "+1 mais"
];

$evento = "Vestibular 2024 - Inscrições até 15/03";
?>

<article class="inst-card">

    <span class="chip chip--soft"><?= $tipo ?></span>

    <div class="inst-card__media">
        <img src="<?= $imagem ?>" alt="Fachada da instituição">
    </div>

    <div class="inst-card__body">

        <h3 class="inst-card__title"><?= $nome ?></h3>

        <ul class="meta">

            <li class="meta__item">
                <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
                    </svg>
                </span>
                <?= $cidade ?>
            </li>

            <li class="meta__item">
                <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z" />
                    </svg>
                </span>
                <?= $alunos ?>

                <span class="rating">
                    ★★★★☆ <?= $nota ?>
                </span>

            </li>

            <li class="meta__item">
                <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                        <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                    </svg>
                </span>
                Desde <?= $fundacao ?> (<?= $avaliacoes ?> avaliações)
            </li>

        </ul>

        <div class="tags">

            <?php foreach ($cursos as $curso): ?>
                <span class="tag"><?= $curso ?></span>
            <?php endforeach; ?>

        </div>

        <?php if ($evento): ?>
            <div class="alert">
                <strong>Próximo evento:</strong> <?= $evento ?>
            </div>
        <?php endif; ?>

        <div class="actions">
            <a class="button button--dark" href="#">Ver Detalhes</a>
            <a class="button button--outline" href="#">Avaliar</a>
        </div>

    </div>

</article>