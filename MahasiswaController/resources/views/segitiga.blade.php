<!DOCTYPE html>
<html>
<head>
    <title>Luas Segitiga</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f4f8; display: flex; justify-content: center; padding: 40px 16px; }
        .card { background: #fff; padding: 24px; border-radius: 12px; width: 100%; max-width: 360px; box-shadow: 0 2px 8px rgba(0,0,0,.1); }
        h2 { margin-top: 0; text-align: center; }
        label { display: block; margin-top: 12px; font-size: 14px; }
        input { width: 100%; padding: 10px; margin-top: 4px; border: 1px solid #ccc; border-radius: 6px; box-sizing: border-box; }
        button { width: 100%; margin-top: 16px; padding: 12px; background: #2563eb; color: #fff; border: 0; border-radius: 6px; font-size: 16px; }
        .hasil { margin-top: 16px; padding: 12px; background: #dcfce7; border-radius: 6px; text-align: center; }
        .error { color: #dc2626; font-size: 13px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Luas Segitiga</h2>
        <form method="POST" action="/kalkulator/segitiga">
            @csrf
            <label>Alas</label>
            <input type="number" step="any" name="alas" value="{{ old('alas') }}">
            @error('alas') <div class="error">{{ $message }}</div> @enderror

            <label>Tinggi</label>
            <input type="number" step="any" name="tinggi" value="{{ old('tinggi') }}">
            @error('tinggi') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Hitung</button>
        </form>

        @isset($luas)
        <div class="hasil">
            Luas = ½ × {{ $alas }} × {{ $tinggi }} = <b>{{ $luas }}</b>
        </div>
        @endisset
    </div>
</body>
</html>
