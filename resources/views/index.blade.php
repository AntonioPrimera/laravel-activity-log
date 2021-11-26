<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>Log</title>
    </head>

    <body>
    <!-- --- Search Field ---------------------------------------------------------------------------------------->

    <div class="md:flex md:justify-between">

        <div class="flex justify-between items-center md:justify-start">

                <span class="font-semibold text-xl leading-snug mr-10">
                    Activity Log
                </span>

        </div>

        <div class="flex justify-center">

            <div class="flex justify-between mt-6 bg-white border border-gray-400 rounded-lg h-10 px-4 md:mt-0"
                 style="width: 20.75rem"
            >

{{--                <input type="text" v-model="search" :placeholder="__('map.search.cta')">--}}
                <input type="text" placeholder="Search...">

                {{-- --- @todo add this img in project----}}
                <img src="/img/mockup/Search.png" alt="search" class="w-4 h-4 my-auto">

            </div>

        </div>

    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Odd row -->
                        <tr class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Jane Cooper
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Regional Paradigm Technician
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                jane.cooper@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Admin
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>

                        <!-- Even row -->
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Cody Fisher
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Product Directives Officer
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                cody.fisher@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                Owner
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>

                        <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>