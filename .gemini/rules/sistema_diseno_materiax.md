# Sistema de Diseño, Identidad de Marca y Estándares Técnicos - MateriaX

Este documento rige la identidad visual, el uso de marca y los lineamientos técnicos para el desarrollo de la plataforma MateriaX.

---

## 🏷️ 1. Identidad de Marca y Uso de Logos

### Componentes de Marca
1. **Isotipo Circular (Monograma):**
   - Círculo sólido que encierra la silueta geométrica dinámica.
   - *Aplicaciones:* Favicon del navegador, badges de verificación de empresas, mini-iconos de navegación móvil y marcas de agua de fondo a baja opacidad (`opacity: 0.05` a `0.15`).
2. **Logotipo Tipográfico (`materia x`):**
   - Tipografía técnica geométrica en minúsculas con detalles de autor: asta descendente pronunciada en la letra **r** y remate en ángulo en la letra **x**.
   - *Aplicaciones:* Bloques de encabezado, marcas compartidas y menciones horizontales de marca.
3. **Imagotipo Completo (Isotipo + Logotipo):**
   - Composición vertical centrada o apilada.
   - *Aplicaciones:* Navbar principal, pie de página (Footer), modales de Login/Registro y portadas de entrega académica (Anteproyecto, Canvas, Slides, PDF).

### Comportamiento de Color del Logo:
- **Isotipo Circular Oficial:** Círculo negro con silueta geométrica interior en blanco. Se utiliza en su versión original en toda la interfaz (navbar, footer, marca de agua y favicon) sin aplicar inversiones cromáticas ni filtros (`filter: invert(1)`).
- **Dimensiones:** Tamaño prominente (`48px` en Header y Footer, `360px` para marcas de agua a opacidad `0.05`).

---

## 🎨 2. Sistema Cromático (Estilo ABTC Corporativo — Sin Neones)

| Color | HEX / RGBA | Rol en la Interfaz | Sensación y Función |
| :--- | :--- | :--- | :--- |
| **Azul Marino Oscuro / Pizarra** | `#171B33` | Fondos oscuros, texto estructural, botones primarios, acentos | Solidez institucional, autoridad y estabilidad. |
| **Gris Superficie** | `#F4F5F8` | Fondos de secciones claras, contenedores de tarjetas | Limpieza, aireado espacial (*whitespace*) y orden. |
| **Blanco Neutro** | `#FFFFFF` | Fondos puros, tarjetas elevadas, texto sobre oscuro | Máxima legibilidad y contraste. |
| **Gris Muted** | `#4A5568` / `#718096` | Texto secundario, etiquetas, bordes | Jerarquía visual sin recurrir a colores saturados. |
| **Transparencias / Capas** | `rgba(23, 27, 51, 0.06)` a `rgba(23, 27, 51, 0.15)` | Bordes y fondos translúcidos | Profundidad sutil sin brillos. |

> **PROHIBIDO:** No usar colores neón ni eléctricos (`#2D4CFF`, `#FF2C2F`, `#10B981`, `#7B93FF`, etc.). No usar animaciones pulsantes, gradientes de texto, ni efectos de brillo/glow.

### Variables CSS Oficiales (`:root`)
```css
:root {
  --color-navy-dark: #171B33;
  --color-navy-card: #1f2442;
  --color-navy-border: rgba(255, 255, 255, 0.12);
  --color-blue-electric: #171B33; /* Reemplazado: sin neón */
  --color-blue-hover: #0F1225;
  --color-red-performance: #171B33; /* Reemplazado: sin neón */
  --color-gray-surface: #F4F5F8;
  --color-gray-card: #FFFFFF;
  --color-gray-border: #E2E4E9;
  --color-text-light: #FFFFFF;
  --color-text-muted: #8E96A8;
  --color-text-dark: #171B33;
  --color-text-dark-muted: #5C6479;
  
  --font-titles: 'Barlow', 'Plus Jakarta Sans', -apple-system, sans-serif;
  --font-body: 'Plus Jakarta Sans', -apple-system, sans-serif;
  --font-mono: 'JetBrains Mono', 'Space Mono', 'Roboto Mono', monospace;
}
```

---

## ✍️ 3. Arquitectura Tipográfica

- **Títulos Principales (H1 / Hero Display):**
  - Sans-serif geométrica en mayúsculas estilizadas de alto peso (`font-weight: 800` o `900`).
  - Estilo plano puro sin sombras: `text-shadow: none;` y `box-shadow: none;`.
- **Títulos de Sección (H2 y H3):**
  - Sans-serif limpia en `Bold` (700) o `Semi-Bold` (600).
  - `#171B33` sobre fondos claros (`#F4F5F8`/`#FFFFFF`) y `#FFFFFF` sobre fondos oscuros (`#171B33`).
- **Cuerpo de Texto (Párrafos):**
  - Sans-serif regular (`400`/`500`), interlineado fluido `1.5` a `1.6`.
- **Métricas, Tablas y Tickers:**
  - Fuente **Monoespaciada** (`var(--font-mono)`), con alineación tabular / numérica estricta.

---

## 📐 4. Dirección de Arte, Layout y Componentes

1. **Estructura Modular (Single-Scroll):** Franjas horizontales de ancho completo (*full-width*) que alternan secuencialmente entre bloques oscuros (`#171B33`) y neutros claros (`#F4F5F8`/`#FFFFFF`).
2. **Metáfora de Procesamiento por Capas:** Grillas de 3 columnas o matrices de tarjetas con bordes rectangulares muy definidos y fondos translúcidos sutiles.
3. **Diagramas Técnicos e Iconografía:**
   - Iconos lineales geométricos con `stroke-linecap="round"`.
   - Vectores de fondo con diagramas de red, mallas de datos y nodos rotados a 45° con opacidad sutil (`0.3` a `0.5`).
4. **Botones y CTAs:**
   - **Primario:** Relleno sólido `#171B33`, texto blanco negrita, hover con `brightness(1.3)`.
   - **Secundario (Ghost):** Fondo transparente, borde fino de 1px en `#171B33` o `#FFFFFF`.

---

## 📋 5. Contexto del Anteproyecto (ITR3 - Especialidad Informática 2026)

- **Materias:** Base de Datos, Laboratorio de Programación, Laboratorio de Aplicaciones II.
- **Docentes:** Stucher Vanesa, Zanetti Simón, Rissone Francisco.
- **Arquitectura Backend:** Patrón MVC en CodeIgniter 4, encriptación segura de contraseñas, control de sesiones, protección CSRF y prevención de SQL Injection.
- **Modelo Relacional:** Entidades clave (`usuarios`, `roles`, `empresas`, `recursos`, `categorias`, `solicitudes`, `operaciones`, `sesiones`, `ubicaciones`).
- **Hitos de Entrega:** Hito 1 (Auth, MVC base, Navegación), Hito 2 (Publicaciones, Búsquedas, Solicitudes, Perfiles), Hito Final (Métricas, Reportes, Panel avanzado).
