<div
  class="flex flex-col-reverse place-content-between px-5 pt-8 md:px-24 md:h-[100vh] md:flex-row md:justify-evenly md:pt-0 {{ $bgColor }}">
  <div 
    class="flex h-auto md:relative md:me-7 md:w-[45%] md:overflow-hidden" 
      data-aos="fade-right">
    <img 
      class="mx-auto mt-5 md:pt-0 w-[80%] md:absolute md:top-10 md:h-auto md:w-full"
      src="{{ $photo }}"
      alt="{{ $photoAlt }}"
    />
  </div>


  <div
    class="text-center md:my-auto md:mt-auto md:w-[55%] md:text-start"
    data-aos="fade-right">
    <h1 class="md:br-normal text-3xl font-bold md:mb-2 md:mt-0 md:text-5xl">
      {{ $title }}
    </h1>

    <h2
      class="font-semibold md:mb-5 md:text-3xl">
      {{ $name }}
    </h2>

    <hr 
      class="mx-auto my-3 h-1.5 w-28 rounded border-0 md:mx-0 bg-black"
    />

    <p 
      class="md:mt-4 text-base md:text-xl">
      {{ $text }}
    </p>
  </div>
</div>