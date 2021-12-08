<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Log</title>

    <style>
        td {
            max-width: 8rem;
        }
    </style>
</head>

<body>
    <div class="mx-5 max-w-7xl lg:mx-12">
        <div class="text-3xl font-semibold py-8">
            Activity Log
        </div>

        <div class="mx-auto flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        System UID
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Process
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Contents
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Level
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        File
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Data
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($logs as $log)
                                <tr class="bg-white">
                                    <td class="px-6 py-4 overflow-x-auto text-sm font-medium text-gray-900">
                                        {{ $log->system_uid }}
                                    </td>
                                    <td class="px-6 py-4 overflow-x-auto text-sm text-gray-500">
                                        {{ $log->process }}
                                    </td>
                                    <td class="px-6 py-4 overflow-x-auto text-sm text-gray-500">
                                        {{ $log->contents }}
                                    </td>
                                    <td class="px-6 py-4 overflow-x-auto text-sm text-gray-500">
                                        {{ $log->level }}
                                    </td>
                                    <td class="px-6 py-4 overflow-x-auto text-sm text-gray-500">
                                        {{ $log->file }}
                                    </td>
                                    <td class="px-6 py-4 overflow-x-auto text-sm text-gray-500">
                                        {{ $log->data }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>