<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= esc($title ?? 'CodeIgniter 4') ?></title>

    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> -->
</head>
<body>

    <!-- Header -->
    <?= view('partials/header') ?>

    <!-- Main Content -->
    <div>
        <?= $this->renderSection('content') ?>
    </div>

    <!-- Footer -->
    <?= view('partials/footer') ?>

    <?= $this->renderSection('scripts') ?>
</body>
</html>
