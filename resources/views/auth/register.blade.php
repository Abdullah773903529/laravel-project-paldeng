<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>إنشاء حساب — MyBlog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- شريط التنقل -->
    <nav class="bg-white shadow mb-6">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">MyBlog</a>
            <div class="space-x-4 rtl:space-x-reverse">

                    {{-- <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">تسجيل خروج</button>
                    <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">دخول</a> --}}
                    <a href="{{ route('login') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">رجوع</a>
            </div>
        </div>
    </nav>

    <!-- محتوى الصفحة -->
    <main class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold text-center mb-6">إنشاء حساب جديد</h2>

        <form method="POST" action="{{ route('regis') }}">
            @csrf

            <!-- الاسم -->
            <div class="mb-4">
                <label for="name" class="block mb-1">الاسم</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required
                       class="w-full px-4 py-2 border rounded @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- البريد الإلكتروني -->
            <div class="mb-4">
                <label for="email" class="block mb-1">البريد الإلكتروني</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                       class="w-full px-4 py-2 border rounded @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- كلمة المرور -->
            <div class="mb-4">
                <label for="password" class="block mb-1">كلمة المرور</label>
                <input id="password" name="password" type="password" required
                       class="w-full px-4 py-2 border rounded @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- تأكيد كلمة المرور -->
            <div class="mb-6">
                <label for="password_confirmation" class="block mb-1">تأكيد كلمة المرور</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="w-full px-4 py-2 border rounded">
            </div>

            <button type="submit"
                    class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                إنشاء الحساب
            </button>
        </form>
    </main>

</body>
</html>
