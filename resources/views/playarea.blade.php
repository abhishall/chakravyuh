@extends('layouts.master')
@section('main')

<div class="w-full mx-auto rounded text-black lg:text-base text-sm text-primary">

  <div class="flex md:p-2">


<!-- playarea container -->
    <div id="playarea" class="flex flex-col rounded lg:py-4 lg:px-4 md:m-2 p-2 lg:w-3/4 w-full "
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/maze.svg'),url('images/playground-bg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,cover,cover;
    background-blend-mode : multiply;
    ">

<!-- heading -->
      <div class="flex justify-center relative">

        <h1 class="lg:text-4xl md:text-3xl text-2xl font-display text-shadow-2">PLAYGROUND</h1>

        <div class="md:hidden absolute right-0 self-center mx-1 playground-toggle-menu">

          <dropdown>
            <template v-slot:active>
              <svg class="inline h-5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
                <polygon points="214.96,199 214.96,181.32 198.96,181.32 198.96,199 181.28,199 181.28,215 198.96,215 198.96,232.68
                214.96,232.68 214.96,215 232.64,215 232.64,199" fill="#ffdc34"/>
                <path d="M391.6,188.44c-8.962-87.729-78.346-157.08-166.08-166l3.28-22.4h-43.6l3.28,22.4c-87.734,8.92-157.118,78.271-166.08,166
                L0,185.16v43.6l22.4-3.28c8.92,87.734,78.271,157.118,166,166.08l-3.28,22.4h43.6l-3.28-22.4
                c87.734-8.92,157.118-78.271,166.08-166l22.4,3.28l0.08-43.68L391.6,188.44z M222.96,38.36
                c80.795,7.771,144.772,71.645,152.695,152.404L302.48,201.4c-2.978-48.374-41.546-86.942-89.92-89.92L222.96,38.36z M190.96,38.36
                l10.64,73.12c-48.468,2.861-87.169,41.46-90.16,89.92L38.32,191C46.134,110.157,110.117,46.174,190.96,38.36z M190.96,375.72
                C110.09,367.9,46.098,303.875,38.32,223l73.12-10.64c2.861,48.468,41.46,87.169,89.92,90.16L190.96,375.72z M206.96,264.04
                L203.68,287c-41.657-1.676-75.044-35.063-76.72-76.72L150,207l-23.04-3.28c1.676-41.657,35.063-75.044,76.72-76.72l3.28,23.04
                l3.28-23.04c41.657,1.676,75.044,35.062,76.72,76.72L264,207l22.96,3.28c-1.676,41.657-35.063,75.044-76.72,76.72L206.96,264.04z
                M222.96,375.72l-10.4-73.2c48.374-2.978,86.942-41.546,89.92-89.92l73.2,10.4C367.895,303.902,303.862,367.936,222.96,375.72z" fill="#ffdc34"/>
              </svg>
            </template>
            <template v-slot:unactive>
              <svg class="h-2 inline" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"	viewBox="0 0 612 612" xml:space="preserve">
                <polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397
                306,341.411 576.521,611.397 612,575.997 341.459,306.011 "  fill="#ffdc34"/>
              </svg>
            </template>
            <template v-slot:content>
              <ul class="p-2 pb-1 list-decimal w-64 max-h-12rem overflow-y-scroll bg-black text-xs text-left">
                <li class="mb-1 p-1 shadow-md bg-yellow-op1 flex ">
                  <svg class="inline w-6  mr-2" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  	 viewBox="0 0 428.487 428.487" xml:space="preserve">
                  		<path d="M423.367,209.127h-62.64c-2.8-76.881-64.479-138.56-141.36-141.36V5.127c0-2.828-2.292-5.12-5.12-5.12
                  			s-5.12,2.292-5.12,5.12v62.64c-76.881,2.8-138.56,64.479-141.36,141.36H5.127c-2.828-0.004-5.123,2.285-5.127,5.113
                  			c-0.004,2.828,2.285,5.123,5.113,5.127c0.005,0,0.009,0,0.014,0h62.64c2.8,76.881,64.479,138.56,141.36,141.36v62.64
                  			c0.004,2.828,2.299,5.117,5.127,5.113c2.822-0.004,5.109-2.291,5.113-5.113v-62.64c76.881-2.8,138.56-64.479,141.36-141.36h62.64
                  			c2.828,0,5.12-2.292,5.12-5.12S426.195,209.127,423.367,209.127z M209.127,78.247v48c-44.682,2.532-80.348,38.198-82.88,82.88h-48
                  			C81.146,138.079,138.079,81.146,209.127,78.247z M209.127,350.247c-71.048-2.898-127.982-59.832-130.88-130.88h48
                  			c2.532,44.682,38.198,80.348,82.88,82.88V350.247z M214.327,249.127c-2.828,0-5.12,2.292-5.12,5.12v37.68
                  			c-38.903-2.598-69.882-33.577-72.48-72.48h37.52c2.828,0,5.12-2.292,5.12-5.12s-2.292-5.12-5.12-5.12h-37.52
                  			c2.598-38.903,33.577-69.882,72.48-72.48v37.52c0.004,2.828,2.299,5.117,5.127,5.113c2.822-0.004,5.109-2.291,5.113-5.113v-37.52
                  			c38.903,2.598,69.882,33.577,72.48,72.48h-37.68c-2.828-0.004-5.123,2.285-5.127,5.113c-0.004,2.828,2.285,5.123,5.113,5.127
                  			c0.005,0,0.009,0,0.014,0v-0.08h37.68c-2.598,38.903-33.577,69.882-72.48,72.48v-37.6
                  			C219.447,251.419,217.155,249.127,214.327,249.127z M219.367,350.247v-48c44.682-2.532,80.348-38.198,82.88-82.88h48
                  			C347.349,290.415,290.415,347.349,219.367,350.247z M302.247,209.127c-2.532-44.682-38.198-80.348-82.88-82.88v-48
                  			c71.048,2.898,127.982,59.832,130.88,130.88H302.247z"/>
                  </svg>
                  <span class="inline">Lskdf khakdf  sldhf a hkdfh ahdf akhd fakn ayiureh afdhf hdf</span></li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf akhd fakn ayiu reh afdhf hdf</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">Lskdf khakdf  sldhf a hkdfh ahdf a khdfakn ayiureh afdhf hdf</li>
                <li class="mb-1 p-1 shadow-md bg-yellow-op1">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
                <li class="flex flex-col bg-black-op2 rounded-sm text-xs text-center p-1 text-shadow-1">
                  <p>for bonus hints keep track of <a href="#" class=" hover:text-white font-bold">SANKALAN facebook page</a> </p>
                </li>
              </ul>
            </template>
          </dropdown>
        </div>

      </div>

