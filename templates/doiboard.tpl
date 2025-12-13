{* doiboard.tpl *}

<div class="pkp_block">
    <div class="pkp_block_title">{translate key="plugins.generic.doiBoardUpc.title"}</div>
    <div class="pkp_block_content">
        <img src="{$baseUrl}/plugins/generic/doiBoardUpc/images/doi-logo.png" alt="logo DOI">
        <img src="{$baseUrl}/plugins/generic/doiBoardUpc/images/crossref-logo.png" alt="logo DOI">
        <!--img src="{$baseUrl}/plugins/generic/doiBoardUpc/images/upc-logo-black.png" alt="logo DOI"-->
        <a href="https://doi.upc.edu/prefix/info?id={$doiPrefix}" target="_blank" rel="noopener" class="btn-warning-custom">
            {$doiPrefix}
        </a>
        <a href="https://doi.upc.edu/doi?id={$doiUrl}" target="_blank" rel="noopener" class="btn-warning-custom">
            <strong>DOI: </strong> {$doiUrl}
        </a>
    </div>
</div>
