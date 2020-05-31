<template>
  <div>
    <!-- Service -->
    <a id="services" class="invisible block relative" style="top:-5rem"></a>
    <section class="pb-20 bg-gray-300 -mt-24">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div
            v-for="(service,index) in services"
            v-bind:key="index"
            class="pt-6 w-full lg:w-1/3 px-4 text-center"
            v-bind:class="{'lg:pt-12': index%3!=1 }"
          >
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
            >
              <div class="px-4 py-5 flex-auto">
                <div
                  class="tracking-normal text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full"
                  v-bind:class="service.class"
                >
                  <icon
                    v-bind:name="service.icon"
                    class="w-5 h-5 fill-current text-white flex-shrink-0"
                  />
                </div>
                <h6 class="text-xl font-semibold">{{ service.title }}</h6>
                <p class="mt-2 leading-relaxed mb-4 text-gray-600">{{ service.description}}</p>
              </div>
            </div>
          </div>
          <h1
            class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-6 w-full text-center"
          >用戶評價</h1>

          <div v-for="(testimonial) in testimonials" class="w-full h-full px-4 lg:w-1/2 mb-8">
            <div class="h-full bg-white shadow-lg p-6 rounded-lg">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="block w-5 h-5 text-gray-400 mb-4"
                viewBox="0 0 975.036 975.036"
              >
                <path
                  d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"
                />
              </svg>
              <p class="leading-relaxed mb-6">{{ testimonial.comment }}</p>
              <a class="inline-flex items-center">
                <img
                  alt="testimonial"
                  v-bind:src="testimonial.image"
                  class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center"
                />
                <span class="flex-grow flex flex-col pl-4">
                  <span class="title-font font-medium text-gray-900">{{ testimonial.name }}</span>
                  <span class="text-gray-500 text-sm">{{ testimonial.position }}</span>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Service -->
    <!-- About us -->
    <a id="aboutus" class="invisible block relative" style="top:-5rem"></a>
    <section class="relative py-20 bg-white text-gray-700 body-font">
      <div
        class="-mt-20 top-0 bottom-auto left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 80px; transform: translateZ(0px);"
      >
        <svg
          class="absolute bottom-0 overflow-hidden"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="none"
          version="1.1"
          viewBox="0 0 2560 100"
          x="0"
          y="0"
        >
          <polygon class="fill-current text-white" points="2560 0 2560 100 0 100" />
        </svg>
      </div>
      <div class="container px-5 mx-auto">
        <div class="text-center">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Cyber Tech</h1>
          <p
            class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto"
          >Cyber Tech 以安全技術為核心、以服務客戶為動力的技術公司。地點分佈在台灣、菲律賓等地，專注軟體和技術方案出口，支持和服務帶牌照的第三方國家客戶，業務涉及遊戲、APP、軟體、數據服務、雲計算等領域。集團重視技術發展：鼓勵員工熱愛技術、專研技術，營造技術氛圍，認可技術成果，尊重科技人才。</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Heros -->
    <section class="pb-20 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">我們的團隊</h1>
          <p
            class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto"
          >我們重視企業的安全防護，在安全領域上已耕芸數十年，團隊成員專精多種企業應用級防護，為客戶提供實時監控及最好的用戶體驗。</p>
        </div>
        <div class="flex flex-wrap">
          <div v-for="(hero,index) in heros" class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
            <div class="px-6">
              <img
                v-bind:src="hero.image"
                alt="..."
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <div class="pt-6 text-center">
                <h5 class="text-xl font-bold">{{ hero.name }}</h5>
                <p class="mt-1 text-sm text-gray-600 uppercase font-semibold">{{ hero.title }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact us -->
    <a id="contactus" class="invisible block relative" style="top:-5rem"></a>
    <section class="text-gray-700 body-font relative">
      <div class="absolute inset-0 bg-gray-300">
        <iframe
          width="100%"
          height="100%"
          frameborder="0"
          marginheight="0"
          marginwidth="0"
          title="map"
          scrolling="no"
          src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=Taipei&ie=UTF8&t=&z=14&iwloc=B&output=embed"
          style="filter: grayscale(1) contrast(1.2) opacity(0.4);"
        ></iframe>
      </div>
      <div class="px-5 py-24 mx-auto flex">
        <div
          class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10"
        >
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">聯系我們</h2>
          <p class="leading-relaxed mb-5 text-gray-600">歡迎來信諮詢，我們很樂意解決您的問題。</p>
          <input
            class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
            placeholder="Email"
            type="email"
          />
          <textarea
            class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none"
            placeholder="Message"
          ></textarea>
          <button class="btn-indigo">送出</button>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Layout from "@/Shared/Layout";
import Icon from "@/Shared/Icon";

export default {
  metaInfo: { title: "Homepage" },
  layout: Layout,
  components: {
    Icon
  },
  data() {
    return {
      services: [
        {
          icon: "analysis",
          class: "bg-red-400",
          title: "數據分析系統",
          description:
            "分析系統為企業帶來全方位洞察，協助您在繁雜的數位資訊洪流中找出潛在的成長機遇，在繁雜的洪流資訊中精煉出潛在的黃金洞察。"
        },
        {
          icon: "analysis",
          class: "bg-blue-500",
          title: "雲端運維管理",
          description:
            "專業的運維團隊，為企業建立及管理私有雲，也可託管維護阿里雲、AWS、GCP等雲服務。"
        },
        {
          icon: "analysis",
          class: "bg-gray-800",
          title: "架構安全規劃",
          description:
            "協助企業規劃整體網路架構，提供安全系統部署、安全評估、滲透測試、安全監控，保障您的資料安全。"
        },
        {
          icon: "analysis",
          class: "bg-gray-800",
          title: "安全評估服務",
          description:
            "協助企業規劃整體網路架構，提供安全系統部署、安全評估、滲透測試、安全監控，保障您的資料安全。"
        },
        {
          icon: "analysis",
          class: "bg-gray-800",
          title: "滲透測試服務",
          description:
            "協助企業規劃整體網路架構，提供安全系統部署、安全評估、滲透測試、安全監控，保障您的資料安全。"
        },
        {
          icon: "analysis",
          class: "bg-gray-800",
          title: "安全系統部署",
          description:
            "協助企業規劃整體網路架構，提供安全系統部署、安全評估、滲透測試、安全監控，保障您的資料安全。"
        }
      ],
      testimonials: [
        {
          image: "storage/chang.jpg",
          comment:
            "線上系統整合Cyber Tech的安全服務，有效阻絕了外部攻擊，節省下不少部署成本。",
          position: "Chang ,Aux Tech, PH",
          title: "IT Manager"
        },
        {
          image: "storage/nick.jpg",
          comment: "購買了安全評估項目，團隊提供了很多幫助，幫了大忙。",
          position: "Nick ,Firefox Tech, PH",
          title: "Devop"
        }
      ],
      heros: [
        { name: "Len", image: "storage/chang.jpg", title: "CIO" },
        { name: "Aga", image: "storage/chang.jpg", title: "IT Manager" },
        {
          name: "Lee Lim",
          image: "storage/chang.jpg",
          title: "Network Architect"
        },
        { name: "Liew", image: "storage/chang.jpg", title: "System engineer" }
      ]
    };
  }
};
</script>