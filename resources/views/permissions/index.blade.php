<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سطوح دسترسی</title>
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
                <h2 class="text-xl font-semibold text-gray-800">سطوح دسترسی</h2>
                <a href="{{ route('permissions.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    ایجاد دسترسی جدید
                </a>
            </div>

            <div class="p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                نام سطح دسترسی
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                عملیات
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($permissions as $permission)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$permission->name}}</div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{url('permissions/' . $permission->id . '/edit')}}" class="text-indigo-600 hover:text-indigo-900">ویرایش</a>
                                <a href="{{url('permissions/' . $permission->id . '/delete')}}" class="text-indigo-600 hover:text-indigo-900">حذف</a>
                            </td>
                        </tr>
                        @endforeach
                       
                        </tbody>
                </table>
            </div>
        </div>

    </div>

</body>
</html>