<!DOCTYPE html>
<html>
   <head>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titulo|default:"Sin Titulo"}</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
      <!-- Favicons
    ================================================== -->
    <!-- Favicons -->
  <link href="{$_layoutParams.ruta_img}favicon.png" rel="icon">
  <link href="{$_layoutParams.ruta_img}apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

    <link href="{$_layoutParams.ruta_css}style.css" rel="stylesheet">






     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      {if isset($_layoutParams.js) && count($_layoutParams.js)}
        {foreach item=js from=$_layoutParams.js}
          <script type="text/javascript" src="{$js}"></script>
        {/foreach}

      {/if}

   </head>
   <body>
    <header>
      {include file="menu.tpl"}
    </header>

    <main id="main">
      <noscript><p>Debe tener el soporte de Javascript habilitado</p></noscript>

      {include file=$_contenido}
    </main>



<!-- JavaScript Libraries -->



  </body>
</html>