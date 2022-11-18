<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- META ============================================= -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?php echo $slug['title'];?>" />
  <meta name="author" content="admin" />
  <meta name="robots" content="<?php echo $slug['meta'];?>" />
  
 
  
  
  <!-- OG -->
  <meta property="og:title" content="<?php echo $slug['title'];?>" />
  <meta property="og:description" content="<?php echo $slug['meta'];?>" />
  <meta property="og:image" content="<?php echo base_url()?>upload/<?php echo $slug['image']; ?>" />
  <meta property="og:url" content="<?php echo base_url()?><?php echo $slug['slug_title']; ?>" />
  <meta name="format-detection" content="telephone=0812 5050 4200">

  <!-- tw -->
  <meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $slug['meta'];?>" />
<meta name="twitter:image" content="<?php echo base_url()?>upload/<?php echo $slug['image']; ?>" />
<meta name="twitter:image:src" content="<?php echo base_url()?>upload/<?php echo $slug['image']; ?>" />
	<meta name="twitter:title" content="<?php echo $slug['title'];?>" />


  <title><?php echo $slug['title'];?></title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/new/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/new/css/style.css?ver=1.2">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/Logo ICE-I.png">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134859780-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134859780-1');
</script>

    
        <style>
             table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            }
            
            th, td {
            text-align: left;
            padding: 8px;
            }
            
            tr:nth-child(even){background-color: #f2f2f2}
        </style>
</head>