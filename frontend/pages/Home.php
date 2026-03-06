<!doctype html>
<html lang="pt-BR">
<?php
include '../component/head.php'
?>

<body>
  <a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>
  <!-- Cabeçalho -->

  <?php
  include '../component/header.php'
  ?>

  <main id="main-content" tabindex="-1">
    <!-- Hero -->
    <section class="hero">
      <div class="container hero__inner">
        <h1 class="hero__title">Encontre sua instituição <br /> de ensino ideal</h1>
        <p class="hero__subtitle">
          Compare instituições, descubra cursos, acompanhe vestibulares e participe <br />
          de eventos educacionais
        </p>
        <div class="hero__actions">
          <a class="button button--contrast" href="#instituicoes">
            <img class="btn-icon" src="../img/IconCartola.png" alt="" />
            <span>Explorar Instituições</span>
          </a>
          <a class="button button--contrast" href="#eventos">Ver Eventos</a>
        </div>
      </div>
    </section>

    <!-- Métricas -->
    <section class="stats" aria-label="Métricas">
      <div class="container stats__grid">
        <div class="stat">
          <span class="stat__icon stat__icon--blue">
            <img class="stat__img" src="../img/IconBlue.png" alt="Ícone instituições" />
          </span>
          <div class="stat__value">500+</div>
          <div class="stat__label">Instituições</div>
        </div>
        <div class="stat">
          <span class="stat__icon stat__icon--green">
            <img class="stat__img" src="../img/IconGreen.png" alt="Ícone cursos" />
          </span>
          <div class="stat__value">2.5k+</div>
          <div class="stat__label">Cursos</div>
        </div>
        <div class="stat">
          <span class="stat__icon stat__icon--purple">
            <img class="stat__img" src="../img/IconPurple.png" alt="Ícone eventos" />
          </span>
          <div class="stat__value">150+</div>
          <div class="stat__label">Eventos/mês</div>
        </div>
        <div class="stat">
          <span class="stat__icon stat__icon--orange">
            <img class="stat__img" src="../img/IconOrange.png" alt="Ícone posts" />
          </span>
          <div class="stat__value">1.2k+</div>
          <div class="stat__label">Posts no Feed</div>
        </div>
      </div>
    </section>

    <!-- Instituições -->
    <section id="instituicoes" class="section section--alt">
      <div class="container">
        <header class="section-head">x
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

        <div class="section-cta">
          <a class="button button--ghostarrow" href="#instituicoes.html">Ver todas as instituições</a>
        </div>
      </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="section">
      <div class="container">
        <header class="section-head">
          <h2 class="section-title">Próximos Eventos</h2>
          <p class="section-subtitle">
            Não perca oportunidades! Participe de feiras, workshops, palestras e processos seletivos
          </p>
        </header>

        <div class="card-grid card-grid--3">
          <article class="event-card">
            <div class="event-card__media">
              <img src="../img/womanTwo.png" alt="Auditório com palestra" />
              <div class="badge-row">
                <span class="chip chip--lavender">Feira</span>
                <span class="chip chip--green">Gratuito</span>
              </div>
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Feira de Profissões 2024</h3>
              <p class="event-card__org">Universidade Federal de São Paulo</p>

              <ul class="meta meta--grid">
                <li class="meta__item">
                  <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                    </svg>
                  </span>
                  20 de Março
                </li>
                <li class="meta__item">
                  <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-1 2h2v3h3v2h-5V9Z" />
                    </svg>
                  </span>
                  14:00 - 18:00
                </li>
                <li class="meta__item">
                  <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                    </svg>
                  </span>
                  Campus Vila Clementino
                </li>
                <li class="meta__item">
                  <span class="icon">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M16 11a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-4 5c4.33 0 8 2.17 8 5H4c0-2.83 3.67-5 8-5Z" />
                    </svg>
                  </span>
                  1250 interessados
                </li>
              </ul>

              <div class="actions">
                <a class="button button--dark" href="#">Participar</a>
                <a class="button button--outline" href="#">Mais Info</a>
              </div>
            </div>
          </article>

          <article class="event-card">
            <div class="event-card__media">
              <img src="../img/woman.png" alt="Estudante sorrindo" />
              <div class="badge-row">
                <span class="chip chip--blue">Workshop</span>
                <span class="chip chip--green">Gratuito</span>
                <span class="chip chip--teal">Online</span>
              </div>
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Workshop: Como se preparar para o ENEM</h3>
              <p class="event-card__org">PUC-Rio</p>

              <ul class="meta meta--grid">
                <li class="meta__item">
                  <span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                    </svg></span>
                  25 de Março
                </li>
                <li class="meta__item">
                  <span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-1 2h2v3h3v2h-5V9Z" />
                    </svg></span>
                  19:00 - 21:00
                </li>
                <li class="meta__item">
                  <span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                    </svg></span>
                  Online
                </li>
                <li class="meta__item">
                  <span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M16 11a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-4 5c4.33 0 8 2.17 8 5H4c0-2.83 3.67-5 8-5Z" />
                    </svg></span>
                  890 interessados
                </li>
              </ul>

              <div class="actions">
                <a class="button button--dark" href="#">Participar</a>
                <a class="button button--outline" href="#">Mais Info</a>
              </div>
            </div>
          </article>

          <article class="event-card">
            <div class="event-card__media">
              <img src="../img/faculRio.png" alt="Grande auditório" />
              <div class="badge-row">
                <span class="chip chip--indigo">Palestra</span>
                <span class="chip chip--green">Gratuito</span>
              </div>
            </div>
            <div class="event-card__body">
              <h3 class="event-card__title">Palestra: Carreiras em Tecnologia</h3>
              <p class="event-card__org">UNICAMP</p>

              <ul class="meta meta--grid">
                <li class="meta__item"><span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M7 2h2v2h6V2h2v2h4v18H3V4h4V2Zm14 8H3v10h18V10Z" />
                    </svg></span>30 de Março</li>
                <li class="meta__item"><span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm-1 2h2v3h3v2h-5V9Z" />
                    </svg></span>15:00 - 17:00</li>
                <li class="meta__item"><span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                    </svg></span>Auditório Central</li>
                <li class="meta__item"><span class="icon"><svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                      <path d="M16 11a4 4 0 1 1-8 0 4 4 0 0 1 8 0Zm-4 5c4.33 0 8 2.17 8 5H4c0-2.83 3.67-5 8-5Z" />
                    </svg></span>450 interessados</li>
              </ul>

              <div class="actions">
                <a class="button button--dark" href="#">Participar</a>
                <a class="button button--outline" href="#">Mais Info</a>
              </div>
            </div>
          </article>
        </div>

        <div class="section-cta">
          <a class="button button--ghostarrow" href="#">Ver todos os eventos</a>
        </div>
      </div>
    </section>

    <!-- Notícias -->
    <section id="noticias" class="section section--alt">
      <div class="container">
        <header class="section-head">
          <h2 class="section-title">Últimas Notícias</h2>
          <p class="section-subtitle">
            Mantenha-se atualizado com as novidades do mundo educacional
          </p>
        </header>

        <div class="card-grid card-grid--3">
          <article class="news-card">
            <div class="news-card__media">
              <img src="../img/womanTwo.png" alt="Estudante com caderno" />
              <span class="chip chip--rose">Vestibular</span>
            </div>
            <div class="news-card__body">
              <h3 class="news-card__title">ENEM 2024: Datas das provas são divulgadas pelo INEP</h3>
              <p class="news-card__excerpt">
                Instituto Nacional de Estudos e Pesquisas Educacionais anuncia
                cronograma completo do exame nacional.
              </p>
              <ul class="meta meta--spread">
                <li class="meta__item">15 Mar</li>
                <li class="meta__item">3 min de leitura</li>
                <li class="meta__item">Por Redação EduSync</li>
              </ul>
              <a class="link-arrow" href="#">Ler mais</a>
            </div>
          </article>

          <article class="news-card">
            <div class="news-card__media">
              <img src="../img/faculSp.png" alt="Prédio moderno" />
              <span class="chip chip--lavender">Tecnologia</span>
            </div>
            <div class="news-card__body">
              <h3 class="news-card__title">Novas tecnologias transformam o ensino superior brasileiro</h3>
              <p class="news-card__excerpt">
                Universidades investem em IA e realidade virtual para modernizar
                metodologias de ensino.
              </p>
              <ul class="meta meta--spread">
                <li class="meta__item">12 Mar</li>
                <li class="meta__item">5 min de leitura</li>
                <li class="meta__item">Por Dr. Maria Silva</li>
              </ul>
              <a class="link-arrow" href="#">Ler mais</a>
            </div>
          </article>

          <article class="news-card">
            <div class="news-card__media">
              <img src="../img/faculRio.png" alt="Auditório universitário" />
              <span class="chip chip--mint">Carreira</span>
            </div>
            <div class="news-card__body">
              <h3 class="news-card__title">Mercado de trabalho: profissões em alta para 2024</h3>
              <p class="news-card__excerpt">
                Estudo revela quais áreas terão maior demanda por profissionais nos próximos anos.
              </p>
              <ul class="meta meta--spread">
                <li class="meta__item">10 Mar</li>
                <li class="meta__item">4 min de leitura</li>
                <li class="meta__item">Por Carlos Mendes</li>
              </ul>
              <a class="link-arrow" href="#">Ler mais</a>
            </div>
          </article>
        </div>

        <div class="section-cta">
          <a class="button button--ghostarrow" href="#">Ver todas as notícias</a>
        </div>
      </div>
    </section>
  </main>

  <?php
  include '../component/footer.php'
  ?>

  <!-- Modal: Escolher tipo de login -->
  <div id="login-choice" class="modal-overlay" aria-hidden="true">
    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="login-choice-title">
      <button class="modal-close" type="button" aria-label="Fechar">×</button>
      <h3 id="login-choice-title" class="modal-title">Entrar como</h3>
      <p class="modal-subtitle">Escolha o tipo de conta para continuar com o login.</p>
      <div class="role-grid">
        <a class="role-card" href="login.html?role=aluno">
          <div class="role-emoji" aria-hidden="true">🎓</div>
          <div class="role-title">Aluno</div>
          <div class="role-desc">Acesse seu painel, cursos e eventos</div>
        </a>
        <a class="role-card" href="login.html?role=professor">
          <div class="role-emoji" aria-hidden="true">👨‍🏫</div>
          <div class="role-title">Professor</div>
          <div class="role-desc">Gerencie turmas, eventos e publicações</div>
        </a>
      </div>
    </div>
  </div>

  <script src="js/auth-ui.js" defer></script>

  <!-- Newsletter -->
  <section class="newsletter">
    <div class="container newsletter__inner">
      <div class="newsletter__media" aria-hidden="true">
        <img src="../img/iconEmail.png" alt="" />
      </div>
      <div class="newsletter__content">
        <h3 class="newsletter__title">Receba novidades educacionais</h3>
        <p class="newsletter__subtitle">Cadastre-se para receber informações sobre vestibulares, eventos e oportunidades educacionais diretamente no seu email e WhatsApp.</p>

        <form id="newsletter-form" class="newsletter__form" action="#" method="post">
          <div class="field">
            <label for="nl-email" class="sr-only">Seu e-mail</label>
            <input id="nl-email" type="email" placeholder="Seu e-mail" required />
          </div>
          <div class="field">
            <label for="nl-phone" class="sr-only">Seu telefone</label>
            <input id="nl-phone" type="tel" placeholder="Seu telefone" required />
          </div>
        </form>

        <button type="submit" class="button button--contrast newsletter__btn" form="newsletter-form">Quero receber novidades</button>

        <p class="newsletter__note">Suas informações estão seguras conosco. Não compartilhamos seus dados.</p>
      </div>
    </div>
  </section>

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

</body>

</html>