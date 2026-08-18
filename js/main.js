// MATERIAX PLATFORM - CORE JAVASCRIPT & LOCALSTORAGE SYSTEM
// Especialidad Informática 2026 - Instituto Técnico Río Tercero

const STORAGE_KEY = 'materiax_requests';

// Mock database for resource details modal
const RESOURCE_DATA = {
  1: {
    title: "PEAD Molido Limpio",
    category: "Polietileno (PEAD)",
    stock: "180 kg",
    location: "San Martín, Buenos Aires",
    status: "Excelente pureza (Molido industrial)",
    packaging: "Big Bags de 200 kg",
    description: "Lote proveniente de sobrantes de inyección de baldes industriales. Clasificado por color, libre de metálicos y con bajo índice de fluidez variable. Excelente desempeño para extrusión / compounding."
  },
  2: {
    title: "Scrap de PP Homopolímero",
    category: "Polipropileno (PP)",
    stock: "320 kg",
    location: "Vicente López, Buenos Aires",
    status: "Recortes en prensa",
    packaging: "Fardos consolidados de 80 kg",
    description: "Recortes limpios post-producción de envases rígidos. Trazabilidad de materia prima virgen con índice MFI 12. Ideal para mezclas de inyección de piezas de segunda línea."
  },
  3: {
    title: "Lote Compuestos ABS & PVC",
    category: "Materiales Técnicos",
    stock: "450 kg",
    location: "Lomas de Zamora, Buenos Aires",
    status: "Seleccionado y ensacado",
    packaging: "Sacos industriales de 25 kg",
    description: "Descarte de perfilería rígida de PVC y carcasas de ABS industrial. Clasificación mecánica completa, sin presencia de elastómeros ni caucho."
  },
  4: {
    title: "Pallets Plásticos & Cajas Reusables",
    category: "Equipamiento & Logística",
    stock: "85 unidades",
    location: "Pilar, Buenos Aires",
    status: "Usado estructural intacto",
    packaging: "Palletizado listo para carga",
    description: "Pallets plásticos reforzados (1200x1000x150mm) de polietileno de alta densidad. Soportan hasta 1.200 kg en rack y 3.000 kg estático."
  },
  5: {
    title: "Scrap Film PEBD Transparente",
    category: "Polietileno (PEBD)",
    stock: "600 kg",
    location: "Quilmes, Buenos Aires",
    status: "Fardos prensados limpios",
    packaging: "Fardos de alta densidad",
    description: "Film termocontraíble y stretch film transparente de desembalaje de pallets de insumos limpios. Sin etiquetas adhesivas ni polvo acumulado."
  },
  6: {
    title: "Nylon PA6 Molido c/ Carga",
    category: "Materiales Técnicos",
    stock: "140 kg",
    location: "Córdoba Capital, Córdoba",
    status: "Molido homogeneizado",
    packaging: "Tambores herméticos con desecante",
    description: "Poliamida 6 con 30% fibra de vidrio molida procedente de descarte de autopartes. Estabilidad térmica alta y rigidez estructural óptima."
  }
};

// DOM Elements Selection (Safe Queries)
const searchInput = document.querySelector('#search');
const clearButton = document.querySelector('#clearSearch');
const filterPills = document.querySelectorAll('.filter-pill');
const cards = document.querySelectorAll('.resource-card');
const searchCounter = document.querySelector('#searchCounter');
const noResultsState = document.querySelector('#noResultsState');
const resetSearchBtn = document.querySelector('#resetSearchBtn');
const navLinks = document.querySelectorAll('.topnav a, .nav-links a');
const menuToggle = document.querySelector('#menuToggle');
const topNav = document.querySelector('#topNav');

// Modal Elements
const accessModal = document.querySelector('#accessModal');
const detailModal = document.querySelector('#detailModal');
const adminModal = document.querySelector('#adminModal');
const accessForm = document.querySelector('#accessForm');
const adminBadgeCount = document.querySelector('#adminBadgeCount');
const adminRequestsList = document.querySelector('#adminRequestsList, #requestsListContainer');

let currentCategory = 'all';

// LOCALSTORAGE UTILITIES
function getStoredRequests() {
  try {
    const raw = localStorage.getItem(STORAGE_KEY);
    return raw ? JSON.parse(raw) : [];
  } catch (e) {
    console.error('Error al leer de LocalStorage:', e);
    return [];
  }
}

