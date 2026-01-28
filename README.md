# Tema WordPress – Prueba Técnica (_tw + Tailwind CSS)

Este repositorio contiene un **tema personalizado de WordPress** desarrollado como parte de una prueba técnica. El objetivo principal es demostrar el uso de un flujo de trabajo moderno basado en **_tw** como starter theme y **Tailwind CSS** para la maquetación, priorizando un código limpio, ligero y mantenible.

---

## Descripción general

* Starter Theme base: **_tw (underscoretw)**
* Framework CSS: **Tailwind CSS**
* CMS: **WordPress**
* Enfoque: Mobile First, componentes reutilizables y arquitectura clara

El tema implementa un **Custom Post Type (CPT) llamado “Productos”**, renderizado mediante un loop personalizado en la página de inicio.

---

## Estructura del proyecto

```
vgs-tw/
├── assets/            # Archivos compilados (CSS / JS)
├── javascript/        # Lógica JS del tema
├── tailwind/          # Configuración y estilos Tailwind
├── demo-content/      # Contenido de demostración
│   └── demo.xml       # Export de WordPress (Productos)
├── functions.php
├── front-page.php
├── index.php
├── header.php
├── footer.php
├── style.css
├── package.json
├── tailwind.config.js
├── postcss.config.js
├── .gitignore
└── README.md
```

---

## Instalación

1. Clonar el repositorio o copiar la carpeta del tema dentro de:

```
wp-content/themes/
```

2. Acceder a la carpeta del tema:

```bash
cd vgs-tw
```

3. Instalar dependencias:

```bash
npm install
```

4. Compilar estilos en entorno de desarrollo:

```bash
npm run dev
```

5. Activar el tema desde el panel de administración de WordPress.

---

## Desarrollo

* Tailwind CSS se utiliza como motor principal de estilos
* La maquetación sigue un enfoque **Mobile First**
* Los componentes reutilizables se estructuran mediante `get_template_part`
* No se utilizan page builders ni frameworks visuales

Para observar cambios en tiempo real:

```bash
npm run watch
```

---

## Contenido de demostración

Dentro de la carpeta:

```
/demo-content
```

se incluye el archivo `demo.xml`, el cual contiene los **Productos de prueba**.

### Importar contenido

1. Ir al panel de WordPress
2. Herramientas → Importar → WordPress
3. Seleccionar el archivo `demo.xml`
4. Completar el proceso de importación

> No se utiliza ACF en este proyecto, por lo que no es necesario importar archivos adicionales.

---

## Evidencia visual

Se incluye un video explicativo (máx. 3 minutos) donde se muestra:

* Navegación por la página principal
* Funcionamiento responsive en vista móvil
* Estructura del tema y organización del código

Enlace al video:

https://youtu.be/-vMLFmmhDVA

---

## Decisiones técnicas

* Se utiliza **_tw** como base por su integración nativa con Tailwind y el editor de bloques
* Tailwind se emplea mediante clases utilitarias priorizando legibilidad
* El CPT “Productos” se implementa de forma nativa para evitar sobrecarga del admin
* El proyecto está pensado para ser fácilmente escalable y mantenible

---

## Notas finales

Este repositorio contiene únicamente el código del tema. No se incluyen dependencias compiladas como `node_modules`, las cuales deben instalarse vía NPM.

El proyecto está listo para ser clonado, compilado y evaluado desde cero.

---

## Funcionalidades adicionales

### Slider principal
El slider de la página de inicio se gestiona mediante un plugin personalizado que:
- Carga Swiper.js únicamente en la Home
- Permite editar el contenido del slider desde el panel de WordPress
- Mantiene desacoplada la lógica del slider del tema principal

Autor: César Tomedes
