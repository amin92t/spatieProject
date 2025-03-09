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

@include('nav')

    <div class="container mx-auto p-4">

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-800">نقش ها</h2>
                <a href="{{ route('roles.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    ایجاد نقش
                </a>
            </div>

            <div class="p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                نام نقش
                            </th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                عملیات
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($roles as $role)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$role->name}}</div>
                            </td>
                            
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{url('roles/' . $role->id . '/edit')}}" class="text-indigo-600 hover:text-indigo-900">ویرایش</a>
                                <a href="{{url('roles/' . $role->id . '/give-permissions')}}" class="mx-3 text-indigo-600 hover:text-indigo-900">افزودن سطح دسترسی</a>
                                <a href="{{url('roles/' . $role->id . '/delete')}}" class="text-indigo-600 hover:text-indigo-900">حذف</a>
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