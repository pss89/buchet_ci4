<?= $this->extend('layout') ?>

<!-- user_id, user_pwd, user_name, user_phone, user_email, is_admin -->
<?= $this->section('content') ?>
  <div class="text-center text-2xl font-bold text-gray-900 mb-5">회원가입 - PC</div>
  <form class="max-w-sm mx-auto" id="joinForm">
    <div class="mb-5">
      <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900">회원아이디</label>
      <input type="text" id="user_id" name="user_id" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">비밀번호</label>
      <input type="password" id="password" name="password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="mb-5">
      <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">비밀번호 확인</label>
      <input type="password" id="repeat-password" name="repeat-password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="mb-5">
      <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900">이름</label>
      <input type="text" id="user_name" name="user_name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="mb-5">
      <label for="user_phone" class="block mb-2 text-sm font-medium text-gray-900">휴대폰</label>
      <input type="text" id="user_phone" name="user_phone" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="mb-5">
      <label for="user_email" class="block mb-2 text-sm font-medium text-gray-900">이메일</label>
      <input type="text" id="user_email" name="user_email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm 
        rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>
    <div class="flex items-start mb-5">
      <div class="flex items-center h-5">
        <input id="terms" name="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 
          focus:ring-3 focus:ring-blue-300" required />
      </div>
      <label for="terms" class="ms-2 text-sm font-medium text-gray-900">
        I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a>
      </label>
    </div>
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
      focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" onclick="join()">Register new account</button>
  </form>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>