<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDPLAT - Cek asal plat kendaraan</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>

    <style>
        /* ===== COLOR VARIABLES (GRAYSCALE PALETTE) ===== */
        :root {
            --bg-gradient-start: #f4f4f5;
            --bg-gradient-mid: #e4e4e7;
            --bg-gradient-end: #d4d4d8;

            --clay-base: #f4f4f5;
            --clay-strong: #ffffff;
            --clay-subtle: #e4e4e7;
            --clay-inset: #e4e4e7;

            --shadow-light: rgba(255, 255, 255, 0.9);
            --shadow-dark: rgba(0, 0, 0, 0.15);
            
            --text-primary: #18181b;
            --text-secondary: #3f3f46;
            --text-muted: #71717a;
            --text-faint: #a1a1aa;

            --steel-light: #71717a; 
            --steel-main: #52525b;
            --steel-dark: #3f3f46;
            --navy-dark: #27272a;
            
            --btn-bg-start: var(--steel-light);
            --btn-bg-end: var(--steel-dark);
            --btn-text: #ffffff;
            
            --input-bg: #e4e4e7;
            --input-text: #18181b;
            --input-placeholder: rgba(63, 63, 70, 0.5);

            --pill-bg: #ffffff;
            --pill-text: #3f3f46;
            --pill-shadow-light: rgba(255, 255, 255, 0.9);
            --pill-shadow-dark: rgba(0, 0, 0, 0.1);
        }

        .dark {
            --bg-gradient-start: #18181b;
            --bg-gradient-mid: #1c1c1e;
            --bg-gradient-end: #09090b;

            --clay-base: #27272a;
            --clay-strong: #323236;
            --clay-subtle: #27272a;
            --clay-inset: #18181b;

            --shadow-light: rgba(255, 255, 255, 0.05);
            --shadow-dark: rgba(0, 0, 0, 0.6);
            
            --text-primary: #f4f4f5;
            --text-secondary: #d4d4d8;
            --text-muted: #a1a1aa;
            --text-faint: #71717a;

            --steel-light: #a1a1aa; 
            --steel-main: #71717a;
            --steel-dark: #52525b;
            
            --btn-bg-start: var(--steel-main);
            --btn-bg-end: var(--steel-dark);
            --btn-text: #f4f4f5;
            
            --input-bg: #18181b;
            --input-text: #f4f4f5;
            --input-placeholder: rgba(161, 161, 170, 0.5);

            --pill-bg: #3f3f46;
            --pill-text: #d4d4d8;
            --pill-shadow-light: rgba(255, 255, 255, 0.05);
            --pill-shadow-dark: rgba(0, 0, 0, 0.5);
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-mid) 50%, var(--bg-gradient-end) 100%);
            font-family: 'Inter', sans-serif;
            transition: background 0.3s ease;
            overflow-x: hidden; 
        }

        /* ===== PAGE LOAD ANIMATIONS ===== */
        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeSlideUp {
            from { opacity: 0; transform: translateY(30px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .animate-header { animation: fadeSlideDown 0.6s cubic-bezier(0.22, 1, 0.36, 1) backwards; }
        .animate-content-1 { animation: fadeSlideUp 1.2s cubic-bezier(0.22, 1, 0.36, 1) 0.1s backwards; }
        .animate-content-2 { animation: fadeSlideUp 1.2s cubic-bezier(0.22, 1, 0.36, 1) 0.25s backwards; }
        .animate-footer { animation: fadeSlideUp 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.4s backwards; }

        /* ===== CLAY COMPONENTS ===== */
        .clay {
            background: var(--clay-base);
            border-radius: 24px;
            box-shadow: 8px 8px 16px var(--shadow-dark), -8px -8px 16px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark);
            transition: all 0.3s ease;
        }
        .clay:hover {
            transform: translateY(-2px);
            box-shadow: 10px 10px 20px var(--shadow-dark), -10px -10px 20px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark);
        }

        .clay-strong {
            background: var(--clay-strong);
            border-radius: 28px;
            box-shadow: 12px 12px 24px var(--shadow-dark), -12px -12px 24px var(--shadow-light), inset 2px 2px 4px var(--shadow-light), inset -2px -2px 4px var(--shadow-dark);
            transition: all 0.3s ease;
        }
        .clay-strong:hover {
            transform: translateY(-3px);
            box-shadow: 14px 14px 28px var(--shadow-dark), -14px -14px 28px var(--shadow-light), inset 2px 2px 4px var(--shadow-light), inset -2px -2px 4px var(--shadow-dark);
        }

        .clay-subtle {
            background: var(--clay-subtle);
            border-radius: 20px;
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark);
        }

        .clay-inset {
            background: var(--clay-inset);
            border-radius: 16px;
            box-shadow: inset 4px 4px 8px var(--shadow-dark), inset -4px -4px 8px var(--shadow-light);
        }

        /* ===== INPUTS & BUTTONS ===== */
        .clay-input {
            background: var(--input-bg);
            border: none;
            border-radius: 16px;
            box-shadow: inset 4px 4px 8px var(--shadow-dark), inset -4px -4px 8px var(--shadow-light);
            color: var(--input-text);
            font-family: 'JetBrains Mono', monospace;
            transition: all 0.25s ease;
            padding: 14px 16px;
        }
        .clay-input:focus {
            outline: none;
            box-shadow: inset 5px 5px 10px var(--shadow-dark), inset -5px -5px 10px var(--shadow-light), 0 0 0 3px rgba(113, 113, 122, 0.2);
        }
        .clay-input::placeholder { color: var(--input-placeholder); font-family: 'Inter', sans-serif; }

        .btn-clay {
            background: linear-gradient(135deg, var(--btn-bg-start), var(--btn-bg-end));
            border: none;
            border-radius: 16px;
            color: var(--btn-text);
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease;
            font-weight: 700;
            cursor: pointer;
        }
        .btn-clay:hover { filter: brightness(1.1); transform: translateY(-2px); }
        .btn-clay:active { transform: translateY(1px); box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light), inset 3px 3px 6px rgba(0, 0, 0, 0.2), inset -3px -3px 6px var(--shadow-light); }

        .btn-clay-subtle {
            background: var(--clay-base);
            border: none;
            border-radius: 16px;
            color: var(--text-secondary);
            box-shadow: 4px 4px 8px var(--shadow-dark), -4px -4px 8px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark);
            transition: all 0.2s ease;
            font-weight: 600;
            cursor: pointer;
        }
        .btn-clay-subtle:hover { filter: brightness(1.05); transform: translateY(-1px); }
        .btn-clay-subtle:active { transform: translateY(1px); box-shadow: inset 3px 3px 6px var(--shadow-dark), inset -3px -3px 6px var(--shadow-light); }

        /* ===== BADGES & PILLS ===== */
        .plate-display {
            background: var(--clay-strong);
            border-radius: 16px;
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark);
        }

        .badge-clay {
            background: linear-gradient(135deg, var(--btn-bg-start), var(--btn-bg-end));
            border-radius: 16px;
            color: var(--btn-text);
            box-shadow: 6px 6px 12px var(--shadow-dark), -6px -6px 12px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px rgba(0, 0, 0, 0.2);
        }

        .badge-clay-sm {
            background: linear-gradient(135deg, var(--steel-light), var(--steel-dark));
            border-radius: 12px;
            color: #ffffff;
            box-shadow: 3px 3px 6px var(--shadow-dark), -3px -3px 6px var(--shadow-light), inset 1px 1px 2px rgba(255, 255, 255, 0.2);
        }

        .clay-pill {
            display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; border-radius: 9999px; font-size: 10px; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase; background: var(--pill-bg); color: var(--pill-text); box-shadow: 3px 3px 6px var(--pill-shadow-dark), -3px -3px 6px var(--pill-shadow-light), inset 1px 1px 2px var(--pill-shadow-light), inset -1px -1px 2px var(--pill-shadow-dark); transition: all 0.2s ease;
        }
        .clay-pill-dark {
            background: linear-gradient(135deg, var(--steel-main), var(--navy-dark)); color: #f4f4f5; box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3), -2px -2px 5px rgba(255, 255, 255, 0.05), inset 1px 1px 2px rgba(255, 255, 255, 0.15);
        }

        /* ===== NEW PLATE CARD DESIGN COZ TABLE NO BUENO ===== */
        .plate-card {
            background: var(--clay-base);
            border-radius: 22px;
            padding: 16px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 
                6px 6px 12px var(--shadow-dark), 
                -6px -6px 12px var(--shadow-light),
                inset 1px 1px 2px var(--shadow-light),
                inset -1px -1px 2px var(--shadow-dark);
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: relative;
            overflow: hidden;
        }

        .plate-card:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 
                8px 8px 18px var(--shadow-dark), 
                -8px -8px 18px var(--shadow-light),
                inset 1px 1px 2px var(--shadow-light),
                inset -1px -1px 2px var(--shadow-dark);
        }

        .plate-card:active {
            transform: translateY(1px) scale(0.99);
            box-shadow: 
                inset 4px 4px 8px var(--shadow-dark), 
                inset -4px -4px 8px var(--shadow-light);
        }

        .plate-card::before {
            content: '';
            position: absolute;
            left: 0; top: 0; bottom: 0;
            width: 4px;
            border-radius: 22px 0 0 22px;
            background: var(--steel-main);
            opacity: 0.5;
            transition: opacity 0.2s;
        }
        .plate-card:hover::before { opacity: 1; }

        /* ===== SCROLLBAR ===== */
        * { scrollbar-width: thin; scrollbar-color: var(--text-muted) var(--clay-base); }
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: var(--clay-base); border-radius: 4px; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, var(--text-muted), var(--text-secondary)); border-radius: 4px; border: 2px solid var(--clay-base); }

        /* ===== UTILITIES ===== */
        .content-layer { position: relative; z-index: 1; }
        .accent-steel { border-left: 4px solid var(--steel-main); }
        .accent-navy { border-left: 4px solid var(--navy-dark); }
        .accent-slate { border-left: 4px solid var(--text-faint); }
        .accent-haze { border-left: 4px solid var(--shadow-dark); }
        .text-primary { color: var(--text-primary); }
        .text-secondary { color: var(--text-secondary); }
        .text-muted { color: var(--text-muted); }
        .text-faint { color: var(--text-faint); }

        /* ===== GRAYSCALE THEME TOGGLE ANIMATION ===== */
        .theme-toggle-icon { transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease; position: absolute; color: var(--text-secondary); }
        .dark .theme-icon-sun { opacity: 1; transform: rotate(360deg) scale(1); }
        .dark .theme-icon-moon { opacity: 0; transform: rotate(90deg) scale(0); }
        .theme-icon-sun { opacity: 0; transform: rotate(-90deg) scale(0); }
        .theme-icon-moon { opacity: 1; transform: rotate(0deg) scale(1); }

        /* ===== EMPTY STATE ANIMATION ===== */
        @keyframes carBounce { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-6px); } }
        .empty-state-animate { animation: fadeInUp 0.4s ease-out both; }
        .empty-step-1 { animation: fadeInUp 0.4s 0.1s ease-out both; }
        .empty-step-2 { animation: fadeInUp 0.4s 0.2s ease-out both; }
        .empty-step-3 { animation: fadeInUp 0.4s 0.3s ease-out both; }

        .footer-clay { transition: all 0.6s cubic-bezier(0.25, 0.8, 0.25, 1); }
        .footer-clay:hover { transform: translateY(-3px); box-shadow: 10px 10px 20px var(--shadow-dark), -10px -10px 20px var(--shadow-light), inset 1px 1px 2px var(--shadow-light), inset -1px -1px 2px var(--shadow-dark); }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="content-layer">
        {{-- TOP BAR --}}
        <header class="sticky top-0 z-50 px-4 pt-4 pb-2 animate-header">
            <div class="max-w-[1440px] mx-auto">
                <div class="clay-strong px-6 py-3 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl btn-clay flex items-center justify-center">
                            <i class="fas fa-car-side text-white text-sm"></i>
                        </div>
                        <div>
                            <h1 class="text-primary font-bold text-sm tracking-wide">IDPLAT</h1>
                            <p class="text-muted text-[10px] tracking-[0.15em] uppercase font-medium">Cek Plat Nomor</p>
                        </div>
                    </div>

                    {{-- GRAYSCALE THEME TOGGLE --}}
                    <button id="theme-toggle" class="clay-subtle w-10 h-10 rounded-xl flex items-center justify-center hover:text-primary transition-colors focus:outline-none" aria-label="Toggle Dark Mode">
                        <div class="relative w-5 h-5 flex items-center justify-center">
                            <i class="fas fa-sun theme-toggle-icon theme-icon-sun"></i>
                            <i class="fas fa-moon theme-toggle-icon theme-icon-moon"></i>
                        </div>
                    </button>
                </div>
            </div>
        </header>

        {{-- MAIN --}}
        <main class="max-w-[1440px] mx-auto px-4 py-4">
            @if(session('success'))
                <div class="clay p-3 mb-4 flex items-center gap-3 accent-steel animate-content-1">
                    <i class="fas fa-circle-check text-secondary text-sm"></i>
                    <p class="text-primary text-sm">{{ session('success') }}</p>
                </div>
            @endif
            @if(session('refresh_error'))
                <div class="clay p-3 mb-4 flex items-center gap-3 accent-slate animate-content-1">
                    <i class="fas fa-circle-exclamation text-muted text-sm"></i>
                    <p class="text-primary text-sm">{{ session('refresh_error') }}</p>
                </div>
            @endif
            @if($loadError)
                <div class="clay p-3 mb-4 flex items-center gap-3 accent-slate animate-content-1">
                    <i class="fas fa-triangle-exclamation text-muted text-sm"></i>
                    <p class="text-primary text-sm">Gagal memuat data: {{ $loadError }}</p>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-5">
                {{-- LEFT COLUMN --}}
                <div class="lg:col-span-5 space-y-5 animate-content-1">
                    <div class="clay-strong p-6">
                        <div class="flex items-center gap-2.5 mb-5">
                            <div class="w-8 h-8 rounded-xl clay-subtle flex items-center justify-center">
                                <i class="fas fa-magnifying-glass text-secondary text-xs"></i>
                            </div>
                            <h2 class="text-primary font-bold text-sm tracking-wide uppercase">Identifikasi Plat</h2>
                        </div>
                        <form action="{{ route('vehicle-plate.check') }}" method="POST" class="space-y-4">
                            @csrf
                            <div class="clay-inset p-1">
                                <div class="relative">
                                    <div class="absolute left-4 top-1/2 -translate-y-1/2 text-faint">
                                        <i class="fas fa-keyboard text-sm"></i>
                                    </div>
                                    <input type="text" name="plate_number" value="{{ old('plate_number', $input) }}" placeholder="B atau B 1174 KKB" class="clay-input w-full pl-11 pr-4 py-3.5 text-lg uppercase tracking-[0.15em] bg-transparent" required autofocus autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="btn-clay w-full py-3.5 text-sm tracking-wider uppercase flex items-center justify-center gap-2">
                                <i class="fas fa-search"></i> Cek Plat
                            </button>
                        </form>
                        @error('plate_number')
                            <div class="mt-3 flex items-center gap-2">
                                <i class="fas fa-circle-exclamation text-muted text-xs"></i>
                                <p class="text-secondary text-xs">{{ $message }}</p>
                            </div>
                        @enderror
                        <div class="mt-5 pt-4 border-t border-gray-500/20">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="text-faint text-[10px] uppercase tracking-widest font-medium">Contoh:</span>
                                @foreach(['B', 'DK', 'B 1174 KKB', 'AB 1234 CD'] as $example)
                                    <span class="text-secondary text-[11px] clay-subtle px-2.5 py-1 rounded-lg">{{ $example }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @if($error)
                        <div class="clay p-4 flex items-center gap-3 accent-slate">
                            <div class="w-9 h-9 rounded-xl clay-subtle flex items-center justify-center">
                                <i class="fas fa-triangle-exclamation text-muted text-sm"></i>
                            </div>
                            <p class="text-primary text-sm font-medium">{{ $error }}</p>
                        </div>
                    @endif

                    @if($result)
                        <div class="clay-strong p-6 space-y-4">
                            <div class="flex items-stretch gap-4">
                                <div class="clay-inset p-4 flex-1 flex flex-col gap-4">
                                    <span class="clay-pill self-start shrink-0">
                                        <i class="fas fa-arrow-right-to-bracket"></i> Input
                                    </span>
                                    <div class="plate-display px-5 py-3 w-fit">
                                        <span class="text-primary text-xl font-extrabold tracking-[0.12em]">{{ $result['input'] }}</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center gap-4">
                                    <span class="clay-pill">Kode</span>
                                    <div class="badge-clay px-6 py-3">
                                        <span class="text-2xl font-extrabold tracking-wider">{{ $result['plate_code'] }}</span>
                                    </div>
                                </div>
                            </div>

                            @if($result['detailed_city'])
                                <div class="clay-inset p-4 accent-navy">
                                    <span class="clay-pill mb-3">
                                        <i class="fas fa-location-dot"></i> Kota
                                    </span>
                                    <p class="text-primary text-lg font-bold">{{ $result['detailed_city'] }}</p>
                                </div>
                            @elseif($result['is_full_plate'])
                                <div class="clay-subtle p-3 flex items-center gap-2.5 accent-haze">
                                    <i class="fas fa-circle-info text-muted text-xs"></i>
                                    <p class="text-secondary text-xs">Lokasi detail belum tersedia untuk kombinasi ini.</p>
                                </div>
                            @else
                                <div class="clay-inset p-3 flex items-center gap-2.5 accent-steel">
                                    <p class="text-secondary text-xs">Masukkan plat lengkap (contoh: <span class="text-primary font-semibold">{{ $result['plate_code'] }} 1234 ABC</span>) untuk detail kota.</p>
                                </div>
                            @endif

                            <div class="grid grid-cols-2 gap-3">
                                <div class="clay-inset p-4 accent-steel">
                                    <span class="clay-pill mb-3"><i class="fas fa-map"></i> Wilayah</span>
                                    <p class="text-primary text-base font-bold">{{ $result['region'] }}</p>
                                </div>
                                <div class="clay-inset p-4 accent-steel">
                                    <span class="clay-pill mb-3"><i class="fas fa-earth-asia"></i> Provinsi</span>
                                    <p class="text-primary text-base font-bold">{{ $result['province'] }}</p>
                                </div>
                            </div>

                            @if($result['cities'] && !$result['detailed_city'])
                                <div class="clay-inset p-4 accent-slate">
                                    <span class="clay-pill clay-pill-dark mb-3">
                                        <i class="fas fa-city"></i> Mencakup Kota / Kabupaten
                                    </span>
                                    <p class="text-secondary text-sm leading-relaxed">{{ $result['cities'] }}</p>
                                </div>
                            @endif
                        </div>
                    @endif

                    {{-- EMPTY STATE: shown when no result & no error --}}
                    @if(!$result && !$error)
                        <div class="clay p-8 flex flex-col items-center justify-center text-center space-y-5 empty-state-animate">
                            <div class="relative">
                                <div class="w-20 h-20 rounded-2xl clay-inset flex items-center justify-center">
                                    <i class="fas fa-car-side text-faint text-2xl" style="animation: carBounce 2.5s ease-in-out infinite;"></i>
                                </div>
                                <div class="absolute -top-1.5 -right-1.5 w-3.5 h-3.5 rounded-full clay-subtle"></div>
                                <div class="absolute -bottom-1 -left-1 w-2.5 h-2.5 rounded-full clay-subtle"></div>
                                <div class="absolute top-1 -left-2 w-1.5 h-1.5 rounded-full clay-subtle"></div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-secondary font-bold text-sm tracking-wide">Masukkan Nomor Plat Kendaraan</p>
                                <p class="text-muted text-xs leading-relaxed max-w-[230px] mx-auto">Ketik kode atau nomor plat di kolom atas untuk mengetahui asal wilayah dan provinsinya.</p>
                            </div>
                            <div class="flex items-center gap-2 flex-wrap justify-center">
                                <span class="clay-pill text-[10px] normal-case"><i class="fas fa-keyboard"></i> Kode saja (B)</span>
                                <span class="text-faint text-[11px] font-medium">atau</span>
                                <span class="clay-pill text-[10px] normal-case"><i class="fas fa-hashtag"></i> Plat lengkap (B 1174 KKB)</span>
                            </div>
                            <div class="w-full space-y-2.5 pt-4 border-t border-gray-500/15">
                                <div class="flex items-center gap-3 text-left empty-step-1">
                                    <div class="w-6 h-6 rounded-lg badge-clay-sm flex items-center justify-center shrink-0"><span class="text-[10px] font-bold text-white">1</span></div>
                                    <p class="text-muted text-[11px] leading-snug">Ketik nomor plat, contoh: <span class="text-secondary font-semibold font-mono text-[11px]">B 1174 KKB</span></p>
                                </div>
                                <div class="flex items-center gap-3 text-left empty-step-2">
                                    <div class="w-6 h-6 rounded-lg badge-clay-sm flex items-center justify-center shrink-0"><span class="text-[10px] font-bold text-white">2</span></div>
                                    <p class="text-muted text-[11px] leading-snug">Tekan tombol <span class="text-secondary font-semibold">Cek Plat</span> untuk melihat hasilnya</p>
                                </div>
                                <div class="flex items-center gap-3 text-left empty-step-3">
                                    <div class="w-6 h-6 rounded-lg badge-clay-sm flex items-center justify-center shrink-0"><span class="text-[10px] font-bold text-white">3</span></div>
                                    <p class="text-muted text-[11px] leading-snug">Atau klik langsung kartu di <span class="text-secondary font-semibold">daftar kanan</span> untuk cari cepat</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                {{-- RIGHT COLUMN --}}
                <div class="lg:col-span-7 animate-content-2">
                    @if(count($allCodes) > 0)
                        <div class="clay-strong p-6 flex flex-col h-full max-h-[810px]">
                            <div class="flex flex-wrap items-center justify-between gap-3 mb-5 shrink-0">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-8 h-8 rounded-xl clay-subtle flex items-center justify-center">
                                        <i class="fas fa-layer-group text-secondary text-xs"></i>
                                    </div>
                                    <div>
                                        <h3 class="text-primary font-bold text-sm tracking-wide uppercase">Daftar Kode Plat</h3>
                                        <p class="text-muted text-[10px] tracking-wider font-medium">
                                            {{ count($allCodes) }} KODE TERDAFTAR 
                                            <span class="text-faint mx-1">|</span> 
                                            KLIK KARTU UNTUK MENCARI
                                        </p>
                                    </div>
                                </div>
                                <form action="{{ route('vehicle-plate.refresh') }}" method="POST" onsubmit="return confirm('Perbarui data dari API? (2 kredit)');">
                                    @csrf
                                    <button type="submit" class="btn-clay-subtle px-4 py-2 text-[11px] font-semibold tracking-wider flex items-center gap-1.5">
                                        <i class="fas fa-arrows-rotate text-xs"></i> Refresh
                                    </button>
                                </form>
                            </div>
                            
                            {{-- REPLACED TABLE WITH DIV GRID --}}
                            <div class="clay-inset p-4 overflow-y-auto overflow-x-hidden flex-1 w-full">
                                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                                    @foreach($allCodes as $plate)
                                        <div class="plate-card group" onclick="document.querySelector('input[name=plate_number]').value='{{ $plate['plate_code'] }}'; document.querySelector('form[action=\'{{ route('vehicle-plate.check') }}\']').submit();">
                                            
                                            {{-- Header: Code Badge --}}
                                            <div class="flex justify-between items-start">
                                                <span class="badge-clay-sm px-3 py-1.5 text-xs font-bold tracking-wider shadow-sm">
                                                    {{ $plate['plate_code'] }}
                                                </span>
                                                <i class="fas fa-chevron-right text-faint text-[10px] group-hover:text-secondary transition-colors mt-1"></i>
                                            </div>

                                            {{-- Body: Region & Province --}}
                                            <div class="space-y-1">
                                                <h4 class="text-primary font-bold text-sm leading-tight">
                                                    {{ $plate['region'] }}
                                                </h4>
                                                <div class="flex items-center gap-1.5 text-secondary text-[11px] font-medium">
                                                    <i class="fas fa-map-pin text-[9px] text-faint"></i>
                                                    {{ $plate['province'] }}
                                                </div>
                                            </div>

                                            {{-- Footer: Cities (Truncated) --}}
                                            <div class="pt-2 mt-1 border-t border-gray-500/10">
                                                <p class="text-muted text-[10px] leading-snug line-clamp-2">
                                                    {{ $plate['cities'] ?? 'Wilayah sekitar' }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                                {{-- Empty State for Search (Optional if filtered via JS later) --}}
                                @if(count($allCodes) === 0)
                                    <div class="flex flex-col items-center justify-center h-40 text-center">
                                        <i class="fas fa-search text-faint text-2xl mb-2"></i>
                                        <p class="text-muted text-xs">Data tidak ditemukan</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <footer class="mt-5 clay-subtle px-5 py-3 footer-clay animate-footer cursor-default">
                <div class="flex flex-wrap items-center justify-between gap-3 text-[10px]">
                    <div class="flex items-center gap-3 text-muted font-medium">
                        <span class="flex items-center gap-1"><i class="fas fa-database footer-icon"></i> API INDONESIA</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-muted font-medium">
                        <span class="flex items-center gap-1"><i class="fas fa-map footer-icon"></i> Data Samsat Publik</span>
                    </div>
                </div>
            </footer>
        </main>
    </div>

    {{-- SMART THEME TOGGLE SCRIPT --}}
    <script>
        const htmlElement = document.documentElement;
        const themeToggleBtn = document.getElementById('theme-toggle');
        const THEME_KEY = 'idplat-theme';

        function getInitialTheme() {
            const stored = localStorage.getItem(THEME_KEY);
            if (stored === 'dark' || stored === 'light') return stored;
            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        function applyTheme(theme) {
            if (theme === 'dark') {
                htmlElement.classList.add('dark');
            } else {
                htmlElement.classList.remove('dark');
            }
        }

        applyTheme(getInitialTheme());

        themeToggleBtn.addEventListener('click', () => {
            const isDark = htmlElement.classList.contains('dark');
            const newTheme = isDark ? 'light' : 'dark';
            applyTheme(newTheme);
            localStorage.setItem(THEME_KEY, newTheme);
        });

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            if (!localStorage.getItem(THEME_KEY)) {
                applyTheme(e.matches ? 'dark' : 'light');
            }
        });
    </script>
</body>
</html>
