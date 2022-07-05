<section class="container pb-2 pb-md-6 pb-lg-5 mb-3">
    <div class="rounded-3 py-5 px-3 px-sm-0 mb-xl-4">
            <code>
                <?= '$config[\'app_key\'] = \'' . generate_token(32) . '\';'; ?>
            </code>
            <button type="button" class="btn btn-outline-primary btn-xs" onClick="window.location.reload();">Generate</button>  
    </div>
</section>
