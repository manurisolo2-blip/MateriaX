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

  <!-- Open Graph / Meta Social -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="MateriaX | Red Industrial Circular">
  <meta property="og:description" content="Plataforma institucional para transformar excedentes plásticos en recursos valiosos entre empresas verificadas.">
  <meta property="og:site_name" content="MateriaX">
  <meta property="og:image" content="<?= base_url('assets/logos/isotipo-512.png') ?>">

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
        <img src="<?= base_url('assets/logos/isotipo-black.png') ?>" alt="MateriaX Logo" class="brand-logo-img" width="40" height="40">
        <span class="brand-text">Materia<span class="accent-blue">X</span></span>
      </a>

      <!-- Navegación Principal Modular -->
      <nav class="topnav nav-links" id="topNav" aria-label="Navegación principal">
        <a href="<?= base_url('#inicio') ?>" class="active">Inicio</a>
        <a href="<?= base_url('#propuesta-roles') ?>">Roles B2B</a>
        <a href="<?= base_url('#roadmap-inventario') ?>">Inventario</a>
        <a href="<?= base_url('#seguridad-infraestructura') ?>">Seguridad</a>
        <a href="<?= base_url('#metricas') ?>">Métricas</a>
        <a href="<?= base_url('#contacto') ?>">Contacto</a>
      </nav>

      <!-- 2. Botones de Acción Corporativa & Sesión Activa -->
      <div class="nav-actions-wrapper">
        <div class="nav-buttons" id="navDefaultActions">
          <button type="button" class="btn btn-sm btn-primary btn-abtc-primary" id="openAccessModalNav">
            🏢 Iniciar Sesión / Registro Empresa
          </button>
        </div>

        <!-- Widget Dinámico de Sesión Corporativa / Admin Activa -->
        <div class="nav-session-active hidden" id="navSessionWidget">
          <div class="nav-session-info">
            <div class="nav-session-company">
              <span class="status-dot-pulse" id="navSessionDot" style="width:6px; height:6px; background:#10B981;"></span>
              <span id="navCompanyName">Empresa Homologada</span>
            </div>
            <div class="nav-session-cuit" id="navCompanyCuit">CUIT 30-71458921-7 ● RED ACTIVA</div>
          </div>
          <div class="nav-session-actions">
            <button type="button" class="btn btn-xs btn-ghost hidden" id="navAdminDirectBtn" title="Abrir Backoffice de Auditoría">🛡️ Backoffice</button>
            <button type="button" class="btn btn-xs btn-ghost" id="navVerificationBtn" title="Ver Estado y Credencial de Verificación">📑 Mi Estado</button>
            <button type="button" class="btn-session-logout" id="navLogoutBtn" title="Cerrar sesión y volver a Visitante">✕ Salir</button>
          </div>
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
        <form class="horizontal-contact-form" id="footerContactForm" aria-label="Formulario de contacto corporativo">
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
            <img src="<?= base_url('assets/logos/isotipo-black.png') ?>" alt="MateriaX Logo" class="brand-logo-img" width="48" height="48">
            <span class="brand-text brand-text-lg">Materia<span class="accent-blue">X</span></span>
          </div>
          <p style="margin-top: 1rem; color: var(--color-text-light-muted); font-size: 0.88rem; line-height: 1.6;">
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

  <!-- ==========================================================================
       MODALES FUNCIONALES: PORTAL B2B, ONBOARDING, AUDITORÍA & VERIFICACIÓN
       ========================================================================== -->

  <!-- PORTAL EMPRESAS: ACCESO, ONBOARDING CORPORATIVO & CONSULTA -->
  <div class="modal-overlay" id="accessModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="modalPortalTitle">
      <button class="modal-close" id="closeAccessModal" aria-label="Cerrar ventana">&times;</button>
      
      <div class="modal-header">
        <span class="section-eyebrow">PORTAL INSTITUCIONAL B2B</span>
        <h3 id="modalPortalTitle">Autenticación & Onboarding Corporativo</h3>
        <p>Acceso exclusivo para empresas industriales verificadas y habilitación en la red MateriaX.</p>
      </div>

      <!-- Pestañas de Navegación del Portal -->
      <div class="portal-tabs">
        <button type="button" class="portal-tab-btn active" data-portal-tab="loginTab">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg>
          Iniciar Sesión B2B
        </button>
        <button type="button" class="portal-tab-btn" data-portal-tab="registerTab">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
          Registro Onboarding Empresa
        </button>
        <button type="button" class="portal-tab-btn" data-portal-tab="statusTab">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
          Consultar Estado de Verificación
        </button>
      </div>

      <!-- CONTENIDO PESTAÑA 1: INICIAR SESIÓN B2B -->
      <div class="portal-tab-content active" id="loginTab">
        <form class="modal-form" id="corporateLoginForm">
          <div class="form-group">
            <label for="loginEmail">Email Corporativo o CUIT *</label>
            <input type="text" id="loginEmail" class="abtc-input" required placeholder="ej: contacto@empresa.com o 30-71458921-7" autocomplete="username">
          </div>

          <div class="form-group">
            <label for="loginPassword">Contraseña de Acceso Institucional *</label>
            <input type="password" id="loginPassword" class="abtc-input" required placeholder="••••••••••••" autocomplete="current-password">
          </div>

          <div class="modal-actions modal-actions-between" style="margin-top: 1rem;">
            <button type="button" class="btn btn-ghost btn-sm" id="forgotPassBtn">Recuperar Credenciales</button>
            <button type="submit" class="btn btn-primary btn-abtc-primary">Ingresar al Portal &rarr;</button>
          </div>
        </form>
      </div>

      <!-- CONTENIDO PESTAÑA 2: REGISTRO ONBOARDING EMPRESARIAL (2 PASOS) -->
      <div class="portal-tab-content" id="registerTab">
        <!-- Stepper Visual -->
        <div class="onboarding-stepper">
          <div class="stepper-step active" id="stepIndicator1">
            <span class="step-number">1</span>
            <span>1. Datos Fiscales & Representante</span>
          </div>
          <div class="stepper-divider"></div>
          <div class="stepper-step" id="stepIndicator2">
            <span class="step-number">2</span>
            <span>2. Documentación Legal & Seguridad</span>
          </div>
        </div>

        <form class="modal-form" id="corporateOnboardingForm" novalidate>
          <!-- PASO 1: DATOS CORPORATIVOS -->
          <div id="onboardingStep1">
            <div class="form-row">
              <div class="form-group">
                <label for="regCompanyName">Razón Social de la Empresa *</label>
                <input type="text" id="regCompanyName" class="abtc-input" required placeholder="Ej: Polímeros del Centro S.A.">
                <span class="input-feedback-msg" id="nameFeedback"></span>
              </div>
              <div class="form-group">
                <label for="regCompanyCuit">CUIT de la Empresa (Validación AFIP) *</label>
                <input type="text" id="regCompanyCuit" class="abtc-input" required placeholder="30-71458921-7" maxlength="13">
                <span class="input-feedback-msg" id="cuitFeedback">Ingrese CUIT para validar dígito verificador</span>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="regCompanyEmail">Correo Electrónico de Contacto *</label>
                <input type="email" id="regCompanyEmail" class="abtc-input" required placeholder="ej: contacto@gmail.com o comercial@empresa.com">
                <span class="input-feedback-msg" id="emailFeedback">Ingrese correo electrónico para notificaciones de la red</span>
              </div>
              <div class="form-group">
                <label for="regCompanyPhone">Teléfono / WhatsApp de Planta *</label>
                <input type="tel" id="regCompanyPhone" class="abtc-input" required placeholder="+54 9 11 4589-2100">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="regRepName">Nombre del Representante Autorizado *</label>
                <input type="text" id="regRepName" class="abtc-input" required placeholder="Ej: Ing. Carlos Gómez">
              </div>
              <div class="form-group">
                <label for="regRepRole">Cargo o Poder Societario *</label>
                <input type="text" id="regRepRole" class="abtc-input" required placeholder="Ej: Apoderado Legal / Director de Planta">
              </div>
            </div>

            <div class="form-group">
              <label for="regInterestType">Faceta / Perfil Operativo en MateriaX *</label>
              <select id="regInterestType" class="abtc-input" required>
                <option value="Oferente de Excedentes">Empresa Oferente (Generadora de Scrap / Descarte Limpio / Excedentes)</option>
                <option value="Demandante de Polímeros">Empresa Demandante (Transformadora / Inyección / Extrusión / Reutilización)</option>
                <option value="Reciclador & Compounding">Reciclador / Planta de Compounding & Pelletizado</option>
                <option value="Operaciones Integrales (Oferta y Demanda)">Ambas Facetas (Generación y Adquisición de Lotes)</option>
              </select>
            </div>

            <div class="modal-actions">
              <button type="button" class="btn btn-ghost" id="cancelOnboardingBtn">Cancelar</button>
              <button type="button" class="btn btn-primary btn-abtc-primary" id="gotoStep2Btn">
                Siguiente: Adjuntar Documentación Legal &rarr;
              </button>
            </div>
          </div>

          <!-- PASO 2: DOCUMENTACIÓN LEGAL Y CONTRASEÑA -->
          <div id="onboardingStep2" class="hidden">
            <div style="margin-bottom: 1.25rem;">
              <p style="font-size: 0.85rem; color: #BAC7E6; margin-top: 0;">
                Para garantizar la seguridad y confiabilidad de la red industrial, adjunta la documentación legal requerida para la auditoría institucional:
              </p>
            </div>

            <div class="form-row">
              <!-- Dropzone 1: Estatuto / Poder -->
              <div class="form-group">
                <label>1. Estatuto Social o Poder Notarial (PDF / Imagen) *</label>
                <div class="dropzone-container" id="dropzoneEstatuto">
                  <input type="file" id="fileEstatuto" accept=".pdf,.png,.jpg,.jpeg">
                  <div class="dropzone-icon">📄</div>
                  <p class="dropzone-text">Arrastra el archivo o haz clic aquí</p>
                  <span class="dropzone-hint">PDF, JPG o PNG (Máx 10 MB)</span>
                </div>
                <div class="file-preview-card hidden" id="previewEstatuto">
                  <div class="file-preview-info">
                    <span>📑</span>
                    <div>
                      <span class="file-preview-name" id="namePreviewEstatuto">estatuto_social.pdf</span>
                      <span class="file-preview-meta" id="metaPreviewEstatuto">1.4 MB ● Verificado</span>
                    </div>
                  </div>
                  <div class="file-preview-actions">
                    <button type="button" class="file-btn-preview" id="btnViewEstatuto">Ver</button>
                    <button type="button" class="file-btn-remove" id="btnRemoveEstatuto">✕</button>
                  </div>
                </div>
              </div>

              <!-- Dropzone 2: Constancia CUIT AFIP -->
              <div class="form-group">
                <label>2. Constancia de CUIT / AFIP o Cert. Ambiental *</label>
                <div class="dropzone-container" id="dropzoneCuit">
                  <input type="file" id="fileCuit" accept=".pdf,.png,.jpg,.jpeg">
                  <div class="dropzone-icon">🏛️</div>
                  <p class="dropzone-text">Arrastra la constancia AFIP o haz clic</p>
                  <span class="dropzone-hint">Constancia vigente con domicilio fiscal</span>
                </div>
                <div class="file-preview-card hidden" id="previewCuit">
                  <div class="file-preview-info">
                    <span>🏛️</span>
                    <div>
                      <span class="file-preview-name" id="namePreviewCuit">constancia_afip_cuit.pdf</span>
                      <span class="file-preview-meta" id="metaPreviewCuit">840 KB ● Verificado</span>
                    </div>
                  </div>
                  <div class="file-preview-actions">
                    <button type="button" class="file-btn-preview" id="btnViewCuit">Ver</button>
                    <button type="button" class="file-btn-remove" id="btnRemoveCuit">✕</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="regPassword">Crear Contraseña Corporativa *</label>
                <input type="password" id="regPassword" class="abtc-input" required placeholder="Mínimo 8 caracteres" autocomplete="new-password">
              </div>
              <div class="form-group">
                <label for="regPasswordConfirm">Confirmar Contraseña *</label>
                <input type="password" id="regPasswordConfirm" class="abtc-input" required placeholder="Repite la contraseña" autocomplete="new-password">
              </div>
            </div>

            <div class="form-group" style="margin-top: 0.5rem;">
              <label style="display: flex; align-items: flex-start; gap: 0.6rem; cursor: pointer; font-size: 0.82rem; color: #CBD5E1;">
                <input type="checkbox" id="regTermsCheck" required style="width: auto; margin-top: 3px;">
                <span>Declaro bajo juramento la autenticidad de los datos corporativos, estatutos y personería jurídica declarada para operar en la red industrial MateriaX.</span>
              </label>
            </div>

            <div class="modal-actions modal-actions-between">
              <button type="button" class="btn btn-ghost" id="backToStep1Btn">&larr; Volver al Paso 1</button>
              <button type="submit" class="btn btn-primary btn-abtc-primary" id="submitOnboardingBtn">
                🛡️ Finalizar Onboarding e Iniciar Auditoría
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- CONTENIDO PESTAÑA 3: CONSULTAR ESTADO DE VERIFICACIÓN -->
      <div class="portal-tab-content" id="statusTab">
        <form class="modal-form" id="checkStatusForm">
          <div class="form-group">
            <label for="statusQueryInput">Ingresa CUIT de la Empresa o Correo Electrónico *</label>
            <input type="text" id="statusQueryInput" class="abtc-input" required placeholder="Ej: 30-68934512-9 o contacto@gmail.com">
            <span class="input-feedback-msg feedback-info">El sistema buscará el expediente de homologación y timeline de auditoría.</span>
          </div>

          <div class="modal-actions">
            <button type="submit" class="btn btn-primary btn-abtc-primary">
              🔍 Consultar Estado de Verificación &rarr;
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>

  <!-- PANEL DE ESPERA / ESTADO DE VALIDACIÓN B2B -->
  <div class="modal-overlay" id="verificationModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="verifModalTitle">
      <button class="modal-close" id="closeVerificationModal" aria-label="Cerrar ventana">&times;</button>
      
      <div class="verification-header">
        <div class="verification-case-badge" id="verifCaseNumber">
          <span>EXPEDIENTE:</span> <strong>MX-AUD-2026-8942</strong>
        </div>
        <h3 id="verifModalTitle" style="margin: 0 0 0.4rem 0;">Panel de Espera & Validación Institucional</h3>
        <p style="font-size: 0.88rem; color: var(--color-text-light-muted); margin: 0;">
          Supervisión en tiempo real del proceso de homologación de empresa y activación de credenciales.
        </p>
      </div>

      <!-- Resumen de Datos de la Empresa -->
      <div class="detail-grid" style="margin-top: 0; margin-bottom: 1.25rem;">
        <div class="detail-item">
          <span>Razón Social</span>
          <strong id="verifCompanyName">Petropol S.A.</strong>
        </div>
        <div class="detail-item">
          <span>CUIT Homologado</span>
          <strong id="verifCuit">30-71458921-7</strong>
        </div>
        <div class="detail-item">
          <span>Representante Legal</span>
          <strong id="verifRep">Ing. Carlos Mendoza</strong>
        </div>
        <div class="detail-item">
          <span>Estado de Red</span>
          <strong id="verifStatusText" style="color: #38BDF8;">En Revisión de Compliance</strong>
        </div>
      </div>

      <!-- Timeline Interactivo de Verificación (4 Fases) -->
      <div class="verification-timeline">
        <!-- Fase 1 -->
        <div class="timeline-step completed" id="timeStep1">
          <div class="timeline-step-icon">✓</div>
          <div class="timeline-step-content">
            <div class="timeline-step-title">
              <span>1. Recepción de Datos Fiscales & Contacto</span>
              <span class="timeline-step-badge badge-success">COMPLETADO</span>
            </div>
            <p class="timeline-step-desc">Datos fiscales, correo electrónico de contacto y representante acreditados en origen.</p>
          </div>
        </div>

        <!-- Fase 2 -->
        <div class="timeline-step current" id="timeStep2">
          <div class="timeline-step-icon">2</div>
          <div class="timeline-step-content">
            <div class="timeline-step-title">
              <span>2. Validación AFIP / CUIT & Constancia Fiscal</span>
              <span class="timeline-step-badge badge-progress" id="badgeStep2">EN AUDITORÍA</span>
            </div>
            <p class="timeline-step-desc" id="descStep2">Cruce de padrón de personas jurídicas e inscripción impositiva activa.</p>
          </div>
        </div>

        <!-- Fase 3 -->
        <div class="timeline-step pending" id="timeStep3">
          <div class="timeline-step-icon">3</div>
          <div class="timeline-step-content">
            <div class="timeline-step-title">
              <span>3. Auditoría de Estatuto Social & Poder Notarial</span>
              <span class="timeline-step-badge badge-pending" id="badgeStep3">EN COLA DE AUDITOR</span>
            </div>
            <p class="timeline-step-desc" id="descStep3">Revisión de representación legal y personería para comprometer lotes industriales.</p>
          </div>
        </div>

        <!-- Fase 4 -->
        <div class="timeline-step pending" id="timeStep4">
          <div class="timeline-step-icon">4</div>
          <div class="timeline-step-content">
            <div class="timeline-step-title">
              <span>4. Emisión de Certificado Digital & Token de Red</span>
              <span class="timeline-step-badge badge-pending" id="badgeStep4">PENDIENTE DE ACTIVACIÓN</span>
            </div>
            <p class="timeline-step-desc" id="descStep4">Habilitación de credenciales criptográficas para publicación y reserva directa.</p>
          </div>
        </div>
      </div>

      <!-- Acciones del Panel de Espera -->
      <div class="modal-actions modal-actions-between" style="border-top: 1px solid var(--color-navy-border-subtle); padding-top: 1.25rem;">
        <button type="button" class="btn btn-ghost btn-sm" id="closeVerificationBtn">Cerrar Panel</button>
        <div style="display: flex; gap: 0.5rem;">
          <button type="button" class="btn btn-ghost btn-abtc-outline btn-sm" id="refreshVerificationStatusBtn" title="Consultar si el equipo auditor ya homologó su empresa">
            🔄 Actualizar Estado
          </button>
          <button type="button" class="btn btn-primary btn-abtc-primary btn-sm" id="enterPlatformBtn">
            Ingresar a la Red MateriaX &rarr;
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- DETAIL MODAL (FICHA TÉCNICA DINÁMICA) -->
  <div class="modal-overlay" id="detailModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="detailTitle">
      <button class="modal-close" id="closeDetailModal" aria-label="Cerrar ventana">&times;</button>
      <div class="modal-header">
        <span class="feature-badge-cat" id="detailCategory" style="margin-bottom: 0.5rem; display: inline-block;">Categoría</span>
        <h3 id="detailTitle" style="margin-top: 0.25rem;">Nombre del Recurso</h3>
        <p id="detailDescription" style="font-size: 0.9rem; color: var(--color-text-light-muted); line-height: 1.6; margin-top: 0.5rem;">
          Descripción técnica del lote y procedencia.
        </p>
      </div>

      <div class="modal-body-content">
        <div class="detail-grid">
          <div class="detail-item detail-cell">
            <span class="detail-cell-label">Volumen Disponible:</span>
            <strong class="detail-cell-val" id="detailStock">0 kg</strong>
          </div>
          <div class="detail-item detail-cell">
            <span class="detail-cell-label">Ubicación Planta:</span>
            <strong class="detail-cell-val" id="detailLocation">-</strong>
          </div>
          <div class="detail-item detail-cell">
            <span class="detail-cell-label">Condición / Pureza:</span>
            <strong class="detail-cell-val" id="detailStatus">-</strong>
          </div>
          <div class="detail-item detail-cell">
            <span class="detail-cell-label">Presentación:</span>
            <strong class="detail-cell-val" id="detailPackaging">Big Bags / Fardos</strong>
          </div>
        </div>
      </div>

      <div class="modal-actions modal-actions-between" style="margin-top: 1.5rem;">
        <button type="button" class="btn btn-ghost" id="closeDetailBtn">Cerrar</button>
        <button type="button" class="btn btn-primary btn-abtc-primary" id="detailRequestBtn">Solicitar este Lote</button>
      </div>
    </div>
  </div>

  <!-- ADMIN / BACKOFFICE MODAL: AUDITORÍA DE EMPRESAS & SOLICITUDES -->
  <div class="modal-overlay" id="adminModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="adminTitle" style="max-width: 900px;">
      <button class="modal-close" id="closeAdminModal" aria-label="Cerrar ventana">&times;</button>
      
      <div class="modal-header">
        <span class="section-eyebrow">BACKOFFICE INSTITUCIONAL</span>
        <h3 id="adminTitle">Panel de Control & Auditoría de Red</h3>
        <p>Homologación de personerías jurídicas, control de compliance legal y gestión de solicitudes.</p>
      </div>

      <!-- Pestañas del Admin -->
      <div class="portal-tabs">
        <button type="button" class="portal-tab-btn active" data-admin-tab="companiesAuditTab">
          🛡️ Auditoría de Empresas Postulantes (<span id="countPendingCompanies">0</span>)
        </button>
        <button type="button" class="portal-tab-btn" data-admin-tab="requestsAuditTab">
          📋 Solicitudes de Lotes Guardadas (<span id="countStoredRequests">0</span>)
        </button>
      </div>

      <!-- Pestaña 1: Empresas para Auditoría -->
      <div class="portal-tab-content active" id="companiesAuditTab">
        <div id="adminCompaniesList" style="max-height: 420px; overflow-y: auto; margin-bottom: 1.25rem;"></div>
      </div>

      <!-- Pestaña 2: Solicitudes de Lotes -->
      <div class="portal-tab-content" id="requestsAuditTab">
        <div class="admin-requests-container" id="adminRequestsList"></div>
      </div>

      <div class="modal-actions modal-actions-between">
        <button type="button" class="btn btn-red btn-sm" id="clearStorageBtn">
          🗑️ Vaciar Registros Locales
        </button>
        <div style="display: flex; gap: 0.5rem;">
          <button type="button" class="btn btn-ghost btn-sm" id="exportStorageBtn">
            📥 Exportar Base JSON
          </button>
          <button type="button" class="btn btn-primary btn-abtc-primary btn-sm" id="closeAdminBtn">
            Cerrar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL DE VISUALIZACIÓN / AUDITORÍA DE DOCUMENTO LEGAL -->
  <div class="modal-overlay" id="docPreviewModal" aria-hidden="true">
    <div class="doc-preview-modal-card abtc-card" role="dialog" aria-labelledby="docPreviewTitle">
      <button class="modal-close" id="closeDocPreviewModal" aria-label="Cerrar ventana">&times;</button>
      
      <div class="modal-header">
        <span class="section-eyebrow">VISUALIZADOR DE DOCUMENTACIÓN LEGAL</span>
        <h4 id="docPreviewTitle" style="color:#FFFFFF; margin: 0.25rem 0;">Estatuto Social / Constancia AFIP</h4>
      </div>

      <div class="doc-paper-simulation">
        <div class="doc-paper-header">
          <div>
            <h3 style="margin: 0; font-size: 1.15rem; color: #0284C7; font-weight: 800;" id="docPaperCompany">POLÍMEROS INDUSTRIALES S.A.</h3>
            <span style="font-size: 0.8rem; color: #64748B; font-family: var(--font-mono);" id="docPaperCuit">CUIT: 30-71458921-7</span>
          </div>
          <div class="doc-stamp" id="docPaperStamp">AFIP VALIDADO</div>
        </div>

        <div style="font-size: 0.88rem; color: #334155; line-height: 1.6;" id="docPaperBody">
          <p><strong>Tipo Documental:</strong> <span id="docPaperType">Estatuto Social Constitutivo y Designación de Autoridades</span></p>
          <p><strong>Representante Legal Acreditado:</strong> <span id="docPaperRep">Ing. Carlos Mendoza (Apoderado General)</span></p>
          <p><strong>Hash de Integridad Criptográfica (SHA-256):</strong><br>
            <code style="background: #F1F5F9; padding: 2px 6px; border-radius: 3px; font-family: monospace; font-size: 0.78rem; word-break: break-all;" id="docPaperHash">e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855</code>
          </p>
          <div style="margin-top: 1.5rem; padding: 1rem; background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 4px; font-size: 0.82rem; color: #475569;">
            🔒 <em>Documento verificado bajo protocolo de custodia legal MateriaX. Los poderes declarados habilitan la publicación de excedentes industriales y reservas vinculantes.</em>
          </div>
        </div>
      </div>

      <div class="modal-actions" style="margin-top: 1rem;">
        <button type="button" class="btn btn-primary btn-abtc-primary btn-sm" id="closeDocPreviewBtn">Cerrar Visor</button>
      </div>
    </div>
  </div>

  <!-- MODAL DE PUBLICACIÓN DE EXCEDENTE INDUSTRIAL (OFERENTE) -->
  <div class="modal-overlay" id="publishLotModal" aria-hidden="true">
    <div class="modal-card modal-card-wide abtc-card" role="dialog" aria-labelledby="publishLotModalTitle">
      <button class="modal-close" id="closePublishLotModal" aria-label="Cerrar ventana">&times;</button>
      
      <div class="modal-header">
        <span class="section-eyebrow">FACETA OFERENTE ● PUBLICACIÓN DE LOTE</span>
        <h3 id="publishLotModalTitle" style="margin: 0.25rem 0 0.5rem 0;">Publicar Nuevo Excedente / Lote de Polímero</h3>
        <p style="font-size: 0.88rem; color: var(--color-text-light-muted); margin: 0;">
          Los lotes publicados se integran al inventario en tiempo real con trazabilidad de origen y personería jurídica verificada.
        </p>
      </div>

      <form class="modal-form" id="publishLotForm">
        <div class="form-row">
          <div class="form-group">
            <label for="pubCompanyName">Empresa Oferente / Planta Emisora *</label>
            <input type="text" id="pubCompanyName" class="abtc-input" required placeholder="PetroPlast Industrial S.A." readonly style="opacity: 0.85;">
          </div>
          <div class="form-group">
            <label for="pubCategory">Familia de Polímero / Categoría *</label>
            <select id="pubCategory" class="abtc-input" required>
              <option value="polietileno">Polietileno (PEAD / PEBD / Film)</option>
              <option value="polipropileno">Polipropileno (PP Homopolímero / Copolímero)</option>
              <option value="tecnicos">Técnicos (ABS / PVC / Nylon / Policarbonato)</option>
              <option value="equipamiento">Matricería & Logística (Pallets / Tolvas / Molinos)</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="pubMaterialTitle">Título / Nombre del Material *</label>
            <input type="text" id="pubMaterialTitle" class="abtc-input" required placeholder="Ej: Scrap de PEAD Soplado Limpio">
          </div>
          <div class="form-group">
            <label for="pubStock">Volumen / Cantidad Disponible *</label>
            <input type="text" id="pubStock" class="abtc-input" required placeholder="Ej: 500 kg o 120 unid.">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="pubLocation">Ubicación de la Planta *</label>
            <input type="text" id="pubLocation" class="abtc-input" required placeholder="Ej: Parque Industrial Pilar, Buenos Aires">
          </div>
          <div class="form-group">
            <label for="pubCondition">Condición / Presentación *</label>
            <input type="text" id="pubCondition" class="abtc-input" required placeholder="Ej: Molido limpio en Big Bags">
          </div>
        </div>

        <div class="form-group">
          <label for="pubDescription">Descripción Técnica & Pureza del Lote *</label>
          <textarea id="pubDescription" class="abtc-input" rows="3" required placeholder="Detalla índice MFI, color, proceso previo (inyección/extrusión), grado de limpieza y disponibilidad para retiro."></textarea>
        </div>

        <div class="modal-actions">
          <button type="button" class="btn btn-ghost" id="cancelPublishLotBtn">Cancelar</button>
          <button type="submit" class="btn btn-primary btn-abtc-primary">
            🚀 Publicar Lote en la Red MateriaX
          </button>
        </div>
      </form>
    </div>
  </div>

  <div class="toast-container" id="toastContainer"></div>

  <script src="<?= base_url('js/main.js') ?>"></script>
</body>
</html>
