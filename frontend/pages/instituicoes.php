<!DOCTYPE html>
<html lang="pt-br">
<?php
include '../component/head.php'
?>

<body>

  <?php
  include '../component/header.php'
  ?>

  <section id="instituicoes" class="section section--alt">
    <div class="container">
      <header class="section-head">
        <h2 class="section-title">Instituições em Destaque</h2>
        <p class="section-subtitle">
          Descubra as melhores instituições de ensino, compare avaliações e encontre
          informações detalhadas sobre cursos e programas
        </p>
      </header>

      <div class="card-grid card-grid--3">
        <?php

        for ($i = 0; $i < 4; $i++) {
          include '../component/card.php';
        }
        ?>
        <!-- <article class="inst-card">
          <span class="chip chip--soft">Pública</span>
          <div class="inst-card__media">
            <img src="../img/faculSp.png" alt="Fachada de universidade" />
          </div>
          <div class="inst-card__body">
            <h3 class="inst-card__title">Universidade Federal de São Paulo</h3>

            <ul class="meta">
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
                  </svg>
                </span>
                São Paulo, SP
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z" />
                  </svg>
                </span>
                12.5k alunos
                <span class="rating" aria-label="4.8 de 5">
                  <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star star--half">☆</span>
                  4.8
                </span>
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                  </svg>
                </span>
                Desde 1994 (245 avaliações)
              </li>
            </ul>

            <div class="tags">
              <span class="tag">Medicina</span>
              <span class="tag">Engenharia</span>
              <span class="tag">Direito</span>
              <span class="tag tag--muted">+1 mais</span>
            </div>

            <div class="alert">
              <strong>Próximo evento:</strong> Vestibular 2024 - Inscrições até 15/03
            </div>

            <div class="actions">
              <a class="button button--dark" href="#">Ver Detalhes</a>
              <a class="button button--outline" href="#">Avaliar</a>
            </div>
          </div>
        </article>

        <article class="inst-card">
          <span class="chip chip--soft">Privada</span>
          <div class="inst-card__media">
            <img src="../img/faculRio.png" alt="Auditório universitário" />
          </div>
          <div class="inst-card__body">
            <h3 class="inst-card__title">PUC-Rio</h3>

            <ul class="meta">
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
                  </svg>
                </span>
                Rio de Janeiro, RJ
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z" />
                  </svg>
                </span>
                8.2k alunos
                <span class="rating" aria-label="4.6 de 5">
                  <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star star--half">☆</span>
                  4.6
                </span>
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                  </svg>
                </span>
                Desde 1941 (189 avaliações)
              </li>
            </ul>

            <div class="tags">
              <span class="tag">Design</span>
              <span class="tag">Psicologia</span>
              <span class="tag">Economia</span>
              <span class="tag tag--muted">+1 mais</span>
            </div>

            <div class="alert">
              <strong>Próximo evento:</strong> Feira de Profissões — 20/03
            </div>

            <div class="actions">
              <a class="button button--dark" href="#">Ver Detalhes</a>
              <a class="button button--outline" href="#">Avaliar</a>
            </div>
          </div>
        </article>

        <article class="inst-card">
          <span class="chip chip--soft">Pública</span>
          <div class="inst-card__media">
            <img src="../img/woman.png" alt="Estudante com diploma" />
          </div>
          <div class="inst-card__body">
            <h3 class="inst-card__title">UNICAMP</h3>

            <ul class="meta">
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z" />
                  </svg>
                </span>
                Campinas, SP
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.33 0-8 2.17-8 5v1h16v-1c0-2.83-3.67-5-8-5Z" />
                  </svg>
                </span>
                15.3k alunos
                <span class="rating" aria-label="4.9 de 5">
                  <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
                  4.9
                </span>
              </li>
              <li class="meta__item">
                <span class="icon">
                  <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true">
                    <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                  </svg>
                </span>
                Desde 1966 (312 avaliações)
              </li>
            </ul>

            <div class="tags">
              <span class="tag">Tecnologia</span>
              <span class="tag">Biologia</span>
              <span class="tag">Matemática</span>
              <span class="tag tag--muted">+1 mais</span>
            </div>

            <div class="alert">
              <strong>Próximo evento:</strong> Semana da Pesquisa — 28/03
            </div>

            <div class="actions">
              <a class="button button--dark" href="#">Ver Detalhes</a>
              <a class="button button--outline" href="#">Avaliar</a>
            </div>
          </div>
        </article> -->
      </div>

    </div>
  </section>

  <?php
  include '../component/footer.php'
  ?>
  <button id="accessibility-icon" aria-label="Abrir menu de acessibilidade">
    <i class="fa-solid fa-universal-access"></i>
  </button>

  <!-- Painel de acessibilidade -->
  <div id="accessibility-panel" aria-label="Opções de acessibilidade">
    <h2 class="sr-only">Menu de acessibilidade</h2>
    <button id="contrast-btn">Alternar alto contraste</button>
    <button id="spacing-btn">Alternar espaçamento de texto</button>
    <button id="reading-btn">Ativar/Desativar modo leitura</button>
  </div>

  <script>
    const icon = document.getElementById('accessibility-icon');
    const panel = document.getElementById('accessibility-panel');

    icon.addEventListener('click', () => {
      panel.classList.toggle('active');
    });

    // Funções dos botões
    document.getElementById('contrast-btn').addEventListener('click', () => {
      document.body.classList.toggle('high-contrast');
    });

    document.getElementById('spacing-btn').addEventListener('click', () => {
      document.body.classList.toggle('wide-spacing');
    });

    document.getElementById('reading-btn').addEventListener('click', () => {
      document.body.classList.toggle('reading-mode');
    });
  </script>
  <script src="js/auth-ui.js" defer></script>
</body>

</html>