<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link href="<?=base_url('public/css/business-casual.css');?>" rel="stylesheet">
    <link href="<?=base_url('public/css/team-testosteron.css');?>" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('public/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('public/css/business-casual.css');?>" rel="stylesheet">
</head>
<body>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Team Testosteron</div>
<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">
    The coolest guys on earth</div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?=base_url();?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?=base_url('index.php/about');?>">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
