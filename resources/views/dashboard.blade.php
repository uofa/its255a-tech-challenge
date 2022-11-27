<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="pb-4">
                        If you've made it this far, congratulations! 🎉
                    </p>
                    <p class="pb-4">
                        Please now add CRUD (create-read-update-delete) functionality to this application. A simple
                        list view of all student records stored in the <span class="font-mono">students</span> table
                        in the database has been created but needs a little work to make it more useful.
                    </p>
                    <ul class="list-disc list-inside pb-4">
                        <li>
                            Create a new student with all attributes as defined in the database. Check the migration
                            (<span class="font-mono">app\database\migrations</span>) to determine what validation rules
                            you should include in your form.
                        </li>
                        <li>
                            Amend the list view to show all student information in a table. Currently,
                            only <span class="font-mono">forename_1</span> and <span class="font-mono">surname</span>
                            are displayed, but we want to see all information about each student.
                        </li>
                        <li>
                            Update a student record.
                        </li>
                        <li>
                            Delete a student's record from the database.
                        </li>
                    </ul>

                    <p class="pb-4">
                        When writing your code, please consider the following:
                    </p>
                    <ul class="list-disc list-inside pb-4">
                        <li>
                            Forms should have comprehensive <a class="hover:underline text-blue-500 hover:text-blue-700"
                                href="https://laravel.com/docs/9.x/validation" target="_blank">server-side validation</a>.
                        </li>
                        <li>
                            The <a class="hover:underline text-blue-500 hover:text-blue-700"
                                href="https://www.php-fig.org/psr/psr-12/" target="_blank">PSR-12 coding standard</a>
                            should be followed.
                        </li>
                        <li>
                            Modern PHP features should be used, where appropriate.
                        </li>
                        <li>
                            Markup should be valid and semantic.
                        </li>
                        <li>
                            The application interface should adhere to the <a class="hover:underline text-blue-500 hover:text-blue-700"
                                href="https://www.w3.org/TR/WCAG21/" target="_blank">WCAG 2.1 AA accessibility standard</a>
                            as far as possible.
                        </li>
                    </ul>
                    <p class="pb-4">
                        The <a class="hover:underline text-blue-500 hover:text-blue-700"
                            href="https://laravel.com/docs/9.x" target="_blank">Laravel documentation</a> is a good
                        starting point if you are still getting familiar with Laravel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
