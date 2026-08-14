# MateriaX - Red Industrial de Reutilización Circular

MateriaX es una plataforma web corporativa desarrollada para el trabajo de anteproyecto de la Especialidad Informática 2026 (**Instituto Técnico Río Tercero**), integrando las materias:
- **Base de Datos**
- **Laboratorio de Programación**
- **Laboratorio de Aplicaciones II**

---

## 🎨 Sistema de Diseño Visual (Inspiración ABTC)

La interfaz adopta una arquitectura *single-scroll* de 6 bloques modulares con la paleta de colores oficial:
- **Azul Marino Oscuro / Pizarra (`#171B33`):** Fondos oscuros primarios, texto estructural y vectores.
- **Azul Eléctrico Tecnológico (`#2D4CFF`):** Botones principales, enlaces activos y nodos de red.
- **Rojo de Alto Rendimiento (`#FF2C2F`):** Acentos críticos, destacados de métricas y alertas.
- **Blanco Neutro y Gris Superficie (`#FFFFFF` / `#F4F5F8`):** Fondos de tarjetas y secciones claras.
- **Tipografía:** *Barlow* (Títulos H1 con sombras en capas), *Plus Jakarta Sans* (Cuerpo de texto) y *JetBrains Mono* (Cifras numéricas, IDs y datos tabulares).

---

## 📐 Estructura Modular de 6 Secciones

1. **SECCIÓN 0: Header Flotante (`<header class="navbar-floating">`)**
   - Imagotipo oficial MateriaX a la izquierda.
   - Indicador de estado del sistema monoespaciado (`SISTEMA: ONLINE | V1.0 - CODEIGNITER 4 MVC`).
   - Navegación principal, contador de solicitudes y botón de acceso tipo *ghost*.
2. **SECCIÓN 1: Hero Section (`<section class="hero-section">`)**
   - Fondo oscuro `#171B33` con malla técnica a 45°.
   - H1 con sombras tipográficas en capas y subtítulo de alto contraste.
   - CTAs primario (`#2D4CFF`) y secundario *ghost*.
   - Panel de especificaciones técnicas de rotomoldeo y métricas rápidas.
3. **SECCIÓN 2: Propuesta de Valor y Roles (`<section class="value-prop-section">`)**
   - Matriz de 4 roles: **Visitante Público**, **Empresa (Cliente)**, **Administrador/Auditor** y **Operador Interno**.
4. **SECCIÓN 3: Grilla de Módulos e Hitos (`<section class="modules-section">`)**
   - Fondo claro `#F4F5F8` con layout en 3 columnas: **Hito 1 (Fundación & Auth)**, **Hito 2 (Core B2B & Catálogo)** e **Hito Final (Dashboard & Integración)**.
   - Catálogo interactivo de polímeros (PE, PP, PVC, ABS, Nylon) con filtros y buscador.
5. **SECCIÓN 4: Infraestructura y Seguridad (`<section class="tech-section">`)**
   - Arquitectura MVC en CodeIgniter 4 (`Controllers`, `Models`, `Views`).
   - Blindaje backend: Protección CSRF, prevención de SQL Injection y hash de contraseñas con Bcrypt.
   - Mapeo de tablas SQL (`usuarios`, `roles`, `empresas`, `recursos`, `solicitudes`, `operaciones`, `sesiones`).
6. **SECCIÓN 5: Dashboard Analítico y Métricas (`<section class="dashboard-section">`)**
   - Tarjetas de impacto cuantitativo (KG revalorizados, CO2 mitigado).
   - Tabla de trazabilidad con tipografía monoespaciada obligatoria y barras de volumen en `#2D4CFF` y `#FF2C2F`.
7. **SECCIÓN 6: Footer Corporativo (`<footer class="footer-corporate">`)**
   - Formulario plano horizontal para consultas directas.
   - Enlaces modulares y créditos institucionales académicos exigidos para ITR3 2026.

---

## 📂 Estructura del Código

```text
├── app/
│   └── Views/
│       ├── home.php                 # Vista modular principal para CodeIgniter 4
│       └── layouts/
│           └── main.php             # Layout maestro con directivas CI4
├── assets/
│   └── logos/
│       ├── isotipo-materiax.svg     # Monograma circular oficial
│       └── logo-materiax.svg        # Imagotipo completo
├── css/
│   └── styles.css                   # Sistema de estilos ABTC completo
├── js/
│   └── main.js                      # Lógica interactiva, filtros, modales y LocalStorage
├── index.html                       # Página web principal (standalone / estática)
├── docs/
│   └── anteproyecto_materiax.md     # Documentación técnica del anteproyecto
└── .gemini/rules/
    └── sistema_diseno_materiax.md   # Regla de espacio de trabajo persistente
```