<!-- main -->
      <div class="flex md:flex-row flex-col">
        <!-- left container -->
        <div class="md:w-3/4 w-full flex flex-col md:my-4 my-2 md:mx-1 p-1 bg-black-op2 rounded-sm" >

          <div id="scores" class="md:hidden flex p-1 justify-between text-sm" >
            <div class="p-1">
              <svg class="inline-block h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              	 viewBox="0 0 512 512" xml:space="preserve" fill="#ffdc34">
              		<path d="M446.691,407.852h-5.859V123.174c0-15.295-10.241-29.015-24.905-33.365L118.096,1.463
              			C107.463-1.69,96.269,0.305,87.381,6.939c-8.887,6.634-13.984,16.799-13.984,27.889v373.024h-8.089
              			c-22.092,0-40.065,17.974-40.065,40.065v45.924c0,10.013,8.146,18.16,18.16,18.16h425.194c10.013,0,18.16-8.146,18.16-18.16
              			v-45.924C486.756,425.825,468.782,407.852,446.691,407.852z M103.423,34.828c0-2.084,1.202-3.292,1.919-3.827
              			s2.218-1.343,4.215-0.751l297.831,88.347c2.012,0.596,3.417,2.479,3.417,4.578v284.677H103.423V34.828z M55.269,481.974v-34.056
              			c0-5.536,4.504-10.039,10.039-10.039H446.69c5.536,0,10.039,4.504,10.039,10.039v34.056H55.269z"/>
              		<path d="M349.977,220.005c-2.077-6.391-7.498-10.962-14.151-11.929l-44.397-6.451l-19.855-40.232
              			c-2.975-6.026-8.997-9.77-15.718-9.77c-6.721,0-12.743,3.744-15.719,9.77l-19.855,40.232l-44.399,6.452
              			c-6.651,0.967-12.072,5.539-14.148,11.929c-2.077,6.392-0.376,13.276,4.436,17.968l32.127,31.316l-7.585,44.219
              			c-1.136,6.625,1.536,13.193,6.973,17.143c5.438,3.95,12.511,4.462,18.459,1.334l39.711-20.877l39.711,20.877
              			c2.587,1.36,5.387,2.032,8.173,2.032c3.619,0,7.214-1.134,10.286-3.367c5.438-3.95,8.109-10.519,6.973-17.144l-7.585-44.218
              			l32.127-31.316C350.355,233.282,352.054,226.397,349.977,220.005z M287.752,252.372c-4.132,4.026-6.017,9.826-5.043,15.516
              			l4.415,25.735l-23.113-12.151c-5.107-2.685-11.206-2.684-16.312,0l-23.112,12.151l4.415-25.739
              			c0.974-5.687-0.912-11.487-5.041-15.511l-18.698-18.226l25.844-3.755c5.707-0.832,10.638-4.415,13.193-9.588l11.556-23.415
              			l11.557,23.417c2.553,5.172,7.486,8.756,13.196,9.587l25.84,3.754L287.752,252.372z"/>
              </svg>
              <span class="text-shadow-1">1233</span>
            </div>
            <div class="p-1">
              <svg class="inline h-4" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                <path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                C382.214,29.184,383.356,41.795,391.84,48.87z"/>
                <path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                C41.642,96.349,47.328,98.797,53.057,98.797z"/>
                <path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
                <path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                C363.348,175.142,362.021,162.548,353.434,155.601z"/>
              </svg>
              <span class="text-shadow-1">+0.12s</span>
            </div>
          </div>

          <!-- Level -->
          <div class="md:text-2xl text-lg my-2 font-display text-shadow-2">
            <span>LEVEL</span>
            <span class="font-semi-bold">{{ Auth::user()->level }}</span>
          </div>

          <!-- Question -->
          <div class="question-container w-full h-24rem flex my-2 pb-4 justify-center lg:shadow-lg shadow-md bg-center bg-cover bg-no-repeat" style="">

            @if ($question->attachment->type == 'image')
                <img class="md:h-full md:w-auto h-auto w-full" src="/question_attachments/{{ $question->attachment->id }}">
            @elseif($question->attachment->type == 'video')
                <video class="md:h-full md:w-auto h-auto w-full" controls>
                  <source src = "/question_attachments/{{ $question->attachment->id }}" type="video/mp4">
                </video>
            @elseif($question->attachment->type == 'audio')
                <audio class="self-center" controls>
                  <source src = "/question_attachments/{{ $question->attachment->id }}" type="audio/mpeg">
                </audio>
            @else
                <div>
                    <p>Question will appear here</p>
                </div>
            @endif

          </div>

          <!-- answer input -->
          <div class="answer lg:mb-4 my-2 text-black">
            <form class="" action="/playarea/{{ $question->id }}/submit" method="post">
              @csrf
              <input class="md:w-1/2 w-3/4 md:h-12 py-2 px-4 md:text-sm text-xs rounded-sm text-yellow-900 bg-yellow-100 shadow-md" type="text" name="answer" placeholder="Enter your answer here">
              <button class=" md:p-2 p-2 md:text-base text-xs font-bold bg-primary rounded-sm shadow-md hover:bg-yellow-500" type="submit">Submit</button>
            </form>
          </div>

          <!-- @if (Session::has('status'))
              <p>
                  {{ Session::get('status') }}
              </p>
          @endif -->

        </div>

        <!-- right container -->
        <div class="md:w-1/4 w-full md:flex hidden flex-col md:my-4 my-2 md:mx-1">

          <!-- Score container -->
          <div id="scores" class="flex h-auto mb-2 p-1 justify-center md:text-sm bg-black-op2 rounded-sm" >
            <div class="w-1/2 p-2 border-r border-primary">
              <p class="mb-1">
                <svg class="inline-block h-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                	 viewBox="0 0 512 512" xml:space="preserve" fill="#ffdc34">
                		<path d="M446.691,407.852h-5.859V123.174c0-15.295-10.241-29.015-24.905-33.365L118.096,1.463
                			C107.463-1.69,96.269,0.305,87.381,6.939c-8.887,6.634-13.984,16.799-13.984,27.889v373.024h-8.089
                			c-22.092,0-40.065,17.974-40.065,40.065v45.924c0,10.013,8.146,18.16,18.16,18.16h425.194c10.013,0,18.16-8.146,18.16-18.16
                			v-45.924C486.756,425.825,468.782,407.852,446.691,407.852z M103.423,34.828c0-2.084,1.202-3.292,1.919-3.827
                			s2.218-1.343,4.215-0.751l297.831,88.347c2.012,0.596,3.417,2.479,3.417,4.578v284.677H103.423V34.828z M55.269,481.974v-34.056
                			c0-5.536,4.504-10.039,10.039-10.039H446.69c5.536,0,10.039,4.504,10.039,10.039v34.056H55.269z"/>
                		<path d="M349.977,220.005c-2.077-6.391-7.498-10.962-14.151-11.929l-44.397-6.451l-19.855-40.232
                			c-2.975-6.026-8.997-9.77-15.718-9.77c-6.721,0-12.743,3.744-15.719,9.77l-19.855,40.232l-44.399,6.452
                			c-6.651,0.967-12.072,5.539-14.148,11.929c-2.077,6.392-0.376,13.276,4.436,17.968l32.127,31.316l-7.585,44.219
                			c-1.136,6.625,1.536,13.193,6.973,17.143c5.438,3.95,12.511,4.462,18.459,1.334l39.711-20.877l39.711,20.877
                			c2.587,1.36,5.387,2.032,8.173,2.032c3.619,0,7.214-1.134,10.286-3.367c5.438-3.95,8.109-10.519,6.973-17.144l-7.585-44.218
                			l32.127-31.316C350.355,233.282,352.054,226.397,349.977,220.005z M287.752,252.372c-4.132,4.026-6.017,9.826-5.043,15.516
                			l4.415,25.735l-23.113-12.151c-5.107-2.685-11.206-2.684-16.312,0l-23.112,12.151l4.415-25.739
                			c0.974-5.687-0.912-11.487-5.041-15.511l-18.698-18.226l25.844-3.755c5.707-0.832,10.638-4.415,13.193-9.588l11.556-23.415
                			l11.557,23.417c2.553,5.172,7.486,8.756,13.196,9.587l25.84,3.754L287.752,252.372z"/>
                </svg>
                Score
              </p>
              <span class="md:text-2xl text-xl text-shadow-1">1233</span>
            </div>
            <div class="w-1/2 p-2">
              <p class="mb-1">
                <svg class="inline h-4" fill="#ffdc34" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                  <path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                  c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                  C382.214,29.184,383.356,41.795,391.84,48.87z"/>
                  <path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                  c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                  C41.642,96.349,47.328,98.797,53.057,98.797z"/>
                  <path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                  c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                  C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                  c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                  s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                  c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
                  <path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                  c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                  C363.348,175.142,362.021,162.548,353.434,155.601z"/>
                </svg>
                SplitTime
              </p>
              <span class="md:text-2xl text-xl text-shadow-1">+0.12s</span>
            </div>
          </div>

          <!-- hints container -->
          <div id="hints" class="flex flex-col h-auto mb-2 pb-2 bg-black-op2 rounded-sm md:max-h-20rem md:overflow-y-scroll scrollbar-style md:text-sm text-xs text-left">
            <p class="self-center my-4 font-display text-base">
              <svg class="inline lg:h-8 md:h-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 414 414" xml:space="preserve">
                <polygon points="214.96,199 214.96,181.32 198.96,181.32 198.96,199 181.28,199 181.28,215 198.96,215 198.96,232.68
                214.96,232.68 214.96,215 232.64,215 232.64,199" fill="#ffdc34"/>
                <path d="M391.6,188.44c-8.962-87.729-78.346-157.08-166.08-166l3.28-22.4h-43.6l3.28,22.4c-87.734,8.92-157.118,78.271-166.08,166
                L0,185.16v43.6l22.4-3.28c8.92,87.734,78.271,157.118,166,166.08l-3.28,22.4h43.6l-3.28-22.4
                c87.734-8.92,157.118-78.271,166.08-166l22.4,3.28l0.08-43.68L391.6,188.44z M222.96,38.36
                c80.795,7.771,144.772,71.645,152.695,152.404L302.48,201.4c-2.978-48.374-41.546-86.942-89.92-89.92L222.96,38.36z M190.96,38.36
                l10.64,73.12c-48.468,2.861-87.169,41.46-90.16,89.92L38.32,191C46.134,110.157,110.117,46.174,190.96,38.36z M190.96,375.72
                C110.09,367.9,46.098,303.875,38.32,223l73.12-10.64c2.861,48.468,41.46,87.169,89.92,90.16L190.96,375.72z M206.96,264.04
                L203.68,287c-41.657-1.676-75.044-35.063-76.72-76.72L150,207l-23.04-3.28c1.676-41.657,35.063-75.044,76.72-76.72l3.28,23.04
                l3.28-23.04c41.657,1.676,75.044,35.062,76.72,76.72L264,207l22.96,3.28c-1.676,41.657-35.063,75.044-76.72,76.72L206.96,264.04z
                M222.96,375.72l-10.4-73.2c48.374-2.978,86.942-41.546,89.92-89.92l73.2,10.4C367.895,303.902,303.862,367.936,222.96,375.72z" fill="#ffdc34"/>
              </svg><span class="inline p-1">HINTS</span>
            </p>
            <ul class="px-2">
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">Lskdf khakdf  sldhf a hkdfh ahdf akhdfakn ayiureh afdhf hdf</li>
              <li class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">jkusd f iu osidu kehbyf sduf e iydf eio hdfjyh</li>
            </ul>

          </div>

          <!-- bonus hints container-->
          <div class="flex flex-col bg-black-op2 rounded-sm text-xs p-4 text-shadow-1">
            <p>for bonus hints keep track of <a href="#" class="text-sm hover:text-white font-bold">SANKALAN facebook page</a> </p>
          </div>
          <div class="md:hidden">
            <a href="#" class=" text-center">
              <svg class="inline h-4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               viewBox="0 0 292.362 292.361" xml:space="preserve">
              	<path d="M286.935,197.287L159.028,69.381c-3.613-3.617-7.895-5.424-12.847-5.424s-9.233,1.807-12.85,5.424L5.424,197.287
              		C1.807,200.904,0,205.186,0,210.134s1.807,9.233,5.424,12.847c3.621,3.617,7.902,5.425,12.85,5.425h255.813
              		c4.949,0,9.233-1.808,12.848-5.425c3.613-3.613,5.427-7.898,5.427-12.847S290.548,200.904,286.935,197.287z" fill="#ffdc34"/>
              </svg>
            </a>

          </div>

        </div>

      </div>
    </div>

<!-- Leaderboard container -->
    <div class="rounded m-2 lg:w-1/4 lg:flex flex-col hidden p-2 xl:p-4 bg-center"
    style="
    background:linear-gradient(#000,rgba(255,180,0,1),#000),url('images/leaderboardBG.svg'),url('images/leaderboardbg.png');
    background-repeat: no-repeat,no-repeat;
    background-position: center,center,bottom;
    background-size:cover,contain,cover;
    background-blend-mode : multiply;">

      @include('partials.leaderboard')
    </div>

  </div>

</div>
@endsection