function saveRequestToLocalStorage(requestData) {
  const requests = getStoredRequests();
  requests.unshift(requestData); // newest first
  try {
    localStorage.setItem(STORAGE_KEY, JSON.stringify(requests));
  } catch (e) {
    console.error('Error al guardar en LocalStorage:', e);
  }
  updateAdminBadge();
}

function clearStoredRequests() {
  try {
    localStorage.removeItem(STORAGE_KEY);
  } catch (e) {
    console.error('Error al borrar de LocalStorage:', e);
  }
  updateAdminBadge();
  renderAdminRequests();
  showToast('Todas las solicitudes se han borrado de LocalStorage', 'LocalStorage');
}

function updateAdminBadge() {
  const requests = getStoredRequests();
  const badges = document.querySelectorAll('#adminBadgeCount, .badge-count');
  badges.forEach(badge => {
    badge.textContent = requests.length;
  });
}

function renderAdminRequests() {
  const listContainer = document.querySelector('#adminRequestsList, #requestsListContainer');
  if (!listContainer) return;
  const requests = getStoredRequests();

  if (requests.length === 0) {
    listContainer.innerHTML = `
      <div class="empty-state" style="padding:30px 10px; text-align:center;">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin-bottom:0.5rem; opacity:0.6;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        <h4 style="margin:8px 0 4px; font-family:var(--font-titles, sans-serif); color:#FFFFFF;">Sin solicitudes guardadas</h4>
        <p style="font-size:0.85rem; margin:0; color:var(--color-text-light-muted, #9BA3B8);">Completa cualquier formulario de la página para registrar solicitudes aquí.</p>
      </div>
    `;
    return;
  }

  listContainer.innerHTML = requests.map(req => `
    <div class="request-item-card">
      <div class="request-item-header">
        <strong>${escapeHtml(req.company)}</strong>
        <span class="request-time">${escapeHtml(req.timestamp)}</span>
      </div>
      <div class="request-item-body">
        <div><strong>CUIT:</strong> ${escapeHtml(req.cuit)}</div>
        <div><strong>Email:</strong> ${escapeHtml(req.email)}</div>
        <div><strong>Interés:</strong> ${escapeHtml(req.interest)}</div>
        ${req.message ? `<div><strong>Detalles:</strong> ${escapeHtml(req.message)}</div>` : ''}
      </div>
    </div>
  `).join('');
}

function escapeHtml(str) {
  if (!str) return '';
  return String(str).replace(/[&<>"']/g, function(m) {
    return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m];
  });
}

function exportRequestsJSON() {
  const requests = getStoredRequests();
  if (requests.length === 0) {
    showToast('No hay datos para exportar', 'LocalStorage');
    return;
  }
  const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(requests, null, 2));
  const downloadAnchor = document.createElement('a');
  downloadAnchor.setAttribute("href", dataStr);
  downloadAnchor.setAttribute("download", `materiax_solicitudes_${Date.now()}.json`);
  document.body.appendChild(downloadAnchor);
  downloadAnchor.click();
  downloadAnchor.remove();
  showToast('Archivo JSON descargado exitosamente', 'Exportar');
}

