# 🔗 OJS Plugin: DOIBoard Crossref UPC

## 📌 Description

This plugin adds a **direct link** on each OJS article page to the [DOIBoard Crossref UPC](https://doi.upc.edu) 🌐 website.

The website, developed by the **Universitat Politècnica de Catalunya (UPC)**, acts as a **frontend consuming the Crossref REST API**, which allows users to:
- Retrieve **detailed information about DOIs** registered in Crossref.

- Institution information **(DOI prefix)**:
    - Total number of DOIs by document type.
    - Metadata coverage.
    - Graphs by publication date and deposit date.
    - List of DOIs.
    - List of most referenced DOIs.
    - List of most referenced ORCIDs.

- Search Crossref members by name to obtain detailed information: DOI prefix and number of DOIs by type.

With this plugin, your journal users can easily access reliable information about the DOI identifiers of published articles.

---

## ⚙️ Plugin Features

- If the article has a DOI, it inserts two **links** on the article page that redirect to DOIBoard Crossref UPC [https://doi.upc.edu](https://doi.upc.edu):
    - One link to view the institution’s information using the DOI prefix.
    - Another link with the article’s DOI to obtain detailed information.

- Compatible with OJS 3.X (IMPORTANT: there are two branches in the repository, one for OJS 3.3 and another for OPS 3.5).

---

## 🛠 Installation

### Option 1: Installation via PKP Tar.gz

1. Download the plugin package `doiBoardUpc.tar.gz` from the [official PKP website](https://pkp.sfu.ca/ojs/).
2. Go to **Administration Panel > Plugins > Generic**.
3. Click on **“Install Plugin”** and upload the `doiBoardUpc.tar.gz` file.
4. Once installed, **activate the plugin** ✅.

### Option 2: Installation from GitHub

1. Clone the plugin repository into the OJS plugins folder:

```bash
git clone https://github.com/franmanez/doiBoardUpc.git plugins/generic/doiboard
```

2. Activate the plugin from **Administration Panel > Plugins > Generic**.

---

## 💡 Usage

Once activated:

1. Go to any article in your OJS journal.
2. You will see a **“DOIBoard Crossref UPC”** link or button on the article interface.
3. Clicking it will open [https://doi.upc.edu](https://doi.upc.edu), where you can:
    - View the information of the selected DOI.
    - Check article details (metadata, citations, references).
    - Explore publication statistics.
4. The plugin automatically adapts to the journal’s language if translations are configured.

---

## 📝 Translations

The plugin supports translations and can be customized according to the journal’s language.  
Currently available in:
- Spanish
- English
- Catalan

---

## 🤝 Contributions

If you want to improve the plugin:

1. Fork the repository.
2. Create a branch for your improvement (`git checkout -b my_doiBoardUpc`).
3. Make your changes and commit.
4. Submit a **pull request**.

Official repository: [https://github.com/tuusuario/ojs-doiboard-plugin](https://github.com/tuusuario/ojs-doiboard-plugin)

---

## 📄 License

MIT License 📝
