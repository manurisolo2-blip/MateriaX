<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- ==========================================================================
     SECCIÓN 1: HERO SECTION (<section class="hero-section">)
     ========================================================================== -->
<section class="hero-section section-dark" id="inicio">
  <div class="hero-bg-grid"></div>

  <div class="hero-container">
    <div class="hero-content-col">
      <div class="hero-tag">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        INFRAESTRUCTURA B2B | ECONOMÍA CIRCULAR INDUSTRIAL
      </div>

      <h1 class="hero-title hero-title-layered">
        TRANSFORMAR EXCEDENTES EN <span class="accent-blue">RECURSOS DE VALOR</span>.
      </h1>

      <p class="hero-subtitle">
        Plataforma corporativa que conecta industrias para publicar, solicitar y reutilizar polímeros (PE, PP, PVC, ABS, Nylon) con trazabilidad verificada, altos estándares de seguridad y eficiencia operativa.
      </p>

      <div class="hero-cta-group">
        <a class="btn btn-primary btn-abtc-primary" href="#modulos-hitos">
          Explorar Inventario
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <button type="button" class="btn btn-ghost btn-abtc-outline" id="openAccessModalHero">
          Publicar Material / Acceso
        </button>
      </div>

      <!-- Métricas Rápidas / Ticker Hero Monoespaciado -->
      <div class="hero-quick-metrics">
        <div class="metric-item">
          <span class="metric-number highlight-blue" data-target="2480"><?= esc($metrics['total_recycled'] ?? '2,480 kg') ?></span>
          <span class="metric-label">Plástico Recuperado</span>
        </div>
        <div class="metric-item">
          <span class="metric-number" data-target="36"><?= esc($metrics['active_operations'] ?? '36') ?></span>
          <span class="metric-label">Operaciones Activas</span>
        </div>
        <div class="metric-item">
          <span class="metric-number highlight-red" data-target="100"><?= esc($metrics['satisfaction_rate'] ?? '99.4%') ?></span>
          <span class="metric-label">Validación B2B</span>
        </div>
      </div>
    </div>

    <!-- Panel Asimétrico de Destacado Industrial -->
    <aside class="hero-feature-panel abtc-card">
      <div class="feature-panel-header">
        <span class="feature-badge-cat">LOTE DESTACADO #PE-904</span>
        <span class="feature-badge-status">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
          AUDITADO
        </span>
      </div>

      <h3 class="feature-panel-title">PEAD Molido Inyección & Soplado</h3>
      <p class="feature-panel-desc">Sobrante industrial homogéneo de baldes y bidones. Descontaminado, libre de metales y con fluidez controlada para extrusión directa.</p>

      <div class="spec-matrix">
        <div class="spec-cell">
          <span class="spec-label">Volumen Disponible</span>
          <span class="spec-value accent">12.500 kg</span>
        </div>
        <div class="spec-cell">
          <span class="spec-label">Índice Fluidez (MFI)</span>
          <span class="spec-value">0.35 g/10min</span>
        </div>
        <div class="spec-cell">
          <span class="spec-label">Densidad Específica</span>
          <span class="spec-value">0.954 g/cm³</span>
        </div>
        <div class="spec-cell">
          <span class="spec-label">Pureza / Filtrado</span>
          <span class="spec-value">99.8% Granza</span>
        </div>
      </div>

      <div style="display: flex; align-items: center; justify-content: space-between; border-top: 1px solid var(--color-navy-border-subtle); padding-top: 1rem;">
        <span style="font-size: 0.8rem; color: #BAC7E6; font-family: var(--font-mono); font-weight: 600;">San Martín, Buenos Aires</span>
        <button type="button" class="btn btn-sm btn-primary open-detail-btn" data-resource-id="1">
          Ver Ficha Técnica &rarr;
        </button>
      </div>
    </aside>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN 2: PROPUESTA DE VALOR Y ROLES (<section class="value-prop-section">)
     ========================================================================== -->
<!-- ==========================================================================
     SECCIÓN 2: PROPUESTA DE VALOR Y ROLES (<section class="value-prop-section">)
     ========================================================================== -->
