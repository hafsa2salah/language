<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageeController extends Controller
{
    // عرض الفورم
    public function showForm(Request $request)
    {
        // استرجاع القيم المحفوظة في الـ cookies إذا كانت موجودة
        $savedLanguage = $request->cookie('language', 'en'); // الافتراضية English
        $rememberMe = $request->cookie('rememberMe', false); // الافتراضية غير مفعلة

        return view('language_form', compact('savedLanguage', 'rememberMe'));
    }

    // تخزين التفضيلات في الـ cookies
    public function savePreferences(Request $request)
    {
        $language = $request->input('language');
        $rememberMe = $request->has('rememberMe') ? true : false;

        // إعداد الاستجابة مع تخزين القيم في الـ cookies
        $response = redirect()->route('language.form');
        if ($rememberMe) {
            $response->cookie('language', $language, 43200); // حفظ لمدة 30 يوم (43200 دقيقة)
            $response->cookie('rememberMe', 'true', 43200);
        } else {
            $response->cookie('language', '', -1); // حذف القيم إذا لم يتم تفعيل "تذكرني"
            $response->cookie('rememberMe', '', -1);
        }

        return $response;
    }
}
?>