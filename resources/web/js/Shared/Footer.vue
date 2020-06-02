<template>
  <footer class="w-full bg-gray-900 pb-6">
    <div class="container mx-auto px-4">
      <hr class="mb-6 border-b-1 border-gray-700" />
      <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4">
          <div class="text-sm text-white font-semibold py-1">
            Copyright © {{date}}
            <a
              href="/"
              class="text-white hover:text-gray-400 text-sm font-semibold py-1"
            >{{ $page.app.name }}</a>
          </div>
        </div>
        <div class="w-full md:w-8/12 px-4">
          <ul class="flex flex-wrap list-none md:justify-end justify-center">
            <li>
              <a
                href="/terms"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
              >服務條款</a>
            </li>
            <li>
              <a
                href="#products"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
              >產品</a>
            </li>
            <li>
              <a
                href="#aboutus"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
              >關於我們</a>
            </li>
            <li>
              <a
                href="#contacts"
                class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
              >聯繫我們</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>
<script>
export default {
  data() {
    return {
      date: new Date().getFullYear()
    };
  }
};
</script>