<section class="value-prop-section section-dark" id="propuesta-roles">
  <div class="section-wrapper">
    <div class="section-header-block">
      <span class="section-eyebrow">ECOSISTEMA B2B & MATRIZ DE PERMISOS</span>
      <h2 class="section-title-dark">Solución Integral para la Cadena de Valor</h2>
      <p class="section-desc-dark">
        MateriaX resuelve el descarte de materiales industriales conectando generadores y recicladores bajo un modelo seguro de permisos diferenciados.
      </p>
    </div>

    <div class="roles-grid">
      <!-- Rol 1: Empresa Generadora -->
      <article class="role-card abtc-card">
        <div>
          <div class="role-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 7v1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7m0 1a3 3 0 0 0 6 0V7H3l2-4h14l2 4M5 21V10.85M19 21V10.85M9 21v-4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v4"/></svg>
          </div>
          <h3 class="role-name">Empresa Generadora (Oferta)</h3>
          <p class="role-need">Plantas con excedentes de producción, coladas y scrap post-industrial que buscan monetizar inventario inactivo y certificar su huella ambiental.</p>
        </div>
        <ul class="role-permissions-list">
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Publicación de lotes, scrap y moldes</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Gestión de reservas y control de retiros</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Panel de trazabilidad y reportes ESG</li>
        </ul>
      </article>

      <!-- Rol 2: Empresa Transformadora -->
      <article class="role-card abtc-card">
        <div>
          <div class="role-icon-box" style="background: rgba(23, 27, 51, 0.08); color: #4A5568;">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24M14.83 14.83l4.24 4.24M14.83 9.17l4.24-4.24M4.93 19.07l4.24-4.24"/></svg>
          </div>
          <h3 class="role-name">Empresa Transformadora (Demanda)</h3>
          <p class="role-need">Industrias inyectoras, extrusoras y recicladoras que adquieren polímeros secundarios clasificados con especificaciones técnicas verificadas.</p>
        </div>
        <ul class="role-permissions-list">
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Búsqueda por fluidez MFI y polímero</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Descarga de fichas técnicas y ensayos</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Solicitud de cotizaciones y muestras</li>
        </ul>
      </article>

      <!-- Rol 3: Administrador de Red & Cumplimiento -->
      <article class="role-card abtc-card">
        <div>
          <div class="role-icon-box" style="background: rgba(23, 27, 51, 0.08); color: var(--color-navy-dark); border-color: rgba(23, 27, 51, 0.15);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="role-name">Administrador & Compliance</h3>
          <p class="role-need">Validación jurídica de empresas (CUIT e ISO), moderación de publicaciones, control de accesos y auditoría de seguridad.</p>
        </div>
        <ul class="role-permissions-list">
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Verificación legal y CUIT de empresas</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Aprobación y auditoría de publicaciones</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Monitoreo de sesiones y trazabilidad</li>
        </ul>
      </article>

      <!-- Rol 4: Operador Técnico de Planta -->
      <article class="role-card abtc-card">
        <div>
          <div class="role-icon-box" style="background: rgba(16, 185, 129, 0.15); color: var(--color-green-success); border-color: rgba(16, 185, 129, 0.3);">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          </div>
          <h3 class="role-name">Operador Técnico & Calidad</h3>
          <p class="role-need">Carga técnica de características de resinas (MFI, densidad, porcentaje de carga), control de pesaje y fiscalización de despachos.</p>
        </div>
        <ul class="role-permissions-list">
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Carga de fichas y curvas poliméricas</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Control de pesaje en báscula y stock</li>
          <li><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"/></svg> Asignación de precintos y despacho</li>
        </ul>
      </article>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN 3: ROADMAP & INVENTARIO (<section class="modules-section">)
     ========================================================================== -->
