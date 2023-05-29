<?= $this->extend("layouts/layout")  ?>

    <?= $this->section("title")  ?> Laboratory 1 - Final Term <?= $this->endSection()  ?>

        <?= $this->section("content")  ?>

        <h1 class="text-center pt-20 font-bold text-4xl">Laboratory 2 - Final Term</h1>

            <div class="w-full xl:w-6/12 px-4 mx-auto mt-24">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                <img class="w-80 mx-auto pt-4" src="<?=base_url()?>/pnc-icon.png" />
                    <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-2 py-6 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-2xl text-gray-700">
                        UC Student's Info
                        </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a href="<?= site_url("/user/new") ?>" class="bg-blue-500 hover:bg-blue-700 text-white active:bg-blue-600 text-xs font-bold uppercase p-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                        Add Student's Info
                        </a>
                    </div>
                    </div>
                </div>
                
                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full border-collapse text-blueGray-700  ">
                    <thead class="thead-light">
                        <tr>
                        <th class="px-6 bg-gray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Student Name
                        </th>
                        <th class="px-6 bg-gray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Section
                        </th>
                        <th class="px-6 bg-gray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Student Number
                        </th>
                        <th class="px-6 bg-gray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Contact Number
                        </th>
                        <th class="px-6 bg-gray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-sm uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            Action
                        </th>
                        
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left">
                                <?= $user['name']  ?>
                            </th>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 ">
                                <?= $user['section']  ?>
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 ">
                                <?= $user['student_number']  ?>
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 ">
                                <?= $user['contact_number']  ?>
                            </td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 ">
                                <a href="<?= site_url("/user/edit/" . $user['id']) ?>" class="bg-blue-500 hover:bg-blue-700 text-white active:bg-blue-600 text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    Edit
                                </a>
                                <a href="<?= site_url("/user/delete/" . $user['id']) ?>" class="bg-red-500 hover:bg-red-700 text-white active:bg-red-600 text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
                                    Delete
                                </a>
                            </td>
                            </tr>
                        <?php endforeach;  ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>

<?= $this->endSection()  ?>

<!-- Made by Mark Lester T. Acak -->