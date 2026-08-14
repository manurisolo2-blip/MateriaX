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
          <a href="<?= base_url('#seguridad-infraestructura') ?>">Seguridad & Compliance</a>
          <a href="<?= base_url('#metricas') ?>">Métricas</a>
          <a href="<?= base_url('#contacto') ?>">Contacto</a>
        </nav>

        <div class="nav-buttons">
          <button type="button" class="btn btn-sm btn-ghost" id="openAdminModalBtn" title="Ver solicitudes en curso">
            📋 Solicitudes <span class="badge-count" id="adminBadgeCount">0</span>
          </button>
          <button type="button" class="btn btn-sm btn-primary btn-abtc-primary" id="openAccessModalNav">
            Portal Empresas / Acceso
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
        <form class="horizontal-contact-form" onsubmit="event.preventDefault(); document.querySelector('#openAccessModalNav').click();" aria-label="Formulario de contacto corporativo">
          <?= csrf_field() ?>
          <label for="footerContactEmail" class="visually-hidden">Email corporativo de la empresa</label>
          <input type="email" id="footerContactEmail" class="abtc-input" name="contact_email" placeholder="Ingresa tu email corporativo..." required aria-label="Email corporativo de la empresa">
          <button type="submit" class="btn btn-primary btn-abtc-primary" aria-label="Comenzar solicitud de conexión corporativa">Comenzar &rarr;</button>
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
            <li><a href="<?= base_url('#inicio') ?>">Inicio / Hero</a></li>
            <li><a href="<?= base_url('#propuesta-roles') ?>">Propuesta & Roles</a></li>
            <li><a href="<?= base_url('#roadmap-inventario') ?>">Roadmap & Inventario</a></li>
            <li><a href="<?= base_url('#seguridad-infraestructura') ?>">Seguridad & Compliance</a></li>
            <li><a href="<?= base_url('#metricas') ?>">Dashboard de Métricas</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Polímeros & Lotes</h4>
          <ul class="footer-col-links">
            <li><a href="<?= base_url('#roadmap-inventario') ?>" data-filter-link="polietileno">Polietileno (PEAD/PEBD)</a></li>
            <li><a href="<?= base_url('#roadmap-inventario') ?>" data-filter-link="polipropileno">Polipropileno (PP)</a></li>
            <li><a href="<?= base_url('#roadmap-inventario') ?>" data-filter-link="tecnicos">PVC, ABS & Nylon</a></li>
            <li><a href="<?= base_url('#roadmap-inventario') ?>" data-filter-link="equipamiento">Matricería Industrial</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Seguridad & Compliance</h4>
          <ul class="footer-col-links">
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● Cifrado de Datos & RBAC</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● Homologación CUIT / AFIP</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● Trazabilidad de Lotes</span></li>
            <li><span class="tech-code" style="font-size: 0.8rem; color: #BAC7E6;">● Certificación ESG & CO₂</span></li>
          </ul>
        </div>
      </div>

      <!-- Créditos y Enlaces Legales Corporativos -->
      <div class="footer-credits-academic">
        <div>
          &copy; 2026 <strong>MateriaX</strong>. Red Industrial de Reutilización Circular. Todos los derechos reservados.
        </div>
        <div style="font-size: 0.82rem; color: #94A3B8; display: flex; gap: 1rem; flex-wrap: wrap;">
          <span>Privacidad de Datos</span>
          <span>•</span>
          <span>Términos de Servicio B2B</span>
          <span>•</span>
          <span>Compliance Industrial</span>
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

  <div class="toast-container" id="toastContainer"></div>

  <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