// Toast Notification Utility (Guarded against missing container)
function showToast(message, title = 'MateriaX System') {
  let container = document.querySelector('#toastContainer');
  if (!container) {
    container = document.createElement('div');
    container.id = 'toastContainer';
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
    <div>
      <strong style="display:block; font-size:0.85rem;">${escapeHtml(title)}</strong>
      <span>${escapeHtml(message)}</span>
    </div>
  `;
  container.appendChild(toast);
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transition = 'opacity 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}

// Filter Resources
function filterResources() {
  const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
  let visibleCount = 0;
  const allCards = document.querySelectorAll('.resource-card');

  allCards.forEach((card) => {
    const cardCategory = card.dataset.category || '';
    const keywords = `${card.textContent} ${card.dataset.keywords || ''}`.toLowerCase();
    
    const matchesCategory = currentCategory === 'all' || cardCategory === currentCategory;
    const matchesSearch = !query || keywords.includes(query);

    if (matchesCategory && matchesSearch) {
      card.classList.remove('hidden');
      card.style.display = '';
      visibleCount++;
    } else {
      card.classList.add('hidden');
      card.style.display = 'none';
    }
  });

  // Update counter
  if (searchCounter) {
    if (visibleCount === allCards.length) {
      searchCounter.textContent = `Mostrando todos los recursos (${allCards.length})`;
    } else {
      searchCounter.textContent = `Mostrando ${visibleCount} de ${allCards.length} recursos`;
    }
  }

  // Handle Empty State
  if (noResultsState) {
    if (visibleCount === 0) {
      noResultsState.classList.remove('hidden');
      noResultsState.style.display = 'block';
    } else {
      noResultsState.classList.add('hidden');
      noResultsState.style.display = 'none';
    }
  }
}

// Event Listeners for Search & Filter
searchInput?.addEventListener('input', () => filterResources());

clearButton?.addEventListener('click', () => {
  if (!searchInput) return;
  searchInput.value = '';
  currentCategory = 'all';
  filterPills.forEach(p => p.classList.toggle('active', p.dataset.category === 'all'));
  filterResources();
  searchInput.focus();
  showToast('Búsqueda restablecida', 'Filtros');
});

resetSearchBtn?.addEventListener('click', () => {
  if (searchInput) searchInput.value = '';
  currentCategory = 'all';
  filterPills.forEach(p => p.classList.toggle('active', p.dataset.category === 'all'));
  filterResources();
});

filterPills.forEach((pill) => {
  pill.addEventListener('click', () => {
    filterPills.forEach(p => p.classList.remove('active'));
    pill.classList.add('active');
    currentCategory = pill.dataset.category || 'all';
    filterResources();
  });
});

// Footer Category Links Quick Filter
document.querySelectorAll('[data-filter-link]').forEach(link => {
  link.addEventListener('click', () => {
    const category = link.dataset.filterLink;
    if (category) {
      currentCategory = category;
      filterPills.forEach(p => p.classList.toggle('active', p.dataset.category === category));
      filterResources();
      const targetSection = document.querySelector('#roadmap-inventario, #modulos-hitos');
      if (targetSection) {
        targetSection.scrollIntoView({ behavior: 'smooth' });
      }
    }
  });
});

// Mobile Menu Toggle
menuToggle?.addEventListener('click', () => {
  topNav?.classList.toggle('mobile-open');
});

// Nav Active State Smooth Scroll
navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    navLinks.forEach((item) => item.classList.remove('active'));
    link.classList.add('active');
    topNav?.classList.remove('mobile-open');
  });
});

// Modal Open/Close Logic
function openModal(modal) {
  if (!modal) return;
  modal.classList.add('active');
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
}

function closeModal(modal) {
  if (!modal) return;
  modal.classList.remove('active');
  modal.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
}

// Access Modal Trigger Buttons
document.querySelector('#openAccessModalNav')?.addEventListener('click', () => openModal(accessModal));
document.querySelector('#openAccessModalHero')?.addEventListener('click', () => openModal(accessModal));
document.querySelector('#openAccessModalCta')?.addEventListener('click', () => openModal(accessModal));

document.querySelector('#closeAccessModal')?.addEventListener('click', () => closeModal(accessModal));
document.querySelector('#cancelAccessModal')?.addEventListener('click', () => closeModal(accessModal));

accessModal?.addEventListener('click', (e) => {
  if (e.target === accessModal) closeModal(accessModal);
});

// Footer Horizontal Form Integration
const footerContactForms = document.querySelectorAll('.horizontal-contact-form');
footerContactForms.forEach(form => {
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const emailInput = form.querySelector('input[type="email"]');
    const emailVal = emailInput ? emailInput.value.trim() : '';
    openModal(accessModal);
    const modalEmail = document.querySelector('#companyEmail');
    if (modalEmail && emailVal) {
      modalEmail.value = emailVal;
    }
    const modalMsg = document.querySelector('#formMessage');
    if (modalMsg && !modalMsg.value) {
      modalMsg.value = 'Solicitud de conexión / consulta técnica desde pie de página.';
    }
  });
});

// Form Submission Handling -> Save to LocalStorage!
accessForm?.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const company = document.querySelector('#companyName')?.value.trim() || 'Empresa';
  const cuit = document.querySelector('#companyCuit')?.value.trim() || 'N/A';
  const email = document.querySelector('#companyEmail')?.value.trim() || 'N/A';
  const interestSelect = document.querySelector('#interestType');
  const interest = interestSelect ? (interestSelect.options[interestSelect.selectedIndex]?.text || interestSelect.value) : 'General';
  const message = document.querySelector('#formMessage')?.value.trim() || '';

  const newRequest = {
    id: Date.now(),
    timestamp: new Date().toLocaleString('es-AR', { dateStyle: 'short', timeStyle: 'medium' }),
    company,
    cuit,
    email,
    interest,
    message
  };

  saveRequestToLocalStorage(newRequest);
  closeModal(accessModal);
  accessForm.reset();

  showToast(`¡Solicitud de ${company} guardada en LocalStorage!`, 'Guardado Exitoso');
});

// Admin Modal Triggers & Actions
document.querySelector('#openAdminModalBtn')?.addEventListener('click', () => {
  renderAdminRequests();
  openModal(adminModal);
});
document.querySelector('#closeAdminModal')?.addEventListener('click', () => closeModal(adminModal));
document.querySelector('#closeAdminBtn')?.addEventListener('click', () => closeModal(adminModal));
document.querySelector('#clearStorageBtn')?.addEventListener('click', clearStoredRequests);
document.querySelector('#exportStorageBtn')?.addEventListener('click', exportRequestsJSON);

adminModal?.addEventListener('click', (e) => {
  if (e.target === adminModal) closeModal(adminModal);
});

// Detail Modal Trigger & Robust Populating
document.querySelectorAll('.open-detail-btn').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const id = btn.dataset.resourceId;
    const data = RESOURCE_DATA[id];

    if (data) {
      const titleEl = document.querySelector('#detailTitle');
      const catEl = document.querySelector('#detailCategory, #detailBadgeCat');
      const descEl = document.querySelector('#detailDescription, #detailDesc');
      const stockEl = document.querySelector('#detailStock, #detailVolume');
      const locEl = document.querySelector('#detailLocation');
      const statusEl = document.querySelector('#detailStatus, #detailBadgeStatus');
      const packEl = document.querySelector('#detailPackaging, #detailPresentation');

      if (titleEl) titleEl.textContent = data.title;
      if (catEl) catEl.textContent = data.category;
      if (descEl) descEl.textContent = data.description;
      if (stockEl) stockEl.textContent = data.stock;
      if (locEl) locEl.textContent = data.location;
      if (statusEl) statusEl.textContent = data.status;
      if (packEl) packEl.textContent = data.packaging;

      const detailReqBtn = document.querySelector('#detailRequestBtn, #requestLotBtn');
      if (detailReqBtn) {
        detailReqBtn.onclick = () => {
          closeModal(detailModal);
          openModal(accessModal);
          const msgField = document.querySelector('#formMessage');
          if (msgField) msgField.value = `Consulta por lote #${id}: ${data.title} (${data.stock})`;
        };
      }

      openModal(detailModal);
    }
  });
});

