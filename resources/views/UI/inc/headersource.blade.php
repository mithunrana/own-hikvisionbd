<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <!-- SEO RELATED DATA START-->
    <title> @isset($title) {{$title}} @endisset</title>
    <meta name="author" content="Mithun Rana">
    <meta name="description" content="@isset($description){{$description}}@endisset">
    <meta name="keywords" content="@isset($keywords){{$keywords}}@endisset">
    <link rel="shortcut icon" href="{{asset('')}}UI/logo/favicon.ico" sizes="32x32" />
    <link rel="icon" type="image/ico" href="{{asset('')}}UI/logo/favicon.ico" sizes="192x1922" />


    <meta name="fb:app_id" property="fb:app_id" content="308590786521219" />
    <meta property="og:url"           content="@php echo url()->current(); @endphp"/>
    <meta property="og:title"         content="@isset($title){{$title}}@endisset"/>
    <meta property="og:description"   content="@isset($description){{$description}}@endisset" />
    <meta property="og:image"         content="@isset($image){{asset('')}}{{$image}}@endisset" />


    <meta property="og:image:width"   content="600" />
    <meta property="og:image:height"  content="315" />
    <!-- SEO RELATED DATA END-->



    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!--font-awesome-->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="{{asset('')}}UI/font-awesome-4.7.0/css/font-awesome.css">
    <!--slick.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/slick.css">
    <!--slick.theme.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/slick-theme.css">
    <!--uikit.min.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/uikit.min.css">
    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/owl.carousel.css">
    <!--animate.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/animate.css">
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/bootstrap.min.css">
    <!--style.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/style.css">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{asset('')}}UI/css/responsive.css">

    <style>
        .pagination {
            display: -ms-flexbox;
            flex-wrap: wrap;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: 0.25rem;
        }

        .main-product-details{
            overflow-x: scroll;
        }

        .main-product-details table{
            overflow-x: scroll;
        }

    </style>
</head>
<body>