<section class="modules-section section-light" id="roadmap-inventario">
  <div class="section-wrapper">
    <div class="section-header-block">
      <span class="section-eyebrow">ROADMAP DE PLATAFORMA & ESCALABILIDAD</span>
      <h2 class="section-title-light">Fases de Implementación & Despliegue en Red</h2>
      <p class="section-desc-light">
        Estrategia de adopción tecnológica y escalamiento operativo para la valorización circular de polímeros en el sector manufacturero.
      </p>
    </div>

    <!-- Grilla de 3 Columnas para Hitos / Fases -->
    <div class="milestones-grid">
      <!-- Tarjeta Fase 1 -->
      <article class="milestone-card abtc-card">
        <div class="milestone-header">
          <span class="milestone-tag tag-hito-1">FASE 1 - ONBOARDING</span>
          <span class="tech-code" style="font-size: 0.75rem; color: var(--color-navy-dark);">DESPLEGADO</span>
        </div>
        <h3 class="milestone-title">Infraestructura, Auth & Red Segura</h3>
        <p class="milestone-desc">Estructura modular en CodeIgniter 4 con control de acceso por rol, validación CUIT de empresas, encriptación Bcrypt y persistencia relacional.</p>
        <ul class="milestone-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Portal corporativo responsive y gestión de sesiones</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Validación de CUIT y homologación empresarial</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Base de datos relacional MySQL InnoDB 3FN</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Protección CSRF y blindaje contra ataques web</li>
        </ul>
      </article>

      <!-- Tarjeta Fase 2 -->
      <article class="milestone-card abtc-card">
        <div class="milestone-header">
          <span class="milestone-tag tag-hito-2">FASE 2 - MARKETPLACE</span>
          <span class="tech-code" style="font-size: 0.75rem; color: var(--color-navy-dark);">OPERATIVO</span>
        </div>
        <h3 class="milestone-title">Inventario Activo & Matching Circular</h3>
        <p class="milestone-desc">Publicación de excedentes clasificados por resina (PE, PP, PVC, ABS, Nylon), motor de filtrado técnico y solicitudes de reserva entre plantas.</p>
        <ul class="milestone-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Catálogo de lotes con fichas técnicas y stock</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Buscador por fluidez (MFI), tipo y ubicación</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Gestión de reservas y matching entre empresas</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Panel de operaciones y seguimiento de pedidos</li>
        </ul>
      </article>

      <!-- Tarjeta Fase 3 -->
      <article class="milestone-card abtc-card">
        <div class="milestone-header">
          <span class="milestone-tag tag-hito-3">FASE 3 - ESCALABILIDAD</span>
          <span class="tech-code" style="font-size: 0.75rem; color: var(--color-navy-dark);">PRODUCCIÓN Q4</span>
        </div>
        <h3 class="milestone-title">Certificación ESG & Analítica Total</h3>
        <p class="milestone-desc">Panel de métricas de impacto cuantitativo en tiempo real, cálculo de CO2 evitado por tonelada reutilizada y trazabilidad integral de operaciones.</p>
        <ul class="milestone-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Dashboard analítico con precisión tabular</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Reportes descargables de huella de carbono evitada</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Certificados de economía circular para auditorías</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Integración y exportación de datos operativos</li>
        </ul>
      </article>
    </div>

    <!-- Inventario Interactivo de Materiales -->
    <div class="inventory-block abtc-card">
      <div class="inventory-header">
        <div>
          <h3 class="inventory-title">Inventario Activo de Polímeros & Equipamiento</h3>
          <p style="font-size: 0.88rem; color: var(--color-text-dark-muted); margin-top: 0.25rem;">
            Consulta lotes en tiempo real y solicita reservas con trazabilidad industrial.
          </p>
        </div>
        <div class="search-box-modular" role="search">
          <div class="input-icon-wrapper">
            <label for="search" class="visually-hidden">Buscar en el inventario de polímeros y descartes</label>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
            <input id="search" type="search" placeholder="Buscar PEAD, PP, scrap, moldes, Buenos Aires..." autocomplete="off" aria-label="Buscar en el inventario de polímeros y descartes">
          </div>
          <button type="button" id="clearSearch" class="btn btn-sm btn-ghost-dark" aria-label="Limpiar búsqueda de inventario">Limpiar</button>
        </div>
      </div>

      <!-- Filtros de Categoría -->
      <div class="filter-pills-bar" id="filterPills">
        <span class="filter-pill active" data-category="all">Todos los Lotes</span>
        <span class="filter-pill" data-category="polietileno">Polietileno (PEAD / PEBD)</span>
        <span class="filter-pill" data-category="polipropileno">Polipropileno (PP)</span>
        <span class="filter-pill" data-category="tecnicos">Técnicos (PVC / ABS / Nylon)</span>
        <span class="filter-pill" data-category="equipamiento">Matricería & Logística</span>
        <span id="searchCounter" class="tech-code" style="margin-left: auto; font-size: 0.8rem; color: var(--color-text-dark-muted);">Mostrando todos los recursos (6)</span>
      </div>

      <!-- Grilla de Tarjetas de Recursos -->
      <div class="resource-grid" id="resourceGrid">
        <?php if (!empty($resources)): ?>
          <?php foreach ($resources as $res): ?>
            <article class="resource-card" data-category="<?= esc($res['category_slug']) ?>" data-keywords="<?= esc($res['keywords']) ?>" data-id="<?= esc($res['id']) ?>">
              <div>
                <div class="resource-card-header">
                  <span class="chip-polymer"><?= esc($res['category_label']) ?></span>
                  <span class="chip-stock"><?= esc($res['stock']) ?></span>
                </div>
                <h4 class="resource-title"><?= esc($res['title']) ?></h4>
                <p class="resource-desc"><?= esc($res['description']) ?></p>
              </div>
              <div>
                <div class="resource-meta">
                  <div>Ubicación: <strong><?= esc($res['location']) ?></strong></div>
                  <div>Condición: <strong><?= esc($res['status']) ?></strong></div>
                </div>
                <div class="resource-actions">
                  <button type="button" class="btn btn-sm btn-primary request-btn" data-title="<?= esc($res['title']) ?>">Solicitar</button>
                  <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="<?= esc($res['id']) ?>">Ficha Técnica</button>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        <?php else: ?>
          <!-- Recursos Estáticos por Defecto -->
          <article class="resource-card" data-category="polietileno" data-keywords="pead polietileno granza molido inyeccion gba" data-id="1">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">PEAD INDUSTRIAL</span>
                <span class="chip-stock">180 kg</span>
              </div>
              <h4 class="resource-title">PEAD Molido Limpio</h4>
              <p class="resource-desc">Sobrante de inyección de baldes industriales. Pureza certificada, libre de metales, ideal para extrusión o compounding.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>San Martín, Buenos Aires</strong></div>
                <div>Condición: <strong>Molido industrial limpio</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="PEAD Molido Limpio">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="1">Ficha Técnica</button>
              </div>
            </div>
          </article>

          <article class="resource-card" data-category="polipropileno" data-keywords="pp polipropileno scrap rebaba inyeccion recortes" data-id="2">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">PP HOMOPOLÍMERO</span>
                <span class="chip-stock">320 kg</span>
              </div>
              <h4 class="resource-title">Scrap de PP Homopolímero</h4>
              <p class="resource-desc">Recortes limpios post-producción de envases rígidos. Trazabilidad de materia prima con índice MFI 12 controlado.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>Vicente López, Buenos Aires</strong></div>
                <div>Condición: <strong>Fardos prensados 80kg</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="Scrap de PP Homopolímero">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="2">Ficha Técnica</button>
              </div>
            </div>
          </article>

          <article class="resource-card" data-category="tecnicos" data-keywords="pvc abs nylon lote discontinuado compuestos resina" data-id="3">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">MATERIALES TÉCNICOS</span>
                <span class="chip-stock">450 kg</span>
              </div>
              <h4 class="resource-title">Lote Compuestos ABS & PVC</h4>
              <p class="resource-desc">Descarte de perfilería rígida y carcasas de electrodomésticos. Clasificación mecánica sin elastómeros ni caucho.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>Lomas de Zamora, Buenos Aires</strong></div>
                <div>Condición: <strong>Sacos industriales 25kg</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="Lote Compuestos ABS & PVC">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="3">Ficha Técnica</button>
              </div>
            </div>
          </article>

          <article class="resource-card" data-category="equipamiento" data-keywords="moldes pallets big bags contenedores matriceria racks" data-id="4">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">LOGÍSTICA & MATRICERÍA</span>
                <span class="chip-stock">85 unid.</span>
              </div>
              <h4 class="resource-title">Pallets Plásticos Reforzados</h4>
              <p class="resource-desc">Pallets de alta densidad 1200x1000x150mm. Capacidad de 1.200 kg en rack y 3.000 kg estático para almacenamiento interno.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>Pilar, Buenos Aires</strong></div>
                <div>Condición: <strong>Usado estructural intacto</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="Pallets Plásticos Reforzados">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="4">Ficha Técnica</button>
              </div>
            </div>
          </article>

          <article class="resource-card" data-category="polietileno" data-keywords="pebd film strech transparente rollo bobina" data-id="5">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">POLIETILENO PEBD</span>
                <span class="chip-stock">600 kg</span>
              </div>
              <h4 class="resource-title">Scrap Film PEBD Transparente</h4>
              <p class="resource-desc">Film termocontraíble stretch post-industrial sin adhesivos contaminantes ni polvo. Alta pureza para reciclado directo.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>Quilmes, Buenos Aires</strong></div>
                <div>Condición: <strong>Fardos de alta densidad</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="Scrap Film PEBD Transparente">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="5">Ficha Técnica</button>
              </div>
            </div>
          </article>

          <article class="resource-card" data-category="tecnicos" data-keywords="nylon pa6 pa66 grilon descarte inyeccion" data-id="6">
            <div>
              <div class="resource-card-header">
                <span class="chip-polymer">POLIAMIDA TÉCNICA</span>
                <span class="chip-stock">140 kg</span>
              </div>
              <h4 class="resource-title">Nylon PA6 Molido c/ Carga</h4>
              <p class="resource-desc">Poliamida 6 con 30% fibra de vidrio molida procedente de descarte automotriz. Alta rigidez estructural y resistencia térmica.</p>
            </div>
            <div>
              <div class="resource-meta">
                <div>Ubicación: <strong>Córdoba Capital, Córdoba</strong></div>
                <div>Condición: <strong>Tambores con desecante</strong></div>
              </div>
              <div class="resource-actions">
                <button type="button" class="btn btn-sm btn-primary request-btn" data-title="Nylon PA6 Molido c/ Carga">Solicitar</button>
                <button type="button" class="btn btn-sm btn-ghost-dark open-detail-btn" data-resource-id="6">Ficha Técnica</button>
              </div>
            </div>
          </article>
        <?php endif; ?>
      </div>

      <!-- Empty State -->
      <div id="noResultsState" class="empty-state hidden" style="display: none; text-align: center; padding: 3rem 1rem;">
        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: var(--color-text-dark-muted);"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <h4 style="margin: 0.75rem 0 0.25rem; font-size: 1.2rem; color: #171B33;">No se encontraron lotes de polímeros</h4>
        <p style="color: var(--color-text-dark-muted); font-size: 0.9rem;">Prueba con otros términos como 'PEAD', 'PP', 'Scrap' o restablece los filtros.</p>
        <button type="button" id="resetSearchBtn" class="btn btn-sm btn-ghost-dark" style="margin-top: 1rem;">Restablecer Filtros</button>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN 4: SEGURIDAD, COMPLIANCE & TRAZABILIDAD (<section class="tech-section">)
     ========================================================================== -->
