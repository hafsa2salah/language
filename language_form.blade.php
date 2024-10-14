<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Preferences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7; /* خلفية فاتحة */
            color: #333; /* لون النص */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* ملء الشاشة عمودياً */
        }

        .container {
            background-color: #fff; /* لون خلفية المحتوى */
            padding: 20px;
            border-radius: 8px; /* زوايا مدورة */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* ظل خفيف */
            width: 300px; /* عرض ثابت */
            text-align: center; /* توسيط النص */
        }

        h1 {
            color: #ff7f50; /* لون البرتقالي */
            margin-bottom: 20px; /* مسافة أسفل العنوان */
        }

        label {
            margin-top: 10px; /* مسافة أعلى التسمية */
            display: block; /* جعل التسمية عنصر بلوك */
            margin-bottom: 5px; /* مسافة أسفل التسمية */
        }

        select, input[type="checkbox"] {
            margin-bottom: 15px; /* مسافة أسفل الحقول */
        }

        button {
            background-color: #ff7f50; /* لون الزر */
            color: #fff; /* لون النص في الزر */
            border: none; /* بدون إطار */
            border-radius: 5px; /* زوايا مدورة للزر */
            padding: 10px 15px; /* تباعد داخلي */
            cursor: pointer; /* شكل المؤشر عند المرور */
            font-size: 16px; /* حجم الخط في الزر */
            transition: background-color 0.3s; /* تأثير انتقال */
        }

        button:hover {
            background-color: #ff5a24; /* لون الزر عند التحويم */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Select Your Language Preferences</h1>

        <form action="{{ route('language.save') }}" method="POST">
            @csrf
            <label for="language">Choose a language:</label>
            <select id="language" name="language">
                <option value="en" {{ $savedLanguage == 'en' ? 'selected' : '' }}>English</option>
                <option value="ar" {{ $savedLanguage == 'ar' ? 'selected' : '' }}>Arabic</option>
                <option value="fr" {{ $savedLanguage == 'fr' ? 'selected' : '' }}>French</option>
            </select>

            <input type="checkbox" id="rememberMe" name="rememberMe" {{ $rememberMe ? 'checked' : '' }}>
            <label for="rememberMe">Remember Me</label>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
