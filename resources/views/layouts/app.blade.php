<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Магазин')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

    @if("/constructor"== $_SERVER['REQUEST_URI'])
        <!-- The CSS for the plugin itself - required -->
            <link rel="stylesheet" type="text/css" href="/designer/css/FancyProductDesigner-all.min.css" />

            <!-- Include required jQuery files -->
            <script src="/designer/js/jquery.min.js" type="text/javascript"></script>
            <script src="/designer/js/jquery-ui.min.js" type="text/javascript"></script>

            <!-- HTML5 canvas library - required -->
            <script src="/designer/js/fabric.min.js" type="text/javascript"></script>
            <!-- The plugin itself - required -->
            <script src="/designer/js/FancyProductDesigner-all.min.js" type="text/javascript"></script>
            <!-- Include Plus Add-On -->
            <script src="/designer/js/FancyProductDesignerPlus.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                jQuery(document).ready(function(){

                    if(typeof FancyProductDesignerPlus === 'undefined') {
                        alert("For this demo the Fancy Product Designer Plus Add-On is required!");
                        return false;
                    }
                    var $yourDesigner = $('#clothing-designer'),
                        pluginOpts = {
                            productsJSON: '/designer/json/products.json',
                            designsJSON: '/designer/json/designs.json', //see JSON folder for designs sorted in categories
                            stageWidth: 1200,
                            editorMode: false,
                            smartGuides: true,
                            fonts: [
                                {name: 'Helvetica'},
                                {name: 'Times New Roman'},
                                {name: 'Pacifico', url: '/designer/fonts/Pacifico.ttf'},
                                {name: 'Arial'},
                                {name: 'Lobster', url: 'google'}
                            ],
                            customTextParameters: {
                                colors: false,
                                removable: true,
                                resizable: true,
                                draggable: true,
                                rotatable: true,
                                autoCenter: true,
                                boundingBoxMode: "clipping",
                                boundingBox:{
                                    x: 440,
                                    y: 200,
                                    height: 230,
                                    width: 170,
                                }

                            },
                            customImageParameters: {
                                topped: true,
                                draggable: true,
                                removable: true,
                                resizable: true,
                                rotatable: true,
                                colors: '#000',
                                autoCenter: true,
                                boundingBoxMode: "clipping",
                                boundingBox:{
                                    x: 440,
                                    y: 200,
                                    height: 230,
                                    width: 170,
                                }
                                /*resizeToW: 600,
                                resizeToH: 600,
                                scaleMode: "cover",
                                scale: 0.5,*/
                            },
                            actions: {
                                'top': ['download','print', 'snap', 'preview-lightbox'],
                                'right': ['magnify-glass', 'zoom', 'reset-product', 'qr-code', 'ruler'],
                                'bottom': ['undo','redo'],
                                'left': ['manage-layers','info','save','load']
                            },
                            initialActiveModule: "text",
                            mainBarModules: ['products','images','text','designs','drawing'],
                            colorSelectionPlacement: 'inside-br',
                            namesNumbersDropdown: ['S', 'M', 'L', 'XL'],
                            namesNumbersEntryPrice: 10,
                            bulkVariationsPlacement: '#my-variations',
                            bulkVariations: {'Size': ['XL', 'L', 'M', 'S'], 'Color': ['Red', 'Blue']}
                        },
                        yourDesigner = new FancyProductDesigner($yourDesigner, pluginOpts);

                    //event handler when the price is changing
                    $yourDesigner.on('priceChange', function(evt, price, currentPrice) {
                        $('#thsirt-price').text(currentPrice);
                    });

                });
            </script>

    @endif

</head>
<body>
<div @if("/constructor"!= $_SERVER['REQUEST_URI']) id="app" @endif>
    <header>
                @include('layouts.header')

    </header>
    <div class="container">
        @yield('content')


</div>
@include('layouts.footerCart')
</body>
</html>
