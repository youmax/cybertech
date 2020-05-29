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
          <polygon
            class="fill-current text-white"
            points="2560 0 2560 100 0 100"
          />
        </svg>
      </div>
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Cyber Tech</h1>
          <p
            class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto"
          >Cyber Tech 以安全技術為核心、以服務客戶為動力的技術公司。地點分佈在台灣、菲律賓等地，專注軟體和技術方案出口，支持和服務帶牌照的第三方國家客戶，業務涉及遊戲、APP、軟體、數據服務、雲計算等領域。集團重視技術發展：鼓勵員工熱愛技術、專研技術，營造技術氛圍，認可技術成果，尊重科技人才。</p>
          <div class="flex mt-6 justify-center">
            <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
            <div
              class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-10 h-10"
                viewBox="0 0 24 24"
              >
                <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Shooting Stars</h2>
              <p
                class="leading-relaxed text-base"
              >Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">
                Learn More
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-4 h-4 ml-2"
                  viewBox="0 0 24 24"
                >
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
            <div
              class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-10 h-10"
                viewBox="0 0 24 24"
              >
                <circle cx="6" cy="6" r="3" />
                <circle cx="6" cy="18" r="3" />
                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12" />
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">The Catalyzer</h2>
              <p
                class="leading-relaxed text-base"
              >Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">
                Learn More
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-4 h-4 ml-2"
                  viewBox="0 0 24 24"
                >
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
          <div class="p-4 md:w-1/3 md:mb-0 mb-6 flex flex-col text-center items-center">
            <div
              class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-5 flex-shrink-0"
            >
              <svg
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                class="w-10 h-10"
                viewBox="0 0 24 24"
              >
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
            </div>
            <div class="flex-grow">
              <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Neptune</h2>
              <p
                class="leading-relaxed text-base"
              >Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing banh mi pug VHS try-hard.</p>
              <a class="mt-3 text-indigo-500 inline-flex items-center">
                Learn More
                <svg
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  class="w-4 h-4 ml-2"
                  viewBox="0 0 24 24"
                >
                  <path d="M5 12h14M12 5l7 7-7 7" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <button
          class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
        >Button</button>
      </div>
    </section>
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
          src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
          style="filter: grayscale(1) contrast(1.2) opacity(0.4);"
        ></iframe>
      </div>
      <div class="px-5 py-24 mx-auto flex">
        <div
          class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10"
        >
          <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
          <p
            class="leading-relaxed mb-5 text-gray-600"
          >Post-ironic portland shabby chic echo park, banjo fashion axe</p>
          <input
            class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4"
            placeholder="Email"
            type="email"
          />
          <textarea
            class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none"
            placeholder="Message"
          ></textarea>
          <button
            class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"
          >Button</button>
          <p
            class="text-xs text-gray-500 mt-3"
          >Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
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
    Icon,
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
        }
      ]
    };
  }
};
</script>