// Direct Request Buttons on Cards
document.querySelectorAll('.request-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const title = btn.dataset.title || 'Lote de material';
    openModal(accessModal);
    const msgField = document.querySelector('#formMessage');
    if (msgField) msgField.value = `Solicitud de reserva para: ${title}`;
  });
});

document.querySelector('#closeDetailModal')?.addEventListener('click', () => closeModal(detailModal));
document.querySelector('#closeDetailBtn')?.addEventListener('click', () => closeModal(detailModal));

detailModal?.addEventListener('click', (e) => {
  if (e.target === detailModal) closeModal(detailModal);
});

// Close modals on Escape key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    closeModal(accessModal);
    closeModal(detailModal);
    closeModal(adminModal);
  }
});

// ScrollSpy para actualizar el link activo en la barra de navegación al hacer scroll
const trackedSections = document.querySelectorAll('section[id], footer[id]');
if ('IntersectionObserver' in window && trackedSections.length > 0) {
  const scrollSpyObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const currentId = entry.target.getAttribute('id');
        navLinks.forEach(link => {
          const href = link.getAttribute('href') || '';
          if (href === `#${currentId}` || href.endsWith(`#${currentId}`) || link.hash === `#${currentId}`) {
            navLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
          }
        });
      }
    });
  }, { rootMargin: '-20% 0px -70% 0px' });

  trackedSections.forEach(sec => scrollSpyObserver.observe(sec));
}

// Initialize Badge & Filters
updateAdminBadge();
filterResources();
