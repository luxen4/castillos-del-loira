
<?php
$base_url = "https://alayag82.kesug.com";
?>

<!-- SCHEMA.ORG JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "WebSite",
      "@id": "<?= $base_url ?>/#website",
      "url": "<?= $base_url ?>/val-de-loire/chateaux/",
      "name": "Castillos del Valle del Loira",
      "description": "Guía completa de los castillos del Valle del Loira con historia, visitas y enlaces oficiales.",
      "inLanguage": "es-ES"
    },

    {
      "@type": "Organization",
      "@id": "<?= $base_url ?>/#organization",
      "name": "Valle del Loira Turismo",
      "url": "<?= $base_url ?>",
      "logo": {
        "@type": "ImageObject",
        "url": "<?= $base_url ?>/img/logo.png"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "<?= $base_url ?>/val-de-loire/chateaux/#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "<?= $base_url ?>"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Valle del Loira",
          "item": "<?= $base_url ?>/val-de-loire/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Castillos",
          "item": "<?= $base_url ?>/val-de-loire/chateaux/"
        }
      ]
    },

    {
      "@type": "ItemList",
      "@id": "<?= $base_url ?>/val-de-loire/chateaux/#itemlist",
      "name": "Castillos del Valle del Loira",
      "itemListOrder": "https://schema.org/ItemListOrderAscending",
      "numberOfItems": 6,
      "itemListElement": [

        {
          "@type": "TouristAttraction",
          "@id": "<?= $base_url ?>/val-de-loire/chateaux/chateau-de-chambord/#touristattraction",
          "name": "Château de Chambord",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/chateau-de-chambord/",
          "description": "El castillo más emblemático del Valle del Loira, famoso por su escalera de doble hélice.",
          "image": "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/2a3/-domaine-national-de-chambord.webp",
          "touristType": "Cultural tourism",
          "sameAs": [
            "https://www.chambord.org"
          ],
          "containedInPlace": {
            "@type": "AdministrativeArea",
            "name": "Valle del Loira, Francia"
          }
        },

        {
          "@type": "TouristAttraction",
          "name": "Château de Chenonceau",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/chenonceau/",
          "description": "Castillo renacentista construido sobre el río Cher, conocido como el Castillo de las Damas.",
          "image": "https://valledelloira-francia.es/wp-content/uploads/chenonceau.webp",
          "sameAs": [
            "https://www.chenonceau.com"
          ]
        },

        {
          "@type": "TouristAttraction",
          "name": "Château Royal d’Amboise",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/amboise/",
          "description": "Castillo real con vistas al río Loira y estrechamente vinculado a Leonardo da Vinci.",
          "image": "https://valledelloira-francia.es/wp-content/uploads/amboise.webp",
          "sameAs": [
            "https://www.chateau-amboise.com"
          ]
        },

        {
          "@type": "TouristAttraction",
          "name": "Château de Blois",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/blois/",
          "description": "Palacio real que reúne varios estilos arquitectónicos del Renacimiento francés.",
          "image": "https://valledelloira-francia.es/wp-content/uploads/blois.webp",
          "sameAs": [
            "https://www.chateau-blois.fr"
          ]
        },

        {
          "@type": "TouristAttraction",
          "name": "Château de Villandry",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/villandry/",
          "description": "Castillo famoso por sus espectaculares jardines renacentistas.",
          "image": "https://valledelloira-francia.es/wp-content/uploads/villandry.webp",
          "sameAs": [
            "https://www.villandry.com"
          ]
        },

        {
          "@type": "TouristAttraction",
          "name": "Château d’Azay-le-Rideau",
          "url": "<?= $base_url ?>/val-de-loire/chateaux/azay-le-rideau/",
          "description": "Elegante castillo renacentista situado en una isla del río Indre.",
          "image": "https://valledelloira-francia.es/wp-content/uploads/azay-le-rideau.webp",
          "sameAs": [
            "https://www.azay-le-rideau.fr"
          ]
        }

      ]
    }

  ]
}
</script>