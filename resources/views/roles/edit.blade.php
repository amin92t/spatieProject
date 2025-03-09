<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد سطح دسترسی</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @layer utilities {
            .rtl {
                direction: rtl;
            }
        }
    </style>
</head>
<body class="bg-gray-100 rtl">

    <div class="container mx-auto p-4">

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">تغییر نقش</h2>
                <a href="{{ route('roles.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    بازگشت نقش
                </a>
            </div>

            <div class="p-6">
                <form class="space-y-6" action="{{url('roles/' . $role->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="access_level_name" class="block text-right font-medium text-gray-700">نام نقش:</label>
                        <div class="mt-1">
                            <input value="{{$role->name}}" id="access_level_name" name="name" type="text" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rtl" placeholder="مثال: مدیر سیستم">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            تایید
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>