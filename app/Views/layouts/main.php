<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'MateriaX | Red Industrial de Reutilización Circular') ?></title>
  <meta name="description" content="<?= esc($meta_description ?? 'MateriaX conecta empresas verificadas para publicar, solicitar y reutilizar excedentes de polímeros industriales.') ?>">
  <meta name="theme-color" content="#171B33">

  <!-- Favicon / Isotipo Oficial -->
  <link rel="icon" type="image/png" href="<?= base_url('assets/logos/isotipo-black.png') ?>">

  <!-- Google Fonts: Barlow, Plus Jakarta Sans & JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- ABTC Theme & Global Styles -->
  <link rel="stylesheet" href="<?= base_url('css/abtc-theme.css') ?>">
  <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>

  <!-- ==========================================================================
       SECCIÓN 0: HEADER FLOTANTE (<header class="navbar-floating">)
       ========================================================================== -->
  <header class="navbar-floating">
    <div class="navbar-container">
      <!-- 1. Izquierda: Logo / Nombre del Proyecto -->
      <a href="<?= base_url('#inicio') ?>" class="brand-wrapper" aria-label="Ir al inicio de MateriaX">
        <div class="brand-logo-badge">
          <svg viewBox="0 0 100 100" width="38" height="38" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="46" fill="#1E293B" stroke="#38BDF8" stroke-width="4"/>
            <path d="M 28 58 L 52 28 L 74 28 C 80 28 84 32 80 38 L 74 44 L 54 44 C 48 44 45 47 45 52 L 66 52 L 78 74 C 82 82 78 88 70 88 C 64 88 60 84 57 78 L 48 60 L 28 60 Z" fill="#FFFFFF"/>
          </svg>
        </div>
        <span class="brand-text">Materia<span class="accent-blue">X</span></span>
      </a>

      <!-- 2. Menú de navegación y Botones -->
      <div class="nav-actions-wrapper">
        <nav class="nav-links" id="topNav" aria-label="Navegación principal">
          <a href="<?= base_url('#inicio') ?>" class="active">Inicio</a>
          <a href="<?= base_url('#propuesta-roles') ?>">Propuesta & Roles</a>
          <a href="<?= base_url('#roadmap-inventario') ?>">Roadmap & Inventario</a>
          <a href="<?= base_url('#seguridad-infraestructura') ?>">Seguridad</a>
          <a href="<?= base_url('#metricas') ?>">Métricas</a>
          <a href="<?= base_url('#contacto') ?>">Contacto</a>
        </nav>

        <div class="nav-buttons">
          <button type="button" class="btn btn-sm btn-ghost" id="openAdminModalBtn" title="Ver solicitudes en LocalStorage">
            📋 Solicitudes <span class="badge-count" id="adminBadgeCount">0</span>
          </button>
          <button type="button" class="btn btn-sm btn-ghost" id="openTechDocBtn" title="Ver Memoria Técnica y Ficha Académica">
            📄 Memoria Técnica
          </button>
          <button type="button" class="btn btn-sm btn-primary btn-abtc-primary" id="openAccessModalNav">
            Acceso / Login
          </button>
        </div>
      </div>
    </div>
  </header>

  <main>
    <?= $this->renderSection('content') ?>
  </main>

  <!-- ==========================================================================
       SECCIÓN 6: FOOTER CORPORATIVO (<footer>)
       ========================================================================== -->
  <footer class="footer-corporate footer-abtc section-dark" id="contacto">
    <div class="footer-container">
      <!-- Formulario Plano Horizontal para Consultas Directas -->
      <div class="footer-contact-banner abtc-card">
        <div class="contact-banner-copy">
          <h3>¿Deseas conectar tu planta a la red de MateriaX?</h3>
          <p>Envía tu consulta técnica o solicita credenciales de acceso institucional.</p>
        </div>
        <form class="horizontal-contact-form" onsubmit="event.preventDefault(); document.querySelector('#openAccessModalNav').click();">
          <?= csrf_field() ?>
          <input type="email" class="abtc-input" name="contact_email" placeholder="Ingresa tu email corporativo..." required aria-label="Email corporativo">
          <button type="submit" class="btn btn-primary btn-abtc-primary">Comenzar &rarr;</button>
        </form>
      </div>

      <!-- Columnas Modulares de Navegación -->
      <div class="footer-grid-modular">
        <div class="footer-brand-info">
          <div class="brand-wrapper">
            <div class="brand-logo-badge">
              <svg viewBox="0 0 100 100" width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="46" fill="#1E293B" stroke="#38BDF8" stroke-width="4"/>
                <path d="M 28 58 L 52 28 L 74 28 C 80 28 84 32 80 38 L 74 44 L 54 44 C 48 44 45 47 45 52 L 66 52 L 78 74 C 82 82 78 88 70 88 C 64 88 60 84 57 78 L 48 60 L 28 60 Z" fill="#FFFFFF"/>
              </svg>
            </div>
            <span class="brand-text brand-text-lg">Materia<span class="accent-blue">X</span></span>
          </div>
          <p>
            Plataforma B2B para la valorización y reutilización de polímeros industriales. Trazabilidad garantizada bajo arquitectura segura.
          </p>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Estructura Web</h4>
          <ul class="footer-col-links">
            <li><a href="#inicio">Inicio / Hero</a></li>
            <li><a href="#propuesta-roles">Propuesta & Roles</a></li>
            <li><a href="#roadmap-inventario">Roadmap & Inventario</a></li>
            <li><a href="#seguridad-infraestructura">Seguridad & Infraestructura</a></li>
            <li><a href="#metricas">Dashboard de Métricas</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Polímeros</h4>
          <ul class="footer-col-links">
            <li><a href="#roadmap-inventario" data-filter-link="polietileno">Polietileno (PEAD/PEBD)</a></li>
            <li><a href="#roadmap-inventario" data-filter-link="polipropileno">Polipropileno (PP)</a></li>
            <li><a href="#roadmap-inventario" data-filter-link="tecnicos">PVC, ABS & Nylon</a></li>
            <li><a href="#roadmap-inventario" data-filter-link="equipamiento">Matricería Industrial</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Seguridad & Backend</h4>
          <ul class="footer-col-links">
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● CodeIgniter 4 MVC</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● MySQL InnoDB DB</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● CSRF + Bcrypt Hash</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● Arquitectura 3FN</span></li>
          </ul>
        </div>
      </div>

      <!-- Créditos y Acceso a Memoria Técnica / Ficha Académica -->
      <div class="footer-credits-academic">
        <div>
          &copy; 2026 <strong>MateriaX</strong>. Red Industrial de Reutilización Circular.
        </div>
        <div>
          <button type="button" class="btn-academic-link" id="openTechDocFooter">
            📄 Ficha Institucional & Memoria Técnica (ITR3)
          </button>
        </div>
      </div>
    </div>
  </footer>

  <!-- MODALES FUNCIONALES -->
  <div class="modal-overlay" id="accessModal" aria-hidden="true">
    <div class="modal-card abtc-card" role="dialog" aria-labelledby="modalTitle">
      <button class="modal-close" id="closeAccessModal" aria-label="Cerrar ventana">&times;</button>
      <div class="modal-header">
        <span class="section-eyebrow">CREDENCIALES DE ACCESO</span>
        <h3 id="modalTitle">Registro & Acceso de Empresa</h3>
        <p>Valida tu razón social para publicar y reservar lotes en la red de MateriaX.</p>
      </div>

      <form class="modal-form" id="accessForm">
        <?= csrf_field() ?>
        <div class="form-group">
          <label for="companyName">Razón Social / Nombre de Planta *</label>
          <input type="text" id="companyName" name="company_name" class="abtc-input" required placeholder="Ej: Polímeros Industriales S.A.">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="companyCuit">CUIT de la Empresa *</label>
            <input type="text" id="companyCuit" name="cuit" class="abtc-input" required placeholder="30-12345678-9">
          </div>
          <div class="form-group">
            <label for="companyEmail">Email Corporativo *</label>
            <input type="email" id="companyEmail" name="email" class="abtc-input" required placeholder="planta@empresa.com">
          </div>
        </div>

        <div class="form-group">
          <label for="interestType">Tipo de Operación Principal</label>
          <select id="interestType" name="interest_type" class="abtc-input">
            <option value="publicar">Deseo publicar excedentes plásticos (Oferta)</option>
            <option value="comprar">Busco materia prima / scrap recuperado (Demanda)</option>
            <option value="ambos">Ambas (Publicar y Solicitar)</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formMessage">Detalles técnicos del material o volumen estimado</label>
          <textarea id="formMessage" name="message" class="abtc-input" rows="3" placeholder="Indica tipo de resina (PEAD, PP, ABS), cantidades en kg o zona de retiro..."></textarea>
        </div>

        <div class="modal-actions">
          <button type="button" class="btn btn-ghost btn-abtc-outline" id="cancelAccessModal">Cancelar</button>
          <button type="submit" class="btn btn-primary btn-abtc-primary">Enviar Solicitud</button>
        </div>
      </form>
    </div>
  </div>

  <div class="modal-overlay" id="detailModal" aria-hidden="true">
    <div class="modal-card abtc-card" role="dialog" aria-labelledby="detailTitle">
      <button class="modal-close" id="closeDetailModal" aria-label="Cerrar ventana">&times;</button>
      <div class="modal-header">
        <span class="feature-badge-cat" id="detailCategory">Categoría</span>
        <h3 id="detailTitle" style="margin-top: 0.5rem;">Nombre del Recurso</h3>
      </div>

      <div class="modal-body-content">
        <p id="detailDescription" style="font-size: 0.9rem; color: var(--color-text-light-muted); line-height: 1.6;">
          Descripción técnica del lote y procedencia.
        </p>
        <div class="detail-grid">
          <div class="detail-item">
            <span>Volumen Disponible:</span>
            <strong id="detailStock">0 kg</strong>
          </div>
          <div class="detail-item">
            <span>Ubicación Planta:</span>
            <strong id="detailLocation">-</strong>
          </div>
          <div class="detail-item">
            <span>Condición / Pureza:</span>
            <strong id="detailStatus">-</strong>
          </div>
          <div class="detail-item">
            <span>Presentación:</span>
            <strong id="detailPackaging">Big Bags / Fardos</strong>
          </div>
        </div>
      </div>

      <div class="modal-actions">
        <button type="button" class="btn btn-ghost" id="closeDetailBtn">Cerrar</button>
        <button type="button" class="btn btn-primary" id="detailRequestBtn">Solicitar este Lote</button>
      </div>
    </div>
  </div>

  <div class="modal-overlay" id="adminModal" aria-hidden="true">
    <div class="modal-card modal-card-wide" role="dialog" aria-labelledby="adminTitle">
      <button class="modal-close" id="closeAdminModal" aria-label="Cerrar ventana">&times;</button>
      <div class="modal-header">
        <span class="section-eyebrow">PANEL LOCALSTORAGE</span>
        <h3 id="adminTitle">Solicitudes Guardadas en Navegador</h3>
        <p>Registro local de interacciones generadas desde los formularios de la plataforma.</p>
      </div>

      <div class="admin-requests-container" id="adminRequestsList"></div>

      <div class="modal-actions modal-actions-between">
        <button type="button" class="btn btn-red btn-sm" id="clearStorageBtn">
          🗑️ Vaciar Solicitudes
        </button>
        <div style="display: flex; gap: 0.5rem;">
          <button type="button" class="btn btn-ghost btn-sm" id="exportStorageBtn">
            📥 Exportar JSON
          </button>
          <button type="button" class="btn btn-primary btn-sm" id="closeAdminBtn">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- TECHNICAL & ACADEMIC DOCUMENTATION MODAL -->
  <div class="modal-overlay" id="techDocModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="techDocModalTitle">
      <button class="modal-close" id="closeTechDocModal" aria-label="Cerrar ventana">&times;</button>
      <div class="modal-header">
        <span class="section-eyebrow">FICHA INSTITUCIONAL & ANTEPROYECTO 2026</span>
        <h3 id="techDocModalTitle">Memoria Técnica del Proyecto MateriaX</h3>
        <p>Documentación de desarrollo, diseño de software y esquema de evaluación curricular.</p>
      </div>

      <div class="tech-doc-body" style="display: flex; flex-direction: column; gap: 1.25rem; font-size: 0.88rem; color: #E2E8F0; line-height: 1.6;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 0.85rem; background: rgba(255, 255, 255, 0.04); padding: 1rem; border-radius: 6px; border: 1px solid rgba(255, 255, 255, 0.1);">
          <div>
            <strong style="color: #93C5FD; display: block; font-size: 0.75rem; text-transform: uppercase; font-family: var(--font-mono);">Institución</strong>
            <span>Instituto Técnico Río Tercero</span>
          </div>
          <div>
            <strong style="color: #93C5FD; display: block; font-size: 0.75rem; text-transform: uppercase; font-family: var(--font-mono);">Especialidad</strong>
            <span>Informática (2026)</span>
          </div>
          <div>
            <strong style="color: #93C5FD; display: block; font-size: 0.75rem; text-transform: uppercase; font-family: var(--font-mono);">Materias</strong>
            <span>Base de Datos, Lab. de Programación, Lab. de Aplicaciones II</span>
          </div>
          <div>
            <strong style="color: #93C5FD; display: block; font-size: 0.75rem; text-transform: uppercase; font-family: var(--font-mono);">Docentes a Cargo</strong>
            <span>Stucher Vanesa, Zanetti Simon, Rissone Francisco</span>
          </div>
        </div>

        <div>
          <h4 style="color: #FFFFFF; font-size: 1rem; margin-bottom: 0.35rem;">1. Propósito y Arquitectura de la Solución</h4>
          <p style="margin: 0;">
            MateriaX es una plataforma B2B orientada a la industria plástica para publicar, cotizar y reincorporar excedentes y descartes post-industriales en la economía circular. El sistema fue estructurado bajo el patrón MVC en <strong>CodeIgniter 4</strong>, frontend optimizado con estándares de diseño plano ABTC y base de datos relacional <strong>MySQL</strong> normalizada en 3FN.
          </p>
        </div>

        <div>
          <h4 style="color: #FFFFFF; font-size: 1rem; margin-bottom: 0.35rem;">2. Criterios de Seguridad y Blindaje Backend</h4>
          <ul style="padding-left: 1.25rem; margin: 0; display: flex; flex-direction: column; gap: 0.25rem;">
            <li><strong>Protección CSRF:</strong> Validación automática de tokens sincronizados en solicitudes POST.</li>
            <li><strong>Hash Criptográfico:</strong> Almacenamiento seguro de credenciales con <code>PASSWORD_BCRYPT</code>.</li>
            <li><strong>Prevención SQL Injection:</strong> Consultas preparadas parametrizadas en Modelos y Query Builder.</li>
            <li><strong>Control de Sesión y Filtros:</strong> Restricción de rutas mediante <code>App\Filters\AuthFilter</code> según el rol.</li>
          </ul>
        </div>

        <div>
          <h4 style="color: #FFFFFF; font-size: 1rem; margin-bottom: 0.35rem;">3. Cronograma de Evaluación Curricular</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 0.65rem; font-family: var(--font-mono); font-size: 0.78rem;">
            <div style="background: rgba(255, 255, 255, 0.03); padding: 0.65rem; border-radius: 4px; border: 1px solid rgba(255, 255, 255, 0.08);">
              <span style="color: #38BDF8; font-weight: bold; display: block;">HITO 1</span>
              <span>Fundación MVC, Login y DB Base</span>
            </div>
            <div style="background: rgba(255, 255, 255, 0.03); padding: 0.65rem; border-radius: 4px; border: 1px solid rgba(255, 255, 255, 0.08);">
              <span style="color: #38BDF8; font-weight: bold; display: block;">HITO 2</span>
              <span>Inventario, Filtros y Solicitudes</span>
            </div>
            <div style="background: rgba(255, 255, 255, 0.03); padding: 0.65rem; border-radius: 4px; border: 1px solid rgba(255, 255, 255, 0.08);">
              <span style="color: #38BDF8; font-weight: bold; display: block;">HITO FINAL</span>
              <span>Métricas, Auditoría y Defensa</span>
            </div>
          </div>
        </div>
      </div>

      <div class="modal-actions" style="margin-top: 1.5rem; justify-content: flex-end;">
        <button type="button" class="btn btn-primary btn-abtc-primary" id="closeTechDocBtn">Entendido / Cerrar</button>
      </div>
    </div>
  </div>

  <div class="toast-container" id="toastContainer"></div>

  <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
