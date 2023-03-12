<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              bronze: '#AD8A56',
              silver: '#B4B4B4',
              gold: '#C9B037',
            }
          }
        }
      }
    </script>
    <title>Jagostir | Sekolah Stir Mobil Jagoan</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="#"
            >Jagostir</a
          >
        </div>
      </div>
    </nav>
    <main>
      <div
        id="tentang_kami"
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
      >
        <div
          class="absolute top-0 w-full h-full bg-center bg-cover"
          style='background-image: url("https://images.unsplash.com/photo-1619722049858-841f43259e99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80");'
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                  Jago stir mobil bersama Jagostir.
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  Jagostir adalah sekolah stir mobil nomor satu yang paling aman, terpercaya dan profesional di Malang.<br><br>
                  Yuk belajar stir mobil bareng Jagostir!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px;"
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
              class="text-gray-300 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
      </div>
      <section id="harga" class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-bronze"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Paket Bronze</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Rp 1.000.000,-<br>
                    6 x 1 jam gratis 1 jam
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-silver"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Paket Silver</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Rp 1.400.000,-<br>
                    8 x 1 jam gratis 1 jam
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
              >
                <div class="px-4 py-5 flex-auto">
                  <div
                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-gold"
                  >
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Paket Gold</h6>
                  <p class="mt-2 mb-4 text-gray-600">
                    Rp 1.600.000,-<br>
                    12 x 1 jam pertemuan gratis 2 jam
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div id="jadwal" class="flex flex-wrap items-center mt-32">
            <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
              <h3 class="text-3xl mb-2 font-semibold leading-normal">
                Jam operasinal kami
              </h3>
              <p
                class="text-lg font-light leading-relaxed mt-4 mb-4 text-gray-700"
              >
                Kami buka mulai jam 10 pagi sampai jam 10 malam setiap hari sepanjang tahun. Anti libur libur club.
              </p>
              <p
                class="text-lg font-light leading-relaxed mt-0 mb-4 text-gray-700"
              >
                Kamu bisa atur jadwal belajar kamu dengan instruktur pilihanmu sesuai dengan waktu yang kamu miliki.
              </p>
            </div>
            <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-600"
              >
                <img
                  alt="..."
                  class="max-w-full rounded-lg shadow-lg"
                  src="https://images.unsplash.com/photo-1642359085898-d9fde39507c9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c2NoZWR1bGV8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=900&q=60"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="armada" class="relative py-20">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
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
              class="text-white fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
              <img
                alt="armada"
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1617600346256-af3cd5b16a4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YnVtcGVyfGVufDB8MXwwfHw%3D&auto=format&fit=crop&w=900&q=60"
              />
            </div>
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
              <div class="md:pr-12">
                <h3 class="text-3xl font-semibold">Armada kami</h3>
                <p class="mt-4 text-lg leading-relaxed text-gray-600">
                  Di sekolah stir mobil Jagostir kamu bisa belajar stir mobil manual dan matic. Berikut pilihan mobil yang bisa kamu pilih:
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">
                          Avanza
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Xenia</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Yaris</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Agya</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Calya</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Brio</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Jazz</h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"
                          ><i class="fas fa-chevron-right"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-gray-600">Karimun</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="instruktur" class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold">Instruktur</h2>
              <p class="text-lg leading-relaxed m-4 text-gray-600">
                Di Jagostir, kamu akan belajar bareng instruktur-instruktur kece dan berpengalaman. Jadi gak perlu ragu lagi buat belajar stir di Jagostir.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="Dhimas"
                  src="https://images.unsplash.com/photo-1591883307500-9072e99aff62?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fGRyaXZpbmd8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=60"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Dhimas</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Instruktur
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="Anugrah"
                  src="https://images.unsplash.com/photo-1598328932547-d0829378e023?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDJ8fGRyaXZpbmd8ZW58MHwxfDB8fA%3D%3D&auto=format&fit=crop&w=400&h=400&q=60"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Anugrah</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Instruktur
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="Dwi"
                  src="https://images.unsplash.com/photo-1606391904417-cb41023872e5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=400&q=80"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Dwi</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Instruktur
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
              <div class="px-6">
                <img
                  alt="Yunidar"
                  src="https://images.unsplash.com/photo-1562101074-ddc04071bdc8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=400&q=80"
                  class="shadow-lg rounded-full max-w-full mx-auto"
                  style="max-width: 120px;"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Yunidar</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Instruktur
                  </p>
                  <div class="mt-6">
                    <button
                      class="bg-blue-400 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-twitter"></i></button
                    ><button
                      class="bg-blue-600 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-facebook-f"></i></button
                    ><button
                      class="bg-pink-500 text-white w-8 h-8 rounded-full outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                    >
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-20 relative block bg-gray-900">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px;"
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
              class="text-gray-900 fill-current"
              points="2560 0 2560 100 0 100"
            ></polygon>
          </svg>
        </div>
        <div id="pengurus" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white">Pengurus</h2>
              <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
                Kamu akan dilayani kakak-kakak kece ini kalau dateng daftar ke kantor Jagostir.
              </p>
            </div>
          </div>
          <div class="flex flex-wrap mt-12 justify-center">
            <div class="w-full lg:w-3/12 px-4 text-center">
              <img
                alt="Mashita"
                src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=400&q=80"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <h6 class="text-xl mt-5 font-semibold text-white">
                Mashita
              </h6>
              <p class="mt-2 mb-4 text-gray-500">
                Customer Service
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <img
                alt="Ambar"
                src="https://images.unsplash.com/photo-1604904612715-47bf9d9bc670?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=400&q=80"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <h5 class="text-xl mt-5 font-semibold text-white">
                Ambar
              </h5>
              <p class="mt-2 mb-4 text-gray-500">
                Customer Service
              </p>
            </div>
            <div class="w-full lg:w-3/12 px-4 text-center">
              <img
                alt="Kusuma"
                src="https://images.unsplash.com/photo-1640531005390-38bd92755d6a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&h=400&q=80"
                class="shadow-lg rounded-full max-w-full mx-auto"
                style="max-width: 120px;"
              />
              <h5 class="text-xl mt-5 font-semibold text-white">Kusuma</h5>
              <p class="mt-2 mb-4 text-gray-500">
                Customer Service
              </p>
            </div>
          </div>
        </div>
      </section>
      <section id="narahubung" class="relative block py-24 lg:pt-0 bg-gray-900">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
              >
                <div class="flex-auto p-5 lg:p-10">
                  <h4 class="text-2xl font-semibold">Ingin belajar bersama kami?</h4>
                  <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                    Isi formulir di bawah ini dan kami akan hubungi kamu dalam 24 jam.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="full-name"
                      >Nama lengkap</label
                    ><input
                      type="text"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Nama lengkap"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="email"
                      >Email</label
                    ><input
                      type="email"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Email"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="email"
                      >Nomor telepon</label
                    ><input
                      type="phone"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Nomor telepon"
                      style="transition: all 0.15s ease 0s;"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-gray-700 text-xs font-bold mb-2"
                      for="message"
                      >Pesan</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                      placeholder="Tulis pesanmu disini..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s;"
                    >
                      Kirim pesan
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="relative bg-gray-300 pt-8 pb-6">
      <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
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
            class="text-gray-300 fill-current"
            points="2560 0 2560 100 0 100"
          ></polygon>
        </svg>
      </div>
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            <h4 class="text-3xl font-semibold">Jagostir | Sekolah Stir Mobil Jagoan</h4>
            <h5 class="text-lg mt-0 mb-2 text-gray-700">
              CV Sekolah Stir Jago<br>
              Jl. Dr. Sutomo No. 123<br>
              Lawang Malang<br>
              +62 341 1234 5678<br>
              Yuk ikuti kami di jejaring media sosial di bawah ini!
            </h5>
            <div class="mt-6">
              <button
                class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-twitter"></i>
              </button>
              <button
                class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-facebook-square"></i>
              </button>
              <button
                class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                type="button"
              >
                <i class="flex fab fa-instagram"></i>
              </button>
            </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
            <div class="flex flex-wrap items-top mb-6">
              <div class="w-full lg:w-4/12 px-4 ml-auto">
                <span
                  class="block uppercase text-gray-600 text-sm font-semibold mb-2"
                  >Tautan</span
                >
                <ul class="list-unstyled">
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#tentang_kami"
                      >Tentang kami</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#harga"
                      >Harga</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#jadwal"
                      >Jadwal</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#armada"
                      >Armada</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#instruktur"
                      >Instruktur</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#pengurus"
                      >Pengurus</a
                    >
                  </li>
                  <li>
                    <a
                      class="text-gray-700 hover:text-gray-900 font-semibold block pb-2 text-sm"
                      href="#narahubung"
                      >Narahubung</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
          class="flex flex-wrap items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-gray-600 font-semibold py-1">
              Copyright © 2023
              <a
                href="#"
                class="text-gray-600 hover:text-gray-900"
                >Jagostir | Sekolah Stir Mobil Jagoan</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