<section class="tech-section section-dark" id="seguridad-infraestructura">
  <div class="hero-bg-grid"></div>
  <div class="section-wrapper" style="position: relative; z-index: 2;">
    <div class="section-header-block">
      <span class="section-eyebrow">ESTÁNDARES DE SEGURIDAD EMPRESARIAL & COMPLIANCE</span>
      <h2 class="section-title-dark">Confidencialidad, Trazabilidad & Certificación ESG</h2>
      <p class="section-desc-dark">
        MateriaX implementa protocolos de seguridad de grado industrial para garantizar la confidencialidad en transacciones B2B, homologación fiscal de contrapartes y trazabilidad física y documental de cada lote.
      </p>
    </div>

    <div class="tech-panel-asymmetric">
      <!-- Columna Izquierda: Blindaje Transaccional & Seguridad Corporativa -->
      <div class="tech-layer-card abtc-card">
        <div class="tech-card-header">
          <div class="brand-icon" style="width:34px; height:34px; font-size: 0.8rem; background: var(--color-blue-electric);">SEC</div>
          <h3 class="tech-card-title">Blindaje Transaccional & Control RBAC</h3>
        </div>
        <p class="tech-card-desc">
          Protección de datos industriales mediante cifrado de extremo a extremo, control de acceso basado en roles (RBAC) y resguardo de acuerdos de confidencialidad comercial.
        </p>

        <ul class="tech-checklist">
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div>
              <strong>Cifrado Transaccional & TLS 1.3:</strong>
              <span style="color: #CBD5E1; display: block; font-size: 0.82rem; margin-top: 2px;">Toda cotización, negociación de lotes y credenciales operan bajo túneles criptográficos blindados.</span>
            </div>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div>
              <strong>Homologación Fiscal y CUIT Verificado:</strong>
              <span style="color: #CBD5E1; display: block; font-size: 0.82rem; margin-top: 2px;">Validación estricta de personería jurídica y habilitación ambiental de plantas antes de operar.</span>
            </div>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div>
              <strong>Protección de Propiedad Intelectual & NDA:</strong>
              <span style="color: #CBD5E1; display: block; font-size: 0.82rem; margin-top: 2px;">Resguardo de geometrías propietarias en matricería, moldes y formulaciones plásticas.</span>
            </div>
          </li>
          <li>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            <div>
              <strong>Registro de Auditoría Inmutable:</strong>
              <span style="color: #CBD5E1; display: block; font-size: 0.82rem; margin-top: 2px;">Trazabilidad completa con marca de tiempo por cada solicitud, pesaje y retiro de planta.</span>
            </div>
          </li>
        </ul>
      </div>

      <!-- Columna Derecha: Trazabilidad de Materiales & Pasaporte Digital -->
      <div class="tech-layer-card highlight-red abtc-card">
        <div class="tech-card-header">
          <div class="brand-icon" style="background: var(--color-red-performance); width:34px; height:34px; font-size: 0.8rem;">ESG</div>
          <h3 class="tech-card-title">Cadena de Custodia & Pasaporte Digital</h3>
        </div>
        <p class="tech-card-desc">
          Trazabilidad física y documental del lote desde el pesaje en origen hasta su reincorporación en líneas de inyección, extrusión o rotomoldeo:
        </p>

        <!-- Diagrama de Pasos de Trazabilidad B2B -->
        <div class="db-relations-flow">
          <div class="db-relation-row">
            <span class="db-entity">1. Pesaje en Báscula <span class="badge-pk">Origen</span></span>
            <span class="db-cardinality-indicator">Precinto Digital</span>
            <span class="db-entity">Control Físico-Químico</span>
          </div>
          <div class="db-relation-row">
            <span class="db-entity">2. Homologación <span class="badge-fk">Matching</span></span>
            <span class="db-cardinality-indicator">MFI / Densidad</span>
            <span class="db-entity">Planta Receptora</span>
          </div>
          <div class="db-relation-row">
            <span class="db-entity">3. Despacho Seguro <span class="badge-pk">Logística</span></span>
            <span class="db-cardinality-indicator">Manifiesto B2B</span>
            <span class="db-entity">Transporte Habilitado</span>
          </div>
          <div class="db-relation-row">
            <span class="db-entity">4. Reingreso Productivo <span class="badge-fk">Destino</span></span>
            <span class="db-cardinality-indicator">Certificado ESG</span>
            <span class="db-entity">CO₂ Evitado Auditado</span>
          </div>
        </div>

        <!-- Matriz de Indicadores de Cumplimiento -->
        <div class="db-schema-matrix">
          <div class="db-table-pill">
            <span class="table-name">ISO 9001 / 14001</span>
            <span class="table-keys"><span class="badge-pk">CALIDAD</span></span>
          </div>
          <div class="db-table-pill">
            <span class="table-name">Manifiesto Carga</span>
            <span class="table-keys"><span class="badge-fk">DIGITAL</span></span>
          </div>
          <div class="db-table-pill">
            <span class="table-name">Reporte CO₂</span>
            <span class="table-keys"><span class="badge-pk">ESG</span></span>
          </div>
          <div class="db-table-pill">
            <span class="table-name">Trazabilidad Batch</span>
            <span class="table-keys"><span class="badge-fk">LOTE</span></span>
          </div>
          <div class="db-table-pill">
            <span class="table-name">Homologación CUIT</span>
            <span class="table-keys"><span class="badge-pk">AFIP</span></span>
          </div>
          <div class="db-table-pill">
            <span class="table-name">Custodia NDA</span>
            <span class="table-keys"><span class="badge-fk">LEGAL</span></span>
          </div>
        </div>

        <div class="db-integrity-note">
          <span class="note-title">CERTIFICACIÓN AMBIENTAL & HUELLA DE CARBONO:</span>
          <p>
            Cada operación completada emite automáticamente un informe de sustentabilidad empresarial con el balance exacto de material revalorizado y emisiones netas mitigadas.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN 5: DASHBOARD ANALÍTICO Y MÉTRICAS (<section class="dashboard-section">)
     ========================================================================== -->
