<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($appName); ?></title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: radial-gradient(circle at top, #1f2a54, #0b1020 62%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            width: min(920px, calc(100% - 40px));
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 28px;
            padding: 44px;
            box-shadow: 0 30px 90px rgba(0,0,0,.35);
        }
        .badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(251,94,127,.18);
            color: #ffb5c5;
            font-weight: 700;
            font-size: 14px;
        }
        h1 {
            font-size: clamp(36px, 6vw, 70px);
            line-height: 1;
            margin: 22px 0 16px;
        }
        p {
            color: rgba(255,255,255,.78);
            font-size: 20px;
            line-height: 1.6;
            max-width: 740px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 14px;
            margin-top: 34px;
        }
        .item {
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 18px;
            padding: 18px;
        }
        .item strong {
            display: block;
            margin-bottom: 6px;
            color: #fff;
        }
        .item span {
            color: rgba(255,255,255,.7);
            font-size: 14px;
        }
        .cta {
            margin-top: 34px;
            display: inline-block;
            padding: 15px 22px;
            background: linear-gradient(135deg, #fb5e7f, #7c3aed);
            color: #fff;
            text-decoration: none;
            border-radius: 14px;
            font-weight: 800;
        }
    </style>
</head>
<body>
    <main class="card">
        <div class="badge">Deploy via Git no Painel ICP</div>
        <h1>Aplicativo Laravel publicado com sucesso 🚀</h1>
        <p>
            Este é um projeto simples criado para demonstrar, em vídeo, como enviar um aplicativo Laravel para o GitHub
            e fazer o deploy automático pelo Painel ICP.
        </p>

        <div class="grid">
            <div class="item">
                <strong>Framework</strong>
                <span>Laravel</span>
            </div>
            <div class="item">
                <strong>PHP</strong>
                <span><?php echo e($phpVersion); ?></span>
            </div>
            <div class="item">
                <strong>Ambiente</strong>
                <span><?php echo e(app()->environment()); ?></span>
            </div>
            <div class="item">
                <strong>Atualizado em</strong>
                <span><?php echo e($deployTime); ?></span>
            </div>
        </div>

        <a class="cta" href="https://integrator.com.br" target="_blank" rel="noopener">Integrator Host com ICP</a>
    </main>
</body>
</html>
<?php /**PATH /Users/integratorhost/Desktop/integrator-laravel-demo/resources/views/home.blade.php ENDPATH**/ ?>