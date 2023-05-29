<?= $this->extend("layouts/layout")  ?>

    <?= $this->section("title")  ?> Laboratory 2 - Final Term <?= $this->endSection()  ?>

        <?= $this->section("content")  ?>

        <!-- component -->
<div class="flex items-center justify-center p-12">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="mx-auto w-full max-w-[550px] bg-white">
      <div class="py-4 px-3 text-blue-400">
        <a href="<?= site_url("/") ?>" class="text-blue-400 hover:text-blue-700 text-sm font-semibold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-200" type="button">
            &laquo; Back to Home
        </a>
      </div>

      <div class="mb-5 bg-gray-100 py-2 font-semibold text-2xl text-gray-700 text-center">
        <h1>Add Student's Info</h1>
    </div>
    <?= form_open("/user/create") ?>
    <div class="pb-6 px-9">
      <div class="mb-9">
        <label
          for="name"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Student Name:
        </label>
        <input
          type="text"
          name="name"
          id="name"
          value="<?= old('name', esc($user['name']))  ?>"
          placeholder="ex: Juan Dela Cruz"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md"
        />
        <?php if(session()->has('errors')): ?>
            <?php if(isset(session('errors')["name"])): ?>
                <p class="mt-1 text-red-500 absolute text-sm">
                    <?= session('errors')["name"] ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
      </div>

      <div class="mb-9">
        <label
          for="section"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Section:
        </label>
        <input
          type="text"
          name="section"
          id="section"
          value="<?= old('section', esc($user['section']))  ?>"
          placeholder="ex: 1IT-A"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md"
        />
        <?php if(session()->has('errors')): ?>
            <?php if(isset(session('errors')["section"])): ?>
                <p class="mt-1 text-red-500 absolute text-sm">
                    <?= session('errors')["section"] ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
      </div>

      <div class="mb-9">
        <label
          for="student_number"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Student Number:
        </label>
        <input
          type="text"
          name="student_number"
          id="student_number"
          value="<?= old('student_number', esc($user['student_number']))  ?>"
          placeholder="ex: 1912345"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md"
        />
        <?php if(session()->has('errors')): ?>
            <?php if(isset(session('errors')["student_number"])): ?>
                <p class="mt-1 text-red-500 absolute text-sm">
                    <?= session('errors')["student_number"] ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
      </div>

      <div class="mb-9">
        <label
          for="contact_number"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Contact Number:
        </label>
        <input
          type="text"
          name="contact_number"
          id="contact_number"
          value="<?= old('contact_number', esc($user['contact_number']))  ?>"
          placeholder="ex: 09123456789"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-blue-500 focus:shadow-md"
        />
        <?php if(session()->has('errors')): ?>
            <?php if(isset(session('errors')["contact_number"])): ?>
                <p class="mt-1 text-red-500 absolute text-sm">
                    <?= session('errors')["contact_number"] ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
      </div>

      <div>
        <button
          class="hover:bg-green-700 transition duration-300 w-full rounded-md bg-green-500 py-3 px-8 text-center text-base font-semibold text-white outline-none"
        >
          Insert New Data
        </button>
      </div>
      </div>
    </form>
  </div>
</div>

        <?= $this->endSection()  ?>

<!-- Made by Mark Lester T. Acak -->