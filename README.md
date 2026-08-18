# MateriaX - Red Industrial de Reutilización Circular

MateriaX es una plataforma web corporativa desarrollada para el trabajo de anteproyecto de la Especialidad Informática 2026 (**Instituto Técnico Río Tercero**), integrando las materias:
- **Base de Datos**
- **Laboratorio de Programación**
- **Laboratorio de Aplicaciones II**

---

## 🎨 Sistema de Diseño Visual (Estilo Corporativo ABTC)

La interfaz adopta una arquitectura *single-scroll* de 6 bloques modulares con la paleta de colores oficial:
- **Azul Marino Oscuro / Pizarra (`#171B33`):** Fondos oscuros primarios, texto estructural, botones primarios y acentos.
- **Azul Celeste Institucional (`#38BDF8` / `#0284C7`):** Enlaces activos, insignias de estado y acentos sutiles.
- **Rojo de Rendimiento (`#EF4444` / `#C53030`):** Acentos críticos, destacados de métricas y alertas.
- **Blanco Neutro y Gris Superficie (`#FFFFFF` / `#F4F5F8`):** Fondos de tarjetas y secciones claras.
- **Tipografía:** *Barlow* (Títulos H1 y displays), *Plus Jakarta Sans* (Cuerpo de texto) y *JetBrains Mono* (Cifras numéricas, IDs y datos tabulares).

---

## 📐 Estructura Modular de 6 Secciones

1. **SECCIÓN 0: Header Flotante (`<header class="navbar-floating">`)**
   - Isotipo circular oficial MateriaX a la izquierda.
   - Navegación principal con ScrollSpy (`#inicio`, `#propuesta-roles`, `#roadmap-inventario`, `#seguridad-infraestructura`, `#metricas`, `#contacto`).
   - Contador dinámico de solicitudes y botón de acceso corporativo.
2. **SECCIÓN 1: Hero Section (`<section class="hero-section">`)**
   - Fondo oscuro `#171B33` con malla técnica a 45°.
   - H1 tipográfico de alto contraste y subtítulo corporativo.
   - CTAs de navegación hacia inventario y apertura del modal de acceso.
   - Panel de especificaciones técnicas de rotomoldeo y métricas rápidas.
3. **SECCIÓN 2: Propuesta de Valor y Roles (`<section class="value-prop-section">`)**
   - Matriz de roles del ecosistema: **Administrador del Sistema / Moderador (Superadmin)**, **Empresa Verificada (Núcleo B2B Activo - Oferente / Demandante)** y **Visitante / Usuario No Registrado**.
4. **SECCIÓN 3: Roadmap & Inventario Activo (`<section class="modules-section">`)**
   - Fondo claro `#F4F5F8` con layout de 3 columnas para fases de escalabilidad: **Fase 1 (Onboarding & Auth)**, **Fase 2 (Marketplace & Matching)** y **Fase 3 (Certificación ESG & Analítica)**.
   - Catálogo interactivo de polímeros (PEAD, PP, PVC, ABS, PEBD, Nylon) con filtros dinámicos, buscador en tiempo real y fichas técnicas.
5. **SECCIÓN 4: Infraestructura, Seguridad & Compliance (`<section class="tech-section">`)**
   - Arquitectura MVC en CodeIgniter 4 (`Controllers`, `Models`, `Views`).
   - Blindaje backend: Control RBAC, cifrado TLS 1.3, protección CSRF, prevención de SQL Injection y hash Bcrypt.
   - Diagrama de flujo de cadena de custodia, pesaje en báscula y pasaporte digital de materiales.
6. **SECCIÓN 5: Dashboard Analítico y Métricas (`<section class="dashboard-section">`)**
   - Tarjetas de impacto cuantitativo (KG revalorizados, CO2 mitigado, empresas certificadas, tasa de efectividad).
   - Tabla de trazabilidad con tipografía monoespaciada obligatoria y barras de volumen.
7. **SECCIÓN 6: Footer Corporativo (`<footer class="footer-corporate">`)**
   - Formulario plano horizontal para consultas directas conectado con el modal de acceso.
   - Enlaces modulares y créditos institucionales académicos exigidos para ITR3 2026.

---

## 📂 Estructura del Código

```text
├── app/
│   ├── Controllers/
│   │   ├── AuthController.php       # Controlador de registro, login y sesiones
│   │   └── BaseController.php       # Controlador base con servicios
│   ├── Models/
│   │   └── UserModel.php            # Modelo de usuarios y validaciones relacionales
│   └── Views/
│       ├── home.php                 # Vista modular principal para CodeIgniter 4
│       └── layouts/
│           └── main.php             # Layout maestro con directivas CI4
├── assets/
│   └── logos/
│       ├── isotipo-black.png        # Isotipo circular oficial en alta resolución
│       ├── isotipo-materiax.svg     # Monograma circular oficial vector
│       └── logo-materiax.svg        # Imagotipo completo vector
├── css/
│   ├── abtc-theme.css               # Sistema de diseño base estilo ABTC corporativo
│   └── styles.css                   # Sistema de estilos completo de la plataforma
├── js/
│   └── main.js                      # Lógica interactiva, filtros, modales y LocalStorage
├── index.html                       # Página web principal (standalone / estática)
├── docs/
│   └── anteproyecto_materiax.md     # Documentación técnica del anteproyecto
└── .gemini/rules/
    ├── git_sync.md                  # Regla de sincronización Git y commits semánticos
    └── sistema_diseno_materiax.md   # Regla de sistema de diseño y paleta oficial
```