<section class="dashboard-section section-dark" id="metricas">
  <div class="dashboard-container">
    <div class="section-header-block">
      <span class="section-eyebrow">DATA MATRIX & TRAZABILIDAD</span>
      <h2 class="section-title-dark">Dashboard de Métricas & Lotes en Tránsito</h2>
      <p class="section-desc-dark">
        Registro cuantitativo de operaciones circulares con formateo monoespaciado para máxima precisión tabular.
      </p>
    </div>

    <!-- 4 Tarjetas de Métricas Clave -->
    <div class="dashboard-metrics-summary">
      <div class="stat-box abtc-card">
        <div class="stat-box-title">Plástico Revalorizado</div>
        <div class="stat-box-val accent-blue"><?= esc($metrics['plastic_kg'] ?? '2,480.00') ?> <span style="font-size: 1.1rem; color: var(--color-text-light-muted);">KG</span></div>
        <div class="stat-box-footnote">+420 kg en el último ciclo mensual</div>
      </div>

      <div class="stat-box abtc-card">
        <div class="stat-box-title">Emisiones CO₂ Mitigadas</div>
        <div class="stat-box-val accent-green"><?= esc($metrics['co2_kg'] ?? '4,216.50') ?> <span style="font-size: 1.1rem; color: var(--color-text-light-muted);">KG</span></div>
        <div class="stat-box-footnote">Factor cálculo: 1.70 kg CO₂e / kg reciclado</div>
      </div>

      <div class="stat-box abtc-card">
        <div class="stat-box-title">Empresas Certificadas</div>
        <div class="stat-box-val"><?= esc($metrics['companies_count'] ?? '54') ?></div>
        <div class="stat-box-footnote">100% CUIT & Razón Social auditadas</div>
      </div>

      <div class="stat-box abtc-card">
        <div class="stat-box-title">Tasa de Efectividad B2B</div>
        <div class="stat-box-val accent-red"><?= esc($metrics['effectiveness'] ?? '94.8%') ?></div>
        <div class="stat-box-footnote">Tiempo promedio de matching: 48h</div>
      </div>
    </div>

    <!-- Tabla de Datos con Tipografía Monoespaciada Obligatoria -->
    <div class="data-table-wrapper abtc-table-wrapper abtc-card">
      <div class="table-header-toolbar">
        <div class="table-title">Trazabilidad de Lotes y Operaciones Recientes</div>
        <span class="tech-code" style="font-size: 0.78rem; color: var(--color-text-light-muted);">
          MODO: TIEMPO REAL | TABLA: `operaciones`
        </span>
      </div>

      <div class="table-responsive">
        <table class="data-table abtc-table" aria-label="Tabla de operaciones recientes y volumen">
          <thead>
            <tr>
              <th scope="col">LOTE ID</th>
              <th scope="col">FECHA REGISTRO</th>
              <th scope="col">TIPO POLÍMERO</th>
              <th scope="col">PLANTA ORIGEN</th>
              <th scope="col">VOLUMEN (KG) / CAPACIDAD</th>
              <th scope="col">ESTADO DE TRANSFERENCIA</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($operations)): ?>
              <?php foreach ($operations as $op): ?>
                <tr>
                  <td class="table-id"><?= esc($op['id']) ?></td>
                  <td class="table-date"><?= esc($op['date']) ?></td>
                  <td><strong><?= esc($op['polymer']) ?></strong></td>
                  <td><?= esc($op['plant']) ?></td>
                  <td>
                    <div class="table-metric"><?= esc($op['volume']) ?> KG</div>
                    <div class="volume-bar-track">
                      <div class="volume-bar-fill" style="width: <?= esc($op['percentage']) ?>%;"></div>
                    </div>
                  </td>
                  <td>
                    <span class="status-badge-live <?= esc($op['status_class']) ?>">
                      <span class="status-dot-pulse" style="width:6px; height:6px;"></span>
                      <?= esc($op['status']) ?>
                    </span>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td class="table-id">#OP-2026-081</td>
                <td class="table-date">2026-08-11 14:32</td>
                <td><strong>PEAD Inyección Granza</strong></td>
                <td>San Martín (GBA Norte)</td>
                <td>
                  <div class="table-metric">1,200.00 KG</div>
                  <div class="volume-bar-track">
                    <div class="volume-bar-fill" style="width: 85%;"></div>
                  </div>
                </td>
                <td>
                  <span class="status-badge-live badge-complete">
                    <span class="status-dot-pulse" style="width:6px; height:6px;"></span>
                    COMPLETADO
                  </span>
                </td>
              </tr>

              <tr>
                <td class="table-id">#OP-2026-082</td>
                <td class="table-date">2026-08-12 09:15</td>
                <td><strong>PP Homopolímero Scrap</strong></td>
                <td>Vicente López (GBA)</td>
                <td>
                  <div class="table-metric">320.00 KG</div>
                  <div class="volume-bar-track">
                    <div class="volume-bar-fill" style="width: 45%;"></div>
                  </div>
                </td>
                <td>
                  <span class="status-badge-live badge-process">
                    <span class="status-dot-pulse" style="width:6px; height:6px;"></span>
                    EN NEGOCIACIÓN
                  </span>
                </td>
              </tr>

              <tr>
                <td class="table-id">#OP-2026-083</td>
                <td class="table-date">2026-08-13 11:40</td>
                <td><strong>Lote ABS + PVC Compuestos</strong></td>
                <td>Lomas de Zamora (BSAS)</td>
                <td>
                  <div class="table-metric">450.00 KG</div>
                  <div class="volume-bar-track">
                    <div class="volume-bar-fill fill-red" style="width: 60%;"></div>
                  </div>
                </td>
                <td>
                  <span class="status-badge-live badge-review">
                    <span class="status-dot-pulse" style="width:6px; height:6px;"></span>
                    AUDITANDO CUIT
                  </span>
                </td>
              </tr>

              <tr>
                <td class="table-id">#OP-2026-084</td>
                <td class="table-date">2026-08-13 18:05</td>
                <td><strong>Film Stretch PEBD Cristal</strong></td>
                <td>Quilmes (GBA Sur)</td>
                <td>
                  <div class="table-metric">600.00 KG</div>
                  <div class="volume-bar-track">
                    <div class="volume-bar-fill" style="width: 70%;"></div>
                  </div>
                </td>
                <td>
                  <span class="status-badge-live badge-process">
                    <span class="status-dot-pulse" style="width:6px; height:6px;"></span>
                    EN NEGOCIACIÓN
                  </span>
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN 5.5: MENSAJE INSTITUCIONAL ESTILO ABTC
     ========================================================================== -->
<section class="message-section section-light" style="background: var(--color-gray-surface); padding: 100px 1.5rem; position: relative; overflow: hidden;">
  <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); opacity: 0.05; pointer-events: none;">
    <img src="<?= base_url('assets/logos/isotipo-black.png') ?>" alt="" style="width: 360px; height: 360px; object-fit: contain;">
  </div>
  <div style="max-width: 900px; margin: 0 auto; text-align: center; position: relative; z-index: 2;">
    <p style="font-family: var(--font-mono); font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; color: #C53030; margin-bottom: 2rem;">Un mensaje de nuestro equipo</p>
    <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 800; line-height: 1.05; text-transform: uppercase; color: var(--color-navy-dark); margin: 0;">
      <span>EL FUTURO DE LA </span><br>
      <span>ECONOMÍA </span><span style="color: #C53030;">CIRCULAR</span><br>
      <span style="color: #C53030;">EMPIEZA</span><span> AQUÍ</span>
    </h2>
  </div>
</section>

<?= $this->endSection() ?>
