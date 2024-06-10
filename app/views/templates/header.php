<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASEURL;?>/css/bootstrap.css" rel="stylesheet">
    <title><?= $data['title'];?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 border-bottom">     
<div class="container-fluid container">
            <a class="navbar-brand" href="<?= BASEURL;?>">MYSYSTEM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL;?>/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL;?>/plans">Plan</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?=BASEURL;?>/customers">Customer</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL;?>/invoices">Invoice</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?=BASEURL;?>/agents">Agent</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="container py-4">