<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= csrf_meta() ?>   
    <title><?= esc($title ?? 'CodeIgniter 4') ?></title>

    <!-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> -->

    <?php
    $jsFileLoadRefresh = '20250309';
    $cssFileLoadRefresh = '20250309';
    $jsFileLoadType = $jsFileLoadType ?? null;
    $cssFileLoadType = $cssFileLoadType ?? null;
    if (in_array($jsFileLoadType, ['user'])) {
        echo '<script src="' . base_url('assets/js/user.js') . '?'.$jsFileLoadRefresh.'"></script>';
    }
    ?>
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
