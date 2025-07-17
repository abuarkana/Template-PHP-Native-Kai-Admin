<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Halaman Tidak Ditemukan - Ingat Sholat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --radius-lg: 16px;
            --radius-sm: 8px;
            --shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
            padding: 20px;
            background-image: radial-gradient(circle at 10% 20%, rgba(37, 99, 235, 0.03) 0%, rgba(37, 99, 235, 0.03) 90%);
        }
        
        .error-card {
            max-width: 480px;
            width: 100%;
            padding: 48px 40px;
            background: white;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
            text-align: center;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(226, 232, 240, 0.5);
        }
        
        .error-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }
        
        .error-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(239, 68, 68, 0.1);
            border-radius: 50%;
        }
        
        .error-icon svg {
            width: 40px;
            height: 40px;
            color: #ef4444;
        }
        
        .error-code {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 8px;
            line-height: 1;
            font-family: 'Amiri', serif;
        }
        
        .error-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--dark);
        }
        
        .error-message {
            font-size: 1rem;
            color: var(--gray);
            margin-bottom: 32px;
            max-width: 360px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .islamic-pattern {
            position: absolute;
            top: 0;
            right: 0;
            opacity: 0.05;
            z-index: 0;
            width: 120px;
            height: 120px;
        }
        
        .quote-wrapper {
            position: relative;
            background-color: rgba(16, 185, 129, 0.05);
            padding: 20px;
            border-radius: var(--radius-sm);
            margin: 28px 0;
            border-left: 3px solid var(--secondary);
        }
        
        .quote-text {
            font-family: 'Amiri', serif;
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark);
            position: relative;
            z-index: 1;
        }
        
        .reminder {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: rgba(37, 99, 235, 0.08);
            padding: 10px 16px;
            border-radius: 50px;
            color: var(--primary);
            font-weight: 500;
            margin: 24px 0;
        }
        
        .reminder svg {
            width: 18px;
            height: 18px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            gap: 8px;
            margin-top: 16px;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.15);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, var(--primary-light), var(--primary));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        
        .btn:hover::before {
            opacity: 1;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.2);
        }
        
        .btn svg {
            width: 16px;
            height: 16px;
            transition: transform 0.3s ease;
        }
        
        .btn:hover svg {
            transform: translateX(3px);
        }
        
        @media (max-width: 576px) {
            .error-card {
                padding: 40px 24px;
            }
            
            .error-code {
                font-size: 3rem;
            }
            
            .error-title {
                font-size: 1.25rem;
            }
            
            .quote-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="error-card">
        <svg class="islamic-pattern" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M50 0 L100 50 L50 100 L0 50 Z" fill="none" stroke="#2563eb" stroke-width="2"/>
            <circle cx="50" cy="50" r="40" fill="none" stroke="#10b981" stroke-width="2"/>
        </svg>
        
        <div class="error-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
        </div>
        
        <h1 class="error-code">404</h1>
        <h2 class="error-title">Halaman Tidak Ditemukan</h2>
        <p class="error-message">Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>
        
        <div class="quote-wrapper">
            <p class="quote-text">"Dan barang siapa bertakwa kepada Allah, niscaya Dia akan membukakan jalan keluar baginya."<br>(QS. At-Talaq: 2)</p>
        </div>
        
        <div class="reminder">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
            </svg>
            <span>Jadikan sholat sebagai penunjuk jalan</span>
        </div>
        
        <a href="dashboard.php" class="btn">
            <span>Kembali ke Beranda</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
        </a>
    </div>
</body>
</html>