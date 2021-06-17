@extends('layouts.template')
@section('content')
  <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0"
  data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="img/SDU/banner.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center appear-animation"
                data-appear-animation="bounceIn">
                <h1><strong>Info Kontak</strong></h1>
            </div>
            <div class="col-md-12 align-self-center order-1 appear-animation" data-appear-animation="bounceIn">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="/">Home</a></li>
                    <li class="active">Kontak</li>
                </ul>
            </div>
        </div>
    </div>
  </section>

  <section class="content mb-4">
    <!-- Humas Team -->
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2 appear-animation" data-appear-animation="fadeIn"
								data-appear-animation-delay="500">
                    
                    <h2 class="mb-2 font-weight-bold">HUMAS</h2>
                    <p class="text-muted para-desc mx-auto mb-0">Relasi dan Harmonisasi Hubungan</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
          {{-- Humas pertama --}}
          <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 appear-animation" data-appear-animation="bounceIn"
            data-appear-animation-delay="500">
            <div class="team text-center rounded position-relative overflow-hidden">
              <div class="position-relative overflow-hidden m-2">    
                <img width="250px" src="img/intan.jpg" class="img-fluid" alt="">
                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
                  <li class="list-inline-item">
                    <a href="https://instagram.com/intanseftiyanicw?igshid=5t9zafv3yu3u" class="rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                      </svg>
                    </a>
                  </li>  

                  <li class="list-inline-item">
                    <a href="https://api.whatsapp.com/send?phone=6282145400125" class="rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-instagram fea icon-sm fea-social p-1" width="24" height="24" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns:xlink="http://www.w3.org/1999/xlink" >
                        <path data-name="layer2" d="M30.287 2.029A29.769 29.769 0 0 0 5.223 45.266L2.064 60.6a1.158 1.158 0 0 0 1.4 1.361L18.492 58.4A29.76 29.76 0 1 0 30.287 2.029zm17.931 46.2" fill="none" stroke="#202020" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round"></path>
                        <path data-name="layer1" d="M46.184 38.205l-5.765-1.655a2.149 2.149 0 0 0-2.126.561l-1.41 1.436a2.1 2.1 0 0 1-2.283.482c-2.727-1.1-8.463-6.2-9.927-8.754a2.1 2.1 0 0 1 .166-2.328l1.23-1.592a2.148 2.148 0 0 0 .265-2.183l-2.424-5.485a2.149 2.149 0 0 0-3.356-.769c-1.609 1.361-3.517 3.428-3.749 5.719-.409 4.039 1.323 9.13 7.872 15.242 7.566 7.063 13.626 8 17.571 7.04 2.238-.542 4.026-2.714 5.154-4.493a2.15 2.15 0 0 0-1.218-3.221z" stroke="#202020" ></path>
                      </svg>
                    </a>
                  </li> 

                  <li class="list-inline-item">
                    <a href="https://line.me/ti/p/~intanseftiyani12" class="rounded">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="feather feather-instagram fea icon-sm fea-social p-1" width="24" height="24" viewBox="0 0 236.271 236.271"  role="img" stroke="currentColor"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round" xml:space="preserve">
                        <g>
                          <path d="M118.136,5.265C52.996,5.265,0,49.399,0,103.647c0,52.985,46.003,95.193,107.008,98.178 c4.137,0.189,7.655-2.987,7.858-7.124c0.202-4.137-2.987-7.655-7.125-7.858C54.87,184.256,15,148.49,15,103.647 c0-45.977,46.267-83.383,103.136-83.383s103.136,37.405,103.136,83.383c0,42.787-54.628,89.229-108.59,112.994 c-3.791,1.67-5.511,6.096-3.841,9.886c1.236,2.808,3.985,4.479,6.868,4.479c1.01,0,2.036-0.205,3.019-0.638 c28.936-12.743,57.466-31.556,78.277-51.616c25.689-24.764,39.268-50.734,39.268-75.105 C236.271,49.399,183.276,5.265,118.136,5.265z"  fill="#6f6f6f"  stroke="#b7b7b7"/>
                          <path d="M60.082,79.668c-1.19-1.485-2.841-2.276-4.765-2.276c-1.923,0-3.564,0.806-4.747,2.331 c-1.084,1.409-1.609,3.338-1.609,5.902v39.135c0,2.742,0.563,4.741,1.723,6.111c1.232,1.457,3.14,2.196,5.67,2.196h21.267 c2.016,0,3.609-0.595,4.735-1.77c1.114-1.134,1.687-2.626,1.687-4.416c0-1.732-0.587-3.263-1.698-4.427 c-1.119-1.21-2.715-1.835-4.725-1.835H61.758V85.624C61.758,83.006,61.209,81.058,60.082,79.668z" stroke="#b7b7b7"/>
                          <path d="M93.756,77.392c-1.904,0-3.539,0.803-4.729,2.324c-1.083,1.386-1.633,3.374-1.633,5.909v40.041 c0,2.584,0.547,4.528,1.671,5.941c1.181,1.52,2.808,2.331,4.69,2.331c1.922,0,3.575-0.799,4.778-2.312 c1.114-1.413,1.677-3.417,1.677-5.961V85.624c0-2.561-0.567-4.563-1.685-5.951C97.314,78.179,95.666,77.392,93.756,77.392z" stroke="#b7b7b7"/>
                          <path d="M119.625,103.962l12.767,22.89c0.01,0.018,0.02,0.035,0.03,0.053c0.301,0.503,0.603,1.001,0.902,1.493l0.537,0.886 c0.602,0.973,1.195,1.749,1.824,2.392c0.744,0.768,1.535,1.327,2.411,1.704c0.934,0.381,1.881,0.559,2.93,0.559 c2.518,0,6.742-1.129,6.742-8.694v-39.96c0-2.431-0.483-4.268-1.479-5.615c-1.111-1.492-2.703-2.277-4.608-2.277c-1.858,0-3.424,0.786-4.53,2.272c-0.997,1.375-1.475,3.207-1.475,5.621v22.619l-13.188-23.328l-0.678-1.245l-0.687-1.262 c-0.559-0.988-1.057-1.729-1.54-2.297c-0.574-0.703-1.27-1.275-2.069-1.7c-0.833-0.454-1.811-0.68-2.969-0.68c-1.463,0-2.821,0.469-4.034,1.395c-1.171,0.875-2.03,2.038-2.539,3.444c-0.006,0.018-0.012,0.035-0.018,0.053c-0.384,1.161-0.571,2.651-0.571,4.555v39.213c0,2.32,0.502,4.189,1.491,5.556c0.01,0.014,0.02,0.027,0.03,0.04c1.144,1.499,2.733,2.29,4.597,2.29c1.835,0,3.409-0.783,4.551-2.265c1.044-1.361,1.572-3.251,1.572-5.622V103.962z" stroke="#b7b7b7"/>
                          <path d="M185.284,90.181c1.958,0,3.498-0.572,4.575-1.7c1.046-1.1,1.575-2.538,1.575-4.276c0-1.726-0.532-3.154-1.58-4.245c-1.059-1.127-2.601-1.707-4.57-1.707h-23.262c-1.556,0-2.903,0.294-4.005,0.875c-1.221,0.659-2.117,1.686-2.68,3.061c-0.478,1.162-0.71,2.595-0.71,4.378v38.193c0,2.745,0.57,4.746,1.743,6.118c1.215,1.448,3.121,2.189,5.653,2.189h23.941c1.96,0,3.507-0.591,4.601-1.757c1.051-1.136,1.579-2.575,1.579-4.288c0-1.769-0.528-3.237-1.568-4.363c-1.122-1.18-2.667-1.767-4.611-1.767h-18.524v-10.467h16.262c1.962,0,3.482-0.586,4.52-1.743c0.989-1.111,1.488-2.509,1.488-4.162c0-1.686-0.518-3.086-1.538-4.163c-1.013-1.109-2.525-1.685-4.469-1.685h-16.262v-8.493H185.284z" stroke="#b7b7b7"/>
                        </g>
                      </svg>
                    </a>
                  </li>
                </ul><!--end icon-->
              </div>
              <div class="content p-4 bg-light-dark">
                <h6 class="mb-0 font-weight-bold">Intan</h6>
              </div>
            </div>
          </div><!--end col-->

          {{-- Humas kedua --}}
          <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="500">
            <div class="team text-center rounded position-relative overflow-hidden">
              <div class="position-relative overflow-hidden m-2">    
                <img width="250px" src="img/ryan.jpg" class="img-fluid" alt="">
                <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
                  {{-- Instagram --}}
                  <li class="list-inline-item"><a href="https://instagram.com/ryanadinugrahaa?igshid=15730wkwnomm7" class="rounded"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a></li>  
                  {{-- Whatsapp --}}
                  <li class="list-inline-item">
                    <a href="https://api.whatsapp.com/send?phone=62881037191351" class="rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-instagram fea icon-sm fea-social p-1" width="24" height="24" viewBox="0 0 64 64" aria-labelledby="title" aria-describedby="desc" role="img" stroke="currentColor" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns:xlink="http://www.w3.org/1999/xlink" >
                        <path data-name="layer2" d="M30.287 2.029A29.769 29.769 0 0 0 5.223 45.266L2.064 60.6a1.158 1.158 0 0 0 1.4 1.361L18.492 58.4A29.76 29.76 0 1 0 30.287 2.029zm17.931 46.2" fill="none" stroke="#202020" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round"></path>
 							          <path data-name="layer1" d="M46.184 38.205l-5.765-1.655a2.149 2.149 0 0 0-2.126.561l-1.41 1.436a2.1 2.1 0 0 1-2.283.482c-2.727-1.1-8.463-6.2-9.927-8.754a2.1 2.1 0 0 1 .166-2.328l1.23-1.592a2.148 2.148 0 0 0 .265-2.183l-2.424-5.485a2.149 2.149 0 0 0-3.356-.769c-1.609 1.361-3.517 3.428-3.749 5.719-.409 4.039 1.323 9.13 7.872 15.242 7.566 7.063 13.626 8 17.571 7.04 2.238-.542 4.026-2.714 5.154-4.493a2.15 2.15 0 0 0-1.218-3.221z" stroke="#202020" ></path>
							        </svg>
                    </a>
                  </li> 
                  {{-- Line --}}
							    <li class="list-inline-item">
                    <a href="https://line.me/ti/p/~ryan_adii" class="rounded">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="feather feather-instagram fea icon-sm fea-social p-1" width="24" height="24" viewBox="0 0 236.271 236.271"  role="img" stroke="currentColor"  stroke-width="10" stroke-linecap="round" stroke-linejoin="round" xml:space="preserve">
                        <g>
                          <path d="M118.136,5.265C52.996,5.265,0,49.399,0,103.647c0,52.985,46.003,95.193,107.008,98.178c4.137,0.189,7.655-2.987,7.858-7.124c0.202-4.137-2.987-7.655-7.125-7.858C54.87,184.256,15,148.49,15,103.647c0-45.977,46.267-83.383,103.136-83.383s103.136,37.405,103.136,83.383c0,42.787-54.628,89.229-108.59,112.994c-3.791,1.67-5.511,6.096-3.841,9.886c1.236,2.808,3.985,4.479,6.868,4.479c1.01,0,2.036-0.205,3.019-0.638c28.936-12.743,57.466-31.556,78.277-51.616c25.689-24.764,39.268-50.734,39.268-75.105C236.271,49.399,183.276,5.265,118.136,5.265z"   fill="#6f6f6f"  stroke="#b7b7b7"/>
                          <path d="M60.082,79.668c-1.19-1.485-2.841-2.276-4.765-2.276c-1.923,0-3.564,0.806-4.747,2.331c-1.084,1.409-1.609,3.338-1.609,5.902v39.135c0,2.742,0.563,4.741,1.723,6.111c1.232,1.457,3.14,2.196,5.67,2.196h21.267c2.016,0,3.609-0.595,4.735-1.77c1.114-1.134,1.687-2.626,1.687-4.416c0-1.732-0.587-3.263-1.698-4.427c-1.119-1.21-2.715-1.835-4.725-1.835H61.758V85.624C61.758,83.006,61.209,81.058,60.082,79.668z" stroke="#b7b7b7"/>
                          <path d="M93.756,77.392c-1.904,0-3.539,0.803-4.729,2.324c-1.083,1.386-1.633,3.374-1.633,5.909v40.041c0,2.584,0.547,4.528,1.671,5.941c1.181,1.52,2.808,2.331,4.69,2.331c1.922,0,3.575-0.799,4.778-2.312c1.114-1.413,1.677-3.417,1.677-5.961V85.624c0-2.561-0.567-4.563-1.685-5.951C97.314,78.179,95.666,77.392,93.756,77.392z" stroke="#b7b7b7"/>
                          <path d="M119.625,103.962l12.767,22.89c0.01,0.018,0.02,0.035,0.03,0.053c0.301,0.503,0.603,1.001,0.902,1.493l0.537,0.886c0.602,0.973,1.195,1.749,1.824,2.392c0.744,0.768,1.535,1.327,2.411,1.704c0.934,0.381,1.881,0.559,2.93,0.559c2.518,0,6.742-1.129,6.742-8.694v-39.96c0-2.431-0.483-4.268-1.479-5.615c-1.111-1.492-2.703-2.277-4.608-2.277c-1.858,0-3.424,0.786-4.53,2.272c-0.997,1.375-1.475,3.207-1.475,5.621v22.619l-13.188-23.328l-0.678-1.245l-0.687-1.262c-0.559-0.988-1.057-1.729-1.54-2.297c-0.574-0.703-1.27-1.275-2.069-1.7c-0.833-0.454-1.811-0.68-2.969-0.68c-1.463,0-2.821,0.469-4.034,1.395c-1.171,0.875-2.03,2.038-2.539,3.444c-0.006,0.018-0.012,0.035-0.018,0.053c-0.384,1.161-0.571,2.651-0.571,4.555v39.213c0,2.32,0.502,4.189,1.491,5.556c0.01,0.014,0.02,0.027,0.03,0.04c1.144,1.499,2.733,2.29,4.597,2.29c1.835,0,3.409-0.783,4.551-2.265c1.044-1.361,1.572-3.251,1.572-5.622V103.962z" stroke="#b7b7b7"/>
                          <path d="M185.284,90.181c1.958,0,3.498-0.572,4.575-1.7c1.046-1.1,1.575-2.538,1.575-4.276c0-1.726-0.532-3.154-1.58-4.245c-1.059-1.127-2.601-1.707-4.57-1.707h-23.262c-1.556,0-2.903,0.294-4.005,0.875c-1.221,0.659-2.117,1.686-2.68,3.061c-0.478,1.162-0.71,2.595-0.71,4.378v38.193c0,2.745,0.57,4.746,1.743,6.118c1.215,1.448,3.121,2.189,5.653,2.189h23.941c1.96,0,3.507-0.591,4.601-1.757c1.051-1.136,1.579-2.575,1.579-4.288c0-1.769-0.528-3.237-1.568-4.363c-1.122-1.18-2.667-1.767-4.611-1.767h-18.524v-10.467h16.262c1.962,0,3.482-0.586,4.52-1.743c0.989-1.111,1.488-2.509,1.488-4.162c0-1.686-0.518-3.086-1.538-4.163c-1.013-1.109-2.525-1.685-4.469-1.685h-16.262v-8.493H185.284z" stroke="#b7b7b7"/>
                        </g>
                      </svg>
                    </a>
                  </li>  
                </ul><!--end icon-->
              </div>
              <div class="content p-4 bg-light-dark">
                <h6 class="mb-0 font-weight-bold">Ketut Justin Brian</h6>
            </div>
          </div>
        </div><!--end col-->
      </div>
    </div>
    {{-- End Humas Team --}}

    <!-- Developer Team -->
    <div class="container mt-100 mt-60">
      <div class="row justify-content-center">
          <div class="col-12">
              <div class="section-title text-center mb-4 pb-2 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">  
                <h2 class="mb-2 font-weight-bold">WEB DEVELOPER</h2>
                <p class="text-muted para-desc mx-auto mb-0">Pembuatan Dan Pemeliharaan Website Student Day 2021 Universitas Udayana</p>
              </div>
          </div><!--end col-->
      </div><!--end row-->
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mx-auto mt-4 pt-2 appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="500">
          <div class="team text-center rounded position-relative overflow-hidden">
            <div class="position-relative overflow-hidden m-2">    
              <img width="250px" src="img/visto.jpg" class="img-fluid" alt="">
              <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
                <li class="list-inline-item">
                  <a href="https://instagram.com/vistorichardo?igshid=1kgypukkty3tq" class="rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                  </a>
                </li>  
              </ul><!--end icon-->
            </div>
            <div class="content p-4 bg-light-dark">
              <h6 class="mb-0 font-weight-bold">Visto Richardo</h6>
            </div>
          </div>
        </div><!--end col-->
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="500">
          <div class="team text-center rounded position-relative overflow-hidden">
            <div class="position-relative overflow-hidden m-2">    
              <img width="250px" src="img/ngurah.png" class="img-fluid" alt="">
              <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/ngurahdinataa/" class="rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                  </a>
                </li>  
              </ul><!--end icon-->
            </div>
            <div class="content p-4 bg-light-dark">
              <h6 class="mb-0 font-weight-bold">Ngurah Dinata</h6>
            </div>
          </div>
        </div><!--end col-->

        <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="500">
          <div class="team text-center rounded position-relative overflow-hidden">
            <div class="position-relative overflow-hidden m-2">    
              <img width="250px" src="img/wahyu.jpg" class="img-fluid" alt="">
              <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
                <li class="list-inline-item">
                  <a href="https://www.instagram.com/mangwahyu19/" class="rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1">
                      <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                      <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                  </a>
                </li>  
              </ul><!--end icon-->
            </div>
            <div class="content p-4 bg-light-dark">
              <h6 class="mb-0 font-weight-bold">Wahyu Hadi</h6>
          </div>
        </div>
      </div><!--end col-->

      <div class="col-lg-4 col-md-4 col-12 mt-4 pt-2 appear-animation" data-appear-animation="bounceIn" data-appear-animation-delay="500">
        <div class="team text-center rounded position-relative overflow-hidden">
          <div class="position-relative overflow-hidden m-2">    
            <img width="250px" src="img/jodie.jpg" class="img-fluid" alt="">
            <ul class="list-unstyled team-social social-icon social mb-0 bg-white pt-2">
              <li class="list-inline-item">
                <a href="https://instagram.com/sanchiajodie?igshid=1kmq2xj6f4hco" class="rounded">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social p-1">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                  </svg>
                </a>
              </li>  
            </ul><!--end icon-->
          </div>
          <div class="content p-4 bg-light-dark">
            <h6 class="mb-0 font-weight-bold">Jodie Mantra</h6>
          </div>
        </div>
      </div><!--end col-->
    </div>
  <!-- End Developer Team -->
  </section>
@endsection


 


  



