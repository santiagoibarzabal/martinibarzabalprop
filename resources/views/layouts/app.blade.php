<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-T5JZVGT');</script>
    <!-- End Google Tag Manager -->

    {{-- SEO --}}

    <link rel="canonical" href="https://www.ibarzabal.com/" />
    <meta name="description" content=" Encontrá la propiedad en Venta y Alquiler que estás buscando. Tasaciones y búsquedas especializadas de departamentos, casas, oficinas, inmuebles industriales y terrenos en Zona Norte. Tu próxima Propiedad está Martin Ibarzabal Servicios Inmobiliarios." />
    <meta name="keywords" content="Propiedades, inmuebles, casas, departamentos, barrios cerrados, alquiler, venta, compra, alquiler temporario, argentina. Casas y Departamentos, inmuebles, propiedades, Venta y Alquiler, Argentina">
    <meta property="og:locale" content="es_AR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Martīn Ibarzábal : Real Estate, Properties for Sale &amp; Mercado Inmobiliario, propiedades en venta y alquiler, Martilleros, Formar parte del equipo" />
    <meta property="og:description" content="{seo: SiteName} puede ayudarlo su búsqueda o necesidad inmobiliaria, ya sea para comprar, alquilar o vender una propiedad. Para encontrar la solución que necesita contáctese con {seo: SiteName} hoy para encontrar lo qué está buscando" />
    <meta property="og:url" content="https://www.ibarzabal.com" />
    <meta property="og:image" content="{{asset('img/logo.png')}}" />
    <meta property="og:site_name" content="Martin Ibarzabal Servicios Inmobiliarios" />
    
    <title> @yield('title', 'Venta y Alquiler de Propiedades | Ibarzabal Servicios Inmobiliarios') </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('css/icons/icons.css') }}">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One|Rubik:700&display=swap" rel="stylesheet">
   
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5JZVGT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
    
    <script src="/js/main.js"></script>
    
</body>
</html>