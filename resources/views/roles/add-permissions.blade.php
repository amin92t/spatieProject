<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد/تغییر سطح برای نقش</title>
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
                <h2 class="text-xl font-semibold text-gray-800"> {{$role->name}}</h2>
                <a href="{{ route('roles.index') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    بازگشت به نقش ها
                </a>
            </div>

            <div class="p-6">
                <form class="space-y-6" action="{{url('roles/' . $role->id . '/give-permissions')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>

                        <div class="space-y-2">
                            @foreach($permissions as $key => $permission)
                                <div class="flex items-center">
                                    <input type="checkbox" id="{{ $permission->id }}" name="permission[]" value="{{ $permission->name }}"
                                        class="ml-8 form-checkbox rounded text-indigo-500 focus:ring-indigo-400">
                                    <label for="{{ $permission->id }}" class="text-gray-700">{{ $permission->name }}</label>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            تایید و ایجاد
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>