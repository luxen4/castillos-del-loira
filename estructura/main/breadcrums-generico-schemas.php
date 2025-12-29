
<?php /* Para meter, ya debe haber uno generico. */ ?>
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Val de Loire",
        "item": "https://alayag82.kesug.com/val-de-loire/index.php"
        },
        {
        "@type": "ListItem",
        "position": 2,
        "name": "Localidades",
        "item": "https://alayag82.kesug.com/val-de-loire/"
        },
        {
        "@type": "ListItem",
        "position": 3,
        "name": "<?= $slug; ?>",
        "item": "https://alayag82.kesug.com/val-de-loire/localidades/<?= $slug; ?>/index.php"
        }
    ]
    }
</script>
