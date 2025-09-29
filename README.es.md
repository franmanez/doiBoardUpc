# 🔗 OJS Plugin: DOIBoard Crossref UPC

## 📌 Descripción

Este plugin añade un **enlace directo** en la página de cada artículo de OJS hacia la web [DOIBoard Crossref UPC](https://doi.upc.edu) 🌐.

La web, desarrollada por la **Universitat Politècnica de Catalunya (UPC)**, funciona como un **frontend que consume la API REST de Crossref**, lo que permite:
- Consultar **información detallada de los DOIs** registrados en Crossref.


- Información de la institución **(prefijo del DOI)**:
  - Número total de DOIs por tipo de documento.
  - Cobertura de metadatos
  - Gràficas por fecha de publicación y fecha de depósito
  - lista de DOIs
  - lista de DOIs más referenciados
  - lista de ORCIDs más referenciados.


- Realizar búsquedas de miembros de crossref por nombre para obtener infromación detallada: prefijo DOI y número de DOIs registrados por tipo

Con este plugin, los usuarios de tu revista podrán acceder fácilmente a información confiable sobre los identificadores DOI de los artículos publicados.

---

## ⚙️ Funcionalidades del Plugin

- Si el artículo tiene DOI, inserta dos **enlaces** en la página de artículo que redirigen a DOIBoard Crossref UPC [https://doi.upc.edu](https://doi.upc.edu). 
  - Un enlace para ver la informacoión referente a la institución mediante el prefijo DOI.
  - Otro enlace con el DOI del artículo para obtener información detallada.
  
    
- Compatible con OJS 3.X (IMPORTANTE: existen dos branches en el repositorio, una para la versión para OJS 3.3 y otra para OPS 3.5).

---

## 🛠 Instalación

### Opción 1: Instalación mediante PKP Tar.gz

1. Descarga el paquete `doiBoardUpc.tar.gz` del plugin desde la [web oficial de PKP](https://pkp.sfu.ca/ojs/).
2. Entra al **Panel de Administración > Plugins > Genéricos**.
3. Haz clic en **“Instalar Plugin”** y sube el archivo `doiBoardUpc.tar.gz`.
4. Una vez instalado, **activa el plugin** ✅.

### Opción 2: Instalación desde GitHub

1. Clona el repositorio del plugin en la carpeta de plugins de tu instalación de OJS:

```bash
git clone https://github.com/franmanez/doiBoardUpc.git plugins/generic/doiboard
```

2. Activa el plugin desde **Panel de Administración > Plugins > Genéricos**.

---

## 💡 Uso

Una vez activado:

1. Navega a cualquier artículo de tu revista OJS.
2. Verás un enlace o botón **“DOIBoard Crossref UPC”** en la interfaz del artículo.
3. Al hacer clic, se abrirá la web [https://doi.upc.edu](https://doi.upc.edu), donde podrás:
    - Ver la inforamción del DOI seleccionado
    - Revisar información del artículo (metadatos, citas, referencias)
    - Explorar estadísticas de publicación
4. El plugin se adapta automáticamente al idioma de la revista si se han configurado traducciones.

---

## 📝 Traducciones

El plugin soporta traducciones y puede personalizarse según el idioma de la revista.  
Actualmente disponible en:
- Español
- Inglés
- Catalán

---

## 🤝 Contribuciones

Si deseas mejorar el plugin:

1. Haz un fork del repositorio.
2. Crea una rama con tu mejora (`git checkout -b my_doiBoardUpc`).
3. Realiza los cambios y haz commit.
4. Envía un **pull request**.

Repositorio oficial: [https://github.com/tuusuario/ojs-doiboard-plugin](https://github.com/tuusuario/ojs-doiboard-plugin)

---

## 📄 Licencia

MIT License 📝
